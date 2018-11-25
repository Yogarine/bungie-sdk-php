<?php
/**
 * DestinyItemComponentSetOfuint32
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
 * DestinyItemComponentSetOfuint32 Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemComponentSetOfuint32 implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DestinyItemComponentSetOfuint32';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'instances' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent',
        'perks' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent',
        'renderData' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent',
        'stats' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent',
        'sockets' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent',
        'talentGrids' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent',
        'plugStates' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent',
        'objectives' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'instances' => null,
        'perks' => null,
        'renderData' => null,
        'stats' => null,
        'sockets' => null,
        'talentGrids' => null,
        'plugStates' => null,
        'objectives' => null
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
        'instances' => 'instances',
        'perks' => 'perks',
        'renderData' => 'renderData',
        'stats' => 'stats',
        'sockets' => 'sockets',
        'talentGrids' => 'talentGrids',
        'plugStates' => 'plugStates',
        'objectives' => 'objectives'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'instances' => 'setInstances',
        'perks' => 'setPerks',
        'renderData' => 'setRenderData',
        'stats' => 'setStats',
        'sockets' => 'setSockets',
        'talentGrids' => 'setTalentGrids',
        'plugStates' => 'setPlugStates',
        'objectives' => 'setObjectives'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'instances' => 'getInstances',
        'perks' => 'getPerks',
        'renderData' => 'getRenderData',
        'stats' => 'getStats',
        'sockets' => 'getSockets',
        'talentGrids' => 'getTalentGrids',
        'plugStates' => 'getPlugStates',
        'objectives' => 'getObjectives'
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
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['perks'] = isset($data['perks']) ? $data['perks'] : null;
        $this->container['renderData'] = isset($data['renderData']) ? $data['renderData'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['sockets'] = isset($data['sockets']) ? $data['sockets'] : null;
        $this->container['talentGrids'] = isset($data['talentGrids']) ? $data['talentGrids'] : null;
        $this->container['plugStates'] = isset($data['plugStates']) ? $data['plugStates'] : null;
        $this->container['objectives'] = isset($data['objectives']) ? $data['objectives'] : null;
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
     * Gets instances
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent|null
     */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
     * Sets instances
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemInstanceComponent|null $instances instances
     *
     * @return $this
     */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;

        return $this;
    }

    /**
     * Gets perks
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent|null
     */
    public function getPerks()
    {
        return $this->container['perks'];
    }

    /**
     * Sets perks
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPerksComponent|null $perks perks
     *
     * @return $this
     */
    public function setPerks($perks)
    {
        $this->container['perks'] = $perks;

        return $this;
    }

    /**
     * Gets renderData
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent|null
     */
    public function getRenderData()
    {
        return $this->container['renderData'];
    }

    /**
     * Sets renderData
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemRenderComponent|null $renderData renderData
     *
     * @return $this
     */
    public function setRenderData($renderData)
    {
        $this->container['renderData'] = $renderData;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemStatsComponent|null $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets sockets
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent|null
     */
    public function getSockets()
    {
        return $this->container['sockets'];
    }

    /**
     * Sets sockets
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemSocketsComponent|null $sockets sockets
     *
     * @return $this
     */
    public function setSockets($sockets)
    {
        $this->container['sockets'] = $sockets;

        return $this;
    }

    /**
     * Gets talentGrids
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent|null
     */
    public function getTalentGrids()
    {
        return $this->container['talentGrids'];
    }

    /**
     * Sets talentGrids
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemTalentGridComponent|null $talentGrids talentGrids
     *
     * @return $this
     */
    public function setTalentGrids($talentGrids)
    {
        $this->container['talentGrids'] = $talentGrids;

        return $this;
    }

    /**
     * Gets plugStates
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent|null
     */
    public function getPlugStates()
    {
        return $this->container['plugStates'];
    }

    /**
     * Sets plugStates
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemPlugComponent|null $plugStates plugStates
     *
     * @return $this
     */
    public function setPlugStates($plugStates)
    {
        $this->container['plugStates'] = $plugStates;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent|null $objectives objectives
     *
     * @return $this
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

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


