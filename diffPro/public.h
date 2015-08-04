#ifndef _PUBLIC_H
#define _PUBLIC_H

//用于声明#include的文件

// system lib
#include <unistd.h>
#include <errno.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <pthread.h>
#include <time.h>
#include <fcntl.h>
#include <ctype.h>
#include <limits.h>
#include <dirent.h>
#include <sys/time.h>
#include <sys/types.h>
#include <sys/stat.h>

// curl
#include <curl/curl.h>

// ullib
#include <ul_conf.h>
#include <ul_log.h>

// c++
#include <iostream>
#include <string>
#include <sstream>
#include <fstream>
#include <set>
#include <list>
#include <iterator>


// define
#define MAX_LINE 2048	// 每个query最大字符数
#define MAX_NAME 256	// 词表文件名称最大字符数

#endif
