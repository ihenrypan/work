<?php
/**
 * Auto generated from map_schoolmate_coorddata.proto.1 at 2015-06-23 14:50:41
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
    const LOCX = 1;
    const LOCY = 2;
    const CITYID = 3;
    const COUNT = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LOCX => array(
            'name' => 'locx',
            'required' => false,
            'type' => 5,
        ),
        self::LOCY => array(
            'name' => 'locy',
            'required' => false,
            'type' => 5,
        ),
        self::CITYID => array(
            'name' => 'cityid',
            'required' => false,
            'type' => 5,
        ),
        self::COUNT => array(
            'name' => 'count',
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
        $this->values[self::LOCX] = null;
        $this->values[self::LOCY] = null;
        $this->values[self::CITYID] = null;
        $this->values[self::COUNT] = null;
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
     * Sets value of 'locx' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLocx($value) {
        return $this->set(self::LOCX, $value);
    }

    /**
     * Returns value of 'locx' property
     *
     * @return int
     */
    public function getLocx() {
        return $this->get(self::LOCX);
    }

    /**
     * Sets value of 'locy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLocy($value) {
        return $this->set(self::LOCY, $value);
    }

    /**
     * Returns value of 'locy' property
     *
     * @return int
     */
    public function getLocy() {
        return $this->get(self::LOCY);
    }

    /**
     * Sets value of 'cityid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCityid($value) {
        return $this->set(self::CITYID, $value);
    }

    /**
     * Returns value of 'cityid' property
     *
     * @return int
     */
    public function getCityid() {
        return $this->get(self::CITYID);
    }

    /**
     * Sets value of 'count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCount($value) {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return int
     */
    public function getCount() {
        return $this->get(self::COUNT);
    }
}
}

/**
 * SchoolmateCoorddata message
 */
if (!class_exists('SchoolmateCoorddata')) {
class SchoolmateCoorddata extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const CONTENTS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERR_NO => array(
            'name' => 'err_no',
            'required' => false,
            'type' => 7,
        ),
        self::ERR_MSG => array(
            'name' => 'err_msg',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
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
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
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
     * Sets value of 'err_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrNo($value) {
        return $this->set(self::ERR_NO, $value);
    }

    /**
     * Returns value of 'err_no' property
     *
     * @return string
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
}
}
