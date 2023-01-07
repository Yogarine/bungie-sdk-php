<?php
/**
 * DestinyNodeStepDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyNodeStepDefinition Class Doc Comment
 *
 * @category Class
 * @description This defines the properties of a \&quot;Talent Node Step\&quot;. When you see a talent node in game, the actual visible properties that you see (its icon, description, the perks and stats it provides) are not provided by the Node itself, but rather by the currently active Step on the node.  When a Talent Node is activated, the currently active step&#39;s benefits are conferred upon the item and character.  The currently active step on talent nodes are determined when an item is first instantiated. Sometimes it is random, sometimes it is more deterministic (particularly when a node has only a single step).  Note that, when dealing with Talent Node Steps, you must ensure that you have the latest version of content. stepIndex and nodeStepHash - two ways of identifying the step within a node - are both content version dependent, and thus are subject to change between content updates.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyNodeStepDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyNodeStepDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'stepIndex' => 'int',
        'nodeStepHash' => 'int',
        'interactionDescription' => 'string',
        'damageType' => 'int',
        'damageTypeHash' => 'int',
        'activationRequirement' => '\Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement',
        'canActivateNextStep' => 'bool',
        'nextStepIndex' => 'int',
        'isNextStepRandom' => 'bool',
        'perkHashes' => 'int[]',
        'startProgressionBarAtProgress' => 'int',
        'statHashes' => 'int[]',
        'affectsQuality' => 'bool',
        'stepGroups' => '\Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups',
        'affectsLevel' => 'bool',
        'socketReplacements' => '\Bungie\Model\Destiny\Definitions\DestinyNodeSocketReplaceResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'stepIndex' => 'int32',
        'nodeStepHash' => 'uint32',
        'interactionDescription' => null,
        'damageType' => 'int32',
        'damageTypeHash' => 'uint32',
        'activationRequirement' => null,
        'canActivateNextStep' => null,
        'nextStepIndex' => 'int32',
        'isNextStepRandom' => null,
        'perkHashes' => 'uint32',
        'startProgressionBarAtProgress' => 'int32',
        'statHashes' => 'uint32',
        'affectsQuality' => null,
        'stepGroups' => null,
        'affectsLevel' => null,
        'socketReplacements' => null
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
        'displayProperties' => 'displayProperties',
        'stepIndex' => 'stepIndex',
        'nodeStepHash' => 'nodeStepHash',
        'interactionDescription' => 'interactionDescription',
        'damageType' => 'damageType',
        'damageTypeHash' => 'damageTypeHash',
        'activationRequirement' => 'activationRequirement',
        'canActivateNextStep' => 'canActivateNextStep',
        'nextStepIndex' => 'nextStepIndex',
        'isNextStepRandom' => 'isNextStepRandom',
        'perkHashes' => 'perkHashes',
        'startProgressionBarAtProgress' => 'startProgressionBarAtProgress',
        'statHashes' => 'statHashes',
        'affectsQuality' => 'affectsQuality',
        'stepGroups' => 'stepGroups',
        'affectsLevel' => 'affectsLevel',
        'socketReplacements' => 'socketReplacements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayProperties' => 'setDisplayProperties',
        'stepIndex' => 'setStepIndex',
        'nodeStepHash' => 'setNodeStepHash',
        'interactionDescription' => 'setInteractionDescription',
        'damageType' => 'setDamageType',
        'damageTypeHash' => 'setDamageTypeHash',
        'activationRequirement' => 'setActivationRequirement',
        'canActivateNextStep' => 'setCanActivateNextStep',
        'nextStepIndex' => 'setNextStepIndex',
        'isNextStepRandom' => 'setIsNextStepRandom',
        'perkHashes' => 'setPerkHashes',
        'startProgressionBarAtProgress' => 'setStartProgressionBarAtProgress',
        'statHashes' => 'setStatHashes',
        'affectsQuality' => 'setAffectsQuality',
        'stepGroups' => 'setStepGroups',
        'affectsLevel' => 'setAffectsLevel',
        'socketReplacements' => 'setSocketReplacements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayProperties' => 'getDisplayProperties',
        'stepIndex' => 'getStepIndex',
        'nodeStepHash' => 'getNodeStepHash',
        'interactionDescription' => 'getInteractionDescription',
        'damageType' => 'getDamageType',
        'damageTypeHash' => 'getDamageTypeHash',
        'activationRequirement' => 'getActivationRequirement',
        'canActivateNextStep' => 'getCanActivateNextStep',
        'nextStepIndex' => 'getNextStepIndex',
        'isNextStepRandom' => 'getIsNextStepRandom',
        'perkHashes' => 'getPerkHashes',
        'startProgressionBarAtProgress' => 'getStartProgressionBarAtProgress',
        'statHashes' => 'getStatHashes',
        'affectsQuality' => 'getAffectsQuality',
        'stepGroups' => 'getStepGroups',
        'affectsLevel' => 'getAffectsLevel',
        'socketReplacements' => 'getSocketReplacements'
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
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['stepIndex'] = isset($data['stepIndex']) ? $data['stepIndex'] : null;
        $this->container['nodeStepHash'] = isset($data['nodeStepHash']) ? $data['nodeStepHash'] : null;
        $this->container['interactionDescription'] = isset($data['interactionDescription']) ? $data['interactionDescription'] : null;
        $this->container['damageType'] = isset($data['damageType']) ? $data['damageType'] : null;
        $this->container['damageTypeHash'] = isset($data['damageTypeHash']) ? $data['damageTypeHash'] : null;
        $this->container['activationRequirement'] = isset($data['activationRequirement']) ? $data['activationRequirement'] : null;
        $this->container['canActivateNextStep'] = isset($data['canActivateNextStep']) ? $data['canActivateNextStep'] : null;
        $this->container['nextStepIndex'] = isset($data['nextStepIndex']) ? $data['nextStepIndex'] : null;
        $this->container['isNextStepRandom'] = isset($data['isNextStepRandom']) ? $data['isNextStepRandom'] : null;
        $this->container['perkHashes'] = isset($data['perkHashes']) ? $data['perkHashes'] : null;
        $this->container['startProgressionBarAtProgress'] = isset($data['startProgressionBarAtProgress']) ? $data['startProgressionBarAtProgress'] : null;
        $this->container['statHashes'] = isset($data['statHashes']) ? $data['statHashes'] : null;
        $this->container['affectsQuality'] = isset($data['affectsQuality']) ? $data['affectsQuality'] : null;
        $this->container['stepGroups'] = isset($data['stepGroups']) ? $data['stepGroups'] : null;
        $this->container['affectsLevel'] = isset($data['affectsLevel']) ? $data['affectsLevel'] : null;
        $this->container['socketReplacements'] = isset($data['socketReplacements']) ? $data['socketReplacements'] : null;
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
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties These are the display properties actually used to render the Talent Node. The currently active step's displayProperties are shown.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

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
     * @param int|null $stepIndex The index of this step in the list of Steps on the Talent Node.  Unfortunately, this is the closest thing we have to an identifier for the Step: steps are not provided a content version agnostic identifier. This means that, when you are dealing with talent nodes, you will need to first ensure that you have the latest version of content.
     *
     * @return $this
     */
    public function setStepIndex($stepIndex)
    {
        $this->container['stepIndex'] = $stepIndex;

        return $this;
    }

    /**
     * Gets nodeStepHash
     *
     * @return int|null
     */
    public function getNodeStepHash()
    {
        return $this->container['nodeStepHash'];
    }

    /**
     * Sets nodeStepHash
     *
     * @param int|null $nodeStepHash The hash of this node step. Unfortunately, while it can be used to uniquely identify the step within a node, it is also content version dependent and should not be relied on without ensuring you have the latest vesion of content.
     *
     * @return $this
     */
    public function setNodeStepHash($nodeStepHash)
    {
        $this->container['nodeStepHash'] = $nodeStepHash;

        return $this;
    }

    /**
     * Gets interactionDescription
     *
     * @return string|null
     */
    public function getInteractionDescription()
    {
        return $this->container['interactionDescription'];
    }

    /**
     * Sets interactionDescription
     *
     * @param string|null $interactionDescription If you can interact with this node in some way, this is the localized description of that interaction.
     *
     * @return $this
     */
    public function setInteractionDescription($interactionDescription)
    {
        $this->container['interactionDescription'] = $interactionDescription;

        return $this;
    }

    /**
     * Gets damageType
     *
     * @return int|null
     */
    public function getDamageType()
    {
        return $this->container['damageType'];
    }

    /**
     * Sets damageType
     *
     * @param int|null $damageType An enum representing a damage type granted by activating this step, if any.
     *
     * @return $this
     */
    public function setDamageType($damageType)
    {
        $this->container['damageType'] = $damageType;

        return $this;
    }

    /**
     * Gets damageTypeHash
     *
     * @return int|null
     */
    public function getDamageTypeHash()
    {
        return $this->container['damageTypeHash'];
    }

    /**
     * Sets damageTypeHash
     *
     * @param int|null $damageTypeHash If the step provides a damage type, this will be the hash identifier used to look up the damage type's DestinyDamageTypeDefinition.
     *
     * @return $this
     */
    public function setDamageTypeHash($damageTypeHash)
    {
        $this->container['damageTypeHash'] = $damageTypeHash;

        return $this;
    }

    /**
     * Gets activationRequirement
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement|null
     */
    public function getActivationRequirement()
    {
        return $this->container['activationRequirement'];
    }

    /**
     * Sets activationRequirement
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyNodeActivationRequirement|null $activationRequirement If the step has requirements for activation (they almost always do, if nothing else than for the Talent Grid's Progression to have reached a certain level), they will be defined here.
     *
     * @return $this
     */
    public function setActivationRequirement($activationRequirement)
    {
        $this->container['activationRequirement'] = $activationRequirement;

        return $this;
    }

    /**
     * Gets canActivateNextStep
     *
     * @return bool|null
     */
    public function getCanActivateNextStep()
    {
        return $this->container['canActivateNextStep'];
    }

    /**
     * Sets canActivateNextStep
     *
     * @param bool|null $canActivateNextStep There was a time when talent nodes could be activated multiple times, and the effects of subsequent Steps would be compounded on each other, essentially \"upgrading\" the node. We have moved away from this, but theoretically the capability still exists.  I continue to return this in case it is used in the future: if true and this step is the current step in the node, you are allowed to activate the node a second time to receive the benefits of the next step in the node, which will then become the active step.
     *
     * @return $this
     */
    public function setCanActivateNextStep($canActivateNextStep)
    {
        $this->container['canActivateNextStep'] = $canActivateNextStep;

        return $this;
    }

    /**
     * Gets nextStepIndex
     *
     * @return int|null
     */
    public function getNextStepIndex()
    {
        return $this->container['nextStepIndex'];
    }

    /**
     * Sets nextStepIndex
     *
     * @param int|null $nextStepIndex The stepIndex of the next step in the talent node, or -1 if this is the last step or if the next step to be chosen is random.  This doesn't really matter anymore unless canActivateNextStep begins to be used again.
     *
     * @return $this
     */
    public function setNextStepIndex($nextStepIndex)
    {
        $this->container['nextStepIndex'] = $nextStepIndex;

        return $this;
    }

    /**
     * Gets isNextStepRandom
     *
     * @return bool|null
     */
    public function getIsNextStepRandom()
    {
        return $this->container['isNextStepRandom'];
    }

    /**
     * Sets isNextStepRandom
     *
     * @param bool|null $isNextStepRandom If true, the next step to be chosen is random, and if you're allowed to activate the next step. (if canActivateNextStep = true)
     *
     * @return $this
     */
    public function setIsNextStepRandom($isNextStepRandom)
    {
        $this->container['isNextStepRandom'] = $isNextStepRandom;

        return $this;
    }

    /**
     * Gets perkHashes
     *
     * @return int[]|null
     */
    public function getPerkHashes()
    {
        return $this->container['perkHashes'];
    }

    /**
     * Sets perkHashes
     *
     * @param int[]|null $perkHashes The list of hash identifiers for Perks (DestinySandboxPerkDefinition) that are applied when this step is active. Perks provide a variety of benefits and modifications - examine DestinySandboxPerkDefinition to learn more.
     *
     * @return $this
     */
    public function setPerkHashes($perkHashes)
    {
        $this->container['perkHashes'] = $perkHashes;

        return $this;
    }

    /**
     * Gets startProgressionBarAtProgress
     *
     * @return int|null
     */
    public function getStartProgressionBarAtProgress()
    {
        return $this->container['startProgressionBarAtProgress'];
    }

    /**
     * Sets startProgressionBarAtProgress
     *
     * @param int|null $startProgressionBarAtProgress When the Talent Grid's progression reaches this value, the circular \"progress bar\" that surrounds the talent node should be shown.  This also indicates the lower bound of said progress bar, with the upper bound being the progress required to reach activationRequirement.gridLevel. (at some point I should precalculate the upper bound and put it in the definition to save people time)
     *
     * @return $this
     */
    public function setStartProgressionBarAtProgress($startProgressionBarAtProgress)
    {
        $this->container['startProgressionBarAtProgress'] = $startProgressionBarAtProgress;

        return $this;
    }

    /**
     * Gets statHashes
     *
     * @return int[]|null
     */
    public function getStatHashes()
    {
        return $this->container['statHashes'];
    }

    /**
     * Sets statHashes
     *
     * @param int[]|null $statHashes When the step provides stat benefits on the item or character, this is the list of hash identifiers for stats (DestinyStatDefinition) that are provided.
     *
     * @return $this
     */
    public function setStatHashes($statHashes)
    {
        $this->container['statHashes'] = $statHashes;

        return $this;
    }

    /**
     * Gets affectsQuality
     *
     * @return bool|null
     */
    public function getAffectsQuality()
    {
        return $this->container['affectsQuality'];
    }

    /**
     * Sets affectsQuality
     *
     * @param bool|null $affectsQuality If this is true, the step affects the item's Quality in some way. See DestinyInventoryItemDefinition for more information about the meaning of Quality. I already made a joke about Zen and the Art of Motorcycle Maintenance elsewhere in the documentation, so I will avoid doing it again. Oops too late
     *
     * @return $this
     */
    public function setAffectsQuality($affectsQuality)
    {
        $this->container['affectsQuality'] = $affectsQuality;

        return $this;
    }

    /**
     * Gets stepGroups
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups|null
     */
    public function getStepGroups()
    {
        return $this->container['stepGroups'];
    }

    /**
     * Sets stepGroups
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups|null $stepGroups In Destiny 1, the Armory's Perk Filtering was driven by a concept of TalentNodeStepGroups: categorizations of talent nodes based on their functionality. While the Armory isn't a BNet-facing thing for now, and the new Armory will need to account for Sockets rather than Talent Nodes, this categorization capability feels useful enough to still keep around.
     *
     * @return $this
     */
    public function setStepGroups($stepGroups)
    {
        $this->container['stepGroups'] = $stepGroups;

        return $this;
    }

    /**
     * Gets affectsLevel
     *
     * @return bool|null
     */
    public function getAffectsLevel()
    {
        return $this->container['affectsLevel'];
    }

    /**
     * Sets affectsLevel
     *
     * @param bool|null $affectsLevel If true, this step can affect the level of the item. See DestinyInventoryItemDefintion for more information about item levels and their effect on stats.
     *
     * @return $this
     */
    public function setAffectsLevel($affectsLevel)
    {
        $this->container['affectsLevel'] = $affectsLevel;

        return $this;
    }

    /**
     * Gets socketReplacements
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyNodeSocketReplaceResponse[]|null
     */
    public function getSocketReplacements()
    {
        return $this->container['socketReplacements'];
    }

    /**
     * Sets socketReplacements
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyNodeSocketReplaceResponse[]|null $socketReplacements If this step is activated, this will be a list of information used to replace socket items with new Plugs. See DestinyInventoryItemDefinition for more information about sockets and plugs.
     *
     * @return $this
     */
    public function setSocketReplacements($socketReplacements)
    {
        $this->container['socketReplacements'] = $socketReplacements;

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


