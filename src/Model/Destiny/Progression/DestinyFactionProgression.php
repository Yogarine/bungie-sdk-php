<?php
/**
 * DestinyFactionProgression
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

namespace Bungie\Model\Destiny\Progression;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyFactionProgression Class Doc Comment
 *
 * @category Class
 * @description Mostly for historical purposes, we segregate Faction progressions from other progressions. This is just a DestinyProgression with a shortcut for finding the DestinyFactionDefinition of the faction related to the progression.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyFactionProgression implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Progression.DestinyFactionProgression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'factionHash' => 'int',
        'factionVendorIndex' => 'int',
        'progressionHash' => 'int',
        'dailyProgress' => 'int',
        'dailyLimit' => 'int',
        'weeklyProgress' => 'int',
        'weeklyLimit' => 'int',
        'currentProgress' => 'int',
        'level' => 'int',
        'levelCap' => 'int',
        'stepIndex' => 'int',
        'progressToNextLevel' => 'int',
        'nextLevelAt' => 'int',
        'currentResetCount' => 'int',
        'seasonResets' => '\Bungie\Model\Destiny\DestinyProgressionResetEntry[]',
        'rewardItemStates' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'factionHash' => 'uint32',
        'factionVendorIndex' => 'int32',
        'progressionHash' => 'uint32',
        'dailyProgress' => 'int32',
        'dailyLimit' => 'int32',
        'weeklyProgress' => 'int32',
        'weeklyLimit' => 'int32',
        'currentProgress' => 'int32',
        'level' => 'int32',
        'levelCap' => 'int32',
        'stepIndex' => 'int32',
        'progressToNextLevel' => 'int32',
        'nextLevelAt' => 'int32',
        'currentResetCount' => 'int32',
        'seasonResets' => null,
        'rewardItemStates' => 'int32'
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
        'factionHash' => 'factionHash',
        'factionVendorIndex' => 'factionVendorIndex',
        'progressionHash' => 'progressionHash',
        'dailyProgress' => 'dailyProgress',
        'dailyLimit' => 'dailyLimit',
        'weeklyProgress' => 'weeklyProgress',
        'weeklyLimit' => 'weeklyLimit',
        'currentProgress' => 'currentProgress',
        'level' => 'level',
        'levelCap' => 'levelCap',
        'stepIndex' => 'stepIndex',
        'progressToNextLevel' => 'progressToNextLevel',
        'nextLevelAt' => 'nextLevelAt',
        'currentResetCount' => 'currentResetCount',
        'seasonResets' => 'seasonResets',
        'rewardItemStates' => 'rewardItemStates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'factionHash' => 'setFactionHash',
        'factionVendorIndex' => 'setFactionVendorIndex',
        'progressionHash' => 'setProgressionHash',
        'dailyProgress' => 'setDailyProgress',
        'dailyLimit' => 'setDailyLimit',
        'weeklyProgress' => 'setWeeklyProgress',
        'weeklyLimit' => 'setWeeklyLimit',
        'currentProgress' => 'setCurrentProgress',
        'level' => 'setLevel',
        'levelCap' => 'setLevelCap',
        'stepIndex' => 'setStepIndex',
        'progressToNextLevel' => 'setProgressToNextLevel',
        'nextLevelAt' => 'setNextLevelAt',
        'currentResetCount' => 'setCurrentResetCount',
        'seasonResets' => 'setSeasonResets',
        'rewardItemStates' => 'setRewardItemStates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'factionHash' => 'getFactionHash',
        'factionVendorIndex' => 'getFactionVendorIndex',
        'progressionHash' => 'getProgressionHash',
        'dailyProgress' => 'getDailyProgress',
        'dailyLimit' => 'getDailyLimit',
        'weeklyProgress' => 'getWeeklyProgress',
        'weeklyLimit' => 'getWeeklyLimit',
        'currentProgress' => 'getCurrentProgress',
        'level' => 'getLevel',
        'levelCap' => 'getLevelCap',
        'stepIndex' => 'getStepIndex',
        'progressToNextLevel' => 'getProgressToNextLevel',
        'nextLevelAt' => 'getNextLevelAt',
        'currentResetCount' => 'getCurrentResetCount',
        'seasonResets' => 'getSeasonResets',
        'rewardItemStates' => 'getRewardItemStates'
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
        $this->container['factionHash'] = isset($data['factionHash']) ? $data['factionHash'] : null;
        $this->container['factionVendorIndex'] = isset($data['factionVendorIndex']) ? $data['factionVendorIndex'] : null;
        $this->container['progressionHash'] = isset($data['progressionHash']) ? $data['progressionHash'] : null;
        $this->container['dailyProgress'] = isset($data['dailyProgress']) ? $data['dailyProgress'] : null;
        $this->container['dailyLimit'] = isset($data['dailyLimit']) ? $data['dailyLimit'] : null;
        $this->container['weeklyProgress'] = isset($data['weeklyProgress']) ? $data['weeklyProgress'] : null;
        $this->container['weeklyLimit'] = isset($data['weeklyLimit']) ? $data['weeklyLimit'] : null;
        $this->container['currentProgress'] = isset($data['currentProgress']) ? $data['currentProgress'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['levelCap'] = isset($data['levelCap']) ? $data['levelCap'] : null;
        $this->container['stepIndex'] = isset($data['stepIndex']) ? $data['stepIndex'] : null;
        $this->container['progressToNextLevel'] = isset($data['progressToNextLevel']) ? $data['progressToNextLevel'] : null;
        $this->container['nextLevelAt'] = isset($data['nextLevelAt']) ? $data['nextLevelAt'] : null;
        $this->container['currentResetCount'] = isset($data['currentResetCount']) ? $data['currentResetCount'] : null;
        $this->container['seasonResets'] = isset($data['seasonResets']) ? $data['seasonResets'] : null;
        $this->container['rewardItemStates'] = isset($data['rewardItemStates']) ? $data['rewardItemStates'] : null;
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
     * Gets factionHash
     *
     * @return int|null
     */
    public function getFactionHash()
    {
        return $this->container['factionHash'];
    }

    /**
     * Sets factionHash
     *
     * @param int|null $factionHash The hash identifier of the Faction related to this progression. Use it to look up the DestinyFactionDefinition for more rendering info.
     *
     * @return $this
     */
    public function setFactionHash($factionHash)
    {
        $this->container['factionHash'] = $factionHash;

        return $this;
    }

    /**
     * Gets factionVendorIndex
     *
     * @return int|null
     */
    public function getFactionVendorIndex()
    {
        return $this->container['factionVendorIndex'];
    }

    /**
     * Sets factionVendorIndex
     *
     * @param int|null $factionVendorIndex The index of the Faction vendor that is currently available. Will be set to -1 if no vendors are available.
     *
     * @return $this
     */
    public function setFactionVendorIndex($factionVendorIndex)
    {
        $this->container['factionVendorIndex'] = $factionVendorIndex;

        return $this;
    }

    /**
     * Gets progressionHash
     *
     * @return int|null
     */
    public function getProgressionHash()
    {
        return $this->container['progressionHash'];
    }

    /**
     * Sets progressionHash
     *
     * @param int|null $progressionHash The hash identifier of the Progression in question. Use it to look up the DestinyProgressionDefinition in static data.
     *
     * @return $this
     */
    public function setProgressionHash($progressionHash)
    {
        $this->container['progressionHash'] = $progressionHash;

        return $this;
    }

    /**
     * Gets dailyProgress
     *
     * @return int|null
     */
    public function getDailyProgress()
    {
        return $this->container['dailyProgress'];
    }

    /**
     * Sets dailyProgress
     *
     * @param int|null $dailyProgress The amount of progress earned today for this progression.
     *
     * @return $this
     */
    public function setDailyProgress($dailyProgress)
    {
        $this->container['dailyProgress'] = $dailyProgress;

        return $this;
    }

    /**
     * Gets dailyLimit
     *
     * @return int|null
     */
    public function getDailyLimit()
    {
        return $this->container['dailyLimit'];
    }

    /**
     * Sets dailyLimit
     *
     * @param int|null $dailyLimit If this progression has a daily limit, this is that limit.
     *
     * @return $this
     */
    public function setDailyLimit($dailyLimit)
    {
        $this->container['dailyLimit'] = $dailyLimit;

        return $this;
    }

    /**
     * Gets weeklyProgress
     *
     * @return int|null
     */
    public function getWeeklyProgress()
    {
        return $this->container['weeklyProgress'];
    }

    /**
     * Sets weeklyProgress
     *
     * @param int|null $weeklyProgress The amount of progress earned toward this progression in the current week.
     *
     * @return $this
     */
    public function setWeeklyProgress($weeklyProgress)
    {
        $this->container['weeklyProgress'] = $weeklyProgress;

        return $this;
    }

    /**
     * Gets weeklyLimit
     *
     * @return int|null
     */
    public function getWeeklyLimit()
    {
        return $this->container['weeklyLimit'];
    }

    /**
     * Sets weeklyLimit
     *
     * @param int|null $weeklyLimit If this progression has a weekly limit, this is that limit.
     *
     * @return $this
     */
    public function setWeeklyLimit($weeklyLimit)
    {
        $this->container['weeklyLimit'] = $weeklyLimit;

        return $this;
    }

    /**
     * Gets currentProgress
     *
     * @return int|null
     */
    public function getCurrentProgress()
    {
        return $this->container['currentProgress'];
    }

    /**
     * Sets currentProgress
     *
     * @param int|null $currentProgress This is the total amount of progress obtained overall for this progression (for instance, the total amount of Character Level experience earned)
     *
     * @return $this
     */
    public function setCurrentProgress($currentProgress)
    {
        $this->container['currentProgress'] = $currentProgress;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level This is the level of the progression (for instance, the Character Level).
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets levelCap
     *
     * @return int|null
     */
    public function getLevelCap()
    {
        return $this->container['levelCap'];
    }

    /**
     * Sets levelCap
     *
     * @param int|null $levelCap This is the maximum possible level you can achieve for this progression (for example, the maximum character level obtainable)
     *
     * @return $this
     */
    public function setLevelCap($levelCap)
    {
        $this->container['levelCap'] = $levelCap;

        return $this;
    }

    /**
     * Gets stepIndex
     *
     * @return int|null
     */
    public function getStepIndex()
    {
        return $this->container['stepIndex'];
    }

    /**
     * Sets stepIndex
     *
     * @param int|null $stepIndex Progressions define their levels in \"steps\". Since the last step may be repeatable, the user may be at a higher level than the actual Step achieved in the progression. Not necessarily useful, but potentially interesting for those cruising the API. Relate this to the \"steps\" property of the DestinyProgression to see which step the user is on, if you care about that. (Note that this is Content Version dependent since it refers to indexes.)
     *
     * @return $this
     */
    public function setStepIndex($stepIndex)
    {
        $this->container['stepIndex'] = $stepIndex;

        return $this;
    }

    /**
     * Gets progressToNextLevel
     *
     * @return int|null
     */
    public function getProgressToNextLevel()
    {
        return $this->container['progressToNextLevel'];
    }

    /**
     * Sets progressToNextLevel
     *
     * @param int|null $progressToNextLevel The amount of progression (i.e. \"Experience\") needed to reach the next level of this Progression. Jeez, progression is such an overloaded word.
     *
     * @return $this
     */
    public function setProgressToNextLevel($progressToNextLevel)
    {
        $this->container['progressToNextLevel'] = $progressToNextLevel;

        return $this;
    }

    /**
     * Gets nextLevelAt
     *
     * @return int|null
     */
    public function getNextLevelAt()
    {
        return $this->container['nextLevelAt'];
    }

    /**
     * Sets nextLevelAt
     *
     * @param int|null $nextLevelAt The total amount of progression (i.e. \"Experience\") needed in order to reach the next level.
     *
     * @return $this
     */
    public function setNextLevelAt($nextLevelAt)
    {
        $this->container['nextLevelAt'] = $nextLevelAt;

        return $this;
    }

    /**
     * Gets currentResetCount
     *
     * @return int|null
     */
    public function getCurrentResetCount()
    {
        return $this->container['currentResetCount'];
    }

    /**
     * Sets currentResetCount
     *
     * @param int|null $currentResetCount The number of resets of this progression you've executed this season, if applicable to this progression.
     *
     * @return $this
     */
    public function setCurrentResetCount($currentResetCount)
    {
        $this->container['currentResetCount'] = $currentResetCount;

        return $this;
    }

    /**
     * Gets seasonResets
     *
     * @return \Bungie\Model\Destiny\DestinyProgressionResetEntry[]|null
     */
    public function getSeasonResets()
    {
        return $this->container['seasonResets'];
    }

    /**
     * Sets seasonResets
     *
     * @param \Bungie\Model\Destiny\DestinyProgressionResetEntry[]|null $seasonResets Information about historical resets of this progression, if there is any data for it.
     *
     * @return $this
     */
    public function setSeasonResets($seasonResets)
    {
        $this->container['seasonResets'] = $seasonResets;

        return $this;
    }

    /**
     * Gets rewardItemStates
     *
     * @return int[]|null
     */
    public function getRewardItemStates()
    {
        return $this->container['rewardItemStates'];
    }

    /**
     * Sets rewardItemStates
     *
     * @param int[]|null $rewardItemStates Information about historical rewards for this progression, if there is any data for it.
     *
     * @return $this
     */
    public function setRewardItemStates($rewardItemStates)
    {
        $this->container['rewardItemStates'] = $rewardItemStates;

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


