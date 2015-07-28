<?php
class ProductID {
    const PS = 0;
    const TIEBA = 1;
    const IKNOW = 2;
    const MAP = 3;
    const WISE = 4;
    const VOICE_ASSISTANT = 5;
    const VOICE_SEARCH = 6;
    const VOICE_INPUT = 7;
    const SUMERU_ENGINE = 8;
    const UUCUN = 9;
    const ONEKEY_ROOT = 10;
    const PSS = 11;
    const dx_os = 12;
    const FAVO = 13;
    const LC = 14;
    const WISE_SUOPING = 15;
    const DX_FRONT = 16;
    const XCLOUD = 17;
    const BFE = 18;
    const PUSH = 19;
    const DT = 20;
    const DIANXIN_MASTER = 21;
    const JIA_SU_LE = 22;
    const FRONTIA = 23;
    const NOVA = 24;
    const SEARCHBOX_APP = 25;
    const APPSEARCH = 26;
    const MEDIA_CLOUD = 27;
    const MOBILE_IME = 28;
    const WISE_BOOKSTORE = 29;
    const MOBILE_BROWSER_KERNEL = 30;
    const MOBILE_BROWSER = 31;
    const PCIME = 32;
    const WENKU = 33;
    const BAIDU_LAUNCHER = 34;
    const YI_CLICKSEARCH = 35;
    const YI_SEMIVIEW = 36;
    const LVYOU = 37;
    const ZHUSHOU_91 = 38;
    const ECOM = 39;
    const ZHIXIN = 40;
    const BIGLOG = 41;
    const BAE = 42;
    const NETDISK = 43;
    const APPBUILDER = 44;
    const AUDIO = 45;
    const QUERY_PARSER_OPEN = 46;
    const FENGCHAO_BIZ = 47;
    const LBSMAP = 48;
    const UDW = 49;
    const LIFE_NOTE = 50;
    const QINGPAI = 51;
    const HIMARKET = 52;
    const ICAFE = 53;
    const PCS = 54;
    const HAO123 = 55;
    const GLOBAL_WISE = 56;
    const CHUNHUA = 57;
    const IPCS_CLIENT = 58;
    const LSP = 59;
    const MINOS = 60;
    const INTERNAL_SEARCH = 61;
    const LBSTSM = 62;
    const TRENDS = 63;
}
class ClientType {
    const UNKNOWN = 0;
    const PC_WEB = 1;
    const WAP_COMMON = 2;
    const WAP_SMART = 3;
    const PAD_WEB = 4;
    const PAD_APP = 5;
    const PC_CLIENT = 6;
    const MOBILE_APP = 7;
    const SDK = 8;
    const API = 9;
}
class EncodingType {
    const UTF8 = 0;
    const GBK = 1;
}
class BaiduLog {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(24);
            $this->mini_message->setAttributes("0 1 14 2 product\n1 2 4 2 timestamp\n2 3 4 2 logid\n3 4 9 1 baiduid\n4 8 7 1 user_ip\n5 9 9 1 url\n6 10 9 1 user_agent\n7 11 9 1 referrer\n8 12 9 1 cookie\n9 14 9 1 query\n10 15 9 1 wise_cuid\n11 16 9 1 action_name\n12 24 14 1 client_type\n13 25 11 1 metadata\n14 27 14 1 encoding_type\n15 160 11 1 logfields\n16 162 11 1 device_info\n17 163 11 1 user_info_ext\n18 164 11 1 poi_comm_info\n19 165 11 1 res_base_data\n20 167 11 1 search_comm_info\n22 170 11 1 route_special_info\n23 171 11 1 lbs_da\n21 168 9 1 rewrite_url\n");
            $this->setMetadata(new MetaData);
            $this->setLogfields(new MapLogFields);
            $this->setDeviceInfo(new MapDeviceCommFields);
            $this->setUserInfoExt(new MapUserExtensionFields);
            $this->setPoiCommInfo(new MapPOICommFields);
            $this->setResBaseData(new MapResBaseDataFields);
            $this->setSearchCommInfo(new MapSearchCommFields);
            $this->setRouteSpecialInfo(new MapBusinessRouteSpecialFields);
            $this->setLbsDa(new LBSDA);
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasProduct() {
        return ($this->getProduct() != null);
    }

