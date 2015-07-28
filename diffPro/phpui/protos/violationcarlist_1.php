<?php
class ViolationCarlist_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCarlist_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCarlist_Contents"]["1"] = "logo";
    self::$fields["ViolationCarlist_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationCarlist_Contents"]["2"] = "brand";
  }
  function logo()
  {
    return $this->_get_value("1");
  }
  function set_logo($value)
  {
    return $this->_set_value("1", $value);
  }
  function brand()
  {
    return $this->_get_value("2");
  }
  function set_brand($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ViolationCarlist extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCarlist"]["5"] = "ViolationCarlist_Contents";
    $this->values["5"] = array();
    self::$fieldNames["ViolationCarlist"]["5"] = "contents";
    self::$fields["ViolationCarlist"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCarlist"]["1"] = "err_no";
    self::$fields["ViolationCarlist"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationCarlist"]["2"] = "err_msg";
    self::$fields["ViolationCarlist"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ViolationCarlist"]["3"] = "brand_count";
    self::$fields["ViolationCarlist"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ViolationCarlist"]["4"] = "head";
  }
  function contents($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("5");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("5");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_contentss()
  {
    return $this->_get_value("5");
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
  function brand_count()
  {
    return $this->_get_value("3");
  }
  function set_brand_count($value)
  {
    return $this->_set_value("3", $value);
  }
  function head()
  {
    return $this->_get_value("4");
  }
  function set_head($value)
  {
    return $this->_set_value("4", $value);
  }
}
?>