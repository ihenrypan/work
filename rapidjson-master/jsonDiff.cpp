#include <rapidjson/document.h>
#include <rapidjson/filereadstream.h>
#include <cstdio>
#include <string>

using namespace rapidjson;
using namespace std;

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
								fprintf(fout, "Object:%s\n", path.c_str());
								string suffix = "";
								suffix =  *(path.end()-1) == '>' ? "" : "->";

								// iterator onValue elements
								Value::ConstMemberIterator it = onValue->MemberBegin();
								Value::ConstMemberIterator itEnd = onValue->MemberEnd();
								for (; it!=itEnd; it++)
								{
										const char* key = it->name.GetString();
										Value* tmpOnValue = &it->value;
										Value* tmpOffValue = &(*offValue)[key];    // 用于判断key是否存在

										if(offValue->KeyExist()) // KeyExist
										{
												int ret;
												int status;
												ret = jsonDiff(fout, tmpOnValue, tmpOffValue, &status, path+suffix);

												if (ret != 0)
												{
														return ret;
												}

												if (status == 2)    // exist both in onValue && offValue
												{
														fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key, "onValue", "offValue");
												}
												else if(status == 0)    // exist only in onValue
												{
														fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key, "OnlyInOnline", "");
												}
												else if (status == 1)   // exist only in offValue
												{
														fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key, "", "OnlyInOffline");
												}

										}
										else    // exist only in onValue
										{
												fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key, "OnlyInOnline", "");
										}

								}

								// iterator offValue elements
								it = offValue->MemberBegin();
								itEnd = offValue->MemberEnd();
								for (; it!=itEnd; it++)
								{
										const char* key = it->name.GetString();
										const Value* tmpOffValue = &it->value;
										const Value* tmpOnValue = &(*onValue)[key];
										if (!onValue->KeyExist())
										{
												fprintf(fout, "%s->%s\t%s\t%s\n", path.c_str(), key, "", "OnlyInOffline");
										}
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
		}
		return 0;
}
