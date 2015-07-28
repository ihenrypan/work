<?php
/**
 * Auto generated from map_shopmenu.proto.1 at 2015-06-23 14:48:49
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
    const ERROR_NO = 1;
    const ERROR_MSG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR_NO => array(
            'name' => 'error_no',
            'required' => false,
            'type' => 5,
        ),
        self::ERROR_MSG => array(
            'name' => 'error_msg',
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
        $this->values[self::ERROR_NO] = null;
        $this->values[self::ERROR_MSG] = null;
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
     * Sets value of 'error_no' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setErrorNo($value) {
        return $this->set(self::ERROR_NO, $value);
    }

    /**
     * Returns value of 'error_no' property
     *
     * @return int
     */
    public function getErrorNo() {
        return $this->get(self::ERROR_NO);
    }

    /**
     * Sets value of 'error_msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMsg($value) {
        return $this->set(self::ERROR_MSG, $value);
    }

    /**
     * Returns value of 'error_msg' property
     *
     * @return string
     */
    public function getErrorMsg() {
        return $this->get(self::ERROR_MSG);
    }
}
}

/**
 * BussinessHours message
 */
if (!class_exists('BussinessHours')) {
class BussinessHours extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const START = 1;
    const END = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => 7,
        ),
        self::END => array(
            'name' => 'end',
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
        $this->values[self::START] = null;
        $this->values[self::END] = null;
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
     * Sets value of 'start' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStart($value) {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return string
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Sets value of 'end' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEnd($value) {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return string
     */
    public function getEnd() {
        return $this->get(self::END);
    }
}
}

/**
 * Times message
 */
if (!class_exists('Times')) {
class Times extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const START_TIME = 1;
    const END_TIME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
        $this->values[self::START_TIME] = null;
        $this->values[self::END_TIME] = null;
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
}
}

/**
 * AvailableTimes message
 */
