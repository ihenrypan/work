<?php
/**
 * Auto generated from map_poi_result.proto.1_2 at 2015-07-20 18:05:20
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
    const LOC_ATTR = 2;
    const OP_GEL = 3;
    const OP_ADDR = 4;
    const RP_STRATEGY = 5;
    const QID = 6;
    const TOTAL_BUSLINE_NUM = 7;
    const RES_BOUND = 8;
    const RES_BOUND_ACC = 9;
    const RES_X = 10;
    const RES_Y = 11;
    const LIST_THIRDKING_FLAG = 12;
    const LANDMARK_FLAG = 13;
    const LDATA = 14;
    const LBS_DIRECT_FLAG = 15;
    const DISP_ATTR = 16;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::LOC_ATTR => array(
            'name' => 'loc_attr',
            'required' => false,
            'type' => 5,
        ),
        self::OP_GEL => array(
            'name' => 'op_gel',
            'required' => false,
            'type' => 8,
        ),
        self::OP_ADDR => array(
            'name' => 'op_addr',
            'required' => false,
            'type' => 8,
        ),
        self::RP_STRATEGY => array(
            'name' => 'rp_strategy',
            'required' => false,
            'type' => 5,
        ),
        self::QID => array(
            'name' => 'qid',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL_BUSLINE_NUM => array(
            'name' => 'total_busline_num',
            'required' => false,
            'type' => 5,
        ),
        self::RES_BOUND => array(
            'name' => 'res_bound',
            'required' => false,
            'type' => 7,
        ),
        self::RES_BOUND_ACC => array(
            'name' => 'res_bound_acc',
            'required' => false,
            'type' => 7,
        ),
        self::RES_X => array(
            'name' => 'res_x',
            'required' => false,
            'type' => 7,
        ),
        self::RES_Y => array(
            'name' => 'res_y',
            'required' => false,
            'type' => 7,
        ),
        self::LIST_THIRDKING_FLAG => array(
            'name' => 'list_thirdking_flag',
            'required' => false,
            'type' => 5,
        ),
        self::LANDMARK_FLAG => array(
            'name' => 'landmark_flag',
            'required' => false,
            'type' => 7,
        ),
        self::LDATA => array(
            'name' => 'ldata',
            'required' => false,
            'type' => 7,
        ),
        self::LBS_DIRECT_FLAG => array(
            'name' => 'lbs_direct_flag',
            'required' => false,
            'type' => 7,
        ),
        self::DISP_ATTR => array(
            'name' => 'disp_attr',
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
        $this->values[self::LOC_ATTR] = null;
        $this->values[self::OP_GEL] = null;
        $this->values[self::OP_ADDR] = null;
        $this->values[self::RP_STRATEGY] = null;
        $this->values[self::QID] = null;
        $this->values[self::TOTAL_BUSLINE_NUM] = null;
        $this->values[self::RES_BOUND] = null;
        $this->values[self::RES_BOUND_ACC] = null;
        $this->values[self::RES_X] = null;
        $this->values[self::RES_Y] = null;
        $this->values[self::LIST_THIRDKING_FLAG] = null;
        $this->values[self::LANDMARK_FLAG] = null;
        $this->values[self::LDATA] = null;
        $this->values[self::LBS_DIRECT_FLAG] = null;
        $this->values[self::DISP_ATTR] = null;
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
     * Sets value of 'loc_attr' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLocAttr($value) {
        return $this->set(self::LOC_ATTR, $value);
    }

    /**
     * Returns value of 'loc_attr' property
     *
     * @return int
     */
    public function getLocAttr() {
        return $this->get(self::LOC_ATTR);
    }

    /**
     * Sets value of 'op_gel' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setOpGel($value) {
        return $this->set(self::OP_GEL, $value);
    }

    /**
     * Returns value of 'op_gel' property
     *
     * @return bool
     */
    public function getOpGel() {
        return $this->get(self::OP_GEL);
    }

    /**
     * Sets value of 'op_addr' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setOpAddr($value) {
        return $this->set(self::OP_ADDR, $value);
    }

    /**
     * Returns value of 'op_addr' property
     *
     * @return bool
     */
    public function getOpAddr() {
        return $this->get(self::OP_ADDR);
    }

    /**
     * Sets value of 'rp_strategy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRpStrategy($value) {
        return $this->set(self::RP_STRATEGY, $value);
    }

    /**
     * Returns value of 'rp_strategy' property
     *
     * @return int
     */
    public function getRpStrategy() {
        return $this->get(self::RP_STRATEGY);
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
     * Sets value of 'res_bound' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResBound($value) {
        return $this->set(self::RES_BOUND, $value);
    }

    /**
     * Returns value of 'res_bound' property
     *
     * @return string
     */
    public function getResBound() {
        return $this->get(self::RES_BOUND);
    }

    /**
     * Sets value of 'res_bound_acc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResBoundAcc($value) {
        return $this->set(self::RES_BOUND_ACC, $value);
    }

    /**
     * Returns value of 'res_bound_acc' property
     *
     * @return string
     */
    public function getResBoundAcc() {
        return $this->get(self::RES_BOUND_ACC);
    }

    /**
     * Sets value of 'res_x' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResX($value) {
        return $this->set(self::RES_X, $value);
    }

    /**
     * Returns value of 'res_x' property
     *
     * @return string
     */
    public function getResX() {
        return $this->get(self::RES_X);
    }

    /**
     * Sets value of 'res_y' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResY($value) {
        return $this->set(self::RES_Y, $value);
    }

    /**
     * Returns value of 'res_y' property
     *
     * @return string
     */
    public function getResY() {
        return $this->get(self::RES_Y);
    }

    /**
     * Sets value of 'list_thirdking_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setListThirdkingFlag($value) {
        return $this->set(self::LIST_THIRDKING_FLAG, $value);
    }

    /**
     * Returns value of 'list_thirdking_flag' property
     *
     * @return int
     */
    public function getListThirdkingFlag() {
        return $this->get(self::LIST_THIRDKING_FLAG);
    }

    /**
     * Sets value of 'landmark_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLandmarkFlag($value) {
        return $this->set(self::LANDMARK_FLAG, $value);
    }

    /**
     * Returns value of 'landmark_flag' property
     *
     * @return string
     */
    public function getLandmarkFlag() {
        return $this->get(self::LANDMARK_FLAG);
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

    /**
     * Sets value of 'lbs_direct_flag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLbsDirectFlag($value) {
        return $this->set(self::LBS_DIRECT_FLAG, $value);
    }

    /**
     * Returns value of 'lbs_direct_flag' property
     *
     * @return string
     */
    public function getLbsDirectFlag() {
        return $this->get(self::LBS_DIRECT_FLAG);
    }

    /**
     * Sets value of 'disp_attr' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDispAttr($value) {
        return $this->set(self::DISP_ATTR, $value);
    }

    /**
     * Returns value of 'disp_attr' property
     *
     * @return int
     */
    public function getDispAttr() {
        return $this->get(self::DISP_ATTR);
    }
}
}

