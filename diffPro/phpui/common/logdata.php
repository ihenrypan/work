<?php
/***************************************************************************
 * 
 * Copyright (c) 2013 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
 
 
 
/**
 * @file logdata.php
 * @author map(com@baidu.com)
 * @date 2013/12/11 14:44:12
 * @brief 
 *  用来封装需要记录的日志。
 **/
class Common_Logdata{
    var $res;
    var $reqs;
    var $qt;
   
    //临时写在这里
    public static function getLogData(Index $index_obj){
        //common log
        $ess_log_data = array();
        if(in_array($index_obj->qt, array('bd2','bsl','bus','inf'))){//修改下规则 2014-02-26  

            $index_obj->res['result']['_log']['loc_attr'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['loc_attr']) ? $index_obj->res['result']['loc_attr'] : '';
            $index_obj->res['result']['_log']['has_rtbus'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['has_rtbus']) ? $index_obj->res['result']['has_rtbus'] : '';
        }
        if(isset($index_obj->res['result']) && isset($index_obj->res['result']['_log']) && is_array($index_obj->res['result']['_log'])){
            $ess_log_data = $index_obj->res['result']['_log'];
            unset($index_obj->res['result']['_log']);
        }
        $return = array();
        foreach ($index_obj->ess_log_keys as $ess_key){
            $_val = isset($ess_log_data[$ess_key]) ? urlencode($ess_log_data[$ess_key]) : '';
            $return["p_$ess_key"] = $_val;
        }
        $return ['q_wd'] = isset($_GET['wd']) ? $_GET['wd'] : '';
        $return ['q_qt'] = isset($_GET['qt']) ? $_GET['qt'] : 'index';
        $return ['q_cc'] = isset($_GET['c']) ? $_GET['c'] : 0;
        $return ['q_pn'] = isset($_GET['pn']) ? $_GET['pn'] : 0;
        $return ['q_rn'] = isset($_GET['rn']) ? $_GET['rn'] : 10;
        $return ['q_l']  = isset($_GET['l']) ? $_GET['l'] : 0;
        $return ['q_b']  = isset($_GET['b']) ? $_GET['b'] : '';
        $return ['q_ar'] = isset($_GET['ar']) ? $_GET['ar'] : '';
        $return ['q_uid'] = isset($_GET['uid']) ? $_GET['uid'] : 0;
        $return ['q_sn'] = isset($_GET['sn']) ? $_GET['sn'] : '';
        $return ['q_en'] = isset($_GET['en']) ? $_GET['en'] : '';
        $return ['q_sc'] = isset($_GET['sc']) ? $_GET['sc'] : 0;
        $return ['q_ec'] = isset($_GET['ec']) ? $_GET['ec'] : '';
        $return ['q_suid'] = isset($_GET['suid']) ? $_GET['suid'] : 0;
        $return ['q_euid'] = isset($_GET['euid']) ? $_GET['euid'] : 0;
        $return ['q_cwd'] = isset($_GET['cwd']) ? $_GET['cwd'] : '';
        $return ['q_drpt'] = isset($_GET['pt']) ? $_GET['pt'] : '';
        $return ['q_w'] = isset($_GET['w']) ? $_GET['w'] : '';
        $return ['q_m'] = isset($_GET['m']) ? $_GET['m'] : '';
        $return ['q_f'] = isset($_GET['f']) ? $_GET['f'] : '';
        $return ['q_mo'] = isset($_GET['mo']) ? $_GET['mo'] : 0;
        $return ['q_tp'] = isset($_GET['tp']) ? $_GET['tp'] : 0;
        $return ['q_srt'] = isset($_GET['st']) ? $_GET['st'] : 0;
        $return ['q_et'] = isset($_GET['et']) ? $_GET['et'] : 0;
        $return ['q_r'] = isset($_GET['r']) ? $_GET['r'] : 0;
        $return ['q_sy'] = isset($_GET['sy']) ? $_GET['sy'] : 0;
        $return ['q_gt'] = isset($_GET['gt']) ? $_GET['gt'] : 0;
        $return ['q_drag'] = isset($_GET['drag']) ? $_GET['drag'] : 0;
        $return ['q_src'] = isset($_GET['src']) ? $_GET['src'] : 0;
        $return ['q_db'] = isset($_GET['db']) ? $_GET['db'] : 0;
        $return ['q_geocty'] = isset($_GET['geocty']) ? $_GET['geocty'] : 0;
        // 小流量统计
        $return['q_sampling'] = isset($index_obj->res['sampling']) ? $index_obj->res['sampling'] : '';
        $return['p_type'] = isset($index_obj->res['result']['type']) ? $index_obj->res['result']['type'] : 104;  //QUERY_UNKNOW_ERROR:104
        $return['p_cc'] = isset($index_obj->res['backend_data']['city_change']) ? $index_obj->res['backend_data']['city_change'] : '';  
        $return['p_sd'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['type']) && $index_obj->res['result']['type']==2 && isset($index_obj->res['content']) && isset($index_obj->res['content']['city_type']) && $index_obj->res['content']['city_type']==2 ? 1 : 0;
        $return['p_res_no'] = (isset($index_obj->res['content']) || isset($index_obj->res['addrs'])) ? 1 : 0;
        $return['p_cn'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['current_null']) && !is_array($index_obj->res['result']['current_null']) ? $index_obj->res['result']['current_null'] : 0;
        $return['p_s_city'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['s_city_name']) ? $index_obj->res['backend_data']['s_city_name'] : '';
        $return['p_s_res'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['s_res_no']) ? $index_obj->res['backend_data']['s_res_no'] : 0;
        $return['p_e_city'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['e_city_name']) ? $index_obj->res['backend_data']['c_city_name'] : '';
        $return['p_e_res'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['e_res_no']) ? $index_obj->res['backend_data']['e_res_no'] : 0;
        $return['p_rb'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['rb']) ? $index_obj->res['backend_data']['rb'] : 0;
        $return['p_bc'] = isset($index_obj->res['backend_data']) && isset($index_obj->res['backend_data']['two_city']) ? $index_obj->res['backend_data']['two_city'] : 0;
        $return['p_ca'] = isset($index_obj->res['weather']) ? 1 : 0;
        $return['p_sugq'] = isset($index_obj->res['suggest_query']) ? 1 : 0;
        $return['p_specr'] = isset($index_obj->res['space_poi']) ? 1 : 0;
        $return['p_resid'] = isset($_GET['resid']) ? $_GET['resid'] : '';
        $return['p_res'] = isset($_GET['res']) ? $_GET['res'] : '';
        $return['p_on_gel'] = isset($_GET['on_gel']) ? $_GET['on_gel'] : 0;
        $return['p_op_gel'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['op_gel']) ? $index_obj->res['result']['op_gel'] : 0;
        $return['p_gr'] = isset($_GET['gr']) ? $_GET['gr'] : 0;
        $return['p_tn'] = isset($_GET['tn']) ? $_GET['tn'] : '';
        $return['p_place'] = isset($index_obj->res['place_info']) ? 1 : 0;
        $return['p_d_data_type'] = isset($index_obj->res['place_info']) && isset($index_obj->res['place_info']['d_data_type']) ? $index_obj->res['place_info']['d_data_type'] : '';
        $return['p_strategy'] = $return['q_qt']==='bd2' && isset($index_obj->res['result']) && isset($index_obj->res['result']['strategy']) ? $index_obj->res['result']['strategy'] : '';
        $return['p_qid'] = isset($index_obj->res['result']) && isset($index_obj->res['result']['qid']) ? $index_obj->res['result']['qid'] : '';
        if('boxrecommend' == $index_obj->qt || 'recommend' == $index_obj->qt){
            if(isset($index_obj->res['bd_recommend'])){
                $return['p_qid'] = isset($index_obj->res['bd_recommend']['qid']) ? $index_obj->res['bd_recommend']['qid'] : '';
            }
        }
        $return = Common_LogData::getBusData($index_obj,$return); 
        $return = Common_LogData::getSpecialBus($index_obj,$return); 
        $return = Common_LogData::getRecommendData($index_obj,$return); 
        $return['p_sr_lc'] = '';
        $return['q_from'] = '';
        $return['q_reqflag'] = '';
        $return['p_place_ex'] = '';
        $return['p_place_sort'] = '';
        $return['p_sampling_ex'] = '';
        $return['p_mapui_req_url'] = '';
        $return['p_ctype'] = -1;
        if($return['p_type']==1 || $return['p_type']==2){ //RESULT_TYPE_INDEX:1; RESULT_TYPE_CURRENT_CITY:2
            if(isset($index_obj->res['content'])){
                if($index_obj->res['content']['if_current'] == 1){
                    $return['p_cname'] = $index_obj->res['content']['cname'];
                }else{
                    $return['p_cname'] = $index_obj->res['content']['pcname'];
                }
                $return['p_ctype'] = $index_obj->res['content']['city_type'];
            }
        }else{
            if (isset($index_obj->res['current_city']) && isset($index_obj->res['current_city']['name'])) {
                $return['p_cname'] = $index_obj->res['current_city']['name'];
            } else {
                $return['p_cname'] = '';
            }
        }
        $return['p_uids'] = '';
        $return['p_uids'] = Common_LogData::getListUids($index_obj);

        $return['p_errno'] = 0;
        if(isset($index_obj->res['result']) && isset($index_obj->res['result']['error'])){
            $return['p_errno'] = $index_obj->res['result']['error'];
        }elseif(isset($index_obj->res['result']) && isset($index_obj->res['result']['errorCode'])){
            $return['p_errno'] = $index_obj->res['result']['errorCode'];
        }
        $return = Common_LogData::getPoiLogData($index_obj,$return);
        $res_lbs_forward = Common_Request::getResLbsForward();
        $return['res_lbs_forward'] = isset($res_lbs_forward)?json_encode($res_lbs_forward):'';
        $return['pano_query_cnt'] = Common_Logdata::getPanoQueryCnt($index_obj);
        $return['region'] = self::getInternationRegion();
        $return['dynamicImg'] = self::returnDynamicImage($index_obj);
        $return = Common_LogData::getFavoriteData($index_obj,$return);
        $return = Common_LogData::getPlaceData($index_obj,$return);
        $return = Common_LogData::getWeatherData($index_obj,$return);
         //国际化统计需求，标示查询结果来源
        $return['p_source'] = isset($index_obj->res['result']['source']) ? $index_obj->res['result']['source'] : '';
        //自定义统计日志
        $hookclass = 'Hook_Qt_' . ucfirst($index_obj->qt);
        if (class_exists($hookclass)) {
            $objHook = new $hookclass($index_obj->reqs, $index_obj->res); 
            $customLog = $objHook->stathook();
            if (is_array($customLog) && count($customLog) > 0) { 
                foreach ($customLog as $k => $v) {
                    $return["c_$k"] = $v;
                }
            }
        }
        return $return; 
    }

