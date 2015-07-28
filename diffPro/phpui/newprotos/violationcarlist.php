<?php
/**
 * Auto generated from map_violation_carlist.proto.1 at 2015-06-23 14:49:56
 */

/**
 * Contents message
 */
if (!class_exists('Contents')) {
class Contents extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LOGO = 1;
    const BRAND = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LOGO => array(
            'name' => 'logo',
            'required' => false,
            'type' => 7,
        ),
        self::BRAND => array(
            'name' => 'brand',
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
        $this->values[self::BRAND] = null;
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
}
}

/**
 * ViolationCarlist message
 */
if (!class_exists('ViolationCarlist')) {
class ViolationCarlist extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENTS = 5;
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const BRAND_COUNT = 3;
    const HEAD = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
        ),
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
        self::BRAND_COUNT => array(
            'name' => 'brand_count',
            'required' => false,
            'type' => 7,
        ),
        self::HEAD => array(
            'name' => 'head',
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
        $this->values[self::CONTENTS] = array();
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
        $this->values[self::BRAND_COUNT] = null;
        $this->values[self::HEAD] = null;
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
     * Appends value to 'contents' list
     *
     * @param Contents $value Value to append
     *
     * @return null
     */
    public function appendContents(Contents $value) {
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
     * @return Contents[]
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
     * @return Contents
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
     * Sets value of 'brand_count' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrandCount($value) {
        return $this->set(self::BRAND_COUNT, $value);
    }

    /**
     * Returns value of 'brand_count' property
     *
     * @return string
     */
    public function getBrandCount() {
        return $this->get(self::BRAND_COUNT);
    }

    /**
     * Sets value of 'head' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHead($value) {
        return $this->set(self::HEAD, $value);
    }

    /**
     * Returns value of 'head' property
     *
     * @return string
     */
    public function getHead() {
        return $this->get(self::HEAD);
    }
}
}
