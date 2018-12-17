<?php
/**
 * GroupV2Card
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
 * OpenAPI spec version: 2.3.3
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
 * GroupV2Card Class Doc Comment
 *
 * @category Class
 * @description A small infocard of group information, usually used for when a list of groups are returned
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupV2Card implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupV2Card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'int',
        'name' => 'string',
        'groupType' => '\Bungie\Model\GroupsV2\GroupType',
        'creationDate' => '\DateTime',
        'about' => 'string',
        'motto' => 'string',
        'memberCount' => 'int',
        'locale' => 'string',
        'membershipOption' => '\Bungie\Model\GroupsV2\MembershipOption',
        'capabilities' => '\Bungie\Model\GroupsV2\Capabilities',
        'clanInfo' => '\Bungie\Model\GroupsV2\GroupV2ClanInfo',
        'avatarPath' => 'string',
        'theme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => 'int64',
        'name' => null,
        'groupType' => null,
        'creationDate' => 'date-time',
        'about' => null,
        'motto' => null,
        'memberCount' => 'int32',
        'locale' => null,
        'membershipOption' => null,
        'capabilities' => null,
        'clanInfo' => null,
        'avatarPath' => null,
        'theme' => null
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
        'groupId' => 'groupId',
        'name' => 'name',
        'groupType' => 'groupType',
        'creationDate' => 'creationDate',
        'about' => 'about',
        'motto' => 'motto',
        'memberCount' => 'memberCount',
        'locale' => 'locale',
        'membershipOption' => 'membershipOption',
        'capabilities' => 'capabilities',
        'clanInfo' => 'clanInfo',
        'avatarPath' => 'avatarPath',
        'theme' => 'theme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'name' => 'setName',
        'groupType' => 'setGroupType',
        'creationDate' => 'setCreationDate',
        'about' => 'setAbout',
        'motto' => 'setMotto',
        'memberCount' => 'setMemberCount',
        'locale' => 'setLocale',
        'membershipOption' => 'setMembershipOption',
        'capabilities' => 'setCapabilities',
        'clanInfo' => 'setClanInfo',
        'avatarPath' => 'setAvatarPath',
        'theme' => 'setTheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'name' => 'getName',
        'groupType' => 'getGroupType',
        'creationDate' => 'getCreationDate',
        'about' => 'getAbout',
        'motto' => 'getMotto',
        'memberCount' => 'getMemberCount',
        'locale' => 'getLocale',
        'membershipOption' => 'getMembershipOption',
        'capabilities' => 'getCapabilities',
        'clanInfo' => 'getClanInfo',
        'avatarPath' => 'getAvatarPath',
        'theme' => 'getTheme'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
        $this->container['motto'] = isset($data['motto']) ? $data['motto'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['membershipOption'] = isset($data['membershipOption']) ? $data['membershipOption'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['clanInfo'] = isset($data['clanInfo']) ? $data['clanInfo'] : null;
        $this->container['avatarPath'] = isset($data['avatarPath']) ? $data['avatarPath'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets groupType
     *
     * @return \Bungie\Model\GroupsV2\GroupType|null
     */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
     * Sets groupType
     *
     * @param \Bungie\Model\GroupsV2\GroupType|null $groupType groupType
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets about
     *
     * @return string|null
     */
    public function getAbout()
    {
        return $this->container['about'];
    }

    /**
     * Sets about
     *
     * @param string|null $about about
     *
     * @return $this
     */
    public function setAbout($about)
    {
        $this->container['about'] = $about;

        return $this;
    }

    /**
     * Gets motto
     *
     * @return string|null
     */
    public function getMotto()
    {
        return $this->container['motto'];
    }

    /**
     * Sets motto
     *
     * @param string|null $motto motto
     *
     * @return $this
     */
    public function setMotto($motto)
    {
        $this->container['motto'] = $motto;

        return $this;
    }

    /**
     * Gets memberCount
     *
     * @return int|null
     */
    public function getMemberCount()
    {
        return $this->container['memberCount'];
    }

    /**
     * Sets memberCount
     *
     * @param int|null $memberCount memberCount
     *
     * @return $this
     */
    public function setMemberCount($memberCount)
    {
        $this->container['memberCount'] = $memberCount;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets membershipOption
     *
     * @return \Bungie\Model\GroupsV2\MembershipOption|null
     */
    public function getMembershipOption()
    {
        return $this->container['membershipOption'];
    }

    /**
     * Sets membershipOption
     *
     * @param \Bungie\Model\GroupsV2\MembershipOption|null $membershipOption membershipOption
     *
     * @return $this
     */
    public function setMembershipOption($membershipOption)
    {
        $this->container['membershipOption'] = $membershipOption;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return \Bungie\Model\GroupsV2\Capabilities|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \Bungie\Model\GroupsV2\Capabilities|null $capabilities capabilities
     *
     * @return $this
     */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets clanInfo
     *
     * @return \Bungie\Model\GroupsV2\GroupV2ClanInfo|null
     */
    public function getClanInfo()
    {
        return $this->container['clanInfo'];
    }

    /**
     * Sets clanInfo
     *
     * @param \Bungie\Model\GroupsV2\GroupV2ClanInfo|null $clanInfo clanInfo
     *
     * @return $this
     */
    public function setClanInfo($clanInfo)
    {
        $this->container['clanInfo'] = $clanInfo;

        return $this;
    }

    /**
     * Gets avatarPath
     *
     * @return string|null
     */
    public function getAvatarPath()
    {
        return $this->container['avatarPath'];
    }

    /**
     * Sets avatarPath
     *
     * @param string|null $avatarPath avatarPath
     *
     * @return $this
     */
    public function setAvatarPath($avatarPath)
    {
        $this->container['avatarPath'] = $avatarPath;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string|null $theme theme
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

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


