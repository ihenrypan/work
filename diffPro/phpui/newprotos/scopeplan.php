<?php
/**
 * Auto generated from map_scope_plan.proto.1 at 2015-06-23 14:48:37
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
    const ERROR = 1;
    const TOTAL = 2;
    const PN = 3;
    const RN = 4;
    const SY = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::PN => array(
            'name' => 'pn',
            'required' => false,
            'type' => 5,
        ),
        self::RN => array(
            'name' => 'rn',
            'required' => false,
            'type' => 5,
        ),
        self::SY => array(
            'name' => 'sy',
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
        $this->values[self::ERROR] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::PN] = null;
        $this->values[self::RN] = null;
        $this->values[self::SY] = null;
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
     * Sets value of 'pn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPn($value) {
        return $this->set(self::PN, $value);
    }

    /**
     * Returns value of 'pn' property
     *
     * @return int
     */
    public function getPn() {
        return $this->get(self::PN);
    }

    /**
     * Sets value of 'rn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRn($value) {
        return $this->set(self::RN, $value);
    }

    /**
     * Returns value of 'rn' property
     *
     * @return int
     */
    public function getRn() {
        return $this->get(self::RN);
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
    const START_LOCATION = 1;
    const END_LOCATION = 2;
    const START_NAME = 3;
    const END_NAME = 4;
    const DISTANCE = 5;
    const DURATION = 6;
    const UID = 7;
    const PRIORITY = 8;
    const DESCRIPTION = 9;
    const TYPE = 10;
    const SPATH = 11;
    const AUDIO_URL = 12;
    const TEXT = 13;
    const COLOR = 14;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::START_LOCATION => array(
            'name' => 'start_location',
            'repeated' => true,
            'type' => 1,
        ),
        self::END_LOCATION => array(
            'name' => 'end_location',
            'repeated' => true,
            'type' => 1,
        ),
        self::START_NAME => array(
            'name' => 'start_name',
            'required' => false,
            'type' => 7,
        ),
        self::END_NAME => array(
            'name' => 'end_name',
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
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::PRIORITY => array(
            'name' => 'priority',
            'required' => false,
            'type' => 5,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 1,
        ),
        self::AUDIO_URL => array(
            'name' => 'audio_url',
            'required' => false,
            'type' => 7,
        ),
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => 7,
        ),
        self::COLOR => array(
            'name' => 'color',
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
        $this->values[self::START_LOCATION] = array();
        $this->values[self::END_LOCATION] = array();
        $this->values[self::START_NAME] = null;
        $this->values[self::END_NAME] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::UID] = null;
        $this->values[self::PRIORITY] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::SPATH] = array();
        $this->values[self::AUDIO_URL] = null;
        $this->values[self::TEXT] = null;
        $this->values[self::COLOR] = null;
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
     * Appends value to 'start_location' list
     *
     * @param float $value Value to append
     *
     * @return null
     */
    public function appendStartLocation($value) {
        return $this->append(self::START_LOCATION, $value);
    }

    /**
     * Clears 'start_location' list
     *
     * @return null
     */
    public function clearStartLocation() {
        return $this->clear(self::START_LOCATION);
    }

    /**
     * Returns 'start_location' list
     *
     * @return float[]
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
    }

    /**
     * Returns 'start_location' iterator
     *
     * @return ArrayIterator
     */
    public function getStartLocationIterator() {
        return new ArrayIterator($this->get(self::START_LOCATION));
    }

    /**
     * Returns element from 'start_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return float
     */
    public function getStartLocationAt($offset) {
        return $this->get(self::START_LOCATION, $offset);
    }

    /**
     * Returns count of 'start_location' list
     *
     * @return int
     */
    public function getStartLocationCount() {
        return $this->count(self::START_LOCATION);
    }

    /**
     * Appends value to 'end_location' list
     *
     * @param float $value Value to append
     *
     * @return null
     */
    public function appendEndLocation($value) {
        return $this->append(self::END_LOCATION, $value);
    }

    /**
     * Clears 'end_location' list
     *
     * @return null
     */
    public function clearEndLocation() {
        return $this->clear(self::END_LOCATION);
    }

    /**
     * Returns 'end_location' list
     *
     * @return float[]
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Returns 'end_location' iterator
     *
     * @return ArrayIterator
     */
    public function getEndLocationIterator() {
        return new ArrayIterator($this->get(self::END_LOCATION));
    }

    /**
     * Returns element from 'end_location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return float
     */
    public function getEndLocationAt($offset) {
        return $this->get(self::END_LOCATION, $offset);
    }

    /**
     * Returns count of 'end_location' list
     *
     * @return int
     */
    public function getEndLocationCount() {
        return $this->count(self::END_LOCATION);
    }

    /**
     * Sets value of 'start_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartName($value) {
        return $this->set(self::START_NAME, $value);
    }

    /**
     * Returns value of 'start_name' property
     *
     * @return string
     */
    public function getStartName() {
        return $this->get(self::START_NAME);
    }

    /**
     * Sets value of 'end_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndName($value) {
        return $this->set(self::END_NAME, $value);
    }

    /**
     * Returns value of 'end_name' property
     *
     * @return string
     */
    public function getEndName() {
        return $this->get(self::END_NAME);
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
     * Appends value to 'spath' list
     *
     * @param float $value Value to append
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
     * @return float[]
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
     * @return float
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
     * Sets value of 'audio_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAudioUrl($value) {
        return $this->set(self::AUDIO_URL, $value);
    }

    /**
     * Returns value of 'audio_url' property
     *
     * @return string
     */
    public function getAudioUrl() {
        return $this->get(self::AUDIO_URL);
    }

    /**
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value) {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText() {
        return $this->get(self::TEXT);
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
    const TAGS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LEGS => array(
            'name' => 'legs',
            'repeated' => true,
            'type' => 'Legs',
        ),
        self::TAGS => array(
            'name' => 'tags',
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
        $this->values[self::LEGS] = array();
        $this->values[self::TAGS] = array();
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
    const ROUTES = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ROUTES => array(
            'name' => 'routes',
            'repeated' => true,
            'type' => 'Routes',
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
        $this->values[self::ROUTES] = array();
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
}
}

/**
 * ScopePlan message
 */
if (!class_exists('ScopePlan')) {
class ScopePlan extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;

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
}
}
