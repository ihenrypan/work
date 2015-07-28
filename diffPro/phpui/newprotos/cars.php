<?php
/**
 * Auto generated from map_cars.proto.1 at 2015-06-23 14:47:12
 */

/**
 * CarRouteplanPrefer enum
 */
if (!class_exists('CarRouteplanPrefer')) {
final class CarRouteplanPrefer
{
    const CARROUTEPLANPREFERINVALID = 0X00000000;
    const CARROUTEPLANPREFERDEFAULT = 0X00000001;
    const CARROUTEPLANPREFERHIGHWAY = 0X00000002;
    const CARROUTEPLANPREFERNOHIGHWAY = 0X00000004;
    const CARROUTEPLANPREFERNOTOLL = 0X00000008;
    const CARROUTEPLANPREFERAVOIDJAM = 0X00000010;
    const CARROUTEPLANPREFERCARNUM = 0X00000020;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues() {
        return array(
            'CARROUTEPLANPREFERINVALID' => self::CARROUTEPLANPREFERINVALID,
            'CARROUTEPLANPREFERDEFAULT' => self::CARROUTEPLANPREFERDEFAULT,
            'CARROUTEPLANPREFERHIGHWAY' => self::CARROUTEPLANPREFERHIGHWAY,
            'CARROUTEPLANPREFERNOHIGHWAY' => self::CARROUTEPLANPREFERNOHIGHWAY,
            'CARROUTEPLANPREFERNOTOLL' => self::CARROUTEPLANPREFERNOTOLL,
            'CARROUTEPLANPREFERAVOIDJAM' => self::CARROUTEPLANPREFERAVOIDJAM,
            'CARROUTEPLANPREFERCARNUM' => self::CARROUTEPLANPREFERCARNUM,
        );
    }
}
}

/**
 * RouteInfoStaus enum
 */
if (!class_exists('RouteInfoStaus')) {
final class RouteInfoStaus
{
    const ROUTEALL = 1;
    const ROUTEPART = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues() {
        return array(
            'ROUTEALL' => self::ROUTEALL,
            'ROUTEPART' => self::ROUTEPART,
        );
    }
}
}

/**
 * Start message
 */
if (!class_exists('Start')) {
class Start extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PT = 1;
    const UID = 2;
    const WD = 3;
    const BUS_STOP = 4;
    const SPT = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::BUS_STOP => array(
            'name' => 'bus_stop',
            'required' => false,
            'type' => 5,
        ),
        self::SPT => array(
            'name' => 'spt',
            'repeated' => true,
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
        $this->values[self::PT] = null;
        $this->values[self::UID] = null;
        $this->values[self::WD] = null;
        $this->values[self::BUS_STOP] = null;
        $this->values[self::SPT] = array();
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
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
     * Sets value of 'wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWd($value) {
        return $this->set(self::WD, $value);
    }

    /**
     * Returns value of 'wd' property
     *
     * @return string
     */
    public function getWd() {
        return $this->get(self::WD);
    }

    /**
     * Sets value of 'bus_stop' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBusStop($value) {
        return $this->set(self::BUS_STOP, $value);
    }

    /**
     * Returns value of 'bus_stop' property
     *
     * @return int
     */
    public function getBusStop() {
        return $this->get(self::BUS_STOP);
    }

    /**
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }
}
}

/**
 * End message
 */
if (!class_exists('End')) {
class End extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const PT = 1;
    const UID = 2;
    const WD = 3;
    const BUS_STOP = 4;
    const SPT = 5;
    const BWANDA = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::PT => array(
            'name' => 'pt',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 7,
        ),
        self::WD => array(
            'name' => 'wd',
            'required' => false,
            'type' => 7,
        ),
        self::BUS_STOP => array(
            'name' => 'bus_stop',
            'required' => false,
            'type' => 5,
        ),
        self::SPT => array(
            'name' => 'spt',
            'repeated' => true,
            'type' => 6,
        ),
        self::BWANDA => array(
            'name' => 'bwanda',
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
        $this->values[self::PT] = null;
        $this->values[self::UID] = null;
        $this->values[self::WD] = null;
        $this->values[self::BUS_STOP] = null;
        $this->values[self::SPT] = array();
        $this->values[self::BWANDA] = null;
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
     * Sets value of 'pt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPt($value) {
        return $this->set(self::PT, $value);
    }

    /**
     * Returns value of 'pt' property
     *
     * @return string
     */
    public function getPt() {
        return $this->get(self::PT);
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
     * Sets value of 'wd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWd($value) {
        return $this->set(self::WD, $value);
    }

    /**
     * Returns value of 'wd' property
     *
     * @return string
     */
    public function getWd() {
        return $this->get(self::WD);
    }

    /**
     * Sets value of 'bus_stop' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBusStop($value) {
        return $this->set(self::BUS_STOP, $value);
    }

    /**
     * Returns value of 'bus_stop' property
     *
     * @return int
     */
    public function getBusStop() {
        return $this->get(self::BUS_STOP);
    }

    /**
     * Appends value to 'spt' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpt($value) {
        return $this->append(self::SPT, $value);
    }

    /**
     * Clears 'spt' list
     *
     * @return null
     */
    public function clearSpt() {
        return $this->clear(self::SPT);
    }

    /**
     * Returns 'spt' list
     *
     * @return int[]
     */
    public function getSpt() {
        return $this->get(self::SPT);
    }

    /**
     * Returns 'spt' iterator
     *
     * @return ArrayIterator
     */
    public function getSptIterator() {
        return new ArrayIterator($this->get(self::SPT));
    }

    /**
     * Returns element from 'spt' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSptAt($offset) {
        return $this->get(self::SPT, $offset);
    }

    /**
     * Returns count of 'spt' list
     *
     * @return int
     */
    public function getSptCount() {
        return $this->count(self::SPT);
    }

    /**
     * Sets value of 'bwanda' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBwanda($value) {
        return $this->set(self::BWANDA, $value);
    }

    /**
     * Returns value of 'bwanda' property
     *
     * @return int
     */
    public function getBwanda() {
        return $this->get(self::BWANDA);
    }
}
}

/**
 * Option message
 */
