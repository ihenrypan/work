<?php
class Common_Log{
    private $conf;
    private $errNo;
    private $errMsg;
    public static $logid;
    public static $logid64;

    public function __construct(){
        $this->conf = Common_Conf::get('log');
    }
    
    public function write($level, $logtype, $params=array()){
        if(!is_array($params)){
            $this->setError('400','params error');
            return false;
        }
        switch ($level){
            case 'NOTICE':
            	if($this->conf['loglevel']<2){
                    $this->setError('403','level forbidden');
                    return false;
                }
                $file_name = $this->conf['logfile'].'.log';
                break;
            case 'DEBUG':
            	if($this->conf['loglevel']<3){
                    $this->setError('403','level forbidden');
                    return false;
                }
                $file_name = $this->conf['logfile'].'.de';
                break;
            case 'FATAL':
                $file_name = $this->conf['logfile'].'.wf';
                break;
            case 'MONITOR':
                $file_name = $this->conf['logfile'].'.mo';
                break;
            default:
                $this->setError('404','unknown level');
                return false;
        }
        if($logtype != ''){
            $params['logtype'] = $logtype;
        }
        $log_str = $this->formatCommLog($level, $params);
        error_log($log_str,3, $this->conf['logfolder'] . '/' . $file_name.'.'.date("YmdH"));
    }
    
    private function formatCommLog($level, $params, $msg=''){
        $logid = $this->getLogid();
        $msg_pairs = $this->stripQuoteLine($msg, '[', ']');
        $params = array_merge($params, $this->getLogCommon(), $msg_pairs);
        if(!empty($params['BAIDUID'])){
            $params['baiduid'] = $params['BAIDUID'];
            unset($params['BAIDUID']);
        }
        $params['logid'] = $logid;
        $params['logid64'] = $this->getLogid64();

        //format to 
        $ess_items = array();
        foreach ($this->conf['comm_ess_keys'] as $ess_key=>$cov_key){
            if (! $cov_key){
                $cov_key = $ess_key;
            }
            $ess_items[$ess_key] = array_key_exists($cov_key, $params) ? $params[$cov_key] : '';
            unset($params[$cov_key]);
        }
        $params = array_merge($ess_items, $params);

        $log_head = $this->getLogStrHead($level, $params);
        $log_body = $this->getLogStrBody($params);
        $logstr = $log_head . ' [' . $log_body . "]\n";
        return $logstr;
    }

    public function getLogid(){
        if(self::$logid == false){
            $this->initLogid();
        }
        return self::$logid;
    }
    public function getLogid64(){
        if(self::$logid64 == false){
            $this->initLogid();
        }
        return self::$logid64;
    }

    private function initLogid(){
        $arr = gettimeofday();
        $logid = 0;
        $logid64 = 0;
        //logid
        if(getenv('HTTP_X_BD_LOGID')){
            $logid = trim(getenv('HTTP_X_BD_LOGID'));
        }
        if(getenv('HTTP_X_BD_LOGID64')){
            $logid64 = trim(getenv('HTTP_X_BD_LOGID64'));
        }
        if ($logid < 1){
            $logid = ((($arr['sec']*100000 + $arr['usec']/10) & 0x7FFFFFFF) | 0x80000000);
        }
        // wo don't have to generate a fake logid64
        self::$logid = $logid;
        self::$logid64 = $logid64;
    }

    private function stripQuoteLine($line, $q_start, $q_end){
        $_buf = explode($q_end, $line);
        $items = array();
        foreach ($_buf as $item){
            $pair = explode('=', substr($item, 1), 2);
            if (count($pair) != 2){
                continue;
            }
            $items[$pair[0]] = $pair[1];
        }
        return $items;
    }

    private function getLogCommon(){
        $rst = array();
        $rst['local_ip'] = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
        $rst['ua'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        $rst['host'] = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        $rst['url'] = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        $rst['product'] = $this->conf['product'];
        $rst['subsys'] = $this->conf['subsys'];
        $rst['module'] = $this->conf['logmodule'];
        $rst['client_ip'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
        $req_time = isset($_SERVER['REQUEST_TIME']) ? $_SERVER['REQUEST_TIME'] : 0;                 
        $rst['optime'] = microtime(true);
        $rst['filename'] = __FILE__;
        $rst['lineno'] = __LINE__;
        $rst['errno'] = 0;

        //get ess parts in url
        $url = isset($_SERVER['REQUEST_URL']) ? $_SERVER['REQUEST_URL'] : '';
        if ($url){
            $url_parts = parse_url($url);
            if (isset($url_parts['query']) && $url_parts['query']){
                $query_rst = array();
                parse_str($url_parts['query'], $query_rst);
                foreach ($this->conf['comm_ess_keys'] as $ess_key=>$cov_key){
                    if (! $cov_key){
                        $cov_key = $ess_key;
                    }

                    if (array_key_exists($cov_key, $query_rst)){
                        $rst[$cov_key] = $query_rst[$cov_key];
                    }
                }
            }
        }
        return $rst;
    }

    private function getLogStrHead($log_level, $params){
        $ts = date('m-d H:i:s');
        $app = $this->conf['logmodule'];
        $pid = posix_getpid();
        $log = $log_level . ': ' . $ts . ' ' . $app . ' * ' . $pid;
        return $log;
    }

    private function getLogStrBody($params){
        $semi = array();
        foreach ($params as $k=>$v){
            if(is_array($v) || is_object($v)) $v=json_encode($v);
            $semi[] = urlencode($k) . '=' . urlencode($v);
        }
        return implode(' ', $semi);
    }

    private function setError($errorNo, $errorMsg){
        $this->errNo = $errorNo;
        $this->errMsg = $errorMsg;
    }

    public function errorInfo(){
        return array(
            'errNo'=>$this->errNo,
            'errMsg'=>$this->errMsg,
        );
    }
}
