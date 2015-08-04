#ifndef _UTIL_H
#define _UTIL_H

#include "public.h"

// 包含封装后的常用系统函数

// util函数声明

// 执行shell脚本
int System(const char* pShellName);

// 封装系统函数，增强程序健壮性
/* Dynamic storage allocation wrappers */
void *Malloc(size_t size);
void Free(void *ptr);

/* Standard I/O wrappers */
void Fclose(FILE *fp);
char *Fgets(char *ptr, int n, FILE *stream);
FILE *Fopen(const char *filename, const char *mode);
void Fputs(const char *ptr, FILE *stream);
size_t Fread(void *ptr, size_t size, size_t nmemb, FILE *stream);
void Fwrite(const void *ptr, size_t size, size_t nmemb, FILE *stream);

int Mkdir(const char *path, mode_t mode);
int Access(const char *pathname, int mode);

int Stat(const char *filename, struct stat *buf);

/* Pthreads thread control wrappers */
void Pthread_create(pthread_t *tidp, pthread_attr_t *attrp,
        void * (*routine)(void *), void *argp);
void Pthread_join(pthread_t tid, void **thread_return);
void Pthread_cancel(pthread_t tid);
void Pthread_detach(pthread_t tid);
void Pthread_exit(void *retval);
pthread_t Pthread_self(void);
void Pthread_once(pthread_once_t *once_control, void (*init_function)());

// 自己实现的部分util函数
// 检查文件夹是否存在，并创建。
int checkDataPath(const char* pFilepath);
// 获取当前时间，格式：201505171630
void getCurrentTime(char *pStr);
// 遍历目录下所有文件（非递归遍历）
int getFilesInDir(const char* pDir, std::list<std::string>& filesList);


#endif
