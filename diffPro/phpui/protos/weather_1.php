<?php
class Weather_Option extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Weather_Option"]["1"] = "PBInt";
    $this->values["1"] = "";
    self::$fieldNames["Weather_Option"]["1"] = "status";
    self::$fields["Weather_Option"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Weather_Option"]["2"] = "t";
  }
  function status()
  {
    return $this->_get_value("1");
  }
  function set_status($value)
  {
    return $this->_set_value("1", $value);
  }
  function t()
  {
    return $this->_get_value("2");
  }
  function set_t($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Weather_Contents extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Weather_Contents"]["1"] = "PBString";
    $this->values["1"] = "";
    self::$fieldNames["Weather_Contents"]["1"] = "cname";
    self::$fields["Weather_Contents"]["2"] = "PBString";
    $this->values["2"] = "";
    self::$fieldNames["Weather_Contents"]["2"] = "weather0";
    self::$fields["Weather_Contents"]["3"] = "PBString";
    $this->values["3"] = "";
    self::$fieldNames["Weather_Contents"]["3"] = "temp0";
    self::$fields["Weather_Contents"]["4"] = "PBInt";
    $this->values["4"] = "";
    self::$fieldNames["Weather_Contents"]["4"] = "pm25";
    self::$fields["Weather_Contents"]["5"] = "PBString";
    $this->values["5"] = "";
    self::$fieldNames["Weather_Contents"]["5"] = "pm25t";
    self::$fields["Weather_Contents"]["6"] = "PBString";
    $this->values["6"] = "";
    self::$fieldNames["Weather_Contents"]["6"] = "pic0";
    self::$fields["Weather_Contents"]["7"] = "PBInt";
    $this->values["7"] = "";
    self::$fieldNames["Weather_Contents"]["7"] = "pic0t";
    self::$fields["Weather_Contents"]["8"] = "PBString";
    $this->values["8"] = "";
    self::$fieldNames["Weather_Contents"]["8"] = "picName0";
    self::$fields["Weather_Contents"]["9"] = "PBString";
    $this->values["9"] = "";
    self::$fieldNames["Weather_Contents"]["9"] = "time0";
    self::$fields["Weather_Contents"]["10"] = "PBString";
    $this->values["10"] = "";
    self::$fieldNames["Weather_Contents"]["10"] = "wind0";
    self::$fields["Weather_Contents"]["11"] = "PBString";
    $this->values["11"] = "";
    self::$fieldNames["Weather_Contents"]["11"] = "pic01";
    self::$fields["Weather_Contents"]["12"] = "PBString";
    $this->values["12"] = "";
    self::$fieldNames["Weather_Contents"]["12"] = "pic02";
    self::$fields["Weather_Contents"]["13"] = "PBString";
    $this->values["13"] = "";
    self::$fieldNames["Weather_Contents"]["13"] = "time1";
    self::$fields["Weather_Contents"]["14"] = "PBString";
    $this->values["14"] = "";
    self::$fieldNames["Weather_Contents"]["14"] = "weather1";
    self::$fields["Weather_Contents"]["15"] = "PBString";
    $this->values["15"] = "";
    self::$fieldNames["Weather_Contents"]["15"] = "temp1";
    self::$fields["Weather_Contents"]["16"] = "PBString";
    $this->values["16"] = "";
    self::$fieldNames["Weather_Contents"]["16"] = "wind1";
    self::$fields["Weather_Contents"]["17"] = "PBString";
    $this->values["17"] = "";
    self::$fieldNames["Weather_Contents"]["17"] = "picName1";
    self::$fields["Weather_Contents"]["18"] = "PBString";
    $this->values["18"] = "";
    self::$fieldNames["Weather_Contents"]["18"] = "pic1";
    self::$fields["Weather_Contents"]["19"] = "PBString";
    $this->values["19"] = "";
    self::$fieldNames["Weather_Contents"]["19"] = "pic11";
    self::$fields["Weather_Contents"]["20"] = "PBString";
    $this->values["20"] = "";
    self::$fieldNames["Weather_Contents"]["20"] = "pic12";
    self::$fields["Weather_Contents"]["21"] = "PBString";
    $this->values["21"] = "";
    self::$fieldNames["Weather_Contents"]["21"] = "time2";
    self::$fields["Weather_Contents"]["22"] = "PBString";
    $this->values["22"] = "";
    self::$fieldNames["Weather_Contents"]["22"] = "weather2";
    self::$fields["Weather_Contents"]["23"] = "PBString";
    $this->values["23"] = "";
    self::$fieldNames["Weather_Contents"]["23"] = "temp2";
    self::$fields["Weather_Contents"]["24"] = "PBString";
    $this->values["24"] = "";
    self::$fieldNames["Weather_Contents"]["24"] = "wind2";
    self::$fields["Weather_Contents"]["25"] = "PBString";
    $this->values["25"] = "";
    self::$fieldNames["Weather_Contents"]["25"] = "picName2";
    self::$fields["Weather_Contents"]["26"] = "PBString";
    $this->values["26"] = "";
    self::$fieldNames["Weather_Contents"]["26"] = "pic2";
    self::$fields["Weather_Contents"]["27"] = "PBString";
    $this->values["27"] = "";
    self::$fieldNames["Weather_Contents"]["27"] = "pic21";
    self::$fields["Weather_Contents"]["28"] = "PBString";
    $this->values["28"] = "";
    self::$fieldNames["Weather_Contents"]["28"] = "pic22";
    self::$fields["Weather_Contents"]["29"] = "PBString";
    $this->values["29"] = "";
    self::$fieldNames["Weather_Contents"]["29"] = "time3";
    self::$fields["Weather_Contents"]["30"] = "PBString";
    $this->values["30"] = "";
    self::$fieldNames["Weather_Contents"]["30"] = "weather3";
    self::$fields["Weather_Contents"]["31"] = "PBString";
    $this->values["31"] = "";
    self::$fieldNames["Weather_Contents"]["31"] = "temp3";
    self::$fields["Weather_Contents"]["32"] = "PBString";
    $this->values["32"] = "";
    self::$fieldNames["Weather_Contents"]["32"] = "wind3";
    self::$fields["Weather_Contents"]["33"] = "PBString";
    $this->values["33"] = "";
    self::$fieldNames["Weather_Contents"]["33"] = "picName3";
    self::$fields["Weather_Contents"]["34"] = "PBString";
    $this->values["34"] = "";
    self::$fieldNames["Weather_Contents"]["34"] = "pic3";
    self::$fields["Weather_Contents"]["35"] = "PBString";
    $this->values["35"] = "";
    self::$fieldNames["Weather_Contents"]["35"] = "pic31";
    self::$fields["Weather_Contents"]["36"] = "PBString";
    $this->values["36"] = "";
    self::$fieldNames["Weather_Contents"]["36"] = "pic32";
    self::$fields["Weather_Contents"]["37"] = "PBString";
    $this->values["37"] = "";
    self::$fieldNames["Weather_Contents"]["37"] = "time4";
    self::$fields["Weather_Contents"]["38"] = "PBString";
    $this->values["38"] = "";
    self::$fieldNames["Weather_Contents"]["38"] = "weather4";
    self::$fields["Weather_Contents"]["39"] = "PBString";
    $this->values["39"] = "";
    self::$fieldNames["Weather_Contents"]["39"] = "temp4";
    self::$fields["Weather_Contents"]["40"] = "PBString";
    $this->values["40"] = "";
    self::$fieldNames["Weather_Contents"]["40"] = "wind4";
    self::$fields["Weather_Contents"]["41"] = "PBString";
    $this->values["41"] = "";
    self::$fieldNames["Weather_Contents"]["41"] = "picName4";
    self::$fields["Weather_Contents"]["42"] = "PBString";
    $this->values["42"] = "";
    self::$fieldNames["Weather_Contents"]["42"] = "pic4";
    self::$fields["Weather_Contents"]["43"] = "PBString";
    $this->values["43"] = "";
    self::$fieldNames["Weather_Contents"]["43"] = "pic41";
    self::$fields["Weather_Contents"]["44"] = "PBString";
    $this->values["44"] = "";
    self::$fieldNames["Weather_Contents"]["44"] = "pic42";
  }
  function cname()
  {
    return $this->_get_value("1");
  }
  function set_cname($value)
  {
    return $this->_set_value("1", $value);
  }
  function weather0()
  {
    return $this->_get_value("2");
  }
  function set_weather0($value)
  {
    return $this->_set_value("2", $value);
  }
  function temp0()
  {
    return $this->_get_value("3");
  }
  function set_temp0($value)
  {
    return $this->_set_value("3", $value);
  }
  function pm25()
  {
    return $this->_get_value("4");
  }
  function set_pm25($value)
  {
    return $this->_set_value("4", $value);
  }
  function pm25t()
  {
    return $this->_get_value("5");
  }
  function set_pm25t($value)
  {
    return $this->_set_value("5", $value);
  }
  function pic0()
  {
    return $this->_get_value("6");
  }
  function set_pic0($value)
  {
    return $this->_set_value("6", $value);
  }
  function pic0t()
  {
    return $this->_get_value("7");
  }
  function set_pic0t($value)
  {
    return $this->_set_value("7", $value);
  }
  function picName0()
  {
    return $this->_get_value("8");
  }
  function set_picName0($value)
  {
    return $this->_set_value("8", $value);
  }
  function time0()
  {
    return $this->_get_value("9");
  }
  function set_time0($value)
  {
    return $this->_set_value("9", $value);
  }
  function wind0()
  {
    return $this->_get_value("10");
  }
  function set_wind0($value)
  {
    return $this->_set_value("10", $value);
  }
  function pic01()
  {
    return $this->_get_value("11");
  }
  function set_pic01($value)
  {
    return $this->_set_value("11", $value);
  }
  function pic02()
  {
    return $this->_get_value("12");
  }
  function set_pic02($value)
  {
    return $this->_set_value("12", $value);
  }
  function time1()
  {
    return $this->_get_value("13");
  }
  function set_time1($value)
  {
    return $this->_set_value("13", $value);
  }
  function weather1()
  {
    return $this->_get_value("14");
  }
  function set_weather1($value)
  {
    return $this->_set_value("14", $value);
  }
  function temp1()
  {
    return $this->_get_value("15");
  }
  function set_temp1($value)
  {
    return $this->_set_value("15", $value);
  }
  function wind1()
  {
    return $this->_get_value("16");
  }
  function set_wind1($value)
  {
    return $this->_set_value("16", $value);
  }
  function picName1()
  {
    return $this->_get_value("17");
  }
  function set_picName1($value)
  {
    return $this->_set_value("17", $value);
  }
  function pic1()
  {
    return $this->_get_value("18");
  }
  function set_pic1($value)
  {
    return $this->_set_value("18", $value);
  }
  function pic11()
  {
    return $this->_get_value("19");
  }
  function set_pic11($value)
  {
    return $this->_set_value("19", $value);
  }
  function pic12()
  {
    return $this->_get_value("20");
  }
  function set_pic12($value)
  {
    return $this->_set_value("20", $value);
  }
  function time2()
  {
    return $this->_get_value("21");
  }
  function set_time2($value)
  {
    return $this->_set_value("21", $value);
  }
  function weather2()
  {
    return $this->_get_value("22");
  }
  function set_weather2($value)
  {
    return $this->_set_value("22", $value);
  }
  function temp2()
  {
    return $this->_get_value("23");
  }
  function set_temp2($value)
  {
    return $this->_set_value("23", $value);
  }
  function wind2()
  {
    return $this->_get_value("24");
  }
  function set_wind2($value)
  {
    return $this->_set_value("24", $value);
  }
  function picName2()
  {
    return $this->_get_value("25");
  }
  function set_picName2($value)
  {
    return $this->_set_value("25", $value);
  }
  function pic2()
  {
    return $this->_get_value("26");
  }
  function set_pic2($value)
  {
    return $this->_set_value("26", $value);
  }
  function pic21()
  {
    return $this->_get_value("27");
  }
  function set_pic21($value)
  {
    return $this->_set_value("27", $value);
  }
  function pic22()
  {
    return $this->_get_value("28");
  }
  function set_pic22($value)
  {
    return $this->_set_value("28", $value);
  }
  function time3()
  {
    return $this->_get_value("29");
  }
  function set_time3($value)
  {
    return $this->_set_value("29", $value);
  }
  function weather3()
  {
    return $this->_get_value("30");
  }
  function set_weather3($value)
  {
    return $this->_set_value("30", $value);
  }
  function temp3()
  {
    return $this->_get_value("31");
  }
  function set_temp3($value)
  {
    return $this->_set_value("31", $value);
  }
  function wind3()
  {
    return $this->_get_value("32");
  }
  function set_wind3($value)
  {
    return $this->_set_value("32", $value);
  }
  function picName3()
  {
    return $this->_get_value("33");
  }
  function set_picName3($value)
  {
    return $this->_set_value("33", $value);
  }
  function pic3()
  {
    return $this->_get_value("34");
  }
  function set_pic3($value)
  {
    return $this->_set_value("34", $value);
  }
  function pic31()
  {
    return $this->_get_value("35");
  }
  function set_pic31($value)
  {
    return $this->_set_value("35", $value);
  }
  function pic32()
  {
    return $this->_get_value("36");
  }
  function set_pic32($value)
  {
    return $this->_set_value("36", $value);
  }
  function time4()
  {
    return $this->_get_value("37");
  }
  function set_time4($value)
  {
    return $this->_set_value("37", $value);
  }
  function weather4()
  {
    return $this->_get_value("38");
  }
  function set_weather4($value)
  {
    return $this->_set_value("38", $value);
  }
  function temp4()
  {
    return $this->_get_value("39");
  }
  function set_temp4($value)
  {
    return $this->_set_value("39", $value);
  }
  function wind4()
  {
    return $this->_get_value("40");
  }
  function set_wind4($value)
  {
    return $this->_set_value("40", $value);
  }
  function picName4()
  {
    return $this->_get_value("41");
  }
  function set_picName4($value)
  {
    return $this->_set_value("41", $value);
  }
  function pic4()
  {
    return $this->_get_value("42");
  }
  function set_pic4($value)
  {
    return $this->_set_value("42", $value);
  }
  function pic41()
  {
    return $this->_get_value("43");
  }
  function set_pic41($value)
  {
    return $this->_set_value("43", $value);
  }
  function pic42()
  {
    return $this->_get_value("44");
  }
  function set_pic42($value)
  {
    return $this->_set_value("44", $value);
  }
}
class Weather extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    self::$fields["Weather"]["1"] = "Weather_Option";
    $this->values["1"] = "";
    self::$fieldNames["Weather"]["1"] = "option";
    self::$fields["Weather"]["2"] = "Weather_Contents";
    $this->values["2"] = "";
    self::$fieldNames["Weather"]["2"] = "contents";
  }
  function option()
  {
    return $this->_get_value("1");
  }
  function set_option($value)
  {
    return $this->_set_value("1", $value);
  }
  function contents()
  {
    return $this->_get_value("2");
  }
  function set_contents($value)
  {
    return $this->_set_value("2", $value);
  }
}
?>