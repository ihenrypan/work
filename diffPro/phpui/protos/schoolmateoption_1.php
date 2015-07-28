<?php
class SchoolmateOption extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateOption"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateOption"]["1"] = "err_no";
    self::$fields["SchoolmateOption"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateOption"]["2"] = "err_msg";
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