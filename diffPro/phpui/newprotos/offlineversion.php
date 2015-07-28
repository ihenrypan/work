<?php
/**
 * Auto generated from map_offline_version.proto.1 at 2015-06-23 14:48:14
 */

/**
 * OfflineVersion message
 */
if (!class_exists('OfflineVersion')) {
class OfflineVersion extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OFFLINE_MAP = 1;
    const OFFLINE_SEARCH = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OFFLINE_MAP => array(
            'name' => 'offline_map',
            'required' => false,
            'type' => 7,
        ),
        self::OFFLINE_SEARCH => array(
            'name' => 'offline_search',
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
        $this->values[self::OFFLINE_MAP] = null;
        $this->values[self::OFFLINE_SEARCH] = null;
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
     * Sets value of 'offline_map' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOfflineMap($value) {
        return $this->set(self::OFFLINE_MAP, $value);
    }

    /**
     * Returns value of 'offline_map' property
     *
     * @return string
     */
    public function getOfflineMap() {
        return $this->get(self::OFFLINE_MAP);
    }

    /**
     * Sets value of 'offline_search' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOfflineSearch($value) {
        return $this->set(self::OFFLINE_SEARCH, $value);
    }

    /**
     * Returns value of 'offline_search' property
     *
     * @return string
     */
    public function getOfflineSearch() {
        return $this->get(self::OFFLINE_SEARCH);
    }
}
}
