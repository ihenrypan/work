<?php
class Walk_Taxi_Detail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Taxi_Detail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Taxi_Detail"]["1"] = "desc";
    self::$fields["Walk_Taxi_Detail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Taxi_Detail"]["2"] = "km_price";
    self::$fields["Walk_Taxi_Detail"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Taxi_Detail"]["3"] = "start_price";
    self::$fields["Walk_Taxi_Detail"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Taxi_Detail"]["4"] = "total_price";
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
class Walk_Taxi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Taxi"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Taxi"]["1"] = "distance";
    self::$fields["Walk_Taxi"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Taxi"]["2"] = "duration";
    self::$fields["Walk_Taxi"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Taxi"]["3"] = "remark";
    self::$fields["Walk_Taxi"]["4"] = "Walk_Taxi_Detail";
    $this->values["4"] = array();
    self::$fieldNames["Walk_Taxi"]["4"] = "detail";
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
class Walk_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_CurrentCity"]["1"] = "code";
    self::$fields["Walk_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_CurrentCity"]["2"] = "geo";
    self::$fields["Walk_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Walk_CurrentCity"]["3"] = "level";
    self::$fields["Walk_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Walk_CurrentCity"]["4"] = "name";
    self::$fields["Walk_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["Walk_CurrentCity"]["5"] = "sup_subway";
    self::$fields["Walk_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Walk_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["Walk_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Walk_CurrentCity"]["7"] = "uid";
    self::$fields["Walk_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["Walk_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["Walk_CurrentCity"]["8"]();
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
class Walk_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Routes_Legs_Steps"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["1"] = "distance";
    self::$fields["Walk_Routes_Legs_Steps"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["2"] = "duration";
    self::$fields["Walk_Routes_Legs_Steps"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["3"] = "end_location";
    self::$fields["Walk_Routes_Legs_Steps"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["4"] = "start_location";
    self::$fields["Walk_Routes_Legs_Steps"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["5"] = "instructions";
    self::$fields["Walk_Routes_Legs_Steps"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["6"] = "path";
    self::$fields["Walk_Routes_Legs_Steps"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["7"] = "direction";
    self::$fields["Walk_Routes_Legs_Steps"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["8"] = "end_instructions";
    self::$fields["Walk_Routes_Legs_Steps"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["9"] = "start_instructions";
    self::$fields["Walk_Routes_Legs_Steps"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Walk_Routes_Legs_Steps"]["10"] = "turn";
    self::$fields["Walk_Routes_Legs_Steps"]["11"] = "PBSignedInt";
    $this->values["11"] = array();
    self::$fieldNames["Walk_Routes_Legs_Steps"]["11"] = "send_location";
    self::$fields["Walk_Routes_Legs_Steps"]["12"] = "PBSignedInt";
    $this->values["12"] = array();
    self::$fieldNames["Walk_Routes_Legs_Steps"]["12"] = "sstart_location";
    self::$fields["Walk_Routes_Legs_Steps"]["13"] = "PBSignedInt";
    $this->values["13"] = array();
    self::$fieldNames["Walk_Routes_Legs_Steps"]["13"] = "spath";
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
    $v = new self::$fields["Walk_Routes_Legs_Steps"]["11"]();
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
    $v = new self::$fields["Walk_Routes_Legs_Steps"]["12"]();
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
    $v = new self::$fields["Walk_Routes_Legs_Steps"]["13"]();
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
class Walk_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Routes_Legs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Routes_Legs"]["1"] = "distance";
    self::$fields["Walk_Routes_Legs"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Routes_Legs"]["2"] = "duration";
    self::$fields["Walk_Routes_Legs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Routes_Legs"]["3"] = "end_location";
    self::$fields["Walk_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Routes_Legs"]["4"] = "start_location";
    self::$fields["Walk_Routes_Legs"]["5"] = "Walk_Routes_Legs_Steps";
    $this->values["5"] = array();
    self::$fieldNames["Walk_Routes_Legs"]["5"] = "steps";
    self::$fields["Walk_Routes_Legs"]["6"] = "PBSignedInt";
    $this->values["6"] = array();
    self::$fieldNames["Walk_Routes_Legs"]["6"] = "send_location";
    self::$fields["Walk_Routes_Legs"]["7"] = "PBSignedInt";
    $this->values["7"] = array();
    self::$fieldNames["Walk_Routes_Legs"]["7"] = "sstart_location";
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
    $v = new self::$fields["Walk_Routes_Legs"]["6"]();
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
    $v = new self::$fields["Walk_Routes_Legs"]["7"]();
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
class Walk_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Routes"]["1"] = "Walk_Routes_Legs";
    $this->values["1"] = array();
    self::$fieldNames["Walk_Routes"]["1"] = "legs";
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
class Walk_Option_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Option_Start"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Option_Start"]["1"] = "pt";
    self::$fields["Walk_Option_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Option_Start"]["2"] = "wd";
    self::$fields["Walk_Option_Start"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Option_Start"]["3"] = "uid";
    self::$fields["Walk_Option_Start"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Option_Start"]["4"] = "bus_stop";
    self::$fields["Walk_Option_Start"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Walk_Option_Start"]["5"] = "spt";
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
    $v = new self::$fields["Walk_Option_Start"]["5"]();
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
class Walk_Option_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Option_End"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Option_End"]["1"] = "pt";
    self::$fields["Walk_Option_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Option_End"]["2"] = "wd";
    self::$fields["Walk_Option_End"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Option_End"]["3"] = "uid";
    self::$fields["Walk_Option_End"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Option_End"]["4"] = "bus_stop";
    self::$fields["Walk_Option_End"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["Walk_Option_End"]["5"] = "spt";
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
    $v = new self::$fields["Walk_Option_End"]["5"]();
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
class Walk_Option_StartCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Option_StartCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Option_StartCity"]["1"] = "code";
    self::$fields["Walk_Option_StartCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Option_StartCity"]["2"] = "cname";
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
class Walk_Option_EndCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Option_EndCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Option_EndCity"]["1"] = "code";
    self::$fields["Walk_Option_EndCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Option_EndCity"]["2"] = "cname";
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
class Walk_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Option"]["1"] = "total";
    self::$fields["Walk_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Walk_Option"]["2"] = "exptime";
    self::$fields["Walk_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Walk_Option"]["3"] = "sy";
    self::$fields["Walk_Option"]["4"] = "Walk_Option_Start";
    $this->values["4"] = "";
    self::$fieldNames["Walk_Option"]["4"] = "start";
    self::$fields["Walk_Option"]["5"] = "Walk_Option_End";
    $this->values["5"] = array();
    self::$fieldNames["Walk_Option"]["5"] = "end";
    self::$fields["Walk_Option"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Walk_Option"]["6"] = "avoid_jam";
    self::$fields["Walk_Option"]["7"] = "Walk_Option_StartCity";
    $this->values["7"] = "";
    self::$fieldNames["Walk_Option"]["7"] = "start_city";
    self::$fields["Walk_Option"]["8"] = "Walk_Option_EndCity";
    $this->values["8"] = array();
    self::$fieldNames["Walk_Option"]["8"] = "end_city";
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
  function end($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_end()
  {
    return $this->_add_arr_value("5");
  }
  function set_end($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_ends($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_end()
  {
    $this->_remove_last_arr_value("5");
  }
  function ends_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_ends()
  {
    return $this->_get_value("5");
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
class Walk_Traffic_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Traffic_Routes_Legs_Steps"]["1"] = "PBInt";
    $this->values["1"] = array();
    self::$fieldNames["Walk_Traffic_Routes_Legs_Steps"]["1"] = "end";
    self::$fields["Walk_Traffic_Routes_Legs_Steps"]["2"] = "PBInt";
    $this->values["2"] = array();
    self::$fieldNames["Walk_Traffic_Routes_Legs_Steps"]["2"] = "status";
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
    $v = new self::$fields["Walk_Traffic_Routes_Legs_Steps"]["1"]();
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
    $v = new self::$fields["Walk_Traffic_Routes_Legs_Steps"]["2"]();
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
class Walk_Traffic_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Traffic_Routes_Legs"]["1"] = "Walk_Traffic_Routes_Legs_Steps";
    $this->values["1"] = array();
    self::$fieldNames["Walk_Traffic_Routes_Legs"]["1"] = "steps";
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
class Walk_Traffic_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Traffic_Routes"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Walk_Traffic_Routes"]["1"] = "diges";
    self::$fields["Walk_Traffic_Routes"]["2"] = "Walk_Traffic_Routes_Legs";
    $this->values["2"] = array();
    self::$fieldNames["Walk_Traffic_Routes"]["2"] = "legs";
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
class Walk_Traffic extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk_Traffic"]["1"] = "Walk_Traffic_Routes";
    $this->values["1"] = array();
    self::$fieldNames["Walk_Traffic"]["1"] = "routes";
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
class Walk extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Walk"]["1"] = "Walk_Taxi";
    $this->values["1"] = "";
    self::$fieldNames["Walk"]["1"] = "taxi";
    self::$fields["Walk"]["2"] = "Walk_CurrentCity";
    $this->values["2"] = "";
    self::$fieldNames["Walk"]["2"] = "current_city";
    self::$fields["Walk"]["3"] = "Walk_Routes";
    $this->values["3"] = array();
    self::$fieldNames["Walk"]["3"] = "routes";
    self::$fields["Walk"]["4"] = "Walk_Option";
    $this->values["4"] = "";
    self::$fieldNames["Walk"]["4"] = "option";
    self::$fields["Walk"]["5"] = "Walk_Traffic";
    $this->values["5"] = "";
    self::$fieldNames["Walk"]["5"] = "traffic";
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