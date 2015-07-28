<?php
class Result extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Result"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Result"]["1"] = "type";
    self::$fields["Result"]["2"] = "PBSignedInt";
    $this->values["2"] = "";
    self::$fieldNames["Result"]["2"] = "error";
  }
  function type()
  {
    return $this->_get_value("1");
  }
  function set_type($value)
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
?>