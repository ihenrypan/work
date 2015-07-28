<?php
class Cars_Option_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Option_Start"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Option_Start"]["1"] = "pt";
    self::$fields["Cars_Option_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Option_Start"]["2"] = "uid";
    self::$fields["Cars_Option_Start"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Cars_Option_Start"]["3"] = "wd";
    self::$fields["Cars_Option_Start"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Option_Start"]["4"] = "bus_stop";
    self::$fields["Cars_Option_Start"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Cars_Option_Start"]["5"] = "spt";
  }
  function pt()
  {
    return $this->_get_value("1");
  }
  function set_pt($value)
  {
    return $this->_set_value("1", $value);
  }
  function uid()
  {
    return $this->_get_value("2");
  }
  function set_uid($value)
  {
    return $this->_set_value("2", $value);
  }
  function wd()
  {
    return $this->_get_value("3");
  }
  function set_wd($value)
  {
    return $this->_set_value("3", $value);
  }
  function bus_stop()
  {
    return $this->_get_value("4");
  }
  function set_bus_stop($value)
  {
    return $this->_set_value("4", $value);
  }
  function spt($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_spt($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_spt($index, $value)
  {
    $v = new self::$fields["Cars_Option_Start"]["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_spt()
  {
    $this->_remove_last_arr_value("5");
  }
  function spts_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_spts()
  {
    return $this->_get_value("5");
  }
}
class Cars_Option_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Option_End"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Option_End"]["1"] = "pt";
    self::$fields["Cars_Option_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Option_End"]["2"] = "uid";
    self::$fields["Cars_Option_End"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Cars_Option_End"]["3"] = "wd";
    self::$fields["Cars_Option_End"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Option_End"]["4"] = "bus_stop";
    self::$fields["Cars_Option_End"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Cars_Option_End"]["5"] = "spt";
  }
  function pt()
  {
    return $this->_get_value("1");
  }
  function set_pt($value)
  {
    return $this->_set_value("1", $value);
  }
  function uid()
  {
    return $this->_get_value("2");
  }
  function set_uid($value)
  {
    return $this->_set_value("2", $value);
  }
  function wd()
  {
    return $this->_get_value("3");
  }
  function set_wd($value)
  {
    return $this->_set_value("3", $value);
  }
  function bus_stop()
  {
    return $this->_get_value("4");
  }
  function set_bus_stop($value)
  {
    return $this->_set_value("4", $value);
  }
  function spt($offset)
  {
    $v = $this->_get_arr_value("5", $offset);
    return $v->get_value();
  }
  function append_spt($value)
  {
    $v = $this->_add_arr_value("5");
    $v->set_value($value);
  }
  function set_spt($index, $value)
  {
    $v = new self::$fields["Cars_Option_End"]["5"]();
    $v->set_value($value);
    $this->_set_arr_value("5", $index, $v);
  }
  function remove_last_spt()
  {
    $this->_remove_last_arr_value("5");
  }
  function spts_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_spts()
  {
    return $this->_get_value("5");
  }
}
class Cars_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Option"]["1"] = "avoid_jam";
    self::$fields["Cars_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Option"]["2"] = "total";
    self::$fields["Cars_Option"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Cars_Option"]["3"] = "start_name";
    self::$fields["Cars_Option"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Option"]["4"] = "end_name";
    self::$fields["Cars_Option"]["5"] = "Cars_Option_Start";
    $this->values["5"] = "";
    self::$fieldNames["Cars_Option"]["5"] = "start";
    self::$fields["Cars_Option"]["6"] = "Cars_Option_End";
    $this->values["6"] = array();
    self::$fieldNames["Cars_Option"]["6"] = "end";
    self::$fields["Cars_Option"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Cars_Option"]["7"] = "sy";
    self::$fields["Cars_Option"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Cars_Option"]["8"] = "prefer";
  }
  function avoid_jam()
  {
    return $this->_get_value("1");
  }
  function set_avoid_jam($value)
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
  function start_name()
  {
    return $this->_get_value("3");
  }
  function set_start_name($value)
  {
    return $this->_set_value("3", $value);
  }
  function end_name()
  {
    return $this->_get_value("4");
  }
  function set_end_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function start()
  {
    return $this->_get_value("5");
  }
  function set_start($value)
  {
    return $this->_set_value("5", $value);
  }
  function end($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_end()
  {
    return $this->_add_arr_value("6");
  }
  function set_end($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_ends($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_end()
  {
    $this->_remove_last_arr_value("6");
  }
  function ends_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_ends()
  {
    return $this->_get_value("6");
  }
  function sy()
  {
    return $this->_get_value("7");
  }
  function set_sy($value)
  {
    return $this->_set_value("7", $value);
  }
  function prefer()
  {
    return $this->_get_value("8");
  }
  function set_prefer($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Cars_Content_Routes_Legs_Stepis extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs_Stepis"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_Stepis"]["1"] = "n";
    self::$fields["Cars_Content_Routes_Legs_Stepis"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_Stepis"]["2"] = "s";
  }
  function n()
  {
    return $this->_get_value("1");
  }
  function set_n($value)
  {
    return $this->_set_value("1", $value);
  }
  function s()
  {
    return $this->_get_value("2");
  }
  function set_s($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content_Routes_Legs_DurationInfo_Infos extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs_DurationInfo_Infos"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationInfo_Infos"]["1"] = "index";
    self::$fields["Cars_Content_Routes_Legs_DurationInfo_Infos"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationInfo_Infos"]["2"] = "duration";
  }
  function index()
  {
    return $this->_get_value("1");
  }
  function set_index($value)
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
}
class Cars_Content_Routes_Legs_DurationInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs_DurationInfo"]["3"] = "Cars_Content_Routes_Legs_DurationInfo_Infos";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content_Routes_Legs_DurationInfo"]["3"] = "infos";
    self::$fields["Cars_Content_Routes_Legs_DurationInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationInfo"]["1"] = "interval";
    self::$fields["Cars_Content_Routes_Legs_DurationInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationInfo"]["2"] = "timestamp";
  }
  function infos($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_infos()
  {
    return $this->_add_arr_value("3");
  }
  function set_infos($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_infoss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_infos()
  {
    $this->_remove_last_arr_value("3");
  }
  function infoss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_infoss()
  {
    return $this->_get_value("3");
  }
  function interval()
  {
    return $this->_get_value("1");
  }
  function set_interval($value)
  {
    return $this->_set_value("1", $value);
  }
  function timestamp()
  {
    return $this->_get_value("2");
  }
  function set_timestamp($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content_Routes_Legs_DurationWholeday_Infos extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs_DurationWholeday_Infos"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationWholeday_Infos"]["1"] = "index";
    self::$fields["Cars_Content_Routes_Legs_DurationWholeday_Infos"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationWholeday_Infos"]["2"] = "duration";
  }
  function index()
  {
    return $this->_get_value("1");
  }
  function set_index($value)
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
}
class Cars_Content_Routes_Legs_DurationWholeday extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs_DurationWholeday"]["3"] = "Cars_Content_Routes_Legs_DurationWholeday_Infos";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content_Routes_Legs_DurationWholeday"]["3"] = "infos";
    self::$fields["Cars_Content_Routes_Legs_DurationWholeday"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationWholeday"]["1"] = "interval";
    self::$fields["Cars_Content_Routes_Legs_DurationWholeday"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs_DurationWholeday"]["2"] = "timestamp";
  }
  function infos($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_infos()
  {
    return $this->_add_arr_value("3");
  }
  function set_infos($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_infoss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_infos()
  {
    $this->_remove_last_arr_value("3");
  }
  function infoss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_infoss()
  {
    return $this->_get_value("3");
  }
  function interval()
  {
    return $this->_get_value("1");
  }
  function set_interval($value)
  {
    return $this->_set_value("1", $value);
  }
  function timestamp()
  {
    return $this->_get_value("2");
  }
  function set_timestamp($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_Legs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs"]["1"] = "distance";
    self::$fields["Cars_Content_Routes_Legs"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs"]["2"] = "duration";
    self::$fields["Cars_Content_Routes_Legs"]["3"] = "Cars_Content_Routes_Legs_Stepis";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content_Routes_Legs"]["3"] = "stepis";
    self::$fields["Cars_Content_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs"]["4"] = "mrsl";
    self::$fields["Cars_Content_Routes_Legs"]["5"] = "Cars_Content_Routes_Legs_DurationInfo";
    $this->values["5"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs"]["5"] = "duration_info";
    self::$fields["Cars_Content_Routes_Legs"]["6"] = "Cars_Content_Routes_Legs_DurationWholeday";
    $this->values["6"] = "";
    self::$fieldNames["Cars_Content_Routes_Legs"]["6"] = "duration_wholeday";
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
  function stepis($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_stepis()
  {
    return $this->_add_arr_value("3");
  }
  function set_stepis($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_stepiss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_stepis()
  {
    $this->_remove_last_arr_value("3");
  }
  function stepiss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_stepiss()
  {
    return $this->_get_value("3");
  }
  function mrsl()
  {
    return $this->_get_value("4");
  }
  function set_mrsl($value)
  {
    return $this->_set_value("4", $value);
  }
  function duration_info()
  {
    return $this->_get_value("5");
  }
  function set_duration_info($value)
  {
    return $this->_set_value("5", $value);
  }
  function duration_wholeday()
  {
    return $this->_get_value("6");
  }
  function set_duration_wholeday($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Cars_Content_Routes_WholeCondition extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes_WholeCondition"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes_WholeCondition"]["1"] = "type";
    self::$fields["Cars_Content_Routes_WholeCondition"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes_WholeCondition"]["2"] = "length";
  }
  function type()
  {
    return $this->_get_value("1");
  }
  function set_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function length()
  {
    return $this->_get_value("2");
  }
  function set_length($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Routes"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Routes"]["1"] = "desc";
    self::$fields["Cars_Content_Routes"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Routes"]["2"] = "mrsl";
    self::$fields["Cars_Content_Routes"]["3"] = "Cars_Content_Routes_Legs";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content_Routes"]["3"] = "legs";
    self::$fields["Cars_Content_Routes"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Content_Routes"]["4"] = "traffic_condition";
    self::$fields["Cars_Content_Routes"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Cars_Content_Routes"]["5"] = "main_roads";
    self::$fields["Cars_Content_Routes"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Cars_Content_Routes"]["6"] = "toll";
    self::$fields["Cars_Content_Routes"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Cars_Content_Routes"]["7"] = "light_num";
    self::$fields["Cars_Content_Routes"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Cars_Content_Routes"]["8"] = "waiting_time";
    self::$fields["Cars_Content_Routes"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Cars_Content_Routes"]["9"] = "congestion_length";
    self::$fields["Cars_Content_Routes"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Cars_Content_Routes"]["10"] = "tab";
    self::$fields["Cars_Content_Routes"]["11"] = "Cars_Content_Routes_WholeCondition";
    $this->values["11"] = "";
    self::$fieldNames["Cars_Content_Routes"]["11"] = "whole_condition";
  }
  function desc()
  {
    return $this->_get_value("1");
  }
  function set_desc($value)
  {
    return $this->_set_value("1", $value);
  }
  function mrsl()
  {
    return $this->_get_value("2");
  }
  function set_mrsl($value)
  {
    return $this->_set_value("2", $value);
  }
  function legs($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_legs()
  {
    return $this->_add_arr_value("3");
  }
  function set_legs($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_legss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_legs()
  {
    $this->_remove_last_arr_value("3");
  }
  function legss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_legss()
  {
    return $this->_get_value("3");
  }
  function traffic_condition()
  {
    return $this->_get_value("4");
  }
  function set_traffic_condition($value)
  {
    return $this->_set_value("4", $value);
  }
  function main_roads()
  {
    return $this->_get_value("5");
  }
  function set_main_roads($value)
  {
    return $this->_set_value("5", $value);
  }
  function toll()
  {
    return $this->_get_value("6");
  }
  function set_toll($value)
  {
    return $this->_set_value("6", $value);
  }
  function light_num()
  {
    return $this->_get_value("7");
  }
  function set_light_num($value)
  {
    return $this->_set_value("7", $value);
  }
  function waiting_time()
  {
    return $this->_get_value("8");
  }
  function set_waiting_time($value)
  {
    return $this->_set_value("8", $value);
  }
  function congestion_length()
  {
    return $this->_get_value("9");
  }
  function set_congestion_length($value)
  {
    return $this->_set_value("9", $value);
  }
  function tab()
  {
    return $this->_get_value("10");
  }
  function set_tab($value)
  {
    return $this->_set_value("10", $value);
  }
  function whole_condition()
  {
    return $this->_get_value("11");
  }
  function set_whole_condition($value)
  {
    return $this->_set_value("11", $value);
  }
}
class Cars_Content_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Steps"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Steps"]["1"] = "direction";
    self::$fields["Cars_Content_Steps"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Steps"]["2"] = "distance";
    self::$fields["Cars_Content_Steps"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Cars_Content_Steps"]["3"] = "instructions";
    self::$fields["Cars_Content_Steps"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Content_Steps"]["4"] = "path";
    self::$fields["Cars_Content_Steps"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["Cars_Content_Steps"]["5"] = "turn";
    self::$fields["Cars_Content_Steps"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Cars_Content_Steps"]["6"] = "start_instructions";
    self::$fields["Cars_Content_Steps"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Cars_Content_Steps"]["7"] = "end_instructions";
    self::$fields["Cars_Content_Steps"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["Cars_Content_Steps"]["8"] = "spath";
  }
  function direction()
  {
    return $this->_get_value("1");
  }
  function set_direction($value)
  {
    return $this->_set_value("1", $value);
  }
  function distance()
  {
    return $this->_get_value("2");
  }
  function set_distance($value)
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
  function path()
  {
    return $this->_get_value("4");
  }
  function set_path($value)
  {
    return $this->_set_value("4", $value);
  }
  function turn()
  {
    return $this->_get_value("5");
  }
  function set_turn($value)
  {
    return $this->_set_value("5", $value);
  }
  function start_instructions()
  {
    return $this->_get_value("6");
  }
  function set_start_instructions($value)
  {
    return $this->_set_value("6", $value);
  }
  function end_instructions()
  {
    return $this->_get_value("7");
  }
  function set_end_instructions($value)
  {
    return $this->_set_value("7", $value);
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("8", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("8");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["Cars_Content_Steps"]["8"]();
    $v->set_value($value);
    $this->_set_arr_value("8", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("8");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_spaths()
  {
    return $this->_get_value("8");
  }
}
class Cars_Content_Stepts extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Stepts"]["1"] = "PBInt";
    $this->values["1"] = array();
    self::$fieldNames["Cars_Content_Stepts"]["1"] = "end";
    self::$fields["Cars_Content_Stepts"]["2"] = "PBInt";
    $this->values["2"] = array();
    self::$fieldNames["Cars_Content_Stepts"]["2"] = "status";
  }
  function end($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_end($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_end($index, $value)
  {
    $v = new self::$fields["Cars_Content_Stepts"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_end()
  {
    $this->_remove_last_arr_value("1");
  }
  function ends_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_ends()
  {
    return $this->_get_value("1");
  }
  function status($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_status($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_status($index, $value)
  {
    $v = new self::$fields["Cars_Content_Stepts"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_status()
  {
    $this->_remove_last_arr_value("2");
  }
  function statuss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_statuss()
  {
    return $this->_get_value("2");
  }
}
class Cars_Content_Taxis extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Taxis"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Taxis"]["1"] = "total_price";
  }
  function total_price()
  {
    return $this->_get_value("1");
  }
  function set_total_price($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Cars_Content_Traffics_Legs_Steptis extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Traffics_Legs_Steptis"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Traffics_Legs_Steptis"]["1"] = "n";
    self::$fields["Cars_Content_Traffics_Legs_Steptis"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Traffics_Legs_Steptis"]["2"] = "s";
  }
  function n()
  {
    return $this->_get_value("1");
  }
  function set_n($value)
  {
    return $this->_set_value("1", $value);
  }
  function s()
  {
    return $this->_get_value("2");
  }
  function set_s($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content_Traffics_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Traffics_Legs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Traffics_Legs"]["1"] = "distance";
    self::$fields["Cars_Content_Traffics_Legs"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_Traffics_Legs"]["2"] = "duration";
    self::$fields["Cars_Content_Traffics_Legs"]["3"] = "Cars_Content_Traffics_Legs_Steptis";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content_Traffics_Legs"]["3"] = "steptis";
    self::$fields["Cars_Content_Traffics_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Cars_Content_Traffics_Legs"]["4"] = "mrsl";
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
  function steptis($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_steptis()
  {
    return $this->_add_arr_value("3");
  }
  function set_steptis($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_steptiss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_steptis()
  {
    $this->_remove_last_arr_value("3");
  }
  function steptiss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_steptiss()
  {
    return $this->_get_value("3");
  }
  function mrsl()
  {
    return $this->_get_value("4");
  }
  function set_mrsl($value)
  {
    return $this->_set_value("4", $value);
  }
}
class Cars_Content_Traffics extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_Traffics"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_Traffics"]["1"] = "digest";
    self::$fields["Cars_Content_Traffics"]["2"] = "Cars_Content_Traffics_Legs";
    $this->values["2"] = array();
    self::$fieldNames["Cars_Content_Traffics"]["2"] = "legs";
  }
  function digest()
  {
    return $this->_get_value("1");
  }
  function set_digest($value)
  {
    return $this->_set_value("1", $value);
  }
  function legs($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_legs()
  {
    return $this->_add_arr_value("2");
  }
  function set_legs($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_legss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_legs()
  {
    $this->_remove_last_arr_value("2");
  }
  function legss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_legss()
  {
    return $this->_get_value("2");
  }
}
class Cars_Content_AcciInfos extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content_AcciInfos"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Cars_Content_AcciInfos"]["1"] = "tips";
    self::$fields["Cars_Content_AcciInfos"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Cars_Content_AcciInfos"]["2"] = "path";
  }
  function tips()
  {
    return $this->_get_value("1");
  }
  function set_tips($value)
  {
    return $this->_set_value("1", $value);
  }
  function path()
  {
    return $this->_get_value("2");
  }
  function set_path($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Cars_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars_Content"]["1"] = "Cars_Content_Routes";
    $this->values["1"] = array();
    self::$fieldNames["Cars_Content"]["1"] = "routes";
    self::$fields["Cars_Content"]["2"] = "Cars_Content_Steps";
    $this->values["2"] = array();
    self::$fieldNames["Cars_Content"]["2"] = "steps";
    self::$fields["Cars_Content"]["3"] = "Cars_Content_Stepts";
    $this->values["3"] = array();
    self::$fieldNames["Cars_Content"]["3"] = "stepts";
    self::$fields["Cars_Content"]["4"] = "Cars_Content_Taxis";
    $this->values["4"] = array();
    self::$fieldNames["Cars_Content"]["4"] = "taxis";
    self::$fields["Cars_Content"]["5"] = "Cars_Content_Traffics";
    $this->values["5"] = array();
    self::$fieldNames["Cars_Content"]["5"] = "traffics";
    self::$fields["Cars_Content"]["6"] = "Cars_Content_AcciInfos";
    $this->values["6"] = array();
    self::$fieldNames["Cars_Content"]["6"] = "acci_infos";
  }
  function routes($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_routes()
  {
    return $this->_add_arr_value("1");
  }
  function set_routes($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_routess($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_routes()
  {
    $this->_remove_last_arr_value("1");
  }
  function routess_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_routess()
  {
    return $this->_get_value("1");
  }
  function steps($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_steps()
  {
    return $this->_add_arr_value("2");
  }
  function set_steps($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_stepss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_steps()
  {
    $this->_remove_last_arr_value("2");
  }
  function stepss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_stepss()
  {
    return $this->_get_value("2");
  }
  function stepts($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_stepts()
  {
    return $this->_add_arr_value("3");
  }
  function set_stepts($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_steptss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_stepts()
  {
    $this->_remove_last_arr_value("3");
  }
  function steptss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_steptss()
  {
    return $this->_get_value("3");
  }
  function taxis($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_taxis()
  {
    return $this->_add_arr_value("4");
  }
  function set_taxis($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_taxiss($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_taxis()
  {
    $this->_remove_last_arr_value("4");
  }
  function taxiss_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_taxiss()
  {
    return $this->_get_value("4");
  }
  function traffics($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_traffics()
  {
    return $this->_add_arr_value("5");
  }
  function set_traffics($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_trafficss($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_traffics()
  {
    $this->_remove_last_arr_value("5");
  }
  function trafficss_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_trafficss()
  {
    return $this->_get_value("5");
  }
  function acci_infos($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_acci_infos()
  {
    return $this->_add_arr_value("6");
  }
  function set_acci_infos($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_acci_infoss($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_acci_infos()
  {
    $this->_remove_last_arr_value("6");
  }
  function acci_infoss_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_acci_infoss()
  {
    return $this->_get_value("6");
  }
}
class Cars extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Cars"]["1"] = "Cars_Option";
    $this->values["1"] = "";
    self::$fieldNames["Cars"]["1"] = "option";
    self::$fields["Cars"]["2"] = "Cars_Content";
    $this->values["2"] = "";
    self::$fieldNames["Cars"]["2"] = "content";
    self::$fields["Cars"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Cars"]["3"] = "test";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function content()
  {
    return $this->_get_value("2");
  }
  function set_content($value)
  {
    return $this->_set_value("2", $value);
  }
  function test()
  {
    return $this->_get_value("3");
  }
  function set_test($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>