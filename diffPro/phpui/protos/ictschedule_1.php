<?php
class IctSchedule_LineInfoList_LineInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IctSchedule_LineInfoList_LineInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IctSchedule_LineInfoList_LineInfo"]["1"] = "from_time";
    self::$fields["IctSchedule_LineInfoList_LineInfo"]["2"] = "PB64Bit";
    $this->values["2"] = array();
    self::$fieldNames["IctSchedule_LineInfoList_LineInfo"]["2"] = "price";
    self::$fields["IctSchedule_LineInfoList_LineInfo"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["IctSchedule_LineInfoList_LineInfo"]["3"] = "mileage";
    self::$fields["IctSchedule_LineInfoList_LineInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["IctSchedule_LineInfoList_LineInfo"]["4"] = "geo";
  }
  function from_time()
  {
    return $this->_get_value("1");
  }
  function set_from_time($value)
  {
    return $this->_set_value("1", $value);
  }
  function price($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_price($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_price($index, $value)
  {
    $v = new self::$fields["IctSchedule_LineInfoList_LineInfo"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_price()
  {
    $this->_remove_last_arr_value("2");
  }
  function prices_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_prices()
  {
    return $this->_get_value("2");
  }
  function mileage()
  {
    return $this->_get_value("3");
  }
  function set_mileage($value)
  {
    return $this->_set_value("3", $value);
  }
  function geo()
  {
    return $this->_get_value("4");
  }
  function set_geo($value)
  {
    return $this->_set_value("4", $value);
  }
}
class IctSchedule_LineInfoList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IctSchedule_LineInfoList"]["1"] = "IctSchedule_LineInfoList_LineInfo";
    $this->values["1"] = "";
    self::$fieldNames["IctSchedule_LineInfoList"]["1"] = "line_info";
  }
  function line_info()
  {
    return $this->_get_value("1");
  }
  function set_line_info($value)
  {
    return $this->_set_value("1", $value);
  }
}
class IctSchedule_TicketOrderInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IctSchedule_TicketOrderInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["IctSchedule_TicketOrderInfo"]["1"] = "is_supported";
    self::$fields["IctSchedule_TicketOrderInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["IctSchedule_TicketOrderInfo"]["2"] = "url";
  }
  function is_supported()
  {
    return $this->_get_value("1");
  }
  function set_is_supported($value)
  {
    return $this->_set_value("1", $value);
  }
  function url()
  {
    return $this->_get_value("2");
  }
  function set_url($value)
  {
    return $this->_set_value("2", $value);
  }
}
class IctSchedule extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IctSchedule"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["IctSchedule"]["1"] = "error";
    self::$fields["IctSchedule"]["2"] = "IctSchedule_LineInfoList";
    $this->values["2"] = array();
    self::$fieldNames["IctSchedule"]["2"] = "line_info_list";
    self::$fields["IctSchedule"]["3"] = "IctSchedule_TicketOrderInfo";
    $this->values["3"] = "";
    self::$fieldNames["IctSchedule"]["3"] = "ticket_order_info";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function line_info_list($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_line_info_list()
  {
    return $this->_add_arr_value("2");
  }
  function set_line_info_list($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_line_info_lists($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_line_info_list()
  {
    $this->_remove_last_arr_value("2");
  }
  function line_info_lists_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_line_info_lists()
  {
    return $this->_get_value("2");
  }
  function ticket_order_info()
  {
    return $this->_get_value("3");
  }
  function set_ticket_order_info($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>