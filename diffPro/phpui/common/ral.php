<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file ral.php
 * @author map(com@baidu.com)
 * @date 2014/08/20 16:39:03
 * @brief 
 * 
 **/

class Common_Ral{

    static private $_response;

    static public function request($req){   
    	return self::ralNsHeadRequest($req);
    }
    
    /**
     * 通过ral获取IP PORT发起http的get请求
     * @param string $service: 所请求服务的bns节点
     * @param string $path: 请求服务的路径信息
     * @param array $getParam: get参数，数组形式     
     * @param array $headers: http相关的header信息，如cookie， host等
     */
    static public function ralIPGetRequest($service,$path = "/",$getParam = array(),$headers = array(),$timeOut = 1) {    	
        $ipArray = array(
            '10.23.21.21',
            '10.23.21.22',
            '10.23.21.23',
            '10.23.21.24',
            '10.23.21.30',
        );
        
        $timeStart = microtime(true);
        	
    	$cookie = isset($headers['cookie']) ? $headers['cookie'] : array();
    	if (isset($_COOKIE['BDUSS'])) {
    		$cookie = array_merge($cookie,array("BDUSS"=>$_COOKIE['BDUSS']));
    	}
    	$headers['cookie'] = $cookie;    	
    	$headers['pathInfo'] = trim($path);

        $server = ral_get_server($service);
        if($server){
            $ser = array();
            $index = mt_rand(0, count($ipArray) - 1);
            $ser['ip'] = $ipArray[$index];
            $ser['port'] = '8000';
            error_log('curlip='.$ser['ip']."\t".'ralip='.$server['ip']."\n", 3, "/home/map/apps/rundata/phpui2/logs_new/ninf_debug.log" );
            $result = Common_Curl::ipGet($ser, $headers, $getParam, $timeOut);
        } else {
            $result = false;
        }
    	
    	//进行debug日志记录
    	$debugArray = array();
    	$debugArray['input'] = func_get_args();
    	$debugArray['errno'] = ral_get_errno();
    	$debugArray['error_msg'] = ral_get_error();
    	$debugArray['http_code'] = ral_get_protocol_code();
    	$debugArray['ral_get_cost_time'] = (microtime(true) - $timeStart)*1000;    	    
    	if (class_exists('Common_Log_DebugLog')) {
    		Common_Log_DebugLog::setDebugLogData("ral_get", $debugArray);
    	}
    		    
    	return $result;    	
    }
    
    /**
     * 通过ral获取IP PORT发起http的post请求
     * @param string $service: 所请求服务的bns节点
     * @param string $path: 请求服务的路径信息
     * @param int $encodeType: 对post参数的encode类型, 0: url_encode, 1:json_encode,其他不转码
     * @param array $getParam: get参数，数组形式,没有可传空数组
     * @param array $postParam: post参数，数组形式
     * @param array $headers: http相关的header信息，如cookie， host等
     */
    static public function ralIPPostRequest($service,$path="/",$encodeType = 0,
    		$getParam=array(),$postParam=array(),$headers=array(),$timeOut = 3) {

        $timeStart = microtime(true);
    	
    	!is_array($headers) ? $headers = array() : "";
    	
        $cookie = isset($headers['cookie']) ? $headers['cookie'] : array();
    	if (isset($_COOKIE['BDUSS'])) {
    		$cookie = array_merge($cookie,array("BDUSS"=>$_COOKIE['BDUSS']));
    	}
    	
    	$headers['cookie'] = $cookie;
    	$headers['pathInfo'] = trim($path);
    	
    	if ($encodeType == 0) {
    		$postParam = http_build_query($postParam);
    	} else if ($encodeType == 1) {
    		$postParam = json_encode($postParam);
    	}     	
    	
        $server = ral_get_server($service);    
        if($server){
            $result = Common_Curl::ipPost($server, $getParam, $postParam, $headers, $timeOut);
        } else {
            $result = false;
        }

    	$debugArray = array();
    	$debugArray['input'] = func_get_args();
    	$debugArray['errno'] = ral_get_errno();
    	$debugArray['error_msg'] = ral_get_error();
    	$debugArray['http_code'] = ral_get_protocol_code();
    	$debugArray['ral_post_cost_time'] = (microtime(true) - $timeStart) * 1000;
    	if (class_exists('Common_Log_DebugLog')) {
    		Common_Log_DebugLog::setDebugLogData("ral_post", $debugArray);
    	}
    	
    	return $result;
    }

    /**
     * 通过ral发起http的get请求
     * @param string $service: 所请求服务的bns节点
     * @param string $path: 请求服务的路径信息
     * @param array $getParam: get参数，数组形式     
     * @param array $headers: http相关的header信息，如cookie， host等
     */
    static public function ralGetRequest($service,$path = "/",$getParam = array(),$headers = array()) {    	
    	$timeStart = microtime(true);
    	
    	$cookie = isset($headers['cookie']) ? $headers['cookie'] : array();
    	if (isset($_COOKIE['BDUSS'])) {
    		$cookie = array_merge($cookie,array("BDUSS"=>$_COOKIE['BDUSS']));
    	}
    	$headers['cookie'] = $cookie;    	
    	$headers['pathinfo'] = trim($path);
    	$headers['querystring'] = str_replace('+', '%20', http_build_query($getParam));
    	
    	$result = ral($service,'get',array(),'',$headers);
    	
    	//进行debug日志记录
    	$debugArray = array();
    	$debugArray['input'] = func_get_args();
    	$debugArray['errno'] = ral_get_errno();
    	$debugArray['error_msg'] = ral_get_error();
    	$debugArray['http_code'] = ral_get_protocol_code();
    	$debugArray['ral_get_cost_time'] = (microtime(true) - $timeStart)*1000;    	    
    	if (class_exists('Common_Log_DebugLog')) {
    		Common_Log_DebugLog::setDebugLogData("ral_get", $debugArray);
    	}
    		    
    	return $result;    	
    }
    
