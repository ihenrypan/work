<?php
class Inf_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Option"]["1"] = "has_rtbus";
    self::$fields["Inf_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Option"]["2"] = "qid";
    self::$fields["Inf_Option"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Option"]["3"] = "channel";
    self::$fields["Inf_Option"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Option"]["4"] = "clientsv";
    self::$fields["Inf_Option"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Option"]["5"] = "im";
    self::$fields["Inf_Option"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Option"]["6"] = "mb";
    self::$fields["Inf_Option"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Option"]["7"] = "newmap";
    self::$fields["Inf_Option"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Option"]["8"] = "os";
    self::$fields["Inf_Option"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Option"]["9"] = "qt";
    self::$fields["Inf_Option"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Option"]["10"] = "resid";
    self::$fields["Inf_Option"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Option"]["11"] = "sv";
    self::$fields["Inf_Option"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Option"]["12"] = "time";
    self::$fields["Inf_Option"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Option"]["13"] = "wd";
    self::$fields["Inf_Option"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Inf_Option"]["14"] = "ldata";
  }
  function has_rtbus()
  {
    return $this->_get_value("1");
  }
  function set_has_rtbus($value)
  {
    return $this->_set_value("1", $value);
  }
  function qid()
  {
    return $this->_get_value("2");
  }
  function set_qid($value)
  {
    return $this->_set_value("2", $value);
  }
  function channel()
  {
    return $this->_get_value("3");
  }
  function set_channel($value)
  {
    return $this->_set_value("3", $value);
  }
  function clientsv()
  {
    return $this->_get_value("4");
  }
  function set_clientsv($value)
  {
    return $this->_set_value("4", $value);
  }
  function im()
  {
    return $this->_get_value("5");
  }
  function set_im($value)
  {
    return $this->_set_value("5", $value);
  }
  function mb()
  {
    return $this->_get_value("6");
  }
  function set_mb($value)
  {
    return $this->_set_value("6", $value);
  }
  function newmap()
  {
    return $this->_get_value("7");
  }
  function set_newmap($value)
  {
    return $this->_set_value("7", $value);
  }
  function os()
  {
    return $this->_get_value("8");
  }
  function set_os($value)
  {
    return $this->_set_value("8", $value);
  }
  function qt()
  {
    return $this->_get_value("9");
  }
  function set_qt($value)
  {
    return $this->_set_value("9", $value);
  }
  function resid()
  {
    return $this->_get_value("10");
  }
  function set_resid($value)
  {
    return $this->_set_value("10", $value);
  }
  function sv()
  {
    return $this->_get_value("11");
  }
  function set_sv($value)
  {
    return $this->_set_value("11", $value);
  }
  function time()
  {
    return $this->_get_value("12");
  }
  function set_time($value)
  {
    return $this->_set_value("12", $value);
  }
  function wd()
  {
    return $this->_get_value("13");
  }
  function set_wd($value)
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
}
class Inf_Content_Ext_DetailInfo_Groupon extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["1"] = "groupon_start";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["2"] = "regular_price";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["3"] = "groupon_num";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["4"] = "groupon_price";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["5"] = "groupon_type";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["6"] = "groupon_id";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["7"] = "groupon_url_mobile";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["8"] = "cn_name";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["9"] = "groupon_url_pc";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["10"] = "groupon_image";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["11"] = "groupon_rebate";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["12"] = "groupon_site";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["13"] = "groupon_end";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["14"] = "groupon_title";
    self::$fields["Inf_Content_Ext_DetailInfo_Groupon"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Groupon"]["15"] = "groupon_webapp_url";
  }
  function groupon_start()
  {
    return $this->_get_value("1");
  }
  function set_groupon_start($value)
  {
    return $this->_set_value("1", $value);
  }
  function regular_price()
  {
    return $this->_get_value("2");
  }
  function set_regular_price($value)
  {
    return $this->_set_value("2", $value);
  }
  function groupon_num()
  {
    return $this->_get_value("3");
  }
  function set_groupon_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function groupon_price()
  {
    return $this->_get_value("4");
  }
  function set_groupon_price($value)
  {
    return $this->_set_value("4", $value);
  }
  function groupon_type()
  {
    return $this->_get_value("5");
  }
  function set_groupon_type($value)
  {
    return $this->_set_value("5", $value);
  }
  function groupon_id()
  {
    return $this->_get_value("6");
  }
  function set_groupon_id($value)
  {
    return $this->_set_value("6", $value);
  }
  function groupon_url_mobile()
  {
    return $this->_get_value("7");
  }
  function set_groupon_url_mobile($value)
  {
    return $this->_set_value("7", $value);
  }
  function cn_name()
  {
    return $this->_get_value("8");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("8", $value);
  }
  function groupon_url_pc()
  {
    return $this->_get_value("9");
  }
  function set_groupon_url_pc($value)
  {
    return $this->_set_value("9", $value);
  }
  function groupon_image()
  {
    return $this->_get_value("10");
  }
  function set_groupon_image($value)
  {
    return $this->_set_value("10", $value);
  }
  function groupon_rebate()
  {
    return $this->_get_value("11");
  }
  function set_groupon_rebate($value)
  {
    return $this->_set_value("11", $value);
  }
  function groupon_site()
  {
    return $this->_get_value("12");
  }
  function set_groupon_site($value)
  {
    return $this->_set_value("12", $value);
  }
  function groupon_end()
  {
    return $this->_get_value("13");
  }
  function set_groupon_end($value)
  {
    return $this->_set_value("13", $value);
  }
  function groupon_title()
  {
    return $this->_get_value("14");
  }
  function set_groupon_title($value)
  {
    return $this->_set_value("14", $value);
  }
  function groupon_webapp_url()
  {
    return $this->_get_value("15");
  }
  function set_groupon_webapp_url($value)
  {
    return $this->_set_value("15", $value);
  }
}
class Inf_Content_Ext_DetailInfo_HotelOriInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["1"] = "src";
    self::$fields["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["2"] = "hotel_id";
    self::$fields["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_HotelOriInfo"]["3"] = "hotel_flag";
  }
  function src()
  {
    return $this->_get_value("1");
  }
  function set_src($value)
  {
    return $this->_set_value("1", $value);
  }
  function hotel_id()
  {
    return $this->_get_value("2");
  }
  function set_hotel_id($value)
  {
    return $this->_set_value("2", $value);
  }
  function hotel_flag()
  {
    return $this->_get_value("3");
  }
  function set_hotel_flag($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Inf_Content_Ext_DetailInfo_Link extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Link"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Link"]["1"] = "src";
    self::$fields["Inf_Content_Ext_DetailInfo_Link"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Link"]["2"] = "url";
    self::$fields["Inf_Content_Ext_DetailInfo_Link"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Link"]["3"] = "url_mobilephone";
    self::$fields["Inf_Content_Ext_DetailInfo_Link"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Link"]["4"] = "cn_name";
    self::$fields["Inf_Content_Ext_DetailInfo_Link"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Link"]["5"] = "name";
  }
  function src()
  {
    return $this->_get_value("1");
  }
  function set_src($value)
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
  function url_mobilephone()
  {
    return $this->_get_value("3");
  }
  function set_url_mobilephone($value)
  {
    return $this->_set_value("3", $value);
  }
  function cn_name()
  {
    return $this->_get_value("4");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function name()
  {
    return $this->_get_value("5");
  }
  function set_name($value)
  {
    return $this->_set_value("5", $value);
  }
}
class Inf_Content_Ext_DetailInfo_OtaInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_OtaInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_OtaInfo"]["1"] = "en_name";
    self::$fields["Inf_Content_Ext_DetailInfo_OtaInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_OtaInfo"]["2"] = "ota_phone";
    self::$fields["Inf_Content_Ext_DetailInfo_OtaInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_OtaInfo"]["3"] = "ota_tips";
  }
  function en_name()
  {
    return $this->_get_value("1");
  }
  function set_en_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function ota_phone()
  {
    return $this->_get_value("2");
  }
  function set_ota_phone($value)
  {
    return $this->_set_value("2", $value);
  }
  function ota_tips()
  {
    return $this->_get_value("3");
  }
  function set_ota_tips($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Inf_Content_Ext_DetailInfo_OtaUrl extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_OtaUrl"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_OtaUrl"]["1"] = "src";
    self::$fields["Inf_Content_Ext_DetailInfo_OtaUrl"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_OtaUrl"]["2"] = "url";
  }
  function src()
  {
    return $this->_get_value("1");
  }
  function set_src($value)
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
class Inf_Content_Ext_DetailInfo_Point extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Point"]["1"] = "PB64Bit";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Point"]["1"] = "x";
    self::$fields["Inf_Content_Ext_DetailInfo_Point"]["2"] = "PB64Bit";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Point"]["2"] = "y";
  }
  function x()
  {
    return $this->_get_value("1");
  }
  function set_x($value)
  {
    return $this->_set_value("1", $value);
  }
  function y()
  {
    return $this->_get_value("2");
  }
  function set_y($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Inf_Content_Ext_DetailInfo_Toplist_Top extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["1"] = "uid";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["2"] = "name";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["3"] = "region";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["4"] = "tag";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["5"] = "rank";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["6"] = "title";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["7"] = "week_visit";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["8"] = "overall_rating";
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist_Top"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist_Top"]["9"] = "comment_num";
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
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
  function region()
  {
    return $this->_get_value("3");
  }
  function set_region($value)
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
  function rank()
  {
    return $this->_get_value("5");
  }
  function set_rank($value)
  {
    return $this->_set_value("5", $value);
  }
  function title()
  {
    return $this->_get_value("6");
  }
  function set_title($value)
  {
    return $this->_set_value("6", $value);
  }
  function week_visit()
  {
    return $this->_get_value("7");
  }
  function set_week_visit($value)
  {
    return $this->_set_value("7", $value);
  }
  function overall_rating()
  {
    return $this->_get_value("8");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("8", $value);
  }
  function comment_num()
  {
    return $this->_get_value("9");
  }
  function set_comment_num($value)
  {
    return $this->_set_value("9", $value);
  }
}
class Inf_Content_Ext_DetailInfo_Toplist extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Toplist"]["1"] = "Inf_Content_Ext_DetailInfo_Toplist_Top";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Toplist"]["1"] = "top";
  }
  function top()
  {
    return $this->_get_value("1");
  }
  function set_top($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Inf_Content_Ext_DetailInfo_Meishipaihao_Main extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Meishipaihao_Main"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Meishipaihao_Main"]["1"] = "third_from";
    self::$fields["Inf_Content_Ext_DetailInfo_Meishipaihao_Main"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Meishipaihao_Main"]["2"] = "third_id";
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
class Inf_Content_Ext_DetailInfo_Meishipaihao extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_Meishipaihao"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Meishipaihao"]["1"] = "is_ok";
    self::$fields["Inf_Content_Ext_DetailInfo_Meishipaihao"]["2"] = "Inf_Content_Ext_DetailInfo_Meishipaihao_Main";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_Meishipaihao"]["2"] = "main";
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
class Inf_Content_Ext_DetailInfo_BookInfo_Tel extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Tel"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Tel"]["1"] = "title";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Tel"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Tel"]["2"] = "content";
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
class Inf_Content_Ext_DetailInfo_BookInfo_Web extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Web"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Web"]["1"] = "title";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Web"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Web"]["2"] = "content";
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
class Inf_Content_Ext_DetailInfo_BookInfo_Coms extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["1"] = "content";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["2"] = "title";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo_Coms"]["3"] = "type";
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
class Inf_Content_Ext_DetailInfo_BookInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo"]["1"] = "Inf_Content_Ext_DetailInfo_BookInfo_Tel";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo"]["1"] = "tel";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo"]["2"] = "Inf_Content_Ext_DetailInfo_BookInfo_Web";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo"]["2"] = "web";
    self::$fields["Inf_Content_Ext_DetailInfo_BookInfo"]["3"] = "Inf_Content_Ext_DetailInfo_BookInfo_Coms";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo_BookInfo"]["3"] = "coms";
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
class Inf_Content_Ext_DetailInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_DetailInfo"]["8"] = "Inf_Content_Ext_DetailInfo_Groupon";
    $this->values["8"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["8"] = "groupon";
    self::$fields["Inf_Content_Ext_DetailInfo"]["10"] = "Inf_Content_Ext_DetailInfo_HotelOriInfo";
    $this->values["10"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["10"] = "hotel_ori_info";
    self::$fields["Inf_Content_Ext_DetailInfo"]["16"] = "Inf_Content_Ext_DetailInfo_Link";
    $this->values["16"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["16"] = "link";
    self::$fields["Inf_Content_Ext_DetailInfo"]["21"] = "Inf_Content_Ext_DetailInfo_OtaInfo";
    $this->values["21"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["21"] = "ota_info";
    self::$fields["Inf_Content_Ext_DetailInfo"]["22"] = "Inf_Content_Ext_DetailInfo_OtaUrl";
    $this->values["22"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["22"] = "ota_url";
    self::$fields["Inf_Content_Ext_DetailInfo"]["27"] = "Inf_Content_Ext_DetailInfo_Point";
    $this->values["27"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["27"] = "point";
    self::$fields["Inf_Content_Ext_DetailInfo"]["44"] = "Inf_Content_Ext_DetailInfo_Toplist";
    $this->values["44"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["44"] = "toplist";
    self::$fields["Inf_Content_Ext_DetailInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["1"] = "areaid";
    self::$fields["Inf_Content_Ext_DetailInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["2"] = "bid";
    self::$fields["Inf_Content_Ext_DetailInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["3"] = "checkin_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["4"] = "collect_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["5"] = "comment_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["6"] = "facility_rating";
    self::$fields["Inf_Content_Ext_DetailInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["7"] = "from_pds";
    self::$fields["Inf_Content_Ext_DetailInfo"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["9"] = "groupon_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["11"] = "hygiene_rating";
    self::$fields["Inf_Content_Ext_DetailInfo"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["12"] = "image";
    self::$fields["Inf_Content_Ext_DetailInfo"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["13"] = "image_from";
    self::$fields["Inf_Content_Ext_DetailInfo"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["14"] = "image_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["15"] = "latest_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["17"] = "mining_low_price_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["18"] = "name";
    self::$fields["Inf_Content_Ext_DetailInfo"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["19"] = "new_catalog_id";
    self::$fields["Inf_Content_Ext_DetailInfo"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["20"] = "origin_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["23"] = "overall_rating";
    self::$fields["Inf_Content_Ext_DetailInfo"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["24"] = "pc_bookable";
    self::$fields["Inf_Content_Ext_DetailInfo"]["25"] = "PBString";
    $this->values["25"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["25"] = "pc_realtime_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["26"] = "phone";
    self::$fields["Inf_Content_Ext_DetailInfo"]["28"] = "PBString";
    $this->values["28"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["28"] = "poi_address";
    self::$fields["Inf_Content_Ext_DetailInfo"]["29"] = "PBInt";
    $this->values["29"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["29"] = "premium_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["30"] = "PBString";
    $this->values["30"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["30"] = "price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["31"] = "PBString";
    $this->values["31"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["31"] = "rec_reason";
    self::$fields["Inf_Content_Ext_DetailInfo"]["32"] = "PBString";
    $this->values["32"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["32"] = "recommand_index";
    self::$fields["Inf_Content_Ext_DetailInfo"]["33"] = "PBInt";
    $this->values["33"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["33"] = "review_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["34"] = "PBString";
    $this->values["34"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["34"] = "service_rating";
    self::$fields["Inf_Content_Ext_DetailInfo"]["35"] = "PBString";
    $this->values["35"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["35"] = "short_comm";
    self::$fields["Inf_Content_Ext_DetailInfo"]["36"] = "PBString";
    $this->values["36"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["36"] = "special_service";
    self::$fields["Inf_Content_Ext_DetailInfo"]["37"] = "PBInt";
    $this->values["37"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["37"] = "s_time";
    self::$fields["Inf_Content_Ext_DetailInfo"]["38"] = "PBString";
    $this->values["38"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["38"] = "status";
    self::$fields["Inf_Content_Ext_DetailInfo"]["39"] = "PBString";
    $this->values["39"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["39"] = "storage_src";
    self::$fields["Inf_Content_Ext_DetailInfo"]["40"] = "PBString";
    $this->values["40"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["40"] = "tag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["41"] = "PBString";
    $this->values["41"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["41"] = "tonight_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["42"] = "PBString";
    $this->values["42"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["42"] = "tonight_sale_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["43"] = "PBString";
    $this->values["43"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["43"] = "total_num";
    self::$fields["Inf_Content_Ext_DetailInfo"]["45"] = "PBString";
    $this->values["45"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["45"] = "wap_bookable";
    self::$fields["Inf_Content_Ext_DetailInfo"]["46"] = "PBString";
    $this->values["46"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["46"] = "wise_fullroom";
    self::$fields["Inf_Content_Ext_DetailInfo"]["47"] = "PBString";
    $this->values["47"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["47"] = "wise_hotel_type";
    self::$fields["Inf_Content_Ext_DetailInfo"]["48"] = "PBString";
    $this->values["48"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["48"] = "wise_hotel_type_name";
    self::$fields["Inf_Content_Ext_DetailInfo"]["49"] = "PBString";
    $this->values["49"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["49"] = "wise_low_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["50"] = "PBString";
    $this->values["50"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["50"] = "wise_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["51"] = "PBString";
    $this->values["51"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["51"] = "wise_realtime_price";
    self::$fields["Inf_Content_Ext_DetailInfo"]["52"] = "PBString";
    $this->values["52"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["52"] = "wise_realtime_price_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["53"] = "PBString";
    $this->values["53"] = array();
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["53"] = "flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["54"] = "PBInt";
    $this->values["54"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["54"] = "groupon_flag";
    self::$fields["Inf_Content_Ext_DetailInfo"]["55"] = "PBInt";
    $this->values["55"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["55"] = "groupon_total";
    self::$fields["Inf_Content_Ext_DetailInfo"]["56"] = "PBInt";
    $this->values["56"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["56"] = "is_gwj";
    self::$fields["Inf_Content_Ext_DetailInfo"]["57"] = "PBString";
    $this->values["57"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["57"] = "price_text";
    self::$fields["Inf_Content_Ext_DetailInfo"]["58"] = "PBString";
    $this->values["58"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["58"] = "guide";
    self::$fields["Inf_Content_Ext_DetailInfo"]["59"] = "Inf_Content_Ext_DetailInfo_Meishipaihao";
    $this->values["59"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["59"] = "meishipaihao";
    self::$fields["Inf_Content_Ext_DetailInfo"]["61"] = "Inf_Content_Ext_DetailInfo_BookInfo";
    $this->values["61"] = "";
    self::$fieldNames["Inf_Content_Ext_DetailInfo"]["61"] = "book_info";
  }
  function groupon($offset)
  {
    return $this->_get_arr_value("8", $offset);
  }
  function add_groupon()
  {
    return $this->_add_arr_value("8");
  }
  function set_groupon($index, $value)
  {
    $this->_set_arr_value("8", $index, $value);
  }
  function set_all_groupons($values)
  {
    return $this->_set_arr_values("8", $values);
  }
  function remove_last_groupon()
  {
    $this->_remove_last_arr_value("8");
  }
  function groupons_size()
  {
    return $this->_get_arr_size("8");
  }
  function get_groupons()
  {
    return $this->_get_value("8");
  }
  function hotel_ori_info($offset)
  {
    return $this->_get_arr_value("10", $offset);
  }
  function add_hotel_ori_info()
  {
    return $this->_add_arr_value("10");
  }
  function set_hotel_ori_info($index, $value)
  {
    $this->_set_arr_value("10", $index, $value);
  }
  function set_all_hotel_ori_infos($values)
  {
    return $this->_set_arr_values("10", $values);
  }
  function remove_last_hotel_ori_info()
  {
    $this->_remove_last_arr_value("10");
  }
  function hotel_ori_infos_size()
  {
    return $this->_get_arr_size("10");
  }
  function get_hotel_ori_infos()
  {
    return $this->_get_value("10");
  }
  function link($offset)
  {
    return $this->_get_arr_value("16", $offset);
  }
  function add_link()
  {
    return $this->_add_arr_value("16");
  }
  function set_link($index, $value)
  {
    $this->_set_arr_value("16", $index, $value);
  }
  function set_all_links($values)
  {
    return $this->_set_arr_values("16", $values);
  }
  function remove_last_link()
  {
    $this->_remove_last_arr_value("16");
  }
  function links_size()
  {
    return $this->_get_arr_size("16");
  }
  function get_links()
  {
    return $this->_get_value("16");
  }
  function ota_info($offset)
  {
    return $this->_get_arr_value("21", $offset);
  }
  function add_ota_info()
  {
    return $this->_add_arr_value("21");
  }
  function set_ota_info($index, $value)
  {
    $this->_set_arr_value("21", $index, $value);
  }
  function set_all_ota_infos($values)
  {
    return $this->_set_arr_values("21", $values);
  }
  function remove_last_ota_info()
  {
    $this->_remove_last_arr_value("21");
  }
  function ota_infos_size()
  {
    return $this->_get_arr_size("21");
  }
  function get_ota_infos()
  {
    return $this->_get_value("21");
  }
  function ota_url($offset)
  {
    return $this->_get_arr_value("22", $offset);
  }
  function add_ota_url()
  {
    return $this->_add_arr_value("22");
  }
  function set_ota_url($index, $value)
  {
    $this->_set_arr_value("22", $index, $value);
  }
  function set_all_ota_urls($values)
  {
    return $this->_set_arr_values("22", $values);
  }
  function remove_last_ota_url()
  {
    $this->_remove_last_arr_value("22");
  }
  function ota_urls_size()
  {
    return $this->_get_arr_size("22");
  }
  function get_ota_urls()
  {
    return $this->_get_value("22");
  }
  function point()
  {
    return $this->_get_value("27");
  }
  function set_point($value)
  {
    return $this->_set_value("27", $value);
  }
  function toplist()
  {
    return $this->_get_value("44");
  }
  function set_toplist($value)
  {
    return $this->_set_value("44", $value);
  }
  function areaid()
  {
    return $this->_get_value("1");
  }
  function set_areaid($value)
  {
    return $this->_set_value("1", $value);
  }
  function bid()
  {
    return $this->_get_value("2");
  }
  function set_bid($value)
  {
    return $this->_set_value("2", $value);
  }
  function checkin_num()
  {
    return $this->_get_value("3");
  }
  function set_checkin_num($value)
  {
    return $this->_set_value("3", $value);
  }
  function collect_num()
  {
    return $this->_get_value("4");
  }
  function set_collect_num($value)
  {
    return $this->_set_value("4", $value);
  }
  function comment_num()
  {
    return $this->_get_value("5");
  }
  function set_comment_num($value)
  {
    return $this->_set_value("5", $value);
  }
  function facility_rating()
  {
    return $this->_get_value("6");
  }
  function set_facility_rating($value)
  {
    return $this->_set_value("6", $value);
  }
  function from_pds()
  {
    return $this->_get_value("7");
  }
  function set_from_pds($value)
  {
    return $this->_set_value("7", $value);
  }
  function groupon_num()
  {
    return $this->_get_value("9");
  }
  function set_groupon_num($value)
  {
    return $this->_set_value("9", $value);
  }
  function hygiene_rating()
  {
    return $this->_get_value("11");
  }
  function set_hygiene_rating($value)
  {
    return $this->_set_value("11", $value);
  }
  function image()
  {
    return $this->_get_value("12");
  }
  function set_image($value)
  {
    return $this->_set_value("12", $value);
  }
  function image_from()
  {
    return $this->_get_value("13");
  }
  function set_image_from($value)
  {
    return $this->_set_value("13", $value);
  }
  function image_num()
  {
    return $this->_get_value("14");
  }
  function set_image_num($value)
  {
    return $this->_set_value("14", $value);
  }
  function latest_num()
  {
    return $this->_get_value("15");
  }
  function set_latest_num($value)
  {
    return $this->_set_value("15", $value);
  }
  function mining_low_price_flag()
  {
    return $this->_get_value("17");
  }
  function set_mining_low_price_flag($value)
  {
    return $this->_set_value("17", $value);
  }
  function name()
  {
    return $this->_get_value("18");
  }
  function set_name($value)
  {
    return $this->_set_value("18", $value);
  }
  function new_catalog_id()
  {
    return $this->_get_value("19");
  }
  function set_new_catalog_id($value)
  {
    return $this->_set_value("19", $value);
  }
  function origin_price()
  {
    return $this->_get_value("20");
  }
  function set_origin_price($value)
  {
    return $this->_set_value("20", $value);
  }
  function overall_rating()
  {
    return $this->_get_value("23");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("23", $value);
  }
  function pc_bookable()
  {
    return $this->_get_value("24");
  }
  function set_pc_bookable($value)
  {
    return $this->_set_value("24", $value);
  }
  function pc_realtime_price()
  {
    return $this->_get_value("25");
  }
  function set_pc_realtime_price($value)
  {
    return $this->_set_value("25", $value);
  }
  function phone()
  {
    return $this->_get_value("26");
  }
  function set_phone($value)
  {
    return $this->_set_value("26", $value);
  }
  function poi_address()
  {
    return $this->_get_value("28");
  }
  function set_poi_address($value)
  {
    return $this->_set_value("28", $value);
  }
  function premium_flag()
  {
    return $this->_get_value("29");
  }
  function set_premium_flag($value)
  {
    return $this->_set_value("29", $value);
  }
  function price()
  {
    return $this->_get_value("30");
  }
  function set_price($value)
  {
    return $this->_set_value("30", $value);
  }
  function rec_reason()
  {
    return $this->_get_value("31");
  }
  function set_rec_reason($value)
  {
    return $this->_set_value("31", $value);
  }
  function recommand_index()
  {
    return $this->_get_value("32");
  }
  function set_recommand_index($value)
  {
    return $this->_set_value("32", $value);
  }
  function review_flag()
  {
    return $this->_get_value("33");
  }
  function set_review_flag($value)
  {
    return $this->_set_value("33", $value);
  }
  function service_rating()
  {
    return $this->_get_value("34");
  }
  function set_service_rating($value)
  {
    return $this->_set_value("34", $value);
  }
  function short_comm()
  {
    return $this->_get_value("35");
  }
  function set_short_comm($value)
  {
    return $this->_set_value("35", $value);
  }
  function special_service()
  {
    return $this->_get_value("36");
  }
  function set_special_service($value)
  {
    return $this->_set_value("36", $value);
  }
  function s_time()
  {
    return $this->_get_value("37");
  }
  function set_s_time($value)
  {
    return $this->_set_value("37", $value);
  }
  function status()
  {
    return $this->_get_value("38");
  }
  function set_status($value)
  {
    return $this->_set_value("38", $value);
  }
  function storage_src()
  {
    return $this->_get_value("39");
  }
  function set_storage_src($value)
  {
    return $this->_set_value("39", $value);
  }
  function tag()
  {
    return $this->_get_value("40");
  }
  function set_tag($value)
  {
    return $this->_set_value("40", $value);
  }
  function tonight_price()
  {
    return $this->_get_value("41");
  }
  function set_tonight_price($value)
  {
    return $this->_set_value("41", $value);
  }
  function tonight_sale_flag()
  {
    return $this->_get_value("42");
  }
  function set_tonight_sale_flag($value)
  {
    return $this->_set_value("42", $value);
  }
  function total_num()
  {
    return $this->_get_value("43");
  }
  function set_total_num($value)
  {
    return $this->_set_value("43", $value);
  }
  function wap_bookable()
  {
    return $this->_get_value("45");
  }
  function set_wap_bookable($value)
  {
    return $this->_set_value("45", $value);
  }
  function wise_fullroom()
  {
    return $this->_get_value("46");
  }
  function set_wise_fullroom($value)
  {
    return $this->_set_value("46", $value);
  }
  function wise_hotel_type()
  {
    return $this->_get_value("47");
  }
  function set_wise_hotel_type($value)
  {
    return $this->_set_value("47", $value);
  }
  function wise_hotel_type_name()
  {
    return $this->_get_value("48");
  }
  function set_wise_hotel_type_name($value)
  {
    return $this->_set_value("48", $value);
  }
  function wise_low_price()
  {
    return $this->_get_value("49");
  }
  function set_wise_low_price($value)
  {
    return $this->_set_value("49", $value);
  }
  function wise_price()
  {
    return $this->_get_value("50");
  }
  function set_wise_price($value)
  {
    return $this->_set_value("50", $value);
  }
  function wise_realtime_price()
  {
    return $this->_get_value("51");
  }
  function set_wise_realtime_price($value)
  {
    return $this->_set_value("51", $value);
  }
  function wise_realtime_price_flag()
  {
    return $this->_get_value("52");
  }
  function set_wise_realtime_price_flag($value)
  {
    return $this->_set_value("52", $value);
  }
  function flag($offset)
  {
    $v = $this->_get_arr_value("53", $offset);
    return $v->get_value();
  }
  function append_flag($value)
  {
    $v = $this->_add_arr_value("53");
    $v->set_value($value);
  }
  function set_flag($index, $value)
  {
    $v = new self::$fields["Inf_Content_Ext_DetailInfo"]["53"]();
    $v->set_value($value);
    $this->_set_arr_value("53", $index, $v);
  }
  function remove_last_flag()
  {
    $this->_remove_last_arr_value("53");
  }
  function flags_size()
  {
    return $this->_get_arr_size("53");
  }
  function get_flags()
  {
    return $this->_get_value("53");
  }
  function groupon_flag()
  {
    return $this->_get_value("54");
  }
  function set_groupon_flag($value)
  {
    return $this->_set_value("54", $value);
  }
  function groupon_total()
  {
    return $this->_get_value("55");
  }
  function set_groupon_total($value)
  {
    return $this->_set_value("55", $value);
  }
  function is_gwj()
  {
    return $this->_get_value("56");
  }
  function set_is_gwj($value)
  {
    return $this->_set_value("56", $value);
  }
  function price_text()
  {
    return $this->_get_value("57");
  }
  function set_price_text($value)
  {
    return $this->_set_value("57", $value);
  }
  function guide()
  {
    return $this->_get_value("58");
  }
  function set_guide($value)
  {
    return $this->_set_value("58", $value);
  }
  function meishipaihao()
  {
    return $this->_get_value("59");
  }
  function set_meishipaihao($value)
  {
    return $this->_set_value("59", $value);
  }
  function book_info()
  {
    return $this->_get_value("61");
  }
  function set_book_info($value)
  {
    return $this->_set_value("61", $value);
  }
}
class Inf_Content_Ext_Review_Info extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_Review_Info"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["1"] = "one_url";
    self::$fields["Inf_Content_Ext_Review_Info"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["2"] = "content";
    self::$fields["Inf_Content_Ext_Review_Info"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["3"] = "date";
    self::$fields["Inf_Content_Ext_Review_Info"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["4"] = "nick_user_recommend";
    self::$fields["Inf_Content_Ext_Review_Info"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["5"] = "user_name";
    self::$fields["Inf_Content_Ext_Review_Info"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["6"] = "user_logo";
    self::$fields["Inf_Content_Ext_Review_Info"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["7"] = "price";
    self::$fields["Inf_Content_Ext_Review_Info"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["8"] = "overall_rating";
    self::$fields["Inf_Content_Ext_Review_Info"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_Review_Info"]["9"] = "name";
  }
  function one_url()
  {
    return $this->_get_value("1");
  }
  function set_one_url($value)
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
  function date()
  {
    return $this->_get_value("3");
  }
  function set_date($value)
  {
    return $this->_set_value("3", $value);
  }
  function nick_user_recommend()
  {
    return $this->_get_value("4");
  }
  function set_nick_user_recommend($value)
  {
    return $this->_set_value("4", $value);
  }
  function user_name()
  {
    return $this->_get_value("5");
  }
  function set_user_name($value)
  {
    return $this->_set_value("5", $value);
  }
  function user_logo()
  {
    return $this->_get_value("6");
  }
  function set_user_logo($value)
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
  function overall_rating()
  {
    return $this->_get_value("8");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("8", $value);
  }
  function name()
  {
    return $this->_get_value("9");
  }
  function set_name($value)
  {
    return $this->_set_value("9", $value);
  }
}
class Inf_Content_Ext_Review extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_Review"]["3"] = "Inf_Content_Ext_Review_Info";
    $this->values["3"] = array();
    self::$fieldNames["Inf_Content_Ext_Review"]["3"] = "info";
    self::$fields["Inf_Content_Ext_Review"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["1"] = "cn_name";
    self::$fields["Inf_Content_Ext_Review"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["2"] = "from";
    self::$fields["Inf_Content_Ext_Review"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["4"] = "name";
    self::$fields["Inf_Content_Ext_Review"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["5"] = "url_mobilephone";
    self::$fields["Inf_Content_Ext_Review"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["6"] = "url";
    self::$fields["Inf_Content_Ext_Review"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["7"] = "review_num";
    self::$fields["Inf_Content_Ext_Review"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["8"] = "content";
    self::$fields["Inf_Content_Ext_Review"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["9"] = "date";
    self::$fields["Inf_Content_Ext_Review"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["10"] = "environment_rating";
    self::$fields["Inf_Content_Ext_Review"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["11"] = "one_url_mobile";
    self::$fields["Inf_Content_Ext_Review"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["12"] = "one_url";
    self::$fields["Inf_Content_Ext_Review"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["13"] = "overall_rating";
    self::$fields["Inf_Content_Ext_Review"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["14"] = "price";
    self::$fields["Inf_Content_Ext_Review"]["15"] = "PBInt";
    $this->values["15"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["15"] = "priority";
    self::$fields["Inf_Content_Ext_Review"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["16"] = "service_rating";
    self::$fields["Inf_Content_Ext_Review"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["17"] = "taste_rating";
    self::$fields["Inf_Content_Ext_Review"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["18"] = "time_stamp";
    self::$fields["Inf_Content_Ext_Review"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["19"] = "user_logo";
    self::$fields["Inf_Content_Ext_Review"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["Inf_Content_Ext_Review"]["20"] = "user_name";
  }
  function info($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_info()
  {
    return $this->_add_arr_value("3");
  }
  function set_info($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_infos($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_info()
  {
    $this->_remove_last_arr_value("3");
  }
  function infos_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_infos()
  {
    return $this->_get_value("3");
  }
  function cn_name()
  {
    return $this->_get_value("1");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function from()
  {
    return $this->_get_value("2");
  }
  function set_from($value)
  {
    return $this->_set_value("2", $value);
  }
  function name()
  {
    return $this->_get_value("4");
  }
  function set_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function url_mobilephone()
  {
    return $this->_get_value("5");
  }
  function set_url_mobilephone($value)
  {
    return $this->_set_value("5", $value);
  }
  function url()
  {
    return $this->_get_value("6");
  }
  function set_url($value)
  {
    return $this->_set_value("6", $value);
  }
  function review_num()
  {
    return $this->_get_value("7");
  }
  function set_review_num($value)
  {
    return $this->_set_value("7", $value);
  }
  function content()
  {
    return $this->_get_value("8");
  }
  function set_content($value)
  {
    return $this->_set_value("8", $value);
  }
  function date()
  {
    return $this->_get_value("9");
  }
  function set_date($value)
  {
    return $this->_set_value("9", $value);
  }
  function environment_rating()
  {
    return $this->_get_value("10");
  }
  function set_environment_rating($value)
  {
    return $this->_set_value("10", $value);
  }
  function one_url_mobile()
  {
    return $this->_get_value("11");
  }
  function set_one_url_mobile($value)
  {
    return $this->_set_value("11", $value);
  }
  function one_url()
  {
    return $this->_get_value("12");
  }
  function set_one_url($value)
  {
    return $this->_set_value("12", $value);
  }
  function overall_rating()
  {
    return $this->_get_value("13");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("13", $value);
  }
  function price()
  {
    return $this->_get_value("14");
  }
  function set_price($value)
  {
    return $this->_set_value("14", $value);
  }
  function priority()
  {
    return $this->_get_value("15");
  }
  function set_priority($value)
  {
    return $this->_set_value("15", $value);
  }
  function service_rating()
  {
    return $this->_get_value("16");
  }
  function set_service_rating($value)
  {
    return $this->_set_value("16", $value);
  }
  function taste_rating()
  {
    return $this->_get_value("17");
  }
  function set_taste_rating($value)
  {
    return $this->_set_value("17", $value);
  }
  function time_stamp()
  {
    return $this->_get_value("18");
  }
  function set_time_stamp($value)
  {
    return $this->_set_value("18", $value);
  }
  function user_logo()
  {
    return $this->_get_value("19");
  }
  function set_user_logo($value)
  {
    return $this->_set_value("19", $value);
  }
  function user_name()
  {
    return $this->_get_value("20");
  }
  function set_user_name($value)
  {
    return $this->_set_value("20", $value);
  }
}
class Inf_Content_Ext_RichInfo_MoreReviews_Dianping extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["1"] = "cn_name";
    self::$fields["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["2"] = "comment_url_mobile";
    self::$fields["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["3"] = "comment_url";
    self::$fields["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo_MoreReviews_Dianping"]["4"] = "count";
  }
  function cn_name()
  {
    return $this->_get_value("1");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function comment_url_mobile()
  {
    return $this->_get_value("2");
  }
  function set_comment_url_mobile($value)
  {
    return $this->_set_value("2", $value);
  }
  function comment_url()
  {
    return $this->_get_value("3");
  }
  function set_comment_url($value)
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
}
class Inf_Content_Ext_RichInfo_MoreReviews extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_RichInfo_MoreReviews"]["1"] = "Inf_Content_Ext_RichInfo_MoreReviews_Dianping";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo_MoreReviews"]["1"] = "dianping";
  }
  function dianping()
  {
    return $this->_get_value("1");
  }
  function set_dianping($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Inf_Content_Ext_RichInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_RichInfo"]["20"] = "Inf_Content_Ext_RichInfo_MoreReviews";
    $this->values["20"] = array();
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["20"] = "more_reviews";
    self::$fields["Inf_Content_Ext_RichInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["1"] = "comment_yes_num";
    self::$fields["Inf_Content_Ext_RichInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["2"] = "comment_no_num";
    self::$fields["Inf_Content_Ext_RichInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["3"] = "category";
    self::$fields["Inf_Content_Ext_RichInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["4"] = "brand";
    self::$fields["Inf_Content_Ext_RichInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["5"] = "level";
    self::$fields["Inf_Content_Ext_RichInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["6"] = "description";
    self::$fields["Inf_Content_Ext_RichInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["7"] = "shop_hours";
    self::$fields["Inf_Content_Ext_RichInfo"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["8"] = "environment_exterior";
    self::$fields["Inf_Content_Ext_RichInfo"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["9"] = "inner_facility";
    self::$fields["Inf_Content_Ext_RichInfo"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["10"] = "hotel_facility";
    self::$fields["Inf_Content_Ext_RichInfo"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["11"] = "hotel_service";
    self::$fields["Inf_Content_Ext_RichInfo"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["12"] = "payment_type";
    self::$fields["Inf_Content_Ext_RichInfo"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["13"] = "alias";
    self::$fields["Inf_Content_Ext_RichInfo"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["15"] = "atmosphere";
    self::$fields["Inf_Content_Ext_RichInfo"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["16"] = "description_cn_name";
    self::$fields["Inf_Content_Ext_RichInfo"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["17"] = "description_name";
    self::$fields["Inf_Content_Ext_RichInfo"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["18"] = "description_url_mobile";
    self::$fields["Inf_Content_Ext_RichInfo"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Inf_Content_Ext_RichInfo"]["19"] = "description_url";
  }
  function more_reviews($offset)
  {
    return $this->_get_arr_value("20", $offset);
  }
  function add_more_reviews()
  {
    return $this->_add_arr_value("20");
  }
  function set_more_reviews($index, $value)
  {
    $this->_set_arr_value("20", $index, $value);
  }
  function set_all_more_reviewss($values)
  {
    return $this->_set_arr_values("20", $values);
  }
  function remove_last_more_reviews()
  {
    $this->_remove_last_arr_value("20");
  }
  function more_reviewss_size()
  {
    return $this->_get_arr_size("20");
  }
  function get_more_reviewss()
  {
    return $this->_get_value("20");
  }
  function comment_yes_num()
  {
    return $this->_get_value("1");
  }
  function set_comment_yes_num($value)
  {
    return $this->_set_value("1", $value);
  }
  function comment_no_num()
  {
    return $this->_get_value("2");
  }
  function set_comment_no_num($value)
  {
    return $this->_set_value("2", $value);
  }
  function category()
  {
    return $this->_get_value("3");
  }
  function set_category($value)
  {
    return $this->_set_value("3", $value);
  }
  function brand()
  {
    return $this->_get_value("4");
  }
  function set_brand($value)
  {
    return $this->_set_value("4", $value);
  }
  function level()
  {
    return $this->_get_value("5");
  }
  function set_level($value)
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
  function shop_hours()
  {
    return $this->_get_value("7");
  }
  function set_shop_hours($value)
  {
    return $this->_set_value("7", $value);
  }
  function environment_exterior()
  {
    return $this->_get_value("8");
  }
  function set_environment_exterior($value)
  {
    return $this->_set_value("8", $value);
  }
  function inner_facility()
  {
    return $this->_get_value("9");
  }
  function set_inner_facility($value)
  {
    return $this->_set_value("9", $value);
  }
  function hotel_facility()
  {
    return $this->_get_value("10");
  }
  function set_hotel_facility($value)
  {
    return $this->_set_value("10", $value);
  }
  function hotel_service()
  {
    return $this->_get_value("11");
  }
  function set_hotel_service($value)
  {
    return $this->_set_value("11", $value);
  }
  function payment_type()
  {
    return $this->_get_value("12");
  }
  function set_payment_type($value)
  {
    return $this->_set_value("12", $value);
  }
  function alias()
  {
    return $this->_get_value("13");
  }
  function set_alias($value)
  {
    return $this->_set_value("13", $value);
  }
  function atmosphere()
  {
    return $this->_get_value("15");
  }
  function set_atmosphere($value)
  {
    return $this->_set_value("15", $value);
  }
  function description_cn_name()
  {
    return $this->_get_value("16");
  }
  function set_description_cn_name($value)
  {
    return $this->_set_value("16", $value);
  }
  function description_name()
  {
    return $this->_get_value("17");
  }
  function set_description_name($value)
  {
    return $this->_set_value("17", $value);
  }
  function description_url_mobile()
  {
    return $this->_get_value("18");
  }
  function set_description_url_mobile($value)
  {
    return $this->_set_value("18", $value);
  }
  function description_url()
  {
    return $this->_get_value("19");
  }
  function set_description_url($value)
  {
    return $this->_set_value("19", $value);
  }
}
class Inf_Content_Ext_Image_Recommend extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_Image_Recommend"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["1"] = "cn_name";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["2"] = "imgUrl_bak";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["3"] = "imgUrl";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["4"] = "link_mobilephone";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["5"] = "link";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["6"] = "name";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["7"] = "photoid";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["8"] = "photo_num";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["9"] = "photo_pageview";
    self::$fields["Inf_Content_Ext_Image_Recommend"]["10"] = "PB64Bit";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Recommend"]["10"] = "priority";
  }
  function cn_name()
  {
    return $this->_get_value("1");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function imgUrl_bak()
  {
    return $this->_get_value("2");
  }
  function set_imgUrl_bak($value)
  {
    return $this->_set_value("2", $value);
  }
  function imgUrl()
  {
    return $this->_get_value("3");
  }
  function set_imgUrl($value)
  {
    return $this->_set_value("3", $value);
  }
  function link_mobilephone()
  {
    return $this->_get_value("4");
  }
  function set_link_mobilephone($value)
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
  function name()
  {
    return $this->_get_value("6");
  }
  function set_name($value)
  {
    return $this->_set_value("6", $value);
  }
  function photoid()
  {
    return $this->_get_value("7");
  }
  function set_photoid($value)
  {
    return $this->_set_value("7", $value);
  }
  function photo_num()
  {
    return $this->_get_value("8");
  }
  function set_photo_num($value)
  {
    return $this->_set_value("8", $value);
  }
  function photo_pageview()
  {
    return $this->_get_value("9");
  }
  function set_photo_pageview($value)
  {
    return $this->_set_value("9", $value);
  }
  function priority()
  {
    return $this->_get_value("10");
  }
  function set_priority($value)
  {
    return $this->_set_value("10", $value);
  }
}
class Inf_Content_Ext_Image_Top extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_Image_Top"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["1"] = "cn_name";
    self::$fields["Inf_Content_Ext_Image_Top"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["2"] = "imgUrl_bak";
    self::$fields["Inf_Content_Ext_Image_Top"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["3"] = "imgUrl";
    self::$fields["Inf_Content_Ext_Image_Top"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["4"] = "link_mobilephone";
    self::$fields["Inf_Content_Ext_Image_Top"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["5"] = "link";
    self::$fields["Inf_Content_Ext_Image_Top"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["6"] = "name";
    self::$fields["Inf_Content_Ext_Image_Top"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["7"] = "photoid";
    self::$fields["Inf_Content_Ext_Image_Top"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["8"] = "photo_num";
    self::$fields["Inf_Content_Ext_Image_Top"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["9"] = "photo_pageview";
    self::$fields["Inf_Content_Ext_Image_Top"]["10"] = "PB64Bit";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content_Ext_Image_Top"]["10"] = "priority";
  }
  function cn_name()
  {
    return $this->_get_value("1");
  }
  function set_cn_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function imgUrl_bak()
  {
    return $this->_get_value("2");
  }
  function set_imgUrl_bak($value)
  {
    return $this->_set_value("2", $value);
  }
  function imgUrl()
  {
    return $this->_get_value("3");
  }
  function set_imgUrl($value)
  {
    return $this->_set_value("3", $value);
  }
  function link_mobilephone()
  {
    return $this->_get_value("4");
  }
  function set_link_mobilephone($value)
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
  function name()
  {
    return $this->_get_value("6");
  }
  function set_name($value)
  {
    return $this->_set_value("6", $value);
  }
  function photoid()
  {
    return $this->_get_value("7");
  }
  function set_photoid($value)
  {
    return $this->_set_value("7", $value);
  }
  function photo_num()
  {
    return $this->_get_value("8");
  }
  function set_photo_num($value)
  {
    return $this->_set_value("8", $value);
  }
  function photo_pageview()
  {
    return $this->_get_value("9");
  }
  function set_photo_pageview($value)
  {
    return $this->_set_value("9", $value);
  }
  function priority()
  {
    return $this->_get_value("10");
  }
  function set_priority($value)
  {
    return $this->_set_value("10", $value);
  }
}
class Inf_Content_Ext_Image extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_Image"]["1"] = "Inf_Content_Ext_Image_Recommend";
    $this->values["1"] = array();
    self::$fieldNames["Inf_Content_Ext_Image"]["1"] = "recommend";
    self::$fields["Inf_Content_Ext_Image"]["2"] = "Inf_Content_Ext_Image_Top";
    $this->values["2"] = array();
    self::$fieldNames["Inf_Content_Ext_Image"]["2"] = "top";
  }
  function recommend($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_recommend()
  {
    return $this->_add_arr_value("1");
  }
  function set_recommend($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_recommends($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_recommend()
  {
    $this->_remove_last_arr_value("1");
  }
  function recommends_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_recommends()
  {
    return $this->_get_value("1");
  }
  function top($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_top()
  {
    return $this->_add_arr_value("2");
  }
  function set_top($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_tops($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_top()
  {
    $this->_remove_last_arr_value("2");
  }
  function tops_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_tops()
  {
    return $this->_get_value("2");
  }
}
class Inf_Content_Ext_LineInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext_LineInfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["1"] = "abb";
    self::$fields["Inf_Content_Ext_LineInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["2"] = "clr";
    self::$fields["Inf_Content_Ext_LineInfo"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["3"] = "first_time";
    self::$fields["Inf_Content_Ext_LineInfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["4"] = "last_time";
    self::$fields["Inf_Content_Ext_LineInfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["5"] = "line_time";
    self::$fields["Inf_Content_Ext_LineInfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["6"] = "terminals";
    self::$fields["Inf_Content_Ext_LineInfo"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext_LineInfo"]["7"] = "uid";
  }
  function abb()
  {
    return $this->_get_value("1");
  }
  function set_abb($value)
  {
    return $this->_set_value("1", $value);
  }
  function clr()
  {
    return $this->_get_value("2");
  }
  function set_clr($value)
  {
    return $this->_set_value("2", $value);
  }
  function first_time()
  {
    return $this->_get_value("3");
  }
  function set_first_time($value)
  {
    return $this->_set_value("3", $value);
  }
  function last_time()
  {
    return $this->_get_value("4");
  }
  function set_last_time($value)
  {
    return $this->_set_value("4", $value);
  }
  function line_time()
  {
    return $this->_get_value("5");
  }
  function set_line_time($value)
  {
    return $this->_set_value("5", $value);
  }
  function terminals()
  {
    return $this->_get_value("6");
  }
  function set_terminals($value)
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
}
class Inf_Content_Ext extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Ext"]["1"] = "Inf_Content_Ext_DetailInfo";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Ext"]["1"] = "detail_info";
    self::$fields["Inf_Content_Ext"]["2"] = "Inf_Content_Ext_Review";
    $this->values["2"] = array();
    self::$fieldNames["Inf_Content_Ext"]["2"] = "review";
    self::$fields["Inf_Content_Ext"]["3"] = "Inf_Content_Ext_RichInfo";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Ext"]["3"] = "rich_info";
    self::$fields["Inf_Content_Ext"]["5"] = "Inf_Content_Ext_Image";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Ext"]["5"] = "image";
    self::$fields["Inf_Content_Ext"]["6"] = "Inf_Content_Ext_LineInfo";
    $this->values["6"] = array();
    self::$fieldNames["Inf_Content_Ext"]["6"] = "line_info";
    self::$fields["Inf_Content_Ext"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Ext"]["4"] = "src_name";
    self::$fields["Inf_Content_Ext"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Ext"]["7"] = "ext_type";
  }
  function detail_info()
  {
    return $this->_get_value("1");
  }
  function set_detail_info($value)
  {
    return $this->_set_value("1", $value);
  }
  function review($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_review()
  {
    return $this->_add_arr_value("2");
  }
  function set_review($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_reviews($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_review()
  {
    $this->_remove_last_arr_value("2");
  }
  function reviews_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_reviews()
  {
    return $this->_get_value("2");
  }
  function rich_info()
  {
    return $this->_get_value("3");
  }
  function set_rich_info($value)
  {
    return $this->_set_value("3", $value);
  }
  function image()
  {
    return $this->_get_value("5");
  }
  function set_image($value)
  {
    return $this->_set_value("5", $value);
  }
  function line_info($offset)
  {
    return $this->_get_arr_value("6", $offset);
  }
  function add_line_info()
  {
    return $this->_add_arr_value("6");
  }
  function set_line_info($index, $value)
  {
    $this->_set_arr_value("6", $index, $value);
  }
  function set_all_line_infos($values)
  {
    return $this->_set_arr_values("6", $values);
  }
  function remove_last_line_info()
  {
    $this->_remove_last_arr_value("6");
  }
  function line_infos_size()
  {
    return $this->_get_arr_size("6");
  }
  function get_line_infos()
  {
    return $this->_get_value("6");
  }
  function src_name()
  {
    return $this->_get_value("4");
  }
  function set_src_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function ext_type()
  {
    return $this->_get_value("7");
  }
  function set_ext_type($value)
  {
    return $this->_set_value("7", $value);
  }
}
class Inf_Content_Blinfo_RtInfo_NextVehicle extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Blinfo_RtInfo_NextVehicle"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Blinfo_RtInfo_NextVehicle"]["1"] = "remain_dist";
    self::$fields["Inf_Content_Blinfo_RtInfo_NextVehicle"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Blinfo_RtInfo_NextVehicle"]["2"] = "remain_stops";
    self::$fields["Inf_Content_Blinfo_RtInfo_NextVehicle"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Blinfo_RtInfo_NextVehicle"]["3"] = "remain_time";
  }
  function remain_dist()
  {
    return $this->_get_value("1");
  }
  function set_remain_dist($value)
  {
    return $this->_set_value("1", $value);
  }
  function remain_stops()
  {
    return $this->_get_value("2");
  }
  function set_remain_stops($value)
  {
    return $this->_set_value("2", $value);
  }
  function remain_time()
  {
    return $this->_get_value("3");
  }
  function set_remain_time($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Inf_Content_Blinfo_RtInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Blinfo_RtInfo"]["1"] = "Inf_Content_Blinfo_RtInfo_NextVehicle";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Blinfo_RtInfo"]["1"] = "next_vehicle";
    self::$fields["Inf_Content_Blinfo_RtInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Blinfo_RtInfo"]["2"] = "tip_rtbus";
  }
  function next_vehicle()
  {
    return $this->_get_value("1");
  }
  function set_next_vehicle($value)
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
class Inf_Content_Blinfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Blinfo"]["3"] = "Inf_Content_Blinfo_RtInfo";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["3"] = "rt_info";
    self::$fields["Inf_Content_Blinfo"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["1"] = "addr";
    self::$fields["Inf_Content_Blinfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["2"] = "name";
    self::$fields["Inf_Content_Blinfo"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["4"] = "uid";
    self::$fields["Inf_Content_Blinfo"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["5"] = "pair_uid";
    self::$fields["Inf_Content_Blinfo"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["6"] = "next_station";
    self::$fields["Inf_Content_Blinfo"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["7"] = "icon_id";
    self::$fields["Inf_Content_Blinfo"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content_Blinfo"]["8"] = "son_uid";
  }
  function rt_info()
  {
    return $this->_get_value("3");
  }
  function set_rt_info($value)
  {
    return $this->_set_value("3", $value);
  }
  function addr()
  {
    return $this->_get_value("1");
  }
  function set_addr($value)
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
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
  function pair_uid()
  {
    return $this->_get_value("5");
  }
  function set_pair_uid($value)
  {
    return $this->_set_value("5", $value);
  }
  function next_station()
  {
    return $this->_get_value("6");
  }
  function set_next_station($value)
  {
    return $this->_set_value("6", $value);
  }
  function icon_id()
  {
    return $this->_get_value("7");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("7", $value);
  }
  function son_uid()
  {
    return $this->_get_value("8");
  }
  function set_son_uid($value)
  {
    return $this->_set_value("8", $value);
  }
}
class Inf_Content_OriginId extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_OriginId"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_OriginId"]["1"] = "lbc_uid";
    self::$fields["Inf_Content_OriginId"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_OriginId"]["2"] = "overview_guid";
  }
  function lbc_uid()
  {
    return $this->_get_value("1");
  }
  function set_lbc_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function overview_guid()
  {
    return $this->_get_value("2");
  }
  function set_overview_guid($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Inf_Content_HeatMap_Points_GeoElements extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_HeatMap_Points_GeoElements"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Inf_Content_HeatMap_Points_GeoElements"]["1"] = "point";
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
    $v = new self::$fields["Inf_Content_HeatMap_Points_GeoElements"]["1"]();
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
class Inf_Content_HeatMap_Points extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_HeatMap_Points"]["1"] = "PBSignedInt";
    $this->values["1"] = array();
    self::$fieldNames["Inf_Content_HeatMap_Points"]["1"] = "bound";
    self::$fields["Inf_Content_HeatMap_Points"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_HeatMap_Points"]["2"] = "type";
    self::$fields["Inf_Content_HeatMap_Points"]["3"] = "Inf_Content_HeatMap_Points_GeoElements";
    $this->values["3"] = array();
    self::$fieldNames["Inf_Content_HeatMap_Points"]["3"] = "geo_elements";
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
    $v = new self::$fields["Inf_Content_HeatMap_Points"]["1"]();
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
class Inf_Content_HeatMap extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_HeatMap"]["2"] = "Inf_Content_HeatMap_Points";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_HeatMap"]["2"] = "points";
    self::$fields["Inf_Content_HeatMap"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_HeatMap"]["1"] = "rankstr";
    self::$fields["Inf_Content_HeatMap"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_HeatMap"]["3"] = "type";
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
}
class Inf_Content_OtherStations extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_OtherStations"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_OtherStations"]["1"] = "uid";
    self::$fields["Inf_Content_OtherStations"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_OtherStations"]["2"] = "addr";
    self::$fields["Inf_Content_OtherStations"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_OtherStations"]["3"] = "icon_id";
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function addr()
  {
    return $this->_get_value("2");
  }
  function set_addr($value)
  {
    return $this->_set_value("2", $value);
  }
  function icon_id()
  {
    return $this->_get_value("3");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Inf_Content_Button extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content_Button"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content_Button"]["1"] = "content";
    self::$fields["Inf_Content_Button"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content_Button"]["2"] = "title";
    self::$fields["Inf_Content_Button"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content_Button"]["3"] = "type";
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
class Inf_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_Content"]["3"] = "Inf_Content_Ext";
    $this->values["3"] = "";
    self::$fieldNames["Inf_Content"]["3"] = "ext";
    self::$fields["Inf_Content"]["17"] = "Inf_Content_Blinfo";
    $this->values["17"] = array();
    self::$fieldNames["Inf_Content"]["17"] = "blinfo";
    self::$fields["Inf_Content"]["24"] = "Inf_Content_OriginId";
    $this->values["24"] = "";
    self::$fieldNames["Inf_Content"]["24"] = "origin_id";
    self::$fields["Inf_Content"]["33"] = "Inf_Content_HeatMap";
    $this->values["33"] = "";
    self::$fieldNames["Inf_Content"]["33"] = "heat_map";
    self::$fields["Inf_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Inf_Content"]["1"] = "addr";
    self::$fields["Inf_Content"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Inf_Content"]["2"] = "city_id";
    self::$fields["Inf_Content"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Inf_Content"]["4"] = "ext_type";
    self::$fields["Inf_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Inf_Content"]["5"] = "geo";
    self::$fields["Inf_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Inf_Content"]["6"] = "name";
    self::$fields["Inf_Content"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Inf_Content"]["7"] = "poiType";
    self::$fields["Inf_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Inf_Content"]["8"] = "primary_uid";
    self::$fields["Inf_Content"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Inf_Content"]["9"] = "rp_des_type";
    self::$fields["Inf_Content"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Inf_Content"]["10"] = "status";
    self::$fields["Inf_Content"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Inf_Content"]["11"] = "storage_src";
    self::$fields["Inf_Content"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["Inf_Content"]["12"] = "suspected_flag";
    self::$fields["Inf_Content"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Inf_Content"]["13"] = "uid";
    self::$fields["Inf_Content"]["14"] = "PBInt";
    $this->values["14"] = "";
    self::$fieldNames["Inf_Content"]["14"] = "area";
    self::$fields["Inf_Content"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Inf_Content"]["15"] = "phone";
    self::$fields["Inf_Content"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Inf_Content"]["16"] = "vista";
    self::$fields["Inf_Content"]["18"] = "PBString";
    $this->values["18"] = array();
    self::$fieldNames["Inf_Content"]["18"] = "alias";
    self::$fields["Inf_Content"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Inf_Content"]["19"] = "aoi";
    self::$fields["Inf_Content"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["Inf_Content"]["20"] = "cp";
    self::$fields["Inf_Content"]["21"] = "PBInt";
    $this->values["21"] = "";
    self::$fieldNames["Inf_Content"]["21"] = "detail";
    self::$fields["Inf_Content"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["Inf_Content"]["22"] = "indoor_pano";
    self::$fields["Inf_Content"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Inf_Content"]["23"] = "new_catalog_id";
    self::$fields["Inf_Content"]["25"] = "PBInt";
    $this->values["25"] = "";
    self::$fieldNames["Inf_Content"]["25"] = "pano";
    self::$fields["Inf_Content"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["Inf_Content"]["26"] = "rp_des";
    self::$fields["Inf_Content"]["27"] = "PBString";
    $this->values["27"] = "";
    self::$fieldNames["Inf_Content"]["27"] = "street_id";
    self::$fields["Inf_Content"]["28"] = "PBString";
    $this->values["28"] = "";
    self::$fieldNames["Inf_Content"]["28"] = "tag";
    self::$fields["Inf_Content"]["29"] = "PBString";
    $this->values["29"] = "";
    self::$fieldNames["Inf_Content"]["29"] = "tel";
    self::$fields["Inf_Content"]["30"] = "PBInt";
    $this->values["30"] = "";
    self::$fieldNames["Inf_Content"]["30"] = "ty";
    self::$fields["Inf_Content"]["31"] = "PBInt";
    $this->values["31"] = "";
    self::$fieldNames["Inf_Content"]["31"] = "rtbus_update_time";
    self::$fields["Inf_Content"]["32"] = "PBString";
    $this->values["32"] = "";
    self::$fieldNames["Inf_Content"]["32"] = "poi_type_text";
    self::$fields["Inf_Content"]["36"] = "PBString";
    $this->values["36"] = "";
    self::$fieldNames["Inf_Content"]["36"] = "indoor_floor";
    self::$fields["Inf_Content"]["37"] = "PBString";
    $this->values["37"] = "";
    self::$fieldNames["Inf_Content"]["37"] = "indoor_parent_uid";
    self::$fields["Inf_Content"]["38"] = "PBBytes";
    $this->values["38"] = "";
    self::$fieldNames["Inf_Content"]["38"] = "cloud_template";
    self::$fields["Inf_Content"]["39"] = "Inf_Content_OtherStations";
    $this->values["39"] = array();
    self::$fieldNames["Inf_Content"]["39"] = "other_stations";
    self::$fields["Inf_Content"]["40"] = "PBInt";
    $this->values["40"] = "";
    self::$fieldNames["Inf_Content"]["40"] = "icon_id";
    self::$fields["Inf_Content"]["41"] = "PBString";
    $this->values["41"] = "";
    self::$fieldNames["Inf_Content"]["41"] = "station_num";
    self::$fields["Inf_Content"]["42"] = "Inf_Content_Button";
    $this->values["42"] = "";
    self::$fieldNames["Inf_Content"]["42"] = "button";
  }
  function ext()
  {
    return $this->_get_value("3");
  }
  function set_ext($value)
  {
    return $this->_set_value("3", $value);
  }
  function blinfo($offset)
  {
    return $this->_get_arr_value("17", $offset);
  }
  function add_blinfo()
  {
    return $this->_add_arr_value("17");
  }
  function set_blinfo($index, $value)
  {
    $this->_set_arr_value("17", $index, $value);
  }
  function set_all_blinfos($values)
  {
    return $this->_set_arr_values("17", $values);
  }
  function remove_last_blinfo()
  {
    $this->_remove_last_arr_value("17");
  }
  function blinfos_size()
  {
    return $this->_get_arr_size("17");
  }
  function get_blinfos()
  {
    return $this->_get_value("17");
  }
  function origin_id()
  {
    return $this->_get_value("24");
  }
  function set_origin_id($value)
  {
    return $this->_set_value("24", $value);
  }
  function heat_map()
  {
    return $this->_get_value("33");
  }
  function set_heat_map($value)
  {
    return $this->_set_value("33", $value);
  }
  function addr()
  {
    return $this->_get_value("1");
  }
  function set_addr($value)
  {
    return $this->_set_value("1", $value);
  }
  function city_id()
  {
    return $this->_get_value("2");
  }
  function set_city_id($value)
  {
    return $this->_set_value("2", $value);
  }
  function ext_type()
  {
    return $this->_get_value("4");
  }
  function set_ext_type($value)
  {
    return $this->_set_value("4", $value);
  }
  function geo()
  {
    return $this->_get_value("5");
  }
  function set_geo($value)
  {
    return $this->_set_value("5", $value);
  }
  function name()
  {
    return $this->_get_value("6");
  }
  function set_name($value)
  {
    return $this->_set_value("6", $value);
  }
  function poiType()
  {
    return $this->_get_value("7");
  }
  function set_poiType($value)
  {
    return $this->_set_value("7", $value);
  }
  function primary_uid()
  {
    return $this->_get_value("8");
  }
  function set_primary_uid($value)
  {
    return $this->_set_value("8", $value);
  }
  function rp_des_type()
  {
    return $this->_get_value("9");
  }
  function set_rp_des_type($value)
  {
    return $this->_set_value("9", $value);
  }
  function status()
  {
    return $this->_get_value("10");
  }
  function set_status($value)
  {
    return $this->_set_value("10", $value);
  }
  function storage_src()
  {
    return $this->_get_value("11");
  }
  function set_storage_src($value)
  {
    return $this->_set_value("11", $value);
  }
  function suspected_flag()
  {
    return $this->_get_value("12");
  }
  function set_suspected_flag($value)
  {
    return $this->_set_value("12", $value);
  }
  function uid()
  {
    return $this->_get_value("13");
  }
  function set_uid($value)
  {
    return $this->_set_value("13", $value);
  }
  function area()
  {
    return $this->_get_value("14");
  }
  function set_area($value)
  {
    return $this->_set_value("14", $value);
  }
  function phone()
  {
    return $this->_get_value("15");
  }
  function set_phone($value)
  {
    return $this->_set_value("15", $value);
  }
  function vista()
  {
    return $this->_get_value("16");
  }
  function set_vista($value)
  {
    return $this->_set_value("16", $value);
  }
  function alias($offset)
  {
    $v = $this->_get_arr_value("18", $offset);
    return $v->get_value();
  }
  function append_alias($value)
  {
    $v = $this->_add_arr_value("18");
    $v->set_value($value);
  }
  function set_alias($index, $value)
  {
    $v = new self::$fields["Inf_Content"]["18"]();
    $v->set_value($value);
    $this->_set_arr_value("18", $index, $v);
  }
  function remove_last_alias()
  {
    $this->_remove_last_arr_value("18");
  }
  function aliass_size()
  {
    return $this->_get_arr_size("18");
  }
  function get_aliass()
  {
    return $this->_get_value("18");
  }
  function aoi()
  {
    return $this->_get_value("19");
  }
  function set_aoi($value)
  {
    return $this->_set_value("19", $value);
  }
  function cp()
  {
    return $this->_get_value("20");
  }
  function set_cp($value)
  {
    return $this->_set_value("20", $value);
  }
  function detail()
  {
    return $this->_get_value("21");
  }
  function set_detail($value)
  {
    return $this->_set_value("21", $value);
  }
  function indoor_pano()
  {
    return $this->_get_value("22");
  }
  function set_indoor_pano($value)
  {
    return $this->_set_value("22", $value);
  }
  function new_catalog_id()
  {
    return $this->_get_value("23");
  }
  function set_new_catalog_id($value)
  {
    return $this->_set_value("23", $value);
  }
  function pano()
  {
    return $this->_get_value("25");
  }
  function set_pano($value)
  {
    return $this->_set_value("25", $value);
  }
  function rp_des()
  {
    return $this->_get_value("26");
  }
  function set_rp_des($value)
  {
    return $this->_set_value("26", $value);
  }
  function street_id()
  {
    return $this->_get_value("27");
  }
  function set_street_id($value)
  {
    return $this->_set_value("27", $value);
  }
  function tag()
  {
    return $this->_get_value("28");
  }
  function set_tag($value)
  {
    return $this->_set_value("28", $value);
  }
  function tel()
  {
    return $this->_get_value("29");
  }
  function set_tel($value)
  {
    return $this->_set_value("29", $value);
  }
  function ty()
  {
    return $this->_get_value("30");
  }
  function set_ty($value)
  {
    return $this->_set_value("30", $value);
  }
  function rtbus_update_time()
  {
    return $this->_get_value("31");
  }
  function set_rtbus_update_time($value)
  {
    return $this->_set_value("31", $value);
  }
  function poi_type_text()
  {
    return $this->_get_value("32");
  }
  function set_poi_type_text($value)
  {
    return $this->_set_value("32", $value);
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
  function other_stations($offset)
  {
    return $this->_get_arr_value("39", $offset);
  }
  function add_other_stations()
  {
    return $this->_add_arr_value("39");
  }
  function set_other_stations($index, $value)
  {
    $this->_set_arr_value("39", $index, $value);
  }
  function set_all_other_stationss($values)
  {
    return $this->_set_arr_values("39", $values);
  }
  function remove_last_other_stations()
  {
    $this->_remove_last_arr_value("39");
  }
  function other_stationss_size()
  {
    return $this->_get_arr_size("39");
  }
  function get_other_stationss()
  {
    return $this->_get_value("39");
  }
  function icon_id()
  {
    return $this->_get_value("40");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("40", $value);
  }
  function station_num()
  {
    return $this->_get_value("41");
  }
  function set_station_num($value)
  {
    return $this->_set_value("41", $value);
  }
  function button()
  {
    return $this->_get_value("42");
  }
  function set_button($value)
  {
    return $this->_set_value("42", $value);
  }
}
class Inf_CurrentCity extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf_CurrentCity"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Inf_CurrentCity"]["1"] = "code";
    self::$fields["Inf_CurrentCity"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Inf_CurrentCity"]["2"] = "geo";
    self::$fields["Inf_CurrentCity"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Inf_CurrentCity"]["3"] = "level";
    self::$fields["Inf_CurrentCity"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Inf_CurrentCity"]["4"] = "name";
    self::$fields["Inf_CurrentCity"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["Inf_CurrentCity"]["5"] = "sup_subway";
    self::$fields["Inf_CurrentCity"]["6"] = "PBBool";
    $this->values["6"] = "";
    self::$fieldNames["Inf_CurrentCity"]["6"] = "sup_lukuang";
    self::$fields["Inf_CurrentCity"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Inf_CurrentCity"]["7"] = "uid";
    self::$fields["Inf_CurrentCity"]["8"] = "PBSignedInt";
    $this->values["8"] = array();
    self::$fieldNames["Inf_CurrentCity"]["8"] = "sgeo";
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
    $v = new self::$fields["Inf_CurrentCity"]["8"]();
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
class Inf extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Inf"]["1"] = "Inf_Option";
    $this->values["1"] = "";
    self::$fieldNames["Inf"]["1"] = "option";
    self::$fields["Inf"]["2"] = "Inf_Content";
    $this->values["2"] = "";
    self::$fieldNames["Inf"]["2"] = "content";
    self::$fields["Inf"]["3"] = "Inf_CurrentCity";
    $this->values["3"] = "";
    self::$fieldNames["Inf"]["3"] = "current_city";
    self::$fields["Inf"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Inf"]["4"] = "offline";
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
  function current_city()
  {
    return $this->_get_value("3");
  }
  function set_current_city($value)
  {
    return $this->_set_value("3", $value);
  }
  function offline()
  {
    return $this->_get_value("4");
  }
  function set_offline($value)
  {
    return $this->_set_value("4", $value);
  }
}
?>