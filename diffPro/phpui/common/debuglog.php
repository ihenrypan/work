<?php
class Common_Debuglog{
    private $_arrConf;
    private $_intErrNo;
    private $_strErrMsg;
    public static $logid;
    public static $logid64;

    public function __construct() {
        $this->_arrConf = Common_Conf::get('debuglog');
    }
    
    /**
     * @param string $level:定义级别
     * @param string $logtype:日志类型
     * @param array  $params:自定义参数数组
     * @return 无
     */
    public function writeDebug($level, $logtype, $params=array()) {
        if (!is_array($params)) {
            $this->setError('400','params error');
            return false;
        }
        switch ($level) {
            case 'NOTICE':
            	if ($this->_arrConf['loglevel'] < 2) {
                    $this->setError('403','level forbidden');
                    return false;
                }
                $strFileName = $this->_arrConf['logfile'].'.log';
                break;
            case 'DEBUG':
            	if ($this->_arrConf['loglevel'] < 3) {
                    $this->setError('403','level forbidden');
                    return false;
                }
                $strFileName = $this->_arrConf['logfile'].'.de';
                break;
            case 'FATAL':
                $strFileName = $this->_arrConf['logfile'].'.wf';
                break;
            case 'MONITOR':
                $strFileName = $this->_arrConf['logfile'].'.mo';
                break;
            default:
                $this->setError('404','unknown level');
                return false;
        }
        if ($logtype != '') {
            $params['logtype'] = $logtype;
        }
        $strLog = $this->formatCommLog($level, $params);
        error_log($strLog,3, $this->_arrConf['logfolder'] . '/' . $strFileName.'.'.date("YmdH"));
    }

    /**
     * @param string $level:定义级别
     * @param array  $params:自定义参数数组
     * @return string $logstr:日志字符串
     */
    private function formatCommLog($level, $params, $msg='') {
        $logid = $this->getLogid();
        $arrMsgPairs = $this->stripQuoteLine($msg, '[', ']');
        $params = array_merge($params, $this->getLogCommon(), $arrMsgPairs);
        if (!empty($params['BAIDUID'])) {
            $params['baiduid'] = $params['BAIDUID'];
            unset($params['BAIDUID']);
        }
        $params['logid'] = $logid;
        $params['logid64'] = $this->getLogid64();

        //format to 
        $arrEssItems = array();
        foreach ($this->_arrConf['comm_ess_keys'] as $strEssKey => $strCovKey) {
            if (!$strCovKey) {
                $strCovKey = $strEssKey;
            }
            $arrEssItems[$strEssKey] = array_key_exists($strCovKey, $params) ? $params[$strCovKey] : '';
            unset($params[$strCovKey]);
        }
        $params = array_merge($arrEssItems, $params);

        $loghead = $this->getLogStrHead($level, $params);
        $logbody = $this->getLogStrBody($params);
        $logstr = $loghead . ' [' . $logbody . "]\n";
        return $logstr;
    }

    /**
     * @return integer $logid
     */
    public function getLogid() {
        if (self::$logid == false) {
            $this->initLogid();
        }
        return self::$logid;
    }

    /**
     * @return integer $logid64
     */
    public function getLogid64() {
        if (self::$logid64 == false) {
            $this->initLogid();
        }
        return self::$logid64;
    }

    /**
     * @return 无
     */
    private function initLogid() {
        $arr = gettimeofday();
        $logid = 0;
        $logid64 = 0;
        //logid
        if (getenv('HTTP_X_BD_LOGID')) {
            $logid = trim(getenv('HTTP_X_BD_LOGID'));
        }
        if (getenv('HTTP_X_BD_LOGID64')) {
            $logid64 = trim(getenv('HTTP_X_BD_LOGID64'));
        }
        if ($logid < 1) {
            $logid = ((($arr['sec'] * 100000 + $arr['usec'] / 10) & 0x7FFFFFFF) | 0x80000000);
        }
        // wo don't have to generate a fake logid64
        self::$logid = $logid;
        self::$logid64 = $logid64;
    }

