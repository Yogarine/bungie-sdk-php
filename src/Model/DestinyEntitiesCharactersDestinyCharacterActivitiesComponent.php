<?php
/**
 * DestinyEntitiesCharactersDestinyCharacterActivitiesComponent
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

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyEntitiesCharactersDestinyCharacterActivitiesComponent Class Doc Comment
 *
 * @category Class
 * @description This component holds activity data for a character. It will tell you about the character&#39;s current activity status, as well as activities that are available to the user.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyEntitiesCharactersDestinyCharacterActivitiesComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Characters.DestinyCharacterActivitiesComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dateActivityStarted' => '\DateTime',
        'availableActivities' => '\Bungie\Model\DestinyDestinyActivity[]',
        'currentActivityHash' => 'int',
        'currentActivityModeHash' => 'int',
        'currentActivityModeType' => 'int',
        'currentActivityModeHashes' => 'int[]',
        'currentActivityModeTypes' => '\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]',
        'currentPlaylistActivityHash' => 'int',
        'lastCompletedStoryHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dateActivityStarted' => 'date-time',
        'availableActivities' => null,
        'currentActivityHash' => 'uint32',
        'currentActivityModeHash' => 'uint32',
        'currentActivityModeType' => 'int32',
        'currentActivityModeHashes' => 'uint32',
        'currentActivityModeTypes' => null,
        'currentPlaylistActivityHash' => 'uint32',
        'lastCompletedStoryHash' => 'uint32'
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
        'dateActivityStarted' => 'dateActivityStarted',
        'availableActivities' => 'availableActivities',
        'currentActivityHash' => 'currentActivityHash',
        'currentActivityModeHash' => 'currentActivityModeHash',
        'currentActivityModeType' => 'currentActivityModeType',
        'currentActivityModeHashes' => 'currentActivityModeHashes',
        'currentActivityModeTypes' => 'currentActivityModeTypes',
        'currentPlaylistActivityHash' => 'currentPlaylistActivityHash',
        'lastCompletedStoryHash' => 'lastCompletedStoryHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dateActivityStarted' => 'setDateActivityStarted',
        'availableActivities' => 'setAvailableActivities',
        'currentActivityHash' => 'setCurrentActivityHash',
        'currentActivityModeHash' => 'setCurrentActivityModeHash',
        'currentActivityModeType' => 'setCurrentActivityModeType',
        'currentActivityModeHashes' => 'setCurrentActivityModeHashes',
        'currentActivityModeTypes' => 'setCurrentActivityModeTypes',
        'currentPlaylistActivityHash' => 'setCurrentPlaylistActivityHash',
        'lastCompletedStoryHash' => 'setLastCompletedStoryHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dateActivityStarted' => 'getDateActivityStarted',
        'availableActivities' => 'getAvailableActivities',
        'currentActivityHash' => 'getCurrentActivityHash',
        'currentActivityModeHash' => 'getCurrentActivityModeHash',
        'currentActivityModeType' => 'getCurrentActivityModeType',
        'currentActivityModeHashes' => 'getCurrentActivityModeHashes',
        'currentActivityModeTypes' => 'getCurrentActivityModeTypes',
        'currentPlaylistActivityHash' => 'getCurrentPlaylistActivityHash',
        'lastCompletedStoryHash' => 'getLastCompletedStoryHash'
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

    const CURRENT_ACTIVITY_MODE_TYPE_NONE = 0;
    const CURRENT_ACTIVITY_MODE_TYPE_STORY = 2;
    const CURRENT_ACTIVITY_MODE_TYPE_STRIKE = 3;
    const CURRENT_ACTIVITY_MODE_TYPE_RAID = 4;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLPVP = 5;
    const CURRENT_ACTIVITY_MODE_TYPE_PATROL = 6;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLPVE = 7;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED9 = 9;
    const CURRENT_ACTIVITY_MODE_TYPE_CONTROL = 10;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED11 = 11;
    const CURRENT_ACTIVITY_MODE_TYPE_CLASH = 12;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED13 = 13;
    const CURRENT_ACTIVITY_MODE_TYPE_CRIMSONDOUBLES = 15;
    const CURRENT_ACTIVITY_MODE_TYPE_NIGHTFALL = 16;
    const CURRENT_ACTIVITY_MODE_TYPE_HEROICNIGHTFALL = 17;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLSTRIKES = 18;
    const CURRENT_ACTIVITY_MODE_TYPE_IRONBANNER = 19;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED20 = 20;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED21 = 21;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED22 = 22;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED24 = 24;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLMAYHEM = 25;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED26 = 26;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED27 = 27;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED28 = 28;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED29 = 29;
    const CURRENT_ACTIVITY_MODE_TYPE_RESERVED30 = 30;
    const CURRENT_ACTIVITY_MODE_TYPE_SUPREMACY = 31;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL = 32;
    const CURRENT_ACTIVITY_MODE_TYPE_SURVIVAL = 37;
    const CURRENT_ACTIVITY_MODE_TYPE_COUNTDOWN = 38;
    const CURRENT_ACTIVITY_MODE_TYPE_TRIALSOFTHENINE = 39;
    const CURRENT_ACTIVITY_MODE_TYPE_SOCIAL = 40;
    const CURRENT_ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN = 41;
    const CURRENT_ACTIVITY_MODE_TYPE_TRIALSSURVIVAL = 42;
    const CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERCONTROL = 43;
    const CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERCLASH = 44;
    const CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY = 45;
    const CURRENT_ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL = 46;
    const CURRENT_ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL = 47;
    const CURRENT_ACTIVITY_MODE_TYPE_RUMBLE = 48;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLDOUBLES = 49;
    const CURRENT_ACTIVITY_MODE_TYPE_DOUBLES = 50;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH = 51;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL = 52;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY = 53;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN = 54;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL = 55;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM = 56;
    const CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE = 57;
    const CURRENT_ACTIVITY_MODE_TYPE_HEROICADVENTURE = 58;
    const CURRENT_ACTIVITY_MODE_TYPE_SHOWDOWN = 59;
    const CURRENT_ACTIVITY_MODE_TYPE_LOCKDOWN = 60;
    const CURRENT_ACTIVITY_MODE_TYPE_SCORCHED = 61;
    const CURRENT_ACTIVITY_MODE_TYPE_SCORCHEDTEAM = 62;
    const CURRENT_ACTIVITY_MODE_TYPE_GAMBIT = 63;
    const CURRENT_ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE = 64;
    const CURRENT_ACTIVITY_MODE_TYPE_BREAKTHROUGH = 65;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentActivityModeTypeAllowableValues()
    {
        return [
            self::CURRENT_ACTIVITY_MODE_TYPE_NONE,
            self::CURRENT_ACTIVITY_MODE_TYPE_STORY,
            self::CURRENT_ACTIVITY_MODE_TYPE_STRIKE,
            self::CURRENT_ACTIVITY_MODE_TYPE_RAID,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLPVP,
            self::CURRENT_ACTIVITY_MODE_TYPE_PATROL,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLPVE,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED9,
            self::CURRENT_ACTIVITY_MODE_TYPE_CONTROL,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED11,
            self::CURRENT_ACTIVITY_MODE_TYPE_CLASH,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED13,
            self::CURRENT_ACTIVITY_MODE_TYPE_CRIMSONDOUBLES,
            self::CURRENT_ACTIVITY_MODE_TYPE_NIGHTFALL,
            self::CURRENT_ACTIVITY_MODE_TYPE_HEROICNIGHTFALL,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLSTRIKES,
            self::CURRENT_ACTIVITY_MODE_TYPE_IRONBANNER,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED20,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED21,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED22,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED24,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLMAYHEM,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED26,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED27,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED28,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED29,
            self::CURRENT_ACTIVITY_MODE_TYPE_RESERVED30,
            self::CURRENT_ACTIVITY_MODE_TYPE_SUPREMACY,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL,
            self::CURRENT_ACTIVITY_MODE_TYPE_SURVIVAL,
            self::CURRENT_ACTIVITY_MODE_TYPE_COUNTDOWN,
            self::CURRENT_ACTIVITY_MODE_TYPE_TRIALSOFTHENINE,
            self::CURRENT_ACTIVITY_MODE_TYPE_SOCIAL,
            self::CURRENT_ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN,
            self::CURRENT_ACTIVITY_MODE_TYPE_TRIALSSURVIVAL,
            self::CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERCONTROL,
            self::CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERCLASH,
            self::CURRENT_ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY,
            self::CURRENT_ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL,
            self::CURRENT_ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL,
            self::CURRENT_ACTIVITY_MODE_TYPE_RUMBLE,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLDOUBLES,
            self::CURRENT_ACTIVITY_MODE_TYPE_DOUBLES,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM,
            self::CURRENT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE,
            self::CURRENT_ACTIVITY_MODE_TYPE_HEROICADVENTURE,
            self::CURRENT_ACTIVITY_MODE_TYPE_SHOWDOWN,
            self::CURRENT_ACTIVITY_MODE_TYPE_LOCKDOWN,
            self::CURRENT_ACTIVITY_MODE_TYPE_SCORCHED,
            self::CURRENT_ACTIVITY_MODE_TYPE_SCORCHEDTEAM,
            self::CURRENT_ACTIVITY_MODE_TYPE_GAMBIT,
            self::CURRENT_ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE,
            self::CURRENT_ACTIVITY_MODE_TYPE_BREAKTHROUGH,
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
        $this->container['dateActivityStarted'] = isset($data['dateActivityStarted']) ? $data['dateActivityStarted'] : null;
        $this->container['availableActivities'] = isset($data['availableActivities']) ? $data['availableActivities'] : null;
        $this->container['currentActivityHash'] = isset($data['currentActivityHash']) ? $data['currentActivityHash'] : null;
        $this->container['currentActivityModeHash'] = isset($data['currentActivityModeHash']) ? $data['currentActivityModeHash'] : null;
        $this->container['currentActivityModeType'] = isset($data['currentActivityModeType']) ? $data['currentActivityModeType'] : null;
        $this->container['currentActivityModeHashes'] = isset($data['currentActivityModeHashes']) ? $data['currentActivityModeHashes'] : null;
        $this->container['currentActivityModeTypes'] = isset($data['currentActivityModeTypes']) ? $data['currentActivityModeTypes'] : null;
        $this->container['currentPlaylistActivityHash'] = isset($data['currentPlaylistActivityHash']) ? $data['currentPlaylistActivityHash'] : null;
        $this->container['lastCompletedStoryHash'] = isset($data['lastCompletedStoryHash']) ? $data['lastCompletedStoryHash'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrentActivityModeTypeAllowableValues();
        if (!is_null($this->container['currentActivityModeType']) && !in_array($this->container['currentActivityModeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currentActivityModeType', must be one of '%s'",
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
     * Gets dateActivityStarted
     *
     * @return \DateTime|null
     */
    public function getDateActivityStarted()
    {
        return $this->container['dateActivityStarted'];
    }

    /**
     * Sets dateActivityStarted
     *
     * @param \DateTime|null $dateActivityStarted The last date that the user started playing an activity.
     *
     * @return $this
     */
    public function setDateActivityStarted($dateActivityStarted)
    {
        $this->container['dateActivityStarted'] = $dateActivityStarted;

        return $this;
    }

    /**
     * Gets availableActivities
     *
     * @return \Bungie\Model\DestinyDestinyActivity[]|null
     */
    public function getAvailableActivities()
    {
        return $this->container['availableActivities'];
    }

    /**
     * Sets availableActivities
     *
     * @param \Bungie\Model\DestinyDestinyActivity[]|null $availableActivities The list of activities that the user can play.
     *
     * @return $this
     */
    public function setAvailableActivities($availableActivities)
    {
        $this->container['availableActivities'] = $availableActivities;

        return $this;
    }

    /**
     * Gets currentActivityHash
     *
     * @return int|null
     */
    public function getCurrentActivityHash()
    {
        return $this->container['currentActivityHash'];
    }

    /**
     * Sets currentActivityHash
     *
     * @param int|null $currentActivityHash If the user is in an activity, this will be the hash of the Activity being played. Note that you must combine this info with currentActivityModeHash to get a real picture of what the user is doing right now. For instance, PVP \"Activities\" are just maps: it's the ActivityMode that determines what type of PVP game they're playing.
     *
     * @return $this
     */
    public function setCurrentActivityHash($currentActivityHash)
    {
        $this->container['currentActivityHash'] = $currentActivityHash;

        return $this;
    }

    /**
     * Gets currentActivityModeHash
     *
     * @return int|null
     */
    public function getCurrentActivityModeHash()
    {
        return $this->container['currentActivityModeHash'];
    }

    /**
     * Sets currentActivityModeHash
     *
     * @param int|null $currentActivityModeHash If the user is in an activity, this will be the hash of the activity mode being played. Combine with currentActivityHash to give a person a full picture of what they're doing right now.
     *
     * @return $this
     */
    public function setCurrentActivityModeHash($currentActivityModeHash)
    {
        $this->container['currentActivityModeHash'] = $currentActivityModeHash;

        return $this;
    }

    /**
     * Gets currentActivityModeType
     *
     * @return int|null
     */
    public function getCurrentActivityModeType()
    {
        return $this->container['currentActivityModeType'];
    }

    /**
     * Sets currentActivityModeType
     *
     * @param int|null $currentActivityModeType And the current activity's most specific mode type, if it can be found.
     *
     * @return $this
     */
    public function setCurrentActivityModeType($currentActivityModeType)
    {
        $allowedValues = $this->getCurrentActivityModeTypeAllowableValues();
        if (!is_null($currentActivityModeType) && !in_array($currentActivityModeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currentActivityModeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currentActivityModeType'] = $currentActivityModeType;

        return $this;
    }

    /**
     * Gets currentActivityModeHashes
     *
     * @return int[]|null
     */
    public function getCurrentActivityModeHashes()
    {
        return $this->container['currentActivityModeHashes'];
    }

    /**
     * Sets currentActivityModeHashes
     *
     * @param int[]|null $currentActivityModeHashes If the user is in an activity, this will be the hashes of the DestinyActivityModeDefinition being played. Combine with currentActivityHash to give a person a full picture of what they're doing right now.
     *
     * @return $this
     */
    public function setCurrentActivityModeHashes($currentActivityModeHashes)
    {
        $this->container['currentActivityModeHashes'] = $currentActivityModeHashes;

        return $this;
    }

    /**
     * Gets currentActivityModeTypes
     *
     * @return \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]|null
     */
    public function getCurrentActivityModeTypes()
    {
        return $this->container['currentActivityModeTypes'];
    }

    /**
     * Sets currentActivityModeTypes
     *
     * @param \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]|null $currentActivityModeTypes All Activity Modes that apply to the current activity being played, in enum form.
     *
     * @return $this
     */
    public function setCurrentActivityModeTypes($currentActivityModeTypes)
    {
        $this->container['currentActivityModeTypes'] = $currentActivityModeTypes;

        return $this;
    }

    /**
     * Gets currentPlaylistActivityHash
     *
     * @return int|null
     */
    public function getCurrentPlaylistActivityHash()
    {
        return $this->container['currentPlaylistActivityHash'];
    }

    /**
     * Sets currentPlaylistActivityHash
     *
     * @param int|null $currentPlaylistActivityHash If the user is in a playlist, this is the hash identifier for the playlist that they chose.
     *
     * @return $this
     */
    public function setCurrentPlaylistActivityHash($currentPlaylistActivityHash)
    {
        $this->container['currentPlaylistActivityHash'] = $currentPlaylistActivityHash;

        return $this;
    }

    /**
     * Gets lastCompletedStoryHash
     *
     * @return int|null
     */
    public function getLastCompletedStoryHash()
    {
        return $this->container['lastCompletedStoryHash'];
    }

    /**
     * Sets lastCompletedStoryHash
     *
     * @param int|null $lastCompletedStoryHash This will have the activity hash of the last completed story/campaign mission, in case you care about that.
     *
     * @return $this
     */
    public function setLastCompletedStoryHash($lastCompletedStoryHash)
    {
        $this->container['lastCompletedStoryHash'] = $lastCompletedStoryHash;

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


