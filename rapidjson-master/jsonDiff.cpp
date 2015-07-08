#include <rapidjson/document.h>
#include <rapidjson/filereadstream.h>
#include <cstdio>
#include <string>

int jsonDiff(FILE* fout, Value* online, Value* offline, int* status, string path)
{
    Type onType = online->GetType();
    Type offType = offline->GetType();
    
    if(onType != offType)
    {
        *status = 2;
        return 0;
    }
    
    switch (onType)
    {
        case kObjectType:
        fprintf(fp, "Object:%s\n", path.c_str());
        string suffix = *(path.end()-1) == '>' ? "" : "->";
        
        // iterator online elements
        Value::ConstMemberIterator it = online->MemberBegin();
        Value::ConstMemverIterator itEnd = online->MemberEnd();
        for (; it!=itEnd; it++)
        {
            const string key = it->name.GetString();
            const Value* tmpOnValue = &it->value;
            const Value* tmpOffValue = &(*offline)[key];    // 用于判断key是否存在
            
            if(offline->KeyExist()))
            {
                int ret;
                int status;
                ret = jsonDiff(fout, tmpOnValue, tmpOffValue, &status, path+suffix);
                
                if (ret != 0)
                {
                    return ret;
                }
                
                if (status == 2)    // exist both in online && offline
                {
                    fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key.c_str(), "online", "offline");
                }
                else if(status == 0)    // exist only in online
                {
                    fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key.c_str(), "OnlyInOnline", "");
                }
                else if (status == 1)   // exist only in offline
                {
                    fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key.c_str(), "", "OnlyInOffline");
                }
            
            }
            else    // exist only in online
            {
                fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key.c_str(), "OnlyInOnline", "");
            }
            
        }
        
        // iterator offline elements
        Value::ConstMemberIterator it = offline->MemberBegin();
        Value::ConstMemverIterator itEnd = offline->MemberEnd();
        for (; it!=itEnd; it++)
        {
            const string key = it->name.GetString();
            const Value* tmpOffValue = &it->value;
            const Value* tmpO
        }
        
        break;
    }
    if (onType == kObjectType)
    {
        fprintf(fp, "Object:%s\n", path.c_str());
        string suffix = *(path.end()-1) == '>' ? "" : "->";
        for (Value::ConstMemberIterator it=v->MemberBegin(); it!=v->MemberEnd(); it++)
            {
                const string key = it->name.GetString();
                const Value* tmpValue = &it->value;
                printJsonTree(fp, (Value *)tmpValue, path + suffix + key);

            }
    }
}