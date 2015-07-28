<?php
/**
 * Auto generated from map_inf.proto.1 at 2015-06-23 14:47:52
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
    const HAS_RTBUS = 1;
    const QID = 2;
    const CHANNEL = 3;
    const CLIENTSV = 4;
    const IM = 5;
    const MB = 6;
    const NEWMAP = 7;
    const OS = 8;
    const QT = 9;
    const RESID = 10;
    const SV = 11;
    const TIME = 12;
    const WD = 13;
    const LDATA = 14;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::HAS_RTBUS => array(
            'name' => 'has_rtbus',
            'required' => false,
            'type' => 5,
        ),
        self::QID => array(
            'name' => 'qid',
            'required' => false,
            'type' => 7,
        ),
        self::CHANNEL => array(
            'name' => 'channel',
            'required' => false,
            'type' => 7,
        ),
        self::CLIENTSV => array(
            'name' => 'clientsv',
            'required' => false,
            'type' => 7,
        ),
        self::IM => array(
            'name' => 'im',
            'required' => false,
            'type' => 7,
        ),
        self::MB => array(
            'name' => 'mb',
            'required' => false,
            'type' => 7,
        ),
        self::NEWMAP => array(
            'name' => 'newmap',
            'required' => false,
            'type' => 7,
        ),
        self::OS => array(
            'name' => 'os',
            'required' => false,
            'type' => 7,
        ),
        self::QT => array(
            'name' => 'qt',
            'required' => false,
            'type' => 7,
        ),
        self::RESID => array(
            'name' => 'resid',
            'required' => false,
            'type' => 7,
        ),
        self::SV => array(
            'name' => 'sv',
            'required' => false,
            'type' => 7,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => 5,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::LDATA => array(
            'name' => 'ldata',
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
        $this->values[self::HAS_RTBUS] = null;
        $this->values[self::QID] = null;
        $this->values[self::CHANNEL] = null;
        $this->values[self::CLIENTSV] = null;
        $this->values[self::IM] = null;
        $this->values[self::MB] = null;
        $this->values[self::NEWMAP] = null;
        $this->values[self::OS] = null;
        $this->values[self::QT] = null;
        $this->values[self::RESID] = null;
        $this->values[self::SV] = null;
        $this->values[self::TIME] = null;
        $this->values[self::WD] = null;
        $this->values[self::LDATA] = null;
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
     * Sets value of 'qid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQid($value) {
        return $this->set(self::QID, $value);
    }

    /**
     * Returns value of 'qid' property
     *
     * @return string
     */
    public function getQid() {
        return $this->get(self::QID);
    }

    /**
     * Sets value of 'channel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChannel($value) {
        return $this->set(self::CHANNEL, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return string
     */
    public function getChannel() {
        return $this->get(self::CHANNEL);
    }

    /**
     * Sets value of 'clientsv' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientsv($value) {
        return $this->set(self::CLIENTSV, $value);
    }

    /**
     * Returns value of 'clientsv' property
     *
     * @return string
     */
    public function getClientsv() {
        return $this->get(self::CLIENTSV);
    }

    /**
     * Sets value of 'im' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIm($value) {
        return $this->set(self::IM, $value);
    }

    /**
     * Returns value of 'im' property
     *
     * @return string
     */
    public function getIm() {
        return $this->get(self::IM);
    }

    /**
     * Sets value of 'mb' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMb($value) {
        return $this->set(self::MB, $value);
    }

    /**
     * Returns value of 'mb' property
     *
     * @return string
     */
    public function getMb() {
        return $this->get(self::MB);
    }

    /**
     * Sets value of 'newmap' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewmap($value) {
        return $this->set(self::NEWMAP, $value);
    }

    /**
     * Returns value of 'newmap' property
     *
     * @return string
     */
    public function getNewmap() {
        return $this->get(self::NEWMAP);
    }

    /**
     * Sets value of 'os' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOs($value) {
        return $this->set(self::OS, $value);
    }

    /**
     * Returns value of 'os' property
     *
     * @return string
     */
    public function getOs() {
        return $this->get(self::OS);
    }

    /**
     * Sets value of 'qt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQt($value) {
        return $this->set(self::QT, $value);
    }

    /**
     * Returns value of 'qt' property
     *
     * @return string
     */
    public function getQt() {
        return $this->get(self::QT);
    }

    /**
     * Sets value of 'resid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResid($value) {
        return $this->set(self::RESID, $value);
    }

    /**
     * Returns value of 'resid' property
     *
     * @return string
     */
    public function getResid() {
        return $this->get(self::RESID);
    }

    /**
     * Sets value of 'sv' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSv($value) {
        return $this->set(self::SV, $value);
    }

    /**
     * Returns value of 'sv' property
     *
     * @return string
     */
    public function getSv() {
        return $this->get(self::SV);
    }

    /**
     * Sets value of 'time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTime($value) {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return int
     */
    public function getTime() {
        return $this->get(self::TIME);
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
     * Sets value of 'ldata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLdata($value) {
        return $this->set(self::LDATA, $value);
    }

    /**
     * Returns value of 'ldata' property
     *
     * @return string
     */
    public function getLdata() {
        return $this->get(self::LDATA);
    }
}
}

/**
 * Groupon message
 */
