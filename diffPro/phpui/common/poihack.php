<?php
/**
 * reshack 入口
 *
 * @author  huangyong02
 * @packeg  reshack
 */

class Common_Poihack{

    public static function dohack($reqs, $data, $poideep, $res=array()){
        $conf = Common_Conf::get('poihack');
        //hack by config
        if(is_array($conf) && count($conf)>0){
            foreach($conf as $k=>$filter){
                $addhook = $k==0 ? TRUE : FALSE;
                $data = self::_hackByFilter($reqs, $data, $filter, $poideep, $res, $addhook);
            }
        }
        return $data;
    }
    
    /**
     * 根据配置中的一项做poihack
     * 
     * @param   $data array  返回值
     * @param   $filter array  config中的一项 
     * @return  array
     */
    public static function _hackByFilter($reqs, $data, $filter, $poideep, $res=array(), $addhook=false){
        //var_dump($reqs,$filter);
        //TODO filter data
        $tmparr = explode('*',$poideep);
        //$loops = array();
        $cmd = '/*CMDREPLACE1*/';
        $v0 = $data;
        $bodykey = '$v0';
        foreach($tmparr as $k=>$v){
            $loop = '$v'.$k.'[\''.str_replace('.',"']['",trim($v,'.')).'\']';
            $cmd = str_replace('/*CMDREPLACE1*/', 'foreach('.$loop.' as $k'.($k+1).'=>$v'.($k+1).'){/*CMDREPLACE1*/}', $cmd);
            $bodykey .= "['".str_replace('.',"']['",trim($v,'.')).'\'][$k'.($k+1).']';
        }
        $rangekey = $bodykey."['".str_replace('.', "']['", $filter['key'])."']";
        $contype = substr(trim($filter['con']),0,3);
        //body start
        $body = '';
        //TODO body前加入poihook钩子
        if($addhook){
            $body .= '$src_name = isset('.$bodykey."['src_name']) ? ".$bodykey."['src_name'] : '';".
            '$classname = '."'Hook_Poi_'.".'$src_name;'.
            'if($src_name && class_exists($classname)){'.
                '${\'poihook_\'.$src_name} = new $classname();
                 ${\'poihook_\'.$src_name}->reqs = $reqs;
                 ${\'poihook_\'.$src_name}->res = $res;
                 ${\'poihook_\'.$src_name}->poi = '.$bodykey.';
                 ${\'poihook_\'.$src_name}->poihook();
                 '.$bodykey.' = ${\'poihook_\'.$src_name}->poi;
            }';
        }
        $body .= 'if(($contype==\'req\' && Common_Func::ckReqCon($reqs, $filter[\'con\']))
            || ($contype==\'res\' && Common_Poihack::_ckPoiCon('.$bodykey.', $filter[\'con\']))){
                $reval = Common_Poihack::_rangeVal($filter[\'val\'], $v0);
                if($reval == \'hack_unset\'){
                    unset('.$bodykey."['".str_replace('.', "']['", $filter['key'])."']".');;
                }else{
                    '.$bodykey."['".str_replace('.', "']['", $filter['key'])."']".'=$reval;
                }
        }';
        //body end
        $cmd = str_replace('/*CMDREPLACE1*/', $body, $cmd);
        eval($cmd);
        return $v0;
    }

    /**
     * 解析配置中的条件语句
     * 
     * @param   $res array   待处理的数据
     * @param   $constr string  逻辑语句 
     * @return  true|false
     */
    public static function _ckPoiCon($data, $constr){
        $con = explode('##', $constr);
        if($con[0] !== 'res'){
            return false;
        }
        switch($con[1]){
            case 'all':
                return true;
            case 'con':
                return Common_Poihack::ckPoiConAtom($con[2], $data);
            case 'and':
                $sons = explode('&&', $con[2]);
                foreach($sons as $son){
                    $rs = Common_Poihack::ckPoiConAtom($son, $data);
                    if($rs === false) return false;
                }
                return true;
            case 'empty':
                return eval('return empty($data[\''.str_replace('.',"']['",$con[2]).'\']);');
            case 'unempty':
                return eval('return !empty($data[\''.str_replace('.',"']['",$con[2]).'\']);');
            default:
                return false;
        }
        return false;
    }

    public static function ckPoiConAtom($constr, $data){

        //default
        $find = array(
            "==", 
            ">", 
            "<", 
            "!=", 
            ".", 
        );
        $replace = array(
            "']=='",
            "']>'",
            "']<'",
            "']!='",
            "']['",
        );
        $cmd = 'return @$data[\''.str_replace($find, $replace, $constr)."';";
        //var_dump($cmd);
        $return = eval($cmd);
        return $return;
    }

    public static function _rangeVal($valstr, $data=array()){
        $val = explode('##', $valstr);
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
                $cmd = 'return $data[\''.str_replace('.',"']['",$val[1]).'\'];';
                return eval($cmd);
            case 'v_i':
                $cmd = 'return isset($data[\''.str_replace('.',"']['",$val[1]).'\'])?intval($data[\''.str_replace('.',"']['",$val[1]).'\']):null;';
                return eval($cmd);
            case 'unset':
                return 'hack_unset';
            case 'v_or':
                $val_or = explode('||', $val[1]);
                $val_0 = eval('return @$data[\''.str_replace('.',"']['",$val_or[0]).'\'];');
                $val_1 = eval('return @$data[\''.str_replace('.',"']['",$val_or[1]).'\'];');
                return isset($val_0) ? $val_0 : $val_1;
        }
        return $val[1];
    }


}
