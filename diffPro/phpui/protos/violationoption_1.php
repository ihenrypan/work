<?php
class ViolationOption extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationOption"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationOption"]["1"] = "err_no";
    self::$fields["ViolationOption"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationOption"]["2"] = "err_msg";
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
}
?>