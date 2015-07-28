<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file common/pblogdata.php
 * @author map(chenkunbin@baidu.com)
 * @date 2014/07/04 02:07:49
 * @brief 
 *  
 **/

class Common_Pblogdata{
    private static $obj;
    public static function getPbLogData(Index $index_obj){
        $data = array();
        $data                       = self::getCommonData($index_obj);
        $data['logfields']          = self::getLogData($index_obj);
        $data['device_info']        = self::getDeviceData($index_obj); 
        $data['user_info_ext']      = self::getUserExtensionData($index_obj); 
        $data['poi_comm_info']      = self::getPoiCommData($index_obj);
        $data['res_base_data']      = self::getResBase($index_obj);
        $data['search_comm_info']   = self::getSearchCommData($index_obj);
        $data['route_special_info'] = self::getBusinessRouteSpecialData($index_obj);
        $data['lbs_da']             = self::getLBSDA($index_obj);
        return $data;
    }
    //pb日志公用字段
    public static function getCommonData(Index $index_obj){
        $conf = Common_Conf::get('pblog');
        $data = array();
        $data = array_merge($conf['commdata'],$data);
        $data['timestamp'] = b2log_get_timestamp();
        if(getenv('HTTP_X_BD_LOGID64')){ 
            $logid = intval(trim(getenv('HTTP_X_BD_LOGID64')));
        }else{
            $logid = rand();
        }
        $data['logid'] = $logid;
        $data['baiduid'] = isset($_COOKIE['BAIDUID'])?$_COOKIE['BAIDUID']:(isset($_GET['BAIDUID'])?$_GET['BAIDUID']:''); 
        $data['user_ip'] = ip2long(Common_Ip::getUserClientIp());
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
        $data['url'] =  urlencode($url); 
        $data['user_agent'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT']:'';        
        $data['referrer'] = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';        
        $data['cookie'] = json_encode($_COOKIE);
        $data['query'] = isset($_GET['wd'])?$_GET['wd']:'';
        $data['wise_cuid'] = isset($_COOKIE['cuid']) ? $_COOKIE['cuid'] : (isset($_GET['cuid'])?$_GET['cuid']:'');
        $data['action_name'] = isset($_COOKIE['da_act'])?$_COOKIE['da_act'] : (isset($_GET['da_act'])?$_GET['da_act']:'');
        $data['encoding_type'] = 0;
        return $data;
    }
    //地图日志打印及性能相关
    public static function getLogData(Index $index_obj){
        $errno = '0';
        if(isset($index_obj->res['result']) && isset($index_obj->res['result']['error'])){
            $errno = $index_obj->res['result']['error'];
        }elseif(isset($index_obj->res['result']) && isset($index_obj->res['result']['errorCode'])){
            $errno = $index_obj->res['result']['errorCode'];
        }
        $data['program_errno'] = strval($errno);
        if(getenv('HTTP_X_BD_LOGID')){ 
            $logid = intval(trim(getenv('HTTP_X_BD_LOGID')));
        }else{
            $logid = rand();
        }
        $data['logid_for_debug'] = $logid;
        $data['local_ip'] = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '';
        $used_time = (microtime(true) -$index_obj->starttime)*1000; 
        $data['time_used_ms'] = strval($used_time); 
        return $data;
    }
    //地图设备请求信息
    public static function getDeviceData(Index $index_obj){
        $data['wise_net'] = isset($_GET['net']) ? $_GET['net'] : '';
        $data['resid'] =  isset($_GET['resid']) ? $_GET['resid'] : '';
        return $data;
    }

    //地图用户扩张信息
    public static function getUserExtensionData(Index $index_obj){
        //$data['search_loc_x'] = 
        //$data['search_loc_y'] = 
        $data['search_area'] = isset($_GET['b'])?$_GET['b']:'';
        $data['search_level'] = isset($_GET['l'])?$_GET['l']:''; 
        return $data;
    }
    //地图POI公共信息
    public static function getPoiCommData(Index $index_obj){
        $data['uid'] = isset($_GET['uid'])?$_GET['uid']:''; 
        return $data;
    }
    //地图基础数据相关参数
    public static function getResBase(Index $index_obj){
        $data = array();
        //$data['is_support_bus'] = 
        //$data['is_support_business_area'] = 
        //$data['is_support_subway'] = 
        //$data['is_support_roadcondition'] = 
        //$data['is_support_overallview'] = 
        return $data;
    }
    //地图搜索通用字段
    public static function getSearchCommData(Index $index_obj){
        $data['query_type'] = isset($_GET['qt'])?$_GET['qt']:'index';
        $data['query_city_code'] = isset($_GET['c']) ? $_GET['c']:'0';
        $data['query_page_num'] = isset($_GET['pn']) ? intval($_GET['pn']):0;
        $data['query_num_per_page'] = isset($_GET['rn']) ? intval($_GET['rn']):10;
        $data['result_type'] = isset($index_obj->res['result']['type']) ? strval($index_obj->res['result']['type']):'104';
        $data['result_no'] = isset($index_obj->res['content']) ? '1':'0'; //有点问题 
        $data['city_type'] = '-1';
        if($data['result_type']==1 || $data['result_type']==2){
            if(isset($index_obj->res['content'])){
                if($index_obj->res['contents']['if_current']==1){
                    $data['result_city_name'] = $index_obj->res['content']['cname'];
                }else{
                    $data['result_city_name'] = $index_obj->res['content']['pcname'];
                } 
                $data['city_type'] = $index_obj->res['content']['city_type'];
            }
        }else{
            if(isset($index_obj->res['current_city'])&&isset($index_obj->res['current_city']['name'])){
                $data['result_city_name'] = $index_obj->res['current_city']['name'];
            }else{
                $data['result_city_name'] = '';
            }
        }
        $data['place'] = isset($index_obj->res['place_info']) ? '1':'0'; 
        $data['result_trade'] = isset($index_obj->res['place_info']) && isset($index_obj->res['place_info']['d_data_type']) ? $index_obj->res['place_info']['d_data_type'] : '';
        //获取poi的id list
        $idlist = '';
        if(isset($index_obj->res['content']['uid'])){
            $idlist = $index_obj->res['content']['uid'].',0,0,0,0,0,0,0,0,0';  //添加9个0
        }elseif(isset($index_obj->res['content']) && is_array($index_obj->res['content'])){
            $uids = '';
            $i = 0;
            for(; $i <count($index_obj->res['content']);$i ++){
               if(isset($index_obj->res['content'][$i]['uid'])){ 
                   $uids .= $index_obj->res['content'][$i]['uid'].',';
               }else{
                   break;
               }
            }
            for(;$i < 10;$i++){
                $uids .= '0,';
            }
            $idlist = substr($uids,0,strlen($uids)-1);
        }
        $data['uid_list'] = $idlist;
        $data['result_on_gel'] = isset($_GET['on_gel']) ? $_GET['on_gel'] : '0'; 
        $data['result_op_gel'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['op_gel']) ? $index_obj->res['result']['op_gel'] : '0';
        return $data;
    }

    //用于描述产品线统计专用相关参数， DA: data analyse
    public static function getLBSDA(Index $index_obj){
        $data['da_src'] = isset($_GET['da_src'])?$_GET['da_src']:'';
        $data['da_trd'] = isset($_GET['da_trd'])?$_GET['da_trd']:'';
        $data['da_abtest'] = isset($_GET['da_abtest'])?$_GET['da_abtest']:'';
        $data['da_e_name'] = isset($_GET['da_e_name'])?$_GET['da_e_name']:'';
        $data['da_e_group'] = isset($_GET['da_e_group']) ? $_GET['da_e_group'] : ''; 
        $data['da_par'] = isset($_GET['da_par']) ? $_GET['da_par'] : '';
        $data['da_thirdpar'] = isset($_GET['da_thirdpar']) ? $_GET['da_thirdpar'] : '';
        $data['da_ver'] = isset($_GET['da_ver']) ? $_GET['da_ver'] : '';
        //$data['da_res_src'] = isset($_GET['da_ver']) ? $_GET['da_ver'] : '';
        return $data;
    }

    //路线业务特有信息
    public static function getBusinessRouteSpecialData(Index $index_obj){
        $data['start_query'] = isset($_GET['sn'])?$_GET['sn']:'';
        $data['end_query'] = isset($_GET['en'])?$_GET['en']:'';
        $data['start_city'] = isset($_GET['sc'])?$_GET['sc']:'';
        $data['end_city'] = isset($_GET['ec'])?$_GET['ec']:'';
        $data['start_uid'] = isset($_GET['suid'])?$_GET['suid']:'';
        $data['end_uid'] = isset($_GET['euid'])?$_GET['euid']:'';
        //$data['start_result'] = isset($_GET['suid'])?$_GET['suid']:'';
        //$data['end_result'] = isset($_GET['euid'])?$_GET['euid']:'';
        $data['route_strategy'] = isset($_GET['sy'])?$_GET['sy']:0;
        return $data;
    }
}





/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
