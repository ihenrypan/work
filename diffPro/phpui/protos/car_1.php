<?php
class Car_Taxi_Detail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Taxi_Detail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Car_Taxi_Detail"]["1"] = "desc";
    self::$fields["Car_Taxi_Detail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Taxi_Detail"]["2"] = "km_price";
    self::$fields["Car_Taxi_Detail"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Taxi_Detail"]["3"] = "start_price";
    self::$fields["Car_Taxi_Detail"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Car_Taxi_Detail"]["4"] = "total_price";
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
class Car_Taxi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Taxi"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Taxi"]["1"] = "distance";
    self::$fields["Car_Taxi"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Car_Taxi"]["2"] = "duration";
    self::$fields["Car_Taxi"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Taxi"]["3"] = "remark";
    self::$fields["Car_Taxi"]["4"] = "Car_Taxi_Detail";
    $this->values["4"] = array();
    self::$fieldNames["Car_Taxi"]["4"] = "detail";
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
class Car_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_CurrentCity"]["1"] = "code";
    self::$fields["Car_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_CurrentCity"]["2"] = "geo";
    self::$fields["Car_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Car_CurrentCity"]["3"] = "level";
    self::$fields["Car_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Car_CurrentCity"]["4"] = "name";
    self::$fields["Car_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["Car_CurrentCity"]["5"] = "sup_subway";
    self::$fields["Car_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Car_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["Car_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Car_CurrentCity"]["7"] = "uid";
    self::$fields["Car_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["Car_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["Car_CurrentCity"]["8"]();
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
class Car_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Routes_Legs_Steps"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["1"] = "distance";
    self::$fields["Car_Routes_Legs_Steps"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["2"] = "duration";
    self::$fields["Car_Routes_Legs_Steps"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["3"] = "end_location";
    self::$fields["Car_Routes_Legs_Steps"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["4"] = "start_location";
    self::$fields["Car_Routes_Legs_Steps"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["5"] = "instructions";
    self::$fields["Car_Routes_Legs_Steps"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["6"] = "path";
    self::$fields["Car_Routes_Legs_Steps"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["7"] = "direction";
    self::$fields["Car_Routes_Legs_Steps"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["8"] = "end_instructions";
    self::$fields["Car_Routes_Legs_Steps"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["9"] = "start_instructions";
    self::$fields["Car_Routes_Legs_Steps"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Car_Routes_Legs_Steps"]["10"] = "turn";
    self::$fields["Car_Routes_Legs_Steps"]["11"] = "PBSignedInt";
    $this->values["11"] = array();
    self::$fieldNames["Car_Routes_Legs_Steps"]["11"] = "send_location";
    self::$fields["Car_Routes_Legs_Steps"]["12"] = "PBSignedInt";
    $this->values["12"] = array();
    self::$fieldNames["Car_Routes_Legs_Steps"]["12"] = "sstart_location";
    self::$fields["Car_Routes_Legs_Steps"]["13"] = "PBSignedInt";
    $this->values["13"] = array();
    self::$fieldNames["Car_Routes_Legs_Steps"]["13"] = "spath";
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
  function direction()
  {
    return $this->_get_value("7");
  }
  function set_direction($value)
  {
    return $this->_set_value("7", $value);
  }
  function end_instructions()
  {
    return $this->_get_value("8");
  }
  function set_end_instructions($value)
  {
    return $this->_set_value("8", $value);
  }
  function start_instructions()
  {
    return $this->_get_value("9");
  }
  function set_start_instructions($value)
  {
    return $this->_set_value("9", $value);
  }
  function turn()
  {
    return $this->_get_value("10");
  }
  function set_turn($value)
  {
    return $this->_set_value("10", $value);
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("11", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("11");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["Car_Routes_Legs_Steps"]["11"]();
    $v->set_value($value);
    $this->_set_arr_value("11", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("11");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_send_locations()
  {
    return $this->_get_value("11");
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("12", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("12");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["Car_Routes_Legs_Steps"]["12"]();
    $v->set_value($value);
    $this->_set_arr_value("12", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("12");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("12");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("12");
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("13", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("13");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["Car_Routes_Legs_Steps"]["13"]();
    $v->set_value($value);
    $this->_set_arr_value("13", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("13");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_spaths()
  {
    return $this->_get_value("13");
  }
}
class Car_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Routes_Legs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Routes_Legs"]["1"] = "distance";
    self::$fields["Car_Routes_Legs"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Car_Routes_Legs"]["2"] = "duration";
    self::$fields["Car_Routes_Legs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Routes_Legs"]["3"] = "end_location";
    self::$fields["Car_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Car_Routes_Legs"]["4"] = "start_location";
    self::$fields["Car_Routes_Legs"]["5"] = "Car_Routes_Legs_Steps";
    $this->values["5"] = array();
    self::$fieldNames["Car_Routes_Legs"]["5"] = "steps";
    self::$fields["Car_Routes_Legs"]["6"] = "PBSignedInt";
    $this->values["6"] = array();
    self::$fieldNames["Car_Routes_Legs"]["6"] = "send_location";
    self::$fields["Car_Routes_Legs"]["7"] = "PBSignedInt";
    $this->values["7"] = array();
    self::$fieldNames["Car_Routes_Legs"]["7"] = "sstart_location";
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
  function steps($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_steps()
  {
    return $this->_add_arr_value("5");
  }
  function set_steps($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_stepss($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_steps()
  {
    $this->_remove_last_arr_value("5");
  }
  function stepss_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_stepss()
  {
    return $this->_get_value("5");
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("6", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("6");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["Car_Routes_Legs"]["6"]();
    $v->set_value($value);
    $this->_set_arr_value("6", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("6");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_send_locations()
  {
    return $this->_get_value("6");
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("7", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("7");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["Car_Routes_Legs"]["7"]();
    $v->set_value($value);
    $this->_set_arr_value("7", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("7");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("7");
  }
}
class Car_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Routes"]["1"] = "Car_Routes_Legs";
    $this->values["1"] = array();
    self::$fieldNames["Car_Routes"]["1"] = "legs";
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
class Car_Option_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Option_Start"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Car_Option_Start"]["1"] = "pt";
    self::$fields["Car_Option_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Option_Start"]["2"] = "wd";
    self::$fields["Car_Option_Start"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Option_Start"]["3"] = "uid";
    self::$fields["Car_Option_Start"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["Car_Option_Start"]["4"] = "busstop";
    self::$fields["Car_Option_Start"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Car_Option_Start"]["5"] = "spt";
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
  function busstop()
  {
    return $this->_get_value("4");
  }
  function set_busstop($value)
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
    $v = new self::$fields["Car_Option_Start"]["5"]();
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
class Car_Option_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Option_End"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Car_Option_End"]["1"] = "pt";
    self::$fields["Car_Option_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Option_End"]["2"] = "wd";
    self::$fields["Car_Option_End"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Car_Option_End"]["3"] = "uid";
    self::$fields["Car_Option_End"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["Car_Option_End"]["4"] = "busstop";
    self::$fields["Car_Option_End"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Car_Option_End"]["5"] = "spt";
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
  function busstop()
  {
    return $this->_get_value("4");
  }
  function set_busstop($value)
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
    $v = new self::$fields["Car_Option_End"]["5"]();
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
class Car_Option_StartCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Option_StartCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Option_StartCity"]["1"] = "code";
    self::$fields["Car_Option_StartCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Option_StartCity"]["2"] = "name";
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
class Car_Option_EndCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Option_EndCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Option_EndCity"]["1"] = "code";
    self::$fields["Car_Option_EndCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Option_EndCity"]["2"] = "name";
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
class Car_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Car_Option"]["1"] = "total";
    self::$fields["Car_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Car_Option"]["2"] = "exptime";
    self::$fields["Car_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Car_Option"]["3"] = "sy";
    self::$fields["Car_Option"]["4"] = "Car_Option_Start";
    $this->values["4"] = "";
    self::$fieldNames["Car_Option"]["4"] = "start";
    self::$fields["Car_Option"]["5"] = "Car_Option_End";
    $this->values["5"] = "";
    self::$fieldNames["Car_Option"]["5"] = "end";
    self::$fields["Car_Option"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Car_Option"]["6"] = "avoid_jam";
    self::$fields["Car_Option"]["7"] = "Car_Option_StartCity";
    $this->values["7"] = "";
    self::$fieldNames["Car_Option"]["7"] = "start_city";
    self::$fields["Car_Option"]["8"] = "Car_Option_EndCity";
    $this->values["8"] = "";
    self::$fieldNames["Car_Option"]["8"] = "end_city";
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
  function avoid_jam()
  {
    return $this->_get_value("6");
  }
  function set_avoid_jam($value)
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
  function end_city()
  {
    return $this->_get_value("8");
  }
  function set_end_city($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Car_Traffic_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Traffic_Routes_Legs_Steps"]["1"] = "PBInt";
    $this->values["1"] = array();
    self::$fieldNames["Car_Traffic_Routes_Legs_Steps"]["1"] = "end";
    self::$fields["Car_Traffic_Routes_Legs_Steps"]["2"] = "PBInt";
    $this->values["2"] = array();
    self::$fieldNames["Car_Traffic_Routes_Legs_Steps"]["2"] = "status";
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
    $v = new self::$fields["Car_Traffic_Routes_Legs_Steps"]["1"]();
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
    $v = new self::$fields["Car_Traffic_Routes_Legs_Steps"]["2"]();
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
class Car_Traffic_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Traffic_Routes_Legs"]["1"] = "Car_Traffic_Routes_Legs_Steps";
    $this->values["1"] = array();
    self::$fieldNames["Car_Traffic_Routes_Legs"]["1"] = "steps";
  }
  function steps($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_steps()
  {
    return $this->_add_arr_value("1");
  }
  function set_steps($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_stepss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_steps()
  {
    $this->_remove_last_arr_value("1");
  }
  function stepss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_stepss()
  {
    return $this->_get_value("1");
  }
}
class Car_Traffic_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Traffic_Routes"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Car_Traffic_Routes"]["1"] = "diges";
    self::$fields["Car_Traffic_Routes"]["2"] = "Car_Traffic_Routes_Legs";
    $this->values["2"] = array();
    self::$fieldNames["Car_Traffic_Routes"]["2"] = "legs";
  }
  function diges()
  {
    return $this->_get_value("1");
  }
  function set_diges($value)
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
class Car_Traffic extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car_Traffic"]["1"] = "Car_Traffic_Routes";
    $this->values["1"] = array();
    self::$fieldNames["Car_Traffic"]["1"] = "routes";
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
}
class Car extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Car"]["1"] = "Car_Taxi";
    $this->values["1"] = "";
    self::$fieldNames["Car"]["1"] = "taxi";
    self::$fields["Car"]["2"] = "Car_CurrentCity";
    $this->values["2"] = "";
    self::$fieldNames["Car"]["2"] = "current_city";
    self::$fields["Car"]["3"] = "Car_Routes";
    $this->values["3"] = array();
    self::$fieldNames["Car"]["3"] = "routes";
    self::$fields["Car"]["4"] = "Car_Option";
    $this->values["4"] = "";
    self::$fieldNames["Car"]["4"] = "option";
    self::$fields["Car"]["5"] = "Car_Traffic";
    $this->values["5"] = "";
    self::$fieldNames["Car"]["5"] = "traffic";
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
  function traffic()
  {
    return $this->_get_value("5");
  }
  function set_traffic($value)
  {
    return $this->_set_value("5", $value);
  }
}
?>