if (!class_exists('Option')) {
class Option extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const AVOID_JAM = 1;
    const TOTAL = 2;
    const START_NAME = 3;
    const END_NAME = 4;
    const START = 5;
    const END = 6;
    const SY = 7;
    const PREFER = 8;
    const VIA_NAME = 9;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::AVOID_JAM => array(
            'name' => 'avoid_jam',
            'required' => false,
            'type' => 5,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => 5,
        ),
        self::START_NAME => array(
            'name' => 'start_name',
            'required' => false,
            'type' => 7,
        ),
        self::END_NAME => array(
            'name' => 'end_name',
            'required' => false,
            'type' => 7,
        ),
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => 'Start',
        ),
        self::END => array(
            'name' => 'end',
            'repeated' => true,
            'type' => 'End',
        ),
        self::SY => array(
            'name' => 'sy',
            'required' => false,
            'type' => 5,
        ),
        self::PREFER => array(
            'name' => 'prefer',
            'required' => false,
            'type' => 5,
        ),
        self::VIA_NAME => array(
            'name' => 'via_name',
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
        $this->values[self::AVOID_JAM] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::START_NAME] = null;
        $this->values[self::END_NAME] = null;
        $this->values[self::START] = null;
        $this->values[self::END] = array();
        $this->values[self::SY] = null;
        $this->values[self::PREFER] = null;
        $this->values[self::VIA_NAME] = array();
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
     * Sets value of 'avoid_jam' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAvoidJam($value) {
        return $this->set(self::AVOID_JAM, $value);
    }

    /**
     * Returns value of 'avoid_jam' property
     *
     * @return int
     */
    public function getAvoidJam() {
        return $this->get(self::AVOID_JAM);
    }

    /**
     * Sets value of 'total' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotal($value) {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return int
     */
    public function getTotal() {
        return $this->get(self::TOTAL);
    }

    /**
     * Sets value of 'start_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartName($value) {
        return $this->set(self::START_NAME, $value);
    }

    /**
     * Returns value of 'start_name' property
     *
     * @return string
     */
    public function getStartName() {
        return $this->get(self::START_NAME);
    }

    /**
     * Sets value of 'end_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndName($value) {
        return $this->set(self::END_NAME, $value);
    }

    /**
     * Returns value of 'end_name' property
     *
     * @return string
     */
    public function getEndName() {
        return $this->get(self::END_NAME);
    }

    /**
     * Sets value of 'start' property
     *
     * @param Start $value Property value
     *
     * @return null
     */
    public function setStart(Start $value) {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return Start
     */
    public function getStart() {
        return $this->get(self::START);
    }

    /**
     * Appends value to 'end' list
     *
     * @param End $value Value to append
     *
     * @return null
     */
    public function appendEnd(End $value) {
        return $this->append(self::END, $value);
    }

    /**
     * Clears 'end' list
     *
     * @return null
     */
    public function clearEnd() {
        return $this->clear(self::END);
    }

    /**
     * Returns 'end' list
     *
     * @return End[]
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Returns 'end' iterator
     *
     * @return ArrayIterator
     */
    public function getEndIterator() {
        return new ArrayIterator($this->get(self::END));
    }

    /**
     * Returns element from 'end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return End
     */
    public function getEndAt($offset) {
        return $this->get(self::END, $offset);
    }

    /**
     * Returns count of 'end' list
     *
     * @return int
     */
    public function getEndCount() {
        return $this->count(self::END);
    }

    /**
     * Sets value of 'sy' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setSy($value) {
        return $this->set(self::SY, $value);
    }

    /**
     * Returns value of 'sy' property
     *
     * @return int
     */
    public function getSy() {
        return $this->get(self::SY);
    }

    /**
     * Sets value of 'prefer' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPrefer($value) {
        return $this->set(self::PREFER, $value);
    }

    /**
     * Returns value of 'prefer' property
     *
     * @return int
     */
    public function getPrefer() {
        return $this->get(self::PREFER);
    }

    /**
     * Appends value to 'via_name' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendViaName($value) {
        return $this->append(self::VIA_NAME, $value);
    }

    /**
     * Clears 'via_name' list
     *
     * @return null
     */
    public function clearViaName() {
        return $this->clear(self::VIA_NAME);
    }

    /**
     * Returns 'via_name' list
     *
     * @return string[]
     */
    public function getViaName() {
        return $this->get(self::VIA_NAME);
    }

    /**
     * Returns 'via_name' iterator
     *
     * @return ArrayIterator
     */
    public function getViaNameIterator() {
        return new ArrayIterator($this->get(self::VIA_NAME));
    }

    /**
     * Returns element from 'via_name' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getViaNameAt($offset) {
        return $this->get(self::VIA_NAME, $offset);
    }

    /**
     * Returns count of 'via_name' list
     *
     * @return int
     */
    public function getViaNameCount() {
        return $this->count(self::VIA_NAME);
    }
}
}

/**
 * Stepis message
 */
if (!class_exists('Stepis')) {
class Stepis extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const N = 1;
    const S = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::N => array(
            'name' => 'n',
            'required' => false,
            'type' => 5,
        ),
        self::S => array(
            'name' => 's',
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
        $this->values[self::N] = null;
        $this->values[self::S] = null;
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
     * Sets value of 's' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setS($value) {
        return $this->set(self::S, $value);
    }

    /**
     * Returns value of 's' property
     *
     * @return int
     */
    public function getS() {
        return $this->get(self::S);
    }
}
}

/**
 * Infos message
 */
if (!class_exists('Infos')) {
class Infos extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INDEX = 1;
    const DURATION = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
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
        $this->values[self::INDEX] = null;
        $this->values[self::DURATION] = null;
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
     * Sets value of 'index' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setIndex($value) {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return int
     */
    public function getIndex() {
        return $this->get(self::INDEX);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }
}
}

/**
 * DurationInfo message
 */
