<?php
/**
 * DestinyItemTalentGridComponent
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
 * OpenAPI spec version: 2.9.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Entities\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemTalentGridComponent Class Doc Comment
 *
 * @category Class
 * @description Well, we&#39;re here in Destiny 2, and Talent Grids are unfortunately still around.  The good news is that they&#39;re pretty much only being used for certain base information on items and for Builds/Subclasses. The bad news is that they still suck. If you really want this information, grab this component.  An important note is that talent grids are defined as such:  A Grid has 1:M Nodes, which has 1:M Steps.  Any given node can only have a single step active at one time, which represents the actual visual contents and effects of the Node (for instance, if you see a \&quot;Super Cool Bonus\&quot; node, the actual icon and text for the node is coming from the current Step of that node).  Nodes can be grouped into exclusivity sets *and* as of D2, exclusivity groups (which are collections of exclusivity sets that affect each other).  See DestinyTalentGridDefinition for more information. Brace yourself, the water&#39;s cold out there in the deep end.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemTalentGridComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Items.DestinyItemTalentGridComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'talentGridHash' => 'int',
        'nodes' => '\Bungie\Model\Destiny\DestinyTalentNode[]',
        'isGridComplete' => 'bool',
        'gridProgression' => '\Bungie\Model\Destiny\DestinyProgression'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'talentGridHash' => 'uint32',
        'nodes' => null,
        'isGridComplete' => null,
        'gridProgression' => null
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
        'talentGridHash' => 'talentGridHash',
        'nodes' => 'nodes',
        'isGridComplete' => 'isGridComplete',
        'gridProgression' => 'gridProgression'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'talentGridHash' => 'setTalentGridHash',
        'nodes' => 'setNodes',
        'isGridComplete' => 'setIsGridComplete',
        'gridProgression' => 'setGridProgression'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'talentGridHash' => 'getTalentGridHash',
        'nodes' => 'getNodes',
        'isGridComplete' => 'getIsGridComplete',
        'gridProgression' => 'getGridProgression'
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
        $this->container['talentGridHash'] = isset($data['talentGridHash']) ? $data['talentGridHash'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['isGridComplete'] = isset($data['isGridComplete']) ? $data['isGridComplete'] : null;
        $this->container['gridProgression'] = isset($data['gridProgression']) ? $data['gridProgression'] : null;
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
     * Gets talentGridHash
     *
     * @return int|null
     */
    public function getTalentGridHash()
    {
        return $this->container['talentGridHash'];
    }

    /**
     * Sets talentGridHash
     *
     * @param int|null $talentGridHash Most items don't have useful talent grids anymore, but Builds in particular still do.  You can use this hash to lookup the DestinyTalentGridDefinition attached to this item, which will be crucial for understanding the node values on the item.
     *
     * @return $this
     */
    public function setTalentGridHash($talentGridHash)
    {
        $this->container['talentGridHash'] = $talentGridHash;

        return $this;
    }

    /**
     * Gets nodes
     *
     * @return \Bungie\Model\Destiny\DestinyTalentNode[]|null
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     *
     * @param \Bungie\Model\Destiny\DestinyTalentNode[]|null $nodes Detailed information about the individual nodes in the talent grid.  A node represents a single visual \"pip\" in the talent grid or Build detail view, though each node may have multiple \"steps\" which indicate the actual bonuses and visual representation of that node.
     *
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }

    /**
     * Gets isGridComplete
     *
     * @return bool|null
     */
    public function getIsGridComplete()
    {
        return $this->container['isGridComplete'];
    }

    /**
     * Sets isGridComplete
     *
     * @param bool|null $isGridComplete Indicates whether the talent grid on this item is completed, and thus whether it should have a gold border around it.  Only will be true if the item actually *has* a talent grid, and only then if it is completed (i.e. every exclusive set has an activated node, and every non-exclusive set node has been activated)
     *
     * @return $this
     */
    public function setIsGridComplete($isGridComplete)
    {
        $this->container['isGridComplete'] = $isGridComplete;

        return $this;
    }

    /**
     * Gets gridProgression
     *
     * @return \Bungie\Model\Destiny\DestinyProgression|null
     */
    public function getGridProgression()
    {
        return $this->container['gridProgression'];
    }

    /**
     * Sets gridProgression
     *
     * @param \Bungie\Model\Destiny\DestinyProgression|null $gridProgression If the item has a progression, it will be detailed here. A progression means that the item can gain experience. Thresholds of experience are what determines whether and when a talent node can be activated.
     *
     * @return $this
     */
    public function setGridProgression($gridProgression)
    {
        $this->container['gridProgression'] = $gridProgression;

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


