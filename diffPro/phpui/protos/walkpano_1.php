<?php
class WalkPano_Links_Link extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPano_Links_Link"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WalkPano_Links_Link"]["1"] = "pid";
    self::$fields["WalkPano_Links_Link"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["WalkPano_Links_Link"]["2"] = "rx";
    self::$fields["WalkPano_Links_Link"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPano_Links_Link"]["3"] = "ry";
    self::$fields["WalkPano_Links_Link"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["WalkPano_Links_Link"]["4"] = "x";
    self::$fields["WalkPano_Links_Link"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WalkPano_Links_Link"]["5"] = "y";
  }
  function pid()
  {
    return $this->_get_value("1");
  }
  function set_pid($value)
  {
    return $this->_set_value("1", $value);
  }
  function rx()
  {
    return $this->_get_value("2");
  }
  function set_rx($value)
  {
    return $this->_set_value("2", $value);
  }
  function ry()
  {
    return $this->_get_value("3");
  }
  function set_ry($value)
  {
    return $this->_set_value("3", $value);
  }
  function x()
  {
    return $this->_get_value("4");
  }
  function set_x($value)
  {
    return $this->_set_value("4", $value);
  }
  function y()
  {
    return $this->_get_value("5");
  }
  function set_y($value)
  {
    return $this->_set_value("5", $value);
  }
}
class WalkPano_Links extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPano_Links"]["1"] = "WalkPano_Links_Link";
    $this->values["1"] = array();
    self::$fieldNames["WalkPano_Links"]["1"] = "link";
    self::$fields["WalkPano_Links"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPano_Links"]["2"] = "link_id";
  }
  function link($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_link()
  {
    return $this->_add_arr_value("1");
  }
  function set_link($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_links($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_link()
  {
    $this->_remove_last_arr_value("1");
  }
  function links_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_links()
  {
    return $this->_get_value("1");
  }
  function link_id()
  {
    return $this->_get_value("2");
  }
  function set_link_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class WalkPano_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPano_Option"]["1"] = "PBSignedInt";
    $this->values["1"] = "";
    self::$fieldNames["WalkPano_Option"]["1"] = "error";
    self::$fields["WalkPano_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["WalkPano_Option"]["2"] = "has_pano";
    self::$fields["WalkPano_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["WalkPano_Option"]["3"] = "type";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function has_pano()
  {
    return $this->_get_value("2");
  }
  function set_has_pano($value)
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
class WalkPano extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WalkPano"]["1"] = "WalkPano_Links";
    $this->values["1"] = array();
    self::$fieldNames["WalkPano"]["1"] = "links";
    self::$fields["WalkPano"]["3"] = "WalkPano_Option";
    $this->values["3"] = "";
    self::$fieldNames["WalkPano"]["3"] = "option";
    self::$fields["WalkPano"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WalkPano"]["2"] = "jpeg";
  }
  function links($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_links()
  {
    return $this->_add_arr_value("1");
  }
  function set_links($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_linkss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_links()
  {
    $this->_remove_last_arr_value("1");
  }
  function linkss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_linkss()
  {
    return $this->_get_value("1");
  }
  function option()
  {
    return $this->_get_value("3");
  }
  function set_option($value)
  {
    return $this->_set_value("3", $value);
  }
  function jpeg()
  {
    return $this->_get_value("2");
  }
  function set_jpeg($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>