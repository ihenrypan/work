<?php
/**
 * Auto generated from map_result.proto.1 at 2015-06-23 14:48:31
 */

/**
 * Result message
 */
if (!class_exists('Result')) {
class Result extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TYPE = 1;
    const ERROR = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 6,
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
        $this->values[self::TYPE] = null;
        $this->values[self::ERROR] = null;
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
     * Sets value of 'type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return int
     */
    public function getType() {
        return $this->get(self::TYPE);
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
}
}
