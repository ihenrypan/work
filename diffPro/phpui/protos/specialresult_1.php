<?php
class SpecialResult_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SpecialResult_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SpecialResult_Content"]["1"] = "x";
    self::$fields["SpecialResult_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SpecialResult_Content"]["2"] = "y";
    self::$fields["SpecialResult_Content"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["SpecialResult_Content"]["3"] = "level";
  }
  function x()
  {
    return $this->_get_value("1");
  }
  function set_x($value)
  {
    return $this->_set_value("1", $value);
  }
  function y()
  {
    return $this->_get_value("2");
  }
  function set_y($value)
  {
    return $this->_set_value("2", $value);
  }
  function level()
  {
    return $this->_get_value("3");
  }
  function set_level($value)
  {
    return $this->_set_value("3", $value);
  }
}
class SpecialResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SpecialResult"]["1"] = "SpecialResult_Content";
    $this->values["1"] = "";
    self::$fieldNames["SpecialResult"]["1"] = "content";
  }
  function content()
  {
    return $this->_get_value("1");
  }
  function set_content($value)
  {
    return $this->_set_value("1", $value);
  }
}
?>