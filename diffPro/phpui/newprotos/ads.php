<?php
/**
 * Auto generated from map_ads.proto.1 at 2015-06-23 14:46:36
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
    const LASTTIME = 1;
    const CHECKCODE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LASTTIME => array(
            'name' => 'lasttime',
            'required' => false,
            'type' => 5,
        ),
        self::CHECKCODE => array(
            'name' => 'checkcode',
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
        $this->values[self::LASTTIME] = null;
        $this->values[self::CHECKCODE] = null;
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
     * Sets value of 'lasttime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLasttime($value) {
        return $this->set(self::LASTTIME, $value);
    }

    /**
     * Returns value of 'lasttime' property
     *
     * @return int
     */
    public function getLasttime() {
        return $this->get(self::LASTTIME);
    }

    /**
     * Sets value of 'checkcode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCheckcode($value) {
        return $this->set(self::CHECKCODE, $value);
    }

    /**
     * Returns value of 'checkcode' property
     *
     * @return string
     */
    public function getCheckcode() {
        return $this->get(self::CHECKCODE);
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
    const TYPE = 1;
    const DATA = 2;
    const INTVAL = 3;
    const START = 4;
    const END = 5;
    const ID = 6;
    const UPDATETIME = 7;
    const ORDER = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
            'type' => 7,
        ),
        self::INTVAL => array(
            'name' => 'intval',
            'required' => false,
            'type' => 5,
        ),
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => 5,
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => 5,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 5,
        ),
        self::UPDATETIME => array(
            'name' => 'updatetime',
            'required' => false,
            'type' => 5,
        ),
        self::ORDER => array(
            'name' => 'order',
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
        $this->values[self::TYPE] = null;
        $this->values[self::DATA] = null;
        $this->values[self::INTVAL] = null;
        $this->values[self::START] = null;
        $this->values[self::END] = null;
        $this->values[self::ID] = null;
        $this->values[self::UPDATETIME] = null;
        $this->values[self::ORDER] = null;
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
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value) {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData() {
        return $this->get(self::DATA);
    }

    /**
     * Sets value of 'intval' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIntval($value) {
        return $this->set(self::INTVAL, $value);
    }

    /**
     * Returns value of 'intval' property
     *
     * @return int
     */
    public function getIntval() {
        return $this->get(self::INTVAL);
    }

    /**
     * Sets value of 'start' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStart($value) {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return int
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Sets value of 'end' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEnd($value) {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return int
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Sets value of 'id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value) {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return int
     */
    public function getId() {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'updatetime' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUpdatetime($value) {
        return $this->set(self::UPDATETIME, $value);
    }

    /**
     * Returns value of 'updatetime' property
     *
     * @return int
     */
    public function getUpdatetime() {
        return $this->get(self::UPDATETIME);
    }

    /**
     * Sets value of 'order' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOrder($value) {
        return $this->set(self::ORDER, $value);
    }

    /**
     * Returns value of 'order' property
     *
     * @return int
     */
    public function getOrder() {
        return $this->get(self::ORDER);
    }
}
}

/**
 * Ads message
 */
if (!class_exists('Ads')) {
class Ads extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
