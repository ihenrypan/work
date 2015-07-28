<?php
/**
 * Auto generated from map_rtbl.proto.1 at 2015-06-23 14:48:34
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
    const RETURN_ALL = 1;
    const ERROR = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::RETURN_ALL => array(
            'name' => 'return_all',
            'required' => false,
            'type' => 5,
        ),
        self::ERROR => array(
            'name' => 'error',
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
        $this->values[self::RETURN_ALL] = null;
        $this->values[self::ERROR] = null;
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
     * Sets value of 'return_all' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReturnAll($value) {
        return $this->set(self::RETURN_ALL, $value);
    }

    /**
     * Returns value of 'return_all' property
     *
     * @return int
     */
    public function getReturnAll() {
        return $this->get(self::RETURN_ALL);
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
}
}

/**
 * Lines message
 */
if (!class_exists('Lines')) {
class Lines extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const UID = 1;
    const NAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::UID] = null;
        $this->values[self::NAME] = null;
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
    const LINES = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINES => array(
            'name' => 'lines',
            'repeated' => true,
            'type' => 'Lines',
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
        $this->values[self::LINES] = array();
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
     * Appends value to 'lines' list
     *
     * @param Lines $value Value to append
     *
     * @return null
     */
    public function appendLines(Lines $value) {
        return $this->append(self::LINES, $value);
    }

    /**
     * Clears 'lines' list
     *
     * @return null
     */
    public function clearLines() {
        return $this->clear(self::LINES);
    }

    /**
     * Returns 'lines' list
     *
     * @return Lines[]
     */
    public function getLines() {
        return $this->get(self::LINES);
    }

    /**
     * Returns 'lines' iterator
     *
     * @return ArrayIterator
     */
    public function getLinesIterator() {
        return new ArrayIterator($this->get(self::LINES));
    }

    /**
     * Returns element from 'lines' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Lines
     */
    public function getLinesAt($offset) {
        return $this->get(self::LINES, $offset);
    }

    /**
     * Returns count of 'lines' list
     *
     * @return int
     */
    public function getLinesCount() {
        return $this->count(self::LINES);
    }
}
}

/**
 * Rtbl message
 */
if (!class_exists('Rtbl')) {
class Rtbl extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;
    const ERROR = 3;

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
        self::ERROR => array(
            'name' => 'error',
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
        $this->values[self::OPTION] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::ERROR] = null;
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
}
}
