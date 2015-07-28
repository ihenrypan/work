<?php
class Demo_Name extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Demo_Name"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Demo_Name"]["1"] = "aaa";
  }
  function aaa()
  {
    return $this->_get_value("1");
  }
  function set_aaa($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Demo_RepeatDict extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Demo_RepeatDict"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Demo_RepeatDict"]["1"] = "age";
    self::$fields["Demo_RepeatDict"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Demo_RepeatDict"]["2"] = "name";
  }
  function age()
  {
    return $this->_get_value("1");
  }
  function set_age($value)
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
class Demo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Demo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Demo"]["1"] = "id";
    self::$fields["Demo"]["2"] = "Demo_Name";
    $this->values["2"] = "";
    self::$fieldNames["Demo"]["2"] = "name";
    self::$fields["Demo"]["3"] = "PBString";
    $this->values["3"] = array();
    self::$fieldNames["Demo"]["3"] = "arr";
    self::$fields["Demo"]["4"] = "Demo_RepeatDict";
    $this->values["4"] = array();
    self::$fieldNames["Demo"]["4"] = "repeat_dict";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
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
  function arr($offset)
  {
    $v = $this->_get_arr_value("3", $offset);
    return $v->get_value();
  }
  function append_arr($value)
  {
    $v = $this->_add_arr_value("3");
    $v->set_value($value);
  }
  function set_arr($index, $value)
  {
    $v = new self::$fields["Demo"]["3"]();
    $v->set_value($value);
    $this->_set_arr_value("3", $index, $v);
  }
  function remove_last_arr()
  {
    $this->_remove_last_arr_value("3");
  }
  function arrs_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_arrs()
  {
    return $this->_get_value("3");
  }
  function repeat_dict($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_repeat_dict()
  {
    return $this->_add_arr_value("4");
  }
  function set_repeat_dict($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_repeat_dicts($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_repeat_dict()
  {
    $this->_remove_last_arr_value("4");
  }
  function repeat_dicts_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_repeat_dicts()
  {
    return $this->_get_value("4");
  }
}
?>