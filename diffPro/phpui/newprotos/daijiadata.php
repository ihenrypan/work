<?php
/**
 * Auto generated from map_daijia_data.proto.1 at 2015-07-14 10:15:57
 */

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DOMICILE = 1;
    const BOOKINGID = 2;
    const STATE = 3;
    const SERVICETIMES = 4;
    const GOBACK = 5;
    const DISTANCE = 6;
    const NAME = 7;
    const DRIVERID = 8;
    const YEAR = 9;
    const RECOMMAND = 10;
    const LONGITUDE = 11;
    const LATITUDE = 12;
    const PICTURESMALL = 13;
    const NEWLEVEL = 14;
    const TIME = 15;
    const ID = 16;
    const SN = 17;
    const REMARK = 18;
    const STATUS = 19;
    const MONEY = 20;
    const LIMITTIME = 21;
    const CODE = 22;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DOMICILE => array(
            'name' => 'domicile',
            'required' => false,
            'type' => 7,
        ),
        self::BOOKINGID => array(
            'name' => 'bookingId',
            'required' => false,
            'type' => 7,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => 7,
        ),
        self::SERVICETIMES => array(
            'name' => 'serviceTimes',
            'required' => false,
            'type' => 7,
        ),
        self::GOBACK => array(
            'name' => 'goback',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVERID => array(
            'name' => 'driverId',
            'required' => false,
            'type' => 7,
        ),
        self::YEAR => array(
            'name' => 'year',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMAND => array(
            'name' => 'recommand',
            'required' => false,
            'type' => 7,
        ),
        self::LONGITUDE => array(
            'name' => 'longitude',
            'required' => false,
            'type' => 7,
        ),
        self::LATITUDE => array(
            'name' => 'latitude',
            'required' => false,
            'type' => 7,
        ),
        self::PICTURESMALL => array(
            'name' => 'pictureSmall',
            'required' => false,
            'type' => 7,
        ),
        self::NEWLEVEL => array(
            'name' => 'newLevel',
            'required' => false,
            'type' => 7,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => 7,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::SN => array(
            'name' => 'sn',
            'required' => false,
            'type' => 7,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => false,
            'type' => 7,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 7,
        ),
        self::MONEY => array(
            'name' => 'money',
            'required' => false,
            'type' => 7,
        ),
        self::LIMITTIME => array(
            'name' => 'limitTime',
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
        $this->values[self::DOMICILE] = null;
        $this->values[self::BOOKINGID] = null;
        $this->values[self::STATE] = null;
        $this->values[self::SERVICETIMES] = null;
        $this->values[self::GOBACK] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::DRIVERID] = null;
        $this->values[self::YEAR] = null;
        $this->values[self::RECOMMAND] = null;
        $this->values[self::LONGITUDE] = null;
        $this->values[self::LATITUDE] = null;
        $this->values[self::PICTURESMALL] = null;
        $this->values[self::NEWLEVEL] = null;
        $this->values[self::TIME] = null;
        $this->values[self::ID] = null;
        $this->values[self::SN] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::LIMITTIME] = null;
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
     * Sets value of 'domicile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDomicile($value) {
        return $this->set(self::DOMICILE, $value);
    }

    /**
     * Returns value of 'domicile' property
     *
     * @return string
     */
    public function getDomicile() {
        return $this->get(self::DOMICILE);
    }

    /**
     * Sets value of 'bookingId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBookingId($value) {
        return $this->set(self::BOOKINGID, $value);
    }

    /**
     * Returns value of 'bookingId' property
     *
     * @return string
     */
    public function getBookingId() {
        return $this->get(self::BOOKINGID);
    }

    /**
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value) {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState() {
        return $this->get(self::STATE);
    }

    /**
     * Sets value of 'serviceTimes' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServiceTimes($value) {
        return $this->set(self::SERVICETIMES, $value);
    }

    /**
     * Returns value of 'serviceTimes' property
     *
     * @return string
     */
    public function getServiceTimes() {
        return $this->get(self::SERVICETIMES);
    }

    /**
     * Sets value of 'goback' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGoback($value) {
        return $this->set(self::GOBACK, $value);
    }

    /**
     * Returns value of 'goback' property
     *
     * @return string
     */
    public function getGoback() {
        return $this->get(self::GOBACK);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return string
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
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
     * Sets value of 'driverId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDriverId($value) {
        return $this->set(self::DRIVERID, $value);
    }

    /**
     * Returns value of 'driverId' property
     *
     * @return string
     */
    public function getDriverId() {
        return $this->get(self::DRIVERID);
    }

    /**
     * Sets value of 'year' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setYear($value) {
        return $this->set(self::YEAR, $value);
    }

    /**
     * Returns value of 'year' property
     *
     * @return string
     */
    public function getYear() {
        return $this->get(self::YEAR);
    }

    /**
     * Sets value of 'recommand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommand($value) {
        return $this->set(self::RECOMMAND, $value);
    }

    /**
     * Returns value of 'recommand' property
     *
     * @return string
     */
    public function getRecommand() {
        return $this->get(self::RECOMMAND);
    }

    /**
     * Sets value of 'longitude' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLongitude($value) {
        return $this->set(self::LONGITUDE, $value);
    }

    /**
     * Returns value of 'longitude' property
     *
     * @return string
     */
    public function getLongitude() {
        return $this->get(self::LONGITUDE);
    }

    /**
     * Sets value of 'latitude' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLatitude($value) {
        return $this->set(self::LATITUDE, $value);
    }

    /**
     * Returns value of 'latitude' property
     *
     * @return string
     */
    public function getLatitude() {
        return $this->get(self::LATITUDE);
    }

    /**
     * Sets value of 'pictureSmall' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPictureSmall($value) {
        return $this->set(self::PICTURESMALL, $value);
    }

    /**
     * Returns value of 'pictureSmall' property
     *
     * @return string
     */
    public function getPictureSmall() {
        return $this->get(self::PICTURESMALL);
    }

    /**
     * Sets value of 'newLevel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewLevel($value) {
        return $this->set(self::NEWLEVEL, $value);
    }

    /**
     * Returns value of 'newLevel' property
     *
     * @return string
     */
    public function getNewLevel() {
        return $this->get(self::NEWLEVEL);
    }

    /**
     * Sets value of 'time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTime($value) {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return string
     */
    public function getTime() {
        return $this->get(self::TIME);
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
     * Sets value of 'sn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSn($value) {
        return $this->set(self::SN, $value);
    }

    /**
     * Returns value of 'sn' property
     *
     * @return string
     */
    public function getSn() {
        return $this->get(self::SN);
    }

    /**
     * Sets value of 'remark' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRemark($value) {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return string
     */
    public function getRemark() {
        return $this->get(self::REMARK);
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return string
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Sets value of 'money' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMoney($value) {
        return $this->set(self::MONEY, $value);
    }

    /**
     * Returns value of 'money' property
     *
     * @return string
     */
    public function getMoney() {
        return $this->get(self::MONEY);
    }

    /**
     * Sets value of 'limitTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLimitTime($value) {
        return $this->set(self::LIMITTIME, $value);
    }

    /**
     * Returns value of 'limitTime' property
     *
     * @return string
     */
    public function getLimitTime() {
        return $this->get(self::LIMITTIME);
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
 * DaijiaData message
 */
if (!class_exists('DaijiaData')) {
class DaijiaData extends ProtobufMessage
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
            'repeated' => true,
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
        $this->values[self::DATA] = array();
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
     * Appends value to 'data' list
     *
     * @param Data $value Value to append
     *
     * @return null
     */
    public function appendData(Data $value) {
        return $this->append(self::DATA, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData() {
        return $this->clear(self::DATA);
    }

    /**
     * Returns 'data' list
     *
     * @return Data[]
     */
    public function getData() {
        return $this->get(self::DATA);
    }

    /**
     * Returns 'data' iterator
     *
     * @return ArrayIterator
     */
    public function getDataIterator() {
        return new ArrayIterator($this->get(self::DATA));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Data
     */
    public function getDataAt($offset) {
        return $this->get(self::DATA, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount() {
        return $this->count(self::DATA);
    }
}
}
