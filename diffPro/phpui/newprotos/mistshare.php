<?php
/**
 * Auto generated from map_mist_share.proto.1 at 2015-06-23 14:48:03
 */

/**
 * MistShare message
 */
if (!class_exists('MistShare')) {
class MistShare extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const URL = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
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
