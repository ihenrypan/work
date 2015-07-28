<?php
/**
 * Auto generated from map_islocal.proto.1 at 2015-06-23 14:47:55
 */

/**
 * IsLocal message
 */
if (!class_exists('IsLocal')) {
class IsLocal extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IS_LOCAL = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IS_LOCAL => array(
            'name' => 'is_local',
            'required' => false,
            'type' => 8,
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
        $this->values[self::IS_LOCAL] = null;
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
     * Sets value of 'is_local' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsLocal($value) {
        return $this->set(self::IS_LOCAL, $value);
    }

    /**
     * Returns value of 'is_local' property
     *
     * @return bool
     */
    public function getIsLocal() {
        return $this->get(self::IS_LOCAL);
    }
}
}