    private static function getWeatherData($index_obj,$return){
        if ($index_obj->qt == 'xapi'){
            $return['retry'] = Hook_Common_Monitor::getRequestCount();
            if (isset($index_obj->res['response'])) {
                $return['xapi_res'] = $index_obj->res['response'];
            }
        }
        return $return;
    }

    /**
     * 获取place uv相关字段
     * 列表页：
     * 添加p_std_tag(精确需求)
     * 添加d_tag_info_list(泛需求，第一个poi点的std_tag)
     * 详情页：
     * 添加new_catalog_id(标识分类)
     */
    private static function getPlaceData($index_obj,$return){
        //列表页统计
        if ($index_obj->qt == 's' || $index_obj->qt == 'bd2') {
            //精确检索
           if ($return['p_op_gel']==0 && isset($index_obj->res['content'][0]['std_tag'])) {
               $return['p_std_tag'] = $index_obj->res['content'][0]['std_tag'];
           }
           //泛检索
           if ($return['p_op_gel']==1 && isset($return['res_lbs_forward'])) {
               $lbs_forward = json_decode($return['res_lbs_forward'],true);
               if (isset($lbs_forward['param'][0]['d_tag_info_list'])) {
                   $return['d_tag_info_list'] = $lbs_forward['param'][0]['d_tag_info_list'];
               }
           }
        }
        //详情页统计
        if ($index_obj->qt == 'inf' && isset($index_obj->res['inf']['content']['new_catalog_id'])){
            $return['new_catalog_id'] = $index_obj->res['inf']['content']['new_catalog_id'];
        }
        if ($index_obj->qt == 'ninf' && isset($index_obj->res['content']['ext']['detail_info']['new_catalog_id'])){
            $return['new_catalog_id'] = $index_obj->res['content']['ext']['detail_info']['new_catalog_id'];
        }
        return $return;
    }

