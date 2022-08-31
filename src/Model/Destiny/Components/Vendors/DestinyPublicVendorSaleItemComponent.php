<?php
/**
 * DestinyPublicVendorSaleItemComponent
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Components\Vendors;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPublicVendorSaleItemComponent Class Doc Comment
 *
 * @category Class
 * @description Has character-agnostic information about an item being sold by a vendor.  Note that if you want instance, stats, etc... data for the item, you&#39;ll have to request additional components such as ItemInstances, ItemPerks etc... and acquire them from the DestinyVendorResponse&#39;s \&quot;items\&quot; property. For most of these, however, you&#39;ll have to ask for it in context of a specific character.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPublicVendorSaleItemComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Vendors.DestinyPublicVendorSaleItemComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorItemIndex' => 'int',
        'itemHash' => 'int',
        'overrideStyleItemHash' => 'int',
        'quantity' => 'int',
        'costs' => '\Bungie\Model\Destiny\DestinyItemQuantity[]',
        'overrideNextRefreshDate' => '\DateTime',
        'apiPurchasable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendorItemIndex' => 'int32',
        'itemHash' => 'uint32',
        'overrideStyleItemHash' => 'uint32',
        'quantity' => 'int32',
        'costs' => null,
        'overrideNextRefreshDate' => 'date-time',
        'apiPurchasable' => null
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
        'vendorItemIndex' => 'vendorItemIndex',
        'itemHash' => 'itemHash',
        'overrideStyleItemHash' => 'overrideStyleItemHash',
        'quantity' => 'quantity',
        'costs' => 'costs',
        'overrideNextRefreshDate' => 'overrideNextRefreshDate',
        'apiPurchasable' => 'apiPurchasable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorItemIndex' => 'setVendorItemIndex',
        'itemHash' => 'setItemHash',
        'overrideStyleItemHash' => 'setOverrideStyleItemHash',
        'quantity' => 'setQuantity',
        'costs' => 'setCosts',
        'overrideNextRefreshDate' => 'setOverrideNextRefreshDate',
        'apiPurchasable' => 'setApiPurchasable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorItemIndex' => 'getVendorItemIndex',
        'itemHash' => 'getItemHash',
        'overrideStyleItemHash' => 'getOverrideStyleItemHash',
        'quantity' => 'getQuantity',
        'costs' => 'getCosts',
        'overrideNextRefreshDate' => 'getOverrideNextRefreshDate',
        'apiPurchasable' => 'getApiPurchasable'
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
        $this->container['vendorItemIndex'] = isset($data['vendorItemIndex']) ? $data['vendorItemIndex'] : null;
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['overrideStyleItemHash'] = isset($data['overrideStyleItemHash']) ? $data['overrideStyleItemHash'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['overrideNextRefreshDate'] = isset($data['overrideNextRefreshDate']) ? $data['overrideNextRefreshDate'] : null;
        $this->container['apiPurchasable'] = isset($data['apiPurchasable']) ? $data['apiPurchasable'] : null;
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
     * @param int|null $vendorItemIndex The index into the DestinyVendorDefinition.itemList property. Note that this means Vendor data *is* Content Version dependent: make sure you have the latest content before you use Vendor data, or these indexes may mismatch.   Most systems avoid this problem, but Vendors is one area where we are unable to reasonably avoid content dependency at the moment.
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
     * @param int|null $itemHash The hash of the item being sold, as a quick shortcut for looking up the DestinyInventoryItemDefinition of the sale item.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets overrideStyleItemHash
     *
     * @return int|null
     */
    public function getOverrideStyleItemHash()
    {
        return $this->container['overrideStyleItemHash'];
    }

    /**
     * Sets overrideStyleItemHash
     *
     * @param int|null $overrideStyleItemHash If populated, this is the hash of the item whose icon (and other secondary styles, but *not* the human readable strings) should override whatever icons/styles are on the item being sold.  If you don't do this, certain items whose styles are being overridden by socketed items - such as the \"Recycle Shader\" item - would show whatever their default icon/style is, and it wouldn't be pretty or look accurate.
     *
     * @return $this
     */
    public function setOverrideStyleItemHash($overrideStyleItemHash)
    {
        $this->container['overrideStyleItemHash'] = $overrideStyleItemHash;

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
     * @param int|null $quantity How much of the item you'll be getting.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets costs
     *
     * @return \Bungie\Model\Destiny\DestinyItemQuantity[]|null
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     *
     * @param \Bungie\Model\Destiny\DestinyItemQuantity[]|null $costs A summary of the current costs of the item.
     *
     * @return $this
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets overrideNextRefreshDate
     *
     * @return \DateTime|null
     */
    public function getOverrideNextRefreshDate()
    {
        return $this->container['overrideNextRefreshDate'];
    }

    /**
     * Sets overrideNextRefreshDate
     *
     * @param \DateTime|null $overrideNextRefreshDate If this item has its own custom date where it may be removed from the Vendor's rotation, this is that date.  Note that there's not actually any guarantee that it will go away: it could be chosen again and end up still being in the Vendor's sale items! But this is the next date where that test will occur, and is also the date that the game shows for availability on things like Bounties being sold. So it's the best we can give.
     *
     * @return $this
     */
    public function setOverrideNextRefreshDate($overrideNextRefreshDate)
    {
        $this->container['overrideNextRefreshDate'] = $overrideNextRefreshDate;

        return $this;
    }

    /**
     * Gets apiPurchasable
     *
     * @return bool|null
     */
    public function getApiPurchasable()
    {
        return $this->container['apiPurchasable'];
    }

    /**
     * Sets apiPurchasable
     *
     * @param bool|null $apiPurchasable If true, this item can be purchased through the Bungie.net API.
     *
     * @return $this
     */
    public function setApiPurchasable($apiPurchasable)
    {
        $this->container['apiPurchasable'] = $apiPurchasable;

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


