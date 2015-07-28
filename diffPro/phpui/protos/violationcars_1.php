<?php
class ViolationCars_Content_Cars_Regions extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCars_Content_Cars_Regions"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCars_Content_Cars_Regions"]["1"] = "name";
    self::$fields["ViolationCars_Content_Cars_Regions"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ViolationCars_Content_Cars_Regions"]["2"] = "city";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function city()
  {
    return $this->_get_value("2");
  }
  function set_city($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ViolationCars_Content_Cars extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCars_Content_Cars"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["1"] = "id";
    self::$fields["ViolationCars_Content_Cars"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["2"] = "city";
    self::$fields["ViolationCars_Content_Cars"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["3"] = "plate";
    self::$fields["ViolationCars_Content_Cars"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["4"] = "engine";
    self::$fields["ViolationCars_Content_Cars"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["5"] = "frame";
    self::$fields["ViolationCars_Content_Cars"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["6"] = "regist";
    self::$fields["ViolationCars_Content_Cars"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["7"] = "group";
    self::$fields["ViolationCars_Content_Cars"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["8"] = "v_count";
    self::$fields["ViolationCars_Content_Cars"]["9"] = "PB64Bit";
    $this->values["9"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["9"] = "v_money";
    self::$fields["ViolationCars_Content_Cars"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["10"] = "v_score";
    self::$fields["ViolationCars_Content_Cars"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["11"] = "brand";
    self::$fields["ViolationCars_Content_Cars"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["ViolationCars_Content_Cars"]["12"] = "is_limit";
    self::$fields["ViolationCars_Content_Cars"]["13"] = "ViolationCars_Content_Cars_Regions";
    $this->values["13"] = array();
    self::$fieldNames["ViolationCars_Content_Cars"]["13"] = "regions";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function city()
  {
    return $this->_get_value("2");
  }
  function set_city($value)
  {
    return $this->_set_value("2", $value);
  }
  function plate()
  {
    return $this->_get_value("3");
  }
  function set_plate($value)
  {
    return $this->_set_value("3", $value);
  }
  function engine()
  {
    return $this->_get_value("4");
  }
  function set_engine($value)
  {
    return $this->_set_value("4", $value);
  }
  function frame()
  {
    return $this->_get_value("5");
  }
  function set_frame($value)
  {
    return $this->_set_value("5", $value);
  }
  function regist()
  {
    return $this->_get_value("6");
  }
  function set_regist($value)
  {
    return $this->_set_value("6", $value);
  }
  function group()
  {
    return $this->_get_value("7");
  }
  function set_group($value)
  {
    return $this->_set_value("7", $value);
  }
  function v_count()
  {
    return $this->_get_value("8");
  }
  function set_v_count($value)
  {
    return $this->_set_value("8", $value);
  }
  function v_money()
  {
    return $this->_get_value("9");
  }
  function set_v_money($value)
  {
    return $this->_set_value("9", $value);
  }
  function v_score()
  {
    return $this->_get_value("10");
  }
  function set_v_score($value)
  {
    return $this->_set_value("10", $value);
  }
  function brand()
  {
    return $this->_get_value("11");
  }
  function set_brand($value)
  {
    return $this->_set_value("11", $value);
  }
  function is_limit()
  {
    return $this->_get_value("12");
  }
  function set_is_limit($value)
  {
    return $this->_set_value("12", $value);
  }
  function regions($offset)
  {
    return $this->_get_arr_value("13", $offset);
  }
  function add_regions()
  {
    return $this->_add_arr_value("13");
  }
  function set_regions($index, $value)
  {
    $this->_set_arr_value("13", $index, $value);
  }
  function set_all_regionss($values)
  {
    return $this->_set_arr_values("13", $values);
  }
  function remove_last_regions()
  {
    $this->_remove_last_arr_value("13");
  }
  function regionss_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_regionss()
  {
    return $this->_get_value("13");
  }
}
class ViolationCars_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCars_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCars_Content"]["1"] = "cuid";
    self::$fields["ViolationCars_Content"]["2"] = "ViolationCars_Content_Cars";
    $this->values["2"] = array();
    self::$fieldNames["ViolationCars_Content"]["2"] = "cars";
  }
  function cuid()
  {
    return $this->_get_value("1");
  }
  function set_cuid($value)
  {
    return $this->_set_value("1", $value);
  }
  function cars($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_cars()
  {
    return $this->_add_arr_value("2");
  }
  function set_cars($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_carss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_cars()
  {
    $this->_remove_last_arr_value("2");
  }
  function carss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_carss()
  {
    return $this->_get_value("2");
  }
}
class ViolationCars extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationCars"]["3"] = "ViolationCars_Content";
    $this->values["3"] = "";
    self::$fieldNames["ViolationCars"]["3"] = "content";
    self::$fields["ViolationCars"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationCars"]["1"] = "err_no";
    self::$fields["ViolationCars"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationCars"]["2"] = "err_msg";
    self::$fields["ViolationCars"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["ViolationCars"]["4"] = "count";
    self::$fields["ViolationCars"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["ViolationCars"]["5"] = "time";
    self::$fields["ViolationCars"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["ViolationCars"]["6"] = "is_subscribe";
  }
  function content()
  {
    return $this->_get_value("3");
  }
  function set_content($value)
  {
    return $this->_set_value("3", $value);
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
  function count()
  {
    return $this->_get_value("4");
  }
  function set_count($value)
  {
    return $this->_set_value("4", $value);
  }
  function time()
  {
    return $this->_get_value("5");
  }
  function set_time($value)
  {
    return $this->_set_value("5", $value);
  }
  function is_subscribe()
  {
    return $this->_get_value("6");
  }
  function set_is_subscribe($value)
  {
    return $this->_set_value("6", $value);
  }
}
?>