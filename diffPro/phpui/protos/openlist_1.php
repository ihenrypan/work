<?php
class Openlist_Style extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Openlist_Style"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Openlist_Style"]["1"] = "logo";
    self::$fields["Openlist_Style"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Openlist_Style"]["2"] = "url";
    self::$fields["Openlist_Style"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Openlist_Style"]["3"] = "category";
    self::$fields["Openlist_Style"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Openlist_Style"]["4"] = "infowindow_style";
    self::$fields["Openlist_Style"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Openlist_Style"]["5"] = "id";
    self::$fields["Openlist_Style"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Openlist_Style"]["6"] = "default_geotable_id";
  }
  function logo()
  {
    return $this->_get_value("1");
  }
  function set_logo($value)
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
  function category()
  {
    return $this->_get_value("3");
  }
  function set_category($value)
  {
    return $this->_set_value("3", $value);
  }
  function infowindow_style()
  {
    return $this->_get_value("4");
  }
  function set_infowindow_style($value)
  {
    return $this->_set_value("4", $value);
  }
  function id()
  {
    return $this->_get_value("5");
  }
  function set_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function default_geotable_id()
  {
    return $this->_get_value("6");
  }
  function set_default_geotable_id($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Openlist_Data extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Openlist_Data"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Openlist_Data"]["1"] = "status";
    self::$fields["Openlist_Data"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Openlist_Data"]["2"] = "total";
    self::$fields["Openlist_Data"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Openlist_Data"]["3"] = "size";
    self::$fields["Openlist_Data"]["4"] = "PBString";
    $this->values["4"] = array();
    self::$fieldNames["Openlist_Data"]["4"] = "contents";
  }
  function status()
  {
    return $this->_get_value("1");
  }
  function set_status($value)
  {
    return $this->_set_value("1", $value);
  }
  function total()
  {
    return $this->_get_value("2");
  }
  function set_total($value)
  {
    return $this->_set_value("2", $value);
  }
  function size()
  {
    return $this->_get_value("3");
  }
  function set_size($value)
  {
    return $this->_set_value("3", $value);
  }
  function contents($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_contents($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_contents($index, $value)
  {
    $v = new self::$fields["Openlist_Data"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("4");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_contentss()
  {
    return $this->_get_value("4");
  }
}
class Openlist extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Openlist"]["1"] = "Openlist_Style";
    $this->values["1"] = "";
    self::$fieldNames["Openlist"]["1"] = "style";
    self::$fields["Openlist"]["2"] = "Openlist_Data";
    $this->values["2"] = "";
    self::$fieldNames["Openlist"]["2"] = "data";
  }
  function style()
  {
    return $this->_get_value("1");
  }
  function set_style($value)
  {
    return $this->_set_value("1", $value);
  }
  function data()
  {
    return $this->_get_value("2");
  }
  function set_data($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>