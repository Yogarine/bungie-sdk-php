<?php
/**
 * DestinyDerivedItemDefinition
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

namespace Bungie\Model\Destiny\Definitions\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyDerivedItemDefinition Class Doc Comment
 *
 * @category Class
 * @description This is a reference to, and summary data for, a specific item that you can get as a result of Using or Acquiring some other Item (For example, this could be summary information for an Emote that you can get by opening an an Eververse Box) See DestinyDerivedItemCategoryDefinition for more information.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDerivedItemDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Items.DestinyDerivedItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemHash' => 'int',
        'itemName' => 'string',
        'itemDetail' => 'string',
        'itemDescription' => 'string',
        'iconPath' => 'string',
        'vendorItemIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemHash' => 'uint32',
        'itemName' => null,
        'itemDetail' => null,
        'itemDescription' => null,
        'iconPath' => null,
        'vendorItemIndex' => 'int32'
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
        'itemHash' => 'itemHash',
        'itemName' => 'itemName',
        'itemDetail' => 'itemDetail',
        'itemDescription' => 'itemDescription',
        'iconPath' => 'iconPath',
        'vendorItemIndex' => 'vendorItemIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemHash' => 'setItemHash',
        'itemName' => 'setItemName',
        'itemDetail' => 'setItemDetail',
        'itemDescription' => 'setItemDescription',
        'iconPath' => 'setIconPath',
        'vendorItemIndex' => 'setVendorItemIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemHash' => 'getItemHash',
        'itemName' => 'getItemName',
        'itemDetail' => 'getItemDetail',
        'itemDescription' => 'getItemDescription',
        'iconPath' => 'getIconPath',
        'vendorItemIndex' => 'getVendorItemIndex'
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
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['itemDetail'] = isset($data['itemDetail']) ? $data['itemDetail'] : null;
        $this->container['itemDescription'] = isset($data['itemDescription']) ? $data['itemDescription'] : null;
        $this->container['iconPath'] = isset($data['iconPath']) ? $data['iconPath'] : null;
        $this->container['vendorItemIndex'] = isset($data['vendorItemIndex']) ? $data['vendorItemIndex'] : null;
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
     * @param int|null $itemHash The hash for the DestinyInventoryItemDefinition of this derived item, if there is one. Sometimes we are given this information as a manual override, in which case there won't be an actual DestinyInventoryItemDefinition for what we display, but you can still show the strings from this object itself.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|null $itemName The name of the derived item.
     *
     * @return $this
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets itemDetail
     *
     * @return string|null
     */
    public function getItemDetail()
    {
        return $this->container['itemDetail'];
    }

    /**
     * Sets itemDetail
     *
     * @param string|null $itemDetail Additional details about the derived item, in addition to the description.
     *
     * @return $this
     */
    public function setItemDetail($itemDetail)
    {
        $this->container['itemDetail'] = $itemDetail;

        return $this;
    }

    /**
     * Gets itemDescription
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['itemDescription'];
    }

    /**
     * Sets itemDescription
     *
     * @param string|null $itemDescription A brief description of the item.
     *
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->container['itemDescription'] = $itemDescription;

        return $this;
    }

    /**
     * Gets iconPath
     *
     * @return string|null
     */
    public function getIconPath()
    {
        return $this->container['iconPath'];
    }

    /**
     * Sets iconPath
     *
     * @param string|null $iconPath An icon for the item.
     *
     * @return $this
     */
    public function setIconPath($iconPath)
    {
        $this->container['iconPath'] = $iconPath;

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
     * @param int|null $vendorItemIndex If the item was derived from a \"Preview Vendor\", this will be an index into the DestinyVendorDefinition's itemList property. Otherwise, -1.
     *
     * @return $this
     */
    public function setVendorItemIndex($vendorItemIndex)
    {
        $this->container['vendorItemIndex'] = $vendorItemIndex;

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


