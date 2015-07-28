<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file common/pblog.php
 * @author chenkunbin(com@baidu.com)
 * @date 2014/06/19 17:02:57
 * @brief 
 *  
 **/

class Common_Pblog{

    public function __construct(){
        $this->conf = Common_Conf::get('pblog');
    }

    public function write($level, $logdata){
        //proto file below should be replaced
        include_once S_ROOT . '/protos/api_phpui_client.php';
        $obj = new BaiduLog();
        $obj = $this->parseArray($logdata, 'BaiduLog', $obj);
        $str = $obj->serialize();
        $rs = b2log_write($level, $str);
        return $rs;
    }

    private function parseArray($data, $alice, $obj, $parents=null){
        if(is_array($data) && count($data)>0){
            foreach($data as $k=>$v){
                $method_set = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $k)));
                if(is_int($k)){
                    if(is_array($v)){
                        //there is no need for now
                        //......
                    }
                }else{
                    if(is_array($v)){
                        if($this->isVector($v)){
                        }else{
                            $maps = $this->conf['logkv'];
                            if(in_array($k, array_keys($maps))){
                                $classname = $maps[$k];
                            }else{
                                $classname = str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                            }
                            $oobj = new $classname();
                            $oobj = $this->parseArray($v, $k, $oobj);
                            $obj->$method_set($oobj);
                        }
                    }else{
                        if(method_exists($obj, $method_set) && $v!==null){
                            $rs = $obj->$method_set($v);
                        }
                    }
                }
            }
        }
        return $obj;
    }

    public function isVector($var) { 
        return is_array($var) && count(array_diff_key($var, range(0, count($var)-1))) == 0; 
    }
}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
