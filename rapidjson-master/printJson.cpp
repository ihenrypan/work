/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file printJson.cpp
 * @author panhongguang(com@baidu.com)
 * @date 2015/07/06 17:32:36
 * @brief 
 *  
 **/
#include <rapidjson/document.h>
#include <string>
#include <cstdio>

using namespace std;
using namespace rapidjson;

void printJsonTree(FILE* fp, const Value& v, string path=".")
{
    Type type = v.GetType();

    switch (type)
    {
        case kObjectType:
        {
            fprintf(fp, "%s={}\n", path.c_str());
            string suffix = *(path.end()-1) == '.' ? "" : ".";
            for (Value::ConstMemberIterator it=v.MemberBegin(); it!=v.MemberEnd(); it++)
            {
                const string key = it->name.GetString();
                const Value tmpValue = it->value;
                printJsonTree(fp, tmpValue[key], path + suffix + key);

            }
        }
        break;
        case kArrayType:
        {
            fprintf(fp, "%s=[]\n", path.c_str());
            SizeType size = v.Size();
            for (SizeType i=0; i<size; ++i)
            {
                string buffer = "[" + i + "]";
                printJsonTree(fp, v[i], path + buffer);
            }
        }
        break;
        default:
        {
            fprintf(fp, "%s=\"%s\"\n", path.c_str(), v.c_str());
        }
        break;
    }
}

int main()
{
    /*
    ifstream ifs;
    ifs.open("data.txt");
    assert(ifs.is_open());
    */

    FILE* fp = fopen("out.txt", "w+");

    FILE* pFile = fopen("data.txt", "rb");
    char buffer[65536];
    FileReadStream is(pFile, buffer, sizeof(buffer));
    Document document;
    document.ParseStream<0, UTF8<>, FileReadStream>(is);

    printJsonTree(fp, document, ".");
    return 0;
}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */

