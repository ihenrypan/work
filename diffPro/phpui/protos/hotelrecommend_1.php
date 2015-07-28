<?php
class HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["1"] = "discount_content";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["2"] = "discount_dl";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["3"] = "discount_id";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo"]["4"] = "name";
  }
  function discount_content()
  {
    return $this->_get_value("1");
  }
  function set_discount_content($value)
  {
    return $this->_set_value("1", $value);
  }
  function discount_dl()
  {
    return $this->_get_value("2");
  }
  function set_discount_dl($value)
  {
    return $this->_set_value("2", $value);
  }
  function discount_id()
  {
    return $this->_get_value("3");
  }
  function set_discount_id($value)
  {
    return $this->_set_value("3", $value);
  }
  function name()
  {
    return $this->_get_value("4");
  }
  function set_name($value)
  {
    return $this->_set_value("4", $value);
  }
}
class HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["1"] = "groupon_num";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["2"] = "groupon_price";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["3"] = "groupon_title";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["4"] = "groupon_image";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["5"] = "regular_price";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["6"] = "groupon_url_mobile";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["7"] = "groupon_webapp_url";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo"]["8"] = "groupon_reservation";
  }
  function groupon_num()
  {
    return $this->_get_value("1");
  }
  function set_groupon_num($value)
  {
    return $this->_set_value("1", $value);
  }
  function groupon_price()
  {
    return $this->_get_value("2");
  }
  function set_groupon_price($value)
  {
    return $this->_set_value("2", $value);
  }
  function groupon_title()
  {
    return $this->_get_value("3");
  }
  function set_groupon_title($value)
  {
    return $this->_set_value("3", $value);
  }
  function groupon_image()
  {
    return $this->_get_value("4");
  }
  function set_groupon_image($value)
  {
    return $this->_set_value("4", $value);
  }
  function regular_price()
  {
    return $this->_get_value("5");
  }
  function set_regular_price($value)
  {
    return $this->_set_value("5", $value);
  }
  function groupon_url_mobile()
  {
    return $this->_get_value("6");
  }
  function set_groupon_url_mobile($value)
  {
    return $this->_set_value("6", $value);
  }
  function groupon_webapp_url()
  {
    return $this->_get_value("7");
  }
  function set_groupon_webapp_url($value)
  {
    return $this->_set_value("7", $value);
  }
  function groupon_reservation()
  {
    return $this->_get_value("8");
  }
  function set_groupon_reservation($value)
  {
    return $this->_set_value("8", $value);
  }
}
class HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["1"] = "oril_price";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["2"] = "oril_type";
  }
  function oril_price()
  {
    return $this->_get_value("1");
  }
  function set_oril_price($value)
  {
    return $this->_set_value("1", $value);
  }
  function oril_type()
  {
    return $this->_get_value("2");
  }
  function set_oril_type($value)
  {
    return $this->_set_value("2", $value);
  }
}
class HotelRecommend_Contents_Ext_DetailInfo_OrilInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo"]["1"] = "HotelRecommend_Contents_Ext_DetailInfo_OrilInfo_OrilDetail";
    $this->values["1"] = array();
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_OrilInfo"]["1"] = "oril_detail";
  }
  function oril_detail($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_oril_detail()
  {
    return $this->_add_arr_value("1");
  }
  function set_oril_detail($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_oril_details($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_oril_detail()
  {
    $this->_remove_last_arr_value("1");
  }
  function oril_details_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_oril_details()
  {
    return $this->_get_value("1");
  }
}
class HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel"]["1"] = "title";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel"]["2"] = "content";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
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
class HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web"]["1"] = "title";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web"]["2"] = "content";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
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
class HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["1"] = "content";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["2"] = "title";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms"]["3"] = "type";
  }
  function content()
  {
    return $this->_get_value("1");
  }
  function set_content($value)
  {
    return $this->_set_value("1", $value);
  }
  function title()
  {
    return $this->_get_value("2");
  }
  function set_title($value)
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
class HotelRecommend_Contents_Ext_DetailInfo_BookInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["1"] = "HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Tel";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["1"] = "tel";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["2"] = "HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Web";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["2"] = "web";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["3"] = "HotelRecommend_Contents_Ext_DetailInfo_BookInfo_Coms";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_BookInfo"]["3"] = "coms";
  }
  function tel()
  {
    return $this->_get_value("1");
  }
  function set_tel($value)
  {
    return $this->_set_value("1", $value);
  }
  function web()
  {
    return $this->_get_value("2");
  }
  function set_web($value)
  {
    return $this->_set_value("2", $value);
  }
  function coms()
  {
    return $this->_get_value("3");
  }
  function set_coms($value)
  {
    return $this->_set_value("3", $value);
  }
}
class HotelRecommend_Contents_Ext_DetailInfo_Activity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["1"] = "level";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["2"] = "title";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["3"] = "color";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["4"] = "bg_color";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["5"] = "desc";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["6"] = "href";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo_Activity"]["7"] = "img_url";
  }
  function level()
  {
    return $this->_get_value("1");
  }
  function set_level($value)
  {
    return $this->_set_value("1", $value);
  }
  function title()
  {
    return $this->_get_value("2");
  }
  function set_title($value)
  {
    return $this->_set_value("2", $value);
  }
  function color()
  {
    return $this->_get_value("3");
  }
  function set_color($value)
  {
    return $this->_set_value("3", $value);
  }
  function bg_color()
  {
    return $this->_get_value("4");
  }
  function set_bg_color($value)
  {
    return $this->_set_value("4", $value);
  }
  function desc()
  {
    return $this->_get_value("5");
  }
  function set_desc($value)
  {
    return $this->_set_value("5", $value);
  }
  function href()
  {
    return $this->_get_value("6");
  }
  function set_href($value)
  {
    return $this->_set_value("6", $value);
  }
  function img_url()
  {
    return $this->_get_value("7");
  }
  function set_img_url($value)
  {
    return $this->_set_value("7", $value);
  }
}
class HotelRecommend_Contents_Ext_DetailInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["10"] = "HotelRecommend_Contents_Ext_DetailInfo_PremiumInfo";
    $this->values["10"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["10"] = "premium_info";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["15"] = "HotelRecommend_Contents_Ext_DetailInfo_GrouponInfo";
    $this->values["15"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["15"] = "groupon_info";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["16"] = "HotelRecommend_Contents_Ext_DetailInfo_OrilInfo";
    $this->values["16"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["16"] = "oril_info";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["18"] = "HotelRecommend_Contents_Ext_DetailInfo_BookInfo";
    $this->values["18"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["18"] = "book_info";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["23"] = "HotelRecommend_Contents_Ext_DetailInfo_Activity";
    $this->values["23"] = array();
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["23"] = "activity";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["1"] = "PBString";
    $this->values["1"] = array();
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["1"] = "flag";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["2"] = "overall_rating";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["3"] = "price_text";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["4"] = "tag";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["5"] = "image";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["6"] = "show_info";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["7"] = "premium_flag";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["8"] = "discount_total";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["9"] = "groupon_total";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["11"] = "comment_num";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["12"] = "movie_flag";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["13"] = "PBInt";
    $this->values["13"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["13"] = "movie_film_count";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["14"] = "PBInt";
    $this->values["14"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["14"] = "groupon_flag";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["17"] = "wap_bookable";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["19"] = "price";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["20"] = "wise_fullroom";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["21"] = "discount";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["22"] = "grade";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["24"] = "guide";
    self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["25"] = "PBString";
    $this->values["25"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext_DetailInfo"]["25"] = "special_service";
  }
  function premium_info()
  {
    return $this->_get_value("10");
  }
  function set_premium_info($value)
  {
    return $this->_set_value("10", $value);
  }
  function groupon_info()
  {
    return $this->_get_value("15");
  }
  function set_groupon_info($value)
  {
    return $this->_set_value("15", $value);
  }
  function oril_info()
  {
    return $this->_get_value("16");
  }
  function set_oril_info($value)
  {
    return $this->_set_value("16", $value);
  }
  function book_info()
  {
    return $this->_get_value("18");
  }
  function set_book_info($value)
  {
    return $this->_set_value("18", $value);
  }
  function activity($offset)
  {
    return $this->_get_arr_value("23", $offset);
  }
  function add_activity()
  {
    return $this->_add_arr_value("23");
  }
  function set_activity($index, $value)
  {
    $this->_set_arr_value("23", $index, $value);
  }
  function set_all_activitys($values)
  {
    return $this->_set_arr_values("23", $values);
  }
  function remove_last_activity()
  {
    $this->_remove_last_arr_value("23");
  }
  function activitys_size()
  {
    return $this->_get_arr_size("23");
  }
  function get_activitys()
  {
    return $this->_get_value("23");
  }
  function flag($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_flag($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_flag($index, $value)
  {
    $v = new self::$fields["HotelRecommend_Contents_Ext_DetailInfo"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_flag()
  {
    $this->_remove_last_arr_value("1");
  }
  function flags_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_flags()
  {
    return $this->_get_value("1");
  }
  function overall_rating()
  {
    return $this->_get_value("2");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("2", $value);
  }
  function price_text()
  {
    return $this->_get_value("3");
  }
  function set_price_text($value)
  {
    return $this->_set_value("3", $value);
  }
  function tag()
  {
    return $this->_get_value("4");
  }
  function set_tag($value)
  {
    return $this->_set_value("4", $value);
  }
  function image()
  {
    return $this->_get_value("5");
  }
  function set_image($value)
  {
    return $this->_set_value("5", $value);
  }
  function show_info()
  {
    return $this->_get_value("6");
  }
  function set_show_info($value)
  {
    return $this->_set_value("6", $value);
  }
  function premium_flag()
  {
    return $this->_get_value("7");
  }
  function set_premium_flag($value)
  {
    return $this->_set_value("7", $value);
  }
  function discount_total()
  {
    return $this->_get_value("8");
  }
  function set_discount_total($value)
  {
    return $this->_set_value("8", $value);
  }
  function groupon_total()
  {
    return $this->_get_value("9");
  }
  function set_groupon_total($value)
  {
    return $this->_set_value("9", $value);
  }
  function comment_num()
  {
    return $this->_get_value("11");
  }
  function set_comment_num($value)
  {
    return $this->_set_value("11", $value);
  }
  function movie_flag()
  {
    return $this->_get_value("12");
  }
  function set_movie_flag($value)
  {
    return $this->_set_value("12", $value);
  }
  function movie_film_count()
  {
    return $this->_get_value("13");
  }
  function set_movie_film_count($value)
  {
    return $this->_set_value("13", $value);
  }
  function groupon_flag()
  {
    return $this->_get_value("14");
  }
  function set_groupon_flag($value)
  {
    return $this->_set_value("14", $value);
  }
  function wap_bookable()
  {
    return $this->_get_value("17");
  }
  function set_wap_bookable($value)
  {
    return $this->_set_value("17", $value);
  }
  function price()
  {
    return $this->_get_value("19");
  }
  function set_price($value)
  {
    return $this->_set_value("19", $value);
  }
  function wise_fullroom()
  {
    return $this->_get_value("20");
  }
  function set_wise_fullroom($value)
  {
    return $this->_set_value("20", $value);
  }
  function discount()
  {
    return $this->_get_value("21");
  }
  function set_discount($value)
  {
    return $this->_set_value("21", $value);
  }
  function grade()
  {
    return $this->_get_value("22");
  }
  function set_grade($value)
  {
    return $this->_set_value("22", $value);
  }
  function guide()
  {
    return $this->_get_value("24");
  }
  function set_guide($value)
  {
    return $this->_set_value("24", $value);
  }
  function special_service()
  {
    return $this->_get_value("25");
  }
  function set_special_service($value)
  {
    return $this->_set_value("25", $value);
  }
}
class HotelRecommend_Contents_Ext extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Ext"]["2"] = "HotelRecommend_Contents_Ext_DetailInfo";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext"]["2"] = "detail_info";
    self::$fields["HotelRecommend_Contents_Ext"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Ext"]["1"] = "src_name";
  }
  function detail_info()
  {
    return $this->_get_value("2");
  }
  function set_detail_info($value)
  {
    return $this->_set_value("2", $value);
  }
  function src_name()
  {
    return $this->_get_value("1");
  }
  function set_src_name($value)
  {
    return $this->_set_value("1", $value);
  }
}
class HotelRecommend_Contents_Show extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents_Show"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["1"] = "address";
    self::$fields["HotelRecommend_Contents_Show"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["2"] = "image";
    self::$fields["HotelRecommend_Contents_Show"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["3"] = "name";
    self::$fields["HotelRecommend_Contents_Show"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["4"] = "icon";
    self::$fields["HotelRecommend_Contents_Show"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["5"] = "distance";
    self::$fields["HotelRecommend_Contents_Show"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["6"] = "overall_rating";
    self::$fields["HotelRecommend_Contents_Show"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["7"] = "price";
    self::$fields["HotelRecommend_Contents_Show"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["8"] = "ep_char";
    self::$fields["HotelRecommend_Contents_Show"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["9"] = "ec_reason";
    self::$fields["HotelRecommend_Contents_Show"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["10"] = "phone_button";
    self::$fields["HotelRecommend_Contents_Show"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["11"] = "book_info";
    self::$fields["HotelRecommend_Contents_Show"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["HotelRecommend_Contents_Show"]["12"] = "map_button";
  }
  function address()
  {
    return $this->_get_value("1");
  }
  function set_address($value)
  {
    return $this->_set_value("1", $value);
  }
  function image()
  {
    return $this->_get_value("2");
  }
  function set_image($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("3");
  }
  function set_name($value)
  {
    return $this->_set_value("3", $value);
  }
  function icon()
  {
    return $this->_get_value("4");
  }
  function set_icon($value)
  {
    return $this->_set_value("4", $value);
  }
  function distance()
  {
    return $this->_get_value("5");
  }
  function set_distance($value)
  {
    return $this->_set_value("5", $value);
  }
  function overall_rating()
  {
    return $this->_get_value("6");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("6", $value);
  }
  function price()
  {
    return $this->_get_value("7");
  }
  function set_price($value)
  {
    return $this->_set_value("7", $value);
  }
  function ep_char()
  {
    return $this->_get_value("8");
  }
  function set_ep_char($value)
  {
    return $this->_set_value("8", $value);
  }
  function ec_reason()
  {
    return $this->_get_value("9");
  }
  function set_ec_reason($value)
  {
    return $this->_set_value("9", $value);
  }
  function phone_button()
  {
    return $this->_get_value("10");
  }
  function set_phone_button($value)
  {
    return $this->_set_value("10", $value);
  }
  function book_info()
  {
    return $this->_get_value("11");
  }
  function set_book_info($value)
  {
    return $this->_set_value("11", $value);
  }
  function map_button()
  {
    return $this->_get_value("12");
  }
  function set_map_button($value)
  {
    return $this->_set_value("12", $value);
  }
}
class HotelRecommend_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["1"] = "geo";
    self::$fields["HotelRecommend_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["2"] = "name";
    self::$fields["HotelRecommend_Contents"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["3"] = "uid";
    self::$fields["HotelRecommend_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["4"] = "acc_flag";
    self::$fields["HotelRecommend_Contents"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["5"] = "addr";
    self::$fields["HotelRecommend_Contents"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["6"] = "detail";
    self::$fields["HotelRecommend_Contents"]["7"] = "PBString";
    $this->values["7"] = array();
    self::$fieldNames["HotelRecommend_Contents"]["7"] = "rec_reason";
    self::$fields["HotelRecommend_Contents"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["8"] = "tel";
    self::$fields["HotelRecommend_Contents"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["9"] = "poiType";
    self::$fields["HotelRecommend_Contents"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["10"] = "pano";
    self::$fields["HotelRecommend_Contents"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["11"] = "indoor_pano";
    self::$fields["HotelRecommend_Contents"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["12"] = "aoi";
    self::$fields["HotelRecommend_Contents"]["13"] = "HotelRecommend_Contents_Ext";
    $this->values["13"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["13"] = "ext";
    self::$fields["HotelRecommend_Contents"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["14"] = "poi_type_text";
    self::$fields["HotelRecommend_Contents"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["15"] = "child_catalog";
    self::$fields["HotelRecommend_Contents"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["16"] = "poi_child_text";
    self::$fields["HotelRecommend_Contents"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["17"] = "new_catalog_id";
    self::$fields["HotelRecommend_Contents"]["18"] = "PBInt";
    $this->values["18"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["18"] = "view_type";
    self::$fields["HotelRecommend_Contents"]["19"] = "PBInt";
    $this->values["19"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["19"] = "list_show";
    self::$fields["HotelRecommend_Contents"]["20"] = "PBInt";
    $this->values["20"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["20"] = "show_level";
    self::$fields["HotelRecommend_Contents"]["21"] = "PBInt";
    $this->values["21"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["21"] = "icon_id";
    self::$fields["HotelRecommend_Contents"]["22"] = "PBInt";
    $this->values["22"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["22"] = "kindtype";
    self::$fields["HotelRecommend_Contents"]["23"] = "PBInt";
    $this->values["23"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["23"] = "tag";
    self::$fields["HotelRecommend_Contents"]["24"] = "PBInt";
    $this->values["24"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["24"] = "rank";
    self::$fields["HotelRecommend_Contents"]["25"] = "PBInt";
    $this->values["25"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["25"] = "max_show_level";
    self::$fields["HotelRecommend_Contents"]["26"] = "HotelRecommend_Contents_Show";
    $this->values["26"] = "";
    self::$fieldNames["HotelRecommend_Contents"]["26"] = "show";
  }
  function geo()
  {
    return $this->_get_value("1");
  }
  function set_geo($value)
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
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function acc_flag()
  {
    return $this->_get_value("4");
  }
  function set_acc_flag($value)
  {
    return $this->_set_value("4", $value);
  }
  function addr()
  {
    return $this->_get_value("5");
  }
  function set_addr($value)
  {
    return $this->_set_value("5", $value);
  }
  function detail()
  {
    return $this->_get_value("6");
  }
  function set_detail($value)
  {
    return $this->_set_value("6", $value);
  }
  function rec_reason($offset)
  {
    $v = $this->_get_arr_value("7", $offset);
    return $v->get_value();
  }
  function append_rec_reason($value)
  {
    $v = $this->_add_arr_value("7");
    $v->set_value($value);
  }
  function set_rec_reason($index, $value)
  {
    $v = new self::$fields["HotelRecommend_Contents"]["7"]();
    $v->set_value($value);
    $this->_set_arr_value("7", $index, $v);
  }
  function remove_last_rec_reason()
  {
    $this->_remove_last_arr_value("7");
  }
  function rec_reasons_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_rec_reasons()
  {
    return $this->_get_value("7");
  }
  function tel()
  {
    return $this->_get_value("8");
  }
  function set_tel($value)
  {
    return $this->_set_value("8", $value);
  }
  function poiType()
  {
    return $this->_get_value("9");
  }
  function set_poiType($value)
  {
    return $this->_set_value("9", $value);
  }
  function pano()
  {
    return $this->_get_value("10");
  }
  function set_pano($value)
  {
    return $this->_set_value("10", $value);
  }
  function indoor_pano()
  {
    return $this->_get_value("11");
  }
  function set_indoor_pano($value)
  {
    return $this->_set_value("11", $value);
  }
  function aoi()
  {
    return $this->_get_value("12");
  }
  function set_aoi($value)
  {
    return $this->_set_value("12", $value);
  }
  function ext()
  {
    return $this->_get_value("13");
  }
  function set_ext($value)
  {
    return $this->_set_value("13", $value);
  }
  function poi_type_text()
  {
    return $this->_get_value("14");
  }
  function set_poi_type_text($value)
  {
    return $this->_set_value("14", $value);
  }
  function child_catalog()
  {
    return $this->_get_value("15");
  }
  function set_child_catalog($value)
  {
    return $this->_set_value("15", $value);
  }
  function poi_child_text()
  {
    return $this->_get_value("16");
  }
  function set_poi_child_text($value)
  {
    return $this->_set_value("16", $value);
  }
  function new_catalog_id()
  {
    return $this->_get_value("17");
  }
  function set_new_catalog_id($value)
  {
    return $this->_set_value("17", $value);
  }
  function view_type()
  {
    return $this->_get_value("18");
  }
  function set_view_type($value)
  {
    return $this->_set_value("18", $value);
  }
  function list_show()
  {
    return $this->_get_value("19");
  }
  function set_list_show($value)
  {
    return $this->_set_value("19", $value);
  }
  function show_level()
  {
    return $this->_get_value("20");
  }
  function set_show_level($value)
  {
    return $this->_set_value("20", $value);
  }
  function icon_id()
  {
    return $this->_get_value("21");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("21", $value);
  }
  function kindtype()
  {
    return $this->_get_value("22");
  }
  function set_kindtype($value)
  {
    return $this->_set_value("22", $value);
  }
  function tag()
  {
    return $this->_get_value("23");
  }
  function set_tag($value)
  {
    return $this->_set_value("23", $value);
  }
  function rank()
  {
    return $this->_get_value("24");
  }
  function set_rank($value)
  {
    return $this->_set_value("24", $value);
  }
  function max_show_level()
  {
    return $this->_get_value("25");
  }
  function set_max_show_level($value)
  {
    return $this->_set_value("25", $value);
  }
  function show()
  {
    return $this->_get_value("26");
  }
  function set_show($value)
  {
    return $this->_set_value("26", $value);
  }
}
class HotelRecommend extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["HotelRecommend"]["1"] = "HotelRecommend_Contents";
    $this->values["1"] = array();
    self::$fieldNames["HotelRecommend"]["1"] = "contents";
    self::$fields["HotelRecommend"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["HotelRecommend"]["2"] = "third_search";
    self::$fields["HotelRecommend"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["HotelRecommend"]["3"] = "landmark_third_search";
    self::$fields["HotelRecommend"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["HotelRecommend"]["4"] = "all_city_search";
    self::$fields["HotelRecommend"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["HotelRecommend"]["5"] = "nb_x";
    self::$fields["HotelRecommend"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["HotelRecommend"]["6"] = "nb_y";
  }
  function contents($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("1");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("1");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_contentss()
  {
    return $this->_get_value("1");
  }
  function third_search()
  {
    return $this->_get_value("2");
  }
  function set_third_search($value)
  {
    return $this->_set_value("2", $value);
  }
  function landmark_third_search()
  {
    return $this->_get_value("3");
  }
  function set_landmark_third_search($value)
  {
    return $this->_set_value("3", $value);
  }
  function all_city_search()
  {
    return $this->_get_value("4");
  }
  function set_all_city_search($value)
  {
    return $this->_set_value("4", $value);
  }
  function nb_x()
  {
    return $this->_get_value("5");
  }
  function set_nb_x($value)
  {
    return $this->_set_value("5", $value);
  }
  function nb_y()
  {
    return $this->_get_value("6");
  }
  function set_nb_y($value)
  {
    return $this->_set_value("6", $value);
  }
}
?>