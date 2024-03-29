<?php
/**
 * DestinyItemChangeResponse
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

namespace Bungie\Model\Destiny\Responses;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemChangeResponse Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemChangeResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyItemChangeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item' => '\Bungie\Model\Destiny\Responses\DestinyItemResponse',
        'addedInventoryItems' => '\Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]',
        'removedInventoryItems' => '\Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'item' => null,
        'addedInventoryItems' => null,
        'removedInventoryItems' => null
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
        'item' => 'item',
        'addedInventoryItems' => 'addedInventoryItems',
        'removedInventoryItems' => 'removedInventoryItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'addedInventoryItems' => 'setAddedInventoryItems',
        'removedInventoryItems' => 'setRemovedInventoryItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'addedInventoryItems' => 'getAddedInventoryItems',
        'removedInventoryItems' => 'getRemovedInventoryItems'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['addedInventoryItems'] = isset($data['addedInventoryItems']) ? $data['addedInventoryItems'] : null;
        $this->container['removedInventoryItems'] = isset($data['removedInventoryItems']) ? $data['removedInventoryItems'] : null;
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
     * Gets item
     *
     * @return \Bungie\Model\Destiny\Responses\DestinyItemResponse|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Bungie\Model\Destiny\Responses\DestinyItemResponse|null $item item
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets addedInventoryItems
     *
     * @return \Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]|null
     */
    public function getAddedInventoryItems()
    {
        return $this->container['addedInventoryItems'];
    }

    /**
     * Sets addedInventoryItems
     *
     * @param \Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]|null $addedInventoryItems Items that appeared in the inventory possibly as a result of an action.
     *
     * @return $this
     */
    public function setAddedInventoryItems($addedInventoryItems)
    {
        $this->container['addedInventoryItems'] = $addedInventoryItems;

        return $this;
    }

    /**
     * Gets removedInventoryItems
     *
     * @return \Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]|null
     */
    public function getRemovedInventoryItems()
    {
        return $this->container['removedInventoryItems'];
    }

    /**
     * Sets removedInventoryItems
     *
     * @param \Bungie\Model\Destiny\Entities\Items\DestinyItemComponent[]|null $removedInventoryItems Items that disappeared from the inventory possibly as a result of an action.
     *
     * @return $this
     */
    public function setRemovedInventoryItems($removedInventoryItems)
    {
        $this->container['removedInventoryItems'] = $removedInventoryItems;

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


