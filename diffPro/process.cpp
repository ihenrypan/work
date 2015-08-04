#include "jsonDiff.h"
#include "process.h"
#include "util.h"
#include "conf.h"
#include "args.h"

using namespace std;

size_t writeDataCallback(void *ptr, size_t size, size_t nmemb, FILE *stream)
{
    size_t written;
    written = fwrite(ptr, size, nmemb, stream);
    return written;
}

// 线程函数
void *threadFunc(void *pName)
{
    char *pTmp = (char *)pName;
    char pFilename[MAX_NAME];

    sprintf(pFilename, "%s%s/%s", g_pConf->pDictPath, g_pArgs->pStrTimestamp, pTmp);

    FILE *pDictFile;
    if ((pDictFile = Fopen(pFilename, "r")) == NULL) {
        free(pName);
        exit(-1);
    }

    char strLine[MAX_LINE];
    unsigned iCurrentLine = 0;

    char strReqUrl[MAX_LINE];

    // curl init
    CURL *curl;
    curl = curl_easy_init();

    while (fgets(strLine, MAX_LINE, pDictFile) != NULL) {
        iCurrentLine++;
        for (int j = 0; j < 2; j++) {
// 为每一个query创建一个结果文件。name rule: ./res/timestamp/ online or offline /dict_i_iCurrentLine
            //sprintf(pFilename, "%s%s/%s/%s_%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  ON_OFF[j], pTmp, iCurrentLine);
            if (j == 0) {
                sprintf(pFilename, "%s%s/%s/%s.%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  "online", pTmp, iCurrentLine);
                strcpy(strReqUrl, g_pArgs->pOnlineEnv);
            } else {
                sprintf(pFilename, "%s%s/%s/%s.%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  "offline", pTmp, iCurrentLine);
                strcpy(strReqUrl, g_pArgs->pOfflineEnv);
            }
            FILE *pResFile;
            if ((pResFile = Fopen(pFilename, "wb")) == NULL) {
                exit(-1);
            }

            CURLcode res;
            strcat(strReqUrl, strLine);
//			printf("strReqUrl= %s\n",strReqUrl);
            curl_easy_setopt(curl, CURLOPT_URL, strReqUrl);
            curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writeDataCallback);
            curl_easy_setopt(curl, CURLOPT_WRITEDATA, pResFile);
            curl_easy_setopt(curl, CURLOPT_USERAGENT, "libcurl-agent/1.0");
            res = curl_easy_perform(curl);
            if (res != CURLE_OK) {
                ul_writelog(UL_LOG_FATAL, "curl_easy_perform() failed, error msg: %s\n", curl_easy_strerror(res));
            }
            Fclose(pResFile);
        }
    }
    curl_easy_cleanup(curl);

    Fclose(pDictFile);
    free(pName);

    return NULL;
}

int sendReqs()
{
    //进程数组
    pthread_t tid[g_pArgs->iThreadNum];

    // Must initialize libcurl before any threads are started
    curl_global_init(CURL_GLOBAL_ALL);

    int i;
    for (i = 0; i < g_pArgs->iThreadNum; i++) {
        char *pDictFileName = (char *)Malloc(MAX_NAME);	// 在线程函数中free
        sprintf(pDictFileName, "dict_%d", i);	// 词表文件前缀为dict_

        Pthread_create(&tid[i], NULL, threadFunc, (void *)pDictFileName);
    }

    // now wait for all threads to terminate
    for (i = 0; i < g_pArgs->iThreadNum; i++) {
        Pthread_join(tid[i], NULL);
    }

    return 0;
}

//预处理数据结果文件,通过shell diff命令，获取存在差异的文件
int getDiffFiles()
{
    char pStrCmd[MAX_NAME];
//  diff res/201505311442/online/ res/201505311442/offline/ --brief | awk '{print $4}'| awk -F'/' '{print $NF}' > res/201505311442/diffResult.txt
// diffResult.txt中每行，为一个存在diff的文件名
    sprintf(pStrCmd, "diff %s%s/%s %s%s/%s --brief | awk '{print $4}'| awk -F'/' '{print $NF}' >%s%s/diffResult.txt", g_pConf->pResPath, g_pArgs->pStrTimestamp, "online", g_pConf->pResPath, g_pArgs->pStrTimestamp, "offline", g_pConf->pResPath, g_pArgs->pStrTimestamp);
    System(pStrCmd);

    return 0;
}

//将某目录下的所有pb文件转为json,读取配置文件中的接口
int transPbFilesToJson()
{
    //sed -n '2p' res/201505311442/diffResult2.txt 查看第2行
    char pStrTmp[MAX_NAME];
    sprintf(pStrTmp, "%s%s/%s", g_pConf->pResPath, g_pArgs->pStrTimestamp, "diffResult.txt");

    ifstream pDiffFile(pStrTmp);

    if (!pDiffFile) {
        ul_writelog(UL_LOG_FATAL, "Open diff file %s error!", pStrTmp);
        exit(-1);
    }

    char pStrCmd[MAX_NAME];
    char pUrl[MAX_LINE];
    size_t pointPos;
    string strLine;
    string dictFilename;
    string lineNo;

    while (getline(pDiffFile, strLine)) {
        // 首先，获取到存在diff的词表文件和行号，判断请求串是否为pb格式
        pointPos = strLine.find('.');
        dictFilename = strLine.substr(0, pointPos); // 数据返回的文件名：dict_0.1001，'.'字符后为行号
        lineNo = strLine.substr(pointPos + 1);

        ul_writelog(UL_LOG_DEBUG, "pDictFileName: %s, lineNo: %s", dictFilename.c_str(), lineNo.c_str());

        sprintf(pStrCmd, "sed -n %sp %s%s/%s", lineNo.c_str(), g_pConf->pDictPath, g_pArgs->pStrTimestamp, dictFilename.c_str());
        FILE *pTmpFile;
        if ((pTmpFile = popen(pStrCmd, "r")) != NULL) {
            while (fgets(pUrl, MAX_LINE, pTmpFile) != NULL) {
                ;	// nothing to do
            }
            pclose(pTmpFile);
        }

        // 判断是否为pb格式
        if (strstr(pUrl, g_pConf->pPbFlag) != NULL) {
            // TODO offline和online都需要json化
            ul_writelog(UL_LOG_DEBUG, "Pb format, url: %s", pUrl);
            // 是否需要将json化的数据重新放在一个文件中？
            // cd Target path && /home/map/php/bin/php ./pb2json.php filename outputFilename
            sprintf(pStrCmd, "cd %s%s/online && %s %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, g_pConf->pPb2Json, strLine.c_str(), strLine.c_str());
            System(pStrCmd);

            sprintf(pStrCmd, "cd %s%s/offline && %s %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, g_pConf->pPb2Json, strLine.c_str(), strLine.c_str());
            System(pStrCmd);
        } else {
            ul_writelog(UL_LOG_DEBUG, "Json format, url: %s", pUrl);
            // 如果非pb，将文件名重命名为xxx_json
            sprintf(pStrCmd, "cd %s%s/online && mv %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, strLine.c_str(), strLine.c_str());
            System(pStrCmd);

            sprintf(pStrCmd, "cd %s%s/offline && mv %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, strLine.c_str(), strLine.c_str());
            System(pStrCmd);
        }
    }
    pDiffFile.close();

    return 0;
}

// json diff. use lib
//对online和offline的文件进行jsondiff，
int diffJsonFiles()
{
    char pStrTmp[MAX_NAME];
    sprintf(pStrTmp, "%s%s/diffResult.txt", g_pConf->pResPath, g_pArgs->pStrTimestamp);

    ifstream pDiffFile(pStrTmp);

    if (!pDiffFile) {
        ul_writelog(UL_LOG_FATAL, "Open diff file %s error!", pStrTmp);
        exit(-1);
    }

    string strLine;

    while (getline(pDiffFile, strLine)) {
        char pOnlineFilename[MAX_NAME];
        char pOfflineFilename[MAX_NAME];
        char pDiffRetFilename[MAX_NAME];	// 在diff_ret目录中

        sprintf(pOnlineFilename, "%s%s/online/%s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, strLine.c_str());
        sprintf(pOfflineFilename, "%s%s/offline/%s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, strLine.c_str());
        sprintf(pDiffRetFilename, "%s%s/diff_ret/%s_diff_ret", g_pConf->pResPath, g_pArgs->pStrTimestamp, strLine.c_str());

        // 执行diff
        if (fileDiff(pOnlineFilename, pOfflineFilename, pDiffRetFilename) == 0) {
            ul_writelog(UL_LOG_NOTICE, "%s diff success!!!", pDiffRetFilename);
        } else {
            ul_writelog(UL_LOG_FATAL, "%s diff error!!!", pDiffRetFilename);
        }
    }

    pDiffFile.close();
    
    return 0;
}

//处理返回的结果文件，最终实现所有文件的diff
int dealResultFiles()
{
    // 过滤出存在差异的文件
    getDiffFiles();
    transPbFilesToJson();
    diffJsonFiles();

    return 0;
}

int putFilterToSet(const char* pFilename, set<string>& filterSet) {
    ifstream pFilterFile(pFilename);

    if (!pFilterFile) {
        ul_writelog(UL_LOG_FATAL, "Open filter conf file %s error!", pFilename);
        return -1;
    }
    
    string line;

    while (getline(pFilterFile, line)) {
        // 过滤掉空行和行首为#的行
        if (!line.empty() && line.at(0) != '#') {
            filterSet.insert(line);
        }
    }
    
    pFilterFile.close();

    return 0;
}

/**
 预处理每个存在差异的字段。
 1、将数组元素编号删除
 2、将差异值删除，只保留字段名称
 */
string preDealIgnoreStr(string ignoreStr)
{
    string strRet;
    size_t len = ignoreStr.length();
    if (len == 0) return "";

    bool isNumFlag = false;
    char ch;
    size_t i=0;

    while (i < len && (ch = ignoreStr.at(i)) != '|') {
        ++i;
        if(isdigit(ch)) {
            isNumFlag = true;
            continue;
        } else if(isNumFlag == true) {
            ++i; // skip "->" string
        } else {
           strRet.append(1, ch); 
        }
        isNumFlag = false;
    }

    return strRet;
}

/*
 *判断str是否匹配filter。
 只要filter字符串被完全匹配即可。
 匹配返回0，否则返回正负值。
 */
int isMatchFilter(const string& str, const string& filter) {
   size_t lenStr, lenFilter;
   lenStr = str.length();
   lenFilter = str.length();

   size_t i = 0;
   char ch1, ch2;
   while (i < lenFilter && i < lenStr) {
       ch1 = str.at(i);
       ch2 = filter.at(i);

       if (ch1 > ch2) {
           return 1;
       } else if (ch1 < ch2) {
           return -1;
       }
       ++i;
   }
   return 0;
}

// filter ignore field
// step1: read conf file contents to set
// step2: traversal diff files to list
int filterFields()
{
    set<string> filterSet;
    putFilterToSet(g_pConf->pConfFile, filterSet);

    list<string> diffFiles;
    string pDiffRetDir = string(g_pConf->pResPath) + g_pArgs->pStrTimestamp + string("/diff_ret");
    getFilesInDir(pDiffRetDir.c_str(), diffFiles);
   
    // Iterator diff files contents.
    ifstream file;
    string line;
    string diffStr;
    string diffRetFilename = string(g_pConf->pResPath) + g_pArgs->pStrTimestamp + "/finalDiffRet.txt";
    ofstream diffRetFile;

    diffRetFile.open(diffRetFilename.c_str());
    if (!diffRetFile.is_open())
    {
        ul_writelog(UL_LOG_FATAL, "Open diff file %s, error msg: %s.", diffRetFilename.c_str(), strerror(errno));
        return -1;
    }

    for (list<string>::iterator it=diffFiles.begin(); it != diffFiles.end(); it++) {
        file.open(it->c_str());
        if (!file.is_open()) {
            ul_writelog(UL_LOG_FATAL, "Open diff file %s, error msg: %s.", it->c_str(), strerror(errno));
            continue;
        }

        while (getline(file, line)) {
            if (line.empty())
                continue;
            diffStr = preDealIgnoreStr(line);
            int ret;
            bool isMatch = false;
            for (set<string>::iterator it = filterSet.begin(); it != filterSet.end(); ++it) {
                ret = isMatchFilter(diffStr, *it);
                if (ret > 0) {
                    continue;
                } else if (ret < 0) { // 未找到匹配串，将对应字符串写入一个文件中。
                    break;
                } else { // 找到对应过滤规则，不写入文件
                    isMatch = true;
                    break;
                }
            }
            if (isMatch == false) {
                diffRetFile << line << "\n"; // 写入到文件
            }
        }
        file.close();
    }
    diffRetFile.close();

    return 0;
}

