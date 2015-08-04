/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file traversalDir.cpp
 * @author panhongguang(com@baidu.com)
 * @date 2015/08/03 13:41:52
 * @brief 
 *  
 **/
#include <dirent.h>
#include <unistd.h>
#include <sys/stat.h>
#include <sys/types.h>
#include <errno.h>

#include <fstream>
#include <iostream>
#include <string>

using namespace std;

int main() {
    DIR* pDir;
    //string dirPath = "./";
    char* dirPath = "./";
    string filePath;
    struct stat filestat;

    pDir = opendir(dirPath);

    if (pDir == NULL)
    {
        cout << "Error: " << errno << endl;
        return -1;
    }

    struct dirent *pDirStruct;
    while ((pDirStruct = readdir(pDir))) {
        filePath = string(dirPath) + pDirStruct->d_name;
        if (stat( filePath.c_str(), &filestat )) continue;
        if (S_ISDIR( filestat.st_mode ))         continue;

        cout << filePath << endl;
    }

    closedir(pDir);

    return 0;
}




















/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
