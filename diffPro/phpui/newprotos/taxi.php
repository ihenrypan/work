<?php
/**
 * Auto generated from map_taxi.proto.1 at 2015-06-23 14:49:07
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
    const ERROR = 1;
    const VERSION = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::VERSION => array(
            'name' => 'version',
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
        $this->values[self::ERROR] = null;
        $this->values[self::VERSION] = null;
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
     * Sets value of 'version' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVersion($value) {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return int
     */
    public function getVersion() {
        return $this->get(self::VERSION);
    }
}
}

/**
 * Jumpto message
 */
if (!class_exists('Jumpto')) {
class Jumpto extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CF_TAG = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CF_TAG => array(
            'name' => 'cf_tag',
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
        $this->values[self::CF_TAG] = null;
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
     * Sets value of 'cf_tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCfTag($value) {
        return $this->set(self::CF_TAG, $value);
    }

    /**
     * Returns value of 'cf_tag' property
     *
     * @return string
     */
    public function getCfTag() {
        return $this->get(self::CF_TAG);
    }
}
}

/**
 * ExtParam message
 */
if (!class_exists('ExtParam')) {
class ExtParam extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const JUMPTO = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::JUMPTO => array(
            'name' => 'jumpto',
            'required' => false,
            'type' => 'Jumpto',
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
        $this->values[self::JUMPTO] = null;
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
     * Sets value of 'jumpto' property
     *
     * @param Jumpto $value Property value
     *
     * @return null
     */
    public function setJumpto(Jumpto $value) {
        return $this->set(self::JUMPTO, $value);
    }

    /**
     * Returns value of 'jumpto' property
     *
     * @return Jumpto
     */
    public function getJumpto() {
        return $this->get(self::JUMPTO);
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
    const ACTION = 1;
    const EXT_PARAM = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ACTION => array(
            'name' => 'action',
            'required' => false,
            'type' => 7,
        ),
        self::EXT_PARAM => array(
            'name' => 'ext_param',
            'required' => false,
            'type' => 'ExtParam',
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
        $this->values[self::ACTION] = null;
        $this->values[self::EXT_PARAM] = null;
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
     * Sets value of 'action' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAction($value) {
        return $this->set(self::ACTION, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return string
     */
    public function getAction() {
        return $this->get(self::ACTION);
    }

    /**
     * Sets value of 'ext_param' property
     *
     * @param ExtParam $value Property value
     *
     * @return null
     */
    public function setExtParam(ExtParam $value) {
        return $this->set(self::EXT_PARAM, $value);
    }

    /**
     * Returns value of 'ext_param' property
     *
     * @return ExtParam
     */
    public function getExtParam() {
        return $this->get(self::EXT_PARAM);
    }
}
}

/**
 * Taxi message
 */
if (!class_exists('Taxi')) {
class Taxi extends ProtobufMessage
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
