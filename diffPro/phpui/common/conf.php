<?php

class Common_Conf{
    public static function get($name){
        $conf = array();
        if(file_exists(S_ROOT . '/config/'.$name.'.php')){
            require S_ROOT . '/config/'.$name.'.php';
        }
        $env = Common_Conf::getenv('phpui2');
        $confenv = isset($env['node']) && isset(${$env['node']}) ? ${$env['node']} : array(); 
        return Common_Func::array_merge_rec($conf, $confenv);
    }

    public static function getenv($alias='phpui2'){
        $commonfile = ENV_DIR.'/common.ini';
        $curfile = ENV_DIR.'/'.$alias.'.ini';
        $commonconf = Common_Func::getIniConf($commonfile);
        $curconf = Common_Func::getIniConf($curfile);
        return array_merge($commonconf,$curconf);
    }
}