    /**
     * 判断客户端是否返回动态底图数据
     * 只有过滤规则rp_filter=wifi且poi_result.imge_ext存在时，才会返回
     * @param object $index_obj
     * 
     * @return integer $dynamicImg   0：不返回动态底图   1：返回动态底图 
     */
    
    private static function returnDynamicImage($index_obj){
    	$dynamicImg = 0;
    	if ( isset($index_obj->reqs['rp_filter']) && $index_obj->reqs['rp_filter'] == 'wifi' 
    			&& isset($index_obj->res['poi_result']['imge_ext']) && !empty($index_obj->res['poi_result']['imge_ext']) ) {
    		$dynamicImg = 1;
    	}
    	return $dynamicImg;
    }
    /**
     *
     * 返回国际化区域码，若没走国际化，返回null
     * @return string $region:国际化区域码region 
     *
     */
    private static function getInternationRegion(){
        $region = null;
        $region = Common_International::getRegion();
        return $region;
    }

    //列表中item的uid集合： uids，将在统计的session中用到
    //如果uid个数不足10个，将补充0，增加至10个
    public static function getUids($content){
        $uids = '';
        $i = 0; 
        $cnt = count($content);
        for(; $i < $cnt; $i ++){
            if(isset($content[$i])&&isset($content[$i]['uid'])){
                $uids .= $content[$i]['uid'].',';
            }else{
                break;
            }
        }
        for(; $i < 10; $i++){
            $uids .= '0,';
        }
        $p_uids = substr($uids, 0, strlen($uids) -1);
        return $p_uids;
    }
    //获取uids列表
    public static function getListUids(Index $index_obj){
        $p_uids = '';
        if(isset($index_obj->res['content']['uid'])){
            $p_uids = $index_obj->res['content']['uid'].',0,0,0,0,0,0,0,0,0';
        }else if(isset($index_obj->res['content']) && is_array($index_obj->res['content'])){
            $p_uids = Common_LogData::getUids($index_obj->res['content']);
        }else if(isset($index_obj->res['bz_list']['content']) && is_array($index_obj->res['bz_list']['content'])){
            $p_uids = Common_LogData::getUids($index_obj->res['bz_list']['content']);
        }else if(isset($index_obj->res['bd_recommend']['content']) && is_array($index_obj->res['bd_recommend']['content'])){
        	$p_uids = Common_Logdata::getUids($index_obj->res['bd_recommend']['content']);
        }
        return $p_uids;
    }

