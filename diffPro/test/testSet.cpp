/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file testSet.cpp
 * @author panhongguang(com@baidu.com)
 * @date 2015/08/02 19:26:22
 * @brief 
 *  
 **/
#include <iostream>
#include <string>
#include <set>
#include <sstream>
#include <iterator>
#include <fstream>

using namespace std;

string toString(int n) {
    stringstream ss;
    ss << n;
    return ss.str();
}
std::string& trim(std::string &s)   
{  
    if (s.empty())   
    {  
        return s;  
    }  

    s.erase(0,s.find_first_not_of(" "));  
    s.erase(s.find_last_not_of(" ") + 1);  
    return s;  
}

int putFilterToSet(const char* pFilename, set<string>& filterSet) {
    ifstream pFilterFile(pFilename);

    if (!pFilterFile) {
//        ul_writelog(UL_LOG_FATAL, "Open filter conf file %s error!", pFilename);
        return -1;
    }
    
    string line;

    while (getline(pFilterFile, line)) {
        if (!line.empty() && line line.at(0) != '#') {
            filterSet.insert(line);
        }
    }

    #ifdef _DEBUG
    // iterator filter set
    for (set<string>::iterator it=filterSet.begin(); it!=filterSet.end(); it++) {
        cout << *it << endl;
    }
    #endif
    
    pFilterFile.close();

    return 0;
}
int main() {
    set<string> strSet;

#define _DEBUG

    char* pFilename = "../conf/phpui.conf";

    int ret = putFilterToSet(pFilename, strSet);
    for (set<string>::iterator it=strSet.begin(); it != strSet.end(); it++) {
        cout << *it << endl;
    }

    return 0;
}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
