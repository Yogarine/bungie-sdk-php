<?php
/**
 * DestinyHistoricalStatsDefinition
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
 * OpenAPI spec version: 2.3.4
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\HistoricalStats\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyHistoricalStatsDefinition Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyHistoricalStatsDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.Definitions.DestinyHistoricalStatsDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statId' => 'string',
        'group' => 'int',
        'periodTypes' => 'int[]',
        'modes' => 'int[]',
        'category' => 'int',
        'statName' => 'string',
        'statNameAbbr' => 'string',
        'statDescription' => 'string',
        'unitType' => 'int',
        'iconImage' => 'string',
        'mergeMethod' => 'int',
        'unitLabel' => 'string',
        'weight' => 'int',
        'medalTierHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statId' => null,
        'group' => 'int32',
        'periodTypes' => 'int32',
        'modes' => 'int32',
        'category' => 'int32',
        'statName' => null,
        'statNameAbbr' => null,
        'statDescription' => null,
        'unitType' => 'int32',
        'iconImage' => null,
        'mergeMethod' => 'int32',
        'unitLabel' => null,
        'weight' => 'int32',
        'medalTierHash' => 'uint32'
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
        'statId' => 'statId',
        'group' => 'group',
        'periodTypes' => 'periodTypes',
        'modes' => 'modes',
        'category' => 'category',
        'statName' => 'statName',
        'statNameAbbr' => 'statNameAbbr',
        'statDescription' => 'statDescription',
        'unitType' => 'unitType',
        'iconImage' => 'iconImage',
        'mergeMethod' => 'mergeMethod',
        'unitLabel' => 'unitLabel',
        'weight' => 'weight',
        'medalTierHash' => 'medalTierHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statId' => 'setStatId',
        'group' => 'setGroup',
        'periodTypes' => 'setPeriodTypes',
        'modes' => 'setModes',
        'category' => 'setCategory',
        'statName' => 'setStatName',
        'statNameAbbr' => 'setStatNameAbbr',
        'statDescription' => 'setStatDescription',
        'unitType' => 'setUnitType',
        'iconImage' => 'setIconImage',
        'mergeMethod' => 'setMergeMethod',
        'unitLabel' => 'setUnitLabel',
        'weight' => 'setWeight',
        'medalTierHash' => 'setMedalTierHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statId' => 'getStatId',
        'group' => 'getGroup',
        'periodTypes' => 'getPeriodTypes',
        'modes' => 'getModes',
        'category' => 'getCategory',
        'statName' => 'getStatName',
        'statNameAbbr' => 'getStatNameAbbr',
        'statDescription' => 'getStatDescription',
        'unitType' => 'getUnitType',
        'iconImage' => 'getIconImage',
        'mergeMethod' => 'getMergeMethod',
        'unitLabel' => 'getUnitLabel',
        'weight' => 'getWeight',
        'medalTierHash' => 'getMedalTierHash'
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

    const MERGE_METHOD_ADD = 0;
    const MERGE_METHOD_MIN = 1;
    const MERGE_METHOD_MAX = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMergeMethodAllowableValues()
    {
        return [
            self::MERGE_METHOD_ADD,
            self::MERGE_METHOD_MIN,
            self::MERGE_METHOD_MAX,
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
        $this->container['statId'] = isset($data['statId']) ? $data['statId'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['periodTypes'] = isset($data['periodTypes']) ? $data['periodTypes'] : null;
        $this->container['modes'] = isset($data['modes']) ? $data['modes'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['statName'] = isset($data['statName']) ? $data['statName'] : null;
        $this->container['statNameAbbr'] = isset($data['statNameAbbr']) ? $data['statNameAbbr'] : null;
        $this->container['statDescription'] = isset($data['statDescription']) ? $data['statDescription'] : null;
        $this->container['unitType'] = isset($data['unitType']) ? $data['unitType'] : null;
        $this->container['iconImage'] = isset($data['iconImage']) ? $data['iconImage'] : null;
        $this->container['mergeMethod'] = isset($data['mergeMethod']) ? $data['mergeMethod'] : null;
        $this->container['unitLabel'] = isset($data['unitLabel']) ? $data['unitLabel'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['medalTierHash'] = isset($data['medalTierHash']) ? $data['medalTierHash'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMergeMethodAllowableValues();
        if (!is_null($this->container['mergeMethod']) && !in_array($this->container['mergeMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mergeMethod', must be one of '%s'",
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
     * Gets statId
     *
     * @return string|null
     */
    public function getStatId()
    {
        return $this->container['statId'];
    }

    /**
     * Sets statId
     *
     * @param string|null $statId Unique programmer friendly ID for this stat
     *
     * @return $this
     */
    public function setStatId($statId)
    {
        $this->container['statId'] = $statId;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int|null $group Statistic group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets periodTypes
     *
     * @return int[]|null
     */
    public function getPeriodTypes()
    {
        return $this->container['periodTypes'];
    }

    /**
     * Sets periodTypes
     *
     * @param int[]|null $periodTypes Time periods the statistic covers
     *
     * @return $this
     */
    public function setPeriodTypes($periodTypes)
    {
        $this->container['periodTypes'] = $periodTypes;

        return $this;
    }

    /**
     * Gets modes
     *
     * @return int[]|null
     */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
     * Sets modes
     *
     * @param int[]|null $modes Game modes where this statistic can be reported.
     *
     * @return $this
     */
    public function setModes($modes)
    {
        $this->container['modes'] = $modes;

        return $this;
    }

    /**
     * Gets category
     *
     * @return int|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param int|null $category Category for the stat.
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets statName
     *
     * @return string|null
     */
    public function getStatName()
    {
        return $this->container['statName'];
    }

    /**
     * Sets statName
     *
     * @param string|null $statName Display name
     *
     * @return $this
     */
    public function setStatName($statName)
    {
        $this->container['statName'] = $statName;

        return $this;
    }

    /**
     * Gets statNameAbbr
     *
     * @return string|null
     */
    public function getStatNameAbbr()
    {
        return $this->container['statNameAbbr'];
    }

    /**
     * Sets statNameAbbr
     *
     * @param string|null $statNameAbbr Display name abbreviated
     *
     * @return $this
     */
    public function setStatNameAbbr($statNameAbbr)
    {
        $this->container['statNameAbbr'] = $statNameAbbr;

        return $this;
    }

    /**
     * Gets statDescription
     *
     * @return string|null
     */
    public function getStatDescription()
    {
        return $this->container['statDescription'];
    }

    /**
     * Sets statDescription
     *
     * @param string|null $statDescription Description of a stat if applicable.
     *
     * @return $this
     */
    public function setStatDescription($statDescription)
    {
        $this->container['statDescription'] = $statDescription;

        return $this;
    }

    /**
     * Gets unitType
     *
     * @return int|null
     */
    public function getUnitType()
    {
        return $this->container['unitType'];
    }

    /**
     * Sets unitType
     *
     * @param int|null $unitType Unit, if any, for the statistic
     *
     * @return $this
     */
    public function setUnitType($unitType)
    {
        $this->container['unitType'] = $unitType;

        return $this;
    }

    /**
     * Gets iconImage
     *
     * @return string|null
     */
    public function getIconImage()
    {
        return $this->container['iconImage'];
    }

    /**
     * Sets iconImage
     *
     * @param string|null $iconImage Optional URI to an icon for the statistic
     *
     * @return $this
     */
    public function setIconImage($iconImage)
    {
        $this->container['iconImage'] = $iconImage;

        return $this;
    }

    /**
     * Gets mergeMethod
     *
     * @return int|null
     */
    public function getMergeMethod()
    {
        return $this->container['mergeMethod'];
    }

    /**
     * Sets mergeMethod
     *
     * @param int|null $mergeMethod Optional icon for the statistic
     *
     * @return $this
     */
    public function setMergeMethod($mergeMethod)
    {
        $allowedValues = $this->getMergeMethodAllowableValues();
        if (!is_null($mergeMethod) && !in_array($mergeMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mergeMethod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mergeMethod'] = $mergeMethod;

        return $this;
    }

    /**
     * Gets unitLabel
     *
     * @return string|null
     */
    public function getUnitLabel()
    {
        return $this->container['unitLabel'];
    }

    /**
     * Sets unitLabel
     *
     * @param string|null $unitLabel Localized Unit Name for the stat.
     *
     * @return $this
     */
    public function setUnitLabel($unitLabel)
    {
        $this->container['unitLabel'] = $unitLabel;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int|null
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int|null $weight Weight assigned to this stat indicating its relative impressiveness.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets medalTierHash
     *
     * @return int|null
     */
    public function getMedalTierHash()
    {
        return $this->container['medalTierHash'];
    }

    /**
     * Sets medalTierHash
     *
     * @param int|null $medalTierHash The tier associated with this medal - be it implicitly or explicitly.
     *
     * @return $this
     */
    public function setMedalTierHash($medalTierHash)
    {
        $this->container['medalTierHash'] = $medalTierHash;

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


