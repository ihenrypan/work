<?php
/**
 * Auto generated from map_bus.proto.1 at 2015-06-23 14:46:48
 */

/**
 * Detail message
 */
if (!class_exists('Detail')) {
class Detail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DESC = 1;
    const KM_PRICE = 2;
    const START_PRICE = 3;
    const TOTAL_PRICE = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => 7,
        ),
        self::KM_PRICE => array(
            'name' => 'km_price',
            'required' => false,
            'type' => 7,
        ),
        self::START_PRICE => array(
            'name' => 'start_price',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL_PRICE => array(
            'name' => 'total_price',
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
        $this->values[self::DESC] = null;
        $this->values[self::KM_PRICE] = null;
        $this->values[self::START_PRICE] = null;
        $this->values[self::TOTAL_PRICE] = null;
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
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value) {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc() {
        return $this->get(self::DESC);
    }

    /**
     * Sets value of 'km_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKmPrice($value) {
        return $this->set(self::KM_PRICE, $value);
    }

    /**
     * Returns value of 'km_price' property
     *
     * @return string
     */
    public function getKmPrice() {
        return $this->get(self::KM_PRICE);
    }

    /**
     * Sets value of 'start_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartPrice($value) {
        return $this->set(self::START_PRICE, $value);
    }

    /**
     * Returns value of 'start_price' property
     *
     * @return string
     */
    public function getStartPrice() {
        return $this->get(self::START_PRICE);
    }

    /**
     * Sets value of 'total_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalPrice($value) {
        return $this->set(self::TOTAL_PRICE, $value);
    }

    /**
     * Returns value of 'total_price' property
     *
     * @return string
     */
    public function getTotalPrice() {
        return $this->get(self::TOTAL_PRICE);
    }
}
}

/**
 * Taxi message
 */
if (!class_exists('Taxi')) {
class Taxi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISTANCE = 1;
    const DURATION = 2;
    const REMARK = 3;
    const DETAIL = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => false,
            'type' => 7,
        ),
        self::DETAIL => array(
            'name' => 'detail',
            'repeated' => true,
            'type' => 'Detail',
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::DETAIL] = array();
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
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'remark' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRemark($value) {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return string
     */
    public function getRemark() {
        return $this->get(self::REMARK);
    }

    /**
     * Appends value to 'detail' list
     *
     * @param Detail $value Value to append
     *
     * @return null
     */
    public function appendDetail(Detail $value) {
        return $this->append(self::DETAIL, $value);
    }

    /**
     * Clears 'detail' list
     *
     * @return null
     */
    public function clearDetail() {
        return $this->clear(self::DETAIL);
    }

    /**
     * Returns 'detail' list
     *
     * @return Detail[]
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
    }

    /**
     * Returns 'detail' iterator
     *
     * @return ArrayIterator
     */
    public function getDetailIterator() {
        return new ArrayIterator($this->get(self::DETAIL));
    }

    /**
     * Returns element from 'detail' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Detail
     */
    public function getDetailAt($offset) {
        return $this->get(self::DETAIL, $offset);
    }

    /**
     * Returns count of 'detail' list
     *
     * @return int
     */
    public function getDetailCount() {
        return $this->count(self::DETAIL);
    }
}
}

/**
 * DictInstruction message
 */
if (!class_exists('DictInstruction')) {
class DictInstruction extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const START_TEXT = 1;
    const END_TEXT = 2;
    const RTBUS_TEXT = 3;
    const DIRECT_TEXT = 4;
    const WALK_TEXT = 5;
    const OTHER_LINES = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::START_TEXT => array(
            'name' => 'start_text',
            'required' => false,
            'type' => 7,
        ),
        self::END_TEXT => array(
            'name' => 'end_text',
            'required' => false,
            'type' => 7,
        ),
        self::RTBUS_TEXT => array(
            'name' => 'rtbus_text',
            'required' => false,
            'type' => 7,
        ),
        self::DIRECT_TEXT => array(
            'name' => 'direct_text',
            'required' => false,
            'type' => 7,
        ),
        self::WALK_TEXT => array(
            'name' => 'walk_text',
            'required' => false,
            'type' => 7,
        ),
        self::OTHER_LINES => array(
            'name' => 'other_lines',
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
        $this->values[self::START_TEXT] = null;
        $this->values[self::END_TEXT] = null;
        $this->values[self::RTBUS_TEXT] = null;
        $this->values[self::DIRECT_TEXT] = null;
        $this->values[self::WALK_TEXT] = null;
        $this->values[self::OTHER_LINES] = null;
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
     * Sets value of 'start_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartText($value) {
        return $this->set(self::START_TEXT, $value);
    }

    /**
     * Returns value of 'start_text' property
     *
     * @return string
     */
    public function getStartText() {
        return $this->get(self::START_TEXT);
    }

    /**
     * Sets value of 'end_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndText($value) {
        return $this->set(self::END_TEXT, $value);
    }

    /**
     * Returns value of 'end_text' property
     *
     * @return string
     */
    public function getEndText() {
        return $this->get(self::END_TEXT);
    }

    /**
     * Sets value of 'rtbus_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRtbusText($value) {
        return $this->set(self::RTBUS_TEXT, $value);
    }

    /**
     * Returns value of 'rtbus_text' property
     *
     * @return string
     */
    public function getRtbusText() {
        return $this->get(self::RTBUS_TEXT);
    }

    /**
     * Sets value of 'direct_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDirectText($value) {
        return $this->set(self::DIRECT_TEXT, $value);
    }

    /**
     * Returns value of 'direct_text' property
     *
     * @return string
     */
    public function getDirectText() {
        return $this->get(self::DIRECT_TEXT);
    }

    /**
     * Sets value of 'walk_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWalkText($value) {
        return $this->set(self::WALK_TEXT, $value);
    }

    /**
     * Returns value of 'walk_text' property
     *
     * @return string
     */
    public function getWalkText() {
        return $this->get(self::WALK_TEXT);
    }

    /**
     * Sets value of 'other_lines' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOtherLines($value) {
        return $this->set(self::OTHER_LINES, $value);
    }

    /**
     * Returns value of 'other_lines' property
     *
     * @return string
     */
    public function getOtherLines() {
        return $this->get(self::OTHER_LINES);
    }
}
}

/**
 * NextBusInfo message
 */
if (!class_exists('NextBusInfo')) {
class NextBusInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const REMAIN_TIME = 1;
    const REMAIN_DIS = 2;
    const REMAIN_STOPS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::REMAIN_TIME => array(
            'name' => 'remain_time',
            'required' => false,
            'type' => 5,
        ),
        self::REMAIN_DIS => array(
            'name' => 'remain_dis',
            'required' => false,
            'type' => 5,
        ),
        self::REMAIN_STOPS => array(
            'name' => 'remain_stops',
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
        $this->values[self::REMAIN_TIME] = null;
        $this->values[self::REMAIN_DIS] = null;
        $this->values[self::REMAIN_STOPS] = null;
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
     * Sets value of 'remain_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRemainTime($value) {
        return $this->set(self::REMAIN_TIME, $value);
    }

    /**
     * Returns value of 'remain_time' property
     *
     * @return int
     */
    public function getRemainTime() {
        return $this->get(self::REMAIN_TIME);
    }

    /**
     * Sets value of 'remain_dis' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRemainDis($value) {
        return $this->set(self::REMAIN_DIS, $value);
    }

    /**
     * Returns value of 'remain_dis' property
     *
     * @return int
     */
    public function getRemainDis() {
        return $this->get(self::REMAIN_DIS);
    }

    /**
     * Sets value of 'remain_stops' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRemainStops($value) {
        return $this->set(self::REMAIN_STOPS, $value);
    }

    /**
     * Returns value of 'remain_stops' property
     *
     * @return int
     */
    public function getRemainStops() {
        return $this->get(self::REMAIN_STOPS);
    }
}
}

/**
 * Linestations message
 */
if (!class_exists('Linestations')) {
class Linestations extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const START_TIME = 2;
    const GEO = 3;
    const SGEO = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::START_TIME => array(
            'name' => 'start_time',
            'required' => false,
            'type' => 7,
        ),
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => 7,
        ),
        self::SGEO => array(
            'name' => 'sgeo',
            'repeated' => true,
            'type' => 6,
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
        $this->values[self::NAME] = null;
        $this->values[self::START_TIME] = null;
        $this->values[self::GEO] = null;
        $this->values[self::SGEO] = array();
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
     * Sets value of 'start_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::START_TIME, $value);
    }

    /**
     * Returns value of 'start_time' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::START_TIME);
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
     * Appends value to 'sgeo' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSgeo($value) {
        return $this->append(self::SGEO, $value);
    }

    /**
     * Clears 'sgeo' list
     *
     * @return null
     */
    public function clearSgeo() {
        return $this->clear(self::SGEO);
    }

    /**
     * Returns 'sgeo' list
     *
     * @return int[]
     */
    public function getSgeo() {
        return $this->get(self::SGEO);
    }

    /**
     * Returns 'sgeo' iterator
     *
     * @return ArrayIterator
     */
    public function getSgeoIterator() {
        return new ArrayIterator($this->get(self::SGEO));
    }

    /**
     * Returns element from 'sgeo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSgeoAt($offset) {
        return $this->get(self::SGEO, $offset);
    }

    /**
     * Returns count of 'sgeo' list
     *
     * @return int
     */
    public function getSgeoCount() {
        return $this->count(self::SGEO);
    }
}
}

/**
 * Vehicle message
 */
