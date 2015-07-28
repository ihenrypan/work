<?php
class Openmap_Info extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Openmap_Info"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Openmap_Info"]["1"] = "id";
    self::$fields["Openmap_Info"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Openmap_Info"]["2"] = "name";
    self::$fields["Openmap_Info"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Openmap_Info"]["3"] = "brand";
    self::$fields["Openmap_Info"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Openmap_Info"]["4"] = "logo";
    self::$fields["Openmap_Info"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Openmap_Info"]["5"] = "default_geotable_id";
    self::$fields["Openmap_Info"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Openmap_Info"]["6"] = "category_id";
    self::$fields["Openmap_Info"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Openmap_Info"]["7"] = "infowindow_style";
    self::$fields["Openmap_Info"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Openmap_Info"]["8"] = "src";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function name()
  {
    return $this->_get_value("2");
  }
  function set_name($value)
  {
    return $this->_set_value("2", $value);
  }
  function brand()
  {
    return $this->_get_value("3");
  }
  function set_brand($value)
  {
    return $this->_set_value("3", $value);
  }
  function logo()
  {
    return $this->_get_value("4");
  }
  function set_logo($value)
  {
    return $this->_set_value("4", $value);
  }
  function default_geotable_id()
  {
    return $this->_get_value("5");
  }
  function set_default_geotable_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function category_id()
  {
    return $this->_get_value("6");
  }
  function set_category_id($value)
  {
    return $this->_set_value("6", $value);
  }
  function infowindow_style()
  {
    return $this->_get_value("7");
  }
  function set_infowindow_style($value)
  {
    return $this->_set_value("7", $value);
  }
  function src()
  {
    return $this->_get_value("8");
  }
  function set_src($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Openmap extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Openmap"]["1"] = "Openmap_Info";
    $this->values["1"] = array();
    self::$fieldNames["Openmap"]["1"] = "info";
    self::$fields["Openmap"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Openmap"]["2"] = "total";
  }
  function info($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_info()
  {
    return $this->_add_arr_value("1");
  }
  function set_info($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_infos($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_info()
  {
    $this->_remove_last_arr_value("1");
  }
  function infos_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_infos()
  {
    return $this->_get_value("1");
  }
  function total()
  {
    return $this->_get_value("2");
  }
  function set_total($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>