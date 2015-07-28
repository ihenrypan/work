<?php
class XapiAqi_Contents_Point extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["XapiAqi_Contents_Point"]["1"] = "PB64Bit";
    $this->values["1"] = "";
    self::$fieldNames["XapiAqi_Contents_Point"]["1"] = "x";
    self::$fields["XapiAqi_Contents_Point"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["XapiAqi_Contents_Point"]["2"] = "y";
  }
  function x()
  {
    return $this->_get_value("1");
  }
  function set_x($value)
  {
    return $this->_set_value("1", $value);
  }
  function y()
  {
    return $this->_get_value("2");
  }
  function set_y($value)
  {
    return $this->_set_value("2", $value);
  }
}
class XapiAqi_Contents_PoiList_Point extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["XapiAqi_Contents_PoiList_Point"]["1"] = "PB64Bit";
    $this->values["1"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList_Point"]["1"] = "x";
    self::$fields["XapiAqi_Contents_PoiList_Point"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList_Point"]["2"] = "y";
  }
  function x()
  {
    return $this->_get_value("1");
  }
  function set_x($value)
  {
    return $this->_set_value("1", $value);
  }
  function y()
  {
    return $this->_get_value("2");
  }
  function set_y($value)
  {
    return $this->_set_value("2", $value);
  }
}
class XapiAqi_Contents_PoiList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["XapiAqi_Contents_PoiList"]["2"] = "XapiAqi_Contents_PoiList_Point";
    $this->values["2"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList"]["2"] = "point";
    self::$fields["XapiAqi_Contents_PoiList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList"]["1"] = "name";
    self::$fields["XapiAqi_Contents_PoiList"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList"]["3"] = "aqi";
    self::$fields["XapiAqi_Contents_PoiList"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["XapiAqi_Contents_PoiList"]["4"] = "update_time";
  }
  function point()
  {
    return $this->_get_value("2");
  }
  function set_point($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function aqi()
  {
    return $this->_get_value("3");
  }
  function set_aqi($value)
  {
    return $this->_set_value("3", $value);
  }
  function update_time()
  {
    return $this->_get_value("4");
  }
  function set_update_time($value)
  {
    return $this->_set_value("4", $value);
  }
}
class XapiAqi_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["XapiAqi_Contents"]["3"] = "XapiAqi_Contents_Point";
    $this->values["3"] = "";
    self::$fieldNames["XapiAqi_Contents"]["3"] = "point";
    self::$fields["XapiAqi_Contents"]["6"] = "XapiAqi_Contents_PoiList";
    $this->values["6"] = array();
    self::$fieldNames["XapiAqi_Contents"]["6"] = "poi_list";
    self::$fields["XapiAqi_Contents"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["XapiAqi_Contents"]["1"] = "cid";
    self::$fields["XapiAqi_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["XapiAqi_Contents"]["2"] = "name";
    self::$fields["XapiAqi_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["XapiAqi_Contents"]["4"] = "aqi";
    self::$fields["XapiAqi_Contents"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["XapiAqi_Contents"]["5"] = "update_time";
  }
  function point()
  {
    return $this->_get_value("3");
  }
  function set_point($value)
  {
    return $this->_set_value("3", $value);
  }
  function poi_list($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_poi_list()
  {
    return $this->_add_arr_value("6");
  }
  function set_poi_list($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_poi_lists($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_poi_list()
  {
    $this->_remove_last_arr_value("6");
  }
  function poi_lists_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_poi_lists()
  {
    return $this->_get_value("6");
  }
  function cid()
  {
    return $this->_get_value("1");
  }
  function set_cid($value)
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
  function aqi()
  {
    return $this->_get_value("4");
  }
  function set_aqi($value)
  {
    return $this->_set_value("4", $value);
  }
  function update_time()
  {
    return $this->_get_value("5");
  }
  function set_update_time($value)
  {
    return $this->_set_value("5", $value);
  }
}
class XapiAqi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["XapiAqi"]["1"] = "XapiAqi_Contents";
    $this->values["1"] = array();
    self::$fieldNames["XapiAqi"]["1"] = "contents";
  }
  function contents($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("1");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("1");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_contentss()
  {
    return $this->_get_value("1");
  }
}
?>