if (!class_exists('AvailableTimes')) {
class AvailableTimes extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INDEX = 1;
    const TIMES = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => 7,
        ),
        self::TIMES => array(
            'name' => 'times',
            'repeated' => true,
            'type' => 'Times',
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
        $this->values[self::INDEX] = null;
        $this->values[self::TIMES] = array();
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
     * Appends value to 'times' list
     *
     * @param Times $value Value to append
     *
     * @return null
     */
    public function appendTimes(Times $value) {
        return $this->append(self::TIMES, $value);
    }

    /**
     * Clears 'times' list
     *
     * @return null
     */
    public function clearTimes() {
        return $this->clear(self::TIMES);
    }

    /**
     * Returns 'times' list
     *
     * @return Times[]
     */
    public function getTimes() {
        return $this->get(self::TIMES);
    }

    /**
     * Returns 'times' iterator
     *
     * @return ArrayIterator
     */
    public function getTimesIterator() {
        return new ArrayIterator($this->get(self::TIMES));
    }

    /**
     * Returns element from 'times' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Times
     */
    public function getTimesAt($offset) {
        return $this->get(self::TIMES, $offset);
    }

    /**
     * Returns count of 'times' list
     *
     * @return int
     */
    public function getTimesCount() {
        return $this->count(self::TIMES);
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
    const ITEM_ID = 1;
    const NAME = 2;
    const CURRENT_PRICE = 3;
    const MIN_ORDER_NUMBER = 4;
    const PACKGE_BOX_PRICE = 5;
    const PACKGE_BOX_NUM = 6;
    const SALED_OUT = 7;
    const SALED = 8;
    const URL = 9;
    const DESCRIPTION = 10;
    const LEFT_NUM = 11;
    const ON_SALE = 12;
    const AVAILABLE_TIMES = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ITEM_ID => array(
            'name' => 'item_id',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::CURRENT_PRICE => array(
            'name' => 'current_price',
            'required' => false,
            'type' => 7,
        ),
        self::MIN_ORDER_NUMBER => array(
            'name' => 'min_order_number',
            'required' => false,
            'type' => 7,
        ),
        self::PACKGE_BOX_PRICE => array(
            'name' => 'packge_box_price',
            'required' => false,
            'type' => 7,
        ),
        self::PACKGE_BOX_NUM => array(
            'name' => 'packge_box_num',
            'required' => false,
            'type' => 7,
        ),
        self::SALED_OUT => array(
            'name' => 'saled_out',
            'required' => false,
            'type' => 7,
        ),
        self::SALED => array(
            'name' => 'saled',
            'required' => false,
            'type' => 5,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::LEFT_NUM => array(
            'name' => 'left_num',
            'required' => false,
            'type' => 5,
        ),
        self::ON_SALE => array(
            'name' => 'on_sale',
            'required' => false,
            'type' => 5,
        ),
        self::AVAILABLE_TIMES => array(
            'name' => 'available_times',
            'repeated' => true,
            'type' => 'AvailableTimes',
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
        $this->values[self::ITEM_ID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::CURRENT_PRICE] = null;
        $this->values[self::MIN_ORDER_NUMBER] = null;
        $this->values[self::PACKGE_BOX_PRICE] = null;
        $this->values[self::PACKGE_BOX_NUM] = null;
        $this->values[self::SALED_OUT] = null;
        $this->values[self::SALED] = null;
        $this->values[self::URL] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::LEFT_NUM] = null;
        $this->values[self::ON_SALE] = null;
        $this->values[self::AVAILABLE_TIMES] = array();
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
     * Sets value of 'item_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setItemId($value) {
        return $this->set(self::ITEM_ID, $value);
    }

    /**
     * Returns value of 'item_id' property
     *
     * @return string
     */
    public function getItemId() {
        return $this->get(self::ITEM_ID);
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
     * Sets value of 'current_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCurrentPrice($value) {
        return $this->set(self::CURRENT_PRICE, $value);
    }

    /**
     * Returns value of 'current_price' property
     *
     * @return string
     */
    public function getCurrentPrice() {
        return $this->get(self::CURRENT_PRICE);
    }

    /**
     * Sets value of 'min_order_number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMinOrderNumber($value) {
        return $this->set(self::MIN_ORDER_NUMBER, $value);
    }

    /**
     * Returns value of 'min_order_number' property
     *
     * @return string
     */
    public function getMinOrderNumber() {
        return $this->get(self::MIN_ORDER_NUMBER);
    }

    /**
     * Sets value of 'packge_box_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackgeBoxPrice($value) {
        return $this->set(self::PACKGE_BOX_PRICE, $value);
    }

    /**
     * Returns value of 'packge_box_price' property
     *
     * @return string
     */
    public function getPackgeBoxPrice() {
        return $this->get(self::PACKGE_BOX_PRICE);
    }

    /**
     * Sets value of 'packge_box_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackgeBoxNum($value) {
        return $this->set(self::PACKGE_BOX_NUM, $value);
    }

    /**
     * Returns value of 'packge_box_num' property
     *
     * @return string
     */
    public function getPackgeBoxNum() {
        return $this->get(self::PACKGE_BOX_NUM);
    }

    /**
     * Sets value of 'saled_out' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSaledOut($value) {
        return $this->set(self::SALED_OUT, $value);
    }

    /**
     * Returns value of 'saled_out' property
     *
     * @return string
     */
    public function getSaledOut() {
        return $this->get(self::SALED_OUT);
    }

    /**
     * Sets value of 'saled' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSaled($value) {
        return $this->set(self::SALED, $value);
    }

    /**
     * Returns value of 'saled' property
     *
     * @return int
     */
    public function getSaled() {
        return $this->get(self::SALED);
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

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value) {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription() {
        return $this->get(self::DESCRIPTION);
    }

    /**
     * Sets value of 'left_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLeftNum($value) {
        return $this->set(self::LEFT_NUM, $value);
    }

    /**
     * Returns value of 'left_num' property
     *
     * @return int
     */
    public function getLeftNum() {
        return $this->get(self::LEFT_NUM);
    }

    /**
     * Sets value of 'on_sale' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOnSale($value) {
        return $this->set(self::ON_SALE, $value);
    }

    /**
     * Returns value of 'on_sale' property
     *
     * @return int
     */
    public function getOnSale() {
        return $this->get(self::ON_SALE);
    }

    /**
     * Appends value to 'available_times' list
     *
     * @param AvailableTimes $value Value to append
     *
     * @return null
     */
    public function appendAvailableTimes(AvailableTimes $value) {
        return $this->append(self::AVAILABLE_TIMES, $value);
    }

    /**
     * Clears 'available_times' list
     *
     * @return null
     */
    public function clearAvailableTimes() {
        return $this->clear(self::AVAILABLE_TIMES);
    }

    /**
     * Returns 'available_times' list
     *
     * @return AvailableTimes[]
     */
    public function getAvailableTimes() {
        return $this->get(self::AVAILABLE_TIMES);
    }

    /**
     * Returns 'available_times' iterator
     *
     * @return ArrayIterator
     */
    public function getAvailableTimesIterator() {
        return new ArrayIterator($this->get(self::AVAILABLE_TIMES));
    }

    /**
     * Returns element from 'available_times' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return AvailableTimes
     */
    public function getAvailableTimesAt($offset) {
        return $this->get(self::AVAILABLE_TIMES, $offset);
    }

    /**
     * Returns count of 'available_times' list
     *
     * @return int
     */
    public function getAvailableTimesCount() {
        return $this->count(self::AVAILABLE_TIMES);
    }
}
}

/**
 * TakeoutMenu message
 */
if (!class_exists('TakeoutMenu')) {
class TakeoutMenu extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DATA = 1;
    const CATALOG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DATA => array(
            'name' => 'data',
            'repeated' => true,
            'type' => 'Data',
        ),
        self::CATALOG => array(
            'name' => 'catalog',
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
        $this->values[self::DATA] = array();
        $this->values[self::CATALOG] = null;
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
     * Appends value to 'data' list
     *
     * @param Data $value Value to append
     *
     * @return null
     */
    public function appendData(Data $value) {
        return $this->append(self::DATA, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData() {
        return $this->clear(self::DATA);
    }

    /**
     * Returns 'data' list
     *
     * @return Data[]
     */
    public function getData() {
        return $this->get(self::DATA);
    }

    /**
     * Returns 'data' iterator
     *
     * @return ArrayIterator
     */
    public function getDataIterator() {
        return new ArrayIterator($this->get(self::DATA));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Data
     */
    public function getDataAt($offset) {
        return $this->get(self::DATA, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount() {
        return $this->count(self::DATA);
    }

    /**
     * Sets value of 'catalog' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCatalog($value) {
        return $this->set(self::CATALOG, $value);
    }

    /**
     * Returns value of 'catalog' property
     *
     * @return string
     */
    public function getCatalog() {
        return $this->get(self::CATALOG);
    }
}
}

/**
 * CouponInfo message
 */
if (!class_exists('CouponInfo')) {
class CouponInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SUPPORT_COUPON = 1;
    const COUPON_MSG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SUPPORT_COUPON => array(
            'name' => 'support_coupon',
            'required' => false,
            'type' => 5,
        ),
        self::COUPON_MSG => array(
            'name' => 'coupon_msg',
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
        $this->values[self::SUPPORT_COUPON] = null;
        $this->values[self::COUPON_MSG] = null;
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
     * Sets value of 'support_coupon' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSupportCoupon($value) {
        return $this->set(self::SUPPORT_COUPON, $value);
    }

    /**
     * Returns value of 'support_coupon' property
     *
     * @return int
     */
    public function getSupportCoupon() {
        return $this->get(self::SUPPORT_COUPON);
    }

    /**
     * Sets value of 'coupon_msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponMsg($value) {
        return $this->set(self::COUPON_MSG, $value);
    }

    /**
     * Returns value of 'coupon_msg' property
     *
     * @return string
     */
    public function getCouponMsg() {
        return $this->get(self::COUPON_MSG);
    }
}
}

/**
 * SourceInfo message
 */
if (!class_exists('SourceInfo')) {
class SourceInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SOURCE_NAME = 1;
    const SOURCE_LOGO_URL = 2;
    const SOURCE_URL = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SOURCE_NAME => array(
            'name' => 'source_name',
            'required' => false,
            'type' => 7,
        ),
        self::SOURCE_LOGO_URL => array(
            'name' => 'source_logo_url',
            'required' => false,
            'type' => 7,
        ),
        self::SOURCE_URL => array(
            'name' => 'source_url',
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
        $this->values[self::SOURCE_NAME] = null;
        $this->values[self::SOURCE_LOGO_URL] = null;
        $this->values[self::SOURCE_URL] = null;
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
     * Sets value of 'source_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceName($value) {
        return $this->set(self::SOURCE_NAME, $value);
    }

    /**
     * Returns value of 'source_name' property
     *
     * @return string
     */
    public function getSourceName() {
        return $this->get(self::SOURCE_NAME);
    }

    /**
     * Sets value of 'source_logo_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceLogoUrl($value) {
        return $this->set(self::SOURCE_LOGO_URL, $value);
    }

    /**
     * Returns value of 'source_logo_url' property
     *
     * @return string
     */
    public function getSourceLogoUrl() {
        return $this->get(self::SOURCE_LOGO_URL);
    }

    /**
     * Sets value of 'source_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceUrl($value) {
        return $this->set(self::SOURCE_URL, $value);
    }

    /**
     * Returns value of 'source_url' property
     *
     * @return string
     */
    public function getSourceUrl() {
        return $this->get(self::SOURCE_URL);
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
    const BUSSINESS_HOURS = 4;
    const TAKEOUT_MENU = 8;
    const COUPON_INFO = 9;
    const RELEASE_ID = 1;
    const SHOP_NAME = 2;
    const BUSSINESS_STATUS = 3;
    const TAKEOUT_PRICE = 5;
    const TAKEOUT_COST = 6;
    const AVERAGE_TIME = 7;
    const SOURCE_INFO = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BUSSINESS_HOURS => array(
            'name' => 'bussiness_hours',
            'repeated' => true,
            'type' => 'BussinessHours',
        ),
        self::TAKEOUT_MENU => array(
            'name' => 'takeout_menu',
            'repeated' => true,
            'type' => 'TakeoutMenu',
        ),
        self::COUPON_INFO => array(
            'name' => 'coupon_info',
            'required' => false,
            'type' => 'CouponInfo',
        ),
        self::RELEASE_ID => array(
            'name' => 'release_id',
            'required' => false,
            'type' => 7,
        ),
        self::SHOP_NAME => array(
            'name' => 'shop_name',
            'required' => false,
            'type' => 7,
        ),
        self::BUSSINESS_STATUS => array(
            'name' => 'bussiness_status',
            'required' => false,
            'type' => 5,
        ),
        self::TAKEOUT_PRICE => array(
            'name' => 'takeout_price',
            'required' => false,
            'type' => 7,
        ),
        self::TAKEOUT_COST => array(
            'name' => 'takeout_cost',
            'required' => false,
            'type' => 7,
        ),
        self::AVERAGE_TIME => array(
            'name' => 'average_time',
            'required' => false,
            'type' => 7,
        ),
        self::SOURCE_INFO => array(
            'name' => 'source_info',
            'required' => false,
            'type' => 'SourceInfo',
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
        $this->values[self::BUSSINESS_HOURS] = array();
        $this->values[self::TAKEOUT_MENU] = array();
        $this->values[self::COUPON_INFO] = null;
        $this->values[self::RELEASE_ID] = null;
        $this->values[self::SHOP_NAME] = null;
        $this->values[self::BUSSINESS_STATUS] = null;
        $this->values[self::TAKEOUT_PRICE] = null;
        $this->values[self::TAKEOUT_COST] = null;
        $this->values[self::AVERAGE_TIME] = null;
        $this->values[self::SOURCE_INFO] = null;
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
     * Appends value to 'bussiness_hours' list
     *
     * @param BussinessHours $value Value to append
     *
     * @return null
     */
    public function appendBussinessHours(BussinessHours $value) {
        return $this->append(self::BUSSINESS_HOURS, $value);
    }

    /**
     * Clears 'bussiness_hours' list
     *
     * @return null
     */
    public function clearBussinessHours() {
        return $this->clear(self::BUSSINESS_HOURS);
    }

    /**
     * Returns 'bussiness_hours' list
     *
     * @return BussinessHours[]
     */
    public function getBussinessHours() {
        return $this->get(self::BUSSINESS_HOURS);
    }

    /**
     * Returns 'bussiness_hours' iterator
     *
     * @return ArrayIterator
     */
    public function getBussinessHoursIterator() {
        return new ArrayIterator($this->get(self::BUSSINESS_HOURS));
    }

    /**
     * Returns element from 'bussiness_hours' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return BussinessHours
     */
    public function getBussinessHoursAt($offset) {
        return $this->get(self::BUSSINESS_HOURS, $offset);
    }

    /**
     * Returns count of 'bussiness_hours' list
     *
     * @return int
     */
    public function getBussinessHoursCount() {
        return $this->count(self::BUSSINESS_HOURS);
    }

    /**
     * Appends value to 'takeout_menu' list
     *
     * @param TakeoutMenu $value Value to append
     *
     * @return null
     */
    public function appendTakeoutMenu(TakeoutMenu $value) {
        return $this->append(self::TAKEOUT_MENU, $value);
    }

    /**
     * Clears 'takeout_menu' list
     *
     * @return null
     */
    public function clearTakeoutMenu() {
        return $this->clear(self::TAKEOUT_MENU);
    }

    /**
     * Returns 'takeout_menu' list
     *
     * @return TakeoutMenu[]
     */
    public function getTakeoutMenu() {
        return $this->get(self::TAKEOUT_MENU);
    }

    /**
     * Returns 'takeout_menu' iterator
     *
     * @return ArrayIterator
     */
    public function getTakeoutMenuIterator() {
        return new ArrayIterator($this->get(self::TAKEOUT_MENU));
    }

    /**
     * Returns element from 'takeout_menu' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return TakeoutMenu
     */
    public function getTakeoutMenuAt($offset) {
        return $this->get(self::TAKEOUT_MENU, $offset);
    }

    /**
     * Returns count of 'takeout_menu' list
     *
     * @return int
     */
    public function getTakeoutMenuCount() {
        return $this->count(self::TAKEOUT_MENU);
    }

    /**
     * Sets value of 'coupon_info' property
     *
     * @param CouponInfo $value Property value
     *
     * @return null
     */
    public function setCouponInfo(CouponInfo $value) {
        return $this->set(self::COUPON_INFO, $value);
    }

    /**
     * Returns value of 'coupon_info' property
     *
     * @return CouponInfo
     */
    public function getCouponInfo() {
        return $this->get(self::COUPON_INFO);
    }

    /**
     * Sets value of 'release_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReleaseId($value) {
        return $this->set(self::RELEASE_ID, $value);
    }

    /**
     * Returns value of 'release_id' property
     *
     * @return string
     */
    public function getReleaseId() {
        return $this->get(self::RELEASE_ID);
    }

    /**
     * Sets value of 'shop_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShopName($value) {
        return $this->set(self::SHOP_NAME, $value);
    }

    /**
     * Returns value of 'shop_name' property
     *
     * @return string
     */
    public function getShopName() {
        return $this->get(self::SHOP_NAME);
    }

    /**
     * Sets value of 'bussiness_status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBussinessStatus($value) {
        return $this->set(self::BUSSINESS_STATUS, $value);
    }

    /**
     * Returns value of 'bussiness_status' property
     *
     * @return int
     */
    public function getBussinessStatus() {
        return $this->get(self::BUSSINESS_STATUS);
    }

    /**
     * Sets value of 'takeout_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTakeoutPrice($value) {
        return $this->set(self::TAKEOUT_PRICE, $value);
    }

    /**
     * Returns value of 'takeout_price' property
     *
     * @return string
     */
    public function getTakeoutPrice() {
        return $this->get(self::TAKEOUT_PRICE);
    }

    /**
     * Sets value of 'takeout_cost' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTakeoutCost($value) {
        return $this->set(self::TAKEOUT_COST, $value);
    }

    /**
     * Returns value of 'takeout_cost' property
     *
     * @return string
     */
    public function getTakeoutCost() {
        return $this->get(self::TAKEOUT_COST);
    }

    /**
     * Sets value of 'average_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAverageTime($value) {
        return $this->set(self::AVERAGE_TIME, $value);
    }

    /**
     * Returns value of 'average_time' property
     *
     * @return string
     */
    public function getAverageTime() {
        return $this->get(self::AVERAGE_TIME);
    }

    /**
     * Sets value of 'source_info' property
     *
     * @param SourceInfo $value Property value
     *
     * @return null
     */
    public function setSourceInfo(SourceInfo $value) {
        return $this->set(self::SOURCE_INFO, $value);
    }

    /**
     * Returns value of 'source_info' property
     *
     * @return SourceInfo
     */
    public function getSourceInfo() {
        return $this->get(self::SOURCE_INFO);
    }
}
}

/**
 * ShopMenu message
 */
if (!class_exists('ShopMenu')) {
class ShopMenu extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;

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
