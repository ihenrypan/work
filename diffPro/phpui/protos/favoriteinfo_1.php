<?php
class FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["1"] = "title";
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["2"] = "contenturl";
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata"]["3"] = "timestr";
  }
  function title()
  {
    return $this->_get_value("1");
  }
  function set_title($value)
  {
    return $this->_set_value("1", $value);
  }
  function contenturl()
  {
    return $this->_get_value("2");
  }
  function set_contenturl($value)
  {
    return $this->_set_value("2", $value);
  }
  function timestr()
  {
    return $this->_get_value("3");
  }
  function set_timestr($value)
  {
    return $this->_set_value("3", $value);
  }
}
class FavoriteInfo_Data_Details_ZhidahaoFollow extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow"]["2"] = "screen_name";
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow"]["3"] = "logo_url";
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow"]["4"] = "newnum";
    self::$fields["FavoriteInfo_Data_Details_ZhidahaoFollow"]["5"] = "FavoriteInfo_Data_Details_ZhidahaoFollow_Msgdata";
    $this->values["5"] = array();
    self::$fieldNames["FavoriteInfo_Data_Details_ZhidahaoFollow"]["5"] = "msgdata";
  }
  function screen_name()
  {
    return $this->_get_value("2");
  }
  function set_screen_name($value)
  {
    return $this->_set_value("2", $value);
  }
  function logo_url()
  {
    return $this->_get_value("3");
  }
  function set_logo_url($value)
  {
    return $this->_set_value("3", $value);
  }
  function newnum()
  {
    return $this->_get_value("4");
  }
  function set_newnum($value)
  {
    return $this->_set_value("4", $value);
  }
  function msgdata($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_msgdata()
  {
    return $this->_add_arr_value("5");
  }
  function set_msgdata($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function set_all_msgdatas($values)
  {
    return $this->_set_arr_values("5", $values);
  }
  function remove_last_msgdata()
  {
    $this->_remove_last_arr_value("5");
  }
  function msgdatas_size()
  {
    return $this->_get_arr_size("5");
  }
  function get_msgdatas()
  {
    return $this->_get_value("5");
  }
}
class FavoriteInfo_Data_Details extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["FavoriteInfo_Data_Details"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details"]["1"] = "theme_id";
    self::$fields["FavoriteInfo_Data_Details"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details"]["2"] = "if_do";
    self::$fields["FavoriteInfo_Data_Details"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details"]["3"] = "do_count";
    self::$fields["FavoriteInfo_Data_Details"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details"]["4"] = "ctime";
    self::$fields["FavoriteInfo_Data_Details"]["5"] = "FavoriteInfo_Data_Details_ZhidahaoFollow";
    $this->values["5"] = "";
    self::$fieldNames["FavoriteInfo_Data_Details"]["5"] = "zhidahao_follow";
  }
  function theme_id()
  {
    return $this->_get_value("1");
  }
  function set_theme_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function if_do()
  {
    return $this->_get_value("2");
  }
  function set_if_do($value)
  {
    return $this->_set_value("2", $value);
  }
  function do_count()
  {
    return $this->_get_value("3");
  }
  function set_do_count($value)
  {
    return $this->_set_value("3", $value);
  }
  function ctime()
  {
    return $this->_get_value("4");
  }
  function set_ctime($value)
  {
    return $this->_set_value("4", $value);
  }
  function zhidahao_follow()
  {
    return $this->_get_value("5");
  }
  function set_zhidahao_follow($value)
  {
    return $this->_set_value("5", $value);
  }
}
class FavoriteInfo_Data extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["FavoriteInfo_Data"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["FavoriteInfo_Data"]["1"] = "subkey";
    self::$fields["FavoriteInfo_Data"]["2"] = "FavoriteInfo_Data_Details";
    $this->values["2"] = array();
    self::$fieldNames["FavoriteInfo_Data"]["2"] = "details";
  }
  function subkey()
  {
    return $this->_get_value("1");
  }
  function set_subkey($value)
  {
    return $this->_set_value("1", $value);
  }
  function details($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_details()
  {
    return $this->_add_arr_value("2");
  }
  function set_details($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_detailss($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_details()
  {
    $this->_remove_last_arr_value("2");
  }
  function detailss_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_detailss()
  {
    return $this->_get_value("2");
  }
}
class FavoriteInfo extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["FavoriteInfo"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["FavoriteInfo"]["1"] = "error";
    self::$fields["FavoriteInfo"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["FavoriteInfo"]["2"] = "msg";
    self::$fields["FavoriteInfo"]["3"] = "FavoriteInfo_Data";
    $this->values["3"] = array();
    self::$fieldNames["FavoriteInfo"]["3"] = "data";
  }
  function error()
  {
    return $this->_get_value("1");
  }
  function set_error($value)
  {
    return $this->_set_value("1", $value);
  }
  function msg()
  {
    return $this->_get_value("2");
  }
  function set_msg($value)
  {
    return $this->_set_value("2", $value);
  }
  function data($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_data()
  {
    return $this->_add_arr_value("3");
  }
  function set_data($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_datas($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_data()
  {
    $this->_remove_last_arr_value("3");
  }
  function datas_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_datas()
  {
    return $this->_get_value("3");
  }
}
?>