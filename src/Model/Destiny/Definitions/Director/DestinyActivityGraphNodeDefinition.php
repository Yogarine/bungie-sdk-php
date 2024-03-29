<?php
/**
 * DestinyActivityGraphNodeDefinition
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

namespace Bungie\Model\Destiny\Definitions\Director;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyActivityGraphNodeDefinition Class Doc Comment
 *
 * @category Class
 * @description This is the position and other data related to nodes in the activity graph that you can click to launch activities. An Activity Graph node will only have one active Activity at a time, which will determine the activity to be launched (and, unless overrideDisplay information is provided, will also determine the tooltip and other UI related to the node)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityGraphNodeDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Director.DestinyActivityGraphNodeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nodeId' => 'int',
        'overrideDisplay' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'position' => '\Bungie\Model\Destiny\Definitions\Common\DestinyPositionDefinition',
        'featuringStates' => '\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeFeaturingStateDefinition[]',
        'activities' => '\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeActivityDefinition[]',
        'states' => '\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeStateEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'nodeId' => 'uint32',
        'overrideDisplay' => null,
        'position' => null,
        'featuringStates' => null,
        'activities' => null,
        'states' => null
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
        'nodeId' => 'nodeId',
        'overrideDisplay' => 'overrideDisplay',
        'position' => 'position',
        'featuringStates' => 'featuringStates',
        'activities' => 'activities',
        'states' => 'states'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nodeId' => 'setNodeId',
        'overrideDisplay' => 'setOverrideDisplay',
        'position' => 'setPosition',
        'featuringStates' => 'setFeaturingStates',
        'activities' => 'setActivities',
        'states' => 'setStates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nodeId' => 'getNodeId',
        'overrideDisplay' => 'getOverrideDisplay',
        'position' => 'getPosition',
        'featuringStates' => 'getFeaturingStates',
        'activities' => 'getActivities',
        'states' => 'getStates'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['overrideDisplay'] = isset($data['overrideDisplay']) ? $data['overrideDisplay'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['featuringStates'] = isset($data['featuringStates']) ? $data['featuringStates'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
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
     * Gets nodeId
     *
     * @return int|null
     */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
     * Sets nodeId
     *
     * @param int|null $nodeId An identifier for the Activity Graph Node, only guaranteed to be unique within its parent Activity Graph.
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;

        return $this;
    }

    /**
     * Gets overrideDisplay
     *
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getOverrideDisplay()
    {
        return $this->container['overrideDisplay'];
    }

    /**
     * Sets overrideDisplay
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $overrideDisplay The node *may* have display properties that override the active Activity's display properties.
     *
     * @return $this
     */
    public function setOverrideDisplay($overrideDisplay)
    {
        $this->container['overrideDisplay'] = $overrideDisplay;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyPositionDefinition|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyPositionDefinition|null $position The position on the map for this node.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets featuringStates
     *
     * @return \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeFeaturingStateDefinition[]|null
     */
    public function getFeaturingStates()
    {
        return $this->container['featuringStates'];
    }

    /**
     * Sets featuringStates
     *
     * @param \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeFeaturingStateDefinition[]|null $featuringStates The node may have various visual accents placed on it, or styles applied. These are the list of possible styles that the Node can have. The game iterates through each, looking for the first one that passes a check of the required game/character/account state in order to show that style, and then renders the node in that style.
     *
     * @return $this
     */
    public function setFeaturingStates($featuringStates)
    {
        $this->container['featuringStates'] = $featuringStates;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeActivityDefinition[]|null
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeActivityDefinition[]|null $activities The node may have various possible activities that could be active for it, however only one may be active at a time. See the DestinyActivityGraphNodeActivityDefinition for details.
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeStateEntry[]|null
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeStateEntry[]|null $states Represents possible states that the graph node can be in. These are combined with some checking that happens in the game client and server to determine which state is actually active at any given time.
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

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