if (!class_exists('DurationInfo')) {
class DurationInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INFOS = 3;
    const INTERVAL = 1;
    const TIMESTAMP = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => 'Infos',
        ),
        self::INTERVAL => array(
            'name' => 'interval',
            'required' => false,
            'type' => 5,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
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
        $this->values[self::INFOS] = array();
        $this->values[self::INTERVAL] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Appends value to 'infos' list
     *
     * @param Infos $value Value to append
     *
     * @return null
     */
    public function appendInfos(Infos $value) {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos() {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return Infos[]
     */
    public function getInfos() {
        return $this->get(self::INFOS);
    }

    /**
     * Returns 'infos' iterator
     *
     * @return ArrayIterator
     */
    public function getInfosIterator() {
        return new ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Infos
     */
    public function getInfosAt($offset) {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount() {
        return $this->count(self::INFOS);
    }

    /**
     * Sets value of 'interval' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInterval($value) {
        return $this->set(self::INTERVAL, $value);
    }

    /**
     * Returns value of 'interval' property
     *
     * @return int
     */
    public function getInterval() {
        return $this->get(self::INTERVAL);
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimestamp($value) {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return string
     */
    public function getTimestamp() {
        return $this->get(self::TIMESTAMP);
    }
}
}

/**
 * DurationWholeday message
 */
if (!class_exists('DurationWholeday')) {
class DurationWholeday extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const INFOS = 3;
    const INTERVAL = 1;
    const TIMESTAMP = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::INFOS => array(
            'name' => 'infos',
            'repeated' => true,
            'type' => 'Infos',
        ),
        self::INTERVAL => array(
            'name' => 'interval',
            'required' => false,
            'type' => 5,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
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
        $this->values[self::INFOS] = array();
        $this->values[self::INTERVAL] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Appends value to 'infos' list
     *
     * @param Infos $value Value to append
     *
     * @return null
     */
    public function appendInfos(Infos $value) {
        return $this->append(self::INFOS, $value);
    }

    /**
     * Clears 'infos' list
     *
     * @return null
     */
    public function clearInfos() {
        return $this->clear(self::INFOS);
    }

    /**
     * Returns 'infos' list
     *
     * @return Infos[]
     */
    public function getInfos() {
        return $this->get(self::INFOS);
    }

    /**
     * Returns 'infos' iterator
     *
     * @return ArrayIterator
     */
    public function getInfosIterator() {
        return new ArrayIterator($this->get(self::INFOS));
    }

    /**
     * Returns element from 'infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Infos
     */
    public function getInfosAt($offset) {
        return $this->get(self::INFOS, $offset);
    }

    /**
     * Returns count of 'infos' list
     *
     * @return int
     */
    public function getInfosCount() {
        return $this->count(self::INFOS);
    }

    /**
     * Sets value of 'interval' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setInterval($value) {
        return $this->set(self::INTERVAL, $value);
    }

    /**
     * Returns value of 'interval' property
     *
     * @return int
     */
    public function getInterval() {
        return $this->get(self::INTERVAL);
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimestamp($value) {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return string
     */
    public function getTimestamp() {
        return $this->get(self::TIMESTAMP);
    }
}
}

/**
 * Legs message
 */
if (!class_exists('Legs')) {
class Legs extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DISTANCE = 1;
    const DURATION = 2;
    const STEPIS = 3;
    const MRSL = 4;
    const DURATION_INFO = 5;
    const DURATION_WHOLEDAY = 6;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::DURATION => array(
            'name' => 'duration',
            'required' => false,
            'type' => 5,
        ),
        self::STEPIS => array(
            'name' => 'stepis',
            'repeated' => true,
            'type' => 'Stepis',
        ),
        self::MRSL => array(
            'name' => 'mrsl',
            'required' => false,
            'type' => 7,
        ),
        self::DURATION_INFO => array(
            'name' => 'duration_info',
            'required' => false,
            'type' => 'DurationInfo',
        ),
        self::DURATION_WHOLEDAY => array(
            'name' => 'duration_wholeday',
            'required' => false,
            'type' => 'DurationWholeday',
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
        $this->values[self::DISTANCE] = null;
        $this->values[self::DURATION] = null;
        $this->values[self::STEPIS] = array();
        $this->values[self::MRSL] = null;
        $this->values[self::DURATION_INFO] = null;
        $this->values[self::DURATION_WHOLEDAY] = null;
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
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'duration' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDuration($value) {
        return $this->set(self::DURATION, $value);
    }

    /**
     * Returns value of 'duration' property
     *
     * @return int
     */
    public function getDuration() {
        return $this->get(self::DURATION);
    }

    /**
     * Appends value to 'stepis' list
     *
     * @param Stepis $value Value to append
     *
     * @return null
     */
    public function appendStepis(Stepis $value) {
        return $this->append(self::STEPIS, $value);
    }

    /**
     * Clears 'stepis' list
     *
     * @return null
     */
    public function clearStepis() {
        return $this->clear(self::STEPIS);
    }

    /**
     * Returns 'stepis' list
     *
     * @return Stepis[]
     */
    public function getStepis() {
        return $this->get(self::STEPIS);
    }

    /**
     * Returns 'stepis' iterator
     *
     * @return ArrayIterator
     */
    public function getStepisIterator() {
        return new ArrayIterator($this->get(self::STEPIS));
    }

    /**
     * Returns element from 'stepis' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Stepis
     */
    public function getStepisAt($offset) {
        return $this->get(self::STEPIS, $offset);
    }

    /**
     * Returns count of 'stepis' list
     *
     * @return int
     */
    public function getStepisCount() {
        return $this->count(self::STEPIS);
    }

    /**
     * Sets value of 'mrsl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMrsl($value) {
        return $this->set(self::MRSL, $value);
    }

    /**
     * Returns value of 'mrsl' property
     *
     * @return string
     */
    public function getMrsl() {
        return $this->get(self::MRSL);
    }

    /**
     * Sets value of 'duration_info' property
     *
     * @param DurationInfo $value Property value
     *
     * @return null
     */
    public function setDurationInfo(DurationInfo $value) {
        return $this->set(self::DURATION_INFO, $value);
    }

    /**
     * Returns value of 'duration_info' property
     *
     * @return DurationInfo
     */
    public function getDurationInfo() {
        return $this->get(self::DURATION_INFO);
    }

    /**
     * Sets value of 'duration_wholeday' property
     *
     * @param DurationWholeday $value Property value
     *
     * @return null
     */
    public function setDurationWholeday(DurationWholeday $value) {
        return $this->set(self::DURATION_WHOLEDAY, $value);
    }

    /**
     * Returns value of 'duration_wholeday' property
     *
     * @return DurationWholeday
     */
    public function getDurationWholeday() {
        return $this->get(self::DURATION_WHOLEDAY);
    }
}
}

/**
 * WholeCondition message
 */
if (!class_exists('WholeCondition')) {
class WholeCondition extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TYPE = 1;
    const LENGTH = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 5,
        ),
        self::LENGTH => array(
            'name' => 'length',
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
        $this->values[self::TYPE] = null;
        $this->values[self::LENGTH] = null;
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
     * Sets value of 'length' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLength($value) {
        return $this->set(self::LENGTH, $value);
    }

    /**
     * Returns value of 'length' property
     *
     * @return int
     */
    public function getLength() {
        return $this->get(self::LENGTH);
    }
}
}

/**
 * CarPreferInfo message
 */
if (!class_exists('CarPreferInfo')) {
class CarPreferInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CAR_PREFER_VAL = 1;
    const CAR_PREFER_TAB = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CAR_PREFER_VAL => array(
            'name' => 'car_prefer_val',
            'required' => false,
            'type' => 5,
        ),
        self::CAR_PREFER_TAB => array(
            'name' => 'car_prefer_tab',
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
        $this->values[self::CAR_PREFER_VAL] = null;
        $this->values[self::CAR_PREFER_TAB] = null;
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
     * Sets value of 'car_prefer_val' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCarPreferVal($value) {
        return $this->set(self::CAR_PREFER_VAL, $value);
    }

    /**
     * Returns value of 'car_prefer_val' property
     *
     * @return int
     */
    public function getCarPreferVal() {
        return $this->get(self::CAR_PREFER_VAL);
    }

    /**
     * Sets value of 'car_prefer_tab' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCarPreferTab($value) {
        return $this->set(self::CAR_PREFER_TAB, $value);
    }

    /**
     * Returns value of 'car_prefer_tab' property
     *
     * @return string
     */
    public function getCarPreferTab() {
        return $this->get(self::CAR_PREFER_TAB);
    }
}
}

/**
 * CarPreferInfoArray message
 */
if (!class_exists('CarPreferInfoArray')) {
class CarPreferInfoArray extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CAR_INFO_ARRAY = 1;
    const CAR_CITY_CODE = 2;
    const LOCAL_ENABLE_TIPS = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CAR_INFO_ARRAY => array(
            'name' => 'car_info_array',
            'repeated' => true,
            'type' => 'CarPreferInfo',
        ),
        self::CAR_CITY_CODE => array(
            'default' => -1, 
            'name' => 'car_city_code',
            'required' => false,
            'type' => 5,
        ),
        self::LOCAL_ENABLE_TIPS => array(
            'name' => 'local_enable_tips',
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
        $this->values[self::CAR_INFO_ARRAY] = array();
        $this->values[self::CAR_CITY_CODE] = -1;
        $this->values[self::LOCAL_ENABLE_TIPS] = null;
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
     * Appends value to 'car_info_array' list
     *
     * @param CarPreferInfo $value Value to append
     *
     * @return null
     */
    public function appendCarInfoArray(CarPreferInfo $value) {
        return $this->append(self::CAR_INFO_ARRAY, $value);
    }

    /**
     * Clears 'car_info_array' list
     *
     * @return null
     */
    public function clearCarInfoArray() {
        return $this->clear(self::CAR_INFO_ARRAY);
    }

    /**
     * Returns 'car_info_array' list
     *
     * @return CarPreferInfo[]
     */
    public function getCarInfoArray() {
        return $this->get(self::CAR_INFO_ARRAY);
    }

    /**
     * Returns 'car_info_array' iterator
     *
     * @return ArrayIterator
     */
    public function getCarInfoArrayIterator() {
        return new ArrayIterator($this->get(self::CAR_INFO_ARRAY));
    }

    /**
     * Returns element from 'car_info_array' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CarPreferInfo
     */
    public function getCarInfoArrayAt($offset) {
        return $this->get(self::CAR_INFO_ARRAY, $offset);
    }

    /**
     * Returns count of 'car_info_array' list
     *
     * @return int
     */
    public function getCarInfoArrayCount() {
        return $this->count(self::CAR_INFO_ARRAY);
    }

    /**
     * Sets value of 'car_city_code' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCarCityCode($value) {
        return $this->set(self::CAR_CITY_CODE, $value);
    }

    /**
     * Returns value of 'car_city_code' property
     *
     * @return int
     */
    public function getCarCityCode() {
        return $this->get(self::CAR_CITY_CODE);
    }

    /**
     * Sets value of 'local_enable_tips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocalEnableTips($value) {
        return $this->set(self::LOCAL_ENABLE_TIPS, $value);
    }

    /**
     * Returns value of 'local_enable_tips' property
     *
     * @return string
     */
    public function getLocalEnableTips() {
        return $this->get(self::LOCAL_ENABLE_TIPS);
    }
}
}

/**
 * Routes message
 */
if (!class_exists('Routes')) {
class Routes extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DESC = 1;
    const MRSL = 2;
    const LEGS = 3;
    const TRAFFIC_CONDITION = 4;
    const MAIN_ROADS = 5;
    const TOLL = 6;
    const LIGHT_NUM = 7;
    const WAITING_TIME = 8;
    const CONGESTION_LENGTH = 9;
    const TAB = 10;
    const WHOLE_CONDITION = 11;
    const CAR_PREFER_ARRAY = 12;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => 7,
        ),
        self::MRSL => array(
            'name' => 'mrsl',
            'required' => false,
            'type' => 7,
        ),
        self::LEGS => array(
            'name' => 'legs',
            'repeated' => true,
            'type' => 'Legs',
        ),
        self::TRAFFIC_CONDITION => array(
            'name' => 'traffic_condition',
            'required' => false,
            'type' => 5,
        ),
        self::MAIN_ROADS => array(
            'name' => 'main_roads',
            'required' => false,
            'type' => 7,
        ),
        self::TOLL => array(
            'name' => 'toll',
            'required' => false,
            'type' => 5,
        ),
        self::LIGHT_NUM => array(
            'name' => 'light_num',
            'required' => false,
            'type' => 5,
        ),
        self::WAITING_TIME => array(
            'name' => 'waiting_time',
            'required' => false,
            'type' => 7,
        ),
        self::CONGESTION_LENGTH => array(
            'name' => 'congestion_length',
            'required' => false,
            'type' => 5,
        ),
        self::TAB => array(
            'name' => 'tab',
            'required' => false,
            'type' => 7,
        ),
        self::WHOLE_CONDITION => array(
            'name' => 'whole_condition',
            'required' => false,
            'type' => 'WholeCondition',
        ),
        self::CAR_PREFER_ARRAY => array(
            'name' => 'car_prefer_array',
            'required' => false,
            'type' => 'CarPreferInfoArray',
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
        $this->values[self::DESC] = null;
        $this->values[self::MRSL] = null;
        $this->values[self::LEGS] = array();
        $this->values[self::TRAFFIC_CONDITION] = null;
        $this->values[self::MAIN_ROADS] = null;
        $this->values[self::TOLL] = null;
        $this->values[self::LIGHT_NUM] = null;
        $this->values[self::WAITING_TIME] = null;
        $this->values[self::CONGESTION_LENGTH] = null;
        $this->values[self::TAB] = null;
        $this->values[self::WHOLE_CONDITION] = null;
        $this->values[self::CAR_PREFER_ARRAY] = null;
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
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value) {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc() {
        return $this->get(self::DESC);
    }

    /**
     * Sets value of 'mrsl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMrsl($value) {
        return $this->set(self::MRSL, $value);
    }

    /**
     * Returns value of 'mrsl' property
     *
     * @return string
     */
    public function getMrsl() {
        return $this->get(self::MRSL);
    }

    /**
     * Appends value to 'legs' list
     *
     * @param Legs $value Value to append
     *
     * @return null
     */
    public function appendLegs(Legs $value) {
        return $this->append(self::LEGS, $value);
    }

    /**
     * Clears 'legs' list
     *
     * @return null
     */
    public function clearLegs() {
        return $this->clear(self::LEGS);
    }

    /**
     * Returns 'legs' list
     *
     * @return Legs[]
     */
    public function getLegs() {
        return $this->get(self::LEGS);
    }

    /**
     * Returns 'legs' iterator
     *
     * @return ArrayIterator
     */
    public function getLegsIterator() {
        return new ArrayIterator($this->get(self::LEGS));
    }

    /**
     * Returns element from 'legs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Legs
     */
    public function getLegsAt($offset) {
        return $this->get(self::LEGS, $offset);
    }

    /**
     * Returns count of 'legs' list
     *
     * @return int
     */
    public function getLegsCount() {
        return $this->count(self::LEGS);
    }

    /**
     * Sets value of 'traffic_condition' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTrafficCondition($value) {
        return $this->set(self::TRAFFIC_CONDITION, $value);
    }

    /**
     * Returns value of 'traffic_condition' property
     *
     * @return int
     */
    public function getTrafficCondition() {
        return $this->get(self::TRAFFIC_CONDITION);
    }

    /**
     * Sets value of 'main_roads' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMainRoads($value) {
        return $this->set(self::MAIN_ROADS, $value);
    }

    /**
     * Returns value of 'main_roads' property
     *
     * @return string
     */
    public function getMainRoads() {
        return $this->get(self::MAIN_ROADS);
    }

    /**
     * Sets value of 'toll' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setToll($value) {
        return $this->set(self::TOLL, $value);
    }

    /**
     * Returns value of 'toll' property
     *
     * @return int
     */
    public function getToll() {
        return $this->get(self::TOLL);
    }

    /**
     * Sets value of 'light_num' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLightNum($value) {
        return $this->set(self::LIGHT_NUM, $value);
    }

    /**
     * Returns value of 'light_num' property
     *
     * @return int
     */
    public function getLightNum() {
        return $this->get(self::LIGHT_NUM);
    }

    /**
     * Sets value of 'waiting_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWaitingTime($value) {
        return $this->set(self::WAITING_TIME, $value);
    }

    /**
     * Returns value of 'waiting_time' property
     *
     * @return string
     */
    public function getWaitingTime() {
        return $this->get(self::WAITING_TIME);
    }

    /**
     * Sets value of 'congestion_length' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCongestionLength($value) {
        return $this->set(self::CONGESTION_LENGTH, $value);
    }

    /**
     * Returns value of 'congestion_length' property
     *
     * @return int
     */
    public function getCongestionLength() {
        return $this->get(self::CONGESTION_LENGTH);
    }

    /**
     * Sets value of 'tab' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTab($value) {
        return $this->set(self::TAB, $value);
    }

    /**
     * Returns value of 'tab' property
     *
     * @return string
     */
    public function getTab() {
        return $this->get(self::TAB);
    }

    /**
     * Sets value of 'whole_condition' property
     *
     * @param WholeCondition $value Property value
     *
     * @return null
     */
    public function setWholeCondition(WholeCondition $value) {
        return $this->set(self::WHOLE_CONDITION, $value);
    }

    /**
     * Returns value of 'whole_condition' property
     *
     * @return WholeCondition
     */
    public function getWholeCondition() {
        return $this->get(self::WHOLE_CONDITION);
    }

    /**
     * Sets value of 'car_prefer_array' property
     *
     * @param CarPreferInfoArray $value Property value
     *
     * @return null
     */
    public function setCarPreferArray(CarPreferInfoArray $value) {
        return $this->set(self::CAR_PREFER_ARRAY, $value);
    }

    /**
     * Returns value of 'car_prefer_array' property
     *
     * @return CarPreferInfoArray
     */
    public function getCarPreferArray() {
        return $this->get(self::CAR_PREFER_ARRAY);
    }
}
}

/**
 * Steps message
 */
if (!class_exists('Steps')) {
class Steps extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DIRECTION = 1;
    const DISTANCE = 2;
    const INSTRUCTIONS = 3;
    const PATH = 4;
    const TURN = 5;
    const START_INSTRUCTIONS = 6;
    const END_INSTRUCTIONS = 7;
    const SPATH = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DIRECTION => array(
            'name' => 'direction',
            'required' => false,
            'type' => 5,
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 5,
        ),
        self::INSTRUCTIONS => array(
            'name' => 'instructions',
            'required' => false,
            'type' => 7,
        ),
        self::PATH => array(
            'name' => 'path',
            'required' => false,
            'type' => 7,
        ),
        self::TURN => array(
            'name' => 'turn',
            'required' => false,
            'type' => 5,
        ),
        self::START_INSTRUCTIONS => array(
            'name' => 'start_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::END_INSTRUCTIONS => array(
            'name' => 'end_instructions',
            'required' => false,
            'type' => 7,
        ),
        self::SPATH => array(
            'name' => 'spath',
            'repeated' => true,
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
        $this->values[self::DIRECTION] = null;
        $this->values[self::DISTANCE] = null;
        $this->values[self::INSTRUCTIONS] = null;
        $this->values[self::PATH] = null;
        $this->values[self::TURN] = null;
        $this->values[self::START_INSTRUCTIONS] = null;
        $this->values[self::END_INSTRUCTIONS] = null;
        $this->values[self::SPATH] = array();
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
     * Sets value of 'direction' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDirection($value) {
        return $this->set(self::DIRECTION, $value);
    }

    /**
     * Returns value of 'direction' property
     *
     * @return int
     */
    public function getDirection() {
        return $this->get(self::DIRECTION);
    }

    /**
     * Sets value of 'distance' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDistance($value) {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return int
     */
    public function getDistance() {
        return $this->get(self::DISTANCE);
    }

    /**
     * Sets value of 'instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setInstructions($value) {
        return $this->set(self::INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'instructions' property
     *
     * @return string
     */
    public function getInstructions() {
        return $this->get(self::INSTRUCTIONS);
    }

    /**
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value) {
        return $this->set(self::PATH, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath() {
        return $this->get(self::PATH);
    }

    /**
     * Sets value of 'turn' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTurn($value) {
        return $this->set(self::TURN, $value);
    }

    /**
     * Returns value of 'turn' property
     *
     * @return int
     */
    public function getTurn() {
        return $this->get(self::TURN);
    }

    /**
     * Sets value of 'start_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStartInstructions($value) {
        return $this->set(self::START_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'start_instructions' property
     *
     * @return string
     */
    public function getStartInstructions() {
        return $this->get(self::START_INSTRUCTIONS);
    }

    /**
     * Sets value of 'end_instructions' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEndInstructions($value) {
        return $this->set(self::END_INSTRUCTIONS, $value);
    }

    /**
     * Returns value of 'end_instructions' property
     *
     * @return string
     */
    public function getEndInstructions() {
        return $this->get(self::END_INSTRUCTIONS);
    }

    /**
     * Appends value to 'spath' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendSpath($value) {
        return $this->append(self::SPATH, $value);
    }

    /**
     * Clears 'spath' list
     *
     * @return null
     */
    public function clearSpath() {
        return $this->clear(self::SPATH);
    }

    /**
     * Returns 'spath' list
     *
     * @return int[]
     */
    public function getSpath() {
        return $this->get(self::SPATH);
    }

    /**
     * Returns 'spath' iterator
     *
     * @return ArrayIterator
     */
    public function getSpathIterator() {
        return new ArrayIterator($this->get(self::SPATH));
    }

    /**
     * Returns element from 'spath' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getSpathAt($offset) {
        return $this->get(self::SPATH, $offset);
    }

    /**
     * Returns count of 'spath' list
     *
     * @return int
     */
    public function getSpathCount() {
        return $this->count(self::SPATH);
    }
}
}

/**
 * Stepts message
 */
if (!class_exists('Stepts')) {
class Stepts extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const END = 1;
    const STATUS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::END => array(
            'name' => 'end',
            'repeated' => true,
            'type' => 5,
        ),
        self::STATUS => array(
            'name' => 'status',
            'repeated' => true,
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
        $this->values[self::END] = array();
        $this->values[self::STATUS] = array();
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
     * Appends value to 'end' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendEnd($value) {
        return $this->append(self::END, $value);
    }

    /**
     * Clears 'end' list
     *
     * @return null
     */
    public function clearEnd() {
        return $this->clear(self::END);
    }

    /**
     * Returns 'end' list
     *
     * @return int[]
     */
    public function getEnd() {
        return $this->get(self::END);
    }

    /**
     * Returns 'end' iterator
     *
     * @return ArrayIterator
     */
    public function getEndIterator() {
        return new ArrayIterator($this->get(self::END));
    }

    /**
     * Returns element from 'end' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getEndAt($offset) {
        return $this->get(self::END, $offset);
    }

    /**
     * Returns count of 'end' list
     *
     * @return int
     */
    public function getEndCount() {
        return $this->count(self::END);
    }

    /**
     * Appends value to 'status' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendStatus($value) {
        return $this->append(self::STATUS, $value);
    }

    /**
     * Clears 'status' list
     *
     * @return null
     */
    public function clearStatus() {
        return $this->clear(self::STATUS);
    }

    /**
     * Returns 'status' list
     *
     * @return int[]
     */
    public function getStatus() {
        return $this->get(self::STATUS);
    }

    /**
     * Returns 'status' iterator
     *
     * @return ArrayIterator
     */
    public function getStatusIterator() {
        return new ArrayIterator($this->get(self::STATUS));
    }

    /**
     * Returns element from 'status' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getStatusAt($offset) {
        return $this->get(self::STATUS, $offset);
    }

    /**
     * Returns count of 'status' list
     *
     * @return int
     */
    public function getStatusCount() {
        return $this->count(self::STATUS);
    }
}
}

/**
 * Taxis message
 */
if (!class_exists('Taxis')) {
class Taxis extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TOTAL_PRICE = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TOTAL_PRICE => array(
            'name' => 'total_price',
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
        $this->values[self::TOTAL_PRICE] = null;
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
     * Sets value of 'total_price' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTotalPrice($value) {
        return $this->set(self::TOTAL_PRICE, $value);
    }

    /**
     * Returns value of 'total_price' property
     *
     * @return string
     */
    public function getTotalPrice() {
        return $this->get(self::TOTAL_PRICE);
    }
}
}

/**
 * Steptis message
 */
if (!class_exists('Steptis')) {
class Steptis extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const N = 1;
    const S = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::N => array(
            'name' => 'n',
            'required' => false,
            'type' => 5,
        ),
        self::S => array(
            'name' => 's',
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
        $this->values[self::N] = null;
        $this->values[self::S] = null;
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
     * Sets value of 's' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setS($value) {
        return $this->set(self::S, $value);
    }

    /**
     * Returns value of 's' property
     *
     * @return int
     */
    public function getS() {
        return $this->get(self::S);
    }
}
}

/**
 * Traffics message
 */
if (!class_exists('Traffics')) {
class Traffics extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const DIGEST = 1;
    const LEGS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::DIGEST => array(
            'name' => 'digest',
            'required' => false,
            'type' => 7,
        ),
        self::LEGS => array(
            'name' => 'legs',
            'repeated' => true,
            'type' => 'Legs',
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
        $this->values[self::DIGEST] = null;
        $this->values[self::LEGS] = array();
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
     * Sets value of 'digest' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDigest($value) {
        return $this->set(self::DIGEST, $value);
    }

    /**
     * Returns value of 'digest' property
     *
     * @return string
     */
    public function getDigest() {
        return $this->get(self::DIGEST);
    }

    /**
     * Appends value to 'legs' list
     *
     * @param Legs $value Value to append
     *
     * @return null
     */
    public function appendLegs(Legs $value) {
        return $this->append(self::LEGS, $value);
    }

    /**
     * Clears 'legs' list
     *
     * @return null
     */
    public function clearLegs() {
        return $this->clear(self::LEGS);
    }

    /**
     * Returns 'legs' list
     *
     * @return Legs[]
     */
    public function getLegs() {
        return $this->get(self::LEGS);
    }

    /**
     * Returns 'legs' iterator
     *
     * @return ArrayIterator
     */
    public function getLegsIterator() {
        return new ArrayIterator($this->get(self::LEGS));
    }

    /**
     * Returns element from 'legs' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Legs
     */
    public function getLegsAt($offset) {
        return $this->get(self::LEGS, $offset);
    }

    /**
     * Returns count of 'legs' list
     *
     * @return int
     */
    public function getLegsCount() {
        return $this->count(self::LEGS);
    }
}
}

/**
 * AcciInfos message
 */
if (!class_exists('AcciInfos')) {
class AcciInfos extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TIPS = 1;
    const PATH = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TIPS => array(
            'name' => 'tips',
            'required' => false,
            'type' => 7,
        ),
        self::PATH => array(
            'name' => 'path',
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
        $this->values[self::TIPS] = null;
        $this->values[self::PATH] = null;
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
     * Sets value of 'tips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTips($value) {
        return $this->set(self::TIPS, $value);
    }

    /**
     * Returns value of 'tips' property
     *
     * @return string
     */
    public function getTips() {
        return $this->get(self::TIPS);
    }

    /**
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value) {
        return $this->set(self::PATH, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath() {
        return $this->get(self::PATH);
    }
}
}

/**
 * Content message
 */
if (!class_exists('Content')) {
class Content extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ROUTES = 1;
    const STEPS = 2;
    const STEPTS = 3;
    const TAXIS = 4;
    const TRAFFICS = 5;
    const ACCI_INFOS = 6;
    const ROUTESTATUS = 7;
    const LOCAL_INFO_TIPS = 8;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ROUTES => array(
            'name' => 'routes',
            'repeated' => true,
            'type' => 'Routes',
        ),
        self::STEPS => array(
            'name' => 'steps',
            'repeated' => true,
            'type' => 'Steps',
        ),
        self::STEPTS => array(
            'name' => 'stepts',
            'repeated' => true,
            'type' => 'Stepts',
        ),
        self::TAXIS => array(
            'name' => 'taxis',
            'repeated' => true,
            'type' => 'Taxis',
        ),
        self::TRAFFICS => array(
            'name' => 'traffics',
            'repeated' => true,
            'type' => 'Traffics',
        ),
        self::ACCI_INFOS => array(
            'name' => 'acci_infos',
            'repeated' => true,
            'type' => 'AcciInfos',
        ),
        self::ROUTESTATUS => array(
            'name' => 'routeStatus',
            'required' => false,
            'type' => 5,
        ),
        self::LOCAL_INFO_TIPS => array(
            'name' => 'local_info_tips',
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
        $this->values[self::ROUTES] = array();
        $this->values[self::STEPS] = array();
        $this->values[self::STEPTS] = array();
        $this->values[self::TAXIS] = array();
        $this->values[self::TRAFFICS] = array();
        $this->values[self::ACCI_INFOS] = array();
        $this->values[self::ROUTESTATUS] = null;
        $this->values[self::LOCAL_INFO_TIPS] = null;
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
     * Appends value to 'routes' list
     *
     * @param Routes $value Value to append
     *
     * @return null
     */
    public function appendRoutes(Routes $value) {
        return $this->append(self::ROUTES, $value);
    }

    /**
     * Clears 'routes' list
     *
     * @return null
     */
    public function clearRoutes() {
        return $this->clear(self::ROUTES);
    }

    /**
     * Returns 'routes' list
     *
     * @return Routes[]
     */
    public function getRoutes() {
        return $this->get(self::ROUTES);
    }

    /**
     * Returns 'routes' iterator
     *
     * @return ArrayIterator
     */
    public function getRoutesIterator() {
        return new ArrayIterator($this->get(self::ROUTES));
    }

    /**
     * Returns element from 'routes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Routes
     */
    public function getRoutesAt($offset) {
        return $this->get(self::ROUTES, $offset);
    }

    /**
     * Returns count of 'routes' list
     *
     * @return int
     */
    public function getRoutesCount() {
        return $this->count(self::ROUTES);
    }

    /**
     * Appends value to 'steps' list
     *
     * @param Steps $value Value to append
     *
     * @return null
     */
    public function appendSteps(Steps $value) {
        return $this->append(self::STEPS, $value);
    }

    /**
     * Clears 'steps' list
     *
     * @return null
     */
    public function clearSteps() {
        return $this->clear(self::STEPS);
    }

    /**
     * Returns 'steps' list
     *
     * @return Steps[]
     */
    public function getSteps() {
        return $this->get(self::STEPS);
    }

    /**
     * Returns 'steps' iterator
     *
     * @return ArrayIterator
     */
    public function getStepsIterator() {
        return new ArrayIterator($this->get(self::STEPS));
    }

    /**
     * Returns element from 'steps' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Steps
     */
    public function getStepsAt($offset) {
        return $this->get(self::STEPS, $offset);
    }

    /**
     * Returns count of 'steps' list
     *
     * @return int
     */
    public function getStepsCount() {
        return $this->count(self::STEPS);
    }

    /**
     * Appends value to 'stepts' list
     *
     * @param Stepts $value Value to append
     *
     * @return null
     */
    public function appendStepts(Stepts $value) {
        return $this->append(self::STEPTS, $value);
    }

    /**
     * Clears 'stepts' list
     *
     * @return null
     */
    public function clearStepts() {
        return $this->clear(self::STEPTS);
    }

    /**
     * Returns 'stepts' list
     *
     * @return Stepts[]
     */
    public function getStepts() {
        return $this->get(self::STEPTS);
    }

    /**
     * Returns 'stepts' iterator
     *
     * @return ArrayIterator
     */
    public function getSteptsIterator() {
        return new ArrayIterator($this->get(self::STEPTS));
    }

    /**
     * Returns element from 'stepts' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Stepts
     */
    public function getSteptsAt($offset) {
        return $this->get(self::STEPTS, $offset);
    }

    /**
     * Returns count of 'stepts' list
     *
     * @return int
     */
    public function getSteptsCount() {
        return $this->count(self::STEPTS);
    }

    /**
     * Appends value to 'taxis' list
     *
     * @param Taxis $value Value to append
     *
     * @return null
     */
    public function appendTaxis(Taxis $value) {
        return $this->append(self::TAXIS, $value);
    }

    /**
     * Clears 'taxis' list
     *
     * @return null
     */
    public function clearTaxis() {
        return $this->clear(self::TAXIS);
    }

    /**
     * Returns 'taxis' list
     *
     * @return Taxis[]
     */
    public function getTaxis() {
        return $this->get(self::TAXIS);
    }

    /**
     * Returns 'taxis' iterator
     *
     * @return ArrayIterator
     */
    public function getTaxisIterator() {
        return new ArrayIterator($this->get(self::TAXIS));
    }

    /**
     * Returns element from 'taxis' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Taxis
     */
    public function getTaxisAt($offset) {
        return $this->get(self::TAXIS, $offset);
    }

    /**
     * Returns count of 'taxis' list
     *
     * @return int
     */
    public function getTaxisCount() {
        return $this->count(self::TAXIS);
    }

    /**
     * Appends value to 'traffics' list
     *
     * @param Traffics $value Value to append
     *
     * @return null
     */
    public function appendTraffics(Traffics $value) {
        return $this->append(self::TRAFFICS, $value);
    }

    /**
     * Clears 'traffics' list
     *
     * @return null
     */
    public function clearTraffics() {
        return $this->clear(self::TRAFFICS);
    }

    /**
     * Returns 'traffics' list
     *
     * @return Traffics[]
     */
    public function getTraffics() {
        return $this->get(self::TRAFFICS);
    }

    /**
     * Returns 'traffics' iterator
     *
     * @return ArrayIterator
     */
    public function getTrafficsIterator() {
        return new ArrayIterator($this->get(self::TRAFFICS));
    }

    /**
     * Returns element from 'traffics' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Traffics
     */
    public function getTrafficsAt($offset) {
        return $this->get(self::TRAFFICS, $offset);
    }

    /**
     * Returns count of 'traffics' list
     *
     * @return int
     */
    public function getTrafficsCount() {
        return $this->count(self::TRAFFICS);
    }

    /**
     * Appends value to 'acci_infos' list
     *
     * @param AcciInfos $value Value to append
     *
     * @return null
     */
    public function appendAcciInfos(AcciInfos $value) {
        return $this->append(self::ACCI_INFOS, $value);
    }

    /**
     * Clears 'acci_infos' list
     *
     * @return null
     */
    public function clearAcciInfos() {
        return $this->clear(self::ACCI_INFOS);
    }

    /**
     * Returns 'acci_infos' list
     *
     * @return AcciInfos[]
     */
    public function getAcciInfos() {
        return $this->get(self::ACCI_INFOS);
    }

    /**
     * Returns 'acci_infos' iterator
     *
     * @return ArrayIterator
     */
    public function getAcciInfosIterator() {
        return new ArrayIterator($this->get(self::ACCI_INFOS));
    }

    /**
     * Returns element from 'acci_infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return AcciInfos
     */
    public function getAcciInfosAt($offset) {
        return $this->get(self::ACCI_INFOS, $offset);
    }

    /**
     * Returns count of 'acci_infos' list
     *
     * @return int
     */
    public function getAcciInfosCount() {
        return $this->count(self::ACCI_INFOS);
    }

    /**
     * Sets value of 'routeStatus' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setRouteStatus($value) {
        return $this->set(self::ROUTESTATUS, $value);
    }

    /**
     * Returns value of 'routeStatus' property
     *
     * @return int
     */
    public function getRouteStatus() {
        return $this->get(self::ROUTESTATUS);
    }

    /**
     * Sets value of 'local_info_tips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocalInfoTips($value) {
        return $this->set(self::LOCAL_INFO_TIPS, $value);
    }

    /**
     * Returns value of 'local_info_tips' property
     *
     * @return string
     */
    public function getLocalInfoTips() {
        return $this->get(self::LOCAL_INFO_TIPS);
    }
}
}

/**
 * Cars message
 */
if (!class_exists('Cars')) {
class Cars extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;
    const TEST = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::OPTION => array(
            'name' => 'option',
            'required' => false,
            'type' => 'Option',
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => 'Content',
        ),
        self::TEST => array(
            'name' => 'test',
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
        $this->values[self::OPTION] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::TEST] = null;
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
     * Sets value of 'option' property
     *
     * @param Option $value Property value
     *
     * @return null
     */
    public function setOption(Option $value) {
        return $this->set(self::OPTION, $value);
    }

    /**
     * Returns value of 'option' property
     *
     * @return Option
     */
    public function getOption() {
        return $this->get(self::OPTION);
    }

    /**
     * Sets value of 'content' property
     *
     * @param Content $value Property value
     *
     * @return null
     */
    public function setContent(Content $value) {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return Content
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }

    /**
     * Sets value of 'test' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTest($value) {
        return $this->set(self::TEST, $value);
    }

    /**
     * Returns value of 'test' property
     *
     * @return string
     */
    public function getTest() {
        return $this->get(self::TEST);
    }
}
}
