<?php
/**
 * Auto generated from map_violationbrandmodel.proto.1 at 2015-07-21 15:52:30
 */

/**
 * SubList message
 */
if (!class_exists('SubList')) {
class SubList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BRANDMODEL = 1;
    const ICON = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BRANDMODEL => array(
            'name' => 'brandModel',
            'required' => false,
            'type' => 7,
        ),
        self::ICON => array(
            'name' => 'icon',
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
        $this->values[self::BRANDMODEL] = null;
        $this->values[self::ICON] = null;
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
     * Sets value of 'brandModel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrandModel($value) {
        return $this->set(self::BRANDMODEL, $value);
    }

    /**
     * Returns value of 'brandModel' property
     *
     * @return string
     */
    public function getBrandModel() {
        return $this->get(self::BRANDMODEL);
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
}
}

/**
 * CarBrands message
 */
if (!class_exists('CarBrands')) {
class CarBrands extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BRAND = 1;
    const ICON = 2;
    const SUBLIST = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BRAND => array(
            'name' => 'brand',
            'required' => false,
            'type' => 7,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => 7,
        ),
        self::SUBLIST => array(
            'name' => 'subList',
            'repeated' => true,
            'type' => 'SubList',
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
        $this->values[self::BRAND] = null;
        $this->values[self::ICON] = null;
        $this->values[self::SUBLIST] = array();
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
     * Appends value to 'subList' list
     *
     * @param SubList $value Value to append
     *
     * @return null
     */
    public function appendSubList(SubList $value) {
        return $this->append(self::SUBLIST, $value);
    }

    /**
     * Clears 'subList' list
     *
     * @return null
     */
    public function clearSubList() {
        return $this->clear(self::SUBLIST);
    }

    /**
     * Returns 'subList' list
     *
     * @return SubList[]
     */
    public function getSubList() {
        return $this->get(self::SUBLIST);
    }

    /**
     * Returns 'subList' iterator
     *
     * @return ArrayIterator
     */
    public function getSubListIterator() {
        return new ArrayIterator($this->get(self::SUBLIST));
    }

    /**
     * Returns element from 'subList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return SubList
     */
    public function getSubListAt($offset) {
        return $this->get(self::SUBLIST, $offset);
    }

    /**
     * Returns count of 'subList' list
     *
     * @return int
     */
    public function getSubListCount() {
        return $this->count(self::SUBLIST);
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
    const INITIALS = 1;
    const CARBRANDS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INITIALS => array(
            'name' => 'initials',
            'required' => false,
            'type' => 7,
        ),
        self::CARBRANDS => array(
            'name' => 'carBrands',
            'repeated' => true,
            'type' => 'CarBrands',
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
        $this->values[self::INITIALS] = null;
        $this->values[self::CARBRANDS] = array();
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
     * Sets value of 'initials' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInitials($value) {
        return $this->set(self::INITIALS, $value);
    }

    /**
     * Returns value of 'initials' property
     *
     * @return string
     */
    public function getInitials() {
        return $this->get(self::INITIALS);
    }

    /**
     * Appends value to 'carBrands' list
     *
     * @param CarBrands $value Value to append
     *
     * @return null
     */
    public function appendCarBrands(CarBrands $value) {
        return $this->append(self::CARBRANDS, $value);
    }

    /**
     * Clears 'carBrands' list
     *
     * @return null
     */
    public function clearCarBrands() {
        return $this->clear(self::CARBRANDS);
    }

    /**
     * Returns 'carBrands' list
     *
     * @return CarBrands[]
     */
    public function getCarBrands() {
        return $this->get(self::CARBRANDS);
    }

    /**
     * Returns 'carBrands' iterator
     *
     * @return ArrayIterator
     */
    public function getCarBrandsIterator() {
        return new ArrayIterator($this->get(self::CARBRANDS));
    }

    /**
     * Returns element from 'carBrands' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CarBrands
     */
    public function getCarBrandsAt($offset) {
        return $this->get(self::CARBRANDS, $offset);
    }

    /**
     * Returns count of 'carBrands' list
     *
     * @return int
     */
    public function getCarBrandsCount() {
        return $this->count(self::CARBRANDS);
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
    const VERSION = 1;
    const HEAD = 2;
    const LISTS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::VERSION => array(
            'name' => 'version',
            'required' => false,
            'type' => 7,
        ),
        self::HEAD => array(
            'name' => 'head',
            'required' => false,
            'type' => 7,
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
        $this->values[self::VERSION] = null;
        $this->values[self::HEAD] = null;
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
     * Sets value of 'version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value) {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return string
     */
    public function getVersion() {
        return $this->get(self::VERSION);
    }

    /**
     * Sets value of 'head' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHead($value) {
        return $this->set(self::HEAD, $value);
    }

    /**
     * Returns value of 'head' property
     *
     * @return string
     */
    public function getHead() {
        return $this->get(self::HEAD);
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
 * Violationbrandmodel message
 */
if (!class_exists('Violationbrandmodel')) {
class Violationbrandmodel extends ProtobufMessage
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
