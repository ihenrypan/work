#include <iostream>
#include <stdio.h>

#include "../util.h"


using namespace std;


// 测试调用命令cd到某路径下，再重新执行一条命令，

int main()
{
	cout << "Curent dir\n";
	System("pwd");
	cout << "Curent dir\n";	
	System("cd .. && pwd");
	cout << "Curent dir\n";	
	System("pwd");
	return 0;
}

