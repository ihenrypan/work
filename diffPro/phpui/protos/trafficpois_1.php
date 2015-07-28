<?php
class TrafficPois_Option_StartCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Option_StartCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Option_StartCity"]["1"] = "code";
    self::$fields["TrafficPois_Option_StartCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Option_StartCity"]["2"] = "cname";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function cname()
  {
    return $this->_get_value("2");
  }
  function set_cname($value)
  {
    return $this->_set_value("2", $value);
  }
}
class TrafficPois_Option_EndCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Option_EndCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Option_EndCity"]["1"] = "code";
    self::$fields["TrafficPois_Option_EndCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Option_EndCity"]["2"] = "cname";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function cname()
  {
    return $this->_get_value("2");
  }
  function set_cname($value)
  {
    return $this->_set_value("2", $value);
  }
}
class TrafficPois_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Option"]["1"] = "PBString";
    $this->values["1"] = array();
    self::$fieldNames["TrafficPois_Option"]["1"] = "city_list";
    self::$fields["TrafficPois_Option"]["2"] = "PBString";
    $this->values["2"] = array();
    self::$fieldNames["TrafficPois_Option"]["2"] = "prio_flag";
    self::$fields["TrafficPois_Option"]["3"] = "PBString";
    $this->values["3"] = array();
    self::$fieldNames["TrafficPois_Option"]["3"] = "wp_wd";
    self::$fields["TrafficPois_Option"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_Option"]["4"] = "s_wd";
    self::$fields["TrafficPois_Option"]["5"] = "PBString";
    $this->values["5"] = array();
    self::$fieldNames["TrafficPois_Option"]["5"] = "e_wd";
    self::$fields["TrafficPois_Option"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_Option"]["6"] = "if_nav";
    self::$fields["TrafficPois_Option"]["7"] = "TrafficPois_Option_StartCity";
    $this->values["7"] = "";
    self::$fieldNames["TrafficPois_Option"]["7"] = "start_city";
    self::$fields["TrafficPois_Option"]["8"] = "TrafficPois_Option_EndCity";
    $this->values["8"] = array();
    self::$fieldNames["TrafficPois_Option"]["8"] = "end_city";
  }
  function city_list($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_city_list($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_city_list($index, $value)
  {
    $v = new self::$fields["TrafficPois_Option"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_city_list()
  {
    $this->_remove_last_arr_value("1");
  }
  function city_lists_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_city_lists()
  {
    return $this->_get_value("1");
  }
  function prio_flag($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_prio_flag($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_prio_flag($index, $value)
  {
    $v = new self::$fields["TrafficPois_Option"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_prio_flag()
  {
    $this->_remove_last_arr_value("2");
  }
  function prio_flags_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_prio_flags()
  {
    return $this->_get_value("2");
  }
  function wp_wd($offset)
  {
    $v = $this->_get_arr_value("3", $offset);
    return $v->get_value();
  }
  function append_wp_wd($value)
  {
    $v = $this->_add_arr_value("3");
    $v->set_value($value);
  }
  function set_wp_wd($index, $value)
  {
    $v = new self::$fields["TrafficPois_Option"]["3"]();
    $v->set_value($value);
    $this->_set_arr_value("3", $index, $v);
  }
  function remove_last_wp_wd()
  {
    $this->_remove_last_arr_value("3");
  }
  function wp_wds_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_wp_wds()
  {
    return $this->_get_value("3");
  }
  function s_wd()
  {
    return $this->_get_value("4");
  }
  function set_s_wd($value)
  {
    return $this->_set_value("4", $value);
  }
  function e_wd($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_e_wd($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_e_wd($index, $value)
  {
    $v = new self::$fields["TrafficPois_Option"]["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_e_wd()
  {
    $this->_remove_last_arr_value("5");
  }
  function e_wds_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_e_wds()
  {
    return $this->_get_value("5");
  }
  function if_nav()
  {
    return $this->_get_value("6");
  }
  function set_if_nav($value)
  {
    return $this->_set_value("6", $value);
  }
  function start_city()
  {
    return $this->_get_value("7");
  }
  function set_start_city($value)
  {
    return $this->_set_value("7", $value);
  }
  function end_city($offset)
  {
    return $this->_get_arr_value("8", $offset);
  }
  function add_end_city()
  {
    return $this->_add_arr_value("8");
  }
  function set_end_city($index, $value)
  {
    $this->_set_arr_value("8", $index, $value);
  }
  function set_all_end_citys($values)
  {
    return $this->_set_arr_values("8", $values);
  }
  function remove_last_end_city()
  {
    $this->_remove_last_arr_value("8");
  }
  function end_citys_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_end_citys()
  {
    return $this->_get_value("8");
  }
}
class TrafficPois_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["1"] = "code";
    self::$fields["TrafficPois_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["2"] = "geo";
    self::$fields["TrafficPois_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["3"] = "level";
    self::$fields["TrafficPois_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["4"] = "name";
    self::$fields["TrafficPois_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["5"] = "sup_subway";
    self::$fields["TrafficPois_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["TrafficPois_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["TrafficPois_CurrentCity"]["7"] = "uid";
    self::$fields["TrafficPois_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["TrafficPois_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["TrafficPois_CurrentCity"]["8"]();
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
class TrafficPois_Content_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content_Start"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["1"] = "code";
    self::$fields["TrafficPois_Content_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["2"] = "name";
    self::$fields["TrafficPois_Content_Start"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["3"] = "num";
    self::$fields["TrafficPois_Content_Start"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["4"] = "uid";
    self::$fields["TrafficPois_Content_Start"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["5"] = "addr";
    self::$fields["TrafficPois_Content_Start"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_Content_Start"]["6"] = "geo";
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
  function num()
  {
    return $this->_get_value("3");
  }
  function set_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function uid()
  {
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
  function addr()
  {
    return $this->_get_value("5");
  }
  function set_addr($value)
  {
    return $this->_set_value("5", $value);
  }
  function geo()
  {
    return $this->_get_value("6");
  }
  function set_geo($value)
  {
    return $this->_set_value("6", $value);
  }
}
class TrafficPois_Content_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content_End"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["1"] = "code";
    self::$fields["TrafficPois_Content_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["2"] = "name";
    self::$fields["TrafficPois_Content_End"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["3"] = "num";
    self::$fields["TrafficPois_Content_End"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["4"] = "uid";
    self::$fields["TrafficPois_Content_End"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["5"] = "addr";
    self::$fields["TrafficPois_Content_End"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["6"] = "geo";
    self::$fields["TrafficPois_Content_End"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["7"] = "ext";
    self::$fields["TrafficPois_Content_End"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["TrafficPois_Content_End"]["8"] = "poiType";
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
  function num()
  {
    return $this->_get_value("3");
  }
  function set_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function uid()
  {
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
  function addr()
  {
    return $this->_get_value("5");
  }
  function set_addr($value)
  {
    return $this->_set_value("5", $value);
  }
  function geo()
  {
    return $this->_get_value("6");
  }
  function set_geo($value)
  {
    return $this->_set_value("6", $value);
  }
  function ext()
  {
    return $this->_get_value("7");
  }
  function set_ext($value)
  {
    return $this->_set_value("7", $value);
  }
  function poiType()
  {
    return $this->_get_value("8");
  }
  function set_poiType($value)
  {
    return $this->_set_value("8", $value);
  }
}
class TrafficPois_Content_WayPoints extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content_WayPoints"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["1"] = "code";
    self::$fields["TrafficPois_Content_WayPoints"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["2"] = "name";
    self::$fields["TrafficPois_Content_WayPoints"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["3"] = "num";
    self::$fields["TrafficPois_Content_WayPoints"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["4"] = "uid";
    self::$fields["TrafficPois_Content_WayPoints"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["5"] = "addr";
    self::$fields["TrafficPois_Content_WayPoints"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_Content_WayPoints"]["6"] = "geo";
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
  function num()
  {
    return $this->_get_value("3");
  }
  function set_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function uid()
  {
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
  function addr()
  {
    return $this->_get_value("5");
  }
  function set_addr($value)
  {
    return $this->_set_value("5", $value);
  }
  function geo()
  {
    return $this->_get_value("6");
  }
  function set_geo($value)
  {
    return $this->_set_value("6", $value);
  }
}
class TrafficPois_Content_MultiWaypoints_WayPoints extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["1"] = "code";
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["2"] = "name";
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["3"] = "num";
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["4"] = "uid";
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["5"] = "addr";
    self::$fields["TrafficPois_Content_MultiWaypoints_WayPoints"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["TrafficPois_Content_MultiWaypoints_WayPoints"]["6"] = "geo";
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
  function num()
  {
    return $this->_get_value("3");
  }
  function set_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function uid()
  {
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
  function addr()
  {
    return $this->_get_value("5");
  }
  function set_addr($value)
  {
    return $this->_set_value("5", $value);
  }
  function geo()
  {
    return $this->_get_value("6");
  }
  function set_geo($value)
  {
    return $this->_set_value("6", $value);
  }
}
class TrafficPois_Content_MultiWaypoints extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content_MultiWaypoints"]["1"] = "TrafficPois_Content_MultiWaypoints_WayPoints";
    $this->values["1"] = array();
    self::$fieldNames["TrafficPois_Content_MultiWaypoints"]["1"] = "way_points";
  }
  function way_points($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_way_points()
  {
    return $this->_add_arr_value("1");
  }
  function set_way_points($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_way_pointss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_way_points()
  {
    $this->_remove_last_arr_value("1");
  }
  function way_pointss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_way_pointss()
  {
    return $this->_get_value("1");
  }
}
class TrafficPois_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois_Content"]["1"] = "TrafficPois_Content_Start";
    $this->values["1"] = array();
    self::$fieldNames["TrafficPois_Content"]["1"] = "start";
    self::$fields["TrafficPois_Content"]["2"] = "TrafficPois_Content_End";
    $this->values["2"] = array();
    self::$fieldNames["TrafficPois_Content"]["2"] = "end";
    self::$fields["TrafficPois_Content"]["3"] = "TrafficPois_Content_WayPoints";
    $this->values["3"] = array();
    self::$fieldNames["TrafficPois_Content"]["3"] = "way_points";
    self::$fields["TrafficPois_Content"]["4"] = "TrafficPois_Content_MultiWaypoints";
    $this->values["4"] = array();
    self::$fieldNames["TrafficPois_Content"]["4"] = "multi_waypoints";
  }
  function start($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_start()
  {
    return $this->_add_arr_value("1");
  }
  function set_start($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_starts($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_start()
  {
    $this->_remove_last_arr_value("1");
  }
  function starts_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_starts()
  {
    return $this->_get_value("1");
  }
  function end($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_end()
  {
    return $this->_add_arr_value("2");
  }
  function set_end($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_ends($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_end()
  {
    $this->_remove_last_arr_value("2");
  }
  function ends_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_ends()
  {
    return $this->_get_value("2");
  }
  function way_points($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_way_points()
  {
    return $this->_add_arr_value("3");
  }
  function set_way_points($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_way_pointss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_way_points()
  {
    $this->_remove_last_arr_value("3");
  }
  function way_pointss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_way_pointss()
  {
    return $this->_get_value("3");
  }
  function multi_waypoints($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_multi_waypoints()
  {
    return $this->_add_arr_value("4");
  }
  function set_multi_waypoints($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_multi_waypointss($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_multi_waypoints()
  {
    $this->_remove_last_arr_value("4");
  }
  function multi_waypointss_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_multi_waypointss()
  {
    return $this->_get_value("4");
  }
}
class TrafficPois extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficPois"]["1"] = "TrafficPois_Option";
    $this->values["1"] = "";
    self::$fieldNames["TrafficPois"]["1"] = "option";
    self::$fields["TrafficPois"]["2"] = "TrafficPois_CurrentCity";
    $this->values["2"] = "";
    self::$fieldNames["TrafficPois"]["2"] = "current_city";
    self::$fields["TrafficPois"]["3"] = "TrafficPois_Content";
    $this->values["3"] = "";
    self::$fieldNames["TrafficPois"]["3"] = "content";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function current_city()
  {
    return $this->_get_value("2");
  }
  function set_current_city($value)
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