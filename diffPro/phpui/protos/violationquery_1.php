<?php
class ViolationQuery_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationQuery_Contents"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["1"] = "score";
    self::$fields["ViolationQuery_Contents"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["2"] = "money";
    self::$fields["ViolationQuery_Contents"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["3"] = "code";
    self::$fields["ViolationQuery_Contents"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["4"] = "content";
    self::$fields["ViolationQuery_Contents"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["5"] = "place";
    self::$fields["ViolationQuery_Contents"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["6"] = "date";
    self::$fields["ViolationQuery_Contents"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["7"] = "source";
    self::$fields["ViolationQuery_Contents"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["8"] = "violation_cityid";
    self::$fields["ViolationQuery_Contents"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["ViolationQuery_Contents"]["9"] = "violation_cityname";
  }
  function score()
  {
    return $this->_get_value("1");
  }
  function set_score($value)
  {
    return $this->_set_value("1", $value);
  }
  function money()
  {
    return $this->_get_value("2");
  }
  function set_money($value)
  {
    return $this->_set_value("2", $value);
  }
  function code()
  {
    return $this->_get_value("3");
  }
  function set_code($value)
  {
    return $this->_set_value("3", $value);
  }
  function content()
  {
    return $this->_get_value("4");
  }
  function set_content($value)
  {
    return $this->_set_value("4", $value);
  }
  function place()
  {
    return $this->_get_value("5");
  }
  function set_place($value)
  {
    return $this->_set_value("5", $value);
  }
  function date()
  {
    return $this->_get_value("6");
  }
  function set_date($value)
  {
    return $this->_set_value("6", $value);
  }
  function source()
  {
    return $this->_get_value("7");
  }
  function set_source($value)
  {
    return $this->_set_value("7", $value);
  }
  function violation_cityid()
  {
    return $this->_get_value("8");
  }
  function set_violation_cityid($value)
  {
    return $this->_set_value("8", $value);
  }
  function violation_cityname()
  {
    return $this->_get_value("9");
  }
  function set_violation_cityname($value)
  {
    return $this->_set_value("9", $value);
  }
}
class ViolationQuery extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationQuery"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationQuery"]["1"] = "err_no";
    self::$fields["ViolationQuery"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationQuery"]["2"] = "err_msg";
    self::$fields["ViolationQuery"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ViolationQuery"]["3"] = "count";
    self::$fields["ViolationQuery"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["ViolationQuery"]["4"] = "time";
    self::$fields["ViolationQuery"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["ViolationQuery"]["5"] = "source";
    self::$fields["ViolationQuery"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["ViolationQuery"]["6"] = "violation_cityid";
    self::$fields["ViolationQuery"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ViolationQuery"]["7"] = "violation_cityname";
    self::$fields["ViolationQuery"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["ViolationQuery"]["8"] = "violation_count";
    self::$fields["ViolationQuery"]["9"] = "PB64Bit";
    $this->values["9"] = "";
    self::$fieldNames["ViolationQuery"]["9"] = "violation_money";
    self::$fields["ViolationQuery"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["ViolationQuery"]["10"] = "violation_score";
    self::$fields["ViolationQuery"]["11"] = "ViolationQuery_Contents";
    $this->values["11"] = array();
    self::$fieldNames["ViolationQuery"]["11"] = "contents";
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
    return $this->_get_value("3");
  }
  function set_count($value)
  {
    return $this->_set_value("3", $value);
  }
  function time()
  {
    return $this->_get_value("4");
  }
  function set_time($value)
  {
    return $this->_set_value("4", $value);
  }
  function source()
  {
    return $this->_get_value("5");
  }
  function set_source($value)
  {
    return $this->_set_value("5", $value);
  }
  function violation_cityid()
  {
    return $this->_get_value("6");
  }
  function set_violation_cityid($value)
  {
    return $this->_set_value("6", $value);
  }
  function violation_cityname()
  {
    return $this->_get_value("7");
  }
  function set_violation_cityname($value)
  {
    return $this->_set_value("7", $value);
  }
  function violation_count()
  {
    return $this->_get_value("8");
  }
  function set_violation_count($value)
  {
    return $this->_set_value("8", $value);
  }
  function violation_money()
  {
    return $this->_get_value("9");
  }
  function set_violation_money($value)
  {
    return $this->_set_value("9", $value);
  }
  function violation_score()
  {
    return $this->_get_value("10");
  }
  function set_violation_score($value)
  {
    return $this->_set_value("10", $value);
  }
  function contents($offset)
  {
    return $this->_get_arr_value("11", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("11");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("11", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("11", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("11");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_contentss()
  {
    return $this->_get_value("11");
  }
}
?>