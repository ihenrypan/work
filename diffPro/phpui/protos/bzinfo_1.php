<?php
class BzInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BzInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BzInfo"]["1"] = "errno";
    self::$fields["BzInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BzInfo"]["2"] = "circle";
  }
  function errno()
  {
    return $this->_get_value("1");
  }
  function set_errno($value)
  {
    return $this->_set_value("1", $value);
  }
  function circle()
  {
    return $this->_get_value("2");
  }
  function set_circle($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>