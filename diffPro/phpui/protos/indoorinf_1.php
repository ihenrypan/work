<?php
class IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["1"] = "bid";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["2"] = "description";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["3"] = "name";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList"]["4"] = "uid";
  }
  function bid()
  {
    return $this->_get_value("1");
  }
  function set_bid($value)
  {
    return $this->_set_value("1", $value);
  }
  function description()
  {
    return $this->_get_value("2");
  }
  function set_description($value)
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
  function uid()
  {
    return $this->_get_value("4");
  }
  function set_uid($value)
  {
    return $this->_set_value("4", $value);
  }
}
class IndoorInf_Data_Content_Floorcontent_CatalogList extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList"]["1"] = "icon_url";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList"]["2"] = "IndoorInf_Data_Content_Floorcontent_CatalogList_ContentList";
    $this->values["2"] = array();
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList"]["2"] = "content_list";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList"]["3"] = "type";
    self::$fields["IndoorInf_Data_Content_Floorcontent_CatalogList"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent_CatalogList"]["4"] = "name";
  }
  function icon_url()
  {
    return $this->_get_value("1");
  }
  function set_icon_url($value)
  {
    return $this->_set_value("1", $value);
  }
  function content_list($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_content_list()
  {
    return $this->_add_arr_value("2");
  }
  function set_content_list($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_content_lists($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_content_list()
  {
    $this->_remove_last_arr_value("2");
  }
  function content_lists_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_content_lists()
  {
    return $this->_get_value("2");
  }
  function type()
  {
    return $this->_get_value("3");
  }
  function set_type($value)
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
class IndoorInf_Data_Content_Floorcontent extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf_Data_Content_Floorcontent"]["1"] = "IndoorInf_Data_Content_Floorcontent_CatalogList";
    $this->values["1"] = array();
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent"]["1"] = "catalog_list";
    self::$fields["IndoorInf_Data_Content_Floorcontent"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent"]["2"] = "type";
    self::$fields["IndoorInf_Data_Content_Floorcontent"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["IndoorInf_Data_Content_Floorcontent"]["3"] = "name";
  }
  function catalog_list($offset)
  {
    return $this->_get_arr_value("1", $offset);
  }
  function add_catalog_list()
  {
    return $this->_add_arr_value("1");
  }
  function set_catalog_list($index, $value)
  {
    $this->_set_arr_value("1", $index, $value);
  }
  function set_all_catalog_lists($values)
  {
    return $this->_set_arr_values("1", $values);
  }
  function remove_last_catalog_list()
  {
    $this->_remove_last_arr_value("1");
  }
  function catalog_lists_size()
  {
    return $this->_get_arr_size("1");
  }
  function get_catalog_lists()
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
  function name()
  {
    return $this->_get_value("3");
  }
  function set_name($value)
  {
    return $this->_set_value("3", $value);
  }
}
class IndoorInf_Data_Content extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf_Data_Content"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IndoorInf_Data_Content"]["1"] = "name";
    self::$fields["IndoorInf_Data_Content"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["IndoorInf_Data_Content"]["2"] = "description";
    self::$fields["IndoorInf_Data_Content"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["IndoorInf_Data_Content"]["3"] = "floor";
    self::$fields["IndoorInf_Data_Content"]["4"] = "IndoorInf_Data_Content_Floorcontent";
    $this->values["4"] = array();
    self::$fieldNames["IndoorInf_Data_Content"]["4"] = "floorcontent";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
  function description()
  {
    return $this->_get_value("2");
  }
  function set_description($value)
  {
    return $this->_set_value("2", $value);
  }
  function floor()
  {
    return $this->_get_value("3");
  }
  function set_floor($value)
  {
    return $this->_set_value("3", $value);
  }
  function floorcontent($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_floorcontent()
  {
    return $this->_add_arr_value("4");
  }
  function set_floorcontent($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function set_all_floorcontents($values)
  {
    return $this->_set_arr_values("4", $values);
  }
  function remove_last_floorcontent()
  {
    $this->_remove_last_arr_value("4");
  }
  function floorcontents_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_floorcontents()
  {
    return $this->_get_value("4");
  }
}
class IndoorInf_Data extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf_Data"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["IndoorInf_Data"]["1"] = "type";
    self::$fields["IndoorInf_Data"]["2"] = "IndoorInf_Data_Content";
    $this->values["2"] = array();
    self::$fieldNames["IndoorInf_Data"]["2"] = "content";
  }
  function type()
  {
    return $this->_get_value("1");
  }
  function set_type($value)
  {
    return $this->_set_value("1", $value);
  }
  function content($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_content()
  {
    return $this->_add_arr_value("2");
  }
  function set_content($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_contents($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_content()
  {
    $this->_remove_last_arr_value("2");
  }
  function contents_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_contents()
  {
    return $this->_get_value("2");
  }
}
class IndoorInf extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["IndoorInf"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["IndoorInf"]["1"] = "errorNo";
    self::$fields["IndoorInf"]["2"] = "IndoorInf_Data";
    $this->values["2"] = "";
    self::$fieldNames["IndoorInf"]["2"] = "data";
  }
  function errorNo()
  {
    return $this->_get_value("1");
  }
  function set_errorNo($value)
  {
    return $this->_set_value("1", $value);
  }
  function data()
  {
    return $this->_get_value("2");
  }
  function set_data($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>