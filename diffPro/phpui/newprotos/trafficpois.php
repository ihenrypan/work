<?php
/**
 * Auto generated from map_traffic_pois.proto.1 at 2015-06-23 14:49:53
 */

/**
 * StartCity message
 */
if (!class_exists('StartCity')) {
class StartCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const CNAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::CNAME => array(
            'name' => 'cname',
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
        $this->values[self::CODE] = null;
        $this->values[self::CNAME] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'cname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCname($value) {
        return $this->set(self::CNAME, $value);
    }

    /**
     * Returns value of 'cname' property
     *
     * @return string
     */
    public function getCname() {
        return $this->get(self::CNAME);
    }
}
}

/**
 * EndCity message
 */
if (!class_exists('EndCity')) {
class EndCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const CNAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::CNAME => array(
            'name' => 'cname',
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
        $this->values[self::CODE] = null;
        $this->values[self::CNAME] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
    }

    /**
     * Sets value of 'cname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCname($value) {
        return $this->set(self::CNAME, $value);
    }

    /**
     * Returns value of 'cname' property
     *
     * @return string
     */
    public function getCname() {
        return $this->get(self::CNAME);
    }
}
}

/**
 * Option message
 */
if (!class_exists('Option')) {
class Option extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITY_LIST = 1;
    const PRIO_FLAG = 2;
    const WP_WD = 3;
    const S_WD = 4;
    const E_WD = 5;
    const IF_NAV = 6;
    const START_CITY = 7;
    const END_CITY = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITY_LIST => array(
            'name' => 'city_list',
            'repeated' => true,
            'type' => 7,
        ),
        self::PRIO_FLAG => array(
            'name' => 'prio_flag',
            'repeated' => true,
            'type' => 7,
        ),
        self::WP_WD => array(
            'name' => 'wp_wd',
            'repeated' => true,
            'type' => 7,
        ),
        self::S_WD => array(
            'name' => 's_wd',
            'required' => false,
            'type' => 7,
        ),
        self::E_WD => array(
            'name' => 'e_wd',
            'repeated' => true,
            'type' => 7,
        ),
        self::IF_NAV => array(
            'name' => 'if_nav',
            'required' => false,
            'type' => 8,
        ),
        self::START_CITY => array(
            'name' => 'start_city',
            'required' => false,
            'type' => 'StartCity',
        ),
        self::END_CITY => array(
            'name' => 'end_city',
            'repeated' => true,
            'type' => 'EndCity',
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
        $this->values[self::PRIO_FLAG] = array();
        $this->values[self::WP_WD] = array();
        $this->values[self::S_WD] = null;
        $this->values[self::E_WD] = array();
        $this->values[self::IF_NAV] = null;
        $this->values[self::START_CITY] = null;
        $this->values[self::END_CITY] = array();
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
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCityList($value) {
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
     * @return string[]
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
     * @return string
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
     * Appends value to 'prio_flag' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPrioFlag($value) {
        return $this->append(self::PRIO_FLAG, $value);
    }

    /**
     * Clears 'prio_flag' list
     *
     * @return null
     */
    public function clearPrioFlag() {
        return $this->clear(self::PRIO_FLAG);
    }

    /**
     * Returns 'prio_flag' list
     *
     * @return string[]
     */
    public function getPrioFlag() {
        return $this->get(self::PRIO_FLAG);
    }

    /**
     * Returns 'prio_flag' iterator
     *
     * @return ArrayIterator
     */
    public function getPrioFlagIterator() {
        return new ArrayIterator($this->get(self::PRIO_FLAG));
    }

    /**
     * Returns element from 'prio_flag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPrioFlagAt($offset) {
        return $this->get(self::PRIO_FLAG, $offset);
    }

    /**
     * Returns count of 'prio_flag' list
     *
     * @return int
     */
    public function getPrioFlagCount() {
        return $this->count(self::PRIO_FLAG);
    }

    /**
     * Appends value to 'wp_wd' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendWpWd($value) {
        return $this->append(self::WP_WD, $value);
    }

    /**
     * Clears 'wp_wd' list
     *
     * @return null
     */
    public function clearWpWd() {
        return $this->clear(self::WP_WD);
    }

    /**
     * Returns 'wp_wd' list
     *
     * @return string[]
     */
    public function getWpWd() {
        return $this->get(self::WP_WD);
    }

    /**
     * Returns 'wp_wd' iterator
     *
     * @return ArrayIterator
     */
    public function getWpWdIterator() {
        return new ArrayIterator($this->get(self::WP_WD));
    }

    /**
     * Returns element from 'wp_wd' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getWpWdAt($offset) {
        return $this->get(self::WP_WD, $offset);
    }

    /**
     * Returns count of 'wp_wd' list
     *
     * @return int
     */
    public function getWpWdCount() {
        return $this->count(self::WP_WD);
    }

    /**
     * Sets value of 's_wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSWd($value) {
        return $this->set(self::S_WD, $value);
    }

    /**
     * Returns value of 's_wd' property
     *
     * @return string
     */
    public function getSWd() {
        return $this->get(self::S_WD);
    }

    /**
     * Appends value to 'e_wd' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendEWd($value) {
        return $this->append(self::E_WD, $value);
    }

    /**
     * Clears 'e_wd' list
     *
     * @return null
     */
    public function clearEWd() {
        return $this->clear(self::E_WD);
    }

    /**
     * Returns 'e_wd' list
     *
     * @return string[]
     */
    public function getEWd() {
        return $this->get(self::E_WD);
    }

    /**
     * Returns 'e_wd' iterator
     *
     * @return ArrayIterator
     */
    public function getEWdIterator() {
        return new ArrayIterator($this->get(self::E_WD));
    }

    /**
     * Returns element from 'e_wd' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getEWdAt($offset) {
        return $this->get(self::E_WD, $offset);
    }

    /**
     * Returns count of 'e_wd' list
     *
     * @return int
     */
    public function getEWdCount() {
        return $this->count(self::E_WD);
    }

    /**
     * Sets value of 'if_nav' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIfNav($value) {
        return $this->set(self::IF_NAV, $value);
    }

    /**
     * Returns value of 'if_nav' property
     *
     * @return bool
     */
    public function getIfNav() {
        return $this->get(self::IF_NAV);
    }

    /**
     * Sets value of 'start_city' property
     *
     * @param StartCity $value Property value
     *
     * @return null
     */
    public function setStartCity(StartCity $value) {
        return $this->set(self::START_CITY, $value);
    }

    /**
     * Returns value of 'start_city' property
     *
     * @return StartCity
     */
    public function getStartCity() {
        return $this->get(self::START_CITY);
    }

    /**
     * Appends value to 'end_city' list
     *
     * @param EndCity $value Value to append
     *
     * @return null
     */
    public function appendEndCity(EndCity $value) {
        return $this->append(self::END_CITY, $value);
    }

    /**
     * Clears 'end_city' list
     *
     * @return null
     */
    public function clearEndCity() {
        return $this->clear(self::END_CITY);
    }

    /**
     * Returns 'end_city' list
     *
     * @return EndCity[]
     */
    public function getEndCity() {
        return $this->get(self::END_CITY);
    }

    /**
     * Returns 'end_city' iterator
     *
     * @return ArrayIterator
     */
    public function getEndCityIterator() {
        return new ArrayIterator($this->get(self::END_CITY));
    }

    /**
     * Returns element from 'end_city' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return EndCity
     */
    public function getEndCityAt($offset) {
        return $this->get(self::END_CITY, $offset);
    }

    /**
     * Returns count of 'end_city' list
     *
     * @return int
     */
    public function getEndCityCount() {
        return $this->count(self::END_CITY);
    }
}
}

/**
 * Start message
 */
if (!class_exists('Start')) {
class Start extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const NAME = 2;
    const NUM = 3;
    const UID = 4;
    const ADDR = 5;
    const GEO = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::GEO => array(
            'name' => 'geo',
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
        $this->values[self::CODE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::NUM] = null;
        $this->values[self::UID] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::GEO] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
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

    /**
     * Sets value of 'num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNum($value) {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return int
     */
    public function getNum() {
        return $this->get(self::NUM);
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
     * Sets value of 'addr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddr($value) {
        return $this->set(self::ADDR, $value);
    }

    /**
     * Returns value of 'addr' property
     *
     * @return string
     */
    public function getAddr() {
        return $this->get(self::ADDR);
    }

    /**
     * Sets value of 'geo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGeo($value) {
        return $this->set(self::GEO, $value);
    }

    /**
     * Returns value of 'geo' property
     *
     * @return string
     */
    public function getGeo() {
        return $this->get(self::GEO);
    }
}
}

