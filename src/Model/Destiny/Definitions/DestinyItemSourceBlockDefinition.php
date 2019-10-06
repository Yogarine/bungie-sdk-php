<?php
/**
 * DestinyItemSourceBlockDefinition
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
 * OpenAPI spec version: 2.4.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemSourceBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Data about an item&#39;s \&quot;sources\&quot;: ways that the item can be obtained.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSourceBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSourceBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sourceHashes' => 'int[]',
        'sources' => '\Bungie\Model\Destiny\Definitions\Sources\DestinyItemSourceDefinition[]',
        'exclusive' => 'int',
        'vendorSources' => '\Bungie\Model\Destiny\Definitions\DestinyItemVendorSourceReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sourceHashes' => 'uint32',
        'sources' => null,
        'exclusive' => 'int32',
        'vendorSources' => null
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
        'sourceHashes' => 'sourceHashes',
        'sources' => 'sources',
        'exclusive' => 'exclusive',
        'vendorSources' => 'vendorSources'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceHashes' => 'setSourceHashes',
        'sources' => 'setSources',
        'exclusive' => 'setExclusive',
        'vendorSources' => 'setVendorSources'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceHashes' => 'getSourceHashes',
        'sources' => 'getSources',
        'exclusive' => 'getExclusive',
        'vendorSources' => 'getVendorSources'
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
        $this->container['sourceHashes'] = isset($data['sourceHashes']) ? $data['sourceHashes'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['exclusive'] = isset($data['exclusive']) ? $data['exclusive'] : null;
        $this->container['vendorSources'] = isset($data['vendorSources']) ? $data['vendorSources'] : null;
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
     * Gets sourceHashes
     *
     * @return int[]|null
     */
    public function getSourceHashes()
    {
        return $this->container['sourceHashes'];
    }

    /**
     * Sets sourceHashes
     *
     * @param int[]|null $sourceHashes The list of hash identifiers for Reward Sources that hint where the item can be found (DestinyRewardSourceDefinition).
     *
     * @return $this
     */
    public function setSourceHashes($sourceHashes)
    {
        $this->container['sourceHashes'] = $sourceHashes;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return \Bungie\Model\Destiny\Definitions\Sources\DestinyItemSourceDefinition[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param \Bungie\Model\Destiny\Definitions\Sources\DestinyItemSourceDefinition[]|null $sources A collection of details about the stats that were computed for the ways we found that the item could be spawned.
     *
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets exclusive
     *
     * @return int|null
     */
    public function getExclusive()
    {
        return $this->container['exclusive'];
    }

    /**
     * Sets exclusive
     *
     * @param int|null $exclusive If we found that this item is exclusive to a specific platform, this will be set to the BungieMembershipType enumeration that matches that platform.
     *
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets vendorSources
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyItemVendorSourceReference[]|null
     */
    public function getVendorSources()
    {
        return $this->container['vendorSources'];
    }

    /**
     * Sets vendorSources
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyItemVendorSourceReference[]|null $vendorSources A denormalized reference back to vendors that potentially sell this item.
     *
     * @return $this
     */
    public function setVendorSources($vendorSources)
    {
        $this->container['vendorSources'] = $vendorSources;

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