    /**
     * @param string $line
     * @param string $qstart
     * @param string $qend
     * @return array $items
     */
    private function stripQuoteLine($line, $qstart, $qend) {
        $_buf = explode($qend, $line);
        $items = array();
        foreach ($_buf as $item) {
            $pair = explode('=', substr($item, 1), 2);
            if (count($pair) != 2) {
                continue;
            }
            $items[$pair[0]] = $pair[1];
        }
        return $items;
    }
    
    /**
     * @return array $rst
     */
    private function getLogCommon() {
        $rst = array();
        $rst['local_ip'] = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
        $rst['ua'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $rst['host'] = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $rst['url'] = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $rst['product'] = $this->_arrConf['product'];
        $rst['subsys'] = $this->_arrConf['subsys'];
        $rst['module'] = $this->_arrConf['logmodule'];
        $rst['client_ip'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        $reqtime = isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : 0;                 
        $rst['optime'] = microtime(true);
        $rst['filename'] = __FILE__;
        $rst['lineno'] = __LINE__;
        $rst['errno'] = 0;

        //get ess parts in url
        $url = isset($_SERVER['REQUEST_URL']) ? $_SERVER['REQUEST_URL'] : '';
        if ($url) {
            $urlparts = parse_url($url);
            if (isset($urlparts['query']) && $urlparts['query']) {
                $queryrst = array();
                parse_str($urlparts['query'], $queryrst);
                foreach ($this->_arrConf['comm_ess_keys'] as $strEssKey => $strCovKey) {
                    if (!$strCovKey) {
                        $strCovKey = $strEssKey;
                    }

                    if (array_key_exists($strCovKey, $queryrst)) {
                        $rst[$strCovKey] = $queryrst[$strCovKey];
                    } 
                }
            }
        }
        return $rst;
    }

    /**
     * @param string $loglevel
     * @param array @param
     * @return string $log
     */
    private function getLogStrHead($loglevel, $params) {
        $ts = date('m-d H:i:s');
        $app = $this->_arrConf['logmodule'];
        $pid = posix_getpid();
        $log = $loglevel . ': ' . $ts . ' ' . $app . ' * ' . $pid;
        return $log;
    }

    /**
     * @param array $params
     * @return string
     */
    private function getLogStrBody($params) {
        $semi = array();
        foreach ($params as $k => $v) {
            if (is_array($v) || is_object($v)) {
                $v = json_encode($v);
            }
            $semi[] = urlencode($k) . '=' . urlencode($v);
        }
        return implode(' ', $semi);
    }

    /**
     * @param integer $errorNo 
     * @param string  $errorMsg
     * @return 无
     */
    private function setError($errorNo, $errorMsg) {
        $this->_intErrNo = $errorNo;
        $this->_strErrMsg = $errorMsg;
    }

    /**
     * @return array 
     */
    public function errorInfo() {
        return array(
            'errNo' => $this->_intErrNo,
            'errMsg' => $this->_strErrMsg,
        );
    }

    /**
     *@return bool       
     */
    private function checkNode(){
        $flag = false;
        $env = Common_Conf::getenv

            ('phpui2');
        if(isset($env['node']) && $env['node'] == 'tc'){
            $flag = true;
        }
        return $flag;
    }

    /**
     * @param integer $level
     * @param string  $logtype
     * @param array   $params
     @return string
     */
    public function write($level,$logtype, $params){
        if (!$this->checkNode()) {
            return;
        } 
        if ($logtype != '') { 
            $params['logtype'] = $logtype;
        } 
        $strLog = $this->formatOldCommLog($level,$params); 
        $filePath = "/home/map/apps/rundata/phpui2/debug_logs/";
        $fileName = "phpui2.de".".".date("YmdH");
        //error_log($log_str,3,$file_path.$file_name);
    }

    /**
     * @param integer $level
     * @param array   $params
     * @return string
     */
    private function formatOldCommLog($level,$params,$msg='') {
        $comm_data = $this->getCommLogData();
        $params = array_merge($comm_data,$params);
        $logHead = $this->getLogStrHead($level,$params);
        $logBody = $this->getLogStrBody($params);
        $strLog = $logHead." [".$logBody . "]\n";
        return $strLog;
    }

    /**
     * @return array
     */
    private function getCommLogData(){
        global $g_logid;

        $commData = array();
        $commData['logid'] = $g_logid;
        $commData['sign'] = isset($_GET['sign']) ? $_GET['sign'] : '';
        return $commData;
    }
}
