<?php
class Ads_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Ads_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Ads_Option"]["1"] = "lasttime";
    self::$fields["Ads_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Ads_Option"]["2"] = "checkcode";
  }
  function lasttime()
  {
    return $this->_get_value("1");
  }
  function set_lasttime($value)
  {
    return $this->_set_value("1", $value);
  }
  function checkcode()
  {
    return $this->_get_value("2");
  }
  function set_checkcode($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Ads_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Ads_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Ads_Content"]["1"] = "type";
    self::$fields["Ads_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Ads_Content"]["2"] = "data";
    self::$fields["Ads_Content"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Ads_Content"]["3"] = "intval";
    self::$fields["Ads_Content"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Ads_Content"]["4"] = "start";
    self::$fields["Ads_Content"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["Ads_Content"]["5"] = "end";
    self::$fields["Ads_Content"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Ads_Content"]["6"] = "id";
    self::$fields["Ads_Content"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Ads_Content"]["7"] = "updatetime";
    self::$fields["Ads_Content"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Ads_Content"]["8"] = "order";
  }
  function type()
  {
    return $this->_get_value("1");
  }
  function set_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function data()
  {
    return $this->_get_value("2");
  }
  function set_data($value)
  {
    return $this->_set_value("2", $value);
  }
  function intval()
  {
    return $this->_get_value("3");
  }
  function set_intval($value)
  {
    return $this->_set_value("3", $value);
  }
  function start()
  {
    return $this->_get_value("4");
  }
  function set_start($value)
  {
    return $this->_set_value("4", $value);
  }
  function end()
  {
    return $this->_get_value("5");
  }
  function set_end($value)
  {
    return $this->_set_value("5", $value);
  }
  function id()
  {
    return $this->_get_value("6");
  }
  function set_id($value)
  {
    return $this->_set_value("6", $value);
  }
  function updatetime()
  {
    return $this->_get_value("7");
  }
  function set_updatetime($value)
  {
    return $this->_set_value("7", $value);
  }
  function order()
  {
    return $this->_get_value("8");
  }
  function set_order($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Ads extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Ads"]["1"] = "Ads_Option";
    $this->values["1"] = "";
    self::$fieldNames["Ads"]["1"] = "option";
    self::$fields["Ads"]["2"] = "Ads_Content";
    $this->values["2"] = array();
    self::$fieldNames["Ads"]["2"] = "content";
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