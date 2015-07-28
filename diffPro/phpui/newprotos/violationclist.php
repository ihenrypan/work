<?php
/**
 * Auto generated from map_violation_clist.proto.1 at 2015-06-23 14:50:04
 */

/**
 * CityList message
 */
if (!class_exists('CityList')) {
class CityList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ID = 1;
    const CITY = 2;
    const ENGINE = 3;
    const FRAME = 4;
    const REGIST = 5;
    const SOURCE = 6;
    const PREFIX = 7;
    const IS_LIMIT = 8;
    const LIMIT = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::ENGINE => array(
            'name' => 'engine',
            'required' => false,
            'type' => 7,
        ),
        self::FRAME => array(
            'name' => 'frame',
            'required' => false,
            'type' => 7,
        ),
        self::REGIST => array(
            'name' => 'regist',
            'required' => false,
            'type' => 7,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
            'required' => false,
            'type' => 7,
        ),
        self::IS_LIMIT => array(
            'name' => 'is_limit',
            'required' => false,
            'type' => 8,
        ),
        self::LIMIT => array(
            'name' => 'limit',
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
        $this->values[self::ID] = null;
        $this->values[self::CITY] = null;
        $this->values[self::ENGINE] = null;
        $this->values[self::FRAME] = null;
        $this->values[self::REGIST] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::PREFIX] = null;
        $this->values[self::IS_LIMIT] = null;
        $this->values[self::LIMIT] = array();
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
     * Sets value of 'id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value) {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return string
     */
    public function getId() {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value) {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity() {
        return $this->get(self::CITY);
    }

    /**
     * Sets value of 'engine' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEngine($value) {
        return $this->set(self::ENGINE, $value);
    }

    /**
     * Returns value of 'engine' property
     *
     * @return string
     */
    public function getEngine() {
        return $this->get(self::ENGINE);
    }

    /**
     * Sets value of 'frame' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrame($value) {
        return $this->set(self::FRAME, $value);
    }

    /**
     * Returns value of 'frame' property
     *
     * @return string
     */
    public function getFrame() {
        return $this->get(self::FRAME);
    }

    /**
     * Sets value of 'regist' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegist($value) {
        return $this->set(self::REGIST, $value);
    }

    /**
     * Returns value of 'regist' property
     *
     * @return string
     */
    public function getRegist() {
        return $this->get(self::REGIST);
    }

    /**
     * Sets value of 'source' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSource($value) {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return string
     */
    public function getSource() {
        return $this->get(self::SOURCE);
    }

    /**
     * Sets value of 'prefix' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrefix($value) {
        return $this->set(self::PREFIX, $value);
    }

    /**
     * Returns value of 'prefix' property
     *
     * @return string
     */
    public function getPrefix() {
        return $this->get(self::PREFIX);
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
     * Appends value to 'limit' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendLimit($value) {
        return $this->append(self::LIMIT, $value);
    }

    /**
     * Clears 'limit' list
     *
     * @return null
     */
    public function clearLimit() {
        return $this->clear(self::LIMIT);
    }

    /**
     * Returns 'limit' list
     *
     * @return int[]
     */
    public function getLimit() {
        return $this->get(self::LIMIT);
    }

    /**
     * Returns 'limit' iterator
     *
     * @return ArrayIterator
     */
    public function getLimitIterator() {
        return new ArrayIterator($this->get(self::LIMIT));
    }

    /**
     * Returns element from 'limit' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getLimitAt($offset) {
        return $this->get(self::LIMIT, $offset);
    }

    /**
     * Returns count of 'limit' list
     *
     * @return int
     */
    public function getLimitCount() {
        return $this->count(self::LIMIT);
    }
}
}

/**
 * Contents message
 */
if (!class_exists('Contents')) {
class Contents extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITY_LIST = 2;
    const INDEX = 1;
    const IS_MUNCI = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITY_LIST => array(
            'name' => 'city_list',
            'repeated' => true,
            'type' => 'CityList',
        ),
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => 7,
        ),
        self::IS_MUNCI => array(
            'name' => 'is_munci',
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
        $this->values[self::CITY_LIST] = array();
        $this->values[self::INDEX] = null;
        $this->values[self::IS_MUNCI] = null;
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
     * Appends value to 'city_list' list
     *
     * @param CityList $value Value to append
     *
     * @return null
     */
    public function appendCityList(CityList $value) {
        return $this->append(self::CITY_LIST, $value);
    }

    /**
     * Clears 'city_list' list
     *
     * @return null
     */
    public function clearCityList() {
        return $this->clear(self::CITY_LIST);
    }

    /**
     * Returns 'city_list' list
     *
     * @return CityList[]
     */
    public function getCityList() {
        return $this->get(self::CITY_LIST);
    }

    /**
     * Returns 'city_list' iterator
     *
     * @return ArrayIterator
     */
    public function getCityListIterator() {
        return new ArrayIterator($this->get(self::CITY_LIST));
    }

    /**
     * Returns element from 'city_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CityList
     */
    public function getCityListAt($offset) {
        return $this->get(self::CITY_LIST, $offset);
    }

    /**
     * Returns count of 'city_list' list
     *
     * @return int
     */
    public function getCityListCount() {
        return $this->count(self::CITY_LIST);
    }

    /**
     * Sets value of 'index' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndex($value) {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return string
     */
    public function getIndex() {
        return $this->get(self::INDEX);
    }

    /**
     * Sets value of 'is_munci' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsMunci($value) {
        return $this->set(self::IS_MUNCI, $value);
    }

    /**
     * Returns value of 'is_munci' property
     *
     * @return int
     */
    public function getIsMunci() {
        return $this->get(self::IS_MUNCI);
    }
}
}

/**
 * ViolationClist message
 */
if (!class_exists('ViolationClist')) {
class ViolationClist extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENTS = 3;
    const ERR_NO = 1;
    const ERR_MSG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
        ),
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
        $this->values[self::CONTENTS] = array();
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
     * Appends value to 'contents' list
     *
     * @param Contents $value Value to append
     *
     * @return null
     */
    public function appendContents(Contents $value) {
        return $this->append(self::CONTENTS, $value);
    }

    /**
     * Clears 'contents' list
     *
     * @return null
     */
    public function clearContents() {
        return $this->clear(self::CONTENTS);
    }

    /**
     * Returns 'contents' list
     *
     * @return Contents[]
     */
    public function getContents() {
        return $this->get(self::CONTENTS);
    }

    /**
     * Returns 'contents' iterator
     *
     * @return ArrayIterator
     */
    public function getContentsIterator() {
        return new ArrayIterator($this->get(self::CONTENTS));
    }

    /**
     * Returns element from 'contents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Contents
     */
    public function getContentsAt($offset) {
        return $this->get(self::CONTENTS, $offset);
    }

    /**
     * Returns count of 'contents' list
     *
     * @return int
     */
    public function getContentsCount() {
        return $this->count(self::CONTENTS);
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