if (!class_exists('Groupon')) {
class Groupon extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const GROUPON_START = 1;
    const REGULAR_PRICE = 2;
    const GROUPON_NUM = 3;
    const GROUPON_PRICE = 4;
    const GROUPON_TYPE = 5;
    const GROUPON_ID = 6;
    const GROUPON_URL_MOBILE = 7;
    const CN_NAME = 8;
    const GROUPON_URL_PC = 9;
    const GROUPON_IMAGE = 10;
    const GROUPON_REBATE = 11;
    const GROUPON_SITE = 12;
    const GROUPON_END = 13;
    const GROUPON_TITLE = 14;
    const GROUPON_WEBAPP_URL = 15;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::GROUPON_START => array(
            'name' => 'groupon_start',
            'required' => false,
            'type' => 7,
        ),
        self::REGULAR_PRICE => array(
            'name' => 'regular_price',
            'required' => false,
            'type' => 7,
        ),
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
        self::GROUPON_TYPE => array(
            'name' => 'groupon_type',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_ID => array(
            'name' => 'groupon_id',
            'required' => false,
            'type' => 5,
        ),
        self::GROUPON_URL_MOBILE => array(
            'name' => 'groupon_url_mobile',
            'required' => false,
            'type' => 7,
        ),
        self::CN_NAME => array(
            'name' => 'cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_URL_PC => array(
            'name' => 'groupon_url_pc',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_IMAGE => array(
            'name' => 'groupon_image',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_REBATE => array(
            'name' => 'groupon_rebate',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_SITE => array(
            'name' => 'groupon_site',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_END => array(
            'name' => 'groupon_end',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_TITLE => array(
            'name' => 'groupon_title',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_WEBAPP_URL => array(
            'name' => 'groupon_webapp_url',
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
        $this->values[self::GROUPON_START] = null;
        $this->values[self::REGULAR_PRICE] = null;
        $this->values[self::GROUPON_NUM] = null;
        $this->values[self::GROUPON_PRICE] = null;
        $this->values[self::GROUPON_TYPE] = null;
        $this->values[self::GROUPON_ID] = null;
        $this->values[self::GROUPON_URL_MOBILE] = null;
        $this->values[self::CN_NAME] = null;
        $this->values[self::GROUPON_URL_PC] = null;
        $this->values[self::GROUPON_IMAGE] = null;
        $this->values[self::GROUPON_REBATE] = null;
        $this->values[self::GROUPON_SITE] = null;
        $this->values[self::GROUPON_END] = null;
        $this->values[self::GROUPON_TITLE] = null;
        $this->values[self::GROUPON_WEBAPP_URL] = null;
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
     * Sets value of 'groupon_start' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponStart($value) {
        return $this->set(self::GROUPON_START, $value);
    }

    /**
     * Returns value of 'groupon_start' property
     *
     * @return string
     */
    public function getGrouponStart() {
        return $this->get(self::GROUPON_START);
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
     * Sets value of 'groupon_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponType($value) {
        return $this->set(self::GROUPON_TYPE, $value);
    }

    /**
     * Returns value of 'groupon_type' property
     *
     * @return string
     */
    public function getGrouponType() {
        return $this->get(self::GROUPON_TYPE);
    }

    /**
     * Sets value of 'groupon_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGrouponId($value) {
        return $this->set(self::GROUPON_ID, $value);
    }

    /**
     * Returns value of 'groupon_id' property
     *
     * @return int
     */
    public function getGrouponId() {
        return $this->get(self::GROUPON_ID);
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
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
    }

    /**
     * Sets value of 'groupon_url_pc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponUrlPc($value) {
        return $this->set(self::GROUPON_URL_PC, $value);
    }

    /**
     * Returns value of 'groupon_url_pc' property
     *
     * @return string
     */
    public function getGrouponUrlPc() {
        return $this->get(self::GROUPON_URL_PC);
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
     * Sets value of 'groupon_rebate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponRebate($value) {
        return $this->set(self::GROUPON_REBATE, $value);
    }

    /**
     * Returns value of 'groupon_rebate' property
     *
     * @return string
     */
    public function getGrouponRebate() {
        return $this->get(self::GROUPON_REBATE);
    }

    /**
     * Sets value of 'groupon_site' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponSite($value) {
        return $this->set(self::GROUPON_SITE, $value);
    }

    /**
     * Returns value of 'groupon_site' property
     *
     * @return string
     */
    public function getGrouponSite() {
        return $this->get(self::GROUPON_SITE);
    }

    /**
     * Sets value of 'groupon_end' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponEnd($value) {
        return $this->set(self::GROUPON_END, $value);
    }

    /**
     * Returns value of 'groupon_end' property
     *
     * @return string
     */
    public function getGrouponEnd() {
        return $this->get(self::GROUPON_END);
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
}
}

/**
 * HotelOriInfo message
 */
if (!class_exists('HotelOriInfo')) {
class HotelOriInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SRC = 1;
    const HOTEL_ID = 2;
    const HOTEL_FLAG = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SRC => array(
            'name' => 'src',
            'required' => false,
            'type' => 7,
        ),
        self::HOTEL_ID => array(
            'name' => 'hotel_id',
            'required' => false,
            'type' => 7,
        ),
        self::HOTEL_FLAG => array(
            'name' => 'hotel_flag',
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
        $this->values[self::SRC] = null;
        $this->values[self::HOTEL_ID] = null;
        $this->values[self::HOTEL_FLAG] = null;
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
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value) {
        return $this->set(self::SRC, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc() {
        return $this->get(self::SRC);
    }

    /**
     * Sets value of 'hotel_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHotelId($value) {
        return $this->set(self::HOTEL_ID, $value);
    }

    /**
     * Returns value of 'hotel_id' property
     *
     * @return string
     */
    public function getHotelId() {
        return $this->get(self::HOTEL_ID);
    }

    /**
     * Sets value of 'hotel_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHotelFlag($value) {
        return $this->set(self::HOTEL_FLAG, $value);
    }

    /**
     * Returns value of 'hotel_flag' property
     *
     * @return string
     */
    public function getHotelFlag() {
        return $this->get(self::HOTEL_FLAG);
    }
}
}

/**
 * Link message
 */
if (!class_exists('Link')) {
class Link extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SRC = 1;
    const URL = 2;
    const URL_MOBILEPHONE = 3;
    const CN_NAME = 4;
    const NAME = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SRC => array(
            'name' => 'src',
            'required' => false,
            'type' => 7,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => 7,
        ),
        self::URL_MOBILEPHONE => array(
            'name' => 'url_mobilephone',
            'required' => false,
            'type' => 7,
        ),
        self::CN_NAME => array(
            'name' => 'cn_name',
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
        $this->values[self::SRC] = null;
        $this->values[self::URL] = null;
        $this->values[self::URL_MOBILEPHONE] = null;
        $this->values[self::CN_NAME] = null;
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
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value) {
        return $this->set(self::SRC, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc() {
        return $this->get(self::SRC);
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
     * Sets value of 'url_mobilephone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrlMobilephone($value) {
        return $this->set(self::URL_MOBILEPHONE, $value);
    }

    /**
     * Returns value of 'url_mobilephone' property
     *
     * @return string
     */
    public function getUrlMobilephone() {
        return $this->get(self::URL_MOBILEPHONE);
    }

    /**
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
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
 * OtaInfo message
 */
if (!class_exists('OtaInfo')) {
class OtaInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const EN_NAME = 1;
    const OTA_PHONE = 2;
    const OTA_TIPS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::EN_NAME => array(
            'name' => 'en_name',
            'required' => false,
            'type' => 7,
        ),
        self::OTA_PHONE => array(
            'name' => 'ota_phone',
            'required' => false,
            'type' => 7,
        ),
        self::OTA_TIPS => array(
            'name' => 'ota_tips',
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
        $this->values[self::EN_NAME] = null;
        $this->values[self::OTA_PHONE] = null;
        $this->values[self::OTA_TIPS] = null;
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
     * Sets value of 'en_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEnName($value) {
        return $this->set(self::EN_NAME, $value);
    }

    /**
     * Returns value of 'en_name' property
     *
     * @return string
     */
    public function getEnName() {
        return $this->get(self::EN_NAME);
    }

    /**
     * Sets value of 'ota_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOtaPhone($value) {
        return $this->set(self::OTA_PHONE, $value);
    }

    /**
     * Returns value of 'ota_phone' property
     *
     * @return string
     */
    public function getOtaPhone() {
        return $this->get(self::OTA_PHONE);
    }

    /**
     * Sets value of 'ota_tips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOtaTips($value) {
        return $this->set(self::OTA_TIPS, $value);
    }

    /**
     * Returns value of 'ota_tips' property
     *
     * @return string
     */
    public function getOtaTips() {
        return $this->get(self::OTA_TIPS);
    }
}
}

/**
 * OtaUrl message
 */
if (!class_exists('OtaUrl')) {
class OtaUrl extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SRC = 1;
    const URL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SRC => array(
            'name' => 'src',
            'required' => false,
            'type' => 7,
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
        $this->values[self::SRC] = null;
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
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value) {
        return $this->set(self::SRC, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc() {
        return $this->get(self::SRC);
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
 * Top message
 */
if (!class_exists('Top')) {
class Top extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const UID = 1;
    const NAME = 2;
    const REGION = 3;
    const TAG = 4;
    const RANK = 5;
    const TITLE = 6;
    const WEEK_VISIT = 7;
    const OVERALL_RATING = 8;
    const COMMENT_NUM = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::REGION => array(
            'name' => 'region',
            'required' => false,
            'type' => 7,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 7,
        ),
        self::RANK => array(
            'name' => 'rank',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::WEEK_VISIT => array(
            'name' => 'week_visit',
            'required' => false,
            'type' => 7,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT_NUM => array(
            'name' => 'comment_num',
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
        $this->values[self::UID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::REGION] = null;
        $this->values[self::TAG] = null;
        $this->values[self::RANK] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::WEEK_VISIT] = null;
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::COMMENT_NUM] = null;
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
     * Sets value of 'region' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegion($value) {
        return $this->set(self::REGION, $value);
    }

    /**
     * Returns value of 'region' property
     *
     * @return string
     */
    public function getRegion() {
        return $this->get(self::REGION);
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
     * Sets value of 'rank' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRank($value) {
        return $this->set(self::RANK, $value);
    }

    /**
     * Returns value of 'rank' property
     *
     * @return string
     */
    public function getRank() {
        return $this->get(self::RANK);
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
     * Sets value of 'week_visit' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeekVisit($value) {
        return $this->set(self::WEEK_VISIT, $value);
    }

    /**
     * Returns value of 'week_visit' property
     *
     * @return string
     */
    public function getWeekVisit() {
        return $this->get(self::WEEK_VISIT);
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
}
}

/**
 * Toplist message
 */
if (!class_exists('Toplist')) {
class Toplist extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TOP = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOP => array(
            'name' => 'top',
            'required' => false,
            'type' => 'Top',
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
        $this->values[self::TOP] = null;
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
     * Sets value of 'top' property
     *
     * @param Top $value Property value
     *
     * @return null
     */
    public function setTop(Top $value) {
        return $this->set(self::TOP, $value);
    }

    /**
     * Returns value of 'top' property
     *
     * @return Top
     */
    public function getTop() {
        return $this->get(self::TOP);
    }
}
}

/**
 * Main message
 */
if (!class_exists('Main')) {
class Main extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const THIRD_FROM = 1;
    const THIRD_ID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::THIRD_FROM => array(
            'name' => 'third_from',
            'required' => false,
            'type' => 7,
        ),
        self::THIRD_ID => array(
            'name' => 'third_id',
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
        $this->values[self::THIRD_FROM] = null;
        $this->values[self::THIRD_ID] = null;
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
     * Sets value of 'third_from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThirdFrom($value) {
        return $this->set(self::THIRD_FROM, $value);
    }

    /**
     * Returns value of 'third_from' property
     *
     * @return string
     */
    public function getThirdFrom() {
        return $this->get(self::THIRD_FROM);
    }

    /**
     * Sets value of 'third_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThirdId($value) {
        return $this->set(self::THIRD_ID, $value);
    }

    /**
     * Returns value of 'third_id' property
     *
     * @return string
     */
    public function getThirdId() {
        return $this->get(self::THIRD_ID);
    }
}
}

/**
 * Meishipaihao message
 */
if (!class_exists('Meishipaihao')) {
class Meishipaihao extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IS_OK = 1;
    const MAIN = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_OK => array(
            'name' => 'is_ok',
            'required' => false,
            'type' => 5,
        ),
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => 'Main',
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
        $this->values[self::IS_OK] = null;
        $this->values[self::MAIN] = null;
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
     * Sets value of 'is_ok' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsOk($value) {
        return $this->set(self::IS_OK, $value);
    }

    /**
     * Returns value of 'is_ok' property
     *
     * @return int
     */
    public function getIsOk() {
        return $this->get(self::IS_OK);
    }

    /**
     * Sets value of 'main' property
     *
     * @param Main $value Property value
     *
     * @return null
     */
    public function setMain(Main $value) {
        return $this->set(self::MAIN, $value);
    }

    /**
     * Returns value of 'main' property
     *
     * @return Main
     */
    public function getMain() {
        return $this->get(self::MAIN);
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
 * DetailInfo message
 */
if (!class_exists('DetailInfo')) {
class DetailInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const GROUPON = 8;
    const HOTEL_ORI_INFO = 10;
    const LINK = 16;
    const OTA_INFO = 21;
    const OTA_URL = 22;
    const POINT = 27;
    const TOPLIST = 44;
    const AREAID = 1;
    const BID = 2;
    const CHECKIN_NUM = 3;
    const COLLECT_NUM = 4;
    const COMMENT_NUM = 5;
    const FACILITY_RATING = 6;
    const FROM_PDS = 7;
    const GROUPON_NUM = 9;
    const HYGIENE_RATING = 11;
    const IMAGE = 12;
    const IMAGE_FROM = 13;
    const IMAGE_NUM = 14;
    const LATEST_NUM = 15;
    const MINING_LOW_PRICE_FLAG = 17;
    const NAME = 18;
    const NEW_CATALOG_ID = 19;
    const ORIGIN_PRICE = 20;
    const OVERALL_RATING = 23;
    const PC_BOOKABLE = 24;
    const PC_REALTIME_PRICE = 25;
    const PHONE = 26;
    const POI_ADDRESS = 28;
    const PREMIUM_FLAG = 29;
    const PRICE = 30;
    const REC_REASON = 31;
    const RECOMMAND_INDEX = 32;
    const REVIEW_FLAG = 33;
    const SERVICE_RATING = 34;
    const SHORT_COMM = 35;
    const SPECIAL_SERVICE = 36;
    const S_TIME = 37;
    const STATUS = 38;
    const STORAGE_SRC = 39;
    const TAG = 40;
    const TONIGHT_PRICE = 41;
    const TONIGHT_SALE_FLAG = 42;
    const TOTAL_NUM = 43;
    const WAP_BOOKABLE = 45;
    const WISE_FULLROOM = 46;
    const WISE_HOTEL_TYPE = 47;
    const WISE_HOTEL_TYPE_NAME = 48;
    const WISE_LOW_PRICE = 49;
    const WISE_PRICE = 50;
    const WISE_REALTIME_PRICE = 51;
    const WISE_REALTIME_PRICE_FLAG = 52;
    const FLAG = 53;
    const GROUPON_FLAG = 54;
    const GROUPON_TOTAL = 55;
    const IS_GWJ = 56;
    const PRICE_TEXT = 57;
    const GUIDE = 58;
    const MEISHIPAIHAO = 59;
    const BOOK_INFO = 61;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::GROUPON => array(
            'name' => 'groupon',
            'repeated' => true,
            'type' => 'Groupon',
        ),
        self::HOTEL_ORI_INFO => array(
            'name' => 'hotel_ori_info',
            'repeated' => true,
            'type' => 'HotelOriInfo',
        ),
        self::LINK => array(
            'name' => 'link',
            'repeated' => true,
            'type' => 'Link',
        ),
        self::OTA_INFO => array(
            'name' => 'ota_info',
            'repeated' => true,
            'type' => 'OtaInfo',
        ),
        self::OTA_URL => array(
            'name' => 'ota_url',
            'repeated' => true,
            'type' => 'OtaUrl',
        ),
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => 'Point',
        ),
        self::TOPLIST => array(
            'name' => 'toplist',
            'required' => false,
            'type' => 'Toplist',
        ),
        self::AREAID => array(
            'name' => 'areaid',
            'required' => false,
            'type' => 5,
        ),
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => 7,
        ),
        self::CHECKIN_NUM => array(
            'name' => 'checkin_num',
            'required' => false,
            'type' => 7,
        ),
        self::COLLECT_NUM => array(
            'name' => 'collect_num',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT_NUM => array(
            'name' => 'comment_num',
            'required' => false,
            'type' => 7,
        ),
        self::FACILITY_RATING => array(
            'name' => 'facility_rating',
            'required' => false,
            'type' => 7,
        ),
        self::FROM_PDS => array(
            'name' => 'from_pds',
            'required' => false,
            'type' => 7,
        ),
        self::GROUPON_NUM => array(
            'name' => 'groupon_num',
            'required' => false,
            'type' => 5,
        ),
        self::HYGIENE_RATING => array(
            'name' => 'hygiene_rating',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGE_FROM => array(
            'name' => 'image_from',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGE_NUM => array(
            'name' => 'image_num',
            'required' => false,
            'type' => 7,
        ),
        self::LATEST_NUM => array(
            'name' => 'latest_num',
            'required' => false,
            'type' => 7,
        ),
        self::MINING_LOW_PRICE_FLAG => array(
            'name' => 'mining_low_price_flag',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::NEW_CATALOG_ID => array(
            'name' => 'new_catalog_id',
            'required' => false,
            'type' => 7,
        ),
        self::ORIGIN_PRICE => array(
            'name' => 'origin_price',
            'required' => false,
            'type' => 7,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 7,
        ),
        self::PC_BOOKABLE => array(
            'name' => 'pc_bookable',
            'required' => false,
            'type' => 7,
        ),
        self::PC_REALTIME_PRICE => array(
            'name' => 'pc_realtime_price',
            'required' => false,
            'type' => 7,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'required' => false,
            'type' => 7,
        ),
        self::POI_ADDRESS => array(
            'name' => 'poi_address',
            'required' => false,
            'type' => 7,
        ),
        self::PREMIUM_FLAG => array(
            'name' => 'premium_flag',
            'required' => false,
            'type' => 5,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::REC_REASON => array(
            'name' => 'rec_reason',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMAND_INDEX => array(
            'name' => 'recommand_index',
            'required' => false,
            'type' => 7,
        ),
        self::REVIEW_FLAG => array(
            'name' => 'review_flag',
            'required' => false,
            'type' => 5,
        ),
        self::SERVICE_RATING => array(
            'name' => 'service_rating',
            'required' => false,
            'type' => 7,
        ),
        self::SHORT_COMM => array(
            'name' => 'short_comm',
            'required' => false,
            'type' => 7,
        ),
        self::SPECIAL_SERVICE => array(
            'name' => 'special_service',
            'required' => false,
            'type' => 7,
        ),
        self::S_TIME => array(
            'name' => 's_time',
            'required' => false,
            'type' => 5,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 7,
        ),
        self::STORAGE_SRC => array(
            'name' => 'storage_src',
            'required' => false,
            'type' => 7,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 7,
        ),
        self::TONIGHT_PRICE => array(
            'name' => 'tonight_price',
            'required' => false,
            'type' => 7,
        ),
        self::TONIGHT_SALE_FLAG => array(
            'name' => 'tonight_sale_flag',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL_NUM => array(
            'name' => 'total_num',
            'required' => false,
            'type' => 7,
        ),
        self::WAP_BOOKABLE => array(
            'name' => 'wap_bookable',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_FULLROOM => array(
            'name' => 'wise_fullroom',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_HOTEL_TYPE => array(
            'name' => 'wise_hotel_type',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_HOTEL_TYPE_NAME => array(
            'name' => 'wise_hotel_type_name',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_LOW_PRICE => array(
            'name' => 'wise_low_price',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_PRICE => array(
            'name' => 'wise_price',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_REALTIME_PRICE => array(
            'name' => 'wise_realtime_price',
            'required' => false,
            'type' => 7,
        ),
        self::WISE_REALTIME_PRICE_FLAG => array(
            'name' => 'wise_realtime_price_flag',
            'required' => false,
            'type' => 7,
        ),
        self::FLAG => array(
            'name' => 'flag',
            'repeated' => true,
            'type' => 7,
        ),
        self::GROUPON_FLAG => array(
            'name' => 'groupon_flag',
            'required' => false,
            'type' => 5,
        ),
        self::GROUPON_TOTAL => array(
            'name' => 'groupon_total',
            'required' => false,
            'type' => 5,
        ),
        self::IS_GWJ => array(
            'name' => 'is_gwj',
            'required' => false,
            'type' => 5,
        ),
        self::PRICE_TEXT => array(
            'name' => 'price_text',
            'required' => false,
            'type' => 7,
        ),
        self::GUIDE => array(
            'name' => 'guide',
            'required' => false,
            'type' => 7,
        ),
        self::MEISHIPAIHAO => array(
            'name' => 'meishipaihao',
            'required' => false,
            'type' => 'Meishipaihao',
        ),
        self::BOOK_INFO => array(
            'name' => 'book_info',
            'required' => false,
            'type' => 'BookInfo',
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
        $this->values[self::GROUPON] = array();
        $this->values[self::HOTEL_ORI_INFO] = array();
        $this->values[self::LINK] = array();
        $this->values[self::OTA_INFO] = array();
        $this->values[self::OTA_URL] = array();
        $this->values[self::POINT] = null;
        $this->values[self::TOPLIST] = null;
        $this->values[self::AREAID] = null;
        $this->values[self::BID] = null;
        $this->values[self::CHECKIN_NUM] = null;
        $this->values[self::COLLECT_NUM] = null;
        $this->values[self::COMMENT_NUM] = null;
        $this->values[self::FACILITY_RATING] = null;
        $this->values[self::FROM_PDS] = null;
        $this->values[self::GROUPON_NUM] = null;
        $this->values[self::HYGIENE_RATING] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::IMAGE_FROM] = null;
        $this->values[self::IMAGE_NUM] = null;
        $this->values[self::LATEST_NUM] = null;
        $this->values[self::MINING_LOW_PRICE_FLAG] = null;
        $this->values[self::NAME] = null;
        $this->values[self::NEW_CATALOG_ID] = null;
        $this->values[self::ORIGIN_PRICE] = null;
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::PC_BOOKABLE] = null;
        $this->values[self::PC_REALTIME_PRICE] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::POI_ADDRESS] = null;
        $this->values[self::PREMIUM_FLAG] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::REC_REASON] = null;
        $this->values[self::RECOMMAND_INDEX] = null;
        $this->values[self::REVIEW_FLAG] = null;
        $this->values[self::SERVICE_RATING] = null;
        $this->values[self::SHORT_COMM] = null;
        $this->values[self::SPECIAL_SERVICE] = null;
        $this->values[self::S_TIME] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::STORAGE_SRC] = null;
        $this->values[self::TAG] = null;
        $this->values[self::TONIGHT_PRICE] = null;
        $this->values[self::TONIGHT_SALE_FLAG] = null;
        $this->values[self::TOTAL_NUM] = null;
        $this->values[self::WAP_BOOKABLE] = null;
        $this->values[self::WISE_FULLROOM] = null;
        $this->values[self::WISE_HOTEL_TYPE] = null;
        $this->values[self::WISE_HOTEL_TYPE_NAME] = null;
        $this->values[self::WISE_LOW_PRICE] = null;
        $this->values[self::WISE_PRICE] = null;
        $this->values[self::WISE_REALTIME_PRICE] = null;
        $this->values[self::WISE_REALTIME_PRICE_FLAG] = null;
        $this->values[self::FLAG] = array();
        $this->values[self::GROUPON_FLAG] = null;
        $this->values[self::GROUPON_TOTAL] = null;
        $this->values[self::IS_GWJ] = null;
        $this->values[self::PRICE_TEXT] = null;
        $this->values[self::GUIDE] = null;
        $this->values[self::MEISHIPAIHAO] = null;
        $this->values[self::BOOK_INFO] = null;
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
     * Appends value to 'groupon' list
     *
     * @param Groupon $value Value to append
     *
     * @return null
     */
    public function appendGroupon(Groupon $value) {
        return $this->append(self::GROUPON, $value);
    }

    /**
     * Clears 'groupon' list
     *
     * @return null
     */
    public function clearGroupon() {
        return $this->clear(self::GROUPON);
    }

    /**
     * Returns 'groupon' list
     *
     * @return Groupon[]
     */
    public function getGroupon() {
        return $this->get(self::GROUPON);
    }

    /**
     * Returns 'groupon' iterator
     *
     * @return ArrayIterator
     */
    public function getGrouponIterator() {
        return new ArrayIterator($this->get(self::GROUPON));
    }

    /**
     * Returns element from 'groupon' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Groupon
     */
    public function getGrouponAt($offset) {
        return $this->get(self::GROUPON, $offset);
    }

    /**
     * Returns count of 'groupon' list
     *
     * @return int
     */
    public function getGrouponCount() {
        return $this->count(self::GROUPON);
    }

    /**
     * Appends value to 'hotel_ori_info' list
     *
     * @param HotelOriInfo $value Value to append
     *
     * @return null
     */
    public function appendHotelOriInfo(HotelOriInfo $value) {
        return $this->append(self::HOTEL_ORI_INFO, $value);
    }

    /**
     * Clears 'hotel_ori_info' list
     *
     * @return null
     */
    public function clearHotelOriInfo() {
        return $this->clear(self::HOTEL_ORI_INFO);
    }

    /**
     * Returns 'hotel_ori_info' list
     *
     * @return HotelOriInfo[]
     */
    public function getHotelOriInfo() {
        return $this->get(self::HOTEL_ORI_INFO);
    }

    /**
     * Returns 'hotel_ori_info' iterator
     *
     * @return ArrayIterator
     */
    public function getHotelOriInfoIterator() {
        return new ArrayIterator($this->get(self::HOTEL_ORI_INFO));
    }

    /**
     * Returns element from 'hotel_ori_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return HotelOriInfo
     */
    public function getHotelOriInfoAt($offset) {
        return $this->get(self::HOTEL_ORI_INFO, $offset);
    }

    /**
     * Returns count of 'hotel_ori_info' list
     *
     * @return int
     */
    public function getHotelOriInfoCount() {
        return $this->count(self::HOTEL_ORI_INFO);
    }

    /**
     * Appends value to 'link' list
     *
     * @param Link $value Value to append
     *
     * @return null
     */
    public function appendLink(Link $value) {
        return $this->append(self::LINK, $value);
    }

    /**
     * Clears 'link' list
     *
     * @return null
     */
    public function clearLink() {
        return $this->clear(self::LINK);
    }

    /**
     * Returns 'link' list
     *
     * @return Link[]
     */
    public function getLink() {
        return $this->get(self::LINK);
    }

    /**
     * Returns 'link' iterator
     *
     * @return ArrayIterator
     */
    public function getLinkIterator() {
        return new ArrayIterator($this->get(self::LINK));
    }

    /**
     * Returns element from 'link' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Link
     */
    public function getLinkAt($offset) {
        return $this->get(self::LINK, $offset);
    }

    /**
     * Returns count of 'link' list
     *
     * @return int
     */
    public function getLinkCount() {
        return $this->count(self::LINK);
    }

    /**
     * Appends value to 'ota_info' list
     *
     * @param OtaInfo $value Value to append
     *
     * @return null
     */
    public function appendOtaInfo(OtaInfo $value) {
        return $this->append(self::OTA_INFO, $value);
    }

    /**
     * Clears 'ota_info' list
     *
     * @return null
     */
    public function clearOtaInfo() {
        return $this->clear(self::OTA_INFO);
    }

    /**
     * Returns 'ota_info' list
     *
     * @return OtaInfo[]
     */
    public function getOtaInfo() {
        return $this->get(self::OTA_INFO);
    }

    /**
     * Returns 'ota_info' iterator
     *
     * @return ArrayIterator
     */
    public function getOtaInfoIterator() {
        return new ArrayIterator($this->get(self::OTA_INFO));
    }

    /**
     * Returns element from 'ota_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OtaInfo
     */
    public function getOtaInfoAt($offset) {
        return $this->get(self::OTA_INFO, $offset);
    }

    /**
     * Returns count of 'ota_info' list
     *
     * @return int
     */
    public function getOtaInfoCount() {
        return $this->count(self::OTA_INFO);
    }

    /**
     * Appends value to 'ota_url' list
     *
     * @param OtaUrl $value Value to append
     *
     * @return null
     */
    public function appendOtaUrl(OtaUrl $value) {
        return $this->append(self::OTA_URL, $value);
    }

    /**
     * Clears 'ota_url' list
     *
     * @return null
     */
    public function clearOtaUrl() {
        return $this->clear(self::OTA_URL);
    }

    /**
     * Returns 'ota_url' list
     *
     * @return OtaUrl[]
     */
    public function getOtaUrl() {
        return $this->get(self::OTA_URL);
    }

    /**
     * Returns 'ota_url' iterator
     *
     * @return ArrayIterator
     */
    public function getOtaUrlIterator() {
        return new ArrayIterator($this->get(self::OTA_URL));
    }

    /**
     * Returns element from 'ota_url' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OtaUrl
     */
    public function getOtaUrlAt($offset) {
        return $this->get(self::OTA_URL, $offset);
    }

    /**
     * Returns count of 'ota_url' list
     *
     * @return int
     */
    public function getOtaUrlCount() {
        return $this->count(self::OTA_URL);
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
     * Sets value of 'toplist' property
     *
     * @param Toplist $value Property value
     *
     * @return null
     */
    public function setToplist(Toplist $value) {
        return $this->set(self::TOPLIST, $value);
    }

    /**
     * Returns value of 'toplist' property
     *
     * @return Toplist
     */
    public function getToplist() {
        return $this->get(self::TOPLIST);
    }

    /**
     * Sets value of 'areaid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAreaid($value) {
        return $this->set(self::AREAID, $value);
    }

    /**
     * Returns value of 'areaid' property
     *
     * @return int
     */
    public function getAreaid() {
        return $this->get(self::AREAID);
    }

    /**
     * Sets value of 'bid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBid($value) {
        return $this->set(self::BID, $value);
    }

    /**
     * Returns value of 'bid' property
     *
     * @return string
     */
    public function getBid() {
        return $this->get(self::BID);
    }

    /**
     * Sets value of 'checkin_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCheckinNum($value) {
        return $this->set(self::CHECKIN_NUM, $value);
    }

    /**
     * Returns value of 'checkin_num' property
     *
     * @return string
     */
    public function getCheckinNum() {
        return $this->get(self::CHECKIN_NUM);
    }

    /**
     * Sets value of 'collect_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCollectNum($value) {
        return $this->set(self::COLLECT_NUM, $value);
    }

    /**
     * Returns value of 'collect_num' property
     *
     * @return string
     */
    public function getCollectNum() {
        return $this->get(self::COLLECT_NUM);
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
     * Sets value of 'facility_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFacilityRating($value) {
        return $this->set(self::FACILITY_RATING, $value);
    }

    /**
     * Returns value of 'facility_rating' property
     *
     * @return string
     */
    public function getFacilityRating() {
        return $this->get(self::FACILITY_RATING);
    }

    /**
     * Sets value of 'from_pds' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromPds($value) {
        return $this->set(self::FROM_PDS, $value);
    }

    /**
     * Returns value of 'from_pds' property
     *
     * @return string
     */
    public function getFromPds() {
        return $this->get(self::FROM_PDS);
    }

    /**
     * Sets value of 'groupon_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGrouponNum($value) {
        return $this->set(self::GROUPON_NUM, $value);
    }

    /**
     * Returns value of 'groupon_num' property
     *
     * @return int
     */
    public function getGrouponNum() {
        return $this->get(self::GROUPON_NUM);
    }

    /**
     * Sets value of 'hygiene_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHygieneRating($value) {
        return $this->set(self::HYGIENE_RATING, $value);
    }

    /**
     * Returns value of 'hygiene_rating' property
     *
     * @return string
     */
    public function getHygieneRating() {
        return $this->get(self::HYGIENE_RATING);
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
     * Sets value of 'image_from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImageFrom($value) {
        return $this->set(self::IMAGE_FROM, $value);
    }

    /**
     * Returns value of 'image_from' property
     *
     * @return string
     */
    public function getImageFrom() {
        return $this->get(self::IMAGE_FROM);
    }

    /**
     * Sets value of 'image_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImageNum($value) {
        return $this->set(self::IMAGE_NUM, $value);
    }

    /**
     * Returns value of 'image_num' property
     *
     * @return string
     */
    public function getImageNum() {
        return $this->get(self::IMAGE_NUM);
    }

    /**
     * Sets value of 'latest_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLatestNum($value) {
        return $this->set(self::LATEST_NUM, $value);
    }

    /**
     * Returns value of 'latest_num' property
     *
     * @return string
     */
    public function getLatestNum() {
        return $this->get(self::LATEST_NUM);
    }

    /**
     * Sets value of 'mining_low_price_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMiningLowPriceFlag($value) {
        return $this->set(self::MINING_LOW_PRICE_FLAG, $value);
    }

    /**
     * Returns value of 'mining_low_price_flag' property
     *
     * @return string
     */
    public function getMiningLowPriceFlag() {
        return $this->get(self::MINING_LOW_PRICE_FLAG);
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
     * Sets value of 'origin_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginPrice($value) {
        return $this->set(self::ORIGIN_PRICE, $value);
    }

    /**
     * Returns value of 'origin_price' property
     *
     * @return string
     */
    public function getOriginPrice() {
        return $this->get(self::ORIGIN_PRICE);
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
     * Sets value of 'pc_bookable' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPcBookable($value) {
        return $this->set(self::PC_BOOKABLE, $value);
    }

    /**
     * Returns value of 'pc_bookable' property
     *
     * @return string
     */
    public function getPcBookable() {
        return $this->get(self::PC_BOOKABLE);
    }

    /**
     * Sets value of 'pc_realtime_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPcRealtimePrice($value) {
        return $this->set(self::PC_REALTIME_PRICE, $value);
    }

    /**
     * Returns value of 'pc_realtime_price' property
     *
     * @return string
     */
    public function getPcRealtimePrice() {
        return $this->get(self::PC_REALTIME_PRICE);
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value) {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone() {
        return $this->get(self::PHONE);
    }

    /**
     * Sets value of 'poi_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiAddress($value) {
        return $this->set(self::POI_ADDRESS, $value);
    }

    /**
     * Returns value of 'poi_address' property
     *
     * @return string
     */
    public function getPoiAddress() {
        return $this->get(self::POI_ADDRESS);
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
     * Sets value of 'rec_reason' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecReason($value) {
        return $this->set(self::REC_REASON, $value);
    }

    /**
     * Returns value of 'rec_reason' property
     *
     * @return string
     */
    public function getRecReason() {
        return $this->get(self::REC_REASON);
    }

    /**
     * Sets value of 'recommand_index' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommandIndex($value) {
        return $this->set(self::RECOMMAND_INDEX, $value);
    }

    /**
     * Returns value of 'recommand_index' property
     *
     * @return string
     */
    public function getRecommandIndex() {
        return $this->get(self::RECOMMAND_INDEX);
    }

    /**
     * Sets value of 'review_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReviewFlag($value) {
        return $this->set(self::REVIEW_FLAG, $value);
    }

    /**
     * Returns value of 'review_flag' property
     *
     * @return int
     */
    public function getReviewFlag() {
        return $this->get(self::REVIEW_FLAG);
    }

    /**
     * Sets value of 'service_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServiceRating($value) {
        return $this->set(self::SERVICE_RATING, $value);
    }

    /**
     * Returns value of 'service_rating' property
     *
     * @return string
     */
    public function getServiceRating() {
        return $this->get(self::SERVICE_RATING);
    }

    /**
     * Sets value of 'short_comm' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShortComm($value) {
        return $this->set(self::SHORT_COMM, $value);
    }

    /**
     * Returns value of 'short_comm' property
     *
     * @return string
     */
    public function getShortComm() {
        return $this->get(self::SHORT_COMM);
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

    /**
     * Sets value of 's_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSTime($value) {
        return $this->set(self::S_TIME, $value);
    }

    /**
     * Returns value of 's_time' property
     *
     * @return int
     */
    public function getSTime() {
        return $this->get(self::S_TIME);
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return string
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'storage_src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageSrc($value) {
        return $this->set(self::STORAGE_SRC, $value);
    }

    /**
     * Returns value of 'storage_src' property
     *
     * @return string
     */
    public function getStorageSrc() {
        return $this->get(self::STORAGE_SRC);
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
     * Sets value of 'tonight_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTonightPrice($value) {
        return $this->set(self::TONIGHT_PRICE, $value);
    }

    /**
     * Returns value of 'tonight_price' property
     *
     * @return string
     */
    public function getTonightPrice() {
        return $this->get(self::TONIGHT_PRICE);
    }

    /**
     * Sets value of 'tonight_sale_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTonightSaleFlag($value) {
        return $this->set(self::TONIGHT_SALE_FLAG, $value);
    }

    /**
     * Returns value of 'tonight_sale_flag' property
     *
     * @return string
     */
    public function getTonightSaleFlag() {
        return $this->get(self::TONIGHT_SALE_FLAG);
    }

    /**
     * Sets value of 'total_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalNum($value) {
        return $this->set(self::TOTAL_NUM, $value);
    }

    /**
     * Returns value of 'total_num' property
     *
     * @return string
     */
    public function getTotalNum() {
        return $this->get(self::TOTAL_NUM);
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
     * Sets value of 'wise_hotel_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseHotelType($value) {
        return $this->set(self::WISE_HOTEL_TYPE, $value);
    }

    /**
     * Returns value of 'wise_hotel_type' property
     *
     * @return string
     */
    public function getWiseHotelType() {
        return $this->get(self::WISE_HOTEL_TYPE);
    }

    /**
     * Sets value of 'wise_hotel_type_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseHotelTypeName($value) {
        return $this->set(self::WISE_HOTEL_TYPE_NAME, $value);
    }

    /**
     * Returns value of 'wise_hotel_type_name' property
     *
     * @return string
     */
    public function getWiseHotelTypeName() {
        return $this->get(self::WISE_HOTEL_TYPE_NAME);
    }

    /**
     * Sets value of 'wise_low_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseLowPrice($value) {
        return $this->set(self::WISE_LOW_PRICE, $value);
    }

    /**
     * Returns value of 'wise_low_price' property
     *
     * @return string
     */
    public function getWiseLowPrice() {
        return $this->get(self::WISE_LOW_PRICE);
    }

    /**
     * Sets value of 'wise_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWisePrice($value) {
        return $this->set(self::WISE_PRICE, $value);
    }

    /**
     * Returns value of 'wise_price' property
     *
     * @return string
     */
    public function getWisePrice() {
        return $this->get(self::WISE_PRICE);
    }

    /**
     * Sets value of 'wise_realtime_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseRealtimePrice($value) {
        return $this->set(self::WISE_REALTIME_PRICE, $value);
    }

    /**
     * Returns value of 'wise_realtime_price' property
     *
     * @return string
     */
    public function getWiseRealtimePrice() {
        return $this->get(self::WISE_REALTIME_PRICE);
    }

    /**
     * Sets value of 'wise_realtime_price_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWiseRealtimePriceFlag($value) {
        return $this->set(self::WISE_REALTIME_PRICE_FLAG, $value);
    }

    /**
     * Returns value of 'wise_realtime_price_flag' property
     *
     * @return string
     */
    public function getWiseRealtimePriceFlag() {
        return $this->get(self::WISE_REALTIME_PRICE_FLAG);
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
     * Sets value of 'is_gwj' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsGwj($value) {
        return $this->set(self::IS_GWJ, $value);
    }

    /**
     * Returns value of 'is_gwj' property
     *
     * @return int
     */
    public function getIsGwj() {
        return $this->get(self::IS_GWJ);
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
     * Sets value of 'meishipaihao' property
     *
     * @param Meishipaihao $value Property value
     *
     * @return null
     */
    public function setMeishipaihao(Meishipaihao $value) {
        return $this->set(self::MEISHIPAIHAO, $value);
    }

    /**
     * Returns value of 'meishipaihao' property
     *
     * @return Meishipaihao
     */
    public function getMeishipaihao() {
        return $this->get(self::MEISHIPAIHAO);
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
}
}

/**
 * Info message
 */
if (!class_exists('Info')) {
class Info extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ONE_URL = 1;
    const CONTENT = 2;
    const DATE = 3;
    const NICK_USER_RECOMMEND = 4;
    const USER_NAME = 5;
    const USER_LOGO = 6;
    const PRICE = 7;
    const OVERALL_RATING = 8;
    const NAME = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ONE_URL => array(
            'name' => 'one_url',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::DATE => array(
            'name' => 'date',
            'required' => false,
            'type' => 7,
        ),
        self::NICK_USER_RECOMMEND => array(
            'name' => 'nick_user_recommend',
            'required' => false,
            'type' => 7,
        ),
        self::USER_NAME => array(
            'name' => 'user_name',
            'required' => false,
            'type' => 7,
        ),
        self::USER_LOGO => array(
            'name' => 'user_logo',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 5,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
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
        $this->values[self::ONE_URL] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::DATE] = null;
        $this->values[self::NICK_USER_RECOMMEND] = null;
        $this->values[self::USER_NAME] = null;
        $this->values[self::USER_LOGO] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::OVERALL_RATING] = null;
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
     * Sets value of 'one_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOneUrl($value) {
        return $this->set(self::ONE_URL, $value);
    }

    /**
     * Returns value of 'one_url' property
     *
     * @return string
     */
    public function getOneUrl() {
        return $this->get(self::ONE_URL);
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
     * Sets value of 'nick_user_recommend' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickUserRecommend($value) {
        return $this->set(self::NICK_USER_RECOMMEND, $value);
    }

    /**
     * Returns value of 'nick_user_recommend' property
     *
     * @return string
     */
    public function getNickUserRecommend() {
        return $this->get(self::NICK_USER_RECOMMEND);
    }

    /**
     * Sets value of 'user_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value) {
        return $this->set(self::USER_NAME, $value);
    }

    /**
     * Returns value of 'user_name' property
     *
     * @return string
     */
    public function getUserName() {
        return $this->get(self::USER_NAME);
    }

    /**
     * Sets value of 'user_logo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserLogo($value) {
        return $this->set(self::USER_LOGO, $value);
    }

    /**
     * Returns value of 'user_logo' property
     *
     * @return string
     */
    public function getUserLogo() {
        return $this->get(self::USER_LOGO);
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
 * Review message
 */
if (!class_exists('Review')) {
class Review extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INFO = 3;
    const CN_NAME = 1;
    const FROM = 2;
    const NAME = 4;
    const URL_MOBILEPHONE = 5;
    const URL = 6;
    const REVIEW_NUM = 7;
    const CONTENT = 8;
    const DATE = 9;
    const ENVIRONMENT_RATING = 10;
    const ONE_URL_MOBILE = 11;
    const ONE_URL = 12;
    const OVERALL_RATING = 13;
    const PRICE = 14;
    const PRIORITY = 15;
    const SERVICE_RATING = 16;
    const TASTE_RATING = 17;
    const TIME_STAMP = 18;
    const USER_LOGO = 19;
    const USER_NAME = 20;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INFO => array(
            'name' => 'info',
            'repeated' => true,
            'type' => 'Info',
        ),
        self::CN_NAME => array(
            'name' => 'cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::FROM => array(
            'name' => 'from',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::URL_MOBILEPHONE => array(
            'name' => 'url_mobilephone',
            'required' => false,
            'type' => 7,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => 7,
        ),
        self::REVIEW_NUM => array(
            'name' => 'review_num',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::DATE => array(
            'name' => 'date',
            'required' => false,
            'type' => 7,
        ),
        self::ENVIRONMENT_RATING => array(
            'name' => 'environment_rating',
            'required' => false,
            'type' => 7,
        ),
        self::ONE_URL_MOBILE => array(
            'name' => 'one_url_mobile',
            'required' => false,
            'type' => 7,
        ),
        self::ONE_URL => array(
            'name' => 'one_url',
            'required' => false,
            'type' => 7,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::PRIORITY => array(
            'name' => 'priority',
            'required' => false,
            'type' => 5,
        ),
        self::SERVICE_RATING => array(
            'name' => 'service_rating',
            'required' => false,
            'type' => 7,
        ),
        self::TASTE_RATING => array(
            'name' => 'taste_rating',
            'required' => false,
            'type' => 7,
        ),
        self::TIME_STAMP => array(
            'name' => 'time_stamp',
            'required' => false,
            'type' => 7,
        ),
        self::USER_LOGO => array(
            'name' => 'user_logo',
            'required' => false,
            'type' => 7,
        ),
        self::USER_NAME => array(
            'name' => 'user_name',
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
        $this->values[self::INFO] = array();
        $this->values[self::CN_NAME] = null;
        $this->values[self::FROM] = null;
        $this->values[self::NAME] = null;
        $this->values[self::URL_MOBILEPHONE] = null;
        $this->values[self::URL] = null;
        $this->values[self::REVIEW_NUM] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::DATE] = null;
        $this->values[self::ENVIRONMENT_RATING] = null;
        $this->values[self::ONE_URL_MOBILE] = null;
        $this->values[self::ONE_URL] = null;
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::PRIORITY] = null;
        $this->values[self::SERVICE_RATING] = null;
        $this->values[self::TASTE_RATING] = null;
        $this->values[self::TIME_STAMP] = null;
        $this->values[self::USER_LOGO] = null;
        $this->values[self::USER_NAME] = null;
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
     * Appends value to 'info' list
     *
     * @param Info $value Value to append
     *
     * @return null
     */
    public function appendInfo(Info $value) {
        return $this->append(self::INFO, $value);
    }

    /**
     * Clears 'info' list
     *
     * @return null
     */
    public function clearInfo() {
        return $this->clear(self::INFO);
    }

    /**
     * Returns 'info' list
     *
     * @return Info[]
     */
    public function getInfo() {
        return $this->get(self::INFO);
    }

    /**
     * Returns 'info' iterator
     *
     * @return ArrayIterator
     */
    public function getInfoIterator() {
        return new ArrayIterator($this->get(self::INFO));
    }

    /**
     * Returns element from 'info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Info
     */
    public function getInfoAt($offset) {
        return $this->get(self::INFO, $offset);
    }

    /**
     * Returns count of 'info' list
     *
     * @return int
     */
    public function getInfoCount() {
        return $this->count(self::INFO);
    }

    /**
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
    }

    /**
     * Sets value of 'from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrom($value) {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return string
     */
    public function getFrom() {
        return $this->get(self::FROM);
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
     * Sets value of 'url_mobilephone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrlMobilephone($value) {
        return $this->set(self::URL_MOBILEPHONE, $value);
    }

    /**
     * Returns value of 'url_mobilephone' property
     *
     * @return string
     */
    public function getUrlMobilephone() {
        return $this->get(self::URL_MOBILEPHONE);
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
     * Sets value of 'review_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReviewNum($value) {
        return $this->set(self::REVIEW_NUM, $value);
    }

    /**
     * Returns value of 'review_num' property
     *
     * @return string
     */
    public function getReviewNum() {
        return $this->get(self::REVIEW_NUM);
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
     * Sets value of 'environment_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEnvironmentRating($value) {
        return $this->set(self::ENVIRONMENT_RATING, $value);
    }

    /**
     * Returns value of 'environment_rating' property
     *
     * @return string
     */
    public function getEnvironmentRating() {
        return $this->get(self::ENVIRONMENT_RATING);
    }

    /**
     * Sets value of 'one_url_mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOneUrlMobile($value) {
        return $this->set(self::ONE_URL_MOBILE, $value);
    }

    /**
     * Returns value of 'one_url_mobile' property
     *
     * @return string
     */
    public function getOneUrlMobile() {
        return $this->get(self::ONE_URL_MOBILE);
    }

    /**
     * Sets value of 'one_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOneUrl($value) {
        return $this->set(self::ONE_URL, $value);
    }

    /**
     * Returns value of 'one_url' property
     *
     * @return string
     */
    public function getOneUrl() {
        return $this->get(self::ONE_URL);
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
     * Sets value of 'priority' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPriority($value) {
        return $this->set(self::PRIORITY, $value);
    }

    /**
     * Returns value of 'priority' property
     *
     * @return int
     */
    public function getPriority() {
        return $this->get(self::PRIORITY);
    }

    /**
     * Sets value of 'service_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServiceRating($value) {
        return $this->set(self::SERVICE_RATING, $value);
    }

    /**
     * Returns value of 'service_rating' property
     *
     * @return string
     */
    public function getServiceRating() {
        return $this->get(self::SERVICE_RATING);
    }

    /**
     * Sets value of 'taste_rating' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTasteRating($value) {
        return $this->set(self::TASTE_RATING, $value);
    }

    /**
     * Returns value of 'taste_rating' property
     *
     * @return string
     */
    public function getTasteRating() {
        return $this->get(self::TASTE_RATING);
    }

    /**
     * Sets value of 'time_stamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeStamp($value) {
        return $this->set(self::TIME_STAMP, $value);
    }

    /**
     * Returns value of 'time_stamp' property
     *
     * @return string
     */
    public function getTimeStamp() {
        return $this->get(self::TIME_STAMP);
    }

    /**
     * Sets value of 'user_logo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserLogo($value) {
        return $this->set(self::USER_LOGO, $value);
    }

    /**
     * Returns value of 'user_logo' property
     *
     * @return string
     */
    public function getUserLogo() {
        return $this->get(self::USER_LOGO);
    }

    /**
     * Sets value of 'user_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value) {
        return $this->set(self::USER_NAME, $value);
    }

    /**
     * Returns value of 'user_name' property
     *
     * @return string
     */
    public function getUserName() {
        return $this->get(self::USER_NAME);
    }
}
}

/**
 * Dianping message
 */
if (!class_exists('Dianping')) {
class Dianping extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CN_NAME = 1;
    const COMMENT_URL_MOBILE = 2;
    const COMMENT_URL = 3;
    const COUNT = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CN_NAME => array(
            'name' => 'cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT_URL_MOBILE => array(
            'name' => 'comment_url_mobile',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT_URL => array(
            'name' => 'comment_url',
            'required' => false,
            'type' => 7,
        ),
        self::COUNT => array(
            'name' => 'count',
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
        $this->values[self::CN_NAME] = null;
        $this->values[self::COMMENT_URL_MOBILE] = null;
        $this->values[self::COMMENT_URL] = null;
        $this->values[self::COUNT] = null;
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
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
    }

    /**
     * Sets value of 'comment_url_mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentUrlMobile($value) {
        return $this->set(self::COMMENT_URL_MOBILE, $value);
    }

    /**
     * Returns value of 'comment_url_mobile' property
     *
     * @return string
     */
    public function getCommentUrlMobile() {
        return $this->get(self::COMMENT_URL_MOBILE);
    }

    /**
     * Sets value of 'comment_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentUrl($value) {
        return $this->set(self::COMMENT_URL, $value);
    }

    /**
     * Returns value of 'comment_url' property
     *
     * @return string
     */
    public function getCommentUrl() {
        return $this->get(self::COMMENT_URL);
    }

    /**
     * Sets value of 'count' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCount($value) {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return string
     */
    public function getCount() {
        return $this->get(self::COUNT);
    }
}
}

/**
 * MoreReviews message
 */
if (!class_exists('MoreReviews')) {
class MoreReviews extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DIANPING = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DIANPING => array(
            'name' => 'dianping',
            'required' => false,
            'type' => 'Dianping',
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
        $this->values[self::DIANPING] = null;
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
     * Sets value of 'dianping' property
     *
     * @param Dianping $value Property value
     *
     * @return null
     */
    public function setDianping(Dianping $value) {
        return $this->set(self::DIANPING, $value);
    }

    /**
     * Returns value of 'dianping' property
     *
     * @return Dianping
     */
    public function getDianping() {
        return $this->get(self::DIANPING);
    }
}
}

/**
 * RichInfo message
 */
if (!class_exists('RichInfo')) {
class RichInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const MORE_REVIEWS = 20;
    const COMMENT_YES_NUM = 1;
    const COMMENT_NO_NUM = 2;
    const CATEGORY = 3;
    const BRAND = 4;
    const LEVEL = 5;
    const DESCRIPTION = 6;
    const SHOP_HOURS = 7;
    const ENVIRONMENT_EXTERIOR = 8;
    const INNER_FACILITY = 9;
    const HOTEL_FACILITY = 10;
    const HOTEL_SERVICE = 11;
    const PAYMENT_TYPE = 12;
    const ALIAS = 13;
    const ATMOSPHERE = 15;
    const DESCRIPTION_CN_NAME = 16;
    const DESCRIPTION_NAME = 17;
    const DESCRIPTION_URL_MOBILE = 18;
    const DESCRIPTION_URL = 19;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::MORE_REVIEWS => array(
            'name' => 'more_reviews',
            'repeated' => true,
            'type' => 'MoreReviews',
        ),
        self::COMMENT_YES_NUM => array(
            'name' => 'comment_yes_num',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT_NO_NUM => array(
            'name' => 'comment_no_num',
            'required' => false,
            'type' => 7,
        ),
        self::CATEGORY => array(
            'name' => 'category',
            'required' => false,
            'type' => 7,
        ),
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::SHOP_HOURS => array(
            'name' => 'shop_hours',
            'required' => false,
            'type' => 7,
        ),
        self::ENVIRONMENT_EXTERIOR => array(
            'name' => 'environment_exterior',
            'required' => false,
            'type' => 7,
        ),
        self::INNER_FACILITY => array(
            'name' => 'inner_facility',
            'required' => false,
            'type' => 7,
        ),
        self::HOTEL_FACILITY => array(
            'name' => 'hotel_facility',
            'required' => false,
            'type' => 7,
        ),
        self::HOTEL_SERVICE => array(
            'name' => 'hotel_service',
            'required' => false,
            'type' => 7,
        ),
        self::PAYMENT_TYPE => array(
            'name' => 'payment_type',
            'required' => false,
            'type' => 7,
        ),
        self::ALIAS => array(
            'name' => 'alias',
            'required' => false,
            'type' => 7,
        ),
        self::ATMOSPHERE => array(
            'name' => 'atmosphere',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION_CN_NAME => array(
            'name' => 'description_cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION_NAME => array(
            'name' => 'description_name',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION_URL_MOBILE => array(
            'name' => 'description_url_mobile',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION_URL => array(
            'name' => 'description_url',
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
        $this->values[self::MORE_REVIEWS] = array();
        $this->values[self::COMMENT_YES_NUM] = null;
        $this->values[self::COMMENT_NO_NUM] = null;
        $this->values[self::CATEGORY] = null;
        $this->values[self::BRAND] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::SHOP_HOURS] = null;
        $this->values[self::ENVIRONMENT_EXTERIOR] = null;
        $this->values[self::INNER_FACILITY] = null;
        $this->values[self::HOTEL_FACILITY] = null;
        $this->values[self::HOTEL_SERVICE] = null;
        $this->values[self::PAYMENT_TYPE] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::ATMOSPHERE] = null;
        $this->values[self::DESCRIPTION_CN_NAME] = null;
        $this->values[self::DESCRIPTION_NAME] = null;
        $this->values[self::DESCRIPTION_URL_MOBILE] = null;
        $this->values[self::DESCRIPTION_URL] = null;
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
     * Appends value to 'more_reviews' list
     *
     * @param MoreReviews $value Value to append
     *
     * @return null
     */
    public function appendMoreReviews(MoreReviews $value) {
        return $this->append(self::MORE_REVIEWS, $value);
    }

    /**
     * Clears 'more_reviews' list
     *
     * @return null
     */
    public function clearMoreReviews() {
        return $this->clear(self::MORE_REVIEWS);
    }

    /**
     * Returns 'more_reviews' list
     *
     * @return MoreReviews[]
     */
    public function getMoreReviews() {
        return $this->get(self::MORE_REVIEWS);
    }

    /**
     * Returns 'more_reviews' iterator
     *
     * @return ArrayIterator
     */
    public function getMoreReviewsIterator() {
        return new ArrayIterator($this->get(self::MORE_REVIEWS));
    }

    /**
     * Returns element from 'more_reviews' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return MoreReviews
     */
    public function getMoreReviewsAt($offset) {
        return $this->get(self::MORE_REVIEWS, $offset);
    }

    /**
     * Returns count of 'more_reviews' list
     *
     * @return int
     */
    public function getMoreReviewsCount() {
        return $this->count(self::MORE_REVIEWS);
    }

    /**
     * Sets value of 'comment_yes_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentYesNum($value) {
        return $this->set(self::COMMENT_YES_NUM, $value);
    }

    /**
     * Returns value of 'comment_yes_num' property
     *
     * @return string
     */
    public function getCommentYesNum() {
        return $this->get(self::COMMENT_YES_NUM);
    }

    /**
     * Sets value of 'comment_no_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentNoNum($value) {
        return $this->set(self::COMMENT_NO_NUM, $value);
    }

    /**
     * Returns value of 'comment_no_num' property
     *
     * @return string
     */
    public function getCommentNoNum() {
        return $this->get(self::COMMENT_NO_NUM);
    }

    /**
     * Sets value of 'category' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCategory($value) {
        return $this->set(self::CATEGORY, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return string
     */
    public function getCategory() {
        return $this->get(self::CATEGORY);
    }

    /**
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value) {
        return $this->set(self::BRAND, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand() {
        return $this->get(self::BRAND);
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
     * Sets value of 'shop_hours' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShopHours($value) {
        return $this->set(self::SHOP_HOURS, $value);
    }

    /**
     * Returns value of 'shop_hours' property
     *
     * @return string
     */
    public function getShopHours() {
        return $this->get(self::SHOP_HOURS);
    }

    /**
     * Sets value of 'environment_exterior' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEnvironmentExterior($value) {
        return $this->set(self::ENVIRONMENT_EXTERIOR, $value);
    }

    /**
     * Returns value of 'environment_exterior' property
     *
     * @return string
     */
    public function getEnvironmentExterior() {
        return $this->get(self::ENVIRONMENT_EXTERIOR);
    }

    /**
     * Sets value of 'inner_facility' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInnerFacility($value) {
        return $this->set(self::INNER_FACILITY, $value);
    }

    /**
     * Returns value of 'inner_facility' property
     *
     * @return string
     */
    public function getInnerFacility() {
        return $this->get(self::INNER_FACILITY);
    }

    /**
     * Sets value of 'hotel_facility' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHotelFacility($value) {
        return $this->set(self::HOTEL_FACILITY, $value);
    }

    /**
     * Returns value of 'hotel_facility' property
     *
     * @return string
     */
    public function getHotelFacility() {
        return $this->get(self::HOTEL_FACILITY);
    }

    /**
     * Sets value of 'hotel_service' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHotelService($value) {
        return $this->set(self::HOTEL_SERVICE, $value);
    }

    /**
     * Returns value of 'hotel_service' property
     *
     * @return string
     */
    public function getHotelService() {
        return $this->get(self::HOTEL_SERVICE);
    }

    /**
     * Sets value of 'payment_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPaymentType($value) {
        return $this->set(self::PAYMENT_TYPE, $value);
    }

    /**
     * Returns value of 'payment_type' property
     *
     * @return string
     */
    public function getPaymentType() {
        return $this->get(self::PAYMENT_TYPE);
    }

    /**
     * Sets value of 'alias' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlias($value) {
        return $this->set(self::ALIAS, $value);
    }

    /**
     * Returns value of 'alias' property
     *
     * @return string
     */
    public function getAlias() {
        return $this->get(self::ALIAS);
    }

    /**
     * Sets value of 'atmosphere' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAtmosphere($value) {
        return $this->set(self::ATMOSPHERE, $value);
    }

    /**
     * Returns value of 'atmosphere' property
     *
     * @return string
     */
    public function getAtmosphere() {
        return $this->get(self::ATMOSPHERE);
    }

    /**
     * Sets value of 'description_cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescriptionCnName($value) {
        return $this->set(self::DESCRIPTION_CN_NAME, $value);
    }

    /**
     * Returns value of 'description_cn_name' property
     *
     * @return string
     */
    public function getDescriptionCnName() {
        return $this->get(self::DESCRIPTION_CN_NAME);
    }

    /**
     * Sets value of 'description_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescriptionName($value) {
        return $this->set(self::DESCRIPTION_NAME, $value);
    }

    /**
     * Returns value of 'description_name' property
     *
     * @return string
     */
    public function getDescriptionName() {
        return $this->get(self::DESCRIPTION_NAME);
    }

    /**
     * Sets value of 'description_url_mobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescriptionUrlMobile($value) {
        return $this->set(self::DESCRIPTION_URL_MOBILE, $value);
    }

    /**
     * Returns value of 'description_url_mobile' property
     *
     * @return string
     */
    public function getDescriptionUrlMobile() {
        return $this->get(self::DESCRIPTION_URL_MOBILE);
    }

    /**
     * Sets value of 'description_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescriptionUrl($value) {
        return $this->set(self::DESCRIPTION_URL, $value);
    }

    /**
     * Returns value of 'description_url' property
     *
     * @return string
     */
    public function getDescriptionUrl() {
        return $this->get(self::DESCRIPTION_URL);
    }
}
}

/**
 * Recommend message
 */
if (!class_exists('Recommend')) {
class Recommend extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CN_NAME = 1;
    const IMGURL_BAK = 2;
    const IMGURL = 3;
    const LINK_MOBILEPHONE = 4;
    const LINK = 5;
    const NAME = 6;
    const PHOTOID = 7;
    const PHOTO_NUM = 8;
    const PHOTO_PAGEVIEW = 9;
    const PRIORITY = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CN_NAME => array(
            'name' => 'cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::IMGURL_BAK => array(
            'name' => 'imgUrl_bak',
            'required' => false,
            'type' => 7,
        ),
        self::IMGURL => array(
            'name' => 'imgUrl',
            'required' => false,
            'type' => 7,
        ),
        self::LINK_MOBILEPHONE => array(
            'name' => 'link_mobilephone',
            'required' => false,
            'type' => 7,
        ),
        self::LINK => array(
            'name' => 'link',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::PHOTOID => array(
            'name' => 'photoid',
            'required' => false,
            'type' => 5,
        ),
        self::PHOTO_NUM => array(
            'name' => 'photo_num',
            'required' => false,
            'type' => 5,
        ),
        self::PHOTO_PAGEVIEW => array(
            'name' => 'photo_pageview',
            'required' => false,
            'type' => 5,
        ),
        self::PRIORITY => array(
            'name' => 'priority',
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
        $this->values[self::CN_NAME] = null;
        $this->values[self::IMGURL_BAK] = null;
        $this->values[self::IMGURL] = null;
        $this->values[self::LINK_MOBILEPHONE] = null;
        $this->values[self::LINK] = null;
        $this->values[self::NAME] = null;
        $this->values[self::PHOTOID] = null;
        $this->values[self::PHOTO_NUM] = null;
        $this->values[self::PHOTO_PAGEVIEW] = null;
        $this->values[self::PRIORITY] = null;
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
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
    }

    /**
     * Sets value of 'imgUrl_bak' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgUrlBak($value) {
        return $this->set(self::IMGURL_BAK, $value);
    }

    /**
     * Returns value of 'imgUrl_bak' property
     *
     * @return string
     */
    public function getImgUrlBak() {
        return $this->get(self::IMGURL_BAK);
    }

    /**
     * Sets value of 'imgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgUrl($value) {
        return $this->set(self::IMGURL, $value);
    }

    /**
     * Returns value of 'imgUrl' property
     *
     * @return string
     */
    public function getImgUrl() {
        return $this->get(self::IMGURL);
    }

    /**
     * Sets value of 'link_mobilephone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkMobilephone($value) {
        return $this->set(self::LINK_MOBILEPHONE, $value);
    }

    /**
     * Returns value of 'link_mobilephone' property
     *
     * @return string
     */
    public function getLinkMobilephone() {
        return $this->get(self::LINK_MOBILEPHONE);
    }

    /**
     * Sets value of 'link' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLink($value) {
        return $this->set(self::LINK, $value);
    }

    /**
     * Returns value of 'link' property
     *
     * @return string
     */
    public function getLink() {
        return $this->get(self::LINK);
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
     * Sets value of 'photoid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPhotoid($value) {
        return $this->set(self::PHOTOID, $value);
    }

    /**
     * Returns value of 'photoid' property
     *
     * @return int
     */
    public function getPhotoid() {
        return $this->get(self::PHOTOID);
    }

    /**
     * Sets value of 'photo_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPhotoNum($value) {
        return $this->set(self::PHOTO_NUM, $value);
    }

    /**
     * Returns value of 'photo_num' property
     *
     * @return int
     */
    public function getPhotoNum() {
        return $this->get(self::PHOTO_NUM);
    }

    /**
     * Sets value of 'photo_pageview' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPhotoPageview($value) {
        return $this->set(self::PHOTO_PAGEVIEW, $value);
    }

    /**
     * Returns value of 'photo_pageview' property
     *
     * @return int
     */
    public function getPhotoPageview() {
        return $this->get(self::PHOTO_PAGEVIEW);
    }

    /**
     * Sets value of 'priority' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setPriority($value) {
        return $this->set(self::PRIORITY, $value);
    }

    /**
     * Returns value of 'priority' property
     *
     * @return float
     */
    public function getPriority() {
        return $this->get(self::PRIORITY);
    }
}
}

/**
 * Image message
 */
if (!class_exists('Image')) {
class Image extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const RECOMMEND = 1;
    const TOP = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::RECOMMEND => array(
            'name' => 'recommend',
            'repeated' => true,
            'type' => 'Recommend',
        ),
        self::TOP => array(
            'name' => 'top',
            'repeated' => true,
            'type' => 'Top',
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
        $this->values[self::RECOMMEND] = array();
        $this->values[self::TOP] = array();
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
     * Appends value to 'recommend' list
     *
     * @param Recommend $value Value to append
     *
     * @return null
     */
    public function appendRecommend(Recommend $value) {
        return $this->append(self::RECOMMEND, $value);
    }

    /**
     * Clears 'recommend' list
     *
     * @return null
     */
    public function clearRecommend() {
        return $this->clear(self::RECOMMEND);
    }

    /**
     * Returns 'recommend' list
     *
     * @return Recommend[]
     */
    public function getRecommend() {
        return $this->get(self::RECOMMEND);
    }

    /**
     * Returns 'recommend' iterator
     *
     * @return ArrayIterator
     */
    public function getRecommendIterator() {
        return new ArrayIterator($this->get(self::RECOMMEND));
    }

    /**
     * Returns element from 'recommend' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Recommend
     */
    public function getRecommendAt($offset) {
        return $this->get(self::RECOMMEND, $offset);
    }

    /**
     * Returns count of 'recommend' list
     *
     * @return int
     */
    public function getRecommendCount() {
        return $this->count(self::RECOMMEND);
    }

    /**
     * Appends value to 'top' list
     *
     * @param Top $value Value to append
     *
     * @return null
     */
    public function appendTop(Top $value) {
        return $this->append(self::TOP, $value);
    }

    /**
     * Clears 'top' list
     *
     * @return null
     */
    public function clearTop() {
        return $this->clear(self::TOP);
    }

    /**
     * Returns 'top' list
     *
     * @return Top[]
     */
    public function getTop() {
        return $this->get(self::TOP);
    }

    /**
     * Returns 'top' iterator
     *
     * @return ArrayIterator
     */
    public function getTopIterator() {
        return new ArrayIterator($this->get(self::TOP));
    }

    /**
     * Returns element from 'top' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Top
     */
    public function getTopAt($offset) {
        return $this->get(self::TOP, $offset);
    }

    /**
     * Returns count of 'top' list
     *
     * @return int
     */
    public function getTopCount() {
        return $this->count(self::TOP);
    }
}
}

/**
 * LineInfo message
 */
if (!class_exists('LineInfo')) {
class LineInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ABB = 1;
    const CLR = 2;
    const FIRST_TIME = 3;
    const LAST_TIME = 4;
    const LINE_TIME = 5;
    const TERMINALS = 6;
    const UID = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ABB => array(
            'name' => 'abb',
            'required' => false,
            'type' => 7,
        ),
        self::CLR => array(
            'name' => 'clr',
            'required' => false,
            'type' => 7,
        ),
        self::FIRST_TIME => array(
            'name' => 'first_time',
            'required' => false,
            'type' => 7,
        ),
        self::LAST_TIME => array(
            'name' => 'last_time',
            'required' => false,
            'type' => 7,
        ),
        self::LINE_TIME => array(
            'name' => 'line_time',
            'required' => false,
            'type' => 7,
        ),
        self::TERMINALS => array(
            'name' => 'terminals',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
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
        $this->values[self::ABB] = null;
        $this->values[self::CLR] = null;
        $this->values[self::FIRST_TIME] = null;
        $this->values[self::LAST_TIME] = null;
        $this->values[self::LINE_TIME] = null;
        $this->values[self::TERMINALS] = null;
        $this->values[self::UID] = null;
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
     * Sets value of 'abb' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAbb($value) {
        return $this->set(self::ABB, $value);
    }

    /**
     * Returns value of 'abb' property
     *
     * @return string
     */
    public function getAbb() {
        return $this->get(self::ABB);
    }

    /**
     * Sets value of 'clr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClr($value) {
        return $this->set(self::CLR, $value);
    }

    /**
     * Returns value of 'clr' property
     *
     * @return string
     */
    public function getClr() {
        return $this->get(self::CLR);
    }

    /**
     * Sets value of 'first_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFirstTime($value) {
        return $this->set(self::FIRST_TIME, $value);
    }

    /**
     * Returns value of 'first_time' property
     *
     * @return string
     */
    public function getFirstTime() {
        return $this->get(self::FIRST_TIME);
    }

    /**
     * Sets value of 'last_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastTime($value) {
        return $this->set(self::LAST_TIME, $value);
    }

    /**
     * Returns value of 'last_time' property
     *
     * @return string
     */
    public function getLastTime() {
        return $this->get(self::LAST_TIME);
    }

    /**
     * Sets value of 'line_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLineTime($value) {
        return $this->set(self::LINE_TIME, $value);
    }

    /**
     * Returns value of 'line_time' property
     *
     * @return string
     */
    public function getLineTime() {
        return $this->get(self::LINE_TIME);
    }

    /**
     * Sets value of 'terminals' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTerminals($value) {
        return $this->set(self::TERMINALS, $value);
    }

    /**
     * Returns value of 'terminals' property
     *
     * @return string
     */
    public function getTerminals() {
        return $this->get(self::TERMINALS);
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
    const DETAIL_INFO = 1;
    const REVIEW = 2;
    const RICH_INFO = 3;
    const IMAGE = 5;
    const LINE_INFO = 6;
    const SRC_NAME = 4;
    const EXT_TYPE = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DETAIL_INFO => array(
            'name' => 'detail_info',
            'required' => false,
            'type' => 'DetailInfo',
        ),
        self::REVIEW => array(
            'name' => 'review',
            'repeated' => true,
            'type' => 'Review',
        ),
        self::RICH_INFO => array(
            'name' => 'rich_info',
            'required' => false,
            'type' => 'RichInfo',
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 'Image',
        ),
        self::LINE_INFO => array(
            'name' => 'line_info',
            'repeated' => true,
            'type' => 'LineInfo',
        ),
        self::SRC_NAME => array(
            'name' => 'src_name',
            'required' => false,
            'type' => 7,
        ),
        self::EXT_TYPE => array(
            'name' => 'ext_type',
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
        $this->values[self::DETAIL_INFO] = null;
        $this->values[self::REVIEW] = array();
        $this->values[self::RICH_INFO] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::LINE_INFO] = array();
        $this->values[self::SRC_NAME] = null;
        $this->values[self::EXT_TYPE] = null;
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
     * Appends value to 'review' list
     *
     * @param Review $value Value to append
     *
     * @return null
     */
    public function appendReview(Review $value) {
        return $this->append(self::REVIEW, $value);
    }

    /**
     * Clears 'review' list
     *
     * @return null
     */
    public function clearReview() {
        return $this->clear(self::REVIEW);
    }

    /**
     * Returns 'review' list
     *
     * @return Review[]
     */
    public function getReview() {
        return $this->get(self::REVIEW);
    }

    /**
     * Returns 'review' iterator
     *
     * @return ArrayIterator
     */
    public function getReviewIterator() {
        return new ArrayIterator($this->get(self::REVIEW));
    }

    /**
     * Returns element from 'review' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Review
     */
    public function getReviewAt($offset) {
        return $this->get(self::REVIEW, $offset);
    }

    /**
     * Returns count of 'review' list
     *
     * @return int
     */
    public function getReviewCount() {
        return $this->count(self::REVIEW);
    }

    /**
     * Sets value of 'rich_info' property
     *
     * @param RichInfo $value Property value
     *
     * @return null
     */
    public function setRichInfo(RichInfo $value) {
        return $this->set(self::RICH_INFO, $value);
    }

    /**
     * Returns value of 'rich_info' property
     *
     * @return RichInfo
     */
    public function getRichInfo() {
        return $this->get(self::RICH_INFO);
    }

    /**
     * Sets value of 'image' property
     *
     * @param Image $value Property value
     *
     * @return null
     */
    public function setImage(Image $value) {
        return $this->set(self::IMAGE, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return Image
     */
    public function getImage() {
        return $this->get(self::IMAGE);
    }

    /**
     * Appends value to 'line_info' list
     *
     * @param LineInfo $value Value to append
     *
     * @return null
     */
    public function appendLineInfo(LineInfo $value) {
        return $this->append(self::LINE_INFO, $value);
    }

    /**
     * Clears 'line_info' list
     *
     * @return null
     */
    public function clearLineInfo() {
        return $this->clear(self::LINE_INFO);
    }

    /**
     * Returns 'line_info' list
     *
     * @return LineInfo[]
     */
    public function getLineInfo() {
        return $this->get(self::LINE_INFO);
    }

    /**
     * Returns 'line_info' iterator
     *
     * @return ArrayIterator
     */
    public function getLineInfoIterator() {
        return new ArrayIterator($this->get(self::LINE_INFO));
    }

    /**
     * Returns element from 'line_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return LineInfo
     */
    public function getLineInfoAt($offset) {
        return $this->get(self::LINE_INFO, $offset);
    }

    /**
     * Returns count of 'line_info' list
     *
     * @return int
     */
    public function getLineInfoCount() {
        return $this->count(self::LINE_INFO);
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

    /**
     * Sets value of 'ext_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExtType($value) {
        return $this->set(self::EXT_TYPE, $value);
    }

    /**
     * Returns value of 'ext_type' property
     *
     * @return int
     */
    public function getExtType() {
        return $this->get(self::EXT_TYPE);
    }
}
}

/**
 * NextVehicle message
 */
if (!class_exists('NextVehicle')) {
class NextVehicle extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const REMAIN_DIST = 1;
    const REMAIN_STOPS = 2;
    const REMAIN_TIME = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::REMAIN_DIST => array(
            'name' => 'remain_dist',
            'required' => false,
            'type' => 5,
        ),
        self::REMAIN_STOPS => array(
            'name' => 'remain_stops',
            'required' => false,
            'type' => 5,
        ),
        self::REMAIN_TIME => array(
            'name' => 'remain_time',
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
        $this->values[self::REMAIN_DIST] = null;
        $this->values[self::REMAIN_STOPS] = null;
        $this->values[self::REMAIN_TIME] = null;
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
     * Sets value of 'remain_dist' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRemainDist($value) {
        return $this->set(self::REMAIN_DIST, $value);
    }

    /**
     * Returns value of 'remain_dist' property
     *
     * @return int
     */
    public function getRemainDist() {
        return $this->get(self::REMAIN_DIST);
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
}
}

/**
 * RtInfo message
 */
if (!class_exists('RtInfo')) {
class RtInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NEXT_VEHICLE = 1;
    const TIP_RTBUS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NEXT_VEHICLE => array(
            'name' => 'next_vehicle',
            'required' => false,
            'type' => 'NextVehicle',
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
        $this->values[self::NEXT_VEHICLE] = null;
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
     * Sets value of 'next_vehicle' property
     *
     * @param NextVehicle $value Property value
     *
     * @return null
     */
    public function setNextVehicle(NextVehicle $value) {
        return $this->set(self::NEXT_VEHICLE, $value);
    }

    /**
     * Returns value of 'next_vehicle' property
     *
     * @return NextVehicle
     */
    public function getNextVehicle() {
        return $this->get(self::NEXT_VEHICLE);
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
 * Blinfo message
 */
if (!class_exists('Blinfo')) {
class Blinfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const RT_INFO = 3;
    const ADDR = 1;
    const NAME = 2;
    const UID = 4;
    const PAIR_UID = 5;
    const NEXT_STATION = 6;
    const ICON_ID = 7;
    const SON_UID = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::RT_INFO => array(
            'name' => 'rt_info',
            'required' => false,
            'type' => 'RtInfo',
        ),
        self::ADDR => array(
            'name' => 'addr',
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
        self::PAIR_UID => array(
            'name' => 'pair_uid',
            'required' => false,
            'type' => 7,
        ),
        self::NEXT_STATION => array(
            'name' => 'next_station',
            'required' => false,
            'type' => 7,
        ),
        self::ICON_ID => array(
            'name' => 'icon_id',
            'required' => false,
            'type' => 5,
        ),
        self::SON_UID => array(
            'name' => 'son_uid',
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
        $this->values[self::RT_INFO] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::NAME] = null;
        $this->values[self::UID] = null;
        $this->values[self::PAIR_UID] = null;
        $this->values[self::NEXT_STATION] = null;
        $this->values[self::ICON_ID] = null;
        $this->values[self::SON_UID] = null;
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
     * Sets value of 'rt_info' property
     *
     * @param RtInfo $value Property value
     *
     * @return null
     */
    public function setRtInfo(RtInfo $value) {
        return $this->set(self::RT_INFO, $value);
    }

    /**
     * Returns value of 'rt_info' property
     *
     * @return RtInfo
     */
    public function getRtInfo() {
        return $this->get(self::RT_INFO);
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
     * Sets value of 'pair_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPairUid($value) {
        return $this->set(self::PAIR_UID, $value);
    }

    /**
     * Returns value of 'pair_uid' property
     *
     * @return string
     */
    public function getPairUid() {
        return $this->get(self::PAIR_UID);
    }

    /**
     * Sets value of 'next_station' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNextStation($value) {
        return $this->set(self::NEXT_STATION, $value);
    }

    /**
     * Returns value of 'next_station' property
     *
     * @return string
     */
    public function getNextStation() {
        return $this->get(self::NEXT_STATION);
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
     * Sets value of 'son_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSonUid($value) {
        return $this->set(self::SON_UID, $value);
    }

    /**
     * Returns value of 'son_uid' property
     *
     * @return string
     */
    public function getSonUid() {
        return $this->get(self::SON_UID);
    }
}
}

/**
 * OriginId message
 */
if (!class_exists('OriginId')) {
class OriginId extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LBC_UID = 1;
    const OVERVIEW_GUID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LBC_UID => array(
            'name' => 'lbc_uid',
            'required' => false,
            'type' => 7,
        ),
        self::OVERVIEW_GUID => array(
            'name' => 'overview_guid',
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
        $this->values[self::LBC_UID] = null;
        $this->values[self::OVERVIEW_GUID] = null;
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
     * Sets value of 'lbc_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLbcUid($value) {
        return $this->set(self::LBC_UID, $value);
    }

    /**
     * Returns value of 'lbc_uid' property
     *
     * @return string
     */
    public function getLbcUid() {
        return $this->get(self::LBC_UID);
    }

    /**
     * Sets value of 'overview_guid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOverviewGuid($value) {
        return $this->set(self::OVERVIEW_GUID, $value);
    }

    /**
     * Returns value of 'overview_guid' property
     *
     * @return string
     */
    public function getOverviewGuid() {
        return $this->get(self::OVERVIEW_GUID);
    }
}
}

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
     * @param int $value Value to append
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
     * @return int[]
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
     * @return int
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
 * Points message
 */
if (!class_exists('Points')) {
class Points extends ProtobufMessage
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
            'type' => 6,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
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
     * @param int $value Value to append
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
     * @return int[]
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
     * @return int
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
 * HeatMap message
 */
if (!class_exists('HeatMap')) {
class HeatMap extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const POINTS = 2;
    const RANKSTR = 1;
    const TYPE = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POINTS => array(
            'name' => 'points',
            'required' => false,
            'type' => 'Points',
        ),
        self::RANKSTR => array(
            'name' => 'rankstr',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::POINTS] = null;
        $this->values[self::RANKSTR] = null;
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
     * Sets value of 'points' property
     *
     * @param Points $value Property value
     *
     * @return null
     */
    public function setPoints(Points $value) {
        return $this->set(self::POINTS, $value);
    }

    /**
     * Returns value of 'points' property
     *
     * @return Points
     */
    public function getPoints() {
        return $this->get(self::POINTS);
    }

    /**
     * Sets value of 'rankstr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRankstr($value) {
        return $this->set(self::RANKSTR, $value);
    }

    /**
     * Returns value of 'rankstr' property
     *
     * @return string
     */
    public function getRankstr() {
        return $this->get(self::RANKSTR);
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
}
}

/**
 * OtherStations message
 */
if (!class_exists('OtherStations')) {
class OtherStations extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const UID = 1;
    const ADDR = 2;
    const ICON_ID = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
        self::ICON_ID => array(
            'name' => 'icon_id',
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
        $this->values[self::UID] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::ICON_ID] = null;
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
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const EXT = 3;
    const BLINFO = 17;
    const ORIGIN_ID = 24;
    const HEAT_MAP = 33;
    const ADDR = 1;
    const CITY_ID = 2;
    const EXT_TYPE = 4;
    const GEO = 5;
    const NAME = 6;
    const POITYPE = 7;
    const PRIMARY_UID = 8;
    const RP_DES_TYPE = 9;
    const STATUS = 10;
    const STORAGE_SRC = 11;
    const SUSPECTED_FLAG = 12;
    const UID = 13;
    const AREA = 14;
    const PHONE = 15;
    const VISTA = 16;
    const ALIAS = 18;
    const AOI = 19;
    const CP = 20;
    const DETAIL = 21;
    const INDOOR_PANO = 22;
    const NEW_CATALOG_ID = 23;
    const PANO = 25;
    const RP_DES = 26;
    const STREET_ID = 27;
    const TAG = 28;
    const TEL = 29;
    const TY = 30;
    const RTBUS_UPDATE_TIME = 31;
    const POI_TYPE_TEXT = 32;
    const INDOOR_FLOOR = 36;
    const INDOOR_PARENT_UID = 37;
    const CLOUD_TEMPLATE = 38;
    const OTHER_STATIONS = 39;
    const ICON_ID = 40;
    const STATION_NUM = 41;
    const BUTTON = 42;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::EXT => array(
            'name' => 'ext',
            'required' => false,
            'type' => 'Ext',
        ),
        self::BLINFO => array(
            'name' => 'blinfo',
            'repeated' => true,
            'type' => 'Blinfo',
        ),
        self::ORIGIN_ID => array(
            'name' => 'origin_id',
            'required' => false,
            'type' => 'OriginId',
        ),
        self::HEAT_MAP => array(
            'name' => 'heat_map',
            'required' => false,
            'type' => 'HeatMap',
        ),
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::CITY_ID => array(
            'name' => 'city_id',
            'required' => false,
            'type' => 5,
        ),
        self::EXT_TYPE => array(
            'name' => 'ext_type',
            'required' => false,
            'type' => 5,
        ),
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
        self::POITYPE => array(
            'name' => 'poiType',
            'required' => false,
            'type' => 5,
        ),
        self::PRIMARY_UID => array(
            'name' => 'primary_uid',
            'required' => false,
            'type' => 7,
        ),
        self::RP_DES_TYPE => array(
            'name' => 'rp_des_type',
            'required' => false,
            'type' => 5,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 5,
        ),
        self::STORAGE_SRC => array(
            'name' => 'storage_src',
            'required' => false,
            'type' => 7,
        ),
        self::SUSPECTED_FLAG => array(
            'name' => 'suspected_flag',
            'required' => false,
            'type' => 5,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::AREA => array(
            'name' => 'area',
            'required' => false,
            'type' => 5,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'required' => false,
            'type' => 7,
        ),
        self::VISTA => array(
            'name' => 'vista',
            'required' => false,
            'type' => 7,
        ),
        self::ALIAS => array(
            'name' => 'alias',
            'repeated' => true,
            'type' => 7,
        ),
        self::AOI => array(
            'name' => 'aoi',
            'required' => false,
            'type' => 7,
        ),
        self::CP => array(
            'name' => 'cp',
            'required' => false,
            'type' => 7,
        ),
        self::DETAIL => array(
            'name' => 'detail',
            'required' => false,
            'type' => 5,
        ),
        self::INDOOR_PANO => array(
            'name' => 'indoor_pano',
            'required' => false,
            'type' => 7,
        ),
        self::NEW_CATALOG_ID => array(
            'name' => 'new_catalog_id',
            'required' => false,
            'type' => 7,
        ),
        self::PANO => array(
            'name' => 'pano',
            'required' => false,
            'type' => 5,
        ),
        self::RP_DES => array(
            'name' => 'rp_des',
            'required' => false,
            'type' => 7,
        ),
        self::STREET_ID => array(
            'name' => 'street_id',
            'required' => false,
            'type' => 7,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 7,
        ),
        self::TEL => array(
            'name' => 'tel',
            'required' => false,
            'type' => 7,
        ),
        self::TY => array(
            'name' => 'ty',
            'required' => false,
            'type' => 5,
        ),
        self::RTBUS_UPDATE_TIME => array(
            'name' => 'rtbus_update_time',
            'required' => false,
            'type' => 5,
        ),
        self::POI_TYPE_TEXT => array(
            'name' => 'poi_type_text',
            'required' => false,
            'type' => 7,
        ),
        self::INDOOR_FLOOR => array(
            'name' => 'indoor_floor',
            'required' => false,
            'type' => 7,
        ),
        self::INDOOR_PARENT_UID => array(
            'name' => 'indoor_parent_uid',
            'required' => false,
            'type' => 7,
        ),
        self::CLOUD_TEMPLATE => array(
            'name' => 'cloud_template',
            'required' => false,
            'type' => 7,
        ),
        self::OTHER_STATIONS => array(
            'name' => 'other_stations',
            'repeated' => true,
            'type' => 'OtherStations',
        ),
        self::ICON_ID => array(
            'name' => 'icon_id',
            'required' => false,
            'type' => 5,
        ),
        self::STATION_NUM => array(
            'name' => 'station_num',
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
        $this->values[self::EXT] = null;
        $this->values[self::BLINFO] = array();
        $this->values[self::ORIGIN_ID] = null;
        $this->values[self::HEAT_MAP] = null;
        $this->values[self::ADDR] = null;
        $this->values[self::CITY_ID] = null;
        $this->values[self::EXT_TYPE] = null;
        $this->values[self::GEO] = null;
        $this->values[self::NAME] = null;
        $this->values[self::POITYPE] = null;
        $this->values[self::PRIMARY_UID] = null;
        $this->values[self::RP_DES_TYPE] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::STORAGE_SRC] = null;
        $this->values[self::SUSPECTED_FLAG] = null;
        $this->values[self::UID] = null;
        $this->values[self::AREA] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::VISTA] = null;
        $this->values[self::ALIAS] = array();
        $this->values[self::AOI] = null;
        $this->values[self::CP] = null;
        $this->values[self::DETAIL] = null;
        $this->values[self::INDOOR_PANO] = null;
        $this->values[self::NEW_CATALOG_ID] = null;
        $this->values[self::PANO] = null;
        $this->values[self::RP_DES] = null;
        $this->values[self::STREET_ID] = null;
        $this->values[self::TAG] = null;
        $this->values[self::TEL] = null;
        $this->values[self::TY] = null;
        $this->values[self::RTBUS_UPDATE_TIME] = null;
        $this->values[self::POI_TYPE_TEXT] = null;
        $this->values[self::INDOOR_FLOOR] = null;
        $this->values[self::INDOOR_PARENT_UID] = null;
        $this->values[self::CLOUD_TEMPLATE] = null;
        $this->values[self::OTHER_STATIONS] = array();
        $this->values[self::ICON_ID] = null;
        $this->values[self::STATION_NUM] = null;
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
     * Appends value to 'blinfo' list
     *
     * @param Blinfo $value Value to append
     *
     * @return null
     */
    public function appendBlinfo(Blinfo $value) {
        return $this->append(self::BLINFO, $value);
    }

    /**
     * Clears 'blinfo' list
     *
     * @return null
     */
    public function clearBlinfo() {
        return $this->clear(self::BLINFO);
    }

    /**
     * Returns 'blinfo' list
     *
     * @return Blinfo[]
     */
    public function getBlinfo() {
        return $this->get(self::BLINFO);
    }

    /**
     * Returns 'blinfo' iterator
     *
     * @return ArrayIterator
     */
    public function getBlinfoIterator() {
        return new ArrayIterator($this->get(self::BLINFO));
    }

    /**
     * Returns element from 'blinfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Blinfo
     */
    public function getBlinfoAt($offset) {
        return $this->get(self::BLINFO, $offset);
    }

    /**
     * Returns count of 'blinfo' list
     *
     * @return int
     */
    public function getBlinfoCount() {
        return $this->count(self::BLINFO);
    }

    /**
     * Sets value of 'origin_id' property
     *
     * @param OriginId $value Property value
     *
     * @return null
     */
    public function setOriginId(OriginId $value) {
        return $this->set(self::ORIGIN_ID, $value);
    }

    /**
     * Returns value of 'origin_id' property
     *
     * @return OriginId
     */
    public function getOriginId() {
        return $this->get(self::ORIGIN_ID);
    }

    /**
     * Sets value of 'heat_map' property
     *
     * @param HeatMap $value Property value
     *
     * @return null
     */
    public function setHeatMap(HeatMap $value) {
        return $this->set(self::HEAT_MAP, $value);
    }

    /**
     * Returns value of 'heat_map' property
     *
     * @return HeatMap
     */
    public function getHeatMap() {
        return $this->get(self::HEAT_MAP);
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
     * Sets value of 'city_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCityId($value) {
        return $this->set(self::CITY_ID, $value);
    }

    /**
     * Returns value of 'city_id' property
     *
     * @return int
     */
    public function getCityId() {
        return $this->get(self::CITY_ID);
    }

    /**
     * Sets value of 'ext_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExtType($value) {
        return $this->set(self::EXT_TYPE, $value);
    }

    /**
     * Returns value of 'ext_type' property
     *
     * @return int
     */
    public function getExtType() {
        return $this->get(self::EXT_TYPE);
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
     * Sets value of 'rp_des_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRpDesType($value) {
        return $this->set(self::RP_DES_TYPE, $value);
    }

    /**
     * Returns value of 'rp_des_type' property
     *
     * @return int
     */
    public function getRpDesType() {
        return $this->get(self::RP_DES_TYPE);
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
     * Sets value of 'storage_src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorageSrc($value) {
        return $this->set(self::STORAGE_SRC, $value);
    }

    /**
     * Returns value of 'storage_src' property
     *
     * @return string
     */
    public function getStorageSrc() {
        return $this->get(self::STORAGE_SRC);
    }

    /**
     * Sets value of 'suspected_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSuspectedFlag($value) {
        return $this->set(self::SUSPECTED_FLAG, $value);
    }

    /**
     * Returns value of 'suspected_flag' property
     *
     * @return int
     */
    public function getSuspectedFlag() {
        return $this->get(self::SUSPECTED_FLAG);
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
     * Sets value of 'area' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setArea($value) {
        return $this->set(self::AREA, $value);
    }

    /**
     * Returns value of 'area' property
     *
     * @return int
     */
    public function getArea() {
        return $this->get(self::AREA);
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value) {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone() {
        return $this->get(self::PHONE);
    }

    /**
     * Sets value of 'vista' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVista($value) {
        return $this->set(self::VISTA, $value);
    }

    /**
     * Returns value of 'vista' property
     *
     * @return string
     */
    public function getVista() {
        return $this->get(self::VISTA);
    }

    /**
     * Appends value to 'alias' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendAlias($value) {
        return $this->append(self::ALIAS, $value);
    }

    /**
     * Clears 'alias' list
     *
     * @return null
     */
    public function clearAlias() {
        return $this->clear(self::ALIAS);
    }

    /**
     * Returns 'alias' list
     *
     * @return string[]
     */
    public function getAlias() {
        return $this->get(self::ALIAS);
    }

    /**
     * Returns 'alias' iterator
     *
     * @return ArrayIterator
     */
    public function getAliasIterator() {
        return new ArrayIterator($this->get(self::ALIAS));
    }

    /**
     * Returns element from 'alias' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getAliasAt($offset) {
        return $this->get(self::ALIAS, $offset);
    }

    /**
     * Returns count of 'alias' list
     *
     * @return int
     */
    public function getAliasCount() {
        return $this->count(self::ALIAS);
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
     * Sets value of 'rp_des' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRpDes($value) {
        return $this->set(self::RP_DES, $value);
    }

    /**
     * Returns value of 'rp_des' property
     *
     * @return string
     */
    public function getRpDes() {
        return $this->get(self::RP_DES);
    }

    /**
     * Sets value of 'street_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreetId($value) {
        return $this->set(self::STREET_ID, $value);
    }

    /**
     * Returns value of 'street_id' property
     *
     * @return string
     */
    public function getStreetId() {
        return $this->get(self::STREET_ID);
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
     * Sets value of 'ty' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTy($value) {
        return $this->set(self::TY, $value);
    }

    /**
     * Returns value of 'ty' property
     *
     * @return int
     */
    public function getTy() {
        return $this->get(self::TY);
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
     * Sets value of 'indoor_floor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndoorFloor($value) {
        return $this->set(self::INDOOR_FLOOR, $value);
    }

    /**
     * Returns value of 'indoor_floor' property
     *
     * @return string
     */
    public function getIndoorFloor() {
        return $this->get(self::INDOOR_FLOOR);
    }

    /**
     * Sets value of 'indoor_parent_uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndoorParentUid($value) {
        return $this->set(self::INDOOR_PARENT_UID, $value);
    }

    /**
     * Returns value of 'indoor_parent_uid' property
     *
     * @return string
     */
    public function getIndoorParentUid() {
        return $this->get(self::INDOOR_PARENT_UID);
    }

    /**
     * Sets value of 'cloud_template' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCloudTemplate($value) {
        return $this->set(self::CLOUD_TEMPLATE, $value);
    }

    /**
     * Returns value of 'cloud_template' property
     *
     * @return string
     */
    public function getCloudTemplate() {
        return $this->get(self::CLOUD_TEMPLATE);
    }

    /**
     * Appends value to 'other_stations' list
     *
     * @param OtherStations $value Value to append
     *
     * @return null
     */
    public function appendOtherStations(OtherStations $value) {
        return $this->append(self::OTHER_STATIONS, $value);
    }

    /**
     * Clears 'other_stations' list
     *
     * @return null
     */
    public function clearOtherStations() {
        return $this->clear(self::OTHER_STATIONS);
    }

    /**
     * Returns 'other_stations' list
     *
     * @return OtherStations[]
     */
    public function getOtherStations() {
        return $this->get(self::OTHER_STATIONS);
    }

    /**
     * Returns 'other_stations' iterator
     *
     * @return ArrayIterator
     */
    public function getOtherStationsIterator() {
        return new ArrayIterator($this->get(self::OTHER_STATIONS));
    }

    /**
     * Returns element from 'other_stations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OtherStations
     */
    public function getOtherStationsAt($offset) {
        return $this->get(self::OTHER_STATIONS, $offset);
    }

    /**
     * Returns count of 'other_stations' list
     *
     * @return int
     */
    public function getOtherStationsCount() {
        return $this->count(self::OTHER_STATIONS);
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
     * Sets value of 'station_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStationNum($value) {
        return $this->set(self::STATION_NUM, $value);
    }

    /**
     * Returns value of 'station_num' property
     *
     * @return string
     */
    public function getStationNum() {
        return $this->get(self::STATION_NUM);
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
 * Inf message
 */
if (!class_exists('Inf')) {
class Inf extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;
    const CURRENT_CITY = 3;
    const OFFLINE = 4;

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
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
        ),
        self::OFFLINE => array(
            'name' => 'offline',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::OFFLINE] = null;
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
     * Sets value of 'offline' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOffline($value) {
        return $this->set(self::OFFLINE, $value);
    }

    /**
     * Returns value of 'offline' property
     *
     * @return int
     */
    public function getOffline() {
        return $this->get(self::OFFLINE);
    }
}
}
require_once 'currentcity.php';