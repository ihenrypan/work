<?php
/**
 * Auto generated from map_walk_pano.proto.1 at 2015-06-23 14:50:22
 */

/**
 * Link message
 */
if (!class_exists('Link')) {
class Link extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PID = 1;
    const RX = 2;
    const RY = 3;
    const X = 4;
    const Y = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PID => array(
            'name' => 'pid',
            'required' => false,
            'type' => 7,
        ),
        self::RX => array(
            'name' => 'rx',
            'required' => false,
            'type' => 5,
        ),
        self::RY => array(
            'name' => 'ry',
            'required' => false,
            'type' => 5,
        ),
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 5,
        ),
        self::Y => array(
            'name' => 'y',
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
        $this->values[self::PID] = null;
        $this->values[self::RX] = null;
        $this->values[self::RY] = null;
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
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
     * Sets value of 'pid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPid($value) {
        return $this->set(self::PID, $value);
    }

    /**
     * Returns value of 'pid' property
     *
     * @return string
     */
    public function getPid() {
        return $this->get(self::PID);
    }

    /**
     * Sets value of 'rx' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRx($value) {
        return $this->set(self::RX, $value);
    }

    /**
     * Returns value of 'rx' property
     *
     * @return int
     */
    public function getRx() {
        return $this->get(self::RX);
    }

    /**
     * Sets value of 'ry' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRy($value) {
        return $this->set(self::RY, $value);
    }

    /**
     * Returns value of 'ry' property
     *
     * @return int
     */
    public function getRy() {
        return $this->get(self::RY);
    }

    /**
     * Sets value of 'x' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return int
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return int
     */
    public function getY() {
        return $this->get(self::Y);
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
    const LINK = 1;
    const LINK_ID = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINK => array(
            'name' => 'link',
            'repeated' => true,
            'type' => 'Link',
        ),
        self::LINK_ID => array(
            'name' => 'link_id',
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
        $this->values[self::LINK] = array();
        $this->values[self::LINK_ID] = null;
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
     * Appends value to 'link' list
     *
     * @param Link $value Value to append
     *
     * @return null
     */
    public function appendLink(Link $value) {
        return $this->append(self::LINK, $value);
    }

    /**
     * Clears 'link' list
     *
     * @return null
     */
    public function clearLink() {
        return $this->clear(self::LINK);
    }

    /**
     * Returns 'link' list
     *
     * @return Link[]
     */
    public function getLink() {
        return $this->get(self::LINK);
    }

    /**
     * Returns 'link' iterator
     *
     * @return ArrayIterator
     */
    public function getLinkIterator() {
        return new ArrayIterator($this->get(self::LINK));
    }

    /**
     * Returns element from 'link' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Link
     */
    public function getLinkAt($offset) {
        return $this->get(self::LINK, $offset);
    }

    /**
     * Returns count of 'link' list
     *
     * @return int
     */
    public function getLinkCount() {
        return $this->count(self::LINK);
    }

    /**
     * Sets value of 'link_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkId($value) {
        return $this->set(self::LINK_ID, $value);
    }

    /**
     * Returns value of 'link_id' property
     *
     * @return string
     */
    public function getLinkId() {
        return $this->get(self::LINK_ID);
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
    const ERROR = 1;
    const HAS_PANO = 2;
    const TYPE = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 6,
        ),
        self::HAS_PANO => array(
            'name' => 'has_pano',
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
        $this->values[self::HAS_PANO] = null;
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
     * Sets value of 'has_pano' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setHasPano($value) {
        return $this->set(self::HAS_PANO, $value);
    }

    /**
     * Returns value of 'has_pano' property
     *
     * @return int
     */
    public function getHasPano() {
        return $this->get(self::HAS_PANO);
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
 * WalkPano message
 */
if (!class_exists('WalkPano')) {
class WalkPano extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LINKS = 1;
    const OPTION = 3;
    const JPEG = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LINKS => array(
            'name' => 'links',
            'repeated' => true,
            'type' => 'Links',
        ),
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::JPEG => array(
            'name' => 'jpeg',
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
        $this->values[self::LINKS] = array();
        $this->values[self::OPTION] = null;
        $this->values[self::JPEG] = null;
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
     * Sets value of 'jpeg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJpeg($value) {
        return $this->set(self::JPEG, $value);
    }

    /**
     * Returns value of 'jpeg' property
     *
     * @return string
     */
    public function getJpeg() {
        return $this->get(self::JPEG);
    }
}
}
