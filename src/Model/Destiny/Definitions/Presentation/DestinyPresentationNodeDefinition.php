<?php
/**
 * DestinyPresentationNodeDefinition
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

namespace Bungie\Model\Destiny\Definitions\Presentation;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPresentationNodeDefinition Class Doc Comment
 *
 * @category Class
 * @description A PresentationNode is an entity that represents a logical grouping of other entities visually/organizationally.  For now, Presentation Nodes may contain the following... but it may be used for more in the future:  - Collectibles - Records (Or, as the public will call them, \&quot;Triumphs.\&quot; Don&#39;t ask me why we&#39;re overloading the term \&quot;Triumph\&quot;, it still hurts me to think about it) - Metrics (aka Stat Trackers) - Other Presentation Nodes, allowing a tree of Presentation Nodes to be created  Part of me wants to break these into conceptual definitions per entity being collected, but the possibility of these different types being mixed in the same UI and the possibility that it could actually be more useful to return the \&quot;bare metal\&quot; presentation node concept has resulted in me deciding against that for the time being.  We&#39;ll see if I come to regret this as well.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationNodeDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Presentation.DestinyPresentationNodeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'originalIcon' => 'string',
        'rootViewIcon' => 'string',
        'nodeType' => 'int',
        'scope' => 'int',
        'objectiveHash' => 'int',
        'completionRecordHash' => 'int',
        'children' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildrenBlock',
        'displayStyle' => 'int',
        'screenStyle' => 'int',
        'requirements' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock',
        'disableChildSubscreenNavigation' => 'bool',
        'presentationNodeType' => 'int',
        'traitIds' => 'string[]',
        'traitHashes' => 'int[]',
        'parentNodeHashes' => 'int[]',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'originalIcon' => null,
        'rootViewIcon' => null,
        'nodeType' => 'int32',
        'scope' => 'int32',
        'objectiveHash' => 'uint32',
        'completionRecordHash' => 'uint32',
        'children' => null,
        'displayStyle' => 'int32',
        'screenStyle' => 'int32',
        'requirements' => null,
        'disableChildSubscreenNavigation' => null,
        'presentationNodeType' => 'int32',
        'traitIds' => null,
        'traitHashes' => 'uint32',
        'parentNodeHashes' => 'uint32',
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
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
        'originalIcon' => 'originalIcon',
        'rootViewIcon' => 'rootViewIcon',
        'nodeType' => 'nodeType',
        'scope' => 'scope',
        'objectiveHash' => 'objectiveHash',
        'completionRecordHash' => 'completionRecordHash',
        'children' => 'children',
        'displayStyle' => 'displayStyle',
        'screenStyle' => 'screenStyle',
        'requirements' => 'requirements',
        'disableChildSubscreenNavigation' => 'disableChildSubscreenNavigation',
        'presentationNodeType' => 'presentationNodeType',
        'traitIds' => 'traitIds',
        'traitHashes' => 'traitHashes',
        'parentNodeHashes' => 'parentNodeHashes',
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
        'displayProperties' => 'setDisplayProperties',
        'originalIcon' => 'setOriginalIcon',
        'rootViewIcon' => 'setRootViewIcon',
        'nodeType' => 'setNodeType',
        'scope' => 'setScope',
        'objectiveHash' => 'setObjectiveHash',
        'completionRecordHash' => 'setCompletionRecordHash',
        'children' => 'setChildren',
        'displayStyle' => 'setDisplayStyle',
        'screenStyle' => 'setScreenStyle',
        'requirements' => 'setRequirements',
        'disableChildSubscreenNavigation' => 'setDisableChildSubscreenNavigation',
        'presentationNodeType' => 'setPresentationNodeType',
        'traitIds' => 'setTraitIds',
        'traitHashes' => 'setTraitHashes',
        'parentNodeHashes' => 'setParentNodeHashes',
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
        'displayProperties' => 'getDisplayProperties',
        'originalIcon' => 'getOriginalIcon',
        'rootViewIcon' => 'getRootViewIcon',
        'nodeType' => 'getNodeType',
        'scope' => 'getScope',
        'objectiveHash' => 'getObjectiveHash',
        'completionRecordHash' => 'getCompletionRecordHash',
        'children' => 'getChildren',
        'displayStyle' => 'getDisplayStyle',
        'screenStyle' => 'getScreenStyle',
        'requirements' => 'getRequirements',
        'disableChildSubscreenNavigation' => 'getDisableChildSubscreenNavigation',
        'presentationNodeType' => 'getPresentationNodeType',
        'traitIds' => 'getTraitIds',
        'traitHashes' => 'getTraitHashes',
        'parentNodeHashes' => 'getParentNodeHashes',
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
        $this->container['originalIcon'] = isset($data['originalIcon']) ? $data['originalIcon'] : null;
        $this->container['rootViewIcon'] = isset($data['rootViewIcon']) ? $data['rootViewIcon'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['objectiveHash'] = isset($data['objectiveHash']) ? $data['objectiveHash'] : null;
        $this->container['completionRecordHash'] = isset($data['completionRecordHash']) ? $data['completionRecordHash'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['displayStyle'] = isset($data['displayStyle']) ? $data['displayStyle'] : null;
        $this->container['screenStyle'] = isset($data['screenStyle']) ? $data['screenStyle'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['disableChildSubscreenNavigation'] = isset($data['disableChildSubscreenNavigation']) ? $data['disableChildSubscreenNavigation'] : null;
        $this->container['presentationNodeType'] = isset($data['presentationNodeType']) ? $data['presentationNodeType'] : null;
        $this->container['traitIds'] = isset($data['traitIds']) ? $data['traitIds'] : null;
        $this->container['traitHashes'] = isset($data['traitHashes']) ? $data['traitHashes'] : null;
        $this->container['parentNodeHashes'] = isset($data['parentNodeHashes']) ? $data['parentNodeHashes'] : null;
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
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets originalIcon
     *
     * @return string|null
     */
    public function getOriginalIcon()
    {
        return $this->container['originalIcon'];
    }

    /**
     * Sets originalIcon
     *
     * @param string|null $originalIcon The original icon for this presentation node, before we futzed with it.
     *
     * @return $this
     */
    public function setOriginalIcon($originalIcon)
    {
        $this->container['originalIcon'] = $originalIcon;

        return $this;
    }

    /**
     * Gets rootViewIcon
     *
     * @return string|null
     */
    public function getRootViewIcon()
    {
        return $this->container['rootViewIcon'];
    }

    /**
     * Sets rootViewIcon
     *
     * @param string|null $rootViewIcon Some presentation nodes are meant to be explicitly shown on the \"root\" or \"entry\" screens for the feature to which they are related. You should use this icon when showing them on such a view, if you have a similar \"entry point\" view in your UI. If you don't have a UI, then I guess it doesn't matter either way does it?
     *
     * @return $this
     */
    public function setRootViewIcon($rootViewIcon)
    {
        $this->container['rootViewIcon'] = $rootViewIcon;

        return $this;
    }

    /**
     * Gets nodeType
     *
     * @return int|null
     */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
     * Sets nodeType
     *
     * @param int|null $nodeType nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int|null $scope Indicates whether this presentation node's state is determined on a per-character or on an account-wide basis.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets objectiveHash
     *
     * @return int|null
     */
    public function getObjectiveHash()
    {
        return $this->container['objectiveHash'];
    }

    /**
     * Sets objectiveHash
     *
     * @param int|null $objectiveHash If this presentation node shows a related objective (for instance, if it tracks the progress of its children), the objective being tracked is indicated here.
     *
     * @return $this
     */
    public function setObjectiveHash($objectiveHash)
    {
        $this->container['objectiveHash'] = $objectiveHash;

        return $this;
    }

    /**
     * Gets completionRecordHash
     *
     * @return int|null
     */
    public function getCompletionRecordHash()
    {
        return $this->container['completionRecordHash'];
    }

    /**
     * Sets completionRecordHash
     *
     * @param int|null $completionRecordHash If this presentation node has an associated \"Record\" that you can accomplish for completing its children, this is the identifier of that Record.
     *
     * @return $this
     */
    public function setCompletionRecordHash($completionRecordHash)
    {
        $this->container['completionRecordHash'] = $completionRecordHash;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildrenBlock|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildrenBlock|null $children The child entities contained by this presentation node.
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets displayStyle
     *
     * @return int|null
     */
    public function getDisplayStyle()
    {
        return $this->container['displayStyle'];
    }

    /**
     * Sets displayStyle
     *
     * @param int|null $displayStyle A hint for how to display this presentation node when it's shown in a list.
     *
     * @return $this
     */
    public function setDisplayStyle($displayStyle)
    {
        $this->container['displayStyle'] = $displayStyle;

        return $this;
    }

    /**
     * Gets screenStyle
     *
     * @return int|null
     */
    public function getScreenStyle()
    {
        return $this->container['screenStyle'];
    }

    /**
     * Sets screenStyle
     *
     * @param int|null $screenStyle A hint for how to display this presentation node when it's shown in its own detail screen.
     *
     * @return $this
     */
    public function setScreenStyle($screenStyle)
    {
        $this->container['screenStyle'] = $screenStyle;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock|null $requirements The requirements for being able to interact with this presentation node and its children.
     *
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets disableChildSubscreenNavigation
     *
     * @return bool|null
     */
    public function getDisableChildSubscreenNavigation()
    {
        return $this->container['disableChildSubscreenNavigation'];
    }

    /**
     * Sets disableChildSubscreenNavigation
     *
     * @param bool|null $disableChildSubscreenNavigation If this presentation node has children, but the game doesn't let you inspect the details of those children, that is indicated here.
     *
     * @return $this
     */
    public function setDisableChildSubscreenNavigation($disableChildSubscreenNavigation)
    {
        $this->container['disableChildSubscreenNavigation'] = $disableChildSubscreenNavigation;

        return $this;
    }

    /**
     * Gets presentationNodeType
     *
     * @return int|null
     */
    public function getPresentationNodeType()
    {
        return $this->container['presentationNodeType'];
    }

    /**
     * Sets presentationNodeType
     *
     * @param int|null $presentationNodeType presentationNodeType
     *
     * @return $this
     */
    public function setPresentationNodeType($presentationNodeType)
    {
        $this->container['presentationNodeType'] = $presentationNodeType;

        return $this;
    }

    /**
     * Gets traitIds
     *
     * @return string[]|null
     */
    public function getTraitIds()
    {
        return $this->container['traitIds'];
    }

    /**
     * Sets traitIds
     *
     * @param string[]|null $traitIds traitIds
     *
     * @return $this
     */
    public function setTraitIds($traitIds)
    {
        $this->container['traitIds'] = $traitIds;

        return $this;
    }

    /**
     * Gets traitHashes
     *
     * @return int[]|null
     */
    public function getTraitHashes()
    {
        return $this->container['traitHashes'];
    }

    /**
     * Sets traitHashes
     *
     * @param int[]|null $traitHashes traitHashes
     *
     * @return $this
     */
    public function setTraitHashes($traitHashes)
    {
        $this->container['traitHashes'] = $traitHashes;

        return $this;
    }

    /**
     * Gets parentNodeHashes
     *
     * @return int[]|null
     */
    public function getParentNodeHashes()
    {
        return $this->container['parentNodeHashes'];
    }

    /**
     * Sets parentNodeHashes
     *
     * @param int[]|null $parentNodeHashes A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents.
     *
     * @return $this
     */
    public function setParentNodeHashes($parentNodeHashes)
    {
        $this->container['parentNodeHashes'] = $parentNodeHashes;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
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
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the entity as it was found in the investment tables.
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
     * @return bool|null
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool|null $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


