<?php
/**
 * Auto generated from map_ictschedule.proto.1 at 2015-06-23 14:47:40
 */

/**
 * LineInfo message
 */
if (!class_exists('LineInfo')) {
class LineInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const FROM_TIME = 1;
    const PRICE = 2;
    const MILEAGE = 3;
    const GEO = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::FROM_TIME => array(
            'name' => 'from_time',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'repeated' => true,
            'type' => 1,
        ),
        self::MILEAGE => array(
            'name' => 'mileage',
            'required' => false,
            'type' => 5,
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
        $this->values[self::FROM_TIME] = null;
        $this->values[self::PRICE] = array();
        $this->values[self::MILEAGE] = null;
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
     * Sets value of 'from_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromTime($value) {
        return $this->set(self::FROM_TIME, $value);
    }

    /**
     * Returns value of 'from_time' property
     *
     * @return string
     */
    public function getFromTime() {
        return $this->get(self::FROM_TIME);
    }

    /**
     * Appends value to 'price' list
     *
     * @param float $value Value to append
     *
     * @return null
     */
    public function appendPrice($value) {
        return $this->append(self::PRICE, $value);
    }

    /**
     * Clears 'price' list
     *
     * @return null
     */
    public function clearPrice() {
        return $this->clear(self::PRICE);
    }

    /**
     * Returns 'price' list
     *
     * @return float[]
     */
    public function getPrice() {
        return $this->get(self::PRICE);
    }

    /**
     * Returns 'price' iterator
     *
     * @return ArrayIterator
     */
    public function getPriceIterator() {
        return new ArrayIterator($this->get(self::PRICE));
    }

    /**
     * Returns element from 'price' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return float
     */
    public function getPriceAt($offset) {
        return $this->get(self::PRICE, $offset);
    }

    /**
     * Returns count of 'price' list
     *
     * @return int
     */
    public function getPriceCount() {
        return $this->count(self::PRICE);
    }

    /**
     * Sets value of 'mileage' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMileage($value) {
        return $this->set(self::MILEAGE, $value);
    }

    /**
     * Returns value of 'mileage' property
     *
     * @return int
     */
    public function getMileage() {
        return $this->get(self::MILEAGE);
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
 * LineInfoList message
 */
if (!class_exists('LineInfoList')) {
class LineInfoList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LINE_INFO = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINE_INFO => array(
            'name' => 'line_info',
            'required' => false,
            'type' => 'LineInfo',
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
        $this->values[self::LINE_INFO] = null;
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
     * Sets value of 'line_info' property
     *
     * @param LineInfo $value Property value
     *
     * @return null
     */
    public function setLineInfo(LineInfo $value) {
        return $this->set(self::LINE_INFO, $value);
    }

    /**
     * Returns value of 'line_info' property
     *
     * @return LineInfo
     */
    public function getLineInfo() {
        return $this->get(self::LINE_INFO);
    }
}
}

/**
 * TicketOrderInfo message
 */
if (!class_exists('TicketOrderInfo')) {
class TicketOrderInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IS_SUPPORTED = 1;
    const URL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_SUPPORTED => array(
            'name' => 'is_supported',
            'required' => false,
            'type' => 5,
        ),
        self::URL => array(
            'name' => 'url',
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
        $this->values[self::IS_SUPPORTED] = null;
        $this->values[self::URL] = null;
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
     * Sets value of 'is_supported' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsSupported($value) {
        return $this->set(self::IS_SUPPORTED, $value);
    }

    /**
     * Returns value of 'is_supported' property
     *
     * @return int
     */
    public function getIsSupported() {
        return $this->get(self::IS_SUPPORTED);
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value) {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl() {
        return $this->get(self::URL);
    }
}
}

/**
 * IctSchedule message
 */
if (!class_exists('IctSchedule')) {
class IctSchedule extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const LINE_INFO_LIST = 2;
    const TICKET_ORDER_INFO = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::LINE_INFO_LIST => array(
            'name' => 'line_info_list',
            'repeated' => true,
            'type' => 'LineInfoList',
        ),
        self::TICKET_ORDER_INFO => array(
            'name' => 'ticket_order_info',
            'required' => false,
            'type' => 'TicketOrderInfo',
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
        $this->values[self::LINE_INFO_LIST] = array();
        $this->values[self::TICKET_ORDER_INFO] = null;
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
     * Appends value to 'line_info_list' list
     *
     * @param LineInfoList $value Value to append
     *
     * @return null
     */
    public function appendLineInfoList(LineInfoList $value) {
        return $this->append(self::LINE_INFO_LIST, $value);
    }

    /**
     * Clears 'line_info_list' list
     *
     * @return null
     */
    public function clearLineInfoList() {
        return $this->clear(self::LINE_INFO_LIST);
    }

    /**
     * Returns 'line_info_list' list
     *
     * @return LineInfoList[]
     */
    public function getLineInfoList() {
        return $this->get(self::LINE_INFO_LIST);
    }

    /**
     * Returns 'line_info_list' iterator
     *
     * @return ArrayIterator
     */
    public function getLineInfoListIterator() {
        return new ArrayIterator($this->get(self::LINE_INFO_LIST));
    }

    /**
     * Returns element from 'line_info_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LineInfoList
     */
    public function getLineInfoListAt($offset) {
        return $this->get(self::LINE_INFO_LIST, $offset);
    }

    /**
     * Returns count of 'line_info_list' list
     *
     * @return int
     */
    public function getLineInfoListCount() {
        return $this->count(self::LINE_INFO_LIST);
    }

    /**
     * Sets value of 'ticket_order_info' property
     *
     * @param TicketOrderInfo $value Property value
     *
     * @return null
     */
    public function setTicketOrderInfo(TicketOrderInfo $value) {
        return $this->set(self::TICKET_ORDER_INFO, $value);
    }

    /**
     * Returns value of 'ticket_order_info' property
     *
     * @return TicketOrderInfo
     */
    public function getTicketOrderInfo() {
        return $this->get(self::TICKET_ORDER_INFO);
    }
}
}
