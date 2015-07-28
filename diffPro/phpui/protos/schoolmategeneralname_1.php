<?php
class SchoolmateGeneralname_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateGeneralname_Contents"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["1"] = "code";
    self::$fields["SchoolmateGeneralname_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["2"] = "name";
    self::$fields["SchoolmateGeneralname_Contents"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["3"] = "num";
    self::$fields["SchoolmateGeneralname_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["4"] = "count";
    self::$fields["SchoolmateGeneralname_Contents"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["5"] = "rank";
    self::$fields["SchoolmateGeneralname_Contents"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["6"] = "valid";
    self::$fields["SchoolmateGeneralname_Contents"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["7"] = "locx";
    self::$fields["SchoolmateGeneralname_Contents"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["SchoolmateGeneralname_Contents"]["8"] = "locy";
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
  function num()
  {
    return $this->_get_value("3");
  }
  function set_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function count()
  {
    return $this->_get_value("4");
  }
  function set_count($value)
  {
    return $this->_set_value("4", $value);
  }
  function rank()
  {
    return $this->_get_value("5");
  }
  function set_rank($value)
  {
    return $this->_set_value("5", $value);
  }
  function valid()
  {
    return $this->_get_value("6");
  }
  function set_valid($value)
  {
    return $this->_set_value("6", $value);
  }
  function locx()
  {
    return $this->_get_value("7");
  }
  function set_locx($value)
  {
    return $this->_set_value("7", $value);
  }
  function locy()
  {
    return $this->_get_value("8");
  }
  function set_locy($value)
  {
    return $this->_set_value("8", $value);
  }
}
class SchoolmateGeneralname extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateGeneralname"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateGeneralname"]["1"] = "err_no";
    self::$fields["SchoolmateGeneralname"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateGeneralname"]["2"] = "err_msg";
    self::$fields["SchoolmateGeneralname"]["3"] = "SchoolmateGeneralname_Contents";
    $this->values["3"] = array();
    self::$fieldNames["SchoolmateGeneralname"]["3"] = "contents";
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
}
?>