<?php
class Limit_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Limit_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Limit_Option"]["1"] = "err_no";
    self::$fields["Limit_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Limit_Option"]["2"] = "err_msg";
  }
  function err_no()
  {
    return $this->_get_value("1");
  }
  function set_err_no($value)
  {
    return $this->_set_value("1", $value);
  }
  function err_msg()
  {
    return $this->_get_value("2");
  }
  function set_err_msg($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Limit_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Limit_Content"]["1"] = "PBBool";
    $this->values["1"] = "";
    self::$fieldNames["Limit_Content"]["1"] = "is_limit";
    self::$fields["Limit_Content"]["2"] = "PBInt";
    $this->values["2"] = array();
    self::$fieldNames["Limit_Content"]["2"] = "num";
  }
  function is_limit()
  {
    return $this->_get_value("1");
  }
  function set_is_limit($value)
  {
    return $this->_set_value("1", $value);
  }
  function num($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_num($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_num($index, $value)
  {
    $v = new self::$fields["Limit_Content"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_num()
  {
    $this->_remove_last_arr_value("2");
  }
  function nums_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_nums()
  {
    return $this->_get_value("2");
  }
}
class Limit extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Limit"]["1"] = "Limit_Option";
    $this->values["1"] = "";
    self::$fieldNames["Limit"]["1"] = "option";
    self::$fields["Limit"]["2"] = "Limit_Content";
    $this->values["2"] = "";
    self::$fieldNames["Limit"]["2"] = "content";
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
}
?>