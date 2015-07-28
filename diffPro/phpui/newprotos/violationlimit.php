<?php
/**
 * Auto generated from map_violationlimit.proto.1 at 2015-07-21 15:54:03
 */

/**
 * Lists message
 */
if (!class_exists('Lists')) {
class Lists extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITYID = 1;
    const LIMITNUM = 2;
    const EXT = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITYID => array(
            'name' => 'cityId',
            'required' => false,
            'type' => 5,
        ),
        self::LIMITNUM => array(
            'name' => 'limitNum',
            'required' => false,
            'type' => 7,
        ),
        self::EXT => array(
            'name' => 'ext',
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
        $this->values[self::CITYID] = null;
        $this->values[self::LIMITNUM] = null;
        $this->values[self::EXT] = null;
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

    /**
     * Sets value of 'limitNum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLimitNum($value) {
        return $this->set(self::LIMITNUM, $value);
    }

    /**
     * Returns value of 'limitNum' property
     *
     * @return string
     */
    public function getLimitNum() {
        return $this->get(self::LIMITNUM);
    }

    /**
     * Sets value of 'ext' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExt($value) {
        return $this->set(self::EXT, $value);
    }

    /**
     * Returns value of 'ext' property
     *
     * @return string
     */
    public function getExt() {
        return $this->get(self::EXT);
    }
}
}

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LISTS = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LISTS => array(
            'name' => 'lists',
            'repeated' => true,
            'type' => 'Lists',
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
        $this->values[self::LISTS] = array();
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
     * Appends value to 'lists' list
     *
     * @param Lists $value Value to append
     *
     * @return null
     */
    public function appendLists(Lists $value) {
        return $this->append(self::LISTS, $value);
    }

    /**
     * Clears 'lists' list
     *
     * @return null
     */
    public function clearLists() {
        return $this->clear(self::LISTS);
    }

    /**
     * Returns 'lists' list
     *
     * @return Lists[]
     */
    public function getLists() {
        return $this->get(self::LISTS);
    }

    /**
     * Returns 'lists' iterator
     *
     * @return ArrayIterator
     */
    public function getListsIterator() {
        return new ArrayIterator($this->get(self::LISTS));
    }

    /**
     * Returns element from 'lists' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Lists
     */
    public function getListsAt($offset) {
        return $this->get(self::LISTS, $offset);
    }

    /**
     * Returns count of 'lists' list
     *
     * @return int
     */
    public function getListsCount() {
        return $this->count(self::LISTS);
    }
}
}

/**
 * Violationlimit message
 */
if (!class_exists('Violationlimit')) {
class Violationlimit extends ProtobufMessage
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
