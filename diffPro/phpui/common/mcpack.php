<?php

class Common_Mcpack{
    const MCPACK_RPC_CALL = 0;
    const MCPACK_USER_CALL = 1;

    const MCPACK_RPC_PHPTYPE = 0;
    const MCPACK_RPC_VERSION = 1000;
    const MCPACK_RPC_NAME = "PHPMCPACK_RPC";


    private $_arrConf = null;
    private $_error = null;
    private $_objList = null;

    private static $_errinfo = false;
    private static $_objRpc = false;
    /**
    * 保存错误信息
    * @var string
    */
    private static $_errMsg;

    /**
    * @var $through SERVER环境变量是否穿透、传递到uii
    */
    private static $_through = false;
    
    /**
    * 保存请求返回的mcpack数组
    * @var unknown_type
    */
    private static $_response;
    
    public static $ID_NOTFOUND = array('message' => 'no found id');
    public static $ID_NOTMATCH = array('message' => 'id no match');
    public static $PARSE_ERROR = array('message' => 'Parse error');
    public static $UNKNOW_ERROR = array('message' => 'unknow error');
    public static $SERVER_CONF_NOT_FOUND = array('message' => "Server Configure not found");
    public static $METHOD_CONF_NOT_FOUND = array('message' => "Method Configure not found");
    public static $UNKNOW_TYPE = array('message' => 'Unkonw type in configure');
    public static $CONTENT_NOT_FOUND = array('message' => 'Content not found');
    public static $INVALID_RES = array('message' => 'Invalid Response');
    public static $NOFOUNDMATCH = array('message' => 'No found Machine');
    
    public function __construct($arrConf)
    {
        $this->_arrConf = $arrConf;
    }

    /**
     * 发送请求
     * $req = array(
     *      'qt' => 's',
     *      'clientip' => '64.12.56.78',
     *      .......
     * );
     *
     * @param $req request array that send to uii
     *
     * @return bool
     */
    public static function request($req){
        // set MCITY and client ip and baiduid
        global $g_logid;        
        $req['dcity'] = @$_COOKIE['MCITY'];
        if (!isset($req['dcity'])) {
        	$req['dcity'] = '';
        }
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
        if(is_array($req)){
            //将请求从UTF-8转化为GBK
            //self::iconv_array("UTF-8", "GBK", $req);
            Common_Func::utf8ToGbkArray($req);
        }else{
            return false;
        }
        $arrConf = array( 'provider' => 'phpui',
                'logid' => $g_logid);
        $res = array();
        if(self::$_objRpc === false){
            self::$_objRpc = new Common_Mcpack(Common_Conf::get('mcpack'));
        }
        $result = self::$_objRpc->rpcCall($req['rpcServer'], 'request', $req, $res, $arrConf);
        if(@$_GET['mcpack_output_debug'] == 'debug'){
            var_dump($res);
        }
        if (self::$_objRpc->getLastError()){
                self::$_errMsg = self::$_objRpc->getLastError();
                self::$_errMsg = self::$_errMsg['message'];
                self::$_response = false;
                return false;
        }
        self::$_errMsg = false;
        // add ui_data for uii->phpui description
        if(isset($res['uii_data'])){
            self::$_response['uii_data'] = $res['uii_data'];
            unset($res['uii_data']);
        }
        if((isset($res['error']) && $res['error'] == '-1') 
            || (isset($res['result']) && isset($res['result']['error']) && $res['result']['error']==-1)){
            self::$_objRpc->setLastError($res);
            return false;
        }
        self::$_response['data'] = $res;
        self::$_response['extra_data'] = $result;
        //将返回结果从GBK转化为UTF-8
        if(!in_array($req['qt'],array('realtime_nav','guideinfo_navi','nav_cars','roadinfo_navi','naviext','multinavi'))){
            Common_Func::gbkToUtf8Array(self::$_response);
        }
        return self::$_response;
    }
    
