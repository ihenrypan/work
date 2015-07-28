<?php
class RepHead_MessageHead extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["RepHead_MessageHead"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["RepHead_MessageHead"]["1"] = "offset";
    self::$fields["RepHead_MessageHead"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["RepHead_MessageHead"]["2"] = "length";
    self::$fields["RepHead_MessageHead"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["RepHead_MessageHead"]["3"] = "name";
  }
  function offset()
  {
    return $this->_get_value("1");
  }
  function set_offset($value)
  {
    return $this->_set_value("1", $value);
  }
  function length()
  {
    return $this->_get_value("2");
  }
  function set_length($value)
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
class RepHead extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["RepHead"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["RepHead"]["1"] = "md5";
    self::$fields["RepHead"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["RepHead"]["2"] = "range";
    self::$fields["RepHead"]["3"] = "RepHead_MessageHead";
    $this->values["3"] = array();
    self::$fieldNames["RepHead"]["3"] = "message_head";
  }
  function md5()
  {
    return $this->_get_value("1");
  }
  function set_md5($value)
  {
    return $this->_set_value("1", $value);
  }
  function range()
  {
    return $this->_get_value("2");
  }
  function set_range($value)
  {
    return $this->_set_value("2", $value);
  }
  function message_head($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_message_head()
  {
    return $this->_add_arr_value("3");
  }
  function set_message_head($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_message_heads($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_message_head()
  {
    $this->_remove_last_arr_value("3");
  }
  function message_heads_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_message_heads()
  {
    return $this->_get_value("3");
  }
}
?>