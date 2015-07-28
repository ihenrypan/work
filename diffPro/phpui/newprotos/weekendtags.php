<?php
/**
 * Auto generated from map_weekend_tags.proto.1 at 2015-06-23 14:51:03
 */

/**
 * SubTags message
 */
if (!class_exists('SubTags')) {
class SubTags extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TEXT = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TEXT => array(
            'name' => 'text',
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
        $this->values[self::TEXT] = null;
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
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value) {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText() {
        return $this->get(self::TEXT);
    }
}
}

/**
 * Tags message
 */
if (!class_exists('Tags')) {
class Tags extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TEXT = 1;
    const PIC_URL = 2;
    const SUB_TAGS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => 7,
        ),
        self::PIC_URL => array(
            'name' => 'pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::SUB_TAGS => array(
            'name' => 'sub_tags',
            'repeated' => true,
            'type' => 'SubTags',
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
        $this->values[self::TEXT] = null;
        $this->values[self::PIC_URL] = null;
        $this->values[self::SUB_TAGS] = array();
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
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value) {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText() {
        return $this->get(self::TEXT);
    }

    /**
     * Sets value of 'pic_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicUrl($value) {
        return $this->set(self::PIC_URL, $value);
    }

    /**
     * Returns value of 'pic_url' property
     *
     * @return string
     */
    public function getPicUrl() {
        return $this->get(self::PIC_URL);
    }

    /**
     * Appends value to 'sub_tags' list
     *
     * @param SubTags $value Value to append
     *
     * @return null
     */
    public function appendSubTags(SubTags $value) {
        return $this->append(self::SUB_TAGS, $value);
    }

    /**
     * Clears 'sub_tags' list
     *
     * @return null
     */
    public function clearSubTags() {
        return $this->clear(self::SUB_TAGS);
    }

    /**
     * Returns 'sub_tags' list
     *
     * @return SubTags[]
     */
    public function getSubTags() {
        return $this->get(self::SUB_TAGS);
    }

    /**
     * Returns 'sub_tags' iterator
     *
     * @return ArrayIterator
     */
    public function getSubTagsIterator() {
        return new ArrayIterator($this->get(self::SUB_TAGS));
    }

    /**
     * Returns element from 'sub_tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SubTags
     */
    public function getSubTagsAt($offset) {
        return $this->get(self::SUB_TAGS, $offset);
    }

    /**
     * Returns count of 'sub_tags' list
     *
     * @return int
     */
    public function getSubTagsCount() {
        return $this->count(self::SUB_TAGS);
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
    const TAGS = 1;
    const DISTRICTS = 2;
    const DATA_HASH = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TAGS => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => 'Tags',
        ),
        self::DISTRICTS => array(
            'name' => 'districts',
            'repeated' => true,
            'type' => 7,
        ),
        self::DATA_HASH => array(
            'name' => 'data_hash',
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
        $this->values[self::TAGS] = array();
        $this->values[self::DISTRICTS] = array();
        $this->values[self::DATA_HASH] = null;
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
     * Appends value to 'tags' list
     *
     * @param Tags $value Value to append
     *
     * @return null
     */
    public function appendTags(Tags $value) {
        return $this->append(self::TAGS, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags() {
        return $this->clear(self::TAGS);
    }

    /**
     * Returns 'tags' list
     *
     * @return Tags[]
     */
    public function getTags() {
        return $this->get(self::TAGS);
    }

    /**
     * Returns 'tags' iterator
     *
     * @return ArrayIterator
     */
    public function getTagsIterator() {
        return new ArrayIterator($this->get(self::TAGS));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Tags
     */
    public function getTagsAt($offset) {
        return $this->get(self::TAGS, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount() {
        return $this->count(self::TAGS);
    }

    /**
     * Appends value to 'districts' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDistricts($value) {
        return $this->append(self::DISTRICTS, $value);
    }

    /**
     * Clears 'districts' list
     *
     * @return null
     */
    public function clearDistricts() {
        return $this->clear(self::DISTRICTS);
    }

    /**
     * Returns 'districts' list
     *
     * @return string[]
     */
    public function getDistricts() {
        return $this->get(self::DISTRICTS);
    }

    /**
     * Returns 'districts' iterator
     *
     * @return ArrayIterator
     */
    public function getDistrictsIterator() {
        return new ArrayIterator($this->get(self::DISTRICTS));
    }

    /**
     * Returns element from 'districts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDistrictsAt($offset) {
        return $this->get(self::DISTRICTS, $offset);
    }

    /**
     * Returns count of 'districts' list
     *
     * @return int
     */
    public function getDistrictsCount() {
        return $this->count(self::DISTRICTS);
    }

    /**
     * Sets value of 'data_hash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDataHash($value) {
        return $this->set(self::DATA_HASH, $value);
    }

    /**
     * Returns value of 'data_hash' property
     *
     * @return string
     */
    public function getDataHash() {
        return $this->get(self::DATA_HASH);
    }
}
}

/**
 * WeekendTags message
 */
if (!class_exists('WeekendTags')) {
class WeekendTags extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const CONTENT = 3;

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
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
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
