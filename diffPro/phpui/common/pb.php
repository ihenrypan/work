<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
/**
 * @file common/pb.php
 * @author map(com@baidu.com)
 * @date 2013/10/30 16:16:33
 * @brief 
 *  
 **/
require_once(dirname(__FILE__).'/pb/pb_message.php');

class Common_Pb{

    public static function arr2pb($data, $pbname, $ver=1){
        $return = '';
        $protofile = dirname(dirname(__FILE__)) . '/protos/'.strtolower($pbname).'_'.intval($ver).'.php';
        if(file_exists($protofile)){
            include_once $protofile;
            $classname = $pbname;
            if(class_exists($classname)){
                $obj = new $classname();
                $re = self::parseArray($data, $classname, $obj);
                if(@$_GET['debugpb']){
                    var_dump($re);
                }
                $return = $re->SerializeToString();
            }
        }
        return $return;
    }

    /**
     * phpui返回的pb值（拼接后的)反解析成arr
     */
    public static function res2arr($pbstr){
        $offset = 0;
        $headsize_tmp_arr = unpack('N',(substr($pbstr,$offset, 4)));
        if(is_array($headsize_tmp_arr)){
            $headsize = $headsize_tmp_arr[1];
        }elseif(is_numeric($headsize_tmp_arr)){
            $headsize = $headsize_tmp_arr;
        }
        $offset += 4;
        $repheadstr = substr($pbstr, $offset, $headsize);
        $rephead = json_decode(Common_Pb::pb2json($repheadstr, 'repHead', 1), true);
        $offset += $headsize;
        $rearr = array();
        if(is_array($rephead['message_head']) && count($rephead['message_head'])>0){
            foreach($rephead['message_head'] as $v){
                $tmpstr = substr($pbstr, $offset, $v['length']); 
                $offset += $v['length'];
                $tmpar = json_decode(Common_Pb::pb2json($tmpstr, $v['name'], 1),true);
                $key = Common_Func::Hump2Underline($v['name']);
                $rearr[$key]=$tmpar;
            }
        }
        return $rearr;
    }

    public static function pb2json($data, $pbname, $ver=1){
        $return = '';
        $protofile = dirname(dirname(__FILE__)) . '/protos/'.strtolower($pbname).'_'.intval($ver).'.php';
        if(file_exists($protofile)){
            include_once $protofile;
            $classname = $pbname;
            if(class_exists($classname)){
                $obj = new $classname();
                $obj->ParseFromString($data);
                $return = $obj->toJson();
            }
        }
        return $return;
    }

    private static function parseArray($data, $alice, $obj, $parents=null){
        //$alice = str_replace('', '_', ucwords(str_replace('_', ' ', $alice)));
        if(is_array($data) && count($data)>0){
            foreach($data as $k=>$v){
                $method_set = 'set_'.strtolower($k);
                if(is_int($k)){
                    if(is_array($v)){
                        $method_add = 'add_'.strtolower($alice);
                        if(method_exists($obj, $method_add)){
                            $obj_new = $obj->$method_add();
                            $obj_new = self::parseArray($v,$alice,$obj_new, $parents);
                        }
                    }else{
                        $method_append = 'append_'.strtolower($alice);
                        if(method_exists($obj, $method_append) && $v!==null){
                            $obj->$method_append($v);
                        }
                    }
                }else{
                    if(is_array($v)){
                        if(self::isVector($v)){
                            $obj = self::parseArray($v, $k, $obj, $parents.str_replace(' ', '', ucwords(str_replace('_', ' ', $alice))).'_');
                        }else{
                            $classname = $parents.str_replace(' ', '', ucwords(str_replace('_', ' ', $alice))).'_'.str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                            //$classname = $alice.'_'.$k;
                            /*
                            if($_GET['debug1'] === 'pb1' && $alice1='poi_result'){
                                var_dump($classname,'==============');
                            }
                             */
                            if(class_exists($classname)){
                                $obj_new = new $classname();
                                $obj_new = self::parseArray($v, $k, $obj_new, $parents.str_replace(' ', '', ucwords(str_replace('_', ' ', $alice))).'_');
                                if(method_exists($obj, $method_set)){
                                    $obj->$method_set($obj_new);
                                }
                            }
                        }
                    }else{
                        if(method_exists($obj, $method_set) && $v!==null){
                            $obj->$method_set($v);
                        }
                    }
                }
            }
        }
        return $obj;
    }
    public static function isVector($var) { 
        return is_array($var) && count(array_diff_key($var, range(0, count($var)-1))) == 0; 
    }

}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
