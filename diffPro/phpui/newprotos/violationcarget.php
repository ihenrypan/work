<?php
/**
 * Auto generated from map_violationcarget.proto.1 at 2015-07-22 18:36:24
 */

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CARID = 1;
    const GUID = 2;
    const BRAND = 3;
    const BRANDMODEL = 4;
    const ICON = 5;
    const PLATE = 6;
    const ENGINE = 7;
    const FRAME = 8;
    const REGISTER = 9;
    const CITYID = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CARID => array(
            'name' => 'carId',
            'required' => false,
            'type' => 7,
        ),
        self::GUID => array(
            'name' => 'guid',
            'required' => false,
            'type' => 7,
        ),
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => 7,
        ),
        self::BRANDMODEL => array(
            'name' => 'brandModel',
            'required' => false,
            'type' => 7,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => 7,
        ),
        self::PLATE => array(
            'name' => 'plate',
            'required' => false,
            'type' => 7,
        ),
        self::ENGINE => array(
            'name' => 'engine',
            'required' => false,
            'type' => 7,
        ),
        self::FRAME => array(
            'name' => 'frame',
            'required' => false,
            'type' => 7,
        ),
        self::REGISTER => array(
            'name' => 'register',
            'required' => false,
            'type' => 7,
        ),
        self::CITYID => array(
            'name' => 'cityId',
            'required' => false,
            'type' => 5,
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
        $this->values[self::CARID] = null;
        $this->values[self::GUID] = null;
        $this->values[self::BRAND] = null;
        $this->values[self::BRANDMODEL] = null;
        $this->values[self::ICON] = null;
        $this->values[self::PLATE] = null;
        $this->values[self::ENGINE] = null;
        $this->values[self::FRAME] = null;
        $this->values[self::REGISTER] = null;
        $this->values[self::CITYID] = null;
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
     * Sets value of 'carId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCarId($value) {
        return $this->set(self::CARID, $value);
    }

    /**
     * Returns value of 'carId' property
     *
     * @return string
     */
    public function getCarId() {
        return $this->get(self::CARID);
    }

    /**
     * Sets value of 'guid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuid($value) {
        return $this->set(self::GUID, $value);
    }

    /**
     * Returns value of 'guid' property
     *
     * @return string
     */
    public function getGuid() {
        return $this->get(self::GUID);
    }

    /**
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value) {
        return $this->set(self::BRAND, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand() {
        return $this->get(self::BRAND);
    }

    /**
     * Sets value of 'brandModel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrandModel($value) {
        return $this->set(self::BRANDMODEL, $value);
    }

    /**
     * Returns value of 'brandModel' property
     *
     * @return string
     */
    public function getBrandModel() {
        return $this->get(self::BRANDMODEL);
    }

    /**
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value) {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon() {
        return $this->get(self::ICON);
    }

    /**
     * Sets value of 'plate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPlate($value) {
        return $this->set(self::PLATE, $value);
    }

    /**
     * Returns value of 'plate' property
     *
     * @return string
     */
    public function getPlate() {
        return $this->get(self::PLATE);
    }

    /**
     * Sets value of 'engine' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEngine($value) {
        return $this->set(self::ENGINE, $value);
    }

    /**
     * Returns value of 'engine' property
     *
     * @return string
     */
    public function getEngine() {
        return $this->get(self::ENGINE);
    }

    /**
     * Sets value of 'frame' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrame($value) {
        return $this->set(self::FRAME, $value);
    }

    /**
     * Returns value of 'frame' property
     *
     * @return string
     */
    public function getFrame() {
        return $this->get(self::FRAME);
    }

    /**
     * Sets value of 'register' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegister($value) {
        return $this->set(self::REGISTER, $value);
    }

    /**
     * Returns value of 'register' property
     *
     * @return string
     */
    public function getRegister() {
        return $this->get(self::REGISTER);
    }

    /**
     * Sets value of 'cityId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCityId($value) {
        return $this->set(self::CITYID, $value);
    }

    /**
     * Returns value of 'cityId' property
     *
     * @return int
     */
    public function getCityId() {
        return $this->get(self::CITYID);
    }
}
}

/**
 * Violationcarget message
 */
if (!class_exists('Violationcarget')) {
class Violationcarget extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const MSG = 2;
    const DATA = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => 7,
        ),
        self::DATA => array(
            'name' => 'data',
            'repeated' => true,
            'type' => 'Data',
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
        $this->values[self::ERROR] = null;
        $this->values[self::MSG] = null;
        $this->values[self::DATA] = array();
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
     * Sets value of 'error' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setError($value) {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return int
     */
    public function getError() {
        return $this->get(self::ERROR);
    }

    /**
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value) {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg() {
        return $this->get(self::MSG);
    }

    /**
     * Appends value to 'data' list
     *
     * @param Data $value Value to append
     *
     * @return null
     */
    public function appendData(Data $value) {
        return $this->append(self::DATA, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData() {
        return $this->clear(self::DATA);
    }

    /**
     * Returns 'data' list
     *
     * @return Data[]
     */
    public function getData() {
        return $this->get(self::DATA);
    }

    /**
     * Returns 'data' iterator
     *
     * @return ArrayIterator
     */
    public function getDataIterator() {
        return new ArrayIterator($this->get(self::DATA));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Data
     */
    public function getDataAt($offset) {
        return $this->get(self::DATA, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount() {
        return $this->count(self::DATA);
    }
}
}
