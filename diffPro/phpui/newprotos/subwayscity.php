<?php
/**
 * Auto generated from map_subways_city.proto.1 at 2015-06-23 14:48:59
 */

/**
 * Cities message
 */
if (!class_exists('Cities')) {
class Cities extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CN_NAME = 1;
    const CODE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CN_NAME => array(
            'name' => 'cn_name',
            'required' => false,
            'type' => 7,
        ),
        self::CODE => array(
            'name' => 'code',
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
        $this->values[self::CN_NAME] = null;
        $this->values[self::CODE] = null;
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
     * Sets value of 'cn_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCnName($value) {
        return $this->set(self::CN_NAME, $value);
    }

    /**
     * Returns value of 'cn_name' property
     *
     * @return string
     */
    public function getCnName() {
        return $this->get(self::CN_NAME);
    }

    /**
     * Sets value of 'code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value) {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return string
     */
    public function getCode() {
        return $this->get(self::CODE);
    }
}
}

/**
 * SubwaysCity message
 */
if (!class_exists('SubwaysCity')) {
class SubwaysCity extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITIES = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITIES => array(
            'name' => 'cities',
            'repeated' => true,
            'type' => 'Cities',
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
        $this->values[self::CITIES] = array();
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
     * Appends value to 'cities' list
     *
     * @param Cities $value Value to append
     *
     * @return null
     */
    public function appendCities(Cities $value) {
        return $this->append(self::CITIES, $value);
    }

    /**
     * Clears 'cities' list
     *
     * @return null
     */
    public function clearCities() {
        return $this->clear(self::CITIES);
    }

    /**
     * Returns 'cities' list
     *
     * @return Cities[]
     */
    public function getCities() {
        return $this->get(self::CITIES);
    }

    /**
     * Returns 'cities' iterator
     *
     * @return ArrayIterator
     */
    public function getCitiesIterator() {
        return new ArrayIterator($this->get(self::CITIES));
    }

    /**
     * Returns element from 'cities' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Cities
     */
    public function getCitiesAt($offset) {
        return $this->get(self::CITIES, $offset);
    }

    /**
     * Returns count of 'cities' list
     *
     * @return int
     */
    public function getCitiesCount() {
        return $this->count(self::CITIES);
    }
}
}
