<?php
/**
 * Auto generated from map_indoor_inf.proto.1 at 2015-06-23 14:47:44
 */

/**
 * ContentList message
 */
if (!class_exists('ContentList')) {
class ContentList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const BID = 1;
    const DESCRIPTION = 2;
    const NAME = 3;
    const UID = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::BID] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'bid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBid($value) {
        return $this->set(self::BID, $value);
    }

    /**
     * Returns value of 'bid' property
     *
     * @return string
     */
    public function getBid() {
        return $this->get(self::BID);
    }

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value) {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription() {
        return $this->get(self::DESCRIPTION);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName() {
        return $this->get(self::NAME);
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
 * CatalogList message
 */
if (!class_exists('CatalogList')) {
class CatalogList extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ICON_URL = 1;
    const CONTENT_LIST = 2;
    const TYPE = 3;
    const NAME = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ICON_URL => array(
            'name' => 'icon_url',
            'required' => false,
            'type' => 7,
        ),
        self::CONTENT_LIST => array(
            'name' => 'content_list',
            'repeated' => true,
            'type' => 'ContentList',
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::ICON_URL] = null;
        $this->values[self::CONTENT_LIST] = array();
        $this->values[self::TYPE] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'icon_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIconUrl($value) {
        return $this->set(self::ICON_URL, $value);
    }

    /**
     * Returns value of 'icon_url' property
     *
     * @return string
     */
    public function getIconUrl() {
        return $this->get(self::ICON_URL);
    }

    /**
     * Appends value to 'content_list' list
     *
     * @param ContentList $value Value to append
     *
     * @return null
     */
    public function appendContentList(ContentList $value) {
        return $this->append(self::CONTENT_LIST, $value);
    }

    /**
     * Clears 'content_list' list
     *
     * @return null
     */
    public function clearContentList() {
        return $this->clear(self::CONTENT_LIST);
    }

    /**
     * Returns 'content_list' list
     *
     * @return ContentList[]
     */
    public function getContentList() {
        return $this->get(self::CONTENT_LIST);
    }

    /**
     * Returns 'content_list' iterator
     *
     * @return ArrayIterator
     */
    public function getContentListIterator() {
        return new ArrayIterator($this->get(self::CONTENT_LIST));
    }

    /**
     * Returns element from 'content_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return ContentList
     */
    public function getContentListAt($offset) {
        return $this->get(self::CONTENT_LIST, $offset);
    }

    /**
     * Returns count of 'content_list' list
     *
     * @return int
     */
    public function getContentListCount() {
        return $this->count(self::CONTENT_LIST);
    }

    /**
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName() {
        return $this->get(self::NAME);
    }
}
}

/**
 * Floorcontent message
 */
if (!class_exists('Floorcontent')) {
class Floorcontent extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const CATALOG_LIST = 1;
    const TYPE = 2;
    const NAME = 3;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::CATALOG_LIST => array(
            'name' => 'catalog_list',
            'repeated' => true,
            'type' => 'CatalogList',
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::CATALOG_LIST] = array();
        $this->values[self::TYPE] = null;
        $this->values[self::NAME] = null;
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
     * Appends value to 'catalog_list' list
     *
     * @param CatalogList $value Value to append
     *
     * @return null
     */
    public function appendCatalogList(CatalogList $value) {
        return $this->append(self::CATALOG_LIST, $value);
    }

    /**
     * Clears 'catalog_list' list
     *
     * @return null
     */
    public function clearCatalogList() {
        return $this->clear(self::CATALOG_LIST);
    }

    /**
     * Returns 'catalog_list' list
     *
     * @return CatalogList[]
     */
    public function getCatalogList() {
        return $this->get(self::CATALOG_LIST);
    }

    /**
     * Returns 'catalog_list' iterator
     *
     * @return ArrayIterator
     */
    public function getCatalogListIterator() {
        return new ArrayIterator($this->get(self::CATALOG_LIST));
    }

    /**
     * Returns element from 'catalog_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return CatalogList
     */
    public function getCatalogListAt($offset) {
        return $this->get(self::CATALOG_LIST, $offset);
    }

    /**
     * Returns count of 'catalog_list' list
     *
     * @return int
     */
    public function getCatalogListCount() {
        return $this->count(self::CATALOG_LIST);
    }

    /**
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType() {
        return $this->get(self::TYPE);
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName() {
        return $this->get(self::NAME);
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
    const NAME = 1;
    const DESCRIPTION = 2;
    const FLOOR = 3;
    const FLOORCONTENT = 4;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => 7,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => 7,
        ),
        self::FLOOR => array(
            'name' => 'floor',
            'required' => false,
            'type' => 7,
        ),
        self::FLOORCONTENT => array(
            'name' => 'floorcontent',
            'repeated' => true,
            'type' => 'Floorcontent',
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
        $this->values[self::NAME] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::FLOOR] = null;
        $this->values[self::FLOORCONTENT] = array();
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value) {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName() {
        return $this->get(self::NAME);
    }

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value) {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription() {
        return $this->get(self::DESCRIPTION);
    }

    /**
     * Sets value of 'floor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFloor($value) {
        return $this->set(self::FLOOR, $value);
    }

    /**
     * Returns value of 'floor' property
     *
     * @return string
     */
    public function getFloor() {
        return $this->get(self::FLOOR);
    }

    /**
     * Appends value to 'floorcontent' list
     *
     * @param Floorcontent $value Value to append
     *
     * @return null
     */
    public function appendFloorcontent(Floorcontent $value) {
        return $this->append(self::FLOORCONTENT, $value);
    }

    /**
     * Clears 'floorcontent' list
     *
     * @return null
     */
    public function clearFloorcontent() {
        return $this->clear(self::FLOORCONTENT);
    }

    /**
     * Returns 'floorcontent' list
     *
     * @return Floorcontent[]
     */
    public function getFloorcontent() {
        return $this->get(self::FLOORCONTENT);
    }

    /**
     * Returns 'floorcontent' iterator
     *
     * @return ArrayIterator
     */
    public function getFloorcontentIterator() {
        return new ArrayIterator($this->get(self::FLOORCONTENT));
    }

    /**
     * Returns element from 'floorcontent' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return Floorcontent
     */
    public function getFloorcontentAt($offset) {
        return $this->get(self::FLOORCONTENT, $offset);
    }

    /**
     * Returns count of 'floorcontent' list
     *
     * @return int
     */
    public function getFloorcontentCount() {
        return $this->count(self::FLOORCONTENT);
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
    const TYPE = 1;
    const CONTENT = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => 7,
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
        $this->values[self::TYPE] = null;
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
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value) {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType() {
        return $this->get(self::TYPE);
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

/**
 * IndoorInf message
 */
if (!class_exists('IndoorInf')) {
class IndoorInf extends ProtobufMessage
{
    /** 
     * Field index constants
     */
    const ERRORNO = 1;
    const DATA = 2;

    /**
     * @var array Field descriptors
     */
    protected static $fields = array(
        self::ERRORNO => array(
            'name' => 'errorNo',
            'required' => false,
            'type' => 5,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
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
        $this->values[self::ERRORNO] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'errorNo' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setErrorNo($value) {
        return $this->set(self::ERRORNO, $value);
    }

    /**
     * Returns value of 'errorNo' property
     *
     * @return int
     */
    public function getErrorNo() {
        return $this->get(self::ERRORNO);
    }

    /**
     * Sets value of 'data' property
     *
     * @param Data $value Property value
     *
     * @return null
     */
    public function setData(Data $value) {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return Data
     */
    public function getData() {
        return $this->get(self::DATA);
    }
}
}
