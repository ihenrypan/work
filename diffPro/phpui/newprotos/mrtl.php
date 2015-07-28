<?php
/**
 * Auto generated from map_mrtl.proto.1 at 2015-06-23 14:48:07
 */

/**
 * Route message
 */
if (!class_exists('Route')) {
class Route extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISTANCE = 1;
    const DURATION = 2;

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
    const LENGTH = 1;
    const STATUS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LENGTH => array(
            'name' => 'length',
            'repeated' => true,
            'type' => 5,
        ),
        self::STATUS => array(
            'name' => 'status',
            'repeated' => true,
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
        $this->values[self::LENGTH] = array();
        $this->values[self::STATUS] = array();
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
     * Appends value to 'length' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendLength($value) {
        return $this->append(self::LENGTH, $value);
    }

    /**
     * Clears 'length' list
     *
     * @return null
     */
    public function clearLength() {
        return $this->clear(self::LENGTH);
    }

    /**
     * Returns 'length' list
     *
     * @return int[]
     */
    public function getLength() {
        return $this->get(self::LENGTH);
    }

    /**
     * Returns 'length' iterator
     *
     * @return ArrayIterator
     */
    public function getLengthIterator() {
        return new ArrayIterator($this->get(self::LENGTH));
    }

    /**
     * Returns element from 'length' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getLengthAt($offset) {
        return $this->get(self::LENGTH, $offset);
    }

    /**
     * Returns count of 'length' list
     *
     * @return int
     */
    public function getLengthCount() {
        return $this->count(self::LENGTH);
    }

    /**
     * Appends value to 'status' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendStatus($value) {
        return $this->append(self::STATUS, $value);
    }

    /**
     * Clears 'status' list
     *
     * @return null
     */
    public function clearStatus() {
        return $this->clear(self::STATUS);
    }

    /**
     * Returns 'status' list
     *
     * @return int[]
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Returns 'status' iterator
     *
     * @return ArrayIterator
     */
    public function getStatusIterator() {
        return new ArrayIterator($this->get(self::STATUS));
    }

    /**
     * Returns element from 'status' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getStatusAt($offset) {
        return $this->get(self::STATUS, $offset);
    }

    /**
     * Returns count of 'status' list
     *
     * @return int
     */
    public function getStatusCount() {
        return $this->count(self::STATUS);
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
    const ROUTE = 3;
    const TRAFFIC = 4;
    const LABEL = 1;
    const RET_CODE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ROUTE => array(
            'name' => 'route',
            'required' => false,
            'type' => 'Route',
        ),
        self::TRAFFIC => array(
            'name' => 'traffic',
            'required' => false,
            'type' => 'Traffic',
        ),
        self::LABEL => array(
            'name' => 'label',
            'required' => false,
            'type' => 7,
        ),
        self::RET_CODE => array(
            'name' => 'ret_code',
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
        $this->values[self::ROUTE] = null;
        $this->values[self::TRAFFIC] = null;
        $this->values[self::LABEL] = null;
        $this->values[self::RET_CODE] = null;
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
     * Sets value of 'route' property
     *
     * @param Route $value Property value
     *
     * @return null
     */
    public function setRoute(Route $value) {
        return $this->set(self::ROUTE, $value);
    }

    /**
     * Returns value of 'route' property
     *
     * @return Route
     */
    public function getRoute() {
        return $this->get(self::ROUTE);
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

    /**
     * Sets value of 'label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLabel($value) {
        return $this->set(self::LABEL, $value);
    }

    /**
     * Returns value of 'label' property
     *
     * @return string
     */
    public function getLabel() {
        return $this->get(self::LABEL);
    }

    /**
     * Sets value of 'ret_code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRetCode($value) {
        return $this->set(self::RET_CODE, $value);
    }

    /**
     * Returns value of 'ret_code' property
     *
     * @return int
     */
    public function getRetCode() {
        return $this->get(self::RET_CODE);
    }
}
}

/**
 * Mrtl message
 */
if (!class_exists('Mrtl')) {
class Mrtl extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'repeated' => true,
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
        $this->values[self::CONTENT] = array();
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
}
}
