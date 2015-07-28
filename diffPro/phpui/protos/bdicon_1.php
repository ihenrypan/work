<?php
class BdIcon_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdIcon_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BdIcon_Content"]["1"] = "data_type";
    self::$fields["BdIcon_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BdIcon_Content"]["2"] = "flag";
  }
  function data_type()
  {
    return $this->_get_value("1");
  }
  function set_data_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function flag()
  {
    return $this->_get_value("2");
  }
  function set_flag($value)
  {
    return $this->_set_value("2", $value);
  }
}
class BdIcon extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdIcon"]["1"] = "BdIcon_Content";
    $this->values["1"] = array();
    self::$fieldNames["BdIcon"]["1"] = "content";
  }
  function content($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("1");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("1");
  }
  function contents_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_contents()
  {
    return $this->_get_value("1");
  }
}
?>