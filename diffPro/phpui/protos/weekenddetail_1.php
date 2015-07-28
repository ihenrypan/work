<?php
class WeekendDetail_Content_Items_Chunks extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendDetail_Content_Items_Chunks"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendDetail_Content_Items_Chunks"]["1"] = "type";
    self::$fields["WeekendDetail_Content_Items_Chunks"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendDetail_Content_Items_Chunks"]["2"] = "url";
    self::$fields["WeekendDetail_Content_Items_Chunks"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendDetail_Content_Items_Chunks"]["3"] = "content";
  }
  function type()
  {
    return $this->_get_value("1");
  }
  function set_type($value)
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
  function content()
  {
    return $this->_get_value("3");
  }
  function set_content($value)
  {
    return $this->_set_value("3", $value);
  }
}
class WeekendDetail_Content_Items extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendDetail_Content_Items"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["1"] = "poi_id";
    self::$fields["WeekendDetail_Content_Items"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["2"] = "poi_name";
    self::$fields["WeekendDetail_Content_Items"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["3"] = "pic_url";
    self::$fields["WeekendDetail_Content_Items"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["4"] = "address";
    self::$fields["WeekendDetail_Content_Items"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["5"] = "district";
    self::$fields["WeekendDetail_Content_Items"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["6"] = "distance";
    self::$fields["WeekendDetail_Content_Items"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["7"] = "activity_time";
    self::$fields["WeekendDetail_Content_Items"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["8"] = "price";
    self::$fields["WeekendDetail_Content_Items"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["9"] = "latitude";
    self::$fields["WeekendDetail_Content_Items"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["WeekendDetail_Content_Items"]["10"] = "longitude";
    self::$fields["WeekendDetail_Content_Items"]["11"] = "WeekendDetail_Content_Items_Chunks";
    $this->values["11"] = array();
    self::$fieldNames["WeekendDetail_Content_Items"]["11"] = "chunks";
  }
  function poi_id()
  {
    return $this->_get_value("1");
  }
  function set_poi_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function poi_name()
  {
    return $this->_get_value("2");
  }
  function set_poi_name($value)
  {
    return $this->_set_value("2", $value);
  }
  function pic_url()
  {
    return $this->_get_value("3");
  }
  function set_pic_url($value)
  {
    return $this->_set_value("3", $value);
  }
  function address()
  {
    return $this->_get_value("4");
  }
  function set_address($value)
  {
    return $this->_set_value("4", $value);
  }
  function district()
  {
    return $this->_get_value("5");
  }
  function set_district($value)
  {
    return $this->_set_value("5", $value);
  }
  function distance()
  {
    return $this->_get_value("6");
  }
  function set_distance($value)
  {
    return $this->_set_value("6", $value);
  }
  function activity_time()
  {
    return $this->_get_value("7");
  }
  function set_activity_time($value)
  {
    return $this->_set_value("7", $value);
  }
  function price()
  {
    return $this->_get_value("8");
  }
  function set_price($value)
  {
    return $this->_set_value("8", $value);
  }
  function latitude()
  {
    return $this->_get_value("9");
  }
  function set_latitude($value)
  {
    return $this->_set_value("9", $value);
  }
  function longitude()
  {
    return $this->_get_value("10");
  }
  function set_longitude($value)
  {
    return $this->_set_value("10", $value);
  }
  function chunks($offset)
  {
    return $this->_get_arr_value("11", $offset);
  }
  function add_chunks()
  {
    return $this->_add_arr_value("11");
  }
  function set_chunks($index, $value)
  {
    $this->_set_arr_value("11", $index, $value);
  }
  function set_all_chunkss($values)
  {
    return $this->_set_arr_values("11", $values);
  }
  function remove_last_chunks()
  {
    $this->_remove_last_arr_value("11");
  }
  function chunkss_size()
  {
    return $this->_get_arr_size("11");
  }
  function get_chunkss()
  {
    return $this->_get_value("11");
  }
}
class WeekendDetail_Content_RecommendList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendDetail_Content_RecommendList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendDetail_Content_RecommendList"]["1"] = "theme_id";
    self::$fields["WeekendDetail_Content_RecommendList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendDetail_Content_RecommendList"]["2"] = "cover_url";
    self::$fields["WeekendDetail_Content_RecommendList"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendDetail_Content_RecommendList"]["3"] = "title";
  }
  function theme_id()
  {
    return $this->_get_value("1");
  }
  function set_theme_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function cover_url()
  {
    return $this->_get_value("2");
  }
  function set_cover_url($value)
  {
    return $this->_set_value("2", $value);
  }
  function title()
  {
    return $this->_get_value("3");
  }
  function set_title($value)
  {
    return $this->_set_value("3", $value);
  }
}
class WeekendDetail_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendDetail_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendDetail_Content"]["1"] = "theme_id";
    self::$fields["WeekendDetail_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendDetail_Content"]["2"] = "title";
    self::$fields["WeekendDetail_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendDetail_Content"]["3"] = "pic_url";
    self::$fields["WeekendDetail_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["WeekendDetail_Content"]["4"] = "description";
    self::$fields["WeekendDetail_Content"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["WeekendDetail_Content"]["5"] = "favorite_num";
    self::$fields["WeekendDetail_Content"]["6"] = "PBInt";
    $this->values["6"] = "";
    self::$fieldNames["WeekendDetail_Content"]["6"] = "is_favorite";
    self::$fields["WeekendDetail_Content"]["7"] = "WeekendDetail_Content_Items";
    $this->values["7"] = array();
    self::$fieldNames["WeekendDetail_Content"]["7"] = "items";
    self::$fields["WeekendDetail_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["WeekendDetail_Content"]["8"] = "expert_uname";
    self::$fields["WeekendDetail_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["WeekendDetail_Content"]["9"] = "expert_avatar";
    self::$fields["WeekendDetail_Content"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["WeekendDetail_Content"]["10"] = "expert_notion";
    self::$fields["WeekendDetail_Content"]["11"] = "PBInt";
    $this->values["11"] = "";
    self::$fieldNames["WeekendDetail_Content"]["11"] = "is_new";
    self::$fields["WeekendDetail_Content"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["WeekendDetail_Content"]["12"] = "is_hot";
    self::$fields["WeekendDetail_Content"]["13"] = "PBInt";
    $this->values["13"] = "";
    self::$fieldNames["WeekendDetail_Content"]["13"] = "view_num";
    self::$fields["WeekendDetail_Content"]["14"] = "PBInt";
    $this->values["14"] = "";
    self::$fieldNames["WeekendDetail_Content"]["14"] = "publish_time";
    self::$fields["WeekendDetail_Content"]["15"] = "WeekendDetail_Content_RecommendList";
    $this->values["15"] = array();
    self::$fieldNames["WeekendDetail_Content"]["15"] = "recommend_list";
  }
  function theme_id()
  {
    return $this->_get_value("1");
  }
  function set_theme_id($value)
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
  function pic_url()
  {
    return $this->_get_value("3");
  }
  function set_pic_url($value)
  {
    return $this->_set_value("3", $value);
  }
  function description()
  {
    return $this->_get_value("4");
  }
  function set_description($value)
  {
    return $this->_set_value("4", $value);
  }
  function favorite_num()
  {
    return $this->_get_value("5");
  }
  function set_favorite_num($value)
  {
    return $this->_set_value("5", $value);
  }
  function is_favorite()
  {
    return $this->_get_value("6");
  }
  function set_is_favorite($value)
  {
    return $this->_set_value("6", $value);
  }
  function items($offset)
  {
    return $this->_get_arr_value("7", $offset);
  }
  function add_items()
  {
    return $this->_add_arr_value("7");
  }
  function set_items($index, $value)
  {
    $this->_set_arr_value("7", $index, $value);
  }
  function set_all_itemss($values)
  {
    return $this->_set_arr_values("7", $values);
  }
  function remove_last_items()
  {
    $this->_remove_last_arr_value("7");
  }
  function itemss_size()
  {
    return $this->_get_arr_size("7");
  }
  function get_itemss()
  {
    return $this->_get_value("7");
  }
  function expert_uname()
  {
    return $this->_get_value("8");
  }
  function set_expert_uname($value)
  {
    return $this->_set_value("8", $value);
  }
  function expert_avatar()
  {
    return $this->_get_value("9");
  }
  function set_expert_avatar($value)
  {
    return $this->_set_value("9", $value);
  }
  function expert_notion()
  {
    return $this->_get_value("10");
  }
  function set_expert_notion($value)
  {
    return $this->_set_value("10", $value);
  }
  function is_new()
  {
    return $this->_get_value("11");
  }
  function set_is_new($value)
  {
    return $this->_set_value("11", $value);
  }
  function is_hot()
  {
    return $this->_get_value("12");
  }
  function set_is_hot($value)
  {
    return $this->_set_value("12", $value);
  }
  function view_num()
  {
    return $this->_get_value("13");
  }
  function set_view_num($value)
  {
    return $this->_set_value("13", $value);
  }
  function publish_time()
  {
    return $this->_get_value("14");
  }
  function set_publish_time($value)
  {
    return $this->_set_value("14", $value);
  }
  function recommend_list($offset)
  {
    return $this->_get_arr_value("15", $offset);
  }
  function add_recommend_list()
  {
    return $this->_add_arr_value("15");
  }
  function set_recommend_list($index, $value)
  {
    $this->_set_arr_value("15", $index, $value);
  }
  function set_all_recommend_lists($values)
  {
    return $this->_set_arr_values("15", $values);
  }
  function remove_last_recommend_list()
  {
    $this->_remove_last_arr_value("15");
  }
  function recommend_lists_size()
  {
    return $this->_get_arr_size("15");
  }
  function get_recommend_lists()
  {
    return $this->_get_value("15");
  }
}
class WeekendDetail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendDetail"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WeekendDetail"]["1"] = "err_no";
    self::$fields["WeekendDetail"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendDetail"]["2"] = "err_msg";
    self::$fields["WeekendDetail"]["3"] = "WeekendDetail_Content";
    $this->values["3"] = "";
    self::$fieldNames["WeekendDetail"]["3"] = "content";
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
  function content()
  {
    return $this->_get_value("3");
  }
  function set_content($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>