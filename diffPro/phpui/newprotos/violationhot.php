<?php
/**
 * Auto generated from map_violation_hot.proto.1 at 2015-06-23 14:50:08
 */

/**
 * Areas message
 */
if (!class_exists('Areas')) {
class Areas extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const AREA_ID = 1;
    const NAME = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::AREA_ID => array(
            'name' => 'area_id',
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
        $this->values[self::AREA_ID] = null;
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
     * Sets value of 'area_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAreaId($value) {
        return $this->set(self::AREA_ID, $value);
    }

    /**
     * Returns value of 'area_id' property
     *
     * @return int
     */
    public function getAreaId() {
        return $this->get(self::AREA_ID);
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
 * Lists message
 */
if (!class_exists('Lists')) {
class Lists extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ROW_ID = 1;
    const NUMBER = 2;
    const PLACE = 3;
    const CONTENT = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ROW_ID => array(
            'name' => 'row_id',
            'required' => false,
            'type' => 5,
        ),
        self::NUMBER => array(
            'name' => 'number',
            'required' => false,
            'type' => 5,
        ),
        self::PLACE => array(
            'name' => 'place',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
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
        $this->values[self::ROW_ID] = null;
        $this->values[self::NUMBER] = null;
        $this->values[self::PLACE] = null;
        $this->values[self::CONTENT] = null;
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
     * Sets value of 'row_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRowId($value) {
        return $this->set(self::ROW_ID, $value);
    }

    /**
     * Returns value of 'row_id' property
     *
     * @return int
     */
    public function getRowId() {
        return $this->get(self::ROW_ID);
    }

    /**
     * Sets value of 'number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNumber($value) {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'number' property
     *
     * @return int
     */
    public function getNumber() {
        return $this->get(self::NUMBER);
    }

    /**
     * Sets value of 'place' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPlace($value) {
        return $this->set(self::PLACE, $value);
    }

    /**
     * Returns value of 'place' property
     *
     * @return string
     */
    public function getPlace() {
        return $this->get(self::PLACE);
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }
}
}

/**
 * Contents message
 */
if (!class_exists('Contents')) {
class Contents extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const AREAS = 1;
    const LISTS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::AREAS => array(
            'name' => 'areas',
            'repeated' => true,
            'type' => 'Areas',
        ),
        self::LISTS => array(
            'name' => 'lists',
            'repeated' => true,
            'type' => 'Lists',
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
        $this->values[self::AREAS] = array();
        $this->values[self::LISTS] = array();
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
     * Appends value to 'areas' list
     *
     * @param Areas $value Value to append
     *
     * @return null
     */
    public function appendAreas(Areas $value) {
        return $this->append(self::AREAS, $value);
    }

    /**
     * Clears 'areas' list
     *
     * @return null
     */
    public function clearAreas() {
        return $this->clear(self::AREAS);
    }

    /**
     * Returns 'areas' list
     *
     * @return Areas[]
     */
    public function getAreas() {
        return $this->get(self::AREAS);
    }

    /**
     * Returns 'areas' iterator
     *
     * @return ArrayIterator
     */
    public function getAreasIterator() {
        return new ArrayIterator($this->get(self::AREAS));
    }

    /**
     * Returns element from 'areas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Areas
     */
    public function getAreasAt($offset) {
        return $this->get(self::AREAS, $offset);
    }

    /**
     * Returns count of 'areas' list
     *
     * @return int
     */
    public function getAreasCount() {
        return $this->count(self::AREAS);
    }

    /**
     * Appends value to 'lists' list
     *
     * @param Lists $value Value to append
     *
     * @return null
     */
    public function appendLists(Lists $value) {
        return $this->append(self::LISTS, $value);
    }

    /**
     * Clears 'lists' list
     *
     * @return null
     */
    public function clearLists() {
        return $this->clear(self::LISTS);
    }

    /**
     * Returns 'lists' list
     *
     * @return Lists[]
     */
    public function getLists() {
        return $this->get(self::LISTS);
    }

    /**
     * Returns 'lists' iterator
     *
     * @return ArrayIterator
     */
    public function getListsIterator() {
        return new ArrayIterator($this->get(self::LISTS));
    }

    /**
     * Returns element from 'lists' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Lists
     */
    public function getListsAt($offset) {
        return $this->get(self::LISTS, $offset);
    }

    /**
     * Returns count of 'lists' list
     *
     * @return int
     */
    public function getListsCount() {
        return $this->count(self::LISTS);
    }
}
}

/**
 * ViolationHot message
 */
if (!class_exists('ViolationHot')) {
class ViolationHot extends ProtobufMessage
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
            'type' => 5,
        ),
        self::ERR_MSG => array(
            'name' => 'err_msg',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'required' => false,
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
        $this->values[self::CONTENTS] = null;
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
     * Sets value of 'contents' property
     *
     * @param Contents $value Property value
     *
     * @return null
     */
    public function setContents(Contents $value) {
        return $this->set(self::CONTENTS, $value);
    }

    /**
     * Returns value of 'contents' property
     *
     * @return Contents
     */
    public function getContents() {
        return $this->get(self::CONTENTS);
    }
}
}