    /**
     * 获取点赞/关注等相关统计数据
     *
     *
     */
    public function getFavoriteData(Index $index_obj, $return = array()) {
        if ($index_obj->qt == 'favorite') {
            $return['favorite_key']     = isset($_GET['key']) ? $_GET['key'] : '';
            $return['favorite_subkey']  = isset($_GET['subkey']) ? $_GET['subkey'] : ''; 
            $return['favorite_action']  = isset($_GET['type']) ? $_GET['type'] : ''; 
            $return['favorite_themeId'] = isset($_REQUEST['theme_id']) ? $_REQUEST['theme_id'] : ''; 
        }
        return $return;
    }

    /**
     * 附近推荐的相关统计
     * 
     * @param Index $index_obj
     * @param unknown $return
     * @return multitype:
     */
    public function getRecommendData(Index $index_obj, $return = array()){
    	if($index_obj->qt == 'recommend'){
    		
    		$flag = $index_obj->res['data'] && $index_obj->res['data']['content'];    		
    		$data = array();
    		if($flag){
    			$data = $index_obj->res['data'];
    		}
    		
			if($data){
				//后端统计使用
				$return['p_rec_lbs_forward'] = $data['lbs_forward'];
				$return['p_rec_status']  = $data['status'];								
				
				$poi_list = $data['content'];	    		
	    		$rec_poi_cnt = count($poi_list);
	    		$return['p_rec_poi_cnt'] = $rec_poi_cnt;  //不同排序位展示
	    		
	    		$rec_industry = array();   //各行业展示	    		
	    		$rec_scene = array();      //各场景展示
	    		$rec_poi_scores = array(); //poi评分  
	    		foreach($poi_list as $v){
	    			if ($v['poi_industry']) {
	    				$rec_industry[] = $v['poi_industry'];
	    			}
	    			if ($v['scene']) {
	    				$rec_scene[] = $v['scene'];
	    			}
	    			if ($v['poi_scores']) {
	    				$rec_poi_scores[]  = $v['poi_scores'];
	    			}
	    		}
	    		$rec_industry = implode(',',$rec_industry);
	    		$rec_scene = implode(',',$rec_scene);
	    		$rec_poi_scores = implode(',', $rec_poi_scores);
	    		
	    		$return['p_rec_industry'] = $rec_industry;
	    		$return['p_rec_scene'] = $rec_scene;
	    		$return['p_rec_poi_scores'] = $rec_poi_scores;
			}
    	}
    	return $return;
    }
    //特殊车辆统计
    public function getSpecialBus(Index $index_obj, $return = array()){
        //线路检索列表页(qt=s)
        if($index_obj->qt == 's'){
            if(isset($index_obj->res['poi_result'])&&isset($index_obj->res['poi_result']['contents'])){
                $contents = $index_obj->res['poi_result']['contents'];
                $total = 0;
                $count = 0;
                foreach($contents as $content){
                    //poiTyep:2公交，4地铁
                    if($content['poiType']==2||$content['poiType']==4){
                        $total++;
                        //车辆形式不是普通公交(256),也不是普通地铁(512)
                        if(isset($content['kindtype'])&&$content['kindtype']!=256&&$content['kindtype']!=512){
                            $count++;
                        }
                    }
                }
                $return['p_se_spec_kindtype'] = $count;
                $return['p_se_buslines'] = $total;
            }
        }
        //更多路线列表页(qt=bl)
        if($index_obj->qt == 'bl'){
            if(isset($index_obj->res['bus_list'])&&isset($index_obj->res['bus_list']['content'])){
                $contents = $index_obj->res['bus_list']['content'];
                $total = 0;
                $count = 0;
                foreach($contents as $content){
                    $total++;
                    if($content['kindtype']!=256&&$content['kindtype']!=512){
                        $count++;
                    }
                }
                $return['p_bl_spec_kindtype'] = $count;
                $return['p_bl_buslines'] = $total;
            }
        }
        return $return;
    }

