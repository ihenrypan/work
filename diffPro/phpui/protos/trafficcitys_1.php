<?php
class TrafficCitys_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficCitys_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["1"] = "code";
    self::$fields["TrafficCitys_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["2"] = "geo";
    self::$fields["TrafficCitys_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["3"] = "level";
    self::$fields["TrafficCitys_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["4"] = "name";
    self::$fields["TrafficCitys_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["5"] = "sup_subway";
    self::$fields["TrafficCitys_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["TrafficCitys_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["TrafficCitys_CurrentCity"]["7"] = "uid";
    self::$fields["TrafficCitys_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["TrafficCitys_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["TrafficCitys_CurrentCity"]["8"]();
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
class TrafficCitys_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficCitys_Contents"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["TrafficCitys_Contents"]["1"] = "code";
    self::$fields["TrafficCitys_Contents"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["TrafficCitys_Contents"]["2"] = "num";
    self::$fields["TrafficCitys_Contents"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["TrafficCitys_Contents"]["3"] = "name";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function num()
  {
    return $this->_get_value("2");
  }
  function set_num($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("3");
  }
  function set_name($value)
  {
    return $this->_set_value("3", $value);
  }
}
class TrafficCitys_SuggestQuery extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficCitys_SuggestQuery"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["TrafficCitys_SuggestQuery"]["1"] = "query";
  }
  function query()
  {
    return $this->_get_value("1");
  }
  function set_query($value)
  {
    return $this->_set_value("1", $value);
  }
}
class TrafficCitys extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["TrafficCitys"]["1"] = "TrafficCitys_CurrentCity";
    $this->values["1"] = "";
    self::$fieldNames["TrafficCitys"]["1"] = "current_city";
    self::$fields["TrafficCitys"]["2"] = "TrafficCitys_Contents";
    $this->values["2"] = array();
    self::$fieldNames["TrafficCitys"]["2"] = "contents";
    self::$fields["TrafficCitys"]["3"] = "TrafficCitys_SuggestQuery";
    $this->values["3"] = array();
    self::$fieldNames["TrafficCitys"]["3"] = "suggest_query";
  }
  function current_city()
  {
    return $this->_get_value("1");
  }
  function set_current_city($value)
  {
    return $this->_set_value("1", $value);
  }
  function contents($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("2");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("2");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_contentss()
  {
    return $this->_get_value("2");
  }
  function suggest_query($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_suggest_query()
  {
    return $this->_add_arr_value("3");
  }
  function set_suggest_query($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_suggest_querys($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_suggest_query()
  {
    $this->_remove_last_arr_value("3");
  }
  function suggest_querys_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_suggest_querys()
  {
    return $this->_get_value("3");
  }
}
?>