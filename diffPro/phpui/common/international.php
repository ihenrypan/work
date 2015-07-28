<?php

class Common_International{
	
	static private $isInternational = null;
    static private $region = null;
	
    /**
     * @param array $args: 客户端的请求参数
     * @return string $rpcServer: 最终返回的rpcServer,明确发送的是uii
     */
    static public function adaptForInternational($args){    
    	$abroad = false;
    	$needJudge = false;    	
    	$abroadDaObj = new Common_International();
    	if(isset($args['qt'])){
    		$needJudge =  $abroadDaObj->needJudgedInternational($args['qt']);
    	}
    	if($needJudge){
    		$judged = $abroadDaObj->hasJudgedInternational();
    		if(!$judged){
    			$abroadDaObj->judgeInternational($args);
    		}
    		$abroad = $abroadDaObj->getInternationalResult();
    	}
    	$rpcServer = $args['rpcServer'];
    	if($abroad){
    		$rpcServer = $abroadDaObj->getInternationalProxy();
    	}
    	return $rpcServer;
    }
	
    /**
     * 获取国际化da返回的区域码
     * @return $region: 区域码，大陆：0，台湾：9000
     */
    static public function getRegion(){
    	return self::$region;
    }
	
	/**
	 * 判断是否在国际化词表中，是否要进行国际化DA处理
	 * @param string $qt
	 * @return boolean
	 */
	public function needJudgedInternational($qt){
		$needJudge = false;
		$interQts = Common_Conf::get("international");
		
		if(in_array($qt, $interQts)){
			$needJudge = true;
		}
		return $needJudge;
	}
	
	/**
	 * 判断是否已经做完国际化的DA
	 * @return boolean $flag
	 */
	public function hasJudgedInternational(){	
		$isJudged = false;
		if(self::$isInternational === null){
			$isJudged = false;
		}else{
			$isJudged = true;
		}		
		return $isJudged;
	}
	
	/**
	 * 返回是否要走国际化uii-proxy的结果
	 * @return boolean: true->要国际化， false->不用国际化
	 */
	public function getInternationalResult(){
		return self::$isInternational;
	}
	
	/**
	 * 返回国际化的uii_proxy的flag
	 * @return string $uii_proxy: 目前采用international
	 */
	public function getInternationalProxy(){
		$uii_proxy = "international";
		return 	$uii_proxy;
	}
	
	/**
	 *
	 * 判断是否是国际化需求，并赋值给成员变量
	 * @param array $args : 请求参数
	 * @return boolean $isAboard: true=>国际化 ，false=>国内
	 */
	public function judgeInternational($req){
		$isAboard = false;
		
		$args = $req;
		$args['rpcServer'] = 'abroad';
		
		$args = self::addParameters($args);
		if(is_array($args)){
			Common_Func::utf8ToGbkArray($args);
		}else{
			$isAboard = false;
			self::$isInternational = $isAboard;
			return;
		}
		
		ral_set_log(RAL_LOG_MODULE,'phpui');
		$conf = Common_Conf::get('ral');
		$bns = $conf[$args['rpcServer']];
		$res = ral($bns,'',$args,'');
		if($res == false){
			$isAboard = false;
			self::$isInternational = $isAboard;
			return;
		}
		
		if((isset($res['error']) && $res['error'] == '-1')
		|| (isset($res['result']['error']) && $res['result']['error']==-1)){
			$isAboard = false;
			self::$isInternational = $isAboard;
			return;
		}
		
		if($res['which_uii'] && $res['which_uii'] !== 'china'){
			$isAboard = true;
		}
        
        if(isset($res['region'])){
	        self::$region = $res['region'];	
        }
		self::$isInternational = $isAboard;
	}	

	private function addParameters($args){
		$req = $args;
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
	
	private function get_product(){
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
	
	private function get_subsys(){
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
