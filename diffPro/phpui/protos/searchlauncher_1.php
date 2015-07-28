<?php
class SearchLauncher_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher_Option"]["1"] = "error";
    self::$fields["SearchLauncher_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["SearchLauncher_Option"]["2"] = "version";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function version()
  {
    return $this->_get_value("2");
  }
  function set_version($value)
  {
    return $this->_set_value("2", $value);
  }
}
class SearchLauncher_Content_ExtParam_Jumpto extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher_Content_ExtParam_Jumpto"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher_Content_ExtParam_Jumpto"]["1"] = "cf_tag";
    self::$fields["SearchLauncher_Content_ExtParam_Jumpto"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SearchLauncher_Content_ExtParam_Jumpto"]["2"] = "params";
  }
  function cf_tag()
  {
    return $this->_get_value("1");
  }
  function set_cf_tag($value)
  {
    return $this->_set_value("1", $value);
  }
  function params()
  {
    return $this->_get_value("2");
  }
  function set_params($value)
  {
    return $this->_set_value("2", $value);
  }
}
class SearchLauncher_Content_ExtParam_Browser extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher_Content_ExtParam_Browser"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher_Content_ExtParam_Browser"]["1"] = "url";
  }
  function url()
  {
    return $this->_get_value("1");
  }
  function set_url($value)
  {
    return $this->_set_value("1", $value);
  }
}
class SearchLauncher_Content_ExtParam extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher_Content_ExtParam"]["1"] = "SearchLauncher_Content_ExtParam_Jumpto";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher_Content_ExtParam"]["1"] = "jumpto";
    self::$fields["SearchLauncher_Content_ExtParam"]["2"] = "SearchLauncher_Content_ExtParam_Browser";
    $this->values["2"] = "";
    self::$fieldNames["SearchLauncher_Content_ExtParam"]["2"] = "browser";
  }
  function jumpto()
  {
    return $this->_get_value("1");
  }
  function set_jumpto($value)
  {
    return $this->_set_value("1", $value);
  }
  function browser()
  {
    return $this->_get_value("2");
  }
  function set_browser($value)
  {
    return $this->_set_value("2", $value);
  }
}
class SearchLauncher_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher_Content"]["2"] = "SearchLauncher_Content_ExtParam";
    $this->values["2"] = "";
    self::$fieldNames["SearchLauncher_Content"]["2"] = "ext_param";
    self::$fields["SearchLauncher_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher_Content"]["1"] = "action";
  }
  function ext_param()
  {
    return $this->_get_value("2");
  }
  function set_ext_param($value)
  {
    return $this->_set_value("2", $value);
  }
  function action()
  {
    return $this->_get_value("1");
  }
  function set_action($value)
  {
    return $this->_set_value("1", $value);
  }
}
class SearchLauncher extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SearchLauncher"]["1"] = "SearchLauncher_Option";
    $this->values["1"] = "";
    self::$fieldNames["SearchLauncher"]["1"] = "option";
    self::$fields["SearchLauncher"]["2"] = "SearchLauncher_Content";
    $this->values["2"] = array();
    self::$fieldNames["SearchLauncher"]["2"] = "content";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function content($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("2");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("2");
  }
  function contents_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_contents()
  {
    return $this->_get_value("2");
  }
}
?>