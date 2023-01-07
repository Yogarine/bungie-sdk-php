<?php
/**
 * DestinyCharacterComponent
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

namespace Bungie\Model\Destiny\Entities\Characters;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyCharacterComponent Class Doc Comment
 *
 * @category Class
 * @description This component contains base properties of the character. You&#39;ll probably want to always request this component, but hey you do you.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Characters.DestinyCharacterComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membershipId' => 'int',
        'membershipType' => 'int',
        'characterId' => 'int',
        'dateLastPlayed' => '\DateTime',
        'minutesPlayedThisSession' => 'int',
        'minutesPlayedTotal' => 'int',
        'light' => 'int',
        'stats' => 'map[string,int]',
        'raceHash' => 'int',
        'genderHash' => 'int',
        'classHash' => 'int',
        'raceType' => 'int',
        'classType' => 'int',
        'genderType' => 'int',
        'emblemPath' => 'string',
        'emblemBackgroundPath' => 'string',
        'emblemHash' => 'int',
        'emblemColor' => '\Bungie\Model\Destiny\Misc\DestinyColor',
        'levelProgression' => '\Bungie\Model\Destiny\DestinyProgression',
        'baseCharacterLevel' => 'int',
        'percentToNextLevel' => 'float',
        'titleRecordHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'membershipId' => 'int64',
        'membershipType' => 'int32',
        'characterId' => 'int64',
        'dateLastPlayed' => 'date-time',
        'minutesPlayedThisSession' => 'int64',
        'minutesPlayedTotal' => 'int64',
        'light' => 'int32',
        'stats' => 'int32',
        'raceHash' => 'uint32',
        'genderHash' => 'uint32',
        'classHash' => 'uint32',
        'raceType' => 'int32',
        'classType' => 'int32',
        'genderType' => 'int32',
        'emblemPath' => null,
        'emblemBackgroundPath' => null,
        'emblemHash' => 'uint32',
        'emblemColor' => null,
        'levelProgression' => null,
        'baseCharacterLevel' => 'int32',
        'percentToNextLevel' => 'float',
        'titleRecordHash' => 'uint32'
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
        'membershipId' => 'membershipId',
        'membershipType' => 'membershipType',
        'characterId' => 'characterId',
        'dateLastPlayed' => 'dateLastPlayed',
        'minutesPlayedThisSession' => 'minutesPlayedThisSession',
        'minutesPlayedTotal' => 'minutesPlayedTotal',
        'light' => 'light',
        'stats' => 'stats',
        'raceHash' => 'raceHash',
        'genderHash' => 'genderHash',
        'classHash' => 'classHash',
        'raceType' => 'raceType',
        'classType' => 'classType',
        'genderType' => 'genderType',
        'emblemPath' => 'emblemPath',
        'emblemBackgroundPath' => 'emblemBackgroundPath',
        'emblemHash' => 'emblemHash',
        'emblemColor' => 'emblemColor',
        'levelProgression' => 'levelProgression',
        'baseCharacterLevel' => 'baseCharacterLevel',
        'percentToNextLevel' => 'percentToNextLevel',
        'titleRecordHash' => 'titleRecordHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membershipId' => 'setMembershipId',
        'membershipType' => 'setMembershipType',
        'characterId' => 'setCharacterId',
        'dateLastPlayed' => 'setDateLastPlayed',
        'minutesPlayedThisSession' => 'setMinutesPlayedThisSession',
        'minutesPlayedTotal' => 'setMinutesPlayedTotal',
        'light' => 'setLight',
        'stats' => 'setStats',
        'raceHash' => 'setRaceHash',
        'genderHash' => 'setGenderHash',
        'classHash' => 'setClassHash',
        'raceType' => 'setRaceType',
        'classType' => 'setClassType',
        'genderType' => 'setGenderType',
        'emblemPath' => 'setEmblemPath',
        'emblemBackgroundPath' => 'setEmblemBackgroundPath',
        'emblemHash' => 'setEmblemHash',
        'emblemColor' => 'setEmblemColor',
        'levelProgression' => 'setLevelProgression',
        'baseCharacterLevel' => 'setBaseCharacterLevel',
        'percentToNextLevel' => 'setPercentToNextLevel',
        'titleRecordHash' => 'setTitleRecordHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membershipId' => 'getMembershipId',
        'membershipType' => 'getMembershipType',
        'characterId' => 'getCharacterId',
        'dateLastPlayed' => 'getDateLastPlayed',
        'minutesPlayedThisSession' => 'getMinutesPlayedThisSession',
        'minutesPlayedTotal' => 'getMinutesPlayedTotal',
        'light' => 'getLight',
        'stats' => 'getStats',
        'raceHash' => 'getRaceHash',
        'genderHash' => 'getGenderHash',
        'classHash' => 'getClassHash',
        'raceType' => 'getRaceType',
        'classType' => 'getClassType',
        'genderType' => 'getGenderType',
        'emblemPath' => 'getEmblemPath',
        'emblemBackgroundPath' => 'getEmblemBackgroundPath',
        'emblemHash' => 'getEmblemHash',
        'emblemColor' => 'getEmblemColor',
        'levelProgression' => 'getLevelProgression',
        'baseCharacterLevel' => 'getBaseCharacterLevel',
        'percentToNextLevel' => 'getPercentToNextLevel',
        'titleRecordHash' => 'getTitleRecordHash'
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
        $this->container['membershipId'] = isset($data['membershipId']) ? $data['membershipId'] : null;
        $this->container['membershipType'] = isset($data['membershipType']) ? $data['membershipType'] : null;
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['dateLastPlayed'] = isset($data['dateLastPlayed']) ? $data['dateLastPlayed'] : null;
        $this->container['minutesPlayedThisSession'] = isset($data['minutesPlayedThisSession']) ? $data['minutesPlayedThisSession'] : null;
        $this->container['minutesPlayedTotal'] = isset($data['minutesPlayedTotal']) ? $data['minutesPlayedTotal'] : null;
        $this->container['light'] = isset($data['light']) ? $data['light'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['raceHash'] = isset($data['raceHash']) ? $data['raceHash'] : null;
        $this->container['genderHash'] = isset($data['genderHash']) ? $data['genderHash'] : null;
        $this->container['classHash'] = isset($data['classHash']) ? $data['classHash'] : null;
        $this->container['raceType'] = isset($data['raceType']) ? $data['raceType'] : null;
        $this->container['classType'] = isset($data['classType']) ? $data['classType'] : null;
        $this->container['genderType'] = isset($data['genderType']) ? $data['genderType'] : null;
        $this->container['emblemPath'] = isset($data['emblemPath']) ? $data['emblemPath'] : null;
        $this->container['emblemBackgroundPath'] = isset($data['emblemBackgroundPath']) ? $data['emblemBackgroundPath'] : null;
        $this->container['emblemHash'] = isset($data['emblemHash']) ? $data['emblemHash'] : null;
        $this->container['emblemColor'] = isset($data['emblemColor']) ? $data['emblemColor'] : null;
        $this->container['levelProgression'] = isset($data['levelProgression']) ? $data['levelProgression'] : null;
        $this->container['baseCharacterLevel'] = isset($data['baseCharacterLevel']) ? $data['baseCharacterLevel'] : null;
        $this->container['percentToNextLevel'] = isset($data['percentToNextLevel']) ? $data['percentToNextLevel'] : null;
        $this->container['titleRecordHash'] = isset($data['titleRecordHash']) ? $data['titleRecordHash'] : null;
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
     * Gets membershipId
     *
     * @return int|null
     */
    public function getMembershipId()
    {
        return $this->container['membershipId'];
    }

    /**
     * Sets membershipId
     *
     * @param int|null $membershipId Every Destiny Profile has a membershipId. This is provided on the character as well for convenience.
     *
     * @return $this
     */
    public function setMembershipId($membershipId)
    {
        $this->container['membershipId'] = $membershipId;

        return $this;
    }

    /**
     * Gets membershipType
     *
     * @return int|null
     */
    public function getMembershipType()
    {
        return $this->container['membershipType'];
    }

    /**
     * Sets membershipType
     *
     * @param int|null $membershipType membershipType tells you the platform on which the character plays. Examine the BungieMembershipType enumeration for possible values.
     *
     * @return $this
     */
    public function setMembershipType($membershipType)
    {
        $this->container['membershipType'] = $membershipType;

        return $this;
    }

    /**
     * Gets characterId
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     *
     * @param int|null $characterId The unique identifier for the character.
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets dateLastPlayed
     *
     * @return \DateTime|null
     */
    public function getDateLastPlayed()
    {
        return $this->container['dateLastPlayed'];
    }

    /**
     * Sets dateLastPlayed
     *
     * @param \DateTime|null $dateLastPlayed The last date that the user played Destiny.
     *
     * @return $this
     */
    public function setDateLastPlayed($dateLastPlayed)
    {
        $this->container['dateLastPlayed'] = $dateLastPlayed;

        return $this;
    }

    /**
     * Gets minutesPlayedThisSession
     *
     * @return int|null
     */
    public function getMinutesPlayedThisSession()
    {
        return $this->container['minutesPlayedThisSession'];
    }

    /**
     * Sets minutesPlayedThisSession
     *
     * @param int|null $minutesPlayedThisSession If the user is currently playing, this is how long they've been playing.
     *
     * @return $this
     */
    public function setMinutesPlayedThisSession($minutesPlayedThisSession)
    {
        $this->container['minutesPlayedThisSession'] = $minutesPlayedThisSession;

        return $this;
    }

    /**
     * Gets minutesPlayedTotal
     *
     * @return int|null
     */
    public function getMinutesPlayedTotal()
    {
        return $this->container['minutesPlayedTotal'];
    }

    /**
     * Sets minutesPlayedTotal
     *
     * @param int|null $minutesPlayedTotal If this value is 525,600, then they played Destiny for a year. Or they're a very dedicated Rent fan. Note that this includes idle time, not just time spent actually in activities shooting things.
     *
     * @return $this
     */
    public function setMinutesPlayedTotal($minutesPlayedTotal)
    {
        $this->container['minutesPlayedTotal'] = $minutesPlayedTotal;

        return $this;
    }

    /**
     * Gets light
     *
     * @return int|null
     */
    public function getLight()
    {
        return $this->container['light'];
    }

    /**
     * Sets light
     *
     * @param int|null $light The user's calculated \"Light Level\". Light level is an indicator of your power that mostly matters in the end game, once you've reached the maximum character level: it's a level that's dependent on the average Attack/Defense power of your items.
     *
     * @return $this
     */
    public function setLight($light)
    {
        $this->container['light'] = $light;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return map[string,int]|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param map[string,int]|null $stats Your character's stats, such as Agility, Resilience, etc... *not* historical stats.  You'll have to call a different endpoint for those.
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets raceHash
     *
     * @return int|null
     */
    public function getRaceHash()
    {
        return $this->container['raceHash'];
    }

    /**
     * Sets raceHash
     *
     * @param int|null $raceHash Use this hash to look up the character's DestinyRaceDefinition.
     *
     * @return $this
     */
    public function setRaceHash($raceHash)
    {
        $this->container['raceHash'] = $raceHash;

        return $this;
    }

    /**
     * Gets genderHash
     *
     * @return int|null
     */
    public function getGenderHash()
    {
        return $this->container['genderHash'];
    }

    /**
     * Sets genderHash
     *
     * @param int|null $genderHash Use this hash to look up the character's DestinyGenderDefinition.
     *
     * @return $this
     */
    public function setGenderHash($genderHash)
    {
        $this->container['genderHash'] = $genderHash;

        return $this;
    }

    /**
     * Gets classHash
     *
     * @return int|null
     */
    public function getClassHash()
    {
        return $this->container['classHash'];
    }

    /**
     * Sets classHash
     *
     * @param int|null $classHash Use this hash to look up the character's DestinyClassDefinition.
     *
     * @return $this
     */
    public function setClassHash($classHash)
    {
        $this->container['classHash'] = $classHash;

        return $this;
    }

    /**
     * Gets raceType
     *
     * @return int|null
     */
    public function getRaceType()
    {
        return $this->container['raceType'];
    }

    /**
     * Sets raceType
     *
     * @param int|null $raceType Mostly for historical purposes at this point, this is an enumeration for the character's race.  It'll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove.
     *
     * @return $this
     */
    public function setRaceType($raceType)
    {
        $this->container['raceType'] = $raceType;

        return $this;
    }

    /**
     * Gets classType
     *
     * @return int|null
     */
    public function getClassType()
    {
        return $this->container['classType'];
    }

    /**
     * Sets classType
     *
     * @param int|null $classType Mostly for historical purposes at this point, this is an enumeration for the character's class.  It'll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove.
     *
     * @return $this
     */
    public function setClassType($classType)
    {
        $this->container['classType'] = $classType;

        return $this;
    }

    /**
     * Gets genderType
     *
     * @return int|null
     */
    public function getGenderType()
    {
        return $this->container['genderType'];
    }

    /**
     * Sets genderType
     *
     * @param int|null $genderType Mostly for historical purposes at this point, this is an enumeration for the character's Gender.  It'll be preferable in the general case to look up the related definition: but for some people this was too convenient to remove. And yeah, it's an enumeration and not a boolean. Fight me.
     *
     * @return $this
     */
    public function setGenderType($genderType)
    {
        $this->container['genderType'] = $genderType;

        return $this;
    }

    /**
     * Gets emblemPath
     *
     * @return string|null
     */
    public function getEmblemPath()
    {
        return $this->container['emblemPath'];
    }

    /**
     * Sets emblemPath
     *
     * @param string|null $emblemPath A shortcut path to the user's currently equipped emblem image. If you're just showing summary info for a user, this is more convenient than examining their equipped emblem and looking up the definition.
     *
     * @return $this
     */
    public function setEmblemPath($emblemPath)
    {
        $this->container['emblemPath'] = $emblemPath;

        return $this;
    }

    /**
     * Gets emblemBackgroundPath
     *
     * @return string|null
     */
    public function getEmblemBackgroundPath()
    {
        return $this->container['emblemBackgroundPath'];
    }

    /**
     * Sets emblemBackgroundPath
     *
     * @param string|null $emblemBackgroundPath A shortcut path to the user's currently equipped emblem background image. If you're just showing summary info for a user, this is more convenient than examining their equipped emblem and looking up the definition.
     *
     * @return $this
     */
    public function setEmblemBackgroundPath($emblemBackgroundPath)
    {
        $this->container['emblemBackgroundPath'] = $emblemBackgroundPath;

        return $this;
    }

    /**
     * Gets emblemHash
     *
     * @return int|null
     */
    public function getEmblemHash()
    {
        return $this->container['emblemHash'];
    }

    /**
     * Sets emblemHash
     *
     * @param int|null $emblemHash The hash of the currently equipped emblem for the user. Can be used to look up the DestinyInventoryItemDefinition.
     *
     * @return $this
     */
    public function setEmblemHash($emblemHash)
    {
        $this->container['emblemHash'] = $emblemHash;

        return $this;
    }

    /**
     * Gets emblemColor
     *
     * @return \Bungie\Model\Destiny\Misc\DestinyColor|null
     */
    public function getEmblemColor()
    {
        return $this->container['emblemColor'];
    }

    /**
     * Sets emblemColor
     *
     * @param \Bungie\Model\Destiny\Misc\DestinyColor|null $emblemColor A shortcut for getting the background color of the user's currently equipped emblem without having to do a DestinyInventoryItemDefinition lookup.
     *
     * @return $this
     */
    public function setEmblemColor($emblemColor)
    {
        $this->container['emblemColor'] = $emblemColor;

        return $this;
    }

    /**
     * Gets levelProgression
     *
     * @return \Bungie\Model\Destiny\DestinyProgression|null
     */
    public function getLevelProgression()
    {
        return $this->container['levelProgression'];
    }

    /**
     * Sets levelProgression
     *
     * @param \Bungie\Model\Destiny\DestinyProgression|null $levelProgression The progression that indicates your character's level. Not their light level, but their character level: you know, the thing you max out a couple hours in and then ignore for the sake of light level.
     *
     * @return $this
     */
    public function setLevelProgression($levelProgression)
    {
        $this->container['levelProgression'] = $levelProgression;

        return $this;
    }

    /**
     * Gets baseCharacterLevel
     *
     * @return int|null
     */
    public function getBaseCharacterLevel()
    {
        return $this->container['baseCharacterLevel'];
    }

    /**
     * Sets baseCharacterLevel
     *
     * @param int|null $baseCharacterLevel The \"base\" level of your character, not accounting for any light level.
     *
     * @return $this
     */
    public function setBaseCharacterLevel($baseCharacterLevel)
    {
        $this->container['baseCharacterLevel'] = $baseCharacterLevel;

        return $this;
    }

    /**
     * Gets percentToNextLevel
     *
     * @return float|null
     */
    public function getPercentToNextLevel()
    {
        return $this->container['percentToNextLevel'];
    }

    /**
     * Sets percentToNextLevel
     *
     * @param float|null $percentToNextLevel A number between 0 and 100, indicating the whole and fractional % remaining to get to the next character level.
     *
     * @return $this
     */
    public function setPercentToNextLevel($percentToNextLevel)
    {
        $this->container['percentToNextLevel'] = $percentToNextLevel;

        return $this;
    }

    /**
     * Gets titleRecordHash
     *
     * @return int|null
     */
    public function getTitleRecordHash()
    {
        return $this->container['titleRecordHash'];
    }

    /**
     * Sets titleRecordHash
     *
     * @param int|null $titleRecordHash If this Character has a title assigned to it, this is the identifier of the DestinyRecordDefinition that has that title information.
     *
     * @return $this
     */
    public function setTitleRecordHash($titleRecordHash)
    {
        $this->container['titleRecordHash'] = $titleRecordHash;

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


