<?php

class Common_Curl{
    public static function get($url, $data=array(), $timeout=1){
        if(is_array($data) && count($data)>0){
            $url .= '?'.str_replace('+', '%20', http_build_query($data));
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        if (isset($_COOKIE['BDUSS']) && !empty($_COOKIE['BDUSS'])) {
        	curl_setopt($ch, CURLOPT_COOKIE, 'BDUSS=' . $_COOKIE['BDUSS']);
        }
        $output=curl_exec($ch);
        if(curl_errno($ch)){
            $logobj = new Common_Log();
            $logobj->write('FATAL', 'curl',
                    array(
                        'sontype'=>'get',
                        'param'=>json_encode(array('url'=>$url)),
                        'message'=>json_encode(curl_error($ch)), 
                        'file'=>__FILE__,
                        'line'=>__LINE__,
                        )
                    );
        }
        curl_close($ch);
        return $output;
    }

    /**
     * post
     * 
     *@param $url sting url
     *@param $data array
     *@param $timeout int
     *@return string
     */
    public static function post($url, $data,$postparam, $timeout=3){
        if(is_array($data) && count($data)>0){
            $url .= '?'.str_replace('+', '%20', http_build_query($data));
        }
        $options = array(
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_TIMEOUT => $timeout,
                CURLOPT_POSTFIELDS => http_build_query($postparam),
                );
        if (isset($_COOKIE['BDUSS']) && !empty($_COOKIE['BDUSS'])) {
			$options[CURLOPT_COOKIE] = 'BDUSS=' . $_COOKIE['BDUSS'];
        }
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        if(curl_errno($ch)){
            $logobj = new Common_Log();
            $logobj->write('FATAL', 'curl',
                    array(
                        'sontype'=>'post',
                        'param'=>json_encode(array('url'=>$url,'data'=>$data,'postparam'=>$postparam,'timeout'=>$timeout)),
                        'message'=>json_encode(curl_error($ch)), 
                        'file'=>__FILE__,
                        'line'=>__LINE__,
                        )
                    );
        }
        curl_close($ch);
        return $result;
    }

    public static function ipGet($server, $extra = array(),$data = array(), $timeout = 1){
        $url = "http://$server[ip]:$server[port]";
        if(isset($extra['pathInfo'])){
            $url .= $extra['pathInfo'];
        } 
        if(is_array($data) && count($data)>0){
            $url .= '?'.str_replace('+', '%20', http_build_query($data));
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host:'.$extra['host']));
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        if (isset($extra['cookie']['BDUSS']) && !empty($extra['cookie']['BDUSS'])) {
            curl_setopt($ch, CURLOPT_COOKIE, 'BDUSS=' . $extra['cookie']['BDUSS']);
        }
        $output=curl_exec($ch);
        if(curl_errno($ch)){
            $logobj = new Common_Log();
            $logobj->write('FATAL', 'curl',
                array(
                    'sontype'=>'get',
                    'param'=>json_encode(array('url'=>$url)),
                    'message'=>json_encode(curl_error($ch)), 
                    'file'=>__FILE__,
                    'line'=>__LINE__,
                )
            );
        }
        curl_close($ch);
        return $output;
    }

    /**
     * ip post
     * 
     *@param $url sting url
     *@param $data array
     *@param $timeout int
     *@return string
     */
    public static function ipPost($server, $data,$postparam, $extra = array(), $timeout = 3){
        $url = "http://$server[ip]:$server[port]";
        if(isset($extra['pathInfo'])){
            $url .= $extra['pathInfo'];
        }  
        if(is_array($data) && count($data)>0){
            $url .= '?'.str_replace('+', '%20', http_build_query($data));
        }
        $options = array(
            CURLOPT_POST => 1,
            CURLOPT_HTTPHEADER => array('Host:'.$extra['host']),
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_POSTFIELDS => $postparam,
        );

        if (isset($extra['cookie']['BDUSS']) && !empty($extra['cookie']['BDUSS'])) {
            $options[CURLOPT_COOKIE] =  'BDUSS=' . $extra['cookie']['BDUSS'];
        }
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        if(curl_errno($ch)){
            $logobj = new Common_Log();
            $logobj->write('FATAL', 'curl',
                array(
                    'sontype'=>'post',
                    'param'=>json_encode(array('url'=>$url,'data'=>$data,'postparam'=>$postparam,'timeout'=>$timeout)),
                    'message'=>json_encode(curl_error($ch)), 
                    'file'=>__FILE__,
                    'line'=>__LINE__,
                )
            );
        }
        curl_close($ch);
        return $result;
    }
}
