#ifndef _JSONDIFF_H
#define _JSONDIFF_H

#include <rapidjson/document.h>
#include <rapidjson/filereadstream.h>

#include "public.h"
#include "util.h"

using namespace rapidjson;
using namespace std;

/**
将int转换为string
*/
string ToString(int n)
{
    stringstream ss;
    ss << n;
    return ss.str();
}

/**
将获取到的value转换为string
*/
string GetValueToString(const Value* v)
{
    stringstream ss;

    switch (v->GetType()) {
        case kStringType:
            ss << v->GetString();
            break;
        case kNumberType:
            if (v->IsInt64()) {
                ss << v->GetInt64();
            } else {
                ss << v->GetDouble();
            }
            break;
        default:
            break;
    }

    return ss.str();
}

/**
实现将两个json数据diff，并将差异字段存储于文件中
*/
int jsonDiff(FILE* fout, Value* onValue, Value* offValue, int* status, string path)
{
    Type onType = onValue->GetType();
    Type offType = offValue->GetType();

    if (onType != offType) {
        *status = 2;
        return 0;
    }

    switch (onType) {
        case kObjectType: {
            //fprintf(fout, "Object:%s\n", path.c_str());
            string suffix = "";
            suffix =  *(path.end() - 1) == '>' ? "" : "->";

            // iterator onValue elements
            Value::ConstMemberIterator it = onValue->MemberBegin();
            Value::ConstMemberIterator itEnd = onValue->MemberEnd();
            for (; it != itEnd; it++) {
                const char* key = it->name.GetString();
                const Value* tmpOnValue = &it->value;

                if (offValue->HasMember(key)) {
                    const Value* tmpOffValue = &(*offValue)[key];
                    // fprintf(fout, "offValue HasMember(%s)\n", key);
                    int ret;
                    int status;
                    ret = jsonDiff(fout, (Value*)tmpOnValue, (Value*)tmpOffValue, &status, path + suffix + key);

                    if (ret != 0) {
                        return ret;
                    }

                    if (status == 2) {  // exist both in onValue && offValue
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), GetValueToString(tmpOffValue).c_str());
                    } else if (status == 0) { // exist only in onValue
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), "");
                    } else if (status == 1) { // exist only in offValue
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, "", GetValueToString(tmpOffValue).c_str());
                    }

                } else { // exist only in onValue
                    //fprintf(fout, "KeyOnlyInOnline\n");
                    fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), "");
                }

            }

            // iterator offValue elements
            it = offValue->MemberBegin();
            itEnd = offValue->MemberEnd();
            for (; it != itEnd; it++) {
                const char* key = it->name.GetString();
                const Value* tmpOffValue = &it->value;
                if (!onValue->HasMember(key)) {
                    fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, "", GetValueToString(tmpOffValue).c_str());
                }
            }
            break;
        }
        case kArrayType: {
            // get array size
            SizeType onSize = onValue->Size();
            SizeType offSize = offValue->Size();

            SizeType minSize = onSize < offSize ? onSize : offSize;
            SizeType i = 0;
            int ret, status;
            for (; i < minSize; ++i) {
                Value* tmpOnValue = &(*onValue)[i];
                Value* tmpOffValue = &(*offValue)[i];

                // itearator every elements..
                ret = jsonDiff(fout, tmpOnValue, tmpOffValue, &status, path + "->" + ToString((int)i));

                if (ret != 0) {
                    return ret;
                }
                if (status == 2) {  // exist both in onValue && offValue
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), GetValueToString(tmpOnValue).c_str(), GetValueToString(tmpOffValue).c_str());
                } else if (status == 0) { // exist only in onValue
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), GetValueToString(tmpOnValue).c_str(), "");
                } else if (status == 1) { // exist only in offValue
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), "", GetValueToString(tmpOffValue).c_str());
                }

            }
            // add extra elements
            for (; i < onSize; ++i) {
                Value* tmpOnValue = &(*onValue)[i];
                fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), ToString((int)i).c_str(), GetValueToString(tmpOnValue).c_str(), "");
            }
            for (; i < offSize; ++i) {
                Value* tmpOffValue = &(*offValue)[i];
                fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), ToString((int)i).c_str(), "", GetValueToString(tmpOffValue).c_str());
            }

            break;
        }
        case kStringType: {
            // compare two string
            if (onValue->GetStringLength() != offValue->GetStringLength() || strcmp(onValue->GetString(), offValue->GetString()) != 0) {
                *status = 2;
            } else {
                *status = 3; // equal
            }
            break;
        }
        case kNumberType: {
            int onIsDouble = (onValue->IsDouble()) ? 1 : 0;
            int offIsDouble = (offValue->IsDouble()) ? 1 : 0;
            if( onIsDouble == offIsDouble) {
                if( (onIsDouble == 1 && onValue->GetDouble() == offValue->GetDouble()) 
                    || (onIsDouble == 0 && onValue->GetInt64() == offValue->GetInt64()) ) {
                    *status = 3;
                } else {
                    *status = 2;
                }
            } else {
                *status = 2;
            }
            break;
        }
        default:// type = kTrueType || kFalseType || kNullType
        {
            *status = 2;
        }
    }
    return 0;
}

/**
将文件内容读取到string
*/
string readFileToString(const char* pFilename)
{
    fstream fs(pFilename);
    stringstream ss;

    ss << fs.rdbuf();

    return ss.str();
}
/**
interface
params:
pOnlineFile:	online json file name
pOfflineFile:	offline json file name
pRetFile:	json result file name

return:	function status
*/
int  fileDiff(const char* pOnlineFile, const char* pOfflineFile, const char* pRetFile)
{
    FILE* fpRetFile = fopen(pRetFile, "w+");

    if (fpRetFile == NULL) {
        ul_writelog(UL_LOG_FATAL, "Diff result file %s open failed!", pRetFile);
        return -1;
    }

    string strOnline = readFileToString(pOnlineFile);
    string strOffline = readFileToString(pOfflineFile);

    Document docOnline, docOffline;
    docOnline.Parse<rapidjson::kParseDefaultFlags>(strOnline.c_str());
    docOffline.Parse<rapidjson::kParseDefaultFlags>(strOffline.c_str());
    //判断读取成功与否
    if (docOnline.HasParseError()) {
        ul_writelog(UL_LOG_FATAL, "Online json file %s parse error!", pOnlineFile);
        Fclose(fpRetFile);
        return -1;
    }

    if (docOffline.HasParseError()) {
        ul_writelog(UL_LOG_FATAL, "Offline json file %s parse error!", pOfflineFile);
        Fclose(fpRetFile);
        return -1;
    }

    int diffRet, status = 0;
    diffRet = jsonDiff(fpRetFile, &docOnline, &docOffline, &status, "");

    ul_writelog(UL_LOG_NOTICE, "diffRet: %d, status: %d", diffRet, status);
    Fclose(fpRetFile);

    return diffRet;
}

#endif
