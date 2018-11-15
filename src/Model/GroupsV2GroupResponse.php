<?php
/**
 * GroupsV2GroupResponse
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
 * GroupsV2GroupResponse Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupsV2GroupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupsV2.GroupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'detail' => '\Bungie\Model\GroupsV2GroupV2',
        'founder' => '\Bungie\Model\GroupsV2GroupMember',
        'alliedIds' => 'int[]',
        'parentGroup' => '\Bungie\Model\GroupsV2GroupV2',
        'allianceStatus' => '\Bungie\Model\GroupsV2GroupAllianceStatus',
        'groupJoinInviteCount' => 'int',
        'currentUserMemberMap' => 'map[string,\Bungie\Model\GroupsV2GroupMember]',
        'currentUserPotentialMemberMap' => 'map[string,\Bungie\Model\GroupsV2GroupPotentialMember]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'detail' => null,
        'founder' => null,
        'alliedIds' => 'int64',
        'parentGroup' => null,
        'allianceStatus' => null,
        'groupJoinInviteCount' => 'int32',
        'currentUserMemberMap' => null,
        'currentUserPotentialMemberMap' => null
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
        'detail' => 'detail',
        'founder' => 'founder',
        'alliedIds' => 'alliedIds',
        'parentGroup' => 'parentGroup',
        'allianceStatus' => 'allianceStatus',
        'groupJoinInviteCount' => 'groupJoinInviteCount',
        'currentUserMemberMap' => 'currentUserMemberMap',
        'currentUserPotentialMemberMap' => 'currentUserPotentialMemberMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detail' => 'setDetail',
        'founder' => 'setFounder',
        'alliedIds' => 'setAlliedIds',
        'parentGroup' => 'setParentGroup',
        'allianceStatus' => 'setAllianceStatus',
        'groupJoinInviteCount' => 'setGroupJoinInviteCount',
        'currentUserMemberMap' => 'setCurrentUserMemberMap',
        'currentUserPotentialMemberMap' => 'setCurrentUserPotentialMemberMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detail' => 'getDetail',
        'founder' => 'getFounder',
        'alliedIds' => 'getAlliedIds',
        'parentGroup' => 'getParentGroup',
        'allianceStatus' => 'getAllianceStatus',
        'groupJoinInviteCount' => 'getGroupJoinInviteCount',
        'currentUserMemberMap' => 'getCurrentUserMemberMap',
        'currentUserPotentialMemberMap' => 'getCurrentUserPotentialMemberMap'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['founder'] = isset($data['founder']) ? $data['founder'] : null;
        $this->container['alliedIds'] = isset($data['alliedIds']) ? $data['alliedIds'] : null;
        $this->container['parentGroup'] = isset($data['parentGroup']) ? $data['parentGroup'] : null;
        $this->container['allianceStatus'] = isset($data['allianceStatus']) ? $data['allianceStatus'] : null;
        $this->container['groupJoinInviteCount'] = isset($data['groupJoinInviteCount']) ? $data['groupJoinInviteCount'] : null;
        $this->container['currentUserMemberMap'] = isset($data['currentUserMemberMap']) ? $data['currentUserMemberMap'] : null;
        $this->container['currentUserPotentialMemberMap'] = isset($data['currentUserPotentialMemberMap']) ? $data['currentUserPotentialMemberMap'] : null;
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
     * Gets detail
     *
     * @return \Bungie\Model\GroupsV2GroupV2
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param \Bungie\Model\GroupsV2GroupV2 $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets founder
     *
     * @return \Bungie\Model\GroupsV2GroupMember
     */
    public function getFounder()
    {
        return $this->container['founder'];
    }

    /**
     * Sets founder
     *
     * @param \Bungie\Model\GroupsV2GroupMember $founder founder
     *
     * @return $this
     */
    public function setFounder($founder)
    {
        $this->container['founder'] = $founder;

        return $this;
    }

    /**
     * Gets alliedIds
     *
     * @return int[]
     */
    public function getAlliedIds()
    {
        return $this->container['alliedIds'];
    }

    /**
     * Sets alliedIds
     *
     * @param int[] $alliedIds alliedIds
     *
     * @return $this
     */
    public function setAlliedIds($alliedIds)
    {
        $this->container['alliedIds'] = $alliedIds;

        return $this;
    }

    /**
     * Gets parentGroup
     *
     * @return \Bungie\Model\GroupsV2GroupV2
     */
    public function getParentGroup()
    {
        return $this->container['parentGroup'];
    }

    /**
     * Sets parentGroup
     *
     * @param \Bungie\Model\GroupsV2GroupV2 $parentGroup parentGroup
     *
     * @return $this
     */
    public function setParentGroup($parentGroup)
    {
        $this->container['parentGroup'] = $parentGroup;

        return $this;
    }

    /**
     * Gets allianceStatus
     *
     * @return \Bungie\Model\GroupsV2GroupAllianceStatus
     */
    public function getAllianceStatus()
    {
        return $this->container['allianceStatus'];
    }

    /**
     * Sets allianceStatus
     *
     * @param \Bungie\Model\GroupsV2GroupAllianceStatus $allianceStatus allianceStatus
     *
     * @return $this
     */
    public function setAllianceStatus($allianceStatus)
    {
        $this->container['allianceStatus'] = $allianceStatus;

        return $this;
    }

    /**
     * Gets groupJoinInviteCount
     *
     * @return int
     */
    public function getGroupJoinInviteCount()
    {
        return $this->container['groupJoinInviteCount'];
    }

    /**
     * Sets groupJoinInviteCount
     *
     * @param int $groupJoinInviteCount groupJoinInviteCount
     *
     * @return $this
     */
    public function setGroupJoinInviteCount($groupJoinInviteCount)
    {
        $this->container['groupJoinInviteCount'] = $groupJoinInviteCount;

        return $this;
    }

    /**
     * Gets currentUserMemberMap
     *
     * @return map[string,\Bungie\Model\GroupsV2GroupMember]
     */
    public function getCurrentUserMemberMap()
    {
        return $this->container['currentUserMemberMap'];
    }

    /**
     * Sets currentUserMemberMap
     *
     * @param map[string,\Bungie\Model\GroupsV2GroupMember] $currentUserMemberMap This property will be populated if the authenticated user is a member of the group. Note that because of account linking, a user can sometimes be part of a clan more than once. As such, this returns the highest member type available.
     *
     * @return $this
     */
    public function setCurrentUserMemberMap($currentUserMemberMap)
    {
        $this->container['currentUserMemberMap'] = $currentUserMemberMap;

        return $this;
    }

    /**
     * Gets currentUserPotentialMemberMap
     *
     * @return map[string,\Bungie\Model\GroupsV2GroupPotentialMember]
     */
    public function getCurrentUserPotentialMemberMap()
    {
        return $this->container['currentUserPotentialMemberMap'];
    }

    /**
     * Sets currentUserPotentialMemberMap
     *
     * @param map[string,\Bungie\Model\GroupsV2GroupPotentialMember] $currentUserPotentialMemberMap This property will be populated if the authenticated user is an applicant or has an outstanding invitation to join. Note that because of account linking, a user can sometimes be part of a clan more than once.
     *
     * @return $this
     */
    public function setCurrentUserPotentialMemberMap($currentUserPotentialMemberMap)
    {
        $this->container['currentUserPotentialMemberMap'] = $currentUserPotentialMemberMap;

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


