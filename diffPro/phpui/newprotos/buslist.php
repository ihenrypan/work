<?php
/**
 * Auto generated from map_bus_list.proto.1 at 2015-06-23 14:46:51
 */

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
    const COUNT = 2;
    const TOTAL_BUSLINE_NUM = 3;
    const AREAID = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL_BUSLINE_NUM => array(
            'name' => 'total_busline_num',
            'required' => false,
            'type' => 5,
        ),
        self::AREAID => array(
            'name' => 'areaID',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::TOTAL_BUSLINE_NUM] = null;
        $this->values[self::AREAID] = null;
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
     * Sets value of 'count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCount($value) {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return int
     */
    public function getCount() {
        return $this->get(self::COUNT);
    }

    /**
     * Sets value of 'total_busline_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalBuslineNum($value) {
        return $this->set(self::TOTAL_BUSLINE_NUM, $value);
    }

    /**
     * Returns value of 'total_busline_num' property
     *
     * @return int
     */
    public function getTotalBuslineNum() {
        return $this->get(self::TOTAL_BUSLINE_NUM);
    }

    /**
     * Sets value of 'areaID' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAreaID($value) {
        return $this->set(self::AREAID, $value);
    }

    /**
     * Returns value of 'areaID' property
     *
     * @return int
     */
    public function getAreaID() {
        return $this->get(self::AREAID);
    }
}
}

/**
 * NearestStation message
 */
if (!class_exists('NearestStation')) {
class NearestStation extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const TIP_RTBUS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::TIP_RTBUS => array(
            'name' => 'tip_rtbus',
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
        $this->values[self::TIP_RTBUS] = null;
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
    const NAME = 1;
    const ISMONTICKET = 2;
    const MAXPRICE = 3;
    const KINDTYPE = 4;
    const STARTTIME = 5;
    const ENDTIME = 6;
    const TICKETPRICE = 7;
    const UID = 8;
    const PRIMARY_UID = 9;
    const HAS_RTBUS = 10;
    const RTBUS_UPDATE_TIME = 11;
    const NEAREST_STATION = 12;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::ISMONTICKET => array(
            'name' => 'isMonTicket',
            'required' => false,
            'type' => 5,
        ),
        self::MAXPRICE => array(
            'name' => 'maxPrice',
            'required' => false,
            'type' => 5,
        ),
        self::KINDTYPE => array(
            'name' => 'kindtype',
            'required' => false,
            'type' => 5,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => 7,
        ),
        self::ENDTIME => array(
            'name' => 'endTime',
            'required' => false,
            'type' => 7,
        ),
        self::TICKETPRICE => array(
            'name' => 'ticketPrice',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::PRIMARY_UID => array(
            'name' => 'primary_uid',
            'required' => false,
            'type' => 7,
        ),
        self::HAS_RTBUS => array(
            'name' => 'has_rtbus',
            'required' => false,
            'type' => 5,
        ),
        self::RTBUS_UPDATE_TIME => array(
            'name' => 'rtbus_update_time',
            'required' => false,
            'type' => 5,
        ),
        self::NEAREST_STATION => array(
            'name' => 'nearest_station',
            'required' => false,
            'type' => 'NearestStation',
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
        $this->values[self::ISMONTICKET] = null;
        $this->values[self::MAXPRICE] = null;
        $this->values[self::KINDTYPE] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::ENDTIME] = null;
        $this->values[self::TICKETPRICE] = null;
        $this->values[self::UID] = null;
        $this->values[self::PRIMARY_UID] = null;
        $this->values[self::HAS_RTBUS] = null;
        $this->values[self::RTBUS_UPDATE_TIME] = null;
        $this->values[self::NEAREST_STATION] = null;
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
     * Sets value of 'isMonTicket' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsMonTicket($value) {
        return $this->set(self::ISMONTICKET, $value);
    }

    /**
     * Returns value of 'isMonTicket' property
     *
     * @return int
     */
    public function getIsMonTicket() {
        return $this->get(self::ISMONTICKET);
    }

    /**
     * Sets value of 'maxPrice' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMaxPrice($value) {
        return $this->set(self::MAXPRICE, $value);
    }

    /**
     * Returns value of 'maxPrice' property
     *
     * @return int
     */
    public function getMaxPrice() {
        return $this->get(self::MAXPRICE);
    }

    /**
     * Sets value of 'kindtype' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setKindtype($value) {
        return $this->set(self::KINDTYPE, $value);
    }

    /**
     * Returns value of 'kindtype' property
     *
     * @return int
     */
    public function getKindtype() {
        return $this->get(self::KINDTYPE);
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::STARTTIME);
    }

    /**
     * Sets value of 'endTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndTime($value) {
        return $this->set(self::ENDTIME, $value);
    }

    /**
     * Returns value of 'endTime' property
     *
     * @return string
     */
    public function getEndTime() {
        return $this->get(self::ENDTIME);
    }

    /**
     * Sets value of 'ticketPrice' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTicketPrice($value) {
        return $this->set(self::TICKETPRICE, $value);
    }

    /**
     * Returns value of 'ticketPrice' property
     *
     * @return int
     */
    public function getTicketPrice() {
        return $this->get(self::TICKETPRICE);
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
     * Sets value of 'primary_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrimaryUid($value) {
        return $this->set(self::PRIMARY_UID, $value);
    }

    /**
     * Returns value of 'primary_uid' property
     *
     * @return string
     */
    public function getPrimaryUid() {
        return $this->get(self::PRIMARY_UID);
    }

    /**
     * Sets value of 'has_rtbus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHasRtbus($value) {
        return $this->set(self::HAS_RTBUS, $value);
    }

    /**
     * Returns value of 'has_rtbus' property
     *
     * @return int
     */
    public function getHasRtbus() {
        return $this->get(self::HAS_RTBUS);
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
     * Sets value of 'nearest_station' property
     *
     * @param NearestStation $value Property value
     *
     * @return null
     */
    public function setNearestStation(NearestStation $value) {
        return $this->set(self::NEAREST_STATION, $value);
    }

    /**
     * Returns value of 'nearest_station' property
     *
     * @return NearestStation
     */
    public function getNearestStation() {
        return $this->get(self::NEAREST_STATION);
    }
}
}

/**
 * BusList message
 */
if (!class_exists('BusList')) {
class BusList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 2;
    const CONTENT = 3;
    const ERROR = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
            'type' => 'Content',
        ),
        self::ERROR => array(
            'name' => 'error',
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
        $this->values[self::OPTION] = null;
        $this->values[self::CONTENT] = array();
        $this->values[self::ERROR] = null;
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
}
}
