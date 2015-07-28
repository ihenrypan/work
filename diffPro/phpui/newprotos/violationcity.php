<?php
/**
 * Auto generated from map_violationcity.proto.1 at 2015-07-22 13:40:10
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
    const PINYIN = 3;
    const ENGINENUM = 4;
    const FRAMENUM = 5;
    const PREFIX = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 5,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::PINYIN => array(
            'name' => 'pinyin',
            'required' => false,
            'type' => 7,
        ),
        self::ENGINENUM => array(
            'name' => 'engineNum',
            'required' => false,
            'type' => 7,
        ),
        self::FRAMENUM => array(
            'name' => 'frameNum',
            'required' => false,
            'type' => 7,
        ),
        self::PREFIX => array(
            'name' => 'prefix',
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
        $this->values[self::ID] = null;
        $this->values[self::CITY] = null;
        $this->values[self::PINYIN] = null;
        $this->values[self::ENGINENUM] = null;
        $this->values[self::FRAMENUM] = null;
        $this->values[self::PREFIX] = null;
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
     * Sets value of 'pinyin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPinyin($value) {
        return $this->set(self::PINYIN, $value);
    }

    /**
     * Returns value of 'pinyin' property
     *
     * @return string
     */
    public function getPinyin() {
        return $this->get(self::PINYIN);
    }

    /**
     * Sets value of 'engineNum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEngineNum($value) {
        return $this->set(self::ENGINENUM, $value);
    }

    /**
     * Returns value of 'engineNum' property
     *
     * @return string
     */
    public function getEngineNum() {
        return $this->get(self::ENGINENUM);
    }

    /**
     * Sets value of 'frameNum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrameNum($value) {
        return $this->set(self::FRAMENUM, $value);
    }

    /**
     * Returns value of 'frameNum' property
     *
     * @return string
     */
    public function getFrameNum() {
        return $this->get(self::FRAMENUM);
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
}
}

/**
 * Lists message
 */
if (!class_exists('Lists')) {
class Lists extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PROVINCE = 1;
    const ISMUNCI = 2;
    const CITYLIST = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PROVINCE => array(
            'name' => 'province',
            'required' => false,
            'type' => 7,
        ),
        self::ISMUNCI => array(
            'name' => 'isMunci',
            'required' => false,
            'type' => 7,
        ),
        self::CITYLIST => array(
            'name' => 'cityList',
            'repeated' => true,
            'type' => 'CityList',
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
        $this->values[self::PROVINCE] = null;
        $this->values[self::ISMUNCI] = null;
        $this->values[self::CITYLIST] = array();
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
     * Sets value of 'province' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvince($value) {
        return $this->set(self::PROVINCE, $value);
    }

    /**
     * Returns value of 'province' property
     *
     * @return string
     */
    public function getProvince() {
        return $this->get(self::PROVINCE);
    }

    /**
     * Sets value of 'isMunci' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsMunci($value) {
        return $this->set(self::ISMUNCI, $value);
    }

    /**
     * Returns value of 'isMunci' property
     *
     * @return string
     */
    public function getIsMunci() {
        return $this->get(self::ISMUNCI);
    }

    /**
     * Appends value to 'cityList' list
     *
     * @param CityList $value Value to append
     *
     * @return null
     */
    public function appendCityList(CityList $value) {
        return $this->append(self::CITYLIST, $value);
    }

    /**
     * Clears 'cityList' list
     *
     * @return null
     */
    public function clearCityList() {
        return $this->clear(self::CITYLIST);
    }

    /**
     * Returns 'cityList' list
     *
     * @return CityList[]
     */
    public function getCityList() {
        return $this->get(self::CITYLIST);
    }

    /**
     * Returns 'cityList' iterator
     *
     * @return ArrayIterator
     */
    public function getCityListIterator() {
        return new ArrayIterator($this->get(self::CITYLIST));
    }

    /**
     * Returns element from 'cityList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CityList
     */
    public function getCityListAt($offset) {
        return $this->get(self::CITYLIST, $offset);
    }

    /**
     * Returns count of 'cityList' list
     *
     * @return int
     */
    public function getCityListCount() {
        return $this->count(self::CITYLIST);
    }
}
}

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const VERSION = 1;
    const LISTS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => 7,
        ),
        self::LISTS => array(
            'name' => 'lists',
            'repeated' => true,
            'type' => 'Lists',
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
        $this->values[self::VERSION] = null;
        $this->values[self::LISTS] = array();
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
     * Sets value of 'version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value) {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return string
     */
    public function getVersion() {
        return $this->get(self::VERSION);
    }

    /**
     * Appends value to 'lists' list
     *
     * @param Lists $value Value to append
     *
     * @return null
     */
    public function appendLists(Lists $value) {
        return $this->append(self::LISTS, $value);
    }

    /**
     * Clears 'lists' list
     *
     * @return null
     */
    public function clearLists() {
        return $this->clear(self::LISTS);
    }

    /**
     * Returns 'lists' list
     *
     * @return Lists[]
     */
    public function getLists() {
        return $this->get(self::LISTS);
    }

    /**
     * Returns 'lists' iterator
     *
     * @return ArrayIterator
     */
    public function getListsIterator() {
        return new ArrayIterator($this->get(self::LISTS));
    }

    /**
     * Returns element from 'lists' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Lists
     */
    public function getListsAt($offset) {
        return $this->get(self::LISTS, $offset);
    }

    /**
     * Returns count of 'lists' list
     *
     * @return int
     */
    public function getListsCount() {
        return $this->count(self::LISTS);
    }
}
}

/**
 * Violationcity message
 */
if (!class_exists('Violationcity')) {
class Violationcity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const MSG = 2;
    const DATA = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => 7,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
            'type' => 'Data',
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
        $this->values[self::MSG] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value) {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg() {
        return $this->get(self::MSG);
    }

    /**
     * Sets value of 'data' property
     *
     * @param Data $value Property value
     *
     * @return null
     */
    public function setData(Data $value) {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return Data
     */
    public function getData() {
        return $this->get(self::DATA);
    }
}
}
