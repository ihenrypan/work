<?php
/**
 * Auto generated from map_revert_geocoding.proto.1 at 2015-07-23 10:56:16
 */

/**
 * Point message
 */
if (!class_exists('Point')) {
class Point extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const X = 1;
    const Y = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 7,
        ),
        self::Y => array(
            'name' => 'y',
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
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
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
     * Sets value of 'x' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return string
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return string
     */
    public function getY() {
        return $this->get(self::Y);
    }
}
}

/**
 * AddressDetail message
 */
if (!class_exists('AddressDetail')) {
class AddressDetail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CITY = 1;
    const CITY_CODE = 2;
    const COUNTRY = 3;
    const COUNTRY_CODE = 4;
    const DISTRICT = 5;
    const PROVINCE = 6;
    const STREET = 7;
    const STREET_NUMBER = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => 7,
        ),
        self::CITY_CODE => array(
            'name' => 'city_code',
            'required' => false,
            'type' => 5,
        ),
        self::COUNTRY => array(
            'name' => 'country',
            'required' => false,
            'type' => 7,
        ),
        self::COUNTRY_CODE => array(
            'name' => 'country_code',
            'required' => false,
            'type' => 5,
        ),
        self::DISTRICT => array(
            'name' => 'district',
            'required' => false,
            'type' => 7,
        ),
        self::PROVINCE => array(
            'name' => 'province',
            'required' => false,
            'type' => 7,
        ),
        self::STREET => array(
            'name' => 'street',
            'required' => false,
            'type' => 7,
        ),
        self::STREET_NUMBER => array(
            'name' => 'street_number',
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
        $this->values[self::CITY_CODE] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::COUNTRY_CODE] = null;
        $this->values[self::DISTRICT] = null;
        $this->values[self::PROVINCE] = null;
        $this->values[self::STREET] = null;
        $this->values[self::STREET_NUMBER] = null;
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
     * Sets value of 'city_code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCityCode($value) {
        return $this->set(self::CITY_CODE, $value);
    }

    /**
     * Returns value of 'city_code' property
     *
     * @return int
     */
    public function getCityCode() {
        return $this->get(self::CITY_CODE);
    }

    /**
     * Sets value of 'country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value) {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'country' property
     *
     * @return string
     */
    public function getCountry() {
        return $this->get(self::COUNTRY);
    }

    /**
     * Sets value of 'country_code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCountryCode($value) {
        return $this->set(self::COUNTRY_CODE, $value);
    }

    /**
     * Returns value of 'country_code' property
     *
     * @return int
     */
    public function getCountryCode() {
        return $this->get(self::COUNTRY_CODE);
    }

    /**
     * Sets value of 'district' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDistrict($value) {
        return $this->set(self::DISTRICT, $value);
    }

    /**
     * Returns value of 'district' property
     *
     * @return string
     */
    public function getDistrict() {
        return $this->get(self::DISTRICT);
    }

    /**
     * Sets value of 'province' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvince($value) {
        return $this->set(self::PROVINCE, $value);
    }

    /**
     * Returns value of 'province' property
     *
     * @return string
     */
    public function getProvince() {
        return $this->get(self::PROVINCE);
    }

    /**
     * Sets value of 'street' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreet($value) {
        return $this->set(self::STREET, $value);
    }

    /**
     * Returns value of 'street' property
     *
     * @return string
     */
    public function getStreet() {
        return $this->get(self::STREET);
    }

    /**
     * Sets value of 'street_number' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreetNumber($value) {
        return $this->set(self::STREET_NUMBER, $value);
    }

    /**
     * Returns value of 'street_number' property
     *
     * @return string
     */
    public function getStreetNumber() {
        return $this->get(self::STREET_NUMBER);
    }
}
}

/**
 * SurroundPoi message
 */
