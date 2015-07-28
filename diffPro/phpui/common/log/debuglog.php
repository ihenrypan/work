<?php

class Common_Log_DebugLog{
	static private $debugLogData = array();
	
	/**
	 * 设置debug日志
	 * @param $key:用户定义的key
	 * @param $value: key对应的debug值
	 */
	static public function setDebugLogData ($key,$value) {
		if (is_string($key) && !empty($key)) {
			if (isset(self::$debugLogData[$key])) {
				self::$debugLogData[$key][] = $value;
			}else{		
				self::$debugLogData[$key] = $value;
			}
		}		
	}
	
	
	
	
	
}