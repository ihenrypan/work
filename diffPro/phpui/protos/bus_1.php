<?php
class Bus_Taxi_Detail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Taxi_Detail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Taxi_Detail"]["1"] = "desc";
    self::$fields["Bus_Taxi_Detail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Taxi_Detail"]["2"] = "km_price";
    self::$fields["Bus_Taxi_Detail"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Taxi_Detail"]["3"] = "start_price";
    self::$fields["Bus_Taxi_Detail"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Taxi_Detail"]["4"] = "total_price";
  }
  function desc()
  {
    return $this->_get_value("1");
  }
  function set_desc($value)
  {
    return $this->_set_value("1", $value);
  }
  function km_price()
  {
    return $this->_get_value("2");
  }
  function set_km_price($value)
  {
    return $this->_set_value("2", $value);
  }
  function start_price()
  {
    return $this->_get_value("3");
  }
  function set_start_price($value)
  {
    return $this->_set_value("3", $value);
  }
  function total_price()
  {
    return $this->_get_value("4");
  }
  function set_total_price($value)
  {
    return $this->_set_value("4", $value);
  }
}
class Bus_Taxi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Taxi"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Taxi"]["1"] = "distance";
    self::$fields["Bus_Taxi"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Taxi"]["2"] = "duration";
    self::$fields["Bus_Taxi"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Taxi"]["3"] = "remark";
    self::$fields["Bus_Taxi"]["4"] = "Bus_Taxi_Detail";
    $this->values["4"] = array();
    self::$fieldNames["Bus_Taxi"]["4"] = "detail";
  }
  function distance()
  {
    return $this->_get_value("1");
  }
  function set_distance($value)
  {
    return $this->_set_value("1", $value);
  }
  function duration()
  {
    return $this->_get_value("2");
  }
  function set_duration($value)
  {
    return $this->_set_value("2", $value);
  }
  function remark()
  {
    return $this->_get_value("3");
  }
  function set_remark($value)
  {
    return $this->_set_value("3", $value);
  }
  function detail($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_detail()
  {
    return $this->_add_arr_value("4");
  }
  function set_detail($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_details($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_detail()
  {
    $this->_remove_last_arr_value("4");
  }
  function details_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_details()
  {
    return $this->_get_value("4");
  }
}
class Bus_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_CurrentCity"]["1"] = "code";
    self::$fields["Bus_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_CurrentCity"]["2"] = "geo";
    self::$fields["Bus_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_CurrentCity"]["3"] = "level";
    self::$fields["Bus_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_CurrentCity"]["4"] = "name";
    self::$fields["Bus_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["Bus_CurrentCity"]["5"] = "sup_subway";
    self::$fields["Bus_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Bus_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["Bus_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Bus_CurrentCity"]["7"] = "uid";
    self::$fields["Bus_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["Bus_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["Bus_CurrentCity"]["8"]();
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
class Bus_Routes_Legs_Steps_Step_DictInstruction extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["1"] = "start_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["2"] = "end_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["3"] = "rtbus_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["4"] = "direct_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["5"] = "walk_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_DictInstruction"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_DictInstruction"]["6"] = "other_lines";
  }
  function start_text()
  {
    return $this->_get_value("1");
  }
  function set_start_text($value)
  {
    return $this->_set_value("1", $value);
  }
  function end_text()
  {
    return $this->_get_value("2");
  }
  function set_end_text($value)
  {
    return $this->_set_value("2", $value);
  }
  function rtbus_text()
  {
    return $this->_get_value("3");
  }
  function set_rtbus_text($value)
  {
    return $this->_set_value("3", $value);
  }
  function direct_text()
  {
    return $this->_get_value("4");
  }
  function set_direct_text($value)
  {
    return $this->_set_value("4", $value);
  }
  function walk_text()
  {
    return $this->_get_value("5");
  }
  function set_walk_text($value)
  {
    return $this->_set_value("5", $value);
  }
  function other_lines()
  {
    return $this->_get_value("6");
  }
  function set_other_lines($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["1"] = "remain_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["2"] = "remain_dis";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo"]["3"] = "remain_stops";
  }
  function remain_time()
  {
    return $this->_get_value("1");
  }
  function set_remain_time($value)
  {
    return $this->_set_value("1", $value);
  }
  function remain_dis()
  {
    return $this->_get_value("2");
  }
  function set_remain_dis($value)
  {
    return $this->_set_value("2", $value);
  }
  function remain_stops()
  {
    return $this->_get_value("3");
  }
  function set_remain_stops($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_Vehicle_Linestations extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["2"] = "start_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["3"] = "geo";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["4"] = "PBSignedInt";
    $this->values["4"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["4"] = "sgeo";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function start_time()
  {
    return $this->_get_value("2");
  }
  function set_start_time($value)
  {
    return $this->_set_value("2", $value);
  }
  function geo()
  {
    return $this->_get_value("3");
  }
  function set_geo($value)
  {
    return $this->_set_value("3", $value);
  }
  function sgeo($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_sgeo($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_sgeo($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle_Linestations"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_sgeo()
  {
    $this->_remove_last_arr_value("4");
  }
  function sgeos_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_sgeos()
  {
    return $this->_get_value("4");
  }
}
class Bus_Routes_Legs_Steps_Step_Vehicle extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["11"] = "Bus_Routes_Legs_Steps_Step_Vehicle_NextBusInfo";
    $this->values["11"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["11"] = "next_bus_info";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["20"] = "Bus_Routes_Legs_Steps_Step_Vehicle_Linestations";
    $this->values["20"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["20"] = "linestations";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["2"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["3"] = "uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["4"] = "start_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["5"] = "end_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["6"] = "start_uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["7"] = "end_name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["8"] = "stop_num";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["9"] = "total_price";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["10"] = "zone_price";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["12"] = "arealines";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["13"] = "date";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["14"] = "discount";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["15"] = "price";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["16"] = "cp";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["17"] = "PBInt";
    $this->values["17"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["17"] = "line_type";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["18"] = "start_wd";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["19"] = "end_city_uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["21"] = "telnum";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["22"] = "order_url";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["23"] = "start_name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["24"] = "end_uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["25"] = "PBInt";
    $this->values["25"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["25"] = "end_station_type";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["26"] = "provider_name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["27"] = "PBString";
    $this->values["27"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["27"] = "provider_url";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["28"] = "PBString";
    $this->values["28"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["28"] = "start_city_name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["29"] = "PBInt";
    $this->values["29"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["29"] = "is_support_ticket";
    self::$fields["Bus_Routes_Legs_Steps_Step_Vehicle"]["31"] = "PBString";
    $this->values["31"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Vehicle"]["31"] = "ticket_url";
  }
  function next_bus_info()
  {
    return $this->_get_value("11");
  }
  function set_next_bus_info($value)
  {
    return $this->_set_value("11", $value);
  }
  function linestations($offset)
  {
    return $this->_get_arr_value("20", $offset);
  }
  function add_linestations()
  {
    return $this->_add_arr_value("20");
  }
  function set_linestations($index, $value)
  {
    $this->_set_arr_value("20", $index, $value);
  }
  function set_all_linestationss($values)
  {
    return $this->_set_arr_values("20", $values);
  }
  function remove_last_linestations()
  {
    $this->_remove_last_arr_value("20");
  }
  function linestationss_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_linestationss()
  {
    return $this->_get_value("20");
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function start_time()
  {
    return $this->_get_value("4");
  }
  function set_start_time($value)
  {
    return $this->_set_value("4", $value);
  }
  function end_time()
  {
    return $this->_get_value("5");
  }
  function set_end_time($value)
  {
    return $this->_set_value("5", $value);
  }
  function start_uid()
  {
    return $this->_get_value("6");
  }
  function set_start_uid($value)
  {
    return $this->_set_value("6", $value);
  }
  function end_name()
  {
    return $this->_get_value("7");
  }
  function set_end_name($value)
  {
    return $this->_set_value("7", $value);
  }
  function stop_num()
  {
    return $this->_get_value("8");
  }
  function set_stop_num($value)
  {
    return $this->_set_value("8", $value);
  }
  function total_price()
  {
    return $this->_get_value("9");
  }
  function set_total_price($value)
  {
    return $this->_set_value("9", $value);
  }
  function zone_price()
  {
    return $this->_get_value("10");
  }
  function set_zone_price($value)
  {
    return $this->_set_value("10", $value);
  }
  function arealines()
  {
    return $this->_get_value("12");
  }
  function set_arealines($value)
  {
    return $this->_set_value("12", $value);
  }
  function date()
  {
    return $this->_get_value("13");
  }
  function set_date($value)
  {
    return $this->_set_value("13", $value);
  }
  function discount()
  {
    return $this->_get_value("14");
  }
  function set_discount($value)
  {
    return $this->_set_value("14", $value);
  }
  function price()
  {
    return $this->_get_value("15");
  }
  function set_price($value)
  {
    return $this->_set_value("15", $value);
  }
  function cp()
  {
    return $this->_get_value("16");
  }
  function set_cp($value)
  {
    return $this->_set_value("16", $value);
  }
  function line_type()
  {
    return $this->_get_value("17");
  }
  function set_line_type($value)
  {
    return $this->_set_value("17", $value);
  }
  function start_wd()
  {
    return $this->_get_value("18");
  }
  function set_start_wd($value)
  {
    return $this->_set_value("18", $value);
  }
  function end_city_uid()
  {
    return $this->_get_value("19");
  }
  function set_end_city_uid($value)
  {
    return $this->_set_value("19", $value);
  }
  function telnum()
  {
    return $this->_get_value("21");
  }
  function set_telnum($value)
  {
    return $this->_set_value("21", $value);
  }
  function order_url()
  {
    return $this->_get_value("22");
  }
  function set_order_url($value)
  {
    return $this->_set_value("22", $value);
  }
  function start_name()
  {
    return $this->_get_value("23");
  }
  function set_start_name($value)
  {
    return $this->_set_value("23", $value);
  }
  function end_uid()
  {
    return $this->_get_value("24");
  }
  function set_end_uid($value)
  {
    return $this->_set_value("24", $value);
  }
  function end_station_type()
  {
    return $this->_get_value("25");
  }
  function set_end_station_type($value)
  {
    return $this->_set_value("25", $value);
  }
  function provider_name()
  {
    return $this->_get_value("26");
  }
  function set_provider_name($value)
  {
    return $this->_set_value("26", $value);
  }
  function provider_url()
  {
    return $this->_get_value("27");
  }
  function set_provider_url($value)
  {
    return $this->_set_value("27", $value);
  }
  function start_city_name()
  {
    return $this->_get_value("28");
  }
  function set_start_city_name($value)
  {
    return $this->_set_value("28", $value);
  }
  function is_support_ticket()
  {
    return $this->_get_value("29");
  }
  function set_is_support_ticket($value)
  {
    return $this->_set_value("29", $value);
  }
  function ticket_url()
  {
    return $this->_get_value("31");
  }
  function set_ticket_url($value)
  {
    return $this->_set_value("31", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["1"] = "start_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["2"] = "end_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["3"] = "rtbus_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["4"] = "direct_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction"]["5"] = "walk_text";
  }
  function start_text()
  {
    return $this->_get_value("1");
  }
  function set_start_text($value)
  {
    return $this->_set_value("1", $value);
  }
  function end_text()
  {
    return $this->_get_value("2");
  }
  function set_end_text($value)
  {
    return $this->_set_value("2", $value);
  }
  function rtbus_text()
  {
    return $this->_get_value("3");
  }
  function set_rtbus_text($value)
  {
    return $this->_set_value("3", $value);
  }
  function direct_text()
  {
    return $this->_get_value("4");
  }
  function set_direct_text($value)
  {
    return $this->_set_value("4", $value);
  }
  function walk_text()
  {
    return $this->_get_value("5");
  }
  function set_walk_text($value)
  {
    return $this->_set_value("5", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["1"] = "remain_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["2"] = "remain_dis";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo"]["3"] = "remain_stops";
  }
  function remain_time()
  {
    return $this->_get_value("1");
  }
  function set_remain_time($value)
  {
    return $this->_set_value("1", $value);
  }
  function remain_dis()
  {
    return $this->_get_value("2");
  }
  function set_remain_dis($value)
  {
    return $this->_set_value("2", $value);
  }
  function remain_stops()
  {
    return $this->_get_value("3");
  }
  function set_remain_stops($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["2"] = "start_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["3"] = "geo";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["4"] = "PBSignedInt";
    $this->values["4"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["4"] = "sgeo";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function start_time()
  {
    return $this->_get_value("2");
  }
  function set_start_time($value)
  {
    return $this->_set_value("2", $value);
  }
  function geo()
  {
    return $this->_get_value("3");
  }
  function set_geo($value)
  {
    return $this->_set_value("3", $value);
  }
  function sgeo($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_sgeo($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_sgeo($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_sgeo()
  {
    $this->_remove_last_arr_value("4");
  }
  function sgeos_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_sgeos()
  {
    return $this->_get_value("4");
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["11"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_NextBusInfo";
    $this->values["11"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["11"] = "next_bus_info";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["20"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle_Linestations";
    $this->values["20"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["20"] = "linestations";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["2"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["3"] = "uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["4"] = "start_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["5"] = "end_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["6"] = "start_uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["7"] = "end_name";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["8"] = "stop_num";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["9"] = "total_price";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["10"] = "zone_price";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["12"] = "arealines";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["13"] = "date";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["14"] = "discount";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["15"] = "price";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["16"] = "cp";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["17"] = "PBInt";
    $this->values["17"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["17"] = "line_type";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["18"] = "start_wd";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["19"] = "end_city_uid";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["21"] = "telnum";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["22"] = "order_url";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle"]["23"] = "start_name";
  }
  function next_bus_info()
  {
    return $this->_get_value("11");
  }
  function set_next_bus_info($value)
  {
    return $this->_set_value("11", $value);
  }
  function linestations($offset)
  {
    return $this->_get_arr_value("20", $offset);
  }
  function add_linestations()
  {
    return $this->_add_arr_value("20");
  }
  function set_linestations($index, $value)
  {
    $this->_set_arr_value("20", $index, $value);
  }
  function set_all_linestationss($values)
  {
    return $this->_set_arr_values("20", $values);
  }
  function remove_last_linestations()
  {
    $this->_remove_last_arr_value("20");
  }
  function linestationss_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_linestationss()
  {
    return $this->_get_value("20");
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function start_time()
  {
    return $this->_get_value("4");
  }
  function set_start_time($value)
  {
    return $this->_set_value("4", $value);
  }
  function end_time()
  {
    return $this->_get_value("5");
  }
  function set_end_time($value)
  {
    return $this->_set_value("5", $value);
  }
  function start_uid()
  {
    return $this->_get_value("6");
  }
  function set_start_uid($value)
  {
    return $this->_set_value("6", $value);
  }
  function end_name()
  {
    return $this->_get_value("7");
  }
  function set_end_name($value)
  {
    return $this->_set_value("7", $value);
  }
  function stop_num()
  {
    return $this->_get_value("8");
  }
  function set_stop_num($value)
  {
    return $this->_set_value("8", $value);
  }
  function total_price()
  {
    return $this->_get_value("9");
  }
  function set_total_price($value)
  {
    return $this->_set_value("9", $value);
  }
  function zone_price()
  {
    return $this->_get_value("10");
  }
  function set_zone_price($value)
  {
    return $this->_set_value("10", $value);
  }
  function arealines()
  {
    return $this->_get_value("12");
  }
  function set_arealines($value)
  {
    return $this->_set_value("12", $value);
  }
  function date()
  {
    return $this->_get_value("13");
  }
  function set_date($value)
  {
    return $this->_set_value("13", $value);
  }
  function discount()
  {
    return $this->_get_value("14");
  }
  function set_discount($value)
  {
    return $this->_set_value("14", $value);
  }
  function price()
  {
    return $this->_get_value("15");
  }
  function set_price($value)
  {
    return $this->_set_value("15", $value);
  }
  function cp()
  {
    return $this->_get_value("16");
  }
  function set_cp($value)
  {
    return $this->_set_value("16", $value);
  }
  function line_type()
  {
    return $this->_get_value("17");
  }
  function set_line_type($value)
  {
    return $this->_set_value("17", $value);
  }
  function start_wd()
  {
    return $this->_get_value("18");
  }
  function set_start_wd($value)
  {
    return $this->_set_value("18", $value);
  }
  function end_city_uid()
  {
    return $this->_get_value("19");
  }
  function set_end_city_uid($value)
  {
    return $this->_set_value("19", $value);
  }
  function telnum()
  {
    return $this->_get_value("21");
  }
  function set_telnum($value)
  {
    return $this->_set_value("21", $value);
  }
  function order_url()
  {
    return $this->_get_value("22");
  }
  function set_order_url($value)
  {
    return $this->_set_value("22", $value);
  }
  function start_name()
  {
    return $this->_get_value("23");
  }
  function set_start_name($value)
  {
    return $this->_set_value("23", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["2"] = "location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["3"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["4"] = "detail";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["5"] = "slocation";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function location()
  {
    return $this->_get_value("2");
  }
  function set_location($value)
  {
    return $this->_set_value("2", $value);
  }
  function type()
  {
    return $this->_get_value("3");
  }
  function set_type($value)
  {
    return $this->_set_value("3", $value);
  }
  function detail()
  {
    return $this->_get_value("4");
  }
  function set_detail($value)
  {
    return $this->_set_value("4", $value);
  }
  function slocation($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_slocation($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_slocation($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois"]["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_slocation()
  {
    $this->_remove_last_arr_value("5");
  }
  function slocations_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_slocations()
  {
    return $this->_get_value("5");
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano"]["1"] = "pano_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano"]["2"] = "pano_id";
  }
  function pano_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_pano_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_pano_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_pano_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function pano_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_pano_locations()
  {
    return $this->_get_value("1");
  }
  function pano_id()
  {
    return $this->_get_value("2");
  }
  function set_pano_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["21"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_DictInstruction";
    $this->values["21"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["21"] = "dict_instruction";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["10"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Vehicle";
    $this->values["10"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["10"] = "vehicle";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["16"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_Pois";
    $this->values["16"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["16"] = "pois";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["1"] = "path";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["2"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["3"] = "instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["4"] = "start_instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["5"] = "end_instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["6"] = "start_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["7"] = "end_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["8"] = "distance";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["9"] = "duration";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["11"] = "tip";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["12"] = "tip_text";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["13"] = "tip_background";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["14"] = "arrive_time";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["15"] = "PBInt";
    $this->values["15"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["15"] = "direction";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["17"] = "PBSignedInt";
    $this->values["17"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["17"] = "sstart_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["18"] = "PBSignedInt";
    $this->values["18"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["18"] = "send_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["19"] = "PBSignedInt";
    $this->values["19"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["19"] = "spath";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["20"] = "PBString";
    $this->values["20"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["20"] = "line_stops";
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["22"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep_StepPano";
    $this->values["22"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["22"] = "step_pano";
  }
  function dict_instruction()
  {
    return $this->_get_value("21");
  }
  function set_dict_instruction($value)
  {
    return $this->_set_value("21", $value);
  }
  function vehicle()
  {
    return $this->_get_value("10");
  }
  function set_vehicle($value)
  {
    return $this->_set_value("10", $value);
  }
  function pois($offset)
  {
    return $this->_get_arr_value("16", $offset);
  }
  function add_pois()
  {
    return $this->_add_arr_value("16");
  }
  function set_pois($index, $value)
  {
    $this->_set_arr_value("16", $index, $value);
  }
  function set_all_poiss($values)
  {
    return $this->_set_arr_values("16", $values);
  }
  function remove_last_pois()
  {
    $this->_remove_last_arr_value("16");
  }
  function poiss_size()
  {
    return $this->_get_arr_size("16");
  }
  function get_poiss()
  {
    return $this->_get_value("16");
  }
  function path()
  {
    return $this->_get_value("1");
  }
  function set_path($value)
  {
    return $this->_set_value("1", $value);
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function instructions()
  {
    return $this->_get_value("3");
  }
  function set_instructions($value)
  {
    return $this->_set_value("3", $value);
  }
  function start_instructions()
  {
    return $this->_get_value("4");
  }
  function set_start_instructions($value)
  {
    return $this->_set_value("4", $value);
  }
  function end_instructions()
  {
    return $this->_get_value("5");
  }
  function set_end_instructions($value)
  {
    return $this->_set_value("5", $value);
  }
  function start_location()
  {
    return $this->_get_value("6");
  }
  function set_start_location($value)
  {
    return $this->_set_value("6", $value);
  }
  function end_location()
  {
    return $this->_get_value("7");
  }
  function set_end_location($value)
  {
    return $this->_set_value("7", $value);
  }
  function distance()
  {
    return $this->_get_value("8");
  }
  function set_distance($value)
  {
    return $this->_set_value("8", $value);
  }
  function duration()
  {
    return $this->_get_value("9");
  }
  function set_duration($value)
  {
    return $this->_set_value("9", $value);
  }
  function tip()
  {
    return $this->_get_value("11");
  }
  function set_tip($value)
  {
    return $this->_set_value("11", $value);
  }
  function tip_text()
  {
    return $this->_get_value("12");
  }
  function set_tip_text($value)
  {
    return $this->_set_value("12", $value);
  }
  function tip_background()
  {
    return $this->_get_value("13");
  }
  function set_tip_background($value)
  {
    return $this->_set_value("13", $value);
  }
  function arrive_time()
  {
    return $this->_get_value("14");
  }
  function set_arrive_time($value)
  {
    return $this->_set_value("14", $value);
  }
  function direction()
  {
    return $this->_get_value("15");
  }
  function set_direction($value)
  {
    return $this->_set_value("15", $value);
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("17", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("17");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["17"]();
    $v->set_value($value);
    $this->_set_arr_value("17", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("17");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("17");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("17");
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("18", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("18");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["18"]();
    $v->set_value($value);
    $this->_set_arr_value("18", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("18");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("18");
  }
  function get_send_locations()
  {
    return $this->_get_value("18");
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("19", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("19");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["19"]();
    $v->set_value($value);
    $this->_set_arr_value("19", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("19");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("19");
  }
  function get_spaths()
  {
    return $this->_get_value("19");
  }
  function line_stops($offset)
  {
    $v = $this->_get_arr_value("20", $offset);
    return $v->get_value();
  }
  function append_line_stops($value)
  {
    $v = $this->_add_arr_value("20");
    $v->set_value($value);
  }
  function set_line_stops($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep"]["20"]();
    $v->set_value($value);
    $this->_set_arr_value("20", $index, $v);
  }
  function remove_last_line_stops()
  {
    $this->_remove_last_arr_value("20");
  }
  function line_stopss_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_line_stopss()
  {
    return $this->_get_value("20");
  }
  function step_pano()
  {
    return $this->_get_value("22");
  }
  function set_step_pano($value)
  {
    return $this->_set_value("22", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_LowerSteps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LowerSteps"]["1"] = "Bus_Routes_Legs_Steps_Step_LowerSteps_LowerStep";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LowerSteps"]["1"] = "lower_step";
  }
  function lower_step($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_lower_step()
  {
    return $this->_add_arr_value("1");
  }
  function set_lower_step($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_lower_steps($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_lower_step()
  {
    $this->_remove_last_arr_value("1");
  }
  function lower_steps_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_lower_steps()
  {
    return $this->_get_value("1");
  }
}
class Bus_Routes_Legs_Steps_Step_Pois extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Pois"]["1"] = "name";
    self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Pois"]["2"] = "location";
    self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Pois"]["3"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Pois"]["4"] = "detail";
    self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_Pois"]["5"] = "slocation";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function location()
  {
    return $this->_get_value("2");
  }
  function set_location($value)
  {
    return $this->_set_value("2", $value);
  }
  function type()
  {
    return $this->_get_value("3");
  }
  function set_type($value)
  {
    return $this->_set_value("3", $value);
  }
  function detail()
  {
    return $this->_get_value("4");
  }
  function set_detail($value)
  {
    return $this->_set_value("4", $value);
  }
  function slocation($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_slocation($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_slocation($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_Pois"]["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_slocation()
  {
    $this->_remove_last_arr_value("5");
  }
  function slocations_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_slocations()
  {
    return $this->_get_value("5");
  }
}
class Bus_Routes_Legs_Steps_Step_LinkColor extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_LinkColor"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LinkColor"]["1"] = "status";
    self::$fields["Bus_Routes_Legs_Steps_Step_LinkColor"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_LinkColor"]["2"] = "geo_cnt";
  }
  function status()
  {
    return $this->_get_value("1");
  }
  function set_status($value)
  {
    return $this->_set_value("1", $value);
  }
  function geo_cnt()
  {
    return $this->_get_value("2");
  }
  function set_geo_cnt($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_StepPano extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_StepPano"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_StepPano"]["1"] = "pano_location";
    self::$fields["Bus_Routes_Legs_Steps_Step_StepPano"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_StepPano"]["2"] = "pano_id";
  }
  function pano_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_pano_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_pano_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step_StepPano"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_pano_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function pano_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_pano_locations()
  {
    return $this->_get_value("1");
  }
  function pano_id()
  {
    return $this->_get_value("2");
  }
  function set_pano_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs_Steps_Step_StopsPos extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step_StopsPos"]["1"] = "PB64Bit";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_StopsPos"]["1"] = "x";
    self::$fields["Bus_Routes_Legs_Steps_Step_StopsPos"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step_StopsPos"]["2"] = "y";
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
class Bus_Routes_Legs_Steps_Step extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps_Step"]["23"] = "Bus_Routes_Legs_Steps_Step_DictInstruction";
    $this->values["23"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["23"] = "dict_instruction";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["12"] = "Bus_Routes_Legs_Steps_Step_Vehicle";
    $this->values["12"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["12"] = "vehicle";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["13"] = "Bus_Routes_Legs_Steps_Step_LowerSteps";
    $this->values["13"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["13"] = "lower_steps";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["16"] = "Bus_Routes_Legs_Steps_Step_Pois";
    $this->values["16"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["16"] = "pois";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["24"] = "Bus_Routes_Legs_Steps_Step_LinkColor";
    $this->values["24"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["24"] = "link_color";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["1"] = "distance";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["2"] = "duration";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["3"] = "end_location";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["4"] = "start_location";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["5"] = "instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["6"] = "path";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["7"] = "type";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["8"] = "tip";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["9"] = "tip_text";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["10"] = "tip_background";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["11"] = "order_url";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["14"] = "start_instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["15"] = "end_instructions";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["17"] = "start_address";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["18"] = "end_address";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["19"] = "PBSignedInt";
    $this->values["19"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["19"] = "send_location";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["20"] = "PBSignedInt";
    $this->values["20"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["20"] = "sstart_location";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["21"] = "PBSignedInt";
    $this->values["21"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["21"] = "spath";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["22"] = "PBString";
    $this->values["22"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["22"] = "line_stops";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["25"] = "Bus_Routes_Legs_Steps_Step_StepPano";
    $this->values["25"] = "";
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["25"] = "step_pano";
    self::$fields["Bus_Routes_Legs_Steps_Step"]["26"] = "Bus_Routes_Legs_Steps_Step_StopsPos";
    $this->values["26"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps_Step"]["26"] = "stops_pos";
  }
  function dict_instruction()
  {
    return $this->_get_value("23");
  }
  function set_dict_instruction($value)
  {
    return $this->_set_value("23", $value);
  }
  function vehicle()
  {
    return $this->_get_value("12");
  }
  function set_vehicle($value)
  {
    return $this->_set_value("12", $value);
  }
  function lower_steps($offset)
  {
    return $this->_get_arr_value("13", $offset);
  }
  function add_lower_steps()
  {
    return $this->_add_arr_value("13");
  }
  function set_lower_steps($index, $value)
  {
    $this->_set_arr_value("13", $index, $value);
  }
  function set_all_lower_stepss($values)
  {
    return $this->_set_arr_values("13", $values);
  }
  function remove_last_lower_steps()
  {
    $this->_remove_last_arr_value("13");
  }
  function lower_stepss_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_lower_stepss()
  {
    return $this->_get_value("13");
  }
  function pois($offset)
  {
    return $this->_get_arr_value("16", $offset);
  }
  function add_pois()
  {
    return $this->_add_arr_value("16");
  }
  function set_pois($index, $value)
  {
    $this->_set_arr_value("16", $index, $value);
  }
  function set_all_poiss($values)
  {
    return $this->_set_arr_values("16", $values);
  }
  function remove_last_pois()
  {
    $this->_remove_last_arr_value("16");
  }
  function poiss_size()
  {
    return $this->_get_arr_size("16");
  }
  function get_poiss()
  {
    return $this->_get_value("16");
  }
  function link_color($offset)
  {
    return $this->_get_arr_value("24", $offset);
  }
  function add_link_color()
  {
    return $this->_add_arr_value("24");
  }
  function set_link_color($index, $value)
  {
    $this->_set_arr_value("24", $index, $value);
  }
  function set_all_link_colors($values)
  {
    return $this->_set_arr_values("24", $values);
  }
  function remove_last_link_color()
  {
    $this->_remove_last_arr_value("24");
  }
  function link_colors_size()
  {
    return $this->_get_arr_size("24");
  }
  function get_link_colors()
  {
    return $this->_get_value("24");
  }
  function distance()
  {
    return $this->_get_value("1");
  }
  function set_distance($value)
  {
    return $this->_set_value("1", $value);
  }
  function duration()
  {
    return $this->_get_value("2");
  }
  function set_duration($value)
  {
    return $this->_set_value("2", $value);
  }
  function end_location()
  {
    return $this->_get_value("3");
  }
  function set_end_location($value)
  {
    return $this->_set_value("3", $value);
  }
  function start_location()
  {
    return $this->_get_value("4");
  }
  function set_start_location($value)
  {
    return $this->_set_value("4", $value);
  }
  function instructions()
  {
    return $this->_get_value("5");
  }
  function set_instructions($value)
  {
    return $this->_set_value("5", $value);
  }
  function path()
  {
    return $this->_get_value("6");
  }
  function set_path($value)
  {
    return $this->_set_value("6", $value);
  }
  function type()
  {
    return $this->_get_value("7");
  }
  function set_type($value)
  {
    return $this->_set_value("7", $value);
  }
  function tip()
  {
    return $this->_get_value("8");
  }
  function set_tip($value)
  {
    return $this->_set_value("8", $value);
  }
  function tip_text()
  {
    return $this->_get_value("9");
  }
  function set_tip_text($value)
  {
    return $this->_set_value("9", $value);
  }
  function tip_background()
  {
    return $this->_get_value("10");
  }
  function set_tip_background($value)
  {
    return $this->_set_value("10", $value);
  }
  function order_url()
  {
    return $this->_get_value("11");
  }
  function set_order_url($value)
  {
    return $this->_set_value("11", $value);
  }
  function start_instructions()
  {
    return $this->_get_value("14");
  }
  function set_start_instructions($value)
  {
    return $this->_set_value("14", $value);
  }
  function end_instructions()
  {
    return $this->_get_value("15");
  }
  function set_end_instructions($value)
  {
    return $this->_set_value("15", $value);
  }
  function start_address()
  {
    return $this->_get_value("17");
  }
  function set_start_address($value)
  {
    return $this->_set_value("17", $value);
  }
  function end_address()
  {
    return $this->_get_value("18");
  }
  function set_end_address($value)
  {
    return $this->_set_value("18", $value);
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("19", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("19");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step"]["19"]();
    $v->set_value($value);
    $this->_set_arr_value("19", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("19");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("19");
  }
  function get_send_locations()
  {
    return $this->_get_value("19");
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("20", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("20");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step"]["20"]();
    $v->set_value($value);
    $this->_set_arr_value("20", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("20");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("20");
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("21", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("21");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step"]["21"]();
    $v->set_value($value);
    $this->_set_arr_value("21", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("21");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("21");
  }
  function get_spaths()
  {
    return $this->_get_value("21");
  }
  function line_stops($offset)
  {
    $v = $this->_get_arr_value("22", $offset);
    return $v->get_value();
  }
  function append_line_stops($value)
  {
    $v = $this->_add_arr_value("22");
    $v->set_value($value);
  }
  function set_line_stops($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_Steps_Step"]["22"]();
    $v->set_value($value);
    $this->_set_arr_value("22", $index, $v);
  }
  function remove_last_line_stops()
  {
    $this->_remove_last_arr_value("22");
  }
  function line_stopss_size()
  {
    return $this->_get_arr_size("22");
  }
  function get_line_stopss()
  {
    return $this->_get_value("22");
  }
  function step_pano()
  {
    return $this->_get_value("25");
  }
  function set_step_pano($value)
  {
    return $this->_set_value("25", $value);
  }
  function stops_pos($offset)
  {
    return $this->_get_arr_value("26", $offset);
  }
  function add_stops_pos()
  {
    return $this->_add_arr_value("26");
  }
  function set_stops_pos($index, $value)
  {
    $this->_set_arr_value("26", $index, $value);
  }
  function set_all_stops_poss($values)
  {
    return $this->_set_arr_values("26", $values);
  }
  function remove_last_stops_pos()
  {
    $this->_remove_last_arr_value("26");
  }
  function stops_poss_size()
  {
    return $this->_get_arr_size("26");
  }
  function get_stops_poss()
  {
    return $this->_get_value("26");
  }
}
class Bus_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_Steps"]["1"] = "Bus_Routes_Legs_Steps_Step";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_Steps"]["1"] = "step";
  }
  function step($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_step()
  {
    return $this->_add_arr_value("1");
  }
  function set_step($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_steps($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_step()
  {
    $this->_remove_last_arr_value("1");
  }
  function steps_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_steps()
  {
    return $this->_get_value("1");
  }
}
class Bus_Routes_Legs_StartPano extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_StartPano"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_StartPano"]["1"] = "pano_location";
    self::$fields["Bus_Routes_Legs_StartPano"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_StartPano"]["2"] = "pano_id";
  }
  function pano_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_pano_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_pano_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_StartPano"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_pano_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function pano_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_pano_locations()
  {
    return $this->_get_value("1");
  }
  function pano_id()
  {
    return $this->_get_value("2");
  }
  function set_pano_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs_EndPano extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_EndPano"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes_Legs_EndPano"]["1"] = "pano_location";
    self::$fields["Bus_Routes_Legs_EndPano"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_EndPano"]["2"] = "pano_id";
  }
  function pano_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_pano_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_pano_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs_EndPano"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_pano_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function pano_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_pano_locations()
  {
    return $this->_get_value("1");
  }
  function pano_id()
  {
    return $this->_get_value("2");
  }
  function set_pano_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs_LinePrice extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs_LinePrice"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs_LinePrice"]["1"] = "line_type";
    self::$fields["Bus_Routes_Legs_LinePrice"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs_LinePrice"]["2"] = "line_price";
  }
  function line_type()
  {
    return $this->_get_value("1");
  }
  function set_line_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function line_price()
  {
    return $this->_get_value("2");
  }
  function set_line_price($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes_Legs"]["11"] = "Bus_Routes_Legs_Steps";
    $this->values["11"] = array();
    self::$fieldNames["Bus_Routes_Legs"]["11"] = "steps";
    self::$fields["Bus_Routes_Legs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["1"] = "distance";
    self::$fields["Bus_Routes_Legs"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["2"] = "duration";
    self::$fields["Bus_Routes_Legs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["3"] = "end_location";
    self::$fields["Bus_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["4"] = "start_location";
    self::$fields["Bus_Routes_Legs"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["5"] = "tip";
    self::$fields["Bus_Routes_Legs"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["6"] = "tip_text";
    self::$fields["Bus_Routes_Legs"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["7"] = "tip_background";
    self::$fields["Bus_Routes_Legs"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["8"] = "arrive_time";
    self::$fields["Bus_Routes_Legs"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["12"] = "start_address";
    self::$fields["Bus_Routes_Legs"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["13"] = "end_address";
    self::$fields["Bus_Routes_Legs"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["14"] = "start_time";
    self::$fields["Bus_Routes_Legs"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["15"] = "end_time";
    self::$fields["Bus_Routes_Legs"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["16"] = "price";
    self::$fields["Bus_Routes_Legs"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["17"] = "discount";
    self::$fields["Bus_Routes_Legs"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["18"] = "instructions";
    self::$fields["Bus_Routes_Legs"]["19"] = "PBSignedInt";
    $this->values["19"] = array();
    self::$fieldNames["Bus_Routes_Legs"]["19"] = "send_location";
    self::$fields["Bus_Routes_Legs"]["20"] = "PBSignedInt";
    $this->values["20"] = array();
    self::$fieldNames["Bus_Routes_Legs"]["20"] = "sstart_location";
    self::$fields["Bus_Routes_Legs"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["21"] = "tip_label";
    self::$fields["Bus_Routes_Legs"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["22"] = "tip_label_background";
    self::$fields["Bus_Routes_Legs"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["23"] = "tip_rtbus";
    self::$fields["Bus_Routes_Legs"]["24"] = "PBInt";
    $this->values["24"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["24"] = "rtbus_update_time";
    self::$fields["Bus_Routes_Legs"]["25"] = "PBInt";
    $this->values["25"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["25"] = "traffic_type";
    self::$fields["Bus_Routes_Legs"]["26"] = "Bus_Routes_Legs_StartPano";
    $this->values["26"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["26"] = "start_pano";
    self::$fields["Bus_Routes_Legs"]["27"] = "Bus_Routes_Legs_EndPano";
    $this->values["27"] = "";
    self::$fieldNames["Bus_Routes_Legs"]["27"] = "end_pano";
    self::$fields["Bus_Routes_Legs"]["28"] = "Bus_Routes_Legs_LinePrice";
    $this->values["28"] = array();
    self::$fieldNames["Bus_Routes_Legs"]["28"] = "line_price";
  }
  function steps($offset)
  {
    return $this->_get_arr_value("11", $offset);
  }
  function add_steps()
  {
    return $this->_add_arr_value("11");
  }
  function set_steps($index, $value)
  {
    $this->_set_arr_value("11", $index, $value);
  }
  function set_all_stepss($values)
  {
    return $this->_set_arr_values("11", $values);
  }
  function remove_last_steps()
  {
    $this->_remove_last_arr_value("11");
  }
  function stepss_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_stepss()
  {
    return $this->_get_value("11");
  }
  function distance()
  {
    return $this->_get_value("1");
  }
  function set_distance($value)
  {
    return $this->_set_value("1", $value);
  }
  function duration()
  {
    return $this->_get_value("2");
  }
  function set_duration($value)
  {
    return $this->_set_value("2", $value);
  }
  function end_location()
  {
    return $this->_get_value("3");
  }
  function set_end_location($value)
  {
    return $this->_set_value("3", $value);
  }
  function start_location()
  {
    return $this->_get_value("4");
  }
  function set_start_location($value)
  {
    return $this->_set_value("4", $value);
  }
  function tip()
  {
    return $this->_get_value("5");
  }
  function set_tip($value)
  {
    return $this->_set_value("5", $value);
  }
  function tip_text()
  {
    return $this->_get_value("6");
  }
  function set_tip_text($value)
  {
    return $this->_set_value("6", $value);
  }
  function tip_background()
  {
    return $this->_get_value("7");
  }
  function set_tip_background($value)
  {
    return $this->_set_value("7", $value);
  }
  function arrive_time()
  {
    return $this->_get_value("8");
  }
  function set_arrive_time($value)
  {
    return $this->_set_value("8", $value);
  }
  function start_address()
  {
    return $this->_get_value("12");
  }
  function set_start_address($value)
  {
    return $this->_set_value("12", $value);
  }
  function end_address()
  {
    return $this->_get_value("13");
  }
  function set_end_address($value)
  {
    return $this->_set_value("13", $value);
  }
  function start_time()
  {
    return $this->_get_value("14");
  }
  function set_start_time($value)
  {
    return $this->_set_value("14", $value);
  }
  function end_time()
  {
    return $this->_get_value("15");
  }
  function set_end_time($value)
  {
    return $this->_set_value("15", $value);
  }
  function price()
  {
    return $this->_get_value("16");
  }
  function set_price($value)
  {
    return $this->_set_value("16", $value);
  }
  function discount()
  {
    return $this->_get_value("17");
  }
  function set_discount($value)
  {
    return $this->_set_value("17", $value);
  }
  function instructions()
  {
    return $this->_get_value("18");
  }
  function set_instructions($value)
  {
    return $this->_set_value("18", $value);
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("19", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("19");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs"]["19"]();
    $v->set_value($value);
    $this->_set_arr_value("19", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("19");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("19");
  }
  function get_send_locations()
  {
    return $this->_get_value("19");
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("20", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("20");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["Bus_Routes_Legs"]["20"]();
    $v->set_value($value);
    $this->_set_arr_value("20", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("20");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("20");
  }
  function tip_label()
  {
    return $this->_get_value("21");
  }
  function set_tip_label($value)
  {
    return $this->_set_value("21", $value);
  }
  function tip_label_background()
  {
    return $this->_get_value("22");
  }
  function set_tip_label_background($value)
  {
    return $this->_set_value("22", $value);
  }
  function tip_rtbus()
  {
    return $this->_get_value("23");
  }
  function set_tip_rtbus($value)
  {
    return $this->_set_value("23", $value);
  }
  function rtbus_update_time()
  {
    return $this->_get_value("24");
  }
  function set_rtbus_update_time($value)
  {
    return $this->_set_value("24", $value);
  }
  function traffic_type()
  {
    return $this->_get_value("25");
  }
  function set_traffic_type($value)
  {
    return $this->_set_value("25", $value);
  }
  function start_pano()
  {
    return $this->_get_value("26");
  }
  function set_start_pano($value)
  {
    return $this->_set_value("26", $value);
  }
  function end_pano()
  {
    return $this->_get_value("27");
  }
  function set_end_pano($value)
  {
    return $this->_set_value("27", $value);
  }
  function line_price($offset)
  {
    return $this->_get_arr_value("28", $offset);
  }
  function add_line_price()
  {
    return $this->_add_arr_value("28");
  }
  function set_line_price($index, $value)
  {
    $this->_set_arr_value("28", $index, $value);
  }
  function set_all_line_prices($values)
  {
    return $this->_set_arr_values("28", $values);
  }
  function remove_last_line_price()
  {
    $this->_remove_last_arr_value("28");
  }
  function line_prices_size()
  {
    return $this->_get_arr_size("28");
  }
  function get_line_prices()
  {
    return $this->_get_value("28");
  }
}
class Bus_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Routes"]["1"] = "Bus_Routes_Legs";
    $this->values["1"] = array();
    self::$fieldNames["Bus_Routes"]["1"] = "legs";
  }
  function legs($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_legs()
  {
    return $this->_add_arr_value("1");
  }
  function set_legs($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_legss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_legs()
  {
    $this->_remove_last_arr_value("1");
  }
  function legss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_legss()
  {
    return $this->_get_value("1");
  }
}
class Bus_Option_Start_StationList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Option_Start_StationList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Option_Start_StationList"]["1"] = "station_name";
    self::$fields["Bus_Option_Start_StationList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Option_Start_StationList"]["2"] = "station_uid";
  }
  function station_name()
  {
    return $this->_get_value("1");
  }
  function set_station_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function station_uid()
  {
    return $this->_get_value("2");
  }
  function set_station_uid($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Option_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Option_Start"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Option_Start"]["1"] = "pt";
    self::$fields["Bus_Option_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Option_Start"]["2"] = "wd";
    self::$fields["Bus_Option_Start"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Option_Start"]["3"] = "uid";
    self::$fields["Bus_Option_Start"]["4"] = "PBSignedInt";
    $this->values["4"] = array();
    self::$fieldNames["Bus_Option_Start"]["4"] = "spt";
    self::$fields["Bus_Option_Start"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Option_Start"]["5"] = "rgc_name";
    self::$fields["Bus_Option_Start"]["6"] = "Bus_Option_Start_StationList";
    $this->values["6"] = array();
    self::$fieldNames["Bus_Option_Start"]["6"] = "station_list";
  }
  function pt()
  {
    return $this->_get_value("1");
  }
  function set_pt($value)
  {
    return $this->_set_value("1", $value);
  }
  function wd()
  {
    return $this->_get_value("2");
  }
  function set_wd($value)
  {
    return $this->_set_value("2", $value);
  }
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function spt($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_spt($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_spt($index, $value)
  {
    $v = new self::$fields["Bus_Option_Start"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_spt()
  {
    $this->_remove_last_arr_value("4");
  }
  function spts_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_spts()
  {
    return $this->_get_value("4");
  }
  function rgc_name()
  {
    return $this->_get_value("5");
  }
  function set_rgc_name($value)
  {
    return $this->_set_value("5", $value);
  }
  function station_list($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_station_list()
  {
    return $this->_add_arr_value("6");
  }
  function set_station_list($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_station_lists($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_station_list()
  {
    $this->_remove_last_arr_value("6");
  }
  function station_lists_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_station_lists()
  {
    return $this->_get_value("6");
  }
}
class Bus_Option_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Option_End"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Option_End"]["1"] = "pt";
    self::$fields["Bus_Option_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Option_End"]["2"] = "wd";
    self::$fields["Bus_Option_End"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Option_End"]["3"] = "uid";
    self::$fields["Bus_Option_End"]["4"] = "PBSignedInt";
    $this->values["4"] = array();
    self::$fieldNames["Bus_Option_End"]["4"] = "spt";
    self::$fields["Bus_Option_End"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Option_End"]["5"] = "rgc_name";
    self::$fields["Bus_Option_End"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Option_End"]["6"] = "county_id";
  }
  function pt()
  {
    return $this->_get_value("1");
  }
  function set_pt($value)
  {
    return $this->_set_value("1", $value);
  }
  function wd()
  {
    return $this->_get_value("2");
  }
  function set_wd($value)
  {
    return $this->_set_value("2", $value);
  }
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function spt($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_spt($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_spt($index, $value)
  {
    $v = new self::$fields["Bus_Option_End"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_spt()
  {
    $this->_remove_last_arr_value("4");
  }
  function spts_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_spts()
  {
    return $this->_get_value("4");
  }
  function rgc_name()
  {
    return $this->_get_value("5");
  }
  function set_rgc_name($value)
  {
    return $this->_set_value("5", $value);
  }
  function county_id()
  {
    return $this->_get_value("6");
  }
  function set_county_id($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Bus_Option_DataProvider extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Option_DataProvider"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Option_DataProvider"]["1"] = "name";
    self::$fields["Bus_Option_DataProvider"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Option_DataProvider"]["2"] = "tel";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function tel()
  {
    return $this->_get_value("2");
  }
  function set_tel($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Option"]["1"] = "total";
    self::$fields["Bus_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Option"]["2"] = "exptime";
    self::$fields["Bus_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Bus_Option"]["3"] = "sy";
    self::$fields["Bus_Option"]["4"] = "Bus_Option_Start";
    $this->values["4"] = "";
    self::$fieldNames["Bus_Option"]["4"] = "start";
    self::$fields["Bus_Option"]["5"] = "Bus_Option_End";
    $this->values["5"] = "";
    self::$fieldNames["Bus_Option"]["5"] = "end";
    self::$fields["Bus_Option"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Bus_Option"]["6"] = "csy";
    self::$fields["Bus_Option"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Bus_Option"]["7"] = "cty";
    self::$fields["Bus_Option"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Bus_Option"]["8"] = "inter_city";
    self::$fields["Bus_Option"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Bus_Option"]["9"] = "pn";
    self::$fields["Bus_Option"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Bus_Option"]["10"] = "rn";
    self::$fields["Bus_Option"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["Bus_Option"]["11"] = "fy";
    self::$fields["Bus_Option"]["12"] = "PBString";
    $this->values["12"] = array();
    self::$fieldNames["Bus_Option"]["12"] = "start_times";
    self::$fields["Bus_Option"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Bus_Option"]["13"] = "ic_start";
    self::$fields["Bus_Option"]["14"] = "Bus_Option_DataProvider";
    $this->values["14"] = array();
    self::$fieldNames["Bus_Option"]["14"] = "data_provider";
  }
  function total()
  {
    return $this->_get_value("1");
  }
  function set_total($value)
  {
    return $this->_set_value("1", $value);
  }
  function exptime()
  {
    return $this->_get_value("2");
  }
  function set_exptime($value)
  {
    return $this->_set_value("2", $value);
  }
  function sy()
  {
    return $this->_get_value("3");
  }
  function set_sy($value)
  {
    return $this->_set_value("3", $value);
  }
  function start()
  {
    return $this->_get_value("4");
  }
  function set_start($value)
  {
    return $this->_set_value("4", $value);
  }
  function end()
  {
    return $this->_get_value("5");
  }
  function set_end($value)
  {
    return $this->_set_value("5", $value);
  }
  function csy()
  {
    return $this->_get_value("6");
  }
  function set_csy($value)
  {
    return $this->_set_value("6", $value);
  }
  function cty()
  {
    return $this->_get_value("7");
  }
  function set_cty($value)
  {
    return $this->_set_value("7", $value);
  }
  function inter_city()
  {
    return $this->_get_value("8");
  }
  function set_inter_city($value)
  {
    return $this->_set_value("8", $value);
  }
  function pn()
  {
    return $this->_get_value("9");
  }
  function set_pn($value)
  {
    return $this->_set_value("9", $value);
  }
  function rn()
  {
    return $this->_get_value("10");
  }
  function set_rn($value)
  {
    return $this->_set_value("10", $value);
  }
  function fy()
  {
    return $this->_get_value("11");
  }
  function set_fy($value)
  {
    return $this->_set_value("11", $value);
  }
  function start_times($offset)
  {
    $v = $this->_get_arr_value("12", $offset);
    return $v->get_value();
  }
  function append_start_times($value)
  {
    $v = $this->_add_arr_value("12");
    $v->set_value($value);
  }
  function set_start_times($index, $value)
  {
    $v = new self::$fields["Bus_Option"]["12"]();
    $v->set_value($value);
    $this->_set_arr_value("12", $index, $v);
  }
  function remove_last_start_times()
  {
    $this->_remove_last_arr_value("12");
  }
  function start_timess_size()
  {
    return $this->_get_arr_size("12");
  }
  function get_start_timess()
  {
    return $this->_get_value("12");
  }
  function ic_start()
  {
    return $this->_get_value("13");
  }
  function set_ic_start($value)
  {
    return $this->_set_value("13", $value);
  }
  function data_provider($offset)
  {
    return $this->_get_arr_value("14", $offset);
  }
  function add_data_provider()
  {
    return $this->_add_arr_value("14");
  }
  function set_data_provider($index, $value)
  {
    $this->_set_arr_value("14", $index, $value);
  }
  function set_all_data_providers($values)
  {
    return $this->_set_arr_values("14", $values);
  }
  function remove_last_data_provider()
  {
    $this->_remove_last_arr_value("14");
  }
  function data_providers_size()
  {
    return $this->_get_arr_size("14");
  }
  function get_data_providers()
  {
    return $this->_get_value("14");
  }
}
class Bus_Zhuanche_Button extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Zhuanche_Button"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Zhuanche_Button"]["1"] = "text";
    self::$fields["Bus_Zhuanche_Button"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Zhuanche_Button"]["2"] = "params";
  }
  function text()
  {
    return $this->_get_value("1");
  }
  function set_text($value)
  {
    return $this->_set_value("1", $value);
  }
  function params()
  {
    return $this->_get_value("2");
  }
  function set_params($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus_Zhuanche extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus_Zhuanche"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Bus_Zhuanche"]["1"] = "fee_desc";
    self::$fields["Bus_Zhuanche"]["2"] = "Bus_Zhuanche_Button";
    $this->values["2"] = "";
    self::$fieldNames["Bus_Zhuanche"]["2"] = "button";
  }
  function fee_desc()
  {
    return $this->_get_value("1");
  }
  function set_fee_desc($value)
  {
    return $this->_set_value("1", $value);
  }
  function button()
  {
    return $this->_get_value("2");
  }
  function set_button($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Bus extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Bus"]["1"] = "Bus_Taxi";
    $this->values["1"] = "";
    self::$fieldNames["Bus"]["1"] = "taxi";
    self::$fields["Bus"]["2"] = "Bus_CurrentCity";
    $this->values["2"] = "";
    self::$fieldNames["Bus"]["2"] = "current_city";
    self::$fields["Bus"]["3"] = "Bus_Routes";
    $this->values["3"] = array();
    self::$fieldNames["Bus"]["3"] = "routes";
    self::$fields["Bus"]["4"] = "Bus_Option";
    $this->values["4"] = "";
    self::$fieldNames["Bus"]["4"] = "option";
    self::$fields["Bus"]["5"] = "Bus_Zhuanche";
    $this->values["5"] = "";
    self::$fieldNames["Bus"]["5"] = "zhuanche";
  }
  function taxi()
  {
    return $this->_get_value("1");
  }
  function set_taxi($value)
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
  function routes($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_routes()
  {
    return $this->_add_arr_value("3");
  }
  function set_routes($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_routess($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_routes()
  {
    $this->_remove_last_arr_value("3");
  }
  function routess_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_routess()
  {
    return $this->_get_value("3");
  }
  function option()
  {
    return $this->_get_value("4");
  }
  function set_option($value)
  {
    return $this->_set_value("4", $value);
  }
  function zhuanche()
  {
    return $this->_get_value("5");
  }
  function set_zhuanche($value)
  {
    return $this->_set_value("5", $value);
  }
}
?>