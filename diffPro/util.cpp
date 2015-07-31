#include "util.h"

// 封装系统函数，少写代码，并增强程序健壮性

// 执行shell脚本
int System(const char* pStrCmd)
{
    int ret = system(pStrCmd);
    if (ret == 127) {
        ul_writelog(UL_LOG_FATAL, "System %s fail, ret = 127, error msg: %s", pStrCmd, strerror(errno));
        return -1;
    } else if (ret == -1) {
        ul_writelog(UL_LOG_FATAL, "System %s fail, ret = -1, error msg: %s", pStrCmd, strerror(errno));
        return -1;
    }
    return 0;
}

/***************************************************
 * Wrappers for dynamic storage allocation functions
 ***************************************************/
void *Malloc(size_t size)
{
    void *p;

    if ((p  = malloc(size)) == NULL) {
        ul_writelog(UL_LOG_FATAL, "Malloc error msg: %s", strerror(errno));
    }
    return p;
}

void Free(void *ptr)
{
    free(ptr);
}

/******************************************
 * Wrappers for the Standard I/O functions.
 ******************************************/
void Fclose(FILE *fp)
{
    if (fclose(fp) != 0) {
        ul_writelog(UL_LOG_FATAL, "Fclose error");
    }
}

char *Fgets(char *ptr, int n, FILE *stream)
{
    char *rptr;

    if ((rptr = fgets(ptr, n, stream)) == NULL) {
        ul_writelog(UL_LOG_FATAL, "Fgets error");
    }

    return rptr;
}

FILE *Fopen(const char *filename, const char *mode)
{
    FILE *fp;

    if ((fp = fopen(filename, mode)) == NULL) {
        ul_writelog(UL_LOG_FATAL, "Fopen error, filename: %s, error msg: %s", filename, strerror(errno));
    }

    return fp;
}

void Fputs(const char *ptr, FILE *stream)
{
    if (fputs(ptr, stream) == EOF) {
        ul_writelog(UL_LOG_FATAL, "Fputs error");
    }
}

size_t Fread(void *ptr, size_t size, size_t nmemb, FILE *stream)
{
    size_t n;

    if (((n = fread(ptr, size, nmemb, stream)) < nmemb) && ferror(stream)) {
        ul_writelog(UL_LOG_FATAL, "Fread error");
    }
    return n;
}

void Fwrite(const void *ptr, size_t size, size_t nmemb, FILE *stream)
{
    if (fwrite(ptr, size, nmemb, stream) < nmemb) {
        ul_writelog(UL_LOG_FATAL, "Fwrite error msg: %s", strerror(errno));
    }
}

int Stat(const char *filename, struct stat *buf)
{
    if (stat(filename, buf) < 0) {
        ul_writelog(UL_LOG_FATAL, "Stat error, filename: %s, error msg: %s", filename, strerror(errno));
        return -1;
    }
    return 0;
}


int Mkdir(const char *path, mode_t mode)
{
    if (mkdir(path, mode) != 0) {
        ul_writelog(UL_LOG_FATAL, "Mkdir error, path: %s, error msg: %s", path, strerror(errno));
        return -1;
    }
    return 0;
}
int Access(const char *pathname, int mode)
{
    if (access(pathname, mode) != 0) {
        ul_writelog(UL_LOG_FATAL, "Access error, pathname: %s, error msg: %s", pathname, strerror(errno));
        return -1;
    }
    return 0;
}
/************************************************
 * Wrappers for Pthreads thread control functions
 ************************************************/

void Pthread_create(pthread_t *tidp, pthread_attr_t *attrp,
        void * (*routine)(void *), void *argp)
{
    int rc;

    if ((rc = pthread_create(tidp, attrp, routine, argp)) != 0) {
        ul_writelog(UL_LOG_FATAL, "Pthread_create error_no %d, error msg: %s", rc, strerror(errno));
    }
}

void Pthread_cancel(pthread_t tid)
{
    int rc;

    if ((rc = pthread_cancel(tid)) != 0) {
        ul_writelog(UL_LOG_FATAL, "Pthread_cancel error_no %d, error msg: %s", rc, strerror(errno));
    }
}

void Pthread_join(pthread_t tid, void **thread_return)
{
    int rc;

    if ((rc = pthread_join(tid, thread_return)) != 0) {
        ul_writelog(UL_LOG_FATAL, "Pthread_join error_no %d, error msg: %s", rc, strerror(errno));
    }
}

/* $begin detach */
void Pthread_detach(pthread_t tid)
{
    int rc;

    if ((rc = pthread_detach(tid)) != 0) {
        ul_writelog(UL_LOG_FATAL, "Pthread_detach error_no %d, error msg: %s", rc, strerror(errno));
    }
}
/* $end detach */

void Pthread_exit(void *retval)
{
    pthread_exit(retval);
}

pthread_t Pthread_self(void)
{
    return pthread_self();
}

void Pthread_once(pthread_once_t *once_control, void (*init_function)())
{
    pthread_once(once_control, init_function);
}

// 一些util函数实现
int checkDataPath(const char* pFilepath)
{
    if (Access(pFilepath, 0) == -1) {
        return Mkdir(pFilepath, 0777);
    }
    return 0;
}

// 获取当前时间，格式：201505171630
void getCurrentTime(char *pStr)
{
    time_t nowtime;
    nowtime = time(NULL);
    struct tm* local;
    local = localtime(&nowtime);

    strftime(pStr, MAX_NAME, "%Y%m%d%H%M", local);
}
