<?php
/**
 * DestinyDefinitionsMilestonesDestinyMilestoneQuestDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyDefinitionsMilestonesDestinyMilestoneQuestDefinition Class Doc Comment
 *
 * @category Class
 * @description Any data we need to figure out whether this Quest Item is the currently active one for the conceptual Milestone. Even just typing this description, I already regret it.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsMilestonesDestinyMilestoneQuestDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'questItemHash' => 'int',
        'displayProperties' => 'object',
        'overrideImage' => 'string',
        'questRewards' => 'object',
        'activities' => 'map[string,\Bungie\Model\DestinyDefinitionsMilestonesDestinyMilestoneActivityDefinition]',
        'destinationHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'questItemHash' => 'uint32',
        'displayProperties' => null,
        'overrideImage' => null,
        'questRewards' => null,
        'activities' => null,
        'destinationHash' => 'uint32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'questItemHash' => 'questItemHash',
        'displayProperties' => 'displayProperties',
        'overrideImage' => 'overrideImage',
        'questRewards' => 'questRewards',
        'activities' => 'activities',
        'destinationHash' => 'destinationHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'questItemHash' => 'setQuestItemHash',
        'displayProperties' => 'setDisplayProperties',
        'overrideImage' => 'setOverrideImage',
        'questRewards' => 'setQuestRewards',
        'activities' => 'setActivities',
        'destinationHash' => 'setDestinationHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'questItemHash' => 'getQuestItemHash',
        'displayProperties' => 'getDisplayProperties',
        'overrideImage' => 'getOverrideImage',
        'questRewards' => 'getQuestRewards',
        'activities' => 'getActivities',
        'destinationHash' => 'getDestinationHash'
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
        return self::$swaggerModelName;
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
        $this->container['questItemHash'] = isset($data['questItemHash']) ? $data['questItemHash'] : null;
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['overrideImage'] = isset($data['overrideImage']) ? $data['overrideImage'] : null;
        $this->container['questRewards'] = isset($data['questRewards']) ? $data['questRewards'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['destinationHash'] = isset($data['destinationHash']) ? $data['destinationHash'] : null;
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

        return true;
    }


    /**
     * Gets questItemHash
     *
     * @return int
     */
    public function getQuestItemHash()
    {
        return $this->container['questItemHash'];
    }

    /**
     * Sets questItemHash
     *
     * @param int $questItemHash The item representing this Milestone quest. Use this hash to look up the DestinyInventoryItemDefinition for the quest to find its steps and human readable data.
     *
     * @return $this
     */
    public function setQuestItemHash($questItemHash)
    {
        $this->container['questItemHash'] = $questItemHash;

        return $this;
    }

    /**
     * Gets displayProperties
     *
     * @return object
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param object $displayProperties The individual quests may have different definitions from the overall milestone: if there's a specific active quest, use these displayProperties instead of that of the overall DestinyMilestoneDefinition.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets overrideImage
     *
     * @return string
     */
    public function getOverrideImage()
    {
        return $this->container['overrideImage'];
    }

    /**
     * Sets overrideImage
     *
     * @param string $overrideImage If populated, this image can be shown instead of the generic milestone's image when this quest is live, or it can be used to show a background image for the quest itself that differs from that of the Activity or the Milestone.
     *
     * @return $this
     */
    public function setOverrideImage($overrideImage)
    {
        $this->container['overrideImage'] = $overrideImage;

        return $this;
    }

    /**
     * Gets questRewards
     *
     * @return object
     */
    public function getQuestRewards()
    {
        return $this->container['questRewards'];
    }

    /**
     * Sets questRewards
     *
     * @param object $questRewards The rewards you will get for completing this quest, as best as we could extract them from our data. Sometimes, it'll be a decent amount of data. Sometimes, it's going to be sucky. Sorry.
     *
     * @return $this
     */
    public function setQuestRewards($questRewards)
    {
        $this->container['questRewards'] = $questRewards;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return map[string,\Bungie\Model\DestinyDefinitionsMilestonesDestinyMilestoneActivityDefinition]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param map[string,\Bungie\Model\DestinyDefinitionsMilestonesDestinyMilestoneActivityDefinition] $activities The full set of all possible \"conceptual activities\" that are related to this Milestone. Tiers or alternative modes of play within these conceptual activities will be defined as sub-entities. Keyed by the Conceptual Activity Hash. Use the key to look up DestinyActivityDefinition.
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets destinationHash
     *
     * @return int
     */
    public function getDestinationHash()
    {
        return $this->container['destinationHash'];
    }

    /**
     * Sets destinationHash
     *
     * @param int $destinationHash Sometimes, a Milestone's quest is related to an entire Destination rather than a specific activity. In that situation, this will be the hash of that Destination. Hotspots are currently the only Milestones that expose this data, but that does not preclude this data from being returned for other Milestones in the future.
     *
     * @return $this
     */
    public function setDestinationHash($destinationHash)
    {
        $this->container['destinationHash'] = $destinationHash;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


