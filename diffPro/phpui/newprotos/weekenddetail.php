<?php
/**
 * Auto generated from map_weekend_detail.proto.1 at 2015-06-23 14:50:56
 */

/**
 * Chunks message
 */
if (!class_exists('Chunks')) {
class Chunks extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TYPE = 1;
    const URL = 2;
    const CONTENT = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
        ),
        self::URL => array(
            'name' => 'url',
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
        $this->values[self::TYPE] = null;
        $this->values[self::URL] = null;
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
 * Items message
 */
if (!class_exists('Items')) {
class Items extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const POI_ID = 1;
    const POI_NAME = 2;
    const PIC_URL = 3;
    const ADDRESS = 4;
    const DISTRICT = 5;
    const DISTANCE = 6;
    const ACTIVITY_TIME = 7;
    const PRICE = 8;
    const LATITUDE = 9;
    const LONGITUDE = 10;
    const CHUNKS = 11;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::POI_ID => array(
            'name' => 'poi_id',
            'required' => false,
            'type' => 7,
        ),
        self::POI_NAME => array(
            'name' => 'poi_name',
            'required' => false,
            'type' => 7,
        ),
        self::PIC_URL => array(
            'name' => 'pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => 7,
        ),
        self::DISTRICT => array(
            'name' => 'district',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::ACTIVITY_TIME => array(
            'name' => 'activity_time',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::LATITUDE => array(
            'name' => 'latitude',
            'required' => false,
            'type' => 7,
        ),
        self::LONGITUDE => array(
            'name' => 'longitude',
            'required' => false,
            'type' => 7,
        ),
        self::CHUNKS => array(
            'name' => 'chunks',
            'repeated' => true,
            'type' => 'Chunks',
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
        $this->values[self::POI_ID] = null;
        $this->values[self::POI_NAME] = null;
        $this->values[self::PIC_URL] = null;
        $this->values[self::ADDRESS] = null;
        $this->values[self::DISTRICT] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::ACTIVITY_TIME] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::LATITUDE] = null;
        $this->values[self::LONGITUDE] = null;
        $this->values[self::CHUNKS] = array();
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
     * Sets value of 'poi_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiId($value) {
        return $this->set(self::POI_ID, $value);
    }

    /**
     * Returns value of 'poi_id' property
     *
     * @return string
     */
    public function getPoiId() {
        return $this->get(self::POI_ID);
    }

    /**
     * Sets value of 'poi_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiName($value) {
        return $this->set(self::POI_NAME, $value);
    }

    /**
     * Returns value of 'poi_name' property
     *
     * @return string
     */
    public function getPoiName() {
        return $this->get(self::POI_NAME);
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
     * Sets value of 'district' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDistrict($value) {
        return $this->set(self::DISTRICT, $value);
    }

    /**
     * Returns value of 'district' property
     *
     * @return string
     */
    public function getDistrict() {
        return $this->get(self::DISTRICT);
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
     * Sets value of 'activity_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setActivityTime($value) {
        return $this->set(self::ACTIVITY_TIME, $value);
    }

    /**
     * Returns value of 'activity_time' property
     *
     * @return string
     */
    public function getActivityTime() {
        return $this->get(self::ACTIVITY_TIME);
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
     * Sets value of 'latitude' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLatitude($value) {
        return $this->set(self::LATITUDE, $value);
    }

    /**
     * Returns value of 'latitude' property
     *
     * @return string
     */
    public function getLatitude() {
        return $this->get(self::LATITUDE);
    }

    /**
     * Sets value of 'longitude' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLongitude($value) {
        return $this->set(self::LONGITUDE, $value);
    }

    /**
     * Returns value of 'longitude' property
     *
     * @return string
     */
    public function getLongitude() {
        return $this->get(self::LONGITUDE);
    }

    /**
     * Appends value to 'chunks' list
     *
     * @param Chunks $value Value to append
     *
     * @return null
     */
    public function appendChunks(Chunks $value) {
        return $this->append(self::CHUNKS, $value);
    }

    /**
     * Clears 'chunks' list
     *
     * @return null
     */
    public function clearChunks() {
        return $this->clear(self::CHUNKS);
    }

    /**
     * Returns 'chunks' list
     *
     * @return Chunks[]
     */
    public function getChunks() {
        return $this->get(self::CHUNKS);
    }

    /**
     * Returns 'chunks' iterator
     *
     * @return ArrayIterator
     */
    public function getChunksIterator() {
        return new ArrayIterator($this->get(self::CHUNKS));
    }

    /**
     * Returns element from 'chunks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Chunks
     */
    public function getChunksAt($offset) {
        return $this->get(self::CHUNKS, $offset);
    }

    /**
     * Returns count of 'chunks' list
     *
     * @return int
     */
    public function getChunksCount() {
        return $this->count(self::CHUNKS);
    }
}
}

/**
 * RecommendList message
 */
if (!class_exists('RecommendList')) {
class RecommendList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const THEME_ID = 1;
    const COVER_URL = 2;
    const TITLE = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::THEME_ID => array(
            'name' => 'theme_id',
            'required' => false,
            'type' => 7,
        ),
        self::COVER_URL => array(
            'name' => 'cover_url',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
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
        $this->values[self::THEME_ID] = null;
        $this->values[self::COVER_URL] = null;
        $this->values[self::TITLE] = null;
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
     * Sets value of 'theme_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThemeId($value) {
        return $this->set(self::THEME_ID, $value);
    }

    /**
     * Returns value of 'theme_id' property
     *
     * @return string
     */
    public function getThemeId() {
        return $this->get(self::THEME_ID);
    }

    /**
     * Sets value of 'cover_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCoverUrl($value) {
        return $this->set(self::COVER_URL, $value);
    }

    /**
     * Returns value of 'cover_url' property
     *
     * @return string
     */
    public function getCoverUrl() {
        return $this->get(self::COVER_URL);
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
    const THEME_ID = 1;
    const TITLE = 2;
    const PIC_URL = 3;
    const DESCRIPTION = 4;
    const FAVORITE_NUM = 5;
    const IS_FAVORITE = 6;
    const ITEMS = 7;
    const EXPERT_UNAME = 8;
    const EXPERT_AVATAR = 9;
    const EXPERT_NOTION = 10;
    const IS_NEW = 11;
    const IS_HOT = 12;
    const VIEW_NUM = 13;
    const PUBLISH_TIME = 14;
    const RECOMMEND_LIST = 15;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::THEME_ID => array(
            'name' => 'theme_id',
            'required' => false,
            'type' => 7,
        ),
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
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::FAVORITE_NUM => array(
            'name' => 'favorite_num',
            'required' => false,
            'type' => 5,
        ),
        self::IS_FAVORITE => array(
            'name' => 'is_favorite',
            'required' => false,
            'type' => 5,
        ),
        self::ITEMS => array(
            'name' => 'items',
            'repeated' => true,
            'type' => 'Items',
        ),
        self::EXPERT_UNAME => array(
            'name' => 'expert_uname',
            'required' => false,
            'type' => 7,
        ),
        self::EXPERT_AVATAR => array(
            'name' => 'expert_avatar',
            'required' => false,
            'type' => 7,
        ),
        self::EXPERT_NOTION => array(
            'name' => 'expert_notion',
            'required' => false,
            'type' => 7,
        ),
        self::IS_NEW => array(
            'name' => 'is_new',
            'required' => false,
            'type' => 5,
        ),
        self::IS_HOT => array(
            'name' => 'is_hot',
            'required' => false,
            'type' => 5,
        ),
        self::VIEW_NUM => array(
            'name' => 'view_num',
            'required' => false,
            'type' => 5,
        ),
        self::PUBLISH_TIME => array(
            'name' => 'publish_time',
            'required' => false,
            'type' => 5,
        ),
        self::RECOMMEND_LIST => array(
            'name' => 'recommend_list',
            'repeated' => true,
            'type' => 'RecommendList',
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
        $this->values[self::THEME_ID] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::PIC_URL] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::FAVORITE_NUM] = null;
        $this->values[self::IS_FAVORITE] = null;
        $this->values[self::ITEMS] = array();
        $this->values[self::EXPERT_UNAME] = null;
        $this->values[self::EXPERT_AVATAR] = null;
        $this->values[self::EXPERT_NOTION] = null;
        $this->values[self::IS_NEW] = null;
        $this->values[self::IS_HOT] = null;
        $this->values[self::VIEW_NUM] = null;
        $this->values[self::PUBLISH_TIME] = null;
        $this->values[self::RECOMMEND_LIST] = array();
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
     * Sets value of 'theme_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThemeId($value) {
        return $this->set(self::THEME_ID, $value);
    }

    /**
     * Returns value of 'theme_id' property
     *
     * @return string
     */
    public function getThemeId() {
        return $this->get(self::THEME_ID);
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
     * Sets value of 'favorite_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFavoriteNum($value) {
        return $this->set(self::FAVORITE_NUM, $value);
    }

    /**
     * Returns value of 'favorite_num' property
     *
     * @return int
     */
    public function getFavoriteNum() {
        return $this->get(self::FAVORITE_NUM);
    }

    /**
     * Sets value of 'is_favorite' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsFavorite($value) {
        return $this->set(self::IS_FAVORITE, $value);
    }

    /**
     * Returns value of 'is_favorite' property
     *
     * @return int
     */
    public function getIsFavorite() {
        return $this->get(self::IS_FAVORITE);
    }

    /**
     * Appends value to 'items' list
     *
     * @param Items $value Value to append
     *
     * @return null
     */
    public function appendItems(Items $value) {
        return $this->append(self::ITEMS, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems() {
        return $this->clear(self::ITEMS);
    }

    /**
     * Returns 'items' list
     *
     * @return Items[]
     */
    public function getItems() {
        return $this->get(self::ITEMS);
    }

    /**
     * Returns 'items' iterator
     *
     * @return ArrayIterator
     */
    public function getItemsIterator() {
        return new ArrayIterator($this->get(self::ITEMS));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Items
     */
    public function getItemsAt($offset) {
        return $this->get(self::ITEMS, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount() {
        return $this->count(self::ITEMS);
    }

    /**
     * Sets value of 'expert_uname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpertUname($value) {
        return $this->set(self::EXPERT_UNAME, $value);
    }

    /**
     * Returns value of 'expert_uname' property
     *
     * @return string
     */
    public function getExpertUname() {
        return $this->get(self::EXPERT_UNAME);
    }

    /**
     * Sets value of 'expert_avatar' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpertAvatar($value) {
        return $this->set(self::EXPERT_AVATAR, $value);
    }

    /**
     * Returns value of 'expert_avatar' property
     *
     * @return string
     */
    public function getExpertAvatar() {
        return $this->get(self::EXPERT_AVATAR);
    }

    /**
     * Sets value of 'expert_notion' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpertNotion($value) {
        return $this->set(self::EXPERT_NOTION, $value);
    }

    /**
     * Returns value of 'expert_notion' property
     *
     * @return string
     */
    public function getExpertNotion() {
        return $this->get(self::EXPERT_NOTION);
    }

    /**
     * Sets value of 'is_new' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsNew($value) {
        return $this->set(self::IS_NEW, $value);
    }

    /**
     * Returns value of 'is_new' property
     *
     * @return int
     */
    public function getIsNew() {
        return $this->get(self::IS_NEW);
    }

    /**
     * Sets value of 'is_hot' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsHot($value) {
        return $this->set(self::IS_HOT, $value);
    }

    /**
     * Returns value of 'is_hot' property
     *
     * @return int
     */
    public function getIsHot() {
        return $this->get(self::IS_HOT);
    }

    /**
     * Sets value of 'view_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViewNum($value) {
        return $this->set(self::VIEW_NUM, $value);
    }

    /**
     * Returns value of 'view_num' property
     *
     * @return int
     */
    public function getViewNum() {
        return $this->get(self::VIEW_NUM);
    }

    /**
     * Sets value of 'publish_time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPublishTime($value) {
        return $this->set(self::PUBLISH_TIME, $value);
    }

    /**
     * Returns value of 'publish_time' property
     *
     * @return int
     */
    public function getPublishTime() {
        return $this->get(self::PUBLISH_TIME);
    }

    /**
     * Appends value to 'recommend_list' list
     *
     * @param RecommendList $value Value to append
     *
     * @return null
     */
    public function appendRecommendList(RecommendList $value) {
        return $this->append(self::RECOMMEND_LIST, $value);
    }

    /**
     * Clears 'recommend_list' list
     *
     * @return null
     */
    public function clearRecommendList() {
        return $this->clear(self::RECOMMEND_LIST);
    }

    /**
     * Returns 'recommend_list' list
     *
     * @return RecommendList[]
     */
    public function getRecommendList() {
        return $this->get(self::RECOMMEND_LIST);
    }

    /**
     * Returns 'recommend_list' iterator
     *
     * @return ArrayIterator
     */
    public function getRecommendListIterator() {
        return new ArrayIterator($this->get(self::RECOMMEND_LIST));
    }

    /**
     * Returns element from 'recommend_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return RecommendList
     */
    public function getRecommendListAt($offset) {
        return $this->get(self::RECOMMEND_LIST, $offset);
    }

    /**
     * Returns count of 'recommend_list' list
     *
     * @return int
     */
    public function getRecommendListCount() {
        return $this->count(self::RECOMMEND_LIST);
    }
}
}

/**
 * WeekendDetail message
 */
if (!class_exists('WeekendDetail')) {
class WeekendDetail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const CONTENT = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERR_NO => array(
            'name' => 'err_no',
            'required' => false,
            'type' => 5,
        ),
        self::ERR_MSG => array(
            'name' => 'err_msg',
            'required' => false,
            'type' => 7,
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
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
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
     * Sets value of 'err_no' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setErrNo($value) {
        return $this->set(self::ERR_NO, $value);
    }

    /**
     * Returns value of 'err_no' property
     *
     * @return int
     */
    public function getErrNo() {
        return $this->get(self::ERR_NO);
    }

    /**
     * Sets value of 'err_msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrMsg($value) {
        return $this->set(self::ERR_MSG, $value);
    }

    /**
     * Returns value of 'err_msg' property
     *
     * @return string
     */
    public function getErrMsg() {
        return $this->get(self::ERR_MSG);
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
