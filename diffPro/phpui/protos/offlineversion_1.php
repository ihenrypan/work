<?php
class OfflineVersion extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["OfflineVersion"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["OfflineVersion"]["1"] = "offline_map";
    self::$fields["OfflineVersion"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["OfflineVersion"]["2"] = "offline_search";
  }
  function offline_map()
  {
    return $this->_get_value("1");
  }
  function set_offline_map($value)
  {
    return $this->_set_value("1", $value);
  }
  function offline_search()
  {
    return $this->_get_value("2");
  }
  function set_offline_search($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>