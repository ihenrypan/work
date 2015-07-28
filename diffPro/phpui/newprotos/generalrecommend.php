<?php
/**
 * Auto generated from map_general_recommend.proto.1 at 2015-06-23 14:47:35
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
    const TITLE = 1;
    const PIC_URL = 2;
    const TELEPHONE = 3;
    const ADDRESS = 4;
    const CITY = 5;
    const COMMENT = 6;
    const REC_REASON = 7;
    const STD_TAG = 8;
    const WEIGHTED_TAG = 9;
    const PRICE = 10;
    const OVERALL_RATING = 11;
    const UID = 12;
    const STATE = 13;
    const DISTANCE = 14;
    const PX = 15;
    const PY = 16;
    const SQ = 17;
    const DESCRIPTION = 18;
    const POI_INDUSTRY = 19;
    const SCENE = 20;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::PIC_URL => array(
            'name' => 'pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::TELEPHONE => array(
            'name' => 'telephone',
            'required' => false,
            'type' => 7,
        ),
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => 7,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::COMMENT => array(
            'name' => 'comment',
            'required' => false,
            'type' => 7,
        ),
        self::REC_REASON => array(
            'name' => 'rec_reason',
            'required' => false,
            'type' => 7,
        ),
        self::STD_TAG => array(
            'name' => 'std_tag',
            'required' => false,
            'type' => 7,
        ),
        self::WEIGHTED_TAG => array(
            'name' => 'weighted_tag',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::OVERALL_RATING => array(
            'name' => 'overall_rating',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
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
        self::SQ => array(
            'name' => 'sq',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::POI_INDUSTRY => array(
            'name' => 'poi_industry',
            'required' => false,
            'type' => 7,
        ),
        self::SCENE => array(
            'name' => 'scene',
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
        $this->values[self::PIC_URL] = null;
        $this->values[self::TELEPHONE] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::CITY] = null;
        $this->values[self::COMMENT] = null;
        $this->values[self::REC_REASON] = null;
        $this->values[self::STD_TAG] = null;
        $this->values[self::WEIGHTED_TAG] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::OVERALL_RATING] = null;
        $this->values[self::UID] = null;
        $this->values[self::STATE] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::PX] = null;
        $this->values[self::PY] = null;
        $this->values[self::SQ] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::POI_INDUSTRY] = null;
        $this->values[self::SCENE] = null;
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
     * Sets value of 'telephone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTelephone($value) {
        return $this->set(self::TELEPHONE, $value);
    }

    /**
     * Returns value of 'telephone' property
     *
     * @return string
     */
    public function getTelephone() {
        return $this->get(self::TELEPHONE);
    }

    /**
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value) {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress() {
        return $this->get(self::ADDRESS);
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value) {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity() {
        return $this->get(self::CITY);
    }

    /**
     * Sets value of 'comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value) {
        return $this->set(self::COMMENT, $value);
    }

    /**
     * Returns value of 'comment' property
     *
     * @return string
     */
    public function getComment() {
        return $this->get(self::COMMENT);
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
     * Sets value of 'std_tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStdTag($value) {
        return $this->set(self::STD_TAG, $value);
    }

    /**
     * Returns value of 'std_tag' property
     *
     * @return string
     */
    public function getStdTag() {
        return $this->get(self::STD_TAG);
    }

    /**
     * Sets value of 'weighted_tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeightedTag($value) {
        return $this->set(self::WEIGHTED_TAG, $value);
    }

    /**
     * Returns value of 'weighted_tag' property
     *
     * @return string
     */
    public function getWeightedTag() {
        return $this->get(self::WEIGHTED_TAG);
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
     * Sets value of 'sq' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSq($value) {
        return $this->set(self::SQ, $value);
    }

    /**
     * Returns value of 'sq' property
     *
     * @return string
     */
    public function getSq() {
        return $this->get(self::SQ);
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
}
}

/**
 * GeneralRecommend message
 */
if (!class_exists('GeneralRecommend')) {
class GeneralRecommend extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;
    const INDUSTRY = 2;
    const COUNT = 3;
    const ERROR = 4;
    const MORE = 5;
    const LBS_FORWARD = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
            'type' => 'Content',
        ),
        self::INDUSTRY => array(
            'name' => 'industry',
            'required' => false,
            'type' => 7,
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => 5,
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
        self::LBS_FORWARD => array(
            'name' => 'lbs_forward',
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
        $this->values[self::INDUSTRY] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::MORE] = null;
        $this->values[self::LBS_FORWARD] = null;
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
}
}
