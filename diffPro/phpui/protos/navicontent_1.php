<?php
class NaviContent extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["NaviContent"]["1"] = "PBBytes";
    $this->values["1"] = "";
    self::$fieldNames["NaviContent"]["1"] = "out";
    self::$fields["NaviContent"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["NaviContent"]["2"] = "outtype";
  }
  function out()
  {
    return $this->_get_value("1");
  }
  function set_out($value)
  {
    return $this->_set_value("1", $value);
  }
  function outtype()
  {
    return $this->_get_value("2");
  }
  function set_outtype($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>