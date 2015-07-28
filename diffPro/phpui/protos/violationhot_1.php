<?php
class ViolationHot_Contents_Areas extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationHot_Contents_Areas"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationHot_Contents_Areas"]["1"] = "area_id";
    self::$fields["ViolationHot_Contents_Areas"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationHot_Contents_Areas"]["2"] = "name";
  }
  function area_id()
  {
    return $this->_get_value("1");
  }
  function set_area_id($value)
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
class ViolationHot_Contents_Lists extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationHot_Contents_Lists"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationHot_Contents_Lists"]["1"] = "row_id";
    self::$fields["ViolationHot_Contents_Lists"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ViolationHot_Contents_Lists"]["2"] = "number";
    self::$fields["ViolationHot_Contents_Lists"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ViolationHot_Contents_Lists"]["3"] = "place";
    self::$fields["ViolationHot_Contents_Lists"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ViolationHot_Contents_Lists"]["4"] = "content";
  }
  function row_id()
  {
    return $this->_get_value("1");
  }
  function set_row_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function number()
  {
    return $this->_get_value("2");
  }
  function set_number($value)
  {
    return $this->_set_value("2", $value);
  }
  function place()
  {
    return $this->_get_value("3");
  }
  function set_place($value)
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
}
class ViolationHot_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationHot_Contents"]["1"] = "ViolationHot_Contents_Areas";
    $this->values["1"] = array();
    self::$fieldNames["ViolationHot_Contents"]["1"] = "areas";
    self::$fields["ViolationHot_Contents"]["2"] = "ViolationHot_Contents_Lists";
    $this->values["2"] = array();
    self::$fieldNames["ViolationHot_Contents"]["2"] = "lists";
  }
  function areas($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_areas()
  {
    return $this->_add_arr_value("1");
  }
  function set_areas($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_areass($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_areas()
  {
    $this->_remove_last_arr_value("1");
  }
  function areass_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_areass()
  {
    return $this->_get_value("1");
  }
  function lists($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_lists()
  {
    return $this->_add_arr_value("2");
  }
  function set_lists($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_listss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_lists()
  {
    $this->_remove_last_arr_value("2");
  }
  function listss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_listss()
  {
    return $this->_get_value("2");
  }
}
class ViolationHot extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ViolationHot"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ViolationHot"]["1"] = "err_no";
    self::$fields["ViolationHot"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ViolationHot"]["2"] = "err_msg";
    self::$fields["ViolationHot"]["3"] = "ViolationHot_Contents";
    $this->values["3"] = "";
    self::$fieldNames["ViolationHot"]["3"] = "contents";
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
  function contents()
  {
    return $this->_get_value("3");
  }
  function set_contents($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>