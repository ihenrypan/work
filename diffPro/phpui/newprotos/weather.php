<?php
/**
 * Auto generated from map_weather.proto.1 at 2015-06-23 14:50:32
 */

/**
 * Option message
 */
if (!class_exists('Option')) {
class Option extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STATUS = 1;
    const T = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 5,
        ),
        self::T => array(
            'name' => 't',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct() {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset() {
        $this->values[self::STATUS] = null;
        $this->values[self::T] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields() {
        return self::$fields;
    }

    /**
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 't' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT($value) {
        return $this->set(self::T, $value);
    }

    /**
     * Returns value of 't' property
     *
     * @return string
     */
    public function getT() {
        return $this->get(self::T);
    }
}
}

/**
 * Contents message
 */
if (!class_exists('Contents')) {
class Contents extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CNAME = 1;
    const WEATHER0 = 2;
    const TEMP0 = 3;
    const PM25 = 4;
    const PM25T = 5;
    const PIC0 = 6;
    const PIC0T = 7;
    const PICNAME0 = 8;
    const TIME0 = 9;
    const WIND0 = 10;
    const PIC01 = 11;
    const PIC02 = 12;
    const TIME1 = 13;
    const WEATHER1 = 14;
    const TEMP1 = 15;
    const WIND1 = 16;
    const PICNAME1 = 17;
    const PIC1 = 18;
    const PIC11 = 19;
    const PIC12 = 20;
    const TIME2 = 21;
    const WEATHER2 = 22;
    const TEMP2 = 23;
    const WIND2 = 24;
    const PICNAME2 = 25;
    const PIC2 = 26;
    const PIC21 = 27;
    const PIC22 = 28;
    const TIME3 = 29;
    const WEATHER3 = 30;
    const TEMP3 = 31;
    const WIND3 = 32;
    const PICNAME3 = 33;
    const PIC3 = 34;
    const PIC31 = 35;
    const PIC32 = 36;
    const TIME4 = 37;
    const WEATHER4 = 38;
    const TEMP4 = 39;
    const WIND4 = 40;
    const PICNAME4 = 41;
    const PIC4 = 42;
    const PIC41 = 43;
    const PIC42 = 44;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CNAME => array(
            'name' => 'cname',
            'required' => false,
            'type' => 7,
        ),
        self::WEATHER0 => array(
            'name' => 'weather0',
            'required' => false,
            'type' => 7,
        ),
        self::TEMP0 => array(
            'name' => 'temp0',
            'required' => false,
            'type' => 7,
        ),
        self::PM25 => array(
            'name' => 'pm25',
            'required' => false,
            'type' => 5,
        ),
        self::PM25T => array(
            'name' => 'pm25t',
            'required' => false,
            'type' => 7,
        ),
        self::PIC0 => array(
            'name' => 'pic0',
            'required' => false,
            'type' => 7,
        ),
        self::PIC0T => array(
            'name' => 'pic0t',
            'required' => false,
            'type' => 5,
        ),
        self::PICNAME0 => array(
            'name' => 'picName0',
            'required' => false,
            'type' => 7,
        ),
        self::TIME0 => array(
            'name' => 'time0',
            'required' => false,
            'type' => 7,
        ),
        self::WIND0 => array(
            'name' => 'wind0',
            'required' => false,
            'type' => 7,
        ),
        self::PIC01 => array(
            'name' => 'pic01',
            'required' => false,
            'type' => 7,
        ),
        self::PIC02 => array(
            'name' => 'pic02',
            'required' => false,
            'type' => 7,
        ),
        self::TIME1 => array(
            'name' => 'time1',
            'required' => false,
            'type' => 7,
        ),
        self::WEATHER1 => array(
            'name' => 'weather1',
            'required' => false,
            'type' => 7,
        ),
        self::TEMP1 => array(
            'name' => 'temp1',
            'required' => false,
            'type' => 7,
        ),
        self::WIND1 => array(
            'name' => 'wind1',
            'required' => false,
            'type' => 7,
        ),
        self::PICNAME1 => array(
            'name' => 'picName1',
            'required' => false,
            'type' => 7,
        ),
        self::PIC1 => array(
            'name' => 'pic1',
            'required' => false,
            'type' => 7,
        ),
        self::PIC11 => array(
            'name' => 'pic11',
            'required' => false,
            'type' => 7,
        ),
        self::PIC12 => array(
            'name' => 'pic12',
            'required' => false,
            'type' => 7,
        ),
        self::TIME2 => array(
            'name' => 'time2',
            'required' => false,
            'type' => 7,
        ),
        self::WEATHER2 => array(
            'name' => 'weather2',
            'required' => false,
            'type' => 7,
        ),
        self::TEMP2 => array(
            'name' => 'temp2',
            'required' => false,
            'type' => 7,
        ),
        self::WIND2 => array(
            'name' => 'wind2',
            'required' => false,
            'type' => 7,
        ),
        self::PICNAME2 => array(
            'name' => 'picName2',
            'required' => false,
            'type' => 7,
        ),
        self::PIC2 => array(
            'name' => 'pic2',
            'required' => false,
            'type' => 7,
        ),
        self::PIC21 => array(
            'name' => 'pic21',
            'required' => false,
            'type' => 7,
        ),
        self::PIC22 => array(
            'name' => 'pic22',
            'required' => false,
            'type' => 7,
        ),
        self::TIME3 => array(
            'name' => 'time3',
            'required' => false,
            'type' => 7,
        ),
        self::WEATHER3 => array(
            'name' => 'weather3',
            'required' => false,
            'type' => 7,
        ),
        self::TEMP3 => array(
            'name' => 'temp3',
            'required' => false,
            'type' => 7,
        ),
        self::WIND3 => array(
            'name' => 'wind3',
            'required' => false,
            'type' => 7,
        ),
        self::PICNAME3 => array(
            'name' => 'picName3',
            'required' => false,
            'type' => 7,
        ),
        self::PIC3 => array(
            'name' => 'pic3',
            'required' => false,
            'type' => 7,
        ),
        self::PIC31 => array(
            'name' => 'pic31',
            'required' => false,
            'type' => 7,
        ),
        self::PIC32 => array(
            'name' => 'pic32',
            'required' => false,
            'type' => 7,
        ),
        self::TIME4 => array(
            'name' => 'time4',
            'required' => false,
            'type' => 7,
        ),
        self::WEATHER4 => array(
            'name' => 'weather4',
            'required' => false,
            'type' => 7,
        ),
        self::TEMP4 => array(
            'name' => 'temp4',
            'required' => false,
            'type' => 7,
        ),
        self::WIND4 => array(
            'name' => 'wind4',
            'required' => false,
            'type' => 7,
        ),
        self::PICNAME4 => array(
            'name' => 'picName4',
            'required' => false,
            'type' => 7,
        ),
        self::PIC4 => array(
            'name' => 'pic4',
            'required' => false,
            'type' => 7,
        ),
        self::PIC41 => array(
            'name' => 'pic41',
            'required' => false,
            'type' => 7,
        ),
        self::PIC42 => array(
            'name' => 'pic42',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct() {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset() {
        $this->values[self::CNAME] = null;
        $this->values[self::WEATHER0] = null;
        $this->values[self::TEMP0] = null;
        $this->values[self::PM25] = null;
        $this->values[self::PM25T] = null;
        $this->values[self::PIC0] = null;
        $this->values[self::PIC0T] = null;
        $this->values[self::PICNAME0] = null;
        $this->values[self::TIME0] = null;
        $this->values[self::WIND0] = null;
        $this->values[self::PIC01] = null;
        $this->values[self::PIC02] = null;
        $this->values[self::TIME1] = null;
        $this->values[self::WEATHER1] = null;
        $this->values[self::TEMP1] = null;
        $this->values[self::WIND1] = null;
        $this->values[self::PICNAME1] = null;
        $this->values[self::PIC1] = null;
        $this->values[self::PIC11] = null;
        $this->values[self::PIC12] = null;
        $this->values[self::TIME2] = null;
        $this->values[self::WEATHER2] = null;
        $this->values[self::TEMP2] = null;
        $this->values[self::WIND2] = null;
        $this->values[self::PICNAME2] = null;
        $this->values[self::PIC2] = null;
        $this->values[self::PIC21] = null;
        $this->values[self::PIC22] = null;
        $this->values[self::TIME3] = null;
        $this->values[self::WEATHER3] = null;
        $this->values[self::TEMP3] = null;
        $this->values[self::WIND3] = null;
        $this->values[self::PICNAME3] = null;
        $this->values[self::PIC3] = null;
        $this->values[self::PIC31] = null;
        $this->values[self::PIC32] = null;
        $this->values[self::TIME4] = null;
        $this->values[self::WEATHER4] = null;
        $this->values[self::TEMP4] = null;
        $this->values[self::WIND4] = null;
        $this->values[self::PICNAME4] = null;
        $this->values[self::PIC4] = null;
        $this->values[self::PIC41] = null;
        $this->values[self::PIC42] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields() {
        return self::$fields;
    }

    /**
     * Sets value of 'cname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCname($value) {
        return $this->set(self::CNAME, $value);
    }

    /**
     * Returns value of 'cname' property
     *
     * @return string
     */
    public function getCname() {
        return $this->get(self::CNAME);
    }

    /**
     * Sets value of 'weather0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeather0($value) {
        return $this->set(self::WEATHER0, $value);
    }

    /**
     * Returns value of 'weather0' property
     *
     * @return string
     */
    public function getWeather0() {
        return $this->get(self::WEATHER0);
    }

    /**
     * Sets value of 'temp0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemp0($value) {
        return $this->set(self::TEMP0, $value);
    }

    /**
     * Returns value of 'temp0' property
     *
     * @return string
     */
    public function getTemp0() {
        return $this->get(self::TEMP0);
    }

    /**
     * Sets value of 'pm25' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPm25($value) {
        return $this->set(self::PM25, $value);
    }

    /**
     * Returns value of 'pm25' property
     *
     * @return int
     */
    public function getPm25() {
        return $this->get(self::PM25);
    }

    /**
     * Sets value of 'pm25t' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPm25t($value) {
        return $this->set(self::PM25T, $value);
    }

    /**
     * Returns value of 'pm25t' property
     *
     * @return string
     */
    public function getPm25t() {
        return $this->get(self::PM25T);
    }

    /**
     * Sets value of 'pic0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic0($value) {
        return $this->set(self::PIC0, $value);
    }

    /**
     * Returns value of 'pic0' property
     *
     * @return string
     */
    public function getPic0() {
        return $this->get(self::PIC0);
    }

    /**
     * Sets value of 'pic0t' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPic0t($value) {
        return $this->set(self::PIC0T, $value);
    }

    /**
     * Returns value of 'pic0t' property
     *
     * @return int
     */
    public function getPic0t() {
        return $this->get(self::PIC0T);
    }

    /**
     * Sets value of 'picName0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicName0($value) {
        return $this->set(self::PICNAME0, $value);
    }

    /**
     * Returns value of 'picName0' property
     *
     * @return string
     */
    public function getPicName0() {
        return $this->get(self::PICNAME0);
    }

    /**
     * Sets value of 'time0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime0($value) {
        return $this->set(self::TIME0, $value);
    }

    /**
     * Returns value of 'time0' property
     *
     * @return string
     */
    public function getTime0() {
        return $this->get(self::TIME0);
    }

    /**
     * Sets value of 'wind0' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWind0($value) {
        return $this->set(self::WIND0, $value);
    }

    /**
     * Returns value of 'wind0' property
     *
     * @return string
     */
    public function getWind0() {
        return $this->get(self::WIND0);
    }

    /**
     * Sets value of 'pic01' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic01($value) {
        return $this->set(self::PIC01, $value);
    }

    /**
     * Returns value of 'pic01' property
     *
     * @return string
     */
    public function getPic01() {
        return $this->get(self::PIC01);
    }

    /**
     * Sets value of 'pic02' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic02($value) {
        return $this->set(self::PIC02, $value);
    }

    /**
     * Returns value of 'pic02' property
     *
     * @return string
     */
    public function getPic02() {
        return $this->get(self::PIC02);
    }

    /**
     * Sets value of 'time1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime1($value) {
        return $this->set(self::TIME1, $value);
    }

    /**
     * Returns value of 'time1' property
     *
     * @return string
     */
    public function getTime1() {
        return $this->get(self::TIME1);
    }

    /**
     * Sets value of 'weather1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeather1($value) {
        return $this->set(self::WEATHER1, $value);
    }

    /**
     * Returns value of 'weather1' property
     *
     * @return string
     */
    public function getWeather1() {
        return $this->get(self::WEATHER1);
    }

    /**
     * Sets value of 'temp1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemp1($value) {
        return $this->set(self::TEMP1, $value);
    }

    /**
     * Returns value of 'temp1' property
     *
     * @return string
     */
    public function getTemp1() {
        return $this->get(self::TEMP1);
    }

    /**
     * Sets value of 'wind1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWind1($value) {
        return $this->set(self::WIND1, $value);
    }

    /**
     * Returns value of 'wind1' property
     *
     * @return string
     */
    public function getWind1() {
        return $this->get(self::WIND1);
    }

    /**
     * Sets value of 'picName1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicName1($value) {
        return $this->set(self::PICNAME1, $value);
    }

    /**
     * Returns value of 'picName1' property
     *
     * @return string
     */
    public function getPicName1() {
        return $this->get(self::PICNAME1);
    }

    /**
     * Sets value of 'pic1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic1($value) {
        return $this->set(self::PIC1, $value);
    }

    /**
     * Returns value of 'pic1' property
     *
     * @return string
     */
    public function getPic1() {
        return $this->get(self::PIC1);
    }

    /**
     * Sets value of 'pic11' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic11($value) {
        return $this->set(self::PIC11, $value);
    }

    /**
     * Returns value of 'pic11' property
     *
     * @return string
     */
    public function getPic11() {
        return $this->get(self::PIC11);
    }

    /**
     * Sets value of 'pic12' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic12($value) {
        return $this->set(self::PIC12, $value);
    }

    /**
     * Returns value of 'pic12' property
     *
     * @return string
     */
    public function getPic12() {
        return $this->get(self::PIC12);
    }

    /**
     * Sets value of 'time2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime2($value) {
        return $this->set(self::TIME2, $value);
    }

    /**
     * Returns value of 'time2' property
     *
     * @return string
     */
    public function getTime2() {
        return $this->get(self::TIME2);
    }

    /**
     * Sets value of 'weather2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeather2($value) {
        return $this->set(self::WEATHER2, $value);
    }

    /**
     * Returns value of 'weather2' property
     *
     * @return string
     */
    public function getWeather2() {
        return $this->get(self::WEATHER2);
    }

    /**
     * Sets value of 'temp2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemp2($value) {
        return $this->set(self::TEMP2, $value);
    }

    /**
     * Returns value of 'temp2' property
     *
     * @return string
     */
    public function getTemp2() {
        return $this->get(self::TEMP2);
    }

    /**
     * Sets value of 'wind2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWind2($value) {
        return $this->set(self::WIND2, $value);
    }

    /**
     * Returns value of 'wind2' property
     *
     * @return string
     */
    public function getWind2() {
        return $this->get(self::WIND2);
    }

    /**
     * Sets value of 'picName2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicName2($value) {
        return $this->set(self::PICNAME2, $value);
    }

    /**
     * Returns value of 'picName2' property
     *
     * @return string
     */
    public function getPicName2() {
        return $this->get(self::PICNAME2);
    }

    /**
     * Sets value of 'pic2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic2($value) {
        return $this->set(self::PIC2, $value);
    }

    /**
     * Returns value of 'pic2' property
     *
     * @return string
     */
    public function getPic2() {
        return $this->get(self::PIC2);
    }

    /**
     * Sets value of 'pic21' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic21($value) {
        return $this->set(self::PIC21, $value);
    }

    /**
     * Returns value of 'pic21' property
     *
     * @return string
     */
    public function getPic21() {
        return $this->get(self::PIC21);
    }

    /**
     * Sets value of 'pic22' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic22($value) {
        return $this->set(self::PIC22, $value);
    }

    /**
     * Returns value of 'pic22' property
     *
     * @return string
     */
    public function getPic22() {
        return $this->get(self::PIC22);
    }

    /**
     * Sets value of 'time3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime3($value) {
        return $this->set(self::TIME3, $value);
    }

    /**
     * Returns value of 'time3' property
     *
     * @return string
     */
    public function getTime3() {
        return $this->get(self::TIME3);
    }

    /**
     * Sets value of 'weather3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeather3($value) {
        return $this->set(self::WEATHER3, $value);
    }

    /**
     * Returns value of 'weather3' property
     *
     * @return string
     */
    public function getWeather3() {
        return $this->get(self::WEATHER3);
    }

    /**
     * Sets value of 'temp3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemp3($value) {
        return $this->set(self::TEMP3, $value);
    }

    /**
     * Returns value of 'temp3' property
     *
     * @return string
     */
    public function getTemp3() {
        return $this->get(self::TEMP3);
    }

    /**
     * Sets value of 'wind3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWind3($value) {
        return $this->set(self::WIND3, $value);
    }

    /**
     * Returns value of 'wind3' property
     *
     * @return string
     */
    public function getWind3() {
        return $this->get(self::WIND3);
    }

    /**
     * Sets value of 'picName3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicName3($value) {
        return $this->set(self::PICNAME3, $value);
    }

    /**
     * Returns value of 'picName3' property
     *
     * @return string
     */
    public function getPicName3() {
        return $this->get(self::PICNAME3);
    }

    /**
     * Sets value of 'pic3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic3($value) {
        return $this->set(self::PIC3, $value);
    }

    /**
     * Returns value of 'pic3' property
     *
     * @return string
     */
    public function getPic3() {
        return $this->get(self::PIC3);
    }

    /**
     * Sets value of 'pic31' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic31($value) {
        return $this->set(self::PIC31, $value);
    }

    /**
     * Returns value of 'pic31' property
     *
     * @return string
     */
    public function getPic31() {
        return $this->get(self::PIC31);
    }

    /**
     * Sets value of 'pic32' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic32($value) {
        return $this->set(self::PIC32, $value);
    }

    /**
     * Returns value of 'pic32' property
     *
     * @return string
     */
    public function getPic32() {
        return $this->get(self::PIC32);
    }

    /**
     * Sets value of 'time4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime4($value) {
        return $this->set(self::TIME4, $value);
    }

    /**
     * Returns value of 'time4' property
     *
     * @return string
     */
    public function getTime4() {
        return $this->get(self::TIME4);
    }

    /**
     * Sets value of 'weather4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeather4($value) {
        return $this->set(self::WEATHER4, $value);
    }

    /**
     * Returns value of 'weather4' property
     *
     * @return string
     */
    public function getWeather4() {
        return $this->get(self::WEATHER4);
    }

    /**
     * Sets value of 'temp4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTemp4($value) {
        return $this->set(self::TEMP4, $value);
    }

    /**
     * Returns value of 'temp4' property
     *
     * @return string
     */
    public function getTemp4() {
        return $this->get(self::TEMP4);
    }

    /**
     * Sets value of 'wind4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWind4($value) {
        return $this->set(self::WIND4, $value);
    }

    /**
     * Returns value of 'wind4' property
     *
     * @return string
     */
    public function getWind4() {
        return $this->get(self::WIND4);
    }

    /**
     * Sets value of 'picName4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicName4($value) {
        return $this->set(self::PICNAME4, $value);
    }

    /**
     * Returns value of 'picName4' property
     *
     * @return string
     */
    public function getPicName4() {
        return $this->get(self::PICNAME4);
    }

    /**
     * Sets value of 'pic4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic4($value) {
        return $this->set(self::PIC4, $value);
    }

    /**
     * Returns value of 'pic4' property
     *
     * @return string
     */
    public function getPic4() {
        return $this->get(self::PIC4);
    }

    /**
     * Sets value of 'pic41' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic41($value) {
        return $this->set(self::PIC41, $value);
    }

    /**
     * Returns value of 'pic41' property
     *
     * @return string
     */
    public function getPic41() {
        return $this->get(self::PIC41);
    }

    /**
     * Sets value of 'pic42' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPic42($value) {
        return $this->set(self::PIC42, $value);
    }

    /**
     * Returns value of 'pic42' property
     *
     * @return string
     */
    public function getPic42() {
        return $this->get(self::PIC42);
    }
}
}

/**
 * Weather message
 */
if (!class_exists('Weather')) {
class Weather extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENTS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'required' => false,
            'type' => 'Contents',
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct() {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset() {
        $this->values[self::OPTION] = null;
        $this->values[self::CONTENTS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields() {
        return self::$fields;
    }

    /**
     * Sets value of 'option' property
     *
     * @param Option $value Property value
     *
     * @return null
     */
    public function setOption(Option $value) {
        return $this->set(self::OPTION, $value);
    }

    /**
     * Returns value of 'option' property
     *
     * @return Option
     */
    public function getOption() {
        return $this->get(self::OPTION);
    }

    /**
     * Sets value of 'contents' property
     *
     * @param Contents $value Property value
     *
     * @return null
     */
    public function setContents(Contents $value) {
        return $this->set(self::CONTENTS, $value);
    }

    /**
     * Returns value of 'contents' property
     *
     * @return Contents
     */
    public function getContents() {
        return $this->get(self::CONTENTS);
    }
}
}
