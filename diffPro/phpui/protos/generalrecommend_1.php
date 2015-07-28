<?php
class GeneralRecommend_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["GeneralRecommend_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["1"] = "title";
    self::$fields["GeneralRecommend_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["2"] = "pic_url";
    self::$fields["GeneralRecommend_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["3"] = "telephone";
    self::$fields["GeneralRecommend_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["4"] = "address";
    self::$fields["GeneralRecommend_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["5"] = "city";
    self::$fields["GeneralRecommend_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["6"] = "comment";
    self::$fields["GeneralRecommend_Content"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["7"] = "rec_reason";
    self::$fields["GeneralRecommend_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["8"] = "std_tag";
    self::$fields["GeneralRecommend_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["9"] = "weighted_tag";
    self::$fields["GeneralRecommend_Content"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["10"] = "price";
    self::$fields["GeneralRecommend_Content"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["11"] = "overall_rating";
    self::$fields["GeneralRecommend_Content"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["12"] = "uid";
    self::$fields["GeneralRecommend_Content"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["13"] = "state";
    self::$fields["GeneralRecommend_Content"]["14"] = "PBInt";
    $this->values["14"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["14"] = "distance";
    self::$fields["GeneralRecommend_Content"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["15"] = "px";
    self::$fields["GeneralRecommend_Content"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["16"] = "py";
    self::$fields["GeneralRecommend_Content"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["17"] = "sq";
    self::$fields["GeneralRecommend_Content"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["18"] = "description";
    self::$fields["GeneralRecommend_Content"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["19"] = "poi_industry";
    self::$fields["GeneralRecommend_Content"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["GeneralRecommend_Content"]["20"] = "scene";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
  {
    return $this->_set_value("1", $value);
  }
  function pic_url()
  {
    return $this->_get_value("2");
  }
  function set_pic_url($value)
  {
    return $this->_set_value("2", $value);
  }
  function telephone()
  {
    return $this->_get_value("3");
  }
  function set_telephone($value)
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
  function city()
  {
    return $this->_get_value("5");
  }
  function set_city($value)
  {
    return $this->_set_value("5", $value);
  }
  function comment()
  {
    return $this->_get_value("6");
  }
  function set_comment($value)
  {
    return $this->_set_value("6", $value);
  }
  function rec_reason()
  {
    return $this->_get_value("7");
  }
  function set_rec_reason($value)
  {
    return $this->_set_value("7", $value);
  }
  function std_tag()
  {
    return $this->_get_value("8");
  }
  function set_std_tag($value)
  {
    return $this->_set_value("8", $value);
  }
  function weighted_tag()
  {
    return $this->_get_value("9");
  }
  function set_weighted_tag($value)
  {
    return $this->_set_value("9", $value);
  }
  function price()
  {
    return $this->_get_value("10");
  }
  function set_price($value)
  {
    return $this->_set_value("10", $value);
  }
  function overall_rating()
  {
    return $this->_get_value("11");
  }
  function set_overall_rating($value)
  {
    return $this->_set_value("11", $value);
  }
  function uid()
  {
    return $this->_get_value("12");
  }
  function set_uid($value)
  {
    return $this->_set_value("12", $value);
  }
  function state()
  {
    return $this->_get_value("13");
  }
  function set_state($value)
  {
    return $this->_set_value("13", $value);
  }
  function distance()
  {
    return $this->_get_value("14");
  }
  function set_distance($value)
  {
    return $this->_set_value("14", $value);
  }
  function px()
  {
    return $this->_get_value("15");
  }
  function set_px($value)
  {
    return $this->_set_value("15", $value);
  }
  function py()
  {
    return $this->_get_value("16");
  }
  function set_py($value)
  {
    return $this->_set_value("16", $value);
  }
  function sq()
  {
    return $this->_get_value("17");
  }
  function set_sq($value)
  {
    return $this->_set_value("17", $value);
  }
  function description()
  {
    return $this->_get_value("18");
  }
  function set_description($value)
  {
    return $this->_set_value("18", $value);
  }
  function poi_industry()
  {
    return $this->_get_value("19");
  }
  function set_poi_industry($value)
  {
    return $this->_set_value("19", $value);
  }
  function scene()
  {
    return $this->_get_value("20");
  }
  function set_scene($value)
  {
    return $this->_set_value("20", $value);
  }
}
class GeneralRecommend extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["GeneralRecommend"]["1"] = "GeneralRecommend_Content";
    $this->values["1"] = array();
    self::$fieldNames["GeneralRecommend"]["1"] = "content";
    self::$fields["GeneralRecommend"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["GeneralRecommend"]["2"] = "industry";
    self::$fields["GeneralRecommend"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["GeneralRecommend"]["3"] = "count";
    self::$fields["GeneralRecommend"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["GeneralRecommend"]["4"] = "error";
    self::$fields["GeneralRecommend"]["5"] = "PBInt";
    $this->values["5"] = "";
    self::$fieldNames["GeneralRecommend"]["5"] = "more";
    self::$fields["GeneralRecommend"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["GeneralRecommend"]["6"] = "lbs_forward";
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
  function industry()
  {
    return $this->_get_value("2");
  }
  function set_industry($value)
  {
    return $this->_set_value("2", $value);
  }
  function count()
  {
    return $this->_get_value("3");
  }
  function set_count($value)
  {
    return $this->_set_value("3", $value);
  }
  function error()
  {
    return $this->_get_value("4");
  }
  function set_error($value)
  {
    return $this->_set_value("4", $value);
  }
  function more()
  {
    return $this->_get_value("5");
  }
  function set_more($value)
  {
    return $this->_set_value("5", $value);
  }
  function lbs_forward()
  {
    return $this->_get_value("6");
  }
  function set_lbs_forward($value)
  {
    return $this->_set_value("6", $value);
  }
}
?>