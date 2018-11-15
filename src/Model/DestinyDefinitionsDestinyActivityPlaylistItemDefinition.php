<?php
/**
 * DestinyDefinitionsDestinyActivityPlaylistItemDefinition
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
 * DestinyDefinitionsDestinyActivityPlaylistItemDefinition Class Doc Comment
 *
 * @category Class
 * @description If the activity is a playlist, this is the definition for a specific entry in the playlist: a single possible combination of Activity and Activity Mode that can be chosen.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsDestinyActivityPlaylistItemDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.DestinyActivityPlaylistItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityHash' => 'int',
        'directActivityModeHash' => 'int',
        'directActivityModeType' => 'int',
        'activityModeHashes' => 'int[]',
        'activityModeTypes' => '\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activityHash' => 'uint32',
        'directActivityModeHash' => 'uint32',
        'directActivityModeType' => 'int32',
        'activityModeHashes' => 'uint32',
        'activityModeTypes' => null
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
        'directActivityModeHash' => 'directActivityModeHash',
        'directActivityModeType' => 'directActivityModeType',
        'activityModeHashes' => 'activityModeHashes',
        'activityModeTypes' => 'activityModeTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'directActivityModeHash' => 'setDirectActivityModeHash',
        'directActivityModeType' => 'setDirectActivityModeType',
        'activityModeHashes' => 'setActivityModeHashes',
        'activityModeTypes' => 'setActivityModeTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'directActivityModeHash' => 'getDirectActivityModeHash',
        'directActivityModeType' => 'getDirectActivityModeType',
        'activityModeHashes' => 'getActivityModeHashes',
        'activityModeTypes' => 'getActivityModeTypes'
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

    const DIRECT_ACTIVITY_MODE_TYPE_0 = 0;
    const DIRECT_ACTIVITY_MODE_TYPE_2 = 2;
    const DIRECT_ACTIVITY_MODE_TYPE_3 = 3;
    const DIRECT_ACTIVITY_MODE_TYPE_4 = 4;
    const DIRECT_ACTIVITY_MODE_TYPE_5 = 5;
    const DIRECT_ACTIVITY_MODE_TYPE_6 = 6;
    const DIRECT_ACTIVITY_MODE_TYPE_7 = 7;
    const DIRECT_ACTIVITY_MODE_TYPE_9 = 9;
    const DIRECT_ACTIVITY_MODE_TYPE_10 = 10;
    const DIRECT_ACTIVITY_MODE_TYPE_11 = 11;
    const DIRECT_ACTIVITY_MODE_TYPE_12 = 12;
    const DIRECT_ACTIVITY_MODE_TYPE_13 = 13;
    const DIRECT_ACTIVITY_MODE_TYPE_15 = 15;
    const DIRECT_ACTIVITY_MODE_TYPE_16 = 16;
    const DIRECT_ACTIVITY_MODE_TYPE_17 = 17;
    const DIRECT_ACTIVITY_MODE_TYPE_18 = 18;
    const DIRECT_ACTIVITY_MODE_TYPE_19 = 19;
    const DIRECT_ACTIVITY_MODE_TYPE_20 = 20;
    const DIRECT_ACTIVITY_MODE_TYPE_21 = 21;
    const DIRECT_ACTIVITY_MODE_TYPE_22 = 22;
    const DIRECT_ACTIVITY_MODE_TYPE_24 = 24;
    const DIRECT_ACTIVITY_MODE_TYPE_25 = 25;
    const DIRECT_ACTIVITY_MODE_TYPE_26 = 26;
    const DIRECT_ACTIVITY_MODE_TYPE_27 = 27;
    const DIRECT_ACTIVITY_MODE_TYPE_28 = 28;
    const DIRECT_ACTIVITY_MODE_TYPE_29 = 29;
    const DIRECT_ACTIVITY_MODE_TYPE_30 = 30;
    const DIRECT_ACTIVITY_MODE_TYPE_31 = 31;
    const DIRECT_ACTIVITY_MODE_TYPE_32 = 32;
    const DIRECT_ACTIVITY_MODE_TYPE_37 = 37;
    const DIRECT_ACTIVITY_MODE_TYPE_38 = 38;
    const DIRECT_ACTIVITY_MODE_TYPE_39 = 39;
    const DIRECT_ACTIVITY_MODE_TYPE_40 = 40;
    const DIRECT_ACTIVITY_MODE_TYPE_41 = 41;
    const DIRECT_ACTIVITY_MODE_TYPE_42 = 42;
    const DIRECT_ACTIVITY_MODE_TYPE_43 = 43;
    const DIRECT_ACTIVITY_MODE_TYPE_44 = 44;
    const DIRECT_ACTIVITY_MODE_TYPE_45 = 45;
    const DIRECT_ACTIVITY_MODE_TYPE_46 = 46;
    const DIRECT_ACTIVITY_MODE_TYPE_47 = 47;
    const DIRECT_ACTIVITY_MODE_TYPE_48 = 48;
    const DIRECT_ACTIVITY_MODE_TYPE_49 = 49;
    const DIRECT_ACTIVITY_MODE_TYPE_50 = 50;
    const DIRECT_ACTIVITY_MODE_TYPE_51 = 51;
    const DIRECT_ACTIVITY_MODE_TYPE_52 = 52;
    const DIRECT_ACTIVITY_MODE_TYPE_53 = 53;
    const DIRECT_ACTIVITY_MODE_TYPE_54 = 54;
    const DIRECT_ACTIVITY_MODE_TYPE_55 = 55;
    const DIRECT_ACTIVITY_MODE_TYPE_56 = 56;
    const DIRECT_ACTIVITY_MODE_TYPE_57 = 57;
    const DIRECT_ACTIVITY_MODE_TYPE_58 = 58;
    const DIRECT_ACTIVITY_MODE_TYPE_59 = 59;
    const DIRECT_ACTIVITY_MODE_TYPE_60 = 60;
    const DIRECT_ACTIVITY_MODE_TYPE_61 = 61;
    const DIRECT_ACTIVITY_MODE_TYPE_62 = 62;
    const DIRECT_ACTIVITY_MODE_TYPE_63 = 63;
    const DIRECT_ACTIVITY_MODE_TYPE_64 = 64;
    const DIRECT_ACTIVITY_MODE_TYPE_65 = 65;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectActivityModeTypeAllowableValues()
    {
        return [
            self::DIRECT_ACTIVITY_MODE_TYPE_0,
            self::DIRECT_ACTIVITY_MODE_TYPE_2,
            self::DIRECT_ACTIVITY_MODE_TYPE_3,
            self::DIRECT_ACTIVITY_MODE_TYPE_4,
            self::DIRECT_ACTIVITY_MODE_TYPE_5,
            self::DIRECT_ACTIVITY_MODE_TYPE_6,
            self::DIRECT_ACTIVITY_MODE_TYPE_7,
            self::DIRECT_ACTIVITY_MODE_TYPE_9,
            self::DIRECT_ACTIVITY_MODE_TYPE_10,
            self::DIRECT_ACTIVITY_MODE_TYPE_11,
            self::DIRECT_ACTIVITY_MODE_TYPE_12,
            self::DIRECT_ACTIVITY_MODE_TYPE_13,
            self::DIRECT_ACTIVITY_MODE_TYPE_15,
            self::DIRECT_ACTIVITY_MODE_TYPE_16,
            self::DIRECT_ACTIVITY_MODE_TYPE_17,
            self::DIRECT_ACTIVITY_MODE_TYPE_18,
            self::DIRECT_ACTIVITY_MODE_TYPE_19,
            self::DIRECT_ACTIVITY_MODE_TYPE_20,
            self::DIRECT_ACTIVITY_MODE_TYPE_21,
            self::DIRECT_ACTIVITY_MODE_TYPE_22,
            self::DIRECT_ACTIVITY_MODE_TYPE_24,
            self::DIRECT_ACTIVITY_MODE_TYPE_25,
            self::DIRECT_ACTIVITY_MODE_TYPE_26,
            self::DIRECT_ACTIVITY_MODE_TYPE_27,
            self::DIRECT_ACTIVITY_MODE_TYPE_28,
            self::DIRECT_ACTIVITY_MODE_TYPE_29,
            self::DIRECT_ACTIVITY_MODE_TYPE_30,
            self::DIRECT_ACTIVITY_MODE_TYPE_31,
            self::DIRECT_ACTIVITY_MODE_TYPE_32,
            self::DIRECT_ACTIVITY_MODE_TYPE_37,
            self::DIRECT_ACTIVITY_MODE_TYPE_38,
            self::DIRECT_ACTIVITY_MODE_TYPE_39,
            self::DIRECT_ACTIVITY_MODE_TYPE_40,
            self::DIRECT_ACTIVITY_MODE_TYPE_41,
            self::DIRECT_ACTIVITY_MODE_TYPE_42,
            self::DIRECT_ACTIVITY_MODE_TYPE_43,
            self::DIRECT_ACTIVITY_MODE_TYPE_44,
            self::DIRECT_ACTIVITY_MODE_TYPE_45,
            self::DIRECT_ACTIVITY_MODE_TYPE_46,
            self::DIRECT_ACTIVITY_MODE_TYPE_47,
            self::DIRECT_ACTIVITY_MODE_TYPE_48,
            self::DIRECT_ACTIVITY_MODE_TYPE_49,
            self::DIRECT_ACTIVITY_MODE_TYPE_50,
            self::DIRECT_ACTIVITY_MODE_TYPE_51,
            self::DIRECT_ACTIVITY_MODE_TYPE_52,
            self::DIRECT_ACTIVITY_MODE_TYPE_53,
            self::DIRECT_ACTIVITY_MODE_TYPE_54,
            self::DIRECT_ACTIVITY_MODE_TYPE_55,
            self::DIRECT_ACTIVITY_MODE_TYPE_56,
            self::DIRECT_ACTIVITY_MODE_TYPE_57,
            self::DIRECT_ACTIVITY_MODE_TYPE_58,
            self::DIRECT_ACTIVITY_MODE_TYPE_59,
            self::DIRECT_ACTIVITY_MODE_TYPE_60,
            self::DIRECT_ACTIVITY_MODE_TYPE_61,
            self::DIRECT_ACTIVITY_MODE_TYPE_62,
            self::DIRECT_ACTIVITY_MODE_TYPE_63,
            self::DIRECT_ACTIVITY_MODE_TYPE_64,
            self::DIRECT_ACTIVITY_MODE_TYPE_65,
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
        $this->container['directActivityModeHash'] = isset($data['directActivityModeHash']) ? $data['directActivityModeHash'] : null;
        $this->container['directActivityModeType'] = isset($data['directActivityModeType']) ? $data['directActivityModeType'] : null;
        $this->container['activityModeHashes'] = isset($data['activityModeHashes']) ? $data['activityModeHashes'] : null;
        $this->container['activityModeTypes'] = isset($data['activityModeTypes']) ? $data['activityModeTypes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($this->container['directActivityModeType']) && !in_array($this->container['directActivityModeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'directActivityModeType', must be one of '%s'",
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

        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($this->container['directActivityModeType']) && !in_array($this->container['directActivityModeType'], $allowedValues, true)) {
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
     * @param int $activityHash The hash identifier of the Activity that can be played. Use it to look up the DestinyActivityDefinition.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets directActivityModeHash
     *
     * @return int
     */
    public function getDirectActivityModeHash()
    {
        return $this->container['directActivityModeHash'];
    }

    /**
     * Sets directActivityModeHash
     *
     * @param int $directActivityModeHash If this playlist entry had an activity mode directly defined on it, this will be the hash of that mode.
     *
     * @return $this
     */
    public function setDirectActivityModeHash($directActivityModeHash)
    {
        $this->container['directActivityModeHash'] = $directActivityModeHash;

        return $this;
    }

    /**
     * Gets directActivityModeType
     *
     * @return int
     */
    public function getDirectActivityModeType()
    {
        return $this->container['directActivityModeType'];
    }

    /**
     * Sets directActivityModeType
     *
     * @param int $directActivityModeType If the playlist entry had an activity mode directly defined on it, this will be the enum value of that mode.
     *
     * @return $this
     */
    public function setDirectActivityModeType($directActivityModeType)
    {
        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($directActivityModeType) && !in_array($directActivityModeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'directActivityModeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['directActivityModeType'] = $directActivityModeType;

        return $this;
    }

    /**
     * Gets activityModeHashes
     *
     * @return int[]
     */
    public function getActivityModeHashes()
    {
        return $this->container['activityModeHashes'];
    }

    /**
     * Sets activityModeHashes
     *
     * @param int[] $activityModeHashes The hash identifiers for Activity Modes relevant to this entry.
     *
     * @return $this
     */
    public function setActivityModeHashes($activityModeHashes)
    {
        $this->container['activityModeHashes'] = $activityModeHashes;

        return $this;
    }

    /**
     * Gets activityModeTypes
     *
     * @return \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]
     */
    public function getActivityModeTypes()
    {
        return $this->container['activityModeTypes'];
    }

    /**
     * Sets activityModeTypes
     *
     * @param \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[] $activityModeTypes The activity modes - if any - in enum form. Because we can't seem to escape the enums.
     *
     * @return $this
     */
    public function setActivityModeTypes($activityModeTypes)
    {
        $this->container['activityModeTypes'] = $activityModeTypes;

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


