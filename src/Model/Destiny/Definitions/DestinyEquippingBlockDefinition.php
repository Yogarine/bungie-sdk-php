<?php
/**
 * DestinyEquippingBlockDefinition
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
 * DestinyEquippingBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Items that can be equipped define this block. It contains information we need to understand how and when the item can be equipped.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyEquippingBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyEquippingBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gearsetItemHash' => 'int',
        'uniqueLabel' => 'string',
        'uniqueLabelHash' => 'int',
        'equipmentSlotTypeHash' => 'int',
        'attributes' => 'int',
        'ammoType' => 'int',
        'displayStrings' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'gearsetItemHash' => 'uint32',
        'uniqueLabel' => null,
        'uniqueLabelHash' => 'uint32',
        'equipmentSlotTypeHash' => 'uint32',
        'attributes' => 'int32',
        'ammoType' => 'int32',
        'displayStrings' => null
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
        'gearsetItemHash' => 'gearsetItemHash',
        'uniqueLabel' => 'uniqueLabel',
        'uniqueLabelHash' => 'uniqueLabelHash',
        'equipmentSlotTypeHash' => 'equipmentSlotTypeHash',
        'attributes' => 'attributes',
        'ammoType' => 'ammoType',
        'displayStrings' => 'displayStrings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gearsetItemHash' => 'setGearsetItemHash',
        'uniqueLabel' => 'setUniqueLabel',
        'uniqueLabelHash' => 'setUniqueLabelHash',
        'equipmentSlotTypeHash' => 'setEquipmentSlotTypeHash',
        'attributes' => 'setAttributes',
        'ammoType' => 'setAmmoType',
        'displayStrings' => 'setDisplayStrings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gearsetItemHash' => 'getGearsetItemHash',
        'uniqueLabel' => 'getUniqueLabel',
        'uniqueLabelHash' => 'getUniqueLabelHash',
        'equipmentSlotTypeHash' => 'getEquipmentSlotTypeHash',
        'attributes' => 'getAttributes',
        'ammoType' => 'getAmmoType',
        'displayStrings' => 'getDisplayStrings'
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
        $this->container['gearsetItemHash'] = isset($data['gearsetItemHash']) ? $data['gearsetItemHash'] : null;
        $this->container['uniqueLabel'] = isset($data['uniqueLabel']) ? $data['uniqueLabel'] : null;
        $this->container['uniqueLabelHash'] = isset($data['uniqueLabelHash']) ? $data['uniqueLabelHash'] : null;
        $this->container['equipmentSlotTypeHash'] = isset($data['equipmentSlotTypeHash']) ? $data['equipmentSlotTypeHash'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['ammoType'] = isset($data['ammoType']) ? $data['ammoType'] : null;
        $this->container['displayStrings'] = isset($data['displayStrings']) ? $data['displayStrings'] : null;
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
     * Gets gearsetItemHash
     *
     * @return int|null
     */
    public function getGearsetItemHash()
    {
        return $this->container['gearsetItemHash'];
    }

    /**
     * Sets gearsetItemHash
     *
     * @param int|null $gearsetItemHash If the item is part of a gearset, this is a reference to that gearset item.
     *
     * @return $this
     */
    public function setGearsetItemHash($gearsetItemHash)
    {
        $this->container['gearsetItemHash'] = $gearsetItemHash;

        return $this;
    }

    /**
     * Gets uniqueLabel
     *
     * @return string|null
     */
    public function getUniqueLabel()
    {
        return $this->container['uniqueLabel'];
    }

    /**
     * Sets uniqueLabel
     *
     * @param string|null $uniqueLabel If defined, this is the label used to check if the item has other items of matching types already equipped.   For instance, when you aren't allowed to equip more than one Exotic Weapon, that's because all exotic weapons have identical uniqueLabels and the game checks the to-be-equipped item's uniqueLabel vs. all other already equipped items (other than the item in the slot that's about to be occupied).
     *
     * @return $this
     */
    public function setUniqueLabel($uniqueLabel)
    {
        $this->container['uniqueLabel'] = $uniqueLabel;

        return $this;
    }

    /**
     * Gets uniqueLabelHash
     *
     * @return int|null
     */
    public function getUniqueLabelHash()
    {
        return $this->container['uniqueLabelHash'];
    }

    /**
     * Sets uniqueLabelHash
     *
     * @param int|null $uniqueLabelHash The hash of that unique label. Does not point to a specific definition.
     *
     * @return $this
     */
    public function setUniqueLabelHash($uniqueLabelHash)
    {
        $this->container['uniqueLabelHash'] = $uniqueLabelHash;

        return $this;
    }

    /**
     * Gets equipmentSlotTypeHash
     *
     * @return int|null
     */
    public function getEquipmentSlotTypeHash()
    {
        return $this->container['equipmentSlotTypeHash'];
    }

    /**
     * Sets equipmentSlotTypeHash
     *
     * @param int|null $equipmentSlotTypeHash An equipped item *must* be equipped in an Equipment Slot. This is the hash identifier of the DestinyEquipmentSlotDefinition into which it must be equipped.
     *
     * @return $this
     */
    public function setEquipmentSlotTypeHash($equipmentSlotTypeHash)
    {
        $this->container['equipmentSlotTypeHash'] = $equipmentSlotTypeHash;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return int|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param int|null $attributes These are custom attributes on the equippability of the item.  For now, this can only be \"equip on acquire\", which would mean that the item will be automatically equipped as soon as you pick it up.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets ammoType
     *
     * @return int|null
     */
    public function getAmmoType()
    {
        return $this->container['ammoType'];
    }

    /**
     * Sets ammoType
     *
     * @param int|null $ammoType Ammo type used by a weapon is no longer determined by the bucket in which it is contained. If the item has an ammo type - i.e. if it is a weapon - this will be the type of ammunition expected.
     *
     * @return $this
     */
    public function setAmmoType($ammoType)
    {
        $this->container['ammoType'] = $ammoType;

        return $this;
    }

    /**
     * Gets displayStrings
     *
     * @return string[]|null
     */
    public function getDisplayStrings()
    {
        return $this->container['displayStrings'];
    }

    /**
     * Sets displayStrings
     *
     * @param string[]|null $displayStrings These are strings that represent the possible Game/Account/Character state failure conditions that can occur when trying to equip the item. They match up one-to-one with requiredUnlockExpressions.
     *
     * @return $this
     */
    public function setDisplayStrings($displayStrings)
    {
        $this->container['displayStrings'] = $displayStrings;

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


