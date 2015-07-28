<?php
/**
 * Auto generated from map_openlist.proto.1 at 2015-06-23 14:48:18
 */

/**
 * Style message
 */
if (!class_exists('Style')) {
class Style extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LOGO = 1;
    const URL = 2;
    const CATEGORY = 3;
    const INFOWINDOW_STYLE = 4;
    const ID = 5;
    const DEFAULT_GEOTABLE_ID = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LOGO => array(
            'name' => 'logo',
            'required' => false,
            'type' => 7,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => 7,
        ),
        self::CATEGORY => array(
            'name' => 'category',
            'required' => false,
            'type' => 7,
        ),
        self::INFOWINDOW_STYLE => array(
            'name' => 'infowindow_style',
            'required' => false,
            'type' => 7,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::DEFAULT_GEOTABLE_ID => array(
            'name' => 'default_geotable_id',
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
        $this->values[self::LOGO] = null;
        $this->values[self::URL] = null;
        $this->values[self::CATEGORY] = null;
        $this->values[self::INFOWINDOW_STYLE] = null;
        $this->values[self::ID] = null;
        $this->values[self::DEFAULT_GEOTABLE_ID] = null;
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
     * Sets value of 'category' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCategory($value) {
        return $this->set(self::CATEGORY, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return string
     */
    public function getCategory() {
        return $this->get(self::CATEGORY);
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
}
}

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STATUS = 1;
    const TOTAL = 2;
    const SIZE = 3;
    const CONTENTS = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::SIZE => array(
            'name' => 'size',
            'required' => false,
            'type' => 5,
        ),
        self::CONTENTS => array(
            'name' => 'contents',
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
        $this->values[self::STATUS] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::SIZE] = null;
        $this->values[self::CONTENTS] = array();
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
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus() {
        return $this->get(self::STATUS);
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
     * Sets value of 'size' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSize($value) {
        return $this->set(self::SIZE, $value);
    }

    /**
     * Returns value of 'size' property
     *
     * @return int
     */
    public function getSize() {
        return $this->get(self::SIZE);
    }

    /**
     * Appends value to 'contents' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendContents($value) {
        return $this->append(self::CONTENTS, $value);
    }

    /**
     * Clears 'contents' list
     *
     * @return null
     */
    public function clearContents() {
        return $this->clear(self::CONTENTS);
    }

    /**
     * Returns 'contents' list
     *
     * @return string[]
     */
    public function getContents() {
        return $this->get(self::CONTENTS);
    }

    /**
     * Returns 'contents' iterator
     *
     * @return ArrayIterator
     */
    public function getContentsIterator() {
        return new ArrayIterator($this->get(self::CONTENTS));
    }

    /**
     * Returns element from 'contents' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getContentsAt($offset) {
        return $this->get(self::CONTENTS, $offset);
    }

    /**
     * Returns count of 'contents' list
     *
     * @return int
     */
    public function getContentsCount() {
        return $this->count(self::CONTENTS);
    }
}
}

/**
 * Openlist message
 */
if (!class_exists('Openlist')) {
class Openlist extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STYLE = 1;
    const DATA = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STYLE => array(
            'name' => 'style',
            'required' => false,
            'type' => 'Style',
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
            'type' => 'Data',
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
        $this->values[self::STYLE] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'style' property
     *
     * @param Style $value Property value
     *
     * @return null
     */
    public function setStyle(Style $value) {
        return $this->set(self::STYLE, $value);
    }

    /**
     * Returns value of 'style' property
     *
     * @return Style
     */
    public function getStyle() {
        return $this->get(self::STYLE);
    }

    /**
     * Sets value of 'data' property
     *
     * @param Data $value Property value
     *
     * @return null
     */
    public function setData(Data $value) {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return Data
     */
    public function getData() {
        return $this->get(self::DATA);
    }
}
}
