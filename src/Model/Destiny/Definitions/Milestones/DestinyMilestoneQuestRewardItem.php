<?php
/**
 * DestinyMilestoneQuestRewardItem
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
 * OpenAPI spec version: 2.3.3
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneQuestRewardItem Class Doc Comment
 *
 * @category Class
 * @description A subclass of DestinyItemQuantity, that provides not just the item and its quantity but also information that BNet can - at some point - use internally to provide more robust runtime information about the item&#39;s qualities.  If you want it, please ask! We&#39;re just out of time to wire it up right now. Or a clever person just may do it with our existing endpoints.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneQuestRewardItem implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestRewardItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorHash' => 'int',
        'vendorItemIndex' => 'int',
        'itemHash' => 'int',
        'itemInstanceId' => 'int',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendorHash' => 'uint32',
        'vendorItemIndex' => 'int32',
        'itemHash' => 'uint32',
        'itemInstanceId' => 'int64',
        'quantity' => 'int32'
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
        'vendorHash' => 'vendorHash',
        'vendorItemIndex' => 'vendorItemIndex',
        'itemHash' => 'itemHash',
        'itemInstanceId' => 'itemInstanceId',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorHash' => 'setVendorHash',
        'vendorItemIndex' => 'setVendorItemIndex',
        'itemHash' => 'setItemHash',
        'itemInstanceId' => 'setItemInstanceId',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorHash' => 'getVendorHash',
        'vendorItemIndex' => 'getVendorItemIndex',
        'itemHash' => 'getItemHash',
        'itemInstanceId' => 'getItemInstanceId',
        'quantity' => 'getQuantity'
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
        $this->container['vendorHash'] = isset($data['vendorHash']) ? $data['vendorHash'] : null;
        $this->container['vendorItemIndex'] = isset($data['vendorItemIndex']) ? $data['vendorItemIndex'] : null;
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['itemInstanceId'] = isset($data['itemInstanceId']) ? $data['itemInstanceId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets vendorHash
     *
     * @return int|null
     */
    public function getVendorHash()
    {
        return $this->container['vendorHash'];
    }

    /**
     * Sets vendorHash
     *
     * @param int|null $vendorHash The quest reward item *may* be associated with a vendor. If so, this is that vendor. Use this hash to look up the DestinyVendorDefinition.
     *
     * @return $this
     */
    public function setVendorHash($vendorHash)
    {
        $this->container['vendorHash'] = $vendorHash;

        return $this;
    }

    /**
     * Gets vendorItemIndex
     *
     * @return int|null
     */
    public function getVendorItemIndex()
    {
        return $this->container['vendorItemIndex'];
    }

    /**
     * Sets vendorItemIndex
     *
     * @param int|null $vendorItemIndex The quest reward item *may* be associated with a vendor. If so, this is the index of the item being sold, which we can use at runtime to find instanced item information for the reward item.
     *
     * @return $this
     */
    public function setVendorItemIndex($vendorItemIndex)
    {
        $this->container['vendorItemIndex'] = $vendorItemIndex;

        return $this;
    }

    /**
     * Gets itemHash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['itemHash'];
    }

    /**
     * Sets itemHash
     *
     * @param int|null $itemHash The hash identifier for the item in question. Use it to look up the item's DestinyInventoryItemDefinition.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets itemInstanceId
     *
     * @return int|null
     */
    public function getItemInstanceId()
    {
        return $this->container['itemInstanceId'];
    }

    /**
     * Sets itemInstanceId
     *
     * @param int|null $itemInstanceId If this quantity is referring to a specific instance of an item, this will have the item's instance ID. Normally, this will be null.
     *
     * @return $this
     */
    public function setItemInstanceId($itemInstanceId)
    {
        $this->container['itemInstanceId'] = $itemInstanceId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The amount of the item needed/available depending on the context of where DestinyItemQuantity is being used.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


