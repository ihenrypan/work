<?php
class WeekendList_Content_Themes_Locations extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendList_Content_Themes_Locations"]["1"] = "PB64Bit";
    $this->values["1"] = "";
    self::$fieldNames["WeekendList_Content_Themes_Locations"]["1"] = "latitude";
    self::$fields["WeekendList_Content_Themes_Locations"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["WeekendList_Content_Themes_Locations"]["2"] = "longitude";
  }
  function latitude()
  {
    return $this->_get_value("1");
  }
  function set_latitude($value)
  {
    return $this->_set_value("1", $value);
  }
  function longitude()
  {
    return $this->_get_value("2");
  }
  function set_longitude($value)
  {
    return $this->_set_value("2", $value);
  }
}
class WeekendList_Content_Themes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendList_Content_Themes"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["1"] = "theme_id";
    self::$fields["WeekendList_Content_Themes"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["2"] = "title";
    self::$fields["WeekendList_Content_Themes"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["3"] = "cover_pic_url";
    self::$fields["WeekendList_Content_Themes"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["4"] = "poi_name";
    self::$fields["WeekendList_Content_Themes"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["5"] = "distance";
    self::$fields["WeekendList_Content_Themes"]["6"] = "PBString";
    $this->values["6"] = array();
    self::$fieldNames["WeekendList_Content_Themes"]["6"] = "tags";
    self::$fields["WeekendList_Content_Themes"]["7"] = "PBString";
    $this->values["7"] = array();
    self::$fieldNames["WeekendList_Content_Themes"]["7"] = "districts";
    self::$fields["WeekendList_Content_Themes"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["8"] = "favorite_num";
    self::$fields["WeekendList_Content_Themes"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["9"] = "is_favorite";
    self::$fields["WeekendList_Content_Themes"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["10"] = "share_url";
    self::$fields["WeekendList_Content_Themes"]["11"] = "WeekendList_Content_Themes_Locations";
    $this->values["11"] = array();
    self::$fieldNames["WeekendList_Content_Themes"]["11"] = "locations";
    self::$fields["WeekendList_Content_Themes"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["12"] = "is_active";
    self::$fields["WeekendList_Content_Themes"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["WeekendList_Content_Themes"]["13"] = "cover_url";
  }
  function theme_id()
  {
    return $this->_get_value("1");
  }
  function set_theme_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function title()
  {
    return $this->_get_value("2");
  }
  function set_title($value)
  {
    return $this->_set_value("2", $value);
  }
  function cover_pic_url()
  {
    return $this->_get_value("3");
  }
  function set_cover_pic_url($value)
  {
    return $this->_set_value("3", $value);
  }
  function poi_name()
  {
    return $this->_get_value("4");
  }
  function set_poi_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function distance()
  {
    return $this->_get_value("5");
  }
  function set_distance($value)
  {
    return $this->_set_value("5", $value);
  }
  function tags($offset)
  {
    $v = $this->_get_arr_value("6", $offset);
    return $v->get_value();
  }
  function append_tags($value)
  {
    $v = $this->_add_arr_value("6");
    $v->set_value($value);
  }
  function set_tags($index, $value)
  {
    $v = new self::$fields["WeekendList_Content_Themes"]["6"]();
    $v->set_value($value);
    $this->_set_arr_value("6", $index, $v);
  }
  function remove_last_tags()
  {
    $this->_remove_last_arr_value("6");
  }
  function tagss_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_tagss()
  {
    return $this->_get_value("6");
  }
  function districts($offset)
  {
    $v = $this->_get_arr_value("7", $offset);
    return $v->get_value();
  }
  function append_districts($value)
  {
    $v = $this->_add_arr_value("7");
    $v->set_value($value);
  }
  function set_districts($index, $value)
  {
    $v = new self::$fields["WeekendList_Content_Themes"]["7"]();
    $v->set_value($value);
    $this->_set_arr_value("7", $index, $v);
  }
  function remove_last_districts()
  {
    $this->_remove_last_arr_value("7");
  }
  function districtss_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_districtss()
  {
    return $this->_get_value("7");
  }
  function favorite_num()
  {
    return $this->_get_value("8");
  }
  function set_favorite_num($value)
  {
    return $this->_set_value("8", $value);
  }
  function is_favorite()
  {
    return $this->_get_value("9");
  }
  function set_is_favorite($value)
  {
    return $this->_set_value("9", $value);
  }
  function share_url()
  {
    return $this->_get_value("10");
  }
  function set_share_url($value)
  {
    return $this->_set_value("10", $value);
  }
  function locations($offset)
  {
    return $this->_get_arr_value("11", $offset);
  }
  function add_locations()
  {
    return $this->_add_arr_value("11");
  }
  function set_locations($index, $value)
  {
    $this->_set_arr_value("11", $index, $value);
  }
  function set_all_locationss($values)
  {
    return $this->_set_arr_values("11", $values);
  }
  function remove_last_locations()
  {
    $this->_remove_last_arr_value("11");
  }
  function locationss_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_locationss()
  {
    return $this->_get_value("11");
  }
  function is_active()
  {
    return $this->_get_value("12");
  }
  function set_is_active($value)
  {
    return $this->_set_value("12", $value);
  }
  function cover_url()
  {
    return $this->_get_value("13");
  }
  function set_cover_url($value)
  {
    return $this->_set_value("13", $value);
  }
}
class WeekendList_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendList_Content"]["1"] = "WeekendList_Content_Themes";
    $this->values["1"] = array();
    self::$fieldNames["WeekendList_Content"]["1"] = "themes";
    self::$fields["WeekendList_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["WeekendList_Content"]["2"] = "total";
  }
  function themes($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_themes()
  {
    return $this->_add_arr_value("1");
  }
  function set_themes($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_themess($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_themes()
  {
    $this->_remove_last_arr_value("1");
  }
  function themess_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_themess()
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
class WeekendList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendList"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WeekendList"]["1"] = "err_no";
    self::$fields["WeekendList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendList"]["2"] = "err_msg";
    self::$fields["WeekendList"]["3"] = "WeekendList_Content";
    $this->values["3"] = "";
    self::$fieldNames["WeekendList"]["3"] = "content";
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
  function content()
  {
    return $this->_get_value("3");
  }
  function set_content($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>