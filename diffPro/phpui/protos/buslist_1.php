<?php
class BusList_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BusList_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["BusList_Option"]["1"] = "total";
    self::$fields["BusList_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["BusList_Option"]["2"] = "count";
    self::$fields["BusList_Option"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["BusList_Option"]["3"] = "total_busline_num";
    self::$fields["BusList_Option"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["BusList_Option"]["4"] = "areaID";
  }
  function total()
  {
    return $this->_get_value("1");
  }
  function set_total($value)
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
  function total_busline_num()
  {
    return $this->_get_value("3");
  }
  function set_total_busline_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function areaID()
  {
    return $this->_get_value("4");
  }
  function set_areaID($value)
  {
    return $this->_set_value("4", $value);
  }
}
class BusList_Content_NearestStation extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BusList_Content_NearestStation"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BusList_Content_NearestStation"]["1"] = "name";
    self::$fields["BusList_Content_NearestStation"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BusList_Content_NearestStation"]["2"] = "tip_rtbus";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function tip_rtbus()
  {
    return $this->_get_value("2");
  }
  function set_tip_rtbus($value)
  {
    return $this->_set_value("2", $value);
  }
}
class BusList_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BusList_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BusList_Content"]["1"] = "name";
    self::$fields["BusList_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["BusList_Content"]["2"] = "isMonTicket";
    self::$fields["BusList_Content"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["BusList_Content"]["3"] = "maxPrice";
    self::$fields["BusList_Content"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["BusList_Content"]["4"] = "kindtype";
    self::$fields["BusList_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["BusList_Content"]["5"] = "startTime";
    self::$fields["BusList_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["BusList_Content"]["6"] = "endTime";
    self::$fields["BusList_Content"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["BusList_Content"]["7"] = "ticketPrice";
    self::$fields["BusList_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["BusList_Content"]["8"] = "uid";
    self::$fields["BusList_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["BusList_Content"]["9"] = "primary_uid";
    self::$fields["BusList_Content"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["BusList_Content"]["10"] = "has_rtbus";
    self::$fields["BusList_Content"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["BusList_Content"]["11"] = "rtbus_update_time";
    self::$fields["BusList_Content"]["12"] = "BusList_Content_NearestStation";
    $this->values["12"] = "";
    self::$fieldNames["BusList_Content"]["12"] = "nearest_station";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function isMonTicket()
  {
    return $this->_get_value("2");
  }
  function set_isMonTicket($value)
  {
    return $this->_set_value("2", $value);
  }
  function maxPrice()
  {
    return $this->_get_value("3");
  }
  function set_maxPrice($value)
  {
    return $this->_set_value("3", $value);
  }
  function kindtype()
  {
    return $this->_get_value("4");
  }
  function set_kindtype($value)
  {
    return $this->_set_value("4", $value);
  }
  function startTime()
  {
    return $this->_get_value("5");
  }
  function set_startTime($value)
  {
    return $this->_set_value("5", $value);
  }
  function endTime()
  {
    return $this->_get_value("6");
  }
  function set_endTime($value)
  {
    return $this->_set_value("6", $value);
  }
  function ticketPrice()
  {
    return $this->_get_value("7");
  }
  function set_ticketPrice($value)
  {
    return $this->_set_value("7", $value);
  }
  function uid()
  {
    return $this->_get_value("8");
  }
  function set_uid($value)
  {
    return $this->_set_value("8", $value);
  }
  function primary_uid()
  {
    return $this->_get_value("9");
  }
  function set_primary_uid($value)
  {
    return $this->_set_value("9", $value);
  }
  function has_rtbus()
  {
    return $this->_get_value("10");
  }
  function set_has_rtbus($value)
  {
    return $this->_set_value("10", $value);
  }
  function rtbus_update_time()
  {
    return $this->_get_value("11");
  }
  function set_rtbus_update_time($value)
  {
    return $this->_set_value("11", $value);
  }
  function nearest_station()
  {
    return $this->_get_value("12");
  }
  function set_nearest_station($value)
  {
    return $this->_set_value("12", $value);
  }
}
class BusList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BusList"]["2"] = "BusList_Option";
    $this->values["2"] = "";
    self::$fieldNames["BusList"]["2"] = "option";
    self::$fields["BusList"]["3"] = "BusList_Content";
    $this->values["3"] = array();
    self::$fieldNames["BusList"]["3"] = "content";
    self::$fields["BusList"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["BusList"]["1"] = "error";
  }
  function option()
  {
    return $this->_get_value("2");
  }
  function set_option($value)
  {
    return $this->_set_value("2", $value);
  }
  function content($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("3");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("3");
  }
  function contents_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_contents()
  {
    return $this->_get_value("3");
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
}
?>