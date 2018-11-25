<?php
/**
 * DestinyMaterialRequirement
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
 * DestinyMaterialRequirement Class Doc Comment
 *
 * @category Class
 * @description Many actions relating to items require you to expend materials: - Activating a talent node - Inserting a plug into a socket The items will refer to material requirements by a materialRequirementsHash in these cases, and this is the definition for those requirements in terms of the item required, how much of it is required and other interesting info. This is one of the rare/strange times where a single contract class is used both in definitions *and* in live data response contracts. I&#39;m not sure yet whether I regret that.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMaterialRequirement implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyMaterialRequirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemHash' => 'int',
        'deleteOnAction' => 'bool',
        'count' => 'int',
        'omitFromRequirements' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemHash' => 'uint32',
        'deleteOnAction' => null,
        'count' => 'int32',
        'omitFromRequirements' => null
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
        'itemHash' => 'itemHash',
        'deleteOnAction' => 'deleteOnAction',
        'count' => 'count',
        'omitFromRequirements' => 'omitFromRequirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemHash' => 'setItemHash',
        'deleteOnAction' => 'setDeleteOnAction',
        'count' => 'setCount',
        'omitFromRequirements' => 'setOmitFromRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemHash' => 'getItemHash',
        'deleteOnAction' => 'getDeleteOnAction',
        'count' => 'getCount',
        'omitFromRequirements' => 'getOmitFromRequirements'
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
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['deleteOnAction'] = isset($data['deleteOnAction']) ? $data['deleteOnAction'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['omitFromRequirements'] = isset($data['omitFromRequirements']) ? $data['omitFromRequirements'] : null;
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
     * Gets itemHash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['itemHash'];
    }

    /**
     * Sets itemHash
     *
     * @param int|null $itemHash The hash identifier of the material required. Use it to look up the material's DestinyInventoryItemDefinition.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets deleteOnAction
     *
     * @return bool|null
     */
    public function getDeleteOnAction()
    {
        return $this->container['deleteOnAction'];
    }

    /**
     * Sets deleteOnAction
     *
     * @param bool|null $deleteOnAction If True, the material will be removed from the character's inventory when the action is performed.
     *
     * @return $this
     */
    public function setDeleteOnAction($deleteOnAction)
    {
        $this->container['deleteOnAction'] = $deleteOnAction;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count The amount of the material required.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets omitFromRequirements
     *
     * @return bool|null
     */
    public function getOmitFromRequirements()
    {
        return $this->container['omitFromRequirements'];
    }

    /**
     * Sets omitFromRequirements
     *
     * @param bool|null $omitFromRequirements If True, this requirement is \"silent\": don't bother showing it in a material requirements display. I mean, I'm not your mom: I'm not going to tell you you *can't* show it. But we won't show it in our UI.
     *
     * @return $this
     */
    public function setOmitFromRequirements($omitFromRequirements)
    {
        $this->container['omitFromRequirements'] = $omitFromRequirements;

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


