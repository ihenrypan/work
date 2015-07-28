<?php
class ScopePlan_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ScopePlan_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ScopePlan_Option"]["1"] = "error";
    self::$fields["ScopePlan_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ScopePlan_Option"]["2"] = "total";
    self::$fields["ScopePlan_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ScopePlan_Option"]["3"] = "pn";
    self::$fields["ScopePlan_Option"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["ScopePlan_Option"]["4"] = "rn";
    self::$fields["ScopePlan_Option"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["ScopePlan_Option"]["5"] = "sy";
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
  function pn()
  {
    return $this->_get_value("3");
  }
  function set_pn($value)
  {
    return $this->_set_value("3", $value);
  }
  function rn()
  {
    return $this->_get_value("4");
  }
  function set_rn($value)
  {
    return $this->_set_value("4", $value);
  }
  function sy()
  {
    return $this->_get_value("5");
  }
  function set_sy($value)
  {
    return $this->_set_value("5", $value);
  }
}
class ScopePlan_Content_Routes_Legs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ScopePlan_Content_Routes_Legs"]["1"] = "PB64Bit";
    $this->values["1"] = array();
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["1"] = "start_location";
    self::$fields["ScopePlan_Content_Routes_Legs"]["2"] = "PB64Bit";
    $this->values["2"] = array();
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["2"] = "end_location";
    self::$fields["ScopePlan_Content_Routes_Legs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["3"] = "start_name";
    self::$fields["ScopePlan_Content_Routes_Legs"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["4"] = "end_name";
    self::$fields["ScopePlan_Content_Routes_Legs"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["5"] = "distance";
    self::$fields["ScopePlan_Content_Routes_Legs"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["6"] = "duration";
    self::$fields["ScopePlan_Content_Routes_Legs"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["7"] = "uid";
    self::$fields["ScopePlan_Content_Routes_Legs"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["8"] = "priority";
    self::$fields["ScopePlan_Content_Routes_Legs"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["9"] = "description";
    self::$fields["ScopePlan_Content_Routes_Legs"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["10"] = "type";
    self::$fields["ScopePlan_Content_Routes_Legs"]["11"] = "PB64Bit";
    $this->values["11"] = array();
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["11"] = "spath";
    self::$fields["ScopePlan_Content_Routes_Legs"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["12"] = "audio_url";
    self::$fields["ScopePlan_Content_Routes_Legs"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["13"] = "text";
    self::$fields["ScopePlan_Content_Routes_Legs"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["ScopePlan_Content_Routes_Legs"]["14"] = "color";
  }
  function start_location($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_start_location($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_start_location($index, $value)
  {
    $v = new self::$fields["ScopePlan_Content_Routes_Legs"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_start_location()
  {
    $this->_remove_last_arr_value("1");
  }
  function start_locations_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_start_locations()
  {
    return $this->_get_value("1");
  }
  function end_location($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_end_location($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_end_location($index, $value)
  {
    $v = new self::$fields["ScopePlan_Content_Routes_Legs"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_end_location()
  {
    $this->_remove_last_arr_value("2");
  }
  function end_locations_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_end_locations()
  {
    return $this->_get_value("2");
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
  function uid()
  {
    return $this->_get_value("7");
  }
  function set_uid($value)
  {
    return $this->_set_value("7", $value);
  }
  function priority()
  {
    return $this->_get_value("8");
  }
  function set_priority($value)
  {
    return $this->_set_value("8", $value);
  }
  function description()
  {
    return $this->_get_value("9");
  }
  function set_description($value)
  {
    return $this->_set_value("9", $value);
  }
  function type()
  {
    return $this->_get_value("10");
  }
  function set_type($value)
  {
    return $this->_set_value("10", $value);
  }
  function spath($offset)
  {
    $v = $this->_get_arr_value("11", $offset);
    return $v->get_value();
  }
  function append_spath($value)
  {
    $v = $this->_add_arr_value("11");
    $v->set_value($value);
  }
  function set_spath($index, $value)
  {
    $v = new self::$fields["ScopePlan_Content_Routes_Legs"]["11"]();
    $v->set_value($value);
    $this->_set_arr_value("11", $index, $v);
  }
  function remove_last_spath()
  {
    $this->_remove_last_arr_value("11");
  }
  function spaths_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_spaths()
  {
    return $this->_get_value("11");
  }
  function audio_url()
  {
    return $this->_get_value("12");
  }
  function set_audio_url($value)
  {
    return $this->_set_value("12", $value);
  }
  function text()
  {
    return $this->_get_value("13");
  }
  function set_text($value)
  {
    return $this->_set_value("13", $value);
  }
  function color()
  {
    return $this->_get_value("14");
  }
  function set_color($value)
  {
    return $this->_set_value("14", $value);
  }
}
class ScopePlan_Content_Routes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ScopePlan_Content_Routes"]["1"] = "ScopePlan_Content_Routes_Legs";
    $this->values["1"] = array();
    self::$fieldNames["ScopePlan_Content_Routes"]["1"] = "legs";
    self::$fields["ScopePlan_Content_Routes"]["2"] = "PBString";
    $this->values["2"] = array();
    self::$fieldNames["ScopePlan_Content_Routes"]["2"] = "tags";
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
  function tags($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_tags($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_tags($index, $value)
  {
    $v = new self::$fields["ScopePlan_Content_Routes"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_tags()
  {
    $this->_remove_last_arr_value("2");
  }
  function tagss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_tagss()
  {
    return $this->_get_value("2");
  }
}
class ScopePlan_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ScopePlan_Content"]["1"] = "ScopePlan_Content_Routes";
    $this->values["1"] = array();
    self::$fieldNames["ScopePlan_Content"]["1"] = "routes";
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
class ScopePlan extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ScopePlan"]["1"] = "ScopePlan_Option";
    $this->values["1"] = "";
    self::$fieldNames["ScopePlan"]["1"] = "option";
    self::$fields["ScopePlan"]["2"] = "ScopePlan_Content";
    $this->values["2"] = "";
    self::$fieldNames["ScopePlan"]["2"] = "content";
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
}
?>