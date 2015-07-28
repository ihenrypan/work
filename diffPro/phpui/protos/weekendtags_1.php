<?php
class WeekendTags_Content_Tags_SubTags extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendTags_Content_Tags_SubTags"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendTags_Content_Tags_SubTags"]["1"] = "text";
  }
  function text()
  {
    return $this->_get_value("1");
  }
  function set_text($value)
  {
    return $this->_set_value("1", $value);
  }
}
class WeekendTags_Content_Tags extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendTags_Content_Tags"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["WeekendTags_Content_Tags"]["1"] = "text";
    self::$fields["WeekendTags_Content_Tags"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendTags_Content_Tags"]["2"] = "pic_url";
    self::$fields["WeekendTags_Content_Tags"]["3"] = "WeekendTags_Content_Tags_SubTags";
    $this->values["3"] = array();
    self::$fieldNames["WeekendTags_Content_Tags"]["3"] = "sub_tags";
  }
  function text()
  {
    return $this->_get_value("1");
  }
  function set_text($value)
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
  function sub_tags($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_sub_tags()
  {
    return $this->_add_arr_value("3");
  }
  function set_sub_tags($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_sub_tagss($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_sub_tags()
  {
    $this->_remove_last_arr_value("3");
  }
  function sub_tagss_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_sub_tagss()
  {
    return $this->_get_value("3");
  }
}
class WeekendTags_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendTags_Content"]["1"] = "WeekendTags_Content_Tags";
    $this->values["1"] = array();
    self::$fieldNames["WeekendTags_Content"]["1"] = "tags";
    self::$fields["WeekendTags_Content"]["2"] = "PBString";
    $this->values["2"] = array();
    self::$fieldNames["WeekendTags_Content"]["2"] = "districts";
    self::$fields["WeekendTags_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["WeekendTags_Content"]["3"] = "data_hash";
  }
  function tags($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_tags()
  {
    return $this->_add_arr_value("1");
  }
  function set_tags($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_tagss($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_tags()
  {
    $this->_remove_last_arr_value("1");
  }
  function tagss_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_tagss()
  {
    return $this->_get_value("1");
  }
  function districts($offset)
  {
    $v = $this->_get_arr_value("2", $offset);
    return $v->get_value();
  }
  function append_districts($value)
  {
    $v = $this->_add_arr_value("2");
    $v->set_value($value);
  }
  function set_districts($index, $value)
  {
    $v = new self::$fields["WeekendTags_Content"]["2"]();
    $v->set_value($value);
    $this->_set_arr_value("2", $index, $v);
  }
  function remove_last_districts()
  {
    $this->_remove_last_arr_value("2");
  }
  function districtss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_districtss()
  {
    return $this->_get_value("2");
  }
  function data_hash()
  {
    return $this->_get_value("3");
  }
  function set_data_hash($value)
  {
    return $this->_set_value("3", $value);
  }
}
class WeekendTags extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["WeekendTags"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["WeekendTags"]["1"] = "err_no";
    self::$fields["WeekendTags"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["WeekendTags"]["2"] = "err_msg";
    self::$fields["WeekendTags"]["3"] = "WeekendTags_Content";
    $this->values["3"] = "";
    self::$fieldNames["WeekendTags"]["3"] = "content";
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