<?php
/**
 * DestinyCollectibleNodeDetailResponse
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Responses;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyCollectibleNodeDetailResponse Class Doc Comment
 *
 * @category Class
 * @description Returns the detailed information about a Collectible Presentation Node and any Collectibles that are direct descendants.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCollectibleNodeDetailResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyCollectibleNodeDetailResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collectibles' => '\Bungie\Model\SingleComponentResponseOfDestinyCollectiblesComponent',
        'collectibleItemComponents' => '\Bungie\Model\DestinyItemComponentSetOfuint32'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'collectibles' => null,
        'collectibleItemComponents' => null
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
        'collectibles' => 'collectibles',
        'collectibleItemComponents' => 'collectibleItemComponents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collectibles' => 'setCollectibles',
        'collectibleItemComponents' => 'setCollectibleItemComponents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collectibles' => 'getCollectibles',
        'collectibleItemComponents' => 'getCollectibleItemComponents'
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
        $this->container['collectibles'] = isset($data['collectibles']) ? $data['collectibles'] : null;
        $this->container['collectibleItemComponents'] = isset($data['collectibleItemComponents']) ? $data['collectibleItemComponents'] : null;
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
     * Gets collectibles
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyCollectiblesComponent|null
     */
    public function getCollectibles()
    {
        return $this->container['collectibles'];
    }

    /**
     * Sets collectibles
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyCollectiblesComponent|null $collectibles COMPONENT TYPE: Collectibles
     *
     * @return $this
     */
    public function setCollectibles($collectibles)
    {
        $this->container['collectibles'] = $collectibles;

        return $this;
    }

    /**
     * Gets collectibleItemComponents
     *
     * @return \Bungie\Model\DestinyItemComponentSetOfuint32|null
     */
    public function getCollectibleItemComponents()
    {
        return $this->container['collectibleItemComponents'];
    }

    /**
     * Sets collectibleItemComponents
     *
     * @param \Bungie\Model\DestinyItemComponentSetOfuint32|null $collectibleItemComponents Item components, keyed by the item hash of the items pointed at collectibles found under the requested Presentation Node.  NOTE: I had a lot of hemming and hawing about whether these should be keyed by collectible hash or item hash... but ultimately having it be keyed by item hash meant that UI that already uses DestinyItemComponentSet data wouldn't have to have a special override to do the collectible -> item lookup once you delve into an item's details, and it also meant that you didn't have to remember that the Hash being used as the key for plugSets was different from the Hash being used for the other Dictionaries. As a result, using the Item Hash felt like the least crappy solution.  We may all come to regret this decision. We will see.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]
     *
     * @return $this
     */
    public function setCollectibleItemComponents($collectibleItemComponents)
    {
        $this->container['collectibleItemComponents'] = $collectibleItemComponents;

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

