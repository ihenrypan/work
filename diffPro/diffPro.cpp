#include "public.h"
#include "util.h"
#include "conf.h"
#include "args.h"
#include "process.h"

globalConf gConf; // 全局配置参数
argsArray gArgs; // 全局传递参数
// 配置全局变量
globalConf* g_pConf = NULL;
argsArray* g_pArgs = NULL;
ul_logstat_t logstat = {4, 0, 0};

int globalInit()
{
    g_pConf = &gConf;
    if (0 != loadConfig(CONF_PATH, CONF_FILENAME)) {
        ul_writelog(UL_LOG_FATAL,
                "Can not load config path=%s,fileName=%s",
                CONF_PATH, CONF_FILENAME);
        return -1;
    }
    logstat.events = g_pConf->iLogLevel;

    // 打开日志文件，打开之后正常日志默认写入diffPro.log文件中，错误日志写入diffPro.log.wf
    if (0 != ul_openlog(g_pConf->pLogPath, g_pConf->pLogFilename, &logstat, 1024)) {
        fprintf(stderr, "Fail to open log,path=%s,filename=%s",
                g_pConf->pLogPath, g_pConf->pLogFilename);
        return -1;
    }

    // 根据词表文件大小获取：开辟进程数和split词表文件时的时间戳。
    if (getExtraArgs() != 0) {
        return -1;
    }

    return 0;
}

int main(int argc, char *argv[])
{
    // 读取传参，顺序如下：线上环境、线下环境、词表
    if (argc != 4) {
        printf("Usage: %s onlineEnv offlineEnv dictFilename\n", argv[0]);
        exit(-1);
    } else {
        g_pArgs = &gArgs;
        // strcpy(g_pArgs->pOnlineEnv, argv[1]);
        // strcpy(g_pArgs->pOfflineEnv, argv[2]);
        strcpy(g_pArgs->pOnlineEnv, "http://yf-map-mirror-wpng.vm.baidu.com:8000");
        strcpy(g_pArgs->pOfflineEnv, "http://cp01-centos43-testing005.epc.baidu.com:8000");
        strcpy(g_pArgs->pDictName, argv[3]);
    }
    // 读取配置文件初始化词表目录、数据结果目录
    if (globalInit() != 0) {
        ul_writelog(UL_LOG_FATAL, "globalInit fail, exit!!!");
        exit(-1);
    }

    time_t start, end;
    start = time(NULL);

    // 根据词表文件多线程发送http请求
    sendReqs();

    end = time(NULL);
    printf("Total cost is : %f\n", difftime(end, start));

    // 生成diff结果后，开始对结果进行处理
    // TODO
    dealResultFiles();

    return 0;
}
