<?php
class ShopMenu_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Option"]["1"] = "error_no";
    self::$fields["ShopMenu_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Option"]["2"] = "error_msg";
  }
  function error_no()
  {
    return $this->_get_value("1");
  }
  function set_error_no($value)
  {
    return $this->_set_value("1", $value);
  }
  function error_msg()
  {
    return $this->_get_value("2");
  }
  function set_error_msg($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopMenu_Content_BussinessHours extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_BussinessHours"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_BussinessHours"]["1"] = "start";
    self::$fields["ShopMenu_Content_BussinessHours"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_BussinessHours"]["2"] = "end";
  }
  function start()
  {
    return $this->_get_value("1");
  }
  function set_start($value)
  {
    return $this->_set_value("1", $value);
  }
  function end()
  {
    return $this->_get_value("2");
  }
  function set_end($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times"]["1"] = "start_time";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times"]["2"] = "end_time";
  }
  function start_time()
  {
    return $this->_get_value("1");
  }
  function set_start_time($value)
  {
    return $this->_set_value("1", $value);
  }
  function end_time()
  {
    return $this->_get_value("2");
  }
  function set_end_time($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopMenu_Content_TakeoutMenu_Data_AvailableTimes extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes"]["1"] = "index";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes"]["2"] = "ShopMenu_Content_TakeoutMenu_Data_AvailableTimes_Times";
    $this->values["2"] = array();
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data_AvailableTimes"]["2"] = "times";
  }
  function index()
  {
    return $this->_get_value("1");
  }
  function set_index($value)
  {
    return $this->_set_value("1", $value);
  }
  function times($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_times()
  {
    return $this->_add_arr_value("2");
  }
  function set_times($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_timess($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_times()
  {
    $this->_remove_last_arr_value("2");
  }
  function timess_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_timess()
  {
    return $this->_get_value("2");
  }
}
class ShopMenu_Content_TakeoutMenu_Data extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["1"] = "item_id";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["2"] = "name";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["3"] = "current_price";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["4"] = "min_order_number";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["5"] = "packge_box_price";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["6"] = "packge_box_num";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["7"] = "saled_out";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["8"] = "saled";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["9"] = "url";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["10"] = "description";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["11"] = "left_num";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["12"] = "on_sale";
    self::$fields["ShopMenu_Content_TakeoutMenu_Data"]["13"] = "ShopMenu_Content_TakeoutMenu_Data_AvailableTimes";
    $this->values["13"] = array();
    self::$fieldNames["ShopMenu_Content_TakeoutMenu_Data"]["13"] = "available_times";
  }
  function item_id()
  {
    return $this->_get_value("1");
  }
  function set_item_id($value)
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
  function current_price()
  {
    return $this->_get_value("3");
  }
  function set_current_price($value)
  {
    return $this->_set_value("3", $value);
  }
  function min_order_number()
  {
    return $this->_get_value("4");
  }
  function set_min_order_number($value)
  {
    return $this->_set_value("4", $value);
  }
  function packge_box_price()
  {
    return $this->_get_value("5");
  }
  function set_packge_box_price($value)
  {
    return $this->_set_value("5", $value);
  }
  function packge_box_num()
  {
    return $this->_get_value("6");
  }
  function set_packge_box_num($value)
  {
    return $this->_set_value("6", $value);
  }
  function saled_out()
  {
    return $this->_get_value("7");
  }
  function set_saled_out($value)
  {
    return $this->_set_value("7", $value);
  }
  function saled()
  {
    return $this->_get_value("8");
  }
  function set_saled($value)
  {
    return $this->_set_value("8", $value);
  }
  function url()
  {
    return $this->_get_value("9");
  }
  function set_url($value)
  {
    return $this->_set_value("9", $value);
  }
  function description()
  {
    return $this->_get_value("10");
  }
  function set_description($value)
  {
    return $this->_set_value("10", $value);
  }
  function left_num()
  {
    return $this->_get_value("11");
  }
  function set_left_num($value)
  {
    return $this->_set_value("11", $value);
  }
  function on_sale()
  {
    return $this->_get_value("12");
  }
  function set_on_sale($value)
  {
    return $this->_set_value("12", $value);
  }
  function available_times($offset)
  {
    return $this->_get_arr_value("13", $offset);
  }
  function add_available_times()
  {
    return $this->_add_arr_value("13");
  }
  function set_available_times($index, $value)
  {
    $this->_set_arr_value("13", $index, $value);
  }
  function set_all_available_timess($values)
  {
    return $this->_set_arr_values("13", $values);
  }
  function remove_last_available_times()
  {
    $this->_remove_last_arr_value("13");
  }
  function available_timess_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_available_timess()
  {
    return $this->_get_value("13");
  }
}
class ShopMenu_Content_TakeoutMenu extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_TakeoutMenu"]["1"] = "ShopMenu_Content_TakeoutMenu_Data";
    $this->values["1"] = array();
    self::$fieldNames["ShopMenu_Content_TakeoutMenu"]["1"] = "data";
    self::$fields["ShopMenu_Content_TakeoutMenu"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_TakeoutMenu"]["2"] = "catalog";
  }
  function data($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_data()
  {
    return $this->_add_arr_value("1");
  }
  function set_data($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_datas($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_data()
  {
    $this->_remove_last_arr_value("1");
  }
  function datas_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_datas()
  {
    return $this->_get_value("1");
  }
  function catalog()
  {
    return $this->_get_value("2");
  }
  function set_catalog($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopMenu_Content_CouponInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_CouponInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_CouponInfo"]["1"] = "support_coupon";
    self::$fields["ShopMenu_Content_CouponInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_CouponInfo"]["2"] = "coupon_msg";
  }
  function support_coupon()
  {
    return $this->_get_value("1");
  }
  function set_support_coupon($value)
  {
    return $this->_set_value("1", $value);
  }
  function coupon_msg()
  {
    return $this->_get_value("2");
  }
  function set_coupon_msg($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopMenu_Content_SourceInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content_SourceInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content_SourceInfo"]["1"] = "source_name";
    self::$fields["ShopMenu_Content_SourceInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content_SourceInfo"]["2"] = "source_logo_url";
    self::$fields["ShopMenu_Content_SourceInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopMenu_Content_SourceInfo"]["3"] = "source_url";
  }
  function source_name()
  {
    return $this->_get_value("1");
  }
  function set_source_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function source_logo_url()
  {
    return $this->_get_value("2");
  }
  function set_source_logo_url($value)
  {
    return $this->_set_value("2", $value);
  }
  function source_url()
  {
    return $this->_get_value("3");
  }
  function set_source_url($value)
  {
    return $this->_set_value("3", $value);
  }
}
class ShopMenu_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu_Content"]["4"] = "ShopMenu_Content_BussinessHours";
    $this->values["4"] = array();
    self::$fieldNames["ShopMenu_Content"]["4"] = "bussiness_hours";
    self::$fields["ShopMenu_Content"]["8"] = "ShopMenu_Content_TakeoutMenu";
    $this->values["8"] = array();
    self::$fieldNames["ShopMenu_Content"]["8"] = "takeout_menu";
    self::$fields["ShopMenu_Content"]["9"] = "ShopMenu_Content_CouponInfo";
    $this->values["9"] = "";
    self::$fieldNames["ShopMenu_Content"]["9"] = "coupon_info";
    self::$fields["ShopMenu_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu_Content"]["1"] = "release_id";
    self::$fields["ShopMenu_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu_Content"]["2"] = "shop_name";
    self::$fields["ShopMenu_Content"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ShopMenu_Content"]["3"] = "bussiness_status";
    self::$fields["ShopMenu_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ShopMenu_Content"]["5"] = "takeout_price";
    self::$fields["ShopMenu_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ShopMenu_Content"]["6"] = "takeout_cost";
    self::$fields["ShopMenu_Content"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ShopMenu_Content"]["7"] = "average_time";
    self::$fields["ShopMenu_Content"]["10"] = "ShopMenu_Content_SourceInfo";
    $this->values["10"] = "";
    self::$fieldNames["ShopMenu_Content"]["10"] = "source_info";
  }
  function bussiness_hours($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_bussiness_hours()
  {
    return $this->_add_arr_value("4");
  }
  function set_bussiness_hours($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_bussiness_hourss($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_bussiness_hours()
  {
    $this->_remove_last_arr_value("4");
  }
  function bussiness_hourss_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_bussiness_hourss()
  {
    return $this->_get_value("4");
  }
  function takeout_menu($offset)
  {
    return $this->_get_arr_value("8", $offset);
  }
  function add_takeout_menu()
  {
    return $this->_add_arr_value("8");
  }
  function set_takeout_menu($index, $value)
  {
    $this->_set_arr_value("8", $index, $value);
  }
  function set_all_takeout_menus($values)
  {
    return $this->_set_arr_values("8", $values);
  }
  function remove_last_takeout_menu()
  {
    $this->_remove_last_arr_value("8");
  }
  function takeout_menus_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_takeout_menus()
  {
    return $this->_get_value("8");
  }
  function coupon_info()
  {
    return $this->_get_value("9");
  }
  function set_coupon_info($value)
  {
    return $this->_set_value("9", $value);
  }
  function release_id()
  {
    return $this->_get_value("1");
  }
  function set_release_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function shop_name()
  {
    return $this->_get_value("2");
  }
  function set_shop_name($value)
  {
    return $this->_set_value("2", $value);
  }
  function bussiness_status()
  {
    return $this->_get_value("3");
  }
  function set_bussiness_status($value)
  {
    return $this->_set_value("3", $value);
  }
  function takeout_price()
  {
    return $this->_get_value("5");
  }
  function set_takeout_price($value)
  {
    return $this->_set_value("5", $value);
  }
  function takeout_cost()
  {
    return $this->_get_value("6");
  }
  function set_takeout_cost($value)
  {
    return $this->_set_value("6", $value);
  }
  function average_time()
  {
    return $this->_get_value("7");
  }
  function set_average_time($value)
  {
    return $this->_set_value("7", $value);
  }
  function source_info()
  {
    return $this->_get_value("10");
  }
  function set_source_info($value)
  {
    return $this->_set_value("10", $value);
  }
}
class ShopMenu extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopMenu"]["1"] = "ShopMenu_Option";
    $this->values["1"] = "";
    self::$fieldNames["ShopMenu"]["1"] = "option";
    self::$fields["ShopMenu"]["2"] = "ShopMenu_Content";
    $this->values["2"] = "";
    self::$fieldNames["ShopMenu"]["2"] = "content";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function content()
  {
    return $this->_get_value("2");
  }
  function set_content($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>