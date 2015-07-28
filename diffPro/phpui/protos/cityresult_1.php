<?php
class CityResult_Content_Sgeo_GeoElements extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult_Content_Sgeo_GeoElements"]["1"] = "PBString";
    $this->values["1"] = array();
    self::$fieldNames["CityResult_Content_Sgeo_GeoElements"]["1"] = "point";
  }
  function point($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_point($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_point($index, $value)
  {
    $v = new self::$fields["CityResult_Content_Sgeo_GeoElements"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_point()
  {
    $this->_remove_last_arr_value("1");
  }
  function points_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_points()
  {
    return $this->_get_value("1");
  }
}
class CityResult_Content_Sgeo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult_Content_Sgeo"]["1"] = "PBString";
    $this->values["1"] = array();
    self::$fieldNames["CityResult_Content_Sgeo"]["1"] = "bound";
    self::$fields["CityResult_Content_Sgeo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["CityResult_Content_Sgeo"]["2"] = "type";
    self::$fields["CityResult_Content_Sgeo"]["3"] = "CityResult_Content_Sgeo_GeoElements";
    $this->values["3"] = array();
    self::$fieldNames["CityResult_Content_Sgeo"]["3"] = "geo_elements";
  }
  function bound($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_bound($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_bound($index, $value)
  {
    $v = new self::$fields["CityResult_Content_Sgeo"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_bound()
  {
    $this->_remove_last_arr_value("1");
  }
  function bounds_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_bounds()
  {
    return $this->_get_value("1");
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function geo_elements($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_geo_elements()
  {
    return $this->_add_arr_value("3");
  }
  function set_geo_elements($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_geo_elementss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_geo_elements()
  {
    $this->_remove_last_arr_value("3");
  }
  function geo_elementss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_geo_elementss()
  {
    return $this->_get_value("3");
  }
}
class CityResult_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult_Content"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["CityResult_Content"]["1"] = "city_type";
    self::$fields["CityResult_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["CityResult_Content"]["2"] = "code";
    self::$fields["CityResult_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["CityResult_Content"]["3"] = "cname";
    self::$fields["CityResult_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["CityResult_Content"]["4"] = "geo";
    self::$fields["CityResult_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["CityResult_Content"]["5"] = "uid";
    self::$fields["CityResult_Content"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["CityResult_Content"]["6"] = "pccode";
    self::$fields["CityResult_Content"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["CityResult_Content"]["7"] = "pcname";
    self::$fields["CityResult_Content"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["CityResult_Content"]["8"] = "level";
    self::$fields["CityResult_Content"]["9"] = "PBBool";
    $this->values["9"] = "";
    self::$fieldNames["CityResult_Content"]["9"] = "sup_lukuang";
    self::$fields["CityResult_Content"]["10"] = "CityResult_Content_Sgeo";
    $this->values["10"] = "";
    self::$fieldNames["CityResult_Content"]["10"] = "sgeo";
  }
  function city_type()
  {
    return $this->_get_value("1");
  }
  function set_city_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function code()
  {
    return $this->_get_value("2");
  }
  function set_code($value)
  {
    return $this->_set_value("2", $value);
  }
  function cname()
  {
    return $this->_get_value("3");
  }
  function set_cname($value)
  {
    return $this->_set_value("3", $value);
  }
  function geo()
  {
    return $this->_get_value("4");
  }
  function set_geo($value)
  {
    return $this->_set_value("4", $value);
  }
  function uid()
  {
    return $this->_get_value("5");
  }
  function set_uid($value)
  {
    return $this->_set_value("5", $value);
  }
  function pccode()
  {
    return $this->_get_value("6");
  }
  function set_pccode($value)
  {
    return $this->_set_value("6", $value);
  }
  function pcname()
  {
    return $this->_get_value("7");
  }
  function set_pcname($value)
  {
    return $this->_set_value("7", $value);
  }
  function level()
  {
    return $this->_get_value("8");
  }
  function set_level($value)
  {
    return $this->_set_value("8", $value);
  }
  function sup_lukuang()
  {
    return $this->_get_value("9");
  }
  function set_sup_lukuang($value)
  {
    return $this->_set_value("9", $value);
  }
  function sgeo()
  {
    return $this->_get_value("10");
  }
  function set_sgeo($value)
  {
    return $this->_set_value("10", $value);
  }
}
class CityResult_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["1"] = "code";
    self::$fields["CityResult_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["2"] = "geo";
    self::$fields["CityResult_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["3"] = "level";
    self::$fields["CityResult_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["4"] = "name";
    self::$fields["CityResult_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["5"] = "sup_subway";
    self::$fields["CityResult_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["CityResult_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["CityResult_CurrentCity"]["7"] = "uid";
    self::$fields["CityResult_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["CityResult_CurrentCity"]["8"] = "sgeo";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function geo()
  {
    return $this->_get_value("2");
  }
  function set_geo($value)
  {
    return $this->_set_value("2", $value);
  }
  function level()
  {
    return $this->_get_value("3");
  }
  function set_level($value)
  {
    return $this->_set_value("3", $value);
  }
  function name()
  {
    return $this->_get_value("4");
  }
  function set_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function sup_subway()
  {
    return $this->_get_value("5");
  }
  function set_sup_subway($value)
  {
    return $this->_set_value("5", $value);
  }
  function sup_lukuang()
  {
    return $this->_get_value("6");
  }
  function set_sup_lukuang($value)
  {
    return $this->_set_value("6", $value);
  }
  function uid()
  {
    return $this->_get_value("7");
  }
  function set_uid($value)
  {
    return $this->_set_value("7", $value);
  }
  function sgeo($offset)
  {
    $v = $this->_get_arr_value("8", $offset);
    return $v->get_value();
  }
  function append_sgeo($value)
  {
    $v = $this->_add_arr_value("8");
    $v->set_value($value);
  }
  function set_sgeo($index, $value)
  {
    $v = new self::$fields["CityResult_CurrentCity"]["8"]();
    $v->set_value($value);
    $this->_set_arr_value("8", $index, $v);
  }
  function remove_last_sgeo()
  {
    $this->_remove_last_arr_value("8");
  }
  function sgeos_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_sgeos()
  {
    return $this->_get_value("8");
  }
}
class CityResult_PreviousCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult_PreviousCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["CityResult_PreviousCity"]["1"] = "code";
    self::$fields["CityResult_PreviousCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["CityResult_PreviousCity"]["2"] = "name";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
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
}
class CityResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["CityResult"]["2"] = "CityResult_Content";
    $this->values["2"] = "";
    self::$fieldNames["CityResult"]["2"] = "content";
    self::$fields["CityResult"]["1"] = "CityResult_CurrentCity";
    $this->values["1"] = "";
    self::$fieldNames["CityResult"]["1"] = "current_city";
    self::$fields["CityResult"]["3"] = "CityResult_PreviousCity";
    $this->values["3"] = "";
    self::$fieldNames["CityResult"]["3"] = "previous_city";
  }
  function content()
  {
    return $this->_get_value("2");
  }
  function set_content($value)
  {
    return $this->_set_value("2", $value);
  }
  function current_city()
  {
    return $this->_get_value("1");
  }
  function set_current_city($value)
  {
    return $this->_set_value("1", $value);
  }
  function previous_city()
  {
    return $this->_get_value("3");
  }
  function set_previous_city($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>