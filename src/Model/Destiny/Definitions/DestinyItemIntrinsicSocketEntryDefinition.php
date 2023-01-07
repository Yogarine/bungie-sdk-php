<?php
/**
 * DestinyItemIntrinsicSocketEntryDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemIntrinsicSocketEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description Represents a socket that has a plug associated with it intrinsically. This is useful for situations where the weapon needs to have a visual plug/Mod on it, but that plug/Mod should never change.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemIntrinsicSocketEntryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemIntrinsicSocketEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plugItemHash' => 'int',
        'socketTypeHash' => 'int',
        'defaultVisible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'plugItemHash' => 'uint32',
        'socketTypeHash' => 'uint32',
        'defaultVisible' => null
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
        'plugItemHash' => 'plugItemHash',
        'socketTypeHash' => 'socketTypeHash',
        'defaultVisible' => 'defaultVisible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plugItemHash' => 'setPlugItemHash',
        'socketTypeHash' => 'setSocketTypeHash',
        'defaultVisible' => 'setDefaultVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plugItemHash' => 'getPlugItemHash',
        'socketTypeHash' => 'getSocketTypeHash',
        'defaultVisible' => 'getDefaultVisible'
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
        $this->container['plugItemHash'] = isset($data['plugItemHash']) ? $data['plugItemHash'] : null;
        $this->container['socketTypeHash'] = isset($data['socketTypeHash']) ? $data['socketTypeHash'] : null;
        $this->container['defaultVisible'] = isset($data['defaultVisible']) ? $data['defaultVisible'] : null;
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
     * Gets plugItemHash
     *
     * @return int|null
     */
    public function getPlugItemHash()
    {
        return $this->container['plugItemHash'];
    }

    /**
     * Sets plugItemHash
     *
     * @param int|null $plugItemHash Indicates the plug that is intrinsically inserted into this socket.
     *
     * @return $this
     */
    public function setPlugItemHash($plugItemHash)
    {
        $this->container['plugItemHash'] = $plugItemHash;

        return $this;
    }

    /**
     * Gets socketTypeHash
     *
     * @return int|null
     */
    public function getSocketTypeHash()
    {
        return $this->container['socketTypeHash'];
    }

    /**
     * Sets socketTypeHash
     *
     * @param int|null $socketTypeHash Indicates the type of this intrinsic socket.
     *
     * @return $this
     */
    public function setSocketTypeHash($socketTypeHash)
    {
        $this->container['socketTypeHash'] = $socketTypeHash;

        return $this;
    }

    /**
     * Gets defaultVisible
     *
     * @return bool|null
     */
    public function getDefaultVisible()
    {
        return $this->container['defaultVisible'];
    }

    /**
     * Sets defaultVisible
     *
     * @param bool|null $defaultVisible If true, then this socket is visible in the item's \"default\" state. If you have an instance, you should always check the runtime state, as that can override this visibility setting: but if you're looking at the item on a conceptual level, this property can be useful for hiding data such as legacy sockets - which remain defined on items for infrastructure purposes, but can be confusing for users to see.
     *
     * @return $this
     */
    public function setDefaultVisible($defaultVisible)
    {
        $this->container['defaultVisible'] = $defaultVisible;

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