/**
 * End message
 */
if (!class_exists('End')) {
class End extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const NAME = 2;
    const NUM = 3;
    const UID = 4;
    const ADDR = 5;
    const GEO = 6;
    const EXT = 7;
    const POITYPE = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => 7,
        ),
        self::EXT => array(
            'name' => 'ext',
            'required' => false,
            'type' => 7,
        ),
        self::POITYPE => array(
            'name' => 'poiType',
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
        $this->values[self::CODE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::NUM] = null;
        $this->values[self::UID] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::GEO] = null;
        $this->values[self::EXT] = null;
        $this->values[self::POITYPE] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
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

    /**
     * Sets value of 'num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNum($value) {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return int
     */
    public function getNum() {
        return $this->get(self::NUM);
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
     * Sets value of 'addr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddr($value) {
        return $this->set(self::ADDR, $value);
    }

    /**
     * Returns value of 'addr' property
     *
     * @return string
     */
    public function getAddr() {
        return $this->get(self::ADDR);
    }

    /**
     * Sets value of 'geo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGeo($value) {
        return $this->set(self::GEO, $value);
    }

    /**
     * Returns value of 'geo' property
     *
     * @return string
     */
    public function getGeo() {
        return $this->get(self::GEO);
    }

    /**
     * Sets value of 'ext' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExt($value) {
        return $this->set(self::EXT, $value);
    }

    /**
     * Returns value of 'ext' property
     *
     * @return string
     */
    public function getExt() {
        return $this->get(self::EXT);
    }

    /**
     * Sets value of 'poiType' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPoiType($value) {
        return $this->set(self::POITYPE, $value);
    }

    /**
     * Returns value of 'poiType' property
     *
     * @return int
     */
    public function getPoiType() {
        return $this->get(self::POITYPE);
    }
}
}

