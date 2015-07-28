<?php
/**
 * Auto generated from map_bzinfo.proto.1 at 2015-06-23 14:46:55
 */

/**
 * BzInfo message
 */
if (!class_exists('BzInfo')) {
class BzInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERRNO = 1;
    const CIRCLE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERRNO => array(
            'name' => 'errno',
            'required' => false,
            'type' => 7,
        ),
        self::CIRCLE => array(
            'name' => 'circle',
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
        $this->values[self::ERRNO] = null;
        $this->values[self::CIRCLE] = null;
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
     * Sets value of 'errno' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrno($value) {
        return $this->set(self::ERRNO, $value);
    }

    /**
     * Returns value of 'errno' property
     *
     * @return string
     */
    public function getErrno() {
        return $this->get(self::ERRNO);
    }

    /**
     * Sets value of 'circle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCircle($value) {
        return $this->set(self::CIRCLE, $value);
    }

    /**
     * Returns value of 'circle' property
     *
     * @return string
     */
    public function getCircle() {
        return $this->get(self::CIRCLE);
    }
}
}
