<?php
class Mrtl_Content_Route extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Mrtl_Content_Route"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Mrtl_Content_Route"]["1"] = "distance";
    self::$fields["Mrtl_Content_Route"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Mrtl_Content_Route"]["2"] = "duration";
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
}
class Mrtl_Content_Traffic extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Mrtl_Content_Traffic"]["1"] = "PBInt";
    $this->values["1"] = array();
    self::$fieldNames["Mrtl_Content_Traffic"]["1"] = "length";
    self::$fields["Mrtl_Content_Traffic"]["2"] = "PBInt";
    $this->values["2"] = array();
    self::$fieldNames["Mrtl_Content_Traffic"]["2"] = "status";
  }
  function length($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_length($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_length($index, $value)
  {
    $v = new self::$fields["Mrtl_Content_Traffic"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_length()
  {
    $this->_remove_last_arr_value("1");
  }
  function lengths_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_lengths()
  {
    return $this->_get_value("1");
  }
  function status($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_status($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_status($index, $value)
  {
    $v = new self::$fields["Mrtl_Content_Traffic"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_status()
  {
    $this->_remove_last_arr_value("2");
  }
  function statuss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_statuss()
  {
    return $this->_get_value("2");
  }
}
class Mrtl_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Mrtl_Content"]["3"] = "Mrtl_Content_Route";
    $this->values["3"] = "";
    self::$fieldNames["Mrtl_Content"]["3"] = "route";
    self::$fields["Mrtl_Content"]["4"] = "Mrtl_Content_Traffic";
    $this->values["4"] = "";
    self::$fieldNames["Mrtl_Content"]["4"] = "traffic";
    self::$fields["Mrtl_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Mrtl_Content"]["1"] = "label";
    self::$fields["Mrtl_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Mrtl_Content"]["2"] = "ret_code";
  }
  function route()
  {
    return $this->_get_value("3");
  }
  function set_route($value)
  {
    return $this->_set_value("3", $value);
  }
  function traffic()
  {
    return $this->_get_value("4");
  }
  function set_traffic($value)
  {
    return $this->_set_value("4", $value);
  }
  function label()
  {
    return $this->_get_value("1");
  }
  function set_label($value)
  {
    return $this->_set_value("1", $value);
  }
  function ret_code()
  {
    return $this->_get_value("2");
  }
  function set_ret_code($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Mrtl extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Mrtl"]["1"] = "Mrtl_Content";
    $this->values["1"] = array();
    self::$fieldNames["Mrtl"]["1"] = "content";
  }
  function content($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("1");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("1");
  }
  function contents_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_contents()
  {
    return $this->_get_value("1");
  }
}
?>