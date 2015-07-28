<?php
/**
 * Auto generated from map_indoor_navi.proto.1 at 2015-06-23 14:47:47
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
    const TYPE = 3;

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
        $this->values[self::ERROR] = null;
        $this->values[self::TOTAL] = null;
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
 * Pois message
 */
if (!class_exists('Pois')) {
class Pois extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const TYPE = 2;
    const LOCATION = 3;
    const DETAIL = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::LOCATION => array(
            'name' => 'location',
            'repeated' => true,
            'type' => 1,
        ),
        self::DETAIL => array(
            'name' => 'detail',
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
        $this->values[self::TYPE] = null;
        $this->values[self::LOCATION] = array();
        $this->values[self::DETAIL] = null;
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
     * Appends value to 'location' list
     *
     * @param float $value Value to append
     *
     * @return null
     */
    public function appendLocation($value) {
        return $this->append(self::LOCATION, $value);
    }

    /**
     * Clears 'location' list
     *
     * @return null
     */
    public function clearLocation() {
        return $this->clear(self::LOCATION);
    }

    /**
     * Returns 'location' list
     *
     * @return float[]
     */
    public function getLocation() {
        return $this->get(self::LOCATION);
    }

    /**
     * Returns 'location' iterator
     *
     * @return ArrayIterator
     */
    public function getLocationIterator() {
        return new ArrayIterator($this->get(self::LOCATION));
    }

    /**
     * Returns element from 'location' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return float
     */
    public function getLocationAt($offset) {
        return $this->get(self::LOCATION, $offset);
    }

    /**
     * Returns count of 'location' list
     *
     * @return int
     */
    public function getLocationCount() {
        return $this->count(self::LOCATION);
    }

    /**
     * Sets value of 'detail' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetail($value) {
        return $this->set(self::DETAIL, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return string
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
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
    const SSTART_LOCATION = 1;
    const SEND_LOCATION = 2;
    const DISTANCE = 3;
    const DURATION = 4;
    const INSTRUCTIONS = 5;
    const TYPE = 6;
    const FLOORID = 7;
    const SPATH = 8;
    const POIS = 9;
    const BUILDINGID = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 1,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 1,
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
        self::FLOORID => array(
            'name' => 'floorid',
            'required' => false,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
            'type' => 1,
        ),
        self::POIS => array(
            'name' => 'pois',
            'repeated' => true,
            'type' => 'Pois',
        ),
        self::BUILDINGID => array(
            'name' => 'buildingid',
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
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::FLOORID] = null;
        $this->values[self::SPATH] = array();
        $this->values[self::POIS] = array();
        $this->values[self::BUILDINGID] = null;
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
     * Appends value to 'sstart_location' list
     *
     * @param float $value Value to append
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
     * @return float[]
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
     * @return float
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
     * @param float $value Value to append
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
     * @return float[]
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
     * @return float
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
     * Sets value of 'floorid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFloorid($value) {
        return $this->set(self::FLOORID, $value);
    }

    /**
     * Returns value of 'floorid' property
     *
     * @return string
     */
    public function getFloorid() {
        return $this->get(self::FLOORID);
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
     * Sets value of 'buildingid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBuildingid($value) {
        return $this->set(self::BUILDINGID, $value);
    }

    /**
     * Returns value of 'buildingid' property
     *
     * @return string
     */
    public function getBuildingid() {
        return $this->get(self::BUILDINGID);
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
    const SSTART_LOCATION = 1;
    const SEND_LOCATION = 2;
    const DISTANCE = 3;
    const DURATION = 4;
    const STEPS = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 1,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 1,
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
        self::STEPS => array(
            'name' => 'steps',
            'repeated' => true,
            'type' => 'Steps',
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
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::STEPS] = array();
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
     * Appends value to 'sstart_location' list
     *
     * @param float $value Value to append
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
     * @return float[]
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
     * @return float
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
     * @param float $value Value to append
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
     * @return float[]
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
     * @return float
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
    const DISTANCE = 1;
    const DURATION = 2;
    const LEGS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
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
 * IndoorNavi message
 */
if (!class_exists('IndoorNavi')) {
class IndoorNavi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const ROUTES = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
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
        $this->values[self::OPTION] = null;
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
