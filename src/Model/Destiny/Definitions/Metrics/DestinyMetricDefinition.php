<?php
/**
 * DestinyMetricDefinition
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

namespace Bungie\Model\Destiny\Definitions\Metrics;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMetricDefinition Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMetricDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Metrics.DestinyMetricDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'trackingObjectiveHash' => 'int',
        'lowerValueIsBetter' => 'bool',
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
        'trackingObjectiveHash' => 'uint32',
        'lowerValueIsBetter' => null,
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
        'trackingObjectiveHash' => 'trackingObjectiveHash',
        'lowerValueIsBetter' => 'lowerValueIsBetter',
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
        'trackingObjectiveHash' => 'setTrackingObjectiveHash',
        'lowerValueIsBetter' => 'setLowerValueIsBetter',
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
        'trackingObjectiveHash' => 'getTrackingObjectiveHash',
        'lowerValueIsBetter' => 'getLowerValueIsBetter',
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
        $this->container['trackingObjectiveHash'] = isset($data['trackingObjectiveHash']) ? $data['trackingObjectiveHash'] : null;
        $this->container['lowerValueIsBetter'] = isset($data['lowerValueIsBetter']) ? $data['lowerValueIsBetter'] : null;
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
     * Gets trackingObjectiveHash
     *
     * @return int|null
     */
    public function getTrackingObjectiveHash()
    {
        return $this->container['trackingObjectiveHash'];
    }

    /**
     * Sets trackingObjectiveHash
     *
     * @param int|null $trackingObjectiveHash trackingObjectiveHash
     *
     * @return $this
     */
    public function setTrackingObjectiveHash($trackingObjectiveHash)
    {
        $this->container['trackingObjectiveHash'] = $trackingObjectiveHash;

        return $this;
    }

    /**
     * Gets lowerValueIsBetter
     *
     * @return bool|null
     */
    public function getLowerValueIsBetter()
    {
        return $this->container['lowerValueIsBetter'];
    }

    /**
     * Sets lowerValueIsBetter
     *
     * @param bool|null $lowerValueIsBetter lowerValueIsBetter
     *
     * @return $this
     */
    public function setLowerValueIsBetter($lowerValueIsBetter)
    {
        $this->container['lowerValueIsBetter'] = $lowerValueIsBetter;

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


