<?php
/**
 * Auto generated from map_walksearch.proto.1 at 2015-06-23 14:50:28
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
    const TOTAL = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'total',
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
        $this->values[self::TOTAL] = null;
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
     * Sets value of 'total' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotal($value) {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return int
     */
    public function getTotal() {
        return $this->get(self::TOTAL);
    }
}
}

/**
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const X = 2;
    const Y = 3;
    const ADDR = 4;
    const STREET_ID = 5;
    const TEL = 6;
    const UID = 7;
    const DIST2START = 8;
    const DIST2ROUTE = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 5,
        ),
        self::Y => array(
            'name' => 'y',
            'required' => false,
            'type' => 5,
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::STREET_ID => array(
            'name' => 'street_id',
            'required' => false,
            'type' => 7,
        ),
        self::TEL => array(
            'name' => 'tel',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::DIST2START => array(
            'name' => 'dist2start',
            'required' => false,
            'type' => 7,
        ),
        self::DIST2ROUTE => array(
            'name' => 'dist2route',
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
        $this->values[self::NAME] = null;
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::STREET_ID] = null;
        $this->values[self::TEL] = null;
        $this->values[self::UID] = null;
        $this->values[self::DIST2START] = null;
        $this->values[self::DIST2ROUTE] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName() {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'x' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return int
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return int
     */
    public function getY() {
        return $this->get(self::Y);
    }

    /**
     * Sets value of 'addr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddr($value) {
        return $this->set(self::ADDR, $value);
    }

    /**
     * Returns value of 'addr' property
     *
     * @return string
     */
    public function getAddr() {
        return $this->get(self::ADDR);
    }

    /**
     * Sets value of 'street_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreetId($value) {
        return $this->set(self::STREET_ID, $value);
    }

    /**
     * Returns value of 'street_id' property
     *
     * @return string
     */
    public function getStreetId() {
        return $this->get(self::STREET_ID);
    }

    /**
     * Sets value of 'tel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTel($value) {
        return $this->set(self::TEL, $value);
    }

    /**
     * Returns value of 'tel' property
     *
     * @return string
     */
    public function getTel() {
        return $this->get(self::TEL);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value) {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid() {
        return $this->get(self::UID);
    }

    /**
     * Sets value of 'dist2start' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDist2start($value) {
        return $this->set(self::DIST2START, $value);
    }

    /**
     * Returns value of 'dist2start' property
     *
     * @return string
     */
    public function getDist2start() {
        return $this->get(self::DIST2START);
    }

    /**
     * Sets value of 'dist2route' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDist2route($value) {
        return $this->set(self::DIST2ROUTE, $value);
    }

    /**
     * Returns value of 'dist2route' property
     *
     * @return string
     */
    public function getDist2route() {
        return $this->get(self::DIST2ROUTE);
    }
}
}

/**
 * WalkSearch message
 */
if (!class_exists('WalkSearch')) {
class WalkSearch extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const OPTION = 2;
    const CONTENT = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
            'type' => 'Content',
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
        $this->values[self::OPTION] = null;
        $this->values[self::CONTENT] = array();
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
     * Appends value to 'content' list
     *
     * @param Content $value Value to append
     *
     * @return null
     */
    public function appendContent(Content $value) {
        return $this->append(self::CONTENT, $value);
    }

    /**
     * Clears 'content' list
     *
     * @return null
     */
    public function clearContent() {
        return $this->clear(self::CONTENT);
    }

    /**
     * Returns 'content' list
     *
     * @return Content[]
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }

    /**
     * Returns 'content' iterator
     *
     * @return ArrayIterator
     */
    public function getContentIterator() {
        return new ArrayIterator($this->get(self::CONTENT));
    }

    /**
     * Returns element from 'content' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Content
     */
    public function getContentAt($offset) {
        return $this->get(self::CONTENT, $offset);
    }

    /**
     * Returns count of 'content' list
     *
     * @return int
     */
    public function getContentCount() {
        return $this->count(self::CONTENT);
    }
}
}