    /**
     * 通过ral发起http的post请求
     * @param string $service: 所请求服务的bns节点
     * @param string $path: 请求服务的路径信息
     * @param int $encodeType: 对post参数的encode类型, 0: url_encode, 1:json_encode,其他不转码
     * @param array $getParam: get参数，数组形式,没有可传空数组
     * @param array $postParam: post参数，数组形式
     * @param array $headers: http相关的header信息，如cookie， host等
     */
    static public function ralPostRequest($service,$path="/",$encodeType = 0,
    		$getParam=array(),$postParam=array(),$headers=array()) {
    	
    	$timeStart = microtime(true);
    	
    	!is_array($headers) ? $headers = array() : "";
    	
        $cookie = isset($headers['cookie']) ? $headers['cookie'] : array();
    	if (isset($_COOKIE['BDUSS'])) {
    		$cookie = array_merge($cookie,array("BDUSS"=>$_COOKIE['BDUSS']));
    	}
    	
    	$headers['cookie'] = $cookie;
    	$headers['pathinfo'] = trim($path);
    	$headers['querystring'] = str_replace('+', '%20', http_build_query($getParam));
    	
    	if ($encodeType == 0) {
    		$postParam = http_build_query($postParam);
    	} else if ($encodeType == 1) {
    		$postParam = json_encode($postParam);
    	}     	
    	
    	$result = ral($service,'post',$postParam,'',$headers);
    	
    	$debugArray = array();
    	$debugArray['input'] = func_get_args();
    	$debugArray['errno'] = ral_get_errno();
    	$debugArray['error_msg'] = ral_get_error();
    	$debugArray['http_code'] = ral_get_protocol_code();
    	$debugArray['ral_post_cost_time'] = (microtime(true) - $timeStart) * 1000;
    	if (class_exists('Common_Log_DebugLog')) {
    		Common_Log_DebugLog::setDebugLogData("ral_post", $debugArray);
    	}
    	
    	return $result;
    }
    
    static public function ralNsHeadRequest($req) {
    	$rpcServer = Common_International::adaptForInternational($req);    	
    	$req['rpcServer'] = $rpcServer;
    	 
    	//添加必需参数
    	$req = self::addParameters($req);
    	//utf8->gbk
    	if(is_array($req)){
    		Common_Func::utf8ToGbkArray($req);
    	}else{
    		return false;
    	}
    	
    	ral_set_log(RAL_LOG_MODULE,'phpui');
    	$conf = Common_Conf::get('ral');
    	$bns = $conf[$req['rpcServer']];
    	$res = ral($bns,'',$req,'');
    	if(@$_GET['mcpack_output_debug'] == 'debug'){
    		var_dump($res);
    	}
    	
    	if($res == false){
    		return false;
    	}
    	if ((isset($res['error']) && $res['error'] == '-1')
    	|| (isset($res['result']['error']) && $res['result']['error']==-1)) {
    		return false;
    	}
    	//重组res数据内容
    	if(isset($res['uii_data'])){
    		self::$_response['uii_data'] = $res['uii_data'];
    		unset($res['uii_data']);
    	}
    	self::$_response['data'] = $res;
    	//gbk->utf8
    	$qtNotNeedDecode = array('realtime_nav','guideinfo_navi','nav_cars','roadinfo_navi','naviext','multinavi');
    	if($req['qt']=='tuan_poi' && isset($res['is_utf8']) && $res['is_utf8'] == 1){
    		$qtNotNeedDecode[] = 'tuan_poi';
    	}
    	if(!in_array($req['qt'],$qtNotNeedDecode)){
    		Common_Func::gbkToUtf8Array(self::$_response);
    	}
    	return self::$_response;
    }
    
    public function addParameters($req){
        
        // set MCITY and client ip and baiduid              
        $req['dcity'] = isset($_COOKIE['MCITY']) ? $_COOKIE['MCITY'] : '';
        $req['clientip'] = Common_Ip::getUserClientIp();
        if (!isset($req['clientip'])) {
        	$req['clientip'] = $_SERVER['REMOTE_ADDR'];
        }
        $req['baiduid'] = @$_COOKIE['BAIDUID'];
        //添加product、subsys透传到uii
        $lbs_product = self::get_product();
        if($lbs_product != null){
            $req['lbs_product'] = $lbs_product;
        }
        $lbs_subsys = self::get_subsys();
        if($lbs_subsys != null){
            $req['lbs_subsys'] = $lbs_subsys;
        }
        $req['provider'] = 'phpui';
        
        global $g_logid;
        $req['logid'] = $g_logid;
        return $req;
    } 

    public function get_product(){
        if(getenv('HTTP_X_BD_PRODUCT')){
            return trim(getenv('HTTP_X_BD_PRODUCT'));
        }
        else if(getenv('HTTP_HTTP_X_BD_PRODUCT')){
            //兼容前端配置有误多加了HTTP_前缀
            return trim(getenv('HTTP_HTTP_X_BD_PRODUCT'));
        }
        else{
            //如果前端没有设置就不返回product，默认值无意义
            return null;
        }
    }

    public function get_subsys(){
        if(getenv('HTTP_X_BD_SUBSYS')){
            return trim(getenv('HTTP_X_BD_SUBSYS'));
        }
        else if(getenv('HTTP_HTTP_X_BD_SUBSYS')){
            return trim(getenv('HTTP_HTTP_X_BD_SUBSYS'));
        }
        else{
            return null;
        }
    }
}
/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
