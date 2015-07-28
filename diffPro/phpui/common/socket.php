<?php
class Common_Curl{

    public static function get_socket($url, $timeout=3){
        $url_info = parse_url($url);
        $host = $url_info['host'];
        $port = isset($url_info['port'])?$url_info['port']:80;
        $path = isset($url_info['path'])?$url_info['path']:'';
        $query = isset($url_info['query'])?('?'.$url_info['query']):'';
        $fragment = isset($url_info['fragment'])?('#'.$url_info['fragment']):'';
        $uri = $path.$query.$fragment;

        $out = "GET $uri HTTP/1.0\r\n";
        $out .= "Accept: */*\r\n";
        $out .= "Host: $host:$port\r\n";
        $out .= "Connection: Close\r\n";
        $out .= "Cache-Control: no-cache\r\n\r\n";
        $fp = @fsockopen($host, $port, $errno, $errstr, $timeout);

        $has_error = false;
        $return = false;
        if(!$fp) {
            $has_error = 1;
            @fclose($fp);
        } else {
            stream_set_blocking($fp, true);
            stream_set_timeout($fp, 15);
            @fwrite($fp, $out);
            $status = stream_get_meta_data($fp);
            $return = '';
            if(!$status['timed_out']) {
                while (!feof($fp)) {
                    $header = @fgets($fp);
                    if(strpos($header,'HTTP/1.1')===0 && !strpos($header,"200")){
                        $has_error = 2;
                    }
                    if($header && ($header == "\r\n" ||  $header == "\n")) {
                        break;
                    }
                }

                while(!feof($fp) && !$has_error) {
                    $data = fread($fp, 8192);
                    $return .= $data;
                }
            }
            @fclose($fp);
        }
        return $return;
    }

}
