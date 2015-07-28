<?php
class PoiResult_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Option"]["1"] = "total";
    self::$fields["PoiResult_Option"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Option"]["2"] = "loc_attr";
    self::$fields["PoiResult_Option"]["3"] = "PBBool";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Option"]["3"] = "op_gel";
    self::$fields["PoiResult_Option"]["4"] = "PBBool";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Option"]["4"] = "op_addr";
    self::$fields["PoiResult_Option"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Option"]["5"] = "rp_strategy";
    self::$fields["PoiResult_Option"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Option"]["6"] = "qid";
    self::$fields["PoiResult_Option"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_Option"]["7"] = "total_busline_num";
    self::$fields["PoiResult_Option"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_Option"]["8"] = "res_bound";
    self::$fields["PoiResult_Option"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult_Option"]["9"] = "res_bound_acc";
    self::$fields["PoiResult_Option"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult_Option"]["10"] = "res_x";
    self::$fields["PoiResult_Option"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["PoiResult_Option"]["11"] = "res_y";
    self::$fields["PoiResult_Option"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["PoiResult_Option"]["12"] = "list_thirdking_flag";
    self::$fields["PoiResult_Option"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["PoiResult_Option"]["13"] = "landmark_flag";
    self::$fields["PoiResult_Option"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["PoiResult_Option"]["14"] = "ldata";
    self::$fields["PoiResult_Option"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["PoiResult_Option"]["15"] = "lbs_direct_flag";
  }
  function total()
  {
    return $this->_get_value("1");
  }
  function set_total($value)
  {
    return $this->_set_value("1", $value);
  }
  function loc_attr()
  {
    return $this->_get_value("2");
  }
  function set_loc_attr($value)
  {
    return $this->_set_value("2", $value);
  }
  function op_gel()
  {
    return $this->_get_value("3");
  }
  function set_op_gel($value)
  {
    return $this->_set_value("3", $value);
  }
  function op_addr()
  {
    return $this->_get_value("4");
  }
  function set_op_addr($value)
  {
    return $this->_set_value("4", $value);
  }
  function rp_strategy()
  {
    return $this->_get_value("5");
  }
  function set_rp_strategy($value)
  {
    return $this->_set_value("5", $value);
  }
  function qid()
  {
    return $this->_get_value("6");
  }
  function set_qid($value)
  {
    return $this->_set_value("6", $value);
  }
  function total_busline_num()
  {
    return $this->_get_value("7");
  }
  function set_total_busline_num($value)
  {
    return $this->_set_value("7", $value);
  }
  function res_bound()
  {
    return $this->_get_value("8");
  }
  function set_res_bound($value)
  {
    return $this->_set_value("8", $value);
  }
  function res_bound_acc()
  {
    return $this->_get_value("9");
  }
  function set_res_bound_acc($value)
  {
    return $this->_set_value("9", $value);
  }
  function res_x()
  {
    return $this->_get_value("10");
  }
  function set_res_x($value)
  {
    return $this->_set_value("10", $value);
  }
  function res_y()
  {
    return $this->_get_value("11");
  }
  function set_res_y($value)
  {
    return $this->_set_value("11", $value);
  }
  function list_thirdking_flag()
  {
    return $this->_get_value("12");
  }
  function set_list_thirdking_flag($value)
  {
    return $this->_set_value("12", $value);
  }
  function landmark_flag()
  {
    return $this->_get_value("13");
  }
  function set_landmark_flag($value)
  {
    return $this->_set_value("13", $value);
  }
  function ldata()
  {
    return $this->_get_value("14");
  }
  function set_ldata($value)
  {
    return $this->_set_value("14", $value);
  }
  function lbs_direct_flag()
  {
    return $this->_get_value("15");
  }
  function set_lbs_direct_flag($value)
  {
    return $this->_set_value("15", $value);
  }
}
class PoiResult_Addrs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Addrs"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Addrs"]["1"] = "addr";
    self::$fields["PoiResult_Addrs"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Addrs"]["2"] = "geo";
    self::$fields["PoiResult_Addrs"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Addrs"]["3"] = "name";
    self::$fields["PoiResult_Addrs"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Addrs"]["4"] = "precise";
  }
  function addr()
  {
    return $this->_get_value("1");
  }
  function set_addr($value)
  {
    return $this->_set_value("1", $value);
  }
  function geo()
  {
    return $this->_get_value("2");
  }
  function set_geo($value)
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
  function precise()
  {
    return $this->_get_value("4");
  }
  function set_precise($value)
  {
    return $this->_set_value("4", $value);
  }
}
class PoiResult_Psrs extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Psrs"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Psrs"]["1"] = "SENum";
    self::$fields["PoiResult_Psrs"]["2"] = "PBString";
    $this->values["2"] = array();
    self::$fieldNames["PoiResult_Psrs"]["2"] = "SEResult";
  }
  function SENum()
  {
    return $this->_get_value("1");
  }
  function set_SENum($value)
  {
    return $this->_set_value("1", $value);
  }
  function SEResult($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_SEResult($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_SEResult($index, $value)
  {
    $v = new self::$fields["PoiResult_Psrs"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_SEResult()
  {
    $this->_remove_last_arr_value("2");
  }
  function SEResults_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_SEResults()
  {
    return $this->_get_value("2");
  }
}
class PoiResult_SuggestQuery extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_SuggestQuery"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_SuggestQuery"]["1"] = "query";
  }
  function query()
  {
    return $this->_get_value("1");
  }
  function set_query($value)
  {
    return $this->_set_value("1", $value);
  }
}
class PoiResult_PlaceInfo_SearchExt extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_PlaceInfo_SearchExt"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_SearchExt"]["1"] = "title";
    self::$fields["PoiResult_PlaceInfo_SearchExt"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_SearchExt"]["2"] = "wd";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
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
}
class PoiResult_PlaceInfo_DActCard extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_PlaceInfo_DActCard"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_DActCard"]["1"] = "link";
    self::$fields["PoiResult_PlaceInfo_DActCard"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_DActCard"]["2"] = "img_url";
  }
  function link()
  {
    return $this->_get_value("1");
  }
  function set_link($value)
  {
    return $this->_set_value("1", $value);
  }
  function img_url()
  {
    return $this->_get_value("2");
  }
  function set_img_url($value)
  {
    return $this->_set_value("2", $value);
  }
}
class PoiResult_PlaceInfo_BannerInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["1"] = "title";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["2"] = "score";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["3"] = "image";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["4"] = "act";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["5"] = "act_url";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["6"] = "description";
    self::$fields["PoiResult_PlaceInfo_BannerInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_PlaceInfo_BannerInfo"]["7"] = "star";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
  {
    return $this->_set_value("1", $value);
  }
  function score()
  {
    return $this->_get_value("2");
  }
  function set_score($value)
  {
    return $this->_set_value("2", $value);
  }
  function image()
  {
    return $this->_get_value("3");
  }
  function set_image($value)
  {
    return $this->_set_value("3", $value);
  }
  function act()
  {
    return $this->_get_value("4");
  }
  function set_act($value)
  {
    return $this->_set_value("4", $value);
  }
  function act_url()
  {
    return $this->_get_value("5");
  }
  function set_act_url($value)
  {
    return $this->_set_value("5", $value);
  }
  function description()
  {
    return $this->_get_value("6");
  }
  function set_description($value)
  {
    return $this->_set_value("6", $value);
  }
  function star()
  {
    return $this->_get_value("7");
  }
  function set_star($value)
  {
    return $this->_set_value("7", $value);
  }
}
class PoiResult_PlaceInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_PlaceInfo"]["7"] = "PoiResult_PlaceInfo_SearchExt";
    $this->values["7"] = array();
    self::$fieldNames["PoiResult_PlaceInfo"]["7"] = "search_ext";
    self::$fields["PoiResult_PlaceInfo"]["9"] = "PoiResult_PlaceInfo_DActCard";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["9"] = "d_act_card";
    self::$fields["PoiResult_PlaceInfo"]["8"] = "PoiResult_PlaceInfo_BannerInfo";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["8"] = "banner_info";
    self::$fields["PoiResult_PlaceInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["1"] = "d_data_type";
    self::$fields["PoiResult_PlaceInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["2"] = "d_sort_type";
    self::$fields["PoiResult_PlaceInfo"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["3"] = "d_sort_rule";
    self::$fields["PoiResult_PlaceInfo"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["4"] = "d_filters_show_flag";
    self::$fields["PoiResult_PlaceInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["5"] = "d_business_id";
    self::$fields["PoiResult_PlaceInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["6"] = "d_business_type";
    self::$fields["PoiResult_PlaceInfo"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult_PlaceInfo"]["10"] = "d_sub_type";
  }
  function search_ext($offset)
  {
    return $this->_get_arr_value("7", $offset);
  }
  function add_search_ext()
  {
    return $this->_add_arr_value("7");
  }
  function set_search_ext($index, $value)
  {
    $this->_set_arr_value("7", $index, $value);
  }
  function set_all_search_exts($values)
  {
    return $this->_set_arr_values("7", $values);
  }
  function remove_last_search_ext()
  {
    $this->_remove_last_arr_value("7");
  }
  function search_exts_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_search_exts()
  {
    return $this->_get_value("7");
  }
  function d_act_card()
  {
    return $this->_get_value("9");
  }
  function set_d_act_card($value)
  {
    return $this->_set_value("9", $value);
  }
  function banner_info()
  {
    return $this->_get_value("8");
  }
  function set_banner_info($value)
  {
    return $this->_set_value("8", $value);
  }
  function d_data_type()
  {
    return $this->_get_value("1");
  }
  function set_d_data_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function d_sort_type()
  {
    return $this->_get_value("2");
  }
  function set_d_sort_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function d_sort_rule()
  {
    return $this->_get_value("3");
  }
  function set_d_sort_rule($value)
  {
    return $this->_set_value("3", $value);
  }
  function d_filters_show_flag()
  {
    return $this->_get_value("4");
  }
  function set_d_filters_show_flag($value)
  {
    return $this->_set_value("4", $value);
  }
  function d_business_id()
  {
    return $this->_get_value("5");
  }
  function set_d_business_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function d_business_type()
  {
    return $this->_get_value("6");
  }
  function set_d_business_type($value)
  {
    return $this->_set_value("6", $value);
  }
  function d_sub_type()
  {
    return $this->_get_value("10");
  }
  function set_d_sub_type($value)
  {
    return $this->_set_value("10", $value);
  }
}
class PoiResult_Contents_Show extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Show"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["1"] = "address";
    self::$fields["PoiResult_Contents_Show"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["2"] = "image";
    self::$fields["PoiResult_Contents_Show"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["3"] = "name";
    self::$fields["PoiResult_Contents_Show"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["4"] = "icon";
    self::$fields["PoiResult_Contents_Show"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["5"] = "distance";
    self::$fields["PoiResult_Contents_Show"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["6"] = "overall_rating";
    self::$fields["PoiResult_Contents_Show"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["7"] = "price";
    self::$fields["PoiResult_Contents_Show"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["8"] = "ep_char";
    self::$fields["PoiResult_Contents_Show"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["9"] = "ec_reason";
    self::$fields["PoiResult_Contents_Show"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["10"] = "phone_button";
    self::$fields["PoiResult_Contents_Show"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["11"] = "book_info";
    self::$fields["PoiResult_Contents_Show"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["PoiResult_Contents_Show"]["12"] = "map_button";
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
class PoiResult_Contents_Ext_DetailInfo_PremiumInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["1"] = "discount_content";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["2"] = "discount_dl";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["3"] = "discount_id";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_PremiumInfo"]["4"] = "name";
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
class PoiResult_Contents_Ext_DetailInfo_GrouponInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["1"] = "groupon_num";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["2"] = "groupon_price";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["3"] = "groupon_title";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["4"] = "groupon_image";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["5"] = "regular_price";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["6"] = "groupon_url_mobile";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["7"] = "groupon_webapp_url";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_GrouponInfo"]["8"] = "groupon_reservation";
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
class PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["1"] = "oril_price";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail"]["2"] = "oril_type";
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
class PoiResult_Contents_Ext_DetailInfo_OrilInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_OrilInfo"]["1"] = "PoiResult_Contents_Ext_DetailInfo_OrilInfo_OrilDetail";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_OrilInfo"]["1"] = "oril_detail";
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
class PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel"]["1"] = "title";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel"]["2"] = "content";
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
class PoiResult_Contents_Ext_DetailInfo_BookInfo_Web extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Web"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Web"]["1"] = "title";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Web"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Web"]["2"] = "content";
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
class PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["1"] = "content";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["2"] = "title";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms"]["3"] = "type";
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
class PoiResult_Contents_Ext_DetailInfo_BookInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["1"] = "PoiResult_Contents_Ext_DetailInfo_BookInfo_Tel";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["1"] = "tel";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["2"] = "PoiResult_Contents_Ext_DetailInfo_BookInfo_Web";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["2"] = "web";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["3"] = "PoiResult_Contents_Ext_DetailInfo_BookInfo_Coms";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_BookInfo"]["3"] = "coms";
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
class PoiResult_Contents_Ext_DetailInfo_Activity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["1"] = "level";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["2"] = "title";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["3"] = "color";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["4"] = "bg_color";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["5"] = "desc";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["6"] = "href";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Activity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Activity"]["7"] = "img_url";
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
class PoiResult_Contents_Ext_DetailInfo_Impression extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Impression"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Impression"]["1"] = "keyword";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Impression"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Impression"]["2"] = "num";
  }
  function keyword()
  {
    return $this->_get_value("1");
  }
  function set_keyword($value)
  {
    return $this->_set_value("1", $value);
  }
  function num()
  {
    return $this->_get_value("2");
  }
  function set_num($value)
  {
    return $this->_set_value("2", $value);
  }
}
class PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main"]["1"] = "third_from";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main"]["2"] = "third_id";
  }
  function third_from()
  {
    return $this->_get_value("1");
  }
  function set_third_from($value)
  {
    return $this->_set_value("1", $value);
  }
  function third_id()
  {
    return $this->_get_value("2");
  }
  function set_third_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class PoiResult_Contents_Ext_DetailInfo_Meishipaihao extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Meishipaihao"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Meishipaihao"]["1"] = "is_ok";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Meishipaihao"]["2"] = "PoiResult_Contents_Ext_DetailInfo_Meishipaihao_Main";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Meishipaihao"]["2"] = "main";
  }
  function is_ok()
  {
    return $this->_get_value("1");
  }
  function set_is_ok($value)
  {
    return $this->_set_value("1", $value);
  }
  function main()
  {
    return $this->_get_value("2");
  }
  function set_main($value)
  {
    return $this->_set_value("2", $value);
  }
}
class PoiResult_Contents_Ext_DetailInfo_Marketbiz extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["1"] = "srcname";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["2"] = "content";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["3"] = "act";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["4"] = "stype";
    self::$fields["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo_Marketbiz"]["5"] = "dtype";
  }
  function srcname()
  {
    return $this->_get_value("1");
  }
  function set_srcname($value)
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
  function act()
  {
    return $this->_get_value("3");
  }
  function set_act($value)
  {
    return $this->_set_value("3", $value);
  }
  function stype()
  {
    return $this->_get_value("4");
  }
  function set_stype($value)
  {
    return $this->_set_value("4", $value);
  }
  function dtype()
  {
    return $this->_get_value("5");
  }
  function set_dtype($value)
  {
    return $this->_set_value("5", $value);
  }
}
class PoiResult_Contents_Ext_DetailInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["10"] = "PoiResult_Contents_Ext_DetailInfo_PremiumInfo";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["10"] = "premium_info";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["15"] = "PoiResult_Contents_Ext_DetailInfo_GrouponInfo";
    $this->values["15"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["15"] = "groupon_info";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["16"] = "PoiResult_Contents_Ext_DetailInfo_OrilInfo";
    $this->values["16"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["16"] = "oril_info";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["18"] = "PoiResult_Contents_Ext_DetailInfo_BookInfo";
    $this->values["18"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["18"] = "book_info";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["23"] = "PoiResult_Contents_Ext_DetailInfo_Activity";
    $this->values["23"] = array();
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["23"] = "activity";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["1"] = "PBString";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["1"] = "flag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["2"] = "overall_rating";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["3"] = "price_text";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["4"] = "tag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["5"] = "image";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["6"] = "show_info";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["7"] = "premium_flag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["8"] = "discount_total";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["9"] = "groupon_total";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["11"] = "comment_num";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["12"] = "movie_flag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["13"] = "PBInt";
    $this->values["13"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["13"] = "movie_film_count";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["14"] = "PBInt";
    $this->values["14"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["14"] = "groupon_flag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["17"] = "wap_bookable";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["19"] = "price";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["20"] = "wise_fullroom";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["21"] = "discount";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["22"] = "grade";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["24"] = "guide";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["25"] = "PBString";
    $this->values["25"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["25"] = "special_service";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["26"] = "flag_on_left";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["27"] = "PoiResult_Contents_Ext_DetailInfo_Impression";
    $this->values["27"] = array();
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["27"] = "impression";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["28"] = "PoiResult_Contents_Ext_DetailInfo_Meishipaihao";
    $this->values["28"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["28"] = "meishipaihao";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["29"] = "PBString";
    $this->values["29"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["29"] = "trade_tag";
    self::$fields["PoiResult_Contents_Ext_DetailInfo"]["30"] = "PoiResult_Contents_Ext_DetailInfo_Marketbiz";
    $this->values["30"] = "";
    self::$fieldNames["PoiResult_Contents_Ext_DetailInfo"]["30"] = "marketbiz";
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
    $v = new self::$fields["PoiResult_Contents_Ext_DetailInfo"]["1"]();
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
  function flag_on_left()
  {
    return $this->_get_value("26");
  }
  function set_flag_on_left($value)
  {
    return $this->_set_value("26", $value);
  }
  function impression($offset)
  {
    return $this->_get_arr_value("27", $offset);
  }
  function add_impression()
  {
    return $this->_add_arr_value("27");
  }
  function set_impression($index, $value)
  {
    $this->_set_arr_value("27", $index, $value);
  }
  function set_all_impressions($values)
  {
    return $this->_set_arr_values("27", $values);
  }
  function remove_last_impression()
  {
    $this->_remove_last_arr_value("27");
  }
  function impressions_size()
  {
    return $this->_get_arr_size("27");
  }
  function get_impressions()
  {
    return $this->_get_value("27");
  }
  function meishipaihao()
  {
    return $this->_get_value("28");
  }
  function set_meishipaihao($value)
  {
    return $this->_set_value("28", $value);
  }
  function trade_tag()
  {
    return $this->_get_value("29");
  }
  function set_trade_tag($value)
  {
    return $this->_set_value("29", $value);
  }
  function marketbiz()
  {
    return $this->_get_value("30");
  }
  function set_marketbiz($value)
  {
    return $this->_set_value("30", $value);
  }
}
class PoiResult_Contents_Ext extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Ext"]["2"] = "PoiResult_Contents_Ext_DetailInfo";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Ext"]["2"] = "detail_info";
    self::$fields["PoiResult_Contents_Ext"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Ext"]["1"] = "src_name";
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
class PoiResult_Contents_HeatMap_Points_GeoElements extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_HeatMap_Points_GeoElements"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_HeatMap_Points_GeoElements"]["1"] = "point";
  }
  function point($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_point($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_point($index, $value)
  {
    $v = new self::$fields["PoiResult_Contents_HeatMap_Points_GeoElements"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_point()
  {
    $this->_remove_last_arr_value("1");
  }
  function points_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_points()
  {
    return $this->_get_value("1");
  }
}
class PoiResult_Contents_HeatMap_Points extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_HeatMap_Points"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_HeatMap_Points"]["1"] = "bound";
    self::$fields["PoiResult_Contents_HeatMap_Points"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_HeatMap_Points"]["2"] = "type";
    self::$fields["PoiResult_Contents_HeatMap_Points"]["3"] = "PoiResult_Contents_HeatMap_Points_GeoElements";
    $this->values["3"] = array();
    self::$fieldNames["PoiResult_Contents_HeatMap_Points"]["3"] = "geo_elements";
  }
  function bound($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_bound($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_bound($index, $value)
  {
    $v = new self::$fields["PoiResult_Contents_HeatMap_Points"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_bound()
  {
    $this->_remove_last_arr_value("1");
  }
  function bounds_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_bounds()
  {
    return $this->_get_value("1");
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function geo_elements($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_geo_elements()
  {
    return $this->_add_arr_value("3");
  }
  function set_geo_elements($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_geo_elementss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_geo_elements()
  {
    $this->_remove_last_arr_value("3");
  }
  function geo_elementss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_geo_elementss()
  {
    return $this->_get_value("3");
  }
}
class PoiResult_Contents_HeatMap extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_HeatMap"]["2"] = "PoiResult_Contents_HeatMap_Points";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_HeatMap"]["2"] = "points";
    self::$fields["PoiResult_Contents_HeatMap"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_HeatMap"]["1"] = "rankstr";
    self::$fields["PoiResult_Contents_HeatMap"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_HeatMap"]["3"] = "type";
    self::$fields["PoiResult_Contents_HeatMap"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents_HeatMap"]["4"] = "rank";
  }
  function points()
  {
    return $this->_get_value("2");
  }
  function set_points($value)
  {
    return $this->_set_value("2", $value);
  }
  function rankstr()
  {
    return $this->_get_value("1");
  }
  function set_rankstr($value)
  {
    return $this->_set_value("1", $value);
  }
  function type()
  {
    return $this->_get_value("3");
  }
  function set_type($value)
  {
    return $this->_set_value("3", $value);
  }
  function rank()
  {
    return $this->_get_value("4");
  }
  function set_rank($value)
  {
    return $this->_set_value("4", $value);
  }
}
class PoiResult_Contents_Sgeo_GeoElements extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Sgeo_GeoElements"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_Sgeo_GeoElements"]["1"] = "point";
  }
  function point($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_point($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_point($index, $value)
  {
    $v = new self::$fields["PoiResult_Contents_Sgeo_GeoElements"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_point()
  {
    $this->_remove_last_arr_value("1");
  }
  function points_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_points()
  {
    return $this->_get_value("1");
  }
}
class PoiResult_Contents_Sgeo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Sgeo"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["PoiResult_Contents_Sgeo"]["1"] = "bound";
    self::$fields["PoiResult_Contents_Sgeo"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Sgeo"]["2"] = "type";
    self::$fields["PoiResult_Contents_Sgeo"]["3"] = "PoiResult_Contents_Sgeo_GeoElements";
    $this->values["3"] = array();
    self::$fieldNames["PoiResult_Contents_Sgeo"]["3"] = "geo_elements";
  }
  function bound($offset)
  {
    $v = $this->_get_arr_value("1", $offset);
    return $v->get_value();
  }
  function append_bound($value)
  {
    $v = $this->_add_arr_value("1");
    $v->set_value($value);
  }
  function set_bound($index, $value)
  {
    $v = new self::$fields["PoiResult_Contents_Sgeo"]["1"]();
    $v->set_value($value);
    $this->_set_arr_value("1", $index, $v);
  }
  function remove_last_bound()
  {
    $this->_remove_last_arr_value("1");
  }
  function bounds_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_bounds()
  {
    return $this->_get_value("1");
  }
  function type()
  {
    return $this->_get_value("2");
  }
  function set_type($value)
  {
    return $this->_set_value("2", $value);
  }
  function geo_elements($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_geo_elements()
  {
    return $this->_add_arr_value("3");
  }
  function set_geo_elements($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_geo_elementss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_geo_elements()
  {
    $this->_remove_last_arr_value("3");
  }
  function geo_elementss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_geo_elementss()
  {
    return $this->_get_value("3");
  }
}
class PoiResult_Contents_Button extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_Button"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_Button"]["1"] = "content";
    self::$fields["PoiResult_Contents_Button"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents_Button"]["2"] = "title";
    self::$fields["PoiResult_Contents_Button"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents_Button"]["3"] = "type";
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
class PoiResult_Contents_MapPoitag extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents_MapPoitag"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents_MapPoitag"]["1"] = "tag";
  }
  function tag()
  {
    return $this->_get_value("1");
  }
  function set_tag($value)
  {
    return $this->_set_value("1", $value);
  }
}
class PoiResult_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Contents"]["13"] = "PoiResult_Contents_Show";
    $this->values["13"] = "";
    self::$fieldNames["PoiResult_Contents"]["13"] = "show";
    self::$fields["PoiResult_Contents"]["14"] = "PoiResult_Contents_Ext";
    $this->values["14"] = "";
    self::$fieldNames["PoiResult_Contents"]["14"] = "ext";
    self::$fields["PoiResult_Contents"]["23"] = "PoiResult_Contents_HeatMap";
    $this->values["23"] = "";
    self::$fieldNames["PoiResult_Contents"]["23"] = "heat_map";
    self::$fields["PoiResult_Contents"]["21"] = "PoiResult_Contents_Sgeo";
    $this->values["21"] = "";
    self::$fieldNames["PoiResult_Contents"]["21"] = "sgeo";
    self::$fields["PoiResult_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Contents"]["1"] = "geo";
    self::$fields["PoiResult_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_Contents"]["2"] = "name";
    self::$fields["PoiResult_Contents"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_Contents"]["3"] = "uid";
    self::$fields["PoiResult_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_Contents"]["4"] = "acc_flag";
    self::$fields["PoiResult_Contents"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_Contents"]["5"] = "addr";
    self::$fields["PoiResult_Contents"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_Contents"]["6"] = "detail";
    self::$fields["PoiResult_Contents"]["7"] = "PBString";
    $this->values["7"] = array();
    self::$fieldNames["PoiResult_Contents"]["7"] = "rec_reason";
    self::$fields["PoiResult_Contents"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["PoiResult_Contents"]["8"] = "tel";
    self::$fields["PoiResult_Contents"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult_Contents"]["9"] = "poiType";
    self::$fields["PoiResult_Contents"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult_Contents"]["10"] = "pano";
    self::$fields["PoiResult_Contents"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["PoiResult_Contents"]["11"] = "indoor_pano";
    self::$fields["PoiResult_Contents"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["PoiResult_Contents"]["12"] = "aoi";
    self::$fields["PoiResult_Contents"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["PoiResult_Contents"]["15"] = "start_time";
    self::$fields["PoiResult_Contents"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["PoiResult_Contents"]["16"] = "end_time";
    self::$fields["PoiResult_Contents"]["17"] = "PBInt";
    $this->values["17"] = "";
    self::$fieldNames["PoiResult_Contents"]["17"] = "has_rtbus";
    self::$fields["PoiResult_Contents"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["PoiResult_Contents"]["18"] = "tip_rtbus";
    self::$fields["PoiResult_Contents"]["19"] = "PBInt";
    $this->values["19"] = "";
    self::$fieldNames["PoiResult_Contents"]["19"] = "rtbus_update_time";
    self::$fields["PoiResult_Contents"]["20"] = "PBInt";
    $this->values["20"] = "";
    self::$fieldNames["PoiResult_Contents"]["20"] = "father_son";
    self::$fields["PoiResult_Contents"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["PoiResult_Contents"]["22"] = "poi_type_text";
    self::$fields["PoiResult_Contents"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["PoiResult_Contents"]["24"] = "child_catalog";
    self::$fields["PoiResult_Contents"]["25"] = "PBString";
    $this->values["25"] = "";
    self::$fieldNames["PoiResult_Contents"]["25"] = "poi_child_text";
    self::$fields["PoiResult_Contents"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["PoiResult_Contents"]["26"] = "new_catalog_id";
    self::$fields["PoiResult_Contents"]["27"] = "PBInt";
    $this->values["27"] = "";
    self::$fieldNames["PoiResult_Contents"]["27"] = "view_type";
    self::$fields["PoiResult_Contents"]["28"] = "PBInt";
    $this->values["28"] = "";
    self::$fieldNames["PoiResult_Contents"]["28"] = "list_show";
    self::$fields["PoiResult_Contents"]["29"] = "PBInt";
    $this->values["29"] = "";
    self::$fieldNames["PoiResult_Contents"]["29"] = "show_level";
    self::$fields["PoiResult_Contents"]["30"] = "PBInt";
    $this->values["30"] = "";
    self::$fieldNames["PoiResult_Contents"]["30"] = "icon_id";
    self::$fields["PoiResult_Contents"]["31"] = "PBInt";
    $this->values["31"] = "";
    self::$fieldNames["PoiResult_Contents"]["31"] = "kindtype";
    self::$fields["PoiResult_Contents"]["32"] = "PBInt";
    $this->values["32"] = "";
    self::$fieldNames["PoiResult_Contents"]["32"] = "brand_icon_id";
    self::$fields["PoiResult_Contents"]["33"] = "PBInt";
    $this->values["33"] = "";
    self::$fieldNames["PoiResult_Contents"]["33"] = "tag";
    self::$fields["PoiResult_Contents"]["34"] = "PBInt";
    $this->values["34"] = "";
    self::$fieldNames["PoiResult_Contents"]["34"] = "rank";
    self::$fields["PoiResult_Contents"]["35"] = "PBInt";
    $this->values["35"] = "";
    self::$fieldNames["PoiResult_Contents"]["35"] = "max_show_level";
    self::$fields["PoiResult_Contents"]["36"] = "PBString";
    $this->values["36"] = "";
    self::$fieldNames["PoiResult_Contents"]["36"] = "indoor_floor";
    self::$fields["PoiResult_Contents"]["37"] = "PBString";
    $this->values["37"] = "";
    self::$fieldNames["PoiResult_Contents"]["37"] = "indoor_parent_uid";
    self::$fields["PoiResult_Contents"]["38"] = "PBBytes";
    $this->values["38"] = "";
    self::$fieldNames["PoiResult_Contents"]["38"] = "cloud_template";
    self::$fields["PoiResult_Contents"]["39"] = "PoiResult_Contents_Button";
    $this->values["39"] = "";
    self::$fieldNames["PoiResult_Contents"]["39"] = "button";
    self::$fields["PoiResult_Contents"]["40"] = "PoiResult_Contents_MapPoitag";
    $this->values["40"] = "";
    self::$fieldNames["PoiResult_Contents"]["40"] = "map_poitag";
  }
  function show()
  {
    return $this->_get_value("13");
  }
  function set_show($value)
  {
    return $this->_set_value("13", $value);
  }
  function ext()
  {
    return $this->_get_value("14");
  }
  function set_ext($value)
  {
    return $this->_set_value("14", $value);
  }
  function heat_map()
  {
    return $this->_get_value("23");
  }
  function set_heat_map($value)
  {
    return $this->_set_value("23", $value);
  }
  function sgeo()
  {
    return $this->_get_value("21");
  }
  function set_sgeo($value)
  {
    return $this->_set_value("21", $value);
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
    $v = new self::$fields["PoiResult_Contents"]["7"]();
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
  function start_time()
  {
    return $this->_get_value("15");
  }
  function set_start_time($value)
  {
    return $this->_set_value("15", $value);
  }
  function end_time()
  {
    return $this->_get_value("16");
  }
  function set_end_time($value)
  {
    return $this->_set_value("16", $value);
  }
  function has_rtbus()
  {
    return $this->_get_value("17");
  }
  function set_has_rtbus($value)
  {
    return $this->_set_value("17", $value);
  }
  function tip_rtbus()
  {
    return $this->_get_value("18");
  }
  function set_tip_rtbus($value)
  {
    return $this->_set_value("18", $value);
  }
  function rtbus_update_time()
  {
    return $this->_get_value("19");
  }
  function set_rtbus_update_time($value)
  {
    return $this->_set_value("19", $value);
  }
  function father_son()
  {
    return $this->_get_value("20");
  }
  function set_father_son($value)
  {
    return $this->_set_value("20", $value);
  }
  function poi_type_text()
  {
    return $this->_get_value("22");
  }
  function set_poi_type_text($value)
  {
    return $this->_set_value("22", $value);
  }
  function child_catalog()
  {
    return $this->_get_value("24");
  }
  function set_child_catalog($value)
  {
    return $this->_set_value("24", $value);
  }
  function poi_child_text()
  {
    return $this->_get_value("25");
  }
  function set_poi_child_text($value)
  {
    return $this->_set_value("25", $value);
  }
  function new_catalog_id()
  {
    return $this->_get_value("26");
  }
  function set_new_catalog_id($value)
  {
    return $this->_set_value("26", $value);
  }
  function view_type()
  {
    return $this->_get_value("27");
  }
  function set_view_type($value)
  {
    return $this->_set_value("27", $value);
  }
  function list_show()
  {
    return $this->_get_value("28");
  }
  function set_list_show($value)
  {
    return $this->_set_value("28", $value);
  }
  function show_level()
  {
    return $this->_get_value("29");
  }
  function set_show_level($value)
  {
    return $this->_set_value("29", $value);
  }
  function icon_id()
  {
    return $this->_get_value("30");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("30", $value);
  }
  function kindtype()
  {
    return $this->_get_value("31");
  }
  function set_kindtype($value)
  {
    return $this->_set_value("31", $value);
  }
  function brand_icon_id()
  {
    return $this->_get_value("32");
  }
  function set_brand_icon_id($value)
  {
    return $this->_set_value("32", $value);
  }
  function tag()
  {
    return $this->_get_value("33");
  }
  function set_tag($value)
  {
    return $this->_set_value("33", $value);
  }
  function rank()
  {
    return $this->_get_value("34");
  }
  function set_rank($value)
  {
    return $this->_set_value("34", $value);
  }
  function max_show_level()
  {
    return $this->_get_value("35");
  }
  function set_max_show_level($value)
  {
    return $this->_set_value("35", $value);
  }
  function indoor_floor()
  {
    return $this->_get_value("36");
  }
  function set_indoor_floor($value)
  {
    return $this->_set_value("36", $value);
  }
  function indoor_parent_uid()
  {
    return $this->_get_value("37");
  }
  function set_indoor_parent_uid($value)
  {
    return $this->_set_value("37", $value);
  }
  function cloud_template()
  {
    return $this->_get_value("38");
  }
  function set_cloud_template($value)
  {
    return $this->_set_value("38", $value);
  }
  function button()
  {
    return $this->_get_value("39");
  }
  function set_button($value)
  {
    return $this->_set_value("39", $value);
  }
  function map_poitag()
  {
    return $this->_get_value("40");
  }
  function set_map_poitag($value)
  {
    return $this->_set_value("40", $value);
  }
}
class PoiResult_Children extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_Children"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_Children"]["1"] = "fater_id";
    self::$fields["PoiResult_Children"]["2"] = "PoiResult_Contents";
    $this->values["2"] = array();
    self::$fieldNames["PoiResult_Children"]["2"] = "children_content";
  }
  function fater_id()
  {
    return $this->_get_value("1");
  }
  function set_fater_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function children_content($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_children_content()
  {
    return $this->_add_arr_value("2");
  }
  function set_children_content($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_children_contents($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_children_content()
  {
    $this->_remove_last_arr_value("2");
  }
  function children_contents_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_children_contents()
  {
    return $this->_get_value("2");
  }
}
class PoiResult_PreviousCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_PreviousCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_PreviousCity"]["1"] = "code";
    self::$fields["PoiResult_PreviousCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_PreviousCity"]["2"] = "name";
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
}
class PoiResult_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["1"] = "code";
    self::$fields["PoiResult_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["2"] = "geo";
    self::$fields["PoiResult_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["3"] = "level";
    self::$fields["PoiResult_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["4"] = "name";
    self::$fields["PoiResult_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["5"] = "sup_subway";
    self::$fields["PoiResult_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["PoiResult_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult_CurrentCity"]["7"] = "uid";
    self::$fields["PoiResult_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["PoiResult_CurrentCity"]["8"] = "sgeo";
  }
  function code()
  {
    return $this->_get_value("1");
  }
  function set_code($value)
  {
    return $this->_set_value("1", $value);
  }
  function geo()
  {
    return $this->_get_value("2");
  }
  function set_geo($value)
  {
    return $this->_set_value("2", $value);
  }
  function level()
  {
    return $this->_get_value("3");
  }
  function set_level($value)
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
  function sup_subway()
  {
    return $this->_get_value("5");
  }
  function set_sup_subway($value)
  {
    return $this->_set_value("5", $value);
  }
  function sup_lukuang()
  {
    return $this->_get_value("6");
  }
  function set_sup_lukuang($value)
  {
    return $this->_set_value("6", $value);
  }
  function uid()
  {
    return $this->_get_value("7");
  }
  function set_uid($value)
  {
    return $this->_set_value("7", $value);
  }
  function sgeo($offset)
  {
    $v = $this->_get_arr_value("8", $offset);
    return $v->get_value();
  }
  function append_sgeo($value)
  {
    $v = $this->_add_arr_value("8");
    $v->set_value($value);
  }
  function set_sgeo($index, $value)
  {
    $v = new self::$fields["PoiResult_CurrentCity"]["8"]();
    $v->set_value($value);
    $this->_set_arr_value("8", $index, $v);
  }
  function remove_last_sgeo()
  {
    $this->_remove_last_arr_value("8");
  }
  function sgeos_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_sgeos()
  {
    return $this->_get_value("8");
  }
}
class PoiResult_BrandBar extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_BrandBar"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["1"] = "img";
    self::$fields["PoiResult_BrandBar"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["2"] = "title";
    self::$fields["PoiResult_BrandBar"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["3"] = "subtitle";
    self::$fields["PoiResult_BrandBar"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["4"] = "tel";
    self::$fields["PoiResult_BrandBar"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["5"] = "link";
    self::$fields["PoiResult_BrandBar"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["PoiResult_BrandBar"]["6"] = "desc";
  }
  function img()
  {
    return $this->_get_value("1");
  }
  function set_img($value)
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
  function subtitle()
  {
    return $this->_get_value("3");
  }
  function set_subtitle($value)
  {
    return $this->_set_value("3", $value);
  }
  function tel()
  {
    return $this->_get_value("4");
  }
  function set_tel($value)
  {
    return $this->_set_value("4", $value);
  }
  function link()
  {
    return $this->_get_value("5");
  }
  function set_link($value)
  {
    return $this->_set_value("5", $value);
  }
  function desc()
  {
    return $this->_get_value("6");
  }
  function set_desc($value)
  {
    return $this->_set_value("6", $value);
  }
}
class PoiResult_GuideTag extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult_GuideTag"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult_GuideTag"]["1"] = "position";
    self::$fields["PoiResult_GuideTag"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["PoiResult_GuideTag"]["2"] = "title";
    self::$fields["PoiResult_GuideTag"]["3"] = "PBString";
    $this->values["3"] = array();
    self::$fieldNames["PoiResult_GuideTag"]["3"] = "contents";
  }
  function position()
  {
    return $this->_get_value("1");
  }
  function set_position($value)
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
  function contents($offset)
  {
    $v = $this->_get_arr_value("3", $offset);
    return $v->get_value();
  }
  function append_contents($value)
  {
    $v = $this->_add_arr_value("3");
    $v->set_value($value);
  }
  function set_contents($index, $value)
  {
    $v = new self::$fields["PoiResult_GuideTag"]["3"]();
    $v->set_value($value);
    $this->_set_arr_value("3", $index, $v);
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
class PoiResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["PoiResult"]["1"] = "PoiResult_Option";
    $this->values["1"] = "";
    self::$fieldNames["PoiResult"]["1"] = "option";
    self::$fields["PoiResult"]["2"] = "PoiResult_Addrs";
    $this->values["2"] = array();
    self::$fieldNames["PoiResult"]["2"] = "addrs";
    self::$fields["PoiResult"]["3"] = "PoiResult_Psrs";
    $this->values["3"] = "";
    self::$fieldNames["PoiResult"]["3"] = "psrs";
    self::$fields["PoiResult"]["4"] = "PoiResult_SuggestQuery";
    $this->values["4"] = array();
    self::$fieldNames["PoiResult"]["4"] = "suggest_query";
    self::$fields["PoiResult"]["5"] = "PoiResult_PlaceInfo";
    $this->values["5"] = "";
    self::$fieldNames["PoiResult"]["5"] = "place_info";
    self::$fields["PoiResult"]["6"] = "PoiResult_Contents";
    $this->values["6"] = array();
    self::$fieldNames["PoiResult"]["6"] = "contents";
    self::$fields["PoiResult"]["8"] = "PoiResult_Children";
    $this->values["8"] = array();
    self::$fieldNames["PoiResult"]["8"] = "children";
    self::$fields["PoiResult"]["9"] = "PoiResult_PreviousCity";
    $this->values["9"] = "";
    self::$fieldNames["PoiResult"]["9"] = "previous_city";
    self::$fields["PoiResult"]["7"] = "PoiResult_CurrentCity";
    $this->values["7"] = "";
    self::$fieldNames["PoiResult"]["7"] = "current_city";
    self::$fields["PoiResult"]["10"] = "PoiResult_BrandBar";
    $this->values["10"] = "";
    self::$fieldNames["PoiResult"]["10"] = "brand_bar";
    self::$fields["PoiResult"]["11"] = "PBBytes";
    $this->values["11"] = "";
    self::$fieldNames["PoiResult"]["11"] = "imge_ext";
    self::$fields["PoiResult"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["PoiResult"]["12"] = "offline";
    self::$fields["PoiResult"]["13"] = "PoiResult_GuideTag";
    $this->values["13"] = array();
    self::$fieldNames["PoiResult"]["13"] = "guide_tag";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function addrs($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_addrs()
  {
    return $this->_add_arr_value("2");
  }
  function set_addrs($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_addrss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_addrs()
  {
    $this->_remove_last_arr_value("2");
  }
  function addrss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_addrss()
  {
    return $this->_get_value("2");
  }
  function psrs()
  {
    return $this->_get_value("3");
  }
  function set_psrs($value)
  {
    return $this->_set_value("3", $value);
  }
  function suggest_query($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_suggest_query()
  {
    return $this->_add_arr_value("4");
  }
  function set_suggest_query($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_suggest_querys($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_suggest_query()
  {
    $this->_remove_last_arr_value("4");
  }
  function suggest_querys_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_suggest_querys()
  {
    return $this->_get_value("4");
  }
  function place_info()
  {
    return $this->_get_value("5");
  }
  function set_place_info($value)
  {
    return $this->_set_value("5", $value);
  }
  function contents($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_contents()
  {
    return $this->_add_arr_value("6");
  }
  function set_contents($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_contentss($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_contents()
  {
    $this->_remove_last_arr_value("6");
  }
  function contentss_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_contentss()
  {
    return $this->_get_value("6");
  }
  function children($offset)
  {
    return $this->_get_arr_value("8", $offset);
  }
  function add_children()
  {
    return $this->_add_arr_value("8");
  }
  function set_children($index, $value)
  {
    $this->_set_arr_value("8", $index, $value);
  }
  function set_all_childrens($values)
  {
    return $this->_set_arr_values("8", $values);
  }
  function remove_last_children()
  {
    $this->_remove_last_arr_value("8");
  }
  function childrens_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_childrens()
  {
    return $this->_get_value("8");
  }
  function previous_city()
  {
    return $this->_get_value("9");
  }
  function set_previous_city($value)
  {
    return $this->_set_value("9", $value);
  }
  function current_city()
  {
    return $this->_get_value("7");
  }
  function set_current_city($value)
  {
    return $this->_set_value("7", $value);
  }
  function brand_bar()
  {
    return $this->_get_value("10");
  }
  function set_brand_bar($value)
  {
    return $this->_set_value("10", $value);
  }
  function imge_ext()
  {
    return $this->_get_value("11");
  }
  function set_imge_ext($value)
  {
    return $this->_set_value("11", $value);
  }
  function offline()
  {
    return $this->_get_value("12");
  }
  function set_offline($value)
  {
    return $this->_set_value("12", $value);
  }
  function guide_tag($offset)
  {
    return $this->_get_arr_value("13", $offset);
  }
  function add_guide_tag()
  {
    return $this->_add_arr_value("13");
  }
  function set_guide_tag($index, $value)
  {
    $this->_set_arr_value("13", $index, $value);
  }
  function set_all_guide_tags($values)
  {
    return $this->_set_arr_values("13", $values);
  }
  function remove_last_guide_tag()
  {
    $this->_remove_last_arr_value("13");
  }
  function guide_tags_size()
  {
    return $this->_get_arr_size("13");
  }
  function get_guide_tags()
  {
    return $this->_get_value("13");
  }
}
?>