<?php
/**
 * Auto generated from map_template.proto.1 at 2015-06-23 14:49:10
 */

/**
 * RichText message
 */
if (!class_exists('RichText')) {
class RichText extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ORI_VALUE = 1;
    const VALUE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ORI_VALUE => array(
            'name' => 'ori_value',
            'required' => false,
            'type' => 5,
        ),
        self::VALUE => array(
            'name' => 'value',
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
        $this->values[self::ORI_VALUE] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'ori_value' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOriValue($value) {
        return $this->set(self::ORI_VALUE, $value);
    }

    /**
     * Returns value of 'ori_value' property
     *
     * @return int
     */
    public function getOriValue() {
        return $this->get(self::ORI_VALUE);
    }

    /**
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value) {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue() {
        return $this->get(self::VALUE);
    }
}
}

/**
 * Resource message
 */
if (!class_exists('Resource')) {
class Resource extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const RESOURCE_ID = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::RESOURCE_ID => array(
            'name' => 'resource_id',
            'required' => false,
            'type' => 5,
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
        $this->values[self::RESOURCE_ID] = null;
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
     * Sets value of 'resource_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResourceId($value) {
        return $this->set(self::RESOURCE_ID, $value);
    }

    /**
     * Returns value of 'resource_id' property
     *
     * @return int
     */
    public function getResourceId() {
        return $this->get(self::RESOURCE_ID);
    }
}
}

/**
 * Image message
 */
if (!class_exists('Image')) {
class Image extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ORI_VALUE = 1;
    const LINK = 2;
    const ICON_ID = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ORI_VALUE => array(
            'name' => 'ori_value',
            'required' => false,
            'type' => 5,
        ),
        self::LINK => array(
            'name' => 'link',
            'required' => false,
            'type' => 7,
        ),
        self::ICON_ID => array(
            'name' => 'icon_id',
            'required' => false,
            'type' => 5,
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
        $this->values[self::ORI_VALUE] = null;
        $this->values[self::LINK] = null;
        $this->values[self::ICON_ID] = null;
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
     * Sets value of 'ori_value' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setOriValue($value) {
        return $this->set(self::ORI_VALUE, $value);
    }

    /**
     * Returns value of 'ori_value' property
     *
     * @return int
     */
    public function getOriValue() {
        return $this->get(self::ORI_VALUE);
    }

    /**
     * Sets value of 'link' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLink($value) {
        return $this->set(self::LINK, $value);
    }

    /**
     * Returns value of 'link' property
     *
     * @return string
     */
    public function getLink() {
        return $this->get(self::LINK);
    }

    /**
     * Sets value of 'icon_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIconId($value) {
        return $this->set(self::ICON_ID, $value);
    }

    /**
     * Returns value of 'icon_id' property
     *
     * @return int
     */
    public function getIconId() {
        return $this->get(self::ICON_ID);
    }
}
}

/**
 * Composit message
 */
if (!class_exists('Composit')) {
class Composit extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ICON_ID = 1;
    const TITLE = 2;
    const TAB_ID = 3;
    const VALUE = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ICON_ID => array(
            'name' => 'icon_id',
            'required' => false,
            'type' => 5,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::TAB_ID => array(
            'name' => 'tab_id',
            'required' => false,
            'type' => 5,
        ),
        self::VALUE => array(
            'name' => 'value',
            'repeated' => true,
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
        $this->values[self::ICON_ID] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::TAB_ID] = null;
        $this->values[self::VALUE] = array();
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
     * Sets value of 'icon_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIconId($value) {
        return $this->set(self::ICON_ID, $value);
    }

    /**
     * Returns value of 'icon_id' property
     *
     * @return int
     */
    public function getIconId() {
        return $this->get(self::ICON_ID);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }

    /**
     * Sets value of 'tab_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTabId($value) {
        return $this->set(self::TAB_ID, $value);
    }

    /**
     * Returns value of 'tab_id' property
     *
     * @return int
     */
    public function getTabId() {
        return $this->get(self::TAB_ID);
    }

    /**
     * Appends value to 'value' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendValue($value) {
        return $this->append(self::VALUE, $value);
    }

    /**
     * Clears 'value' list
     *
     * @return null
     */
    public function clearValue() {
        return $this->clear(self::VALUE);
    }

    /**
     * Returns 'value' list
     *
     * @return string[]
     */
    public function getValue() {
        return $this->get(self::VALUE);
    }

    /**
     * Returns 'value' iterator
     *
     * @return ArrayIterator
     */
    public function getValueIterator() {
        return new ArrayIterator($this->get(self::VALUE));
    }

    /**
     * Returns element from 'value' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getValueAt($offset) {
        return $this->get(self::VALUE, $offset);
    }

    /**
     * Returns count of 'value' list
     *
     * @return int
     */
    public function getValueCount() {
        return $this->count(self::VALUE);
    }
}
}

