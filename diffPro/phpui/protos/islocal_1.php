<?php
class IsLocal extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IsLocal"]["1"] = "PBBool";
    $this->values["1"] = "";
    self::$fieldNames["IsLocal"]["1"] = "is_local";
  }
  function is_local()
  {
    return $this->_get_value("1");
  }
  function set_is_local($value)
  {
    return $this->_set_value("1", $value);
  }
}
?>