<?php
/**
 * DestinyTalentNodeDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyTalentNodeDefinition Class Doc Comment
 *
 * @category Class
 * @description Talent Grids on items have Nodes. These nodes have positions in the talent grid&#39;s UI, and contain \&quot;Steps\&quot; (DestinyTalentNodeStepDefinition), one of whom will be the \&quot;Current\&quot; step.  The Current Step determines the visual properties of the node, as well as what the node grants when it is activated.  See DestinyTalentGridDefinition for a more complete overview of how Talent Grids work, and how they are used in Destiny 2 (and how they were used in Destiny 1).
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyTalentNodeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'nodeIndex' => 'int',
        'nodeHash' => 'int',
        'row' => 'int',
        'column' => 'int',
        'prerequisiteNodeIndexes' => '\Bungie\Model\int[]',
        'binaryPairNodeIndex' => 'int',
        'autoUnlocks' => 'bool',
        'lastStepRepeats' => 'bool',
        'isRandom' => 'bool',
        'randomActivationRequirement' => '\Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement',
        'isRandomRepurchasable' => 'bool',
        'steps' => '\Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyNodeStepDefinition[]',
        'exclusiveWithNodeHashes' => '\Bungie\Model\int[]',
        'randomStartProgressionBarAtProgression' => 'int',
        'layoutIdentifier' => 'string',
        'groupHash' => 'int',
        'loreHash' => 'int',
        'nodeStyleIdentifier' => 'string',
        'ignoreForCompletion' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'nodeIndex' => 'int32',
        'nodeHash' => 'uint32',
        'row' => 'int32',
        'column' => 'int32',
        'prerequisiteNodeIndexes' => 'int32',
        'binaryPairNodeIndex' => 'int32',
        'autoUnlocks' => null,
        'lastStepRepeats' => null,
        'isRandom' => null,
        'randomActivationRequirement' => null,
        'isRandomRepurchasable' => null,
        'steps' => null,
        'exclusiveWithNodeHashes' => 'uint32',
        'randomStartProgressionBarAtProgression' => 'int32',
        'layoutIdentifier' => null,
        'groupHash' => 'uint32',
        'loreHash' => 'uint32',
        'nodeStyleIdentifier' => null,
        'ignoreForCompletion' => null
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
        'row' => 'row',
        'column' => 'column',
        'prerequisiteNodeIndexes' => 'prerequisiteNodeIndexes',
        'binaryPairNodeIndex' => 'binaryPairNodeIndex',
        'autoUnlocks' => 'autoUnlocks',
        'lastStepRepeats' => 'lastStepRepeats',
        'isRandom' => 'isRandom',
        'randomActivationRequirement' => 'randomActivationRequirement',
        'isRandomRepurchasable' => 'isRandomRepurchasable',
        'steps' => 'steps',
        'exclusiveWithNodeHashes' => 'exclusiveWithNodeHashes',
        'randomStartProgressionBarAtProgression' => 'randomStartProgressionBarAtProgression',
        'layoutIdentifier' => 'layoutIdentifier',
        'groupHash' => 'groupHash',
        'loreHash' => 'loreHash',
        'nodeStyleIdentifier' => 'nodeStyleIdentifier',
        'ignoreForCompletion' => 'ignoreForCompletion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nodeIndex' => 'setNodeIndex',
        'nodeHash' => 'setNodeHash',
        'row' => 'setRow',
        'column' => 'setColumn',
        'prerequisiteNodeIndexes' => 'setPrerequisiteNodeIndexes',
        'binaryPairNodeIndex' => 'setBinaryPairNodeIndex',
        'autoUnlocks' => 'setAutoUnlocks',
        'lastStepRepeats' => 'setLastStepRepeats',
        'isRandom' => 'setIsRandom',
        'randomActivationRequirement' => 'setRandomActivationRequirement',
        'isRandomRepurchasable' => 'setIsRandomRepurchasable',
        'steps' => 'setSteps',
        'exclusiveWithNodeHashes' => 'setExclusiveWithNodeHashes',
        'randomStartProgressionBarAtProgression' => 'setRandomStartProgressionBarAtProgression',
        'layoutIdentifier' => 'setLayoutIdentifier',
        'groupHash' => 'setGroupHash',
        'loreHash' => 'setLoreHash',
        'nodeStyleIdentifier' => 'setNodeStyleIdentifier',
        'ignoreForCompletion' => 'setIgnoreForCompletion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nodeIndex' => 'getNodeIndex',
        'nodeHash' => 'getNodeHash',
        'row' => 'getRow',
        'column' => 'getColumn',
        'prerequisiteNodeIndexes' => 'getPrerequisiteNodeIndexes',
        'binaryPairNodeIndex' => 'getBinaryPairNodeIndex',
        'autoUnlocks' => 'getAutoUnlocks',
        'lastStepRepeats' => 'getLastStepRepeats',
        'isRandom' => 'getIsRandom',
        'randomActivationRequirement' => 'getRandomActivationRequirement',
        'isRandomRepurchasable' => 'getIsRandomRepurchasable',
        'steps' => 'getSteps',
        'exclusiveWithNodeHashes' => 'getExclusiveWithNodeHashes',
        'randomStartProgressionBarAtProgression' => 'getRandomStartProgressionBarAtProgression',
        'layoutIdentifier' => 'getLayoutIdentifier',
        'groupHash' => 'getGroupHash',
        'loreHash' => 'getLoreHash',
        'nodeStyleIdentifier' => 'getNodeStyleIdentifier',
        'ignoreForCompletion' => 'getIgnoreForCompletion'
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
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['prerequisiteNodeIndexes'] = isset($data['prerequisiteNodeIndexes']) ? $data['prerequisiteNodeIndexes'] : null;
        $this->container['binaryPairNodeIndex'] = isset($data['binaryPairNodeIndex']) ? $data['binaryPairNodeIndex'] : null;
        $this->container['autoUnlocks'] = isset($data['autoUnlocks']) ? $data['autoUnlocks'] : null;
        $this->container['lastStepRepeats'] = isset($data['lastStepRepeats']) ? $data['lastStepRepeats'] : null;
        $this->container['isRandom'] = isset($data['isRandom']) ? $data['isRandom'] : null;
        $this->container['randomActivationRequirement'] = isset($data['randomActivationRequirement']) ? $data['randomActivationRequirement'] : null;
        $this->container['isRandomRepurchasable'] = isset($data['isRandomRepurchasable']) ? $data['isRandomRepurchasable'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['exclusiveWithNodeHashes'] = isset($data['exclusiveWithNodeHashes']) ? $data['exclusiveWithNodeHashes'] : null;
        $this->container['randomStartProgressionBarAtProgression'] = isset($data['randomStartProgressionBarAtProgression']) ? $data['randomStartProgressionBarAtProgression'] : null;
        $this->container['layoutIdentifier'] = isset($data['layoutIdentifier']) ? $data['layoutIdentifier'] : null;
        $this->container['groupHash'] = isset($data['groupHash']) ? $data['groupHash'] : null;
        $this->container['loreHash'] = isset($data['loreHash']) ? $data['loreHash'] : null;
        $this->container['nodeStyleIdentifier'] = isset($data['nodeStyleIdentifier']) ? $data['nodeStyleIdentifier'] : null;
        $this->container['ignoreForCompletion'] = isset($data['ignoreForCompletion']) ? $data['ignoreForCompletion'] : null;
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
     * @param int|null $nodeIndex The index into the DestinyTalentGridDefinition's \"nodes\" property where this node is located. Used to uniquely identify the node within the Talent Grid. Note that this is content version dependent: make sure you have the latest version of content before trying to use these properties.
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
     * @param int|null $nodeHash The hash identifier for the node, which unfortunately is also content version dependent but can be (and ideally, should be) used instead of the nodeIndex to uniquely identify the node.  The two exist side-by-side for backcompat reasons due to the Great Talent Node Restructuring of Destiny 1, and I ran out of time to remove one of them and standardize on the other. Sorry!
     *
     * @return $this
     */
    public function setNodeHash($nodeHash)
    {
        $this->container['nodeHash'] = $nodeHash;

        return $this;
    }

    /**
     * Gets row
     *
     * @return int|null
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param int|null $row The visual \"row\" where the node should be shown in the UI. If negative, then the node is hidden.
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets column
     *
     * @return int|null
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     * @param int|null $column The visual \"column\" where the node should be shown in the UI. If negative, the node is hidden.
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }

    /**
     * Gets prerequisiteNodeIndexes
     *
     * @return \Bungie\Model\int[]|null
     */
    public function getPrerequisiteNodeIndexes()
    {
        return $this->container['prerequisiteNodeIndexes'];
    }

    /**
     * Sets prerequisiteNodeIndexes
     *
     * @param \Bungie\Model\int[]|null $prerequisiteNodeIndexes Indexes into the DestinyTalentGridDefinition.nodes property for any nodes that must be activated before this one is allowed to be activated.  I would have liked to change this to hashes for Destiny 2, but we have run out of time.
     *
     * @return $this
     */
    public function setPrerequisiteNodeIndexes($prerequisiteNodeIndexes)
    {
        $this->container['prerequisiteNodeIndexes'] = $prerequisiteNodeIndexes;

        return $this;
    }

    /**
     * Gets binaryPairNodeIndex
     *
     * @return int|null
     */
    public function getBinaryPairNodeIndex()
    {
        return $this->container['binaryPairNodeIndex'];
    }

    /**
     * Sets binaryPairNodeIndex
     *
     * @param int|null $binaryPairNodeIndex At one point, Talent Nodes supported the idea of \"Binary Pairs\": nodes that overlapped each other visually, and where activating one deactivated the other. They ended up not being used, mostly because Exclusive Sets are *almost* a superset of this concept, but the potential for it to be used still exists in theory.  If this is ever used, this will be the index into the DestinyTalentGridDefinition.nodes property for the node that is the binary pair match to this node. Activating one deactivates the other.
     *
     * @return $this
     */
    public function setBinaryPairNodeIndex($binaryPairNodeIndex)
    {
        $this->container['binaryPairNodeIndex'] = $binaryPairNodeIndex;

        return $this;
    }

    /**
     * Gets autoUnlocks
     *
     * @return bool|null
     */
    public function getAutoUnlocks()
    {
        return $this->container['autoUnlocks'];
    }

    /**
     * Sets autoUnlocks
     *
     * @param bool|null $autoUnlocks If true, this node will automatically unlock when the Talent Grid's level reaches the required level of the current step of this node.
     *
     * @return $this
     */
    public function setAutoUnlocks($autoUnlocks)
    {
        $this->container['autoUnlocks'] = $autoUnlocks;

        return $this;
    }

    /**
     * Gets lastStepRepeats
     *
     * @return bool|null
     */
    public function getLastStepRepeats()
    {
        return $this->container['lastStepRepeats'];
    }

    /**
     * Sets lastStepRepeats
     *
     * @param bool|null $lastStepRepeats At one point, Nodes were going to be able to be activated multiple times, changing the current step and potentially piling on multiple effects from the previously activated steps. This property would indicate if the last step could be activated multiple times.   This is not currently used, but it isn't out of the question that this could end up being used again in a theoretical future.
     *
     * @return $this
     */
    public function setLastStepRepeats($lastStepRepeats)
    {
        $this->container['lastStepRepeats'] = $lastStepRepeats;

        return $this;
    }

    /**
     * Gets isRandom
     *
     * @return bool|null
     */
    public function getIsRandom()
    {
        return $this->container['isRandom'];
    }

    /**
     * Sets isRandom
     *
     * @param bool|null $isRandom If this is true, the node's step is determined randomly rather than the first step being chosen.
     *
     * @return $this
     */
    public function setIsRandom($isRandom)
    {
        $this->container['isRandom'] = $isRandom;

        return $this;
    }

    /**
     * Gets randomActivationRequirement
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement|null
     */
    public function getRandomActivationRequirement()
    {
        return $this->container['randomActivationRequirement'];
    }

    /**
     * Sets randomActivationRequirement
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement|null $randomActivationRequirement At one point, you were going to be able to repurchase talent nodes that had random steps, to \"re-roll\" the current step of the node (and thus change the properties of your item). This was to be the activation requirement for performing that re-roll.  The system still exists to do this, as far as I know, so it may yet come back around!
     *
     * @return $this
     */
    public function setRandomActivationRequirement($randomActivationRequirement)
    {
        $this->container['randomActivationRequirement'] = $randomActivationRequirement;

        return $this;
    }

    /**
     * Gets isRandomRepurchasable
     *
     * @return bool|null
     */
    public function getIsRandomRepurchasable()
    {
        return $this->container['isRandomRepurchasable'];
    }

    /**
     * Sets isRandomRepurchasable
     *
     * @param bool|null $isRandomRepurchasable If this is true, the node can be \"re-rolled\" to acquire a different random current step. This is not used, but still exists for a theoretical future of talent grids.
     *
     * @return $this
     */
    public function setIsRandomRepurchasable($isRandomRepurchasable)
    {
        $this->container['isRandomRepurchasable'] = $isRandomRepurchasable;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyNodeStepDefinition[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyNodeStepDefinition[]|null $steps At this point, \"steps\" have been obfuscated into conceptual entities, aggregating the underlying notions of \"properties\" and \"true steps\".  If you need to know a step as it truly exists - such as when recreating Node logic when processing Vendor data - you'll have to use the \"realSteps\" property below.
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets exclusiveWithNodeHashes
     *
     * @return \Bungie\Model\int[]|null
     */
    public function getExclusiveWithNodeHashes()
    {
        return $this->container['exclusiveWithNodeHashes'];
    }

    /**
     * Sets exclusiveWithNodeHashes
     *
     * @param \Bungie\Model\int[]|null $exclusiveWithNodeHashes The nodeHash values for nodes that are in an Exclusive Set with this node.  See DestinyTalentGridDefinition.exclusiveSets for more info about exclusive sets.  Again, note that these are nodeHashes and *not* nodeIndexes.
     *
     * @return $this
     */
    public function setExclusiveWithNodeHashes($exclusiveWithNodeHashes)
    {
        $this->container['exclusiveWithNodeHashes'] = $exclusiveWithNodeHashes;

        return $this;
    }

    /**
     * Gets randomStartProgressionBarAtProgression
     *
     * @return int|null
     */
    public function getRandomStartProgressionBarAtProgression()
    {
        return $this->container['randomStartProgressionBarAtProgression'];
    }

    /**
     * Sets randomStartProgressionBarAtProgression
     *
     * @param int|null $randomStartProgressionBarAtProgression If the node's step is randomly selected, this is the amount of the Talent Grid's progression experience at which the progression bar for the node should be shown.
     *
     * @return $this
     */
    public function setRandomStartProgressionBarAtProgression($randomStartProgressionBarAtProgression)
    {
        $this->container['randomStartProgressionBarAtProgression'] = $randomStartProgressionBarAtProgression;

        return $this;
    }

    /**
     * Gets layoutIdentifier
     *
     * @return string|null
     */
    public function getLayoutIdentifier()
    {
        return $this->container['layoutIdentifier'];
    }

    /**
     * Sets layoutIdentifier
     *
     * @param string|null $layoutIdentifier A string identifier for a custom visual layout to apply to this talent node. Unfortunately, we do not have any data for rendering these custom layouts. It will be up to you to interpret these strings and change your UI if you want to have custom UI matching these layouts.
     *
     * @return $this
     */
    public function setLayoutIdentifier($layoutIdentifier)
    {
        $this->container['layoutIdentifier'] = $layoutIdentifier;

        return $this;
    }

    /**
     * Gets groupHash
     *
     * @return int|null
     */
    public function getGroupHash()
    {
        return $this->container['groupHash'];
    }

    /**
     * Sets groupHash
     *
     * @param int|null $groupHash As of Destiny 2, nodes can exist as part of \"Exclusive Groups\". These differ from exclusive sets in that, within the group, many nodes can be activated. But the act of activating any node in the group will cause \"opposing\" nodes (nodes in groups that are not allowed to be activated at the same time as this group) to deactivate.  See DestinyTalentExclusiveGroup for more information on the details. This is an identifier for this node's group, if it is part of one.
     *
     * @return $this
     */
    public function setGroupHash($groupHash)
    {
        $this->container['groupHash'] = $groupHash;

        return $this;
    }

    /**
     * Gets loreHash
     *
     * @return int|null
     */
    public function getLoreHash()
    {
        return $this->container['loreHash'];
    }

    /**
     * Sets loreHash
     *
     * @param int|null $loreHash Talent nodes can be associated with a piece of Lore, generally rendered in a tooltip. This is the hash identifier of the lore element to show, if there is one to be show.
     *
     * @return $this
     */
    public function setLoreHash($loreHash)
    {
        $this->container['loreHash'] = $loreHash;

        return $this;
    }

    /**
     * Gets nodeStyleIdentifier
     *
     * @return string|null
     */
    public function getNodeStyleIdentifier()
    {
        return $this->container['nodeStyleIdentifier'];
    }

    /**
     * Sets nodeStyleIdentifier
     *
     * @param string|null $nodeStyleIdentifier Comes from the talent grid node style: this identifier should be used to determine how to render the node in the UI.
     *
     * @return $this
     */
    public function setNodeStyleIdentifier($nodeStyleIdentifier)
    {
        $this->container['nodeStyleIdentifier'] = $nodeStyleIdentifier;

        return $this;
    }

    /**
     * Gets ignoreForCompletion
     *
     * @return bool|null
     */
    public function getIgnoreForCompletion()
    {
        return $this->container['ignoreForCompletion'];
    }

    /**
     * Sets ignoreForCompletion
     *
     * @param bool|null $ignoreForCompletion Comes from the talent grid node style: if true, then this node should be ignored for determining whether the grid is complete.
     *
     * @return $this
     */
    public function setIgnoreForCompletion($ignoreForCompletion)
    {
        $this->container['ignoreForCompletion'] = $ignoreForCompletion;

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


