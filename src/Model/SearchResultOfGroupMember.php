<?php
/**
 * SearchResultOfGroupMember
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * SearchResultOfGroupMember Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchResultOfGroupMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchResultOfGroupMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'results' => '\Bungie\Model\GroupsV2GroupMember[]',
        'totalResults' => 'int',
        'hasMore' => 'bool',
        'query' => '\Bungie\Model\QueriesPagedQuery',
        'replacementContinuationToken' => 'string',
        'useTotalResults' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'results' => null,
        'totalResults' => 'int32',
        'hasMore' => null,
        'query' => null,
        'replacementContinuationToken' => null,
        'useTotalResults' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'results' => 'results',
        'totalResults' => 'totalResults',
        'hasMore' => 'hasMore',
        'query' => 'query',
        'replacementContinuationToken' => 'replacementContinuationToken',
        'useTotalResults' => 'useTotalResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'results' => 'setResults',
        'totalResults' => 'setTotalResults',
        'hasMore' => 'setHasMore',
        'query' => 'setQuery',
        'replacementContinuationToken' => 'setReplacementContinuationToken',
        'useTotalResults' => 'setUseTotalResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'results' => 'getResults',
        'totalResults' => 'getTotalResults',
        'hasMore' => 'getHasMore',
        'query' => 'getQuery',
        'replacementContinuationToken' => 'getReplacementContinuationToken',
        'useTotalResults' => 'getUseTotalResults'
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
        return self::$swaggerModelName;
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
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['totalResults'] = isset($data['totalResults']) ? $data['totalResults'] : null;
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['replacementContinuationToken'] = isset($data['replacementContinuationToken']) ? $data['replacementContinuationToken'] : null;
        $this->container['useTotalResults'] = isset($data['useTotalResults']) ? $data['useTotalResults'] : null;
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

        return true;
    }


    /**
     * Gets results
     *
     * @return \Bungie\Model\GroupsV2GroupMember[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \Bungie\Model\GroupsV2GroupMember[] $results results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

        return $this;
    }

    /**
     * Gets totalResults
     *
     * @return int
     */
    public function getTotalResults()
    {
        return $this->container['totalResults'];
    }

    /**
     * Sets totalResults
     *
     * @param int $totalResults totalResults
     *
     * @return $this
     */
    public function setTotalResults($totalResults)
    {
        $this->container['totalResults'] = $totalResults;

        return $this;
    }

    /**
     * Gets hasMore
     *
     * @return bool
     */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
     * Sets hasMore
     *
     * @param bool $hasMore hasMore
     *
     * @return $this
     */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \Bungie\Model\QueriesPagedQuery
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Bungie\Model\QueriesPagedQuery $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets replacementContinuationToken
     *
     * @return string
     */
    public function getReplacementContinuationToken()
    {
        return $this->container['replacementContinuationToken'];
    }

    /**
     * Sets replacementContinuationToken
     *
     * @param string $replacementContinuationToken replacementContinuationToken
     *
     * @return $this
     */
    public function setReplacementContinuationToken($replacementContinuationToken)
    {
        $this->container['replacementContinuationToken'] = $replacementContinuationToken;

        return $this;
    }

    /**
     * Gets useTotalResults
     *
     * @return bool
     */
    public function getUseTotalResults()
    {
        return $this->container['useTotalResults'];
    }

    /**
     * Sets useTotalResults
     *
     * @param bool $useTotalResults If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one.
     *
     * @return $this
     */
    public function setUseTotalResults($useTotalResults)
    {
        $this->container['useTotalResults'] = $useTotalResults;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