/**
 * Addrs message
 */
if (!class_exists('Addrs')) {
class Addrs extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ADDR = 1;
    const GEO = 2;
    const NAME = 3;
    const PRECISE = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
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
        self::PRECISE => array(
            'name' => 'precise',
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
        $this->values[self::ADDR] = null;
        $this->values[self::GEO] = null;
        $this->values[self::NAME] = null;
        $this->values[self::PRECISE] = null;
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
     * Sets value of 'precise' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPrecise($value) {
        return $this->set(self::PRECISE, $value);
    }

    /**
     * Returns value of 'precise' property
     *
     * @return int
     */
    public function getPrecise() {
        return $this->get(self::PRECISE);
    }
}
}

/**
 * Psrs message
 */
if (!class_exists('Psrs')) {
class Psrs extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SENUM = 1;
    const SERESULT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SENUM => array(
            'name' => 'SENum',
            'required' => false,
            'type' => 5,
        ),
        self::SERESULT => array(
            'name' => 'SEResult',
            'repeated' => true,
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
        $this->values[self::SENUM] = null;
        $this->values[self::SERESULT] = array();
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
     * Sets value of 'SENum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSENum($value) {
        return $this->set(self::SENUM, $value);
    }

    /**
     * Returns value of 'SENum' property
     *
     * @return int
     */
    public function getSENum() {
        return $this->get(self::SENUM);
    }

    /**
     * Appends value to 'SEResult' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSEResult($value) {
        return $this->append(self::SERESULT, $value);
    }

    /**
     * Clears 'SEResult' list
     *
     * @return null
     */
    public function clearSEResult() {
        return $this->clear(self::SERESULT);
    }

    /**
     * Returns 'SEResult' list
     *
     * @return string[]
     */
    public function getSEResult() {
        return $this->get(self::SERESULT);
    }

    /**
     * Returns 'SEResult' iterator
     *
     * @return ArrayIterator
     */
    public function getSEResultIterator() {
        return new ArrayIterator($this->get(self::SERESULT));
    }

    /**
     * Returns element from 'SEResult' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSEResultAt($offset) {
        return $this->get(self::SERESULT, $offset);
    }

    /**
     * Returns count of 'SEResult' list
     *
     * @return int
     */
    public function getSEResultCount() {
        return $this->count(self::SERESULT);
    }
}
}

/**
 * SuggestQuery message
 */
if (!class_exists('SuggestQuery')) {
class SuggestQuery extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const QUERY = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::QUERY => array(
            'name' => 'query',
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
        $this->values[self::QUERY] = null;
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
     * Sets value of 'query' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuery($value) {
        return $this->set(self::QUERY, $value);
    }

    /**
     * Returns value of 'query' property
     *
     * @return string
     */
    public function getQuery() {
        return $this->get(self::QUERY);
    }
}
}

/**
 * SearchExt message
 */
if (!class_exists('SearchExt')) {
class SearchExt extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TITLE = 1;
    const WD = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
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
        $this->values[self::WD] = null;
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
}
}

/**
 * DActCard message
 */
