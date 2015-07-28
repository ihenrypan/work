<?php
/**
 * Auto generated from map_daijia_option.proto.1 at 2015-07-17 11:11:58
 */

/**
 * OrderAllStates message
 */
if (!class_exists('OrderAllStates')) {
class OrderAllStates extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ORDERSTATECONTENT = 1;
    const ORDERSTATECODE = 2;
    const ORDERSTATETIMESTAMP = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ORDERSTATECONTENT => array(
            'name' => 'orderStateContent',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATECODE => array(
            'name' => 'orderStateCode',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATETIMESTAMP => array(
            'name' => 'orderStateTimestamp',
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
        $this->values[self::ORDERSTATECONTENT] = null;
        $this->values[self::ORDERSTATECODE] = null;
        $this->values[self::ORDERSTATETIMESTAMP] = null;
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
     * Sets value of 'orderStateContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStateContent($value) {
        return $this->set(self::ORDERSTATECONTENT, $value);
    }

    /**
     * Returns value of 'orderStateContent' property
     *
     * @return string
     */
    public function getOrderStateContent() {
        return $this->get(self::ORDERSTATECONTENT);
    }

    /**
     * Sets value of 'orderStateCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStateCode($value) {
        return $this->set(self::ORDERSTATECODE, $value);
    }

    /**
     * Returns value of 'orderStateCode' property
     *
     * @return string
     */
    public function getOrderStateCode() {
        return $this->get(self::ORDERSTATECODE);
    }

    /**
     * Sets value of 'orderStateTimestamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStateTimestamp($value) {
        return $this->set(self::ORDERSTATETIMESTAMP, $value);
    }

    /**
     * Returns value of 'orderStateTimestamp' property
     *
     * @return string
     */
    public function getOrderStateTimestamp() {
        return $this->get(self::ORDERSTATETIMESTAMP);
    }
}
}

/**
 * Driver message
 */
if (!class_exists('Driver')) {
class Driver extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CANCELTYPE = 1;
    const RECOMMANDBEGINTIME = 2;
    const WAITTIME = 3;
    const STATE = 4;
    const ORDERSTATECODE = 5;
    const CUSTOMERLAT = 6;
    const CUSTOMERLNG = 7;
    const LONGITUDE = 8;
    const LATITUDE = 9;
    const SERVICETIMES = 10;
    const DISTANCE = 11;
    const NAME = 12;
    const DRIVERID = 13;
    const ROLE = 14;
    const YEAR = 15;
    const PICTURESMALL = 16;
    const ORDERID = 17;
    const NEWLEVEL = 18;
    const DOMICILE = 19;
    const ORDERSTATE = 20;
    const RECOMMANDENDTIME = 21;
    const GOBACK = 22;
    const RECOMMAND = 23;
    const TIME = 24;
    const ORDERALLSTATES = 25;
    const PICTURELARGE = 26;
    const PICTUREMIDDLE = 27;
    const PHONE = 28;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CANCELTYPE => array(
            'name' => 'cancelType',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMANDBEGINTIME => array(
            'name' => 'recommandBeginTime',
            'required' => false,
            'type' => 7,
        ),
        self::WAITTIME => array(
            'name' => 'waitTime',
            'required' => false,
            'type' => 7,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATECODE => array(
            'name' => 'orderStateCode',
            'required' => false,
            'type' => 7,
        ),
        self::CUSTOMERLAT => array(
            'name' => 'customerLat',
            'required' => false,
            'type' => 7,
        ),
        self::CUSTOMERLNG => array(
            'name' => 'customerLng',
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
        self::SERVICETIMES => array(
            'name' => 'serviceTimes',
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
        self::ROLE => array(
            'name' => 'role',
            'required' => false,
            'type' => 7,
        ),
        self::YEAR => array(
            'name' => 'year',
            'required' => false,
            'type' => 7,
        ),
        self::PICTURESMALL => array(
            'name' => 'pictureSmall',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERID => array(
            'name' => 'orderId',
            'required' => false,
            'type' => 7,
        ),
        self::NEWLEVEL => array(
            'name' => 'newLevel',
            'required' => false,
            'type' => 7,
        ),
        self::DOMICILE => array(
            'name' => 'domicile',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATE => array(
            'name' => 'orderState',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMANDENDTIME => array(
            'name' => 'recommandEndTime',
            'required' => false,
            'type' => 7,
        ),
        self::GOBACK => array(
            'name' => 'goBack',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMAND => array(
            'name' => 'recommand',
            'required' => false,
            'type' => 7,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERALLSTATES => array(
            'name' => 'orderAllStates',
            'repeated' => true,
            'type' => 'OrderAllStates',
        ),
        self::PICTURELARGE => array(
            'name' => 'pictureLarge',
            'required' => false,
            'type' => 7,
        ),
        self::PICTUREMIDDLE => array(
            'name' => 'pictureMiddle',
            'required' => false,
            'type' => 7,
        ),
        self::PHONE => array(
            'name' => 'phone',
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
        $this->values[self::CANCELTYPE] = null;
        $this->values[self::RECOMMANDBEGINTIME] = null;
        $this->values[self::WAITTIME] = null;
        $this->values[self::STATE] = null;
        $this->values[self::ORDERSTATECODE] = null;
        $this->values[self::CUSTOMERLAT] = null;
        $this->values[self::CUSTOMERLNG] = null;
        $this->values[self::LONGITUDE] = null;
        $this->values[self::LATITUDE] = null;
        $this->values[self::SERVICETIMES] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::DRIVERID] = null;
        $this->values[self::ROLE] = null;
        $this->values[self::YEAR] = null;
        $this->values[self::PICTURESMALL] = null;
        $this->values[self::ORDERID] = null;
        $this->values[self::NEWLEVEL] = null;
        $this->values[self::DOMICILE] = null;
        $this->values[self::ORDERSTATE] = null;
        $this->values[self::RECOMMANDENDTIME] = null;
        $this->values[self::GOBACK] = null;
        $this->values[self::RECOMMAND] = null;
        $this->values[self::TIME] = null;
        $this->values[self::ORDERALLSTATES] = array();
        $this->values[self::PICTURELARGE] = null;
        $this->values[self::PICTUREMIDDLE] = null;
        $this->values[self::PHONE] = null;
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
     * Sets value of 'cancelType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCancelType($value) {
        return $this->set(self::CANCELTYPE, $value);
    }

    /**
     * Returns value of 'cancelType' property
     *
     * @return string
     */
    public function getCancelType() {
        return $this->get(self::CANCELTYPE);
    }

    /**
     * Sets value of 'recommandBeginTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommandBeginTime($value) {
        return $this->set(self::RECOMMANDBEGINTIME, $value);
    }

    /**
     * Returns value of 'recommandBeginTime' property
     *
     * @return string
     */
    public function getRecommandBeginTime() {
        return $this->get(self::RECOMMANDBEGINTIME);
    }

    /**
     * Sets value of 'waitTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaitTime($value) {
        return $this->set(self::WAITTIME, $value);
    }

    /**
     * Returns value of 'waitTime' property
     *
     * @return string
     */
    public function getWaitTime() {
        return $this->get(self::WAITTIME);
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
     * Sets value of 'orderStateCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStateCode($value) {
        return $this->set(self::ORDERSTATECODE, $value);
    }

    /**
     * Returns value of 'orderStateCode' property
     *
     * @return string
     */
    public function getOrderStateCode() {
        return $this->get(self::ORDERSTATECODE);
    }

    /**
     * Sets value of 'customerLat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerLat($value) {
        return $this->set(self::CUSTOMERLAT, $value);
    }

    /**
     * Returns value of 'customerLat' property
     *
     * @return string
     */
    public function getCustomerLat() {
        return $this->get(self::CUSTOMERLAT);
    }

    /**
     * Sets value of 'customerLng' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerLng($value) {
        return $this->set(self::CUSTOMERLNG, $value);
    }

    /**
     * Returns value of 'customerLng' property
     *
     * @return string
     */
    public function getCustomerLng() {
        return $this->get(self::CUSTOMERLNG);
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
     * Sets value of 'role' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRole($value) {
        return $this->set(self::ROLE, $value);
    }

    /**
     * Returns value of 'role' property
     *
     * @return string
     */
    public function getRole() {
        return $this->get(self::ROLE);
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
     * Sets value of 'orderId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderId($value) {
        return $this->set(self::ORDERID, $value);
    }

    /**
     * Returns value of 'orderId' property
     *
     * @return string
     */
    public function getOrderId() {
        return $this->get(self::ORDERID);
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
     * Sets value of 'orderState' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderState($value) {
        return $this->set(self::ORDERSTATE, $value);
    }

    /**
     * Returns value of 'orderState' property
     *
     * @return string
     */
    public function getOrderState() {
        return $this->get(self::ORDERSTATE);
    }

    /**
     * Sets value of 'recommandEndTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommandEndTime($value) {
        return $this->set(self::RECOMMANDENDTIME, $value);
    }

    /**
     * Returns value of 'recommandEndTime' property
     *
     * @return string
     */
    public function getRecommandEndTime() {
        return $this->get(self::RECOMMANDENDTIME);
    }

    /**
     * Sets value of 'goBack' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGoBack($value) {
        return $this->set(self::GOBACK, $value);
    }

    /**
     * Returns value of 'goBack' property
     *
     * @return string
     */
    public function getGoBack() {
        return $this->get(self::GOBACK);
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
     * Appends value to 'orderAllStates' list
     *
     * @param OrderAllStates $value Value to append
     *
     * @return null
     */
    public function appendOrderAllStates(OrderAllStates $value) {
        return $this->append(self::ORDERALLSTATES, $value);
    }

    /**
     * Clears 'orderAllStates' list
     *
     * @return null
     */
    public function clearOrderAllStates() {
        return $this->clear(self::ORDERALLSTATES);
    }

    /**
     * Returns 'orderAllStates' list
     *
     * @return OrderAllStates[]
     */
    public function getOrderAllStates() {
        return $this->get(self::ORDERALLSTATES);
    }

    /**
     * Returns 'orderAllStates' iterator
     *
     * @return ArrayIterator
     */
    public function getOrderAllStatesIterator() {
        return new ArrayIterator($this->get(self::ORDERALLSTATES));
    }

    /**
     * Returns element from 'orderAllStates' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OrderAllStates
     */
    public function getOrderAllStatesAt($offset) {
        return $this->get(self::ORDERALLSTATES, $offset);
    }

    /**
     * Returns count of 'orderAllStates' list
     *
     * @return int
     */
    public function getOrderAllStatesCount() {
        return $this->count(self::ORDERALLSTATES);
    }

    /**
     * Sets value of 'pictureLarge' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPictureLarge($value) {
        return $this->set(self::PICTURELARGE, $value);
    }

    /**
     * Returns value of 'pictureLarge' property
     *
     * @return string
     */
    public function getPictureLarge() {
        return $this->get(self::PICTURELARGE);
    }

    /**
     * Sets value of 'pictureMiddle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPictureMiddle($value) {
        return $this->set(self::PICTUREMIDDLE, $value);
    }

    /**
     * Returns value of 'pictureMiddle' property
     *
     * @return string
     */
    public function getPictureMiddle() {
        return $this->get(self::PICTUREMIDDLE);
    }

    /**
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value) {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone() {
        return $this->get(self::PHONE);
    }
}
}

/**
 * CollectionFee message
 */
if (!class_exists('CollectionFee')) {
class CollectionFee extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const MILEAGEFEE = 1;
    const WAITINGFEE = 2;
    const LONGSUBSIDIES = 3;
    const LONGTIP = 4;
    const STARTPRICE = 5;
    const MILEAGEADDITIONALFEE = 6;
    const TIMEADDITIONALFEE = 7;
    const NIGHTADDITIONALFEE = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::MILEAGEFEE => array(
            'name' => 'mileageFee',
            'required' => false,
            'type' => 7,
        ),
        self::WAITINGFEE => array(
            'name' => 'waitingFee',
            'required' => false,
            'type' => 7,
        ),
        self::LONGSUBSIDIES => array(
            'name' => 'longSubsidies',
            'required' => false,
            'type' => 7,
        ),
        self::LONGTIP => array(
            'name' => 'longTip',
            'required' => false,
            'type' => 7,
        ),
        self::STARTPRICE => array(
            'name' => 'startPrice',
            'required' => false,
            'type' => 7,
        ),
        self::MILEAGEADDITIONALFEE => array(
            'name' => 'mileageAdditionalFee',
            'required' => false,
            'type' => 7,
        ),
        self::TIMEADDITIONALFEE => array(
            'name' => 'timeAdditionalFee',
            'required' => false,
            'type' => 7,
        ),
        self::NIGHTADDITIONALFEE => array(
            'name' => 'nightAdditionalFee',
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
        $this->values[self::MILEAGEFEE] = null;
        $this->values[self::WAITINGFEE] = null;
        $this->values[self::LONGSUBSIDIES] = null;
        $this->values[self::LONGTIP] = null;
        $this->values[self::STARTPRICE] = null;
        $this->values[self::MILEAGEADDITIONALFEE] = null;
        $this->values[self::TIMEADDITIONALFEE] = null;
        $this->values[self::NIGHTADDITIONALFEE] = null;
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
     * Sets value of 'mileageFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMileageFee($value) {
        return $this->set(self::MILEAGEFEE, $value);
    }

    /**
     * Returns value of 'mileageFee' property
     *
     * @return string
     */
    public function getMileageFee() {
        return $this->get(self::MILEAGEFEE);
    }

    /**
     * Sets value of 'waitingFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaitingFee($value) {
        return $this->set(self::WAITINGFEE, $value);
    }

    /**
     * Returns value of 'waitingFee' property
     *
     * @return string
     */
    public function getWaitingFee() {
        return $this->get(self::WAITINGFEE);
    }

    /**
     * Sets value of 'longSubsidies' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLongSubsidies($value) {
        return $this->set(self::LONGSUBSIDIES, $value);
    }

    /**
     * Returns value of 'longSubsidies' property
     *
     * @return string
     */
    public function getLongSubsidies() {
        return $this->get(self::LONGSUBSIDIES);
    }

    /**
     * Sets value of 'longTip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLongTip($value) {
        return $this->set(self::LONGTIP, $value);
    }

    /**
     * Returns value of 'longTip' property
     *
     * @return string
     */
    public function getLongTip() {
        return $this->get(self::LONGTIP);
    }

    /**
     * Sets value of 'startPrice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartPrice($value) {
        return $this->set(self::STARTPRICE, $value);
    }

    /**
     * Returns value of 'startPrice' property
     *
     * @return string
     */
    public function getStartPrice() {
        return $this->get(self::STARTPRICE);
    }

    /**
     * Sets value of 'mileageAdditionalFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMileageAdditionalFee($value) {
        return $this->set(self::MILEAGEADDITIONALFEE, $value);
    }

    /**
     * Returns value of 'mileageAdditionalFee' property
     *
     * @return string
     */
    public function getMileageAdditionalFee() {
        return $this->get(self::MILEAGEADDITIONALFEE);
    }

    /**
     * Sets value of 'timeAdditionalFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeAdditionalFee($value) {
        return $this->set(self::TIMEADDITIONALFEE, $value);
    }

    /**
     * Returns value of 'timeAdditionalFee' property
     *
     * @return string
     */
    public function getTimeAdditionalFee() {
        return $this->get(self::TIMEADDITIONALFEE);
    }

    /**
     * Sets value of 'nightAdditionalFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNightAdditionalFee($value) {
        return $this->set(self::NIGHTADDITIONALFEE, $value);
    }

    /**
     * Returns value of 'nightAdditionalFee' property
     *
     * @return string
     */
    public function getNightAdditionalFee() {
        return $this->get(self::NIGHTADDITIONALFEE);
    }
}
}

/**
 * SettleFee message
 */
if (!class_exists('SettleFee')) {
class SettleFee extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ACCOUNTPAY = 1;
    const COUPONPAY = 2;
    const INCOME = 3;
    const TOTALDISTANCE = 4;
    const CAST = 5;
    const DRIVERTIME = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ACCOUNTPAY => array(
            'name' => 'accountPay',
            'required' => false,
            'type' => 7,
        ),
        self::COUPONPAY => array(
            'name' => 'couponPay',
            'required' => false,
            'type' => 7,
        ),
        self::INCOME => array(
            'name' => 'income',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALDISTANCE => array(
            'name' => 'totalDistance',
            'required' => false,
            'type' => 7,
        ),
        self::CAST => array(
            'name' => 'cast',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVERTIME => array(
            'name' => 'driverTime',
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
        $this->values[self::ACCOUNTPAY] = null;
        $this->values[self::COUPONPAY] = null;
        $this->values[self::INCOME] = null;
        $this->values[self::TOTALDISTANCE] = null;
        $this->values[self::CAST] = null;
        $this->values[self::DRIVERTIME] = null;
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
     * Sets value of 'accountPay' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccountPay($value) {
        return $this->set(self::ACCOUNTPAY, $value);
    }

    /**
     * Returns value of 'accountPay' property
     *
     * @return string
     */
    public function getAccountPay() {
        return $this->get(self::ACCOUNTPAY);
    }

    /**
     * Sets value of 'couponPay' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponPay($value) {
        return $this->set(self::COUPONPAY, $value);
    }

    /**
     * Returns value of 'couponPay' property
     *
     * @return string
     */
    public function getCouponPay() {
        return $this->get(self::COUPONPAY);
    }

    /**
     * Sets value of 'income' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncome($value) {
        return $this->set(self::INCOME, $value);
    }

    /**
     * Returns value of 'income' property
     *
     * @return string
     */
    public function getIncome() {
        return $this->get(self::INCOME);
    }

    /**
     * Sets value of 'totalDistance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalDistance($value) {
        return $this->set(self::TOTALDISTANCE, $value);
    }

    /**
     * Returns value of 'totalDistance' property
     *
     * @return string
     */
    public function getTotalDistance() {
        return $this->get(self::TOTALDISTANCE);
    }

    /**
     * Sets value of 'cast' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCast($value) {
        return $this->set(self::CAST, $value);
    }

    /**
     * Returns value of 'cast' property
     *
     * @return string
     */
    public function getCast() {
        return $this->get(self::CAST);
    }

    /**
     * Sets value of 'driverTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDriverTime($value) {
        return $this->set(self::DRIVERTIME, $value);
    }

    /**
     * Returns value of 'driverTime' property
     *
     * @return string
     */
    public function getDriverTime() {
        return $this->get(self::DRIVERTIME);
    }
}
}

/**
 * OrderList message
 */
if (!class_exists('OrderList')) {
class OrderList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LOCATIONSTART = 1;
    const ISCOMMENT = 2;
    const LOCATIONEND = 3;
    const STARTTIME = 4;
    const INCOME = 5;
    const ORDERID = 6;
    const STATUS = 7;
    const ID = 8;
    const CANCOMMENT = 9;
    const CITYID = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LOCATIONSTART => array(
            'name' => 'locationStart',
            'required' => false,
            'type' => 7,
        ),
        self::ISCOMMENT => array(
            'name' => 'isComment',
            'required' => false,
            'type' => 7,
        ),
        self::LOCATIONEND => array(
            'name' => 'locationEnd',
            'required' => false,
            'type' => 7,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => 7,
        ),
        self::INCOME => array(
            'name' => 'income',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERID => array(
            'name' => 'orderId',
            'required' => false,
            'type' => 7,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 7,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => 7,
        ),
        self::CANCOMMENT => array(
            'name' => 'canComment',
            'required' => false,
            'type' => 7,
        ),
        self::CITYID => array(
            'name' => 'cityId',
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
        $this->values[self::LOCATIONSTART] = null;
        $this->values[self::ISCOMMENT] = null;
        $this->values[self::LOCATIONEND] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::INCOME] = null;
        $this->values[self::ORDERID] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::ID] = null;
        $this->values[self::CANCOMMENT] = null;
        $this->values[self::CITYID] = null;
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
     * Sets value of 'locationStart' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocationStart($value) {
        return $this->set(self::LOCATIONSTART, $value);
    }

    /**
     * Returns value of 'locationStart' property
     *
     * @return string
     */
    public function getLocationStart() {
        return $this->get(self::LOCATIONSTART);
    }

    /**
     * Sets value of 'isComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsComment($value) {
        return $this->set(self::ISCOMMENT, $value);
    }

    /**
     * Returns value of 'isComment' property
     *
     * @return string
     */
    public function getIsComment() {
        return $this->get(self::ISCOMMENT);
    }

    /**
     * Sets value of 'locationEnd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocationEnd($value) {
        return $this->set(self::LOCATIONEND, $value);
    }

    /**
     * Returns value of 'locationEnd' property
     *
     * @return string
     */
    public function getLocationEnd() {
        return $this->get(self::LOCATIONEND);
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::STARTTIME);
    }

    /**
     * Sets value of 'income' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncome($value) {
        return $this->set(self::INCOME, $value);
    }

    /**
     * Returns value of 'income' property
     *
     * @return string
     */
    public function getIncome() {
        return $this->get(self::INCOME);
    }

    /**
     * Sets value of 'orderId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderId($value) {
        return $this->set(self::ORDERID, $value);
    }

    /**
     * Returns value of 'orderId' property
     *
     * @return string
     */
    public function getOrderId() {
        return $this->get(self::ORDERID);
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
     * Sets value of 'canComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCanComment($value) {
        return $this->set(self::CANCOMMENT, $value);
    }

    /**
     * Returns value of 'canComment' property
     *
     * @return string
     */
    public function getCanComment() {
        return $this->get(self::CANCOMMENT);
    }

    /**
     * Sets value of 'cityId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCityId($value) {
        return $this->set(self::CITYID, $value);
    }

    /**
     * Returns value of 'cityId' property
     *
     * @return string
     */
    public function getCityId() {
        return $this->get(self::CITYID);
    }
}
}

/**
 * Memo message
 */
if (!class_exists('Memo')) {
class Memo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const MEMO = 1;
    const TOTAL = 2;
    const LISTS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::MEMO => array(
            'name' => 'memo',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 7,
        ),
        self::LISTS => array(
            'name' => 'lists',
            'repeated' => true,
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
        $this->values[self::MEMO] = null;
        $this->values[self::TOTAL] = null;
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
     * Sets value of 'memo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMemo($value) {
        return $this->set(self::MEMO, $value);
    }

    /**
     * Returns value of 'memo' property
     *
     * @return string
     */
    public function getMemo() {
        return $this->get(self::MEMO);
    }

    /**
     * Sets value of 'total' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotal($value) {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return string
     */
    public function getTotal() {
        return $this->get(self::TOTAL);
    }

    /**
     * Appends value to 'lists' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendLists($value) {
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
     * @return string[]
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
     * @return string
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
 * PriceList message
 */
if (!class_exists('PriceList')) {
class PriceList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DETAIL = 1;
    const TITLE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DETAIL => array(
            'name' => 'detail',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
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
        $this->values[self::DETAIL] = null;
        $this->values[self::TITLE] = null;
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
     * Sets value of 'detail' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetail($value) {
        return $this->set(self::DETAIL, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return string
     */
    public function getDetail() {
        return $this->get(self::DETAIL);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }
}
}

/**
 * Orders message
 */
if (!class_exists('Orders')) {
class Orders extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PHONE = 1;
    const ORDERSTATE = 2;
    const RECOMMANDBEGINTIME = 3;
    const RECOMMANDENDTIME = 4;
    const WAITTIME = 5;
    const STATE = 6;
    const SERVICETIMES = 7;
    const GOBACK = 8;
    const DISTANCE = 9;
    const NAME = 10;
    const DRIVERID = 11;
    const ROLE = 12;
    const YEAR = 13;
    const RECOMMAND = 14;
    const LONGITUDE = 15;
    const LATITUDE = 16;
    const PICTURESMALL = 17;
    const NEWLEVEL = 18;
    const DOMICILE = 19;
    const ORDERSTATECODE = 20;
    const ORDERID = 21;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PHONE => array(
            'name' => 'phone',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATE => array(
            'name' => 'orderState',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMANDBEGINTIME => array(
            'name' => 'recommandBeginTime',
            'required' => false,
            'type' => 7,
        ),
        self::RECOMMANDENDTIME => array(
            'name' => 'recommandEndTime',
            'required' => false,
            'type' => 7,
        ),
        self::WAITTIME => array(
            'name' => 'waitTime',
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
            'name' => 'goBack',
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
        self::ROLE => array(
            'name' => 'role',
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
        self::DOMICILE => array(
            'name' => 'domicile',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERSTATECODE => array(
            'name' => 'orderStateCode',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERID => array(
            'name' => 'orderId',
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
        $this->values[self::PHONE] = null;
        $this->values[self::ORDERSTATE] = null;
        $this->values[self::RECOMMANDBEGINTIME] = null;
        $this->values[self::RECOMMANDENDTIME] = null;
        $this->values[self::WAITTIME] = null;
        $this->values[self::STATE] = null;
        $this->values[self::SERVICETIMES] = null;
        $this->values[self::GOBACK] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::NAME] = null;
        $this->values[self::DRIVERID] = null;
        $this->values[self::ROLE] = null;
        $this->values[self::YEAR] = null;
        $this->values[self::RECOMMAND] = null;
        $this->values[self::LONGITUDE] = null;
        $this->values[self::LATITUDE] = null;
        $this->values[self::PICTURESMALL] = null;
        $this->values[self::NEWLEVEL] = null;
        $this->values[self::DOMICILE] = null;
        $this->values[self::ORDERSTATECODE] = null;
        $this->values[self::ORDERID] = null;
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
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value) {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone() {
        return $this->get(self::PHONE);
    }

    /**
     * Sets value of 'orderState' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderState($value) {
        return $this->set(self::ORDERSTATE, $value);
    }

    /**
     * Returns value of 'orderState' property
     *
     * @return string
     */
    public function getOrderState() {
        return $this->get(self::ORDERSTATE);
    }

    /**
     * Sets value of 'recommandBeginTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommandBeginTime($value) {
        return $this->set(self::RECOMMANDBEGINTIME, $value);
    }

    /**
     * Returns value of 'recommandBeginTime' property
     *
     * @return string
     */
    public function getRecommandBeginTime() {
        return $this->get(self::RECOMMANDBEGINTIME);
    }

    /**
     * Sets value of 'recommandEndTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecommandEndTime($value) {
        return $this->set(self::RECOMMANDENDTIME, $value);
    }

    /**
     * Returns value of 'recommandEndTime' property
     *
     * @return string
     */
    public function getRecommandEndTime() {
        return $this->get(self::RECOMMANDENDTIME);
    }

    /**
     * Sets value of 'waitTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaitTime($value) {
        return $this->set(self::WAITTIME, $value);
    }

    /**
     * Returns value of 'waitTime' property
     *
     * @return string
     */
    public function getWaitTime() {
        return $this->get(self::WAITTIME);
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
     * Sets value of 'goBack' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGoBack($value) {
        return $this->set(self::GOBACK, $value);
    }

    /**
     * Returns value of 'goBack' property
     *
     * @return string
     */
    public function getGoBack() {
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
     * Sets value of 'role' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRole($value) {
        return $this->set(self::ROLE, $value);
    }

    /**
     * Returns value of 'role' property
     *
     * @return string
     */
    public function getRole() {
        return $this->get(self::ROLE);
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
     * Sets value of 'orderStateCode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStateCode($value) {
        return $this->set(self::ORDERSTATECODE, $value);
    }

    /**
     * Returns value of 'orderStateCode' property
     *
     * @return string
     */
    public function getOrderStateCode() {
        return $this->get(self::ORDERSTATECODE);
    }

    /**
     * Sets value of 'orderId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderId($value) {
        return $this->set(self::ORDERID, $value);
    }

    /**
     * Returns value of 'orderId' property
     *
     * @return string
     */
    public function getOrderId() {
        return $this->get(self::ORDERID);
    }
}
}

/**
 * Drivers message
 */
if (!class_exists('Drivers')) {
class Drivers extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BOOKINGID = 1;
    const NUMBER = 2;
    const ORDERS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BOOKINGID => array(
            'name' => 'bookingId',
            'required' => false,
            'type' => 7,
        ),
        self::NUMBER => array(
            'name' => 'number',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERS => array(
            'name' => 'orders',
            'repeated' => true,
            'type' => 'Orders',
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
        $this->values[self::BOOKINGID] = null;
        $this->values[self::NUMBER] = null;
        $this->values[self::ORDERS] = array();
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
     * Sets value of 'number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNumber($value) {
        return $this->set(self::NUMBER, $value);
    }

    /**
     * Returns value of 'number' property
     *
     * @return string
     */
    public function getNumber() {
        return $this->get(self::NUMBER);
    }

    /**
     * Appends value to 'orders' list
     *
     * @param Orders $value Value to append
     *
     * @return null
     */
    public function appendOrders(Orders $value) {
        return $this->append(self::ORDERS, $value);
    }

    /**
     * Clears 'orders' list
     *
     * @return null
     */
    public function clearOrders() {
        return $this->clear(self::ORDERS);
    }

    /**
     * Returns 'orders' list
     *
     * @return Orders[]
     */
    public function getOrders() {
        return $this->get(self::ORDERS);
    }

    /**
     * Returns 'orders' iterator
     *
     * @return ArrayIterator
     */
    public function getOrdersIterator() {
        return new ArrayIterator($this->get(self::ORDERS));
    }

    /**
     * Returns element from 'orders' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Orders
     */
    public function getOrdersAt($offset) {
        return $this->get(self::ORDERS, $offset);
    }

    /**
     * Returns count of 'orders' list
     *
     * @return int
     */
    public function getOrdersCount() {
        return $this->count(self::ORDERS);
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
    const TOKEN = 1;
    const BOUNDPHONE = 2;
    const TOTALPRICE = 3;
    const TOTALDISTANCE = 4;
    const TOTALTIME = 5;
    const STARTPRICE = 6;
    const EXCESSDISTANCE = 7;
    const EXCESSMONEY = 8;
    const COUPONMONEY = 9;
    const BOOKINGID = 10;
    const BOOKINGTYPE = 11;
    const ORDERTIME = 12;
    const TIMEOUT = 13;
    const ETA = 14;
    const TEXT = 15;
    const DRIVERID = 16;
    const POLLINGCOUNT = 17;
    const ORDERID = 18;
    const NEXT = 19;
    const DRIVER = 20;
    const COLLECTIONFEE = 21;
    const SETTLEFEE = 22;
    const INCOME = 23;
    const CAST = 24;
    const COMPLETED = 25;
    const ISAPPRAISE = 26;
    const ISLEVEL = 27;
    const DRIVERTIME = 28;
    const LOCATIONSTART = 29;
    const USERMONEY = 30;
    const CASHCARDBALANCE = 31;
    const ISCOMMENT = 32;
    const STARTTIME = 33;
    const VIP = 34;
    const CASTTYPE = 35;
    const LEVEL = 36;
    const PRICE = 37;
    const COUPON = 38;
    const ORDERCOUNT = 39;
    const TIP = 40;
    const ORDERLIST = 41;
    const MEMO = 42;
    const PRICELIST = 43;
    const CODE = 44;
    const EXPIREAT = 45;
    const CITY = 46;
    const BUTTON = 47;
    const SHAREID = 48;
    const CONTENT = 49;
    const PICTURE = 50;
    const URL = 51;
    const DRIVERS = 52;
    const LOCATIONEND = 53;
    const POLLINGSTATE = 54;
    const BINDID = 55;
    const BONUSNUMBER = 56;
    const PASSWORD = 57;
    const ENTRANCESTATUS = 58;
    const CITYSTATUS = 59;
    const ISNEWCUSTOM = 60;
    const TITLE = 61;
    const SUBTITLE = 62;
    const ICON = 63;
    const EXTRA = 64;
    const HOPLINKS = 65;
    const SN = 66;
    const MONEY = 67;
    const KILOFEE = 68;
    const STATUS = 69;
    const DESC = 70;
    const ENDTIME = 71;
    const DISTANCE = 72;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOKEN => array(
            'name' => 'token',
            'required' => false,
            'type' => 7,
        ),
        self::BOUNDPHONE => array(
            'name' => 'boundPhone',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALPRICE => array(
            'name' => 'totalPrice',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALDISTANCE => array(
            'name' => 'totalDistance',
            'required' => false,
            'type' => 7,
        ),
        self::TOTALTIME => array(
            'name' => 'totalTime',
            'required' => false,
            'type' => 7,
        ),
        self::STARTPRICE => array(
            'name' => 'startPrice',
            'required' => false,
            'type' => 7,
        ),
        self::EXCESSDISTANCE => array(
            'name' => 'excessDistance',
            'required' => false,
            'type' => 7,
        ),
        self::EXCESSMONEY => array(
            'name' => 'excessMoney',
            'required' => false,
            'type' => 7,
        ),
        self::COUPONMONEY => array(
            'name' => 'couponMoney',
            'required' => false,
            'type' => 7,
        ),
        self::BOOKINGID => array(
            'name' => 'bookingId',
            'required' => false,
            'type' => 7,
        ),
        self::BOOKINGTYPE => array(
            'name' => 'bookingType',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERTIME => array(
            'name' => 'orderTime',
            'required' => false,
            'type' => 7,
        ),
        self::TIMEOUT => array(
            'name' => 'timeout',
            'required' => false,
            'type' => 7,
        ),
        self::ETA => array(
            'name' => 'eta',
            'required' => false,
            'type' => 7,
        ),
        self::TEXT => array(
            'name' => 'text',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVERID => array(
            'name' => 'driverId',
            'required' => false,
            'type' => 7,
        ),
        self::POLLINGCOUNT => array(
            'name' => 'pollingCount',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERID => array(
            'name' => 'orderId',
            'required' => false,
            'type' => 7,
        ),
        self::NEXT => array(
            'name' => 'next',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVER => array(
            'name' => 'driver',
            'required' => false,
            'type' => 'Driver',
        ),
        self::COLLECTIONFEE => array(
            'name' => 'collectionFee',
            'required' => false,
            'type' => 'CollectionFee',
        ),
        self::SETTLEFEE => array(
            'name' => 'settleFee',
            'required' => false,
            'type' => 'SettleFee',
        ),
        self::INCOME => array(
            'name' => 'income',
            'required' => false,
            'type' => 7,
        ),
        self::CAST => array(
            'name' => 'cast',
            'required' => false,
            'type' => 7,
        ),
        self::COMPLETED => array(
            'name' => 'completed',
            'required' => false,
            'type' => 7,
        ),
        self::ISAPPRAISE => array(
            'name' => 'isAppraise',
            'required' => false,
            'type' => 7,
        ),
        self::ISLEVEL => array(
            'name' => 'isLevel',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVERTIME => array(
            'name' => 'driverTime',
            'required' => false,
            'type' => 7,
        ),
        self::LOCATIONSTART => array(
            'name' => 'locationStart',
            'required' => false,
            'type' => 7,
        ),
        self::USERMONEY => array(
            'name' => 'userMoney',
            'required' => false,
            'type' => 7,
        ),
        self::CASHCARDBALANCE => array(
            'name' => 'cashCardBalance',
            'required' => false,
            'type' => 7,
        ),
        self::ISCOMMENT => array(
            'name' => 'isComment',
            'required' => false,
            'type' => 7,
        ),
        self::STARTTIME => array(
            'name' => 'startTime',
            'required' => false,
            'type' => 7,
        ),
        self::VIP => array(
            'name' => 'vip',
            'required' => false,
            'type' => 7,
        ),
        self::CASTTYPE => array(
            'name' => 'castType',
            'required' => false,
            'type' => 7,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => 7,
        ),
        self::PRICE => array(
            'name' => 'price',
            'required' => false,
            'type' => 7,
        ),
        self::COUPON => array(
            'name' => 'coupon',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERCOUNT => array(
            'name' => 'orderCount',
            'required' => false,
            'type' => 7,
        ),
        self::TIP => array(
            'name' => 'tip',
            'required' => false,
            'type' => 7,
        ),
        self::ORDERLIST => array(
            'name' => 'orderList',
            'repeated' => true,
            'type' => 'OrderList',
        ),
        self::MEMO => array(
            'name' => 'memo',
            'required' => false,
            'type' => 'Memo',
        ),
        self::PRICELIST => array(
            'name' => 'priceList',
            'repeated' => true,
            'type' => 'PriceList',
        ),
        self::CODE => array(
            'name' => 'code',
            'required' => false,
            'type' => 7,
        ),
        self::EXPIREAT => array(
            'name' => 'expireAt',
            'required' => false,
            'type' => 7,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::BUTTON => array(
            'name' => 'button',
            'required' => false,
            'type' => 7,
        ),
        self::SHAREID => array(
            'name' => 'shareId',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 7,
        ),
        self::PICTURE => array(
            'name' => 'picture',
            'required' => false,
            'type' => 7,
        ),
        self::URL => array(
            'name' => 'url',
            'required' => false,
            'type' => 7,
        ),
        self::DRIVERS => array(
            'name' => 'drivers',
            'repeated' => true,
            'type' => 'Drivers',
        ),
        self::LOCATIONEND => array(
            'name' => 'locationEnd',
            'required' => false,
            'type' => 7,
        ),
        self::POLLINGSTATE => array(
            'name' => 'pollingState',
            'required' => false,
            'type' => 7,
        ),
        self::BINDID => array(
            'name' => 'bindId',
            'required' => false,
            'type' => 7,
        ),
        self::BONUSNUMBER => array(
            'name' => 'bonusNumber',
            'required' => false,
            'type' => 7,
        ),
        self::PASSWORD => array(
            'name' => 'password',
            'required' => false,
            'type' => 7,
        ),
        self::ENTRANCESTATUS => array(
            'name' => 'entranceStatus',
            'required' => false,
            'type' => 7,
        ),
        self::CITYSTATUS => array(
            'name' => 'cityStatus',
            'required' => false,
            'type' => 7,
        ),
        self::ISNEWCUSTOM => array(
            'name' => 'isNewCustom',
            'required' => false,
            'type' => 7,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::SUBTITLE => array(
            'name' => 'subtitle',
            'required' => false,
            'type' => 7,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => 7,
        ),
        self::EXTRA => array(
            'name' => 'extra',
            'required' => false,
            'type' => 7,
        ),
        self::HOPLINKS => array(
            'name' => 'hoplinks',
            'required' => false,
            'type' => 7,
        ),
        self::SN => array(
            'name' => 'sn',
            'required' => false,
            'type' => 7,
        ),
        self::MONEY => array(
            'name' => 'money',
            'required' => false,
            'type' => 7,
        ),
        self::KILOFEE => array(
            'name' => 'kiloFee',
            'required' => false,
            'type' => 7,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 7,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => 7,
        ),
        self::ENDTIME => array(
            'name' => 'endTime',
            'required' => false,
            'type' => 7,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
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
        $this->values[self::TOKEN] = null;
        $this->values[self::BOUNDPHONE] = null;
        $this->values[self::TOTALPRICE] = null;
        $this->values[self::TOTALDISTANCE] = null;
        $this->values[self::TOTALTIME] = null;
        $this->values[self::STARTPRICE] = null;
        $this->values[self::EXCESSDISTANCE] = null;
        $this->values[self::EXCESSMONEY] = null;
        $this->values[self::COUPONMONEY] = null;
        $this->values[self::BOOKINGID] = null;
        $this->values[self::BOOKINGTYPE] = null;
        $this->values[self::ORDERTIME] = null;
        $this->values[self::TIMEOUT] = null;
        $this->values[self::ETA] = null;
        $this->values[self::TEXT] = null;
        $this->values[self::DRIVERID] = null;
        $this->values[self::POLLINGCOUNT] = null;
        $this->values[self::ORDERID] = null;
        $this->values[self::NEXT] = null;
        $this->values[self::DRIVER] = null;
        $this->values[self::COLLECTIONFEE] = null;
        $this->values[self::SETTLEFEE] = null;
        $this->values[self::INCOME] = null;
        $this->values[self::CAST] = null;
        $this->values[self::COMPLETED] = null;
        $this->values[self::ISAPPRAISE] = null;
        $this->values[self::ISLEVEL] = null;
        $this->values[self::DRIVERTIME] = null;
        $this->values[self::LOCATIONSTART] = null;
        $this->values[self::USERMONEY] = null;
        $this->values[self::CASHCARDBALANCE] = null;
        $this->values[self::ISCOMMENT] = null;
        $this->values[self::STARTTIME] = null;
        $this->values[self::VIP] = null;
        $this->values[self::CASTTYPE] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::PRICE] = null;
        $this->values[self::COUPON] = null;
        $this->values[self::ORDERCOUNT] = null;
        $this->values[self::TIP] = null;
        $this->values[self::ORDERLIST] = array();
        $this->values[self::MEMO] = null;
        $this->values[self::PRICELIST] = array();
        $this->values[self::CODE] = null;
        $this->values[self::EXPIREAT] = null;
        $this->values[self::CITY] = null;
        $this->values[self::BUTTON] = null;
        $this->values[self::SHAREID] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::PICTURE] = null;
        $this->values[self::URL] = null;
        $this->values[self::DRIVERS] = array();
        $this->values[self::LOCATIONEND] = null;
        $this->values[self::POLLINGSTATE] = null;
        $this->values[self::BINDID] = null;
        $this->values[self::BONUSNUMBER] = null;
        $this->values[self::PASSWORD] = null;
        $this->values[self::ENTRANCESTATUS] = null;
        $this->values[self::CITYSTATUS] = null;
        $this->values[self::ISNEWCUSTOM] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::SUBTITLE] = null;
        $this->values[self::ICON] = null;
        $this->values[self::EXTRA] = null;
        $this->values[self::HOPLINKS] = null;
        $this->values[self::SN] = null;
        $this->values[self::MONEY] = null;
        $this->values[self::KILOFEE] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::DESC] = null;
        $this->values[self::ENDTIME] = null;
        $this->values[self::DISTANCE] = null;
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
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value) {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken() {
        return $this->get(self::TOKEN);
    }

    /**
     * Sets value of 'boundPhone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBoundPhone($value) {
        return $this->set(self::BOUNDPHONE, $value);
    }

    /**
     * Returns value of 'boundPhone' property
     *
     * @return string
     */
    public function getBoundPhone() {
        return $this->get(self::BOUNDPHONE);
    }

    /**
     * Sets value of 'totalPrice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalPrice($value) {
        return $this->set(self::TOTALPRICE, $value);
    }

    /**
     * Returns value of 'totalPrice' property
     *
     * @return string
     */
    public function getTotalPrice() {
        return $this->get(self::TOTALPRICE);
    }

    /**
     * Sets value of 'totalDistance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalDistance($value) {
        return $this->set(self::TOTALDISTANCE, $value);
    }

    /**
     * Returns value of 'totalDistance' property
     *
     * @return string
     */
    public function getTotalDistance() {
        return $this->get(self::TOTALDISTANCE);
    }

    /**
     * Sets value of 'totalTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalTime($value) {
        return $this->set(self::TOTALTIME, $value);
    }

    /**
     * Returns value of 'totalTime' property
     *
     * @return string
     */
    public function getTotalTime() {
        return $this->get(self::TOTALTIME);
    }

    /**
     * Sets value of 'startPrice' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartPrice($value) {
        return $this->set(self::STARTPRICE, $value);
    }

    /**
     * Returns value of 'startPrice' property
     *
     * @return string
     */
    public function getStartPrice() {
        return $this->get(self::STARTPRICE);
    }

    /**
     * Sets value of 'excessDistance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExcessDistance($value) {
        return $this->set(self::EXCESSDISTANCE, $value);
    }

    /**
     * Returns value of 'excessDistance' property
     *
     * @return string
     */
    public function getExcessDistance() {
        return $this->get(self::EXCESSDISTANCE);
    }

    /**
     * Sets value of 'excessMoney' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExcessMoney($value) {
        return $this->set(self::EXCESSMONEY, $value);
    }

    /**
     * Returns value of 'excessMoney' property
     *
     * @return string
     */
    public function getExcessMoney() {
        return $this->get(self::EXCESSMONEY);
    }

    /**
     * Sets value of 'couponMoney' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponMoney($value) {
        return $this->set(self::COUPONMONEY, $value);
    }

    /**
     * Returns value of 'couponMoney' property
     *
     * @return string
     */
    public function getCouponMoney() {
        return $this->get(self::COUPONMONEY);
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
     * Sets value of 'bookingType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBookingType($value) {
        return $this->set(self::BOOKINGTYPE, $value);
    }

    /**
     * Returns value of 'bookingType' property
     *
     * @return string
     */
    public function getBookingType() {
        return $this->get(self::BOOKINGTYPE);
    }

    /**
     * Sets value of 'orderTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderTime($value) {
        return $this->set(self::ORDERTIME, $value);
    }

    /**
     * Returns value of 'orderTime' property
     *
     * @return string
     */
    public function getOrderTime() {
        return $this->get(self::ORDERTIME);
    }

    /**
     * Sets value of 'timeout' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeout($value) {
        return $this->set(self::TIMEOUT, $value);
    }

    /**
     * Returns value of 'timeout' property
     *
     * @return string
     */
    public function getTimeout() {
        return $this->get(self::TIMEOUT);
    }

    /**
     * Sets value of 'eta' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEta($value) {
        return $this->set(self::ETA, $value);
    }

    /**
     * Returns value of 'eta' property
     *
     * @return string
     */
    public function getEta() {
        return $this->get(self::ETA);
    }

    /**
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value) {
        return $this->set(self::TEXT, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText() {
        return $this->get(self::TEXT);
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
     * Sets value of 'pollingCount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPollingCount($value) {
        return $this->set(self::POLLINGCOUNT, $value);
    }

    /**
     * Returns value of 'pollingCount' property
     *
     * @return string
     */
    public function getPollingCount() {
        return $this->get(self::POLLINGCOUNT);
    }

    /**
     * Sets value of 'orderId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderId($value) {
        return $this->set(self::ORDERID, $value);
    }

    /**
     * Returns value of 'orderId' property
     *
     * @return string
     */
    public function getOrderId() {
        return $this->get(self::ORDERID);
    }

    /**
     * Sets value of 'next' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNext($value) {
        return $this->set(self::NEXT, $value);
    }

    /**
     * Returns value of 'next' property
     *
     * @return string
     */
    public function getNext() {
        return $this->get(self::NEXT);
    }

    /**
     * Sets value of 'driver' property
     *
     * @param Driver $value Property value
     *
     * @return null
     */
    public function setDriver(Driver $value) {
        return $this->set(self::DRIVER, $value);
    }

    /**
     * Returns value of 'driver' property
     *
     * @return Driver
     */
    public function getDriver() {
        return $this->get(self::DRIVER);
    }

    /**
     * Sets value of 'collectionFee' property
     *
     * @param CollectionFee $value Property value
     *
     * @return null
     */
    public function setCollectionFee(CollectionFee $value) {
        return $this->set(self::COLLECTIONFEE, $value);
    }

    /**
     * Returns value of 'collectionFee' property
     *
     * @return CollectionFee
     */
    public function getCollectionFee() {
        return $this->get(self::COLLECTIONFEE);
    }

    /**
     * Sets value of 'settleFee' property
     *
     * @param SettleFee $value Property value
     *
     * @return null
     */
    public function setSettleFee(SettleFee $value) {
        return $this->set(self::SETTLEFEE, $value);
    }

    /**
     * Returns value of 'settleFee' property
     *
     * @return SettleFee
     */
    public function getSettleFee() {
        return $this->get(self::SETTLEFEE);
    }

    /**
     * Sets value of 'income' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncome($value) {
        return $this->set(self::INCOME, $value);
    }

    /**
     * Returns value of 'income' property
     *
     * @return string
     */
    public function getIncome() {
        return $this->get(self::INCOME);
    }

    /**
     * Sets value of 'cast' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCast($value) {
        return $this->set(self::CAST, $value);
    }

    /**
     * Returns value of 'cast' property
     *
     * @return string
     */
    public function getCast() {
        return $this->get(self::CAST);
    }

    /**
     * Sets value of 'completed' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCompleted($value) {
        return $this->set(self::COMPLETED, $value);
    }

    /**
     * Returns value of 'completed' property
     *
     * @return string
     */
    public function getCompleted() {
        return $this->get(self::COMPLETED);
    }

    /**
     * Sets value of 'isAppraise' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsAppraise($value) {
        return $this->set(self::ISAPPRAISE, $value);
    }

    /**
     * Returns value of 'isAppraise' property
     *
     * @return string
     */
    public function getIsAppraise() {
        return $this->get(self::ISAPPRAISE);
    }

    /**
     * Sets value of 'isLevel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsLevel($value) {
        return $this->set(self::ISLEVEL, $value);
    }

    /**
     * Returns value of 'isLevel' property
     *
     * @return string
     */
    public function getIsLevel() {
        return $this->get(self::ISLEVEL);
    }

    /**
     * Sets value of 'driverTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDriverTime($value) {
        return $this->set(self::DRIVERTIME, $value);
    }

    /**
     * Returns value of 'driverTime' property
     *
     * @return string
     */
    public function getDriverTime() {
        return $this->get(self::DRIVERTIME);
    }

    /**
     * Sets value of 'locationStart' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocationStart($value) {
        return $this->set(self::LOCATIONSTART, $value);
    }

    /**
     * Returns value of 'locationStart' property
     *
     * @return string
     */
    public function getLocationStart() {
        return $this->get(self::LOCATIONSTART);
    }

    /**
     * Sets value of 'userMoney' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserMoney($value) {
        return $this->set(self::USERMONEY, $value);
    }

    /**
     * Returns value of 'userMoney' property
     *
     * @return string
     */
    public function getUserMoney() {
        return $this->get(self::USERMONEY);
    }

    /**
     * Sets value of 'cashCardBalance' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCashCardBalance($value) {
        return $this->set(self::CASHCARDBALANCE, $value);
    }

    /**
     * Returns value of 'cashCardBalance' property
     *
     * @return string
     */
    public function getCashCardBalance() {
        return $this->get(self::CASHCARDBALANCE);
    }

    /**
     * Sets value of 'isComment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsComment($value) {
        return $this->set(self::ISCOMMENT, $value);
    }

    /**
     * Returns value of 'isComment' property
     *
     * @return string
     */
    public function getIsComment() {
        return $this->get(self::ISCOMMENT);
    }

    /**
     * Sets value of 'startTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartTime($value) {
        return $this->set(self::STARTTIME, $value);
    }

    /**
     * Returns value of 'startTime' property
     *
     * @return string
     */
    public function getStartTime() {
        return $this->get(self::STARTTIME);
    }

    /**
     * Sets value of 'vip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVip($value) {
        return $this->set(self::VIP, $value);
    }

    /**
     * Returns value of 'vip' property
     *
     * @return string
     */
    public function getVip() {
        return $this->get(self::VIP);
    }

    /**
     * Sets value of 'castType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCastType($value) {
        return $this->set(self::CASTTYPE, $value);
    }

    /**
     * Returns value of 'castType' property
     *
     * @return string
     */
    public function getCastType() {
        return $this->get(self::CASTTYPE);
    }

    /**
     * Sets value of 'level' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLevel($value) {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return string
     */
    public function getLevel() {
        return $this->get(self::LEVEL);
    }

    /**
     * Sets value of 'price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrice($value) {
        return $this->set(self::PRICE, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return string
     */
    public function getPrice() {
        return $this->get(self::PRICE);
    }

    /**
     * Sets value of 'coupon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCoupon($value) {
        return $this->set(self::COUPON, $value);
    }

    /**
     * Returns value of 'coupon' property
     *
     * @return string
     */
    public function getCoupon() {
        return $this->get(self::COUPON);
    }

    /**
     * Sets value of 'orderCount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderCount($value) {
        return $this->set(self::ORDERCOUNT, $value);
    }

    /**
     * Returns value of 'orderCount' property
     *
     * @return string
     */
    public function getOrderCount() {
        return $this->get(self::ORDERCOUNT);
    }

    /**
     * Sets value of 'tip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTip($value) {
        return $this->set(self::TIP, $value);
    }

    /**
     * Returns value of 'tip' property
     *
     * @return string
     */
    public function getTip() {
        return $this->get(self::TIP);
    }

    /**
     * Appends value to 'orderList' list
     *
     * @param OrderList $value Value to append
     *
     * @return null
     */
    public function appendOrderList(OrderList $value) {
        return $this->append(self::ORDERLIST, $value);
    }

    /**
     * Clears 'orderList' list
     *
     * @return null
     */
    public function clearOrderList() {
        return $this->clear(self::ORDERLIST);
    }

    /**
     * Returns 'orderList' list
     *
     * @return OrderList[]
     */
    public function getOrderList() {
        return $this->get(self::ORDERLIST);
    }

    /**
     * Returns 'orderList' iterator
     *
     * @return ArrayIterator
     */
    public function getOrderListIterator() {
        return new ArrayIterator($this->get(self::ORDERLIST));
    }

    /**
     * Returns element from 'orderList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return OrderList
     */
    public function getOrderListAt($offset) {
        return $this->get(self::ORDERLIST, $offset);
    }

    /**
     * Returns count of 'orderList' list
     *
     * @return int
     */
    public function getOrderListCount() {
        return $this->count(self::ORDERLIST);
    }

    /**
     * Sets value of 'memo' property
     *
     * @param Memo $value Property value
     *
     * @return null
     */
    public function setMemo(Memo $value) {
        return $this->set(self::MEMO, $value);
    }

    /**
     * Returns value of 'memo' property
     *
     * @return Memo
     */
    public function getMemo() {
        return $this->get(self::MEMO);
    }

    /**
     * Appends value to 'priceList' list
     *
     * @param PriceList $value Value to append
     *
     * @return null
     */
    public function appendPriceList(PriceList $value) {
        return $this->append(self::PRICELIST, $value);
    }

    /**
     * Clears 'priceList' list
     *
     * @return null
     */
    public function clearPriceList() {
        return $this->clear(self::PRICELIST);
    }

    /**
     * Returns 'priceList' list
     *
     * @return PriceList[]
     */
    public function getPriceList() {
        return $this->get(self::PRICELIST);
    }

    /**
     * Returns 'priceList' iterator
     *
     * @return ArrayIterator
     */
    public function getPriceListIterator() {
        return new ArrayIterator($this->get(self::PRICELIST));
    }

    /**
     * Returns element from 'priceList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return PriceList
     */
    public function getPriceListAt($offset) {
        return $this->get(self::PRICELIST, $offset);
    }

    /**
     * Returns count of 'priceList' list
     *
     * @return int
     */
    public function getPriceListCount() {
        return $this->count(self::PRICELIST);
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

    /**
     * Sets value of 'expireAt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpireAt($value) {
        return $this->set(self::EXPIREAT, $value);
    }

    /**
     * Returns value of 'expireAt' property
     *
     * @return string
     */
    public function getExpireAt() {
        return $this->get(self::EXPIREAT);
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
     * Sets value of 'button' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButton($value) {
        return $this->set(self::BUTTON, $value);
    }

    /**
     * Returns value of 'button' property
     *
     * @return string
     */
    public function getButton() {
        return $this->get(self::BUTTON);
    }

    /**
     * Sets value of 'shareId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareId($value) {
        return $this->set(self::SHAREID, $value);
    }

    /**
     * Returns value of 'shareId' property
     *
     * @return string
     */
    public function getShareId() {
        return $this->get(self::SHAREID);
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
     * Sets value of 'picture' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPicture($value) {
        return $this->set(self::PICTURE, $value);
    }

    /**
     * Returns value of 'picture' property
     *
     * @return string
     */
    public function getPicture() {
        return $this->get(self::PICTURE);
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value) {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl() {
        return $this->get(self::URL);
    }

    /**
     * Appends value to 'drivers' list
     *
     * @param Drivers $value Value to append
     *
     * @return null
     */
    public function appendDrivers(Drivers $value) {
        return $this->append(self::DRIVERS, $value);
    }

    /**
     * Clears 'drivers' list
     *
     * @return null
     */
    public function clearDrivers() {
        return $this->clear(self::DRIVERS);
    }

    /**
     * Returns 'drivers' list
     *
     * @return Drivers[]
     */
    public function getDrivers() {
        return $this->get(self::DRIVERS);
    }

    /**
     * Returns 'drivers' iterator
     *
     * @return ArrayIterator
     */
    public function getDriversIterator() {
        return new ArrayIterator($this->get(self::DRIVERS));
    }

    /**
     * Returns element from 'drivers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Drivers
     */
    public function getDriversAt($offset) {
        return $this->get(self::DRIVERS, $offset);
    }

    /**
     * Returns count of 'drivers' list
     *
     * @return int
     */
    public function getDriversCount() {
        return $this->count(self::DRIVERS);
    }

    /**
     * Sets value of 'locationEnd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocationEnd($value) {
        return $this->set(self::LOCATIONEND, $value);
    }

    /**
     * Returns value of 'locationEnd' property
     *
     * @return string
     */
    public function getLocationEnd() {
        return $this->get(self::LOCATIONEND);
    }

    /**
     * Sets value of 'pollingState' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPollingState($value) {
        return $this->set(self::POLLINGSTATE, $value);
    }

    /**
     * Returns value of 'pollingState' property
     *
     * @return string
     */
    public function getPollingState() {
        return $this->get(self::POLLINGSTATE);
    }

    /**
     * Sets value of 'bindId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBindId($value) {
        return $this->set(self::BINDID, $value);
    }

    /**
     * Returns value of 'bindId' property
     *
     * @return string
     */
    public function getBindId() {
        return $this->get(self::BINDID);
    }

    /**
     * Sets value of 'bonusNumber' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBonusNumber($value) {
        return $this->set(self::BONUSNUMBER, $value);
    }

    /**
     * Returns value of 'bonusNumber' property
     *
     * @return string
     */
    public function getBonusNumber() {
        return $this->get(self::BONUSNUMBER);
    }

    /**
     * Sets value of 'password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPassword($value) {
        return $this->set(self::PASSWORD, $value);
    }

    /**
     * Returns value of 'password' property
     *
     * @return string
     */
    public function getPassword() {
        return $this->get(self::PASSWORD);
    }

    /**
     * Sets value of 'entranceStatus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEntranceStatus($value) {
        return $this->set(self::ENTRANCESTATUS, $value);
    }

    /**
     * Returns value of 'entranceStatus' property
     *
     * @return string
     */
    public function getEntranceStatus() {
        return $this->get(self::ENTRANCESTATUS);
    }

    /**
     * Sets value of 'cityStatus' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCityStatus($value) {
        return $this->set(self::CITYSTATUS, $value);
    }

    /**
     * Returns value of 'cityStatus' property
     *
     * @return string
     */
    public function getCityStatus() {
        return $this->get(self::CITYSTATUS);
    }

    /**
     * Sets value of 'isNewCustom' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIsNewCustom($value) {
        return $this->set(self::ISNEWCUSTOM, $value);
    }

    /**
     * Returns value of 'isNewCustom' property
     *
     * @return string
     */
    public function getIsNewCustom() {
        return $this->get(self::ISNEWCUSTOM);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'subtitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubtitle($value) {
        return $this->set(self::SUBTITLE, $value);
    }

    /**
     * Returns value of 'subtitle' property
     *
     * @return string
     */
    public function getSubtitle() {
        return $this->get(self::SUBTITLE);
    }

    /**
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value) {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon() {
        return $this->get(self::ICON);
    }

    /**
     * Sets value of 'extra' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExtra($value) {
        return $this->set(self::EXTRA, $value);
    }

    /**
     * Returns value of 'extra' property
     *
     * @return string
     */
    public function getExtra() {
        return $this->get(self::EXTRA);
    }

    /**
     * Sets value of 'hoplinks' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHoplinks($value) {
        return $this->set(self::HOPLINKS, $value);
    }

    /**
     * Returns value of 'hoplinks' property
     *
     * @return string
     */
    public function getHoplinks() {
        return $this->get(self::HOPLINKS);
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
     * Sets value of 'kiloFee' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKiloFee($value) {
        return $this->set(self::KILOFEE, $value);
    }

    /**
     * Returns value of 'kiloFee' property
     *
     * @return string
     */
    public function getKiloFee() {
        return $this->get(self::KILOFEE);
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
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value) {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc() {
        return $this->get(self::DESC);
    }

    /**
     * Sets value of 'endTime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndTime($value) {
        return $this->set(self::ENDTIME, $value);
    }

    /**
     * Returns value of 'endTime' property
     *
     * @return string
     */
    public function getEndTime() {
        return $this->get(self::ENDTIME);
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
}
}

/**
 * DaijiaOption message
 */
if (!class_exists('DaijiaOption')) {
class DaijiaOption extends ProtobufMessage
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
