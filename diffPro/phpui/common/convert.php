<?php
/*
 * enviroment variable code convert
 *
 * @package api 
 * @author      xuxu    
 * @date    2011/11/16
 * @copyright   Copyright (c) 2011, Baidu, Inc.
 *
 * @access  public
 * @param   qt  string  required
 * 
 * @return  json    string
*/

class Common_Convert{

    public static function convert() {
        //url decode first
        $_POST      = array_map('urldecode', $_POST );
        // place 的参数如果被encode 2次，那么会把+号encode没了
        $place = array();
        foreach($_GET as $key=>$value){
            if(strpos($key, 'pl_') ==='0'){
                $place[$key] = $value;
            }
        } 
        
        $_GET       = array_map('urldecode', $_GET );
        foreach($place as $key => $value){
            $_GET[$key] = $value;
        }
        
        $_COOKIE    = array_map('urldecode', $_COOKIE );
        $_REQUEST   = array_map('urldecode', $_REQUEST );   
        $_SERVER    = array_map('urldecode', $_SERVER );
        $_POST      = array_map('Common_Convert::do_convert', $_POST );
        $_GET       = array_map('Common_Convert::do_convert', $_GET );
        $_COOKIE    = array_map('Common_Convert::do_convert', $_COOKIE );
        $_REQUEST   = array_map('Common_Convert::do_convert', $_REQUEST );   
        $_SERVER    = array_map('Common_Convert::do_convert', $_SERVER );

        //convert twice for security
        $_GET       = array_map('Common_Convert::html_convert', $_GET );

    }

    static function do_convert($item) {
        if (!empty($item) && !is_utf8($item)) {
            $value = gbk_to_utf8($item);
            return $value;
        } else {
            return $item;
        }
    }

    static function html_convert($item) {
        $item = str_replace('&', '&amp', $item);
        $item = str_replace('<', '&lt', $item);
        $item = str_replace('>', '&gt', $item);
        return $item;
    }

}

?>
