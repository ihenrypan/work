<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
/**
 * @file common/newpb.php
 * @author map(com@baidu.com)
 * @date 2015/05/07 16:16:33
 * @brief 
 *  
 **/

class Common_Newpb{

    private $pbScalarType = array(
        ProtobufMessage::PB_TYPE_DOUBLE,
        ProtobufMessage::PB_TYPE_FLOAT,
        ProtobufMessage::PB_TYPE_INT,
        ProtobufMessage::PB_TYPE_SIGNED_INT,
        ProtobufMessage::PB_TYPE_FIXED32,
        ProtobufMessage::PB_TYPE_FIXED64,
        ProtobufMessage::PB_TYPE_BOOL,
        ProtobufMessage::PB_TYPE_STRING,
    );

    public function __construct(){
        $this->protosdir = S_ROOT . '/newprotos/';
    }

    public function toPB($data){
        $str = "";
        if(is_array($data) && count($data)>0){
            $offset = 0;
            $body = '';
            foreach($data as $k=>$v){
                $msgname = str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                $msg = $this->arr2pb($v, $msgname);
                $body .= $msg;
                $length = strlen($msg);
                if($length === 0) continue;
                $head['message_head'][] = array('offset'=>$offset, 'length'=>$length, 'name'=>$msgname);
                $offset += $length;
            }
            $head['md5'] = md5($body);
            $headstr = $this->arr2pb($head, 'RepHead');
            $headsize = strlen($headstr);
            $str = pack('N',intval($headsize)).$headstr.$body;
        }
        return $str;
    }

    public function arr2pb($data, $pbname){
        $return = '';
        $protofile = $this->protosdir . strtolower($pbname).'.php';
        if(file_exists($protofile)){
            include_once $protofile;
            $classname = $pbname;
            if(class_exists($classname)){
                $obj = new $classname();
                $re = $this->parseArray($data, $obj);
                $return = $re->SerializeToString();
            }
        }
        return $return;
    }

    /**
     * phpui返回的pb值（拼接后的)反解析成arr
     */
    public function res2arr($pbstr){
        $offset = 0;
        $headsize_tmp_arr = unpack('N',(substr($pbstr,$offset, 4)));
        if(is_array($headsize_tmp_arr)){
            $headsize = $headsize_tmp_arr[1];
        }elseif(is_numeric($headsize_tmp_arr)){
            $headsize = $headsize_tmp_arr;
        }
        $offset += 4;
        $repheadstr = substr($pbstr, $offset, $headsize);
        $rephead = $this->pb2arr($repheadstr, 'repHead');
        $offset += $headsize;
        $rearr = array();
        if(is_array($rephead['message_head']) && count($rephead['message_head'])>0){
            foreach($rephead['message_head'] as $v){
                $tmpstr = substr($pbstr, $offset, $v['length']); 
                $offset += $v['length'];
                $tmpar = $this->pb2arr($tmpstr, $v['name']);
                $key = $this->Hump2Underline($v['name']);
                $rearr[$key]=$tmpar;
            }
        }
        return $rearr;
    }

    public function pb2arr($data, $pbname){
        $return = '';
        $protofile = $this->protosdir . strtolower($pbname) . '.php';
        if(file_exists($protofile)){
            include_once $protofile;
            $classname = $pbname;
            if(class_exists($classname)){
                $obj = new $classname();
                $obj->parseFromString($data);
                $return = $this->obj2arr($obj);
            }
        }
        return $return;
    }

    private function obj2arr($obj){
        $return = array();
        if(isset($obj->values)){
            foreach($obj->values as $k=>$v){
                $fields = $obj->fields();
                if(is_array($v)){
                    foreach($v as $kk=>$vv){
                        if(is_object($vv)){
                            $return[$fields[$k]['name']][$kk] = $this->obj2arr($vv);
                        }else{
                            $return[$fields[$k]['name']][$kk] = $vv;
                        }
                    }
                }else{
                    if(is_object($v)){
                        $return[$fields[$k]['name']] = $this->obj2arr($v);
                    }else{
                        if($v !== null){
                            $return[$fields[$k]['name']] = $v;
                        }
                    }
                }
            }
        }
        return $return;
    }

    private function parseArray($data, $obj){
        $fields = $obj->fields();
        $fieldsmap = array();
        if(is_array($fields) && count($fields)>0){
            foreach($fields as $field){
                $fieldsmap[$field['name']] = $field;
            }
            foreach($data as $k=>$v){
                if(!isset($fieldsmap[$k]) || $v===null){
                    continue;
                }
                if(in_array($fieldsmap[$k]['type'], $this->pbScalarType)){
                    if(isset($fieldsmap[$k]['repeated']) && $fieldsmap[$k]['repeated'] === true){
                        $method = 'append'.str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                        if(method_exists($obj, $method) && is_array($v) && count($v)>0){
                            foreach($v as $vv){
                                $obj->$method($vv);
                                //var_dump($method);
                            }
                        }
                    }else{
                        $method = 'set'.str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                        if(method_exists($obj, $method)){
                            $obj->$method($v);
                            //var_dump($method);
                        }
                    }
                }else{
                    $subclass = $fieldsmap[$k]['type'];
                    if(isset($fieldsmap[$k]['repeated']) && $fieldsmap[$k]['repeated'] === true){
                        $method = 'append'.str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                        if(method_exists($obj, $method) && is_array($v) && count($v)>0 && class_exists($subclass)){
                            foreach($v as $vv){
                                $subobj = new $subclass;
                                $val = $this->parseArray($vv, $subobj);
                                $obj->$method($val);
                                //var_dump($method);
                            }
                        }
                    }else{
                        $method = 'set'.str_replace(' ', '', ucwords(str_replace('_',' ',$k)));
                        if(method_exists($obj, $method) && class_exists($subclass)){
                            $subobj = new $subclass;
                            $val = $this->parseArray($v, $subobj);
                            $obj->$method($val);
                            //var_dump($method);
                        }
                    }
                }
            }
        }
        return $obj;
    }

    /**
     * 将字符从“驼峰形式”转成“下划线形式”
     * 
     * @param string $string：待转字符串
     * @return string $return: 转换后的字符串
     * 
     * 示例：AbTest => ab_test
     */
    public function Hump2Underline($string){
        $arr = str_split($string);
        $return = '';
        foreach($arr as $k=>$v){
            if(ord($v)<91 && ord($v)>64 && $k>0){
                $return .= '_';
            }
            $return .= $v;
        }
        return strtolower($return);
    }

}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
