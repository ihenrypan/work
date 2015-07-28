<?php
/**
 * Auto generated from map_city_result.proto.1 at 2015-06-23 14:47:15
 */

/**
 * GeoElements message
 */
if (!class_exists('GeoElements')) {
class GeoElements extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const POINT = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POINT => array(
            'name' => 'point',
            'repeated' => true,
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
        $this->values[self::POINT] = array();
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
     * Appends value to 'point' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPoint($value) {
        return $this->append(self::POINT, $value);
    }

    /**
     * Clears 'point' list
     *
     * @return null
     */
    public function clearPoint() {
        return $this->clear(self::POINT);
    }

    /**
     * Returns 'point' list
     *
     * @return string[]
     */
    public function getPoint() {
        return $this->get(self::POINT);
    }

    /**
     * Returns 'point' iterator
     *
     * @return ArrayIterator
     */
    public function getPointIterator() {
        return new ArrayIterator($this->get(self::POINT));
    }

    /**
     * Returns element from 'point' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPointAt($offset) {
        return $this->get(self::POINT, $offset);
    }

    /**
     * Returns count of 'point' list
     *
     * @return int
     */
    public function getPointCount() {
        return $this->count(self::POINT);
    }
}
}

/**
 * Sgeo message
 */
if (!class_exists('Sgeo')) {
class Sgeo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BOUND = 1;
    const TYPE = 2;
    const GEO_ELEMENTS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BOUND => array(
            'name' => 'bound',
            'repeated' => true,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
        ),
        self::GEO_ELEMENTS => array(
            'name' => 'geo_elements',
            'repeated' => true,
            'type' => 'GeoElements',
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
        $this->values[self::BOUND] = array();
        $this->values[self::TYPE] = null;
        $this->values[self::GEO_ELEMENTS] = array();
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
     * Appends value to 'bound' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendBound($value) {
        return $this->append(self::BOUND, $value);
    }

    /**
     * Clears 'bound' list
     *
     * @return null
     */
    public function clearBound() {
        return $this->clear(self::BOUND);
    }

    /**
     * Returns 'bound' list
     *
     * @return string[]
     */
    public function getBound() {
        return $this->get(self::BOUND);
    }

    /**
     * Returns 'bound' iterator
     *
     * @return ArrayIterator
     */
    public function getBoundIterator() {
        return new ArrayIterator($this->get(self::BOUND));
    }

    /**
     * Returns element from 'bound' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getBoundAt($offset) {
        return $this->get(self::BOUND, $offset);
    }

    /**
     * Returns count of 'bound' list
     *
     * @return int
     */
    public function getBoundCount() {
        return $this->count(self::BOUND);
    }

    /**
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Appends value to 'geo_elements' list
     *
     * @param GeoElements $value Value to append
     *
     * @return null
     */
    public function appendGeoElements(GeoElements $value) {
        return $this->append(self::GEO_ELEMENTS, $value);
    }

    /**
     * Clears 'geo_elements' list
     *
     * @return null
     */
    public function clearGeoElements() {
        return $this->clear(self::GEO_ELEMENTS);
    }

    /**
     * Returns 'geo_elements' list
     *
     * @return GeoElements[]
     */
    public function getGeoElements() {
        return $this->get(self::GEO_ELEMENTS);
    }

    /**
     * Returns 'geo_elements' iterator
     *
     * @return ArrayIterator
     */
    public function getGeoElementsIterator() {
        return new ArrayIterator($this->get(self::GEO_ELEMENTS));
    }

    /**
     * Returns element from 'geo_elements' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return GeoElements
     */
    public function getGeoElementsAt($offset) {
        return $this->get(self::GEO_ELEMENTS, $offset);
    }

    /**
     * Returns count of 'geo_elements' list
     *
     * @return int
     */
    public function getGeoElementsCount() {
        return $this->count(self::GEO_ELEMENTS);
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
    const CITY_TYPE = 1;
    const CODE = 2;
    const CNAME = 3;
    const GEO = 4;
    const UID = 5;
    const PCCODE = 6;
    const PCNAME = 7;
    const LEVEL = 8;
    const SUP_LUKUANG = 9;
    const SGEO = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITY_TYPE => array(
            'name' => 'city_type',
            'required' => false,
            'type' => 5,
        ),
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
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::PCCODE => array(
            'name' => 'pccode',
            'required' => false,
            'type' => 5,
        ),
        self::PCNAME => array(
            'name' => 'pcname',
            'required' => false,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => 5,
        ),
        self::SUP_LUKUANG => array(
            'name' => 'sup_lukuang',
            'required' => false,
            'type' => 8,
        ),
        self::SGEO => array(
            'name' => 'sgeo',
            'required' => false,
            'type' => 'Sgeo',
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
        $this->values[self::CITY_TYPE] = null;
        $this->values[self::CODE] = null;
        $this->values[self::CNAME] = null;
        $this->values[self::GEO] = null;
        $this->values[self::UID] = null;
        $this->values[self::PCCODE] = null;
        $this->values[self::PCNAME] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::SUP_LUKUANG] = null;
        $this->values[self::SGEO] = null;
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
     * Sets value of 'city_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCityType($value) {
        return $this->set(self::CITY_TYPE, $value);
    }

    /**
     * Returns value of 'city_type' property
     *
     * @return int
     */
    public function getCityType() {
        return $this->get(self::CITY_TYPE);
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
     * Sets value of 'pccode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPccode($value) {
        return $this->set(self::PCCODE, $value);
    }

    /**
     * Returns value of 'pccode' property
     *
     * @return int
     */
    public function getPccode() {
        return $this->get(self::PCCODE);
    }

    /**
     * Sets value of 'pcname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPcname($value) {
        return $this->set(self::PCNAME, $value);
    }

    /**
     * Returns value of 'pcname' property
     *
     * @return string
     */
    public function getPcname() {
        return $this->get(self::PCNAME);
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

    /**
     * Sets value of 'sup_lukuang' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setSupLukuang($value) {
        return $this->set(self::SUP_LUKUANG, $value);
    }

    /**
     * Returns value of 'sup_lukuang' property
     *
     * @return bool
     */
    public function getSupLukuang() {
        return $this->get(self::SUP_LUKUANG);
    }

    /**
     * Sets value of 'sgeo' property
     *
     * @param Sgeo $value Property value
     *
     * @return null
     */
    public function setSgeo(Sgeo $value) {
        return $this->set(self::SGEO, $value);
    }

    /**
     * Returns value of 'sgeo' property
     *
     * @return Sgeo
     */
    public function getSgeo() {
        return $this->get(self::SGEO);
    }
}
}

/**
 * PreviousCity message
 */
if (!class_exists('PreviousCity')) {
class PreviousCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const NAME = 2;

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
}
}

/**
 * CityResult message
 */
if (!class_exists('CityResult')) {
class CityResult extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 2;
    const CURRENT_CITY = 1;
    const PREVIOUS_CITY = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 'Content',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
        ),
        self::PREVIOUS_CITY => array(
            'name' => 'previous_city',
            'required' => false,
            'type' => 'PreviousCity',
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
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::PREVIOUS_CITY] = null;
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
     * Sets value of 'previous_city' property
     *
     * @param PreviousCity $value Property value
     *
     * @return null
     */
    public function setPreviousCity(PreviousCity $value) {
        return $this->set(self::PREVIOUS_CITY, $value);
    }

    /**
     * Returns value of 'previous_city' property
     *
     * @return PreviousCity
     */
    public function getPreviousCity() {
        return $this->get(self::PREVIOUS_CITY);
    }
}
}
require_once 'currentcity.php';