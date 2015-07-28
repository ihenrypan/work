<?php
/**
 * Auto generated from map_traffic_citys.proto.1 at 2015-06-23 14:49:50
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
    const NUM = 2;
    const NAME = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 5,
        ),
        self::NUM => array(
            'name' => 'num',
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
        $this->values[self::NUM] = null;
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
     * Sets value of 'num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNum($value) {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return int
     */
    public function getNum() {
        return $this->get(self::NUM);
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
 * SuggestQuery message
 */
if (!class_exists('SuggestQuery')) {
class SuggestQuery extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const QUERY = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::QUERY => array(
            'name' => 'query',
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
        $this->values[self::QUERY] = null;
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
     * Sets value of 'query' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setQuery($value) {
        return $this->set(self::QUERY, $value);
    }

    /**
     * Returns value of 'query' property
     *
     * @return string
     */
    public function getQuery() {
        return $this->get(self::QUERY);
    }
}
}

/**
 * TrafficCitys message
 */
if (!class_exists('TrafficCitys')) {
class TrafficCitys extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CURRENT_CITY = 1;
    const CONTENTS = 2;
    const SUGGEST_QUERY = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CURRENT_CITY => array(
            'name' => 'current_city',
            'required' => false,
            'type' => 'CurrentCity',
        ),
        self::CONTENTS => array(
            'name' => 'contents',
            'repeated' => true,
            'type' => 'Contents',
        ),
        self::SUGGEST_QUERY => array(
            'name' => 'suggest_query',
            'repeated' => true,
            'type' => 'SuggestQuery',
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
        $this->values[self::CURRENT_CITY] = null;
        $this->values[self::CONTENTS] = array();
        $this->values[self::SUGGEST_QUERY] = array();
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
     * Sets value of 'current_city' property
     *
     * @param CurrentCity $value Property value
     *
     * @return null
     */
    public function setCurrentCity(CurrentCity $value) {
        return $this->set(self::CURRENT_CITY, $value);
    }

    /**
     * Returns value of 'current_city' property
     *
     * @return CurrentCity
     */
    public function getCurrentCity() {
        return $this->get(self::CURRENT_CITY);
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
     * Appends value to 'suggest_query' list
     *
     * @param SuggestQuery $value Value to append
     *
     * @return null
     */
    public function appendSuggestQuery(SuggestQuery $value) {
        return $this->append(self::SUGGEST_QUERY, $value);
    }

    /**
     * Clears 'suggest_query' list
     *
     * @return null
     */
    public function clearSuggestQuery() {
        return $this->clear(self::SUGGEST_QUERY);
    }

    /**
     * Returns 'suggest_query' list
     *
     * @return SuggestQuery[]
     */
    public function getSuggestQuery() {
        return $this->get(self::SUGGEST_QUERY);
    }

    /**
     * Returns 'suggest_query' iterator
     *
     * @return ArrayIterator
     */
    public function getSuggestQueryIterator() {
        return new ArrayIterator($this->get(self::SUGGEST_QUERY));
    }

    /**
     * Returns element from 'suggest_query' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SuggestQuery
     */
    public function getSuggestQueryAt($offset) {
        return $this->get(self::SUGGEST_QUERY, $offset);
    }

    /**
     * Returns count of 'suggest_query' list
     *
     * @return int
     */
    public function getSuggestQueryCount() {
        return $this->count(self::SUGGEST_QUERY);
    }
}
}
require_once 'currentcity.php';