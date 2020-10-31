<?php
/**
 * DestinyMilestoneActivityVariant
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
 * OpenAPI spec version: 2.8.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneActivityVariant Class Doc Comment
 *
 * @category Class
 * @description Represents custom data that we know about an individual variant of an activity.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneActivityVariant implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyMilestoneActivityVariant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityHash' => 'int',
        'completionStatus' => '\Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityCompletionStatus',
        'activityModeHash' => 'int',
        'activityModeType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activityHash' => 'uint32',
        'completionStatus' => null,
        'activityModeHash' => 'uint32',
        'activityModeType' => 'int32'
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
        'activityHash' => 'activityHash',
        'completionStatus' => 'completionStatus',
        'activityModeHash' => 'activityModeHash',
        'activityModeType' => 'activityModeType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'completionStatus' => 'setCompletionStatus',
        'activityModeHash' => 'setActivityModeHash',
        'activityModeType' => 'setActivityModeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'completionStatus' => 'getCompletionStatus',
        'activityModeHash' => 'getActivityModeHash',
        'activityModeType' => 'getActivityModeType'
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

    const ACTIVITY_MODE_TYPE_NONE = 0;
    const ACTIVITY_MODE_TYPE_STORY = 2;
    const ACTIVITY_MODE_TYPE_STRIKE = 3;
    const ACTIVITY_MODE_TYPE_RAID = 4;
    const ACTIVITY_MODE_TYPE_ALLPVP = 5;
    const ACTIVITY_MODE_TYPE_PATROL = 6;
    const ACTIVITY_MODE_TYPE_ALLPVE = 7;
    const ACTIVITY_MODE_TYPE_RESERVED9 = 9;
    const ACTIVITY_MODE_TYPE_CONTROL = 10;
    const ACTIVITY_MODE_TYPE_RESERVED11 = 11;
    const ACTIVITY_MODE_TYPE_CLASH = 12;
    const ACTIVITY_MODE_TYPE_RESERVED13 = 13;
    const ACTIVITY_MODE_TYPE_CRIMSONDOUBLES = 15;
    const ACTIVITY_MODE_TYPE_NIGHTFALL = 16;
    const ACTIVITY_MODE_TYPE_HEROICNIGHTFALL = 17;
    const ACTIVITY_MODE_TYPE_ALLSTRIKES = 18;
    const ACTIVITY_MODE_TYPE_IRONBANNER = 19;
    const ACTIVITY_MODE_TYPE_RESERVED20 = 20;
    const ACTIVITY_MODE_TYPE_RESERVED21 = 21;
    const ACTIVITY_MODE_TYPE_RESERVED22 = 22;
    const ACTIVITY_MODE_TYPE_RESERVED24 = 24;
    const ACTIVITY_MODE_TYPE_ALLMAYHEM = 25;
    const ACTIVITY_MODE_TYPE_RESERVED26 = 26;
    const ACTIVITY_MODE_TYPE_RESERVED27 = 27;
    const ACTIVITY_MODE_TYPE_RESERVED28 = 28;
    const ACTIVITY_MODE_TYPE_RESERVED29 = 29;
    const ACTIVITY_MODE_TYPE_RESERVED30 = 30;
    const ACTIVITY_MODE_TYPE_SUPREMACY = 31;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL = 32;
    const ACTIVITY_MODE_TYPE_SURVIVAL = 37;
    const ACTIVITY_MODE_TYPE_COUNTDOWN = 38;
    const ACTIVITY_MODE_TYPE_TRIALSOFTHENINE = 39;
    const ACTIVITY_MODE_TYPE_SOCIAL = 40;
    const ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN = 41;
    const ACTIVITY_MODE_TYPE_TRIALSSURVIVAL = 42;
    const ACTIVITY_MODE_TYPE_IRONBANNERCONTROL = 43;
    const ACTIVITY_MODE_TYPE_IRONBANNERCLASH = 44;
    const ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY = 45;
    const ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL = 46;
    const ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL = 47;
    const ACTIVITY_MODE_TYPE_RUMBLE = 48;
    const ACTIVITY_MODE_TYPE_ALLDOUBLES = 49;
    const ACTIVITY_MODE_TYPE_DOUBLES = 50;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH = 51;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL = 52;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY = 53;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN = 54;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL = 55;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM = 56;
    const ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE = 57;
    const ACTIVITY_MODE_TYPE_HEROICADVENTURE = 58;
    const ACTIVITY_MODE_TYPE_SHOWDOWN = 59;
    const ACTIVITY_MODE_TYPE_LOCKDOWN = 60;
    const ACTIVITY_MODE_TYPE_SCORCHED = 61;
    const ACTIVITY_MODE_TYPE_SCORCHEDTEAM = 62;
    const ACTIVITY_MODE_TYPE_GAMBIT = 63;
    const ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE = 64;
    const ACTIVITY_MODE_TYPE_BREAKTHROUGH = 65;
    const ACTIVITY_MODE_TYPE_BLACKARMORYRUN = 66;
    const ACTIVITY_MODE_TYPE_SALVAGE = 67;
    const ACTIVITY_MODE_TYPE_IRONBANNERSALVAGE = 68;
    const ACTIVITY_MODE_TYPE_PVPCOMPETITIVE = 69;
    const ACTIVITY_MODE_TYPE_PVPQUICKPLAY = 70;
    const ACTIVITY_MODE_TYPE_CLASHQUICKPLAY = 71;
    const ACTIVITY_MODE_TYPE_CLASHCOMPETITIVE = 72;
    const ACTIVITY_MODE_TYPE_CONTROLQUICKPLAY = 73;
    const ACTIVITY_MODE_TYPE_CONTROLCOMPETITIVE = 74;
    const ACTIVITY_MODE_TYPE_GAMBITPRIME = 75;
    const ACTIVITY_MODE_TYPE_RECKONING = 76;
    const ACTIVITY_MODE_TYPE_MENAGERIE = 77;
    const ACTIVITY_MODE_TYPE_VEXOFFENSIVE = 78;
    const ACTIVITY_MODE_TYPE_NIGHTMAREHUNT = 79;
    const ACTIVITY_MODE_TYPE_ELIMINATION = 80;
    const ACTIVITY_MODE_TYPE_MOMENTUM = 81;
    const ACTIVITY_MODE_TYPE_DUNGEON = 82;
    const ACTIVITY_MODE_TYPE_SUNDIAL = 83;
    const ACTIVITY_MODE_TYPE_TRIALSOFOSIRIS = 84;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityModeTypeAllowableValues()
    {
        return [
            self::ACTIVITY_MODE_TYPE_NONE,
            self::ACTIVITY_MODE_TYPE_STORY,
            self::ACTIVITY_MODE_TYPE_STRIKE,
            self::ACTIVITY_MODE_TYPE_RAID,
            self::ACTIVITY_MODE_TYPE_ALLPVP,
            self::ACTIVITY_MODE_TYPE_PATROL,
            self::ACTIVITY_MODE_TYPE_ALLPVE,
            self::ACTIVITY_MODE_TYPE_RESERVED9,
            self::ACTIVITY_MODE_TYPE_CONTROL,
            self::ACTIVITY_MODE_TYPE_RESERVED11,
            self::ACTIVITY_MODE_TYPE_CLASH,
            self::ACTIVITY_MODE_TYPE_RESERVED13,
            self::ACTIVITY_MODE_TYPE_CRIMSONDOUBLES,
            self::ACTIVITY_MODE_TYPE_NIGHTFALL,
            self::ACTIVITY_MODE_TYPE_HEROICNIGHTFALL,
            self::ACTIVITY_MODE_TYPE_ALLSTRIKES,
            self::ACTIVITY_MODE_TYPE_IRONBANNER,
            self::ACTIVITY_MODE_TYPE_RESERVED20,
            self::ACTIVITY_MODE_TYPE_RESERVED21,
            self::ACTIVITY_MODE_TYPE_RESERVED22,
            self::ACTIVITY_MODE_TYPE_RESERVED24,
            self::ACTIVITY_MODE_TYPE_ALLMAYHEM,
            self::ACTIVITY_MODE_TYPE_RESERVED26,
            self::ACTIVITY_MODE_TYPE_RESERVED27,
            self::ACTIVITY_MODE_TYPE_RESERVED28,
            self::ACTIVITY_MODE_TYPE_RESERVED29,
            self::ACTIVITY_MODE_TYPE_RESERVED30,
            self::ACTIVITY_MODE_TYPE_SUPREMACY,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL,
            self::ACTIVITY_MODE_TYPE_SURVIVAL,
            self::ACTIVITY_MODE_TYPE_COUNTDOWN,
            self::ACTIVITY_MODE_TYPE_TRIALSOFTHENINE,
            self::ACTIVITY_MODE_TYPE_SOCIAL,
            self::ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN,
            self::ACTIVITY_MODE_TYPE_TRIALSSURVIVAL,
            self::ACTIVITY_MODE_TYPE_IRONBANNERCONTROL,
            self::ACTIVITY_MODE_TYPE_IRONBANNERCLASH,
            self::ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY,
            self::ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL,
            self::ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL,
            self::ACTIVITY_MODE_TYPE_RUMBLE,
            self::ACTIVITY_MODE_TYPE_ALLDOUBLES,
            self::ACTIVITY_MODE_TYPE_DOUBLES,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM,
            self::ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE,
            self::ACTIVITY_MODE_TYPE_HEROICADVENTURE,
            self::ACTIVITY_MODE_TYPE_SHOWDOWN,
            self::ACTIVITY_MODE_TYPE_LOCKDOWN,
            self::ACTIVITY_MODE_TYPE_SCORCHED,
            self::ACTIVITY_MODE_TYPE_SCORCHEDTEAM,
            self::ACTIVITY_MODE_TYPE_GAMBIT,
            self::ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE,
            self::ACTIVITY_MODE_TYPE_BREAKTHROUGH,
            self::ACTIVITY_MODE_TYPE_BLACKARMORYRUN,
            self::ACTIVITY_MODE_TYPE_SALVAGE,
            self::ACTIVITY_MODE_TYPE_IRONBANNERSALVAGE,
            self::ACTIVITY_MODE_TYPE_PVPCOMPETITIVE,
            self::ACTIVITY_MODE_TYPE_PVPQUICKPLAY,
            self::ACTIVITY_MODE_TYPE_CLASHQUICKPLAY,
            self::ACTIVITY_MODE_TYPE_CLASHCOMPETITIVE,
            self::ACTIVITY_MODE_TYPE_CONTROLQUICKPLAY,
            self::ACTIVITY_MODE_TYPE_CONTROLCOMPETITIVE,
            self::ACTIVITY_MODE_TYPE_GAMBITPRIME,
            self::ACTIVITY_MODE_TYPE_RECKONING,
            self::ACTIVITY_MODE_TYPE_MENAGERIE,
            self::ACTIVITY_MODE_TYPE_VEXOFFENSIVE,
            self::ACTIVITY_MODE_TYPE_NIGHTMAREHUNT,
            self::ACTIVITY_MODE_TYPE_ELIMINATION,
            self::ACTIVITY_MODE_TYPE_MOMENTUM,
            self::ACTIVITY_MODE_TYPE_DUNGEON,
            self::ACTIVITY_MODE_TYPE_SUNDIAL,
            self::ACTIVITY_MODE_TYPE_TRIALSOFOSIRIS,
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
        $this->container['completionStatus'] = isset($data['completionStatus']) ? $data['completionStatus'] : null;
        $this->container['activityModeHash'] = isset($data['activityModeHash']) ? $data['activityModeHash'] : null;
        $this->container['activityModeType'] = isset($data['activityModeType']) ? $data['activityModeType'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets activityHash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int|null $activityHash The hash for the specific variant of the activity related to this milestone. You can pull more detailed static info from the DestinyActivityDefinition, such as difficulty level.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets completionStatus
     *
     * @return \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityCompletionStatus|null
     */
    public function getCompletionStatus()
    {
        return $this->container['completionStatus'];
    }

    /**
     * Sets completionStatus
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityCompletionStatus|null $completionStatus An OPTIONAL component: if it makes sense to talk about this activity variant in terms of whether or not it has been completed or what progress you have made in it, this will be returned. Otherwise, this will be NULL.
     *
     * @return $this
     */
    public function setCompletionStatus($completionStatus)
    {
        $this->container['completionStatus'] = $completionStatus;

        return $this;
    }

    /**
     * Gets activityModeHash
     *
     * @return int|null
     */
    public function getActivityModeHash()
    {
        return $this->container['activityModeHash'];
    }

    /**
     * Sets activityModeHash
     *
     * @param int|null $activityModeHash The hash identifier of the most specific Activity Mode under which this activity is played. This is useful for situations where the activity in question is - for instance - a PVP map, but it's not clear what mode the PVP map is being played under. If it's a playlist, this will be less specific: but hopefully useful in some way.
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
     * @return int|null
     */
    public function getActivityModeType()
    {
        return $this->container['activityModeType'];
    }

    /**
     * Sets activityModeType
     *
     * @param int|null $activityModeType The enumeration equivalent of the most specific Activity Mode under which this activity is played.
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


