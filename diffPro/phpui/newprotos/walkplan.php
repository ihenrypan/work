<?php
/**
 * Auto generated from map_walk_plan.proto.1 at 2015-06-23 14:50:25
 */

/**
 * Detail message
 */
if (!class_exists('Detail')) {
class Detail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const KM_PRICE = 1;
    const START_PRICE = 2;
    const TOTAL_PRICE = 3;
    const DESC = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::KM_PRICE => array(
            'name' => 'km_price',
            'required' => false,
            'type' => 7,
        ),
        self::START_PRICE => array(
            'name' => 'start_price',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL_PRICE => array(
            'name' => 'total_price',
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
        $this->values[self::KM_PRICE] = null;
        $this->values[self::START_PRICE] = null;
        $this->values[self::TOTAL_PRICE] = null;
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
     * Sets value of 'km_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKmPrice($value) {
        return $this->set(self::KM_PRICE, $value);
    }

    /**
     * Returns value of 'km_price' property
     *
     * @return string
     */
    public function getKmPrice() {
        return $this->get(self::KM_PRICE);
    }

    /**
     * Sets value of 'start_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartPrice($value) {
        return $this->set(self::START_PRICE, $value);
    }

    /**
     * Returns value of 'start_price' property
     *
     * @return string
     */
    public function getStartPrice() {
        return $this->get(self::START_PRICE);
    }

    /**
     * Sets value of 'total_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalPrice($value) {
        return $this->set(self::TOTAL_PRICE, $value);
    }

    /**
     * Returns value of 'total_price' property
     *
     * @return string
     */
    public function getTotalPrice() {
        return $this->get(self::TOTAL_PRICE);
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
 * Taxi message
 */
if (!class_exists('Taxi')) {
class Taxi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISTANCE = 1;
    const DURATION = 2;
    const REMARK = 3;
    const DETAIL = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 7,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 7,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => false,
            'type' => 7,
        ),
        self::DETAIL => array(
            'name' => 'detail',
            'repeated' => true,
            'type' => 'Detail',
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::DETAIL] = array();
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
     * Sets value of 'duration' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return string
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'remark' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRemark($value) {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return string
     */
    public function getRemark() {
        return $this->get(self::REMARK);
    }

    /**
     * Appends value to 'detail' list
     *
     * @param Detail $value Value to append
     *
     * @return null
     */
    public function appendDetail(Detail $value) {
        return $this->append(self::DETAIL, $value);
    }

    /**
     * Clears 'detail' list
     *
     * @return null
     */
    public function clearDetail() {
        return $this->clear(self::DETAIL);
    }

    /**
     * Returns 'detail' list
     *
     * @return Detail[]
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
    }

    /**
     * Returns 'detail' iterator
     *
     * @return ArrayIterator
     */
    public function getDetailIterator() {
        return new ArrayIterator($this->get(self::DETAIL));
    }

    /**
     * Returns element from 'detail' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Detail
     */
    public function getDetailAt($offset) {
        return $this->get(self::DETAIL, $offset);
    }

    /**
     * Returns count of 'detail' list
     *
     * @return int
     */
    public function getDetailCount() {
        return $this->count(self::DETAIL);
    }
}
}

/**
 * Links message
 */
if (!class_exists('Links')) {
class Links extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ID = 1;
    const IDX = 2;
    const LENGTH = 3;
    const HAS_PANID = 4;
    const LINK_TYPE = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::IDX => array(
            'name' => 'idx',
            'required' => false,
            'type' => 5,
        ),
        self::LENGTH => array(
            'name' => 'length',
            'required' => false,
            'type' => 5,
        ),
        self::HAS_PANID => array(
            'name' => 'has_panid',
            'required' => false,
            'type' => 5,
        ),
        self::LINK_TYPE => array(
            'name' => 'link_type',
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
        $this->values[self::ID] = null;
        $this->values[self::IDX] = null;
        $this->values[self::LENGTH] = null;
        $this->values[self::HAS_PANID] = null;
        $this->values[self::LINK_TYPE] = null;
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
     * Sets value of 'idx' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIdx($value) {
        return $this->set(self::IDX, $value);
    }

    /**
     * Returns value of 'idx' property
     *
     * @return int
     */
    public function getIdx() {
        return $this->get(self::IDX);
    }

    /**
     * Sets value of 'length' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLength($value) {
        return $this->set(self::LENGTH, $value);
    }

    /**
     * Returns value of 'length' property
     *
     * @return int
     */
    public function getLength() {
        return $this->get(self::LENGTH);
    }

    /**
     * Sets value of 'has_panid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHasPanid($value) {
        return $this->set(self::HAS_PANID, $value);
    }

    /**
     * Returns value of 'has_panid' property
     *
     * @return int
     */
    public function getHasPanid() {
        return $this->get(self::HAS_PANID);
    }

    /**
     * Sets value of 'link_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLinkType($value) {
        return $this->set(self::LINK_TYPE, $value);
    }

    /**
     * Returns value of 'link_type' property
     *
     * @return int
     */
    public function getLinkType() {
        return $this->get(self::LINK_TYPE);
    }
}
}

/**
 * Pois message
 */
if (!class_exists('Pois')) {
class Pois extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const SLOCATION = 2;
    const SIDE = 3;
    const HEADING = 4;
    const PITCH = 5;
    const PANOID = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::SLOCATION => array(
            'name' => 'slocation',
            'repeated' => true,
            'type' => 6,
        ),
        self::SIDE => array(
            'name' => 'side',
            'required' => false,
            'type' => 5,
        ),
        self::HEADING => array(
            'name' => 'heading',
            'required' => false,
            'type' => 7,
        ),
        self::PITCH => array(
            'name' => 'pitch',
            'required' => false,
            'type' => 7,
        ),
        self::PANOID => array(
            'name' => 'panoid',
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
        $this->values[self::NAME] = null;
        $this->values[self::SLOCATION] = array();
        $this->values[self::SIDE] = null;
        $this->values[self::HEADING] = null;
        $this->values[self::PITCH] = null;
        $this->values[self::PANOID] = null;
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
     * Appends value to 'slocation' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSlocation($value) {
        return $this->append(self::SLOCATION, $value);
    }

    /**
     * Clears 'slocation' list
     *
     * @return null
     */
    public function clearSlocation() {
        return $this->clear(self::SLOCATION);
    }

    /**
     * Returns 'slocation' list
     *
     * @return int[]
     */
    public function getSlocation() {
        return $this->get(self::SLOCATION);
    }

    /**
     * Returns 'slocation' iterator
     *
     * @return ArrayIterator
     */
    public function getSlocationIterator() {
        return new ArrayIterator($this->get(self::SLOCATION));
    }

    /**
     * Returns element from 'slocation' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSlocationAt($offset) {
        return $this->get(self::SLOCATION, $offset);
    }

    /**
     * Returns count of 'slocation' list
     *
     * @return int
     */
    public function getSlocationCount() {
        return $this->count(self::SLOCATION);
    }

    /**
     * Sets value of 'side' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSide($value) {
        return $this->set(self::SIDE, $value);
    }

    /**
     * Returns value of 'side' property
     *
     * @return int
     */
    public function getSide() {
        return $this->get(self::SIDE);
    }

    /**
     * Sets value of 'heading' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeading($value) {
        return $this->set(self::HEADING, $value);
    }

    /**
     * Returns value of 'heading' property
     *
     * @return string
     */
    public function getHeading() {
        return $this->get(self::HEADING);
    }

    /**
     * Sets value of 'pitch' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPitch($value) {
        return $this->set(self::PITCH, $value);
    }

    /**
     * Returns value of 'pitch' property
     *
     * @return string
     */
    public function getPitch() {
        return $this->get(self::PITCH);
    }

    /**
     * Sets value of 'panoid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPanoid($value) {
        return $this->set(self::PANOID, $value);
    }

    /**
     * Returns value of 'panoid' property
     *
     * @return string
     */
    public function getPanoid() {
        return $this->get(self::PANOID);
    }
}
}

/**
 * Steps message
 */
if (!class_exists('Steps')) {
class Steps extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LINKS = 13;
    const POIS = 14;
    const SPATH = 1;
    const INSTRUCTIONS = 2;
    const TYPE = 3;
    const NAME = 4;
    const FIRST_LINK_END_INDEX = 5;
    const TURN_TYPE = 6;
    const WALK_TYPE = 7;
    const LIGHT = 8;
    const CIRCLE_ROAD = 9;
    const ROAD_WIDTH = 10;
    const DISTANCE = 11;
    const DURATION = 12;
    const DIRECTION = 15;
    const HAS_PANID = 16;
    const SSTART_LOCATION = 17;
    const SEND_LOCATION = 18;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINKS => array(
            'name' => 'links',
            'repeated' => true,
            'type' => 'Links',
        ),
        self::POIS => array(
            'name' => 'pois',
            'repeated' => true,
            'type' => 'Pois',
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 6,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::FIRST_LINK_END_INDEX => array(
            'name' => 'first_link_end_index',
            'required' => false,
            'type' => 5,
        ),
        self::TURN_TYPE => array(
            'name' => 'turn_type',
            'required' => false,
            'type' => 5,
        ),
        self::WALK_TYPE => array(
            'name' => 'walk_type',
            'required' => false,
            'type' => 5,
        ),
        self::LIGHT => array(
            'name' => 'light',
            'required' => false,
            'type' => 5,
        ),
        self::CIRCLE_ROAD => array(
            'name' => 'circle_road',
            'required' => false,
            'type' => 5,
        ),
        self::ROAD_WIDTH => array(
            'name' => 'road_width',
            'required' => false,
            'type' => 5,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::DIRECTION => array(
            'name' => 'direction',
            'required' => false,
            'type' => 5,
        ),
        self::HAS_PANID => array(
            'name' => 'has_panid',
            'required' => false,
            'type' => 5,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
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
        $this->values[self::LINKS] = array();
        $this->values[self::POIS] = array();
        $this->values[self::SPATH] = array();
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::FIRST_LINK_END_INDEX] = null;
        $this->values[self::TURN_TYPE] = null;
        $this->values[self::WALK_TYPE] = null;
        $this->values[self::LIGHT] = null;
        $this->values[self::CIRCLE_ROAD] = null;
        $this->values[self::ROAD_WIDTH] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::DIRECTION] = null;
        $this->values[self::HAS_PANID] = null;
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SEND_LOCATION] = array();
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
     * Appends value to 'links' list
     *
     * @param Links $value Value to append
     *
     * @return null
     */
    public function appendLinks(Links $value) {
        return $this->append(self::LINKS, $value);
    }

    /**
     * Clears 'links' list
     *
     * @return null
     */
    public function clearLinks() {
        return $this->clear(self::LINKS);
    }

    /**
     * Returns 'links' list
     *
     * @return Links[]
     */
    public function getLinks() {
        return $this->get(self::LINKS);
    }

    /**
     * Returns 'links' iterator
     *
     * @return ArrayIterator
     */
    public function getLinksIterator() {
        return new ArrayIterator($this->get(self::LINKS));
    }

    /**
     * Returns element from 'links' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Links
     */
    public function getLinksAt($offset) {
        return $this->get(self::LINKS, $offset);
    }

    /**
     * Returns count of 'links' list
     *
     * @return int
     */
    public function getLinksCount() {
        return $this->count(self::LINKS);
    }

    /**
     * Appends value to 'pois' list
     *
     * @param Pois $value Value to append
     *
     * @return null
     */
    public function appendPois(Pois $value) {
        return $this->append(self::POIS, $value);
    }

    /**
     * Clears 'pois' list
     *
     * @return null
     */
    public function clearPois() {
        return $this->clear(self::POIS);
    }

    /**
     * Returns 'pois' list
     *
     * @return Pois[]
     */
    public function getPois() {
        return $this->get(self::POIS);
    }

    /**
     * Returns 'pois' iterator
     *
     * @return ArrayIterator
     */
    public function getPoisIterator() {
        return new ArrayIterator($this->get(self::POIS));
    }

    /**
     * Returns element from 'pois' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Pois
     */
    public function getPoisAt($offset) {
        return $this->get(self::POIS, $offset);
    }

    /**
     * Returns count of 'pois' list
     *
     * @return int
     */
    public function getPoisCount() {
        return $this->count(self::POIS);
    }

    /**
     * Appends value to 'spath' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpath($value) {
        return $this->append(self::SPATH, $value);
    }

    /**
     * Clears 'spath' list
     *
     * @return null
     */
    public function clearSpath() {
        return $this->clear(self::SPATH);
    }

    /**
     * Returns 'spath' list
     *
     * @return int[]
     */
    public function getSpath() {
        return $this->get(self::SPATH);
    }

    /**
     * Returns 'spath' iterator
     *
     * @return ArrayIterator
     */
    public function getSpathIterator() {
        return new ArrayIterator($this->get(self::SPATH));
    }

    /**
     * Returns element from 'spath' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSpathAt($offset) {
        return $this->get(self::SPATH, $offset);
    }

    /**
     * Returns count of 'spath' list
     *
     * @return int
     */
    public function getSpathCount() {
        return $this->count(self::SPATH);
    }

    /**
     * Sets value of 'instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInstructions($value) {
        return $this->set(self::INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'instructions' property
     *
     * @return string
     */
    public function getInstructions() {
        return $this->get(self::INSTRUCTIONS);
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
     * Sets value of 'first_link_end_index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFirstLinkEndIndex($value) {
        return $this->set(self::FIRST_LINK_END_INDEX, $value);
    }

    /**
     * Returns value of 'first_link_end_index' property
     *
     * @return int
     */
    public function getFirstLinkEndIndex() {
        return $this->get(self::FIRST_LINK_END_INDEX);
    }

    /**
     * Sets value of 'turn_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTurnType($value) {
        return $this->set(self::TURN_TYPE, $value);
    }

    /**
     * Returns value of 'turn_type' property
     *
     * @return int
     */
    public function getTurnType() {
        return $this->get(self::TURN_TYPE);
    }

    /**
     * Sets value of 'walk_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setWalkType($value) {
        return $this->set(self::WALK_TYPE, $value);
    }

    /**
     * Returns value of 'walk_type' property
     *
     * @return int
     */
    public function getWalkType() {
        return $this->get(self::WALK_TYPE);
    }

    /**
     * Sets value of 'light' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLight($value) {
        return $this->set(self::LIGHT, $value);
    }

    /**
     * Returns value of 'light' property
     *
     * @return int
     */
    public function getLight() {
        return $this->get(self::LIGHT);
    }

    /**
     * Sets value of 'circle_road' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCircleRoad($value) {
        return $this->set(self::CIRCLE_ROAD, $value);
    }

    /**
     * Returns value of 'circle_road' property
     *
     * @return int
     */
    public function getCircleRoad() {
        return $this->get(self::CIRCLE_ROAD);
    }

    /**
     * Sets value of 'road_width' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRoadWidth($value) {
        return $this->set(self::ROAD_WIDTH, $value);
    }

    /**
     * Returns value of 'road_width' property
     *
     * @return int
     */
    public function getRoadWidth() {
        return $this->get(self::ROAD_WIDTH);
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
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'direction' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDirection($value) {
        return $this->set(self::DIRECTION, $value);
    }

    /**
     * Returns value of 'direction' property
     *
     * @return int
     */
    public function getDirection() {
        return $this->get(self::DIRECTION);
    }

    /**
     * Sets value of 'has_panid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHasPanid($value) {
        return $this->set(self::HAS_PANID, $value);
    }

    /**
     * Returns value of 'has_panid' property
     *
     * @return int
     */
    public function getHasPanid() {
        return $this->get(self::HAS_PANID);
    }

    /**
     * Appends value to 'sstart_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSstartLocation($value) {
        return $this->append(self::SSTART_LOCATION, $value);
    }

    /**
     * Clears 'sstart_location' list
     *
     * @return null
     */
    public function clearSstartLocation() {
        return $this->clear(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' list
     *
     * @return int[]
     */
    public function getSstartLocation() {
        return $this->get(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSstartLocationIterator() {
        return new ArrayIterator($this->get(self::SSTART_LOCATION));
    }

    /**
     * Returns element from 'sstart_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSstartLocationAt($offset) {
        return $this->get(self::SSTART_LOCATION, $offset);
    }

    /**
     * Returns count of 'sstart_location' list
     *
     * @return int
     */
    public function getSstartLocationCount() {
        return $this->count(self::SSTART_LOCATION);
    }

    /**
     * Appends value to 'send_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSendLocation($value) {
        return $this->append(self::SEND_LOCATION, $value);
    }

    /**
     * Clears 'send_location' list
     *
     * @return null
     */
    public function clearSendLocation() {
        return $this->clear(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' list
     *
     * @return int[]
     */
    public function getSendLocation() {
        return $this->get(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSendLocationIterator() {
        return new ArrayIterator($this->get(self::SEND_LOCATION));
    }

    /**
     * Returns element from 'send_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSendLocationAt($offset) {
        return $this->get(self::SEND_LOCATION, $offset);
    }

    /**
     * Returns count of 'send_location' list
     *
     * @return int
     */
    public function getSendLocationCount() {
        return $this->count(self::SEND_LOCATION);
    }
}
}

/**
 * Legs message
 */
if (!class_exists('Legs')) {
class Legs extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STEPS = 10;
    const SSTART_LOCATION = 1;
    const SEND_LOCATION = 2;
    const START_ADDRESS = 3;
    const END_ADDRESS = 4;
    const DISTANCE = 5;
    const DURATION = 6;
    const SIDE = 7;
    const START_DIST = 8;
    const END_DIST = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STEPS => array(
            'name' => 'steps',
            'repeated' => true,
            'type' => 'Steps',
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::START_ADDRESS => array(
            'name' => 'start_address',
            'required' => false,
            'type' => 7,
        ),
        self::END_ADDRESS => array(
            'name' => 'end_address',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::SIDE => array(
            'name' => 'side',
            'required' => false,
            'type' => 5,
        ),
        self::START_DIST => array(
            'name' => 'start_dist',
            'required' => false,
            'type' => 5,
        ),
        self::END_DIST => array(
            'name' => 'end_dist',
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
        $this->values[self::STEPS] = array();
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::START_ADDRESS] = null;
        $this->values[self::END_ADDRESS] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::SIDE] = null;
        $this->values[self::START_DIST] = null;
        $this->values[self::END_DIST] = null;
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
     * Appends value to 'steps' list
     *
     * @param Steps $value Value to append
     *
     * @return null
     */
    public function appendSteps(Steps $value) {
        return $this->append(self::STEPS, $value);
    }

    /**
     * Clears 'steps' list
     *
     * @return null
     */
    public function clearSteps() {
        return $this->clear(self::STEPS);
    }

    /**
     * Returns 'steps' list
     *
     * @return Steps[]
     */
    public function getSteps() {
        return $this->get(self::STEPS);
    }

    /**
     * Returns 'steps' iterator
     *
     * @return ArrayIterator
     */
    public function getStepsIterator() {
        return new ArrayIterator($this->get(self::STEPS));
    }

    /**
     * Returns element from 'steps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Steps
     */
    public function getStepsAt($offset) {
        return $this->get(self::STEPS, $offset);
    }

    /**
     * Returns count of 'steps' list
     *
     * @return int
     */
    public function getStepsCount() {
        return $this->count(self::STEPS);
    }

    /**
     * Appends value to 'sstart_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSstartLocation($value) {
        return $this->append(self::SSTART_LOCATION, $value);
    }

    /**
     * Clears 'sstart_location' list
     *
     * @return null
     */
    public function clearSstartLocation() {
        return $this->clear(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' list
     *
     * @return int[]
     */
    public function getSstartLocation() {
        return $this->get(self::SSTART_LOCATION);
    }

    /**
     * Returns 'sstart_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSstartLocationIterator() {
        return new ArrayIterator($this->get(self::SSTART_LOCATION));
    }

    /**
     * Returns element from 'sstart_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSstartLocationAt($offset) {
        return $this->get(self::SSTART_LOCATION, $offset);
    }

    /**
     * Returns count of 'sstart_location' list
     *
     * @return int
     */
    public function getSstartLocationCount() {
        return $this->count(self::SSTART_LOCATION);
    }

    /**
     * Appends value to 'send_location' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSendLocation($value) {
        return $this->append(self::SEND_LOCATION, $value);
    }

    /**
     * Clears 'send_location' list
     *
     * @return null
     */
    public function clearSendLocation() {
        return $this->clear(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' list
     *
     * @return int[]
     */
    public function getSendLocation() {
        return $this->get(self::SEND_LOCATION);
    }

    /**
     * Returns 'send_location' iterator
     *
     * @return ArrayIterator
     */
    public function getSendLocationIterator() {
        return new ArrayIterator($this->get(self::SEND_LOCATION));
    }

    /**
     * Returns element from 'send_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSendLocationAt($offset) {
        return $this->get(self::SEND_LOCATION, $offset);
    }

    /**
     * Returns count of 'send_location' list
     *
     * @return int
     */
    public function getSendLocationCount() {
        return $this->count(self::SEND_LOCATION);
    }

    /**
     * Sets value of 'start_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartAddress($value) {
        return $this->set(self::START_ADDRESS, $value);
    }

    /**
     * Returns value of 'start_address' property
     *
     * @return string
     */
    public function getStartAddress() {
        return $this->get(self::START_ADDRESS);
    }

    /**
     * Sets value of 'end_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndAddress($value) {
        return $this->set(self::END_ADDRESS, $value);
    }

    /**
     * Returns value of 'end_address' property
     *
     * @return string
     */
    public function getEndAddress() {
        return $this->get(self::END_ADDRESS);
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
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Sets value of 'side' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSide($value) {
        return $this->set(self::SIDE, $value);
    }

    /**
     * Returns value of 'side' property
     *
     * @return int
     */
    public function getSide() {
        return $this->get(self::SIDE);
    }

    /**
     * Sets value of 'start_dist' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStartDist($value) {
        return $this->set(self::START_DIST, $value);
    }

    /**
     * Returns value of 'start_dist' property
     *
     * @return int
     */
    public function getStartDist() {
        return $this->get(self::START_DIST);
    }

    /**
     * Sets value of 'end_dist' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEndDist($value) {
        return $this->set(self::END_DIST, $value);
    }

    /**
     * Returns value of 'end_dist' property
     *
     * @return int
     */
    public function getEndDist() {
        return $this->get(self::END_DIST);
    }
}
}

/**
 * Routes message
 */
if (!class_exists('Routes')) {
class Routes extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LEGS = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LEGS => array(
            'name' => 'legs',
            'repeated' => true,
            'type' => 'Legs',
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
        $this->values[self::LEGS] = array();
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
     * Appends value to 'legs' list
     *
     * @param Legs $value Value to append
     *
     * @return null
     */
    public function appendLegs(Legs $value) {
        return $this->append(self::LEGS, $value);
    }

    /**
     * Clears 'legs' list
     *
     * @return null
     */
    public function clearLegs() {
        return $this->clear(self::LEGS);
    }

    /**
     * Returns 'legs' list
     *
     * @return Legs[]
     */
    public function getLegs() {
        return $this->get(self::LEGS);
    }

    /**
     * Returns 'legs' iterator
     *
     * @return ArrayIterator
     */
    public function getLegsIterator() {
        return new ArrayIterator($this->get(self::LEGS));
    }

    /**
     * Returns element from 'legs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Legs
     */
    public function getLegsAt($offset) {
        return $this->get(self::LEGS, $offset);
    }

    /**
     * Returns count of 'legs' list
     *
     * @return int
     */
    public function getLegsCount() {
        return $this->count(self::LEGS);
    }
}
}

/**
 * Start message
 */
if (!class_exists('Start')) {
class Start extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PT = 1;
    const WD = 2;
    const UID = 3;
    const BUS_STOP = 4;
    const SPT = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::BUS_STOP => array(
            'name' => 'bus_stop',
            'required' => false,
            'type' => 8,
        ),
        self::SPT => array(
            'name' => 'spt',
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
        $this->values[self::PT] = null;
        $this->values[self::WD] = null;
        $this->values[self::UID] = null;
        $this->values[self::BUS_STOP] = null;
        $this->values[self::SPT] = array();
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
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
     * Sets value of 'bus_stop' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setBusStop($value) {
        return $this->set(self::BUS_STOP, $value);
    }

    /**
     * Returns value of 'bus_stop' property
     *
     * @return bool
     */
    public function getBusStop() {
        return $this->get(self::BUS_STOP);
    }

    /**
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }
}
}

/**
 * End message
 */
if (!class_exists('End')) {
class End extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PT = 1;
    const WD = 2;
    const UID = 3;
    const BUS_STOP = 4;
    const SPT = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::BUS_STOP => array(
            'name' => 'bus_stop',
            'required' => false,
            'type' => 8,
        ),
        self::SPT => array(
            'name' => 'spt',
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
        $this->values[self::PT] = null;
        $this->values[self::WD] = null;
        $this->values[self::UID] = null;
        $this->values[self::BUS_STOP] = null;
        $this->values[self::SPT] = array();
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
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
     * Sets value of 'bus_stop' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setBusStop($value) {
        return $this->set(self::BUS_STOP, $value);
    }

    /**
     * Returns value of 'bus_stop' property
     *
     * @return bool
     */
    public function getBusStop() {
        return $this->get(self::BUS_STOP);
    }

    /**
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }
}
}

/**
 * StartCity message
 */
if (!class_exists('StartCity')) {
class StartCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const CNAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::CNAME => array(
            'name' => 'cname',
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
        $this->values[self::CNAME] = null;
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
     * Sets value of 'cname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCname($value) {
        return $this->set(self::CNAME, $value);
    }

    /**
     * Returns value of 'cname' property
     *
     * @return string
     */
    public function getCname() {
        return $this->get(self::CNAME);
    }
}
}

/**
 * EndCity message
 */
if (!class_exists('EndCity')) {
class EndCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CODE = 1;
    const CNAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::CNAME => array(
            'name' => 'cname',
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
        $this->values[self::CNAME] = null;
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
     * Sets value of 'cname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCname($value) {
        return $this->set(self::CNAME, $value);
    }

    /**
     * Returns value of 'cname' property
     *
     * @return string
     */
    public function getCname() {
        return $this->get(self::CNAME);
    }
}
}

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
    const EXPTIME = 2;
    const SY = 3;
    const START = 4;
    const END = 5;
    const AVOID_JAM = 6;
    const START_CITY = 7;
    const END_CITY = 8;
    const DIS_SY = 9;
    const REQ_TM = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::EXPTIME => array(
            'name' => 'exptime',
            'required' => false,
            'type' => 7,
        ),
        self::SY => array(
            'name' => 'sy',
            'required' => false,
            'type' => 5,
        ),
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => 'Start',
        ),
        self::END => array(
            'name' => 'end',
            'repeated' => true,
            'type' => 'End',
        ),
        self::AVOID_JAM => array(
            'name' => 'avoid_jam',
            'required' => false,
            'type' => 5,
        ),
        self::START_CITY => array(
            'name' => 'start_city',
            'required' => false,
            'type' => 'StartCity',
        ),
        self::END_CITY => array(
            'name' => 'end_city',
            'repeated' => true,
            'type' => 'EndCity',
        ),
        self::DIS_SY => array(
            'name' => 'dis_sy',
            'required' => false,
            'type' => 5,
        ),
        self::REQ_TM => array(
            'name' => 'req_tm',
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
        $this->values[self::TOTAL] = null;
        $this->values[self::EXPTIME] = null;
        $this->values[self::SY] = null;
        $this->values[self::START] = null;
        $this->values[self::END] = array();
        $this->values[self::AVOID_JAM] = null;
        $this->values[self::START_CITY] = null;
        $this->values[self::END_CITY] = array();
        $this->values[self::DIS_SY] = null;
        $this->values[self::REQ_TM] = null;
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
     * Sets value of 'exptime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExptime($value) {
        return $this->set(self::EXPTIME, $value);
    }

    /**
     * Returns value of 'exptime' property
     *
     * @return string
     */
    public function getExptime() {
        return $this->get(self::EXPTIME);
    }

    /**
     * Sets value of 'sy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSy($value) {
        return $this->set(self::SY, $value);
    }

    /**
     * Returns value of 'sy' property
     *
     * @return int
     */
    public function getSy() {
        return $this->get(self::SY);
    }

    /**
     * Sets value of 'start' property
     *
     * @param Start $value Property value
     *
     * @return null
     */
    public function setStart(Start $value) {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return Start
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Appends value to 'end' list
     *
     * @param End $value Value to append
     *
     * @return null
     */
    public function appendEnd(End $value) {
        return $this->append(self::END, $value);
    }

    /**
     * Clears 'end' list
     *
     * @return null
     */
    public function clearEnd() {
        return $this->clear(self::END);
    }

    /**
     * Returns 'end' list
     *
     * @return End[]
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Returns 'end' iterator
     *
     * @return ArrayIterator
     */
    public function getEndIterator() {
        return new ArrayIterator($this->get(self::END));
    }

    /**
     * Returns element from 'end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return End
     */
    public function getEndAt($offset) {
        return $this->get(self::END, $offset);
    }

    /**
     * Returns count of 'end' list
     *
     * @return int
     */
    public function getEndCount() {
        return $this->count(self::END);
    }

    /**
     * Sets value of 'avoid_jam' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAvoidJam($value) {
        return $this->set(self::AVOID_JAM, $value);
    }

    /**
     * Returns value of 'avoid_jam' property
     *
     * @return int
     */
    public function getAvoidJam() {
        return $this->get(self::AVOID_JAM);
    }

    /**
     * Sets value of 'start_city' property
     *
     * @param StartCity $value Property value
     *
     * @return null
     */
    public function setStartCity(StartCity $value) {
        return $this->set(self::START_CITY, $value);
    }

    /**
     * Returns value of 'start_city' property
     *
     * @return StartCity
     */
    public function getStartCity() {
        return $this->get(self::START_CITY);
    }

    /**
     * Appends value to 'end_city' list
     *
     * @param EndCity $value Value to append
     *
     * @return null
     */
    public function appendEndCity(EndCity $value) {
        return $this->append(self::END_CITY, $value);
    }

    /**
     * Clears 'end_city' list
     *
     * @return null
     */
    public function clearEndCity() {
        return $this->clear(self::END_CITY);
    }

    /**
     * Returns 'end_city' list
     *
     * @return EndCity[]
     */
    public function getEndCity() {
        return $this->get(self::END_CITY);
    }

    /**
     * Returns 'end_city' iterator
     *
     * @return ArrayIterator
     */
    public function getEndCityIterator() {
        return new ArrayIterator($this->get(self::END_CITY));
    }

    /**
     * Returns element from 'end_city' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return EndCity
     */
    public function getEndCityAt($offset) {
        return $this->get(self::END_CITY, $offset);
    }

    /**
     * Returns count of 'end_city' list
     *
     * @return int
     */
    public function getEndCityCount() {
        return $this->count(self::END_CITY);
    }

    /**
     * Sets value of 'dis_sy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDisSy($value) {
        return $this->set(self::DIS_SY, $value);
    }

    /**
     * Returns value of 'dis_sy' property
     *
     * @return int
     */
    public function getDisSy() {
        return $this->get(self::DIS_SY);
    }

    /**
     * Sets value of 'req_tm' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReqTm($value) {
        return $this->set(self::REQ_TM, $value);
    }

    /**
     * Returns value of 'req_tm' property
     *
     * @return string
     */
    public function getReqTm() {
        return $this->get(self::REQ_TM);
    }
}
}

/**
 * WalkPlan message
 */
if (!class_exists('WalkPlan')) {
class WalkPlan extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TAXI = 2;
    const ROUTES = 1;
    const OPTION = 3;
    const CURRENT_CITY = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TAXI => array(
            'name' => 'taxi',
            'required' => false,
            'type' => 'Taxi',
        ),
        self::ROUTES => array(
            'name' => 'routes',
            'repeated' => true,
            'type' => 'Routes',
        ),
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
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
        $this->values[self::TAXI] = null;
        $this->values[self::ROUTES] = array();
        $this->values[self::OPTION] = null;
        $this->values[self::CURRENT_CITY] = null;
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
     * Sets value of 'taxi' property
     *
     * @param Taxi $value Property value
     *
     * @return null
     */
    public function setTaxi(Taxi $value) {
        return $this->set(self::TAXI, $value);
    }

    /**
     * Returns value of 'taxi' property
     *
     * @return Taxi
     */
    public function getTaxi() {
        return $this->get(self::TAXI);
    }

    /**
     * Appends value to 'routes' list
     *
     * @param Routes $value Value to append
     *
     * @return null
     */
    public function appendRoutes(Routes $value) {
        return $this->append(self::ROUTES, $value);
    }

    /**
     * Clears 'routes' list
     *
     * @return null
     */
    public function clearRoutes() {
        return $this->clear(self::ROUTES);
    }

    /**
     * Returns 'routes' list
     *
     * @return Routes[]
     */
    public function getRoutes() {
        return $this->get(self::ROUTES);
    }

    /**
     * Returns 'routes' iterator
     *
     * @return ArrayIterator
     */
    public function getRoutesIterator() {
        return new ArrayIterator($this->get(self::ROUTES));
    }

    /**
     * Returns element from 'routes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Routes
     */
    public function getRoutesAt($offset) {
        return $this->get(self::ROUTES, $offset);
    }

    /**
     * Returns count of 'routes' list
     *
     * @return int
     */
    public function getRoutesCount() {
        return $this->count(self::ROUTES);
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
}
}
require_once 'currentcity.php';