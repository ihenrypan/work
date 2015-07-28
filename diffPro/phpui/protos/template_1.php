<?php
class Template_RichText extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_RichText"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Template_RichText"]["1"] = "ori_value";
    self::$fields["Template_RichText"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Template_RichText"]["2"] = "value";
  }
  function ori_value()
  {
    return $this->_get_value("1");
  }
  function set_ori_value($value)
  {
    return $this->_set_value("1", $value);
  }
  function value()
  {
    return $this->_get_value("2");
  }
  function set_value($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Template_Resource extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_Resource"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Template_Resource"]["1"] = "resource_id";
  }
  function resource_id()
  {
    return $this->_get_value("1");
  }
  function set_resource_id($value)
  {
    return $this->_set_value("1", $value);
  }
}
class Template_Image extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_Image"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Template_Image"]["1"] = "ori_value";
    self::$fields["Template_Image"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Template_Image"]["2"] = "link";
    self::$fields["Template_Image"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Template_Image"]["3"] = "icon_id";
  }
  function ori_value()
  {
    return $this->_get_value("1");
  }
  function set_ori_value($value)
  {
    return $this->_set_value("1", $value);
  }
  function link()
  {
    return $this->_get_value("2");
  }
  function set_link($value)
  {
    return $this->_set_value("2", $value);
  }
  function icon_id()
  {
    return $this->_get_value("3");
  }
  function set_icon_id($value)
  {
    return $this->_set_value("3", $value);
  }
}
class Template_Composit extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_Composit"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Template_Composit"]["1"] = "icon_id";
    self::$fields["Template_Composit"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Template_Composit"]["2"] = "title";
    self::$fields["Template_Composit"]["3"] = "PBInt";
    $this->values["3"] = "";
    self::$fieldNames["Template_Composit"]["3"] = "tab_id";
    self::$fields["Template_Composit"]["4"] = "PBString";
    $this->values["4"] = array();
    self::$fieldNames["Template_Composit"]["4"] = "value";
  }
  function icon_id()
  {
    return $this->_get_value("1");
  }
  function set_icon_id($value)
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
  function tab_id()
  {
    return $this->_get_value("3");
  }
  function set_tab_id($value)
  {
    return $this->_set_value("3", $value);
  }
  function value($offset)
  {
    $v = $this->_get_arr_value("4", $offset);
    return $v->get_value();
  }
  function append_value($value)
  {
    $v = $this->_add_arr_value("4");
    $v->set_value($value);
  }
  function set_value($index, $value)
  {
    $v = new self::$fields["Template_Composit"]["4"]();
    $v->set_value($value);
    $this->_set_arr_value("4", $index, $v);
  }
  function remove_last_value()
  {
    $this->_remove_last_arr_value("4");
  }
  function values_size()
  {
    return $this->_get_arr_size("4");
  }
  function get_values()
  {
    return $this->_get_value("4");
  }
}
class Template_Fatherson extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_Fatherson"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Template_Fatherson"]["1"] = "act";
    self::$fields["Template_Fatherson"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Template_Fatherson"]["2"] = "title";
  }
  function act()
  {
    return $this->_get_value("1");
  }
  function set_act($value)
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
}
class Template_NormalTemplate extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_NormalTemplate"]["1"] = "Template_RichText";
    $this->values["1"] = "";
    self::$fieldNames["Template_NormalTemplate"]["1"] = "normall1c1";
    self::$fields["Template_NormalTemplate"]["2"] = "Template_Resource";
    $this->values["2"] = array();
    self::$fieldNames["Template_NormalTemplate"]["2"] = "normall1c2";
    self::$fields["Template_NormalTemplate"]["3"] = "Template_RichText";
    $this->values["3"] = "";
    self::$fieldNames["Template_NormalTemplate"]["3"] = "normall1c3";
    self::$fields["Template_NormalTemplate"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Template_NormalTemplate"]["4"] = "normall2c1";
    self::$fields["Template_NormalTemplate"]["5"] = "Template_RichText";
    $this->values["5"] = "";
    self::$fieldNames["Template_NormalTemplate"]["5"] = "normall2c2";
    self::$fields["Template_NormalTemplate"]["6"] = "Template_RichText";
    $this->values["6"] = "";
    self::$fieldNames["Template_NormalTemplate"]["6"] = "normall2c3";
    self::$fields["Template_NormalTemplate"]["7"] = "Template_RichText";
    $this->values["7"] = "";
    self::$fieldNames["Template_NormalTemplate"]["7"] = "normall3";
    self::$fields["Template_NormalTemplate"]["8"] = "Template_RichText";
    $this->values["8"] = "";
    self::$fieldNames["Template_NormalTemplate"]["8"] = "normall4";
    self::$fields["Template_NormalTemplate"]["9"] = "PBInt";
    $this->values["9"] = "";
    self::$fieldNames["Template_NormalTemplate"]["9"] = "normall5";
    self::$fields["Template_NormalTemplate"]["10"] = "Template_Composit";
    $this->values["10"] = "";
    self::$fieldNames["Template_NormalTemplate"]["10"] = "normall6";
    self::$fields["Template_NormalTemplate"]["11"] = "Template_Resource";
    $this->values["11"] = "";
    self::$fieldNames["Template_NormalTemplate"]["11"] = "upperleftcorner";
    self::$fields["Template_NormalTemplate"]["12"] = "PBString";
    $this->values["12"] = array();
    self::$fieldNames["Template_NormalTemplate"]["12"] = "flag";
    self::$fields["Template_NormalTemplate"]["13"] = "Template_Fatherson";
    $this->values["13"] = "";
    self::$fieldNames["Template_NormalTemplate"]["13"] = "fanormall5";
  }
  function normall1c1()
  {
    return $this->_get_value("1");
  }
  function set_normall1c1($value)
  {
    return $this->_set_value("1", $value);
  }
  function normall1c2($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_normall1c2()
  {
    return $this->_add_arr_value("2");
  }
  function set_normall1c2($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_normall1c2s($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_normall1c2()
  {
    $this->_remove_last_arr_value("2");
  }
  function normall1c2s_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_normall1c2s()
  {
    return $this->_get_value("2");
  }
  function normall1c3()
  {
    return $this->_get_value("3");
  }
  function set_normall1c3($value)
  {
    return $this->_set_value("3", $value);
  }
  function normall2c1()
  {
    return $this->_get_value("4");
  }
  function set_normall2c1($value)
  {
    return $this->_set_value("4", $value);
  }
  function normall2c2()
  {
    return $this->_get_value("5");
  }
  function set_normall2c2($value)
  {
    return $this->_set_value("5", $value);
  }
  function normall2c3()
  {
    return $this->_get_value("6");
  }
  function set_normall2c3($value)
  {
    return $this->_set_value("6", $value);
  }
  function normall3()
  {
    return $this->_get_value("7");
  }
  function set_normall3($value)
  {
    return $this->_set_value("7", $value);
  }
  function normall4()
  {
    return $this->_get_value("8");
  }
  function set_normall4($value)
  {
    return $this->_set_value("8", $value);
  }
  function normall5()
  {
    return $this->_get_value("9");
  }
  function set_normall5($value)
  {
    return $this->_set_value("9", $value);
  }
  function normall6()
  {
    return $this->_get_value("10");
  }
  function set_normall6($value)
  {
    return $this->_set_value("10", $value);
  }
  function upperleftcorner()
  {
    return $this->_get_value("11");
  }
  function set_upperleftcorner($value)
  {
    return $this->_set_value("11", $value);
  }
  function flag($offset)
  {
    $v = $this->_get_arr_value("12", $offset);
    return $v->get_value();
  }
  function append_flag($value)
  {
    $v = $this->_add_arr_value("12");
    $v->set_value($value);
  }
  function set_flag($index, $value)
  {
    $v = new self::$fields["Template_NormalTemplate"]["12"]();
    $v->set_value($value);
    $this->_set_arr_value("12", $index, $v);
  }
  function remove_last_flag()
  {
    $this->_remove_last_arr_value("12");
  }
  function flags_size()
  {
    return $this->_get_arr_size("12");
  }
  function get_flags()
  {
    return $this->_get_value("12");
  }
  function fanormall5()
  {
    return $this->_get_value("13");
  }
  function set_fanormall5($value)
  {
    return $this->_set_value("13", $value);
  }
}
class Template_ImageTemplate extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_ImageTemplate"]["1"] = "Template_Image";
    $this->values["1"] = "";
    self::$fieldNames["Template_ImageTemplate"]["1"] = "imagel1c1";
    self::$fields["Template_ImageTemplate"]["2"] = "Template_RichText";
    $this->values["2"] = "";
    self::$fieldNames["Template_ImageTemplate"]["2"] = "imagel1c2";
    self::$fields["Template_ImageTemplate"]["3"] = "Template_Resource";
    $this->values["3"] = array();
    self::$fieldNames["Template_ImageTemplate"]["3"] = "imagel1c3";
    self::$fields["Template_ImageTemplate"]["4"] = "PBString";
    $this->values["4"] = "";
    self::$fieldNames["Template_ImageTemplate"]["4"] = "imagel2c1";
    self::$fields["Template_ImageTemplate"]["5"] = "Template_RichText";
    $this->values["5"] = "";
    self::$fieldNames["Template_ImageTemplate"]["5"] = "imagel2c2";
    self::$fields["Template_ImageTemplate"]["6"] = "Template_RichText";
    $this->values["6"] = "";
    self::$fieldNames["Template_ImageTemplate"]["6"] = "imagel2c3";
    self::$fields["Template_ImageTemplate"]["7"] = "Template_RichText";
    $this->values["7"] = "";
    self::$fieldNames["Template_ImageTemplate"]["7"] = "imagel3c1";
    self::$fields["Template_ImageTemplate"]["8"] = "Template_RichText";
    $this->values["8"] = "";
    self::$fieldNames["Template_ImageTemplate"]["8"] = "imagel3c2";
    self::$fields["Template_ImageTemplate"]["9"] = "Template_RichText";
    $this->values["9"] = "";
    self::$fieldNames["Template_ImageTemplate"]["9"] = "imagel4";
    self::$fields["Template_ImageTemplate"]["10"] = "PBInt";
    $this->values["10"] = "";
    self::$fieldNames["Template_ImageTemplate"]["10"] = "imagel5";
    self::$fields["Template_ImageTemplate"]["11"] = "Template_Composit";
    $this->values["11"] = "";
    self::$fieldNames["Template_ImageTemplate"]["11"] = "imagel6";
    self::$fields["Template_ImageTemplate"]["12"] = "Template_Resource";
    $this->values["12"] = "";
    self::$fieldNames["Template_ImageTemplate"]["12"] = "upperleftcorner";
    self::$fields["Template_ImageTemplate"]["13"] = "Template_Fatherson";
    $this->values["13"] = "";
    self::$fieldNames["Template_ImageTemplate"]["13"] = "faimagel5";
  }
  function imagel1c1()
  {
    return $this->_get_value("1");
  }
  function set_imagel1c1($value)
  {
    return $this->_set_value("1", $value);
  }
  function imagel1c2()
  {
    return $this->_get_value("2");
  }
  function set_imagel1c2($value)
  {
    return $this->_set_value("2", $value);
  }
  function imagel1c3($offset)
  {
    return $this->_get_arr_value("3", $offset);
  }
  function add_imagel1c3()
  {
    return $this->_add_arr_value("3");
  }
  function set_imagel1c3($index, $value)
  {
    $this->_set_arr_value("3", $index, $value);
  }
  function set_all_imagel1c3s($values)
  {
    return $this->_set_arr_values("3", $values);
  }
  function remove_last_imagel1c3()
  {
    $this->_remove_last_arr_value("3");
  }
  function imagel1c3s_size()
  {
    return $this->_get_arr_size("3");
  }
  function get_imagel1c3s()
  {
    return $this->_get_value("3");
  }
  function imagel2c1()
  {
    return $this->_get_value("4");
  }
  function set_imagel2c1($value)
  {
    return $this->_set_value("4", $value);
  }
  function imagel2c2()
  {
    return $this->_get_value("5");
  }
  function set_imagel2c2($value)
  {
    return $this->_set_value("5", $value);
  }
  function imagel2c3()
  {
    return $this->_get_value("6");
  }
  function set_imagel2c3($value)
  {
    return $this->_set_value("6", $value);
  }
  function imagel3c1()
  {
    return $this->_get_value("7");
  }
  function set_imagel3c1($value)
  {
    return $this->_set_value("7", $value);
  }
  function imagel3c2()
  {
    return $this->_get_value("8");
  }
  function set_imagel3c2($value)
  {
    return $this->_set_value("8", $value);
  }
  function imagel4()
  {
    return $this->_get_value("9");
  }
  function set_imagel4($value)
  {
    return $this->_set_value("9", $value);
  }
  function imagel5()
  {
    return $this->_get_value("10");
  }
  function set_imagel5($value)
  {
    return $this->_set_value("10", $value);
  }
  function imagel6()
  {
    return $this->_get_value("11");
  }
  function set_imagel6($value)
  {
    return $this->_set_value("11", $value);
  }
  function upperleftcorner()
  {
    return $this->_get_value("12");
  }
  function set_upperleftcorner($value)
  {
    return $this->_set_value("12", $value);
  }
  function faimagel5()
  {
    return $this->_get_value("13");
  }
  function set_faimagel5($value)
  {
    return $this->_set_value("13", $value);
  }
}
class Template_PanelTemplate extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template_PanelTemplate"]["1"] = "Template_RichText";
    $this->values["1"] = "";
    self::$fieldNames["Template_PanelTemplate"]["1"] = "panell1c1";
    self::$fields["Template_PanelTemplate"]["2"] = "Template_Resource";
    $this->values["2"] = array();
    self::$fieldNames["Template_PanelTemplate"]["2"] = "panell1c2";
    self::$fields["Template_PanelTemplate"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Template_PanelTemplate"]["3"] = "panell2c1";
    self::$fields["Template_PanelTemplate"]["4"] = "Template_RichText";
    $this->values["4"] = "";
    self::$fieldNames["Template_PanelTemplate"]["4"] = "panell2c2";
    self::$fields["Template_PanelTemplate"]["5"] = "Template_RichText";
    $this->values["5"] = "";
    self::$fieldNames["Template_PanelTemplate"]["5"] = "panell2c3";
    self::$fields["Template_PanelTemplate"]["6"] = "Template_RichText";
    $this->values["6"] = "";
    self::$fieldNames["Template_PanelTemplate"]["6"] = "panell3";
    self::$fields["Template_PanelTemplate"]["7"] = "Template_Resource";
    $this->values["7"] = "";
    self::$fieldNames["Template_PanelTemplate"]["7"] = "upperleftcorner";
  }
  function panell1c1()
  {
    return $this->_get_value("1");
  }
  function set_panell1c1($value)
  {
    return $this->_set_value("1", $value);
  }
  function panell1c2($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_panell1c2()
  {
    return $this->_add_arr_value("2");
  }
  function set_panell1c2($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function set_all_panell1c2s($values)
  {
    return $this->_set_arr_values("2", $values);
  }
  function remove_last_panell1c2()
  {
    $this->_remove_last_arr_value("2");
  }
  function panell1c2s_size()
  {
    return $this->_get_arr_size("2");
  }
  function get_panell1c2s()
  {
    return $this->_get_value("2");
  }
  function panell2c1()
  {
    return $this->_get_value("3");
  }
  function set_panell2c1($value)
  {
    return $this->_set_value("3", $value);
  }
  function panell2c2()
  {
    return $this->_get_value("4");
  }
  function set_panell2c2($value)
  {
    return $this->_set_value("4", $value);
  }
  function panell2c3()
  {
    return $this->_get_value("5");
  }
  function set_panell2c3($value)
  {
    return $this->_set_value("5", $value);
  }
  function panell3()
  {
    return $this->_get_value("6");
  }
  function set_panell3($value)
  {
    return $this->_set_value("6", $value);
  }
  function upperleftcorner()
  {
    return $this->_get_value("7");
  }
  function set_upperleftcorner($value)
  {
    return $this->_set_value("7", $value);
  }
}
class Template extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Template"]["1"] = "Template_NormalTemplate";
    $this->values["1"] = "";
    self::$fieldNames["Template"]["1"] = "normal";
    self::$fields["Template"]["2"] = "Template_ImageTemplate";
    $this->values["2"] = "";
    self::$fieldNames["Template"]["2"] = "image";
    self::$fields["Template"]["3"] = "Template_PanelTemplate";
    $this->values["3"] = "";
    self::$fieldNames["Template"]["3"] = "panel";
  }
  function normal()
  {
    return $this->_get_value("1");
  }
  function set_normal($value)
  {
    return $this->_set_value("1", $value);
  }
  function image()
  {
    return $this->_get_value("2");
  }
  function set_image($value)
  {
    return $this->_set_value("2", $value);
  }
  function panel()
  {
    return $this->_get_value("3");
  }
  function set_panel($value)
  {
    return $this->_set_value("3", $value);
  }
}
?>