/**
 * WayPoints message
 */
if (!class_exists('WayPoints')) {
class WayPoints extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const NAME = 2;
    const NUM = 3;
    const UID = 4;
    const ADDR = 5;
    const GEO = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::GEO => array(
            'name' => 'geo',
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
        $this->values[self::CODE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::NUM] = null;
        $this->values[self::UID] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::GEO] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
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

    /**
     * Sets value of 'num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNum($value) {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return int
     */
    public function getNum() {
        return $this->get(self::NUM);
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
     * Sets value of 'addr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddr($value) {
        return $this->set(self::ADDR, $value);
    }

    /**
     * Returns value of 'addr' property
     *
     * @return string
     */
    public function getAddr() {
        return $this->get(self::ADDR);
    }

    /**
     * Sets value of 'geo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGeo($value) {
        return $this->set(self::GEO, $value);
    }

    /**
     * Returns value of 'geo' property
     *
     * @return string
     */
    public function getGeo() {
        return $this->get(self::GEO);
    }
}
}

/**
 * MultiWaypoints message
 */
if (!class_exists('MultiWaypoints')) {
class MultiWaypoints extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const WAY_POINTS = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::WAY_POINTS => array(
            'name' => 'way_points',
            'repeated' => true,
            'type' => 'WayPoints',
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
        $this->values[self::WAY_POINTS] = array();
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
     * Appends value to 'way_points' list
     *
     * @param WayPoints $value Value to append
     *
     * @return null
     */
    public function appendWayPoints(WayPoints $value) {
        return $this->append(self::WAY_POINTS, $value);
    }

    /**
     * Clears 'way_points' list
     *
     * @return null
     */
    public function clearWayPoints() {
        return $this->clear(self::WAY_POINTS);
    }

    /**
     * Returns 'way_points' list
     *
     * @return WayPoints[]
     */
    public function getWayPoints() {
        return $this->get(self::WAY_POINTS);
    }

    /**
     * Returns 'way_points' iterator
     *
     * @return ArrayIterator
     */
    public function getWayPointsIterator() {
        return new ArrayIterator($this->get(self::WAY_POINTS));
    }

    /**
     * Returns element from 'way_points' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return WayPoints
     */
    public function getWayPointsAt($offset) {
        return $this->get(self::WAY_POINTS, $offset);
    }

    /**
     * Returns count of 'way_points' list
     *
     * @return int
     */
    public function getWayPointsCount() {
        return $this->count(self::WAY_POINTS);
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
    const START = 1;
    const END = 2;
    const WAY_POINTS = 3;
    const MULTI_WAYPOINTS = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::START => array(
            'name' => 'start',
            'repeated' => true,
            'type' => 'Start',
        ),
        self::END => array(
            'name' => 'end',
            'repeated' => true,
            'type' => 'End',
        ),
        self::WAY_POINTS => array(
            'name' => 'way_points',
            'repeated' => true,
            'type' => 'WayPoints',
        ),
        self::MULTI_WAYPOINTS => array(
            'name' => 'multi_waypoints',
            'repeated' => true,
            'type' => 'MultiWaypoints',
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
        $this->values[self::START] = array();
        $this->values[self::END] = array();
        $this->values[self::WAY_POINTS] = array();
        $this->values[self::MULTI_WAYPOINTS] = array();
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
     * Appends value to 'start' list
     *
     * @param Start $value Value to append
     *
     * @return null
     */
    public function appendStart(Start $value) {
        return $this->append(self::START, $value);
    }

    /**
     * Clears 'start' list
     *
     * @return null
     */
    public function clearStart() {
        return $this->clear(self::START);
    }

    /**
     * Returns 'start' list
     *
     * @return Start[]
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Returns 'start' iterator
     *
     * @return ArrayIterator
     */
    public function getStartIterator() {
        return new ArrayIterator($this->get(self::START));
    }

    /**
     * Returns element from 'start' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Start
     */
    public function getStartAt($offset) {
        return $this->get(self::START, $offset);
    }

    /**
     * Returns count of 'start' list
     *
     * @return int
     */
    public function getStartCount() {
        return $this->count(self::START);
    }

    /**
     * Appends value to 'end' list
     *
     * @param End $value Value to append
     *
     * @return null
     */
    public function appendEnd(End $value) {
        return $this->append(self::END, $value);
    }

    /**
     * Clears 'end' list
     *
     * @return null
     */
    public function clearEnd() {
        return $this->clear(self::END);
    }

    /**
     * Returns 'end' list
     *
     * @return End[]
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Returns 'end' iterator
     *
     * @return ArrayIterator
     */
    public function getEndIterator() {
        return new ArrayIterator($this->get(self::END));
    }

    /**
     * Returns element from 'end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return End
     */
    public function getEndAt($offset) {
        return $this->get(self::END, $offset);
    }

    /**
     * Returns count of 'end' list
     *
     * @return int
     */
    public function getEndCount() {
        return $this->count(self::END);
    }

    /**
     * Appends value to 'way_points' list
     *
     * @param WayPoints $value Value to append
     *
     * @return null
     */
    public function appendWayPoints(WayPoints $value) {
        return $this->append(self::WAY_POINTS, $value);
    }

    /**
     * Clears 'way_points' list
     *
     * @return null
     */
    public function clearWayPoints() {
        return $this->clear(self::WAY_POINTS);
    }

    /**
     * Returns 'way_points' list
     *
     * @return WayPoints[]
     */
    public function getWayPoints() {
        return $this->get(self::WAY_POINTS);
    }

    /**
     * Returns 'way_points' iterator
     *
     * @return ArrayIterator
     */
    public function getWayPointsIterator() {
        return new ArrayIterator($this->get(self::WAY_POINTS));
    }

    /**
     * Returns element from 'way_points' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return WayPoints
     */
    public function getWayPointsAt($offset) {
        return $this->get(self::WAY_POINTS, $offset);
    }

    /**
     * Returns count of 'way_points' list
     *
     * @return int
     */
    public function getWayPointsCount() {
        return $this->count(self::WAY_POINTS);
    }

    /**
     * Appends value to 'multi_waypoints' list
     *
     * @param MultiWaypoints $value Value to append
     *
     * @return null
     */
    public function appendMultiWaypoints(MultiWaypoints $value) {
        return $this->append(self::MULTI_WAYPOINTS, $value);
    }

    /**
     * Clears 'multi_waypoints' list
     *
     * @return null
     */
    public function clearMultiWaypoints() {
        return $this->clear(self::MULTI_WAYPOINTS);
    }

    /**
     * Returns 'multi_waypoints' list
     *
     * @return MultiWaypoints[]
     */
    public function getMultiWaypoints() {
        return $this->get(self::MULTI_WAYPOINTS);
    }

    /**
     * Returns 'multi_waypoints' iterator
     *
     * @return ArrayIterator
     */
    public function getMultiWaypointsIterator() {
        return new ArrayIterator($this->get(self::MULTI_WAYPOINTS));
    }

    /**
     * Returns element from 'multi_waypoints' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MultiWaypoints
     */
    public function getMultiWaypointsAt($offset) {
        return $this->get(self::MULTI_WAYPOINTS, $offset);
    }

    /**
     * Returns count of 'multi_waypoints' list
     *
     * @return int
     */
    public function getMultiWaypointsCount() {
        return $this->count(self::MULTI_WAYPOINTS);
    }
}
}

/**
 * TrafficPois message
 */
if (!class_exists('TrafficPois')) {
class TrafficPois extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CURRENT_CITY = 2;
    const CONTENT = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
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
        $this->values[self::CURRENT_CITY] = null;
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
     * Sets value of 'current_city' property
     *
     * @param CurrentCity $value Property value
     *
     * @return null
     */
    public function setCurrentCity(CurrentCity $value) {
        return $this->set(self::CURRENT_CITY, $value);
    }

    /**
     * Returns value of 'current_city' property
     *
     * @return CurrentCity
     */
    public function getCurrentCity() {
        return $this->get(self::CURRENT_CITY);
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
require_once 'currentcity.php';