    /**
     * 单个调用
     * $rpcMethod 调用的名字
     * $arrInput  输入参数，一个array
     * $arrOuput  输出参数
     * $arrConf   相关配置
     **/
    public function rpcCall($rpcServer, $rpcMethod, $arrInput, &$arrOutput, $arrConf = false){
        $this->setLastError(array());
        if (!isset($this->_arrConf[$rpcServer])) {
            $this->setLastError(self::$SERVER_CONF_NOT_FOUND);
            return null;
        }
        $arrRpcConf = $this->_arrConf[$rpcServer];

        if ($arrRpcConf == null) {
            $this->setLastError(self::$SERVER_CONF_NOT_FOUND);
            return null;
        }
        //默认协议
        $arrMethod = array( 'proto' => 'McpackProto');
        if (isset($arrRpcConf['interface'][$rpcMethod])) {
            $arrMethod = $arrRpcConf['interface'][$rpcMethod];
        }
        if ($arrConf) {
            foreach ($arrConf as $key => $item) {
                $arrMethod[$key] = $item;
            }
        }

        switch ($arrRpcConf['type']) {

            case self::MCPACK_RPC_CALL:
            case self::MCPACK_USER_CALL:
                $obj = $this->getClassName($arrMethod);
                $send = null;
                //序列化
                if ($obj->Serializer($arrInput, $send, $rpcServer, $rpcMethod, $arrMethod) == false)
                {
                    $this->setLastError($obj->getLastError());
                    return null;
                }
                //获取机器
                $recv = null;
                $arrBalanceConf = null;
                if (isset($arrRpcConf['talk'])) {
                    $arrBalanceConf = $arrRpcConf['talk'];
                }
                $useconnectpool = true;
                $arrMachine = array();
                $selServer = null;
                if (!$useconnectpool) {
                    //获取机器 not use this 
                    $arrMachine = self::getMachine($arrRpcConf['machine'], $arrMethod, $arrBalanceConf);
                } else {
                	//for balance :check connect by socket of the machine
                    if (self::getSocket($arrRpcConf['machine'], $arrMethod, $arrBalanceConf, $sd, $selServer)) {
                        $arrMachine = $selServer;
                        $arrMachine['socket'] = $sd;
                    } else {
                    	//the socket connect is wrong
                		self::logs($selServer,'socket connect error;','connect');
                        //失败,错误号在getSocket里面处理过了
                        return null;
                    }
                }
                $mach = array(
                    'machine' => $arrMachine,
                    'talk' => $arrRpcConf['talk'],
                    'config' => $arrRpcConf,
                    'params' => $arrConf,
                );
                if(@$_GET['mcpack_machine_debug'] == 'debug'){
                    echo json_encode($mach);exit;
                }
                if ($mach['machine'] == false) {
                    return null;
                }
                if ($obj->TalkWith($send, $recv, $mach) == false)
                {
                	//error of mcpack connnect
                	self::logs($arrInput,$recv);
                	
                    $this->setLastError($obj->getLastError());
                    //使用connectpool需要反馈
                    if ($useconnectpool) {
                        Common_ConnectionMan::setUnavailable($selServer);
                        fclose($mach['machine']['socket']);
                    }
                    return null;
                }
                $arrResult = null;
                if ($obj->Deserializer($recv, $arrOutput, $arrResult,
                    $rpcServer, $rpcMethod, $arrMethod) == false)
                {
                    $this->setLastError($obj->getLastError());
                    return null;
                }
                if ($useconnectpool) {
                    fclose($mach['machine']['socket']);
                }
                return $arrResult;
            default:
                $this->setLastError(McpackRpcError::$UNKONW_TYPE);
                return null;
        }
        return null;
    }
    
    /**
     * 获取最后一次的错误返回, 空为没有错误
     */
    public static function getLastError()
    {
        return self::$_errinfo;
    }
    
    private function setLastError($err)
    {
        $this->_error = $err;
        self::$_errinfo = $err;
    }

    private function getSocket($machineList, $arrConf, $arrBalanceConf, &$sd, &$selServer)
    {
        $arrStrategy = null;
        $intBalanceCode = false;
        $intConnectTimeout = 1000;
        if (isset($arrBalanceConf['strategy'])) {
            $arrStrategy = $arrBalanceConf['strategy'];
        }
        if (isset($arrBalanceConf['connect_timeout_ms'])) {
            $intConnectTimeout = $arrBalanceConf['connect_timeout_ms'];
        }
        if (isset($arrConf['balance'])) {
            $intBalanceCode = $arrConf['balance'];
        }

        if ($intBalanceCode < 0) {
            $intBalanceCode = false;
        }
        if ($intBalanceCode !== false) {
            if (count($machineList) == 0) {
                $this->setLastError(McpackRpcError::$NOFOUNDMATCH);
                return false;
            }
            $intBalanceCode = $intBalanceCode % count($machineList);
        }
        $sd = Common_ConnectionMan::getSocket($selServer, $machineList, $intConnectTimeout, $arrStrategy, $intBalanceCode);
        if ($sd == false) {
            $err = Common_ConnectionMan::getLastErrno();
        } else {
            return true;
        }
        $this->setLastError(array('message' => "php connectpool connect fail err[$err]"));
        return false;
    }
    private function getMachine($machineList, $arrConf, $arrBalanceConf)
    {
        //没有connectpool的存在, 简单处理
        if (!isset($arrBalanceConf['algorithm'])) {
            $key = -1;
            if (isset($arrConf['balance'])) {
                $key = $arrConf['balance'];
            }
            if ($key == -1) {
                $key = rand();
            }
            if (count($machineList) == 0) {
                $this->setLastError(self::$NOFOUNDMATCH);
                return false;
            }
            $num = $key%count($machineList);
            return $machineList[$num];
        }
        return false;

    }

    private function getClassName($arrConf)
    {
        $filename = null;
        /*if (isset($arrConf['proto_file'])) {
           $filename = $arrConf['proto_file'];
        }
       */
        $classname = 'McpackProto';
        if (isset($arrConf['proto'])) {
            $classname = $arrConf['proto'];
        }
//        if ($classname == 'McpackProto' && $filename == null) {
         $filename = dirname(__FILE__).'/mcpackrpc/mcpackproto.class.php';
  //      }
        if (isset($this->objList[$classname])) {
            return $this->objList[$classname];
        }
        require_once($filename);
        $this->objList[$classname] = new $classname;
        return $this->objList[$classname];
    }
    /**
     * note the error logs
     * @param unknown_type $reqs
     * @param unknown_type $error_msg
     */
    private function logs($reqs,$error_msg,$sontype='send'){
    	$logobj = new Common_Log();    	
    	if(is_array($reqs)){
            $reqs = json_encode(Common_Func::gbkToUtf8Array($reqs));
    	}
    	if(is_array($error_msg)){
    		$error_msg = json_encode($error_msg);
    	}    	
        $logobj->write('FATAL', 'mcpack',
	                array(
	                	'sontype'=>$sontype,
	                	'param'=>$reqs,
	                	'message'=>$error_msg,
	                	'file'=>__FILE__,
	                	'line'=>__LINE__,
	                )
                );
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
