<?php
/**
 * DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardItem
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
 * DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardItem Class Doc Comment
 *
 * @category Class
 * @description A subclass of DestinyItemQuantity, that provides not just the item and its quantity but also information that BNet can - at some point - use internally to provide more robust runtime information about the item&#39;s qualities.  If you want it, please ask! We&#39;re just out of time to wire it up right now. Or a clever person just may do it with our existing endpoints.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsMilestonesDestinyMilestoneQuestRewardItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestRewardItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
    protected static $swaggerFormats = [
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

        return true;
    }


    /**
     * Gets vendorHash
     *
     * @return int
     */
    public function getVendorHash()
    {
        return $this->container['vendorHash'];
    }

    /**
     * Sets vendorHash
     *
     * @param int $vendorHash The quest reward item *may* be associated with a vendor. If so, this is that vendor. Use this hash to look up the DestinyVendorDefinition.
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
     * @return int
     */
    public function getVendorItemIndex()
    {
        return $this->container['vendorItemIndex'];
    }

    /**
     * Sets vendorItemIndex
     *
     * @param int $vendorItemIndex The quest reward item *may* be associated with a vendor. If so, this is the index of the item being sold, which we can use at runtime to find instanced item information for the reward item.
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
     * @return int
     */
    public function getItemHash()
    {
        return $this->container['itemHash'];
    }

    /**
     * Sets itemHash
     *
     * @param int $itemHash The hash identifier for the item in question. Use it to look up the item's DestinyInventoryItemDefinition.
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
     * @return int
     */
    public function getItemInstanceId()
    {
        return $this->container['itemInstanceId'];
    }

    /**
     * Sets itemInstanceId
     *
     * @param int $itemInstanceId If this quantity is referring to a specific instance of an item, this will have the item's instance ID. Normally, this will be null.
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
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The amount of the item needed/available depending on the context of where DestinyItemQuantity is being used.
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


