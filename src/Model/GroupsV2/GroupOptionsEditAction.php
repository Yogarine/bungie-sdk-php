<?php
/**
 * GroupOptionsEditAction
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

namespace Bungie\Model\GroupsV2;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * GroupOptionsEditAction Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupOptionsEditAction implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupOptionsEditAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invitePermissionOverride' => 'bool',
        'updateCulturePermissionOverride' => 'bool',
        'hostGuidedGamePermissionOverride' => 'int',
        'updateBannerPermissionOverride' => 'bool',
        'joinLevel' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invitePermissionOverride' => null,
        'updateCulturePermissionOverride' => null,
        'hostGuidedGamePermissionOverride' => 'int32',
        'updateBannerPermissionOverride' => null,
        'joinLevel' => 'int32'
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
        'invitePermissionOverride' => 'InvitePermissionOverride',
        'updateCulturePermissionOverride' => 'UpdateCulturePermissionOverride',
        'hostGuidedGamePermissionOverride' => 'HostGuidedGamePermissionOverride',
        'updateBannerPermissionOverride' => 'UpdateBannerPermissionOverride',
        'joinLevel' => 'JoinLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invitePermissionOverride' => 'setInvitePermissionOverride',
        'updateCulturePermissionOverride' => 'setUpdateCulturePermissionOverride',
        'hostGuidedGamePermissionOverride' => 'setHostGuidedGamePermissionOverride',
        'updateBannerPermissionOverride' => 'setUpdateBannerPermissionOverride',
        'joinLevel' => 'setJoinLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invitePermissionOverride' => 'getInvitePermissionOverride',
        'updateCulturePermissionOverride' => 'getUpdateCulturePermissionOverride',
        'hostGuidedGamePermissionOverride' => 'getHostGuidedGamePermissionOverride',
        'updateBannerPermissionOverride' => 'getUpdateBannerPermissionOverride',
        'joinLevel' => 'getJoinLevel'
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

    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_NONE = 0;
    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_BEGINNER = 1;
    const HOST_GUIDED_GAME_PERMISSION_OVERRIDE_MEMBER = 2;
    const JOIN_LEVEL_NONE = 0;
    const JOIN_LEVEL_BEGINNER = 1;
    const JOIN_LEVEL_MEMBER = 2;
    const JOIN_LEVEL_ADMIN = 3;
    const JOIN_LEVEL_ACTINGFOUNDER = 4;
    const JOIN_LEVEL_FOUNDER = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHostGuidedGamePermissionOverrideAllowableValues()
    {
        return [
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_NONE,
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_BEGINNER,
            self::HOST_GUIDED_GAME_PERMISSION_OVERRIDE_MEMBER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJoinLevelAllowableValues()
    {
        return [
            self::JOIN_LEVEL_NONE,
            self::JOIN_LEVEL_BEGINNER,
            self::JOIN_LEVEL_MEMBER,
            self::JOIN_LEVEL_ADMIN,
            self::JOIN_LEVEL_ACTINGFOUNDER,
            self::JOIN_LEVEL_FOUNDER,
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
        $this->container['invitePermissionOverride'] = isset($data['invitePermissionOverride']) ? $data['invitePermissionOverride'] : null;
        $this->container['updateCulturePermissionOverride'] = isset($data['updateCulturePermissionOverride']) ? $data['updateCulturePermissionOverride'] : null;
        $this->container['hostGuidedGamePermissionOverride'] = isset($data['hostGuidedGamePermissionOverride']) ? $data['hostGuidedGamePermissionOverride'] : null;
        $this->container['updateBannerPermissionOverride'] = isset($data['updateBannerPermissionOverride']) ? $data['updateBannerPermissionOverride'] : null;
        $this->container['joinLevel'] = isset($data['joinLevel']) ? $data['joinLevel'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHostGuidedGamePermissionOverrideAllowableValues();
        if (!is_null($this->container['hostGuidedGamePermissionOverride']) && !in_array($this->container['hostGuidedGamePermissionOverride'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hostGuidedGamePermissionOverride', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJoinLevelAllowableValues();
        if (!is_null($this->container['joinLevel']) && !in_array($this->container['joinLevel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'joinLevel', must be one of '%s'",
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
     * Gets invitePermissionOverride
     *
     * @return bool|null
     */
    public function getInvitePermissionOverride()
    {
        return $this->container['invitePermissionOverride'];
    }

    /**
     * Sets invitePermissionOverride
     *
     * @param bool|null $invitePermissionOverride Minimum Member Level allowed to invite new members to group  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return $this
     */
    public function setInvitePermissionOverride($invitePermissionOverride)
    {
        $this->container['invitePermissionOverride'] = $invitePermissionOverride;

        return $this;
    }

    /**
     * Gets updateCulturePermissionOverride
     *
     * @return bool|null
     */
    public function getUpdateCulturePermissionOverride()
    {
        return $this->container['updateCulturePermissionOverride'];
    }

    /**
     * Sets updateCulturePermissionOverride
     *
     * @param bool|null $updateCulturePermissionOverride Minimum Member Level allowed to update group culture  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return $this
     */
    public function setUpdateCulturePermissionOverride($updateCulturePermissionOverride)
    {
        $this->container['updateCulturePermissionOverride'] = $updateCulturePermissionOverride;

        return $this;
    }

    /**
     * Gets hostGuidedGamePermissionOverride
     *
     * @return int|null
     */
    public function getHostGuidedGamePermissionOverride()
    {
        return $this->container['hostGuidedGamePermissionOverride'];
    }

    /**
     * Sets hostGuidedGamePermissionOverride
     *
     * @param int|null $hostGuidedGamePermissionOverride Minimum Member Level allowed to host guided games  Always Allowed: Founder, Acting Founder, Admin  Allowed Overrides: None, Member, Beginner  Default is Member for clans, None for groups, although this means nothing for groups.
     *
     * @return $this
     */
    public function setHostGuidedGamePermissionOverride($hostGuidedGamePermissionOverride)
    {
        $allowedValues = $this->getHostGuidedGamePermissionOverrideAllowableValues();
        if (!is_null($hostGuidedGamePermissionOverride) && !in_array($hostGuidedGamePermissionOverride, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hostGuidedGamePermissionOverride', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hostGuidedGamePermissionOverride'] = $hostGuidedGamePermissionOverride;

        return $this;
    }

    /**
     * Gets updateBannerPermissionOverride
     *
     * @return bool|null
     */
    public function getUpdateBannerPermissionOverride()
    {
        return $this->container['updateBannerPermissionOverride'];
    }

    /**
     * Sets updateBannerPermissionOverride
     *
     * @param bool|null $updateBannerPermissionOverride Minimum Member Level allowed to update banner  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don't  Default is false for clans, true for groups.
     *
     * @return $this
     */
    public function setUpdateBannerPermissionOverride($updateBannerPermissionOverride)
    {
        $this->container['updateBannerPermissionOverride'] = $updateBannerPermissionOverride;

        return $this;
    }

    /**
     * Gets joinLevel
     *
     * @return int|null
     */
    public function getJoinLevel()
    {
        return $this->container['joinLevel'];
    }

    /**
     * Sets joinLevel
     *
     * @param int|null $joinLevel Level to join a member at when accepting an invite, application, or joining an open clan  Default is Beginner.
     *
     * @return $this
     */
    public function setJoinLevel($joinLevel)
    {
        $allowedValues = $this->getJoinLevelAllowableValues();
        if (!is_null($joinLevel) && !in_array($joinLevel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'joinLevel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['joinLevel'] = $joinLevel;

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


