<?php
/**
 * Auto generated from map_violationhistory.proto.1 at 2015-07-24 13:15:27
 */

/**
 * Lists message
 */
if (!class_exists('Lists')) {
class Lists extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITY = 1;
    const SCORE = 2;
    const MONEY = 3;
    const CONTENT = 4;
    const PLACE = 5;
    const DATE = 6;
    const RECORDID = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => 5,
        ),
        self::MONEY => array(
            'name' => 'money',
            'required' => false,
            'type' => 5,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::PLACE => array(
            'name' => 'place',
            'required' => false,
            'type' => 7,
        ),
        self::DATE => array(
            'name' => 'date',
            'required' => false,
            'type' => 7,
        ),
        self::RECORDID => array(
            'name' => 'recordId',
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
        $this->values[self::CITY] = null;
        $this->values[self::SCORE] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::PLACE] = null;
        $this->values[self::DATE] = null;
        $this->values[self::RECORDID] = null;
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
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value) {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity() {
        return $this->get(self::CITY);
    }

    /**
     * Sets value of 'score' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setScore($value) {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return int
     */
    public function getScore() {
        return $this->get(self::SCORE);
    }

    /**
     * Sets value of 'money' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMoney($value) {
        return $this->set(self::MONEY, $value);
    }

    /**
     * Returns value of 'money' property
     *
     * @return int
     */
    public function getMoney() {
        return $this->get(self::MONEY);
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
     * Sets value of 'date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDate($value) {
        return $this->set(self::DATE, $value);
    }

    /**
     * Returns value of 'date' property
     *
     * @return string
     */
    public function getDate() {
        return $this->get(self::DATE);
    }

    /**
     * Sets value of 'recordId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecordId($value) {
        return $this->set(self::RECORDID, $value);
    }

    /**
     * Returns value of 'recordId' property
     *
     * @return string
     */
    public function getRecordId() {
        return $this->get(self::RECORDID);
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
    const REMAINDERCOUNT = 1;
    const LISTS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::REMAINDERCOUNT => array(
            'name' => 'remainderCount',
            'required' => false,
            'type' => 5,
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
        $this->values[self::REMAINDERCOUNT] = null;
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
     * Sets value of 'remainderCount' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRemainderCount($value) {
        return $this->set(self::REMAINDERCOUNT, $value);
    }

    /**
     * Returns value of 'remainderCount' property
     *
     * @return int
     */
    public function getRemainderCount() {
        return $this->get(self::REMAINDERCOUNT);
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
 * Violationhistory message
 */
if (!class_exists('Violationhistory')) {
class Violationhistory extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const MSG = 2;
    const DATA = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => 7,
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
        $this->values[self::ERROR] = null;
        $this->values[self::MSG] = null;
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
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value) {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg() {
        return $this->get(self::MSG);
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