    public function getProduct() {
        return $this->mini_message
                    ->getValue(0, 14);
    }

    public function setProduct($value) {
        return $this->mini_message
                    ->setValue(0, 14, $value);
    }

    public function hasTimestamp() {
        return ($this->getTimestamp() != null);
    }

    public function getTimestamp() {
        return $this->mini_message
                    ->getValue(1, 4);
    }

    public function setTimestamp($value) {
        return $this->mini_message
                    ->setValue(1, 4, $value);
    }

    public function hasLogid() {
        return ($this->getLogid() != null);
    }

    public function getLogid() {
        return $this->mini_message
                    ->getValue(2, 4);
    }

    public function setLogid($value) {
        return $this->mini_message
                    ->setValue(2, 4, $value);
    }

    public function hasBaiduid() {
        return ($this->getBaiduid() != null);
    }

    public function getBaiduid() {
        return $this->mini_message
                    ->getValue(3, 9);
    }

    public function setBaiduid($value) {
        return $this->mini_message
                    ->setValue(3, 9, $value);
    }

    public function hasUserIp() {
        return ($this->getUserIp() != null);
    }

    public function getUserIp() {
        return $this->mini_message
                    ->getValue(4, 7);
    }

    public function setUserIp($value) {
        return $this->mini_message
                    ->setValue(4, 7, $value);
    }

    public function hasUrl() {
        return ($this->getUrl() != null);
    }

    public function getUrl() {
        return $this->mini_message
                    ->getValue(5, 9);
    }

    public function setUrl($value) {
        return $this->mini_message
                    ->setValue(5, 9, $value);
    }

    public function hasUserAgent() {
        return ($this->getUserAgent() != null);
    }

    public function getUserAgent() {
        return $this->mini_message
                    ->getValue(6, 9);
    }

    public function setUserAgent($value) {
        return $this->mini_message
                    ->setValue(6, 9, $value);
    }

    public function hasReferrer() {
        return ($this->getReferrer() != null);
    }

    public function getReferrer() {
        return $this->mini_message
                    ->getValue(7, 9);
    }

    public function setReferrer($value) {
        return $this->mini_message
                    ->setValue(7, 9, $value);
    }

    public function hasCookie() {
        return ($this->getCookie() != null);
    }

    public function getCookie() {
        return $this->mini_message
                    ->getValue(8, 9);
    }

    public function setCookie($value) {
        return $this->mini_message
                    ->setValue(8, 9, $value);
    }

    public function hasQuery() {
        return ($this->getQuery() != null);
    }

    public function getQuery() {
        return $this->mini_message
                    ->getValue(9, 9);
    }

    public function setQuery($value) {
        return $this->mini_message
                    ->setValue(9, 9, $value);
    }

    public function hasWiseCuid() {
        return ($this->getWiseCuid() != null);
    }

    public function getWiseCuid() {
        return $this->mini_message
                    ->getValue(10, 9);
    }

    public function setWiseCuid($value) {
        return $this->mini_message
                    ->setValue(10, 9, $value);
    }

    public function hasActionName() {
        return ($this->getActionName() != null);
    }

    public function getActionName() {
        return $this->mini_message
                    ->getValue(11, 9);
    }

    public function setActionName($value) {
        return $this->mini_message
                    ->setValue(11, 9, $value);
    }

    public function hasClientType() {
        return ($this->getClientType() != null);
    }

    public function getClientType() {
        return $this->mini_message
                    ->getValue(12, 14);
    }

    public function setClientType($value) {
        return $this->mini_message
                    ->setValue(12, 14, $value);
    }

    public function hasMetadata() {
        return ($this->getMetadata() != null);
    }

    public function getMetadata() {
        $mini_msg = $this->mini_message
                         ->getValue(13, 11);
        return ($mini_msg == null) ? null : new MetaData($mini_msg);
    }

