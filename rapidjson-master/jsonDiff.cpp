#include <rapidjson/document.h>
#include <rapidjson/filereadstream.h>
#include <cstdio>
#include <string>
#include <sstream>

using namespace rapidjson;
using namespace std;

string ToString(int n)
{
    stringstream ss;
    ss << n;
    return ss.str();
}

string GetValueToString(const Value* v)
{
    stringstream ss;
    string ret;

    switch (v->GetType())
    {
        case kStringType:
            ss << v->GetString();
            break;
        case kNumberType:
            if(v->IsInt64())
            {
                ss << v->GetInt64();
            }
            else
            {
                ss << v->GetDouble();
            }
            break;
    }
    ret = ss.str();
    
    return ret;
}

int jsonDiff(FILE* fout, Value* onValue, Value* offValue, int* status, string path)
{
    Type onType = onValue->GetType();
    Type offType = offValue->GetType();

    if(onType != offType)
    {
        *status = 2;
        return 0;
    }

    switch (onType)
    {
        case kObjectType:
        {
            //fprintf(fout, "Object:%s\n", path.c_str());
            string suffix = "";
            suffix =  *(path.end()-1) == '>' ? "" : "->";

            // iterator onValue elements
            Value::ConstMemberIterator it = onValue->MemberBegin();
            Value::ConstMemberIterator itEnd = onValue->MemberEnd();
            for (; it!=itEnd; it++)
            {
                const char* key = it->name.GetString();
                const Value* tmpOnValue = &it->value;

				if (offValue->HasMember(key))
                {
                    const Value* tmpOffValue = &(*offValue)[key];    
                    // fprintf(fout, "offValue HasMember(%s)\n", key);
                    int ret;
                    int status;
                    ret = jsonDiff(fout, (Value*)tmpOnValue, (Value*)tmpOffValue, &status, path+suffix+key);

                    if (ret != 0)
                    {
                        return ret;
                    }

                    if (status == 2)    // exist both in onValue && offValue
                    {
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), GetValueToString(tmpOffValue).c_str());
                    }
                    else if(status == 0)    // exist only in onValue
                    {
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), "");
                    }
                    else if (status == 1)   // exist only in offValue
                    {
                        fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, "", GetValueToString(tmpOffValue).c_str());
                    }

                }
                else    // exist only in onValue
                {
                    //fprintf(fout, "KeyOnlyInOnline\n");
                    fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, GetValueToString(tmpOnValue).c_str(), "");
                }

            }

            // iterator offValue elements
            it = offValue->MemberBegin();
            itEnd = offValue->MemberEnd();
            for (; it!=itEnd; it++)
            {
                const char* key = it->name.GetString();
                const Value* tmpOffValue = &it->value;
                if (!onValue->HasMember(key))
                {
                    fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), key, "", GetValueToString(tmpOffValue).c_str());
                }
            }
            break;
        }
        case kArrayType:
        {
            // get array size
            SizeType onSize = onValue->Size();
            SizeType offSize = offValue->Size();

            SizeType minSize = onSize < offSize ? onSize : offSize;
            SizeType i = 0;
            int ret, status;
            for (; i<minSize; ++i)
            {
                Value* tmpOnValue = &(*onValue)[i];
                Value* tmpOffValue = &(*offValue)[i];

                // itearator every elements..
                // TODO
                ret = jsonDiff(fout, tmpOnValue, tmpOffValue, &status, path+"->"+ToString((int)i)); 
                
                if (ret != 0)
                {
                   return ret; 
                }
                if (status == 2)    // exist both in onValue && offValue
                {
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), GetValueToString(tmpOnValue).c_str(), GetValueToString(tmpOffValue).c_str());
                }
                else if(status == 0)    // exist only in onValue
                {
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), GetValueToString(tmpOnValue).c_str(), "");
                }
                else if (status == 1)   // exist only in offValue
                {
                    fprintf(fout, "%s|%s|%s\n", path.c_str(), "", GetValueToString(tmpOffValue).c_str());
                }

            }
            // add extra elements
            for (; i<onSize; ++i)
            {
                Value* tmpOnValue = &(*onValue)[i];
                fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), ToString((int)i).c_str(), GetValueToString(tmpOnValue).c_str(), "");
            }
            for (; i<offSize; ++i)
            {
                Value* tmpOffValue = &(*offValue)[i];
                fprintf(fout, "%s->%s|%s|%s\n", path.c_str(), ToString((int)i).c_str(), "", GetValueToString(tmpOffValue).c_str());
            }

            break;
        }
        case kStringType:
        {
            // compare two string
            if (onValue->GetStringLength() != offValue->GetStringLength() || strcmp(onValue->GetString(), offValue->GetString()) != 0 )
            {
                *status = 2;
            }
            else
            {
                *status = 3; // equal	
            }
            break;
        }
		case kNumberType:
        {
            // compare two number
			bool isEqual = true;
			int onIsInt = onValue->IsInt64() ? 1 : 0;
			int offIsInt = offValue->IsInt64() ? 1 : 0;
			if( onIsInt == offIsInt)
			{
                if((onIsInt = 1 && onValue->GetInt64() == offValue->GetInt64()) || (onValue->GetDouble() == offValue->GetDouble())) {
                    *status = 3;
                }
                else
                {
                    *status = 2;
                }
			}
			else
			{
                *status = 2;
			}
			
            break;
        }
        default:// type = kTrueType || kFalseType || kNullType

        {
            status = 2;
        }
    }
    return 0;
}



int main()
{
    FILE* fp = fopen("out.txt", "w+");

    FILE* pFile = fopen("dataA.txt", "rb");
    char buffer[65536];
    FileReadStream is(pFile, buffer, sizeof(buffer));
    Document document;
    document.ParseStream<0, UTF8<>, FileReadStream>(is);

	FILE* pFile2 = fopen("dataB.txt", "rb");
    char buffer2[65536];
    FileReadStream is2(pFile2, buffer2, sizeof(buffer2));
    Document document2;
    document2.ParseStream<0, UTF8<>, FileReadStream>(is2);

	int ret, status=0;
	ret = jsonDiff(fp, &document, &document2, &status, ""); 	
   
   	printf("ret: %d, status: %d\n", ret, status);

	return 0;
}
