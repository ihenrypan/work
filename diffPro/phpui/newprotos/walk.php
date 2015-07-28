<?php
/**
 * Auto generated from map_walk.proto.1 at 2015-06-23 14:50:18
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
    const DESC = 1;
    const KM_PRICE = 2;
    const START_PRICE = 3;
    const TOTAL_PRICE = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => 7,
        ),
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
        $this->values[self::DESC] = null;
        $this->values[self::KM_PRICE] = null;
        $this->values[self::START_PRICE] = null;
        $this->values[self::TOTAL_PRICE] = null;
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
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
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
 * Steps message
 */
if (!class_exists('Steps')) {
class Steps extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISTANCE = 1;
    const DURATION = 2;
    const END_LOCATION = 3;
    const START_LOCATION = 4;
    const INSTRUCTIONS = 5;
    const PATH = 6;
    const DIRECTION = 7;
    const END_INSTRUCTIONS = 8;
    const START_INSTRUCTIONS = 9;
    const TURN = 10;
    const SEND_LOCATION = 11;
    const SSTART_LOCATION = 12;
    const SPATH = 13;

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
        self::END_LOCATION => array(
            'name' => 'end_location',
            'required' => false,
            'type' => 7,
        ),
        self::START_LOCATION => array(
            'name' => 'start_location',
            'required' => false,
            'type' => 7,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::PATH => array(
            'name' => 'path',
            'required' => false,
            'type' => 7,
        ),
        self::DIRECTION => array(
            'name' => 'direction',
            'required' => false,
            'type' => 5,
        ),
        self::END_INSTRUCTIONS => array(
            'name' => 'end_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::START_INSTRUCTIONS => array(
            'name' => 'start_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::TURN => array(
            'name' => 'turn',
            'required' => false,
            'type' => 5,
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SPATH => array(
            'name' => 'spath',
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::END_LOCATION] = null;
        $this->values[self::START_LOCATION] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::PATH] = null;
        $this->values[self::DIRECTION] = null;
        $this->values[self::END_INSTRUCTIONS] = null;
        $this->values[self::START_INSTRUCTIONS] = null;
        $this->values[self::TURN] = null;
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::SSTART_LOCATION] = array();
        $this->values[self::SPATH] = array();
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
     * Sets value of 'end_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndLocation($value) {
        return $this->set(self::END_LOCATION, $value);
    }

    /**
     * Returns value of 'end_location' property
     *
     * @return string
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Sets value of 'start_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartLocation($value) {
        return $this->set(self::START_LOCATION, $value);
    }

    /**
     * Returns value of 'start_location' property
     *
     * @return string
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
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
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value) {
        return $this->set(self::PATH, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath() {
        return $this->get(self::PATH);
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
     * Sets value of 'end_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndInstructions($value) {
        return $this->set(self::END_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'end_instructions' property
     *
     * @return string
     */
    public function getEndInstructions() {
        return $this->get(self::END_INSTRUCTIONS);
    }

    /**
     * Sets value of 'start_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartInstructions($value) {
        return $this->set(self::START_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'start_instructions' property
     *
     * @return string
     */
    public function getStartInstructions() {
        return $this->get(self::START_INSTRUCTIONS);
    }

    /**
     * Sets value of 'turn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTurn($value) {
        return $this->set(self::TURN, $value);
    }

    /**
     * Returns value of 'turn' property
     *
     * @return int
     */
    public function getTurn() {
        return $this->get(self::TURN);
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
    const DISTANCE = 1;
    const DURATION = 2;
    const END_LOCATION = 3;
    const START_LOCATION = 4;
    const STEPS = 5;
    const SEND_LOCATION = 6;
    const SSTART_LOCATION = 7;

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
        self::END_LOCATION => array(
            'name' => 'end_location',
            'required' => false,
            'type' => 7,
        ),
        self::START_LOCATION => array(
            'name' => 'start_location',
            'required' => false,
            'type' => 7,
        ),
        self::STEPS => array(
            'name' => 'steps',
            'repeated' => true,
            'type' => 'Steps',
        ),
        self::SEND_LOCATION => array(
            'name' => 'send_location',
            'repeated' => true,
            'type' => 6,
        ),
        self::SSTART_LOCATION => array(
            'name' => 'sstart_location',
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::END_LOCATION] = null;
        $this->values[self::START_LOCATION] = null;
        $this->values[self::STEPS] = array();
        $this->values[self::SEND_LOCATION] = array();
        $this->values[self::SSTART_LOCATION] = array();
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
     * Sets value of 'end_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndLocation($value) {
        return $this->set(self::END_LOCATION, $value);
    }

    /**
     * Returns value of 'end_location' property
     *
     * @return string
     */
    public function getEndLocation() {
        return $this->get(self::END_LOCATION);
    }

    /**
     * Sets value of 'start_location' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartLocation($value) {
        return $this->set(self::START_LOCATION, $value);
    }

    /**
     * Returns value of 'start_location' property
     *
     * @return string
     */
    public function getStartLocation() {
        return $this->get(self::START_LOCATION);
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
}
}

/**
 * Traffic message
 */
if (!class_exists('Traffic')) {
class Traffic extends ProtobufMessage
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
 * Walk message
 */
if (!class_exists('Walk')) {
class Walk extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TAXI = 1;
    const CURRENT_CITY = 2;
    const ROUTES = 3;
    const OPTION = 4;
    const TRAFFIC = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TAXI => array(
            'name' => 'taxi',
            'required' => false,
            'type' => 'Taxi',
        ),
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
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
        self::TRAFFIC => array(
            'name' => 'traffic',
            'required' => false,
            'type' => 'Traffic',
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
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::ROUTES] = array();
        $this->values[self::OPTION] = null;
        $this->values[self::TRAFFIC] = null;
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
     * Sets value of 'traffic' property
     *
     * @param Traffic $value Property value
     *
     * @return null
     */
    public function setTraffic(Traffic $value) {
        return $this->set(self::TRAFFIC, $value);
    }

    /**
     * Returns value of 'traffic' property
     *
     * @return Traffic
     */
    public function getTraffic() {
        return $this->get(self::TRAFFIC);
    }
}
}
require_once 'currentcity.php';