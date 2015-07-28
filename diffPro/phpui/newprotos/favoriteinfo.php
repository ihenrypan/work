<?php
/**
 * Auto generated from map_favorite_info.proto.1 at 2015-06-23 14:47:31
 */

/**
 * Msgdata message
 */
if (!class_exists('Msgdata')) {
class Msgdata extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const TITLE = 1;
    const CONTENTURL = 2;
    const TIMESTR = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENTURL => array(
            'name' => 'contenturl',
            'required' => false,
            'type' => 7,
        ),
        self::TIMESTR => array(
            'name' => 'timestr',
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
        $this->values[self::TITLE] = null;
        $this->values[self::CONTENTURL] = null;
        $this->values[self::TIMESTR] = null;
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
     * Sets value of 'contenturl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContenturl($value) {
        return $this->set(self::CONTENTURL, $value);
    }

    /**
     * Returns value of 'contenturl' property
     *
     * @return string
     */
    public function getContenturl() {
        return $this->get(self::CONTENTURL);
    }

    /**
     * Sets value of 'timestr' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimestr($value) {
        return $this->set(self::TIMESTR, $value);
    }

    /**
     * Returns value of 'timestr' property
     *
     * @return string
     */
    public function getTimestr() {
        return $this->get(self::TIMESTR);
    }
}
}

/**
 * ZhidahaoFollow message
 */
if (!class_exists('ZhidahaoFollow')) {
class ZhidahaoFollow extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SCREEN_NAME = 2;
    const LOGO_URL = 3;
    const NEWNUM = 4;
    const MSGDATA = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SCREEN_NAME => array(
            'name' => 'screen_name',
            'required' => false,
            'type' => 7,
        ),
        self::LOGO_URL => array(
            'name' => 'logo_url',
            'required' => false,
            'type' => 7,
        ),
        self::NEWNUM => array(
            'name' => 'newnum',
            'required' => false,
            'type' => 5,
        ),
        self::MSGDATA => array(
            'name' => 'msgdata',
            'repeated' => true,
            'type' => 'Msgdata',
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
        $this->values[self::SCREEN_NAME] = null;
        $this->values[self::LOGO_URL] = null;
        $this->values[self::NEWNUM] = null;
        $this->values[self::MSGDATA] = array();
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
     * Sets value of 'screen_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScreenName($value) {
        return $this->set(self::SCREEN_NAME, $value);
    }

    /**
     * Returns value of 'screen_name' property
     *
     * @return string
     */
    public function getScreenName() {
        return $this->get(self::SCREEN_NAME);
    }

    /**
     * Sets value of 'logo_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLogoUrl($value) {
        return $this->set(self::LOGO_URL, $value);
    }

    /**
     * Returns value of 'logo_url' property
     *
     * @return string
     */
    public function getLogoUrl() {
        return $this->get(self::LOGO_URL);
    }

    /**
     * Sets value of 'newnum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNewnum($value) {
        return $this->set(self::NEWNUM, $value);
    }

    /**
     * Returns value of 'newnum' property
     *
     * @return int
     */
    public function getNewnum() {
        return $this->get(self::NEWNUM);
    }

    /**
     * Appends value to 'msgdata' list
     *
     * @param Msgdata $value Value to append
     *
     * @return null
     */
    public function appendMsgdata(Msgdata $value) {
        return $this->append(self::MSGDATA, $value);
    }

    /**
     * Clears 'msgdata' list
     *
     * @return null
     */
    public function clearMsgdata() {
        return $this->clear(self::MSGDATA);
    }

    /**
     * Returns 'msgdata' list
     *
     * @return Msgdata[]
     */
    public function getMsgdata() {
        return $this->get(self::MSGDATA);
    }

    /**
     * Returns 'msgdata' iterator
     *
     * @return ArrayIterator
     */
    public function getMsgdataIterator() {
        return new ArrayIterator($this->get(self::MSGDATA));
    }

    /**
     * Returns element from 'msgdata' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Msgdata
     */
    public function getMsgdataAt($offset) {
        return $this->get(self::MSGDATA, $offset);
    }

    /**
     * Returns count of 'msgdata' list
     *
     * @return int
     */
    public function getMsgdataCount() {
        return $this->count(self::MSGDATA);
    }
}
}

/**
 * Details message
 */
