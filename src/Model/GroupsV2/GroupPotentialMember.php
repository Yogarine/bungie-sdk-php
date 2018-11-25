<?php
/**
 * GroupPotentialMember
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

namespace Bungie\Model\GroupsV2;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * GroupPotentialMember Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupPotentialMember implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupPotentialMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'potentialStatus' => '\Bungie\Model\GroupsV2\GroupPotentialMemberStatus',
        'groupId' => 'int',
        'destinyUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'bungieNetUserInfo' => '\Bungie\Model\User\UserInfoCard',
        'joinDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'potentialStatus' => null,
        'groupId' => 'int64',
        'destinyUserInfo' => null,
        'bungieNetUserInfo' => null,
        'joinDate' => 'date-time'
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
        'potentialStatus' => 'potentialStatus',
        'groupId' => 'groupId',
        'destinyUserInfo' => 'destinyUserInfo',
        'bungieNetUserInfo' => 'bungieNetUserInfo',
        'joinDate' => 'joinDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'potentialStatus' => 'setPotentialStatus',
        'groupId' => 'setGroupId',
        'destinyUserInfo' => 'setDestinyUserInfo',
        'bungieNetUserInfo' => 'setBungieNetUserInfo',
        'joinDate' => 'setJoinDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'potentialStatus' => 'getPotentialStatus',
        'groupId' => 'getGroupId',
        'destinyUserInfo' => 'getDestinyUserInfo',
        'bungieNetUserInfo' => 'getBungieNetUserInfo',
        'joinDate' => 'getJoinDate'
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
        $this->container['potentialStatus'] = isset($data['potentialStatus']) ? $data['potentialStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['destinyUserInfo'] = isset($data['destinyUserInfo']) ? $data['destinyUserInfo'] : null;
        $this->container['bungieNetUserInfo'] = isset($data['bungieNetUserInfo']) ? $data['bungieNetUserInfo'] : null;
        $this->container['joinDate'] = isset($data['joinDate']) ? $data['joinDate'] : null;
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
     * Gets potentialStatus
     *
     * @return \Bungie\Model\GroupsV2\GroupPotentialMemberStatus|null
     */
    public function getPotentialStatus()
    {
        return $this->container['potentialStatus'];
    }

    /**
     * Sets potentialStatus
     *
     * @param \Bungie\Model\GroupsV2\GroupPotentialMemberStatus|null $potentialStatus potentialStatus
     *
     * @return $this
     */
    public function setPotentialStatus($potentialStatus)
    {
        $this->container['potentialStatus'] = $potentialStatus;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param int|null $groupId groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
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
     * Gets joinDate
     *
     * @return \DateTime|null
     */
    public function getJoinDate()
    {
        return $this->container['joinDate'];
    }

    /**
     * Sets joinDate
     *
     * @param \DateTime|null $joinDate joinDate
     *
     * @return $this
     */
    public function setJoinDate($joinDate)
    {
        $this->container['joinDate'] = $joinDate;

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


