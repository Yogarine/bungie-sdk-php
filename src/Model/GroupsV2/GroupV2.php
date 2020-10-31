<?php
/**
 * GroupV2
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
 * OpenAPI spec version: 2.8.2
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
 * GroupV2 Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupV2 implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'int',
        'name' => 'string',
        'groupType' => 'int',
        'membershipIdCreated' => 'int',
        'creationDate' => '\DateTime',
        'modificationDate' => '\DateTime',
        'about' => 'string',
        'tags' => 'string[]',
        'memberCount' => 'int',
        'isPublic' => 'bool',
        'isPublicTopicAdminOnly' => 'bool',
        'motto' => 'string',
        'allowChat' => 'bool',
        'isDefaultPostPublic' => 'bool',
        'chatSecurity' => 'int',
        'locale' => 'string',
        'avatarImageIndex' => 'int',
        'homepage' => 'int',
        'membershipOption' => 'int',
        'defaultPublicity' => 'int',
        'theme' => 'string',
        'bannerPath' => 'string',
        'avatarPath' => 'string',
        'conversationId' => 'int',
        'enableInvitationMessagingForAdmins' => 'bool',
        'banExpireDate' => '\DateTime',
        'features' => '\Bungie\Model\GroupsV2\GroupFeatures',
        'clanInfo' => '\Bungie\Model\GroupsV2\GroupV2ClanInfoAndInvestment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => 'int64',
        'name' => null,
        'groupType' => 'int32',
        'membershipIdCreated' => 'int64',
        'creationDate' => 'date-time',
        'modificationDate' => 'date-time',
        'about' => null,
        'tags' => null,
        'memberCount' => 'int32',
        'isPublic' => null,
        'isPublicTopicAdminOnly' => null,
        'motto' => null,
        'allowChat' => null,
        'isDefaultPostPublic' => null,
        'chatSecurity' => 'int32',
        'locale' => null,
        'avatarImageIndex' => 'int32',
        'homepage' => 'int32',
        'membershipOption' => 'int32',
        'defaultPublicity' => 'int32',
        'theme' => null,
        'bannerPath' => null,
        'avatarPath' => null,
        'conversationId' => 'int64',
        'enableInvitationMessagingForAdmins' => null,
        'banExpireDate' => 'date-time',
        'features' => null,
        'clanInfo' => null
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
        'membershipIdCreated' => 'membershipIdCreated',
        'creationDate' => 'creationDate',
        'modificationDate' => 'modificationDate',
        'about' => 'about',
        'tags' => 'tags',
        'memberCount' => 'memberCount',
        'isPublic' => 'isPublic',
        'isPublicTopicAdminOnly' => 'isPublicTopicAdminOnly',
        'motto' => 'motto',
        'allowChat' => 'allowChat',
        'isDefaultPostPublic' => 'isDefaultPostPublic',
        'chatSecurity' => 'chatSecurity',
        'locale' => 'locale',
        'avatarImageIndex' => 'avatarImageIndex',
        'homepage' => 'homepage',
        'membershipOption' => 'membershipOption',
        'defaultPublicity' => 'defaultPublicity',
        'theme' => 'theme',
        'bannerPath' => 'bannerPath',
        'avatarPath' => 'avatarPath',
        'conversationId' => 'conversationId',
        'enableInvitationMessagingForAdmins' => 'enableInvitationMessagingForAdmins',
        'banExpireDate' => 'banExpireDate',
        'features' => 'features',
        'clanInfo' => 'clanInfo'
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
        'membershipIdCreated' => 'setMembershipIdCreated',
        'creationDate' => 'setCreationDate',
        'modificationDate' => 'setModificationDate',
        'about' => 'setAbout',
        'tags' => 'setTags',
        'memberCount' => 'setMemberCount',
        'isPublic' => 'setIsPublic',
        'isPublicTopicAdminOnly' => 'setIsPublicTopicAdminOnly',
        'motto' => 'setMotto',
        'allowChat' => 'setAllowChat',
        'isDefaultPostPublic' => 'setIsDefaultPostPublic',
        'chatSecurity' => 'setChatSecurity',
        'locale' => 'setLocale',
        'avatarImageIndex' => 'setAvatarImageIndex',
        'homepage' => 'setHomepage',
        'membershipOption' => 'setMembershipOption',
        'defaultPublicity' => 'setDefaultPublicity',
        'theme' => 'setTheme',
        'bannerPath' => 'setBannerPath',
        'avatarPath' => 'setAvatarPath',
        'conversationId' => 'setConversationId',
        'enableInvitationMessagingForAdmins' => 'setEnableInvitationMessagingForAdmins',
        'banExpireDate' => 'setBanExpireDate',
        'features' => 'setFeatures',
        'clanInfo' => 'setClanInfo'
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
        'membershipIdCreated' => 'getMembershipIdCreated',
        'creationDate' => 'getCreationDate',
        'modificationDate' => 'getModificationDate',
        'about' => 'getAbout',
        'tags' => 'getTags',
        'memberCount' => 'getMemberCount',
        'isPublic' => 'getIsPublic',
        'isPublicTopicAdminOnly' => 'getIsPublicTopicAdminOnly',
        'motto' => 'getMotto',
        'allowChat' => 'getAllowChat',
        'isDefaultPostPublic' => 'getIsDefaultPostPublic',
        'chatSecurity' => 'getChatSecurity',
        'locale' => 'getLocale',
        'avatarImageIndex' => 'getAvatarImageIndex',
        'homepage' => 'getHomepage',
        'membershipOption' => 'getMembershipOption',
        'defaultPublicity' => 'getDefaultPublicity',
        'theme' => 'getTheme',
        'bannerPath' => 'getBannerPath',
        'avatarPath' => 'getAvatarPath',
        'conversationId' => 'getConversationId',
        'enableInvitationMessagingForAdmins' => 'getEnableInvitationMessagingForAdmins',
        'banExpireDate' => 'getBanExpireDate',
        'features' => 'getFeatures',
        'clanInfo' => 'getClanInfo'
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
        $this->container['membershipIdCreated'] = isset($data['membershipIdCreated']) ? $data['membershipIdCreated'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['modificationDate'] = isset($data['modificationDate']) ? $data['modificationDate'] : null;
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['isPublicTopicAdminOnly'] = isset($data['isPublicTopicAdminOnly']) ? $data['isPublicTopicAdminOnly'] : null;
        $this->container['motto'] = isset($data['motto']) ? $data['motto'] : null;
        $this->container['allowChat'] = isset($data['allowChat']) ? $data['allowChat'] : null;
        $this->container['isDefaultPostPublic'] = isset($data['isDefaultPostPublic']) ? $data['isDefaultPostPublic'] : null;
        $this->container['chatSecurity'] = isset($data['chatSecurity']) ? $data['chatSecurity'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['avatarImageIndex'] = isset($data['avatarImageIndex']) ? $data['avatarImageIndex'] : null;
        $this->container['homepage'] = isset($data['homepage']) ? $data['homepage'] : null;
        $this->container['membershipOption'] = isset($data['membershipOption']) ? $data['membershipOption'] : null;
        $this->container['defaultPublicity'] = isset($data['defaultPublicity']) ? $data['defaultPublicity'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['bannerPath'] = isset($data['bannerPath']) ? $data['bannerPath'] : null;
        $this->container['avatarPath'] = isset($data['avatarPath']) ? $data['avatarPath'] : null;
        $this->container['conversationId'] = isset($data['conversationId']) ? $data['conversationId'] : null;
        $this->container['enableInvitationMessagingForAdmins'] = isset($data['enableInvitationMessagingForAdmins']) ? $data['enableInvitationMessagingForAdmins'] : null;
        $this->container['banExpireDate'] = isset($data['banExpireDate']) ? $data['banExpireDate'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['clanInfo'] = isset($data['clanInfo']) ? $data['clanInfo'] : null;
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
     * @return int|null
     */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
     * Sets groupType
     *
     * @param int|null $groupType groupType
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;

        return $this;
    }

    /**
     * Gets membershipIdCreated
     *
     * @return int|null
     */
    public function getMembershipIdCreated()
    {
        return $this->container['membershipIdCreated'];
    }

    /**
     * Sets membershipIdCreated
     *
     * @param int|null $membershipIdCreated membershipIdCreated
     *
     * @return $this
     */
    public function setMembershipIdCreated($membershipIdCreated)
    {
        $this->container['membershipIdCreated'] = $membershipIdCreated;

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
     * Gets modificationDate
     *
     * @return \DateTime|null
     */
    public function getModificationDate()
    {
        return $this->container['modificationDate'];
    }

    /**
     * Sets modificationDate
     *
     * @param \DateTime|null $modificationDate modificationDate
     *
     * @return $this
     */
    public function setModificationDate($modificationDate)
    {
        $this->container['modificationDate'] = $modificationDate;

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
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * Gets isDefaultPostPublic
     *
     * @return bool|null
     */
    public function getIsDefaultPostPublic()
    {
        return $this->container['isDefaultPostPublic'];
    }

    /**
     * Sets isDefaultPostPublic
     *
     * @param bool|null $isDefaultPostPublic isDefaultPostPublic
     *
     * @return $this
     */
    public function setIsDefaultPostPublic($isDefaultPostPublic)
    {
        $this->container['isDefaultPostPublic'] = $isDefaultPostPublic;

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
        $this->container['chatSecurity'] = $chatSecurity;

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
        $this->container['homepage'] = $homepage;

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
        $this->container['membershipOption'] = $membershipOption;

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
        $this->container['defaultPublicity'] = $defaultPublicity;

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
     * Gets bannerPath
     *
     * @return string|null
     */
    public function getBannerPath()
    {
        return $this->container['bannerPath'];
    }

    /**
     * Sets bannerPath
     *
     * @param string|null $bannerPath bannerPath
     *
     * @return $this
     */
    public function setBannerPath($bannerPath)
    {
        $this->container['bannerPath'] = $bannerPath;

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
     * Gets conversationId
     *
     * @return int|null
     */
    public function getConversationId()
    {
        return $this->container['conversationId'];
    }

    /**
     * Sets conversationId
     *
     * @param int|null $conversationId conversationId
     *
     * @return $this
     */
    public function setConversationId($conversationId)
    {
        $this->container['conversationId'] = $conversationId;

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
     * Gets banExpireDate
     *
     * @return \DateTime|null
     */
    public function getBanExpireDate()
    {
        return $this->container['banExpireDate'];
    }

    /**
     * Sets banExpireDate
     *
     * @param \DateTime|null $banExpireDate banExpireDate
     *
     * @return $this
     */
    public function setBanExpireDate($banExpireDate)
    {
        $this->container['banExpireDate'] = $banExpireDate;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Bungie\Model\GroupsV2\GroupFeatures|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Bungie\Model\GroupsV2\GroupFeatures|null $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets clanInfo
     *
     * @return \Bungie\Model\GroupsV2\GroupV2ClanInfoAndInvestment|null
     */
    public function getClanInfo()
    {
        return $this->container['clanInfo'];
    }

    /**
     * Sets clanInfo
     *
     * @param \Bungie\Model\GroupsV2\GroupV2ClanInfoAndInvestment|null $clanInfo clanInfo
     *
     * @return $this
     */
    public function setClanInfo($clanInfo)
    {
        $this->container['clanInfo'] = $clanInfo;

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


