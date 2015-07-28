<?php
/**
 * Auto generated from map_ckuserphone.proto.1 at 2015-06-23 14:47:19
 */

/**
 * Ckuserphone message
 */
if (!class_exists('Ckuserphone')) {
class Ckuserphone extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const STATUS = 1;
    const URL = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => 5,
        ),
        self::URL => array(
            'name' => 'url',
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
        $this->values[self::STATUS] = null;
        $this->values[self::URL] = null;
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
     * Sets value of 'status' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setStatus($value) {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return int
     */
    public function getStatus() {
        return $this->get(self::STATUS);
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
}
}
