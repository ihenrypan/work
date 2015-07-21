#include "process.h"
#include "util.h"
#include "conf.h"
#include "args.h"
#include "jsonDiff.h"

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
    if ((pDictFile=Fopen(pFilename, "r"))==NULL) {
        free(pName);
        exit(-1);
    }
    
	char strLine[MAX_LINE];
	unsigned iCurrentLine=0;

	char strReqUrl[MAX_LINE];

	// curl init
	CURL *curl;
	curl = curl_easy_init();

    while(fgets(strLine, MAX_LINE, pDictFile) != NULL) {
		iCurrentLine++;
		for(int j=0; j<2; j++) {
// 为每一个query创建一个结果文件。name rule: ./res/timestamp/ online or offline /dict_i_iCurrentLine
			//sprintf(pFilename, "%s%s/%s/%s_%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  ON_OFF[j], pTmp, iCurrentLine);
			if (j == 0)
			{
				sprintf(pFilename, "%s%s/%s/%s.%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  "online", pTmp, iCurrentLine);
				strcpy(strReqUrl, g_pArgs->pOnlineEnv);
			}
			else
			{
				sprintf(pFilename, "%s%s/%s/%s.%d", g_pConf->pResPath, g_pArgs->pStrTimestamp,  "offline", pTmp, iCurrentLine);
				strcpy(strReqUrl, g_pArgs->pOfflineEnv);
			}
			FILE *pResFile;
			if ((pResFile=Fopen(pFilename, "wb"))==NULL)
        		exit(-1);

			CURLcode res;
			strcat(strReqUrl, strLine);
//			printf("strReqUrl= %s\n",strReqUrl);
			curl_easy_setopt(curl, CURLOPT_URL, strReqUrl);
			curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writeDataCallback);
			curl_easy_setopt(curl, CURLOPT_WRITEDATA, pResFile);
			curl_easy_setopt(curl, CURLOPT_USERAGENT, "libcurl-agent/1.0");
			res = curl_easy_perform(curl);
			if(res != CURLE_OK) {
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
    for(i=0; i< g_pArgs->iThreadNum; i++) {
        char *pDictFileName = (char *)Malloc(MAX_NAME);	// 在线程函数中free
        sprintf(pDictFileName, "dict_%d", i);	// 词表文件前缀为dict_

        Pthread_create(&tid[i], NULL, threadFunc, (void *)pDictFileName);
    }

    // now wait for all threads to terminate 
    for(i=0; i< g_pArgs->iThreadNum; i++) {
        Pthread_join(tid[i], NULL);
    }

    return 0;
}

/**
预处理数据结果文件
通过shell diff命令，获取存在差异的文件
*/
int getDiffFiles()
{
    char pStrCmd[MAX_NAME];
//  diff res/201505311442/online/ res/201505311442/offline/ --brief | awk '{print $4}'| awk -F'/' '{print $NF}' > res/201505311442/diffResult.txt
// diffResult.txt中每行，为一个存在diff的文件名
    sprintf(pStrCmd, "diff %s%s/%s %s%s/%s --brief | awk '{print $4}'| awk -F'/' '{print $NF}' >%s%s/diffResult.txt", g_pConf->pResPath, g_pArgs->pStrTimestamp, "online", g_pConf->pResPath, g_pArgs->pStrTimestamp, "offline", g_pConf->pResPath, g_pArgs->pStrTimestamp);
	System(pStrCmd);

	return 0;
}

/**
将某目录下的所有pb文件转为json
读取配置文件中的接口
*/
int transPbFilesToJson()
{
	//sed -n '2p' res/201505311442/diffResult2.txt 查看第2行
	char pStrTmp[MAX_NAME];
	sprintf(pStrTmp, "%s%s/%s", g_pConf->pResPath, g_pArgs->pStrTimestamp, "diffResult.txt");

    FILE *pDiffFile;
    if ((pDiffFile=Fopen(pStrTmp, "r"))==NULL) {
        exit(-1);
    }	
	// 首先，获取到存在diff的词表文件和行号，判断请求串是否为pb格式
	unsigned iCurrentLine=0;

	char pDictFileName[MAX_NAME];
	char pDiffLineNo[MAX_NAME];
	char *pPointPos;
	char pStrCmd[MAX_NAME];
	char pUrl[MAX_LINE];

    while(fgets(pStrTmp, MAX_NAME, pDiffFile) != NULL) {
		iCurrentLine++;
		// 查找dict文件名和行号
		pPointPos = strchr(pStrTmp, '.');	// 数据返回的文件名：dict_0.1001，'.'字符后为行号
		strncpy(pDictFileName, pStrTmp, pPointPos - pStrTmp);
		strcpy(pDiffLineNo, pPointPos + 1);

		sprintf(pStrCmd, "sed -n '%sp' %s%s/%s", pDiffLineNo, g_pConf->pDictPath, g_pArgs->pStrTimestamp, pDictFileName);
		FILE *pTmpFile;
		if((pTmpFile = popen(pStrCmd, "r")) != NULL)
		{
			while(fgets(pUrl, MAX_LINE, pTmpFile) != NULL)
			{
				;	// nothing to do
			}
			pclose(pTmpFile);
		}
		// 判断是否为pb格式
		if (strstr(pUrl, g_pConf->pPbFlag) != NULL)
		{
			// TODO offline和online都需要json化
			// 是否需要将json化的数据重新放在一个文件中？
			// cd Target path && /home/map/php/bin/php ./pb2json.php filename outputFilename
			sprintf(pStrCmd, "cd %s%s/online && %s %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, g_pConf->pPb2Json, pStrTmp, pStrTmp);
			System(pStrCmd);

			sprintf(pStrCmd, "cd %s%s/offline && %s %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, g_pConf->pPb2Json, pStrTmp, pStrTmp);
			System(pStrCmd);
		}
		else
		{
			// 如果非pb，将文件名重命名为xxx_json
			sprintf(pStrCmd, "cd %s%s/online && mv %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, pStrTmp, pStrTmp);
			System(pStrCmd);

			sprintf(pStrCmd, "cd %s%s/offline && mv %s %s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, pStrTmp, pStrTmp);
			System(pStrCmd);
		}
	}

	return 0;
}

// json diff. use lib
/*
对online和offline的文件进行jsondiff，
**/
int diffJsonFiles()
{
	char pStrTmp[MAX_NAME];
	sprintf(pStrTmp, "%s%s/%s", g_pConf->pResPath, g_pArgs->pStrTimestamp, "diffResult.txt");

    FILE *pDiffFile;
    if ((pDiffFile=Fopen(pStrTmp, "r"))==NULL) {
        exit(-1);
    }

    while(fgets(pStrTmp, MAX_NAME, pDiffFile) != NULL) {
		// 
		char pOnlineFilename[MAX_NAME];
		char pOfflineFilename[MAX_NAME];
		char pDiffRetFilename[MAX_NAME];	// 在results目录中

		sprintf(pOnlineFilename, "%s%s_online/%s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, pStrTmp);
		sprintf(pOfflineFilename, "%s%s_offline/%s_json", g_pConf->pResPath, g_pArgs->pStrTimestamp, pStrTmp);
		sprintf(pDiffRetFilename, "%s%s/results/%s_diff_ret", g_pConf->pResPath, g_pArgs->pStrTimestamp, pStrTmp);

		// 执行diff
		if (fileDiff(pOnlineFilename, pOfflineFilename, pDiffRetFilename) == 0)
		{
			ul_writelog(UL_LOG_NOTICE, "%s diff success!!!", pDiffRetFilename);
		}
		else
		{
			ul_writelog(UL_LOG_FATAL, "%s diff error!!!", pDiffRetFilename);
		}
	}
}

/**
处理返回的结果文件，最终实现所有文件的diff
*/
int dealResultFiles()
{
	// 过滤出存在差异的文件
	getDiffFiles();
	transPbFilesToJson();
	diffJsonFiles();

	return 0;
}

// filter ignore field
int filterFields()
{
	return 0;
}


