<?php
/**
 * TrendingDetail
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Trending;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * TrendingDetail Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrendingDetail implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Trending.TrendingDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'string',
        'entityType' => 'int',
        'news' => '\Bungie\Model\Trending\TrendingEntryNews',
        'support' => '\Bungie\Model\Trending\TrendingEntrySupportArticle',
        'destinyItem' => '\Bungie\Model\Trending\TrendingEntryDestinyItem',
        'destinyActivity' => '\Bungie\Model\Trending\TrendingEntryDestinyActivity',
        'destinyRitual' => '\Bungie\Model\Trending\TrendingEntryDestinyRitual',
        'creation' => '\Bungie\Model\Trending\TrendingEntryCommunityCreation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'entityType' => 'int32',
        'news' => null,
        'support' => null,
        'destinyItem' => null,
        'destinyActivity' => null,
        'destinyRitual' => null,
        'creation' => null
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
        'identifier' => 'identifier',
        'entityType' => 'entityType',
        'news' => 'news',
        'support' => 'support',
        'destinyItem' => 'destinyItem',
        'destinyActivity' => 'destinyActivity',
        'destinyRitual' => 'destinyRitual',
        'creation' => 'creation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'entityType' => 'setEntityType',
        'news' => 'setNews',
        'support' => 'setSupport',
        'destinyItem' => 'setDestinyItem',
        'destinyActivity' => 'setDestinyActivity',
        'destinyRitual' => 'setDestinyRitual',
        'creation' => 'setCreation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'entityType' => 'getEntityType',
        'news' => 'getNews',
        'support' => 'getSupport',
        'destinyItem' => 'getDestinyItem',
        'destinyActivity' => 'getDestinyActivity',
        'destinyRitual' => 'getDestinyRitual',
        'creation' => 'getCreation'
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
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['entityType'] = isset($data['entityType']) ? $data['entityType'] : null;
        $this->container['news'] = isset($data['news']) ? $data['news'] : null;
        $this->container['support'] = isset($data['support']) ? $data['support'] : null;
        $this->container['destinyItem'] = isset($data['destinyItem']) ? $data['destinyItem'] : null;
        $this->container['destinyActivity'] = isset($data['destinyActivity']) ? $data['destinyActivity'] : null;
        $this->container['destinyRitual'] = isset($data['destinyRitual']) ? $data['destinyRitual'] : null;
        $this->container['creation'] = isset($data['creation']) ? $data['creation'] : null;
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
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return int|null
     */
    public function getEntityType()
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param int|null $entityType entityType
     *
     * @return $this
     */
    public function setEntityType($entityType)
    {
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets news
     *
     * @return \Bungie\Model\Trending\TrendingEntryNews|null
     */
    public function getNews()
    {
        return $this->container['news'];
    }

    /**
     * Sets news
     *
     * @param \Bungie\Model\Trending\TrendingEntryNews|null $news news
     *
     * @return $this
     */
    public function setNews($news)
    {
        $this->container['news'] = $news;

        return $this;
    }

    /**
     * Gets support
     *
     * @return \Bungie\Model\Trending\TrendingEntrySupportArticle|null
     */
    public function getSupport()
    {
        return $this->container['support'];
    }

    /**
     * Sets support
     *
     * @param \Bungie\Model\Trending\TrendingEntrySupportArticle|null $support support
     *
     * @return $this
     */
    public function setSupport($support)
    {
        $this->container['support'] = $support;

        return $this;
    }

    /**
     * Gets destinyItem
     *
     * @return \Bungie\Model\Trending\TrendingEntryDestinyItem|null
     */
    public function getDestinyItem()
    {
        return $this->container['destinyItem'];
    }

    /**
     * Sets destinyItem
     *
     * @param \Bungie\Model\Trending\TrendingEntryDestinyItem|null $destinyItem destinyItem
     *
     * @return $this
     */
    public function setDestinyItem($destinyItem)
    {
        $this->container['destinyItem'] = $destinyItem;

        return $this;
    }

    /**
     * Gets destinyActivity
     *
     * @return \Bungie\Model\Trending\TrendingEntryDestinyActivity|null
     */
    public function getDestinyActivity()
    {
        return $this->container['destinyActivity'];
    }

    /**
     * Sets destinyActivity
     *
     * @param \Bungie\Model\Trending\TrendingEntryDestinyActivity|null $destinyActivity destinyActivity
     *
     * @return $this
     */
    public function setDestinyActivity($destinyActivity)
    {
        $this->container['destinyActivity'] = $destinyActivity;

        return $this;
    }

    /**
     * Gets destinyRitual
     *
     * @return \Bungie\Model\Trending\TrendingEntryDestinyRitual|null
     */
    public function getDestinyRitual()
    {
        return $this->container['destinyRitual'];
    }

    /**
     * Sets destinyRitual
     *
     * @param \Bungie\Model\Trending\TrendingEntryDestinyRitual|null $destinyRitual destinyRitual
     *
     * @return $this
     */
    public function setDestinyRitual($destinyRitual)
    {
        $this->container['destinyRitual'] = $destinyRitual;

        return $this;
    }

    /**
     * Gets creation
     *
     * @return \Bungie\Model\Trending\TrendingEntryCommunityCreation|null
     */
    public function getCreation()
    {
        return $this->container['creation'];
    }

    /**
     * Sets creation
     *
     * @param \Bungie\Model\Trending\TrendingEntryCommunityCreation|null $creation creation
     *
     * @return $this
     */
    public function setCreation($creation)
    {
        $this->container['creation'] = $creation;

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


