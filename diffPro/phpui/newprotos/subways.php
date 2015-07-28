<?php
/**
 * Auto generated from map_subways.proto.1 at 2015-06-23 14:48:56
 */

/**
 * SwXmlattr message
 */
if (!class_exists('SwXmlattr')) {
class SwXmlattr extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CID = 1;
    const N = 2;
    const C = 3;
    const SRC = 4;
    const BG = 5;
    const ICON = 6;
    const WIDTH = 7;
    const HEIGHT = 8;
    const VERSION = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CID => array(
            'name' => 'cid',
            'required' => false,
            'type' => 7,
        ),
        self::N => array(
            'name' => 'n',
            'required' => false,
            'type' => 5,
        ),
        self::C => array(
            'name' => 'c',
            'required' => false,
            'type' => 7,
        ),
        self::SRC => array(
            'name' => 'src',
            'required' => false,
            'type' => 7,
        ),
        self::BG => array(
            'name' => 'bg',
            'required' => false,
            'type' => 7,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => 7,
        ),
        self::WIDTH => array(
            'name' => 'width',
            'required' => false,
            'type' => 7,
        ),
        self::HEIGHT => array(
            'name' => 'height',
            'required' => false,
            'type' => 7,
        ),
        self::VERSION => array(
            'name' => 'version',
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
        $this->values[self::CID] = null;
        $this->values[self::N] = null;
        $this->values[self::C] = null;
        $this->values[self::SRC] = null;
        $this->values[self::BG] = null;
        $this->values[self::ICON] = null;
        $this->values[self::WIDTH] = null;
        $this->values[self::HEIGHT] = null;
        $this->values[self::VERSION] = null;
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
     * Sets value of 'cid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCid($value) {
        return $this->set(self::CID, $value);
    }

    /**
     * Returns value of 'cid' property
     *
     * @return string
     */
    public function getCid() {
        return $this->get(self::CID);
    }

    /**
     * Sets value of 'n' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setN($value) {
        return $this->set(self::N, $value);
    }

    /**
     * Returns value of 'n' property
     *
     * @return int
     */
    public function getN() {
        return $this->get(self::N);
    }

    /**
     * Sets value of 'c' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setC($value) {
        return $this->set(self::C, $value);
    }

    /**
     * Returns value of 'c' property
     *
     * @return string
     */
    public function getC() {
        return $this->get(self::C);
    }

    /**
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value) {
        return $this->set(self::SRC, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc() {
        return $this->get(self::SRC);
    }

    /**
     * Sets value of 'bg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBg($value) {
        return $this->set(self::BG, $value);
    }

    /**
     * Returns value of 'bg' property
     *
     * @return string
     */
    public function getBg() {
        return $this->get(self::BG);
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
     * Sets value of 'width' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWidth($value) {
        return $this->set(self::WIDTH, $value);
    }

    /**
     * Returns value of 'width' property
     *
     * @return string
     */
    public function getWidth() {
        return $this->get(self::WIDTH);
    }

    /**
     * Sets value of 'height' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeight($value) {
        return $this->set(self::HEIGHT, $value);
    }

    /**
     * Returns value of 'height' property
     *
     * @return string
     */
    public function getHeight() {
        return $this->get(self::HEIGHT);
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
}
}

/**
 * LXmlattr message
 */
if (!class_exists('LXmlattr')) {
class LXmlattr extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const LID = 1;
    const LB = 2;
    const SLB = 3;
    const N = 4;
    const LOOP = 5;
    const LBX = 6;
    const LBY = 7;
    const LBR = 8;
    const LC = 9;
    const UID = 10;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::LID => array(
            'name' => 'lid',
            'required' => false,
            'type' => 7,
        ),
        self::LB => array(
            'name' => 'lb',
            'required' => false,
            'type' => 7,
        ),
        self::SLB => array(
            'name' => 'slb',
            'required' => false,
            'type' => 7,
        ),
        self::N => array(
            'name' => 'n',
            'required' => false,
            'type' => 7,
        ),
        self::LOOP => array(
            'name' => 'loop',
            'required' => false,
            'type' => 8,
        ),
        self::LBX => array(
            'name' => 'lbx',
            'required' => false,
            'type' => 1,
        ),
        self::LBY => array(
            'name' => 'lby',
            'required' => false,
            'type' => 1,
        ),
        self::LBR => array(
            'name' => 'lbr',
            'required' => false,
            'type' => 1,
        ),
        self::LC => array(
            'name' => 'lc',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
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
        $this->values[self::LID] = null;
        $this->values[self::LB] = null;
        $this->values[self::SLB] = null;
        $this->values[self::N] = null;
        $this->values[self::LOOP] = null;
        $this->values[self::LBX] = null;
        $this->values[self::LBY] = null;
        $this->values[self::LBR] = null;
        $this->values[self::LC] = null;
        $this->values[self::UID] = null;
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
     * Sets value of 'lid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLid($value) {
        return $this->set(self::LID, $value);
    }

    /**
     * Returns value of 'lid' property
     *
     * @return string
     */
    public function getLid() {
        return $this->get(self::LID);
    }

    /**
     * Sets value of 'lb' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLb($value) {
        return $this->set(self::LB, $value);
    }

    /**
     * Returns value of 'lb' property
     *
     * @return string
     */
    public function getLb() {
        return $this->get(self::LB);
    }

    /**
     * Sets value of 'slb' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSlb($value) {
        return $this->set(self::SLB, $value);
    }

    /**
     * Returns value of 'slb' property
     *
     * @return string
     */
    public function getSlb() {
        return $this->get(self::SLB);
    }

    /**
     * Sets value of 'n' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setN($value) {
        return $this->set(self::N, $value);
    }

    /**
     * Returns value of 'n' property
     *
     * @return string
     */
    public function getN() {
        return $this->get(self::N);
    }

    /**
     * Sets value of 'loop' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setLoop($value) {
        return $this->set(self::LOOP, $value);
    }

    /**
     * Returns value of 'loop' property
     *
     * @return bool
     */
    public function getLoop() {
        return $this->get(self::LOOP);
    }

    /**
     * Sets value of 'lbx' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLbx($value) {
        return $this->set(self::LBX, $value);
    }

    /**
     * Returns value of 'lbx' property
     *
     * @return float
     */
    public function getLbx() {
        return $this->get(self::LBX);
    }

    /**
     * Sets value of 'lby' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLby($value) {
        return $this->set(self::LBY, $value);
    }

    /**
     * Returns value of 'lby' property
     *
     * @return float
     */
    public function getLby() {
        return $this->get(self::LBY);
    }

    /**
     * Sets value of 'lbr' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLbr($value) {
        return $this->set(self::LBR, $value);
    }

    /**
     * Returns value of 'lbr' property
     *
     * @return float
     */
    public function getLbr() {
        return $this->get(self::LBR);
    }

    /**
     * Sets value of 'lc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLc($value) {
        return $this->set(self::LC, $value);
    }

    /**
     * Returns value of 'lc' property
     *
     * @return string
     */
    public function getLc() {
        return $this->get(self::LC);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value) {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid() {
        return $this->get(self::UID);
    }
}
}

/**
 * PXmlattr message
 */
if (!class_exists('PXmlattr')) {
class PXmlattr extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SID = 1;
    const LB = 2;
    const X = 3;
    const Y = 4;
    const RX = 5;
    const RY = 6;
    const ST = 7;
    const EX = 8;
    const IU = 9;
    const RC = 10;
    const SLB = 11;
    const PX = 12;
    const PY = 13;
    const UID = 14;
    const BOLD = 15;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SID => array(
            'name' => 'sid',
            'required' => false,
            'type' => 7,
        ),
        self::LB => array(
            'name' => 'lb',
            'required' => false,
            'type' => 7,
        ),
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => 1,
        ),
        self::Y => array(
            'name' => 'y',
            'required' => false,
            'type' => 1,
        ),
        self::RX => array(
            'name' => 'rx',
            'required' => false,
            'type' => 1,
        ),
        self::RY => array(
            'name' => 'ry',
            'required' => false,
            'type' => 1,
        ),
        self::ST => array(
            'name' => 'st',
            'required' => false,
            'type' => 8,
        ),
        self::EX => array(
            'name' => 'ex',
            'required' => false,
            'type' => 8,
        ),
        self::IU => array(
            'name' => 'iu',
            'required' => false,
            'type' => 8,
        ),
        self::RC => array(
            'name' => 'rc',
            'required' => false,
            'type' => 8,
        ),
        self::SLB => array(
            'name' => 'slb',
            'required' => false,
            'type' => 8,
        ),
        self::PX => array(
            'name' => 'px',
            'required' => false,
            'type' => 1,
        ),
        self::PY => array(
            'name' => 'py',
            'required' => false,
            'type' => 1,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::BOLD => array(
            'name' => 'bold',
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
        $this->values[self::SID] = null;
        $this->values[self::LB] = null;
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
        $this->values[self::RX] = null;
        $this->values[self::RY] = null;
        $this->values[self::ST] = null;
        $this->values[self::EX] = null;
        $this->values[self::IU] = null;
        $this->values[self::RC] = null;
        $this->values[self::SLB] = null;
        $this->values[self::PX] = null;
        $this->values[self::PY] = null;
        $this->values[self::UID] = null;
        $this->values[self::BOLD] = null;
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
     * Sets value of 'sid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSid($value) {
        return $this->set(self::SID, $value);
    }

    /**
     * Returns value of 'sid' property
     *
     * @return string
     */
    public function getSid() {
        return $this->get(self::SID);
    }

    /**
     * Sets value of 'lb' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLb($value) {
        return $this->set(self::LB, $value);
    }

    /**
     * Returns value of 'lb' property
     *
     * @return string
     */
    public function getLb() {
        return $this->get(self::LB);
    }

    /**
     * Sets value of 'x' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setX($value) {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return float
     */
    public function getX() {
        return $this->get(self::X);
    }

    /**
     * Sets value of 'y' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setY($value) {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return float
     */
    public function getY() {
        return $this->get(self::Y);
    }

    /**
     * Sets value of 'rx' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRx($value) {
        return $this->set(self::RX, $value);
    }

    /**
     * Returns value of 'rx' property
     *
     * @return float
     */
    public function getRx() {
        return $this->get(self::RX);
    }

    /**
     * Sets value of 'ry' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setRy($value) {
        return $this->set(self::RY, $value);
    }

    /**
     * Returns value of 'ry' property
     *
     * @return float
     */
    public function getRy() {
        return $this->get(self::RY);
    }

    /**
     * Sets value of 'st' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setSt($value) {
        return $this->set(self::ST, $value);
    }

    /**
     * Returns value of 'st' property
     *
     * @return bool
     */
    public function getSt() {
        return $this->get(self::ST);
    }

    /**
     * Sets value of 'ex' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setEx($value) {
        return $this->set(self::EX, $value);
    }

    /**
     * Returns value of 'ex' property
     *
     * @return bool
     */
    public function getEx() {
        return $this->get(self::EX);
    }

    /**
     * Sets value of 'iu' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIu($value) {
        return $this->set(self::IU, $value);
    }

    /**
     * Returns value of 'iu' property
     *
     * @return bool
     */
    public function getIu() {
        return $this->get(self::IU);
    }

    /**
     * Sets value of 'rc' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRc($value) {
        return $this->set(self::RC, $value);
    }

    /**
     * Returns value of 'rc' property
     *
     * @return bool
     */
    public function getRc() {
        return $this->get(self::RC);
    }

    /**
     * Sets value of 'slb' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setSlb($value) {
        return $this->set(self::SLB, $value);
    }

    /**
     * Returns value of 'slb' property
     *
     * @return bool
     */
    public function getSlb() {
        return $this->get(self::SLB);
    }

    /**
     * Sets value of 'px' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setPx($value) {
        return $this->set(self::PX, $value);
    }

    /**
     * Returns value of 'px' property
     *
     * @return float
     */
    public function getPx() {
        return $this->get(self::PX);
    }

    /**
     * Sets value of 'py' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setPy($value) {
        return $this->set(self::PY, $value);
    }

    /**
     * Returns value of 'py' property
     *
     * @return float
     */
    public function getPy() {
        return $this->get(self::PY);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUid($value) {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return string
     */
    public function getUid() {
        return $this->get(self::UID);
    }

    /**
     * Sets value of 'bold' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setBold($value) {
        return $this->set(self::BOLD, $value);
    }

    /**
     * Returns value of 'bold' property
     *
     * @return bool
     */
    public function getBold() {
        return $this->get(self::BOLD);
    }
}
}

/**
 * P message
 */
if (!class_exists('P')) {
class P extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const P_XMLATTR = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::P_XMLATTR => array(
            'name' => 'p_xmlattr',
            'required' => false,
            'type' => 'PXmlattr',
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
        $this->values[self::P_XMLATTR] = null;
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
     * Sets value of 'p_xmlattr' property
     *
     * @param PXmlattr $value Property value
     *
     * @return null
     */
    public function setPXmlattr(PXmlattr $value) {
        return $this->set(self::P_XMLATTR, $value);
    }

    /**
     * Returns value of 'p_xmlattr' property
     *
     * @return PXmlattr
     */
    public function getPXmlattr() {
        return $this->get(self::P_XMLATTR);
    }
}
}

/**
 * L message
 */
if (!class_exists('L')) {
class L extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const L_XMLATTR = 1;
    const P = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::L_XMLATTR => array(
            'name' => 'l_xmlattr',
            'required' => false,
            'type' => 'LXmlattr',
        ),
        self::P => array(
            'name' => 'p',
            'repeated' => true,
            'type' => 'P',
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
        $this->values[self::L_XMLATTR] = null;
        $this->values[self::P] = array();
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
     * Sets value of 'l_xmlattr' property
     *
     * @param LXmlattr $value Property value
     *
     * @return null
     */
    public function setLXmlattr(LXmlattr $value) {
        return $this->set(self::L_XMLATTR, $value);
    }

    /**
     * Returns value of 'l_xmlattr' property
     *
     * @return LXmlattr
     */
    public function getLXmlattr() {
        return $this->get(self::L_XMLATTR);
    }

    /**
     * Appends value to 'p' list
     *
     * @param P $value Value to append
     *
     * @return null
     */
    public function appendP(P $value) {
        return $this->append(self::P, $value);
    }

    /**
     * Clears 'p' list
     *
     * @return null
     */
    public function clearP() {
        return $this->clear(self::P);
    }

    /**
     * Returns 'p' list
     *
     * @return P[]
     */
    public function getP() {
        return $this->get(self::P);
    }

    /**
     * Returns 'p' iterator
     *
     * @return ArrayIterator
     */
    public function getPIterator() {
        return new ArrayIterator($this->get(self::P));
    }

    /**
     * Returns element from 'p' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return P
     */
    public function getPAt($offset) {
        return $this->get(self::P, $offset);
    }

    /**
     * Returns count of 'p' list
     *
     * @return int
     */
    public function getPCount() {
        return $this->count(self::P);
    }
}
}

/**
 * Subways message
 */
if (!class_exists('Subways')) {
class Subways extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SW_XMLATTR = 1;
    const L = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SW_XMLATTR => array(
            'name' => 'sw_xmlattr',
            'required' => false,
            'type' => 'SwXmlattr',
        ),
        self::L => array(
            'name' => 'l',
            'repeated' => true,
            'type' => 'L',
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
        $this->values[self::SW_XMLATTR] = null;
        $this->values[self::L] = array();
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
     * Sets value of 'sw_xmlattr' property
     *
     * @param SwXmlattr $value Property value
     *
     * @return null
     */
    public function setSwXmlattr(SwXmlattr $value) {
        return $this->set(self::SW_XMLATTR, $value);
    }

    /**
     * Returns value of 'sw_xmlattr' property
     *
     * @return SwXmlattr
     */
    public function getSwXmlattr() {
        return $this->get(self::SW_XMLATTR);
    }

    /**
     * Appends value to 'l' list
     *
     * @param L $value Value to append
     *
     * @return null
     */
    public function appendL(L $value) {
        return $this->append(self::L, $value);
    }

    /**
     * Clears 'l' list
     *
     * @return null
     */
    public function clearL() {
        return $this->clear(self::L);
    }

    /**
     * Returns 'l' list
     *
     * @return L[]
     */
    public function getL() {
        return $this->get(self::L);
    }

    /**
     * Returns 'l' iterator
     *
     * @return ArrayIterator
     */
    public function getLIterator() {
        return new ArrayIterator($this->get(self::L));
    }

    /**
     * Returns element from 'l' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return L
     */
    public function getLAt($offset) {
        return $this->get(self::L, $offset);
    }

    /**
     * Returns count of 'l' list
     *
     * @return int
     */
    public function getLCount() {
        return $this->count(self::L);
    }
}
}
