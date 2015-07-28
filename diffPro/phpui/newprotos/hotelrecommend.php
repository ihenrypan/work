<?php
/**
 * Auto generated from map_hotel_recommend.proto.1 at 2015-06-23 14:50:37
 */

/**
 * PremiumInfo message
 */
if (!class_exists('PremiumInfo')) {
class PremiumInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISCOUNT_CONTENT = 1;
    const DISCOUNT_DL = 2;
    const DISCOUNT_ID = 3;
    const NAME = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DISCOUNT_CONTENT => array(
            'name' => 'discount_content',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT_DL => array(
            'name' => 'discount_dl',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT_ID => array(
            'name' => 'discount_id',
            'required' => false,
            'type' => 7,
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
        $this->values[self::DISCOUNT_CONTENT] = null;
        $this->values[self::DISCOUNT_DL] = null;
        $this->values[self::DISCOUNT_ID] = null;
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
     * Sets value of 'discount_content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscountContent($value) {
        return $this->set(self::DISCOUNT_CONTENT, $value);
    }

    /**
     * Returns value of 'discount_content' property
     *
     * @return string
     */
    public function getDiscountContent() {
        return $this->get(self::DISCOUNT_CONTENT);
    }

    /**
     * Sets value of 'discount_dl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscountDl($value) {
        return $this->set(self::DISCOUNT_DL, $value);
    }

    /**
     * Returns value of 'discount_dl' property
     *
     * @return string
     */
    public function getDiscountDl() {
        return $this->get(self::DISCOUNT_DL);
    }

    /**
     * Sets value of 'discount_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscountId($value) {
        return $this->set(self::DISCOUNT_ID, $value);
    }

    /**
     * Returns value of 'discount_id' property
     *
     * @return string
     */
    public function getDiscountId() {
        return $this->get(self::DISCOUNT_ID);
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
 * GrouponInfo message
 */
if (!class_exists('GrouponInfo')) {
class GrouponInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const GROUPON_NUM = 1;
    const GROUPON_PRICE = 2;
    const GROUPON_TITLE = 3;
    const GROUPON_IMAGE = 4;
    const REGULAR_PRICE = 5;
    const GROUPON_URL_MOBILE = 6;
    const GROUPON_WEBAPP_URL = 7;
    const GROUPON_RESERVATION = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::GROUPON_NUM => array(
            'name' => 'groupon_num',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_PRICE => array(
            'name' => 'groupon_price',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_TITLE => array(
            'name' => 'groupon_title',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_IMAGE => array(
            'name' => 'groupon_image',
            'required' => false,
            'type' => 7,
        ),
        self::REGULAR_PRICE => array(
            'name' => 'regular_price',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_URL_MOBILE => array(
            'name' => 'groupon_url_mobile',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_WEBAPP_URL => array(
            'name' => 'groupon_webapp_url',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_RESERVATION => array(
            'name' => 'groupon_reservation',
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
        $this->values[self::GROUPON_NUM] = null;
        $this->values[self::GROUPON_PRICE] = null;
        $this->values[self::GROUPON_TITLE] = null;
        $this->values[self::GROUPON_IMAGE] = null;
        $this->values[self::REGULAR_PRICE] = null;
        $this->values[self::GROUPON_URL_MOBILE] = null;
        $this->values[self::GROUPON_WEBAPP_URL] = null;
        $this->values[self::GROUPON_RESERVATION] = null;
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
     * Sets value of 'groupon_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponNum($value) {
        return $this->set(self::GROUPON_NUM, $value);
    }

    /**
     * Returns value of 'groupon_num' property
     *
     * @return string
     */
    public function getGrouponNum() {
        return $this->get(self::GROUPON_NUM);
    }

    /**
     * Sets value of 'groupon_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponPrice($value) {
        return $this->set(self::GROUPON_PRICE, $value);
    }

    /**
     * Returns value of 'groupon_price' property
     *
     * @return string
     */
    public function getGrouponPrice() {
        return $this->get(self::GROUPON_PRICE);
    }

    /**
     * Sets value of 'groupon_title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponTitle($value) {
        return $this->set(self::GROUPON_TITLE, $value);
    }

    /**
     * Returns value of 'groupon_title' property
     *
     * @return string
     */
    public function getGrouponTitle() {
        return $this->get(self::GROUPON_TITLE);
    }

    /**
     * Sets value of 'groupon_image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponImage($value) {
        return $this->set(self::GROUPON_IMAGE, $value);
    }

    /**
     * Returns value of 'groupon_image' property
     *
     * @return string
     */
    public function getGrouponImage() {
        return $this->get(self::GROUPON_IMAGE);
    }

    /**
     * Sets value of 'regular_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegularPrice($value) {
        return $this->set(self::REGULAR_PRICE, $value);
    }

    /**
     * Returns value of 'regular_price' property
     *
     * @return string
     */
    public function getRegularPrice() {
        return $this->get(self::REGULAR_PRICE);
    }

    /**
     * Sets value of 'groupon_url_mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponUrlMobile($value) {
        return $this->set(self::GROUPON_URL_MOBILE, $value);
    }

    /**
     * Returns value of 'groupon_url_mobile' property
     *
     * @return string
     */
    public function getGrouponUrlMobile() {
        return $this->get(self::GROUPON_URL_MOBILE);
    }

    /**
     * Sets value of 'groupon_webapp_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponWebappUrl($value) {
        return $this->set(self::GROUPON_WEBAPP_URL, $value);
    }

    /**
     * Returns value of 'groupon_webapp_url' property
     *
     * @return string
     */
    public function getGrouponWebappUrl() {
        return $this->get(self::GROUPON_WEBAPP_URL);
    }

    /**
     * Sets value of 'groupon_reservation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponReservation($value) {
        return $this->set(self::GROUPON_RESERVATION, $value);
    }

    /**
     * Returns value of 'groupon_reservation' property
     *
     * @return string
     */
    public function getGrouponReservation() {
        return $this->get(self::GROUPON_RESERVATION);
    }
}
}

/**
 * OrilDetail message
 */
if (!class_exists('OrilDetail')) {
class OrilDetail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ORIL_PRICE = 1;
    const ORIL_TYPE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ORIL_PRICE => array(
            'name' => 'oril_price',
            'required' => false,
            'type' => 7,
        ),
        self::ORIL_TYPE => array(
            'name' => 'oril_type',
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
        $this->values[self::ORIL_PRICE] = null;
        $this->values[self::ORIL_TYPE] = null;
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
     * Sets value of 'oril_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrilPrice($value) {
        return $this->set(self::ORIL_PRICE, $value);
    }

    /**
     * Returns value of 'oril_price' property
     *
     * @return string
     */
    public function getOrilPrice() {
        return $this->get(self::ORIL_PRICE);
    }

    /**
     * Sets value of 'oril_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrilType($value) {
        return $this->set(self::ORIL_TYPE, $value);
    }

    /**
     * Returns value of 'oril_type' property
     *
     * @return string
     */
    public function getOrilType() {
        return $this->get(self::ORIL_TYPE);
    }
}
}

/**
 * OrilInfo message
 */
if (!class_exists('OrilInfo')) {
class OrilInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ORIL_DETAIL = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ORIL_DETAIL => array(
            'name' => 'oril_detail',
            'repeated' => true,
            'type' => 'OrilDetail',
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
        $this->values[self::ORIL_DETAIL] = array();
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
     * Appends value to 'oril_detail' list
     *
     * @param OrilDetail $value Value to append
     *
     * @return null
     */
    public function appendOrilDetail(OrilDetail $value) {
        return $this->append(self::ORIL_DETAIL, $value);
    }

    /**
     * Clears 'oril_detail' list
     *
     * @return null
     */
    public function clearOrilDetail() {
        return $this->clear(self::ORIL_DETAIL);
    }

    /**
     * Returns 'oril_detail' list
     *
     * @return OrilDetail[]
     */
    public function getOrilDetail() {
        return $this->get(self::ORIL_DETAIL);
    }

    /**
     * Returns 'oril_detail' iterator
     *
     * @return ArrayIterator
     */
    public function getOrilDetailIterator() {
        return new ArrayIterator($this->get(self::ORIL_DETAIL));
    }

    /**
     * Returns element from 'oril_detail' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OrilDetail
     */
    public function getOrilDetailAt($offset) {
        return $this->get(self::ORIL_DETAIL, $offset);
    }

    /**
     * Returns count of 'oril_detail' list
     *
     * @return int
     */
    public function getOrilDetailCount() {
        return $this->count(self::ORIL_DETAIL);
    }
}
}

/**
 * Tel message
 */
if (!class_exists('Tel')) {
class Tel extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TITLE = 1;
    const CONTENT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
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
        $this->values[self::TITLE] = null;
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }
}
}

/**
 * Web message
 */
if (!class_exists('Web')) {
class Web extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TITLE = 1;
    const CONTENT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
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
        $this->values[self::TITLE] = null;
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }
}
}

/**
 * Coms message
 */
if (!class_exists('Coms')) {
class Coms extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;
    const TITLE = 2;
    const TYPE = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::TYPE] = null;
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
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
}
}

/**
 * BookInfo message
 */
if (!class_exists('BookInfo')) {
class BookInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TEL = 1;
    const WEB = 2;
    const COMS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TEL => array(
            'name' => 'tel',
            'required' => false,
            'type' => 'Tel',
        ),
        self::WEB => array(
            'name' => 'web',
            'required' => false,
            'type' => 'Web',
        ),
        self::COMS => array(
            'name' => 'coms',
            'required' => false,
            'type' => 'Coms',
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
        $this->values[self::TEL] = null;
        $this->values[self::WEB] = null;
        $this->values[self::COMS] = null;
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
     * Sets value of 'tel' property
     *
     * @param Tel $value Property value
     *
     * @return null
     */
    public function setTel(Tel $value) {
        return $this->set(self::TEL, $value);
    }

    /**
     * Returns value of 'tel' property
     *
     * @return Tel
     */
    public function getTel() {
        return $this->get(self::TEL);
    }

    /**
     * Sets value of 'web' property
     *
     * @param Web $value Property value
     *
     * @return null
     */
    public function setWeb(Web $value) {
        return $this->set(self::WEB, $value);
    }

    /**
     * Returns value of 'web' property
     *
     * @return Web
     */
    public function getWeb() {
        return $this->get(self::WEB);
    }

    /**
     * Sets value of 'coms' property
     *
     * @param Coms $value Property value
     *
     * @return null
     */
    public function setComs(Coms $value) {
        return $this->set(self::COMS, $value);
    }

    /**
     * Returns value of 'coms' property
     *
     * @return Coms
     */
    public function getComs() {
        return $this->get(self::COMS);
    }
}
}

/**
 * Activity message
 */
if (!class_exists('Activity')) {
class Activity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LEVEL = 1;
    const TITLE = 2;
    const COLOR = 3;
    const BG_COLOR = 4;
    const DESC = 5;
    const HREF = 6;
    const IMG_URL = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::COLOR => array(
            'name' => 'color',
            'required' => false,
            'type' => 7,
        ),
        self::BG_COLOR => array(
            'name' => 'bg_color',
            'required' => false,
            'type' => 7,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => 7,
        ),
        self::HREF => array(
            'name' => 'href',
            'required' => false,
            'type' => 7,
        ),
        self::IMG_URL => array(
            'name' => 'img_url',
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
        $this->values[self::LEVEL] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::COLOR] = null;
        $this->values[self::BG_COLOR] = null;
        $this->values[self::DESC] = null;
        $this->values[self::HREF] = null;
        $this->values[self::IMG_URL] = null;
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
     * Sets value of 'level' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLevel($value) {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return string
     */
    public function getLevel() {
        return $this->get(self::LEVEL);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setColor($value) {
        return $this->set(self::COLOR, $value);
    }

    /**
     * Returns value of 'color' property
     *
     * @return string
     */
    public function getColor() {
        return $this->get(self::COLOR);
    }

    /**
     * Sets value of 'bg_color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBgColor($value) {
        return $this->set(self::BG_COLOR, $value);
    }

    /**
     * Returns value of 'bg_color' property
     *
     * @return string
     */
    public function getBgColor() {
        return $this->get(self::BG_COLOR);
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
     * Sets value of 'href' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHref($value) {
        return $this->set(self::HREF, $value);
    }

    /**
     * Returns value of 'href' property
     *
     * @return string
     */
    public function getHref() {
        return $this->get(self::HREF);
    }

    /**
     * Sets value of 'img_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgUrl($value) {
        return $this->set(self::IMG_URL, $value);
    }

    /**
     * Returns value of 'img_url' property
     *
     * @return string
     */
    public function getImgUrl() {
        return $this->get(self::IMG_URL);
    }
}
}

/**
 * DetailInfo message
 */
if (!class_exists('DetailInfo')) {
class DetailInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PREMIUM_INFO = 10;
    const GROUPON_INFO = 15;
    const ORIL_INFO = 16;
    const BOOK_INFO = 18;
    const ACTIVITY = 23;
    const FLAG = 1;
    const OVERALL_RATING = 2;
    const PRICE_TEXT = 3;
    const TAG = 4;
    const IMAGE = 5;
    const SHOW_INFO = 6;
    const PREMIUM_FLAG = 7;
    const DISCOUNT_TOTAL = 8;
    const GROUPON_TOTAL = 9;
    const COMMENT_NUM = 11;
    const MOVIE_FLAG = 12;
    const MOVIE_FILM_COUNT = 13;
    const GROUPON_FLAG = 14;
    const WAP_BOOKABLE = 17;
    const PRICE = 19;
    const WISE_FULLROOM = 20;
    const DISCOUNT = 21;
    const GRADE = 22;
    const GUIDE = 24;
    const SPECIAL_SERVICE = 25;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PREMIUM_INFO => array(
            'name' => 'premium_info',
            'required' => false,
            'type' => 'PremiumInfo',
        ),
        self::GROUPON_INFO => array(
            'name' => 'groupon_info',
            'required' => false,
            'type' => 'GrouponInfo',
        ),
        self::ORIL_INFO => array(
            'name' => 'oril_info',
            'required' => false,
            'type' => 'OrilInfo',
        ),
        self::BOOK_INFO => array(
            'name' => 'book_info',
            'required' => false,
            'type' => 'BookInfo',
        ),
        self::ACTIVITY => array(
            'name' => 'activity',
            'repeated' => true,
            'type' => 'Activity',
        ),
        self::FLAG => array(
            'name' => 'flag',
            'repeated' => true,
            'type' => 7,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE_TEXT => array(
            'name' => 'price_text',
            'required' => false,
            'type' => 7,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 7,
        ),
        self::SHOW_INFO => array(
            'name' => 'show_info',
            'required' => false,
            'type' => 7,
        ),
        self::PREMIUM_FLAG => array(
            'name' => 'premium_flag',
            'required' => false,
            'type' => 5,
        ),
        self::DISCOUNT_TOTAL => array(
            'name' => 'discount_total',
            'required' => false,
            'type' => 5,
        ),
        self::GROUPON_TOTAL => array(
            'name' => 'groupon_total',
            'required' => false,
            'type' => 5,
        ),
        self::COMMENT_NUM => array(
            'name' => 'comment_num',
            'required' => false,
            'type' => 7,
        ),
        self::MOVIE_FLAG => array(
            'name' => 'movie_flag',
            'required' => false,
            'type' => 7,
        ),
        self::MOVIE_FILM_COUNT => array(
            'name' => 'movie_film_count',
            'required' => false,
            'type' => 5,
        ),
        self::GROUPON_FLAG => array(
            'name' => 'groupon_flag',
            'required' => false,
            'type' => 5,
        ),
        self::WAP_BOOKABLE => array(
            'name' => 'wap_bookable',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_FULLROOM => array(
            'name' => 'wise_fullroom',
            'required' => false,
            'type' => 7,
        ),
        self::DISCOUNT => array(
            'name' => 'discount',
            'required' => false,
            'type' => 7,
        ),
        self::GRADE => array(
            'name' => 'grade',
            'required' => false,
            'type' => 7,
        ),
        self::GUIDE => array(
            'name' => 'guide',
            'required' => false,
            'type' => 7,
        ),
        self::SPECIAL_SERVICE => array(
            'name' => 'special_service',
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
        $this->values[self::PREMIUM_INFO] = null;
        $this->values[self::GROUPON_INFO] = null;
        $this->values[self::ORIL_INFO] = null;
        $this->values[self::BOOK_INFO] = null;
        $this->values[self::ACTIVITY] = array();
        $this->values[self::FLAG] = array();
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::PRICE_TEXT] = null;
        $this->values[self::TAG] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::SHOW_INFO] = null;
        $this->values[self::PREMIUM_FLAG] = null;
        $this->values[self::DISCOUNT_TOTAL] = null;
        $this->values[self::GROUPON_TOTAL] = null;
        $this->values[self::COMMENT_NUM] = null;
        $this->values[self::MOVIE_FLAG] = null;
        $this->values[self::MOVIE_FILM_COUNT] = null;
        $this->values[self::GROUPON_FLAG] = null;
        $this->values[self::WAP_BOOKABLE] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::WISE_FULLROOM] = null;
        $this->values[self::DISCOUNT] = null;
        $this->values[self::GRADE] = null;
        $this->values[self::GUIDE] = null;
        $this->values[self::SPECIAL_SERVICE] = null;
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
     * Sets value of 'premium_info' property
     *
     * @param PremiumInfo $value Property value
     *
     * @return null
     */
    public function setPremiumInfo(PremiumInfo $value) {
        return $this->set(self::PREMIUM_INFO, $value);
    }

    /**
     * Returns value of 'premium_info' property
     *
     * @return PremiumInfo
     */
    public function getPremiumInfo() {
        return $this->get(self::PREMIUM_INFO);
    }

    /**
     * Sets value of 'groupon_info' property
     *
     * @param GrouponInfo $value Property value
     *
     * @return null
     */
    public function setGrouponInfo(GrouponInfo $value) {
        return $this->set(self::GROUPON_INFO, $value);
    }

    /**
     * Returns value of 'groupon_info' property
     *
     * @return GrouponInfo
     */
    public function getGrouponInfo() {
        return $this->get(self::GROUPON_INFO);
    }

    /**
     * Sets value of 'oril_info' property
     *
     * @param OrilInfo $value Property value
     *
     * @return null
     */
    public function setOrilInfo(OrilInfo $value) {
        return $this->set(self::ORIL_INFO, $value);
    }

    /**
     * Returns value of 'oril_info' property
     *
     * @return OrilInfo
     */
    public function getOrilInfo() {
        return $this->get(self::ORIL_INFO);
    }

    /**
     * Sets value of 'book_info' property
     *
     * @param BookInfo $value Property value
     *
     * @return null
     */
    public function setBookInfo(BookInfo $value) {
        return $this->set(self::BOOK_INFO, $value);
    }

    /**
     * Returns value of 'book_info' property
     *
     * @return BookInfo
     */
    public function getBookInfo() {
        return $this->get(self::BOOK_INFO);
    }

    /**
     * Appends value to 'activity' list
     *
     * @param Activity $value Value to append
     *
     * @return null
     */
    public function appendActivity(Activity $value) {
        return $this->append(self::ACTIVITY, $value);
    }

    /**
     * Clears 'activity' list
     *
     * @return null
     */
    public function clearActivity() {
        return $this->clear(self::ACTIVITY);
    }

    /**
     * Returns 'activity' list
     *
     * @return Activity[]
     */
    public function getActivity() {
        return $this->get(self::ACTIVITY);
    }

    /**
     * Returns 'activity' iterator
     *
     * @return ArrayIterator
     */
    public function getActivityIterator() {
        return new ArrayIterator($this->get(self::ACTIVITY));
    }

    /**
     * Returns element from 'activity' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Activity
     */
    public function getActivityAt($offset) {
        return $this->get(self::ACTIVITY, $offset);
    }

    /**
     * Returns count of 'activity' list
     *
     * @return int
     */
    public function getActivityCount() {
        return $this->count(self::ACTIVITY);
    }

    /**
     * Appends value to 'flag' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFlag($value) {
        return $this->append(self::FLAG, $value);
    }

    /**
     * Clears 'flag' list
     *
     * @return null
     */
    public function clearFlag() {
        return $this->clear(self::FLAG);
    }

    /**
     * Returns 'flag' list
     *
     * @return string[]
     */
    public function getFlag() {
        return $this->get(self::FLAG);
    }

    /**
     * Returns 'flag' iterator
     *
     * @return ArrayIterator
     */
    public function getFlagIterator() {
        return new ArrayIterator($this->get(self::FLAG));
    }

    /**
     * Returns element from 'flag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFlagAt($offset) {
        return $this->get(self::FLAG, $offset);
    }

    /**
     * Returns count of 'flag' list
     *
     * @return int
     */
    public function getFlagCount() {
        return $this->count(self::FLAG);
    }

    /**
     * Sets value of 'overall_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOverallRating($value) {
        return $this->set(self::OVERALL_RATING, $value);
    }

    /**
     * Returns value of 'overall_rating' property
     *
     * @return string
     */
    public function getOverallRating() {
        return $this->get(self::OVERALL_RATING);
    }

    /**
     * Sets value of 'price_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPriceText($value) {
        return $this->set(self::PRICE_TEXT, $value);
    }

    /**
     * Returns value of 'price_text' property
     *
     * @return string
     */
    public function getPriceText() {
        return $this->get(self::PRICE_TEXT);
    }

    /**
     * Sets value of 'tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTag($value) {
        return $this->set(self::TAG, $value);
    }

    /**
     * Returns value of 'tag' property
     *
     * @return string
     */
    public function getTag() {
        return $this->get(self::TAG);
    }

    /**
     * Sets value of 'image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImage($value) {
        return $this->set(self::IMAGE, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return string
     */
    public function getImage() {
        return $this->get(self::IMAGE);
    }

    /**
     * Sets value of 'show_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShowInfo($value) {
        return $this->set(self::SHOW_INFO, $value);
    }

    /**
     * Returns value of 'show_info' property
     *
     * @return string
     */
    public function getShowInfo() {
        return $this->get(self::SHOW_INFO);
    }

    /**
     * Sets value of 'premium_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPremiumFlag($value) {
        return $this->set(self::PREMIUM_FLAG, $value);
    }

    /**
     * Returns value of 'premium_flag' property
     *
     * @return int
     */
    public function getPremiumFlag() {
        return $this->get(self::PREMIUM_FLAG);
    }

    /**
     * Sets value of 'discount_total' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDiscountTotal($value) {
        return $this->set(self::DISCOUNT_TOTAL, $value);
    }

    /**
     * Returns value of 'discount_total' property
     *
     * @return int
     */
    public function getDiscountTotal() {
        return $this->get(self::DISCOUNT_TOTAL);
    }

    /**
     * Sets value of 'groupon_total' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGrouponTotal($value) {
        return $this->set(self::GROUPON_TOTAL, $value);
    }

    /**
     * Returns value of 'groupon_total' property
     *
     * @return int
     */
    public function getGrouponTotal() {
        return $this->get(self::GROUPON_TOTAL);
    }

    /**
     * Sets value of 'comment_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentNum($value) {
        return $this->set(self::COMMENT_NUM, $value);
    }

    /**
     * Returns value of 'comment_num' property
     *
     * @return string
     */
    public function getCommentNum() {
        return $this->get(self::COMMENT_NUM);
    }

    /**
     * Sets value of 'movie_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMovieFlag($value) {
        return $this->set(self::MOVIE_FLAG, $value);
    }

    /**
     * Returns value of 'movie_flag' property
     *
     * @return string
     */
    public function getMovieFlag() {
        return $this->get(self::MOVIE_FLAG);
    }

    /**
     * Sets value of 'movie_film_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMovieFilmCount($value) {
        return $this->set(self::MOVIE_FILM_COUNT, $value);
    }

    /**
     * Returns value of 'movie_film_count' property
     *
     * @return int
     */
    public function getMovieFilmCount() {
        return $this->get(self::MOVIE_FILM_COUNT);
    }

    /**
     * Sets value of 'groupon_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGrouponFlag($value) {
        return $this->set(self::GROUPON_FLAG, $value);
    }

    /**
     * Returns value of 'groupon_flag' property
     *
     * @return int
     */
    public function getGrouponFlag() {
        return $this->get(self::GROUPON_FLAG);
    }

    /**
     * Sets value of 'wap_bookable' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWapBookable($value) {
        return $this->set(self::WAP_BOOKABLE, $value);
    }

    /**
     * Returns value of 'wap_bookable' property
     *
     * @return string
     */
    public function getWapBookable() {
        return $this->get(self::WAP_BOOKABLE);
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
     * Sets value of 'wise_fullroom' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseFullroom($value) {
        return $this->set(self::WISE_FULLROOM, $value);
    }

    /**
     * Returns value of 'wise_fullroom' property
     *
     * @return string
     */
    public function getWiseFullroom() {
        return $this->get(self::WISE_FULLROOM);
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
     * Sets value of 'grade' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrade($value) {
        return $this->set(self::GRADE, $value);
    }

    /**
     * Returns value of 'grade' property
     *
     * @return string
     */
    public function getGrade() {
        return $this->get(self::GRADE);
    }

    /**
     * Sets value of 'guide' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuide($value) {
        return $this->set(self::GUIDE, $value);
    }

    /**
     * Returns value of 'guide' property
     *
     * @return string
     */
    public function getGuide() {
        return $this->get(self::GUIDE);
    }

    /**
     * Sets value of 'special_service' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecialService($value) {
        return $this->set(self::SPECIAL_SERVICE, $value);
    }

    /**
     * Returns value of 'special_service' property
     *
     * @return string
     */
    public function getSpecialService() {
        return $this->get(self::SPECIAL_SERVICE);
    }
}
}

/**
 * Ext message
 */
if (!class_exists('Ext')) {
class Ext extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DETAIL_INFO = 2;
    const SRC_NAME = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DETAIL_INFO => array(
            'name' => 'detail_info',
            'required' => false,
            'type' => 'DetailInfo',
        ),
        self::SRC_NAME => array(
            'name' => 'src_name',
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
        $this->values[self::DETAIL_INFO] = null;
        $this->values[self::SRC_NAME] = null;
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
     * Sets value of 'detail_info' property
     *
     * @param DetailInfo $value Property value
     *
     * @return null
     */
    public function setDetailInfo(DetailInfo $value) {
        return $this->set(self::DETAIL_INFO, $value);
    }

    /**
     * Returns value of 'detail_info' property
     *
     * @return DetailInfo
     */
    public function getDetailInfo() {
        return $this->get(self::DETAIL_INFO);
    }

    /**
     * Sets value of 'src_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrcName($value) {
        return $this->set(self::SRC_NAME, $value);
    }

    /**
     * Returns value of 'src_name' property
     *
     * @return string
     */
    public function getSrcName() {
        return $this->get(self::SRC_NAME);
    }
}
}

/**
 * Show message
 */
if (!class_exists('Show')) {
class Show extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ADDRESS = 1;
    const IMAGE = 2;
    const NAME = 3;
    const ICON = 4;
    const DISTANCE = 5;
    const OVERALL_RATING = 6;
    const PRICE = 7;
    const EP_CHAR = 8;
    const EC_REASON = 9;
    const PHONE_BUTTON = 10;
    const BOOK_INFO = 11;
    const MAP_BUTTON = 12;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => 5,
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 5,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => 5,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 5,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 5,
        ),
        self::EP_CHAR => array(
            'name' => 'ep_char',
            'required' => false,
            'type' => 5,
        ),
        self::EC_REASON => array(
            'name' => 'ec_reason',
            'required' => false,
            'type' => 5,
        ),
        self::PHONE_BUTTON => array(
            'name' => 'phone_button',
            'required' => false,
            'type' => 5,
        ),
        self::BOOK_INFO => array(
            'name' => 'book_info',
            'required' => false,
            'type' => 5,
        ),
        self::MAP_BUTTON => array(
            'name' => 'map_button',
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
        $this->values[self::ADDRESS] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::ICON] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::EP_CHAR] = null;
        $this->values[self::EC_REASON] = null;
        $this->values[self::PHONE_BUTTON] = null;
        $this->values[self::BOOK_INFO] = null;
        $this->values[self::MAP_BUTTON] = null;
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
     * Sets value of 'address' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAddress($value) {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return int
     */
    public function getAddress() {
        return $this->get(self::ADDRESS);
    }

    /**
     * Sets value of 'image' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setImage($value) {
        return $this->set(self::IMAGE, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return int
     */
    public function getImage() {
        return $this->get(self::IMAGE);
    }

    /**
     * Sets value of 'name' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return int
     */
    public function getName() {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'icon' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIcon($value) {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return int
     */
    public function getIcon() {
        return $this->get(self::ICON);
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
     * Sets value of 'overall_rating' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOverallRating($value) {
        return $this->set(self::OVERALL_RATING, $value);
    }

    /**
     * Returns value of 'overall_rating' property
     *
     * @return int
     */
    public function getOverallRating() {
        return $this->get(self::OVERALL_RATING);
    }

    /**
     * Sets value of 'price' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPrice($value) {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return int
     */
    public function getPrice() {
        return $this->get(self::PRICE);
    }

    /**
     * Sets value of 'ep_char' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEpChar($value) {
        return $this->set(self::EP_CHAR, $value);
    }

    /**
     * Returns value of 'ep_char' property
     *
     * @return int
     */
    public function getEpChar() {
        return $this->get(self::EP_CHAR);
    }

    /**
     * Sets value of 'ec_reason' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEcReason($value) {
        return $this->set(self::EC_REASON, $value);
    }

    /**
     * Returns value of 'ec_reason' property
     *
     * @return int
     */
    public function getEcReason() {
        return $this->get(self::EC_REASON);
    }

    /**
     * Sets value of 'phone_button' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPhoneButton($value) {
        return $this->set(self::PHONE_BUTTON, $value);
    }

    /**
     * Returns value of 'phone_button' property
     *
     * @return int
     */
    public function getPhoneButton() {
        return $this->get(self::PHONE_BUTTON);
    }

    /**
     * Sets value of 'book_info' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBookInfo($value) {
        return $this->set(self::BOOK_INFO, $value);
    }

    /**
     * Returns value of 'book_info' property
     *
     * @return int
     */
    public function getBookInfo() {
        return $this->get(self::BOOK_INFO);
    }

    /**
     * Sets value of 'map_button' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMapButton($value) {
        return $this->set(self::MAP_BUTTON, $value);
    }

    /**
     * Returns value of 'map_button' property
     *
     * @return int
     */
    public function getMapButton() {
        return $this->get(self::MAP_BUTTON);
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
    const GEO = 1;
    const NAME = 2;
    const UID = 3;
    const ACC_FLAG = 4;
    const ADDR = 5;
    const DETAIL = 6;
    const REC_REASON = 7;
    const TEL = 8;
    const POITYPE = 9;
    const PANO = 10;
    const INDOOR_PANO = 11;
    const AOI = 12;
    const EXT = 13;
    const POI_TYPE_TEXT = 14;
    const CHILD_CATALOG = 15;
    const POI_CHILD_TEXT = 16;
    const NEW_CATALOG_ID = 17;
    const VIEW_TYPE = 18;
    const LIST_SHOW = 19;
    const SHOW_LEVEL = 20;
    const ICON_ID = 21;
    const KINDTYPE = 22;
    const TAG = 23;
    const RANK = 24;
    const MAX_SHOW_LEVEL = 25;
    const SHOW = 26;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::ACC_FLAG => array(
            'name' => 'acc_flag',
            'required' => false,
            'type' => 5,
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::DETAIL => array(
            'name' => 'detail',
            'required' => false,
            'type' => 5,
        ),
        self::REC_REASON => array(
            'name' => 'rec_reason',
            'repeated' => true,
            'type' => 7,
        ),
        self::TEL => array(
            'name' => 'tel',
            'required' => false,
            'type' => 7,
        ),
        self::POITYPE => array(
            'name' => 'poiType',
            'required' => false,
            'type' => 5,
        ),
        self::PANO => array(
            'name' => 'pano',
            'required' => false,
            'type' => 5,
        ),
        self::INDOOR_PANO => array(
            'name' => 'indoor_pano',
            'required' => false,
            'type' => 7,
        ),
        self::AOI => array(
            'name' => 'aoi',
            'required' => false,
            'type' => 7,
        ),
        self::EXT => array(
            'name' => 'ext',
            'required' => false,
            'type' => 'Ext',
        ),
        self::POI_TYPE_TEXT => array(
            'name' => 'poi_type_text',
            'required' => false,
            'type' => 7,
        ),
        self::CHILD_CATALOG => array(
            'name' => 'child_catalog',
            'required' => false,
            'type' => 7,
        ),
        self::POI_CHILD_TEXT => array(
            'name' => 'poi_child_text',
            'required' => false,
            'type' => 7,
        ),
        self::NEW_CATALOG_ID => array(
            'name' => 'new_catalog_id',
            'required' => false,
            'type' => 7,
        ),
        self::VIEW_TYPE => array(
            'name' => 'view_type',
            'required' => false,
            'type' => 5,
        ),
        self::LIST_SHOW => array(
            'name' => 'list_show',
            'required' => false,
            'type' => 5,
        ),
        self::SHOW_LEVEL => array(
            'name' => 'show_level',
            'required' => false,
            'type' => 5,
        ),
        self::ICON_ID => array(
            'name' => 'icon_id',
            'required' => false,
            'type' => 5,
        ),
        self::KINDTYPE => array(
            'name' => 'kindtype',
            'required' => false,
            'type' => 5,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 5,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => 5,
        ),
        self::MAX_SHOW_LEVEL => array(
            'name' => 'max_show_level',
            'required' => false,
            'type' => 5,
        ),
        self::SHOW => array(
            'name' => 'show',
            'required' => false,
            'type' => 'Show',
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
        $this->values[self::GEO] = null;
        $this->values[self::NAME] = null;
        $this->values[self::UID] = null;
        $this->values[self::ACC_FLAG] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::DETAIL] = null;
        $this->values[self::REC_REASON] = array();
        $this->values[self::TEL] = null;
        $this->values[self::POITYPE] = null;
        $this->values[self::PANO] = null;
        $this->values[self::INDOOR_PANO] = null;
        $this->values[self::AOI] = null;
        $this->values[self::EXT] = null;
        $this->values[self::POI_TYPE_TEXT] = null;
        $this->values[self::CHILD_CATALOG] = null;
        $this->values[self::POI_CHILD_TEXT] = null;
        $this->values[self::NEW_CATALOG_ID] = null;
        $this->values[self::VIEW_TYPE] = null;
        $this->values[self::LIST_SHOW] = null;
        $this->values[self::SHOW_LEVEL] = null;
        $this->values[self::ICON_ID] = null;
        $this->values[self::KINDTYPE] = null;
        $this->values[self::TAG] = null;
        $this->values[self::RANK] = null;
        $this->values[self::MAX_SHOW_LEVEL] = null;
        $this->values[self::SHOW] = null;
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
     * Sets value of 'acc_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAccFlag($value) {
        return $this->set(self::ACC_FLAG, $value);
    }

    /**
     * Returns value of 'acc_flag' property
     *
     * @return int
     */
    public function getAccFlag() {
        return $this->get(self::ACC_FLAG);
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
     * Sets value of 'detail' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDetail($value) {
        return $this->set(self::DETAIL, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return int
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
    }

    /**
     * Appends value to 'rec_reason' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendRecReason($value) {
        return $this->append(self::REC_REASON, $value);
    }

    /**
     * Clears 'rec_reason' list
     *
     * @return null
     */
    public function clearRecReason() {
        return $this->clear(self::REC_REASON);
    }

    /**
     * Returns 'rec_reason' list
     *
     * @return string[]
     */
    public function getRecReason() {
        return $this->get(self::REC_REASON);
    }

    /**
     * Returns 'rec_reason' iterator
     *
     * @return ArrayIterator
     */
    public function getRecReasonIterator() {
        return new ArrayIterator($this->get(self::REC_REASON));
    }

    /**
     * Returns element from 'rec_reason' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getRecReasonAt($offset) {
        return $this->get(self::REC_REASON, $offset);
    }

    /**
     * Returns count of 'rec_reason' list
     *
     * @return int
     */
    public function getRecReasonCount() {
        return $this->count(self::REC_REASON);
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

    /**
     * Sets value of 'pano' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPano($value) {
        return $this->set(self::PANO, $value);
    }

    /**
     * Returns value of 'pano' property
     *
     * @return int
     */
    public function getPano() {
        return $this->get(self::PANO);
    }

    /**
     * Sets value of 'indoor_pano' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndoorPano($value) {
        return $this->set(self::INDOOR_PANO, $value);
    }

    /**
     * Returns value of 'indoor_pano' property
     *
     * @return string
     */
    public function getIndoorPano() {
        return $this->get(self::INDOOR_PANO);
    }

    /**
     * Sets value of 'aoi' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAoi($value) {
        return $this->set(self::AOI, $value);
    }

    /**
     * Returns value of 'aoi' property
     *
     * @return string
     */
    public function getAoi() {
        return $this->get(self::AOI);
    }

    /**
     * Sets value of 'ext' property
     *
     * @param Ext $value Property value
     *
     * @return null
     */
    public function setExt(Ext $value) {
        return $this->set(self::EXT, $value);
    }

    /**
     * Returns value of 'ext' property
     *
     * @return Ext
     */
    public function getExt() {
        return $this->get(self::EXT);
    }

    /**
     * Sets value of 'poi_type_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiTypeText($value) {
        return $this->set(self::POI_TYPE_TEXT, $value);
    }

    /**
     * Returns value of 'poi_type_text' property
     *
     * @return string
     */
    public function getPoiTypeText() {
        return $this->get(self::POI_TYPE_TEXT);
    }

    /**
     * Sets value of 'child_catalog' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChildCatalog($value) {
        return $this->set(self::CHILD_CATALOG, $value);
    }

    /**
     * Returns value of 'child_catalog' property
     *
     * @return string
     */
    public function getChildCatalog() {
        return $this->get(self::CHILD_CATALOG);
    }

    /**
     * Sets value of 'poi_child_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiChildText($value) {
        return $this->set(self::POI_CHILD_TEXT, $value);
    }

    /**
     * Returns value of 'poi_child_text' property
     *
     * @return string
     */
    public function getPoiChildText() {
        return $this->get(self::POI_CHILD_TEXT);
    }

    /**
     * Sets value of 'new_catalog_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewCatalogId($value) {
        return $this->set(self::NEW_CATALOG_ID, $value);
    }

    /**
     * Returns value of 'new_catalog_id' property
     *
     * @return string
     */
    public function getNewCatalogId() {
        return $this->get(self::NEW_CATALOG_ID);
    }

    /**
     * Sets value of 'view_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViewType($value) {
        return $this->set(self::VIEW_TYPE, $value);
    }

    /**
     * Returns value of 'view_type' property
     *
     * @return int
     */
    public function getViewType() {
        return $this->get(self::VIEW_TYPE);
    }

    /**
     * Sets value of 'list_show' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setListShow($value) {
        return $this->set(self::LIST_SHOW, $value);
    }

    /**
     * Returns value of 'list_show' property
     *
     * @return int
     */
    public function getListShow() {
        return $this->get(self::LIST_SHOW);
    }

    /**
     * Sets value of 'show_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setShowLevel($value) {
        return $this->set(self::SHOW_LEVEL, $value);
    }

    /**
     * Returns value of 'show_level' property
     *
     * @return int
     */
    public function getShowLevel() {
        return $this->get(self::SHOW_LEVEL);
    }

    /**
     * Sets value of 'icon_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIconId($value) {
        return $this->set(self::ICON_ID, $value);
    }

    /**
     * Returns value of 'icon_id' property
     *
     * @return int
     */
    public function getIconId() {
        return $this->get(self::ICON_ID);
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
     * Sets value of 'tag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTag($value) {
        return $this->set(self::TAG, $value);
    }

    /**
     * Returns value of 'tag' property
     *
     * @return int
     */
    public function getTag() {
        return $this->get(self::TAG);
    }

    /**
     * Sets value of 'rank' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRank($value) {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return int
     */
    public function getRank() {
        return $this->get(self::RANK);
    }

    /**
     * Sets value of 'max_show_level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMaxShowLevel($value) {
        return $this->set(self::MAX_SHOW_LEVEL, $value);
    }

    /**
     * Returns value of 'max_show_level' property
     *
     * @return int
     */
    public function getMaxShowLevel() {
        return $this->get(self::MAX_SHOW_LEVEL);
    }

    /**
     * Sets value of 'show' property
     *
     * @param Show $value Property value
     *
     * @return null
     */
    public function setShow(Show $value) {
        return $this->set(self::SHOW, $value);
    }

    /**
     * Returns value of 'show' property
     *
     * @return Show
     */
    public function getShow() {
        return $this->get(self::SHOW);
    }
}
}

/**
 * HotelRecommend message
 */
if (!class_exists('HotelRecommend')) {
class HotelRecommend extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENTS = 1;
    const THIRD_SEARCH = 2;
    const LANDMARK_THIRD_SEARCH = 3;
    const ALL_CITY_SEARCH = 4;
    const NB_X = 5;
    const NB_Y = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
        ),
        self::THIRD_SEARCH => array(
            'name' => 'third_search',
            'required' => false,
            'type' => 7,
        ),
        self::LANDMARK_THIRD_SEARCH => array(
            'name' => 'landmark_third_search',
            'required' => false,
            'type' => 7,
        ),
        self::ALL_CITY_SEARCH => array(
            'name' => 'all_city_search',
            'required' => false,
            'type' => 7,
        ),
        self::NB_X => array(
            'name' => 'nb_x',
            'required' => false,
            'type' => 7,
        ),
        self::NB_Y => array(
            'name' => 'nb_y',
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
        $this->values[self::THIRD_SEARCH] = null;
        $this->values[self::LANDMARK_THIRD_SEARCH] = null;
        $this->values[self::ALL_CITY_SEARCH] = null;
        $this->values[self::NB_X] = null;
        $this->values[self::NB_Y] = null;
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
     * Sets value of 'third_search' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThirdSearch($value) {
        return $this->set(self::THIRD_SEARCH, $value);
    }

    /**
     * Returns value of 'third_search' property
     *
     * @return string
     */
    public function getThirdSearch() {
        return $this->get(self::THIRD_SEARCH);
    }

    /**
     * Sets value of 'landmark_third_search' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLandmarkThirdSearch($value) {
        return $this->set(self::LANDMARK_THIRD_SEARCH, $value);
    }

    /**
     * Returns value of 'landmark_third_search' property
     *
     * @return string
     */
    public function getLandmarkThirdSearch() {
        return $this->get(self::LANDMARK_THIRD_SEARCH);
    }

    /**
     * Sets value of 'all_city_search' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAllCitySearch($value) {
        return $this->set(self::ALL_CITY_SEARCH, $value);
    }

    /**
     * Returns value of 'all_city_search' property
     *
     * @return string
     */
    public function getAllCitySearch() {
        return $this->get(self::ALL_CITY_SEARCH);
    }

    /**
     * Sets value of 'nb_x' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNbX($value) {
        return $this->set(self::NB_X, $value);
    }

    /**
     * Returns value of 'nb_x' property
     *
     * @return string
     */
    public function getNbX() {
        return $this->get(self::NB_X);
    }

    /**
     * Sets value of 'nb_y' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNbY($value) {
        return $this->set(self::NB_Y, $value);
    }

    /**
     * Returns value of 'nb_y' property
     *
     * @return string
     */
    public function getNbY() {
        return $this->get(self::NB_Y);
    }
}
}
