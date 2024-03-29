<?php
/**
 * NewsArticleRssResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.17.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Content;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * NewsArticleRssResponse Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewsArticleRssResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content.NewsArticleRssResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'newsArticles' => '\Bungie\Model\Content\NewsArticleRssItem[]',
        'currentPaginationToken' => 'int',
        'nextPaginationToken' => 'int',
        'resultCountThisPage' => 'int',
        'categoryFilter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'newsArticles' => null,
        'currentPaginationToken' => 'int32',
        'nextPaginationToken' => 'int32',
        'resultCountThisPage' => 'int32',
        'categoryFilter' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'newsArticles' => 'NewsArticles',
        'currentPaginationToken' => 'CurrentPaginationToken',
        'nextPaginationToken' => 'NextPaginationToken',
        'resultCountThisPage' => 'ResultCountThisPage',
        'categoryFilter' => 'CategoryFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'newsArticles' => 'setNewsArticles',
        'currentPaginationToken' => 'setCurrentPaginationToken',
        'nextPaginationToken' => 'setNextPaginationToken',
        'resultCountThisPage' => 'setResultCountThisPage',
        'categoryFilter' => 'setCategoryFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'newsArticles' => 'getNewsArticles',
        'currentPaginationToken' => 'getCurrentPaginationToken',
        'nextPaginationToken' => 'getNextPaginationToken',
        'resultCountThisPage' => 'getResultCountThisPage',
        'categoryFilter' => 'getCategoryFilter'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['newsArticles'] = isset($data['newsArticles']) ? $data['newsArticles'] : null;
        $this->container['currentPaginationToken'] = isset($data['currentPaginationToken']) ? $data['currentPaginationToken'] : null;
        $this->container['nextPaginationToken'] = isset($data['nextPaginationToken']) ? $data['nextPaginationToken'] : null;
        $this->container['resultCountThisPage'] = isset($data['resultCountThisPage']) ? $data['resultCountThisPage'] : null;
        $this->container['categoryFilter'] = isset($data['categoryFilter']) ? $data['categoryFilter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets newsArticles
     *
     * @return \Bungie\Model\Content\NewsArticleRssItem[]|null
     */
    public function getNewsArticles()
    {
        return $this->container['newsArticles'];
    }

    /**
     * Sets newsArticles
     *
     * @param \Bungie\Model\Content\NewsArticleRssItem[]|null $newsArticles newsArticles
     *
     * @return $this
     */
    public function setNewsArticles($newsArticles)
    {
        $this->container['newsArticles'] = $newsArticles;

        return $this;
    }

    /**
     * Gets currentPaginationToken
     *
     * @return int|null
     */
    public function getCurrentPaginationToken()
    {
        return $this->container['currentPaginationToken'];
    }

    /**
     * Sets currentPaginationToken
     *
     * @param int|null $currentPaginationToken currentPaginationToken
     *
     * @return $this
     */
    public function setCurrentPaginationToken($currentPaginationToken)
    {
        $this->container['currentPaginationToken'] = $currentPaginationToken;

        return $this;
    }

    /**
     * Gets nextPaginationToken
     *
     * @return int|null
     */
    public function getNextPaginationToken()
    {
        return $this->container['nextPaginationToken'];
    }

    /**
     * Sets nextPaginationToken
     *
     * @param int|null $nextPaginationToken nextPaginationToken
     *
     * @return $this
     */
    public function setNextPaginationToken($nextPaginationToken)
    {
        $this->container['nextPaginationToken'] = $nextPaginationToken;

        return $this;
    }

    /**
     * Gets resultCountThisPage
     *
     * @return int|null
     */
    public function getResultCountThisPage()
    {
        return $this->container['resultCountThisPage'];
    }

    /**
     * Sets resultCountThisPage
     *
     * @param int|null $resultCountThisPage resultCountThisPage
     *
     * @return $this
     */
    public function setResultCountThisPage($resultCountThisPage)
    {
        $this->container['resultCountThisPage'] = $resultCountThisPage;

        return $this;
    }

    /**
     * Gets categoryFilter
     *
     * @return string|null
     */
    public function getCategoryFilter()
    {
        return $this->container['categoryFilter'];
    }

    /**
     * Sets categoryFilter
     *
     * @param string|null $categoryFilter categoryFilter
     *
     * @return $this
     */
    public function setCategoryFilter($categoryFilter)
    {
        $this->container['categoryFilter'] = $categoryFilter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


