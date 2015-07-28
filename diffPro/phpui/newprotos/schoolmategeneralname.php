<?php
/**
 * Auto generated from map_schoolmate_generalname.proto.1 at 2015-06-23 14:50:44
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
    const CODE = 1;
    const NAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::NAME] = null;
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
}
}

/**
 * SchoolmateGeneralname message
 */
if (!class_exists('SchoolmateGeneralname')) {
class SchoolmateGeneralname extends ProtobufMessage
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
