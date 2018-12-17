<?php
/**
 * DestinyPresentationChildBlock
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
 * OpenAPI spec version: 2.3.3
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
 * DestinyPresentationChildBlock Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationChildBlock implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Presentation.DestinyPresentationChildBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'presentationNodeType' => '\Bungie\Model\Destiny\DestinyPresentationNodeType',
        'parentPresentationNodeHashes' => 'int[]',
        'displayStyle' => '\Bungie\Model\Destiny\DestinyPresentationDisplayStyle'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'presentationNodeType' => null,
        'parentPresentationNodeHashes' => 'uint32',
        'displayStyle' => null
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
        'presentationNodeType' => 'presentationNodeType',
        'parentPresentationNodeHashes' => 'parentPresentationNodeHashes',
        'displayStyle' => 'displayStyle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'presentationNodeType' => 'setPresentationNodeType',
        'parentPresentationNodeHashes' => 'setParentPresentationNodeHashes',
        'displayStyle' => 'setDisplayStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'presentationNodeType' => 'getPresentationNodeType',
        'parentPresentationNodeHashes' => 'getParentPresentationNodeHashes',
        'displayStyle' => 'getDisplayStyle'
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
        $this->container['presentationNodeType'] = isset($data['presentationNodeType']) ? $data['presentationNodeType'] : null;
        $this->container['parentPresentationNodeHashes'] = isset($data['parentPresentationNodeHashes']) ? $data['parentPresentationNodeHashes'] : null;
        $this->container['displayStyle'] = isset($data['displayStyle']) ? $data['displayStyle'] : null;
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
     * Gets presentationNodeType
     *
     * @return \Bungie\Model\Destiny\DestinyPresentationNodeType|null
     */
    public function getPresentationNodeType()
    {
        return $this->container['presentationNodeType'];
    }

    /**
     * Sets presentationNodeType
     *
     * @param \Bungie\Model\Destiny\DestinyPresentationNodeType|null $presentationNodeType presentationNodeType
     *
     * @return $this
     */
    public function setPresentationNodeType($presentationNodeType)
    {
        $this->container['presentationNodeType'] = $presentationNodeType;

        return $this;
    }

    /**
     * Gets parentPresentationNodeHashes
     *
     * @return int[]|null
     */
    public function getParentPresentationNodeHashes()
    {
        return $this->container['parentPresentationNodeHashes'];
    }

    /**
     * Sets parentPresentationNodeHashes
     *
     * @param int[]|null $parentPresentationNodeHashes parentPresentationNodeHashes
     *
     * @return $this
     */
    public function setParentPresentationNodeHashes($parentPresentationNodeHashes)
    {
        $this->container['parentPresentationNodeHashes'] = $parentPresentationNodeHashes;

        return $this;
    }

    /**
     * Gets displayStyle
     *
     * @return \Bungie\Model\Destiny\DestinyPresentationDisplayStyle|null
     */
    public function getDisplayStyle()
    {
        return $this->container['displayStyle'];
    }

    /**
     * Sets displayStyle
     *
     * @param \Bungie\Model\Destiny\DestinyPresentationDisplayStyle|null $displayStyle displayStyle
     *
     * @return $this
     */
    public function setDisplayStyle($displayStyle)
    {
        $this->container['displayStyle'] = $displayStyle;

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


