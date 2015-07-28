<?php
class SubwaysCity_Cities extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SubwaysCity_Cities"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SubwaysCity_Cities"]["1"] = "cn_name";
    self::$fields["SubwaysCity_Cities"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SubwaysCity_Cities"]["2"] = "code";
  }
  function cn_name()
  {
    return $this->_get_value("1");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function code()
  {
    return $this->_get_value("2");
  }
  function set_code($value)
  {
    return $this->_set_value("2", $value);
  }
}
class SubwaysCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SubwaysCity"]["1"] = "SubwaysCity_Cities";
    $this->values["1"] = array();
    self::$fieldNames["SubwaysCity"]["1"] = "cities";
  }
  function cities($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_cities()
  {
    return $this->_add_arr_value("1");
  }
  function set_cities($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_citiess($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_cities()
  {
    $this->_remove_last_arr_value("1");
  }
  function citiess_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_citiess()
  {
    return $this->_get_value("1");
  }
}
?>