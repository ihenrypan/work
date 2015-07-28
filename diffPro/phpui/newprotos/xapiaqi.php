<?php
/**
 * Auto generated from map_xapiaqi.proto.1 at 2015-06-23 14:50:34
 */

/**
 * Point message
 */
if (!class_exists('Point')) {
class Point extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const X = 1;
    const Y = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 1,
        ),
        self::Y => array(
            'name' => 'y',
            'required' => false,
            'type' => 1,
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
     * @param float $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return float
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return float
     */
    public function getY() {
        return $this->get(self::Y);
    }
}
}

/**
 * PoiList message
 */
if (!class_exists('PoiList')) {
class PoiList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const POINT = 2;
    const NAME = 1;
    const AQI = 3;
    const UPDATE_TIME = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => 'Point',
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::AQI => array(
            'name' => 'aqi',
            'required' => false,
            'type' => 5,
        ),
        self::UPDATE_TIME => array(
            'name' => 'update_time',
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
        $this->values[self::POINT] = null;
        $this->values[self::NAME] = null;
        $this->values[self::AQI] = null;
        $this->values[self::UPDATE_TIME] = null;
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
     * Sets value of 'point' property
     *
     * @param Point $value Property value
     *
     * @return null
     */
    public function setPoint(Point $value) {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return Point
     */
    public function getPoint() {
        return $this->get(self::POINT);
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
     * Sets value of 'aqi' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAqi($value) {
        return $this->set(self::AQI, $value);
    }

    /**
     * Returns value of 'aqi' property
     *
     * @return int
     */
    public function getAqi() {
        return $this->get(self::AQI);
    }

    /**
     * Sets value of 'update_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdateTime($value) {
        return $this->set(self::UPDATE_TIME, $value);
    }

    /**
     * Returns value of 'update_time' property
     *
     * @return string
     */
    public function getUpdateTime() {
        return $this->get(self::UPDATE_TIME);
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
    const POINT = 3;
    const POI_LIST = 6;
    const CID = 1;
    const NAME = 2;
    const AQI = 4;
    const UPDATE_TIME = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => 'Point',
        ),
        self::POI_LIST => array(
            'name' => 'poi_list',
            'repeated' => true,
            'type' => 'PoiList',
        ),
        self::CID => array(
            'name' => 'cid',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::AQI => array(
            'name' => 'aqi',
            'required' => false,
            'type' => 5,
        ),
        self::UPDATE_TIME => array(
            'name' => 'update_time',
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
        $this->values[self::POINT] = null;
        $this->values[self::POI_LIST] = array();
        $this->values[self::CID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::AQI] = null;
        $this->values[self::UPDATE_TIME] = null;
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
     * Sets value of 'point' property
     *
     * @param Point $value Property value
     *
     * @return null
     */
    public function setPoint(Point $value) {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return Point
     */
    public function getPoint() {
        return $this->get(self::POINT);
    }

    /**
     * Appends value to 'poi_list' list
     *
     * @param PoiList $value Value to append
     *
     * @return null
     */
    public function appendPoiList(PoiList $value) {
        return $this->append(self::POI_LIST, $value);
    }

    /**
     * Clears 'poi_list' list
     *
     * @return null
     */
    public function clearPoiList() {
        return $this->clear(self::POI_LIST);
    }

    /**
     * Returns 'poi_list' list
     *
     * @return PoiList[]
     */
    public function getPoiList() {
        return $this->get(self::POI_LIST);
    }

    /**
     * Returns 'poi_list' iterator
     *
     * @return ArrayIterator
     */
    public function getPoiListIterator() {
        return new ArrayIterator($this->get(self::POI_LIST));
    }

    /**
     * Returns element from 'poi_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return PoiList
     */
    public function getPoiListAt($offset) {
        return $this->get(self::POI_LIST, $offset);
    }

    /**
     * Returns count of 'poi_list' list
     *
     * @return int
     */
    public function getPoiListCount() {
        return $this->count(self::POI_LIST);
    }

    /**
     * Sets value of 'cid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCid($value) {
        return $this->set(self::CID, $value);
    }

    /**
     * Returns value of 'cid' property
     *
     * @return int
     */
    public function getCid() {
        return $this->get(self::CID);
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
     * Sets value of 'aqi' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAqi($value) {
        return $this->set(self::AQI, $value);
    }

    /**
     * Returns value of 'aqi' property
     *
     * @return int
     */
    public function getAqi() {
        return $this->get(self::AQI);
    }

    /**
     * Sets value of 'update_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdateTime($value) {
        return $this->set(self::UPDATE_TIME, $value);
    }

    /**
     * Returns value of 'update_time' property
     *
     * @return string
     */
    public function getUpdateTime() {
        return $this->get(self::UPDATE_TIME);
    }
}
}

/**
 * XapiAqi message
 */
if (!class_exists('XapiAqi')) {
class XapiAqi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENTS = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
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
}
}
