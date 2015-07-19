#ifndef _PUBLIC_H
#define _PUBLIC_H

//用于声明#include的文件

// system lib
#include <unistd.h>
#include <errno.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <sys/time.h>
#include <pthread.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <time.h>
#include <fcntl.h>
#include <ctype.h>
#include <limits.h>

// #include <sys/epoll.h>
// #include <netinet/in.h>
// #include <arpa/inet.h>
// #include <sys/socket.h>
// #include <netinet/tcp.h>
// #include <netdb.h>
// #include <signal.h>

// curl
#include <curl/curl.h>

// ullib
#include <ul_conf.h>
#include <ul_log.h>

// define
#define MAX_LINE 2048	// 每个query最大字符数
#define MAX_NAME 256	// 词表文件名称最大字符数

#endif
