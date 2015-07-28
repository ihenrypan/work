<?php
class Favorite_Data extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Favorite_Data"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Favorite_Data"]["1"] = "theme_id";
    self::$fields["Favorite_Data"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Favorite_Data"]["2"] = "status";
  }
  function theme_id()
  {
    return $this->_get_value("1");
  }
  function set_theme_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function status()
  {
    return $this->_get_value("2");
  }
  function set_status($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Favorite extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Favorite"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Favorite"]["1"] = "error";
    self::$fields["Favorite"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Favorite"]["2"] = "msg";
    self::$fields["Favorite"]["3"] = "Favorite_Data";
    $this->values["3"] = "";
    self::$fieldNames["Favorite"]["3"] = "data";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function msg()
  {
    return $this->_get_value("2");
  }
  function set_msg($value)
  {
    return $this->_set_value("2", $value);
  }
  function data()
  {
    return $this->_get_value("3");
  }
  function set_data($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>