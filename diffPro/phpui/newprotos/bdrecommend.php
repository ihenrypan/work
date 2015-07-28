<?php
/**
 * Auto generated from map_bd_recommend.proto.1 at 2015-06-23 14:46:44
 */

/**
 * LikeParam message
 */
if (!class_exists('LikeParam')) {
class LikeParam extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const KEY = 1;
    const SUBKEY = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => false,
            'type' => 7,
        ),
        self::SUBKEY => array(
            'name' => 'subkey',
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
        $this->values[self::KEY] = null;
        $this->values[self::SUBKEY] = null;
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
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value) {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey() {
        return $this->get(self::KEY);
    }

    /**
     * Sets value of 'subkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubkey($value) {
        return $this->set(self::SUBKEY, $value);
    }

    /**
     * Returns value of 'subkey' property
     *
     * @return string
     */
    public function getSubkey() {
        return $this->get(self::SUBKEY);
    }
}
}

/**
 * UiData message
 */
if (!class_exists('UiData')) {
class UiData extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SECTION1 = 1;
    const SECTION2 = 2;
    const SECTION3 = 3;
    const SECTION4 = 4;
    const SECTION5 = 5;
    const SECTION6 = 6;
    const SECTION7 = 7;
    const SECTION8 = 8;
    const SECTION9 = 9;
    const SECTION10 = 10;
    const SECTION11 = 11;
    const SECTION12 = 12;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SECTION1 => array(
            'name' => 'section1',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION2 => array(
            'name' => 'section2',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION3 => array(
            'name' => 'section3',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION4 => array(
            'name' => 'section4',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION5 => array(
            'name' => 'section5',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION6 => array(
            'name' => 'section6',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION7 => array(
            'name' => 'section7',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION8 => array(
            'name' => 'section8',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION9 => array(
            'name' => 'section9',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION10 => array(
            'name' => 'section10',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION11 => array(
            'name' => 'section11',
            'required' => false,
            'type' => 7,
        ),
        self::SECTION12 => array(
            'name' => 'section12',
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
        $this->values[self::SECTION1] = null;
        $this->values[self::SECTION2] = null;
        $this->values[self::SECTION3] = null;
        $this->values[self::SECTION4] = null;
        $this->values[self::SECTION5] = null;
        $this->values[self::SECTION6] = null;
        $this->values[self::SECTION7] = null;
        $this->values[self::SECTION8] = null;
        $this->values[self::SECTION9] = null;
        $this->values[self::SECTION10] = null;
        $this->values[self::SECTION11] = null;
        $this->values[self::SECTION12] = null;
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
     * Sets value of 'section1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection1($value) {
        return $this->set(self::SECTION1, $value);
    }

    /**
     * Returns value of 'section1' property
     *
     * @return string
     */
    public function getSection1() {
        return $this->get(self::SECTION1);
    }

    /**
     * Sets value of 'section2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection2($value) {
        return $this->set(self::SECTION2, $value);
    }

    /**
     * Returns value of 'section2' property
     *
     * @return string
     */
    public function getSection2() {
        return $this->get(self::SECTION2);
    }

    /**
     * Sets value of 'section3' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection3($value) {
        return $this->set(self::SECTION3, $value);
    }

    /**
     * Returns value of 'section3' property
     *
     * @return string
     */
    public function getSection3() {
        return $this->get(self::SECTION3);
    }

    /**
     * Sets value of 'section4' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection4($value) {
        return $this->set(self::SECTION4, $value);
    }

    /**
     * Returns value of 'section4' property
     *
     * @return string
     */
    public function getSection4() {
        return $this->get(self::SECTION4);
    }

    /**
     * Sets value of 'section5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection5($value) {
        return $this->set(self::SECTION5, $value);
    }

    /**
     * Returns value of 'section5' property
     *
     * @return string
     */
    public function getSection5() {
        return $this->get(self::SECTION5);
    }

    /**
     * Sets value of 'section6' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection6($value) {
        return $this->set(self::SECTION6, $value);
    }

    /**
     * Returns value of 'section6' property
     *
     * @return string
     */
    public function getSection6() {
        return $this->get(self::SECTION6);
    }

    /**
     * Sets value of 'section7' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection7($value) {
        return $this->set(self::SECTION7, $value);
    }

    /**
     * Returns value of 'section7' property
     *
     * @return string
     */
    public function getSection7() {
        return $this->get(self::SECTION7);
    }

    /**
     * Sets value of 'section8' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection8($value) {
        return $this->set(self::SECTION8, $value);
    }

    /**
     * Returns value of 'section8' property
     *
     * @return string
     */
    public function getSection8() {
        return $this->get(self::SECTION8);
    }

    /**
     * Sets value of 'section9' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection9($value) {
        return $this->set(self::SECTION9, $value);
    }

    /**
     * Returns value of 'section9' property
     *
     * @return string
     */
    public function getSection9() {
        return $this->get(self::SECTION9);
    }

    /**
     * Sets value of 'section10' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection10($value) {
        return $this->set(self::SECTION10, $value);
    }

    /**
     * Returns value of 'section10' property
     *
     * @return string
     */
    public function getSection10() {
        return $this->get(self::SECTION10);
    }

    /**
     * Sets value of 'section11' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection11($value) {
        return $this->set(self::SECTION11, $value);
    }

    /**
     * Returns value of 'section11' property
     *
     * @return string
     */
    public function getSection11() {
        return $this->get(self::SECTION11);
    }

    /**
     * Sets value of 'section12' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSection12($value) {
        return $this->set(self::SECTION12, $value);
    }

    /**
     * Returns value of 'section12' property
     *
     * @return string
     */
    public function getSection12() {
        return $this->get(self::SECTION12);
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
    const POI_INDUSTRY = 1;
    const PIC_URL = 2;
    const UID = 3;
    const PX = 4;
    const PY = 5;
    const SCENE = 6;
    const LIKE_PARAM = 7;
    const UI_DATA = 8;
    const GROUPON_ID = 9;
    const TUAN_PRICE = 10;
    const ORIGINAL_PRICE = 11;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POI_INDUSTRY => array(
            'name' => 'poi_industry',
            'required' => false,
            'type' => 7,
        ),
        self::PIC_URL => array(
            'name' => 'pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::PX => array(
            'name' => 'px',
            'required' => false,
            'type' => 7,
        ),
        self::PY => array(
            'name' => 'py',
            'required' => false,
            'type' => 7,
        ),
        self::SCENE => array(
            'name' => 'scene',
            'required' => false,
            'type' => 7,
        ),
        self::LIKE_PARAM => array(
            'name' => 'like_param',
            'required' => false,
            'type' => 'LikeParam',
        ),
        self::UI_DATA => array(
            'name' => 'ui_data',
            'required' => false,
            'type' => 'UiData',
        ),
        self::GROUPON_ID => array(
            'name' => 'groupon_id',
            'required' => false,
            'type' => 7,
        ),
        self::TUAN_PRICE => array(
            'name' => 'tuan_price',
            'required' => false,
            'type' => 7,
        ),
        self::ORIGINAL_PRICE => array(
            'name' => 'original_price',
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
        $this->values[self::POI_INDUSTRY] = null;
        $this->values[self::PIC_URL] = null;
        $this->values[self::UID] = null;
        $this->values[self::PX] = null;
        $this->values[self::PY] = null;
        $this->values[self::SCENE] = null;
        $this->values[self::LIKE_PARAM] = null;
        $this->values[self::UI_DATA] = null;
        $this->values[self::GROUPON_ID] = null;
        $this->values[self::TUAN_PRICE] = null;
        $this->values[self::ORIGINAL_PRICE] = null;
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
     * Sets value of 'poi_industry' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiIndustry($value) {
        return $this->set(self::POI_INDUSTRY, $value);
    }

    /**
     * Returns value of 'poi_industry' property
     *
     * @return string
     */
    public function getPoiIndustry() {
        return $this->get(self::POI_INDUSTRY);
    }

    /**
     * Sets value of 'pic_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicUrl($value) {
        return $this->set(self::PIC_URL, $value);
    }

    /**
     * Returns value of 'pic_url' property
     *
     * @return string
     */
    public function getPicUrl() {
        return $this->get(self::PIC_URL);
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
     * Sets value of 'px' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPx($value) {
        return $this->set(self::PX, $value);
    }

    /**
     * Returns value of 'px' property
     *
     * @return string
     */
    public function getPx() {
        return $this->get(self::PX);
    }

    /**
     * Sets value of 'py' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPy($value) {
        return $this->set(self::PY, $value);
    }

    /**
     * Returns value of 'py' property
     *
     * @return string
     */
    public function getPy() {
        return $this->get(self::PY);
    }

    /**
     * Sets value of 'scene' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScene($value) {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return string
     */
    public function getScene() {
        return $this->get(self::SCENE);
    }

    /**
     * Sets value of 'like_param' property
     *
     * @param LikeParam $value Property value
     *
     * @return null
     */
    public function setLikeParam(LikeParam $value) {
        return $this->set(self::LIKE_PARAM, $value);
    }

    /**
     * Returns value of 'like_param' property
     *
     * @return LikeParam
     */
    public function getLikeParam() {
        return $this->get(self::LIKE_PARAM);
    }

    /**
     * Sets value of 'ui_data' property
     *
     * @param UiData $value Property value
     *
     * @return null
     */
    public function setUiData(UiData $value) {
        return $this->set(self::UI_DATA, $value);
    }

    /**
     * Returns value of 'ui_data' property
     *
     * @return UiData
     */
    public function getUiData() {
        return $this->get(self::UI_DATA);
    }

    /**
     * Sets value of 'groupon_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGrouponId($value) {
        return $this->set(self::GROUPON_ID, $value);
    }

    /**
     * Returns value of 'groupon_id' property
     *
     * @return string
     */
    public function getGrouponId() {
        return $this->get(self::GROUPON_ID);
    }

    /**
     * Sets value of 'tuan_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTuanPrice($value) {
        return $this->set(self::TUAN_PRICE, $value);
    }

    /**
     * Returns value of 'tuan_price' property
     *
     * @return string
     */
    public function getTuanPrice() {
        return $this->get(self::TUAN_PRICE);
    }

    /**
     * Sets value of 'original_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalPrice($value) {
        return $this->set(self::ORIGINAL_PRICE, $value);
    }

    /**
     * Returns value of 'original_price' property
     *
     * @return string
     */
    public function getOriginalPrice() {
        return $this->get(self::ORIGINAL_PRICE);
    }
}
}

/**
 * BdRecommend message
 */
if (!class_exists('BdRecommend')) {
class BdRecommend extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;
    const ERROR = 8;
    const MORE = 9;
    const INDUSTRY = 10;
    const LBS_FORWARD = 11;
    const QID = 12;
    const LDATA = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
        self::MORE => array(
            'name' => 'more',
            'required' => false,
            'type' => 5,
        ),
        self::INDUSTRY => array(
            'name' => 'industry',
            'required' => false,
            'type' => 7,
        ),
        self::LBS_FORWARD => array(
            'name' => 'lbs_forward',
            'required' => false,
            'type' => 7,
        ),
        self::QID => array(
            'name' => 'qid',
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
        $this->values[self::CONTENT] = array();
        $this->values[self::ERROR] = null;
        $this->values[self::MORE] = null;
        $this->values[self::INDUSTRY] = null;
        $this->values[self::LBS_FORWARD] = null;
        $this->values[self::QID] = null;
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

    /**
     * Sets value of 'more' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMore($value) {
        return $this->set(self::MORE, $value);
    }

    /**
     * Returns value of 'more' property
     *
     * @return int
     */
    public function getMore() {
        return $this->get(self::MORE);
    }

    /**
     * Sets value of 'industry' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndustry($value) {
        return $this->set(self::INDUSTRY, $value);
    }

    /**
     * Returns value of 'industry' property
     *
     * @return string
     */
    public function getIndustry() {
        return $this->get(self::INDUSTRY);
    }

    /**
     * Sets value of 'lbs_forward' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLbsForward($value) {
        return $this->set(self::LBS_FORWARD, $value);
    }

    /**
     * Returns value of 'lbs_forward' property
     *
     * @return string
     */
    public function getLbsForward() {
        return $this->get(self::LBS_FORWARD);
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
