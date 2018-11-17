<?php
/**
 * DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent
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

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyComponentsCollectiblesDestinyProfileCollectiblesComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Collectibles.DestinyProfileCollectiblesComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recentCollectibleHashes' => 'int[]',
        'newnessFlaggedCollectibleHashes' => 'int[]',
        'collectibles' => 'map[string,\Bungie\Model\DestinyComponentsCollectiblesDestinyCollectibleComponent]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'recentCollectibleHashes' => 'uint32',
        'newnessFlaggedCollectibleHashes' => 'uint32',
        'collectibles' => null
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
        'recentCollectibleHashes' => 'recentCollectibleHashes',
        'newnessFlaggedCollectibleHashes' => 'newnessFlaggedCollectibleHashes',
        'collectibles' => 'collectibles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recentCollectibleHashes' => 'setRecentCollectibleHashes',
        'newnessFlaggedCollectibleHashes' => 'setNewnessFlaggedCollectibleHashes',
        'collectibles' => 'setCollectibles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recentCollectibleHashes' => 'getRecentCollectibleHashes',
        'newnessFlaggedCollectibleHashes' => 'getNewnessFlaggedCollectibleHashes',
        'collectibles' => 'getCollectibles'
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
        $this->container['recentCollectibleHashes'] = isset($data['recentCollectibleHashes']) ? $data['recentCollectibleHashes'] : null;
        $this->container['newnessFlaggedCollectibleHashes'] = isset($data['newnessFlaggedCollectibleHashes']) ? $data['newnessFlaggedCollectibleHashes'] : null;
        $this->container['collectibles'] = isset($data['collectibles']) ? $data['collectibles'] : null;
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
     * Gets recentCollectibleHashes
     *
     * @return int[]|null
     */
    public function getRecentCollectibleHashes()
    {
        return $this->container['recentCollectibleHashes'];
    }

    /**
     * Sets recentCollectibleHashes
     *
     * @param int[]|null $recentCollectibleHashes The list of collectibles determined by the game as having been \"recently\" acquired.
     *
     * @return $this
     */
    public function setRecentCollectibleHashes($recentCollectibleHashes)
    {
        $this->container['recentCollectibleHashes'] = $recentCollectibleHashes;

        return $this;
    }

    /**
     * Gets newnessFlaggedCollectibleHashes
     *
     * @return int[]|null
     */
    public function getNewnessFlaggedCollectibleHashes()
    {
        return $this->container['newnessFlaggedCollectibleHashes'];
    }

    /**
     * Sets newnessFlaggedCollectibleHashes
     *
     * @param int[]|null $newnessFlaggedCollectibleHashes The list of collectibles determined by the game as having been \"recently\" acquired.  The game client itself actually controls this data, so I personally question whether anyone will get much use out of this: because we can't edit this value through the API. But in case anyone finds it useful, here it is.
     *
     * @return $this
     */
    public function setNewnessFlaggedCollectibleHashes($newnessFlaggedCollectibleHashes)
    {
        $this->container['newnessFlaggedCollectibleHashes'] = $newnessFlaggedCollectibleHashes;

        return $this;
    }

    /**
     * Gets collectibles
     *
     * @return map[string,\Bungie\Model\DestinyComponentsCollectiblesDestinyCollectibleComponent]|null
     */
    public function getCollectibles()
    {
        return $this->container['collectibles'];
    }

    /**
     * Sets collectibles
     *
     * @param map[string,\Bungie\Model\DestinyComponentsCollectiblesDestinyCollectibleComponent]|null $collectibles collectibles
     *
     * @return $this
     */
    public function setCollectibles($collectibles)
    {
        $this->container['collectibles'] = $collectibles;

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


