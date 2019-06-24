<?php
/**
 * GeneralUser
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

namespace Bungie\Model\User;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * GeneralUser Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GeneralUser implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.GeneralUser';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membershipId' => 'int',
        'uniqueName' => 'string',
        'normalizedName' => 'string',
        'displayName' => 'string',
        'profilePicture' => 'int',
        'profileTheme' => 'int',
        'userTitle' => 'int',
        'successMessageFlags' => 'int',
        'isDeleted' => 'bool',
        'about' => 'string',
        'firstAccess' => '\DateTime',
        'lastUpdate' => '\DateTime',
        'legacyPortalUID' => 'int',
        'context' => '\Bungie\Model\User\UserToUserContext',
        'psnDisplayName' => 'string',
        'xboxDisplayName' => 'string',
        'fbDisplayName' => 'string',
        'showActivity' => 'bool',
        'locale' => 'string',
        'localeInheritDefault' => 'bool',
        'lastBanReportId' => 'int',
        'showGroupMessaging' => 'bool',
        'profilePicturePath' => 'string',
        'profilePictureWidePath' => 'string',
        'profileThemeName' => 'string',
        'userTitleDisplay' => 'string',
        'statusText' => 'string',
        'statusDate' => '\DateTime',
        'profileBanExpire' => '\DateTime',
        'blizzardDisplayName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'membershipId' => 'int64',
        'uniqueName' => null,
        'normalizedName' => null,
        'displayName' => null,
        'profilePicture' => 'int32',
        'profileTheme' => 'int32',
        'userTitle' => 'int32',
        'successMessageFlags' => 'int64',
        'isDeleted' => null,
        'about' => null,
        'firstAccess' => 'date-time',
        'lastUpdate' => 'date-time',
        'legacyPortalUID' => 'int64',
        'context' => null,
        'psnDisplayName' => null,
        'xboxDisplayName' => null,
        'fbDisplayName' => null,
        'showActivity' => null,
        'locale' => null,
        'localeInheritDefault' => null,
        'lastBanReportId' => 'int64',
        'showGroupMessaging' => null,
        'profilePicturePath' => null,
        'profilePictureWidePath' => null,
        'profileThemeName' => null,
        'userTitleDisplay' => null,
        'statusText' => null,
        'statusDate' => 'date-time',
        'profileBanExpire' => 'date-time',
        'blizzardDisplayName' => null
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
        'uniqueName' => 'uniqueName',
        'normalizedName' => 'normalizedName',
        'displayName' => 'displayName',
        'profilePicture' => 'profilePicture',
        'profileTheme' => 'profileTheme',
        'userTitle' => 'userTitle',
        'successMessageFlags' => 'successMessageFlags',
        'isDeleted' => 'isDeleted',
        'about' => 'about',
        'firstAccess' => 'firstAccess',
        'lastUpdate' => 'lastUpdate',
        'legacyPortalUID' => 'legacyPortalUID',
        'context' => 'context',
        'psnDisplayName' => 'psnDisplayName',
        'xboxDisplayName' => 'xboxDisplayName',
        'fbDisplayName' => 'fbDisplayName',
        'showActivity' => 'showActivity',
        'locale' => 'locale',
        'localeInheritDefault' => 'localeInheritDefault',
        'lastBanReportId' => 'lastBanReportId',
        'showGroupMessaging' => 'showGroupMessaging',
        'profilePicturePath' => 'profilePicturePath',
        'profilePictureWidePath' => 'profilePictureWidePath',
        'profileThemeName' => 'profileThemeName',
        'userTitleDisplay' => 'userTitleDisplay',
        'statusText' => 'statusText',
        'statusDate' => 'statusDate',
        'profileBanExpire' => 'profileBanExpire',
        'blizzardDisplayName' => 'blizzardDisplayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membershipId' => 'setMembershipId',
        'uniqueName' => 'setUniqueName',
        'normalizedName' => 'setNormalizedName',
        'displayName' => 'setDisplayName',
        'profilePicture' => 'setProfilePicture',
        'profileTheme' => 'setProfileTheme',
        'userTitle' => 'setUserTitle',
        'successMessageFlags' => 'setSuccessMessageFlags',
        'isDeleted' => 'setIsDeleted',
        'about' => 'setAbout',
        'firstAccess' => 'setFirstAccess',
        'lastUpdate' => 'setLastUpdate',
        'legacyPortalUID' => 'setLegacyPortalUID',
        'context' => 'setContext',
        'psnDisplayName' => 'setPsnDisplayName',
        'xboxDisplayName' => 'setXboxDisplayName',
        'fbDisplayName' => 'setFbDisplayName',
        'showActivity' => 'setShowActivity',
        'locale' => 'setLocale',
        'localeInheritDefault' => 'setLocaleInheritDefault',
        'lastBanReportId' => 'setLastBanReportId',
        'showGroupMessaging' => 'setShowGroupMessaging',
        'profilePicturePath' => 'setProfilePicturePath',
        'profilePictureWidePath' => 'setProfilePictureWidePath',
        'profileThemeName' => 'setProfileThemeName',
        'userTitleDisplay' => 'setUserTitleDisplay',
        'statusText' => 'setStatusText',
        'statusDate' => 'setStatusDate',
        'profileBanExpire' => 'setProfileBanExpire',
        'blizzardDisplayName' => 'setBlizzardDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membershipId' => 'getMembershipId',
        'uniqueName' => 'getUniqueName',
        'normalizedName' => 'getNormalizedName',
        'displayName' => 'getDisplayName',
        'profilePicture' => 'getProfilePicture',
        'profileTheme' => 'getProfileTheme',
        'userTitle' => 'getUserTitle',
        'successMessageFlags' => 'getSuccessMessageFlags',
        'isDeleted' => 'getIsDeleted',
        'about' => 'getAbout',
        'firstAccess' => 'getFirstAccess',
        'lastUpdate' => 'getLastUpdate',
        'legacyPortalUID' => 'getLegacyPortalUID',
        'context' => 'getContext',
        'psnDisplayName' => 'getPsnDisplayName',
        'xboxDisplayName' => 'getXboxDisplayName',
        'fbDisplayName' => 'getFbDisplayName',
        'showActivity' => 'getShowActivity',
        'locale' => 'getLocale',
        'localeInheritDefault' => 'getLocaleInheritDefault',
        'lastBanReportId' => 'getLastBanReportId',
        'showGroupMessaging' => 'getShowGroupMessaging',
        'profilePicturePath' => 'getProfilePicturePath',
        'profilePictureWidePath' => 'getProfilePictureWidePath',
        'profileThemeName' => 'getProfileThemeName',
        'userTitleDisplay' => 'getUserTitleDisplay',
        'statusText' => 'getStatusText',
        'statusDate' => 'getStatusDate',
        'profileBanExpire' => 'getProfileBanExpire',
        'blizzardDisplayName' => 'getBlizzardDisplayName'
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
        $this->container['uniqueName'] = isset($data['uniqueName']) ? $data['uniqueName'] : null;
        $this->container['normalizedName'] = isset($data['normalizedName']) ? $data['normalizedName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['profilePicture'] = isset($data['profilePicture']) ? $data['profilePicture'] : null;
        $this->container['profileTheme'] = isset($data['profileTheme']) ? $data['profileTheme'] : null;
        $this->container['userTitle'] = isset($data['userTitle']) ? $data['userTitle'] : null;
        $this->container['successMessageFlags'] = isset($data['successMessageFlags']) ? $data['successMessageFlags'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['about'] = isset($data['about']) ? $data['about'] : null;
        $this->container['firstAccess'] = isset($data['firstAccess']) ? $data['firstAccess'] : null;
        $this->container['lastUpdate'] = isset($data['lastUpdate']) ? $data['lastUpdate'] : null;
        $this->container['legacyPortalUID'] = isset($data['legacyPortalUID']) ? $data['legacyPortalUID'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['psnDisplayName'] = isset($data['psnDisplayName']) ? $data['psnDisplayName'] : null;
        $this->container['xboxDisplayName'] = isset($data['xboxDisplayName']) ? $data['xboxDisplayName'] : null;
        $this->container['fbDisplayName'] = isset($data['fbDisplayName']) ? $data['fbDisplayName'] : null;
        $this->container['showActivity'] = isset($data['showActivity']) ? $data['showActivity'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['localeInheritDefault'] = isset($data['localeInheritDefault']) ? $data['localeInheritDefault'] : null;
        $this->container['lastBanReportId'] = isset($data['lastBanReportId']) ? $data['lastBanReportId'] : null;
        $this->container['showGroupMessaging'] = isset($data['showGroupMessaging']) ? $data['showGroupMessaging'] : null;
        $this->container['profilePicturePath'] = isset($data['profilePicturePath']) ? $data['profilePicturePath'] : null;
        $this->container['profilePictureWidePath'] = isset($data['profilePictureWidePath']) ? $data['profilePictureWidePath'] : null;
        $this->container['profileThemeName'] = isset($data['profileThemeName']) ? $data['profileThemeName'] : null;
        $this->container['userTitleDisplay'] = isset($data['userTitleDisplay']) ? $data['userTitleDisplay'] : null;
        $this->container['statusText'] = isset($data['statusText']) ? $data['statusText'] : null;
        $this->container['statusDate'] = isset($data['statusDate']) ? $data['statusDate'] : null;
        $this->container['profileBanExpire'] = isset($data['profileBanExpire']) ? $data['profileBanExpire'] : null;
        $this->container['blizzardDisplayName'] = isset($data['blizzardDisplayName']) ? $data['blizzardDisplayName'] : null;
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
     * @param int|null $membershipId membershipId
     *
     * @return $this
     */
    public function setMembershipId($membershipId)
    {
        $this->container['membershipId'] = $membershipId;

        return $this;
    }

    /**
     * Gets uniqueName
     *
     * @return string|null
     */
    public function getUniqueName()
    {
        return $this->container['uniqueName'];
    }

    /**
     * Sets uniqueName
     *
     * @param string|null $uniqueName uniqueName
     *
     * @return $this
     */
    public function setUniqueName($uniqueName)
    {
        $this->container['uniqueName'] = $uniqueName;

        return $this;
    }

    /**
     * Gets normalizedName
     *
     * @return string|null
     */
    public function getNormalizedName()
    {
        return $this->container['normalizedName'];
    }

    /**
     * Sets normalizedName
     *
     * @param string|null $normalizedName normalizedName
     *
     * @return $this
     */
    public function setNormalizedName($normalizedName)
    {
        $this->container['normalizedName'] = $normalizedName;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets profilePicture
     *
     * @return int|null
     */
    public function getProfilePicture()
    {
        return $this->container['profilePicture'];
    }

    /**
     * Sets profilePicture
     *
     * @param int|null $profilePicture profilePicture
     *
     * @return $this
     */
    public function setProfilePicture($profilePicture)
    {
        $this->container['profilePicture'] = $profilePicture;

        return $this;
    }

    /**
     * Gets profileTheme
     *
     * @return int|null
     */
    public function getProfileTheme()
    {
        return $this->container['profileTheme'];
    }

    /**
     * Sets profileTheme
     *
     * @param int|null $profileTheme profileTheme
     *
     * @return $this
     */
    public function setProfileTheme($profileTheme)
    {
        $this->container['profileTheme'] = $profileTheme;

        return $this;
    }

    /**
     * Gets userTitle
     *
     * @return int|null
     */
    public function getUserTitle()
    {
        return $this->container['userTitle'];
    }

    /**
     * Sets userTitle
     *
     * @param int|null $userTitle userTitle
     *
     * @return $this
     */
    public function setUserTitle($userTitle)
    {
        $this->container['userTitle'] = $userTitle;

        return $this;
    }

    /**
     * Gets successMessageFlags
     *
     * @return int|null
     */
    public function getSuccessMessageFlags()
    {
        return $this->container['successMessageFlags'];
    }

    /**
     * Sets successMessageFlags
     *
     * @param int|null $successMessageFlags successMessageFlags
     *
     * @return $this
     */
    public function setSuccessMessageFlags($successMessageFlags)
    {
        $this->container['successMessageFlags'] = $successMessageFlags;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|null $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

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
     * Gets firstAccess
     *
     * @return \DateTime|null
     */
    public function getFirstAccess()
    {
        return $this->container['firstAccess'];
    }

    /**
     * Sets firstAccess
     *
     * @param \DateTime|null $firstAccess firstAccess
     *
     * @return $this
     */
    public function setFirstAccess($firstAccess)
    {
        $this->container['firstAccess'] = $firstAccess;

        return $this;
    }

    /**
     * Gets lastUpdate
     *
     * @return \DateTime|null
     */
    public function getLastUpdate()
    {
        return $this->container['lastUpdate'];
    }

    /**
     * Sets lastUpdate
     *
     * @param \DateTime|null $lastUpdate lastUpdate
     *
     * @return $this
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->container['lastUpdate'] = $lastUpdate;

        return $this;
    }

    /**
     * Gets legacyPortalUID
     *
     * @return int|null
     */
    public function getLegacyPortalUID()
    {
        return $this->container['legacyPortalUID'];
    }

    /**
     * Sets legacyPortalUID
     *
     * @param int|null $legacyPortalUID legacyPortalUID
     *
     * @return $this
     */
    public function setLegacyPortalUID($legacyPortalUID)
    {
        $this->container['legacyPortalUID'] = $legacyPortalUID;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \Bungie\Model\User\UserToUserContext|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \Bungie\Model\User\UserToUserContext|null $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets psnDisplayName
     *
     * @return string|null
     */
    public function getPsnDisplayName()
    {
        return $this->container['psnDisplayName'];
    }

    /**
     * Sets psnDisplayName
     *
     * @param string|null $psnDisplayName psnDisplayName
     *
     * @return $this
     */
    public function setPsnDisplayName($psnDisplayName)
    {
        $this->container['psnDisplayName'] = $psnDisplayName;

        return $this;
    }

    /**
     * Gets xboxDisplayName
     *
     * @return string|null
     */
    public function getXboxDisplayName()
    {
        return $this->container['xboxDisplayName'];
    }

    /**
     * Sets xboxDisplayName
     *
     * @param string|null $xboxDisplayName xboxDisplayName
     *
     * @return $this
     */
    public function setXboxDisplayName($xboxDisplayName)
    {
        $this->container['xboxDisplayName'] = $xboxDisplayName;

        return $this;
    }

    /**
     * Gets fbDisplayName
     *
     * @return string|null
     */
    public function getFbDisplayName()
    {
        return $this->container['fbDisplayName'];
    }

    /**
     * Sets fbDisplayName
     *
     * @param string|null $fbDisplayName fbDisplayName
     *
     * @return $this
     */
    public function setFbDisplayName($fbDisplayName)
    {
        $this->container['fbDisplayName'] = $fbDisplayName;

        return $this;
    }

    /**
     * Gets showActivity
     *
     * @return bool|null
     */
    public function getShowActivity()
    {
        return $this->container['showActivity'];
    }

    /**
     * Sets showActivity
     *
     * @param bool|null $showActivity showActivity
     *
     * @return $this
     */
    public function setShowActivity($showActivity)
    {
        $this->container['showActivity'] = $showActivity;

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
     * Gets localeInheritDefault
     *
     * @return bool|null
     */
    public function getLocaleInheritDefault()
    {
        return $this->container['localeInheritDefault'];
    }

    /**
     * Sets localeInheritDefault
     *
     * @param bool|null $localeInheritDefault localeInheritDefault
     *
     * @return $this
     */
    public function setLocaleInheritDefault($localeInheritDefault)
    {
        $this->container['localeInheritDefault'] = $localeInheritDefault;

        return $this;
    }

    /**
     * Gets lastBanReportId
     *
     * @return int|null
     */
    public function getLastBanReportId()
    {
        return $this->container['lastBanReportId'];
    }

    /**
     * Sets lastBanReportId
     *
     * @param int|null $lastBanReportId lastBanReportId
     *
     * @return $this
     */
    public function setLastBanReportId($lastBanReportId)
    {
        $this->container['lastBanReportId'] = $lastBanReportId;

        return $this;
    }

    /**
     * Gets showGroupMessaging
     *
     * @return bool|null
     */
    public function getShowGroupMessaging()
    {
        return $this->container['showGroupMessaging'];
    }

    /**
     * Sets showGroupMessaging
     *
     * @param bool|null $showGroupMessaging showGroupMessaging
     *
     * @return $this
     */
    public function setShowGroupMessaging($showGroupMessaging)
    {
        $this->container['showGroupMessaging'] = $showGroupMessaging;

        return $this;
    }

    /**
     * Gets profilePicturePath
     *
     * @return string|null
     */
    public function getProfilePicturePath()
    {
        return $this->container['profilePicturePath'];
    }

    /**
     * Sets profilePicturePath
     *
     * @param string|null $profilePicturePath profilePicturePath
     *
     * @return $this
     */
    public function setProfilePicturePath($profilePicturePath)
    {
        $this->container['profilePicturePath'] = $profilePicturePath;

        return $this;
    }

    /**
     * Gets profilePictureWidePath
     *
     * @return string|null
     */
    public function getProfilePictureWidePath()
    {
        return $this->container['profilePictureWidePath'];
    }

    /**
     * Sets profilePictureWidePath
     *
     * @param string|null $profilePictureWidePath profilePictureWidePath
     *
     * @return $this
     */
    public function setProfilePictureWidePath($profilePictureWidePath)
    {
        $this->container['profilePictureWidePath'] = $profilePictureWidePath;

        return $this;
    }

    /**
     * Gets profileThemeName
     *
     * @return string|null
     */
    public function getProfileThemeName()
    {
        return $this->container['profileThemeName'];
    }

    /**
     * Sets profileThemeName
     *
     * @param string|null $profileThemeName profileThemeName
     *
     * @return $this
     */
    public function setProfileThemeName($profileThemeName)
    {
        $this->container['profileThemeName'] = $profileThemeName;

        return $this;
    }

    /**
     * Gets userTitleDisplay
     *
     * @return string|null
     */
    public function getUserTitleDisplay()
    {
        return $this->container['userTitleDisplay'];
    }

    /**
     * Sets userTitleDisplay
     *
     * @param string|null $userTitleDisplay userTitleDisplay
     *
     * @return $this
     */
    public function setUserTitleDisplay($userTitleDisplay)
    {
        $this->container['userTitleDisplay'] = $userTitleDisplay;

        return $this;
    }

    /**
     * Gets statusText
     *
     * @return string|null
     */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
     * Sets statusText
     *
     * @param string|null $statusText statusText
     *
     * @return $this
     */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;

        return $this;
    }

    /**
     * Gets statusDate
     *
     * @return \DateTime|null
     */
    public function getStatusDate()
    {
        return $this->container['statusDate'];
    }

    /**
     * Sets statusDate
     *
     * @param \DateTime|null $statusDate statusDate
     *
     * @return $this
     */
    public function setStatusDate($statusDate)
    {
        $this->container['statusDate'] = $statusDate;

        return $this;
    }

    /**
     * Gets profileBanExpire
     *
     * @return \DateTime|null
     */
    public function getProfileBanExpire()
    {
        return $this->container['profileBanExpire'];
    }

    /**
     * Sets profileBanExpire
     *
     * @param \DateTime|null $profileBanExpire profileBanExpire
     *
     * @return $this
     */
    public function setProfileBanExpire($profileBanExpire)
    {
        $this->container['profileBanExpire'] = $profileBanExpire;

        return $this;
    }

    /**
     * Gets blizzardDisplayName
     *
     * @return string|null
     */
    public function getBlizzardDisplayName()
    {
        return $this->container['blizzardDisplayName'];
    }

    /**
     * Sets blizzardDisplayName
     *
     * @param string|null $blizzardDisplayName blizzardDisplayName
     *
     * @return $this
     */
    public function setBlizzardDisplayName($blizzardDisplayName)
    {
        $this->container['blizzardDisplayName'] = $blizzardDisplayName;

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


