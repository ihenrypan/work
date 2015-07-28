<?php
/**
 * Auto generated from map_shoplist.proto.1 at 2015-06-23 14:48:46
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
 * Filter message
 */
if (!class_exists('Filter')) {
class Filter extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SORTBY = 1;
    const WD = 2;
    const PROMOTION = 3;
    const TASTE = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SORTBY => array(
            'name' => 'sortby',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::PROMOTION => array(
            'name' => 'promotion',
            'required' => false,
            'type' => 7,
        ),
        self::TASTE => array(
            'name' => 'taste',
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
        $this->values[self::SORTBY] = null;
        $this->values[self::WD] = null;
        $this->values[self::PROMOTION] = null;
        $this->values[self::TASTE] = null;
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
     * Sets value of 'sortby' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSortby($value) {
        return $this->set(self::SORTBY, $value);
    }

    /**
     * Returns value of 'sortby' property
     *
     * @return string
     */
    public function getSortby() {
        return $this->get(self::SORTBY);
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
     * Sets value of 'promotion' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPromotion($value) {
        return $this->set(self::PROMOTION, $value);
    }

    /**
     * Returns value of 'promotion' property
     *
     * @return string
     */
    public function getPromotion() {
        return $this->get(self::PROMOTION);
    }

    /**
     * Sets value of 'taste' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTaste($value) {
        return $this->set(self::TASTE, $value);
    }

    /**
     * Returns value of 'taste' property
     *
     * @return string
     */
    public function getTaste() {
        return $this->get(self::TASTE);
    }
}
}

/**
 * DiscountInfo message
 */
if (!class_exists('DiscountInfo')) {
class DiscountInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IS_DISCOUNT_SEND = 1;
    const IS_DISCOUNT_FIRST_ORDER = 2;
    const DISCOUNT_SEND_SHOW = 3;
    const DISCOUNT_FIRST_ORDER_SHOW = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_DISCOUNT_SEND => array(
            'name' => 'is_discount_send',
            'required' => false,
            'type' => 5,
        ),
        self::IS_DISCOUNT_FIRST_ORDER => array(
            'name' => 'is_discount_first_order',
            'required' => false,
            'type' => 5,
        ),
        self::DISCOUNT_SEND_SHOW => array(
            'name' => 'discount_send_show',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT_FIRST_ORDER_SHOW => array(
            'name' => 'discount_first_order_show',
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
        $this->values[self::IS_DISCOUNT_SEND] = null;
        $this->values[self::IS_DISCOUNT_FIRST_ORDER] = null;
        $this->values[self::DISCOUNT_SEND_SHOW] = null;
        $this->values[self::DISCOUNT_FIRST_ORDER_SHOW] = null;
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
     * Sets value of 'is_discount_send' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsDiscountSend($value) {
        return $this->set(self::IS_DISCOUNT_SEND, $value);
    }

    /**
     * Returns value of 'is_discount_send' property
     *
     * @return int
     */
    public function getIsDiscountSend() {
        return $this->get(self::IS_DISCOUNT_SEND);
    }

    /**
     * Sets value of 'is_discount_first_order' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsDiscountFirstOrder($value) {
        return $this->set(self::IS_DISCOUNT_FIRST_ORDER, $value);
    }

    /**
     * Returns value of 'is_discount_first_order' property
     *
     * @return int
     */
    public function getIsDiscountFirstOrder() {
        return $this->get(self::IS_DISCOUNT_FIRST_ORDER);
    }

    /**
     * Sets value of 'discount_send_show' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscountSendShow($value) {
        return $this->set(self::DISCOUNT_SEND_SHOW, $value);
    }

    /**
     * Returns value of 'discount_send_show' property
     *
     * @return string
     */
    public function getDiscountSendShow() {
        return $this->get(self::DISCOUNT_SEND_SHOW);
    }

    /**
     * Sets value of 'discount_first_order_show' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscountFirstOrderShow($value) {
        return $this->set(self::DISCOUNT_FIRST_ORDER_SHOW, $value);
    }

    /**
     * Returns value of 'discount_first_order_show' property
     *
     * @return string
     */
    public function getDiscountFirstOrderShow() {
        return $this->get(self::DISCOUNT_FIRST_ORDER_SHOW);
    }
}
}

/**
 * InvoiceInfo message
 */
if (!class_exists('InvoiceInfo')) {
class InvoiceInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IS_SUPPORT_INVOICE = 1;
    const SUPPORT_INVOICE_SHOW = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_SUPPORT_INVOICE => array(
            'name' => 'is_support_invoice',
            'required' => false,
            'type' => 5,
        ),
        self::SUPPORT_INVOICE_SHOW => array(
            'name' => 'support_invoice_show',
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
        $this->values[self::IS_SUPPORT_INVOICE] = null;
        $this->values[self::SUPPORT_INVOICE_SHOW] = null;
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
     * Sets value of 'is_support_invoice' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsSupportInvoice($value) {
        return $this->set(self::IS_SUPPORT_INVOICE, $value);
    }

    /**
     * Returns value of 'is_support_invoice' property
     *
     * @return int
     */
    public function getIsSupportInvoice() {
        return $this->get(self::IS_SUPPORT_INVOICE);
    }

    /**
     * Sets value of 'support_invoice_show' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSupportInvoiceShow($value) {
        return $this->set(self::SUPPORT_INVOICE_SHOW, $value);
    }

    /**
     * Returns value of 'support_invoice_show' property
     *
     * @return string
     */
    public function getSupportInvoiceShow() {
        return $this->get(self::SUPPORT_INVOICE_SHOW);
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
 * ShopInfo message
 */
if (!class_exists('ShopInfo')) {
class ShopInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISCOUNT_INFO = 10;
    const INVOICE_INFO = 16;
    const COUPON_INFO = 17;
    const SHOP_NAME = 1;
    const LOGO_URL = 2;
    const TAKEOUT_PRICE = 3;
    const TAKEOUT_COST = 4;
    const DELIVERY_TIME = 5;
    const START_TIME = 6;
    const BUSSINESS_STATUS = 7;
    const RELEASE_ID = 8;
    const SALED = 9;
    const END_TIME = 11;
    const IS_ONLINE = 12;
    const DISTANCE = 13;
    const SHOP_ID = 14;
    const DELIVERY_REGIONS = 15;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DISCOUNT_INFO => array(
            'name' => 'discount_info',
            'required' => false,
            'type' => 'DiscountInfo',
        ),
        self::INVOICE_INFO => array(
            'name' => 'invoice_info',
            'required' => false,
            'type' => 'InvoiceInfo',
        ),
        self::COUPON_INFO => array(
            'name' => 'coupon_info',
            'required' => false,
            'type' => 'CouponInfo',
        ),
        self::SHOP_NAME => array(
            'name' => 'shop_name',
            'required' => false,
            'type' => 7,
        ),
        self::LOGO_URL => array(
            'name' => 'logo_url',
            'required' => false,
            'type' => 7,
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
        self::DELIVERY_TIME => array(
            'name' => 'delivery_time',
            'required' => false,
            'type' => 7,
        ),
        self::START_TIME => array(
            'name' => 'start_time',
            'required' => false,
            'type' => 7,
        ),
        self::BUSSINESS_STATUS => array(
            'name' => 'bussiness_status',
            'required' => false,
            'type' => 5,
        ),
        self::RELEASE_ID => array(
            'name' => 'release_id',
            'required' => false,
            'type' => 7,
        ),
        self::SALED => array(
            'name' => 'saled',
            'required' => false,
            'type' => 5,
        ),
        self::END_TIME => array(
            'name' => 'end_time',
            'required' => false,
            'type' => 7,
        ),
        self::IS_ONLINE => array(
            'name' => 'is_online',
            'required' => false,
            'type' => 5,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 7,
        ),
        self::SHOP_ID => array(
            'name' => 'shop_id',
            'required' => false,
            'type' => 7,
        ),
        self::DELIVERY_REGIONS => array(
            'name' => 'delivery_regions',
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
        $this->values[self::DISCOUNT_INFO] = null;
        $this->values[self::INVOICE_INFO] = null;
        $this->values[self::COUPON_INFO] = null;
        $this->values[self::SHOP_NAME] = null;
        $this->values[self::LOGO_URL] = null;
        $this->values[self::TAKEOUT_PRICE] = null;
        $this->values[self::TAKEOUT_COST] = null;
        $this->values[self::DELIVERY_TIME] = null;
        $this->values[self::START_TIME] = null;
        $this->values[self::BUSSINESS_STATUS] = null;
        $this->values[self::RELEASE_ID] = null;
        $this->values[self::SALED] = null;
        $this->values[self::END_TIME] = null;
        $this->values[self::IS_ONLINE] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::SHOP_ID] = null;
        $this->values[self::DELIVERY_REGIONS] = null;
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
     * Sets value of 'discount_info' property
     *
     * @param DiscountInfo $value Property value
     *
     * @return null
     */
    public function setDiscountInfo(DiscountInfo $value) {
        return $this->set(self::DISCOUNT_INFO, $value);
    }

    /**
     * Returns value of 'discount_info' property
     *
     * @return DiscountInfo
     */
    public function getDiscountInfo() {
        return $this->get(self::DISCOUNT_INFO);
    }

    /**
     * Sets value of 'invoice_info' property
     *
     * @param InvoiceInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceInfo(InvoiceInfo $value) {
        return $this->set(self::INVOICE_INFO, $value);
    }

    /**
     * Returns value of 'invoice_info' property
     *
     * @return InvoiceInfo
     */
    public function getInvoiceInfo() {
        return $this->get(self::INVOICE_INFO);
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
     * Sets value of 'logo_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLogoUrl($value) {
        return $this->set(self::LOGO_URL, $value);
    }

    /**
     * Returns value of 'logo_url' property
     *
     * @return string
     */
    public function getLogoUrl() {
        return $this->get(self::LOGO_URL);
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
     * Sets value of 'delivery_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeliveryTime($value) {
        return $this->set(self::DELIVERY_TIME, $value);
    }

    /**
     * Returns value of 'delivery_time' property
     *
     * @return string
     */
    public function getDeliveryTime() {
        return $this->get(self::DELIVERY_TIME);
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
     * Sets value of 'is_online' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsOnline($value) {
        return $this->set(self::IS_ONLINE, $value);
    }

    /**
     * Returns value of 'is_online' property
     *
     * @return int
     */
    public function getIsOnline() {
        return $this->get(self::IS_ONLINE);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return string
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'shop_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShopId($value) {
        return $this->set(self::SHOP_ID, $value);
    }

    /**
     * Returns value of 'shop_id' property
     *
     * @return string
     */
    public function getShopId() {
        return $this->get(self::SHOP_ID);
    }

    /**
     * Sets value of 'delivery_regions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeliveryRegions($value) {
        return $this->set(self::DELIVERY_REGIONS, $value);
    }

    /**
     * Returns value of 'delivery_regions' property
     *
     * @return string
     */
    public function getDeliveryRegions() {
        return $this->get(self::DELIVERY_REGIONS);
    }
}
}

/**
 * ShopList message
 */
if (!class_exists('ShopList')) {
class ShopList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const FILTER = 4;
    const DISCOUNT_INFO = 5;
    const INVOICE_INFO = 6;
    const SHOP_INFO = 2;
    const TOTAL = 3;
    const EXIST_ACTIVITY = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::FILTER => array(
            'name' => 'filter',
            'required' => false,
            'type' => 'Filter',
        ),
        self::DISCOUNT_INFO => array(
            'name' => 'discount_info',
            'required' => false,
            'type' => 'DiscountInfo',
        ),
        self::INVOICE_INFO => array(
            'name' => 'invoice_info',
            'required' => false,
            'type' => 'InvoiceInfo',
        ),
        self::SHOP_INFO => array(
            'name' => 'shop_info',
            'repeated' => true,
            'type' => 'ShopInfo',
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::EXIST_ACTIVITY => array(
            'name' => 'exist_activity',
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
        $this->values[self::OPTION] = null;
        $this->values[self::FILTER] = null;
        $this->values[self::DISCOUNT_INFO] = null;
        $this->values[self::INVOICE_INFO] = null;
        $this->values[self::SHOP_INFO] = array();
        $this->values[self::TOTAL] = null;
        $this->values[self::EXIST_ACTIVITY] = null;
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
     * Sets value of 'filter' property
     *
     * @param Filter $value Property value
     *
     * @return null
     */
    public function setFilter(Filter $value) {
        return $this->set(self::FILTER, $value);
    }

    /**
     * Returns value of 'filter' property
     *
     * @return Filter
     */
    public function getFilter() {
        return $this->get(self::FILTER);
    }

    /**
     * Sets value of 'discount_info' property
     *
     * @param DiscountInfo $value Property value
     *
     * @return null
     */
    public function setDiscountInfo(DiscountInfo $value) {
        return $this->set(self::DISCOUNT_INFO, $value);
    }

    /**
     * Returns value of 'discount_info' property
     *
     * @return DiscountInfo
     */
    public function getDiscountInfo() {
        return $this->get(self::DISCOUNT_INFO);
    }

    /**
     * Sets value of 'invoice_info' property
     *
     * @param InvoiceInfo $value Property value
     *
     * @return null
     */
    public function setInvoiceInfo(InvoiceInfo $value) {
        return $this->set(self::INVOICE_INFO, $value);
    }

    /**
     * Returns value of 'invoice_info' property
     *
     * @return InvoiceInfo
     */
    public function getInvoiceInfo() {
        return $this->get(self::INVOICE_INFO);
    }

    /**
     * Appends value to 'shop_info' list
     *
     * @param ShopInfo $value Value to append
     *
     * @return null
     */
    public function appendShopInfo(ShopInfo $value) {
        return $this->append(self::SHOP_INFO, $value);
    }

    /**
     * Clears 'shop_info' list
     *
     * @return null
     */
    public function clearShopInfo() {
        return $this->clear(self::SHOP_INFO);
    }

    /**
     * Returns 'shop_info' list
     *
     * @return ShopInfo[]
     */
    public function getShopInfo() {
        return $this->get(self::SHOP_INFO);
    }

    /**
     * Returns 'shop_info' iterator
     *
     * @return ArrayIterator
     */
    public function getShopInfoIterator() {
        return new ArrayIterator($this->get(self::SHOP_INFO));
    }

    /**
     * Returns element from 'shop_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return ShopInfo
     */
    public function getShopInfoAt($offset) {
        return $this->get(self::SHOP_INFO, $offset);
    }

    /**
     * Returns count of 'shop_info' list
     *
     * @return int
     */
    public function getShopInfoCount() {
        return $this->count(self::SHOP_INFO);
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
     * Sets value of 'exist_activity' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExistActivity($value) {
        return $this->set(self::EXIST_ACTIVITY, $value);
    }

    /**
     * Returns value of 'exist_activity' property
     *
     * @return string
     */
    public function getExistActivity() {
        return $this->get(self::EXIST_ACTIVITY);
    }
}
}