    public function setMetadata($value) {
        return $this->mini_message
                    ->setValue(13, 11, $value->mini_message);
    }

    public function hasEncodingType() {
        return ($this->getEncodingType() != null);
    }

    public function getEncodingType() {
        return $this->mini_message
                    ->getValue(14, 14);
    }

    public function setEncodingType($value) {
        return $this->mini_message
                    ->setValue(14, 14, $value);
    }

    public function hasLogfields() {
        return ($this->getLogfields() != null);
    }

    public function getLogfields() {
        $mini_msg = $this->mini_message
                         ->getValue(15, 11);
        return ($mini_msg == null) ? null : new MapLogFields($mini_msg);
    }

    public function setLogfields($value) {
        return $this->mini_message
                    ->setValue(15, 11, $value->mini_message);
    }

    public function hasDeviceInfo() {
        return ($this->getDeviceInfo() != null);
    }

    public function getDeviceInfo() {
        $mini_msg = $this->mini_message
                         ->getValue(16, 11);
        return ($mini_msg == null) ? null : new MapDeviceCommFields($mini_msg);
    }

    public function setDeviceInfo($value) {
        return $this->mini_message
                    ->setValue(16, 11, $value->mini_message);
    }

    public function hasUserInfoExt() {
        return ($this->getUserInfoExt() != null);
    }

    public function getUserInfoExt() {
        $mini_msg = $this->mini_message
                         ->getValue(17, 11);
        return ($mini_msg == null) ? null : new MapUserExtensionFields($mini_msg);
    }

    public function setUserInfoExt($value) {
        return $this->mini_message
                    ->setValue(17, 11, $value->mini_message);
    }

    public function hasPoiCommInfo() {
        return ($this->getPoiCommInfo() != null);
    }

    public function getPoiCommInfo() {
        $mini_msg = $this->mini_message
                         ->getValue(18, 11);
        return ($mini_msg == null) ? null : new MapPOICommFields($mini_msg);
    }

    public function setPoiCommInfo($value) {
        return $this->mini_message
                    ->setValue(18, 11, $value->mini_message);
    }

    public function hasResBaseData() {
        return ($this->getResBaseData() != null);
    }

    public function getResBaseData() {
        $mini_msg = $this->mini_message
                         ->getValue(19, 11);
        return ($mini_msg == null) ? null : new MapResBaseDataFields($mini_msg);
    }

    public function setResBaseData($value) {
        return $this->mini_message
                    ->setValue(19, 11, $value->mini_message);
    }

    public function hasSearchCommInfo() {
        return ($this->getSearchCommInfo() != null);
    }

    public function getSearchCommInfo() {
        $mini_msg = $this->mini_message
                         ->getValue(20, 11);
        return ($mini_msg == null) ? null : new MapSearchCommFields($mini_msg);
    }

    public function setSearchCommInfo($value) {
        return $this->mini_message
                    ->setValue(20, 11, $value->mini_message);
    }

    public function hasRouteSpecialInfo() {
        return ($this->getRouteSpecialInfo() != null);
    }

    public function getRouteSpecialInfo() {
        $mini_msg = $this->mini_message
                         ->getValue(22, 11);
        return ($mini_msg == null) ? null : new MapBusinessRouteSpecialFields($mini_msg);
    }

    public function setRouteSpecialInfo($value) {
        return $this->mini_message
                    ->setValue(22, 11, $value->mini_message);
    }

    public function hasLbsDa() {
        return ($this->getLbsDa() != null);
    }

    public function getLbsDa() {
        $mini_msg = $this->mini_message
                         ->getValue(23, 11);
        return ($mini_msg == null) ? null : new LBSDA($mini_msg);
    }

    public function setLbsDa($value) {
        return $this->mini_message
                    ->setValue(23, 11, $value->mini_message);
    }

    public function hasRewriteUrl() {
        return ($this->getRewriteUrl() != null);
    }

    public function getRewriteUrl() {
        return $this->mini_message
                    ->getValue(21, 9);
    }

