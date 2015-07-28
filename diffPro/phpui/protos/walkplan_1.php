<?php
class WalkPlan_Taxi_Detail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Taxi_Detail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Taxi_Detail"]["1"] = "km_price";
    self::$fields["WalkPlan_Taxi_Detail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Taxi_Detail"]["2"] = "start_price";
    self::$fields["WalkPlan_Taxi_Detail"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Taxi_Detail"]["3"] = "total_price";
    self::$fields["WalkPlan_Taxi_Detail"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Taxi_Detail"]["4"] = "desc";
  }
  function km_price()
  {
    return $this->_get_value("1");
  }
  function set_km_price($value)
  {
    return $this->_set_value("1", $value);
  }
  function start_price()
  {
    return $this->_get_value("2");
  }
  function set_start_price($value)
  {
    return $this->_set_value("2", $value);
  }
  function total_price()
  {
    return $this->_get_value("3");
  }
  function set_total_price($value)
  {
    return $this->_set_value("3", $value);
  }
  function desc()
  {
    return $this->_get_value("4");
  }
  function set_desc($value)
  {
    return $this->_set_value("4", $value);
  }
}
class WalkPlan_Taxi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Taxi"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Taxi"]["1"] = "distance";
    self::$fields["WalkPlan_Taxi"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Taxi"]["2"] = "duration";
    self::$fields["WalkPlan_Taxi"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Taxi"]["3"] = "remark";
    self::$fields["WalkPlan_Taxi"]["4"] = "WalkPlan_Taxi_Detail";
    $this->values["4"] = array();
    self::$fieldNames["WalkPlan_Taxi"]["4"] = "detail";
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
class WalkPlan_Routes_Legs_Steps_Links extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Routes_Legs_Steps_Links"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Links"]["1"] = "id";
    self::$fields["WalkPlan_Routes_Legs_Steps_Links"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Links"]["2"] = "idx";
    self::$fields["WalkPlan_Routes_Legs_Steps_Links"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Links"]["3"] = "length";
    self::$fields["WalkPlan_Routes_Legs_Steps_Links"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Links"]["4"] = "has_panid";
    self::$fields["WalkPlan_Routes_Legs_Steps_Links"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Links"]["5"] = "link_type";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function idx()
  {
    return $this->_get_value("2");
  }
  function set_idx($value)
  {
    return $this->_set_value("2", $value);
  }
  function length()
  {
    return $this->_get_value("3");
  }
  function set_length($value)
  {
    return $this->_set_value("3", $value);
  }
  function has_panid()
  {
    return $this->_get_value("4");
  }
  function set_has_panid($value)
  {
    return $this->_set_value("4", $value);
  }
  function link_type()
  {
    return $this->_get_value("5");
  }
  function set_link_type($value)
  {
    return $this->_set_value("5", $value);
  }
}
class WalkPlan_Routes_Legs_Steps_Pois extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["1"] = "name";
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["2"] = "PBSignedInt";
    $this->values["2"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["2"] = "slocation";
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["3"] = "side";
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["4"] = "heading";
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["5"] = "pitch";
    self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps_Pois"]["6"] = "panoid";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function slocation($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_slocation($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_slocation($index, $value)
  {
    $v = new self::$fields["WalkPlan_Routes_Legs_Steps_Pois"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_slocation()
  {
    $this->_remove_last_arr_value("2");
  }
  function slocations_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_slocations()
  {
    return $this->_get_value("2");
  }
  function side()
  {
    return $this->_get_value("3");
  }
  function set_side($value)
  {
    return $this->_set_value("3", $value);
  }
  function heading()
  {
    return $this->_get_value("4");
  }
  function set_heading($value)
  {
    return $this->_set_value("4", $value);
  }
  function pitch()
  {
    return $this->_get_value("5");
  }
  function set_pitch($value)
  {
    return $this->_set_value("5", $value);
  }
  function panoid()
  {
    return $this->_get_value("6");
  }
  function set_panoid($value)
  {
    return $this->_set_value("6", $value);
  }
}
class WalkPlan_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Routes_Legs_Steps"]["13"] = "WalkPlan_Routes_Legs_Steps_Links";
    $this->values["13"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["13"] = "links";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["14"] = "WalkPlan_Routes_Legs_Steps_Pois";
    $this->values["14"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["14"] = "pois";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["1"] = "spath";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["2"] = "instructions";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["3"] = "type";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["4"] = "name";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["5"] = "first_link_end_index";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["6"] = "turn_type";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["7"] = "walk_type";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["8"] = "light";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["9"] = "circle_road";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["10"] = "road_width";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["11"] = "distance";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["12"] = "duration";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["15"] = "PBInt";
    $this->values["15"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["15"] = "direction";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["16"] = "PBInt";
    $this->values["16"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["16"] = "has_panid";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["17"] = "PBSignedInt";
    $this->values["17"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["17"] = "sstart_location";
    self::$fields["WalkPlan_Routes_Legs_Steps"]["18"] = "PBSignedInt";
    $this->values["18"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs_Steps"]["18"] = "send_location";
  }
  function links($offset)
  {
    return $this->_get_arr_value("13", $offset);
  }
  function add_links()
  {
    return $this->_add_arr_value("13");
  }
  function set_links($index, $value)
  {
    $this->_set_arr_value("13", $index, $value);
  }
  function set_all_linkss($values)
  {
    return $this->_set_arr_values("13", $values);
  }
  function remove_last_links()
  {
    $this->_remove_last_arr_value("13");
  }
  function linkss_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_linkss()
  {
    return $this->_get_value("13");
  }
  function pois($offset)
  {
    return $this->_get_arr_value("14", $offset);
  }
  function add_pois()
  {
    return $this->_add_arr_value("14");
  }
  function set_pois($index, $value)
  {
    $this->_set_arr_value("14", $index, $value);
  }
  function set_all_poiss($values)
  {
    return $this->_set_arr_values("14", $values);
  }
  function remove_last_pois()
  {
    $this->_remove_last_arr_value("14");
  }
  function poiss_size()
  {
    return $this->_get_arr_size("14");
  }
  function get_poiss()
  {
    return $this->_get_value("14");
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["WalkPlan_Routes_Legs_Steps"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("1");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_spaths()
  {
    return $this->_get_value("1");
  }
  function instructions()
  {
    return $this->_get_value("2");
  }
  function set_instructions($value)
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
  function name()
  {
    return $this->_get_value("4");
  }
  function set_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function first_link_end_index()
  {
    return $this->_get_value("5");
  }
  function set_first_link_end_index($value)
  {
    return $this->_set_value("5", $value);
  }
  function turn_type()
  {
    return $this->_get_value("6");
  }
  function set_turn_type($value)
  {
    return $this->_set_value("6", $value);
  }
  function walk_type()
  {
    return $this->_get_value("7");
  }
  function set_walk_type($value)
  {
    return $this->_set_value("7", $value);
  }
  function light()
  {
    return $this->_get_value("8");
  }
  function set_light($value)
  {
    return $this->_set_value("8", $value);
  }
  function circle_road()
  {
    return $this->_get_value("9");
  }
  function set_circle_road($value)
  {
    return $this->_set_value("9", $value);
  }
  function road_width()
  {
    return $this->_get_value("10");
  }
  function set_road_width($value)
  {
    return $this->_set_value("10", $value);
  }
  function distance()
  {
    return $this->_get_value("11");
  }
  function set_distance($value)
  {
    return $this->_set_value("11", $value);
  }
  function duration()
  {
    return $this->_get_value("12");
  }
  function set_duration($value)
  {
    return $this->_set_value("12", $value);
  }
  function direction()
  {
    return $this->_get_value("15");
  }
  function set_direction($value)
  {
    return $this->_set_value("15", $value);
  }
  function has_panid()
  {
    return $this->_get_value("16");
  }
  function set_has_panid($value)
  {
    return $this->_set_value("16", $value);
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
    $v = new self::$fields["WalkPlan_Routes_Legs_Steps"]["17"]();
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
    $v = new self::$fields["WalkPlan_Routes_Legs_Steps"]["18"]();
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
}
class WalkPlan_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Routes_Legs"]["10"] = "WalkPlan_Routes_Legs_Steps";
    $this->values["10"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs"]["10"] = "steps";
    self::$fields["WalkPlan_Routes_Legs"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs"]["1"] = "sstart_location";
    self::$fields["WalkPlan_Routes_Legs"]["2"] = "PBSignedInt";
    $this->values["2"] = array();
    self::$fieldNames["WalkPlan_Routes_Legs"]["2"] = "send_location";
    self::$fields["WalkPlan_Routes_Legs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["3"] = "start_address";
    self::$fields["WalkPlan_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["4"] = "end_address";
    self::$fields["WalkPlan_Routes_Legs"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["5"] = "distance";
    self::$fields["WalkPlan_Routes_Legs"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["6"] = "duration";
    self::$fields["WalkPlan_Routes_Legs"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["7"] = "side";
    self::$fields["WalkPlan_Routes_Legs"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["8"] = "start_dist";
    self::$fields["WalkPlan_Routes_Legs"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["WalkPlan_Routes_Legs"]["9"] = "end_dist";
  }
  function steps($offset)
  {
    return $this->_get_arr_value("10", $offset);
  }
  function add_steps()
  {
    return $this->_add_arr_value("10");
  }
  function set_steps($index, $value)
  {
    $this->_set_arr_value("10", $index, $value);
  }
  function set_all_stepss($values)
  {
    return $this->_set_arr_values("10", $values);
  }
  function remove_last_steps()
  {
    $this->_remove_last_arr_value("10");
  }
  function stepss_size()
  {
    return $this->_get_arr_size("10");
  }
  function get_stepss()
  {
    return $this->_get_value("10");
  }
  function sstart_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_sstart_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_sstart_location($index, $value)
  {
    $v = new self::$fields["WalkPlan_Routes_Legs"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_sstart_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function sstart_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_sstart_locations()
  {
    return $this->_get_value("1");
  }
  function send_location($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_send_location($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_send_location($index, $value)
  {
    $v = new self::$fields["WalkPlan_Routes_Legs"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_send_location()
  {
    $this->_remove_last_arr_value("2");
  }
  function send_locations_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_send_locations()
  {
    return $this->_get_value("2");
  }
  function start_address()
  {
    return $this->_get_value("3");
  }
  function set_start_address($value)
  {
    return $this->_set_value("3", $value);
  }
  function end_address()
  {
    return $this->_get_value("4");
  }
  function set_end_address($value)
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
  function duration()
  {
    return $this->_get_value("6");
  }
  function set_duration($value)
  {
    return $this->_set_value("6", $value);
  }
  function side()
  {
    return $this->_get_value("7");
  }
  function set_side($value)
  {
    return $this->_set_value("7", $value);
  }
  function start_dist()
  {
    return $this->_get_value("8");
  }
  function set_start_dist($value)
  {
    return $this->_set_value("8", $value);
  }
  function end_dist()
  {
    return $this->_get_value("9");
  }
  function set_end_dist($value)
  {
    return $this->_set_value("9", $value);
  }
}
class WalkPlan_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Routes"]["1"] = "WalkPlan_Routes_Legs";
    $this->values["1"] = array();
    self::$fieldNames["WalkPlan_Routes"]["1"] = "legs";
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
class WalkPlan_Option_Start extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Option_Start"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Option_Start"]["1"] = "pt";
    self::$fields["WalkPlan_Option_Start"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Option_Start"]["2"] = "wd";
    self::$fields["WalkPlan_Option_Start"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Option_Start"]["3"] = "uid";
    self::$fields["WalkPlan_Option_Start"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Option_Start"]["4"] = "bus_stop";
    self::$fields["WalkPlan_Option_Start"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["WalkPlan_Option_Start"]["5"] = "spt";
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
    $v = new self::$fields["WalkPlan_Option_Start"]["5"]();
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
class WalkPlan_Option_End extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Option_End"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Option_End"]["1"] = "pt";
    self::$fields["WalkPlan_Option_End"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Option_End"]["2"] = "wd";
    self::$fields["WalkPlan_Option_End"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Option_End"]["3"] = "uid";
    self::$fields["WalkPlan_Option_End"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Option_End"]["4"] = "bus_stop";
    self::$fields["WalkPlan_Option_End"]["5"] = "PBSignedInt";
    $this->values["5"] = array();
    self::$fieldNames["WalkPlan_Option_End"]["5"] = "spt";
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
    $v = new self::$fields["WalkPlan_Option_End"]["5"]();
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
class WalkPlan_Option_StartCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Option_StartCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Option_StartCity"]["1"] = "code";
    self::$fields["WalkPlan_Option_StartCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Option_StartCity"]["2"] = "cname";
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
class WalkPlan_Option_EndCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Option_EndCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Option_EndCity"]["1"] = "code";
    self::$fields["WalkPlan_Option_EndCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Option_EndCity"]["2"] = "cname";
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
class WalkPlan_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_Option"]["1"] = "total";
    self::$fields["WalkPlan_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_Option"]["2"] = "exptime";
    self::$fields["WalkPlan_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_Option"]["3"] = "sy";
    self::$fields["WalkPlan_Option"]["4"] = "WalkPlan_Option_Start";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_Option"]["4"] = "start";
    self::$fields["WalkPlan_Option"]["5"] = "WalkPlan_Option_End";
    $this->values["5"] = array();
    self::$fieldNames["WalkPlan_Option"]["5"] = "end";
    self::$fields["WalkPlan_Option"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["WalkPlan_Option"]["6"] = "avoid_jam";
    self::$fields["WalkPlan_Option"]["7"] = "WalkPlan_Option_StartCity";
    $this->values["7"] = "";
    self::$fieldNames["WalkPlan_Option"]["7"] = "start_city";
    self::$fields["WalkPlan_Option"]["8"] = "WalkPlan_Option_EndCity";
    $this->values["8"] = array();
    self::$fieldNames["WalkPlan_Option"]["8"] = "end_city";
    self::$fields["WalkPlan_Option"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["WalkPlan_Option"]["9"] = "dis_sy";
    self::$fields["WalkPlan_Option"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["WalkPlan_Option"]["10"] = "req_tm";
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
  function dis_sy()
  {
    return $this->_get_value("9");
  }
  function set_dis_sy($value)
  {
    return $this->_set_value("9", $value);
  }
  function req_tm()
  {
    return $this->_get_value("10");
  }
  function set_req_tm($value)
  {
    return $this->_set_value("10", $value);
  }
}
class WalkPlan_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["1"] = "code";
    self::$fields["WalkPlan_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["2"] = "geo";
    self::$fields["WalkPlan_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["3"] = "level";
    self::$fields["WalkPlan_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["4"] = "name";
    self::$fields["WalkPlan_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["5"] = "sup_subway";
    self::$fields["WalkPlan_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["WalkPlan_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["WalkPlan_CurrentCity"]["7"] = "uid";
    self::$fields["WalkPlan_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["WalkPlan_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["WalkPlan_CurrentCity"]["8"]();
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
class WalkPlan extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPlan"]["2"] = "WalkPlan_Taxi";
    $this->values["2"] = "";
    self::$fieldNames["WalkPlan"]["2"] = "taxi";
    self::$fields["WalkPlan"]["1"] = "WalkPlan_Routes";
    $this->values["1"] = array();
    self::$fieldNames["WalkPlan"]["1"] = "routes";
    self::$fields["WalkPlan"]["3"] = "WalkPlan_Option";
    $this->values["3"] = "";
    self::$fieldNames["WalkPlan"]["3"] = "option";
    self::$fields["WalkPlan"]["4"] = "WalkPlan_CurrentCity";
    $this->values["4"] = "";
    self::$fieldNames["WalkPlan"]["4"] = "current_city";
  }
  function taxi()
  {
    return $this->_get_value("2");
  }
  function set_taxi($value)
  {
    return $this->_set_value("2", $value);
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
  function option()
  {
    return $this->_get_value("3");
  }
  function set_option($value)
  {
    return $this->_set_value("3", $value);
  }
  function current_city()
  {
    return $this->_get_value("4");
  }
  function set_current_city($value)
  {
    return $this->_set_value("4", $value);
  }
}
?>