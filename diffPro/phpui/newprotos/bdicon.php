<?php
/**
 * Auto generated from map_bd_icon.proto.1 at 2015-06-23 14:46:40
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
    const DATA_TYPE = 1;
    const FLAG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DATA_TYPE => array(
            'name' => 'data_type',
            'required' => false,
            'type' => 7,
        ),
        self::FLAG => array(
            'name' => 'flag',
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
        $this->values[self::DATA_TYPE] = null;
        $this->values[self::FLAG] = null;
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
     * Sets value of 'data_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDataType($value) {
        return $this->set(self::DATA_TYPE, $value);
    }

    /**
     * Returns value of 'data_type' property
     *
     * @return string
     */
    public function getDataType() {
        return $this->get(self::DATA_TYPE);
    }

    /**
     * Sets value of 'flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFlag($value) {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return string
     */
    public function getFlag() {
        return $this->get(self::FLAG);
    }
}
}

/**
 * BdIcon message
 */
if (!class_exists('BdIcon')) {
class BdIcon extends ProtobufMessage
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
