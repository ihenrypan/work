<?php

class Common_Func{

    public static function unicode_decode($str){
        $str = str_replace("&quot;", "hack_quot", $str);
        $str = str_replace('&', "hack_and", $str);
        $str = html_entity_decode(preg_replace('/\\\\u([a-z0-9]{4})/i', '&#x$1;', $str),ENT_QUOTES, 'UTF-8');
        $str = str_replace("hack_and", '&', $str);
        $str = str_replace("hack_quot", "&quot;", $str);
        return $str;
    }

    /**
     * 将字符从“驼峰形式”转成“下划线形式”
     * 
     * @param string $string：待转字符串
     * @return string $return: 转换后的字符串
     * 
     * 示例：AbTest => ab_test
     */
    public static function Hump2Underline($string){
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

    /**
     * 获取用户客户端的IP地址。该IP地址可能被用户伪造     
     * @param string默认IP地址 $strDefaultIp
     * @return string
     */
    public static function getClientIp ($strDefaultIp = '0.0.0.0')
    {
        $strIp = '';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $strIp = strip_tags($_SERVER['HTTP_X_FORWARDED_FOR']);
            //获取第一个
            $intPos = strpos($strIp, ',');
            if ($intPos > 0) {
                $strIp = substr($strIp, 0, $intPos);
            }
        } elseif (isset($_SERVER['HTTP_CLIENTIP'])) {
            //transmit特有
            $strIp = strip_tags($_SERVER['HTTP_CLIENTIP']);
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $strIp = strip_tags($_SERVER['HTTP_CLIENT_IP']);
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $strIp = strip_tags($_SERVER['REMOTE_ADDR']);
        }
        $strIp = trim($strIp);
        if (! ip2long($strIp)) {
            $strIp = $strDefaultIp;
        }
        return $strIp;
    }

    /**
     * 按照RFC3986标准对urlencode 空格将会被encode成%20 ~不会被encode
     */
    public static function urlencode($str){
        $str = urlencode($str);
        $find = array('+','%7E');
        $replace = array('%20','~');
        $str = str_replace($find, $replace, $str);
        return $str;
    }

    public static function microtime(){
        $str = microtime();
        $tmparr = explode(' ',$str);
        return $tmparr[0]+$tmparr[1];
    }

    /**
     * 递归合并数组
     * 当两数组某一相同key对应value均为array时，递归合并;否则由后者替换掉前者的值
     * 
     * 示例：
     *  array1 = array("k1"=> array1(),"k2"=>"hello world");
     *  array2 = array("k1"=> array2(),"k2"=>array3());
     * 合并后：
     * 	array1 = array("k1"=> array1_2(),"k2"=>array3()); //array1_2为array1和array2合并的结果
     *  
     * @param array $array1 : 原始数据
     * @param array $array2 : 待合并到array1中的数据
     * 
     * @return array $array1 : 返回合并完成后的数据
     *
     */
    public static function array_merge_rec($array1,$array2=array()){
        $array1 = is_array($array1) ? $array1 : array();
        $array2 = is_array($array2) ? $array2 : array();
        foreach($array2 as $k=>$v){
            if(is_numeric($k)){
                $array1[] = $v;
            }else{
                if(is_array($v) && isset($array1[$k]) && is_array($array1[$k])){
                    $array1[$k] = self::array_merge_rec($array1[$k],$v);
                }else{
                    $array1[$k] = $v;
                }
            }
        }
        return $array1;
    }


    /**
     * 取ini配置，格式 key=value
     *
     * @param $filename string  文件名
     * @return array()
     */
    public static function getIniConf($filename){
        $return = array();
        if(!file_exists($filename)){
            return $return;
        }
        $lines = file($filename);
        if(is_array($lines) && count($lines)>0){
            foreach($lines as $line){
                $tmparr = explode('=', $line);
                $key = trim($tmparr[0]);
                $val = trim($tmparr[1]);
                $return[$key] = $val;
            }
        }
        return $return;
    }
    
    /**
     * 解析配置中的条件语句
     * 
     * @param   $reqs array  待处理的数据 
     * @param   $constr string  逻辑语句 
     * @return  true|false
     */
    public static function ckReqCon($reqs, $constr){
        $con = explode('##', $constr);
        if($con[0] !== 'req'){
            return false;
        }
        switch($con[1]){
            case 'all':
                return true;

            case 'con':
                return Common_Func::ckReqConAtom($con[2], $reqs);
                
            case 'and':
                $sons = explode('&&', $con[2]);
                foreach($sons as $son){
                    $rs = Common_Func::ckReqConAtom($son, $reqs);
                    if($rs === false) return false;
                }
                return true;
            default:
                return false;
        }
    }

    public static function ckReqConAtom($str, $data){
        //compare os
        if(strstr($str, 'os==')!==false){
            $reqos = substr(strtolower(trim($data['os'])),0,4);
            $conos = trim($str, 'os==');
            return $reqos == $conos;
        }

        //compare ver 
        if(strstr($str, 'sv>')!==false){
            $tmparr = explode('.', $data['sv']);
            $sv = intval($tmparr[0])*1000000 + intval($tmparr[1])*1000 + intval($tmparr[2]);
            $tmparr2 = explode('.', trim($str, 'sv>'));
            $sv2 = intval($tmparr2[0])*1000000 + intval($tmparr2[1])*1000 + intval($tmparr2[2]);
            return $sv > $sv2;
        }
        if(strstr($str, 'sv<')!==false){
            $tmparr = explode('.', $data['sv']);
            $sv = intval($tmparr[0])*1000000 + intval($tmparr[1])*1000 + intval($tmparr[2]);
            $tmparr2 = explode('.', trim($str, 'sv<'));
            $sv2 = intval($tmparr2[0])*1000000 + intval($tmparr2[1])*1000 + intval($tmparr2[2]);
            return $sv < $sv2;
        }

        //default
        $find = array(
            "==", 
            ">", 
            "<", 
            "!=", 
        );
        $replace = array(
            "']=='",
            "']>'",
            "']<'",
            "']!='",
        );
        $cmd = 'return $data[\''.str_replace($find, $replace, $str)."';";
        $return = eval($cmd);
        return $return;
    }

