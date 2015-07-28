<?php
/**
 * Auto generated from map_violation_cars.proto.1 at 2015-06-23 14:50:01
 */

/**
 * Regions message
 */
if (!class_exists('Regions')) {
class Regions extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;
    const CITY = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::CITY => array(
            'name' => 'city',
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
        $this->values[self::NAME] = null;
        $this->values[self::CITY] = null;
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
     * Sets value of 'city' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCity($value) {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return int
     */
    public function getCity() {
        return $this->get(self::CITY);
    }
}
}

/**
 * Cars message
 */
if (!class_exists('Cars')) {
class Cars extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ID = 1;
    const CITY = 2;
    const PLATE = 3;
    const ENGINE = 4;
    const FRAME = 5;
    const REGIST = 6;
    const GROUP = 7;
    const V_COUNT = 8;
    const V_MONEY = 9;
    const V_SCORE = 10;
    const BRAND = 11;
    const IS_LIMIT = 12;
    const REGIONS = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 5,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 5,
        ),
        self::PLATE => array(
            'name' => 'plate',
            'required' => false,
            'type' => 7,
        ),
        self::ENGINE => array(
            'name' => 'engine',
            'required' => false,
            'type' => 7,
        ),
        self::FRAME => array(
            'name' => 'frame',
            'required' => false,
            'type' => 7,
        ),
        self::REGIST => array(
            'name' => 'regist',
            'required' => false,
            'type' => 7,
        ),
        self::GROUP => array(
            'name' => 'group',
            'required' => false,
            'type' => 7,
        ),
        self::V_COUNT => array(
            'name' => 'v_count',
            'required' => false,
            'type' => 5,
        ),
        self::V_MONEY => array(
            'name' => 'v_money',
            'required' => false,
            'type' => 1,
        ),
        self::V_SCORE => array(
            'name' => 'v_score',
            'required' => false,
            'type' => 5,
        ),
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => 7,
        ),
        self::IS_LIMIT => array(
            'name' => 'is_limit',
            'required' => false,
            'type' => 5,
        ),
        self::REGIONS => array(
            'name' => 'regions',
            'repeated' => true,
            'type' => 'Regions',
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
        $this->values[self::CITY] = null;
        $this->values[self::PLATE] = null;
        $this->values[self::ENGINE] = null;
        $this->values[self::FRAME] = null;
        $this->values[self::REGIST] = null;
        $this->values[self::GROUP] = null;
        $this->values[self::V_COUNT] = null;
        $this->values[self::V_MONEY] = null;
        $this->values[self::V_SCORE] = null;
        $this->values[self::BRAND] = null;
        $this->values[self::IS_LIMIT] = null;
        $this->values[self::REGIONS] = array();
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
     * @param int $value Property value
     *
     * @return null
     */
    public function setId($value) {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return int
     */
    public function getId() {
        return $this->get(self::ID);
    }

    /**
     * Sets value of 'city' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCity($value) {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return int
     */
    public function getCity() {
        return $this->get(self::CITY);
    }

    /**
     * Sets value of 'plate' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPlate($value) {
        return $this->set(self::PLATE, $value);
    }

    /**
     * Returns value of 'plate' property
     *
     * @return string
     */
    public function getPlate() {
        return $this->get(self::PLATE);
    }

    /**
     * Sets value of 'engine' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEngine($value) {
        return $this->set(self::ENGINE, $value);
    }

    /**
     * Returns value of 'engine' property
     *
     * @return string
     */
    public function getEngine() {
        return $this->get(self::ENGINE);
    }

    /**
     * Sets value of 'frame' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrame($value) {
        return $this->set(self::FRAME, $value);
    }

    /**
     * Returns value of 'frame' property
     *
     * @return string
     */
    public function getFrame() {
        return $this->get(self::FRAME);
    }

    /**
     * Sets value of 'regist' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRegist($value) {
        return $this->set(self::REGIST, $value);
    }

    /**
     * Returns value of 'regist' property
     *
     * @return string
     */
    public function getRegist() {
        return $this->get(self::REGIST);
    }

    /**
     * Sets value of 'group' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGroup($value) {
        return $this->set(self::GROUP, $value);
    }

    /**
     * Returns value of 'group' property
     *
     * @return string
     */
    public function getGroup() {
        return $this->get(self::GROUP);
    }

    /**
     * Sets value of 'v_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVCount($value) {
        return $this->set(self::V_COUNT, $value);
    }

    /**
     * Returns value of 'v_count' property
     *
     * @return int
     */
    public function getVCount() {
        return $this->get(self::V_COUNT);
    }

    /**
     * Sets value of 'v_money' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setVMoney($value) {
        return $this->set(self::V_MONEY, $value);
    }

    /**
     * Returns value of 'v_money' property
     *
     * @return float
     */
    public function getVMoney() {
        return $this->get(self::V_MONEY);
    }

    /**
     * Sets value of 'v_score' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVScore($value) {
        return $this->set(self::V_SCORE, $value);
    }

    /**
     * Returns value of 'v_score' property
     *
     * @return int
     */
    public function getVScore() {
        return $this->get(self::V_SCORE);
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
     * Sets value of 'is_limit' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsLimit($value) {
        return $this->set(self::IS_LIMIT, $value);
    }

    /**
     * Returns value of 'is_limit' property
     *
     * @return int
     */
    public function getIsLimit() {
        return $this->get(self::IS_LIMIT);
    }

    /**
     * Appends value to 'regions' list
     *
     * @param Regions $value Value to append
     *
     * @return null
     */
    public function appendRegions(Regions $value) {
        return $this->append(self::REGIONS, $value);
    }

    /**
     * Clears 'regions' list
     *
     * @return null
     */
    public function clearRegions() {
        return $this->clear(self::REGIONS);
    }

    /**
     * Returns 'regions' list
     *
     * @return Regions[]
     */
    public function getRegions() {
        return $this->get(self::REGIONS);
    }

    /**
     * Returns 'regions' iterator
     *
     * @return ArrayIterator
     */
    public function getRegionsIterator() {
        return new ArrayIterator($this->get(self::REGIONS));
    }

    /**
     * Returns element from 'regions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Regions
     */
    public function getRegionsAt($offset) {
        return $this->get(self::REGIONS, $offset);
    }

    /**
     * Returns count of 'regions' list
     *
     * @return int
     */
    public function getRegionsCount() {
        return $this->count(self::REGIONS);
    }
}
}

/**
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CUID = 1;
    const CARS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CUID => array(
            'name' => 'cuid',
            'required' => false,
            'type' => 7,
        ),
        self::CARS => array(
            'name' => 'cars',
            'repeated' => true,
            'type' => 'Cars',
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
        $this->values[self::CUID] = null;
        $this->values[self::CARS] = array();
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
     * Sets value of 'cuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCuid($value) {
        return $this->set(self::CUID, $value);
    }

    /**
     * Returns value of 'cuid' property
     *
     * @return string
     */
    public function getCuid() {
        return $this->get(self::CUID);
    }

    /**
     * Appends value to 'cars' list
     *
     * @param Cars $value Value to append
     *
     * @return null
     */
    public function appendCars(Cars $value) {
        return $this->append(self::CARS, $value);
    }

    /**
     * Clears 'cars' list
     *
     * @return null
     */
    public function clearCars() {
        return $this->clear(self::CARS);
    }

    /**
     * Returns 'cars' list
     *
     * @return Cars[]
     */
    public function getCars() {
        return $this->get(self::CARS);
    }

    /**
     * Returns 'cars' iterator
     *
     * @return ArrayIterator
     */
    public function getCarsIterator() {
        return new ArrayIterator($this->get(self::CARS));
    }

    /**
     * Returns element from 'cars' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Cars
     */
    public function getCarsAt($offset) {
        return $this->get(self::CARS, $offset);
    }

    /**
     * Returns count of 'cars' list
     *
     * @return int
     */
    public function getCarsCount() {
        return $this->count(self::CARS);
    }
}
}

/**
 * ViolationCars message
 */
if (!class_exists('ViolationCars')) {
class ViolationCars extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CONTENT = 3;
    const ERR_NO = 1;
    const ERR_MSG = 2;
    const COUNT = 4;
    const TIME = 5;
    const IS_SUBSCRIBE = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 'Content',
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
        self::IS_SUBSCRIBE => array(
            'name' => 'is_subscribe',
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
        $this->values[self::CONTENT] = null;
        $this->values[self::ERR_NO] = null;
        $this->values[self::ERR_MSG] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::TIME] = null;
        $this->values[self::IS_SUBSCRIBE] = null;
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
     * Sets value of 'content' property
     *
     * @param Content $value Property value
     *
     * @return null
     */
    public function setContent(Content $value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return Content
     */
    public function getContent() {
        return $this->get(self::CONTENT);
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
     * Sets value of 'is_subscribe' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIsSubscribe($value) {
        return $this->set(self::IS_SUBSCRIBE, $value);
    }

    /**
     * Returns value of 'is_subscribe' property
     *
     * @return int
     */
    public function getIsSubscribe() {
        return $this->get(self::IS_SUBSCRIBE);
    }
}
}
