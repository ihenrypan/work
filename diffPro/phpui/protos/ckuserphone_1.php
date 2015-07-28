<?php
class Ckuserphone extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Ckuserphone"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Ckuserphone"]["1"] = "status";
    self::$fields["Ckuserphone"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Ckuserphone"]["2"] = "url";
  }
  function status()
  {
    return $this->_get_value("1");
  }
  function set_status($value)
  {
    return $this->_set_value("1", $value);
  }
  function url()
  {
    return $this->_get_value("2");
  }
  function set_url($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>