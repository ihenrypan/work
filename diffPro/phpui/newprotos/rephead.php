<?php
/**
 * Auto generated from map_rep_head.proto.1 at 2015-06-23 14:48:27
 */

/**
 * MessageHead message
 */
if (!class_exists('MessageHead')) {
class MessageHead extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OFFSET = 1;
    const LENGTH = 2;
    const NAME = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OFFSET => array(
            'name' => 'offset',
            'required' => false,
            'type' => 5,
        ),
        self::LENGTH => array(
            'name' => 'length',
            'required' => false,
            'type' => 5,
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
        $this->values[self::OFFSET] = null;
        $this->values[self::LENGTH] = null;
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
     * Sets value of 'offset' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOffset($value) {
        return $this->set(self::OFFSET, $value);
    }

    /**
     * Returns value of 'offset' property
     *
     * @return int
     */
    public function getOffset() {
        return $this->get(self::OFFSET);
    }

    /**
     * Sets value of 'length' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLength($value) {
        return $this->set(self::LENGTH, $value);
    }

    /**
     * Returns value of 'length' property
     *
     * @return int
     */
    public function getLength() {
        return $this->get(self::LENGTH);
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
 * RepHead message
 */
if (!class_exists('RepHead')) {
class RepHead extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const MD5 = 1;
    const RANGE = 2;
    const MESSAGE_HEAD = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::MD5 => array(
            'name' => 'md5',
            'required' => false,
            'type' => 7,
        ),
        self::RANGE => array(
            'name' => 'range',
            'required' => false,
            'type' => 7,
        ),
        self::MESSAGE_HEAD => array(
            'name' => 'message_head',
            'repeated' => true,
            'type' => 'MessageHead',
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
        $this->values[self::MD5] = null;
        $this->values[self::RANGE] = null;
        $this->values[self::MESSAGE_HEAD] = array();
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
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value) {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5() {
        return $this->get(self::MD5);
    }

    /**
     * Sets value of 'range' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRange($value) {
        return $this->set(self::RANGE, $value);
    }

    /**
     * Returns value of 'range' property
     *
     * @return string
     */
    public function getRange() {
        return $this->get(self::RANGE);
    }

    /**
     * Appends value to 'message_head' list
     *
     * @param MessageHead $value Value to append
     *
     * @return null
     */
    public function appendMessageHead(MessageHead $value) {
        return $this->append(self::MESSAGE_HEAD, $value);
    }

    /**
     * Clears 'message_head' list
     *
     * @return null
     */
    public function clearMessageHead() {
        return $this->clear(self::MESSAGE_HEAD);
    }

    /**
     * Returns 'message_head' list
     *
     * @return MessageHead[]
     */
    public function getMessageHead() {
        return $this->get(self::MESSAGE_HEAD);
    }

    /**
     * Returns 'message_head' iterator
     *
     * @return ArrayIterator
     */
    public function getMessageHeadIterator() {
        return new ArrayIterator($this->get(self::MESSAGE_HEAD));
    }

    /**
     * Returns element from 'message_head' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MessageHead
     */
    public function getMessageHeadAt($offset) {
        return $this->get(self::MESSAGE_HEAD, $offset);
    }

    /**
     * Returns count of 'message_head' list
     *
     * @return int
     */
    public function getMessageHeadCount() {
        return $this->count(self::MESSAGE_HEAD);
    }
}
}
