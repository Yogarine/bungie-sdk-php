<?php
/**
 * DestinyItemSocketBlockDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemSocketBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description If defined, the item has at least one socket.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSocketBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSocketBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'detail' => 'string',
        'socketEntries' => '\Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketEntryDefinition[]',
        'intrinsicSockets' => '\Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemIntrinsicSocketEntryDefinition[]',
        'socketCategories' => '\Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketCategoryDefinition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'detail' => null,
        'socketEntries' => null,
        'intrinsicSockets' => null,
        'socketCategories' => null
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
        'detail' => 'detail',
        'socketEntries' => 'socketEntries',
        'intrinsicSockets' => 'intrinsicSockets',
        'socketCategories' => 'socketCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detail' => 'setDetail',
        'socketEntries' => 'setSocketEntries',
        'intrinsicSockets' => 'setIntrinsicSockets',
        'socketCategories' => 'setSocketCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detail' => 'getDetail',
        'socketEntries' => 'getSocketEntries',
        'intrinsicSockets' => 'getIntrinsicSockets',
        'socketCategories' => 'getSocketCategories'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['socketEntries'] = isset($data['socketEntries']) ? $data['socketEntries'] : null;
        $this->container['intrinsicSockets'] = isset($data['intrinsicSockets']) ? $data['intrinsicSockets'] : null;
        $this->container['socketCategories'] = isset($data['socketCategories']) ? $data['socketCategories'] : null;
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
     * Gets detail
     *
     * @return string|null
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string|null $detail This was supposed to be a string that would give per-item details about sockets. In practice, it turns out that all this ever has is the localized word \"details\". ... that's lame, but perhaps it will become something cool in the future.
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets socketEntries
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketEntryDefinition[]|null
     */
    public function getSocketEntries()
    {
        return $this->container['socketEntries'];
    }

    /**
     * Sets socketEntries
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketEntryDefinition[]|null $socketEntries Each non-intrinsic (or mutable) socket on an item is defined here. Check inside for more info.
     *
     * @return $this
     */
    public function setSocketEntries($socketEntries)
    {
        $this->container['socketEntries'] = $socketEntries;

        return $this;
    }

    /**
     * Gets intrinsicSockets
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemIntrinsicSocketEntryDefinition[]|null
     */
    public function getIntrinsicSockets()
    {
        return $this->container['intrinsicSockets'];
    }

    /**
     * Sets intrinsicSockets
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemIntrinsicSocketEntryDefinition[]|null $intrinsicSockets Each intrinsic (or immutable/permanent) socket on an item is defined here, along with the plug that is permanently affixed to the socket.
     *
     * @return $this
     */
    public function setIntrinsicSockets($intrinsicSockets)
    {
        $this->container['intrinsicSockets'] = $intrinsicSockets;

        return $this;
    }

    /**
     * Gets socketCategories
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketCategoryDefinition[]|null
     */
    public function getSocketCategories()
    {
        return $this->container['socketCategories'];
    }

    /**
     * Sets socketCategories
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyItemSocketCategoryDefinition[]|null $socketCategories A convenience property, that refers to the sockets in the \"sockets\" property, pre-grouped by category and ordered in the manner that they should be grouped in the UI. You could form this yourself with the existing data, but why would you want to? Enjoy life man.
     *
     * @return $this
     */
    public function setSocketCategories($socketCategories)
    {
        $this->container['socketCategories'] = $socketCategories;

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


