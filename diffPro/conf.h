#ifndef _CONF_H
#define _CONF_H

#include "public.h"

#define CONF_PATH "./conf/"
#define CONF_FILENAME "diffPro.conf"
/**
读取配置文件
conf struct
*/
typedef struct _globalConf {
    int iLogLevel;	// 日志级别
    char pLogPath[MAX_NAME];	// 日志目录
    char pLogFilename[MAX_NAME];	// 日志文件名

    char pDictPath[MAX_NAME];	// 词表目录
    char pResPath[MAX_NAME];	// 返回结果目录
    // char pOnline[16]; // "online"
    // char pOffline[16]; // "offline"
    char pServiceName[MAX_NAME]; // diff 服务名，如phpui
    char pPbFlag[MAX_NAME];	// pb标志字段。rp_format=pb
    char pPb2Json[MAX_NAME]; // pb转json程序。/home/map/php/bin/php ./pb2json.php
    char pConfFile[MAX_NAME]; // 服务配置文件名

    size_t iPressValue; // 压力值（暂未使用）
} globalConf;

int loadConfig(const char* pConfPath, const char* pFilename);

extern globalConf* g_pConf;

#endif
