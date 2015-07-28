<?php
class Carddetail_Meishi_BusinessScope extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Carddetail_Meishi_BusinessScope"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Carddetail_Meishi_BusinessScope"]["1"] = "name";
  }
  function name()
  {
    return $this->_get_value("1");
  }
  function set_name($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Carddetail_Meishi extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Carddetail_Meishi"]["2"] = "Carddetail_Meishi_BusinessScope";
    $this->values["2"] = array();
    self::$fieldNames["Carddetail_Meishi"]["2"] = "business_scope";
    self::$fields["Carddetail_Meishi"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Carddetail_Meishi"]["1"] = "business_scope_type";
  }
  function business_scope($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_business_scope()
  {
    return $this->_add_arr_value("2");
  }
  function set_business_scope($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_business_scopes($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_business_scope()
  {
    $this->_remove_last_arr_value("2");
  }
  function business_scopes_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_business_scopes()
  {
    return $this->_get_value("2");
  }
  function business_scope_type()
  {
    return $this->_get_value("1");
  }
  function set_business_scope_type($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Carddetail extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Carddetail"]["1"] = "Carddetail_Meishi";
    $this->values["1"] = "";
    self::$fieldNames["Carddetail"]["1"] = "meishi";
  }
  function meishi()
  {
    return $this->_get_value("1");
  }
  function set_meishi($value)
  {
    return $this->_set_value("1", $value);
  }
}
?>