    /**
     * 获取列表中有全景的query搜索量
     * @param Index $index_obj
     * @return int $cnt: 0=>本次搜索无全景， 1=>本次搜索有一次全景
     */
    public static function getPanoQueryCnt(Index $index_obj){
    	$queryCnt = 0;
    	if(isset($index_obj->res['poi_result']) && isset($index_obj->res['poi_result']['contents']) 
    		&& is_array($index_obj->res['poi_result']['contents'])){    		
 				$poiList = $index_obj->res['poi_result']['contents'];
 				//指定的几个行业
 				$viewType = array(1,2,8,9,10,11);
 				foreach ($poiList as $poi){
 					if(isset($poi['pano']) && $poi['pano'] == 1 &&
 					   isset($poi['view_type']) && in_array($poi['view_type'], $viewType)){
 						$queryCnt = 1;
 						break;
 					}
 				}
    	}
    	return $queryCnt;
    }
    //bus num计数统计
    public function getBusData(Index $index_obj,$return=array()){
        $return['p_bus_plan_num'] = isset($index_obj->res['content']) && isset($index_obj->res['content']['routes']) ? count($index_obj->res['content']['routes']) : '';
        $return['p_bus_rt_plan_num'] = '';
        $return['p_tip_rtbus'] = '';
        $return['p_tip_label_type'] = '';
        $return['p_rtbus_nu'] = '';
        $return['p_traffic_type_10'] = 0;
        $return['p_traffic_type_20'] = 0;
        $return['p_traffic_type_30'] = 0;
        $return['p_bus_legs_num'] = 0;
        //迁移一个诡异的统计
        if(isset($index_obj->res['content']) && isset($index_obj->res['content']['routes'])){
            $return['p_bus_rt_plan_num'] = 0;
            foreach($index_obj->res['content']['routes'] as $route){
                $tmp_rt_plan_num = 0;
                if(isset($route['legs'])){
                    foreach($route['legs'] as $leg){
                        $rtbus = isset($leg['tip_rtbus'])&&$leg['tip_rtbus']!=null;
                        $tip = isset($leg['tip']) && $leg['tip']==4;
                        if($rtbus||$tip){
                            $tmp_rt_plan_num++;
                        }
                        if ($tmp_rt_plan_num > 0){
                            break;
                        }
                        //实时公交统计
                        if(isset($leg['tip_rtbus'])){
                            $return['p_tip_rtbus'] = 1;
                        }
                        if(isset($leg['tip_label_type'])){
                            $return['p_tip_label_type'] = $leg['tip_label_type'];
                        }
                        //公交路况信息统i计
                        if(isset($leg['plan_trans_type']) && $leg['plan_trans_type'] != '6'){
                            $return['p_bus_legs_num']++;
                        }
                      
                        if(isset($leg['traffic_type'])){
                            if($leg['traffic_type'] > 20){
                                $return['p_traffic_type_30']++;
                            }elseif($leg['traffic_type'] > 10){
                                $return['p_traffic_type_20']++;
                            }elseif($leg['traffic_type'] > 1){
                                $return['p_traffic_type_10']++;
                            }
                        }
                    }
                }
                if ($tmp_rt_plan_num > 0){
                    $return['p_bus_rt_plan_num']++;
                }
            }
        }
        //公交、地铁、步行方案的第一条路线距离
        if(isset($index_obj->res['content']) 
            && isset($index_obj->res['content']['routes']) 
            && isset($index_obj->res['content']['routes'][0]) 
            && isset($index_obj->res['content']['routes'][0]['legs'])
            && isset($index_obj->res['content']['routes'][0]['legs'][0])
            && isset($index_obj->res['content']['routes'][0]['legs'][0]['distance'])){
                $return['p_route_first_distance'] = $index_obj->res['content']['routes'][0]['legs'][0]['distance'];
            }else{
                $return['p_route_first_distance'] = '';
            }
        if($index_obj->reqs['qt'] == 'inf' && isset($index_obj->res['inf']['content']['rtbus_nu'])){
            $return['p_rtbus_nu'] = $index_obj->res['inf']['content']['rtbus_nu'];
        }
        $return['p_res_cc'] = isset($index_obj->res['content']['current_city']['code'])?$index_obj->res['content']['current_city']['code']:0;
        return $return;
    }
    //集中poi相关的日志记录 
    function getPoiLogData(Index $index_obj,$return = array()){
        //add ninf cater 
        $return['p_srcname'] = '';
        $return['p_wap_bookable'] = '';
        $return['p_ori_info_src'] = '';
        $return['p_groupon'] = '';
        $return['p_takeout'] = '';
        $return['p_premium2'] = '';
        if($index_obj->reqs['qt'] == 'ninf'){
            $return['p_srcname'] = $index_obj->res['content']['ext']['src_name'];
            $return['p_wap_bookable'] = isset($index_obj->res['content']['ext']['detail_info']['wap_bookable'])?$index_obj->res['content']['ext']['detail_info']['wap_bookable']:'';
            $return['p_ori_info_src'] = isset($index_obj->res['content']['ext']['detail_info']['ori_info']['src'])?$index_obj->res['content']['ext']['detail_info']['ori_info']['src']:'';
            $return['p_groupon'] = isset($index_obj->res['content']['ext']['detail_info']['groupon'])?1:'';
            $return['p_takeout'] = isset($index_obj->res['content']['ext']['detail_info']['takeout'])?1:'';
            $return['p_premium2'] = isset($index_obj->res['content']['ext']['detail_info']['premium2'])?1:'';
            $return['p_heat_map'] = isset($index_obj->res['content']['heat_map'])?1:'';
            $return['p_scope_ticket_from'] = isset($index_obj->res['content']['ext']['rich_info']['scopebiz_ticket_from']['src'])?
                $index_obj->res['content']['ext']['rich_info']['scopebiz_ticket_from']['src']:'';
        }
        //the sug of qt=s
        $return['p_sug_psrs'] = '';
        $return['p_sug_suggest_query'] = '';
        $return['p_sug_content'] = '';
        if($index_obj->reqs['qt'] == 's' && isset($index_obj->res)){
            $return['p_sug_psrs'] = isset($index_obj->res['psrs'])?1:'';
            $return['p_sug_suggest_query'] = isset($index_obj->res['suggest_query'])?1:'';
            $return['p_sug_content'] = isset($index_obj->res['content'])?1:'';
        }
        $business_scope_type = '';
        $act_card = '';
        $index_obj->poi_result = isset($index_obj->res['poi_result'])?$index_obj->res['poi_result']:array();
        if(isset($index_obj->poi_result['place_info']['d_business_type']) 
            && is_string($index_obj->poi_result['place_info']['d_business_type']))
        {
            $business_scope_type = $index_obj->poi_result['place_info']['d_business_type'];
        }
        if(isset($index_obj->poi_result['result']['business_scope_type']) 
            && is_string($index_obj->poi_result['result']['business_scope_type']))
        {
            $business_scope_type = $index_obj->poi_result['result']['business_scope_type'];
        }
        //
        if(isset($index_obj->poi_result['place_info']['d_act_card']) 
            && is_array($index_obj->poi_result['place_info']['d_act_card']))
        {
            $act_card = 1;
        }

        //父子节点相关日志记录
        $poi_children = '';
        $poi_sgeo_type = '';
        $poi_father_id = '';
        
        if ($index_obj->qt == 's') {
        	if(isset($index_obj->poi_result['children']) && is_array($index_obj->poi_result['children'])
        		&& (count($index_obj->poi_result['children']) > 0) )
        	{
        		$poi_children = 1;
        		$children = $index_obj->poi_result['children'];
        		$arrFather = array();
        		foreach ($children as $child) {
        			$arrFather[] = $child['fater_id'];
        		}
        		$poi_father_id = implode(",", $arrFather);
        	}
        }
       
        if(isset($index_obj->poi_result['contents']) && is_array($index_obj->poi_result['contents']) &&
            isset($index_obj->poi_result['contents'][0]['sgeo']['type']))
        {
            $poi_sgeo_type = $index_obj->poi_result['contents'][0]['sgeo']['type'];
        }
        $return['p_business_scope_type'] = $business_scope_type;
        $return['p_act_card'] = $act_card;
        $return['p_poi_children'] = $poi_children;
        $return['p_poi_sgeo_type'] = $poi_sgeo_type;
        $return['p_poi_father_id'] = $poi_father_id;
        return $return; 
    }
     /**
      *
      * 旧日志记录
      *
      */
    public static function oldlog($logdata,Index $index_obj){
        global $uii_num;
        global $g_logid;
        $ret = 0;        
        $ip = Common_Ip::getUserClientIp();
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url = urlencode($url);
        $endtime = microtime(true);
        $use_time = ($endtime-$index_obj->starttime)*1000;
        $common_log_str = '';
        foreach($index_obj->ess_log_keys as $k){
            $_val = isset($logdata[$k]) ? $logdata[$k] : '';
            $common_log_str .= " $k=$_val";
        }
        $log_str = "req[wd[{$logdata['q_wd']}]qt={$logdata['q_qt']} c={$logdata['q_cc']} ip=$ip pn={$logdata['q_pn']} rn={$logdata['q_rn']} l={$logdata['q_l']}";
        $log_str .= "b={$logdata['q_b']} ar={$logdata['q_ar']} uid={$logdata['q_uid']} sn={$logdata['q_sn']} en={$logdata['q_en']} sc={$logdata['q_sc']}";
        $log_str .= "ec={$logdata['q_ec']} suid={$logdata['q_suid']} euid={$logdata['q_euid']} cwd={$logdata['q_cwd']}";
        $log_str .= "pt={$logdata['q_drpt']} w={$logdata['q_w']} m={$logdata['q_m']} f={$logdata['q_f']} mo={$logdata['q_mo']} tp={$logdata['q_tp']}";
        $log_str .= "st={$logdata['q_srt']} et={$logdata['q_et']} r={$logdata['q_r']} sy={$logdata['q_sy']} gt={$logdata['q_gt']} drag={$logdata['q_drag']} ";
        $log_str .= "src={$logdata['q_src']} db={$logdata['q_db']} geocty={$logdata['q_geocty']} sampling={$logdata['q_sampling']}] res[type={$logdata['p_type']} ";
        $log_str .= "cname={$logdata['p_cname']} ctype={$logdata['p_ctype']} cc={$logdata['p_cc']} sd={$logdata['p_sd']} res_no={$logdata['p_res_no']} ";
        $log_str .= "cn={$logdata['p_cn']} s_city={$logdata['p_s_city']} s_res={$logdata['p_s_res']} e_city={$logdata['p_e_city']} e_res={$logdata['p_e_res']} ";
        $log_str .= "rb={$logdata['p_rb']} bc={$logdata['p_bc']} ca={$logdata['p_ca']} sugq={$logdata['p_sugq']} specr={$logdata['p_specr']} resid={$logdata['p_resid']} ";
        $log_str .= "res={$logdata['p_res']} on_gel={$logdata['p_on_gel']} op_gel={$logdata['p_op_gel']} gr={$logdata['p_gr']} tn={$logdata['p_tn']} ";
        $log_str .= "errno={$logdata['p_errno']} sr_lc={$logdata['p_sr_lc']} place={$logdata['p_place']} mapui_req_url=$url d_data_type={$logdata['p_d_data_type']} ";
        $log_str .= "strategy={$logdata['p_strategy']} bus_plan_num={$logdata['p_bus_plan_num']} bus_rt_plan_num={$logdata['p_bus_rt_plan_num']}$common_log_str ";
        $log_str .= "uids={$logdata['p_uids']} route_first_distance={$logdata['p_route_first_distance']} wap_bookable={$logdata['p_wap_bookable']} ";
        $log_str .= "ori_info_src={$logdata['p_ori_info_src']} bussiness_scope_type={$logdata['p_business_scope_type']} act_card={$logdata['p_act_card']}]";
        //$log_str = utf8_to_gbk($log_str);
        $log_str = str_replace("\r", '', $log_str);
        $log_str = str_replace("\n", '', $log_str);
        Common_Oldlog::notice("[logid:".$g_logid."][proctime:total:$use_time(ms) rev:0+proc:$use_time+write:0][reqip:{$_SERVER['REMOTE_ADDR']}][reqsvr:fastcgi][cmdno:][svrname:Bingo][errno:][][NOTICE_UI:$log_str uii:$uii_num][done request handing ret[$ret]]");
    }
}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
