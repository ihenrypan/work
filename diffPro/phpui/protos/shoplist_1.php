<?php
class ShopList_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_Option"]["1"] = "error_no";
    self::$fields["ShopList_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_Option"]["2"] = "error_msg";
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
class ShopList_Filter extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_Filter"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_Filter"]["1"] = "sortby";
    self::$fields["ShopList_Filter"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_Filter"]["2"] = "wd";
    self::$fields["ShopList_Filter"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopList_Filter"]["3"] = "promotion";
    self::$fields["ShopList_Filter"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ShopList_Filter"]["4"] = "taste";
  }
  function sortby()
  {
    return $this->_get_value("1");
  }
  function set_sortby($value)
  {
    return $this->_set_value("1", $value);
  }
  function wd()
  {
    return $this->_get_value("2");
  }
  function set_wd($value)
  {
    return $this->_set_value("2", $value);
  }
  function promotion()
  {
    return $this->_get_value("3");
  }
  function set_promotion($value)
  {
    return $this->_set_value("3", $value);
  }
  function taste()
  {
    return $this->_get_value("4");
  }
  function set_taste($value)
  {
    return $this->_set_value("4", $value);
  }
}
class ShopList_DiscountInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_DiscountInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_DiscountInfo"]["1"] = "is_discount_send";
    self::$fields["ShopList_DiscountInfo"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_DiscountInfo"]["2"] = "is_discount_first_order";
    self::$fields["ShopList_DiscountInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopList_DiscountInfo"]["3"] = "discount_send_show";
    self::$fields["ShopList_DiscountInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ShopList_DiscountInfo"]["4"] = "discount_first_order_show";
  }
  function is_discount_send()
  {
    return $this->_get_value("1");
  }
  function set_is_discount_send($value)
  {
    return $this->_set_value("1", $value);
  }
  function is_discount_first_order()
  {
    return $this->_get_value("2");
  }
  function set_is_discount_first_order($value)
  {
    return $this->_set_value("2", $value);
  }
  function discount_send_show()
  {
    return $this->_get_value("3");
  }
  function set_discount_send_show($value)
  {
    return $this->_set_value("3", $value);
  }
  function discount_first_order_show()
  {
    return $this->_get_value("4");
  }
  function set_discount_first_order_show($value)
  {
    return $this->_set_value("4", $value);
  }
}
class ShopList_InvoiceInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_InvoiceInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_InvoiceInfo"]["1"] = "is_support_invoice";
    self::$fields["ShopList_InvoiceInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_InvoiceInfo"]["2"] = "support_invoice_show";
  }
  function is_support_invoice()
  {
    return $this->_get_value("1");
  }
  function set_is_support_invoice($value)
  {
    return $this->_set_value("1", $value);
  }
  function support_invoice_show()
  {
    return $this->_get_value("2");
  }
  function set_support_invoice_show($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopList_ShopInfo_DiscountInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_ShopInfo_DiscountInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_ShopInfo_DiscountInfo"]["1"] = "is_discount_send";
    self::$fields["ShopList_ShopInfo_DiscountInfo"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_ShopInfo_DiscountInfo"]["2"] = "is_discount_first_order";
    self::$fields["ShopList_ShopInfo_DiscountInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopList_ShopInfo_DiscountInfo"]["3"] = "discount_send_show";
    self::$fields["ShopList_ShopInfo_DiscountInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ShopList_ShopInfo_DiscountInfo"]["4"] = "discount_first_order_show";
  }
  function is_discount_send()
  {
    return $this->_get_value("1");
  }
  function set_is_discount_send($value)
  {
    return $this->_set_value("1", $value);
  }
  function is_discount_first_order()
  {
    return $this->_get_value("2");
  }
  function set_is_discount_first_order($value)
  {
    return $this->_set_value("2", $value);
  }
  function discount_send_show()
  {
    return $this->_get_value("3");
  }
  function set_discount_send_show($value)
  {
    return $this->_set_value("3", $value);
  }
  function discount_first_order_show()
  {
    return $this->_get_value("4");
  }
  function set_discount_first_order_show($value)
  {
    return $this->_set_value("4", $value);
  }
}
class ShopList_ShopInfo_InvoiceInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_ShopInfo_InvoiceInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_ShopInfo_InvoiceInfo"]["1"] = "is_support_invoice";
    self::$fields["ShopList_ShopInfo_InvoiceInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_ShopInfo_InvoiceInfo"]["2"] = "support_invoice_show";
  }
  function is_support_invoice()
  {
    return $this->_get_value("1");
  }
  function set_is_support_invoice($value)
  {
    return $this->_set_value("1", $value);
  }
  function support_invoice_show()
  {
    return $this->_get_value("2");
  }
  function set_support_invoice_show($value)
  {
    return $this->_set_value("2", $value);
  }
}
class ShopList_ShopInfo_CouponInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_ShopInfo_CouponInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_ShopInfo_CouponInfo"]["1"] = "support_coupon";
    self::$fields["ShopList_ShopInfo_CouponInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_ShopInfo_CouponInfo"]["2"] = "coupon_msg";
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
class ShopList_ShopInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList_ShopInfo"]["10"] = "ShopList_ShopInfo_DiscountInfo";
    $this->values["10"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["10"] = "discount_info";
    self::$fields["ShopList_ShopInfo"]["16"] = "ShopList_ShopInfo_InvoiceInfo";
    $this->values["16"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["16"] = "invoice_info";
    self::$fields["ShopList_ShopInfo"]["17"] = "ShopList_ShopInfo_CouponInfo";
    $this->values["17"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["17"] = "coupon_info";
    self::$fields["ShopList_ShopInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["1"] = "shop_name";
    self::$fields["ShopList_ShopInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["2"] = "logo_url";
    self::$fields["ShopList_ShopInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["3"] = "takeout_price";
    self::$fields["ShopList_ShopInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["4"] = "takeout_cost";
    self::$fields["ShopList_ShopInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["5"] = "delivery_time";
    self::$fields["ShopList_ShopInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["6"] = "start_time";
    self::$fields["ShopList_ShopInfo"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["7"] = "bussiness_status";
    self::$fields["ShopList_ShopInfo"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["8"] = "release_id";
    self::$fields["ShopList_ShopInfo"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["9"] = "saled";
    self::$fields["ShopList_ShopInfo"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["11"] = "end_time";
    self::$fields["ShopList_ShopInfo"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["12"] = "is_online";
    self::$fields["ShopList_ShopInfo"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["13"] = "distance";
    self::$fields["ShopList_ShopInfo"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["14"] = "shop_id";
    self::$fields["ShopList_ShopInfo"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["ShopList_ShopInfo"]["15"] = "delivery_regions";
  }
  function discount_info()
  {
    return $this->_get_value("10");
  }
  function set_discount_info($value)
  {
    return $this->_set_value("10", $value);
  }
  function invoice_info()
  {
    return $this->_get_value("16");
  }
  function set_invoice_info($value)
  {
    return $this->_set_value("16", $value);
  }
  function coupon_info()
  {
    return $this->_get_value("17");
  }
  function set_coupon_info($value)
  {
    return $this->_set_value("17", $value);
  }
  function shop_name()
  {
    return $this->_get_value("1");
  }
  function set_shop_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function logo_url()
  {
    return $this->_get_value("2");
  }
  function set_logo_url($value)
  {
    return $this->_set_value("2", $value);
  }
  function takeout_price()
  {
    return $this->_get_value("3");
  }
  function set_takeout_price($value)
  {
    return $this->_set_value("3", $value);
  }
  function takeout_cost()
  {
    return $this->_get_value("4");
  }
  function set_takeout_cost($value)
  {
    return $this->_set_value("4", $value);
  }
  function delivery_time()
  {
    return $this->_get_value("5");
  }
  function set_delivery_time($value)
  {
    return $this->_set_value("5", $value);
  }
  function start_time()
  {
    return $this->_get_value("6");
  }
  function set_start_time($value)
  {
    return $this->_set_value("6", $value);
  }
  function bussiness_status()
  {
    return $this->_get_value("7");
  }
  function set_bussiness_status($value)
  {
    return $this->_set_value("7", $value);
  }
  function release_id()
  {
    return $this->_get_value("8");
  }
  function set_release_id($value)
  {
    return $this->_set_value("8", $value);
  }
  function saled()
  {
    return $this->_get_value("9");
  }
  function set_saled($value)
  {
    return $this->_set_value("9", $value);
  }
  function end_time()
  {
    return $this->_get_value("11");
  }
  function set_end_time($value)
  {
    return $this->_set_value("11", $value);
  }
  function is_online()
  {
    return $this->_get_value("12");
  }
  function set_is_online($value)
  {
    return $this->_set_value("12", $value);
  }
  function distance()
  {
    return $this->_get_value("13");
  }
  function set_distance($value)
  {
    return $this->_set_value("13", $value);
  }
  function shop_id()
  {
    return $this->_get_value("14");
  }
  function set_shop_id($value)
  {
    return $this->_set_value("14", $value);
  }
  function delivery_regions()
  {
    return $this->_get_value("15");
  }
  function set_delivery_regions($value)
  {
    return $this->_set_value("15", $value);
  }
}
class ShopList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["ShopList"]["1"] = "ShopList_Option";
    $this->values["1"] = "";
    self::$fieldNames["ShopList"]["1"] = "option";
    self::$fields["ShopList"]["4"] = "ShopList_Filter";
    $this->values["4"] = "";
    self::$fieldNames["ShopList"]["4"] = "filter";
    self::$fields["ShopList"]["5"] = "ShopList_DiscountInfo";
    $this->values["5"] = "";
    self::$fieldNames["ShopList"]["5"] = "discount_info";
    self::$fields["ShopList"]["6"] = "ShopList_InvoiceInfo";
    $this->values["6"] = "";
    self::$fieldNames["ShopList"]["6"] = "invoice_info";
    self::$fields["ShopList"]["2"] = "ShopList_ShopInfo";
    $this->values["2"] = array();
    self::$fieldNames["ShopList"]["2"] = "shop_info";
    self::$fields["ShopList"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["ShopList"]["3"] = "total";
    self::$fields["ShopList"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["ShopList"]["7"] = "exist_activity";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function filter()
  {
    return $this->_get_value("4");
  }
  function set_filter($value)
  {
    return $this->_set_value("4", $value);
  }
  function discount_info()
  {
    return $this->_get_value("5");
  }
  function set_discount_info($value)
  {
    return $this->_set_value("5", $value);
  }
  function invoice_info()
  {
    return $this->_get_value("6");
  }
  function set_invoice_info($value)
  {
    return $this->_set_value("6", $value);
  }
  function shop_info($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_shop_info()
  {
    return $this->_add_arr_value("2");
  }
  function set_shop_info($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_shop_infos($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_shop_info()
  {
    $this->_remove_last_arr_value("2");
  }
  function shop_infos_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_shop_infos()
  {
    return $this->_get_value("2");
  }
  function total()
  {
    return $this->_get_value("3");
  }
  function set_total($value)
  {
    return $this->_set_value("3", $value);
  }
  function exist_activity()
  {
    return $this->_get_value("7");
  }
  function set_exist_activity($value)
  {
    return $this->_set_value("7", $value);
  }
}
?>