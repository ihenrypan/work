<?php
class Rtbl_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Rtbl_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Rtbl_Option"]["1"] = "return_all";
    self::$fields["Rtbl_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Rtbl_Option"]["2"] = "error";
  }
  function return_all()
  {
    return $this->_get_value("1");
  }
  function set_return_all($value)
  {
    return $this->_set_value("1", $value);
  }
  function error()
  {
    return $this->_get_value("2");
  }
  function set_error($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Rtbl_Content_Lines extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Rtbl_Content_Lines"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Rtbl_Content_Lines"]["1"] = "uid";
    self::$fields["Rtbl_Content_Lines"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Rtbl_Content_Lines"]["2"] = "name";
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function name()
  {
    return $this->_get_value("2");
  }
  function set_name($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Rtbl_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Rtbl_Content"]["1"] = "Rtbl_Content_Lines";
    $this->values["1"] = array();
    self::$fieldNames["Rtbl_Content"]["1"] = "lines";
  }
  function lines($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_lines()
  {
    return $this->_add_arr_value("1");
  }
  function set_lines($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_liness($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_lines()
  {
    $this->_remove_last_arr_value("1");
  }
  function liness_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_liness()
  {
    return $this->_get_value("1");
  }
}
class Rtbl extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Rtbl"]["1"] = "Rtbl_Option";
    $this->values["1"] = "";
    self::$fieldNames["Rtbl"]["1"] = "option";
    self::$fields["Rtbl"]["2"] = "Rtbl_Content";
    $this->values["2"] = "";
    self::$fieldNames["Rtbl"]["2"] = "content";
    self::$fields["Rtbl"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Rtbl"]["3"] = "error";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function content()
  {
    return $this->_get_value("2");
  }
  function set_content($value)
  {
    return $this->_set_value("2", $value);
  }
  function error()
  {
    return $this->_get_value("3");
  }
  function set_error($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>