<?php
/**
 * Auto generated from map_violationcaradd.proto.1 at 2015-07-21 15:52:47
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
 * Violationcaradd message
 */
if (!class_exists('Violationcaradd')) {
class Violationcaradd extends ProtobufMessage
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
