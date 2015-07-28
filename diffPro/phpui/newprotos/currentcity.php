<?php
/**
 * Auto generated from map_current_city.proto at 2015-06-23 14:50:25
 */

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
