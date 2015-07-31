#ifndef _ARGS_H
#define _ARGS_H

#include "public.h"

/**
处理程序所传参数。
程序所需参数：线上环境、线下环境、词表文件名
*/
typedef struct _argsArray {
    char pOnlineEnv[MAX_NAME];	// 线上环境地址
    char pOfflineEnv[MAX_NAME];	// 线下环境地址
    char pDictName[MAX_NAME]; // 词表文件名

    int iThreadNum;	// 开辟进程数
    char pStrTimestamp[MAX_NAME]; // split词表文件时的时间戳，根据时间戳创建文件夹
} argsArray;

extern argsArray* g_pArgs;

// 获取开辟进程数和split词表文件时的时间戳等其他参数
int getExtraArgs();
// split词表文件
int splitDictFile(int iPerSize);

#endif