    public function setRewriteUrl($value) {
        return $this->mini_message
                    ->setValue(21, 9, $value);
    }

}
class MapDeviceCommFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(2);
            $this->mini_message->setAttributes("0 1 9 1 wise_net\n1 2 9 1 resid\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasWiseNet() {
        return ($this->getWiseNet() != null);
    }

    public function getWiseNet() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setWiseNet($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasResid() {
        return ($this->getResid() != null);
    }

    public function getResid() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setResid($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

}
class MapUserExtensionFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(4);
            $this->mini_message->setAttributes("0 1 9 1 search_loc_x\n1 2 9 1 search_loc_y\n2 3 9 1 search_area\n3 4 9 1 search_level\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasSearchLocX() {
        return ($this->getSearchLocX() != null);
    }

    public function getSearchLocX() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setSearchLocX($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasSearchLocY() {
        return ($this->getSearchLocY() != null);
    }

    public function getSearchLocY() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setSearchLocY($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

    public function hasSearchArea() {
        return ($this->getSearchArea() != null);
    }

    public function getSearchArea() {
        return $this->mini_message
                    ->getValue(2, 9);
    }

    public function setSearchArea($value) {
        return $this->mini_message
                    ->setValue(2, 9, $value);
    }

    public function hasSearchLevel() {
        return ($this->getSearchLevel() != null);
    }

    public function getSearchLevel() {
        return $this->mini_message
                    ->getValue(3, 9);
    }

    public function setSearchLevel($value) {
        return $this->mini_message
                    ->setValue(3, 9, $value);
    }

}
class MapPOICommFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(1);
            $this->mini_message->setAttributes("0 1 9 1 uid\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasUid() {
        return ($this->getUid() != null);
    }

    public function getUid() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setUid($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

}
class MapResBaseDataFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(5);
            $this->mini_message->setAttributes("0 1 8 1 is_support_bus\n1 2 8 1 is_support_business_area\n2 3 8 1 is_support_subway\n3 4 8 1 is_support_roadcondition\n4 5 8 1 is_support_overallview\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasIsSupportBus() {
        return ($this->getIsSupportBus() != null);
    }

    public function getIsSupportBus() {
        return $this->mini_message
                    ->getValue(0, 8);
    }

    public function setIsSupportBus($value) {
        return $this->mini_message
                    ->setValue(0, 8, $value);
    }

    public function hasIsSupportBusinessArea() {
        return ($this->getIsSupportBusinessArea() != null);
    }

    public function getIsSupportBusinessArea() {
        return $this->mini_message
                    ->getValue(1, 8);
    }

    public function setIsSupportBusinessArea($value) {
        return $this->mini_message
                    ->setValue(1, 8, $value);
    }

    public function hasIsSupportSubway() {
        return ($this->getIsSupportSubway() != null);
    }

    public function getIsSupportSubway() {
        return $this->mini_message
                    ->getValue(2, 8);
    }

    public function setIsSupportSubway($value) {
        return $this->mini_message
                    ->setValue(2, 8, $value);
    }

    public function hasIsSupportRoadcondition() {
        return ($this->getIsSupportRoadcondition() != null);
    }

    public function getIsSupportRoadcondition() {
        return $this->mini_message
                    ->getValue(3, 8);
    }

    public function setIsSupportRoadcondition($value) {
        return $this->mini_message
                    ->setValue(3, 8, $value);
    }

    public function hasIsSupportOverallview() {
        return ($this->getIsSupportOverallview() != null);
    }

    public function getIsSupportOverallview() {
        return $this->mini_message
                    ->getValue(4, 8);
    }

    public function setIsSupportOverallview($value) {
        return $this->mini_message
                    ->setValue(4, 8, $value);
    }

}
class MapLogFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(4);
            $this->mini_message->setAttributes("0 1 9 1 program_errno\n1 2 13 1 logid_for_debug\n2 3 9 1 local_ip\n3 4 9 1 time_used_ms\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasProgramErrno() {
        return ($this->getProgramErrno() != null);
    }

    public function getProgramErrno() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setProgramErrno($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasLogidForDebug() {
        return ($this->getLogidForDebug() != null);
    }

    public function getLogidForDebug() {
        return $this->mini_message
                    ->getValue(1, 13);
    }

    public function setLogidForDebug($value) {
        return $this->mini_message
                    ->setValue(1, 13, $value);
    }

    public function hasLocalIp() {
        return ($this->getLocalIp() != null);
    }

    public function getLocalIp() {
        return $this->mini_message
                    ->getValue(2, 9);
    }

    public function setLocalIp($value) {
        return $this->mini_message
                    ->setValue(2, 9, $value);
    }

    public function hasTimeUsedMs() {
        return ($this->getTimeUsedMs() != null);
    }

    public function getTimeUsedMs() {
        return $this->mini_message
                    ->getValue(3, 9);
    }

    public function setTimeUsedMs($value) {
        return $this->mini_message
                    ->setValue(3, 9, $value);
    }

}
class MapSearchCommFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(13);
            $this->mini_message->setAttributes("0 1 9 1 query_type\n1 2 9 1 query_city_code\n2 3 13 1 query_page_num\n3 4 13 1 query_num_per_page\n4 5 9 1 result_type\n5 6 9 1 result_no\n6 7 9 1 city_type\n7 8 9 1 place\n8 9 9 1 result_trade\n9 10 9 1 uid_list\n10 11 9 1 result_on_gel\n11 12 9 1 result_op_gel\n12 13 9 1 result_city_name\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasQueryType() {
        return ($this->getQueryType() != null);
    }

    public function getQueryType() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setQueryType($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasQueryCityCode() {
        return ($this->getQueryCityCode() != null);
    }

    public function getQueryCityCode() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setQueryCityCode($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

    public function hasQueryPageNum() {
        return ($this->getQueryPageNum() != null);
    }

    public function getQueryPageNum() {
        return $this->mini_message
                    ->getValue(2, 13);
    }

    public function setQueryPageNum($value) {
        return $this->mini_message
                    ->setValue(2, 13, $value);
    }

    public function hasQueryNumPerPage() {
        return ($this->getQueryNumPerPage() != null);
    }

    public function getQueryNumPerPage() {
        return $this->mini_message
                    ->getValue(3, 13);
    }

    public function setQueryNumPerPage($value) {
        return $this->mini_message
                    ->setValue(3, 13, $value);
    }

    public function hasResultType() {
        return ($this->getResultType() != null);
    }

    public function getResultType() {
        return $this->mini_message
                    ->getValue(4, 9);
    }

    public function setResultType($value) {
        return $this->mini_message
                    ->setValue(4, 9, $value);
    }

    public function hasResultNo() {
        return ($this->getResultNo() != null);
    }

    public function getResultNo() {
        return $this->mini_message
                    ->getValue(5, 9);
    }

    public function setResultNo($value) {
        return $this->mini_message
                    ->setValue(5, 9, $value);
    }

    public function hasCityType() {
        return ($this->getCityType() != null);
    }

    public function getCityType() {
        return $this->mini_message
                    ->getValue(6, 9);
    }

    public function setCityType($value) {
        return $this->mini_message
                    ->setValue(6, 9, $value);
    }

    public function hasPlace() {
        return ($this->getPlace() != null);
    }

    public function getPlace() {
        return $this->mini_message
                    ->getValue(7, 9);
    }

    public function setPlace($value) {
        return $this->mini_message
                    ->setValue(7, 9, $value);
    }

    public function hasResultTrade() {
        return ($this->getResultTrade() != null);
    }

    public function getResultTrade() {
        return $this->mini_message
                    ->getValue(8, 9);
    }

    public function setResultTrade($value) {
        return $this->mini_message
                    ->setValue(8, 9, $value);
    }

    public function hasUidList() {
        return ($this->getUidList() != null);
    }

    public function getUidList() {
        return $this->mini_message
                    ->getValue(9, 9);
    }

    public function setUidList($value) {
        return $this->mini_message
                    ->setValue(9, 9, $value);
    }

    public function hasResultOnGel() {
        return ($this->getResultOnGel() != null);
    }

    public function getResultOnGel() {
        return $this->mini_message
                    ->getValue(10, 9);
    }

    public function setResultOnGel($value) {
        return $this->mini_message
                    ->setValue(10, 9, $value);
    }

    public function hasResultOpGel() {
        return ($this->getResultOpGel() != null);
    }

    public function getResultOpGel() {
        return $this->mini_message
                    ->getValue(11, 9);
    }

    public function setResultOpGel($value) {
        return $this->mini_message
                    ->setValue(11, 9, $value);
    }

    public function hasResultCityName() {
        return ($this->getResultCityName() != null);
    }

    public function getResultCityName() {
        return $this->mini_message
                    ->getValue(12, 9);
    }

    public function setResultCityName($value) {
        return $this->mini_message
                    ->setValue(12, 9, $value);
    }

}
class LBSDA {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(9);
            $this->mini_message->setAttributes("0 1 9 1 da_src\n1 2 9 1 da_trd\n2 3 9 1 da_abtest\n3 4 9 1 da_e_name\n4 5 9 1 da_e_group\n5 6 9 1 da_par\n6 7 9 1 da_thirdpar\n7 8 9 1 da_ver\n8 9 9 1 da_res_src\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasDaSrc() {
        return ($this->getDaSrc() != null);
    }

    public function getDaSrc() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setDaSrc($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasDaTrd() {
        return ($this->getDaTrd() != null);
    }

    public function getDaTrd() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setDaTrd($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

    public function hasDaAbtest() {
        return ($this->getDaAbtest() != null);
    }

    public function getDaAbtest() {
        return $this->mini_message
                    ->getValue(2, 9);
    }

    public function setDaAbtest($value) {
        return $this->mini_message
                    ->setValue(2, 9, $value);
    }

    public function hasDaEName() {
        return ($this->getDaEName() != null);
    }

    public function getDaEName() {
        return $this->mini_message
                    ->getValue(3, 9);
    }

    public function setDaEName($value) {
        return $this->mini_message
                    ->setValue(3, 9, $value);
    }

    public function hasDaEGroup() {
        return ($this->getDaEGroup() != null);
    }

    public function getDaEGroup() {
        return $this->mini_message
                    ->getValue(4, 9);
    }

    public function setDaEGroup($value) {
        return $this->mini_message
                    ->setValue(4, 9, $value);
    }

    public function hasDaPar() {
        return ($this->getDaPar() != null);
    }

    public function getDaPar() {
        return $this->mini_message
                    ->getValue(5, 9);
    }

    public function setDaPar($value) {
        return $this->mini_message
                    ->setValue(5, 9, $value);
    }

    public function hasDaThirdpar() {
        return ($this->getDaThirdpar() != null);
    }

    public function getDaThirdpar() {
        return $this->mini_message
                    ->getValue(6, 9);
    }

    public function setDaThirdpar($value) {
        return $this->mini_message
                    ->setValue(6, 9, $value);
    }

    public function hasDaVer() {
        return ($this->getDaVer() != null);
    }

    public function getDaVer() {
        return $this->mini_message
                    ->getValue(7, 9);
    }

    public function setDaVer($value) {
        return $this->mini_message
                    ->setValue(7, 9, $value);
    }

    public function hasDaResSrc() {
        return ($this->getDaResSrc() != null);
    }

    public function getDaResSrc() {
        return $this->mini_message
                    ->getValue(8, 9);
    }

    public function setDaResSrc($value) {
        return $this->mini_message
                    ->setValue(8, 9, $value);
    }

}
class MapBusinessRouteSpecialFields {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(9);
            $this->mini_message->setAttributes("0 1 9 1 start_query\n1 2 9 1 end_query\n2 3 9 1 start_city\n3 4 9 1 end_city\n4 5 9 1 start_uid\n5 6 9 1 end_uid\n6 7 9 1 start_result\n7 8 9 1 end_result\n8 9 13 1 route_strategy\n");
            $this->mini_message->initAutoSet();
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasStartQuery() {
        return ($this->getStartQuery() != null);
    }

    public function getStartQuery() {
        return $this->mini_message
                    ->getValue(0, 9);
    }

    public function setStartQuery($value) {
        return $this->mini_message
                    ->setValue(0, 9, $value);
    }

    public function hasEndQuery() {
        return ($this->getEndQuery() != null);
    }

    public function getEndQuery() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setEndQuery($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

    public function hasStartCity() {
        return ($this->getStartCity() != null);
    }

    public function getStartCity() {
        return $this->mini_message
                    ->getValue(2, 9);
    }

    public function setStartCity($value) {
        return $this->mini_message
                    ->setValue(2, 9, $value);
    }

    public function hasEndCity() {
        return ($this->getEndCity() != null);
    }

    public function getEndCity() {
        return $this->mini_message
                    ->getValue(3, 9);
    }

    public function setEndCity($value) {
        return $this->mini_message
                    ->setValue(3, 9, $value);
    }

    public function hasStartUid() {
        return ($this->getStartUid() != null);
    }

    public function getStartUid() {
        return $this->mini_message
                    ->getValue(4, 9);
    }

    public function setStartUid($value) {
        return $this->mini_message
                    ->setValue(4, 9, $value);
    }

    public function hasEndUid() {
        return ($this->getEndUid() != null);
    }

    public function getEndUid() {
        return $this->mini_message
                    ->getValue(5, 9);
    }

    public function setEndUid($value) {
        return $this->mini_message
                    ->setValue(5, 9, $value);
    }

    public function hasStartResult() {
        return ($this->getStartResult() != null);
    }

    public function getStartResult() {
        return $this->mini_message
                    ->getValue(6, 9);
    }

    public function setStartResult($value) {
        return $this->mini_message
                    ->setValue(6, 9, $value);
    }

    public function hasEndResult() {
        return ($this->getEndResult() != null);
    }

    public function getEndResult() {
        return $this->mini_message
                    ->getValue(7, 9);
    }

    public function setEndResult($value) {
        return $this->mini_message
                    ->setValue(7, 9, $value);
    }

    public function hasRouteStrategy() {
        return ($this->getRouteStrategy() != null);
    }

    public function getRouteStrategy() {
        return $this->mini_message
                    ->getValue(8, 13);
    }

    public function setRouteStrategy($value) {
        return $this->mini_message
                    ->setValue(8, 13, $value);
    }

}
class MetaData {
    public $mini_message;
    public function __construct($mini_message = null) {
        if ($mini_message != null) {
            $this->mini_message = $mini_message;
        } else {
            $this->mini_message = new PbMiniMessage(3);
            $this->mini_message->setAttributes("0 1 4 1 log_module_id\n1 2 9 1 log_name\n2 3 9 1 product_name\n");
            $this->mini_message->initAutoSet();
            $this->setLogModuleId(287);
            $this->setLogName("api_phpui_client");
            $this->setProductName("LBSMAP");
        }
    }
    
    public function serialize() {
        return $this->mini_message->serialize();
    }
    
    public function clear() {
        return $this->mini_message->clear();
    }
    public function json2PbById($value) {
        return $this->mini_message->Json2PbById($value);
    }
    public function hasLogModuleId() {
        return ($this->getLogModuleId() != null);
    }

    public function getLogModuleId() {
        return $this->mini_message
                    ->getValue(0, 4);
    }

    public function setLogModuleId($value) {
        return $this->mini_message
                    ->setValue(0, 4, $value);
    }

    public function hasLogName() {
        return ($this->getLogName() != null);
    }

    public function getLogName() {
        return $this->mini_message
                    ->getValue(1, 9);
    }

    public function setLogName($value) {
        return $this->mini_message
                    ->setValue(1, 9, $value);
    }

    public function hasProductName() {
        return ($this->getProductName() != null);
    }

    public function getProductName() {
        return $this->mini_message
                    ->getValue(2, 9);
    }

    public function setProductName($value) {
        return $this->mini_message
                    ->setValue(2, 9, $value);
    }

}
