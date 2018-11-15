<?php
/**
 * DestinyDefinitionsDestinyTalentGridDefinition
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
 * DestinyDefinitionsDestinyTalentGridDefinition Class Doc Comment
 *
 * @category Class
 * @description The time has unfortunately come to talk about Talent Grids.  Talent Grids are the most complex and unintuitive part of the Destiny Definition data. Grab a cup of coffee before we begin, I can wait.  Talent Grids were the primary way that items could be customized in Destiny 1. In Destiny 2, for now, talent grids have become exclusively used by Subclass/Build items: but the system is still in place for it to be used by items should the direction change back toward talent grids.  Talent Grids have Nodes: the visual circles on the talent grid detail screen that have icons and can be activated if you meet certain requirements and pay costs. The actual visual data and effects, however, are driven by the \&quot;Steps\&quot; on Talent Nodes. Any given node will have 1:M of these steps, and the specific step that will be considered the \&quot;current\&quot; step (and thus the dictator of all benefits, visual state, and activation requirements on the Node) will almost always not be determined until an instance of the item is created. This is how, in Destiny 1, items were able to have such a wide variety of what users saw as \&quot;Perks\&quot;: they were actually Talent Grids with nodes that had a wide variety of Steps, randomly chosen at the time of item creation.  Now that Talent Grids are used exclusively by subclasses and builds, all of the properties within still apply: but there are additional visual elements on the Subclass/Build screens that are superimposed on top of the talent nodes. Unfortunately, BNet doesn&#39;t have this data: if you want to build a subclass screen, you will have to provide your own \&quot;decorative\&quot; assets, such as the visual connectors between nodes and the fancy colored-fire-bathed character standing behind the nodes.  DestinyInventoryItem.talentGrid.talentGridHash defines an item&#39;s linked Talent Grid, which brings you to this definition that contains enough satic data about talent grids to make your head spin. These *must* be combined with instanced data - found when live data returns DestinyItemTalentGridComponent - in order to derive meaning. The instanced data will reference nodes and steps within these definitions, which you will then have to look up in the definition and combine with the instanced data to give the user the visual representation of their item&#39;s talent grid.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsDestinyTalentGridDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.DestinyTalentGridDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'maxGridLevel' => 'int',
        'gridLevelPerColumn' => 'int',
        'progressionHash' => 'int',
        'nodes' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeDefinition[]',
        'exclusiveSets' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeExclusiveSetDefinition[]',
        'independentNodeIndexes' => 'int[]',
        'groups' => 'map[string,\Bungie\Model\DestinyDefinitionsDestinyTalentExclusiveGroup]',
        'nodeCategories' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeCategory[]',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'maxGridLevel' => 'int32',
        'gridLevelPerColumn' => 'int32',
        'progressionHash' => 'uint32',
        'nodes' => null,
        'exclusiveSets' => null,
        'independentNodeIndexes' => 'int32',
        'groups' => null,
        'nodeCategories' => null,
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
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
        'maxGridLevel' => 'maxGridLevel',
        'gridLevelPerColumn' => 'gridLevelPerColumn',
        'progressionHash' => 'progressionHash',
        'nodes' => 'nodes',
        'exclusiveSets' => 'exclusiveSets',
        'independentNodeIndexes' => 'independentNodeIndexes',
        'groups' => 'groups',
        'nodeCategories' => 'nodeCategories',
        'hash' => 'hash',
        'index' => 'index',
        'redacted' => 'redacted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maxGridLevel' => 'setMaxGridLevel',
        'gridLevelPerColumn' => 'setGridLevelPerColumn',
        'progressionHash' => 'setProgressionHash',
        'nodes' => 'setNodes',
        'exclusiveSets' => 'setExclusiveSets',
        'independentNodeIndexes' => 'setIndependentNodeIndexes',
        'groups' => 'setGroups',
        'nodeCategories' => 'setNodeCategories',
        'hash' => 'setHash',
        'index' => 'setIndex',
        'redacted' => 'setRedacted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maxGridLevel' => 'getMaxGridLevel',
        'gridLevelPerColumn' => 'getGridLevelPerColumn',
        'progressionHash' => 'getProgressionHash',
        'nodes' => 'getNodes',
        'exclusiveSets' => 'getExclusiveSets',
        'independentNodeIndexes' => 'getIndependentNodeIndexes',
        'groups' => 'getGroups',
        'nodeCategories' => 'getNodeCategories',
        'hash' => 'getHash',
        'index' => 'getIndex',
        'redacted' => 'getRedacted'
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
        $this->container['maxGridLevel'] = isset($data['maxGridLevel']) ? $data['maxGridLevel'] : null;
        $this->container['gridLevelPerColumn'] = isset($data['gridLevelPerColumn']) ? $data['gridLevelPerColumn'] : null;
        $this->container['progressionHash'] = isset($data['progressionHash']) ? $data['progressionHash'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['exclusiveSets'] = isset($data['exclusiveSets']) ? $data['exclusiveSets'] : null;
        $this->container['independentNodeIndexes'] = isset($data['independentNodeIndexes']) ? $data['independentNodeIndexes'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['nodeCategories'] = isset($data['nodeCategories']) ? $data['nodeCategories'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['redacted'] = isset($data['redacted']) ? $data['redacted'] : null;
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
     * Gets maxGridLevel
     *
     * @return int
     */
    public function getMaxGridLevel()
    {
        return $this->container['maxGridLevel'];
    }

    /**
     * Sets maxGridLevel
     *
     * @param int $maxGridLevel The maximum possible level of the Talent Grid: at this level, any nodes are allowed to be activated.
     *
     * @return $this
     */
    public function setMaxGridLevel($maxGridLevel)
    {
        $this->container['maxGridLevel'] = $maxGridLevel;

        return $this;
    }

    /**
     * Gets gridLevelPerColumn
     *
     * @return int
     */
    public function getGridLevelPerColumn()
    {
        return $this->container['gridLevelPerColumn'];
    }

    /**
     * Sets gridLevelPerColumn
     *
     * @param int $gridLevelPerColumn The meaning of this has been lost in the sands of time: it still exists as a property, but appears to be unused in the modern UI of talent grids. It used to imply that each visual \"column\" of talent nodes required identical progression levels in order to be activated. Returning this value in case it is still useful to someone? Perhaps it's just a bit of interesting history.
     *
     * @return $this
     */
    public function setGridLevelPerColumn($gridLevelPerColumn)
    {
        $this->container['gridLevelPerColumn'] = $gridLevelPerColumn;

        return $this;
    }

    /**
     * Gets progressionHash
     *
     * @return int
     */
    public function getProgressionHash()
    {
        return $this->container['progressionHash'];
    }

    /**
     * Sets progressionHash
     *
     * @param int $progressionHash The hash identifier of the Progression (DestinyProgressionDefinition) that drives whether and when Talent Nodes can be activated on the Grid. Items will have instances of this Progression, and will gain experience that will eventually cause the grid to increase in level. As the grid's level increases, it will cross the threshold where nodes can be activated. See DestinyTalentGridStepDefinition's activation requirements for more information.
     *
     * @return $this
     */
    public function setProgressionHash($progressionHash)
    {
        $this->container['progressionHash'] = $progressionHash;

        return $this;
    }

    /**
     * Gets nodes
     *
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeDefinition[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeDefinition[] $nodes The list of Talent Nodes on the Grid (recall that Nodes themselves are really just locations in the UI to show whatever their current Step is. You will only know the current step for a node by retrieving instanced data through platform calls to the API that return DestinyItemTalentGridComponent).
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets exclusiveSets
     *
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeExclusiveSetDefinition[]
     */
    public function getExclusiveSets()
    {
        return $this->container['exclusiveSets'];
    }

    /**
     * Sets exclusiveSets
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeExclusiveSetDefinition[] $exclusiveSets Talent Nodes can exist in \"exclusive sets\": these are sets of nodes in which only a single node in the set can be activated at any given time. Activating a node in this set will automatically deactivate the other nodes in the set (referred to as a \"Swap\").  If a node in the exclusive set has already been activated, the game will not charge you materials to activate another node in the set, even if you have never activated it before, because you already paid the cost to activate one node in the set.  Not to be confused with Exclusive Groups. (how the heck do we NOT get confused by that? Jeez) See the groups property for information about that only-tangentially-related concept.
     *
     * @return $this
     */
    public function setExclusiveSets($exclusiveSets)
    {
        $this->container['exclusiveSets'] = $exclusiveSets;

        return $this;
    }

    /**
     * Gets independentNodeIndexes
     *
     * @return int[]
     */
    public function getIndependentNodeIndexes()
    {
        return $this->container['independentNodeIndexes'];
    }

    /**
     * Sets independentNodeIndexes
     *
     * @param int[] $independentNodeIndexes This is a quick reference to the indexes of nodes that are not part of exclusive sets. Handy for knowing which talent nodes can only be activated directly, rather than via swapping.
     *
     * @return $this
     */
    public function setIndependentNodeIndexes($independentNodeIndexes)
    {
        $this->container['independentNodeIndexes'] = $independentNodeIndexes;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return map[string,\Bungie\Model\DestinyDefinitionsDestinyTalentExclusiveGroup]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param map[string,\Bungie\Model\DestinyDefinitionsDestinyTalentExclusiveGroup] $groups Talent Nodes can have \"Exclusive Groups\". These are not to be confused with Exclusive Sets (see exclusiveSets property).  Look at the definition of DestinyTalentExclusiveGroup for more information and how they work. These groups are keyed by the \"groupHash\" from DestinyTalentExclusiveGroup.
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets nodeCategories
     *
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeCategory[]
     */
    public function getNodeCategories()
    {
        return $this->container['nodeCategories'];
    }

    /**
     * Sets nodeCategories
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeCategory[] $nodeCategories BNet wants to show talent nodes grouped by similar purpose with localized titles. This is the ordered list of those categories: if you want to show nodes by category, you can iterate over this list, render the displayProperties for the category as the title, and then iterate over the talent nodes referenced by the category to show the related nodes.  Note that this is different from Exclusive Groups or Sets, because these categories also incorporate \"Independent\" nodes that belong to neither sets nor groups. These are purely for visual grouping of nodes rather than functional grouping.
     *
     * @return $this
     */
    public function setNodeCategories($nodeCategories)
    {
        $this->container['nodeCategories'] = $nodeCategories;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index The index of the entity as it was found in the investment tables.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
     *
     * @return $this
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

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


