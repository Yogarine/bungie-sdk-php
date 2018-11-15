<?php
/**
 * DestinyMilestonesDestinyMilestoneActivity
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
 * DestinyMilestonesDestinyMilestoneActivity Class Doc Comment
 *
 * @category Class
 * @description Sometimes, we know the specific activity that the Milestone wants you to play. This entity provides additional information about that Activity and all of its variants. (sometimes there&#39;s only one variant, but I think you get the point)
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyMilestonesDestinyMilestoneActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Milestones.DestinyMilestoneActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityHash' => 'int',
        'activityModeHash' => 'int',
        'activityModeType' => 'int',
        'modifierHashes' => 'int[]',
        'variants' => '\Bungie\Model\DestinyMilestonesDestinyMilestoneActivityVariant[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activityHash' => 'uint32',
        'activityModeHash' => 'uint32',
        'activityModeType' => 'int32',
        'modifierHashes' => 'uint32',
        'variants' => null
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
        'activityHash' => 'activityHash',
        'activityModeHash' => 'activityModeHash',
        'activityModeType' => 'activityModeType',
        'modifierHashes' => 'modifierHashes',
        'variants' => 'variants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'activityModeHash' => 'setActivityModeHash',
        'activityModeType' => 'setActivityModeType',
        'modifierHashes' => 'setModifierHashes',
        'variants' => 'setVariants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'activityModeHash' => 'getActivityModeHash',
        'activityModeType' => 'getActivityModeType',
        'modifierHashes' => 'getModifierHashes',
        'variants' => 'getVariants'
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

    const ACTIVITY_MODE_TYPE_0 = 0;
    const ACTIVITY_MODE_TYPE_2 = 2;
    const ACTIVITY_MODE_TYPE_3 = 3;
    const ACTIVITY_MODE_TYPE_4 = 4;
    const ACTIVITY_MODE_TYPE_5 = 5;
    const ACTIVITY_MODE_TYPE_6 = 6;
    const ACTIVITY_MODE_TYPE_7 = 7;
    const ACTIVITY_MODE_TYPE_9 = 9;
    const ACTIVITY_MODE_TYPE_10 = 10;
    const ACTIVITY_MODE_TYPE_11 = 11;
    const ACTIVITY_MODE_TYPE_12 = 12;
    const ACTIVITY_MODE_TYPE_13 = 13;
    const ACTIVITY_MODE_TYPE_15 = 15;
    const ACTIVITY_MODE_TYPE_16 = 16;
    const ACTIVITY_MODE_TYPE_17 = 17;
    const ACTIVITY_MODE_TYPE_18 = 18;
    const ACTIVITY_MODE_TYPE_19 = 19;
    const ACTIVITY_MODE_TYPE_20 = 20;
    const ACTIVITY_MODE_TYPE_21 = 21;
    const ACTIVITY_MODE_TYPE_22 = 22;
    const ACTIVITY_MODE_TYPE_24 = 24;
    const ACTIVITY_MODE_TYPE_25 = 25;
    const ACTIVITY_MODE_TYPE_26 = 26;
    const ACTIVITY_MODE_TYPE_27 = 27;
    const ACTIVITY_MODE_TYPE_28 = 28;
    const ACTIVITY_MODE_TYPE_29 = 29;
    const ACTIVITY_MODE_TYPE_30 = 30;
    const ACTIVITY_MODE_TYPE_31 = 31;
    const ACTIVITY_MODE_TYPE_32 = 32;
    const ACTIVITY_MODE_TYPE_37 = 37;
    const ACTIVITY_MODE_TYPE_38 = 38;
    const ACTIVITY_MODE_TYPE_39 = 39;
    const ACTIVITY_MODE_TYPE_40 = 40;
    const ACTIVITY_MODE_TYPE_41 = 41;
    const ACTIVITY_MODE_TYPE_42 = 42;
    const ACTIVITY_MODE_TYPE_43 = 43;
    const ACTIVITY_MODE_TYPE_44 = 44;
    const ACTIVITY_MODE_TYPE_45 = 45;
    const ACTIVITY_MODE_TYPE_46 = 46;
    const ACTIVITY_MODE_TYPE_47 = 47;
    const ACTIVITY_MODE_TYPE_48 = 48;
    const ACTIVITY_MODE_TYPE_49 = 49;
    const ACTIVITY_MODE_TYPE_50 = 50;
    const ACTIVITY_MODE_TYPE_51 = 51;
    const ACTIVITY_MODE_TYPE_52 = 52;
    const ACTIVITY_MODE_TYPE_53 = 53;
    const ACTIVITY_MODE_TYPE_54 = 54;
    const ACTIVITY_MODE_TYPE_55 = 55;
    const ACTIVITY_MODE_TYPE_56 = 56;
    const ACTIVITY_MODE_TYPE_57 = 57;
    const ACTIVITY_MODE_TYPE_58 = 58;
    const ACTIVITY_MODE_TYPE_59 = 59;
    const ACTIVITY_MODE_TYPE_60 = 60;
    const ACTIVITY_MODE_TYPE_61 = 61;
    const ACTIVITY_MODE_TYPE_62 = 62;
    const ACTIVITY_MODE_TYPE_63 = 63;
    const ACTIVITY_MODE_TYPE_64 = 64;
    const ACTIVITY_MODE_TYPE_65 = 65;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityModeTypeAllowableValues()
    {
        return [
            self::ACTIVITY_MODE_TYPE_0,
            self::ACTIVITY_MODE_TYPE_2,
            self::ACTIVITY_MODE_TYPE_3,
            self::ACTIVITY_MODE_TYPE_4,
            self::ACTIVITY_MODE_TYPE_5,
            self::ACTIVITY_MODE_TYPE_6,
            self::ACTIVITY_MODE_TYPE_7,
            self::ACTIVITY_MODE_TYPE_9,
            self::ACTIVITY_MODE_TYPE_10,
            self::ACTIVITY_MODE_TYPE_11,
            self::ACTIVITY_MODE_TYPE_12,
            self::ACTIVITY_MODE_TYPE_13,
            self::ACTIVITY_MODE_TYPE_15,
            self::ACTIVITY_MODE_TYPE_16,
            self::ACTIVITY_MODE_TYPE_17,
            self::ACTIVITY_MODE_TYPE_18,
            self::ACTIVITY_MODE_TYPE_19,
            self::ACTIVITY_MODE_TYPE_20,
            self::ACTIVITY_MODE_TYPE_21,
            self::ACTIVITY_MODE_TYPE_22,
            self::ACTIVITY_MODE_TYPE_24,
            self::ACTIVITY_MODE_TYPE_25,
            self::ACTIVITY_MODE_TYPE_26,
            self::ACTIVITY_MODE_TYPE_27,
            self::ACTIVITY_MODE_TYPE_28,
            self::ACTIVITY_MODE_TYPE_29,
            self::ACTIVITY_MODE_TYPE_30,
            self::ACTIVITY_MODE_TYPE_31,
            self::ACTIVITY_MODE_TYPE_32,
            self::ACTIVITY_MODE_TYPE_37,
            self::ACTIVITY_MODE_TYPE_38,
            self::ACTIVITY_MODE_TYPE_39,
            self::ACTIVITY_MODE_TYPE_40,
            self::ACTIVITY_MODE_TYPE_41,
            self::ACTIVITY_MODE_TYPE_42,
            self::ACTIVITY_MODE_TYPE_43,
            self::ACTIVITY_MODE_TYPE_44,
            self::ACTIVITY_MODE_TYPE_45,
            self::ACTIVITY_MODE_TYPE_46,
            self::ACTIVITY_MODE_TYPE_47,
            self::ACTIVITY_MODE_TYPE_48,
            self::ACTIVITY_MODE_TYPE_49,
            self::ACTIVITY_MODE_TYPE_50,
            self::ACTIVITY_MODE_TYPE_51,
            self::ACTIVITY_MODE_TYPE_52,
            self::ACTIVITY_MODE_TYPE_53,
            self::ACTIVITY_MODE_TYPE_54,
            self::ACTIVITY_MODE_TYPE_55,
            self::ACTIVITY_MODE_TYPE_56,
            self::ACTIVITY_MODE_TYPE_57,
            self::ACTIVITY_MODE_TYPE_58,
            self::ACTIVITY_MODE_TYPE_59,
            self::ACTIVITY_MODE_TYPE_60,
            self::ACTIVITY_MODE_TYPE_61,
            self::ACTIVITY_MODE_TYPE_62,
            self::ACTIVITY_MODE_TYPE_63,
            self::ACTIVITY_MODE_TYPE_64,
            self::ACTIVITY_MODE_TYPE_65,
        ];
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
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['activityModeHash'] = isset($data['activityModeHash']) ? $data['activityModeHash'] : null;
        $this->container['activityModeType'] = isset($data['activityModeType']) ? $data['activityModeType'] : null;
        $this->container['modifierHashes'] = isset($data['modifierHashes']) ? $data['modifierHashes'] : null;
        $this->container['variants'] = isset($data['variants']) ? $data['variants'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActivityModeTypeAllowableValues();
        if (!is_null($this->container['activityModeType']) && !in_array($this->container['activityModeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activityModeType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getActivityModeTypeAllowableValues();
        if (!is_null($this->container['activityModeType']) && !in_array($this->container['activityModeType'], $allowedValues, true)) {
            return false;
        }
        return true;
    }


    /**
     * Gets activityHash
     *
     * @return int
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int $activityHash The hash of an arbitrarily chosen variant of this activity. We'll go ahead and call that the \"canonical\" activity, because if you're using this value you should only use it for properties that are common across the variants: things like the name of the activity, it's location, etc... Use this hash to look up the DestinyActivityDefinition of this activity for rendering data.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets activityModeHash
     *
     * @return int
     */
    public function getActivityModeHash()
    {
        return $this->container['activityModeHash'];
    }

    /**
     * Sets activityModeHash
     *
     * @param int $activityModeHash The hash identifier of the most specific Activity Mode under which this activity is played. This is useful for situations where the activity in question is - for instance - a PVP map, but it's not clear what mode the PVP map is being played under. If it's a playlist, this will be less specific: but hopefully useful in some way.
     *
     * @return $this
     */
    public function setActivityModeHash($activityModeHash)
    {
        $this->container['activityModeHash'] = $activityModeHash;

        return $this;
    }

    /**
     * Gets activityModeType
     *
     * @return int
     */
    public function getActivityModeType()
    {
        return $this->container['activityModeType'];
    }

    /**
     * Sets activityModeType
     *
     * @param int $activityModeType The enumeration equivalent of the most specific Activity Mode under which this activity is played.
     *
     * @return $this
     */
    public function setActivityModeType($activityModeType)
    {
        $allowedValues = $this->getActivityModeTypeAllowableValues();
        if (!is_null($activityModeType) && !in_array($activityModeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activityModeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activityModeType'] = $activityModeType;

        return $this;
    }

    /**
     * Gets modifierHashes
     *
     * @return int[]
     */
    public function getModifierHashes()
    {
        return $this->container['modifierHashes'];
    }

    /**
     * Sets modifierHashes
     *
     * @param int[] $modifierHashes If the activity has modifiers, this will be the list of modifiers that all variants have in common. Perform lookups against DestinyActivityModifierDefinition which defines the modifier being applied to get at the modifier data. Note that, in the DestiyActivityDefinition, you will see many more modifiers than this being referred to: those are all *possible* modifiers for the activity, not the active ones. Use only the active ones to match what's really live.
     *
     * @return $this
     */
    public function setModifierHashes($modifierHashes)
    {
        $this->container['modifierHashes'] = $modifierHashes;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \Bungie\Model\DestinyMilestonesDestinyMilestoneActivityVariant[]
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Bungie\Model\DestinyMilestonesDestinyMilestoneActivityVariant[] $variants If you want more than just name/location/etc... you're going to have to dig into and show the variants of the conceptual activity. These will differ in seemingly arbitrary ways, like difficulty level and modifiers applied. Show it in whatever way tickles your fancy.
     *
     * @return $this
     */
    public function setVariants($variants)
    {
        $this->container['variants'] = $variants;

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


