<?php
/**
 * Auto generated from map_violationcarupdate.proto.1 at 2015-07-21 15:52:58
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
    const GUID = 1;
    const CARID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::GUID => array(
            'name' => 'guid',
            'required' => false,
            'type' => 7,
        ),
        self::CARID => array(
            'name' => 'carId',
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
        $this->values[self::GUID] = null;
        $this->values[self::CARID] = null;
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
}
}

/**
 * Violationcarupdate message
 */
if (!class_exists('Violationcarupdate')) {
class Violationcarupdate extends ProtobufMessage
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
            'required' => false,
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
        $this->values[self::DATA] = null;
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
     * Sets value of 'data' property
     *
     * @param Data $value Property value
     *
     * @return null
     */
    public function setData(Data $value) {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return Data
     */
    public function getData() {
        return $this->get(self::DATA);
    }
}
}
