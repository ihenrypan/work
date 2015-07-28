<?php
class SchoolmateInfoshare_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateInfoshare_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateInfoshare_Contents"]["1"] = "school";
    self::$fields["SchoolmateInfoshare_Contents"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateInfoshare_Contents"]["2"] = "count";
    self::$fields["SchoolmateInfoshare_Contents"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["SchoolmateInfoshare_Contents"]["3"] = "rank";
    self::$fields["SchoolmateInfoshare_Contents"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["SchoolmateInfoshare_Contents"]["4"] = "loc";
  }
  function school()
  {
    return $this->_get_value("1");
  }
  function set_school($value)
  {
    return $this->_set_value("1", $value);
  }
  function count()
  {
    return $this->_get_value("2");
  }
  function set_count($value)
  {
    return $this->_set_value("2", $value);
  }
  function rank()
  {
    return $this->_get_value("3");
  }
  function set_rank($value)
  {
    return $this->_set_value("3", $value);
  }
  function loc()
  {
    return $this->_get_value("4");
  }
  function set_loc($value)
  {
    return $this->_set_value("4", $value);
  }
}
class SchoolmateInfoshare extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["SchoolmateInfoshare"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["SchoolmateInfoshare"]["1"] = "err_no";
    self::$fields["SchoolmateInfoshare"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["SchoolmateInfoshare"]["2"] = "err_msg";
    self::$fields["SchoolmateInfoshare"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["SchoolmateInfoshare"]["3"] = "city";
    self::$fields["SchoolmateInfoshare"]["4"] = "SchoolmateInfoshare_Contents";
    $this->values["4"] = array();
    self::$fieldNames["SchoolmateInfoshare"]["4"] = "contents";
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
  function city()
  {
    return $this->_get_value("3");
  }
  function set_city($value)
  {
    return $this->_set_value("3", $value);
  }
  function contents($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("4");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("4");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_contentss()
  {
    return $this->_get_value("4");
  }
}
?>