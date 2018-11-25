<?php
/**
 * DestinyVendorInventoryFlyoutBucketDefinition
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
 * DestinyVendorInventoryFlyoutBucketDefinition Class Doc Comment
 *
 * @category Class
 * @description Information about a single inventory bucket in a vendor flyout UI and how it is shown.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorInventoryFlyoutBucketDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyVendorInventoryFlyoutBucketDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collapsible' => 'bool',
        'inventoryBucketHash' => 'int',
        'sortItemsBy' => '\Bungie\Model\Destiny\DestinyItemSortType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'collapsible' => null,
        'inventoryBucketHash' => 'uint32',
        'sortItemsBy' => null
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
        'collapsible' => 'collapsible',
        'inventoryBucketHash' => 'inventoryBucketHash',
        'sortItemsBy' => 'sortItemsBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collapsible' => 'setCollapsible',
        'inventoryBucketHash' => 'setInventoryBucketHash',
        'sortItemsBy' => 'setSortItemsBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collapsible' => 'getCollapsible',
        'inventoryBucketHash' => 'getInventoryBucketHash',
        'sortItemsBy' => 'getSortItemsBy'
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
        $this->container['collapsible'] = isset($data['collapsible']) ? $data['collapsible'] : null;
        $this->container['inventoryBucketHash'] = isset($data['inventoryBucketHash']) ? $data['inventoryBucketHash'] : null;
        $this->container['sortItemsBy'] = isset($data['sortItemsBy']) ? $data['sortItemsBy'] : null;
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
     * Gets collapsible
     *
     * @return bool|null
     */
    public function getCollapsible()
    {
        return $this->container['collapsible'];
    }

    /**
     * Sets collapsible
     *
     * @param bool|null $collapsible If true, the inventory bucket should be able to be collapsed visually.
     *
     * @return $this
     */
    public function setCollapsible($collapsible)
    {
        $this->container['collapsible'] = $collapsible;

        return $this;
    }

    /**
     * Gets inventoryBucketHash
     *
     * @return int|null
     */
    public function getInventoryBucketHash()
    {
        return $this->container['inventoryBucketHash'];
    }

    /**
     * Sets inventoryBucketHash
     *
     * @param int|null $inventoryBucketHash The inventory bucket whose contents should be shown.
     *
     * @return $this
     */
    public function setInventoryBucketHash($inventoryBucketHash)
    {
        $this->container['inventoryBucketHash'] = $inventoryBucketHash;

        return $this;
    }

    /**
     * Gets sortItemsBy
     *
     * @return \Bungie\Model\Destiny\DestinyItemSortType|null
     */
    public function getSortItemsBy()
    {
        return $this->container['sortItemsBy'];
    }

    /**
     * Sets sortItemsBy
     *
     * @param \Bungie\Model\Destiny\DestinyItemSortType|null $sortItemsBy The methodology to use for sorting items from the flyout.
     *
     * @return $this
     */
    public function setSortItemsBy($sortItemsBy)
    {
        $this->container['sortItemsBy'] = $sortItemsBy;

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


