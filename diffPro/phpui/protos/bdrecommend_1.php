<?php
class BdRecommend_Content_LikeParam extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdRecommend_Content_LikeParam"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BdRecommend_Content_LikeParam"]["1"] = "key";
    self::$fields["BdRecommend_Content_LikeParam"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BdRecommend_Content_LikeParam"]["2"] = "subkey";
  }
  function key()
  {
    return $this->_get_value("1");
  }
  function set_key($value)
  {
    return $this->_set_value("1", $value);
  }
  function subkey()
  {
    return $this->_get_value("2");
  }
  function set_subkey($value)
  {
    return $this->_set_value("2", $value);
  }
}
class BdRecommend_Content_UiData extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdRecommend_Content_UiData"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["1"] = "section1";
    self::$fields["BdRecommend_Content_UiData"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["2"] = "section2";
    self::$fields["BdRecommend_Content_UiData"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["3"] = "section3";
    self::$fields["BdRecommend_Content_UiData"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["4"] = "section4";
    self::$fields["BdRecommend_Content_UiData"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["5"] = "section5";
    self::$fields["BdRecommend_Content_UiData"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["6"] = "section6";
    self::$fields["BdRecommend_Content_UiData"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["7"] = "section7";
    self::$fields["BdRecommend_Content_UiData"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["8"] = "section8";
    self::$fields["BdRecommend_Content_UiData"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["9"] = "section9";
    self::$fields["BdRecommend_Content_UiData"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["10"] = "section10";
    self::$fields["BdRecommend_Content_UiData"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["11"] = "section11";
    self::$fields["BdRecommend_Content_UiData"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["BdRecommend_Content_UiData"]["12"] = "section12";
  }
  function section1()
  {
    return $this->_get_value("1");
  }
  function set_section1($value)
  {
    return $this->_set_value("1", $value);
  }
  function section2()
  {
    return $this->_get_value("2");
  }
  function set_section2($value)
  {
    return $this->_set_value("2", $value);
  }
  function section3()
  {
    return $this->_get_value("3");
  }
  function set_section3($value)
  {
    return $this->_set_value("3", $value);
  }
  function section4()
  {
    return $this->_get_value("4");
  }
  function set_section4($value)
  {
    return $this->_set_value("4", $value);
  }
  function section5()
  {
    return $this->_get_value("5");
  }
  function set_section5($value)
  {
    return $this->_set_value("5", $value);
  }
  function section6()
  {
    return $this->_get_value("6");
  }
  function set_section6($value)
  {
    return $this->_set_value("6", $value);
  }
  function section7()
  {
    return $this->_get_value("7");
  }
  function set_section7($value)
  {
    return $this->_set_value("7", $value);
  }
  function section8()
  {
    return $this->_get_value("8");
  }
  function set_section8($value)
  {
    return $this->_set_value("8", $value);
  }
  function section9()
  {
    return $this->_get_value("9");
  }
  function set_section9($value)
  {
    return $this->_set_value("9", $value);
  }
  function section10()
  {
    return $this->_get_value("10");
  }
  function set_section10($value)
  {
    return $this->_set_value("10", $value);
  }
  function section11()
  {
    return $this->_get_value("11");
  }
  function set_section11($value)
  {
    return $this->_set_value("11", $value);
  }
  function section12()
  {
    return $this->_get_value("12");
  }
  function set_section12($value)
  {
    return $this->_set_value("12", $value);
  }
}
class BdRecommend_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdRecommend_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["BdRecommend_Content"]["1"] = "poi_industry";
    self::$fields["BdRecommend_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["BdRecommend_Content"]["2"] = "pic_url";
    self::$fields["BdRecommend_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["BdRecommend_Content"]["3"] = "uid";
    self::$fields["BdRecommend_Content"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["BdRecommend_Content"]["4"] = "px";
    self::$fields["BdRecommend_Content"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["BdRecommend_Content"]["5"] = "py";
    self::$fields["BdRecommend_Content"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["BdRecommend_Content"]["6"] = "scene";
    self::$fields["BdRecommend_Content"]["7"] = "BdRecommend_Content_LikeParam";
    $this->values["7"] = "";
    self::$fieldNames["BdRecommend_Content"]["7"] = "like_param";
    self::$fields["BdRecommend_Content"]["8"] = "BdRecommend_Content_UiData";
    $this->values["8"] = "";
    self::$fieldNames["BdRecommend_Content"]["8"] = "ui_data";
    self::$fields["BdRecommend_Content"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["BdRecommend_Content"]["9"] = "groupon_id";
    self::$fields["BdRecommend_Content"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["BdRecommend_Content"]["10"] = "tuan_price";
    self::$fields["BdRecommend_Content"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["BdRecommend_Content"]["11"] = "original_price";
  }
  function poi_industry()
  {
    return $this->_get_value("1");
  }
  function set_poi_industry($value)
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
  function uid()
  {
    return $this->_get_value("3");
  }
  function set_uid($value)
  {
    return $this->_set_value("3", $value);
  }
  function px()
  {
    return $this->_get_value("4");
  }
  function set_px($value)
  {
    return $this->_set_value("4", $value);
  }
  function py()
  {
    return $this->_get_value("5");
  }
  function set_py($value)
  {
    return $this->_set_value("5", $value);
  }
  function scene()
  {
    return $this->_get_value("6");
  }
  function set_scene($value)
  {
    return $this->_set_value("6", $value);
  }
  function like_param()
  {
    return $this->_get_value("7");
  }
  function set_like_param($value)
  {
    return $this->_set_value("7", $value);
  }
  function ui_data()
  {
    return $this->_get_value("8");
  }
  function set_ui_data($value)
  {
    return $this->_set_value("8", $value);
  }
  function groupon_id()
  {
    return $this->_get_value("9");
  }
  function set_groupon_id($value)
  {
    return $this->_set_value("9", $value);
  }
  function tuan_price()
  {
    return $this->_get_value("10");
  }
  function set_tuan_price($value)
  {
    return $this->_set_value("10", $value);
  }
  function original_price()
  {
    return $this->_get_value("11");
  }
  function set_original_price($value)
  {
    return $this->_set_value("11", $value);
  }
}
class BdRecommend extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["BdRecommend"]["1"] = "BdRecommend_Content";
    $this->values["1"] = array();
    self::$fieldNames["BdRecommend"]["1"] = "content";
    self::$fields["BdRecommend"]["8"] = "PBInt";
    $this->values["8"] = "";
    self::$fieldNames["BdRecommend"]["8"] = "error";
    self::$fields["BdRecommend"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["BdRecommend"]["9"] = "more";
    self::$fields["BdRecommend"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["BdRecommend"]["10"] = "industry";
    self::$fields["BdRecommend"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["BdRecommend"]["11"] = "lbs_forward";
    self::$fields["BdRecommend"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["BdRecommend"]["12"] = "qid";
    self::$fields["BdRecommend"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["BdRecommend"]["13"] = "ldata";
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
  function lbs_forward()
  {
    return $this->_get_value("11");
  }
  function set_lbs_forward($value)
  {
    return $this->_set_value("11", $value);
  }
  function qid()
  {
    return $this->_get_value("12");
  }
  function set_qid($value)
  {
    return $this->_set_value("12", $value);
  }
  function ldata()
  {
    return $this->_get_value("13");
  }
  function set_ldata($value)
  {
    return $this->_set_value("13", $value);
  }
}
?>