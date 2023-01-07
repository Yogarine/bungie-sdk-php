<?php
/**
 * DestinyProgressionRewardItemQuantity
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
 * DestinyProgressionRewardItemQuantity Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProgressionRewardItemQuantity implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyProgressionRewardItemQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rewardedAtProgressionLevel' => 'int',
        'acquisitionBehavior' => 'int',
        'uiDisplayStyle' => 'string',
        'claimUnlockDisplayStrings' => 'string[]',
        'itemHash' => 'int',
        'itemInstanceId' => 'int',
        'quantity' => 'int',
        'hasConditionalVisibility' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'rewardedAtProgressionLevel' => 'int32',
        'acquisitionBehavior' => 'int32',
        'uiDisplayStyle' => null,
        'claimUnlockDisplayStrings' => null,
        'itemHash' => 'uint32',
        'itemInstanceId' => 'int64',
        'quantity' => 'int32',
        'hasConditionalVisibility' => null
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
        'rewardedAtProgressionLevel' => 'rewardedAtProgressionLevel',
        'acquisitionBehavior' => 'acquisitionBehavior',
        'uiDisplayStyle' => 'uiDisplayStyle',
        'claimUnlockDisplayStrings' => 'claimUnlockDisplayStrings',
        'itemHash' => 'itemHash',
        'itemInstanceId' => 'itemInstanceId',
        'quantity' => 'quantity',
        'hasConditionalVisibility' => 'hasConditionalVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rewardedAtProgressionLevel' => 'setRewardedAtProgressionLevel',
        'acquisitionBehavior' => 'setAcquisitionBehavior',
        'uiDisplayStyle' => 'setUiDisplayStyle',
        'claimUnlockDisplayStrings' => 'setClaimUnlockDisplayStrings',
        'itemHash' => 'setItemHash',
        'itemInstanceId' => 'setItemInstanceId',
        'quantity' => 'setQuantity',
        'hasConditionalVisibility' => 'setHasConditionalVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rewardedAtProgressionLevel' => 'getRewardedAtProgressionLevel',
        'acquisitionBehavior' => 'getAcquisitionBehavior',
        'uiDisplayStyle' => 'getUiDisplayStyle',
        'claimUnlockDisplayStrings' => 'getClaimUnlockDisplayStrings',
        'itemHash' => 'getItemHash',
        'itemInstanceId' => 'getItemInstanceId',
        'quantity' => 'getQuantity',
        'hasConditionalVisibility' => 'getHasConditionalVisibility'
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
        $this->container['rewardedAtProgressionLevel'] = isset($data['rewardedAtProgressionLevel']) ? $data['rewardedAtProgressionLevel'] : null;
        $this->container['acquisitionBehavior'] = isset($data['acquisitionBehavior']) ? $data['acquisitionBehavior'] : null;
        $this->container['uiDisplayStyle'] = isset($data['uiDisplayStyle']) ? $data['uiDisplayStyle'] : null;
        $this->container['claimUnlockDisplayStrings'] = isset($data['claimUnlockDisplayStrings']) ? $data['claimUnlockDisplayStrings'] : null;
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['itemInstanceId'] = isset($data['itemInstanceId']) ? $data['itemInstanceId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['hasConditionalVisibility'] = isset($data['hasConditionalVisibility']) ? $data['hasConditionalVisibility'] : null;
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
     * Gets rewardedAtProgressionLevel
     *
     * @return int|null
     */
    public function getRewardedAtProgressionLevel()
    {
        return $this->container['rewardedAtProgressionLevel'];
    }

    /**
     * Sets rewardedAtProgressionLevel
     *
     * @param int|null $rewardedAtProgressionLevel rewardedAtProgressionLevel
     *
     * @return $this
     */
    public function setRewardedAtProgressionLevel($rewardedAtProgressionLevel)
    {
        $this->container['rewardedAtProgressionLevel'] = $rewardedAtProgressionLevel;

        return $this;
    }

    /**
     * Gets acquisitionBehavior
     *
     * @return int|null
     */
    public function getAcquisitionBehavior()
    {
        return $this->container['acquisitionBehavior'];
    }

    /**
     * Sets acquisitionBehavior
     *
     * @param int|null $acquisitionBehavior acquisitionBehavior
     *
     * @return $this
     */
    public function setAcquisitionBehavior($acquisitionBehavior)
    {
        $this->container['acquisitionBehavior'] = $acquisitionBehavior;

        return $this;
    }

    /**
     * Gets uiDisplayStyle
     *
     * @return string|null
     */
    public function getUiDisplayStyle()
    {
        return $this->container['uiDisplayStyle'];
    }

    /**
     * Sets uiDisplayStyle
     *
     * @param string|null $uiDisplayStyle uiDisplayStyle
     *
     * @return $this
     */
    public function setUiDisplayStyle($uiDisplayStyle)
    {
        $this->container['uiDisplayStyle'] = $uiDisplayStyle;

        return $this;
    }

    /**
     * Gets claimUnlockDisplayStrings
     *
     * @return string[]|null
     */
    public function getClaimUnlockDisplayStrings()
    {
        return $this->container['claimUnlockDisplayStrings'];
    }

    /**
     * Sets claimUnlockDisplayStrings
     *
     * @param string[]|null $claimUnlockDisplayStrings claimUnlockDisplayStrings
     *
     * @return $this
     */
    public function setClaimUnlockDisplayStrings($claimUnlockDisplayStrings)
    {
        $this->container['claimUnlockDisplayStrings'] = $claimUnlockDisplayStrings;

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
     * Gets hasConditionalVisibility
     *
     * @return bool|null
     */
    public function getHasConditionalVisibility()
    {
        return $this->container['hasConditionalVisibility'];
    }

    /**
     * Sets hasConditionalVisibility
     *
     * @param bool|null $hasConditionalVisibility Indicates that this item quantity may be conditionally shown or hidden, based on various sources of state. For example: server flags, account state, or character progress.
     *
     * @return $this
     */
    public function setHasConditionalVisibility($hasConditionalVisibility)
    {
        $this->container['hasConditionalVisibility'] = $hasConditionalVisibility;

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


