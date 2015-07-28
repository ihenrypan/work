<?php
class BzList_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BzList_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BzList_Content"]["1"] = "poi_industry";
    self::$fields["BzList_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BzList_Content"]["2"] = "title";
    self::$fields["BzList_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["BzList_Content"]["3"] = "state";
    self::$fields["BzList_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["BzList_Content"]["4"] = "circle_name";
    self::$fields["BzList_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["BzList_Content"]["5"] = "pic_url";
    self::$fields["BzList_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["BzList_Content"]["6"] = "score";
    self::$fields["BzList_Content"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["BzList_Content"]["7"] = "tag";
    self::$fields["BzList_Content"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["BzList_Content"]["8"] = "price";
    self::$fields["BzList_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["BzList_Content"]["9"] = "px";
    self::$fields["BzList_Content"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["BzList_Content"]["10"] = "py";
    self::$fields["BzList_Content"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["BzList_Content"]["11"] = "id";
    self::$fields["BzList_Content"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["BzList_Content"]["12"] = "uid";
    self::$fields["BzList_Content"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["BzList_Content"]["13"] = "rec_reason";
    self::$fields["BzList_Content"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["BzList_Content"]["14"] = "scene";
    self::$fields["BzList_Content"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["BzList_Content"]["15"] = "dis";
    self::$fields["BzList_Content"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["BzList_Content"]["16"] = "flag_on_left";
    self::$fields["BzList_Content"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["BzList_Content"]["17"] = "price_text";
  }
  function poi_industry()
  {
    return $this->_get_value("1");
  }
  function set_poi_industry($value)
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
  function state()
  {
    return $this->_get_value("3");
  }
  function set_state($value)
  {
    return $this->_set_value("3", $value);
  }
  function circle_name()
  {
    return $this->_get_value("4");
  }
  function set_circle_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function pic_url()
  {
    return $this->_get_value("5");
  }
  function set_pic_url($value)
  {
    return $this->_set_value("5", $value);
  }
  function score()
  {
    return $this->_get_value("6");
  }
  function set_score($value)
  {
    return $this->_set_value("6", $value);
  }
  function tag()
  {
    return $this->_get_value("7");
  }
  function set_tag($value)
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
  function px()
  {
    return $this->_get_value("9");
  }
  function set_px($value)
  {
    return $this->_set_value("9", $value);
  }
  function py()
  {
    return $this->_get_value("10");
  }
  function set_py($value)
  {
    return $this->_set_value("10", $value);
  }
  function id()
  {
    return $this->_get_value("11");
  }
  function set_id($value)
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
  function rec_reason()
  {
    return $this->_get_value("13");
  }
  function set_rec_reason($value)
  {
    return $this->_set_value("13", $value);
  }
  function scene()
  {
    return $this->_get_value("14");
  }
  function set_scene($value)
  {
    return $this->_set_value("14", $value);
  }
  function dis()
  {
    return $this->_get_value("15");
  }
  function set_dis($value)
  {
    return $this->_set_value("15", $value);
  }
  function flag_on_left()
  {
    return $this->_get_value("16");
  }
  function set_flag_on_left($value)
  {
    return $this->_set_value("16", $value);
  }
  function price_text()
  {
    return $this->_get_value("17");
  }
  function set_price_text($value)
  {
    return $this->_set_value("17", $value);
  }
}
class BzList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BzList"]["1"] = "BzList_Content";
    $this->values["1"] = array();
    self::$fieldNames["BzList"]["1"] = "content";
    self::$fields["BzList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BzList"]["2"] = "c";
    self::$fields["BzList"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["BzList"]["3"] = "cater";
    self::$fields["BzList"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["BzList"]["4"] = "circle_name";
    self::$fields["BzList"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["BzList"]["5"] = "circle_name_recommend";
    self::$fields["BzList"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["BzList"]["6"] = "px";
    self::$fields["BzList"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["BzList"]["7"] = "py";
    self::$fields["BzList"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["BzList"]["8"] = "error";
    self::$fields["BzList"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["BzList"]["9"] = "more";
    self::$fields["BzList"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["BzList"]["10"] = "industry";
    self::$fields["BzList"]["12"] = "PBInt";
    $this->values["12"] = "";
    self::$fieldNames["BzList"]["12"] = "total_count";
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
  function c()
  {
    return $this->_get_value("2");
  }
  function set_c($value)
  {
    return $this->_set_value("2", $value);
  }
  function cater()
  {
    return $this->_get_value("3");
  }
  function set_cater($value)
  {
    return $this->_set_value("3", $value);
  }
  function circle_name()
  {
    return $this->_get_value("4");
  }
  function set_circle_name($value)
  {
    return $this->_set_value("4", $value);
  }
  function circle_name_recommend()
  {
    return $this->_get_value("5");
  }
  function set_circle_name_recommend($value)
  {
    return $this->_set_value("5", $value);
  }
  function px()
  {
    return $this->_get_value("6");
  }
  function set_px($value)
  {
    return $this->_set_value("6", $value);
  }
  function py()
  {
    return $this->_get_value("7");
  }
  function set_py($value)
  {
    return $this->_set_value("7", $value);
  }
  function error()
  {
    return $this->_get_value("8");
  }
  function set_error($value)
  {
    return $this->_set_value("8", $value);
  }
  function more()
  {
    return $this->_get_value("9");
  }
  function set_more($value)
  {
    return $this->_set_value("9", $value);
  }
  function industry()
  {
    return $this->_get_value("10");
  }
  function set_industry($value)
  {
    return $this->_set_value("10", $value);
  }
  function total_count()
  {
    return $this->_get_value("12");
  }
  function set_total_count($value)
  {
    return $this->_set_value("12", $value);
  }
}
?>