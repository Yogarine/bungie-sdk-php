<?php
/**
 * DestinyResponsesDestinyItemResponse
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
 * DestinyResponsesDestinyItemResponse Class Doc Comment
 *
 * @category Class
 * @description The response object for retrieving an individual instanced item. None of these components are relevant for an item that doesn&#39;t have an \&quot;itemInstanceId\&quot;: for those, get your information from the DestinyInventoryDefinition.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyResponsesDestinyItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'characterId' => 'int',
        'item' => 'SingleComponentResponseOfDestinyItemComponent',
        'instance' => 'SingleComponentResponseOfDestinyItemInstanceComponent',
        'objectives' => 'SingleComponentResponseOfDestinyItemObjectivesComponent',
        'perks' => 'SingleComponentResponseOfDestinyItemPerksComponent',
        'renderData' => 'SingleComponentResponseOfDestinyItemRenderComponent',
        'stats' => 'SingleComponentResponseOfDestinyItemStatsComponent',
        'talentGrid' => 'SingleComponentResponseOfDestinyItemTalentGridComponent',
        'sockets' => 'SingleComponentResponseOfDestinyItemSocketsComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'characterId' => 'int64',
        'item' => null,
        'instance' => null,
        'objectives' => null,
        'perks' => null,
        'renderData' => null,
        'stats' => null,
        'talentGrid' => null,
        'sockets' => null
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
        'characterId' => 'characterId',
        'item' => 'item',
        'instance' => 'instance',
        'objectives' => 'objectives',
        'perks' => 'perks',
        'renderData' => 'renderData',
        'stats' => 'stats',
        'talentGrid' => 'talentGrid',
        'sockets' => 'sockets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'characterId' => 'setCharacterId',
        'item' => 'setItem',
        'instance' => 'setInstance',
        'objectives' => 'setObjectives',
        'perks' => 'setPerks',
        'renderData' => 'setRenderData',
        'stats' => 'setStats',
        'talentGrid' => 'setTalentGrid',
        'sockets' => 'setSockets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'characterId' => 'getCharacterId',
        'item' => 'getItem',
        'instance' => 'getInstance',
        'objectives' => 'getObjectives',
        'perks' => 'getPerks',
        'renderData' => 'getRenderData',
        'stats' => 'getStats',
        'talentGrid' => 'getTalentGrid',
        'sockets' => 'getSockets'
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
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['objectives'] = isset($data['objectives']) ? $data['objectives'] : null;
        $this->container['perks'] = isset($data['perks']) ? $data['perks'] : null;
        $this->container['renderData'] = isset($data['renderData']) ? $data['renderData'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['talentGrid'] = isset($data['talentGrid']) ? $data['talentGrid'] : null;
        $this->container['sockets'] = isset($data['sockets']) ? $data['sockets'] : null;
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
     * Gets characterId
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     *
     * @param int|null $characterId If the item is on a character, this will return the ID of the character that is holding the item.
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets item
     *
     * @return SingleComponentResponseOfDestinyItemComponent|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param SingleComponentResponseOfDestinyItemComponent|null $item Common data for the item relevant to its non-instanced properties.  COMPONENT TYPE: ItemCommonData
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets instance
     *
     * @return SingleComponentResponseOfDestinyItemInstanceComponent|null
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param SingleComponentResponseOfDestinyItemInstanceComponent|null $instance Basic instance data for the item.  COMPONENT TYPE: ItemInstances
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return SingleComponentResponseOfDestinyItemObjectivesComponent|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param SingleComponentResponseOfDestinyItemObjectivesComponent|null $objectives Information specifically about the item's objectives.  COMPONENT TYPE: ItemObjectives
     *
     * @return $this
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets perks
     *
     * @return SingleComponentResponseOfDestinyItemPerksComponent|null
     */
    public function getPerks()
    {
        return $this->container['perks'];
    }

    /**
     * Sets perks
     *
     * @param SingleComponentResponseOfDestinyItemPerksComponent|null $perks Information specifically about the perks currently active on the item.  COMPONENT TYPE: ItemPerks
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
     * @return SingleComponentResponseOfDestinyItemRenderComponent|null
     */
    public function getRenderData()
    {
        return $this->container['renderData'];
    }

    /**
     * Sets renderData
     *
     * @param SingleComponentResponseOfDestinyItemRenderComponent|null $renderData Information about how to render the item in 3D.  COMPONENT TYPE: ItemRenderData
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
     * @return SingleComponentResponseOfDestinyItemStatsComponent|null
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param SingleComponentResponseOfDestinyItemStatsComponent|null $stats Information about the computed stats of the item: power, defense, etc...  COMPONENT TYPE: ItemStats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets talentGrid
     *
     * @return SingleComponentResponseOfDestinyItemTalentGridComponent|null
     */
    public function getTalentGrid()
    {
        return $this->container['talentGrid'];
    }

    /**
     * Sets talentGrid
     *
     * @param SingleComponentResponseOfDestinyItemTalentGridComponent|null $talentGrid Information about the talent grid attached to the item. Talent nodes can provide a variety of benefits and abilities, and in Destiny 2 are used almost exclusively for the character's \"Builds\".  COMPONENT TYPE: ItemTalentGrids
     *
     * @return $this
     */
    public function setTalentGrid($talentGrid)
    {
        $this->container['talentGrid'] = $talentGrid;

        return $this;
    }

    /**
     * Gets sockets
     *
     * @return SingleComponentResponseOfDestinyItemSocketsComponent|null
     */
    public function getSockets()
    {
        return $this->container['sockets'];
    }

    /**
     * Sets sockets
     *
     * @param SingleComponentResponseOfDestinyItemSocketsComponent|null $sockets Information about the sockets of the item: which are currently active, what potential sockets you could have and the stats/abilities/perks you can gain from them.  COMPONENT TYPE: ItemSockets
     *
     * @return $this
     */
    public function setSockets($sockets)
    {
        $this->container['sockets'] = $sockets;

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


