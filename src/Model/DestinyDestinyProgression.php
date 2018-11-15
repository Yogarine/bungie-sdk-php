<?php
/**
 * DestinyDestinyProgression
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
 * DestinyDestinyProgression Class Doc Comment
 *
 * @category Class
 * @description Information about a current character&#39;s status with a Progression. A progression is a value that can increase with activity and has levels. Think Character Level and Reputation Levels. Combine this \&quot;live\&quot; data with the related DestinyProgressionDefinition for a full picture of the Progression.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDestinyProgression implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.DestinyProgression';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
        'nextLevelAt' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
        'nextLevelAt' => 'int32'
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
        'nextLevelAt' => 'nextLevelAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
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
        'nextLevelAt' => 'setNextLevelAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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
        'nextLevelAt' => 'getNextLevelAt'
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

        return true;
    }


    /**
     * Gets progressionHash
     *
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->container['progressionHash'];
    }

    /**
     * Sets progressionHash
     *
     * @param int $progressionHash The hash identifier of the Progression in question. Use it to look up the DestinyProgressionDefinition in static data.
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
     * @return int
     */
    public function getDailyProgress()
    {
        return $this->container['dailyProgress'];
    }

    /**
     * Sets dailyProgress
     *
     * @param int $dailyProgress The amount of progress earned today for this progression.
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
     * @return int
     */
    public function getDailyLimit()
    {
        return $this->container['dailyLimit'];
    }

    /**
     * Sets dailyLimit
     *
     * @param int $dailyLimit If this progression has a daily limit, this is that limit.
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
     * @return int
     */
    public function getWeeklyProgress()
    {
        return $this->container['weeklyProgress'];
    }

    /**
     * Sets weeklyProgress
     *
     * @param int $weeklyProgress The amount of progress earned toward this progression in the current week.
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
     * @return int
     */
    public function getWeeklyLimit()
    {
        return $this->container['weeklyLimit'];
    }

    /**
     * Sets weeklyLimit
     *
     * @param int $weeklyLimit If this progression has a weekly limit, this is that limit.
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
     * @return int
     */
    public function getCurrentProgress()
    {
        return $this->container['currentProgress'];
    }

    /**
     * Sets currentProgress
     *
     * @param int $currentProgress This is the total amount of progress obtained overall for this progression (for instance, the total amount of Character Level experience earned)
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
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level This is the level of the progression (for instance, the Character Level).
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
     * @return int
     */
    public function getLevelCap()
    {
        return $this->container['levelCap'];
    }

    /**
     * Sets levelCap
     *
     * @param int $levelCap This is the maximum possible level you can achieve for this progression (for example, the maximum character level obtainable)
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
     * @return int
     */
    public function getStepIndex()
    {
        return $this->container['stepIndex'];
    }

    /**
     * Sets stepIndex
     *
     * @param int $stepIndex Progressions define their levels in \"steps\". Since the last step may be repeatable, the user may be at a higher level than the actual Step achieved in the progression. Not necessarily useful, but potentially interesting for those cruising the API. Relate this to the \"steps\" property of the DestinyProgression to see which step the user is on, if you care about that. (Note that this is Content Version dependent since it refers to indexes.)
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
     * @return int
     */
    public function getProgressToNextLevel()
    {
        return $this->container['progressToNextLevel'];
    }

    /**
     * Sets progressToNextLevel
     *
     * @param int $progressToNextLevel The amount of progression (i.e. \"Experience\") needed to reach the next level of this Progression. Jeez, progression is such an overloaded word.
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
     * @return int
     */
    public function getNextLevelAt()
    {
        return $this->container['nextLevelAt'];
    }

    /**
     * Sets nextLevelAt
     *
     * @param int $nextLevelAt The total amount of progression (i.e. \"Experience\") needed in order to reach the next level.
     *
     * @return $this
     */
    public function setNextLevelAt($nextLevelAt)
    {
        $this->container['nextLevelAt'] = $nextLevelAt;

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


