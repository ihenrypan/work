#include "conf.h"

int loadConfig(const char* pConfPath, const char* pFilename)
{
    // 读取配置文件
    Ul_confdata* pConfData;
    if (NULL == (pConfData = ul_initconf(1024))) {
        ul_writelog(UL_LOG_FATAL, "Init Conf Fatal");
        return -1;
    }
    if (0 > ul_readconf(pConfPath, pFilename, pConfData)) {
        ul_writelog(UL_LOG_FATAL, "Read Conf Fatal pConfPath=%s,name=%s", pConfPath, pFilename);
        ul_freeconf(pConfData);
        return -1;
    }
    ul_writelog(UL_LOG_NOTICE, "Read conf success pConfPath=%s,fileName=%s", pConfPath, pFilename);

//  读取日志级别
    if (0 == ul_getconfint(pConfData, "log_level", &g_pConf->iLogLevel)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define iLogLevel", pFilename);
        g_pConf->iLogLevel = 1;
    }
    ul_writelog(UL_LOG_NOTICE, "log_level %d", g_pConf->iLogLevel);

//  读取日志目录
    if (0 == ul_getconfstr(pConfData, "log_path", g_pConf->pLogPath)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pLogPath", pFilename);
        strcpy(g_pConf->pLogPath, "./log/");
    }
    ul_writelog(UL_LOG_NOTICE, "log_path %s", g_pConf->pLogPath);

//  读取日志名称
    if (0 == ul_getconfstr(pConfData, "log_filename", g_pConf->pLogFilename)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pLogFilename", pFilename);
        strcpy(g_pConf->pLogFilename, "diffPro.");
    }
    ul_writelog(UL_LOG_NOTICE, "log_filename %s", g_pConf->pLogFilename);

// 读取词表目录
    if (0 == ul_getconfstr(pConfData, "data_path", g_pConf->pDictPath)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pDictPath", pFilename);
        strcpy(g_pConf->pDictPath, "./dict/");
    }
    ul_writelog(UL_LOG_NOTICE, "data_path %s", g_pConf->pDictPath);

//  读取数据返回结果目录
    if (0 == ul_getconfstr(pConfData, "res_path", g_pConf->pResPath)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pResPath", pFilename);
        strcpy(g_pConf->pResPath, "./res/");
    }
    ul_writelog(UL_LOG_NOTICE, "res_path %s", g_pConf->pResPath);

//  读取服务名
    if (0 == ul_getconfstr(pConfData, "service", g_pConf->pServiceName)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pServiceName", pFilename);
    }
    ul_writelog(UL_LOG_NOTICE, "service %s", g_pConf->pServiceName);

//  pb标志字段
    if (0 == ul_getconfstr(pConfData, "pb_flag", g_pConf->pPbFlag)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pPbFlag", pFilename);
    }
    ul_writelog(UL_LOG_NOTICE, "pb_flag %s", g_pConf->pPbFlag);

//  pb2json
    if (0 == ul_getconfstr(pConfData, "pb2json", g_pConf->pPb2Json)) {
        ul_writelog(UL_LOG_TRACE, "%s No Define pPb2Json", pFilename);
    }
    ul_writelog(UL_LOG_NOTICE, "pb2json %s", g_pConf->pPb2Json);

// filter_conf_file
    if (0 == ul_getconfstr(pConfData, "filter_conf_file", g_pConf->pConfFile)) {
        ul_writelog(UL_LOG_TRACE, "%s No define server filter conf file.", pFilename);
    }
    ul_writelog(UL_LOG_NOTICE, "filter conf file %s", g_pConf->pConfFile);

    ul_freeconf(pConfData);

    return 0;
}
