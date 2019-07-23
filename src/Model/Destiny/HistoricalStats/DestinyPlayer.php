<?php
/**
 * DestinyPlayer
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
 * OpenAPI spec version: 2.3.6
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\HistoricalStats;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPlayer Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPlayer implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyPlayer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destinyUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'characterClass' => 'string',
        'classHash' => 'int',
        'raceHash' => 'int',
        'genderHash' => 'int',
        'characterLevel' => 'int',
        'lightLevel' => 'int',
        'bungieNetUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'clanName' => 'string',
        'clanTag' => 'string',
        'emblemHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'destinyUserInfo' => null,
        'characterClass' => null,
        'classHash' => 'uint32',
        'raceHash' => 'uint32',
        'genderHash' => 'uint32',
        'characterLevel' => 'int32',
        'lightLevel' => 'int32',
        'bungieNetUserInfo' => null,
        'clanName' => null,
        'clanTag' => null,
        'emblemHash' => 'uint32'
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
        'destinyUserInfo' => 'destinyUserInfo',
        'characterClass' => 'characterClass',
        'classHash' => 'classHash',
        'raceHash' => 'raceHash',
        'genderHash' => 'genderHash',
        'characterLevel' => 'characterLevel',
        'lightLevel' => 'lightLevel',
        'bungieNetUserInfo' => 'bungieNetUserInfo',
        'clanName' => 'clanName',
        'clanTag' => 'clanTag',
        'emblemHash' => 'emblemHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destinyUserInfo' => 'setDestinyUserInfo',
        'characterClass' => 'setCharacterClass',
        'classHash' => 'setClassHash',
        'raceHash' => 'setRaceHash',
        'genderHash' => 'setGenderHash',
        'characterLevel' => 'setCharacterLevel',
        'lightLevel' => 'setLightLevel',
        'bungieNetUserInfo' => 'setBungieNetUserInfo',
        'clanName' => 'setClanName',
        'clanTag' => 'setClanTag',
        'emblemHash' => 'setEmblemHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destinyUserInfo' => 'getDestinyUserInfo',
        'characterClass' => 'getCharacterClass',
        'classHash' => 'getClassHash',
        'raceHash' => 'getRaceHash',
        'genderHash' => 'getGenderHash',
        'characterLevel' => 'getCharacterLevel',
        'lightLevel' => 'getLightLevel',
        'bungieNetUserInfo' => 'getBungieNetUserInfo',
        'clanName' => 'getClanName',
        'clanTag' => 'getClanTag',
        'emblemHash' => 'getEmblemHash'
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
        $this->container['destinyUserInfo'] = isset($data['destinyUserInfo']) ? $data['destinyUserInfo'] : null;
        $this->container['characterClass'] = isset($data['characterClass']) ? $data['characterClass'] : null;
        $this->container['classHash'] = isset($data['classHash']) ? $data['classHash'] : null;
        $this->container['raceHash'] = isset($data['raceHash']) ? $data['raceHash'] : null;
        $this->container['genderHash'] = isset($data['genderHash']) ? $data['genderHash'] : null;
        $this->container['characterLevel'] = isset($data['characterLevel']) ? $data['characterLevel'] : null;
        $this->container['lightLevel'] = isset($data['lightLevel']) ? $data['lightLevel'] : null;
        $this->container['bungieNetUserInfo'] = isset($data['bungieNetUserInfo']) ? $data['bungieNetUserInfo'] : null;
        $this->container['clanName'] = isset($data['clanName']) ? $data['clanName'] : null;
        $this->container['clanTag'] = isset($data['clanTag']) ? $data['clanTag'] : null;
        $this->container['emblemHash'] = isset($data['emblemHash']) ? $data['emblemHash'] : null;
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
     * Gets destinyUserInfo
     *
     * @return \Bungie\Model\User\UserInfoCard|null
     */
    public function getDestinyUserInfo()
    {
        return $this->container['destinyUserInfo'];
    }

    /**
     * Sets destinyUserInfo
     *
     * @param \Bungie\Model\User\UserInfoCard|null $destinyUserInfo Details about the player as they are known in game (platform display name, Destiny emblem)
     *
     * @return $this
     */
    public function setDestinyUserInfo($destinyUserInfo)
    {
        $this->container['destinyUserInfo'] = $destinyUserInfo;

        return $this;
    }

    /**
     * Gets characterClass
     *
     * @return string|null
     */
    public function getCharacterClass()
    {
        return $this->container['characterClass'];
    }

    /**
     * Sets characterClass
     *
     * @param string|null $characterClass Class of the character if applicable and available.
     *
     * @return $this
     */
    public function setCharacterClass($characterClass)
    {
        $this->container['characterClass'] = $characterClass;

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
     * @param int|null $classHash classHash
     *
     * @return $this
     */
    public function setClassHash($classHash)
    {
        $this->container['classHash'] = $classHash;

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
     * @param int|null $raceHash raceHash
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
     * @param int|null $genderHash genderHash
     *
     * @return $this
     */
    public function setGenderHash($genderHash)
    {
        $this->container['genderHash'] = $genderHash;

        return $this;
    }

    /**
     * Gets characterLevel
     *
     * @return int|null
     */
    public function getCharacterLevel()
    {
        return $this->container['characterLevel'];
    }

    /**
     * Sets characterLevel
     *
     * @param int|null $characterLevel Level of the character if available. Zero if it is not available.
     *
     * @return $this
     */
    public function setCharacterLevel($characterLevel)
    {
        $this->container['characterLevel'] = $characterLevel;

        return $this;
    }

    /**
     * Gets lightLevel
     *
     * @return int|null
     */
    public function getLightLevel()
    {
        return $this->container['lightLevel'];
    }

    /**
     * Sets lightLevel
     *
     * @param int|null $lightLevel Light Level of the character if available. Zero if it is not available.
     *
     * @return $this
     */
    public function setLightLevel($lightLevel)
    {
        $this->container['lightLevel'] = $lightLevel;

        return $this;
    }

    /**
     * Gets bungieNetUserInfo
     *
     * @return \Bungie\Model\User\UserInfoCard|null
     */
    public function getBungieNetUserInfo()
    {
        return $this->container['bungieNetUserInfo'];
    }

    /**
     * Sets bungieNetUserInfo
     *
     * @param \Bungie\Model\User\UserInfoCard|null $bungieNetUserInfo Details about the player as they are known on BungieNet. This will be undefined if the player has marked their credential private, or does not have a BungieNet account.
     *
     * @return $this
     */
    public function setBungieNetUserInfo($bungieNetUserInfo)
    {
        $this->container['bungieNetUserInfo'] = $bungieNetUserInfo;

        return $this;
    }

    /**
     * Gets clanName
     *
     * @return string|null
     */
    public function getClanName()
    {
        return $this->container['clanName'];
    }

    /**
     * Sets clanName
     *
     * @param string|null $clanName Current clan name for the player. This value may be null or an empty string if the user does not have a clan.
     *
     * @return $this
     */
    public function setClanName($clanName)
    {
        $this->container['clanName'] = $clanName;

        return $this;
    }

    /**
     * Gets clanTag
     *
     * @return string|null
     */
    public function getClanTag()
    {
        return $this->container['clanTag'];
    }

    /**
     * Sets clanTag
     *
     * @param string|null $clanTag Current clan tag for the player. This value may be null or an empty string if the user does not have a clan.
     *
     * @return $this
     */
    public function setClanTag($clanTag)
    {
        $this->container['clanTag'] = $clanTag;

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
     * @param int|null $emblemHash If we know the emblem's hash, this can be used to look up the player's emblem at the time of a match when receiving PGCR data, or otherwise their currently equipped emblem (if we are able to obtain it).
     *
     * @return $this
     */
    public function setEmblemHash($emblemHash)
    {
        $this->container['emblemHash'] = $emblemHash;

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


