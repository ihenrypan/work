<?php
/**
 * Auto generated from map_navi_content.proto.1 at 2015-06-23 14:48:10
 */

/**
 * NaviContent message
 */
if (!class_exists('NaviContent')) {
class NaviContent extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OUT = 1;
    const OUTTYPE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OUT => array(
            'name' => 'out',
            'required' => false,
            'type' => 7,
        ),
        self::OUTTYPE => array(
            'name' => 'outtype',
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
        $this->values[self::OUT] = null;
        $this->values[self::OUTTYPE] = null;
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
     * Sets value of 'out' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOut($value) {
        return $this->set(self::OUT, $value);
    }

    /**
     * Returns value of 'out' property
     *
     * @return string
     */
    public function getOut() {
        return $this->get(self::OUT);
    }

    /**
     * Sets value of 'outtype' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOuttype($value) {
        return $this->set(self::OUTTYPE, $value);
    }

    /**
     * Returns value of 'outtype' property
     *
     * @return string
     */
    public function getOuttype() {
        return $this->get(self::OUTTYPE);
    }
}
}
