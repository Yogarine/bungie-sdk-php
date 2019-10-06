<?php
/**
 * DestinyItemInstanceEnergy
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
 * OpenAPI spec version: 2.4.0
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
 * DestinyItemInstanceEnergy Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemInstanceEnergy implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Items.DestinyItemInstanceEnergy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'energyTypeHash' => 'int',
        'energyType' => 'int',
        'energyCapacity' => 'int',
        'energyUsed' => 'int',
        'energyUnused' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'energyTypeHash' => 'uint32',
        'energyType' => 'int32',
        'energyCapacity' => 'int32',
        'energyUsed' => 'int32',
        'energyUnused' => 'int32'
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
        'energyTypeHash' => 'energyTypeHash',
        'energyType' => 'energyType',
        'energyCapacity' => 'energyCapacity',
        'energyUsed' => 'energyUsed',
        'energyUnused' => 'energyUnused'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'energyTypeHash' => 'setEnergyTypeHash',
        'energyType' => 'setEnergyType',
        'energyCapacity' => 'setEnergyCapacity',
        'energyUsed' => 'setEnergyUsed',
        'energyUnused' => 'setEnergyUnused'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'energyTypeHash' => 'getEnergyTypeHash',
        'energyType' => 'getEnergyType',
        'energyCapacity' => 'getEnergyCapacity',
        'energyUsed' => 'getEnergyUsed',
        'energyUnused' => 'getEnergyUnused'
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
        $this->container['energyTypeHash'] = isset($data['energyTypeHash']) ? $data['energyTypeHash'] : null;
        $this->container['energyType'] = isset($data['energyType']) ? $data['energyType'] : null;
        $this->container['energyCapacity'] = isset($data['energyCapacity']) ? $data['energyCapacity'] : null;
        $this->container['energyUsed'] = isset($data['energyUsed']) ? $data['energyUsed'] : null;
        $this->container['energyUnused'] = isset($data['energyUnused']) ? $data['energyUnused'] : null;
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
     * @param int|null $energyTypeHash The type of energy for this item. Plugs that require Energy can only be inserted if they have the \"Any\" Energy Type or the matching energy type of this item. This is a reference to the DestinyEnergyTypeDefinition for the energy type, where you can find extended info about it.
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
     * @param int|null $energyType This is the enum version of the Energy Type value, for convenience.
     *
     * @return $this
     */
    public function setEnergyType($energyType)
    {
        $this->container['energyType'] = $energyType;

        return $this;
    }

    /**
     * Gets energyCapacity
     *
     * @return int|null
     */
    public function getEnergyCapacity()
    {
        return $this->container['energyCapacity'];
    }

    /**
     * Sets energyCapacity
     *
     * @param int|null $energyCapacity The total capacity of Energy that the item currently has, regardless of if it is currently being used.
     *
     * @return $this
     */
    public function setEnergyCapacity($energyCapacity)
    {
        $this->container['energyCapacity'] = $energyCapacity;

        return $this;
    }

    /**
     * Gets energyUsed
     *
     * @return int|null
     */
    public function getEnergyUsed()
    {
        return $this->container['energyUsed'];
    }

    /**
     * Sets energyUsed
     *
     * @param int|null $energyUsed The amount of Energy currently in use by inserted plugs.
     *
     * @return $this
     */
    public function setEnergyUsed($energyUsed)
    {
        $this->container['energyUsed'] = $energyUsed;

        return $this;
    }

    /**
     * Gets energyUnused
     *
     * @return int|null
     */
    public function getEnergyUnused()
    {
        return $this->container['energyUnused'];
    }

    /**
     * Sets energyUnused
     *
     * @param int|null $energyUnused The amount of energy still available for inserting new plugs.
     *
     * @return $this
     */
    public function setEnergyUnused($energyUnused)
    {
        $this->container['energyUnused'] = $energyUnused;

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