if (!class_exists('Vehicle')) {
class Vehicle extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NEXT_BUS_INFO = 11;
    const LINESTATIONS = 20;
    const NAME = 1;
    const TYPE = 2;
    const UID = 3;
    const START_TIME = 4;
    const END_TIME = 5;
    const START_UID = 6;
    const END_NAME = 7;
    const STOP_NUM = 8;
    const TOTAL_PRICE = 9;
    const ZONE_PRICE = 10;
    const AREALINES = 12;
    const DATE = 13;
    const DISCOUNT = 14;
    const PRICE = 15;
    const CP = 16;
    const LINE_TYPE = 17;
    const START_WD = 18;
    const END_CITY_UID = 19;
    const TELNUM = 21;
    const ORDER_URL = 22;
    const START_NAME = 23;
    const END_UID = 24;
    const END_STATION_TYPE = 25;
    const PROVIDER_NAME = 26;
    const PROVIDER_URL = 27;
    const START_CITY_NAME = 28;
    const IS_SUPPORT_TICKET = 29;
    const TICKET_URL = 31;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NEXT_BUS_INFO => array(
            'name' => 'next_bus_info',
            'required' => false,
            'type' => 'NextBusInfo',
        ),
        self::LINESTATIONS => array(
            'name' => 'linestations',
            'repeated' => true,
            'type' => 'Linestations',
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::START_TIME => array(
            'name' => 'start_time',
            'required' => false,
            'type' => 7,
        ),
        self::END_TIME => array(
            'name' => 'end_time',
            'required' => false,
            'type' => 7,
        ),
        self::START_UID => array(
            'name' => 'start_uid',
            'required' => false,
            'type' => 7,
        ),
        self::END_NAME => array(
            'name' => 'end_name',
            'required' => false,
            'type' => 7,
        ),
        self::STOP_NUM => array(
            'name' => 'stop_num',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL_PRICE => array(
            'name' => 'total_price',
            'required' => false,
            'type' => 5,
        ),
        self::ZONE_PRICE => array(
            'name' => 'zone_price',
            'required' => false,
            'type' => 5,
        ),
        self::AREALINES => array(
            'name' => 'arealines',
            'required' => false,
            'type' => 7,
        ),
        self::DATE => array(
            'name' => 'date',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT => array(
            'name' => 'discount',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::CP => array(
            'name' => 'cp',
            'required' => false,
            'type' => 7,
        ),
        self::LINE_TYPE => array(
            'name' => 'line_type',
            'required' => false,
            'type' => 5,
        ),
        self::START_WD => array(
            'name' => 'start_wd',
            'required' => false,
            'type' => 7,
        ),
        self::END_CITY_UID => array(
            'name' => 'end_city_uid',
            'required' => false,
            'type' => 7,
        ),
        self::TELNUM => array(
            'name' => 'telnum',
            'required' => false,
            'type' => 7,
        ),
        self::ORDER_URL => array(
            'name' => 'order_url',
            'required' => false,
            'type' => 7,
        ),
        self::START_NAME => array(
            'name' => 'start_name',
            'required' => false,
            'type' => 7,
        ),
        self::END_UID => array(
            'name' => 'end_uid',
            'required' => false,
            'type' => 7,
        ),
        self::END_STATION_TYPE => array(
            'name' => 'end_station_type',
            'required' => false,
            'type' => 5,
        ),
        self::PROVIDER_NAME => array(
            'name' => 'provider_name',
            'required' => false,
            'type' => 7,
        ),
        self::PROVIDER_URL => array(
            'name' => 'provider_url',
            'required' => false,
            'type' => 7,
        ),
        self::START_CITY_NAME => array(
            'name' => 'start_city_name',
            'required' => false,
            'type' => 7,
        ),
        self::IS_SUPPORT_TICKET => array(
            'name' => 'is_support_ticket',
            'required' => false,
            'type' => 5,
        ),
        self::TICKET_URL => array(
            'name' => 'ticket_url',
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
        $this->values[self::NEXT_BUS_INFO] = null;
        $this->values[self::LINESTATIONS] = array();
        $this->values[self::NAME] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::UID] = null;
        $this->values[self::START_TIME] = null;
        $this->values[self::END_TIME] = null;
        $this->values[self::START_UID] = null;
        $this->values[self::END_NAME] = null;
        $this->values[self::STOP_NUM] = null;
        $this->values[self::TOTAL_PRICE] = null;
        $this->values[self::ZONE_PRICE] = null;
        $this->values[self::AREALINES] = null;
        $this->values[self::DATE] = null;
        $this->values[self::DISCOUNT] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::CP] = null;
        $this->values[self::LINE_TYPE] = null;
        $this->values[self::START_WD] = null;
        $this->values[self::END_CITY_UID] = null;
        $this->values[self::TELNUM] = null;
        $this->values[self::ORDER_URL] = null;
        $this->values[self::START_NAME] = null;
        $this->values[self::END_UID] = null;
        $this->values[self::END_STATION_TYPE] = null;
        $this->values[self::PROVIDER_NAME] = null;
        $this->values[self::PROVIDER_URL] = null;
        $this->values[self::START_CITY_NAME] = null;
        $this->values[self::IS_SUPPORT_TICKET] = null;
        $this->values[self::TICKET_URL] = null;
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
     * Sets value of 'next_bus_info' property
     *
     * @param NextBusInfo $value Property value
     *
     * @return null
     */
    public function setNextBusInfo(NextBusInfo $value) {
        return $this->set(self::NEXT_BUS_INFO, $value);
    }

    /**
     * Returns value of 'next_bus_info' property
     *
     * @return NextBusInfo
     */
    public function getNextBusInfo() {
        return $this->get(self::NEXT_BUS_INFO);
    }

    /**
     * Appends value to 'linestations' list
     *
     * @param Linestations $value Value to append
     *
     * @return null
     */
    public function appendLinestations(Linestations $value) {
        return $this->append(self::LINESTATIONS, $value);
    }

    /**
     * Clears 'linestations' list
     *
     * @return null
     */
    public function clearLinestations() {
        return $this->clear(self::LINESTATIONS);
    }

    /**
     * Returns 'linestations' list
     *
     * @return Linestations[]
     */
    public function getLinestations() {
        return $this->get(self::LINESTATIONS);
    }

    /**
     * Returns 'linestations' iterator
     *
     * @return ArrayIterator
     */
    public function getLinestationsIterator() {
        return new ArrayIterator($this->get(self::LINESTATIONS));
    }

    /**
     * Returns element from 'linestations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Linestations
     */
    public function getLinestationsAt($offset) {
        return $this->get(self::LINESTATIONS, $offset);
    }

    /**
     * Returns count of 'linestations' list
     *
     * @return int
     */
    public function getLinestationsCount() {
        return $this->count(self::LINESTATIONS);
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
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType() {
        return $this->get(self::TYPE);
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
     * Sets value of 'start_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::START_TIME, $value);
    }

    /**
     * Returns value of 'start_time' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::START_TIME);
    }

    /**
     * Sets value of 'end_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndTime($value) {
        return $this->set(self::END_TIME, $value);
    }

    /**
     * Returns value of 'end_time' property
     *
     * @return string
     */
    public function getEndTime() {
        return $this->get(self::END_TIME);
    }

    /**
     * Sets value of 'start_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartUid($value) {
        return $this->set(self::START_UID, $value);
    }

    /**
     * Returns value of 'start_uid' property
     *
     * @return string
     */
    public function getStartUid() {
        return $this->get(self::START_UID);
    }

    /**
     * Sets value of 'end_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndName($value) {
        return $this->set(self::END_NAME, $value);
    }

    /**
     * Returns value of 'end_name' property
     *
     * @return string
     */
    public function getEndName() {
        return $this->get(self::END_NAME);
    }

    /**
     * Sets value of 'stop_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStopNum($value) {
        return $this->set(self::STOP_NUM, $value);
    }

    /**
     * Returns value of 'stop_num' property
     *
     * @return int
     */
    public function getStopNum() {
        return $this->get(self::STOP_NUM);
    }

    /**
     * Sets value of 'total_price' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalPrice($value) {
        return $this->set(self::TOTAL_PRICE, $value);
    }

    /**
     * Returns value of 'total_price' property
     *
     * @return int
     */
    public function getTotalPrice() {
        return $this->get(self::TOTAL_PRICE);
    }

    /**
     * Sets value of 'zone_price' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setZonePrice($value) {
        return $this->set(self::ZONE_PRICE, $value);
    }

    /**
     * Returns value of 'zone_price' property
     *
     * @return int
     */
    public function getZonePrice() {
        return $this->get(self::ZONE_PRICE);
    }

    /**
     * Sets value of 'arealines' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setArealines($value) {
        return $this->set(self::AREALINES, $value);
    }

    /**
     * Returns value of 'arealines' property
     *
     * @return string
     */
    public function getArealines() {
        return $this->get(self::AREALINES);
    }

    /**
     * Sets value of 'date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDate($value) {
        return $this->set(self::DATE, $value);
    }

    /**
     * Returns value of 'date' property
     *
     * @return string
     */
    public function getDate() {
        return $this->get(self::DATE);
    }

    /**
     * Sets value of 'discount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscount($value) {
        return $this->set(self::DISCOUNT, $value);
    }

    /**
     * Returns value of 'discount' property
     *
     * @return string
     */
    public function getDiscount() {
        return $this->get(self::DISCOUNT);
    }

    /**
     * Sets value of 'price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrice($value) {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return string
     */
    public function getPrice() {
        return $this->get(self::PRICE);
    }

    /**
     * Sets value of 'cp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCp($value) {
        return $this->set(self::CP, $value);
    }

    /**
     * Returns value of 'cp' property
     *
     * @return string
     */
    public function getCp() {
        return $this->get(self::CP);
    }

    /**
     * Sets value of 'line_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLineType($value) {
        return $this->set(self::LINE_TYPE, $value);
    }

    /**
     * Returns value of 'line_type' property
     *
     * @return int
     */
    public function getLineType() {
        return $this->get(self::LINE_TYPE);
    }

    /**
     * Sets value of 'start_wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartWd($value) {
        return $this->set(self::START_WD, $value);
    }

    /**
     * Returns value of 'start_wd' property
     *
     * @return string
     */
    public function getStartWd() {
        return $this->get(self::START_WD);
    }

    /**
     * Sets value of 'end_city_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndCityUid($value) {
        return $this->set(self::END_CITY_UID, $value);
    }

    /**
     * Returns value of 'end_city_uid' property
     *
     * @return string
     */
    public function getEndCityUid() {
        return $this->get(self::END_CITY_UID);
    }

    /**
     * Sets value of 'telnum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTelnum($value) {
        return $this->set(self::TELNUM, $value);
    }

    /**
     * Returns value of 'telnum' property
     *
     * @return string
     */
    public function getTelnum() {
        return $this->get(self::TELNUM);
    }

    /**
     * Sets value of 'order_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderUrl($value) {
        return $this->set(self::ORDER_URL, $value);
    }

    /**
     * Returns value of 'order_url' property
     *
     * @return string
     */
    public function getOrderUrl() {
        return $this->get(self::ORDER_URL);
    }

    /**
     * Sets value of 'start_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartName($value) {
        return $this->set(self::START_NAME, $value);
    }

    /**
     * Returns value of 'start_name' property
     *
     * @return string
     */
    public function getStartName() {
        return $this->get(self::START_NAME);
    }

    /**
     * Sets value of 'end_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndUid($value) {
        return $this->set(self::END_UID, $value);
    }

    /**
     * Returns value of 'end_uid' property
     *
     * @return string
     */
    public function getEndUid() {
        return $this->get(self::END_UID);
    }

    /**
     * Sets value of 'end_station_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEndStationType($value) {
        return $this->set(self::END_STATION_TYPE, $value);
    }

    /**
     * Returns value of 'end_station_type' property
     *
     * @return int
     */
    public function getEndStationType() {
        return $this->get(self::END_STATION_TYPE);
    }

    /**
     * Sets value of 'provider_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProviderName($value) {
        return $this->set(self::PROVIDER_NAME, $value);
    }

    /**
     * Returns value of 'provider_name' property
     *
     * @return string
     */
    public function getProviderName() {
        return $this->get(self::PROVIDER_NAME);
    }

    /**
     * Sets value of 'provider_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProviderUrl($value) {
        return $this->set(self::PROVIDER_URL, $value);
    }

    /**
     * Returns value of 'provider_url' property
     *
     * @return string
     */
    public function getProviderUrl() {
        return $this->get(self::PROVIDER_URL);
    }

    /**
     * Sets value of 'start_city_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartCityName($value) {
        return $this->set(self::START_CITY_NAME, $value);
    }

    /**
     * Returns value of 'start_city_name' property
     *
     * @return string
     */
    public function getStartCityName() {
        return $this->get(self::START_CITY_NAME);
    }

    /**
     * Sets value of 'is_support_ticket' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsSupportTicket($value) {
        return $this->set(self::IS_SUPPORT_TICKET, $value);
    }

    /**
     * Returns value of 'is_support_ticket' property
     *
     * @return int
     */
    public function getIsSupportTicket() {
        return $this->get(self::IS_SUPPORT_TICKET);
    }

    /**
     * Sets value of 'ticket_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTicketUrl($value) {
        return $this->set(self::TICKET_URL, $value);
    }

    /**
     * Returns value of 'ticket_url' property
     *
     * @return string
     */
    public function getTicketUrl() {
        return $this->get(self::TICKET_URL);
    }
}
}

/**
 * Pois message
 */
if (!class_exists('Pois')) {
class Pois extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const LOCATION = 2;
    const TYPE = 3;
    const DETAIL = 4;
    const SLOCATION = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::LOCATION => array(
            'name' => 'location',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::DETAIL => array(
            'name' => 'detail',
            'required' => false,
            'type' => 7,
        ),
        self::SLOCATION => array(
            'name' => 'slocation',
            'repeated' => true,
            'type' => 6,
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
        $this->values[self::NAME] = null;
        $this->values[self::LOCATION] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::DETAIL] = null;
        $this->values[self::SLOCATION] = array();
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
     * Sets value of 'location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocation($value) {
        return $this->set(self::LOCATION, $value);
    }

    /**
     * Returns value of 'location' property
     *
     * @return string
     */
    public function getLocation() {
        return $this->get(self::LOCATION);
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'detail' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetail($value) {
        return $this->set(self::DETAIL, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return string
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
    }

    /**
     * Appends value to 'slocation' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSlocation($value) {
        return $this->append(self::SLOCATION, $value);
    }

    /**
     * Clears 'slocation' list
     *
     * @return null
     */
    public function clearSlocation() {
        return $this->clear(self::SLOCATION);
    }

    /**
     * Returns 'slocation' list
     *
     * @return int[]
     */
    public function getSlocation() {
        return $this->get(self::SLOCATION);
    }

    /**
     * Returns 'slocation' iterator
     *
     * @return ArrayIterator
     */
    public function getSlocationIterator() {
        return new ArrayIterator($this->get(self::SLOCATION));
    }

    /**
     * Returns element from 'slocation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSlocationAt($offset) {
        return $this->get(self::SLOCATION, $offset);
    }

    /**
     * Returns count of 'slocation' list
     *
     * @return int
     */
    public function getSlocationCount() {
        return $this->count(self::SLOCATION);
    }
}
}

/**
 * StepPano message
 */
if (!class_exists('StepPano')) {
class StepPano extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PANO_LOCATION = 1;
    const PANO_ID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PANO_LOCATION => array(
            'name' => 'pano_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::PANO_ID => array(
            'name' => 'pano_id',
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
        $this->values[self::PANO_LOCATION] = array();
        $this->values[self::PANO_ID] = null;
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
     * Appends value to 'pano_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendPanoLocation($value) {
        return $this->append(self::PANO_LOCATION, $value);
    }

    /**
     * Clears 'pano_location' list
     *
     * @return null
     */
    public function clearPanoLocation() {
        return $this->clear(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' list
     *
     * @return int[]
     */
    public function getPanoLocation() {
        return $this->get(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' iterator
     *
     * @return ArrayIterator
     */
    public function getPanoLocationIterator() {
        return new ArrayIterator($this->get(self::PANO_LOCATION));
    }

    /**
     * Returns element from 'pano_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getPanoLocationAt($offset) {
        return $this->get(self::PANO_LOCATION, $offset);
    }

    /**
     * Returns count of 'pano_location' list
     *
     * @return int
     */
    public function getPanoLocationCount() {
        return $this->count(self::PANO_LOCATION);
    }

    /**
     * Sets value of 'pano_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPanoId($value) {
        return $this->set(self::PANO_ID, $value);
    }

    /**
     * Returns value of 'pano_id' property
     *
     * @return string
     */
    public function getPanoId() {
        return $this->get(self::PANO_ID);
    }
}
}

/**
 * LowerStep message
 */
if (!class_exists('LowerStep')) {
class LowerStep extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DICT_INSTRUCTION = 21;
    const VEHICLE = 10;
    const POIS = 16;
    const PATH = 1;
    const TYPE = 2;
    const INSTRUCTIONS = 3;
    const START_INSTRUCTIONS = 4;
    const END_INSTRUCTIONS = 5;
    const START_LOCATION = 6;
    const END_LOCATION = 7;
    const DISTANCE = 8;
    const DURATION = 9;
    const TIP = 11;
    const TIP_TEXT = 12;
    const TIP_BACKGROUND = 13;
    const ARRIVE_TIME = 14;
    const DIRECTION = 15;
    const SSTART_LOCATION = 17;
    const SEND_LOCATION = 18;
    const SPATH = 19;
    const LINE_STOPS = 20;
    const STEP_PANO = 22;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DICT_INSTRUCTION => array(
            'name' => 'dict_instruction',
            'required' => false,
            'type' => 'DictInstruction',
        ),
        self::VEHICLE => array(
            'name' => 'vehicle',
            'required' => false,
            'type' => 'Vehicle',
        ),
        self::POIS => array(
            'name' => 'pois',
            'repeated' => true,
            'type' => 'Pois',
        ),
        self::PATH => array(
            'name' => 'path',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::START_INSTRUCTIONS => array(
            'name' => 'start_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::END_INSTRUCTIONS => array(
            'name' => 'end_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::START_LOCATION => array(
            'name' => 'start_location',
            'required' => false,
            'type' => 7,
        ),
        self::END_LOCATION => array(
            'name' => 'end_location',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::TIP => array(
            'name' => 'tip',
            'required' => false,
            'type' => 5,
        ),
        self::TIP_TEXT => array(
            'name' => 'tip_text',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_BACKGROUND => array(
            'name' => 'tip_background',
            'required' => false,
            'type' => 7,
        ),
        self::ARRIVE_TIME => array(
            'name' => 'arrive_time',
            'required' => false,
            'type' => 7,
        ),
        self::DIRECTION => array(
            'name' => 'direction',
            'required' => false,
            'type' => 5,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 6,
        ),
        self::LINE_STOPS => array(
            'name' => 'line_stops',
            'repeated' => true,
            'type' => 7,
        ),
        self::STEP_PANO => array(
            'name' => 'step_pano',
            'required' => false,
            'type' => 'StepPano',
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
        $this->values[self::DICT_INSTRUCTION] = null;
        $this->values[self::VEHICLE] = null;
        $this->values[self::POIS] = array();
        $this->values[self::PATH] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::START_INSTRUCTIONS] = null;
        $this->values[self::END_INSTRUCTIONS] = null;
        $this->values[self::START_LOCATION] = null;
        $this->values[self::END_LOCATION] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::TIP] = null;
        $this->values[self::TIP_TEXT] = null;
        $this->values[self::TIP_BACKGROUND] = null;
        $this->values[self::ARRIVE_TIME] = null;
        $this->values[self::DIRECTION] = null;
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::SPATH] = array();
        $this->values[self::LINE_STOPS] = array();
        $this->values[self::STEP_PANO] = null;
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
     * Sets value of 'dict_instruction' property
     *
     * @param DictInstruction $value Property value
     *
     * @return null
     */
    public function setDictInstruction(DictInstruction $value) {
        return $this->set(self::DICT_INSTRUCTION, $value);
    }

    /**
     * Returns value of 'dict_instruction' property
     *
     * @return DictInstruction
     */
    public function getDictInstruction() {
        return $this->get(self::DICT_INSTRUCTION);
    }

    /**
     * Sets value of 'vehicle' property
     *
     * @param Vehicle $value Property value
     *
     * @return null
     */
    public function setVehicle(Vehicle $value) {
        return $this->set(self::VEHICLE, $value);
    }

    /**
     * Returns value of 'vehicle' property
     *
     * @return Vehicle
     */
    public function getVehicle() {
        return $this->get(self::VEHICLE);
    }

    /**
     * Appends value to 'pois' list
     *
     * @param Pois $value Value to append
     *
     * @return null
     */
    public function appendPois(Pois $value) {
        return $this->append(self::POIS, $value);
    }

    /**
     * Clears 'pois' list
     *
     * @return null
     */
    public function clearPois() {
        return $this->clear(self::POIS);
    }

    /**
     * Returns 'pois' list
     *
     * @return Pois[]
     */
    public function getPois() {
        return $this->get(self::POIS);
    }

    /**
     * Returns 'pois' iterator
     *
     * @return ArrayIterator
     */
    public function getPoisIterator() {
        return new ArrayIterator($this->get(self::POIS));
    }

    /**
     * Returns element from 'pois' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Pois
     */
    public function getPoisAt($offset) {
        return $this->get(self::POIS, $offset);
    }

    /**
     * Returns count of 'pois' list
     *
     * @return int
     */
    public function getPoisCount() {
        return $this->count(self::POIS);
    }

    /**
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value) {
        return $this->set(self::PATH, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath() {
        return $this->get(self::PATH);
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInstructions($value) {
        return $this->set(self::INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'instructions' property
     *
     * @return string
     */
    public function getInstructions() {
        return $this->get(self::INSTRUCTIONS);
    }

    /**
     * Sets value of 'start_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartInstructions($value) {
        return $this->set(self::START_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'start_instructions' property
     *
     * @return string
     */
    public function getStartInstructions() {
        return $this->get(self::START_INSTRUCTIONS);
    }

    /**
     * Sets value of 'end_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndInstructions($value) {
        return $this->set(self::END_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'end_instructions' property
     *
     * @return string
     */
    public function getEndInstructions() {
        return $this->get(self::END_INSTRUCTIONS);
    }

    /**
     * Sets value of 'start_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartLocation($value) {
        return $this->set(self::START_LOCATION, $value);
    }

    /**
     * Returns value of 'start_location' property
     *
     * @return string
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
    }

    /**
     * Sets value of 'end_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndLocation($value) {
        return $this->set(self::END_LOCATION, $value);
    }

    /**
     * Returns value of 'end_location' property
     *
     * @return string
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'tip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTip($value) {
        return $this->set(self::TIP, $value);
    }

    /**
     * Returns value of 'tip' property
     *
     * @return int
     */
    public function getTip() {
        return $this->get(self::TIP);
    }

    /**
     * Sets value of 'tip_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipText($value) {
        return $this->set(self::TIP_TEXT, $value);
    }

    /**
     * Returns value of 'tip_text' property
     *
     * @return string
     */
    public function getTipText() {
        return $this->get(self::TIP_TEXT);
    }

    /**
     * Sets value of 'tip_background' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipBackground($value) {
        return $this->set(self::TIP_BACKGROUND, $value);
    }

    /**
     * Returns value of 'tip_background' property
     *
     * @return string
     */
    public function getTipBackground() {
        return $this->get(self::TIP_BACKGROUND);
    }

    /**
     * Sets value of 'arrive_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setArriveTime($value) {
        return $this->set(self::ARRIVE_TIME, $value);
    }

    /**
     * Returns value of 'arrive_time' property
     *
     * @return string
     */
    public function getArriveTime() {
        return $this->get(self::ARRIVE_TIME);
    }

    /**
     * Sets value of 'direction' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDirection($value) {
        return $this->set(self::DIRECTION, $value);
    }

    /**
     * Returns value of 'direction' property
     *
     * @return int
     */
    public function getDirection() {
        return $this->get(self::DIRECTION);
    }

    /**
     * Appends value to 'sstart_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSstartLocation($value) {
        return $this->append(self::SSTART_LOCATION, $value);
    }

    /**
     * Clears 'sstart_location' list
     *
     * @return null
     */
    public function clearSstartLocation() {
        return $this->clear(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' list
     *
     * @return int[]
     */
    public function getSstartLocation() {
        return $this->get(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSstartLocationIterator() {
        return new ArrayIterator($this->get(self::SSTART_LOCATION));
    }

    /**
     * Returns element from 'sstart_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSstartLocationAt($offset) {
        return $this->get(self::SSTART_LOCATION, $offset);
    }

    /**
     * Returns count of 'sstart_location' list
     *
     * @return int
     */
    public function getSstartLocationCount() {
        return $this->count(self::SSTART_LOCATION);
    }

    /**
     * Appends value to 'send_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSendLocation($value) {
        return $this->append(self::SEND_LOCATION, $value);
    }

    /**
     * Clears 'send_location' list
     *
     * @return null
     */
    public function clearSendLocation() {
        return $this->clear(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' list
     *
     * @return int[]
     */
    public function getSendLocation() {
        return $this->get(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSendLocationIterator() {
        return new ArrayIterator($this->get(self::SEND_LOCATION));
    }

    /**
     * Returns element from 'send_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSendLocationAt($offset) {
        return $this->get(self::SEND_LOCATION, $offset);
    }

    /**
     * Returns count of 'send_location' list
     *
     * @return int
     */
    public function getSendLocationCount() {
        return $this->count(self::SEND_LOCATION);
    }

    /**
     * Appends value to 'spath' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpath($value) {
        return $this->append(self::SPATH, $value);
    }

    /**
     * Clears 'spath' list
     *
     * @return null
     */
    public function clearSpath() {
        return $this->clear(self::SPATH);
    }

    /**
     * Returns 'spath' list
     *
     * @return int[]
     */
    public function getSpath() {
        return $this->get(self::SPATH);
    }

    /**
     * Returns 'spath' iterator
     *
     * @return ArrayIterator
     */
    public function getSpathIterator() {
        return new ArrayIterator($this->get(self::SPATH));
    }

    /**
     * Returns element from 'spath' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSpathAt($offset) {
        return $this->get(self::SPATH, $offset);
    }

    /**
     * Returns count of 'spath' list
     *
     * @return int
     */
    public function getSpathCount() {
        return $this->count(self::SPATH);
    }

    /**
     * Appends value to 'line_stops' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendLineStops($value) {
        return $this->append(self::LINE_STOPS, $value);
    }

    /**
     * Clears 'line_stops' list
     *
     * @return null
     */
    public function clearLineStops() {
        return $this->clear(self::LINE_STOPS);
    }

    /**
     * Returns 'line_stops' list
     *
     * @return string[]
     */
    public function getLineStops() {
        return $this->get(self::LINE_STOPS);
    }

    /**
     * Returns 'line_stops' iterator
     *
     * @return ArrayIterator
     */
    public function getLineStopsIterator() {
        return new ArrayIterator($this->get(self::LINE_STOPS));
    }

    /**
     * Returns element from 'line_stops' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getLineStopsAt($offset) {
        return $this->get(self::LINE_STOPS, $offset);
    }

    /**
     * Returns count of 'line_stops' list
     *
     * @return int
     */
    public function getLineStopsCount() {
        return $this->count(self::LINE_STOPS);
    }

    /**
     * Sets value of 'step_pano' property
     *
     * @param StepPano $value Property value
     *
     * @return null
     */
    public function setStepPano(StepPano $value) {
        return $this->set(self::STEP_PANO, $value);
    }

    /**
     * Returns value of 'step_pano' property
     *
     * @return StepPano
     */
    public function getStepPano() {
        return $this->get(self::STEP_PANO);
    }
}
}

/**
 * LowerSteps message
 */
if (!class_exists('LowerSteps')) {
class LowerSteps extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LOWER_STEP = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LOWER_STEP => array(
            'name' => 'lower_step',
            'repeated' => true,
            'type' => 'LowerStep',
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
        $this->values[self::LOWER_STEP] = array();
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
     * Appends value to 'lower_step' list
     *
     * @param LowerStep $value Value to append
     *
     * @return null
     */
    public function appendLowerStep(LowerStep $value) {
        return $this->append(self::LOWER_STEP, $value);
    }

    /**
     * Clears 'lower_step' list
     *
     * @return null
     */
    public function clearLowerStep() {
        return $this->clear(self::LOWER_STEP);
    }

    /**
     * Returns 'lower_step' list
     *
     * @return LowerStep[]
     */
    public function getLowerStep() {
        return $this->get(self::LOWER_STEP);
    }

    /**
     * Returns 'lower_step' iterator
     *
     * @return ArrayIterator
     */
    public function getLowerStepIterator() {
        return new ArrayIterator($this->get(self::LOWER_STEP));
    }

    /**
     * Returns element from 'lower_step' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LowerStep
     */
    public function getLowerStepAt($offset) {
        return $this->get(self::LOWER_STEP, $offset);
    }

    /**
     * Returns count of 'lower_step' list
     *
     * @return int
     */
    public function getLowerStepCount() {
        return $this->count(self::LOWER_STEP);
    }
}
}

/**
 * LinkColor message
 */
if (!class_exists('LinkColor')) {
class LinkColor extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STATUS = 1;
    const GEO_CNT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 5,
        ),
        self::GEO_CNT => array(
            'name' => 'geo_cnt',
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
        $this->values[self::STATUS] = null;
        $this->values[self::GEO_CNT] = null;
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
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'geo_cnt' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGeoCnt($value) {
        return $this->set(self::GEO_CNT, $value);
    }

    /**
     * Returns value of 'geo_cnt' property
     *
     * @return int
     */
    public function getGeoCnt() {
        return $this->get(self::GEO_CNT);
    }
}
}

/**
 * StopsPos message
 */
if (!class_exists('StopsPos')) {
class StopsPos extends ProtobufMessage
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
 * Step message
 */
if (!class_exists('Step')) {
class Step extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DICT_INSTRUCTION = 23;
    const VEHICLE = 12;
    const LOWER_STEPS = 13;
    const POIS = 16;
    const LINK_COLOR = 24;
    const DISTANCE = 1;
    const DURATION = 2;
    const END_LOCATION = 3;
    const START_LOCATION = 4;
    const INSTRUCTIONS = 5;
    const PATH = 6;
    const TYPE = 7;
    const TIP = 8;
    const TIP_TEXT = 9;
    const TIP_BACKGROUND = 10;
    const ORDER_URL = 11;
    const START_INSTRUCTIONS = 14;
    const END_INSTRUCTIONS = 15;
    const START_ADDRESS = 17;
    const END_ADDRESS = 18;
    const SEND_LOCATION = 19;
    const SSTART_LOCATION = 20;
    const SPATH = 21;
    const LINE_STOPS = 22;
    const STEP_PANO = 25;
    const STOPS_POS = 26;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DICT_INSTRUCTION => array(
            'name' => 'dict_instruction',
            'required' => false,
            'type' => 'DictInstruction',
        ),
        self::VEHICLE => array(
            'name' => 'vehicle',
            'required' => false,
            'type' => 'Vehicle',
        ),
        self::LOWER_STEPS => array(
            'name' => 'lower_steps',
            'repeated' => true,
            'type' => 'LowerSteps',
        ),
        self::POIS => array(
            'name' => 'pois',
            'repeated' => true,
            'type' => 'Pois',
        ),
        self::LINK_COLOR => array(
            'name' => 'link_color',
            'repeated' => true,
            'type' => 'LinkColor',
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::END_LOCATION => array(
            'name' => 'end_location',
            'required' => false,
            'type' => 7,
        ),
        self::START_LOCATION => array(
            'name' => 'start_location',
            'required' => false,
            'type' => 7,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::PATH => array(
            'name' => 'path',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::TIP => array(
            'name' => 'tip',
            'required' => false,
            'type' => 5,
        ),
        self::TIP_TEXT => array(
            'name' => 'tip_text',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_BACKGROUND => array(
            'name' => 'tip_background',
            'required' => false,
            'type' => 7,
        ),
        self::ORDER_URL => array(
            'name' => 'order_url',
            'required' => false,
            'type' => 7,
        ),
        self::START_INSTRUCTIONS => array(
            'name' => 'start_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::END_INSTRUCTIONS => array(
            'name' => 'end_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::START_ADDRESS => array(
            'name' => 'start_address',
            'required' => false,
            'type' => 7,
        ),
        self::END_ADDRESS => array(
            'name' => 'end_address',
            'required' => false,
            'type' => 7,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 6,
        ),
        self::LINE_STOPS => array(
            'name' => 'line_stops',
            'repeated' => true,
            'type' => 7,
        ),
        self::STEP_PANO => array(
            'name' => 'step_pano',
            'required' => false,
            'type' => 'StepPano',
        ),
        self::STOPS_POS => array(
            'name' => 'stops_pos',
            'repeated' => true,
            'type' => 'StopsPos',
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
        $this->values[self::DICT_INSTRUCTION] = null;
        $this->values[self::VEHICLE] = null;
        $this->values[self::LOWER_STEPS] = array();
        $this->values[self::POIS] = array();
        $this->values[self::LINK_COLOR] = array();
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::END_LOCATION] = null;
        $this->values[self::START_LOCATION] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::PATH] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::TIP] = null;
        $this->values[self::TIP_TEXT] = null;
        $this->values[self::TIP_BACKGROUND] = null;
        $this->values[self::ORDER_URL] = null;
        $this->values[self::START_INSTRUCTIONS] = null;
        $this->values[self::END_INSTRUCTIONS] = null;
        $this->values[self::START_ADDRESS] = null;
        $this->values[self::END_ADDRESS] = null;
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SPATH] = array();
        $this->values[self::LINE_STOPS] = array();
        $this->values[self::STEP_PANO] = null;
        $this->values[self::STOPS_POS] = array();
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
     * Sets value of 'dict_instruction' property
     *
     * @param DictInstruction $value Property value
     *
     * @return null
     */
    public function setDictInstruction(DictInstruction $value) {
        return $this->set(self::DICT_INSTRUCTION, $value);
    }

    /**
     * Returns value of 'dict_instruction' property
     *
     * @return DictInstruction
     */
    public function getDictInstruction() {
        return $this->get(self::DICT_INSTRUCTION);
    }

    /**
     * Sets value of 'vehicle' property
     *
     * @param Vehicle $value Property value
     *
     * @return null
     */
    public function setVehicle(Vehicle $value) {
        return $this->set(self::VEHICLE, $value);
    }

    /**
     * Returns value of 'vehicle' property
     *
     * @return Vehicle
     */
    public function getVehicle() {
        return $this->get(self::VEHICLE);
    }

    /**
     * Appends value to 'lower_steps' list
     *
     * @param LowerSteps $value Value to append
     *
     * @return null
     */
    public function appendLowerSteps(LowerSteps $value) {
        return $this->append(self::LOWER_STEPS, $value);
    }

    /**
     * Clears 'lower_steps' list
     *
     * @return null
     */
    public function clearLowerSteps() {
        return $this->clear(self::LOWER_STEPS);
    }

    /**
     * Returns 'lower_steps' list
     *
     * @return LowerSteps[]
     */
    public function getLowerSteps() {
        return $this->get(self::LOWER_STEPS);
    }

    /**
     * Returns 'lower_steps' iterator
     *
     * @return ArrayIterator
     */
    public function getLowerStepsIterator() {
        return new ArrayIterator($this->get(self::LOWER_STEPS));
    }

    /**
     * Returns element from 'lower_steps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LowerSteps
     */
    public function getLowerStepsAt($offset) {
        return $this->get(self::LOWER_STEPS, $offset);
    }

    /**
     * Returns count of 'lower_steps' list
     *
     * @return int
     */
    public function getLowerStepsCount() {
        return $this->count(self::LOWER_STEPS);
    }

    /**
     * Appends value to 'pois' list
     *
     * @param Pois $value Value to append
     *
     * @return null
     */
    public function appendPois(Pois $value) {
        return $this->append(self::POIS, $value);
    }

    /**
     * Clears 'pois' list
     *
     * @return null
     */
    public function clearPois() {
        return $this->clear(self::POIS);
    }

    /**
     * Returns 'pois' list
     *
     * @return Pois[]
     */
    public function getPois() {
        return $this->get(self::POIS);
    }

    /**
     * Returns 'pois' iterator
     *
     * @return ArrayIterator
     */
    public function getPoisIterator() {
        return new ArrayIterator($this->get(self::POIS));
    }

    /**
     * Returns element from 'pois' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Pois
     */
    public function getPoisAt($offset) {
        return $this->get(self::POIS, $offset);
    }

    /**
     * Returns count of 'pois' list
     *
     * @return int
     */
    public function getPoisCount() {
        return $this->count(self::POIS);
    }

    /**
     * Appends value to 'link_color' list
     *
     * @param LinkColor $value Value to append
     *
     * @return null
     */
    public function appendLinkColor(LinkColor $value) {
        return $this->append(self::LINK_COLOR, $value);
    }

    /**
     * Clears 'link_color' list
     *
     * @return null
     */
    public function clearLinkColor() {
        return $this->clear(self::LINK_COLOR);
    }

    /**
     * Returns 'link_color' list
     *
     * @return LinkColor[]
     */
    public function getLinkColor() {
        return $this->get(self::LINK_COLOR);
    }

    /**
     * Returns 'link_color' iterator
     *
     * @return ArrayIterator
     */
    public function getLinkColorIterator() {
        return new ArrayIterator($this->get(self::LINK_COLOR));
    }

    /**
     * Returns element from 'link_color' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LinkColor
     */
    public function getLinkColorAt($offset) {
        return $this->get(self::LINK_COLOR, $offset);
    }

    /**
     * Returns count of 'link_color' list
     *
     * @return int
     */
    public function getLinkColorCount() {
        return $this->count(self::LINK_COLOR);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'end_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndLocation($value) {
        return $this->set(self::END_LOCATION, $value);
    }

    /**
     * Returns value of 'end_location' property
     *
     * @return string
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Sets value of 'start_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartLocation($value) {
        return $this->set(self::START_LOCATION, $value);
    }

    /**
     * Returns value of 'start_location' property
     *
     * @return string
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
    }

    /**
     * Sets value of 'instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInstructions($value) {
        return $this->set(self::INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'instructions' property
     *
     * @return string
     */
    public function getInstructions() {
        return $this->get(self::INSTRUCTIONS);
    }

    /**
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value) {
        return $this->set(self::PATH, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath() {
        return $this->get(self::PATH);
    }

    /**
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'tip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTip($value) {
        return $this->set(self::TIP, $value);
    }

    /**
     * Returns value of 'tip' property
     *
     * @return int
     */
    public function getTip() {
        return $this->get(self::TIP);
    }

    /**
     * Sets value of 'tip_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipText($value) {
        return $this->set(self::TIP_TEXT, $value);
    }

    /**
     * Returns value of 'tip_text' property
     *
     * @return string
     */
    public function getTipText() {
        return $this->get(self::TIP_TEXT);
    }

    /**
     * Sets value of 'tip_background' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipBackground($value) {
        return $this->set(self::TIP_BACKGROUND, $value);
    }

    /**
     * Returns value of 'tip_background' property
     *
     * @return string
     */
    public function getTipBackground() {
        return $this->get(self::TIP_BACKGROUND);
    }

    /**
     * Sets value of 'order_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderUrl($value) {
        return $this->set(self::ORDER_URL, $value);
    }

    /**
     * Returns value of 'order_url' property
     *
     * @return string
     */
    public function getOrderUrl() {
        return $this->get(self::ORDER_URL);
    }

    /**
     * Sets value of 'start_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartInstructions($value) {
        return $this->set(self::START_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'start_instructions' property
     *
     * @return string
     */
    public function getStartInstructions() {
        return $this->get(self::START_INSTRUCTIONS);
    }

    /**
     * Sets value of 'end_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndInstructions($value) {
        return $this->set(self::END_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'end_instructions' property
     *
     * @return string
     */
    public function getEndInstructions() {
        return $this->get(self::END_INSTRUCTIONS);
    }

    /**
     * Sets value of 'start_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartAddress($value) {
        return $this->set(self::START_ADDRESS, $value);
    }

    /**
     * Returns value of 'start_address' property
     *
     * @return string
     */
    public function getStartAddress() {
        return $this->get(self::START_ADDRESS);
    }

    /**
     * Sets value of 'end_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndAddress($value) {
        return $this->set(self::END_ADDRESS, $value);
    }

    /**
     * Returns value of 'end_address' property
     *
     * @return string
     */
    public function getEndAddress() {
        return $this->get(self::END_ADDRESS);
    }

    /**
     * Appends value to 'send_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSendLocation($value) {
        return $this->append(self::SEND_LOCATION, $value);
    }

    /**
     * Clears 'send_location' list
     *
     * @return null
     */
    public function clearSendLocation() {
        return $this->clear(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' list
     *
     * @return int[]
     */
    public function getSendLocation() {
        return $this->get(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSendLocationIterator() {
        return new ArrayIterator($this->get(self::SEND_LOCATION));
    }

    /**
     * Returns element from 'send_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSendLocationAt($offset) {
        return $this->get(self::SEND_LOCATION, $offset);
    }

    /**
     * Returns count of 'send_location' list
     *
     * @return int
     */
    public function getSendLocationCount() {
        return $this->count(self::SEND_LOCATION);
    }

    /**
     * Appends value to 'sstart_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSstartLocation($value) {
        return $this->append(self::SSTART_LOCATION, $value);
    }

    /**
     * Clears 'sstart_location' list
     *
     * @return null
     */
    public function clearSstartLocation() {
        return $this->clear(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' list
     *
     * @return int[]
     */
    public function getSstartLocation() {
        return $this->get(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSstartLocationIterator() {
        return new ArrayIterator($this->get(self::SSTART_LOCATION));
    }

    /**
     * Returns element from 'sstart_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSstartLocationAt($offset) {
        return $this->get(self::SSTART_LOCATION, $offset);
    }

    /**
     * Returns count of 'sstart_location' list
     *
     * @return int
     */
    public function getSstartLocationCount() {
        return $this->count(self::SSTART_LOCATION);
    }

    /**
     * Appends value to 'spath' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpath($value) {
        return $this->append(self::SPATH, $value);
    }

    /**
     * Clears 'spath' list
     *
     * @return null
     */
    public function clearSpath() {
        return $this->clear(self::SPATH);
    }

    /**
     * Returns 'spath' list
     *
     * @return int[]
     */
    public function getSpath() {
        return $this->get(self::SPATH);
    }

    /**
     * Returns 'spath' iterator
     *
     * @return ArrayIterator
     */
    public function getSpathIterator() {
        return new ArrayIterator($this->get(self::SPATH));
    }

    /**
     * Returns element from 'spath' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSpathAt($offset) {
        return $this->get(self::SPATH, $offset);
    }

    /**
     * Returns count of 'spath' list
     *
     * @return int
     */
    public function getSpathCount() {
        return $this->count(self::SPATH);
    }

    /**
     * Appends value to 'line_stops' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendLineStops($value) {
        return $this->append(self::LINE_STOPS, $value);
    }

    /**
     * Clears 'line_stops' list
     *
     * @return null
     */
    public function clearLineStops() {
        return $this->clear(self::LINE_STOPS);
    }

    /**
     * Returns 'line_stops' list
     *
     * @return string[]
     */
    public function getLineStops() {
        return $this->get(self::LINE_STOPS);
    }

    /**
     * Returns 'line_stops' iterator
     *
     * @return ArrayIterator
     */
    public function getLineStopsIterator() {
        return new ArrayIterator($this->get(self::LINE_STOPS));
    }

    /**
     * Returns element from 'line_stops' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getLineStopsAt($offset) {
        return $this->get(self::LINE_STOPS, $offset);
    }

    /**
     * Returns count of 'line_stops' list
     *
     * @return int
     */
    public function getLineStopsCount() {
        return $this->count(self::LINE_STOPS);
    }

    /**
     * Sets value of 'step_pano' property
     *
     * @param StepPano $value Property value
     *
     * @return null
     */
    public function setStepPano(StepPano $value) {
        return $this->set(self::STEP_PANO, $value);
    }

    /**
     * Returns value of 'step_pano' property
     *
     * @return StepPano
     */
    public function getStepPano() {
        return $this->get(self::STEP_PANO);
    }

    /**
     * Appends value to 'stops_pos' list
     *
     * @param StopsPos $value Value to append
     *
     * @return null
     */
    public function appendStopsPos(StopsPos $value) {
        return $this->append(self::STOPS_POS, $value);
    }

    /**
     * Clears 'stops_pos' list
     *
     * @return null
     */
    public function clearStopsPos() {
        return $this->clear(self::STOPS_POS);
    }

    /**
     * Returns 'stops_pos' list
     *
     * @return StopsPos[]
     */
    public function getStopsPos() {
        return $this->get(self::STOPS_POS);
    }

    /**
     * Returns 'stops_pos' iterator
     *
     * @return ArrayIterator
     */
    public function getStopsPosIterator() {
        return new ArrayIterator($this->get(self::STOPS_POS));
    }

    /**
     * Returns element from 'stops_pos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return StopsPos
     */
    public function getStopsPosAt($offset) {
        return $this->get(self::STOPS_POS, $offset);
    }

    /**
     * Returns count of 'stops_pos' list
     *
     * @return int
     */
    public function getStopsPosCount() {
        return $this->count(self::STOPS_POS);
    }
}
}

/**
 * Steps message
 */
if (!class_exists('Steps')) {
class Steps extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STEP = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STEP => array(
            'name' => 'step',
            'repeated' => true,
            'type' => 'Step',
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
        $this->values[self::STEP] = array();
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
     * Appends value to 'step' list
     *
     * @param Step $value Value to append
     *
     * @return null
     */
    public function appendStep(Step $value) {
        return $this->append(self::STEP, $value);
    }

    /**
     * Clears 'step' list
     *
     * @return null
     */
    public function clearStep() {
        return $this->clear(self::STEP);
    }

    /**
     * Returns 'step' list
     *
     * @return Step[]
     */
    public function getStep() {
        return $this->get(self::STEP);
    }

    /**
     * Returns 'step' iterator
     *
     * @return ArrayIterator
     */
    public function getStepIterator() {
        return new ArrayIterator($this->get(self::STEP));
    }

    /**
     * Returns element from 'step' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Step
     */
    public function getStepAt($offset) {
        return $this->get(self::STEP, $offset);
    }

    /**
     * Returns count of 'step' list
     *
     * @return int
     */
    public function getStepCount() {
        return $this->count(self::STEP);
    }
}
}

/**
 * StartPano message
 */
if (!class_exists('StartPano')) {
class StartPano extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PANO_LOCATION = 1;
    const PANO_ID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PANO_LOCATION => array(
            'name' => 'pano_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::PANO_ID => array(
            'name' => 'pano_id',
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
        $this->values[self::PANO_LOCATION] = array();
        $this->values[self::PANO_ID] = null;
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
     * Appends value to 'pano_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendPanoLocation($value) {
        return $this->append(self::PANO_LOCATION, $value);
    }

    /**
     * Clears 'pano_location' list
     *
     * @return null
     */
    public function clearPanoLocation() {
        return $this->clear(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' list
     *
     * @return int[]
     */
    public function getPanoLocation() {
        return $this->get(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' iterator
     *
     * @return ArrayIterator
     */
    public function getPanoLocationIterator() {
        return new ArrayIterator($this->get(self::PANO_LOCATION));
    }

    /**
     * Returns element from 'pano_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getPanoLocationAt($offset) {
        return $this->get(self::PANO_LOCATION, $offset);
    }

    /**
     * Returns count of 'pano_location' list
     *
     * @return int
     */
    public function getPanoLocationCount() {
        return $this->count(self::PANO_LOCATION);
    }

    /**
     * Sets value of 'pano_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPanoId($value) {
        return $this->set(self::PANO_ID, $value);
    }

    /**
     * Returns value of 'pano_id' property
     *
     * @return string
     */
    public function getPanoId() {
        return $this->get(self::PANO_ID);
    }
}
}

/**
 * EndPano message
 */
if (!class_exists('EndPano')) {
class EndPano extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PANO_LOCATION = 1;
    const PANO_ID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PANO_LOCATION => array(
            'name' => 'pano_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::PANO_ID => array(
            'name' => 'pano_id',
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
        $this->values[self::PANO_LOCATION] = array();
        $this->values[self::PANO_ID] = null;
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
     * Appends value to 'pano_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendPanoLocation($value) {
        return $this->append(self::PANO_LOCATION, $value);
    }

    /**
     * Clears 'pano_location' list
     *
     * @return null
     */
    public function clearPanoLocation() {
        return $this->clear(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' list
     *
     * @return int[]
     */
    public function getPanoLocation() {
        return $this->get(self::PANO_LOCATION);
    }

    /**
     * Returns 'pano_location' iterator
     *
     * @return ArrayIterator
     */
    public function getPanoLocationIterator() {
        return new ArrayIterator($this->get(self::PANO_LOCATION));
    }

    /**
     * Returns element from 'pano_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getPanoLocationAt($offset) {
        return $this->get(self::PANO_LOCATION, $offset);
    }

    /**
     * Returns count of 'pano_location' list
     *
     * @return int
     */
    public function getPanoLocationCount() {
        return $this->count(self::PANO_LOCATION);
    }

    /**
     * Sets value of 'pano_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPanoId($value) {
        return $this->set(self::PANO_ID, $value);
    }

    /**
     * Returns value of 'pano_id' property
     *
     * @return string
     */
    public function getPanoId() {
        return $this->get(self::PANO_ID);
    }
}
}

/**
 * LinePrice message
 */
if (!class_exists('LinePrice')) {
class LinePrice extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LINE_TYPE = 1;
    const LINE_PRICE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINE_TYPE => array(
            'name' => 'line_type',
            'required' => false,
            'type' => 5,
        ),
        self::LINE_PRICE => array(
            'name' => 'line_price',
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
        $this->values[self::LINE_TYPE] = null;
        $this->values[self::LINE_PRICE] = null;
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
     * Sets value of 'line_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLineType($value) {
        return $this->set(self::LINE_TYPE, $value);
    }

    /**
     * Returns value of 'line_type' property
     *
     * @return int
     */
    public function getLineType() {
        return $this->get(self::LINE_TYPE);
    }

    /**
     * Sets value of 'line_price' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLinePrice($value) {
        return $this->set(self::LINE_PRICE, $value);
    }

    /**
     * Returns value of 'line_price' property
     *
     * @return float
     */
    public function getLinePrice() {
        return $this->get(self::LINE_PRICE);
    }
}
}

/**
 * Legs message
 */
if (!class_exists('Legs')) {
class Legs extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STEPS = 11;
    const DISTANCE = 1;
    const DURATION = 2;
    const END_LOCATION = 3;
    const START_LOCATION = 4;
    const TIP = 5;
    const TIP_TEXT = 6;
    const TIP_BACKGROUND = 7;
    const ARRIVE_TIME = 8;
    const START_ADDRESS = 12;
    const END_ADDRESS = 13;
    const START_TIME = 14;
    const END_TIME = 15;
    const PRICE = 16;
    const DISCOUNT = 17;
    const INSTRUCTIONS = 18;
    const SEND_LOCATION = 19;
    const SSTART_LOCATION = 20;
    const TIP_LABEL = 21;
    const TIP_LABEL_BACKGROUND = 22;
    const TIP_RTBUS = 23;
    const RTBUS_UPDATE_TIME = 24;
    const TRAFFIC_TYPE = 25;
    const START_PANO = 26;
    const END_PANO = 27;
    const LINE_PRICE = 28;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STEPS => array(
            'name' => 'steps',
            'repeated' => true,
            'type' => 'Steps',
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::END_LOCATION => array(
            'name' => 'end_location',
            'required' => false,
            'type' => 7,
        ),
        self::START_LOCATION => array(
            'name' => 'start_location',
            'required' => false,
            'type' => 7,
        ),
        self::TIP => array(
            'name' => 'tip',
            'required' => false,
            'type' => 5,
        ),
        self::TIP_TEXT => array(
            'name' => 'tip_text',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_BACKGROUND => array(
            'name' => 'tip_background',
            'required' => false,
            'type' => 7,
        ),
        self::ARRIVE_TIME => array(
            'name' => 'arrive_time',
            'required' => false,
            'type' => 7,
        ),
        self::START_ADDRESS => array(
            'name' => 'start_address',
            'required' => false,
            'type' => 7,
        ),
        self::END_ADDRESS => array(
            'name' => 'end_address',
            'required' => false,
            'type' => 7,
        ),
        self::START_TIME => array(
            'name' => 'start_time',
            'required' => false,
            'type' => 7,
        ),
        self::END_TIME => array(
            'name' => 'end_time',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT => array(
            'name' => 'discount',
            'required' => false,
            'type' => 7,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::TIP_LABEL => array(
            'name' => 'tip_label',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_LABEL_BACKGROUND => array(
            'name' => 'tip_label_background',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_RTBUS => array(
            'name' => 'tip_rtbus',
            'required' => false,
            'type' => 7,
        ),
        self::RTBUS_UPDATE_TIME => array(
            'name' => 'rtbus_update_time',
            'required' => false,
            'type' => 5,
        ),
        self::TRAFFIC_TYPE => array(
            'name' => 'traffic_type',
            'required' => false,
            'type' => 5,
        ),
        self::START_PANO => array(
            'name' => 'start_pano',
            'required' => false,
            'type' => 'StartPano',
        ),
        self::END_PANO => array(
            'name' => 'end_pano',
            'required' => false,
            'type' => 'EndPano',
        ),
        self::LINE_PRICE => array(
            'name' => 'line_price',
            'repeated' => true,
            'type' => 'LinePrice',
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
        $this->values[self::STEPS] = array();
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::END_LOCATION] = null;
        $this->values[self::START_LOCATION] = null;
        $this->values[self::TIP] = null;
        $this->values[self::TIP_TEXT] = null;
        $this->values[self::TIP_BACKGROUND] = null;
        $this->values[self::ARRIVE_TIME] = null;
        $this->values[self::START_ADDRESS] = null;
        $this->values[self::END_ADDRESS] = null;
        $this->values[self::START_TIME] = null;
        $this->values[self::END_TIME] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::DISCOUNT] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::TIP_LABEL] = null;
        $this->values[self::TIP_LABEL_BACKGROUND] = null;
        $this->values[self::TIP_RTBUS] = null;
        $this->values[self::RTBUS_UPDATE_TIME] = null;
        $this->values[self::TRAFFIC_TYPE] = null;
        $this->values[self::START_PANO] = null;
        $this->values[self::END_PANO] = null;
        $this->values[self::LINE_PRICE] = array();
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
     * Appends value to 'steps' list
     *
     * @param Steps $value Value to append
     *
     * @return null
     */
    public function appendSteps(Steps $value) {
        return $this->append(self::STEPS, $value);
    }

    /**
     * Clears 'steps' list
     *
     * @return null
     */
    public function clearSteps() {
        return $this->clear(self::STEPS);
    }

    /**
     * Returns 'steps' list
     *
     * @return Steps[]
     */
    public function getSteps() {
        return $this->get(self::STEPS);
    }

    /**
     * Returns 'steps' iterator
     *
     * @return ArrayIterator
     */
    public function getStepsIterator() {
        return new ArrayIterator($this->get(self::STEPS));
    }

    /**
     * Returns element from 'steps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Steps
     */
    public function getStepsAt($offset) {
        return $this->get(self::STEPS, $offset);
    }

    /**
     * Returns count of 'steps' list
     *
     * @return int
     */
    public function getStepsCount() {
        return $this->count(self::STEPS);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'end_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndLocation($value) {
        return $this->set(self::END_LOCATION, $value);
    }

    /**
     * Returns value of 'end_location' property
     *
     * @return string
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Sets value of 'start_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartLocation($value) {
        return $this->set(self::START_LOCATION, $value);
    }

    /**
     * Returns value of 'start_location' property
     *
     * @return string
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
    }

    /**
     * Sets value of 'tip' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTip($value) {
        return $this->set(self::TIP, $value);
    }

    /**
     * Returns value of 'tip' property
     *
     * @return int
     */
    public function getTip() {
        return $this->get(self::TIP);
    }

    /**
     * Sets value of 'tip_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipText($value) {
        return $this->set(self::TIP_TEXT, $value);
    }

    /**
     * Returns value of 'tip_text' property
     *
     * @return string
     */
    public function getTipText() {
        return $this->get(self::TIP_TEXT);
    }

    /**
     * Sets value of 'tip_background' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipBackground($value) {
        return $this->set(self::TIP_BACKGROUND, $value);
    }

    /**
     * Returns value of 'tip_background' property
     *
     * @return string
     */
    public function getTipBackground() {
        return $this->get(self::TIP_BACKGROUND);
    }

    /**
     * Sets value of 'arrive_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setArriveTime($value) {
        return $this->set(self::ARRIVE_TIME, $value);
    }

    /**
     * Returns value of 'arrive_time' property
     *
     * @return string
     */
    public function getArriveTime() {
        return $this->get(self::ARRIVE_TIME);
    }

    /**
     * Sets value of 'start_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartAddress($value) {
        return $this->set(self::START_ADDRESS, $value);
    }

    /**
     * Returns value of 'start_address' property
     *
     * @return string
     */
    public function getStartAddress() {
        return $this->get(self::START_ADDRESS);
    }

    /**
     * Sets value of 'end_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndAddress($value) {
        return $this->set(self::END_ADDRESS, $value);
    }

    /**
     * Returns value of 'end_address' property
     *
     * @return string
     */
    public function getEndAddress() {
        return $this->get(self::END_ADDRESS);
    }

    /**
     * Sets value of 'start_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::START_TIME, $value);
    }

    /**
     * Returns value of 'start_time' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::START_TIME);
    }

    /**
     * Sets value of 'end_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndTime($value) {
        return $this->set(self::END_TIME, $value);
    }

    /**
     * Returns value of 'end_time' property
     *
     * @return string
     */
    public function getEndTime() {
        return $this->get(self::END_TIME);
    }

    /**
     * Sets value of 'price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrice($value) {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return string
     */
    public function getPrice() {
        return $this->get(self::PRICE);
    }

    /**
     * Sets value of 'discount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscount($value) {
        return $this->set(self::DISCOUNT, $value);
    }

    /**
     * Returns value of 'discount' property
     *
     * @return string
     */
    public function getDiscount() {
        return $this->get(self::DISCOUNT);
    }

    /**
     * Sets value of 'instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInstructions($value) {
        return $this->set(self::INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'instructions' property
     *
     * @return string
     */
    public function getInstructions() {
        return $this->get(self::INSTRUCTIONS);
    }

    /**
     * Appends value to 'send_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSendLocation($value) {
        return $this->append(self::SEND_LOCATION, $value);
    }

    /**
     * Clears 'send_location' list
     *
     * @return null
     */
    public function clearSendLocation() {
        return $this->clear(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' list
     *
     * @return int[]
     */
    public function getSendLocation() {
        return $this->get(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSendLocationIterator() {
        return new ArrayIterator($this->get(self::SEND_LOCATION));
    }

    /**
     * Returns element from 'send_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSendLocationAt($offset) {
        return $this->get(self::SEND_LOCATION, $offset);
    }

    /**
     * Returns count of 'send_location' list
     *
     * @return int
     */
    public function getSendLocationCount() {
        return $this->count(self::SEND_LOCATION);
    }

    /**
     * Appends value to 'sstart_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSstartLocation($value) {
        return $this->append(self::SSTART_LOCATION, $value);
    }

    /**
     * Clears 'sstart_location' list
     *
     * @return null
     */
    public function clearSstartLocation() {
        return $this->clear(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' list
     *
     * @return int[]
     */
    public function getSstartLocation() {
        return $this->get(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSstartLocationIterator() {
        return new ArrayIterator($this->get(self::SSTART_LOCATION));
    }

    /**
     * Returns element from 'sstart_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSstartLocationAt($offset) {
        return $this->get(self::SSTART_LOCATION, $offset);
    }

    /**
     * Returns count of 'sstart_location' list
     *
     * @return int
     */
    public function getSstartLocationCount() {
        return $this->count(self::SSTART_LOCATION);
    }

    /**
     * Sets value of 'tip_label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipLabel($value) {
        return $this->set(self::TIP_LABEL, $value);
    }

    /**
     * Returns value of 'tip_label' property
     *
     * @return string
     */
    public function getTipLabel() {
        return $this->get(self::TIP_LABEL);
    }

    /**
     * Sets value of 'tip_label_background' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipLabelBackground($value) {
        return $this->set(self::TIP_LABEL_BACKGROUND, $value);
    }

    /**
     * Returns value of 'tip_label_background' property
     *
     * @return string
     */
    public function getTipLabelBackground() {
        return $this->get(self::TIP_LABEL_BACKGROUND);
    }

    /**
     * Sets value of 'tip_rtbus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTipRtbus($value) {
        return $this->set(self::TIP_RTBUS, $value);
    }

    /**
     * Returns value of 'tip_rtbus' property
     *
     * @return string
     */
    public function getTipRtbus() {
        return $this->get(self::TIP_RTBUS);
    }

    /**
     * Sets value of 'rtbus_update_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRtbusUpdateTime($value) {
        return $this->set(self::RTBUS_UPDATE_TIME, $value);
    }

    /**
     * Returns value of 'rtbus_update_time' property
     *
     * @return int
     */
    public function getRtbusUpdateTime() {
        return $this->get(self::RTBUS_UPDATE_TIME);
    }

    /**
     * Sets value of 'traffic_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTrafficType($value) {
        return $this->set(self::TRAFFIC_TYPE, $value);
    }

    /**
     * Returns value of 'traffic_type' property
     *
     * @return int
     */
    public function getTrafficType() {
        return $this->get(self::TRAFFIC_TYPE);
    }

    /**
     * Sets value of 'start_pano' property
     *
     * @param StartPano $value Property value
     *
     * @return null
     */
    public function setStartPano(StartPano $value) {
        return $this->set(self::START_PANO, $value);
    }

    /**
     * Returns value of 'start_pano' property
     *
     * @return StartPano
     */
    public function getStartPano() {
        return $this->get(self::START_PANO);
    }

    /**
     * Sets value of 'end_pano' property
     *
     * @param EndPano $value Property value
     *
     * @return null
     */
    public function setEndPano(EndPano $value) {
        return $this->set(self::END_PANO, $value);
    }

    /**
     * Returns value of 'end_pano' property
     *
     * @return EndPano
     */
    public function getEndPano() {
        return $this->get(self::END_PANO);
    }

    /**
     * Appends value to 'line_price' list
     *
     * @param LinePrice $value Value to append
     *
     * @return null
     */
    public function appendLinePrice(LinePrice $value) {
        return $this->append(self::LINE_PRICE, $value);
    }

    /**
     * Clears 'line_price' list
     *
     * @return null
     */
    public function clearLinePrice() {
        return $this->clear(self::LINE_PRICE);
    }

    /**
     * Returns 'line_price' list
     *
     * @return LinePrice[]
     */
    public function getLinePrice() {
        return $this->get(self::LINE_PRICE);
    }

    /**
     * Returns 'line_price' iterator
     *
     * @return ArrayIterator
     */
    public function getLinePriceIterator() {
        return new ArrayIterator($this->get(self::LINE_PRICE));
    }

    /**
     * Returns element from 'line_price' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LinePrice
     */
    public function getLinePriceAt($offset) {
        return $this->get(self::LINE_PRICE, $offset);
    }

    /**
     * Returns count of 'line_price' list
     *
     * @return int
     */
    public function getLinePriceCount() {
        return $this->count(self::LINE_PRICE);
    }
}
}

/**
 * Routes message
 */
if (!class_exists('Routes')) {
class Routes extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LEGS = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LEGS => array(
            'name' => 'legs',
            'repeated' => true,
            'type' => 'Legs',
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
        $this->values[self::LEGS] = array();
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
     * Appends value to 'legs' list
     *
     * @param Legs $value Value to append
     *
     * @return null
     */
    public function appendLegs(Legs $value) {
        return $this->append(self::LEGS, $value);
    }

    /**
     * Clears 'legs' list
     *
     * @return null
     */
    public function clearLegs() {
        return $this->clear(self::LEGS);
    }

    /**
     * Returns 'legs' list
     *
     * @return Legs[]
     */
    public function getLegs() {
        return $this->get(self::LEGS);
    }

    /**
     * Returns 'legs' iterator
     *
     * @return ArrayIterator
     */
    public function getLegsIterator() {
        return new ArrayIterator($this->get(self::LEGS));
    }

    /**
     * Returns element from 'legs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Legs
     */
    public function getLegsAt($offset) {
        return $this->get(self::LEGS, $offset);
    }

    /**
     * Returns count of 'legs' list
     *
     * @return int
     */
    public function getLegsCount() {
        return $this->count(self::LEGS);
    }
}
}

/**
 * StationList message
 */
if (!class_exists('StationList')) {
class StationList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STATION_NAME = 1;
    const STATION_UID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STATION_NAME => array(
            'name' => 'station_name',
            'required' => false,
            'type' => 7,
        ),
        self::STATION_UID => array(
            'name' => 'station_uid',
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
        $this->values[self::STATION_NAME] = null;
        $this->values[self::STATION_UID] = null;
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
     * Sets value of 'station_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStationName($value) {
        return $this->set(self::STATION_NAME, $value);
    }

    /**
     * Returns value of 'station_name' property
     *
     * @return string
     */
    public function getStationName() {
        return $this->get(self::STATION_NAME);
    }

    /**
     * Sets value of 'station_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStationUid($value) {
        return $this->set(self::STATION_UID, $value);
    }

    /**
     * Returns value of 'station_uid' property
     *
     * @return string
     */
    public function getStationUid() {
        return $this->get(self::STATION_UID);
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
    const PT = 1;
    const WD = 2;
    const UID = 3;
    const SPT = 4;
    const RGC_NAME = 5;
    const STATION_LIST = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::SPT => array(
            'name' => 'spt',
            'repeated' => true,
            'type' => 6,
        ),
        self::RGC_NAME => array(
            'name' => 'rgc_name',
            'required' => false,
            'type' => 7,
        ),
        self::STATION_LIST => array(
            'name' => 'station_list',
            'repeated' => true,
            'type' => 'StationList',
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
        $this->values[self::PT] = null;
        $this->values[self::WD] = null;
        $this->values[self::UID] = null;
        $this->values[self::SPT] = array();
        $this->values[self::RGC_NAME] = null;
        $this->values[self::STATION_LIST] = array();
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
    }

    /**
     * Sets value of 'wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWd($value) {
        return $this->set(self::WD, $value);
    }

    /**
     * Returns value of 'wd' property
     *
     * @return string
     */
    public function getWd() {
        return $this->get(self::WD);
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
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }

    /**
     * Sets value of 'rgc_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRgcName($value) {
        return $this->set(self::RGC_NAME, $value);
    }

    /**
     * Returns value of 'rgc_name' property
     *
     * @return string
     */
    public function getRgcName() {
        return $this->get(self::RGC_NAME);
    }

    /**
     * Appends value to 'station_list' list
     *
     * @param StationList $value Value to append
     *
     * @return null
     */
    public function appendStationList(StationList $value) {
        return $this->append(self::STATION_LIST, $value);
    }

    /**
     * Clears 'station_list' list
     *
     * @return null
     */
    public function clearStationList() {
        return $this->clear(self::STATION_LIST);
    }

    /**
     * Returns 'station_list' list
     *
     * @return StationList[]
     */
    public function getStationList() {
        return $this->get(self::STATION_LIST);
    }

    /**
     * Returns 'station_list' iterator
     *
     * @return ArrayIterator
     */
    public function getStationListIterator() {
        return new ArrayIterator($this->get(self::STATION_LIST));
    }

    /**
     * Returns element from 'station_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return StationList
     */
    public function getStationListAt($offset) {
        return $this->get(self::STATION_LIST, $offset);
    }

    /**
     * Returns count of 'station_list' list
     *
     * @return int
     */
    public function getStationListCount() {
        return $this->count(self::STATION_LIST);
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
    const PT = 1;
    const WD = 2;
    const UID = 3;
    const SPT = 4;
    const RGC_NAME = 5;
    const COUNTY_ID = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::SPT => array(
            'name' => 'spt',
            'repeated' => true,
            'type' => 6,
        ),
        self::RGC_NAME => array(
            'name' => 'rgc_name',
            'required' => false,
            'type' => 7,
        ),
        self::COUNTY_ID => array(
            'name' => 'county_id',
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
        $this->values[self::PT] = null;
        $this->values[self::WD] = null;
        $this->values[self::UID] = null;
        $this->values[self::SPT] = array();
        $this->values[self::RGC_NAME] = null;
        $this->values[self::COUNTY_ID] = null;
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
    }

    /**
     * Sets value of 'wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWd($value) {
        return $this->set(self::WD, $value);
    }

    /**
     * Returns value of 'wd' property
     *
     * @return string
     */
    public function getWd() {
        return $this->get(self::WD);
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
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }

    /**
     * Sets value of 'rgc_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRgcName($value) {
        return $this->set(self::RGC_NAME, $value);
    }

    /**
     * Returns value of 'rgc_name' property
     *
     * @return string
     */
    public function getRgcName() {
        return $this->get(self::RGC_NAME);
    }

    /**
     * Sets value of 'county_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCountyId($value) {
        return $this->set(self::COUNTY_ID, $value);
    }

    /**
     * Returns value of 'county_id' property
     *
     * @return int
     */
    public function getCountyId() {
        return $this->get(self::COUNTY_ID);
    }
}
}

/**
 * DataProvider message
 */
if (!class_exists('DataProvider')) {
class DataProvider extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const TEL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::TEL => array(
            'name' => 'tel',
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
        $this->values[self::NAME] = null;
        $this->values[self::TEL] = null;
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
     * Sets value of 'tel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTel($value) {
        return $this->set(self::TEL, $value);
    }

    /**
     * Returns value of 'tel' property
     *
     * @return string
     */
    public function getTel() {
        return $this->get(self::TEL);
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
    const TOTAL = 1;
    const EXPTIME = 2;
    const SY = 3;
    const START = 4;
    const END = 5;
    const CSY = 6;
    const CTY = 7;
    const INTER_CITY = 8;
    const PN = 9;
    const RN = 10;
    const FY = 11;
    const START_TIMES = 12;
    const IC_START = 13;
    const DATA_PROVIDER = 14;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::EXPTIME => array(
            'name' => 'exptime',
            'required' => false,
            'type' => 7,
        ),
        self::SY => array(
            'name' => 'sy',
            'required' => false,
            'type' => 5,
        ),
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => 'Start',
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => 'End',
        ),
        self::CSY => array(
            'name' => 'csy',
            'required' => false,
            'type' => 5,
        ),
        self::CTY => array(
            'name' => 'cty',
            'required' => false,
            'type' => 5,
        ),
        self::INTER_CITY => array(
            'name' => 'inter_city',
            'required' => false,
            'type' => 5,
        ),
        self::PN => array(
            'name' => 'pn',
            'required' => false,
            'type' => 5,
        ),
        self::RN => array(
            'name' => 'rn',
            'required' => false,
            'type' => 5,
        ),
        self::FY => array(
            'name' => 'fy',
            'required' => false,
            'type' => 5,
        ),
        self::START_TIMES => array(
            'name' => 'start_times',
            'repeated' => true,
            'type' => 7,
        ),
        self::IC_START => array(
            'name' => 'ic_start',
            'required' => false,
            'type' => 7,
        ),
        self::DATA_PROVIDER => array(
            'name' => 'data_provider',
            'repeated' => true,
            'type' => 'DataProvider',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::EXPTIME] = null;
        $this->values[self::SY] = null;
        $this->values[self::START] = null;
        $this->values[self::END] = null;
        $this->values[self::CSY] = null;
        $this->values[self::CTY] = null;
        $this->values[self::INTER_CITY] = null;
        $this->values[self::PN] = null;
        $this->values[self::RN] = null;
        $this->values[self::FY] = null;
        $this->values[self::START_TIMES] = array();
        $this->values[self::IC_START] = null;
        $this->values[self::DATA_PROVIDER] = array();
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
     * Sets value of 'total' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotal($value) {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return int
     */
    public function getTotal() {
        return $this->get(self::TOTAL);
    }

    /**
     * Sets value of 'exptime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExptime($value) {
        return $this->set(self::EXPTIME, $value);
    }

    /**
     * Returns value of 'exptime' property
     *
     * @return string
     */
    public function getExptime() {
        return $this->get(self::EXPTIME);
    }

    /**
     * Sets value of 'sy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSy($value) {
        return $this->set(self::SY, $value);
    }

    /**
     * Returns value of 'sy' property
     *
     * @return int
     */
    public function getSy() {
        return $this->get(self::SY);
    }

    /**
     * Sets value of 'start' property
     *
     * @param Start $value Property value
     *
     * @return null
     */
    public function setStart(Start $value) {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return Start
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Sets value of 'end' property
     *
     * @param End $value Property value
     *
     * @return null
     */
    public function setEnd(End $value) {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return End
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Sets value of 'csy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCsy($value) {
        return $this->set(self::CSY, $value);
    }

    /**
     * Returns value of 'csy' property
     *
     * @return int
     */
    public function getCsy() {
        return $this->get(self::CSY);
    }

    /**
     * Sets value of 'cty' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCty($value) {
        return $this->set(self::CTY, $value);
    }

    /**
     * Returns value of 'cty' property
     *
     * @return int
     */
    public function getCty() {
        return $this->get(self::CTY);
    }

    /**
     * Sets value of 'inter_city' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInterCity($value) {
        return $this->set(self::INTER_CITY, $value);
    }

    /**
     * Returns value of 'inter_city' property
     *
     * @return int
     */
    public function getInterCity() {
        return $this->get(self::INTER_CITY);
    }

    /**
     * Sets value of 'pn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPn($value) {
        return $this->set(self::PN, $value);
    }

    /**
     * Returns value of 'pn' property
     *
     * @return int
     */
    public function getPn() {
        return $this->get(self::PN);
    }

    /**
     * Sets value of 'rn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRn($value) {
        return $this->set(self::RN, $value);
    }

    /**
     * Returns value of 'rn' property
     *
     * @return int
     */
    public function getRn() {
        return $this->get(self::RN);
    }

    /**
     * Sets value of 'fy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFy($value) {
        return $this->set(self::FY, $value);
    }

    /**
     * Returns value of 'fy' property
     *
     * @return int
     */
    public function getFy() {
        return $this->get(self::FY);
    }

    /**
     * Appends value to 'start_times' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStartTimes($value) {
        return $this->append(self::START_TIMES, $value);
    }

    /**
     * Clears 'start_times' list
     *
     * @return null
     */
    public function clearStartTimes() {
        return $this->clear(self::START_TIMES);
    }

    /**
     * Returns 'start_times' list
     *
     * @return string[]
     */
    public function getStartTimes() {
        return $this->get(self::START_TIMES);
    }

    /**
     * Returns 'start_times' iterator
     *
     * @return ArrayIterator
     */
    public function getStartTimesIterator() {
        return new ArrayIterator($this->get(self::START_TIMES));
    }

    /**
     * Returns element from 'start_times' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStartTimesAt($offset) {
        return $this->get(self::START_TIMES, $offset);
    }

    /**
     * Returns count of 'start_times' list
     *
     * @return int
     */
    public function getStartTimesCount() {
        return $this->count(self::START_TIMES);
    }

    /**
     * Sets value of 'ic_start' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcStart($value) {
        return $this->set(self::IC_START, $value);
    }

    /**
     * Returns value of 'ic_start' property
     *
     * @return string
     */
    public function getIcStart() {
        return $this->get(self::IC_START);
    }

    /**
     * Appends value to 'data_provider' list
     *
     * @param DataProvider $value Value to append
     *
     * @return null
     */
    public function appendDataProvider(DataProvider $value) {
        return $this->append(self::DATA_PROVIDER, $value);
    }

    /**
     * Clears 'data_provider' list
     *
     * @return null
     */
    public function clearDataProvider() {
        return $this->clear(self::DATA_PROVIDER);
    }

    /**
     * Returns 'data_provider' list
     *
     * @return DataProvider[]
     */
    public function getDataProvider() {
        return $this->get(self::DATA_PROVIDER);
    }

    /**
     * Returns 'data_provider' iterator
     *
     * @return ArrayIterator
     */
    public function getDataProviderIterator() {
        return new ArrayIterator($this->get(self::DATA_PROVIDER));
    }

    /**
     * Returns element from 'data_provider' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return DataProvider
     */
    public function getDataProviderAt($offset) {
        return $this->get(self::DATA_PROVIDER, $offset);
    }

    /**
     * Returns count of 'data_provider' list
     *
     * @return int
     */
    public function getDataProviderCount() {
        return $this->count(self::DATA_PROVIDER);
    }
}
}

/**
 * Button message
 */
if (!class_exists('Button')) {
class Button extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TEXT = 1;
    const PARAMS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => 7,
        ),
        self::PARAMS => array(
            'name' => 'params',
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
        $this->values[self::PARAMS] = null;
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
     * Sets value of 'params' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParams($value) {
        return $this->set(self::PARAMS, $value);
    }

    /**
     * Returns value of 'params' property
     *
     * @return string
     */
    public function getParams() {
        return $this->get(self::PARAMS);
    }
}
}

/**
 * Zhuanche message
 */
if (!class_exists('Zhuanche')) {
class Zhuanche extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const FEE_DESC = 1;
    const BUTTON = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::FEE_DESC => array(
            'name' => 'fee_desc',
            'required' => false,
            'type' => 7,
        ),
        self::BUTTON => array(
            'name' => 'button',
            'required' => false,
            'type' => 'Button',
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
        $this->values[self::FEE_DESC] = null;
        $this->values[self::BUTTON] = null;
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
     * Sets value of 'fee_desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFeeDesc($value) {
        return $this->set(self::FEE_DESC, $value);
    }

    /**
     * Returns value of 'fee_desc' property
     *
     * @return string
     */
    public function getFeeDesc() {
        return $this->get(self::FEE_DESC);
    }

    /**
     * Sets value of 'button' property
     *
     * @param Button $value Property value
     *
     * @return null
     */
    public function setButton(Button $value) {
        return $this->set(self::BUTTON, $value);
    }

    /**
     * Returns value of 'button' property
     *
     * @return Button
     */
    public function getButton() {
        return $this->get(self::BUTTON);
    }
}
}

/**
 * Bus message
 */
if (!class_exists('Bus')) {
class Bus extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TAXI = 1;
    const CURRENT_CITY = 2;
    const ROUTES = 3;
    const OPTION = 4;
    const ZHUANCHE = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TAXI => array(
            'name' => 'taxi',
            'required' => false,
            'type' => 'Taxi',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
        ),
        self::ROUTES => array(
            'name' => 'routes',
            'repeated' => true,
            'type' => 'Routes',
        ),
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::ZHUANCHE => array(
            'name' => 'zhuanche',
            'required' => false,
            'type' => 'Zhuanche',
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
        $this->values[self::TAXI] = null;
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::ROUTES] = array();
        $this->values[self::OPTION] = null;
        $this->values[self::ZHUANCHE] = null;
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
     * Sets value of 'taxi' property
     *
     * @param Taxi $value Property value
     *
     * @return null
     */
    public function setTaxi(Taxi $value) {
        return $this->set(self::TAXI, $value);
    }

    /**
     * Returns value of 'taxi' property
     *
     * @return Taxi
     */
    public function getTaxi() {
        return $this->get(self::TAXI);
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
     * Appends value to 'routes' list
     *
     * @param Routes $value Value to append
     *
     * @return null
     */
    public function appendRoutes(Routes $value) {
        return $this->append(self::ROUTES, $value);
    }

    /**
     * Clears 'routes' list
     *
     * @return null
     */
    public function clearRoutes() {
        return $this->clear(self::ROUTES);
    }

    /**
     * Returns 'routes' list
     *
     * @return Routes[]
     */
    public function getRoutes() {
        return $this->get(self::ROUTES);
    }

    /**
     * Returns 'routes' iterator
     *
     * @return ArrayIterator
     */
    public function getRoutesIterator() {
        return new ArrayIterator($this->get(self::ROUTES));
    }

    /**
     * Returns element from 'routes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Routes
     */
    public function getRoutesAt($offset) {
        return $this->get(self::ROUTES, $offset);
    }

    /**
     * Returns count of 'routes' list
     *
     * @return int
     */
    public function getRoutesCount() {
        return $this->count(self::ROUTES);
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
     * Sets value of 'zhuanche' property
     *
     * @param Zhuanche $value Property value
     *
     * @return null
     */
    public function setZhuanche(Zhuanche $value) {
        return $this->set(self::ZHUANCHE, $value);
    }

    /**
     * Returns value of 'zhuanche' property
     *
     * @return Zhuanche
     */
    public function getZhuanche() {
        return $this->get(self::ZHUANCHE);
    }
}
}
require_once 'currentcity.php';