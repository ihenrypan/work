<?php
/**
 * Auto generated from map_weekend_list.proto.1 at 2015-06-26 14:07:15
 */

/**
 * Locations message
 */
if (!class_exists('Locations')) {
class Locations extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LATITUDE = 1;
    const LONGITUDE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LATITUDE => array(
            'name' => 'latitude',
            'required' => false,
            'type' => 1,
        ),
        self::LONGITUDE => array(
            'name' => 'longitude',
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
        $this->values[self::LATITUDE] = null;
        $this->values[self::LONGITUDE] = null;
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
     * Sets value of 'latitude' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLatitude($value) {
        return $this->set(self::LATITUDE, $value);
    }

    /**
     * Returns value of 'latitude' property
     *
     * @return float
     */
    public function getLatitude() {
        return $this->get(self::LATITUDE);
    }

    /**
     * Sets value of 'longitude' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLongitude($value) {
        return $this->set(self::LONGITUDE, $value);
    }

    /**
     * Returns value of 'longitude' property
     *
     * @return float
     */
    public function getLongitude() {
        return $this->get(self::LONGITUDE);
    }
}
}

/**
 * Themes message
 */
if (!class_exists('Themes')) {
class Themes extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const THEME_ID = 1;
    const TITLE = 2;
    const COVER_PIC_URL = 3;
    const POI_NAME = 4;
    const DISTANCE = 5;
    const TAGS = 6;
    const DISTRICTS = 7;
    const FAVORITE_NUM = 8;
    const IS_FAVORITE = 9;
    const SHARE_URL = 10;
    const LOCATIONS = 11;
    const IS_ACTIVE = 12;
    const COVER_URL = 13;
    const IS_NEW = 14;
    const IS_HOT = 15;
    const VIEW_NUM = 16;
    const PUBLISH_TIME = 17;
    const IS_RECOMMEND = 18;

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
        self::COVER_PIC_URL => array(
            'name' => 'cover_pic_url',
            'required' => false,
            'type' => 7,
        ),
        self::POI_NAME => array(
            'name' => 'poi_name',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::TAGS => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => 7,
        ),
        self::DISTRICTS => array(
            'name' => 'districts',
            'repeated' => true,
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
        self::SHARE_URL => array(
            'name' => 'share_url',
            'required' => false,
            'type' => 7,
        ),
        self::LOCATIONS => array(
            'name' => 'locations',
            'repeated' => true,
            'type' => 'Locations',
        ),
        self::IS_ACTIVE => array(
            'name' => 'is_active',
            'required' => false,
            'type' => 5,
        ),
        self::COVER_URL => array(
            'name' => 'cover_url',
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
        self::IS_RECOMMEND => array(
            'name' => 'is_recommend',
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
        $this->values[self::THEME_ID] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::COVER_PIC_URL] = null;
        $this->values[self::POI_NAME] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::TAGS] = array();
        $this->values[self::DISTRICTS] = array();
        $this->values[self::FAVORITE_NUM] = null;
        $this->values[self::IS_FAVORITE] = null;
        $this->values[self::SHARE_URL] = null;
        $this->values[self::LOCATIONS] = array();
        $this->values[self::IS_ACTIVE] = null;
        $this->values[self::COVER_URL] = null;
        $this->values[self::IS_NEW] = null;
        $this->values[self::IS_HOT] = null;
        $this->values[self::VIEW_NUM] = null;
        $this->values[self::PUBLISH_TIME] = null;
        $this->values[self::IS_RECOMMEND] = null;
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
     * Sets value of 'cover_pic_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCoverPicUrl($value) {
        return $this->set(self::COVER_PIC_URL, $value);
    }

    /**
     * Returns value of 'cover_pic_url' property
     *
     * @return string
     */
    public function getCoverPicUrl() {
        return $this->get(self::COVER_PIC_URL);
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
     * Appends value to 'tags' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTags($value) {
        return $this->append(self::TAGS, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags() {
        return $this->clear(self::TAGS);
    }

    /**
     * Returns 'tags' list
     *
     * @return string[]
     */
    public function getTags() {
        return $this->get(self::TAGS);
    }

    /**
     * Returns 'tags' iterator
     *
     * @return ArrayIterator
     */
    public function getTagsIterator() {
        return new ArrayIterator($this->get(self::TAGS));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTagsAt($offset) {
        return $this->get(self::TAGS, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount() {
        return $this->count(self::TAGS);
    }

    /**
     * Appends value to 'districts' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDistricts($value) {
        return $this->append(self::DISTRICTS, $value);
    }

    /**
     * Clears 'districts' list
     *
     * @return null
     */
    public function clearDistricts() {
        return $this->clear(self::DISTRICTS);
    }

    /**
     * Returns 'districts' list
     *
     * @return string[]
     */
    public function getDistricts() {
        return $this->get(self::DISTRICTS);
    }

    /**
     * Returns 'districts' iterator
     *
     * @return ArrayIterator
     */
    public function getDistrictsIterator() {
        return new ArrayIterator($this->get(self::DISTRICTS));
    }

    /**
     * Returns element from 'districts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDistrictsAt($offset) {
        return $this->get(self::DISTRICTS, $offset);
    }

    /**
     * Returns count of 'districts' list
     *
     * @return int
     */
    public function getDistrictsCount() {
        return $this->count(self::DISTRICTS);
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
     * Sets value of 'share_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareUrl($value) {
        return $this->set(self::SHARE_URL, $value);
    }

    /**
     * Returns value of 'share_url' property
     *
     * @return string
     */
    public function getShareUrl() {
        return $this->get(self::SHARE_URL);
    }

    /**
     * Appends value to 'locations' list
     *
     * @param Locations $value Value to append
     *
     * @return null
     */
    public function appendLocations(Locations $value) {
        return $this->append(self::LOCATIONS, $value);
    }

    /**
     * Clears 'locations' list
     *
     * @return null
     */
    public function clearLocations() {
        return $this->clear(self::LOCATIONS);
    }

    /**
     * Returns 'locations' list
     *
     * @return Locations[]
     */
    public function getLocations() {
        return $this->get(self::LOCATIONS);
    }

    /**
     * Returns 'locations' iterator
     *
     * @return ArrayIterator
     */
    public function getLocationsIterator() {
        return new ArrayIterator($this->get(self::LOCATIONS));
    }

    /**
     * Returns element from 'locations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Locations
     */
    public function getLocationsAt($offset) {
        return $this->get(self::LOCATIONS, $offset);
    }

    /**
     * Returns count of 'locations' list
     *
     * @return int
     */
    public function getLocationsCount() {
        return $this->count(self::LOCATIONS);
    }

    /**
     * Sets value of 'is_active' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsActive($value) {
        return $this->set(self::IS_ACTIVE, $value);
    }

    /**
     * Returns value of 'is_active' property
     *
     * @return int
     */
    public function getIsActive() {
        return $this->get(self::IS_ACTIVE);
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
     * Sets value of 'is_recommend' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsRecommend($value) {
        return $this->set(self::IS_RECOMMEND, $value);
    }

    /**
     * Returns value of 'is_recommend' property
     *
     * @return int
     */
    public function getIsRecommend() {
        return $this->get(self::IS_RECOMMEND);
    }
}
}

/**
 * Select message
 */
if (!class_exists('Select')) {
class Select extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SELECT_ID = 1;
    const COVER_URL = 2;
    const TYPE = 3;
    const VIEW_NUM = 4;
    const PUBLISH_TIME = 5;
    const TITLE = 6;
    const CONTENT = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SELECT_ID => array(
            'name' => 'select_id',
            'required' => false,
            'type' => 5,
        ),
        self::COVER_URL => array(
            'name' => 'cover_url',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::SELECT_ID] = null;
        $this->values[self::COVER_URL] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::VIEW_NUM] = null;
        $this->values[self::PUBLISH_TIME] = null;
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
     * Sets value of 'select_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSelectId($value) {
        return $this->set(self::SELECT_ID, $value);
    }

    /**
     * Returns value of 'select_id' property
     *
     * @return int
     */
    public function getSelectId() {
        return $this->get(self::SELECT_ID);
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
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const THEMES = 1;
    const TOTAL = 2;
    const ADD_NUM = 3;
    const LAST_VISIT = 4;
    const RECOMMEND_NUM = 5;
    const SELECT = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::THEMES => array(
            'name' => 'themes',
            'repeated' => true,
            'type' => 'Themes',
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::ADD_NUM => array(
            'name' => 'add_num',
            'required' => false,
            'type' => 5,
        ),
        self::LAST_VISIT => array(
            'name' => 'last_visit',
            'required' => false,
            'type' => 5,
        ),
        self::RECOMMEND_NUM => array(
            'name' => 'recommend_num',
            'required' => false,
            'type' => 5,
        ),
        self::SELECT => array(
            'name' => 'select',
            'repeated' => true,
            'type' => 'Select',
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
        $this->values[self::THEMES] = array();
        $this->values[self::TOTAL] = null;
        $this->values[self::ADD_NUM] = null;
        $this->values[self::LAST_VISIT] = null;
        $this->values[self::RECOMMEND_NUM] = null;
        $this->values[self::SELECT] = array();
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
     * Appends value to 'themes' list
     *
     * @param Themes $value Value to append
     *
     * @return null
     */
    public function appendThemes(Themes $value) {
        return $this->append(self::THEMES, $value);
    }

    /**
     * Clears 'themes' list
     *
     * @return null
     */
    public function clearThemes() {
        return $this->clear(self::THEMES);
    }

    /**
     * Returns 'themes' list
     *
     * @return Themes[]
     */
    public function getThemes() {
        return $this->get(self::THEMES);
    }

    /**
     * Returns 'themes' iterator
     *
     * @return ArrayIterator
     */
    public function getThemesIterator() {
        return new ArrayIterator($this->get(self::THEMES));
    }

    /**
     * Returns element from 'themes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Themes
     */
    public function getThemesAt($offset) {
        return $this->get(self::THEMES, $offset);
    }

    /**
     * Returns count of 'themes' list
     *
     * @return int
     */
    public function getThemesCount() {
        return $this->count(self::THEMES);
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
     * Sets value of 'add_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAddNum($value) {
        return $this->set(self::ADD_NUM, $value);
    }

    /**
     * Returns value of 'add_num' property
     *
     * @return int
     */
    public function getAddNum() {
        return $this->get(self::ADD_NUM);
    }

    /**
     * Sets value of 'last_visit' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastVisit($value) {
        return $this->set(self::LAST_VISIT, $value);
    }

    /**
     * Returns value of 'last_visit' property
     *
     * @return int
     */
    public function getLastVisit() {
        return $this->get(self::LAST_VISIT);
    }

    /**
     * Sets value of 'recommend_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRecommendNum($value) {
        return $this->set(self::RECOMMEND_NUM, $value);
    }

    /**
     * Returns value of 'recommend_num' property
     *
     * @return int
     */
    public function getRecommendNum() {
        return $this->get(self::RECOMMEND_NUM);
    }

    /**
     * Appends value to 'select' list
     *
     * @param Select $value Value to append
     *
     * @return null
     */
    public function appendSelect(Select $value) {
        return $this->append(self::SELECT, $value);
    }

    /**
     * Clears 'select' list
     *
     * @return null
     */
    public function clearSelect() {
        return $this->clear(self::SELECT);
    }

    /**
     * Returns 'select' list
     *
     * @return Select[]
     */
    public function getSelect() {
        return $this->get(self::SELECT);
    }

    /**
     * Returns 'select' iterator
     *
     * @return ArrayIterator
     */
    public function getSelectIterator() {
        return new ArrayIterator($this->get(self::SELECT));
    }

    /**
     * Returns element from 'select' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Select
     */
    public function getSelectAt($offset) {
        return $this->get(self::SELECT, $offset);
    }

    /**
     * Returns count of 'select' list
     *
     * @return int
     */
    public function getSelectCount() {
        return $this->count(self::SELECT);
    }
}
}

/**
 * WeekendList message
 */
if (!class_exists('WeekendList')) {
class WeekendList extends ProtobufMessage
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
