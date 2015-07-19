#include "args.h"
#include "util.h"
#include "conf.h"

// 获取开辟进程数和split词表文件时的时间戳等其他参数，并生成
int getExtraArgs()
{
    // 获取词表文件的大小
    // 词表文件名：g_pConf->pDictPath/g_pArgs->pDictName
    char pTmpName[MAX_NAME];
    sprintf(pTmpName, "%s%s", g_pConf->pDictPath, g_pArgs->pDictName);

    struct stat statBuffer;
    if (Stat(pTmpName, &statBuffer) != 0)
        return -1;
    // 文件字节大小
    int iFileByte = statBuffer.st_size;
    const int TMP_SIZE = 10485760; // 10M
    int iFileNum = iFileByte/TMP_SIZE + 1;  // 向上取整
    if (iFileNum > 10)
        iFileNum = 10;  // 最多开辟10个线程

    g_pArgs->iThreadNum = iFileNum; // 赋值给全局线程数
    int iPerSize = iFileByte/iFileNum + 5000;   // split -C iPerSize -d -a 1 DictName dict_，加5000为了向上取整，避免剩余的字节数单独生成一个文件。

    char pStrTime[MAX_NAME];
    getCurrentTime(pStrTime);
    strcpy(g_pArgs->pStrTimestamp, pStrTime);  // 赋值给全局时间戳名

    // 创建./dict/timestamp文件夹
    sprintf(pTmpName, "%s%s", g_pConf->pDictPath, g_pArgs->pStrTimestamp);
    checkDataPath(pTmpName);

    // check res file dir exist or not. if not exist, create it.
    // 创建./res/timestamp
    sprintf(pTmpName, "%s%s", g_pConf->pResPath, g_pArgs->pStrTimestamp);
    checkDataPath(pTmpName);
    // 创建时间戳下的online和offline文件夹
    sprintf(pTmpName, "%s%s/%s", g_pConf->pResPath, g_pArgs->pStrTimestamp, "online");
    checkDataPath(pTmpName);
    sprintf(pTmpName, "%s%s/%s", g_pConf->pResPath, g_pArgs->pStrTimestamp, "offline");
    checkDataPath(pTmpName);

    return splitDictFile(iPerSize);
}

int splitDictFile(int iPerSize)
{
    char pStrCmd[MAX_NAME];
    //按10M左右大小split，并且最多split10个文件。词表名：./g_pConf->pDictPath/g_pArgs->pDictName
    sprintf(pStrCmd, "split -C %d -d -a 1 %s%s dict_", iPerSize, g_pConf->pDictPath, g_pArgs->pDictName);
    if (System(pStrCmd) != 0)
        return -1;
    // split后，将生成的词表文件mv到对应文件夹中 ./dict/timestamp
    sprintf(pStrCmd, "mv dict_* %s%s", g_pConf->pDictPath, g_pArgs->pStrTimestamp);
    if (System(pStrCmd) != 0)
        return -1;
    // TODO:是否同时将最初的词表文件删除？

    return 0;
}