    /**
     *  根据配置条件
     *  $valst value 依赖的提交与配置
     *  $data   基础数据，用来对配置中条件赋值
     *  $reqs   请求条件
     *  $poikey poi相关key
     *  $res    后端返回原始数据 
     */
     public function rangeVal($valstr, $data=array(), $reqs=array(), $poikey='', $res=array()){
         $val = explode('##', $valstr);
         if(isset($val[1])){
            if(strpos($val[1],'||')!==false){
                $val_or = explode('||', $val[1]);
                $key_or_0 = is_numeric($val_or[0]) ? $val_or[0] : "'".str_replace('.',"']['",$val_or[0])."'";
            }else{
                $key_val_1 = is_numeric($val[1]) ? $val[1] : "'".str_replace('.',"']['",$val[1])."'";
            }
         }
        switch($val[0]){
            case 'i':
                return intval($val[1]);
            case 's':
                return (string) $val[1];
            case 'b':
                return (bool) $val[1];
            case 'a':
                return json_decode($val[1],true);
            case 'v':
                $cmd = 'return isset($data['.$key_val_1.'])?$data['.$key_val_1.']:null;';
                return eval($cmd);
            case 'v_i':
                $cmd = 'return isset($data['.$key_val_1.'])?intval($data['.$key_val_1.']):null;';
                return eval($cmd);
            case 'unset':
                return 'hack_unset';
            case 'poi':
                $res = Common_Poihack::dohack($reqs, $data, $val[1], $res);
                $cmd = 'return $res[\''.str_replace('.',"']['",$poikey).'\'];';
                return eval($cmd);
            case 'v_or':
                $val_0 = eval('return @$data['.$key_or_0.'];');
                $key_or_1= is_numeric($val_or[1])?$val_or[1]:"'".str_replace('.',"']['",$val_or[1])."'";
                $val_1 = eval('return @$data['.$key_or_1.'];');
                return isset($val_0) ? $val_0 : $val_1;
            case 'v_or_s':
  //              $val_or = explode('||', $val[1]);
                $val_0 = eval('return @$data['.$key_or_0.'];');
                $val_1 = eval('return $val_or[1];');
                return isset($val_0) ?(string) $val_0 : (string)$val_1;
            case 'v_or_i':
//                $val_or = explode('||', $val[1]);
                $val_0 = eval('return @$data['.$key_or_0.'];');
                $val_1 = eval('return $val_or[1];');
                return isset($val_0) ?intval($val_0) : intval($val_1);
            case 'v_or_b':
    //            $val_or = explode('||', $val[1]);
                $val_0 = eval('return @$data['.$key_or_0.'];');
                $val_1 = eval('return $val_or[1];');
                return isset($val_0) ? (bool)$val_0 : (bool)$val_1;
            case 'v_or_a':
      //          $val_or = explode('||', $val[1]);
                $val_0 = eval('return @$data['.$key_or_0.'];');
                $val_1 = eval('return $val_or[1];');
                return isset($val_0) ? $val_0 : json_decode($val_1,true);
        }
        return $val[1];
     }
    

     /**
     * utf8togbkarray
     *
     */
    public static function utf8ToGbkArray(&$array){
        if(is_array($array)){
            foreach($array as $key => $value){
                if(is_array($value)){
                    $array[$key] = Common_Func::utf8ToGbkArray($value);
                }
                else if(is_string($value) == false || empty($value)){
                    $array[$key] = $value;
                }else{
                    if (is_utf8($value)) {
                        $array[$key] = utf8_to_gbk($value);
                    }
                }
            }
        }else if(is_string($array)) {
            if (is_utf8($value)) {
                $array = utf8_to_gbk($array);
            }
        }

        return $array;
    }

    public static function gbkToUtf8Array(&$array){
        if(is_array($array)){
            foreach($array as $key => $value){
                if(is_array($value)){
                    $array[$key] = Common_Func::gbkToUtf8Array($value);
                }else if(is_string($value) == false || empty($value)){
                    $array[$key] = $value;
                }else{
                    $array[$key] = gbk_to_utf8($value);
                }
            }
        }else if(is_string($array)) {
            $array = gbk_to_utf8($array);
        }
        return $array;
    }

    
    /**
     *转换proto为json
     */
    function pb2json($pbstr){
        $out_arr = array();
        $offset = 0;
        $headsize = intval(substr($pbstr,$offset, 4));
        $offset += 4;
        $repheadstr = substr($pbstr, $offset, $headsize); 
        $rephead = json_decode(Common_Pb::pb2json($repheadstr, 'repHead', 1), true);
        $offset += $headsize;        

        $out_arr['headsize'] = $headsize;
        $out_arr['rephead'] = $rephead;
        if(is_array($rephead['message_head']) && count($rephead['message_head'])>0){
            foreach($rephead['message_head'] as $v){
                $tmpstr = substr($pbstr, $offset, $v['length']);                 
                $offset += $v['length'];
                $tmpar = json_decode(Common_Pb::pb2json($tmpstr, $v['name'], 1),true);               
                $out_arr[$v['name']] = $tmpar;                
            }
        }
        echo json_encode($out_arr);    
    }
}
