<?php
/**
 * DestinyItemQualityBlockDefinition
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemQualityBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description An item&#39;s \&quot;Quality\&quot; determines its calculated stats. The Level at which the item spawns is combined with its \&quot;qualityLevel\&quot; along with some additional calculations to determine the value of those stats.  In Destiny 2, most items don&#39;t have default item levels and quality, making this property less useful: these apparently are almost always determined by the complex mechanisms of the Reward system rather than statically. They are still provided here in case they are still useful for people. This also contains some information about Infusion.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemQualityBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemQualityBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemLevels' => 'int[]',
        'qualityLevel' => 'int',
        'infusionCategoryName' => 'string',
        'infusionCategoryHash' => 'int',
        'infusionCategoryHashes' => 'int[]',
        'progressionLevelRequirementHash' => 'int',
        'currentVersion' => 'int',
        'versions' => '\Bungie\Model\Destiny\Definitions\DestinyItemVersionDefinition[]',
        'displayVersionWatermarkIcons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemLevels' => 'int32',
        'qualityLevel' => 'int32',
        'infusionCategoryName' => null,
        'infusionCategoryHash' => 'uint32',
        'infusionCategoryHashes' => 'uint32',
        'progressionLevelRequirementHash' => 'uint32',
        'currentVersion' => 'uint32',
        'versions' => null,
        'displayVersionWatermarkIcons' => null
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
        'itemLevels' => 'itemLevels',
        'qualityLevel' => 'qualityLevel',
        'infusionCategoryName' => 'infusionCategoryName',
        'infusionCategoryHash' => 'infusionCategoryHash',
        'infusionCategoryHashes' => 'infusionCategoryHashes',
        'progressionLevelRequirementHash' => 'progressionLevelRequirementHash',
        'currentVersion' => 'currentVersion',
        'versions' => 'versions',
        'displayVersionWatermarkIcons' => 'displayVersionWatermarkIcons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemLevels' => 'setItemLevels',
        'qualityLevel' => 'setQualityLevel',
        'infusionCategoryName' => 'setInfusionCategoryName',
        'infusionCategoryHash' => 'setInfusionCategoryHash',
        'infusionCategoryHashes' => 'setInfusionCategoryHashes',
        'progressionLevelRequirementHash' => 'setProgressionLevelRequirementHash',
        'currentVersion' => 'setCurrentVersion',
        'versions' => 'setVersions',
        'displayVersionWatermarkIcons' => 'setDisplayVersionWatermarkIcons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemLevels' => 'getItemLevels',
        'qualityLevel' => 'getQualityLevel',
        'infusionCategoryName' => 'getInfusionCategoryName',
        'infusionCategoryHash' => 'getInfusionCategoryHash',
        'infusionCategoryHashes' => 'getInfusionCategoryHashes',
        'progressionLevelRequirementHash' => 'getProgressionLevelRequirementHash',
        'currentVersion' => 'getCurrentVersion',
        'versions' => 'getVersions',
        'displayVersionWatermarkIcons' => 'getDisplayVersionWatermarkIcons'
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
        $this->container['itemLevels'] = isset($data['itemLevels']) ? $data['itemLevels'] : null;
        $this->container['qualityLevel'] = isset($data['qualityLevel']) ? $data['qualityLevel'] : null;
        $this->container['infusionCategoryName'] = isset($data['infusionCategoryName']) ? $data['infusionCategoryName'] : null;
        $this->container['infusionCategoryHash'] = isset($data['infusionCategoryHash']) ? $data['infusionCategoryHash'] : null;
        $this->container['infusionCategoryHashes'] = isset($data['infusionCategoryHashes']) ? $data['infusionCategoryHashes'] : null;
        $this->container['progressionLevelRequirementHash'] = isset($data['progressionLevelRequirementHash']) ? $data['progressionLevelRequirementHash'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['displayVersionWatermarkIcons'] = isset($data['displayVersionWatermarkIcons']) ? $data['displayVersionWatermarkIcons'] : null;
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
     * Gets itemLevels
     *
     * @return int[]|null
     */
    public function getItemLevels()
    {
        return $this->container['itemLevels'];
    }

    /**
     * Sets itemLevels
     *
     * @param int[]|null $itemLevels The \"base\" defined level of an item. This is a list because, in theory, each Expansion could define its own base level for an item.  In practice, not only was that never done in Destiny 1, but now this isn't even populated at all. When it's not populated, the level at which it spawns has to be inferred by Reward information, of which BNet receives an imperfect view and will only be reliable on instanced data as a result.
     *
     * @return $this
     */
    public function setItemLevels($itemLevels)
    {
        $this->container['itemLevels'] = $itemLevels;

        return $this;
    }

    /**
     * Gets qualityLevel
     *
     * @return int|null
     */
    public function getQualityLevel()
    {
        return $this->container['qualityLevel'];
    }

    /**
     * Sets qualityLevel
     *
     * @param int|null $qualityLevel qualityLevel is used in combination with the item's level to calculate stats like Attack and Defense. It plays a role in that calculation, but not nearly as large as itemLevel does.
     *
     * @return $this
     */
    public function setQualityLevel($qualityLevel)
    {
        $this->container['qualityLevel'] = $qualityLevel;

        return $this;
    }

    /**
     * Gets infusionCategoryName
     *
     * @return string|null
     */
    public function getInfusionCategoryName()
    {
        return $this->container['infusionCategoryName'];
    }

    /**
     * Sets infusionCategoryName
     *
     * @param string|null $infusionCategoryName The string identifier for this item's \"infusability\", if any.   Items that match the same infusionCategoryName are allowed to infuse with each other.  DEPRECATED: Items can now have multiple infusion categories. Please use infusionCategoryHashes instead.
     *
     * @return $this
     */
    public function setInfusionCategoryName($infusionCategoryName)
    {
        $this->container['infusionCategoryName'] = $infusionCategoryName;

        return $this;
    }

    /**
     * Gets infusionCategoryHash
     *
     * @return int|null
     */
    public function getInfusionCategoryHash()
    {
        return $this->container['infusionCategoryHash'];
    }

    /**
     * Sets infusionCategoryHash
     *
     * @param int|null $infusionCategoryHash The hash identifier for the infusion. It does not map to a Definition entity.  DEPRECATED: Items can now have multiple infusion categories. Please use infusionCategoryHashes instead.
     *
     * @return $this
     */
    public function setInfusionCategoryHash($infusionCategoryHash)
    {
        $this->container['infusionCategoryHash'] = $infusionCategoryHash;

        return $this;
    }

    /**
     * Gets infusionCategoryHashes
     *
     * @return int[]|null
     */
    public function getInfusionCategoryHashes()
    {
        return $this->container['infusionCategoryHashes'];
    }

    /**
     * Sets infusionCategoryHashes
     *
     * @param int[]|null $infusionCategoryHashes If any one of these hashes matches any value in another item's infusionCategoryHashes, the two can infuse with each other.
     *
     * @return $this
     */
    public function setInfusionCategoryHashes($infusionCategoryHashes)
    {
        $this->container['infusionCategoryHashes'] = $infusionCategoryHashes;

        return $this;
    }

    /**
     * Gets progressionLevelRequirementHash
     *
     * @return int|null
     */
    public function getProgressionLevelRequirementHash()
    {
        return $this->container['progressionLevelRequirementHash'];
    }

    /**
     * Sets progressionLevelRequirementHash
     *
     * @param int|null $progressionLevelRequirementHash An item can refer to pre-set level requirements. They are defined in DestinyProgressionLevelRequirementDefinition, and you can use this hash to find the appropriate definition.
     *
     * @return $this
     */
    public function setProgressionLevelRequirementHash($progressionLevelRequirementHash)
    {
        $this->container['progressionLevelRequirementHash'] = $progressionLevelRequirementHash;

        return $this;
    }

    /**
     * Gets currentVersion
     *
     * @return int|null
     */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
     * Sets currentVersion
     *
     * @param int|null $currentVersion The latest version available for this item.
     *
     * @return $this
     */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyItemVersionDefinition[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyItemVersionDefinition[]|null $versions The list of versions available for this item.
     *
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

        return $this;
    }

    /**
     * Gets displayVersionWatermarkIcons
     *
     * @return string[]|null
     */
    public function getDisplayVersionWatermarkIcons()
    {
        return $this->container['displayVersionWatermarkIcons'];
    }

    /**
     * Sets displayVersionWatermarkIcons
     *
     * @param string[]|null $displayVersionWatermarkIcons Icon overlays to denote the item version and power cap status.
     *
     * @return $this
     */
    public function setDisplayVersionWatermarkIcons($displayVersionWatermarkIcons)
    {
        $this->container['displayVersionWatermarkIcons'] = $displayVersionWatermarkIcons;

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


