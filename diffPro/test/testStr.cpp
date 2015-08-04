/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file testStr.cpp
 * @author panhongguang(com@baidu.com)
 * @date 2015/08/04 16:12:12
 * @brief 
 *  
 **/
#include <iostream>
#include <string>
#include <fstream>

using namespace std;

string preDealIgnoreStr(string ignoreStr)
{
    string strRet;
    size_t len = ignoreStr.length();
    if (len == 0) return "";

    bool isNumFlag = false;
    char ch;
    size_t i=0;

    while (i < len && (ch = ignoreStr.at(i)) != '|') {
        ++i;
        if(isdigit(ch)) {
            isNumFlag = true;
            continue;
        } else if(isNumFlag == true) {
            ++i; // skip "->" string
        } else {
           strRet.append(1, ch); 
        }
        isNumFlag = false;
    }

    return strRet;
}
/*
int main() {
    string str = "fskl->sfjk->fs->213->2->sfkj->122324234->fds ";
    str = preDealIgnoreStr(str);
    cout << str << endl;

    return 0;
}
*/

int main ()
{
    ifstream ifs("test.cpp");
    ofstream ofs("tmp.txt");

    string line;
    while (getline(ifs, line)) {
        ofs << line << "\n";
    }

    ifs.close();
    ofs.close();

    return 0;
}
/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
