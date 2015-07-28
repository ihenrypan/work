<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/



/**
 * @file logdata.php
 * @author map(com@baidu.com)
 * @date 2015/06/24
 * @brief 
 *  用来封装需要记录的debug日志
 **/
class Common_DebugLogdata{
    /**
     * @param Index $index_obj:入口实例
     * @return array $return:自定义DEBUG参数
     */
    public static function getDebugLogData(Index $index_obj) {
        $return = array();
        //自定义DEBUG日志
        $hookclass = 'Hook_Qt_' . ucfirst($index_obj->qt);
        if (class_exists($hookclass)) {
            $objHook = new $hookclass($index_obj->reqs, $index_obj->res); 
            $return = $objHook->debughook();
        }

        return $return; 
    }

}

/* vim: set expandtab ts=4 sw=4 sts=4 tw=100: */
?>
