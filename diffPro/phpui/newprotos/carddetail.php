<?php
/**
 * Auto generated from map_carddetail.proto.1 at 2015-06-23 14:47:08
 */

/**
 * BusinessScope message
 */
if (!class_exists('BusinessScope')) {
class BusinessScope extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NAME = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
 * Meishi message
 */
if (!class_exists('Meishi')) {
class Meishi extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BUSINESS_SCOPE = 2;
    const BUSINESS_SCOPE_TYPE = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BUSINESS_SCOPE => array(
            'name' => 'business_scope',
            'repeated' => true,
            'type' => 'BusinessScope',
        ),
        self::BUSINESS_SCOPE_TYPE => array(
            'name' => 'business_scope_type',
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
        $this->values[self::BUSINESS_SCOPE] = array();
        $this->values[self::BUSINESS_SCOPE_TYPE] = null;
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
     * Appends value to 'business_scope' list
     *
     * @param BusinessScope $value Value to append
     *
     * @return null
     */
    public function appendBusinessScope(BusinessScope $value) {
        return $this->append(self::BUSINESS_SCOPE, $value);
    }

    /**
     * Clears 'business_scope' list
     *
     * @return null
     */
    public function clearBusinessScope() {
        return $this->clear(self::BUSINESS_SCOPE);
    }

    /**
     * Returns 'business_scope' list
     *
     * @return BusinessScope[]
     */
    public function getBusinessScope() {
        return $this->get(self::BUSINESS_SCOPE);
    }

    /**
     * Returns 'business_scope' iterator
     *
     * @return ArrayIterator
     */
    public function getBusinessScopeIterator() {
        return new ArrayIterator($this->get(self::BUSINESS_SCOPE));
    }

    /**
     * Returns element from 'business_scope' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return BusinessScope
     */
    public function getBusinessScopeAt($offset) {
        return $this->get(self::BUSINESS_SCOPE, $offset);
    }

    /**
     * Returns count of 'business_scope' list
     *
     * @return int
     */
    public function getBusinessScopeCount() {
        return $this->count(self::BUSINESS_SCOPE);
    }

    /**
     * Sets value of 'business_scope_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessScopeType($value) {
        return $this->set(self::BUSINESS_SCOPE_TYPE, $value);
    }

    /**
     * Returns value of 'business_scope_type' property
     *
     * @return string
     */
    public function getBusinessScopeType() {
        return $this->get(self::BUSINESS_SCOPE_TYPE);
    }
}
}

/**
 * Carddetail message
 */
if (!class_exists('Carddetail')) {
class Carddetail extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const MEISHI = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::MEISHI => array(
            'name' => 'meishi',
            'required' => false,
            'type' => 'Meishi',
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
        $this->values[self::MEISHI] = null;
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
     * Sets value of 'meishi' property
     *
     * @param Meishi $value Property value
     *
     * @return null
     */
    public function setMeishi(Meishi $value) {
        return $this->set(self::MEISHI, $value);
    }

    /**
     * Returns value of 'meishi' property
     *
     * @return Meishi
     */
    public function getMeishi() {
        return $this->get(self::MEISHI);
    }
}
}
