<?php
class ViolationClist_Contents_CityList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationClist_Contents_CityList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["1"] = "id";
    self::$fields["ViolationClist_Contents_CityList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["2"] = "city";
    self::$fields["ViolationClist_Contents_CityList"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["3"] = "engine";
    self::$fields["ViolationClist_Contents_CityList"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["4"] = "frame";
    self::$fields["ViolationClist_Contents_CityList"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["5"] = "regist";
    self::$fields["ViolationClist_Contents_CityList"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["6"] = "source";
    self::$fields["ViolationClist_Contents_CityList"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["7"] = "prefix";
    self::$fields["ViolationClist_Contents_CityList"]["8"] = "PBBool";
    $this->values["8"] = "";
    self::$fieldNames["ViolationClist_Contents_CityList"]["8"] = "is_limit";
    self::$fields["ViolationClist_Contents_CityList"]["9"] = "PBInt";
    $this->values["9"] = array();
    self::$fieldNames["ViolationClist_Contents_CityList"]["9"] = "limit";
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
  function engine()
  {
    return $this->_get_value("3");
  }
  function set_engine($value)
  {
    return $this->_set_value("3", $value);
  }
  function frame()
  {
    return $this->_get_value("4");
  }
  function set_frame($value)
  {
    return $this->_set_value("4", $value);
  }
  function regist()
  {
    return $this->_get_value("5");
  }
  function set_regist($value)
  {
    return $this->_set_value("5", $value);
  }
  function source()
  {
    return $this->_get_value("6");
  }
  function set_source($value)
  {
    return $this->_set_value("6", $value);
  }
  function prefix()
  {
    return $this->_get_value("7");
  }
  function set_prefix($value)
  {
    return $this->_set_value("7", $value);
  }
  function is_limit()
  {
    return $this->_get_value("8");
  }
  function set_is_limit($value)
  {
    return $this->_set_value("8", $value);
  }
  function limit($offset)
  {
    $v = $this->_get_arr_value("9", $offset);
    return $v->get_value();
  }
  function append_limit($value)
  {
    $v = $this->_add_arr_value("9");
    $v->set_value($value);
  }
  function set_limit($index, $value)
  {
    $v = new self::$fields["ViolationClist_Contents_CityList"]["9"]();
    $v->set_value($value);
    $this->_set_arr_value("9", $index, $v);
  }
  function remove_last_limit()
  {
    $this->_remove_last_arr_value("9");
  }
  function limits_size()
  {
    return $this->_get_arr_size("9");
  }
  function get_limits()
  {
    return $this->_get_value("9");
  }
}
class ViolationClist_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationClist_Contents"]["2"] = "ViolationClist_Contents_CityList";
    $this->values["2"] = array();
    self::$fieldNames["ViolationClist_Contents"]["2"] = "city_list";
    self::$fields["ViolationClist_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ViolationClist_Contents"]["1"] = "index";
    self::$fields["ViolationClist_Contents"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ViolationClist_Contents"]["3"] = "is_munci";
  }
  function city_list($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_city_list()
  {
    return $this->_add_arr_value("2");
  }
  function set_city_list($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_city_lists($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_city_list()
  {
    $this->_remove_last_arr_value("2");
  }
  function city_lists_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_city_lists()
  {
    return $this->_get_value("2");
  }
  function index()
  {
    return $this->_get_value("1");
  }
  function set_index($value)
  {
    return $this->_set_value("1", $value);
  }
  function is_munci()
  {
    return $this->_get_value("3");
  }
  function set_is_munci($value)
  {
    return $this->_set_value("3", $value);
  }
}
class ViolationClist extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationClist"]["3"] = "ViolationClist_Contents";
    $this->values["3"] = array();
    self::$fieldNames["ViolationClist"]["3"] = "contents";
    self::$fields["ViolationClist"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationClist"]["1"] = "err_no";
    self::$fields["ViolationClist"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationClist"]["2"] = "err_msg";
  }
  function contents($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("3");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("3");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_contentss()
  {
    return $this->_get_value("3");
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
}
?>