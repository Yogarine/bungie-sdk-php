<?php
/**
 * DestinyItemInventoryBlockDefinition
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
 * OpenAPI spec version: 2.9.0
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
 * DestinyItemInventoryBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description If the item can exist in an inventory - the overwhelming majority of them can and do - then this is the basic properties regarding the item&#39;s relationship with the inventory.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemInventoryBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemInventoryBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stackUniqueLabel' => 'string',
        'maxStackSize' => 'int',
        'bucketTypeHash' => 'int',
        'recoveryBucketTypeHash' => 'int',
        'tierTypeHash' => 'int',
        'isInstanceItem' => 'bool',
        'tierTypeName' => 'string',
        'tierType' => 'int',
        'expirationTooltip' => 'string',
        'expiredInActivityMessage' => 'string',
        'expiredInOrbitMessage' => 'string',
        'suppressExpirationWhenObjectivesComplete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'stackUniqueLabel' => null,
        'maxStackSize' => 'int32',
        'bucketTypeHash' => 'uint32',
        'recoveryBucketTypeHash' => 'uint32',
        'tierTypeHash' => 'uint32',
        'isInstanceItem' => null,
        'tierTypeName' => null,
        'tierType' => 'int32',
        'expirationTooltip' => null,
        'expiredInActivityMessage' => null,
        'expiredInOrbitMessage' => null,
        'suppressExpirationWhenObjectivesComplete' => null
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
        'stackUniqueLabel' => 'stackUniqueLabel',
        'maxStackSize' => 'maxStackSize',
        'bucketTypeHash' => 'bucketTypeHash',
        'recoveryBucketTypeHash' => 'recoveryBucketTypeHash',
        'tierTypeHash' => 'tierTypeHash',
        'isInstanceItem' => 'isInstanceItem',
        'tierTypeName' => 'tierTypeName',
        'tierType' => 'tierType',
        'expirationTooltip' => 'expirationTooltip',
        'expiredInActivityMessage' => 'expiredInActivityMessage',
        'expiredInOrbitMessage' => 'expiredInOrbitMessage',
        'suppressExpirationWhenObjectivesComplete' => 'suppressExpirationWhenObjectivesComplete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stackUniqueLabel' => 'setStackUniqueLabel',
        'maxStackSize' => 'setMaxStackSize',
        'bucketTypeHash' => 'setBucketTypeHash',
        'recoveryBucketTypeHash' => 'setRecoveryBucketTypeHash',
        'tierTypeHash' => 'setTierTypeHash',
        'isInstanceItem' => 'setIsInstanceItem',
        'tierTypeName' => 'setTierTypeName',
        'tierType' => 'setTierType',
        'expirationTooltip' => 'setExpirationTooltip',
        'expiredInActivityMessage' => 'setExpiredInActivityMessage',
        'expiredInOrbitMessage' => 'setExpiredInOrbitMessage',
        'suppressExpirationWhenObjectivesComplete' => 'setSuppressExpirationWhenObjectivesComplete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stackUniqueLabel' => 'getStackUniqueLabel',
        'maxStackSize' => 'getMaxStackSize',
        'bucketTypeHash' => 'getBucketTypeHash',
        'recoveryBucketTypeHash' => 'getRecoveryBucketTypeHash',
        'tierTypeHash' => 'getTierTypeHash',
        'isInstanceItem' => 'getIsInstanceItem',
        'tierTypeName' => 'getTierTypeName',
        'tierType' => 'getTierType',
        'expirationTooltip' => 'getExpirationTooltip',
        'expiredInActivityMessage' => 'getExpiredInActivityMessage',
        'expiredInOrbitMessage' => 'getExpiredInOrbitMessage',
        'suppressExpirationWhenObjectivesComplete' => 'getSuppressExpirationWhenObjectivesComplete'
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
        $this->container['stackUniqueLabel'] = isset($data['stackUniqueLabel']) ? $data['stackUniqueLabel'] : null;
        $this->container['maxStackSize'] = isset($data['maxStackSize']) ? $data['maxStackSize'] : null;
        $this->container['bucketTypeHash'] = isset($data['bucketTypeHash']) ? $data['bucketTypeHash'] : null;
        $this->container['recoveryBucketTypeHash'] = isset($data['recoveryBucketTypeHash']) ? $data['recoveryBucketTypeHash'] : null;
        $this->container['tierTypeHash'] = isset($data['tierTypeHash']) ? $data['tierTypeHash'] : null;
        $this->container['isInstanceItem'] = isset($data['isInstanceItem']) ? $data['isInstanceItem'] : null;
        $this->container['tierTypeName'] = isset($data['tierTypeName']) ? $data['tierTypeName'] : null;
        $this->container['tierType'] = isset($data['tierType']) ? $data['tierType'] : null;
        $this->container['expirationTooltip'] = isset($data['expirationTooltip']) ? $data['expirationTooltip'] : null;
        $this->container['expiredInActivityMessage'] = isset($data['expiredInActivityMessage']) ? $data['expiredInActivityMessage'] : null;
        $this->container['expiredInOrbitMessage'] = isset($data['expiredInOrbitMessage']) ? $data['expiredInOrbitMessage'] : null;
        $this->container['suppressExpirationWhenObjectivesComplete'] = isset($data['suppressExpirationWhenObjectivesComplete']) ? $data['suppressExpirationWhenObjectivesComplete'] : null;
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
     * Gets stackUniqueLabel
     *
     * @return string|null
     */
    public function getStackUniqueLabel()
    {
        return $this->container['stackUniqueLabel'];
    }

    /**
     * Sets stackUniqueLabel
     *
     * @param string|null $stackUniqueLabel If this string is populated, you can't have more than one stack with this label in a given inventory. Note that this is different from the equipping block's unique label, which is used for equipping uniqueness.
     *
     * @return $this
     */
    public function setStackUniqueLabel($stackUniqueLabel)
    {
        $this->container['stackUniqueLabel'] = $stackUniqueLabel;

        return $this;
    }

    /**
     * Gets maxStackSize
     *
     * @return int|null
     */
    public function getMaxStackSize()
    {
        return $this->container['maxStackSize'];
    }

    /**
     * Sets maxStackSize
     *
     * @param int|null $maxStackSize The maximum quantity of this item that can exist in a stack.
     *
     * @return $this
     */
    public function setMaxStackSize($maxStackSize)
    {
        $this->container['maxStackSize'] = $maxStackSize;

        return $this;
    }

    /**
     * Gets bucketTypeHash
     *
     * @return int|null
     */
    public function getBucketTypeHash()
    {
        return $this->container['bucketTypeHash'];
    }

    /**
     * Sets bucketTypeHash
     *
     * @param int|null $bucketTypeHash The hash identifier for the DestinyInventoryBucketDefinition to which this item belongs. I should have named this \"bucketHash\", but too many things refer to it now. Sigh.
     *
     * @return $this
     */
    public function setBucketTypeHash($bucketTypeHash)
    {
        $this->container['bucketTypeHash'] = $bucketTypeHash;

        return $this;
    }

    /**
     * Gets recoveryBucketTypeHash
     *
     * @return int|null
     */
    public function getRecoveryBucketTypeHash()
    {
        return $this->container['recoveryBucketTypeHash'];
    }

    /**
     * Sets recoveryBucketTypeHash
     *
     * @param int|null $recoveryBucketTypeHash If the item is picked up by the lost loot queue, this is the hash identifier for the DestinyInventoryBucketDefinition into which it will be placed. Again, I should have named this recoveryBucketHash instead.
     *
     * @return $this
     */
    public function setRecoveryBucketTypeHash($recoveryBucketTypeHash)
    {
        $this->container['recoveryBucketTypeHash'] = $recoveryBucketTypeHash;

        return $this;
    }

    /**
     * Gets tierTypeHash
     *
     * @return int|null
     */
    public function getTierTypeHash()
    {
        return $this->container['tierTypeHash'];
    }

    /**
     * Sets tierTypeHash
     *
     * @param int|null $tierTypeHash The hash identifier for the Tier Type of the item, use to look up its DestinyItemTierTypeDefinition if you need to show localized data for the item's tier.
     *
     * @return $this
     */
    public function setTierTypeHash($tierTypeHash)
    {
        $this->container['tierTypeHash'] = $tierTypeHash;

        return $this;
    }

    /**
     * Gets isInstanceItem
     *
     * @return bool|null
     */
    public function getIsInstanceItem()
    {
        return $this->container['isInstanceItem'];
    }

    /**
     * Sets isInstanceItem
     *
     * @param bool|null $isInstanceItem If TRUE, this item is instanced. Otherwise, it is a generic item that merely has a quantity in a stack (like Glimmer).
     *
     * @return $this
     */
    public function setIsInstanceItem($isInstanceItem)
    {
        $this->container['isInstanceItem'] = $isInstanceItem;

        return $this;
    }

    /**
     * Gets tierTypeName
     *
     * @return string|null
     */
    public function getTierTypeName()
    {
        return $this->container['tierTypeName'];
    }

    /**
     * Sets tierTypeName
     *
     * @param string|null $tierTypeName The localized name of the tier type, which is a useful shortcut so you don't have to look up the definition every time. However, it's mostly a holdover from days before we had a DestinyItemTierTypeDefinition to refer to.
     *
     * @return $this
     */
    public function setTierTypeName($tierTypeName)
    {
        $this->container['tierTypeName'] = $tierTypeName;

        return $this;
    }

    /**
     * Gets tierType
     *
     * @return int|null
     */
    public function getTierType()
    {
        return $this->container['tierType'];
    }

    /**
     * Sets tierType
     *
     * @param int|null $tierType The enumeration matching the tier type of the item to known values, again for convenience sake.
     *
     * @return $this
     */
    public function setTierType($tierType)
    {
        $this->container['tierType'] = $tierType;

        return $this;
    }

    /**
     * Gets expirationTooltip
     *
     * @return string|null
     */
    public function getExpirationTooltip()
    {
        return $this->container['expirationTooltip'];
    }

    /**
     * Sets expirationTooltip
     *
     * @param string|null $expirationTooltip The tooltip message to show, if any, when the item expires.
     *
     * @return $this
     */
    public function setExpirationTooltip($expirationTooltip)
    {
        $this->container['expirationTooltip'] = $expirationTooltip;

        return $this;
    }

    /**
     * Gets expiredInActivityMessage
     *
     * @return string|null
     */
    public function getExpiredInActivityMessage()
    {
        return $this->container['expiredInActivityMessage'];
    }

    /**
     * Sets expiredInActivityMessage
     *
     * @param string|null $expiredInActivityMessage If the item expires while playing in an activity, we show a different message.
     *
     * @return $this
     */
    public function setExpiredInActivityMessage($expiredInActivityMessage)
    {
        $this->container['expiredInActivityMessage'] = $expiredInActivityMessage;

        return $this;
    }

    /**
     * Gets expiredInOrbitMessage
     *
     * @return string|null
     */
    public function getExpiredInOrbitMessage()
    {
        return $this->container['expiredInOrbitMessage'];
    }

    /**
     * Sets expiredInOrbitMessage
     *
     * @param string|null $expiredInOrbitMessage If the item expires in orbit, we show a... more different message. (\"Consummate V's, consummate!\")
     *
     * @return $this
     */
    public function setExpiredInOrbitMessage($expiredInOrbitMessage)
    {
        $this->container['expiredInOrbitMessage'] = $expiredInOrbitMessage;

        return $this;
    }

    /**
     * Gets suppressExpirationWhenObjectivesComplete
     *
     * @return bool|null
     */
    public function getSuppressExpirationWhenObjectivesComplete()
    {
        return $this->container['suppressExpirationWhenObjectivesComplete'];
    }

    /**
     * Sets suppressExpirationWhenObjectivesComplete
     *
     * @param bool|null $suppressExpirationWhenObjectivesComplete suppressExpirationWhenObjectivesComplete
     *
     * @return $this
     */
    public function setSuppressExpirationWhenObjectivesComplete($suppressExpirationWhenObjectivesComplete)
    {
        $this->container['suppressExpirationWhenObjectivesComplete'] = $suppressExpirationWhenObjectivesComplete;

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


