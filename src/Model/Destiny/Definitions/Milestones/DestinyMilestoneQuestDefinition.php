<?php
/**
 * DestinyMilestoneQuestDefinition
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
 * OpenAPI spec version: 2.17.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneQuestDefinition Class Doc Comment
 *
 * @category Class
 * @description Any data we need to figure out whether this Quest Item is the currently active one for the conceptual Milestone. Even just typing this description, I already regret it.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneQuestDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Milestones.DestinyMilestoneQuestDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'questItemHash' => 'int',
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'overrideImage' => 'string',
        'questRewards' => '\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneQuestRewardsDefinition',
        'activities' => 'map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneActivityDefinition]',
        'destinationHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets questItemHash
     *
     * @return int|null
     */
    public function getQuestItemHash()
    {
        return $this->container['questItemHash'];
    }

    /**
     * Sets questItemHash
     *
     * @param int|null $questItemHash The item representing this Milestone quest. Use this hash to look up the DestinyInventoryItemDefinition for the quest to find its steps and human readable data.
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
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties The individual quests may have different definitions from the overall milestone: if there's a specific active quest, use these displayProperties instead of that of the overall DestinyMilestoneDefinition.
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
     * @return string|null
     */
    public function getOverrideImage()
    {
        return $this->container['overrideImage'];
    }

    /**
     * Sets overrideImage
     *
     * @param string|null $overrideImage If populated, this image can be shown instead of the generic milestone's image when this quest is live, or it can be used to show a background image for the quest itself that differs from that of the Activity or the Milestone.
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
     * @return \Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneQuestRewardsDefinition|null
     */
    public function getQuestRewards()
    {
        return $this->container['questRewards'];
    }

    /**
     * Sets questRewards
     *
     * @param \Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneQuestRewardsDefinition|null $questRewards The rewards you will get for completing this quest, as best as we could extract them from our data. Sometimes, it'll be a decent amount of data. Sometimes, it's going to be sucky. Sorry.
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
     * @return map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneActivityDefinition]|null
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneActivityDefinition]|null $activities The full set of all possible \"conceptual activities\" that are related to this Milestone. Tiers or alternative modes of play within these conceptual activities will be defined as sub-entities. Keyed by the Conceptual Activity Hash. Use the key to look up DestinyActivityDefinition.
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
     * @return int|null
     */
    public function getDestinationHash()
    {
        return $this->container['destinationHash'];
    }

    /**
     * Sets destinationHash
     *
     * @param int|null $destinationHash Sometimes, a Milestone's quest is related to an entire Destination rather than a specific activity. In that situation, this will be the hash of that Destination. Hotspots are currently the only Milestones that expose this data, but that does not preclude this data from being returned for other Milestones in the future.
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


