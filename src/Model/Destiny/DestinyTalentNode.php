<?php
/**
 * DestinyTalentNode
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

namespace Bungie\Model\Destiny;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyTalentNode Class Doc Comment
 *
 * @category Class
 * @description I see you&#39;ve come to find out more about Talent Nodes. I&#39;m so sorry. Talent Nodes are the conceptual, visual nodes that appear on Talent Grids. Talent Grids, in Destiny 1, were found on almost every instanced item: they had Nodes that could be activated to change the properties of the item. In Destiny 2, Talent Grids only exist for Builds/Subclasses, and while the basic concept is the same (Nodes can be activated once you&#39;ve gained sufficient Experience on the Item, and provide effects), there are some new concepts from Destiny 1. Examine DestinyTalentGridDefinition and its subordinates for more information. This is the \&quot;Live\&quot; information for the current status of a Talent Node on a specific item. Talent Nodes have many Steps, but only one can be active at any one time: and it is the Step that determines both the visual and the game state-changing properties that the Node provides. Examine this and DestinyTalentNodeStepDefinition carefully. *IMPORTANT NOTE* Talent Nodes are, unfortunately, Content Version DEPENDENT. Though they refer to hashes for Nodes and Steps, those hashes are not guaranteed to be immutable across content versions. This is a source of great exasperation for me, but as a result anyone using Talent Grid data must ensure that the content version of their static content matches that of the server responses before showing or making decisions based on talent grid data.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNode implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.DestinyTalentNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nodeIndex' => 'int',
        'nodeHash' => 'int',
        'state' => 'int',
        'isActivated' => 'bool',
        'stepIndex' => 'int',
        'materialsToUpgrade' => '\Bungie\Model\Destiny\Definitions\DestinyMaterialRequirement[]',
        'activationGridLevel' => 'int',
        'progressPercent' => 'float',
        'hidden' => 'bool',
        'nodeStatsBlock' => '\Bungie\Model\Destiny\DestinyTalentNodeStatBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'nodeIndex' => 'int32',
        'nodeHash' => 'uint32',
        'state' => 'int32',
        'isActivated' => null,
        'stepIndex' => 'int32',
        'materialsToUpgrade' => null,
        'activationGridLevel' => 'int32',
        'progressPercent' => 'float',
        'hidden' => null,
        'nodeStatsBlock' => null
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
        'nodeIndex' => 'nodeIndex',
        'nodeHash' => 'nodeHash',
        'state' => 'state',
        'isActivated' => 'isActivated',
        'stepIndex' => 'stepIndex',
        'materialsToUpgrade' => 'materialsToUpgrade',
        'activationGridLevel' => 'activationGridLevel',
        'progressPercent' => 'progressPercent',
        'hidden' => 'hidden',
        'nodeStatsBlock' => 'nodeStatsBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nodeIndex' => 'setNodeIndex',
        'nodeHash' => 'setNodeHash',
        'state' => 'setState',
        'isActivated' => 'setIsActivated',
        'stepIndex' => 'setStepIndex',
        'materialsToUpgrade' => 'setMaterialsToUpgrade',
        'activationGridLevel' => 'setActivationGridLevel',
        'progressPercent' => 'setProgressPercent',
        'hidden' => 'setHidden',
        'nodeStatsBlock' => 'setNodeStatsBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nodeIndex' => 'getNodeIndex',
        'nodeHash' => 'getNodeHash',
        'state' => 'getState',
        'isActivated' => 'getIsActivated',
        'stepIndex' => 'getStepIndex',
        'materialsToUpgrade' => 'getMaterialsToUpgrade',
        'activationGridLevel' => 'getActivationGridLevel',
        'progressPercent' => 'getProgressPercent',
        'hidden' => 'getHidden',
        'nodeStatsBlock' => 'getNodeStatsBlock'
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
        $this->container['nodeIndex'] = isset($data['nodeIndex']) ? $data['nodeIndex'] : null;
        $this->container['nodeHash'] = isset($data['nodeHash']) ? $data['nodeHash'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['isActivated'] = isset($data['isActivated']) ? $data['isActivated'] : null;
        $this->container['stepIndex'] = isset($data['stepIndex']) ? $data['stepIndex'] : null;
        $this->container['materialsToUpgrade'] = isset($data['materialsToUpgrade']) ? $data['materialsToUpgrade'] : null;
        $this->container['activationGridLevel'] = isset($data['activationGridLevel']) ? $data['activationGridLevel'] : null;
        $this->container['progressPercent'] = isset($data['progressPercent']) ? $data['progressPercent'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['nodeStatsBlock'] = isset($data['nodeStatsBlock']) ? $data['nodeStatsBlock'] : null;
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
     * Gets nodeIndex
     *
     * @return int|null
     */
    public function getNodeIndex()
    {
        return $this->container['nodeIndex'];
    }

    /**
     * Sets nodeIndex
     *
     * @param int|null $nodeIndex The index of the Talent Node being referred to (an index into DestinyTalentGridDefinition.nodes[]). CONTENT VERSION DEPENDENT.
     *
     * @return $this
     */
    public function setNodeIndex($nodeIndex)
    {
        $this->container['nodeIndex'] = $nodeIndex;

        return $this;
    }

    /**
     * Gets nodeHash
     *
     * @return int|null
     */
    public function getNodeHash()
    {
        return $this->container['nodeHash'];
    }

    /**
     * Sets nodeHash
     *
     * @param int|null $nodeHash The hash of the Talent Node being referred to (in DestinyTalentGridDefinition.nodes). Deceptively CONTENT VERSION DEPENDENT. We have no guarantee of the hash's immutability between content versions.
     *
     * @return $this
     */
    public function setNodeHash($nodeHash)
    {
        $this->container['nodeHash'] = $nodeHash;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int|null $state An DestinyTalentNodeState enum value indicating the node's state: whether it can be activated or swapped, and why not if neither can be performed.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets isActivated
     *
     * @return bool|null
     */
    public function getIsActivated()
    {
        return $this->container['isActivated'];
    }

    /**
     * Sets isActivated
     *
     * @param bool|null $isActivated If true, the node is activated: it's current step then provides its benefits.
     *
     * @return $this
     */
    public function setIsActivated($isActivated)
    {
        $this->container['isActivated'] = $isActivated;

        return $this;
    }

    /**
     * Gets stepIndex
     *
     * @return int|null
     */
    public function getStepIndex()
    {
        return $this->container['stepIndex'];
    }

    /**
     * Sets stepIndex
     *
     * @param int|null $stepIndex The currently relevant Step for the node. It is this step that has rendering data for the node and the benefits that are provided if the node is activated. (the actual rules for benefits provided are extremely complicated in theory, but with how Talent Grids are being used in Destiny 2 you don't have to worry about a lot of those old Destiny 1 rules.) This is an index into: DestinyTalentGridDefinition.nodes[nodeIndex].steps[stepIndex]
     *
     * @return $this
     */
    public function setStepIndex($stepIndex)
    {
        $this->container['stepIndex'] = $stepIndex;

        return $this;
    }

    /**
     * Gets materialsToUpgrade
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyMaterialRequirement[]|null
     */
    public function getMaterialsToUpgrade()
    {
        return $this->container['materialsToUpgrade'];
    }

    /**
     * Sets materialsToUpgrade
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyMaterialRequirement[]|null $materialsToUpgrade If the node has material requirements to be activated, this is the list of those requirements.
     *
     * @return $this
     */
    public function setMaterialsToUpgrade($materialsToUpgrade)
    {
        $this->container['materialsToUpgrade'] = $materialsToUpgrade;

        return $this;
    }

    /**
     * Gets activationGridLevel
     *
     * @return int|null
     */
    public function getActivationGridLevel()
    {
        return $this->container['activationGridLevel'];
    }

    /**
     * Sets activationGridLevel
     *
     * @param int|null $activationGridLevel The progression level required on the Talent Grid in order to be able to activate this talent node. Talent Grids have their own Progression - similar to Character Level, but in this case it is experience related to the item itself.
     *
     * @return $this
     */
    public function setActivationGridLevel($activationGridLevel)
    {
        $this->container['activationGridLevel'] = $activationGridLevel;

        return $this;
    }

    /**
     * Gets progressPercent
     *
     * @return float|null
     */
    public function getProgressPercent()
    {
        return $this->container['progressPercent'];
    }

    /**
     * Sets progressPercent
     *
     * @param float|null $progressPercent If you want to show a progress bar or circle for how close this talent node is to being activate-able, this is the percentage to show. It follows the node's underlying rules about when the progress bar should first show up, and when it should be filled.
     *
     * @return $this
     */
    public function setProgressPercent($progressPercent)
    {
        $this->container['progressPercent'] = $progressPercent;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden Whether or not the talent node is actually visible in the game's UI. Whether you want to show it in your own UI is up to you! I'm not gonna tell you who to sock it to.
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets nodeStatsBlock
     *
     * @return \Bungie\Model\Destiny\DestinyTalentNodeStatBlock|null
     */
    public function getNodeStatsBlock()
    {
        return $this->container['nodeStatsBlock'];
    }

    /**
     * Sets nodeStatsBlock
     *
     * @param \Bungie\Model\Destiny\DestinyTalentNodeStatBlock|null $nodeStatsBlock This property has some history. A talent grid can provide stats on both the item it's related to and the character equipping the item. This returns data about those stat bonuses.
     *
     * @return $this
     */
    public function setNodeStatsBlock($nodeStatsBlock)
    {
        $this->container['nodeStatsBlock'] = $nodeStatsBlock;

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


