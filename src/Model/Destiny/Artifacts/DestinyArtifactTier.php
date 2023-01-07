<?php
/**
 * DestinyArtifactTier
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

namespace Bungie\Model\Destiny\Artifacts;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyArtifactTier Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyArtifactTier implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Artifacts.DestinyArtifactTier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tierHash' => 'int',
        'isUnlocked' => 'bool',
        'pointsToUnlock' => 'int',
        'items' => '\Bungie\Model\Destiny\Artifacts\DestinyArtifactTierItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tierHash' => 'uint32',
        'isUnlocked' => null,
        'pointsToUnlock' => 'int32',
        'items' => null
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
        'tierHash' => 'tierHash',
        'isUnlocked' => 'isUnlocked',
        'pointsToUnlock' => 'pointsToUnlock',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tierHash' => 'setTierHash',
        'isUnlocked' => 'setIsUnlocked',
        'pointsToUnlock' => 'setPointsToUnlock',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tierHash' => 'getTierHash',
        'isUnlocked' => 'getIsUnlocked',
        'pointsToUnlock' => 'getPointsToUnlock',
        'items' => 'getItems'
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
        $this->container['tierHash'] = isset($data['tierHash']) ? $data['tierHash'] : null;
        $this->container['isUnlocked'] = isset($data['isUnlocked']) ? $data['isUnlocked'] : null;
        $this->container['pointsToUnlock'] = isset($data['pointsToUnlock']) ? $data['pointsToUnlock'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets tierHash
     *
     * @return int|null
     */
    public function getTierHash()
    {
        return $this->container['tierHash'];
    }

    /**
     * Sets tierHash
     *
     * @param int|null $tierHash tierHash
     *
     * @return $this
     */
    public function setTierHash($tierHash)
    {
        $this->container['tierHash'] = $tierHash;

        return $this;
    }

    /**
     * Gets isUnlocked
     *
     * @return bool|null
     */
    public function getIsUnlocked()
    {
        return $this->container['isUnlocked'];
    }

    /**
     * Sets isUnlocked
     *
     * @param bool|null $isUnlocked isUnlocked
     *
     * @return $this
     */
    public function setIsUnlocked($isUnlocked)
    {
        $this->container['isUnlocked'] = $isUnlocked;

        return $this;
    }

    /**
     * Gets pointsToUnlock
     *
     * @return int|null
     */
    public function getPointsToUnlock()
    {
        return $this->container['pointsToUnlock'];
    }

    /**
     * Sets pointsToUnlock
     *
     * @param int|null $pointsToUnlock pointsToUnlock
     *
     * @return $this
     */
    public function setPointsToUnlock($pointsToUnlock)
    {
        $this->container['pointsToUnlock'] = $pointsToUnlock;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Bungie\Model\Destiny\Artifacts\DestinyArtifactTierItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Bungie\Model\Destiny\Artifacts\DestinyArtifactTierItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