if (!class_exists('DActCard')) {
class DActCard extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LINK = 1;
    const IMG_URL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINK => array(
            'name' => 'link',
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
        $this->values[self::LINK] = null;
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
 * BannerInfo message
 */
if (!class_exists('BannerInfo')) {
class BannerInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TITLE = 1;
    const SCORE = 2;
    const IMAGE = 3;
    const ACT = 4;
    const ACT_URL = 5;
    const DESCRIPTION = 6;
    const STAR = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 7,
        ),
        self::ACT => array(
            'name' => 'act',
            'required' => false,
            'type' => 7,
        ),
        self::ACT_URL => array(
            'name' => 'act_url',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::STAR => array(
            'name' => 'star',
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
        $this->values[self::SCORE] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::ACT] = null;
        $this->values[self::ACT_URL] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::STAR] = null;
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
     * Sets value of 'act' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAct($value) {
        return $this->set(self::ACT, $value);
    }

    /**
     * Returns value of 'act' property
     *
     * @return string
     */
    public function getAct() {
        return $this->get(self::ACT);
    }

    /**
     * Sets value of 'act_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setActUrl($value) {
        return $this->set(self::ACT_URL, $value);
    }

    /**
     * Returns value of 'act_url' property
     *
     * @return string
     */
    public function getActUrl() {
        return $this->get(self::ACT_URL);
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
     * Sets value of 'star' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStar($value) {
        return $this->set(self::STAR, $value);
    }

    /**
     * Returns value of 'star' property
     *
     * @return string
     */
    public function getStar() {
        return $this->get(self::STAR);
    }
}
}

/**
 * PlaceInfo message
 */
if (!class_exists('PlaceInfo')) {
class PlaceInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SEARCH_EXT = 7;
    const D_ACT_CARD = 9;
    const BANNER_INFO = 8;
    const D_DATA_TYPE = 1;
    const D_SORT_TYPE = 2;
    const D_SORT_RULE = 3;
    const D_FILTERS_SHOW_FLAG = 4;
    const D_BUSINESS_ID = 5;
    const D_BUSINESS_TYPE = 6;
    const D_SUB_TYPE = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SEARCH_EXT => array(
            'name' => 'search_ext',
            'repeated' => true,
            'type' => 'SearchExt',
        ),
        self::D_ACT_CARD => array(
            'name' => 'd_act_card',
            'required' => false,
            'type' => 'DActCard',
        ),
        self::BANNER_INFO => array(
            'name' => 'banner_info',
            'required' => false,
            'type' => 'BannerInfo',
        ),
        self::D_DATA_TYPE => array(
            'name' => 'd_data_type',
            'required' => false,
            'type' => 7,
        ),
        self::D_SORT_TYPE => array(
            'name' => 'd_sort_type',
            'required' => false,
            'type' => 7,
        ),
        self::D_SORT_RULE => array(
            'name' => 'd_sort_rule',
            'required' => false,
            'type' => 5,
        ),
        self::D_FILTERS_SHOW_FLAG => array(
            'name' => 'd_filters_show_flag',
            'required' => false,
            'type' => 5,
        ),
        self::D_BUSINESS_ID => array(
            'name' => 'd_business_id',
            'required' => false,
            'type' => 7,
        ),
        self::D_BUSINESS_TYPE => array(
            'name' => 'd_business_type',
            'required' => false,
            'type' => 7,
        ),
        self::D_SUB_TYPE => array(
            'name' => 'd_sub_type',
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
        $this->values[self::SEARCH_EXT] = array();
        $this->values[self::D_ACT_CARD] = null;
        $this->values[self::BANNER_INFO] = null;
        $this->values[self::D_DATA_TYPE] = null;
        $this->values[self::D_SORT_TYPE] = null;
        $this->values[self::D_SORT_RULE] = null;
        $this->values[self::D_FILTERS_SHOW_FLAG] = null;
        $this->values[self::D_BUSINESS_ID] = null;
        $this->values[self::D_BUSINESS_TYPE] = null;
        $this->values[self::D_SUB_TYPE] = null;
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
     * Appends value to 'search_ext' list
     *
     * @param SearchExt $value Value to append
     *
     * @return null
     */
    public function appendSearchExt(SearchExt $value) {
        return $this->append(self::SEARCH_EXT, $value);
    }

    /**
     * Clears 'search_ext' list
     *
     * @return null
     */
    public function clearSearchExt() {
        return $this->clear(self::SEARCH_EXT);
    }

    /**
     * Returns 'search_ext' list
     *
     * @return SearchExt[]
     */
    public function getSearchExt() {
        return $this->get(self::SEARCH_EXT);
    }

    /**
     * Returns 'search_ext' iterator
     *
     * @return ArrayIterator
     */
    public function getSearchExtIterator() {
        return new ArrayIterator($this->get(self::SEARCH_EXT));
    }

    /**
     * Returns element from 'search_ext' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SearchExt
     */
    public function getSearchExtAt($offset) {
        return $this->get(self::SEARCH_EXT, $offset);
    }

    /**
     * Returns count of 'search_ext' list
     *
     * @return int
     */
    public function getSearchExtCount() {
        return $this->count(self::SEARCH_EXT);
    }

    /**
     * Sets value of 'd_act_card' property
     *
     * @param DActCard $value Property value
     *
     * @return null
     */
    public function setDActCard(DActCard $value) {
        return $this->set(self::D_ACT_CARD, $value);
    }

    /**
     * Returns value of 'd_act_card' property
     *
     * @return DActCard
     */
    public function getDActCard() {
        return $this->get(self::D_ACT_CARD);
    }

    /**
     * Sets value of 'banner_info' property
     *
     * @param BannerInfo $value Property value
     *
     * @return null
     */
    public function setBannerInfo(BannerInfo $value) {
        return $this->set(self::BANNER_INFO, $value);
    }

    /**
     * Returns value of 'banner_info' property
     *
     * @return BannerInfo
     */
    public function getBannerInfo() {
        return $this->get(self::BANNER_INFO);
    }

    /**
     * Sets value of 'd_data_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDDataType($value) {
        return $this->set(self::D_DATA_TYPE, $value);
    }

    /**
     * Returns value of 'd_data_type' property
     *
     * @return string
     */
    public function getDDataType() {
        return $this->get(self::D_DATA_TYPE);
    }

    /**
     * Sets value of 'd_sort_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDSortType($value) {
        return $this->set(self::D_SORT_TYPE, $value);
    }

    /**
     * Returns value of 'd_sort_type' property
     *
     * @return string
     */
    public function getDSortType() {
        return $this->get(self::D_SORT_TYPE);
    }

    /**
     * Sets value of 'd_sort_rule' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDSortRule($value) {
        return $this->set(self::D_SORT_RULE, $value);
    }

    /**
     * Returns value of 'd_sort_rule' property
     *
     * @return int
     */
    public function getDSortRule() {
        return $this->get(self::D_SORT_RULE);
    }

    /**
     * Sets value of 'd_filters_show_flag' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDFiltersShowFlag($value) {
        return $this->set(self::D_FILTERS_SHOW_FLAG, $value);
    }

    /**
     * Returns value of 'd_filters_show_flag' property
     *
     * @return int
     */
    public function getDFiltersShowFlag() {
        return $this->get(self::D_FILTERS_SHOW_FLAG);
    }

    /**
     * Sets value of 'd_business_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDBusinessId($value) {
        return $this->set(self::D_BUSINESS_ID, $value);
    }

    /**
     * Returns value of 'd_business_id' property
     *
     * @return string
     */
    public function getDBusinessId() {
        return $this->get(self::D_BUSINESS_ID);
    }

    /**
     * Sets value of 'd_business_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDBusinessType($value) {
        return $this->set(self::D_BUSINESS_TYPE, $value);
    }

    /**
     * Returns value of 'd_business_type' property
     *
     * @return string
     */
    public function getDBusinessType() {
        return $this->get(self::D_BUSINESS_TYPE);
    }

    /**
     * Sets value of 'd_sub_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDSubType($value) {
        return $this->set(self::D_SUB_TYPE, $value);
    }

    /**
     * Returns value of 'd_sub_type' property
     *
     * @return string
     */
    public function getDSubType() {
        return $this->get(self::D_SUB_TYPE);
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
 * Impression message
 */
if (!class_exists('Impression')) {
class Impression extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const KEYWORD = 1;
    const NUM = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::KEYWORD => array(
            'name' => 'keyword',
            'required' => false,
            'type' => 7,
        ),
        self::NUM => array(
            'name' => 'num',
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
        $this->values[self::KEYWORD] = null;
        $this->values[self::NUM] = null;
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
     * Sets value of 'keyword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKeyword($value) {
        return $this->set(self::KEYWORD, $value);
    }

    /**
     * Returns value of 'keyword' property
     *
     * @return string
     */
    public function getKeyword() {
        return $this->get(self::KEYWORD);
    }

    /**
     * Sets value of 'num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNum($value) {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return int
     */
    public function getNum() {
        return $this->get(self::NUM);
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
 * Marketbiz message
 */
if (!class_exists('Marketbiz')) {
class Marketbiz extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SRCNAME = 1;
    const CONTENT = 2;
    const ACT = 3;
    const STYPE = 4;
    const DTYPE = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SRCNAME => array(
            'name' => 'srcname',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::ACT => array(
            'name' => 'act',
            'required' => false,
            'type' => 5,
        ),
        self::STYPE => array(
            'name' => 'stype',
            'required' => false,
            'type' => 5,
        ),
        self::DTYPE => array(
            'name' => 'dtype',
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
        $this->values[self::SRCNAME] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::ACT] = null;
        $this->values[self::STYPE] = null;
        $this->values[self::DTYPE] = null;
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
     * Sets value of 'srcname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrcname($value) {
        return $this->set(self::SRCNAME, $value);
    }

    /**
     * Returns value of 'srcname' property
     *
     * @return string
     */
    public function getSrcname() {
        return $this->get(self::SRCNAME);
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
     * Sets value of 'act' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAct($value) {
        return $this->set(self::ACT, $value);
    }

    /**
     * Returns value of 'act' property
     *
     * @return int
     */
    public function getAct() {
        return $this->get(self::ACT);
    }

    /**
     * Sets value of 'stype' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStype($value) {
        return $this->set(self::STYPE, $value);
    }

    /**
     * Returns value of 'stype' property
     *
     * @return int
     */
    public function getStype() {
        return $this->get(self::STYPE);
    }

    /**
     * Sets value of 'dtype' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDtype($value) {
        return $this->set(self::DTYPE, $value);
    }

    /**
     * Returns value of 'dtype' property
     *
     * @return int
     */
    public function getDtype() {
        return $this->get(self::DTYPE);
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
    const FLAG_ON_LEFT = 26;
    const IMPRESSION = 27;
    const MEISHIPAIHAO = 28;
    const TRADE_TAG = 29;
    const MARKETBIZ = 30;
    const VALIDATE = 31;

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
        self::FLAG_ON_LEFT => array(
            'name' => 'flag_on_left',
            'required' => false,
            'type' => 7,
        ),
        self::IMPRESSION => array(
            'name' => 'impression',
            'repeated' => true,
            'type' => 'Impression',
        ),
        self::MEISHIPAIHAO => array(
            'name' => 'meishipaihao',
            'required' => false,
            'type' => 'Meishipaihao',
        ),
        self::TRADE_TAG => array(
            'name' => 'trade_tag',
            'required' => false,
            'type' => 7,
        ),
        self::MARKETBIZ => array(
            'name' => 'marketbiz',
            'required' => false,
            'type' => 'Marketbiz',
        ),
        self::VALIDATE => array(
            'name' => 'validate',
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
        $this->values[self::FLAG_ON_LEFT] = null;
        $this->values[self::IMPRESSION] = array();
        $this->values[self::MEISHIPAIHAO] = null;
        $this->values[self::TRADE_TAG] = null;
        $this->values[self::MARKETBIZ] = null;
        $this->values[self::VALIDATE] = null;
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
     * Appends value to 'impression' list
     *
     * @param Impression $value Value to append
     *
     * @return null
     */
    public function appendImpression(Impression $value) {
        return $this->append(self::IMPRESSION, $value);
    }

    /**
     * Clears 'impression' list
     *
     * @return null
     */
    public function clearImpression() {
        return $this->clear(self::IMPRESSION);
    }

    /**
     * Returns 'impression' list
     *
     * @return Impression[]
     */
    public function getImpression() {
        return $this->get(self::IMPRESSION);
    }

    /**
     * Returns 'impression' iterator
     *
     * @return ArrayIterator
     */
    public function getImpressionIterator() {
        return new ArrayIterator($this->get(self::IMPRESSION));
    }

    /**
     * Returns element from 'impression' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Impression
     */
    public function getImpressionAt($offset) {
        return $this->get(self::IMPRESSION, $offset);
    }

    /**
     * Returns count of 'impression' list
     *
     * @return int
     */
    public function getImpressionCount() {
        return $this->count(self::IMPRESSION);
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
     * Sets value of 'trade_tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTradeTag($value) {
        return $this->set(self::TRADE_TAG, $value);
    }

    /**
     * Returns value of 'trade_tag' property
     *
     * @return string
     */
    public function getTradeTag() {
        return $this->get(self::TRADE_TAG);
    }

    /**
     * Sets value of 'marketbiz' property
     *
     * @param Marketbiz $value Property value
     *
     * @return null
     */
    public function setMarketbiz(Marketbiz $value) {
        return $this->set(self::MARKETBIZ, $value);
    }

    /**
     * Returns value of 'marketbiz' property
     *
     * @return Marketbiz
     */
    public function getMarketbiz() {
        return $this->get(self::MARKETBIZ);
    }

    /**
     * Sets value of 'validate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValidate($value) {
        return $this->set(self::VALIDATE, $value);
    }

    /**
     * Returns value of 'validate' property
     *
     * @return string
     */
    public function getValidate() {
        return $this->get(self::VALIDATE);
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
    const RANK = 4;

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
        self::RANK => array(
            'name' => 'rank',
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
        $this->values[self::RANK] = null;
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
}
}

/**
 * Sgeo message
 */
if (!class_exists('Sgeo')) {
class Sgeo extends ProtobufMessage
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
 * MapPoitag message
 */
if (!class_exists('MapPoitag')) {
class MapPoitag extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TAG = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TAG => array(
            'name' => 'tag',
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
        $this->values[self::TAG] = null;
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
    const SHOW = 13;
    const EXT = 14;
    const HEAT_MAP = 23;
    const SGEO = 21;
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
    const START_TIME = 15;
    const END_TIME = 16;
    const HAS_RTBUS = 17;
    const TIP_RTBUS = 18;
    const RTBUS_UPDATE_TIME = 19;
    const FATHER_SON = 20;
    const POI_TYPE_TEXT = 22;
    const CHILD_CATALOG = 24;
    const POI_CHILD_TEXT = 25;
    const NEW_CATALOG_ID = 26;
    const VIEW_TYPE = 27;
    const LIST_SHOW = 28;
    const SHOW_LEVEL = 29;
    const ICON_ID = 30;
    const KINDTYPE = 31;
    const BRAND_ICON_ID = 32;
    const TAG = 33;
    const RANK = 34;
    const MAX_SHOW_LEVEL = 35;
    const INDOOR_FLOOR = 36;
    const INDOOR_PARENT_UID = 37;
    const CLOUD_TEMPLATE = 38;
    const BUTTON = 39;
    const MAP_POITAG = 40;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SHOW => array(
            'name' => 'show',
            'required' => false,
            'type' => 'Show',
        ),
        self::EXT => array(
            'name' => 'ext',
            'required' => false,
            'type' => 'Ext',
        ),
        self::HEAT_MAP => array(
            'name' => 'heat_map',
            'required' => false,
            'type' => 'HeatMap',
        ),
        self::SGEO => array(
            'name' => 'sgeo',
            'required' => false,
            'type' => 'Sgeo',
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
        self::HAS_RTBUS => array(
            'name' => 'has_rtbus',
            'required' => false,
            'type' => 5,
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
        self::FATHER_SON => array(
            'name' => 'father_son',
            'required' => false,
            'type' => 5,
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
        self::BRAND_ICON_ID => array(
            'name' => 'brand_icon_id',
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
        self::BUTTON => array(
            'name' => 'button',
            'required' => false,
            'type' => 'Button',
        ),
        self::MAP_POITAG => array(
            'name' => 'map_poitag',
            'required' => false,
            'type' => 'MapPoitag',
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
        $this->values[self::SHOW] = null;
        $this->values[self::EXT] = null;
        $this->values[self::HEAT_MAP] = null;
        $this->values[self::SGEO] = null;
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
        $this->values[self::START_TIME] = null;
        $this->values[self::END_TIME] = null;
        $this->values[self::HAS_RTBUS] = null;
        $this->values[self::TIP_RTBUS] = null;
        $this->values[self::RTBUS_UPDATE_TIME] = null;
        $this->values[self::FATHER_SON] = null;
        $this->values[self::POI_TYPE_TEXT] = null;
        $this->values[self::CHILD_CATALOG] = null;
        $this->values[self::POI_CHILD_TEXT] = null;
        $this->values[self::NEW_CATALOG_ID] = null;
        $this->values[self::VIEW_TYPE] = null;
        $this->values[self::LIST_SHOW] = null;
        $this->values[self::SHOW_LEVEL] = null;
        $this->values[self::ICON_ID] = null;
        $this->values[self::KINDTYPE] = null;
        $this->values[self::BRAND_ICON_ID] = null;
        $this->values[self::TAG] = null;
        $this->values[self::RANK] = null;
        $this->values[self::MAX_SHOW_LEVEL] = null;
        $this->values[self::INDOOR_FLOOR] = null;
        $this->values[self::INDOOR_PARENT_UID] = null;
        $this->values[self::CLOUD_TEMPLATE] = null;
        $this->values[self::BUTTON] = null;
        $this->values[self::MAP_POITAG] = null;
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
     * Sets value of 'sgeo' property
     *
     * @param Sgeo $value Property value
     *
     * @return null
     */
    public function setSgeo(Sgeo $value) {
        return $this->set(self::SGEO, $value);
    }

    /**
     * Returns value of 'sgeo' property
     *
     * @return Sgeo
     */
    public function getSgeo() {
        return $this->get(self::SGEO);
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
     * Sets value of 'father_son' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFatherSon($value) {
        return $this->set(self::FATHER_SON, $value);
    }

    /**
     * Returns value of 'father_son' property
     *
     * @return int
     */
    public function getFatherSon() {
        return $this->get(self::FATHER_SON);
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
     * Sets value of 'brand_icon_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBrandIconId($value) {
        return $this->set(self::BRAND_ICON_ID, $value);
    }

    /**
     * Returns value of 'brand_icon_id' property
     *
     * @return int
     */
    public function getBrandIconId() {
        return $this->get(self::BRAND_ICON_ID);
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

    /**
     * Sets value of 'map_poitag' property
     *
     * @param MapPoitag $value Property value
     *
     * @return null
     */
    public function setMapPoitag(MapPoitag $value) {
        return $this->set(self::MAP_POITAG, $value);
    }

    /**
     * Returns value of 'map_poitag' property
     *
     * @return MapPoitag
     */
    public function getMapPoitag() {
        return $this->get(self::MAP_POITAG);
    }
}
}

/**
 * Children message
 */
if (!class_exists('Children')) {
class Children extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const FATER_ID = 1;
    const CHILDREN_CONTENT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::FATER_ID => array(
            'name' => 'fater_id',
            'required' => false,
            'type' => 7,
        ),
        self::CHILDREN_CONTENT => array(
            'name' => 'children_content',
            'repeated' => true,
            'type' => 'Contents',
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
        $this->values[self::FATER_ID] = null;
        $this->values[self::CHILDREN_CONTENT] = array();
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
     * Sets value of 'fater_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFaterId($value) {
        return $this->set(self::FATER_ID, $value);
    }

    /**
     * Returns value of 'fater_id' property
     *
     * @return string
     */
    public function getFaterId() {
        return $this->get(self::FATER_ID);
    }

    /**
     * Appends value to 'children_content' list
     *
     * @param Contents $value Value to append
     *
     * @return null
     */
    public function appendChildrenContent(Contents $value) {
        return $this->append(self::CHILDREN_CONTENT, $value);
    }

    /**
     * Clears 'children_content' list
     *
     * @return null
     */
    public function clearChildrenContent() {
        return $this->clear(self::CHILDREN_CONTENT);
    }

    /**
     * Returns 'children_content' list
     *
     * @return Contents[]
     */
    public function getChildrenContent() {
        return $this->get(self::CHILDREN_CONTENT);
    }

    /**
     * Returns 'children_content' iterator
     *
     * @return ArrayIterator
     */
    public function getChildrenContentIterator() {
        return new ArrayIterator($this->get(self::CHILDREN_CONTENT));
    }

    /**
     * Returns element from 'children_content' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Contents
     */
    public function getChildrenContentAt($offset) {
        return $this->get(self::CHILDREN_CONTENT, $offset);
    }

    /**
     * Returns count of 'children_content' list
     *
     * @return int
     */
    public function getChildrenContentCount() {
        return $this->count(self::CHILDREN_CONTENT);
    }
}
}

/**
 * PreviousCity message
 */
if (!class_exists('PreviousCity')) {
class PreviousCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const NAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
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
        $this->values[self::CODE] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
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
 * CurrentCity message
 */
if (!class_exists('CurrentCity')) {
class CurrentCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const GEO = 2;
    const LEVEL = 3;
    const NAME = 4;
    const SUP_SUBWAY = 5;
    const SUP_LUKUANG = 6;
    const UID = 7;
    const SGEO = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::GEO => array(
            'name' => 'geo',
            'required' => false,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::SUP_SUBWAY => array(
            'name' => 'sup_subway',
            'required' => false,
            'type' => 8,
        ),
        self::SUP_LUKUANG => array(
            'name' => 'sup_lukuang',
            'required' => false,
            'type' => 8,
        ),
        self::UID => array(
            'name' => 'uid',
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
        $this->values[self::CODE] = null;
        $this->values[self::GEO] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::NAME] = null;
        $this->values[self::SUP_SUBWAY] = null;
        $this->values[self::SUP_LUKUANG] = null;
        $this->values[self::UID] = null;
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
     * Sets value of 'code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return int
     */
    public function getCode() {
        return $this->get(self::CODE);
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
     * Sets value of 'level' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLevel($value) {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return int
     */
    public function getLevel() {
        return $this->get(self::LEVEL);
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
     * Sets value of 'sup_subway' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setSupSubway($value) {
        return $this->set(self::SUP_SUBWAY, $value);
    }

    /**
     * Returns value of 'sup_subway' property
     *
     * @return bool
     */
    public function getSupSubway() {
        return $this->get(self::SUP_SUBWAY);
    }

    /**
     * Sets value of 'sup_lukuang' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setSupLukuang($value) {
        return $this->set(self::SUP_LUKUANG, $value);
    }

    /**
     * Returns value of 'sup_lukuang' property
     *
     * @return bool
     */
    public function getSupLukuang() {
        return $this->get(self::SUP_LUKUANG);
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
 * BrandBar message
 */
if (!class_exists('BrandBar')) {
class BrandBar extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IMG = 1;
    const TITLE = 2;
    const SUBTITLE = 3;
    const TEL = 4;
    const LINK = 5;
    const DESC = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IMG => array(
            'name' => 'img',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::SUBTITLE => array(
            'name' => 'subtitle',
            'required' => false,
            'type' => 7,
        ),
        self::TEL => array(
            'name' => 'tel',
            'required' => false,
            'type' => 7,
        ),
        self::LINK => array(
            'name' => 'link',
            'required' => false,
            'type' => 7,
        ),
        self::DESC => array(
            'name' => 'desc',
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
        $this->values[self::IMG] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::SUBTITLE] = null;
        $this->values[self::TEL] = null;
        $this->values[self::LINK] = null;
        $this->values[self::DESC] = null;
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
     * Sets value of 'img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImg($value) {
        return $this->set(self::IMG, $value);
    }

    /**
     * Returns value of 'img' property
     *
     * @return string
     */
    public function getImg() {
        return $this->get(self::IMG);
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
     * Sets value of 'subtitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubtitle($value) {
        return $this->set(self::SUBTITLE, $value);
    }

    /**
     * Returns value of 'subtitle' property
     *
     * @return string
     */
    public function getSubtitle() {
        return $this->get(self::SUBTITLE);
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
}
}

/**
 * GuideTag message
 */
if (!class_exists('GuideTag')) {
class GuideTag extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const POSITION = 1;
    const TITLE = 2;
    const CONTENTS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POSITION => array(
            'name' => 'position',
            'required' => false,
            'type' => 5,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
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
        $this->values[self::POSITION] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::CONTENTS] = array();
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
     * Sets value of 'position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPosition($value) {
        return $this->set(self::POSITION, $value);
    }

    /**
     * Returns value of 'position' property
     *
     * @return int
     */
    public function getPosition() {
        return $this->get(self::POSITION);
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
     * Appends value to 'contents' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendContents($value) {
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
     * @return string[]
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
     * @return string
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
}
}

/**
 * PoiResult message
 */
if (!class_exists('PoiResult')) {
class PoiResult extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const ADDRS = 2;
    const PSRS = 3;
    const SUGGEST_QUERY = 4;
    const PLACE_INFO = 5;
    const CONTENTS = 6;
    const CHILDREN = 8;
    const PREVIOUS_CITY = 9;
    const CURRENT_CITY = 7;
    const BRAND_BAR = 10;
    const IMGE_EXT = 11;
    const OFFLINE = 12;
    const GUIDE_TAG = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::ADDRS => array(
            'name' => 'addrs',
            'repeated' => true,
            'type' => 'Addrs',
        ),
        self::PSRS => array(
            'name' => 'psrs',
            'required' => false,
            'type' => 'Psrs',
        ),
        self::SUGGEST_QUERY => array(
            'name' => 'suggest_query',
            'repeated' => true,
            'type' => 'SuggestQuery',
        ),
        self::PLACE_INFO => array(
            'name' => 'place_info',
            'required' => false,
            'type' => 'PlaceInfo',
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
        ),
        self::CHILDREN => array(
            'name' => 'children',
            'repeated' => true,
            'type' => 'Children',
        ),
        self::PREVIOUS_CITY => array(
            'name' => 'previous_city',
            'required' => false,
            'type' => 'PreviousCity',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
        ),
        self::BRAND_BAR => array(
            'name' => 'brand_bar',
            'required' => false,
            'type' => 'BrandBar',
        ),
        self::IMGE_EXT => array(
            'name' => 'imge_ext',
            'required' => false,
            'type' => 7,
        ),
        self::OFFLINE => array(
            'name' => 'offline',
            'required' => false,
            'type' => 5,
        ),
        self::GUIDE_TAG => array(
            'name' => 'guide_tag',
            'repeated' => true,
            'type' => 'GuideTag',
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
        $this->values[self::ADDRS] = array();
        $this->values[self::PSRS] = null;
        $this->values[self::SUGGEST_QUERY] = array();
        $this->values[self::PLACE_INFO] = null;
        $this->values[self::CONTENTS] = array();
        $this->values[self::CHILDREN] = array();
        $this->values[self::PREVIOUS_CITY] = null;
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::BRAND_BAR] = null;
        $this->values[self::IMGE_EXT] = null;
        $this->values[self::OFFLINE] = null;
        $this->values[self::GUIDE_TAG] = array();
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
     * Appends value to 'addrs' list
     *
     * @param Addrs $value Value to append
     *
     * @return null
     */
    public function appendAddrs(Addrs $value) {
        return $this->append(self::ADDRS, $value);
    }

    /**
     * Clears 'addrs' list
     *
     * @return null
     */
    public function clearAddrs() {
        return $this->clear(self::ADDRS);
    }

    /**
     * Returns 'addrs' list
     *
     * @return Addrs[]
     */
    public function getAddrs() {
        return $this->get(self::ADDRS);
    }

    /**
     * Returns 'addrs' iterator
     *
     * @return ArrayIterator
     */
    public function getAddrsIterator() {
        return new ArrayIterator($this->get(self::ADDRS));
    }

    /**
     * Returns element from 'addrs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Addrs
     */
    public function getAddrsAt($offset) {
        return $this->get(self::ADDRS, $offset);
    }

    /**
     * Returns count of 'addrs' list
     *
     * @return int
     */
    public function getAddrsCount() {
        return $this->count(self::ADDRS);
    }

    /**
     * Sets value of 'psrs' property
     *
     * @param Psrs $value Property value
     *
     * @return null
     */
    public function setPsrs(Psrs $value) {
        return $this->set(self::PSRS, $value);
    }

    /**
     * Returns value of 'psrs' property
     *
     * @return Psrs
     */
    public function getPsrs() {
        return $this->get(self::PSRS);
    }

    /**
     * Appends value to 'suggest_query' list
     *
     * @param SuggestQuery $value Value to append
     *
     * @return null
     */
    public function appendSuggestQuery(SuggestQuery $value) {
        return $this->append(self::SUGGEST_QUERY, $value);
    }

    /**
     * Clears 'suggest_query' list
     *
     * @return null
     */
    public function clearSuggestQuery() {
        return $this->clear(self::SUGGEST_QUERY);
    }

    /**
     * Returns 'suggest_query' list
     *
     * @return SuggestQuery[]
     */
    public function getSuggestQuery() {
        return $this->get(self::SUGGEST_QUERY);
    }

    /**
     * Returns 'suggest_query' iterator
     *
     * @return ArrayIterator
     */
    public function getSuggestQueryIterator() {
        return new ArrayIterator($this->get(self::SUGGEST_QUERY));
    }

    /**
     * Returns element from 'suggest_query' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SuggestQuery
     */
    public function getSuggestQueryAt($offset) {
        return $this->get(self::SUGGEST_QUERY, $offset);
    }

    /**
     * Returns count of 'suggest_query' list
     *
     * @return int
     */
    public function getSuggestQueryCount() {
        return $this->count(self::SUGGEST_QUERY);
    }

    /**
     * Sets value of 'place_info' property
     *
     * @param PlaceInfo $value Property value
     *
     * @return null
     */
    public function setPlaceInfo(PlaceInfo $value) {
        return $this->set(self::PLACE_INFO, $value);
    }

    /**
     * Returns value of 'place_info' property
     *
     * @return PlaceInfo
     */
    public function getPlaceInfo() {
        return $this->get(self::PLACE_INFO);
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
     * Appends value to 'children' list
     *
     * @param Children $value Value to append
     *
     * @return null
     */
    public function appendChildren(Children $value) {
        return $this->append(self::CHILDREN, $value);
    }

    /**
     * Clears 'children' list
     *
     * @return null
     */
    public function clearChildren() {
        return $this->clear(self::CHILDREN);
    }

    /**
     * Returns 'children' list
     *
     * @return Children[]
     */
    public function getChildren() {
        return $this->get(self::CHILDREN);
    }

    /**
     * Returns 'children' iterator
     *
     * @return ArrayIterator
     */
    public function getChildrenIterator() {
        return new ArrayIterator($this->get(self::CHILDREN));
    }

    /**
     * Returns element from 'children' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Children
     */
    public function getChildrenAt($offset) {
        return $this->get(self::CHILDREN, $offset);
    }

    /**
     * Returns count of 'children' list
     *
     * @return int
     */
    public function getChildrenCount() {
        return $this->count(self::CHILDREN);
    }

    /**
     * Sets value of 'previous_city' property
     *
     * @param PreviousCity $value Property value
     *
     * @return null
     */
    public function setPreviousCity(PreviousCity $value) {
        return $this->set(self::PREVIOUS_CITY, $value);
    }

    /**
     * Returns value of 'previous_city' property
     *
     * @return PreviousCity
     */
    public function getPreviousCity() {
        return $this->get(self::PREVIOUS_CITY);
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
     * Sets value of 'brand_bar' property
     *
     * @param BrandBar $value Property value
     *
     * @return null
     */
    public function setBrandBar(BrandBar $value) {
        return $this->set(self::BRAND_BAR, $value);
    }

    /**
     * Returns value of 'brand_bar' property
     *
     * @return BrandBar
     */
    public function getBrandBar() {
        return $this->get(self::BRAND_BAR);
    }

    /**
     * Sets value of 'imge_ext' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgeExt($value) {
        return $this->set(self::IMGE_EXT, $value);
    }

    /**
     * Returns value of 'imge_ext' property
     *
     * @return string
     */
    public function getImgeExt() {
        return $this->get(self::IMGE_EXT);
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

    /**
     * Appends value to 'guide_tag' list
     *
     * @param GuideTag $value Value to append
     *
     * @return null
     */
    public function appendGuideTag(GuideTag $value) {
        return $this->append(self::GUIDE_TAG, $value);
    }

    /**
     * Clears 'guide_tag' list
     *
     * @return null
     */
    public function clearGuideTag() {
        return $this->clear(self::GUIDE_TAG);
    }

    /**
     * Returns 'guide_tag' list
     *
     * @return GuideTag[]
     */
    public function getGuideTag() {
        return $this->get(self::GUIDE_TAG);
    }

    /**
     * Returns 'guide_tag' iterator
     *
     * @return ArrayIterator
     */
    public function getGuideTagIterator() {
        return new ArrayIterator($this->get(self::GUIDE_TAG));
    }

    /**
     * Returns element from 'guide_tag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return GuideTag
     */
    public function getGuideTagAt($offset) {
        return $this->get(self::GUIDE_TAG, $offset);
    }

    /**
     * Returns count of 'guide_tag' list
     *
     * @return int
     */
    public function getGuideTagCount() {
        return $this->count(self::GUIDE_TAG);
    }
}
}
