<?php
/**
 * Auto generated from map_bzlist.proto.1 at 2015-06-23 14:47:00
 */

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
    const TITLE = 2;
    const STATE = 3;
    const CIRCLE_NAME = 4;
    const PIC_URL = 5;
    const SCORE = 6;
    const TAG = 7;
    const PRICE = 8;
    const PX = 9;
    const PY = 10;
    const ID = 11;
    const UID = 12;
    const REC_REASON = 13;
    const SCENE = 14;
    const DIS = 15;
    const FLAG_ON_LEFT = 16;
    const PRICE_TEXT = 17;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POI_INDUSTRY => array(
            'name' => 'poi_industry',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => 7,
        ),
        self::CIRCLE_NAME => array(
            'name' => 'circle_name',
            'required' => false,
            'type' => 7,
        ),
        self::PIC_URL => array(
            'name' => 'pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => 7,
        ),
        self::TAG => array(
            'name' => 'tag',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
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
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::REC_REASON => array(
            'name' => 'rec_reason',
            'required' => false,
            'type' => 7,
        ),
        self::SCENE => array(
            'name' => 'scene',
            'required' => false,
            'type' => 7,
        ),
        self::DIS => array(
            'name' => 'dis',
            'required' => false,
            'type' => 7,
        ),
        self::FLAG_ON_LEFT => array(
            'name' => 'flag_on_left',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE_TEXT => array(
            'name' => 'price_text',
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
        $this->values[self::TITLE] = null;
        $this->values[self::STATE] = null;
        $this->values[self::CIRCLE_NAME] = null;
        $this->values[self::PIC_URL] = null;
        $this->values[self::SCORE] = null;
        $this->values[self::TAG] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::PX] = null;
        $this->values[self::PY] = null;
        $this->values[self::ID] = null;
        $this->values[self::UID] = null;
        $this->values[self::REC_REASON] = null;
        $this->values[self::SCENE] = null;
        $this->values[self::DIS] = null;
        $this->values[self::FLAG_ON_LEFT] = null;
        $this->values[self::PRICE_TEXT] = null;
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
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value) {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState() {
        return $this->get(self::STATE);
    }

    /**
     * Sets value of 'circle_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCircleName($value) {
        return $this->set(self::CIRCLE_NAME, $value);
    }

    /**
     * Returns value of 'circle_name' property
     *
     * @return string
     */
    public function getCircleName() {
        return $this->get(self::CIRCLE_NAME);
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
     * Sets value of 'score' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScore($value) {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return string
     */
    public function getScore() {
        return $this->get(self::SCORE);
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
     * Sets value of 'id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setId($value) {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return string
     */
    public function getId() {
        return $this->get(self::ID);
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
     * Sets value of 'dis' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDis($value) {
        return $this->set(self::DIS, $value);
    }

    /**
     * Returns value of 'dis' property
     *
     * @return string
     */
    public function getDis() {
        return $this->get(self::DIS);
    }

    /**
     * Sets value of 'flag_on_left' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFlagOnLeft($value) {
        return $this->set(self::FLAG_ON_LEFT, $value);
    }

    /**
     * Returns value of 'flag_on_left' property
     *
     * @return string
     */
    public function getFlagOnLeft() {
        return $this->get(self::FLAG_ON_LEFT);
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
}
}

/**
 * BzList message
 */
if (!class_exists('BzList')) {
class BzList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;
    const C = 2;
    const CATER = 3;
    const CIRCLE_NAME = 4;
    const CIRCLE_NAME_RECOMMEND = 5;
    const PX = 6;
    const PY = 7;
    const ERROR = 8;
    const MORE = 9;
    const INDUSTRY = 10;
    const TOTAL_COUNT = 12;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
            'type' => 'Content',
        ),
        self::C => array(
            'name' => 'c',
            'required' => false,
            'type' => 7,
        ),
        self::CATER => array(
            'name' => 'cater',
            'required' => false,
            'type' => 7,
        ),
        self::CIRCLE_NAME => array(
            'name' => 'circle_name',
            'required' => false,
            'type' => 7,
        ),
        self::CIRCLE_NAME_RECOMMEND => array(
            'name' => 'circle_name_recommend',
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
        self::TOTAL_COUNT => array(
            'name' => 'total_count',
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
        $this->values[self::CONTENT] = array();
        $this->values[self::C] = null;
        $this->values[self::CATER] = null;
        $this->values[self::CIRCLE_NAME] = null;
        $this->values[self::CIRCLE_NAME_RECOMMEND] = null;
        $this->values[self::PX] = null;
        $this->values[self::PY] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::MORE] = null;
        $this->values[self::INDUSTRY] = null;
        $this->values[self::TOTAL_COUNT] = null;
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
     * Sets value of 'c' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setC($value) {
        return $this->set(self::C, $value);
    }

    /**
     * Returns value of 'c' property
     *
     * @return string
     */
    public function getC() {
        return $this->get(self::C);
    }

    /**
     * Sets value of 'cater' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCater($value) {
        return $this->set(self::CATER, $value);
    }

    /**
     * Returns value of 'cater' property
     *
     * @return string
     */
    public function getCater() {
        return $this->get(self::CATER);
    }

    /**
     * Sets value of 'circle_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCircleName($value) {
        return $this->set(self::CIRCLE_NAME, $value);
    }

    /**
     * Returns value of 'circle_name' property
     *
     * @return string
     */
    public function getCircleName() {
        return $this->get(self::CIRCLE_NAME);
    }

    /**
     * Sets value of 'circle_name_recommend' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCircleNameRecommend($value) {
        return $this->set(self::CIRCLE_NAME_RECOMMEND, $value);
    }

    /**
     * Returns value of 'circle_name_recommend' property
     *
     * @return string
     */
    public function getCircleNameRecommend() {
        return $this->get(self::CIRCLE_NAME_RECOMMEND);
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
     * Sets value of 'total_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalCount($value) {
        return $this->set(self::TOTAL_COUNT, $value);
    }

    /**
     * Returns value of 'total_count' property
     *
     * @return int
     */
    public function getTotalCount() {
        return $this->get(self::TOTAL_COUNT);
    }
}
}
