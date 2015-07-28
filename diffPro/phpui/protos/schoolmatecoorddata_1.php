<?php
class SchoolmateCoorddata_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateCoorddata_Contents"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateCoorddata_Contents"]["1"] = "locx";
    self::$fields["SchoolmateCoorddata_Contents"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateCoorddata_Contents"]["2"] = "locy";
    self::$fields["SchoolmateCoorddata_Contents"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["SchoolmateCoorddata_Contents"]["3"] = "cityid";
    self::$fields["SchoolmateCoorddata_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["SchoolmateCoorddata_Contents"]["4"] = "count";
  }
  function locx()
  {
    return $this->_get_value("1");
  }
  function set_locx($value)
  {
    return $this->_set_value("1", $value);
  }
  function locy()
  {
    return $this->_get_value("2");
  }
  function set_locy($value)
  {
    return $this->_set_value("2", $value);
  }
  function cityid()
  {
    return $this->_get_value("3");
  }
  function set_cityid($value)
  {
    return $this->_set_value("3", $value);
  }
  function count()
  {
    return $this->_get_value("4");
  }
  function set_count($value)
  {
    return $this->_set_value("4", $value);
  }
}
class SchoolmateCoorddata extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateCoorddata"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateCoorddata"]["1"] = "err_no";
    self::$fields["SchoolmateCoorddata"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateCoorddata"]["2"] = "err_msg";
    self::$fields["SchoolmateCoorddata"]["3"] = "SchoolmateCoorddata_Contents";
    $this->values["3"] = array();
    self::$fieldNames["SchoolmateCoorddata"]["3"] = "contents";
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
  function contents($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("3");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("3");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_contentss()
  {
    return $this->_get_value("3");
  }
}
?>