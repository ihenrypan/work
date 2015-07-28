<?php
class Subways_SwXmlattr extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways_SwXmlattr"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["1"] = "cid";
    self::$fields["Subways_SwXmlattr"]["2"] = "PBInt";
    $this->values["2"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["2"] = "n";
    self::$fields["Subways_SwXmlattr"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["3"] = "c";
    self::$fields["Subways_SwXmlattr"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["4"] = "src";
    self::$fields["Subways_SwXmlattr"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["5"] = "bg";
    self::$fields["Subways_SwXmlattr"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["6"] = "icon";
    self::$fields["Subways_SwXmlattr"]["7"] = "PBString";
    $this->values["7"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["7"] = "width";
    self::$fields["Subways_SwXmlattr"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["8"] = "height";
    self::$fields["Subways_SwXmlattr"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Subways_SwXmlattr"]["9"] = "version";
  }
  function cid()
  {
    return $this->_get_value("1");
  }
  function set_cid($value)
  {
    return $this->_set_value("1", $value);
  }
  function n()
  {
    return $this->_get_value("2");
  }
  function set_n($value)
  {
    return $this->_set_value("2", $value);
  }
  function c()
  {
    return $this->_get_value("3");
  }
  function set_c($value)
  {
    return $this->_set_value("3", $value);
  }
  function src()
  {
    return $this->_get_value("4");
  }
  function set_src($value)
  {
    return $this->_set_value("4", $value);
  }
  function bg()
  {
    return $this->_get_value("5");
  }
  function set_bg($value)
  {
    return $this->_set_value("5", $value);
  }
  function icon()
  {
    return $this->_get_value("6");
  }
  function set_icon($value)
  {
    return $this->_set_value("6", $value);
  }
  function width()
  {
    return $this->_get_value("7");
  }
  function set_width($value)
  {
    return $this->_set_value("7", $value);
  }
  function height()
  {
    return $this->_get_value("8");
  }
  function set_height($value)
  {
    return $this->_set_value("8", $value);
  }
  function version()
  {
    return $this->_get_value("9");
  }
  function set_version($value)
  {
    return $this->_set_value("9", $value);
  }
}
class Subways_L_LXmlattr extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways_L_LXmlattr"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["1"] = "lid";
    self::$fields["Subways_L_LXmlattr"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["2"] = "lb";
    self::$fields["Subways_L_LXmlattr"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["3"] = "slb";
    self::$fields["Subways_L_LXmlattr"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["4"] = "n";
    self::$fields["Subways_L_LXmlattr"]["5"] = "PBBool";
    $this->values["5"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["5"] = "loop";
    self::$fields["Subways_L_LXmlattr"]["6"] = "PB64Bit";
    $this->values["6"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["6"] = "lbx";
    self::$fields["Subways_L_LXmlattr"]["7"] = "PB64Bit";
    $this->values["7"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["7"] = "lby";
    self::$fields["Subways_L_LXmlattr"]["8"] = "PB64Bit";
    $this->values["8"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["8"] = "lbr";
    self::$fields["Subways_L_LXmlattr"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["9"] = "lc";
    self::$fields["Subways_L_LXmlattr"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Subways_L_LXmlattr"]["10"] = "uid";
  }
  function lid()
  {
    return $this->_get_value("1");
  }
  function set_lid($value)
  {
    return $this->_set_value("1", $value);
  }
  function lb()
  {
    return $this->_get_value("2");
  }
  function set_lb($value)
  {
    return $this->_set_value("2", $value);
  }
  function slb()
  {
    return $this->_get_value("3");
  }
  function set_slb($value)
  {
    return $this->_set_value("3", $value);
  }
  function n()
  {
    return $this->_get_value("4");
  }
  function set_n($value)
  {
    return $this->_set_value("4", $value);
  }
  function loop()
  {
    return $this->_get_value("5");
  }
  function set_loop($value)
  {
    return $this->_set_value("5", $value);
  }
  function lbx()
  {
    return $this->_get_value("6");
  }
  function set_lbx($value)
  {
    return $this->_set_value("6", $value);
  }
  function lby()
  {
    return $this->_get_value("7");
  }
  function set_lby($value)
  {
    return $this->_set_value("7", $value);
  }
  function lbr()
  {
    return $this->_get_value("8");
  }
  function set_lbr($value)
  {
    return $this->_set_value("8", $value);
  }
  function lc()
  {
    return $this->_get_value("9");
  }
  function set_lc($value)
  {
    return $this->_set_value("9", $value);
  }
  function uid()
  {
    return $this->_get_value("10");
  }
  function set_uid($value)
  {
    return $this->_set_value("10", $value);
  }
}
class Subways_L_P_PXmlattr extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways_L_P_PXmlattr"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["1"] = "sid";
    self::$fields["Subways_L_P_PXmlattr"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["2"] = "lb";
    self::$fields["Subways_L_P_PXmlattr"]["3"] = "PB64Bit";
    $this->values["3"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["3"] = "x";
    self::$fields["Subways_L_P_PXmlattr"]["4"] = "PB64Bit";
    $this->values["4"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["4"] = "y";
    self::$fields["Subways_L_P_PXmlattr"]["5"] = "PB64Bit";
    $this->values["5"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["5"] = "rx";
    self::$fields["Subways_L_P_PXmlattr"]["6"] = "PB64Bit";
    $this->values["6"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["6"] = "ry";
    self::$fields["Subways_L_P_PXmlattr"]["7"] = "PBBool";
    $this->values["7"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["7"] = "st";
    self::$fields["Subways_L_P_PXmlattr"]["8"] = "PBBool";
    $this->values["8"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["8"] = "ex";
    self::$fields["Subways_L_P_PXmlattr"]["9"] = "PBBool";
    $this->values["9"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["9"] = "iu";
    self::$fields["Subways_L_P_PXmlattr"]["10"] = "PBBool";
    $this->values["10"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["10"] = "rc";
    self::$fields["Subways_L_P_PXmlattr"]["11"] = "PBBool";
    $this->values["11"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["11"] = "slb";
    self::$fields["Subways_L_P_PXmlattr"]["12"] = "PB64Bit";
    $this->values["12"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["12"] = "px";
    self::$fields["Subways_L_P_PXmlattr"]["13"] = "PB64Bit";
    $this->values["13"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["13"] = "py";
    self::$fields["Subways_L_P_PXmlattr"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["14"] = "uid";
    self::$fields["Subways_L_P_PXmlattr"]["15"] = "PBBool";
    $this->values["15"] = "";
    self::$fieldNames["Subways_L_P_PXmlattr"]["15"] = "bold";
  }
  function sid()
  {
    return $this->_get_value("1");
  }
  function set_sid($value)
  {
    return $this->_set_value("1", $value);
  }
  function lb()
  {
    return $this->_get_value("2");
  }
  function set_lb($value)
  {
    return $this->_set_value("2", $value);
  }
  function x()
  {
    return $this->_get_value("3");
  }
  function set_x($value)
  {
    return $this->_set_value("3", $value);
  }
  function y()
  {
    return $this->_get_value("4");
  }
  function set_y($value)
  {
    return $this->_set_value("4", $value);
  }
  function rx()
  {
    return $this->_get_value("5");
  }
  function set_rx($value)
  {
    return $this->_set_value("5", $value);
  }
  function ry()
  {
    return $this->_get_value("6");
  }
  function set_ry($value)
  {
    return $this->_set_value("6", $value);
  }
  function st()
  {
    return $this->_get_value("7");
  }
  function set_st($value)
  {
    return $this->_set_value("7", $value);
  }
  function ex()
  {
    return $this->_get_value("8");
  }
  function set_ex($value)
  {
    return $this->_set_value("8", $value);
  }
  function iu()
  {
    return $this->_get_value("9");
  }
  function set_iu($value)
  {
    return $this->_set_value("9", $value);
  }
  function rc()
  {
    return $this->_get_value("10");
  }
  function set_rc($value)
  {
    return $this->_set_value("10", $value);
  }
  function slb()
  {
    return $this->_get_value("11");
  }
  function set_slb($value)
  {
    return $this->_set_value("11", $value);
  }
  function px()
  {
    return $this->_get_value("12");
  }
  function set_px($value)
  {
    return $this->_set_value("12", $value);
  }
  function py()
  {
    return $this->_get_value("13");
  }
  function set_py($value)
  {
    return $this->_set_value("13", $value);
  }
  function uid()
  {
    return $this->_get_value("14");
  }
  function set_uid($value)
  {
    return $this->_set_value("14", $value);
  }
  function bold()
  {
    return $this->_get_value("15");
  }
  function set_bold($value)
  {
    return $this->_set_value("15", $value);
  }
}
class Subways_L_P extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways_L_P"]["1"] = "Subways_L_P_PXmlattr";
    $this->values["1"] = "";
    self::$fieldNames["Subways_L_P"]["1"] = "p_xmlattr";
  }
  function p_xmlattr()
  {
    return $this->_get_value("1");
  }
  function set_p_xmlattr($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Subways_L extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways_L"]["1"] = "Subways_L_LXmlattr";
    $this->values["1"] = "";
    self::$fieldNames["Subways_L"]["1"] = "l_xmlattr";
    self::$fields["Subways_L"]["2"] = "Subways_L_P";
    $this->values["2"] = array();
    self::$fieldNames["Subways_L"]["2"] = "p";
  }
  function l_xmlattr()
  {
    return $this->_get_value("1");
  }
  function set_l_xmlattr($value)
  {
    return $this->_set_value("1", $value);
  }
  function p($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_p()
  {
    return $this->_add_arr_value("2");
  }
  function set_p($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_ps($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_p()
  {
    $this->_remove_last_arr_value("2");
  }
  function ps_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_ps()
  {
    return $this->_get_value("2");
  }
}
class Subways extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Subways"]["1"] = "Subways_SwXmlattr";
    $this->values["1"] = "";
    self::$fieldNames["Subways"]["1"] = "sw_xmlattr";
    self::$fields["Subways"]["2"] = "Subways_L";
    $this->values["2"] = array();
    self::$fieldNames["Subways"]["2"] = "l";
  }
  function sw_xmlattr()
  {
    return $this->_get_value("1");
  }
  function set_sw_xmlattr($value)
  {
    return $this->_set_value("1", $value);
  }
  function l($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_l()
  {
    return $this->_add_arr_value("2");
  }
  function set_l($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_ls($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_l()
  {
    $this->_remove_last_arr_value("2");
  }
  function ls_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_ls()
  {
    return $this->_get_value("2");
  }
}
?>