if (!class_exists('SurroundPoi')) {
class SurroundPoi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ADDR = 1;
    const POINT = 2;
    const UID = 3;
    const NAME = 4;
    const DIRECTION = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ADDR => array(
            'name' => 'addr',
            'required' => false,
            'type' => 7,
        ),
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => 'Point',
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::DIRECTION => array(
            'name' => 'direction',
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
        $this->values[self::ADDR] = null;
        $this->values[self::POINT] = null;
        $this->values[self::UID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::DIRECTION] = null;
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
     * Sets value of 'addr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddr($value) {
        return $this->set(self::ADDR, $value);
    }

    /**
     * Returns value of 'addr' property
     *
     * @return string
     */
    public function getAddr() {
        return $this->get(self::ADDR);
    }

    /**
     * Sets value of 'point' property
     *
     * @param Point $value Property value
     *
     * @return null
     */
    public function setPoint(Point $value) {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return Point
     */
    public function getPoint() {
        return $this->get(self::POINT);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value) {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid() {
        return $this->get(self::UID);
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
     * Sets value of 'direction' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDirection($value) {
        return $this->set(self::DIRECTION, $value);
    }

    /**
     * Returns value of 'direction' property
     *
     * @return string
     */
    public function getDirection() {
        return $this->get(self::DIRECTION);
    }
}
}

/**
 * RevertGeocoding message
 */
if (!class_exists('RevertGeocoding')) {
class RevertGeocoding extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ADDRESS = 1;
    const ADDRESS_DETAIL = 2;
    const BUSINESS = 3;
    const POI_DESC = 4;
    const POINT = 5;
    const SURROUND_POI = 6;
    const NEARBY = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ADDRESS => array(
            'name' => 'address',
            'required' => false,
            'type' => 7,
        ),
        self::ADDRESS_DETAIL => array(
            'name' => 'address_detail',
            'required' => false,
            'type' => 'AddressDetail',
        ),
        self::BUSINESS => array(
            'name' => 'business',
            'required' => false,
            'type' => 7,
        ),
        self::POI_DESC => array(
            'name' => 'poi_desc',
            'required' => false,
            'type' => 7,
        ),
        self::POINT => array(
            'name' => 'point',
            'required' => false,
            'type' => 'Point',
        ),
        self::SURROUND_POI => array(
            'name' => 'surround_poi',
            'repeated' => true,
            'type' => 'SurroundPoi',
        ),
        self::NEARBY => array(
            'name' => 'nearby',
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
        $this->values[self::ADDRESS] = null;
        $this->values[self::ADDRESS_DETAIL] = null;
        $this->values[self::BUSINESS] = null;
        $this->values[self::POI_DESC] = null;
        $this->values[self::POINT] = null;
        $this->values[self::SURROUND_POI] = array();
        $this->values[self::NEARBY] = null;
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
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value) {
        return $this->set(self::ADDRESS, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress() {
        return $this->get(self::ADDRESS);
    }

    /**
     * Sets value of 'address_detail' property
     *
     * @param AddressDetail $value Property value
     *
     * @return null
     */
    public function setAddressDetail(AddressDetail $value) {
        return $this->set(self::ADDRESS_DETAIL, $value);
    }

    /**
     * Returns value of 'address_detail' property
     *
     * @return AddressDetail
     */
    public function getAddressDetail() {
        return $this->get(self::ADDRESS_DETAIL);
    }

    /**
     * Sets value of 'business' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusiness($value) {
        return $this->set(self::BUSINESS, $value);
    }

    /**
     * Returns value of 'business' property
     *
     * @return string
     */
    public function getBusiness() {
        return $this->get(self::BUSINESS);
    }

    /**
     * Sets value of 'poi_desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPoiDesc($value) {
        return $this->set(self::POI_DESC, $value);
    }

    /**
     * Returns value of 'poi_desc' property
     *
     * @return string
     */
    public function getPoiDesc() {
        return $this->get(self::POI_DESC);
    }

    /**
     * Sets value of 'point' property
     *
     * @param Point $value Property value
     *
     * @return null
     */
    public function setPoint(Point $value) {
        return $this->set(self::POINT, $value);
    }

    /**
     * Returns value of 'point' property
     *
     * @return Point
     */
    public function getPoint() {
        return $this->get(self::POINT);
    }

    /**
     * Appends value to 'surround_poi' list
     *
     * @param SurroundPoi $value Value to append
     *
     * @return null
     */
    public function appendSurroundPoi(SurroundPoi $value) {
        return $this->append(self::SURROUND_POI, $value);
    }

    /**
     * Clears 'surround_poi' list
     *
     * @return null
     */
    public function clearSurroundPoi() {
        return $this->clear(self::SURROUND_POI);
    }

    /**
     * Returns 'surround_poi' list
     *
     * @return SurroundPoi[]
     */
    public function getSurroundPoi() {
        return $this->get(self::SURROUND_POI);
    }

    /**
     * Returns 'surround_poi' iterator
     *
     * @return ArrayIterator
     */
    public function getSurroundPoiIterator() {
        return new ArrayIterator($this->get(self::SURROUND_POI));
    }

    /**
     * Returns element from 'surround_poi' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SurroundPoi
     */
    public function getSurroundPoiAt($offset) {
        return $this->get(self::SURROUND_POI, $offset);
    }

    /**
     * Returns count of 'surround_poi' list
     *
     * @return int
     */
    public function getSurroundPoiCount() {
        return $this->count(self::SURROUND_POI);
    }

    /**
     * Sets value of 'nearby' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNearby($value) {
        return $this->set(self::NEARBY, $value);
    }

    /**
     * Returns value of 'nearby' property
     *
     * @return string
     */
    public function getNearby() {
        return $this->get(self::NEARBY);
    }
}
}
