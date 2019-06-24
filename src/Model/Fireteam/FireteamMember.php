<?php
/**
 * FireteamMember
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
 * OpenAPI spec version: 2.3.5
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Fireteam;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * FireteamMember Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FireteamMember implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Fireteam.FireteamMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destinyUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'bungieNetUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'characterId' => 'int',
        'dateJoined' => '\DateTime',
        'hasMicrophone' => 'bool',
        'lastPlatformInviteAttemptDate' => '\DateTime',
        'lastPlatformInviteAttemptResult' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'destinyUserInfo' => null,
        'bungieNetUserInfo' => null,
        'characterId' => 'int64',
        'dateJoined' => 'date-time',
        'hasMicrophone' => null,
        'lastPlatformInviteAttemptDate' => 'date-time',
        'lastPlatformInviteAttemptResult' => 'byte'
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
        'bungieNetUserInfo' => 'bungieNetUserInfo',
        'characterId' => 'characterId',
        'dateJoined' => 'dateJoined',
        'hasMicrophone' => 'hasMicrophone',
        'lastPlatformInviteAttemptDate' => 'lastPlatformInviteAttemptDate',
        'lastPlatformInviteAttemptResult' => 'lastPlatformInviteAttemptResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destinyUserInfo' => 'setDestinyUserInfo',
        'bungieNetUserInfo' => 'setBungieNetUserInfo',
        'characterId' => 'setCharacterId',
        'dateJoined' => 'setDateJoined',
        'hasMicrophone' => 'setHasMicrophone',
        'lastPlatformInviteAttemptDate' => 'setLastPlatformInviteAttemptDate',
        'lastPlatformInviteAttemptResult' => 'setLastPlatformInviteAttemptResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destinyUserInfo' => 'getDestinyUserInfo',
        'bungieNetUserInfo' => 'getBungieNetUserInfo',
        'characterId' => 'getCharacterId',
        'dateJoined' => 'getDateJoined',
        'hasMicrophone' => 'getHasMicrophone',
        'lastPlatformInviteAttemptDate' => 'getLastPlatformInviteAttemptDate',
        'lastPlatformInviteAttemptResult' => 'getLastPlatformInviteAttemptResult'
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
        $this->container['bungieNetUserInfo'] = isset($data['bungieNetUserInfo']) ? $data['bungieNetUserInfo'] : null;
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['dateJoined'] = isset($data['dateJoined']) ? $data['dateJoined'] : null;
        $this->container['hasMicrophone'] = isset($data['hasMicrophone']) ? $data['hasMicrophone'] : null;
        $this->container['lastPlatformInviteAttemptDate'] = isset($data['lastPlatformInviteAttemptDate']) ? $data['lastPlatformInviteAttemptDate'] : null;
        $this->container['lastPlatformInviteAttemptResult'] = isset($data['lastPlatformInviteAttemptResult']) ? $data['lastPlatformInviteAttemptResult'] : null;
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
     * @param \Bungie\Model\User\UserInfoCard|null $destinyUserInfo destinyUserInfo
     *
     * @return $this
     */
    public function setDestinyUserInfo($destinyUserInfo)
    {
        $this->container['destinyUserInfo'] = $destinyUserInfo;

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
     * @param \Bungie\Model\User\UserInfoCard|null $bungieNetUserInfo bungieNetUserInfo
     *
     * @return $this
     */
    public function setBungieNetUserInfo($bungieNetUserInfo)
    {
        $this->container['bungieNetUserInfo'] = $bungieNetUserInfo;

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
     * @param int|null $characterId characterId
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets dateJoined
     *
     * @return \DateTime|null
     */
    public function getDateJoined()
    {
        return $this->container['dateJoined'];
    }

    /**
     * Sets dateJoined
     *
     * @param \DateTime|null $dateJoined dateJoined
     *
     * @return $this
     */
    public function setDateJoined($dateJoined)
    {
        $this->container['dateJoined'] = $dateJoined;

        return $this;
    }

    /**
     * Gets hasMicrophone
     *
     * @return bool|null
     */
    public function getHasMicrophone()
    {
        return $this->container['hasMicrophone'];
    }

    /**
     * Sets hasMicrophone
     *
     * @param bool|null $hasMicrophone hasMicrophone
     *
     * @return $this
     */
    public function setHasMicrophone($hasMicrophone)
    {
        $this->container['hasMicrophone'] = $hasMicrophone;

        return $this;
    }

    /**
     * Gets lastPlatformInviteAttemptDate
     *
     * @return \DateTime|null
     */
    public function getLastPlatformInviteAttemptDate()
    {
        return $this->container['lastPlatformInviteAttemptDate'];
    }

    /**
     * Sets lastPlatformInviteAttemptDate
     *
     * @param \DateTime|null $lastPlatformInviteAttemptDate lastPlatformInviteAttemptDate
     *
     * @return $this
     */
    public function setLastPlatformInviteAttemptDate($lastPlatformInviteAttemptDate)
    {
        $this->container['lastPlatformInviteAttemptDate'] = $lastPlatformInviteAttemptDate;

        return $this;
    }

    /**
     * Gets lastPlatformInviteAttemptResult
     *
     * @return int|null
     */
    public function getLastPlatformInviteAttemptResult()
    {
        return $this->container['lastPlatformInviteAttemptResult'];
    }

    /**
     * Sets lastPlatformInviteAttemptResult
     *
     * @param int|null $lastPlatformInviteAttemptResult lastPlatformInviteAttemptResult
     *
     * @return $this
     */
    public function setLastPlatformInviteAttemptResult($lastPlatformInviteAttemptResult)
    {
        $this->container['lastPlatformInviteAttemptResult'] = $lastPlatformInviteAttemptResult;

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


