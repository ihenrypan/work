<?php
/**
 * 对后端数据发请求
 *
 * @packeg  common
 */
 class Common_Request{
    public $qt;
    public $conf;
    private static $_res_lbs_forward;
    public function __construct($qt){
        $this->qt = $qt;
        $conf = Common_Conf::get('api');
        if (isset($conf[$qt]) && count($conf[$qt])>0) {
            $this->conf = $conf[$qt];
        }else{
            $this->conf = false;
        }
    }

    public function getdata($args){
        global $uii_num;
        $apiconf = $this->conf;
        $res = '';
        if (@$args['phpui']['pass_flag'] === true) {
            $apiconf['method'] = 'pass';
            $apiconf['format'] = 'array';
        }else{
            if (isset($args['phpui'])) {
                unset($args['phpui']);
            }
        }
        if(@$args['mapdebug']==1){        
            $debugStart = Common_Func::microtime(true);
        }
        switch($apiconf['method']){
        	case 'get':
                $res = Common_Curl::get($apiconf['url'], $args, $apiconf['timeout']);
                Hook_Common_Monitor::addRequest();
                if ($this->qt == 'xapi' && $res == false) {
                    $res = Common_Curl::get($apiconf['url'], $args, $apiconf['timeout']);
                    Hook_Common_Monitor::addRequest();
                }
                break;
        	case 'bns_get':
        		$serviceList = Common_Conf::get('ral');
        		$service = $serviceList[$apiconf['rpcServer']];
        		$path = $apiconf['pathInfo'];        		
        		$headers = array();        		
                if (isset($apiconf['host'])&&!empty($apiconf['host'])) {
                    $headers['host'] = $apiconf['host'];
                }
        		$res = Common_Ral::ralGetRequest($service, $path,$args,$headers);
                break;
            case 'ip_get':
        		$serviceList = Common_Conf::get('ral');
        		$service = $serviceList[$apiconf['rpcServer']];
                $path = $apiconf['pathInfo'];        		
                $timeOut = $apiconf['timeout'];
        		$headers = array();        		
                if (isset($apiconf['host'])&&!empty($apiconf['host'])) {
                    $headers['host'] = $apiconf['host'];
                }
        		$res = Common_Ral::ralIPGetRequest($service, $path,$args,$headers, $timeOut);
        		break;     	            
            case 'post':
                $res = Common_Curl::post($apiconf['url'], $args,$_POST, $apiconf['timeout']);
                break;
            case 'bns_post':
            	$serviceList = Common_Conf::get('ral');
            	$service = $serviceList[$apiconf['rpcServer']];
            	$path = $apiconf['pathInfo'];
            	$encodeType = $apiconf['encodeType'];            	
        		$headers = array();        		
                if (isset($apiconf['host'])&&!empty($apiconf['host'])) {
                    $headers['host'] = $apiconf['host'];
                }
            	$res = Common_Ral::ralPostRequest($service,$path,$encodeType,$args,$_POST,$headers); 
                break;   
            case 'ip_post':
            	$serviceList = Common_Conf::get('ral');
            	$service = $serviceList[$apiconf['rpcServer']];
                $path = $apiconf['pathInfo'];
                $timeOut = $apiconf['timeout'];
            	$encodeType = $apiconf['encodeType'];            	
        		$headers = array();        		
                if (isset($apiconf['host'])&&!empty($apiconf['host'])) {
                    $headers['host'] = $apiconf['host'];
                }
            	$res = Common_Ral::ralIPPostRequest($service,$path,$encodeType,$args,$_POST,$headers, $timeOut); 
            	break;           
            case 'mcpack':
                $uii_num++;
                $args['lbs_forward'] = json_decode($args['lbs_forward'],true);
                $args['rpcServer'] = $apiconf['rpcServer'];
                $res = Common_Ral::request($args);
                break;
            case 'pass':
                $res = isset($args['phpui']['res']) ? $args['phpui']['res'] : array();
                break;
            default:
                $res = '';
        }
        if(@$args['mapdebug']==1){
            $debug['child_request'] = array();
            $debug['child_request']['module_name'] = 'phpui';
            switch($apiconf['method']){
                case 'mcpack':
                    $debugReq = $args;
                    $debugRes = $res;
                    $debugRpcServer = Common_International::adaptForInternational($debugReq);
                    $debugReq['rpcServer'] = $debugRpcServer;
                    //添加必需参数
                    $debugReq = Common_Ral::addParameters($debugReq);
                    //utf8->gbk
                    if(is_array($debugReq)){
                        Common_Func::utf8ToGbkArray($debugReq);
                    }else{
                        return false;
                    }
                    $debugConf = Common_Conf::get('ral');
                    $debugBns = $debugConf[$debugReq['rpcServer']];
                    $debug['child_request']['bns'] = $debugBns;
                    if($apiconf['format'] == 'json' && $apiconf['encode'] == 'gbk'){
                        $debugRes = Common_Func::gbkToUtf8Array($debugRes);
                    }
                    $debug['child_request']['protol'] = 'mcpack';
                    $debug['child_request']['data']['data'] = $debugReq;
                    $debug['child_request']['response'] = $debugRes;
                    $debug['child_request']['response_time'] = (Common_Func::microtime(true) - $debugStart)*1000;
                    $debug['child_request']['delimiter'] = '------------';
                    echo json_encode($debug);
                    echo '------------';
                    break;      
                case 'get':
                    $debugReq = $args;
                    $debugRes = $res;
                    if($apiconf['format'] == 'json' && $apiconf['encode'] == 'gbk'){
                        $debugRes = Common_Func::gbkToUtf8Array($debugRes);
                    }
                    $debug['child_request']['protol'] = 'http';
                    if(is_array($debugReq) && count($debugReq)>0){
                        $debugReq = $apiconf['url'].'?'.str_replace('+', '%20', http_build_query($debugReq));
                    }
                    $debug['child_request']['data']['url'] = $debugReq;
                    $debug['child_request']['response'] = json_decode($debugRes,true);
                    $debug['child_request']['response_timei'] = (Common_Func::microtime(true) - $debugStart)*1000;
                    $debug['child_request']['delimiter'] = '------------';
                    echo json_encode($debug);
                    echo '------------';
                    break;
                case 'post':
                    $debugReq = $args;
                    $debugRes = $res;
                    if($apiconf['format'] == 'json' && $apiconf['encode'] == 'gbk'){
                        $debugRes = Common_Func::gbkToUtf8Array($debugRes);
                    }
                    $debug['child_request']['protol'] = 'http';
                    if(is_array($debugReq) && count($debugReq)>0){
                        $debugReq = $apiconf['url'].'?'.str_replace('+', '%20', http_build_query($debugReq));
                    }
                    $debug['child_request']['data']['url'] = $debugReq;
                    $debug['child_request']['data']['data'] = $_POST;
                    $debug['child_request']['response'] = json_decode($debugRes,true);
                    $debug['child_request']['response_time'] = (Common_Func::microtime(true) - $debugStart)*1000;
                    $debug['child_request']['delimiter'] = '------------';
                    echo json_encode($debug);
                    echo '------------';
                    break;
                default:
                    break;

            }
        }
        if(isset($res['data']['lbs_forward'])){
        	$lbsForward = $res['data']['lbs_forward'];
        	if (is_string($lbsForward)) {
        		$lbsForward = json_decode($lbsForward,true);
        	}
        	if(!is_array($lbsForward)) {
        		$lbsForward = array();
        	}
            self::$_res_lbs_forward = empty(self::$_res_lbs_forward)
                ? $lbsForward :array_merge(self::$_res_lbs_forward,$lbsForward);
        }
        switch($apiconf['format']){
	        case 'json':
	            if($apiconf['encode'] == 'gbk'){
	                $res = Common_Func::gbkToUtf8Array($res);
	            }
	            $res = json_decode($res, TRUE);
	            break;
        }
        $reNo = is_array($res) ? 0 : 600;
        $reMsg = is_array($res) ? 'OK' : 'api error';
        $res['phpui'] = array(
            'errNo' => $reNo,
            'errMsg' => $reMsg,
        );
        return $res;
    }
    
    public function getResLbsForward(){
        return self::$_res_lbs_forward;
    }
 }
