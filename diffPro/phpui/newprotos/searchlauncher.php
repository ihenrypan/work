<?php
/**
 * Auto generated from map_search_launcher.proto.1 at 2015-06-23 14:48:41
 */

/**
 * Option message
 */
if (!class_exists('Option')) {
class Option extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERROR = 1;
    const VERSION = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 5,
        ),
        self::VERSION => array(
            'name' => 'version',
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
        $this->values[self::ERROR] = null;
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
     * Sets value of 'version' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setVersion($value) {
        return $this->set(self::VERSION, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return int
     */
    public function getVersion() {
        return $this->get(self::VERSION);
    }
}
}

/**
 * Jumpto message
 */
if (!class_exists('Jumpto')) {
class Jumpto extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CF_TAG = 1;
    const PARAMS = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CF_TAG => array(
            'name' => 'cf_tag',
            'required' => false,
            'type' => 7,
        ),
        self::PARAMS => array(
            'name' => 'params',
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
        $this->values[self::CF_TAG] = null;
        $this->values[self::PARAMS] = null;
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
     * Sets value of 'cf_tag' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCfTag($value) {
        return $this->set(self::CF_TAG, $value);
    }

    /**
     * Returns value of 'cf_tag' property
     *
     * @return string
     */
    public function getCfTag() {
        return $this->get(self::CF_TAG);
    }

    /**
     * Sets value of 'params' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParams($value) {
        return $this->set(self::PARAMS, $value);
    }

    /**
     * Returns value of 'params' property
     *
     * @return string
     */
    public function getParams() {
        return $this->get(self::PARAMS);
    }
}
}

/**
 * Browser message
 */
if (!class_exists('Browser')) {
class Browser extends ProtobufMessage
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

/**
 * ExtParam message
 */
if (!class_exists('ExtParam')) {
class ExtParam extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const JUMPTO = 1;
    const BROWSER = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::JUMPTO => array(
            'name' => 'jumpto',
            'required' => false,
            'type' => 'Jumpto',
        ),
        self::BROWSER => array(
            'name' => 'browser',
            'required' => false,
            'type' => 'Browser',
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
        $this->values[self::JUMPTO] = null;
        $this->values[self::BROWSER] = null;
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
     * Sets value of 'jumpto' property
     *
     * @param Jumpto $value Property value
     *
     * @return null
     */
    public function setJumpto(Jumpto $value) {
        return $this->set(self::JUMPTO, $value);
    }

    /**
     * Returns value of 'jumpto' property
     *
     * @return Jumpto
     */
    public function getJumpto() {
        return $this->get(self::JUMPTO);
    }

    /**
     * Sets value of 'browser' property
     *
     * @param Browser $value Property value
     *
     * @return null
     */
    public function setBrowser(Browser $value) {
        return $this->set(self::BROWSER, $value);
    }

    /**
     * Returns value of 'browser' property
     *
     * @return Browser
     */
    public function getBrowser() {
        return $this->get(self::BROWSER);
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
    const EXT_PARAM = 2;
    const ACTION = 1;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::EXT_PARAM => array(
            'name' => 'ext_param',
            'required' => false,
            'type' => 'ExtParam',
        ),
        self::ACTION => array(
            'name' => 'action',
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
        $this->values[self::EXT_PARAM] = null;
        $this->values[self::ACTION] = null;
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
     * Sets value of 'ext_param' property
     *
     * @param ExtParam $value Property value
     *
     * @return null
     */
    public function setExtParam(ExtParam $value) {
        return $this->set(self::EXT_PARAM, $value);
    }

    /**
     * Returns value of 'ext_param' property
     *
     * @return ExtParam
     */
    public function getExtParam() {
        return $this->get(self::EXT_PARAM);
    }

    /**
     * Sets value of 'action' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAction($value) {
        return $this->set(self::ACTION, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return string
     */
    public function getAction() {
        return $this->get(self::ACTION);
    }
}
}

/**
 * SearchLauncher message
 */
if (!class_exists('SearchLauncher')) {
class SearchLauncher extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const OPTION = 1;
    const CONTENT = 2;

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
            'repeated' => true,
            'type' => 'Content',
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
        $this->values[self::CONTENT] = array();
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
     * Appends value to 'content' list
     *
     * @param Content $value Value to append
     *
     * @return null
     */
    public function appendContent(Content $value) {
        return $this->append(self::CONTENT, $value);
    }

    /**
     * Clears 'content' list
     *
     * @return null
     */
    public function clearContent() {
        return $this->clear(self::CONTENT);
    }

    /**
     * Returns 'content' list
     *
     * @return Content[]
     */
    public function getContent() {
        return $this->get(self::CONTENT);
    }

    /**
     * Returns 'content' iterator
     *
     * @return ArrayIterator
     */
    public function getContentIterator() {
        return new ArrayIterator($this->get(self::CONTENT));
    }

    /**
     * Returns element from 'content' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Content
     */
    public function getContentAt($offset) {
        return $this->get(self::CONTENT, $offset);
    }

    /**
     * Returns count of 'content' list
     *
     * @return int
     */
    public function getContentCount() {
        return $this->count(self::CONTENT);
    }
}
}
