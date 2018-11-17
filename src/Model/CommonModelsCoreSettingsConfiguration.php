<?php
/**
 * CommonModelsCoreSettingsConfiguration
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

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * CommonModelsCoreSettingsConfiguration Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommonModelsCoreSettingsConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common.Models.CoreSettingsConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'systems' => 'map[string,\Bungie\Model\CommonModelsCoreSystem]',
        'ignoreReasons' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'forumCategories' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'groupAvatars' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'destinyMembershipTypes' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'recruitmentPlatformTags' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'recruitmentMiscTags' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'recruitmentActivities' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'userContentLocales' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'systemContentLocales' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerDecals' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerDecalColors' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerGonfalons' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerGonfalonColors' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerGonfalonDetails' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerGonfalonDetailColors' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'clanBannerStandards' => '\Bungie\Model\CommonModelsCoreSetting[]',
        'destiny2CoreSettings' => '\Bungie\Model\CommonModelsDestiny2CoreSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'systems' => null,
        'ignoreReasons' => null,
        'forumCategories' => null,
        'groupAvatars' => null,
        'destinyMembershipTypes' => null,
        'recruitmentPlatformTags' => null,
        'recruitmentMiscTags' => null,
        'recruitmentActivities' => null,
        'userContentLocales' => null,
        'systemContentLocales' => null,
        'clanBannerDecals' => null,
        'clanBannerDecalColors' => null,
        'clanBannerGonfalons' => null,
        'clanBannerGonfalonColors' => null,
        'clanBannerGonfalonDetails' => null,
        'clanBannerGonfalonDetailColors' => null,
        'clanBannerStandards' => null,
        'destiny2CoreSettings' => null
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
        'systems' => 'systems',
        'ignoreReasons' => 'ignoreReasons',
        'forumCategories' => 'forumCategories',
        'groupAvatars' => 'groupAvatars',
        'destinyMembershipTypes' => 'destinyMembershipTypes',
        'recruitmentPlatformTags' => 'recruitmentPlatformTags',
        'recruitmentMiscTags' => 'recruitmentMiscTags',
        'recruitmentActivities' => 'recruitmentActivities',
        'userContentLocales' => 'userContentLocales',
        'systemContentLocales' => 'systemContentLocales',
        'clanBannerDecals' => 'clanBannerDecals',
        'clanBannerDecalColors' => 'clanBannerDecalColors',
        'clanBannerGonfalons' => 'clanBannerGonfalons',
        'clanBannerGonfalonColors' => 'clanBannerGonfalonColors',
        'clanBannerGonfalonDetails' => 'clanBannerGonfalonDetails',
        'clanBannerGonfalonDetailColors' => 'clanBannerGonfalonDetailColors',
        'clanBannerStandards' => 'clanBannerStandards',
        'destiny2CoreSettings' => 'destiny2CoreSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'systems' => 'setSystems',
        'ignoreReasons' => 'setIgnoreReasons',
        'forumCategories' => 'setForumCategories',
        'groupAvatars' => 'setGroupAvatars',
        'destinyMembershipTypes' => 'setDestinyMembershipTypes',
        'recruitmentPlatformTags' => 'setRecruitmentPlatformTags',
        'recruitmentMiscTags' => 'setRecruitmentMiscTags',
        'recruitmentActivities' => 'setRecruitmentActivities',
        'userContentLocales' => 'setUserContentLocales',
        'systemContentLocales' => 'setSystemContentLocales',
        'clanBannerDecals' => 'setClanBannerDecals',
        'clanBannerDecalColors' => 'setClanBannerDecalColors',
        'clanBannerGonfalons' => 'setClanBannerGonfalons',
        'clanBannerGonfalonColors' => 'setClanBannerGonfalonColors',
        'clanBannerGonfalonDetails' => 'setClanBannerGonfalonDetails',
        'clanBannerGonfalonDetailColors' => 'setClanBannerGonfalonDetailColors',
        'clanBannerStandards' => 'setClanBannerStandards',
        'destiny2CoreSettings' => 'setDestiny2CoreSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'systems' => 'getSystems',
        'ignoreReasons' => 'getIgnoreReasons',
        'forumCategories' => 'getForumCategories',
        'groupAvatars' => 'getGroupAvatars',
        'destinyMembershipTypes' => 'getDestinyMembershipTypes',
        'recruitmentPlatformTags' => 'getRecruitmentPlatformTags',
        'recruitmentMiscTags' => 'getRecruitmentMiscTags',
        'recruitmentActivities' => 'getRecruitmentActivities',
        'userContentLocales' => 'getUserContentLocales',
        'systemContentLocales' => 'getSystemContentLocales',
        'clanBannerDecals' => 'getClanBannerDecals',
        'clanBannerDecalColors' => 'getClanBannerDecalColors',
        'clanBannerGonfalons' => 'getClanBannerGonfalons',
        'clanBannerGonfalonColors' => 'getClanBannerGonfalonColors',
        'clanBannerGonfalonDetails' => 'getClanBannerGonfalonDetails',
        'clanBannerGonfalonDetailColors' => 'getClanBannerGonfalonDetailColors',
        'clanBannerStandards' => 'getClanBannerStandards',
        'destiny2CoreSettings' => 'getDestiny2CoreSettings'
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
        $this->container['systems'] = isset($data['systems']) ? $data['systems'] : null;
        $this->container['ignoreReasons'] = isset($data['ignoreReasons']) ? $data['ignoreReasons'] : null;
        $this->container['forumCategories'] = isset($data['forumCategories']) ? $data['forumCategories'] : null;
        $this->container['groupAvatars'] = isset($data['groupAvatars']) ? $data['groupAvatars'] : null;
        $this->container['destinyMembershipTypes'] = isset($data['destinyMembershipTypes']) ? $data['destinyMembershipTypes'] : null;
        $this->container['recruitmentPlatformTags'] = isset($data['recruitmentPlatformTags']) ? $data['recruitmentPlatformTags'] : null;
        $this->container['recruitmentMiscTags'] = isset($data['recruitmentMiscTags']) ? $data['recruitmentMiscTags'] : null;
        $this->container['recruitmentActivities'] = isset($data['recruitmentActivities']) ? $data['recruitmentActivities'] : null;
        $this->container['userContentLocales'] = isset($data['userContentLocales']) ? $data['userContentLocales'] : null;
        $this->container['systemContentLocales'] = isset($data['systemContentLocales']) ? $data['systemContentLocales'] : null;
        $this->container['clanBannerDecals'] = isset($data['clanBannerDecals']) ? $data['clanBannerDecals'] : null;
        $this->container['clanBannerDecalColors'] = isset($data['clanBannerDecalColors']) ? $data['clanBannerDecalColors'] : null;
        $this->container['clanBannerGonfalons'] = isset($data['clanBannerGonfalons']) ? $data['clanBannerGonfalons'] : null;
        $this->container['clanBannerGonfalonColors'] = isset($data['clanBannerGonfalonColors']) ? $data['clanBannerGonfalonColors'] : null;
        $this->container['clanBannerGonfalonDetails'] = isset($data['clanBannerGonfalonDetails']) ? $data['clanBannerGonfalonDetails'] : null;
        $this->container['clanBannerGonfalonDetailColors'] = isset($data['clanBannerGonfalonDetailColors']) ? $data['clanBannerGonfalonDetailColors'] : null;
        $this->container['clanBannerStandards'] = isset($data['clanBannerStandards']) ? $data['clanBannerStandards'] : null;
        $this->container['destiny2CoreSettings'] = isset($data['destiny2CoreSettings']) ? $data['destiny2CoreSettings'] : null;
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
     * Gets systems
     *
     * @return map[string,\Bungie\Model\CommonModelsCoreSystem]|null
     */
    public function getSystems()
    {
        return $this->container['systems'];
    }

    /**
     * Sets systems
     *
     * @param map[string,\Bungie\Model\CommonModelsCoreSystem]|null $systems systems
     *
     * @return $this
     */
    public function setSystems($systems)
    {
        $this->container['systems'] = $systems;

        return $this;
    }

    /**
     * Gets ignoreReasons
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getIgnoreReasons()
    {
        return $this->container['ignoreReasons'];
    }

    /**
     * Sets ignoreReasons
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $ignoreReasons ignoreReasons
     *
     * @return $this
     */
    public function setIgnoreReasons($ignoreReasons)
    {
        $this->container['ignoreReasons'] = $ignoreReasons;

        return $this;
    }

    /**
     * Gets forumCategories
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getForumCategories()
    {
        return $this->container['forumCategories'];
    }

    /**
     * Sets forumCategories
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $forumCategories forumCategories
     *
     * @return $this
     */
    public function setForumCategories($forumCategories)
    {
        $this->container['forumCategories'] = $forumCategories;

        return $this;
    }

    /**
     * Gets groupAvatars
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getGroupAvatars()
    {
        return $this->container['groupAvatars'];
    }

    /**
     * Sets groupAvatars
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $groupAvatars groupAvatars
     *
     * @return $this
     */
    public function setGroupAvatars($groupAvatars)
    {
        $this->container['groupAvatars'] = $groupAvatars;

        return $this;
    }

    /**
     * Gets destinyMembershipTypes
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getDestinyMembershipTypes()
    {
        return $this->container['destinyMembershipTypes'];
    }

    /**
     * Sets destinyMembershipTypes
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $destinyMembershipTypes destinyMembershipTypes
     *
     * @return $this
     */
    public function setDestinyMembershipTypes($destinyMembershipTypes)
    {
        $this->container['destinyMembershipTypes'] = $destinyMembershipTypes;

        return $this;
    }

    /**
     * Gets recruitmentPlatformTags
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getRecruitmentPlatformTags()
    {
        return $this->container['recruitmentPlatformTags'];
    }

    /**
     * Sets recruitmentPlatformTags
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $recruitmentPlatformTags recruitmentPlatformTags
     *
     * @return $this
     */
    public function setRecruitmentPlatformTags($recruitmentPlatformTags)
    {
        $this->container['recruitmentPlatformTags'] = $recruitmentPlatformTags;

        return $this;
    }

    /**
     * Gets recruitmentMiscTags
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getRecruitmentMiscTags()
    {
        return $this->container['recruitmentMiscTags'];
    }

    /**
     * Sets recruitmentMiscTags
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $recruitmentMiscTags recruitmentMiscTags
     *
     * @return $this
     */
    public function setRecruitmentMiscTags($recruitmentMiscTags)
    {
        $this->container['recruitmentMiscTags'] = $recruitmentMiscTags;

        return $this;
    }

    /**
     * Gets recruitmentActivities
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getRecruitmentActivities()
    {
        return $this->container['recruitmentActivities'];
    }

    /**
     * Sets recruitmentActivities
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $recruitmentActivities recruitmentActivities
     *
     * @return $this
     */
    public function setRecruitmentActivities($recruitmentActivities)
    {
        $this->container['recruitmentActivities'] = $recruitmentActivities;

        return $this;
    }

    /**
     * Gets userContentLocales
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getUserContentLocales()
    {
        return $this->container['userContentLocales'];
    }

    /**
     * Sets userContentLocales
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $userContentLocales userContentLocales
     *
     * @return $this
     */
    public function setUserContentLocales($userContentLocales)
    {
        $this->container['userContentLocales'] = $userContentLocales;

        return $this;
    }

    /**
     * Gets systemContentLocales
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getSystemContentLocales()
    {
        return $this->container['systemContentLocales'];
    }

    /**
     * Sets systemContentLocales
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $systemContentLocales systemContentLocales
     *
     * @return $this
     */
    public function setSystemContentLocales($systemContentLocales)
    {
        $this->container['systemContentLocales'] = $systemContentLocales;

        return $this;
    }

    /**
     * Gets clanBannerDecals
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerDecals()
    {
        return $this->container['clanBannerDecals'];
    }

    /**
     * Sets clanBannerDecals
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerDecals clanBannerDecals
     *
     * @return $this
     */
    public function setClanBannerDecals($clanBannerDecals)
    {
        $this->container['clanBannerDecals'] = $clanBannerDecals;

        return $this;
    }

    /**
     * Gets clanBannerDecalColors
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerDecalColors()
    {
        return $this->container['clanBannerDecalColors'];
    }

    /**
     * Sets clanBannerDecalColors
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerDecalColors clanBannerDecalColors
     *
     * @return $this
     */
    public function setClanBannerDecalColors($clanBannerDecalColors)
    {
        $this->container['clanBannerDecalColors'] = $clanBannerDecalColors;

        return $this;
    }

    /**
     * Gets clanBannerGonfalons
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerGonfalons()
    {
        return $this->container['clanBannerGonfalons'];
    }

    /**
     * Sets clanBannerGonfalons
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerGonfalons clanBannerGonfalons
     *
     * @return $this
     */
    public function setClanBannerGonfalons($clanBannerGonfalons)
    {
        $this->container['clanBannerGonfalons'] = $clanBannerGonfalons;

        return $this;
    }

    /**
     * Gets clanBannerGonfalonColors
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerGonfalonColors()
    {
        return $this->container['clanBannerGonfalonColors'];
    }

    /**
     * Sets clanBannerGonfalonColors
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerGonfalonColors clanBannerGonfalonColors
     *
     * @return $this
     */
    public function setClanBannerGonfalonColors($clanBannerGonfalonColors)
    {
        $this->container['clanBannerGonfalonColors'] = $clanBannerGonfalonColors;

        return $this;
    }

    /**
     * Gets clanBannerGonfalonDetails
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerGonfalonDetails()
    {
        return $this->container['clanBannerGonfalonDetails'];
    }

    /**
     * Sets clanBannerGonfalonDetails
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerGonfalonDetails clanBannerGonfalonDetails
     *
     * @return $this
     */
    public function setClanBannerGonfalonDetails($clanBannerGonfalonDetails)
    {
        $this->container['clanBannerGonfalonDetails'] = $clanBannerGonfalonDetails;

        return $this;
    }

    /**
     * Gets clanBannerGonfalonDetailColors
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerGonfalonDetailColors()
    {
        return $this->container['clanBannerGonfalonDetailColors'];
    }

    /**
     * Sets clanBannerGonfalonDetailColors
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerGonfalonDetailColors clanBannerGonfalonDetailColors
     *
     * @return $this
     */
    public function setClanBannerGonfalonDetailColors($clanBannerGonfalonDetailColors)
    {
        $this->container['clanBannerGonfalonDetailColors'] = $clanBannerGonfalonDetailColors;

        return $this;
    }

    /**
     * Gets clanBannerStandards
     *
     * @return \Bungie\Model\CommonModelsCoreSetting[]|null
     */
    public function getClanBannerStandards()
    {
        return $this->container['clanBannerStandards'];
    }

    /**
     * Sets clanBannerStandards
     *
     * @param \Bungie\Model\CommonModelsCoreSetting[]|null $clanBannerStandards clanBannerStandards
     *
     * @return $this
     */
    public function setClanBannerStandards($clanBannerStandards)
    {
        $this->container['clanBannerStandards'] = $clanBannerStandards;

        return $this;
    }

    /**
     * Gets destiny2CoreSettings
     *
     * @return \Bungie\Model\CommonModelsDestiny2CoreSettings|null
     */
    public function getDestiny2CoreSettings()
    {
        return $this->container['destiny2CoreSettings'];
    }

    /**
     * Sets destiny2CoreSettings
     *
     * @param \Bungie\Model\CommonModelsDestiny2CoreSettings|null $destiny2CoreSettings destiny2CoreSettings
     *
     * @return $this
     */
    public function setDestiny2CoreSettings($destiny2CoreSettings)
    {
        $this->container['destiny2CoreSettings'] = $destiny2CoreSettings;

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


