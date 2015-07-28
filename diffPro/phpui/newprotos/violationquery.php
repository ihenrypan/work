<?php
/**
 * Auto generated from map_violation_query.proto.1 at 2015-06-23 14:50:14
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
    const SCORE = 1;
    const MONEY = 2;
    const CODE = 3;
    const CONTENT = 4;
    const PLACE = 5;
    const DATE = 6;
    const SOURCE = 7;
    const VIOLATION_CITYID = 8;
    const VIOLATION_CITYNAME = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
        self::CODE => array(
            'name' => 'code',
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
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => 5,
        ),
        self::VIOLATION_CITYID => array(
            'name' => 'violation_cityid',
            'required' => false,
            'type' => 5,
        ),
        self::VIOLATION_CITYNAME => array(
            'name' => 'violation_cityname',
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
        $this->values[self::SCORE] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::CODE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::PLACE] = null;
        $this->values[self::DATE] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::VIOLATION_CITYID] = null;
        $this->values[self::VIOLATION_CITYNAME] = null;
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
     * Sets value of 'source' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSource($value) {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return int
     */
    public function getSource() {
        return $this->get(self::SOURCE);
    }

    /**
     * Sets value of 'violation_cityid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViolationCityid($value) {
        return $this->set(self::VIOLATION_CITYID, $value);
    }

    /**
     * Returns value of 'violation_cityid' property
     *
     * @return int
     */
    public function getViolationCityid() {
        return $this->get(self::VIOLATION_CITYID);
    }

    /**
     * Sets value of 'violation_cityname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setViolationCityname($value) {
        return $this->set(self::VIOLATION_CITYNAME, $value);
    }

    /**
     * Returns value of 'violation_cityname' property
     *
     * @return string
     */
    public function getViolationCityname() {
        return $this->get(self::VIOLATION_CITYNAME);
    }
}
}

/**
 * ViolationQuery message
 */
if (!class_exists('ViolationQuery')) {
class ViolationQuery extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const COUNT = 3;
    const TIME = 4;
    const SOURCE = 5;
    const VIOLATION_CITYID = 6;
    const VIOLATION_CITYNAME = 7;
    const VIOLATION_COUNT = 8;
    const VIOLATION_MONEY = 9;
    const VIOLATION_SCORE = 10;
    const CONTENTS = 11;

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
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => 5,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => 5,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => 5,
        ),
        self::VIOLATION_CITYID => array(
            'name' => 'violation_cityid',
            'required' => false,
            'type' => 5,
        ),
        self::VIOLATION_CITYNAME => array(
            'name' => 'violation_cityname',
            'required' => false,
            'type' => 7,
        ),
        self::VIOLATION_COUNT => array(
            'name' => 'violation_count',
            'required' => false,
            'type' => 5,
        ),
        self::VIOLATION_MONEY => array(
            'name' => 'violation_money',
            'required' => false,
            'type' => 1,
        ),
        self::VIOLATION_SCORE => array(
            'name' => 'violation_score',
            'required' => false,
            'type' => 5,
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
        $this->values[self::COUNT] = null;
        $this->values[self::TIME] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::VIOLATION_CITYID] = null;
        $this->values[self::VIOLATION_CITYNAME] = null;
        $this->values[self::VIOLATION_COUNT] = null;
        $this->values[self::VIOLATION_MONEY] = null;
        $this->values[self::VIOLATION_SCORE] = null;
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

    /**
     * Sets value of 'time' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTime($value) {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return int
     */
    public function getTime() {
        return $this->get(self::TIME);
    }

    /**
     * Sets value of 'source' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSource($value) {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return int
     */
    public function getSource() {
        return $this->get(self::SOURCE);
    }

    /**
     * Sets value of 'violation_cityid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViolationCityid($value) {
        return $this->set(self::VIOLATION_CITYID, $value);
    }

    /**
     * Returns value of 'violation_cityid' property
     *
     * @return int
     */
    public function getViolationCityid() {
        return $this->get(self::VIOLATION_CITYID);
    }

    /**
     * Sets value of 'violation_cityname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setViolationCityname($value) {
        return $this->set(self::VIOLATION_CITYNAME, $value);
    }

    /**
     * Returns value of 'violation_cityname' property
     *
     * @return string
     */
    public function getViolationCityname() {
        return $this->get(self::VIOLATION_CITYNAME);
    }

    /**
     * Sets value of 'violation_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViolationCount($value) {
        return $this->set(self::VIOLATION_COUNT, $value);
    }

    /**
     * Returns value of 'violation_count' property
     *
     * @return int
     */
    public function getViolationCount() {
        return $this->get(self::VIOLATION_COUNT);
    }

    /**
     * Sets value of 'violation_money' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setViolationMoney($value) {
        return $this->set(self::VIOLATION_MONEY, $value);
    }

    /**
     * Returns value of 'violation_money' property
     *
     * @return float
     */
    public function getViolationMoney() {
        return $this->get(self::VIOLATION_MONEY);
    }

    /**
     * Sets value of 'violation_score' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setViolationScore($value) {
        return $this->set(self::VIOLATION_SCORE, $value);
    }

    /**
     * Returns value of 'violation_score' property
     *
     * @return int
     */
    public function getViolationScore() {
        return $this->get(self::VIOLATION_SCORE);
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
