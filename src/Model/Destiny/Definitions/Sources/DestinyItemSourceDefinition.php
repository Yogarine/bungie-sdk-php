<?php
/**
 * DestinyItemSourceDefinition
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

namespace Bungie\Model\Destiny\Definitions\Sources;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemSourceDefinition Class Doc Comment
 *
 * @category Class
 * @description Properties of a DestinyInventoryItemDefinition that store all of the information we were able to discern about how the item spawns, and where you can find the item.  Items will have many of these sources, one per level at which it spawns, to try and give more granular data about where items spawn for specific level ranges.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSourceDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Sources.DestinyItemSourceDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'level' => 'int',
        'minQuality' => 'int',
        'maxQuality' => 'int',
        'minLevelRequired' => 'int',
        'maxLevelRequired' => 'int',
        'computedStats' => 'map[string,\Bungie\Model\Destiny\Definitions\DestinyInventoryItemStatDefinition]',
        'sourceHashes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'level' => 'int32',
        'minQuality' => 'int32',
        'maxQuality' => 'int32',
        'minLevelRequired' => 'int32',
        'maxLevelRequired' => 'int32',
        'computedStats' => null,
        'sourceHashes' => 'uint32'
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
        'level' => 'level',
        'minQuality' => 'minQuality',
        'maxQuality' => 'maxQuality',
        'minLevelRequired' => 'minLevelRequired',
        'maxLevelRequired' => 'maxLevelRequired',
        'computedStats' => 'computedStats',
        'sourceHashes' => 'sourceHashes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'level' => 'setLevel',
        'minQuality' => 'setMinQuality',
        'maxQuality' => 'setMaxQuality',
        'minLevelRequired' => 'setMinLevelRequired',
        'maxLevelRequired' => 'setMaxLevelRequired',
        'computedStats' => 'setComputedStats',
        'sourceHashes' => 'setSourceHashes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'level' => 'getLevel',
        'minQuality' => 'getMinQuality',
        'maxQuality' => 'getMaxQuality',
        'minLevelRequired' => 'getMinLevelRequired',
        'maxLevelRequired' => 'getMaxLevelRequired',
        'computedStats' => 'getComputedStats',
        'sourceHashes' => 'getSourceHashes'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['minQuality'] = isset($data['minQuality']) ? $data['minQuality'] : null;
        $this->container['maxQuality'] = isset($data['maxQuality']) ? $data['maxQuality'] : null;
        $this->container['minLevelRequired'] = isset($data['minLevelRequired']) ? $data['minLevelRequired'] : null;
        $this->container['maxLevelRequired'] = isset($data['maxLevelRequired']) ? $data['maxLevelRequired'] : null;
        $this->container['computedStats'] = isset($data['computedStats']) ? $data['computedStats'] : null;
        $this->container['sourceHashes'] = isset($data['sourceHashes']) ? $data['sourceHashes'] : null;
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
     * Gets level
     *
     * @return int|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int|null $level The level at which the item spawns. Essentially the Primary Key for this source data: there will be multiple of these source entries per item that has source data, grouped by the level at which the item spawns.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets minQuality
     *
     * @return int|null
     */
    public function getMinQuality()
    {
        return $this->container['minQuality'];
    }

    /**
     * Sets minQuality
     *
     * @param int|null $minQuality The minimum Quality at which the item spawns for this level. Examine DestinyInventoryItemDefinition for more information about what Quality means. Just don't ask Phaedrus about it, he'll never stop talking and you'll have to write a book about it.
     *
     * @return $this
     */
    public function setMinQuality($minQuality)
    {
        $this->container['minQuality'] = $minQuality;

        return $this;
    }

    /**
     * Gets maxQuality
     *
     * @return int|null
     */
    public function getMaxQuality()
    {
        return $this->container['maxQuality'];
    }

    /**
     * Sets maxQuality
     *
     * @param int|null $maxQuality The maximum quality at which the item spawns for this level.
     *
     * @return $this
     */
    public function setMaxQuality($maxQuality)
    {
        $this->container['maxQuality'] = $maxQuality;

        return $this;
    }

    /**
     * Gets minLevelRequired
     *
     * @return int|null
     */
    public function getMinLevelRequired()
    {
        return $this->container['minLevelRequired'];
    }

    /**
     * Sets minLevelRequired
     *
     * @param int|null $minLevelRequired The minimum Character Level required for equipping the item when the item spawns at the item level defined on this DestinyItemSourceDefinition, as far as we saw in our processing.
     *
     * @return $this
     */
    public function setMinLevelRequired($minLevelRequired)
    {
        $this->container['minLevelRequired'] = $minLevelRequired;

        return $this;
    }

    /**
     * Gets maxLevelRequired
     *
     * @return int|null
     */
    public function getMaxLevelRequired()
    {
        return $this->container['maxLevelRequired'];
    }

    /**
     * Sets maxLevelRequired
     *
     * @param int|null $maxLevelRequired The maximum Character Level required for equipping the item when the item spawns at the item level defined on this DestinyItemSourceDefinition, as far as we saw in our processing.
     *
     * @return $this
     */
    public function setMaxLevelRequired($maxLevelRequired)
    {
        $this->container['maxLevelRequired'] = $maxLevelRequired;

        return $this;
    }

    /**
     * Gets computedStats
     *
     * @return map[string,\Bungie\Model\Destiny\Definitions\DestinyInventoryItemStatDefinition]|null
     */
    public function getComputedStats()
    {
        return $this->container['computedStats'];
    }

    /**
     * Sets computedStats
     *
     * @param map[string,\Bungie\Model\Destiny\Definitions\DestinyInventoryItemStatDefinition]|null $computedStats The stats computed for this level/quality range.
     *
     * @return $this
     */
    public function setComputedStats($computedStats)
    {
        $this->container['computedStats'] = $computedStats;

        return $this;
    }

    /**
     * Gets sourceHashes
     *
     * @return int[]|null
     */
    public function getSourceHashes()
    {
        return $this->container['sourceHashes'];
    }

    /**
     * Sets sourceHashes
     *
     * @param int[]|null $sourceHashes The DestinyRewardSourceDefinitions found that can spawn the item at this level.
     *
     * @return $this
     */
    public function setSourceHashes($sourceHashes)
    {
        $this->container['sourceHashes'] = $sourceHashes;

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