/**
 * Fatherson message
 */
if (!class_exists('Fatherson')) {
class Fatherson extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ACT = 1;
    const TITLE = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ACT => array(
            'name' => 'act',
            'required' => false,
            'type' => 5,
        ),
        self::TITLE => array(
            'name' => 'title',
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
        $this->values[self::ACT] = null;
        $this->values[self::TITLE] = null;
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
     * Sets value of 'act' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAct($value) {
        return $this->set(self::ACT, $value);
    }

    /**
     * Returns value of 'act' property
     *
     * @return int
     */
    public function getAct() {
        return $this->get(self::ACT);
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value) {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle() {
        return $this->get(self::TITLE);
    }
}
}

/**
 * NormalTemplate message
 */
if (!class_exists('NormalTemplate')) {
class NormalTemplate extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NORMALL1C1 = 1;
    const NORMALL1C2 = 2;
    const NORMALL1C3 = 3;
    const NORMALL2C1 = 4;
    const NORMALL2C2 = 5;
    const NORMALL2C3 = 6;
    const NORMALL3 = 7;
    const NORMALL4 = 8;
    const NORMALL5 = 9;
    const NORMALL6 = 10;
    const UPPERLEFTCORNER = 11;
    const FLAG = 12;
    const FANORMALL5 = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NORMALL1C1 => array(
            'name' => 'normall1c1',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL1C2 => array(
            'name' => 'normall1c2',
            'repeated' => true,
            'type' => 'Resource',
        ),
        self::NORMALL1C3 => array(
            'name' => 'normall1c3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL2C1 => array(
            'name' => 'normall2c1',
            'required' => false,
            'type' => 7,
        ),
        self::NORMALL2C2 => array(
            'name' => 'normall2c2',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL2C3 => array(
            'name' => 'normall2c3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL3 => array(
            'name' => 'normall3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL4 => array(
            'name' => 'normall4',
            'required' => false,
            'type' => 'RichText',
        ),
        self::NORMALL5 => array(
            'name' => 'normall5',
            'required' => false,
            'type' => 5,
        ),
        self::NORMALL6 => array(
            'name' => 'normall6',
            'required' => false,
            'type' => 'Composit',
        ),
        self::UPPERLEFTCORNER => array(
            'name' => 'upperleftcorner',
            'required' => false,
            'type' => 'Resource',
        ),
        self::FLAG => array(
            'name' => 'flag',
            'repeated' => true,
            'type' => 7,
        ),
        self::FANORMALL5 => array(
            'name' => 'fanormall5',
            'required' => false,
            'type' => 'Fatherson',
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
        $this->values[self::NORMALL1C1] = null;
        $this->values[self::NORMALL1C2] = array();
        $this->values[self::NORMALL1C3] = null;
        $this->values[self::NORMALL2C1] = null;
        $this->values[self::NORMALL2C2] = null;
        $this->values[self::NORMALL2C3] = null;
        $this->values[self::NORMALL3] = null;
        $this->values[self::NORMALL4] = null;
        $this->values[self::NORMALL5] = null;
        $this->values[self::NORMALL6] = null;
        $this->values[self::UPPERLEFTCORNER] = null;
        $this->values[self::FLAG] = array();
        $this->values[self::FANORMALL5] = null;
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
     * Sets value of 'normall1c1' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall1c1(RichText $value) {
        return $this->set(self::NORMALL1C1, $value);
    }

    /**
     * Returns value of 'normall1c1' property
     *
     * @return RichText
     */
    public function getNormall1c1() {
        return $this->get(self::NORMALL1C1);
    }

    /**
     * Appends value to 'normall1c2' list
     *
     * @param Resource $value Value to append
     *
     * @return null
     */
    public function appendNormall1c2(Resource $value) {
        return $this->append(self::NORMALL1C2, $value);
    }

    /**
     * Clears 'normall1c2' list
     *
     * @return null
     */
    public function clearNormall1c2() {
        return $this->clear(self::NORMALL1C2);
    }

    /**
     * Returns 'normall1c2' list
     *
     * @return Resource[]
     */
    public function getNormall1c2() {
        return $this->get(self::NORMALL1C2);
    }

    /**
     * Returns 'normall1c2' iterator
     *
     * @return ArrayIterator
     */
    public function getNormall1c2Iterator() {
        return new ArrayIterator($this->get(self::NORMALL1C2));
    }

    /**
     * Returns element from 'normall1c2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Resource
     */
    public function getNormall1c2At($offset) {
        return $this->get(self::NORMALL1C2, $offset);
    }

    /**
     * Returns count of 'normall1c2' list
     *
     * @return int
     */
    public function getNormall1c2Count() {
        return $this->count(self::NORMALL1C2);
    }

    /**
     * Sets value of 'normall1c3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall1c3(RichText $value) {
        return $this->set(self::NORMALL1C3, $value);
    }

    /**
     * Returns value of 'normall1c3' property
     *
     * @return RichText
     */
    public function getNormall1c3() {
        return $this->get(self::NORMALL1C3);
    }

    /**
     * Sets value of 'normall2c1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNormall2c1($value) {
        return $this->set(self::NORMALL2C1, $value);
    }

    /**
     * Returns value of 'normall2c1' property
     *
     * @return string
     */
    public function getNormall2c1() {
        return $this->get(self::NORMALL2C1);
    }

    /**
     * Sets value of 'normall2c2' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall2c2(RichText $value) {
        return $this->set(self::NORMALL2C2, $value);
    }

    /**
     * Returns value of 'normall2c2' property
     *
     * @return RichText
     */
    public function getNormall2c2() {
        return $this->get(self::NORMALL2C2);
    }

    /**
     * Sets value of 'normall2c3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall2c3(RichText $value) {
        return $this->set(self::NORMALL2C3, $value);
    }

    /**
     * Returns value of 'normall2c3' property
     *
     * @return RichText
     */
    public function getNormall2c3() {
        return $this->get(self::NORMALL2C3);
    }

    /**
     * Sets value of 'normall3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall3(RichText $value) {
        return $this->set(self::NORMALL3, $value);
    }

    /**
     * Returns value of 'normall3' property
     *
     * @return RichText
     */
    public function getNormall3() {
        return $this->get(self::NORMALL3);
    }

    /**
     * Sets value of 'normall4' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setNormall4(RichText $value) {
        return $this->set(self::NORMALL4, $value);
    }

    /**
     * Returns value of 'normall4' property
     *
     * @return RichText
     */
    public function getNormall4() {
        return $this->get(self::NORMALL4);
    }

    /**
     * Sets value of 'normall5' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNormall5($value) {
        return $this->set(self::NORMALL5, $value);
    }

    /**
     * Returns value of 'normall5' property
     *
     * @return int
     */
    public function getNormall5() {
        return $this->get(self::NORMALL5);
    }

    /**
     * Sets value of 'normall6' property
     *
     * @param Composit $value Property value
     *
     * @return null
     */
    public function setNormall6(Composit $value) {
        return $this->set(self::NORMALL6, $value);
    }

    /**
     * Returns value of 'normall6' property
     *
     * @return Composit
     */
    public function getNormall6() {
        return $this->get(self::NORMALL6);
    }

    /**
     * Sets value of 'upperleftcorner' property
     *
     * @param Resource $value Property value
     *
     * @return null
     */
    public function setUpperleftcorner(Resource $value) {
        return $this->set(self::UPPERLEFTCORNER, $value);
    }

    /**
     * Returns value of 'upperleftcorner' property
     *
     * @return Resource
     */
    public function getUpperleftcorner() {
        return $this->get(self::UPPERLEFTCORNER);
    }

    /**
     * Appends value to 'flag' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendFlag($value) {
        return $this->append(self::FLAG, $value);
    }

    /**
     * Clears 'flag' list
     *
     * @return null
     */
    public function clearFlag() {
        return $this->clear(self::FLAG);
    }

    /**
     * Returns 'flag' list
     *
     * @return string[]
     */
    public function getFlag() {
        return $this->get(self::FLAG);
    }

    /**
     * Returns 'flag' iterator
     *
     * @return ArrayIterator
     */
    public function getFlagIterator() {
        return new ArrayIterator($this->get(self::FLAG));
    }

    /**
     * Returns element from 'flag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getFlagAt($offset) {
        return $this->get(self::FLAG, $offset);
    }

    /**
     * Returns count of 'flag' list
     *
     * @return int
     */
    public function getFlagCount() {
        return $this->count(self::FLAG);
    }

    /**
     * Sets value of 'fanormall5' property
     *
     * @param Fatherson $value Property value
     *
     * @return null
     */
    public function setFanormall5(Fatherson $value) {
        return $this->set(self::FANORMALL5, $value);
    }

    /**
     * Returns value of 'fanormall5' property
     *
     * @return Fatherson
     */
    public function getFanormall5() {
        return $this->get(self::FANORMALL5);
    }
}
}

/**
 * ImageTemplate message
 */
if (!class_exists('ImageTemplate')) {
class ImageTemplate extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const IMAGEL1C1 = 1;
    const IMAGEL1C2 = 2;
    const IMAGEL1C3 = 3;
    const IMAGEL2C1 = 4;
    const IMAGEL2C2 = 5;
    const IMAGEL2C3 = 6;
    const IMAGEL3C1 = 7;
    const IMAGEL3C2 = 8;
    const IMAGEL4 = 9;
    const IMAGEL5 = 10;
    const IMAGEL6 = 11;
    const UPPERLEFTCORNER = 12;
    const FAIMAGEL5 = 13;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::IMAGEL1C1 => array(
            'name' => 'imagel1c1',
            'required' => false,
            'type' => 'Image',
        ),
        self::IMAGEL1C2 => array(
            'name' => 'imagel1c2',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL1C3 => array(
            'name' => 'imagel1c3',
            'repeated' => true,
            'type' => 'Resource',
        ),
        self::IMAGEL2C1 => array(
            'name' => 'imagel2c1',
            'required' => false,
            'type' => 7,
        ),
        self::IMAGEL2C2 => array(
            'name' => 'imagel2c2',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL2C3 => array(
            'name' => 'imagel2c3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL3C1 => array(
            'name' => 'imagel3c1',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL3C2 => array(
            'name' => 'imagel3c2',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL4 => array(
            'name' => 'imagel4',
            'required' => false,
            'type' => 'RichText',
        ),
        self::IMAGEL5 => array(
            'name' => 'imagel5',
            'required' => false,
            'type' => 5,
        ),
        self::IMAGEL6 => array(
            'name' => 'imagel6',
            'required' => false,
            'type' => 'Composit',
        ),
        self::UPPERLEFTCORNER => array(
            'name' => 'upperleftcorner',
            'required' => false,
            'type' => 'Resource',
        ),
        self::FAIMAGEL5 => array(
            'name' => 'faimagel5',
            'required' => false,
            'type' => 'Fatherson',
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
        $this->values[self::IMAGEL1C1] = null;
        $this->values[self::IMAGEL1C2] = null;
        $this->values[self::IMAGEL1C3] = array();
        $this->values[self::IMAGEL2C1] = null;
        $this->values[self::IMAGEL2C2] = null;
        $this->values[self::IMAGEL2C3] = null;
        $this->values[self::IMAGEL3C1] = null;
        $this->values[self::IMAGEL3C2] = null;
        $this->values[self::IMAGEL4] = null;
        $this->values[self::IMAGEL5] = null;
        $this->values[self::IMAGEL6] = null;
        $this->values[self::UPPERLEFTCORNER] = null;
        $this->values[self::FAIMAGEL5] = null;
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
     * Sets value of 'imagel1c1' property
     *
     * @param Image $value Property value
     *
     * @return null
     */
    public function setImagel1c1(Image $value) {
        return $this->set(self::IMAGEL1C1, $value);
    }

    /**
     * Returns value of 'imagel1c1' property
     *
     * @return Image
     */
    public function getImagel1c1() {
        return $this->get(self::IMAGEL1C1);
    }

    /**
     * Sets value of 'imagel1c2' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel1c2(RichText $value) {
        return $this->set(self::IMAGEL1C2, $value);
    }

    /**
     * Returns value of 'imagel1c2' property
     *
     * @return RichText
     */
    public function getImagel1c2() {
        return $this->get(self::IMAGEL1C2);
    }

    /**
     * Appends value to 'imagel1c3' list
     *
     * @param Resource $value Value to append
     *
     * @return null
     */
    public function appendImagel1c3(Resource $value) {
        return $this->append(self::IMAGEL1C3, $value);
    }

    /**
     * Clears 'imagel1c3' list
     *
     * @return null
     */
    public function clearImagel1c3() {
        return $this->clear(self::IMAGEL1C3);
    }

    /**
     * Returns 'imagel1c3' list
     *
     * @return Resource[]
     */
    public function getImagel1c3() {
        return $this->get(self::IMAGEL1C3);
    }

    /**
     * Returns 'imagel1c3' iterator
     *
     * @return ArrayIterator
     */
    public function getImagel1c3Iterator() {
        return new ArrayIterator($this->get(self::IMAGEL1C3));
    }

    /**
     * Returns element from 'imagel1c3' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Resource
     */
    public function getImagel1c3At($offset) {
        return $this->get(self::IMAGEL1C3, $offset);
    }

    /**
     * Returns count of 'imagel1c3' list
     *
     * @return int
     */
    public function getImagel1c3Count() {
        return $this->count(self::IMAGEL1C3);
    }

    /**
     * Sets value of 'imagel2c1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImagel2c1($value) {
        return $this->set(self::IMAGEL2C1, $value);
    }

    /**
     * Returns value of 'imagel2c1' property
     *
     * @return string
     */
    public function getImagel2c1() {
        return $this->get(self::IMAGEL2C1);
    }

    /**
     * Sets value of 'imagel2c2' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel2c2(RichText $value) {
        return $this->set(self::IMAGEL2C2, $value);
    }

    /**
     * Returns value of 'imagel2c2' property
     *
     * @return RichText
     */
    public function getImagel2c2() {
        return $this->get(self::IMAGEL2C2);
    }

    /**
     * Sets value of 'imagel2c3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel2c3(RichText $value) {
        return $this->set(self::IMAGEL2C3, $value);
    }

    /**
     * Returns value of 'imagel2c3' property
     *
     * @return RichText
     */
    public function getImagel2c3() {
        return $this->get(self::IMAGEL2C3);
    }

    /**
     * Sets value of 'imagel3c1' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel3c1(RichText $value) {
        return $this->set(self::IMAGEL3C1, $value);
    }

    /**
     * Returns value of 'imagel3c1' property
     *
     * @return RichText
     */
    public function getImagel3c1() {
        return $this->get(self::IMAGEL3C1);
    }

    /**
     * Sets value of 'imagel3c2' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel3c2(RichText $value) {
        return $this->set(self::IMAGEL3C2, $value);
    }

    /**
     * Returns value of 'imagel3c2' property
     *
     * @return RichText
     */
    public function getImagel3c2() {
        return $this->get(self::IMAGEL3C2);
    }

    /**
     * Sets value of 'imagel4' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setImagel4(RichText $value) {
        return $this->set(self::IMAGEL4, $value);
    }

    /**
     * Returns value of 'imagel4' property
     *
     * @return RichText
     */
    public function getImagel4() {
        return $this->get(self::IMAGEL4);
    }

    /**
     * Sets value of 'imagel5' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setImagel5($value) {
        return $this->set(self::IMAGEL5, $value);
    }

    /**
     * Returns value of 'imagel5' property
     *
     * @return int
     */
    public function getImagel5() {
        return $this->get(self::IMAGEL5);
    }

    /**
     * Sets value of 'imagel6' property
     *
     * @param Composit $value Property value
     *
     * @return null
     */
    public function setImagel6(Composit $value) {
        return $this->set(self::IMAGEL6, $value);
    }

    /**
     * Returns value of 'imagel6' property
     *
     * @return Composit
     */
    public function getImagel6() {
        return $this->get(self::IMAGEL6);
    }

    /**
     * Sets value of 'upperleftcorner' property
     *
     * @param Resource $value Property value
     *
     * @return null
     */
    public function setUpperleftcorner(Resource $value) {
        return $this->set(self::UPPERLEFTCORNER, $value);
    }

    /**
     * Returns value of 'upperleftcorner' property
     *
     * @return Resource
     */
    public function getUpperleftcorner() {
        return $this->get(self::UPPERLEFTCORNER);
    }

    /**
     * Sets value of 'faimagel5' property
     *
     * @param Fatherson $value Property value
     *
     * @return null
     */
    public function setFaimagel5(Fatherson $value) {
        return $this->set(self::FAIMAGEL5, $value);
    }

    /**
     * Returns value of 'faimagel5' property
     *
     * @return Fatherson
     */
    public function getFaimagel5() {
        return $this->get(self::FAIMAGEL5);
    }
}
}

/**
 * PanelTemplate message
 */
if (!class_exists('PanelTemplate')) {
class PanelTemplate extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PANELL1C1 = 1;
    const PANELL1C2 = 2;
    const PANELL2C1 = 3;
    const PANELL2C2 = 4;
    const PANELL2C3 = 5;
    const PANELL3 = 6;
    const UPPERLEFTCORNER = 7;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PANELL1C1 => array(
            'name' => 'panell1c1',
            'required' => false,
            'type' => 'RichText',
        ),
        self::PANELL1C2 => array(
            'name' => 'panell1c2',
            'repeated' => true,
            'type' => 'Resource',
        ),
        self::PANELL2C1 => array(
            'name' => 'panell2c1',
            'required' => false,
            'type' => 7,
        ),
        self::PANELL2C2 => array(
            'name' => 'panell2c2',
            'required' => false,
            'type' => 'RichText',
        ),
        self::PANELL2C3 => array(
            'name' => 'panell2c3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::PANELL3 => array(
            'name' => 'panell3',
            'required' => false,
            'type' => 'RichText',
        ),
        self::UPPERLEFTCORNER => array(
            'name' => 'upperleftcorner',
            'required' => false,
            'type' => 'Resource',
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
        $this->values[self::PANELL1C1] = null;
        $this->values[self::PANELL1C2] = array();
        $this->values[self::PANELL2C1] = null;
        $this->values[self::PANELL2C2] = null;
        $this->values[self::PANELL2C3] = null;
        $this->values[self::PANELL3] = null;
        $this->values[self::UPPERLEFTCORNER] = null;
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
     * Sets value of 'panell1c1' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setPanell1c1(RichText $value) {
        return $this->set(self::PANELL1C1, $value);
    }

    /**
     * Returns value of 'panell1c1' property
     *
     * @return RichText
     */
    public function getPanell1c1() {
        return $this->get(self::PANELL1C1);
    }

    /**
     * Appends value to 'panell1c2' list
     *
     * @param Resource $value Value to append
     *
     * @return null
     */
    public function appendPanell1c2(Resource $value) {
        return $this->append(self::PANELL1C2, $value);
    }

    /**
     * Clears 'panell1c2' list
     *
     * @return null
     */
    public function clearPanell1c2() {
        return $this->clear(self::PANELL1C2);
    }

    /**
     * Returns 'panell1c2' list
     *
     * @return Resource[]
     */
    public function getPanell1c2() {
        return $this->get(self::PANELL1C2);
    }

    /**
     * Returns 'panell1c2' iterator
     *
     * @return ArrayIterator
     */
    public function getPanell1c2Iterator() {
        return new ArrayIterator($this->get(self::PANELL1C2));
    }

    /**
     * Returns element from 'panell1c2' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Resource
     */
    public function getPanell1c2At($offset) {
        return $this->get(self::PANELL1C2, $offset);
    }

    /**
     * Returns count of 'panell1c2' list
     *
     * @return int
     */
    public function getPanell1c2Count() {
        return $this->count(self::PANELL1C2);
    }

    /**
     * Sets value of 'panell2c1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPanell2c1($value) {
        return $this->set(self::PANELL2C1, $value);
    }

    /**
     * Returns value of 'panell2c1' property
     *
     * @return string
     */
    public function getPanell2c1() {
        return $this->get(self::PANELL2C1);
    }

    /**
     * Sets value of 'panell2c2' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setPanell2c2(RichText $value) {
        return $this->set(self::PANELL2C2, $value);
    }

    /**
     * Returns value of 'panell2c2' property
     *
     * @return RichText
     */
    public function getPanell2c2() {
        return $this->get(self::PANELL2C2);
    }

    /**
     * Sets value of 'panell2c3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setPanell2c3(RichText $value) {
        return $this->set(self::PANELL2C3, $value);
    }

    /**
     * Returns value of 'panell2c3' property
     *
     * @return RichText
     */
    public function getPanell2c3() {
        return $this->get(self::PANELL2C3);
    }

    /**
     * Sets value of 'panell3' property
     *
     * @param RichText $value Property value
     *
     * @return null
     */
    public function setPanell3(RichText $value) {
        return $this->set(self::PANELL3, $value);
    }

    /**
     * Returns value of 'panell3' property
     *
     * @return RichText
     */
    public function getPanell3() {
        return $this->get(self::PANELL3);
    }

    /**
     * Sets value of 'upperleftcorner' property
     *
     * @param Resource $value Property value
     *
     * @return null
     */
    public function setUpperleftcorner(Resource $value) {
        return $this->set(self::UPPERLEFTCORNER, $value);
    }

    /**
     * Returns value of 'upperleftcorner' property
     *
     * @return Resource
     */
    public function getUpperleftcorner() {
        return $this->get(self::UPPERLEFTCORNER);
    }
}
}

/**
 * Template message
 */
if (!class_exists('Template')) {
class Template extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const NORMAL = 1;
    const IMAGE = 2;
    const PANEL = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NORMAL => array(
            'name' => 'normal',
            'required' => false,
            'type' => 'NormalTemplate',
        ),
        self::IMAGE => array(
            'name' => 'image',
            'required' => false,
            'type' => 'ImageTemplate',
        ),
        self::PANEL => array(
            'name' => 'panel',
            'required' => false,
            'type' => 'PanelTemplate',
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
        $this->values[self::NORMAL] = null;
        $this->values[self::IMAGE] = null;
        $this->values[self::PANEL] = null;
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
     * Sets value of 'normal' property
     *
     * @param NormalTemplate $value Property value
     *
     * @return null
     */
    public function setNormal(NormalTemplate $value) {
        return $this->set(self::NORMAL, $value);
    }

    /**
     * Returns value of 'normal' property
     *
     * @return NormalTemplate
     */
    public function getNormal() {
        return $this->get(self::NORMAL);
    }

    /**
     * Sets value of 'image' property
     *
     * @param ImageTemplate $value Property value
     *
     * @return null
     */
    public function setImage(ImageTemplate $value) {
        return $this->set(self::IMAGE, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return ImageTemplate
     */
    public function getImage() {
        return $this->get(self::IMAGE);
    }

    /**
     * Sets value of 'panel' property
     *
     * @param PanelTemplate $value Property value
     *
     * @return null
     */
    public function setPanel(PanelTemplate $value) {
        return $this->set(self::PANEL, $value);
    }

    /**
     * Returns value of 'panel' property
     *
     * @return PanelTemplate
     */
    public function getPanel() {
        return $this->get(self::PANEL);
    }
}
}
