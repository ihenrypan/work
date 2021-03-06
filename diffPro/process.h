#ifndef _PROCESS_H
#define _PROCESS_H

#include "public.h"
/**
process模块功能：
1、根据词表内容，发送http请求。
2、处理返回的结果数据文件。包括：
	a、预处理结果文件，通过shell命令过滤出存在diff的文件
	b、对于存在diff的文件：如果为pb格式，首先进行json化（此处调用配置的接口）。然后进行json diff。
	c、根据配置规则，实现对指定字段过滤。
*/

// 根据词表文件多线程发送http请求
int sendReqs();

//处理返回的结果文件，最终实现所有文件的diff
int dealResultFiles();
int putFilterToSet(const char* pFilename, std::set<std::string>& filterSet);
int filterFields();
#endif

