<?php
/**
 * Auto generated from map_openmap.proto.1 at 2015-06-23 14:48:22
 */

/**
 * Info message
 */
if (!class_exists('Info')) {
class Info extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ID = 1;
    const NAME = 2;
    const BRAND = 3;
    const LOGO = 4;
    const DEFAULT_GEOTABLE_ID = 5;
    const CATEGORY_ID = 6;
    const INFOWINDOW_STYLE = 7;
    const SRC = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => 7,
        ),
        self::LOGO => array(
            'name' => 'logo',
            'required' => false,
            'type' => 7,
        ),
        self::DEFAULT_GEOTABLE_ID => array(
            'name' => 'default_geotable_id',
            'required' => false,
            'type' => 7,
        ),
        self::CATEGORY_ID => array(
            'name' => 'category_id',
            'required' => false,
            'type' => 7,
        ),
        self::INFOWINDOW_STYLE => array(
            'name' => 'infowindow_style',
            'required' => false,
            'type' => 7,
        ),
        self::SRC => array(
            'name' => 'src',
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
        $this->values[self::ID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::BRAND] = null;
        $this->values[self::LOGO] = null;
        $this->values[self::DEFAULT_GEOTABLE_ID] = null;
        $this->values[self::CATEGORY_ID] = null;
        $this->values[self::INFOWINDOW_STYLE] = null;
        $this->values[self::SRC] = null;
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
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value) {
        return $this->set(self::BRAND, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand() {
        return $this->get(self::BRAND);
    }

    /**
     * Sets value of 'logo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLogo($value) {
        return $this->set(self::LOGO, $value);
    }

    /**
     * Returns value of 'logo' property
     *
     * @return string
     */
    public function getLogo() {
        return $this->get(self::LOGO);
    }

    /**
     * Sets value of 'default_geotable_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDefaultGeotableId($value) {
        return $this->set(self::DEFAULT_GEOTABLE_ID, $value);
    }

    /**
     * Returns value of 'default_geotable_id' property
     *
     * @return string
     */
    public function getDefaultGeotableId() {
        return $this->get(self::DEFAULT_GEOTABLE_ID);
    }

    /**
     * Sets value of 'category_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCategoryId($value) {
        return $this->set(self::CATEGORY_ID, $value);
    }

    /**
     * Returns value of 'category_id' property
     *
     * @return string
     */
    public function getCategoryId() {
        return $this->get(self::CATEGORY_ID);
    }

    /**
     * Sets value of 'infowindow_style' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInfowindowStyle($value) {
        return $this->set(self::INFOWINDOW_STYLE, $value);
    }

    /**
     * Returns value of 'infowindow_style' property
     *
     * @return string
     */
    public function getInfowindowStyle() {
        return $this->get(self::INFOWINDOW_STYLE);
    }

    /**
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value) {
        return $this->set(self::SRC, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc() {
        return $this->get(self::SRC);
    }
}
}

/**
 * Openmap message
 */
if (!class_exists('Openmap')) {
class Openmap extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INFO = 1;
    const TOTAL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INFO => array(
            'name' => 'info',
            'repeated' => true,
            'type' => 'Info',
        ),
        self::TOTAL => array(
            'name' => 'total',
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
        $this->values[self::INFO] = array();
        $this->values[self::TOTAL] = null;
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
     * Appends value to 'info' list
     *
     * @param Info $value Value to append
     *
     * @return null
     */
    public function appendInfo(Info $value) {
        return $this->append(self::INFO, $value);
    }

    /**
     * Clears 'info' list
     *
     * @return null
     */
    public function clearInfo() {
        return $this->clear(self::INFO);
    }

    /**
     * Returns 'info' list
     *
     * @return Info[]
     */
    public function getInfo() {
        return $this->get(self::INFO);
    }

    /**
     * Returns 'info' iterator
     *
     * @return ArrayIterator
     */
    public function getInfoIterator() {
        return new ArrayIterator($this->get(self::INFO));
    }

    /**
     * Returns element from 'info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Info
     */
    public function getInfoAt($offset) {
        return $this->get(self::INFO, $offset);
    }

    /**
     * Returns count of 'info' list
     *
     * @return int
     */
    public function getInfoCount() {
        return $this->count(self::INFO);
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
}
}
