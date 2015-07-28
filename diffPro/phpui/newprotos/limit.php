<?php
/**
 * Auto generated from map_limit.proto.1 at 2015-06-23 14:47:59
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
    const ERR_NO = 1;
    const ERR_MSG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERR_NO => array(
            'name' => 'err_no',
            'required' => false,
            'type' => 5,
        ),
        self::ERR_MSG => array(
            'name' => 'err_msg',
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
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
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
     * Sets value of 'err_no' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setErrNo($value) {
        return $this->set(self::ERR_NO, $value);
    }

    /**
     * Returns value of 'err_no' property
     *
     * @return int
     */
    public function getErrNo() {
        return $this->get(self::ERR_NO);
    }

    /**
     * Sets value of 'err_msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrMsg($value) {
        return $this->set(self::ERR_MSG, $value);
    }

    /**
     * Returns value of 'err_msg' property
     *
     * @return string
     */
    public function getErrMsg() {
        return $this->get(self::ERR_MSG);
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
    const IS_LIMIT = 1;
    const NUM = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_LIMIT => array(
            'name' => 'is_limit',
            'required' => false,
            'type' => 8,
        ),
        self::NUM => array(
            'name' => 'num',
            'repeated' => true,
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
        $this->values[self::IS_LIMIT] = null;
        $this->values[self::NUM] = array();
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
     * Sets value of 'is_limit' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsLimit($value) {
        return $this->set(self::IS_LIMIT, $value);
    }

    /**
     * Returns value of 'is_limit' property
     *
     * @return bool
     */
    public function getIsLimit() {
        return $this->get(self::IS_LIMIT);
    }

    /**
     * Appends value to 'num' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendNum($value) {
        return $this->append(self::NUM, $value);
    }

    /**
     * Clears 'num' list
     *
     * @return null
     */
    public function clearNum() {
        return $this->clear(self::NUM);
    }

    /**
     * Returns 'num' list
     *
     * @return int[]
     */
    public function getNum() {
        return $this->get(self::NUM);
    }

    /**
     * Returns 'num' iterator
     *
     * @return ArrayIterator
     */
    public function getNumIterator() {
        return new ArrayIterator($this->get(self::NUM));
    }

    /**
     * Returns element from 'num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getNumAt($offset) {
        return $this->get(self::NUM, $offset);
    }

    /**
     * Returns count of 'num' list
     *
     * @return int
     */
    public function getNumCount() {
        return $this->count(self::NUM);
    }
}
}

/**
 * Limit message
 */
if (!class_exists('Limit')) {
class Limit extends ProtobufMessage
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
            'required' => false,
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
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'content' property
     *
     * @param Content $value Property value
     *
     * @return null
     */
    public function setContent(Content $value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return Content
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }
}
}