if (!class_exists('Details')) {
class Details extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const THEME_ID = 1;
    const IF_DO = 2;
    const DO_COUNT = 3;
    const CTIME = 4;
    const ZHIDAHAO_FOLLOW = 5;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::THEME_ID => array(
            'name' => 'theme_id',
            'required' => false,
            'type' => 7,
        ),
        self::IF_DO => array(
            'name' => 'if_do',
            'required' => false,
            'type' => 7,
        ),
        self::DO_COUNT => array(
            'name' => 'do_count',
            'required' => false,
            'type' => 7,
        ),
        self::CTIME => array(
            'name' => 'ctime',
            'required' => false,
            'type' => 7,
        ),
        self::ZHIDAHAO_FOLLOW => array(
            'name' => 'zhidahao_follow',
            'required' => false,
            'type' => 'ZhidahaoFollow',
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
        $this->values[self::THEME_ID] = null;
        $this->values[self::IF_DO] = null;
        $this->values[self::DO_COUNT] = null;
        $this->values[self::CTIME] = null;
        $this->values[self::ZHIDAHAO_FOLLOW] = null;
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
     * Sets value of 'theme_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThemeId($value) {
        return $this->set(self::THEME_ID, $value);
    }

    /**
     * Returns value of 'theme_id' property
     *
     * @return string
     */
    public function getThemeId() {
        return $this->get(self::THEME_ID);
    }

    /**
     * Sets value of 'if_do' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIfDo($value) {
        return $this->set(self::IF_DO, $value);
    }

    /**
     * Returns value of 'if_do' property
     *
     * @return string
     */
    public function getIfDo() {
        return $this->get(self::IF_DO);
    }

    /**
     * Sets value of 'do_count' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDoCount($value) {
        return $this->set(self::DO_COUNT, $value);
    }

    /**
     * Returns value of 'do_count' property
     *
     * @return string
     */
    public function getDoCount() {
        return $this->get(self::DO_COUNT);
    }

    /**
     * Sets value of 'ctime' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCtime($value) {
        return $this->set(self::CTIME, $value);
    }

    /**
     * Returns value of 'ctime' property
     *
     * @return string
     */
    public function getCtime() {
        return $this->get(self::CTIME);
    }

    /**
     * Sets value of 'zhidahao_follow' property
     *
     * @param ZhidahaoFollow $value Property value
     *
     * @return null
     */
    public function setZhidahaoFollow(ZhidahaoFollow $value) {
        return $this->set(self::ZHIDAHAO_FOLLOW, $value);
    }

    /**
     * Returns value of 'zhidahao_follow' property
     *
     * @return ZhidahaoFollow
     */
    public function getZhidahaoFollow() {
        return $this->get(self::ZHIDAHAO_FOLLOW);
    }
}
}

/**
 * Data message
 */
if (!class_exists('Data')) {
class Data extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const SUBKEY = 1;
    const DETAILS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::SUBKEY => array(
            'name' => 'subkey',
            'required' => false,
            'type' => 7,
        ),
        self::DETAILS => array(
            'name' => 'details',
            'repeated' => true,
            'type' => 'Details',
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
        $this->values[self::SUBKEY] = null;
        $this->values[self::DETAILS] = array();
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
     * Sets value of 'subkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubkey($value) {
        return $this->set(self::SUBKEY, $value);
    }

    /**
     * Returns value of 'subkey' property
     *
     * @return string
     */
    public function getSubkey() {
        return $this->get(self::SUBKEY);
    }

    /**
     * Appends value to 'details' list
     *
     * @param Details $value Value to append
     *
     * @return null
     */
    public function appendDetails(Details $value) {
        return $this->append(self::DETAILS, $value);
    }

    /**
     * Clears 'details' list
     *
     * @return null
     */
    public function clearDetails() {
        return $this->clear(self::DETAILS);
    }

    /**
     * Returns 'details' list
     *
     * @return Details[]
     */
    public function getDetails() {
        return $this->get(self::DETAILS);
    }

    /**
     * Returns 'details' iterator
     *
     * @return ArrayIterator
     */
    public function getDetailsIterator() {
        return new ArrayIterator($this->get(self::DETAILS));
    }

    /**
     * Returns element from 'details' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Details
     */
    public function getDetailsAt($offset) {
        return $this->get(self::DETAILS, $offset);
    }

    /**
     * Returns count of 'details' list
     *
     * @return int
     */
    public function getDetailsCount() {
        return $this->count(self::DETAILS);
    }
}
}

/**
 * FavoriteInfo message
 */
if (!class_exists('FavoriteInfo')) {
class FavoriteInfo extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const MSG = 2;
    const DATA = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => 7,
        ),
        self::DATA => array(
            'name' => 'data',
            'repeated' => true,
            'type' => 'Data',
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
        $this->values[self::ERROR] = null;
        $this->values[self::MSG] = null;
        $this->values[self::DATA] = array();
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

    /**
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value) {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg() {
        return $this->get(self::MSG);
    }

    /**
     * Appends value to 'data' list
     *
     * @param Data $value Value to append
     *
     * @return null
     */
    public function appendData(Data $value) {
        return $this->append(self::DATA, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData() {
        return $this->clear(self::DATA);
    }

    /**
     * Returns 'data' list
     *
     * @return Data[]
     */
    public function getData() {
        return $this->get(self::DATA);
    }

    /**
     * Returns 'data' iterator
     *
     * @return ArrayIterator
     */
    public function getDataIterator() {
        return new ArrayIterator($this->get(self::DATA));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Data
     */
    public function getDataAt($offset) {
        return $this->get(self::DATA, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount() {
        return $this->count(self::DATA);
    }
}
}
