<?php 
/**
 * Log ,write file
 * @author xuliqiang <xuliqiang@baidu.com>
 * @since 2010-04-26
 * @package Bingo
 *
 */

class Common_Oldlog_File{ 

	protected $_strNormalFile = '';
	
	protected $_strWarningFile = '';
	
	protected $_intOutputLevel = 0xFF;
	
	protected $_strSep = ' ';
	
	protected $_strSepOfLine = "\n";
	
	protected $_arrLogData = array(
		'normal'	=> '',
		'warning'	=> '',
	);
	
	public function __construct($strFilePath, $intOutputLevel=0xFF)
	{
		$this->_setFilePath($strFilePath);
		$this->_intOutputLevel = intval($intOutputLevel);
	}	
	
	public function setOptions($arrConfig)
	{
		if (isset($arrConfig['sep'])) {
			$this->_strSep = $arrConfig['sep'];
		}
		if (isset($arrConfig['sepOfLine'])) {
			$this->_strSepOfLine = $arrConfig['sepOfLine'];
		}
		return $this;
	}
	
	public function check($intLogLevel)
	{
		return (bool)($intLogLevel & $this->_intOutputLevel);
	}
	
	public function log($intLogLevel, $strLog, $strFile, $intLine, $intLogId)
	{
		if (! ($intLogLevel & $this->_intOutputLevel) ) {
			//不需要记录
			return $this;
		}
		$strLogType = 'NOTICE';
		if (isset(Common_Oldlog::$arrLogNames[$intLogLevel])) {
			$strLogType = Common_Oldlog::$arrLogNames[$intLogLevel];
		}
		$str = $strLogType . $this->_strSep . $intLogId . $this->_strSep . 
				date('Ymd H:i:s',time()-8*3600) . $this->_strSep . $strFile . ':' . $intLine . $this->_strSep .
				$strLog . $this->_strSepOfLine;
		if ( ($intLogLevel & Common_Oldlog::LOG_WARNING) || ($intLogLevel & Common_Oldlog::LOG_FATAL)) {
			$this->_arrLogData['warning'] .= $str;
		} else {
			$this->_arrLogData['normal'] .= $str;
		}
		return $this;
	}
	/**
	 * 把数据写入文件
	 */
	public function flush()
	{
		if (! empty($this->_arrLogData['warning'])) {
			file_put_contents($this->_strWarningFile, $this->_arrLogData['warning'], FILE_APPEND);
		}
		if (! empty($this->_arrLogData['normal'])) {
			file_put_contents($this->_strNormalFile, $this->_arrLogData['normal'], FILE_APPEND);
		}
		$this->clean();
		return $this;
	}
	
	public function clean()
	{
		$this->_arrLogData['warning'] = '';
		$this->_arrLogData['normal'] = '';
		return $this;
	}
	
	public function __destruct()
	{
		$this->flush();
	}
	
	protected function _setFilePath($strFilePath)
	{
		$strDir = dirname($strFilePath);
		if (! is_dir($strDir)) {
			@mkdir($strDir, 0755, true);
		}
		$this->_strNormalFile = $strFilePath.'.'.date('YmdH');
		$this->_strWarningFile = $strFilePath . '.wf.'.date('YmdH');
	}
}
