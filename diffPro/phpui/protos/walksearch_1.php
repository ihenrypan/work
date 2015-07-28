<?php
class WalkSearch_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkSearch_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkSearch_Option"]["1"] = "total";
  }
  function total()
  {
    return $this->_get_value("1");
  }
  function set_total($value)
  {
    return $this->_set_value("1", $value);
  }
}
class WalkSearch_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkSearch_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkSearch_Content"]["1"] = "name";
    self::$fields["WalkSearch_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["WalkSearch_Content"]["2"] = "x";
    self::$fields["WalkSearch_Content"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkSearch_Content"]["3"] = "y";
    self::$fields["WalkSearch_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkSearch_Content"]["4"] = "addr";
    self::$fields["WalkSearch_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["WalkSearch_Content"]["5"] = "street_id";
    self::$fields["WalkSearch_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["WalkSearch_Content"]["6"] = "tel";
    self::$fields["WalkSearch_Content"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["WalkSearch_Content"]["7"] = "uid";
    self::$fields["WalkSearch_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["WalkSearch_Content"]["8"] = "dist2start";
    self::$fields["WalkSearch_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["WalkSearch_Content"]["9"] = "dist2route";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function x()
  {
    return $this->_get_value("2");
  }
  function set_x($value)
  {
    return $this->_set_value("2", $value);
  }
  function y()
  {
    return $this->_get_value("3");
  }
  function set_y($value)
  {
    return $this->_set_value("3", $value);
  }
  function addr()
  {
    return $this->_get_value("4");
  }
  function set_addr($value)
  {
    return $this->_set_value("4", $value);
  }
  function street_id()
  {
    return $this->_get_value("5");
  }
  function set_street_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function tel()
  {
    return $this->_get_value("6");
  }
  function set_tel($value)
  {
    return $this->_set_value("6", $value);
  }
  function uid()
  {
    return $this->_get_value("7");
  }
  function set_uid($value)
  {
    return $this->_set_value("7", $value);
  }
  function dist2start()
  {
    return $this->_get_value("8");
  }
  function set_dist2start($value)
  {
    return $this->_set_value("8", $value);
  }
  function dist2route()
  {
    return $this->_get_value("9");
  }
  function set_dist2route($value)
  {
    return $this->_set_value("9", $value);
  }
}
class WalkSearch extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkSearch"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkSearch"]["1"] = "error";
    self::$fields["WalkSearch"]["2"] = "WalkSearch_Option";
    $this->values["2"] = "";
    self::$fieldNames["WalkSearch"]["2"] = "option";
    self::$fields["WalkSearch"]["3"] = "WalkSearch_Content";
    $this->values["3"] = array();
    self::$fieldNames["WalkSearch"]["3"] = "content";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function option()
  {
    return $this->_get_value("2");
  }
  function set_option($value)
  {
    return $this->_set_value("2", $value);
  }
  function content($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("3");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("3");
  }
  function contents_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_contents()
  {
    return $this->_get_value("3");
  }
}
?>