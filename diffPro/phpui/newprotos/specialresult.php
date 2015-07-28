<?php
/**
 * Auto generated from map_special_result.proto.1 at 2015-06-23 14:48:53
 */

/**
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const X = 1;
    const Y = 2;
    const LEVEL = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 7,
        ),
        self::Y => array(
            'name' => 'y',
            'required' => false,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
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
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
        $this->values[self::LEVEL] = null;
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
     * Sets value of 'x' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return string
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return string
     */
    public function getY() {
        return $this->get(self::Y);
    }

    /**
     * Sets value of 'level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value) {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return int
     */
    public function getLevel() {
        return $this->get(self::LEVEL);
    }
}
}

/**
 * SpecialResult message
 */
if (!class_exists('SpecialResult')) {
class SpecialResult extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
