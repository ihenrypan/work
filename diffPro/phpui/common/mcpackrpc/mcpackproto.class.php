<?php
/***************************************************************************
 * 
 * Copyright (c) 2009 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file mcpackproto.class.php
 * @author baonh(baonenghui@baidu.com)
 * @brief 
 *  
 **/
require_once(dirname(__FILE__).'/socket.class.php');
//require_once(dirname(__FILE__).'/../../phpconnectpool/ConnectionMan.class.php');

class McpackProto
{
    private static $_errInfo;

    public static function getLastError()
    {
        return self::$_errInfo;
    }

    public static function setLastError($err)
    {
        self::$_errInfo = $err;
    }
    public static function Serializer($arrInput, &$send, 
        $rpcServer = null, $rpcMethod = null, $arrConf = null)
    {
        $arrPack = $arrInput;
        //mcpack
        if (isset($arrConf['McpackVersion']) && isset($arrConf['McpackSize'])) {
            $arr = mc_pack_array2pack($arrPack, $arrConf['McpackSize'], $arrConf['McpackVersion']);
        } else if (isset($arrConf['McpackVersion'])) {
            $arr = mc_pack_array2pack($arrPack, $arrConf['McpackVersion']);
        } else if (isset($arrConf['McpackSize'])) {
            $arr = mc_pack_array2pack($arrPack, $arrConf['McpackSize']);
        } else {
            $arr = mc_pack_array2pack($arrPack);
        }
        if(@$_GET['mcpack_input_debug']== 'debug'){
            var_dump($arrInput);
        }
        if (!$arr) {
            return false;
        }
        $bodylen = strlen($arr);
        $logid = 0;
        if (isset($arrConf['logid'])) {
            $logid = $arrConf['logid']; 
        } else {
            $logid = rand();
        }
        $provider = Common_Mcpack::MCPACK_RPC_VERSION;
        if (isset($arrConf['provider']) && !empty($arrConf['provider'])){
        	$provider = $arrConf['provider'];
        }
        $nshead = pack("SSIa16III", 
            0, //id 
            Common_Mcpack::MCPACK_RPC_VERSION, //version
            $logid, //logid
            $provider, //provider
            0xfb709394, //magic_num
            0, //reserved
            $bodylen);
        $send = $nshead.$arr;
        return true;
    }

    public static function Deserializer($recv, &$Output, &$result,
        $rpcServer = null, $rpcMethod = null, $arrConf = null)
    {
        if (strlen($recv) == 0) {
            self::setLastError(Common_Mcpack::$INVALID_RES);
            return false;
        }
        $head_arr = unpack("Sid/Sversion/Ilogid/a16provider/Imagic_num/Ireserved/Ibody_len",
            $recv);
        if (!$head_arr) {
            return false;
        }

        $arr = mc_pack_pack2array(substr($recv, 36, $head_arr['body_len']));
        if (!$arr) {
            self::setLastError(Common_Mcpack::$PARSE_ERROR);
            return false;
        }
        if(@$_GET['mcpack_pack_debug'] == 'debug'){
            var_dump($head_arr,$arr);exit;
        }
        $Output = $arr;
        return true;
    }
 
    public static function TalkWith($send, &$recv, $mac)
    {
        $read_timeout_ms = 1000;
        $write_timeout_ms = 1000;
        $connect_timeout_ms  = 1000;
        $retry = 1;
        if (isset($mac['talk']['read_timeout_ms'])) {
            $read_timeout_ms = $mac['talk']['read_timeout_ms'];
        }
        if (isset($mac['talk']['write_timeout_ms'])) {
            $write_timeout_ms = $mac['talk']['write_timeout_ms'];
        }
        if (isset($mac['talk']['connect_timeout_ms'])) {
            $connect_timeout_ms = $mac['talk']['connect_timeout_ms'];
        }

        if (isset($mac['talk']['retry'])) {
            $retry = $mac['talk']['retry'];
        }
        $socketfd = null;
        if (isset($mac['machine'])) {
            if (isset($mac['machine']['socket'])) {
                $socketfd = $mac['machine']['socket'];
            }
        }
        
        $objSock = new CPHPRPCSocketWrapper ($read_timeout_ms, $write_timeout_ms, $connect_timeout_ms, $socketfd);
        $arrErr = null;
        if (null == $socketfd) {
            $arrErr = null; 
            for ($i = 0; $i < $retry; $i++) {
                $arrErr = null; 
                if ($objSock->connect($mac['machine']['host'], $mac['machine']['port']) == false) {
                    $arrErr = $objSock->getLastError();
                } else {
                    break;
                }
            }
        }
        if ($arrErr === null && $objSock->send($send, strlen($send)) == false) {
            $arrErr = $objSock->getLastError();
        }
        if ($arrErr === null) {
            //nshead 36
            $nshead = $objSock->receive(36);
            if ($nshead === false) 
            {
                $arrErr = $objSock->getLastError();
            } else {
                $recv = $nshead;
                $head_arr = unpack("Sid/Sversion/Ilogid/a16provider/Imagic_num/Ireserved/Ibody_len",
                    $nshead);
                $data = $objSock->receive($head_arr['body_len']);
                if ($data) 
                {
                    $recv = $recv.$data;
                }
            }
        }
        if ($arrErr) {
            self::setLastError(
                array(
                    'message' => $arrErr[1],
                )
            );
            return false;
        }
        return true;
    }
}




/* vim: set expandtab ts=4 sw=4 sts=4 tw=100 */
?>
