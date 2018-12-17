<?php
/**
 * GroupEditAction
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
 * GroupEditAction Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupEditAction implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupEditAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'about' => 'string',
        'motto' => 'string',
        'theme' => 'string',
        'avatarImageIndex' => 'int',
        'tags' => 'string',
        'isPublic' => 'bool',
        'membershipOption' => 'int',
        'isPublicTopicAdminOnly' => 'bool',
        'allowChat' => 'bool',
        'chatSecurity' => 'int',
        'callsign' => 'string',
        'locale' => 'string',
        'homepage' => 'int',
        'enableInvitationMessagingForAdmins' => 'bool',
        'defaultPublicity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'about' => null,
        'motto' => null,
        'theme' => null,
        'avatarImageIndex' => 'int32',
        'tags' => null,
        'isPublic' => null,
        'membershipOption' => 'int32',
        'isPublicTopicAdminOnly' => null,
        'allowChat' => null,
        'chatSecurity' => 'int32',
        'callsign' => null,
        'locale' => null,
        'homepage' => 'int32',
        'enableInvitationMessagingForAdmins' => null,
        'defaultPublicity' => 'int32'
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
        'name' => 'name',
        'about' => 'about',
        'motto' => 'motto',
        'theme' => 'theme',
        'avatarImageIndex' => 'avatarImageIndex',
        'tags' => 'tags',
        'isPublic' => 'isPublic',
        'membershipOption' => 'membershipOption',
        'isPublicTopicAdminOnly' => 'isPublicTopicAdminOnly',
        'allowChat' => 'allowChat',
        'chatSecurity' => 'chatSecurity',
        'callsign' => 'callsign',
        'locale' => 'locale',
        'homepage' => 'homepage',
        'enableInvitationMessagingForAdmins' => 'enableInvitationMessagingForAdmins',
        'defaultPublicity' => 'defaultPublicity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'about' => 'setAbout',
        'motto' => 'setMotto',
        'theme' => 'setTheme',
        'avatarImageIndex' => 'setAvatarImageIndex',
        'tags' => 'setTags',
        'isPublic' => 'setIsPublic',
        'membershipOption' => 'setMembershipOption',
        'isPublicTopicAdminOnly' => 'setIsPublicTopicAdminOnly',
        'allowChat' => 'setAllowChat',
        'chatSecurity' => 'setChatSecurity',
        'callsign' => 'setCallsign',
        'locale' => 'setLocale',
        'homepage' => 'setHomepage',
        'enableInvitationMessagingForAdmins' => 'setEnableInvitationMessagingForAdmins',
        'defaultPublicity' => 'setDefaultPublicity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'about' => 'getAbout',
        'motto' => 'getMotto',
        'theme' => 'getTheme',
        'avatarImageIndex' => 'getAvatarImageIndex',
        'tags' => 'getTags',
        'isPublic' => 'getIsPublic',
        'membershipOption' => 'getMembershipOption',
        'isPublicTopicAdminOnly' => 'getIsPublicTopicAdminOnly',
        'allowChat' => 'getAllowChat',
        'chatSecurity' => 'getChatSecurity',
        'callsign' => 'getCallsign',
        'locale' => 'getLocale',
        'homepage' => 'getHomepage',
        'enableInvitationMessagingForAdmins' => 'getEnableInvitationMessagingForAdmins',
        'defaultPublicity' => 'getDefaultPublicity'
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

    const MEMBERSHIP_OPTION_REVIEWED = 0;
    const MEMBERSHIP_OPTION_OPEN = 1;
    const MEMBERSHIP_OPTION_CLOSED = 2;
    const CHAT_SECURITY_GROUP = 0;
    const CHAT_SECURITY_ADMINS = 1;
    const HOMEPAGE_WALL = 0;
    const HOMEPAGE_FORUM = 1;
    const HOMEPAGE_ALLIANCEFORUM = 2;
    const DEFAULT_PUBLICITY_PUBLIC = 0;
    const DEFAULT_PUBLICITY_ALLIANCE = 1;
    const DEFAULT_PUBLICITY_PRIVATE = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMembershipOptionAllowableValues()
    {
        return [
            self::MEMBERSHIP_OPTION_REVIEWED,
            self::MEMBERSHIP_OPTION_OPEN,
            self::MEMBERSHIP_OPTION_CLOSED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChatSecurityAllowableValues()
    {
        return [
            self::CHAT_SECURITY_GROUP,
            self::CHAT_SECURITY_ADMINS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHomepageAllowableValues()
    {
        return [
            self::HOMEPAGE_WALL,
            self::HOMEPAGE_FORUM,
            self::HOMEPAGE_ALLIANCEFORUM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultPublicityAllowableValues()
    {
        return [
            self::DEFAULT_PUBLICITY_PUBLIC,
            self::DEFAULT_PUBLICITY_ALLIANCE,
            self::DEFAULT_PUBLICITY_PRIVATE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
        $this->container['motto'] = isset($data['motto']) ? $data['motto'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['avatarImageIndex'] = isset($data['avatarImageIndex']) ? $data['avatarImageIndex'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['membershipOption'] = isset($data['membershipOption']) ? $data['membershipOption'] : null;
        $this->container['isPublicTopicAdminOnly'] = isset($data['isPublicTopicAdminOnly']) ? $data['isPublicTopicAdminOnly'] : null;
        $this->container['allowChat'] = isset($data['allowChat']) ? $data['allowChat'] : null;
        $this->container['chatSecurity'] = isset($data['chatSecurity']) ? $data['chatSecurity'] : null;
        $this->container['callsign'] = isset($data['callsign']) ? $data['callsign'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['homepage'] = isset($data['homepage']) ? $data['homepage'] : null;
        $this->container['enableInvitationMessagingForAdmins'] = isset($data['enableInvitationMessagingForAdmins']) ? $data['enableInvitationMessagingForAdmins'] : null;
        $this->container['defaultPublicity'] = isset($data['defaultPublicity']) ? $data['defaultPublicity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMembershipOptionAllowableValues();
        if (!is_null($this->container['membershipOption']) && !in_array($this->container['membershipOption'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'membershipOption', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChatSecurityAllowableValues();
        if (!is_null($this->container['chatSecurity']) && !in_array($this->container['chatSecurity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'chatSecurity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHomepageAllowableValues();
        if (!is_null($this->container['homepage']) && !in_array($this->container['homepage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'homepage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDefaultPublicityAllowableValues();
        if (!is_null($this->container['defaultPublicity']) && !in_array($this->container['defaultPublicity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'defaultPublicity', must be one of '%s'",
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
     * Gets avatarImageIndex
     *
     * @return int|null
     */
    public function getAvatarImageIndex()
    {
        return $this->container['avatarImageIndex'];
    }

    /**
     * Sets avatarImageIndex
     *
     * @param int|null $avatarImageIndex avatarImageIndex
     *
     * @return $this
     */
    public function setAvatarImageIndex($avatarImageIndex)
    {
        $this->container['avatarImageIndex'] = $avatarImageIndex;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets isPublic
     *
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
     * Sets isPublic
     *
     * @param bool|null $isPublic isPublic
     *
     * @return $this
     */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;

        return $this;
    }

    /**
     * Gets membershipOption
     *
     * @return int|null
     */
    public function getMembershipOption()
    {
        return $this->container['membershipOption'];
    }

    /**
     * Sets membershipOption
     *
     * @param int|null $membershipOption membershipOption
     *
     * @return $this
     */
    public function setMembershipOption($membershipOption)
    {
        $allowedValues = $this->getMembershipOptionAllowableValues();
        if (!is_null($membershipOption) && !in_array($membershipOption, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'membershipOption', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['membershipOption'] = $membershipOption;

        return $this;
    }

    /**
     * Gets isPublicTopicAdminOnly
     *
     * @return bool|null
     */
    public function getIsPublicTopicAdminOnly()
    {
        return $this->container['isPublicTopicAdminOnly'];
    }

    /**
     * Sets isPublicTopicAdminOnly
     *
     * @param bool|null $isPublicTopicAdminOnly isPublicTopicAdminOnly
     *
     * @return $this
     */
    public function setIsPublicTopicAdminOnly($isPublicTopicAdminOnly)
    {
        $this->container['isPublicTopicAdminOnly'] = $isPublicTopicAdminOnly;

        return $this;
    }

    /**
     * Gets allowChat
     *
     * @return bool|null
     */
    public function getAllowChat()
    {
        return $this->container['allowChat'];
    }

    /**
     * Sets allowChat
     *
     * @param bool|null $allowChat allowChat
     *
     * @return $this
     */
    public function setAllowChat($allowChat)
    {
        $this->container['allowChat'] = $allowChat;

        return $this;
    }

    /**
     * Gets chatSecurity
     *
     * @return int|null
     */
    public function getChatSecurity()
    {
        return $this->container['chatSecurity'];
    }

    /**
     * Sets chatSecurity
     *
     * @param int|null $chatSecurity chatSecurity
     *
     * @return $this
     */
    public function setChatSecurity($chatSecurity)
    {
        $allowedValues = $this->getChatSecurityAllowableValues();
        if (!is_null($chatSecurity) && !in_array($chatSecurity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'chatSecurity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chatSecurity'] = $chatSecurity;

        return $this;
    }

    /**
     * Gets callsign
     *
     * @return string|null
     */
    public function getCallsign()
    {
        return $this->container['callsign'];
    }

    /**
     * Sets callsign
     *
     * @param string|null $callsign callsign
     *
     * @return $this
     */
    public function setCallsign($callsign)
    {
        $this->container['callsign'] = $callsign;

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
     * Gets homepage
     *
     * @return int|null
     */
    public function getHomepage()
    {
        return $this->container['homepage'];
    }

    /**
     * Sets homepage
     *
     * @param int|null $homepage homepage
     *
     * @return $this
     */
    public function setHomepage($homepage)
    {
        $allowedValues = $this->getHomepageAllowableValues();
        if (!is_null($homepage) && !in_array($homepage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'homepage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['homepage'] = $homepage;

        return $this;
    }

    /**
     * Gets enableInvitationMessagingForAdmins
     *
     * @return bool|null
     */
    public function getEnableInvitationMessagingForAdmins()
    {
        return $this->container['enableInvitationMessagingForAdmins'];
    }

    /**
     * Sets enableInvitationMessagingForAdmins
     *
     * @param bool|null $enableInvitationMessagingForAdmins enableInvitationMessagingForAdmins
     *
     * @return $this
     */
    public function setEnableInvitationMessagingForAdmins($enableInvitationMessagingForAdmins)
    {
        $this->container['enableInvitationMessagingForAdmins'] = $enableInvitationMessagingForAdmins;

        return $this;
    }

    /**
     * Gets defaultPublicity
     *
     * @return int|null
     */
    public function getDefaultPublicity()
    {
        return $this->container['defaultPublicity'];
    }

    /**
     * Sets defaultPublicity
     *
     * @param int|null $defaultPublicity defaultPublicity
     *
     * @return $this
     */
    public function setDefaultPublicity($defaultPublicity)
    {
        $allowedValues = $this->getDefaultPublicityAllowableValues();
        if (!is_null($defaultPublicity) && !in_array($defaultPublicity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'defaultPublicity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['defaultPublicity'] = $defaultPublicity;

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


