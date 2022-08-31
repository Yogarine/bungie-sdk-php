<?php
/**
 * DestinyEnergyCostEntry
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyEnergyCostEntry Class Doc Comment
 *
 * @category Class
 * @description Some plugs cost Energy, which is a stat on the item that can be increased by other plugs (that, at least in Armor 2.0, have a \&quot;masterworks-like\&quot; mechanic for upgrading). If a plug has costs, the details of that cost are defined here.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyEnergyCostEntry implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Items.DestinyEnergyCostEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'energyCost' => 'int',
        'energyTypeHash' => 'int',
        'energyType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'energyCost' => 'int32',
        'energyTypeHash' => 'uint32',
        'energyType' => 'int32'
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
        'energyCost' => 'energyCost',
        'energyTypeHash' => 'energyTypeHash',
        'energyType' => 'energyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'energyCost' => 'setEnergyCost',
        'energyTypeHash' => 'setEnergyTypeHash',
        'energyType' => 'setEnergyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'energyCost' => 'getEnergyCost',
        'energyTypeHash' => 'getEnergyTypeHash',
        'energyType' => 'getEnergyType'
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
        $this->container['energyCost'] = isset($data['energyCost']) ? $data['energyCost'] : null;
        $this->container['energyTypeHash'] = isset($data['energyTypeHash']) ? $data['energyTypeHash'] : null;
        $this->container['energyType'] = isset($data['energyType']) ? $data['energyType'] : null;
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
     * Gets energyCost
     *
     * @return int|null
     */
    public function getEnergyCost()
    {
        return $this->container['energyCost'];
    }

    /**
     * Sets energyCost
     *
     * @param int|null $energyCost The Energy cost for inserting this plug.
     *
     * @return $this
     */
    public function setEnergyCost($energyCost)
    {
        $this->container['energyCost'] = $energyCost;

        return $this;
    }

    /**
     * Gets energyTypeHash
     *
     * @return int|null
     */
    public function getEnergyTypeHash()
    {
        return $this->container['energyTypeHash'];
    }

    /**
     * Sets energyTypeHash
     *
     * @param int|null $energyTypeHash The type of energy that this plug costs, as a reference to the DestinyEnergyTypeDefinition of the energy type.
     *
     * @return $this
     */
    public function setEnergyTypeHash($energyTypeHash)
    {
        $this->container['energyTypeHash'] = $energyTypeHash;

        return $this;
    }

    /**
     * Gets energyType
     *
     * @return int|null
     */
    public function getEnergyType()
    {
        return $this->container['energyType'];
    }

    /**
     * Sets energyType
     *
     * @param int|null $energyType The type of energy that this plug costs, in enum form.
     *
     * @return $this
     */
    public function setEnergyType($energyType)
    {
        $this->container['energyType'] = $energyType;

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


