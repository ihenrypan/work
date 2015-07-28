<?php
class IndoorNavi_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["IndoorNavi_Option"]["1"] = "error";
    self::$fields["IndoorNavi_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["IndoorNavi_Option"]["2"] = "total";
    self::$fields["IndoorNavi_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["IndoorNavi_Option"]["3"] = "type";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
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
  function type()
  {
    return $this->_get_value("3");
  }
  function set_type($value)
  {
    return $this->_set_value("3", $value);
  }
}
class IndoorNavi_Routes_Legs_Steps_Pois extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi_Routes_Legs_Steps_Pois"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps_Pois"]["1"] = "name";
    self::$fields["IndoorNavi_Routes_Legs_Steps_Pois"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps_Pois"]["2"] = "type";
    self::$fields["IndoorNavi_Routes_Legs_Steps_Pois"]["3"] = "PB64Bit";
    $this->values["3"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps_Pois"]["3"] = "location";
    self::$fields["IndoorNavi_Routes_Legs_Steps_Pois"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps_Pois"]["4"] = "detail";
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
  function location($offset)
  {
    $v = $this->_get_arr_value("3", $offset);
    return $v->get_value();
  }
  function append_location($value)
  {
    $v = $this->_add_arr_value("3");
    $v->set_value($value);
  }
  function set_location($index, $value)
  {
    $v = new self::$fields["IndoorNavi_Routes_Legs_Steps_Pois"]["3"]();
    $v->set_value($value);
    $this->_set_arr_value("3", $index, $v);
  }
  function remove_last_location()
  {
    $this->_remove_last_arr_value("3");
  }
  function locations_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_locations()
  {
    return $this->_get_value("3");
  }
  function detail()
  {
    return $this->_get_value("4");
  }
  function set_detail($value)
  {
    return $this->_set_value("4", $value);
  }
}
class IndoorNavi_Routes_Legs_Steps extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["1"] = "PB64Bit";
    $this->values["1"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["1"] = "sstart_location";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["2"] = "PB64Bit";
    $this->values["2"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["2"] = "send_location";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["3"] = "distance";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["4"] = "duration";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["5"] = "instructions";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["6"] = "type";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["7"] = "floorid";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["8"] = "PB64Bit";
    $this->values["8"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["8"] = "spath";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["9"] = "IndoorNavi_Routes_Legs_Steps_Pois";
    $this->values["9"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["9"] = "pois";
    self::$fields["IndoorNavi_Routes_Legs_Steps"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs_Steps"]["10"] = "buildingid";
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
    $v = new self::$fields["IndoorNavi_Routes_Legs_Steps"]["1"]();
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
    $v = new self::$fields["IndoorNavi_Routes_Legs_Steps"]["2"]();
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
  function distance()
  {
    return $this->_get_value("3");
  }
  function set_distance($value)
  {
    return $this->_set_value("3", $value);
  }
  function duration()
  {
    return $this->_get_value("4");
  }
  function set_duration($value)
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
  function type()
  {
    return $this->_get_value("6");
  }
  function set_type($value)
  {
    return $this->_set_value("6", $value);
  }
  function floorid()
  {
    return $this->_get_value("7");
  }
  function set_floorid($value)
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
    $v = new self::$fields["IndoorNavi_Routes_Legs_Steps"]["8"]();
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
  function pois($offset)
  {
    return $this->_get_arr_value("9", $offset);
  }
  function add_pois()
  {
    return $this->_add_arr_value("9");
  }
  function set_pois($index, $value)
  {
    $this->_set_arr_value("9", $index, $value);
  }
  function set_all_poiss($values)
  {
    return $this->_set_arr_values("9", $values);
  }
  function remove_last_pois()
  {
    $this->_remove_last_arr_value("9");
  }
  function poiss_size()
  {
    return $this->_get_arr_size("9");
  }
  function get_poiss()
  {
    return $this->_get_value("9");
  }
  function buildingid()
  {
    return $this->_get_value("10");
  }
  function set_buildingid($value)
  {
    return $this->_set_value("10", $value);
  }
}
class IndoorNavi_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi_Routes_Legs"]["1"] = "PB64Bit";
    $this->values["1"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs"]["1"] = "sstart_location";
    self::$fields["IndoorNavi_Routes_Legs"]["2"] = "PB64Bit";
    $this->values["2"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs"]["2"] = "send_location";
    self::$fields["IndoorNavi_Routes_Legs"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs"]["3"] = "distance";
    self::$fields["IndoorNavi_Routes_Legs"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["IndoorNavi_Routes_Legs"]["4"] = "duration";
    self::$fields["IndoorNavi_Routes_Legs"]["5"] = "IndoorNavi_Routes_Legs_Steps";
    $this->values["5"] = array();
    self::$fieldNames["IndoorNavi_Routes_Legs"]["5"] = "steps";
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
    $v = new self::$fields["IndoorNavi_Routes_Legs"]["1"]();
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
    $v = new self::$fields["IndoorNavi_Routes_Legs"]["2"]();
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
  function distance()
  {
    return $this->_get_value("3");
  }
  function set_distance($value)
  {
    return $this->_set_value("3", $value);
  }
  function duration()
  {
    return $this->_get_value("4");
  }
  function set_duration($value)
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
}
class IndoorNavi_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi_Routes"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["IndoorNavi_Routes"]["1"] = "distance";
    self::$fields["IndoorNavi_Routes"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["IndoorNavi_Routes"]["2"] = "duration";
    self::$fields["IndoorNavi_Routes"]["3"] = "IndoorNavi_Routes_Legs";
    $this->values["3"] = array();
    self::$fieldNames["IndoorNavi_Routes"]["3"] = "legs";
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
}
class IndoorNavi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorNavi"]["1"] = "IndoorNavi_Option";
    $this->values["1"] = "";
    self::$fieldNames["IndoorNavi"]["1"] = "option";
    self::$fields["IndoorNavi"]["2"] = "IndoorNavi_Routes";
    $this->values["2"] = array();
    self::$fieldNames["IndoorNavi"]["2"] = "routes";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function routes($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_routes()
  {
    return $this->_add_arr_value("2");
  }
  function set_routes($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_routess($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_routes()
  {
    $this->_remove_last_arr_value("2");
  }
  function routess_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_routess()
  {
    return $this->_get_value("2");
  }
}
?>