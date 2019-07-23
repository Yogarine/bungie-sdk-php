<?php
/**
 * DestinyActivityGuidedBlockDefinition
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
 * OpenAPI spec version: 2.3.6
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
 * DestinyActivityGuidedBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Guided Game information for this activity.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityGuidedBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyActivityGuidedBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guidedMaxLobbySize' => 'int',
        'guidedMinLobbySize' => 'int',
        'guidedDisbandCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'guidedMaxLobbySize' => 'int32',
        'guidedMinLobbySize' => 'int32',
        'guidedDisbandCount' => 'int32'
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
        'guidedMaxLobbySize' => 'guidedMaxLobbySize',
        'guidedMinLobbySize' => 'guidedMinLobbySize',
        'guidedDisbandCount' => 'guidedDisbandCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guidedMaxLobbySize' => 'setGuidedMaxLobbySize',
        'guidedMinLobbySize' => 'setGuidedMinLobbySize',
        'guidedDisbandCount' => 'setGuidedDisbandCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guidedMaxLobbySize' => 'getGuidedMaxLobbySize',
        'guidedMinLobbySize' => 'getGuidedMinLobbySize',
        'guidedDisbandCount' => 'getGuidedDisbandCount'
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
        $this->container['guidedMaxLobbySize'] = isset($data['guidedMaxLobbySize']) ? $data['guidedMaxLobbySize'] : null;
        $this->container['guidedMinLobbySize'] = isset($data['guidedMinLobbySize']) ? $data['guidedMinLobbySize'] : null;
        $this->container['guidedDisbandCount'] = isset($data['guidedDisbandCount']) ? $data['guidedDisbandCount'] : null;
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
     * Gets guidedMaxLobbySize
     *
     * @return int|null
     */
    public function getGuidedMaxLobbySize()
    {
        return $this->container['guidedMaxLobbySize'];
    }

    /**
     * Sets guidedMaxLobbySize
     *
     * @param int|null $guidedMaxLobbySize The maximum amount of people that can be in the waiting lobby.
     *
     * @return $this
     */
    public function setGuidedMaxLobbySize($guidedMaxLobbySize)
    {
        $this->container['guidedMaxLobbySize'] = $guidedMaxLobbySize;

        return $this;
    }

    /**
     * Gets guidedMinLobbySize
     *
     * @return int|null
     */
    public function getGuidedMinLobbySize()
    {
        return $this->container['guidedMinLobbySize'];
    }

    /**
     * Sets guidedMinLobbySize
     *
     * @param int|null $guidedMinLobbySize The minimum amount of people that can be in the waiting lobby.
     *
     * @return $this
     */
    public function setGuidedMinLobbySize($guidedMinLobbySize)
    {
        $this->container['guidedMinLobbySize'] = $guidedMinLobbySize;

        return $this;
    }

    /**
     * Gets guidedDisbandCount
     *
     * @return int|null
     */
    public function getGuidedDisbandCount()
    {
        return $this->container['guidedDisbandCount'];
    }

    /**
     * Sets guidedDisbandCount
     *
     * @param int|null $guidedDisbandCount If -1, the guided group cannot be disbanded. Otherwise, take the total # of players in the activity and subtract this number: that is the total # of votes needed for the guided group to disband.
     *
     * @return $this
     */
    public function setGuidedDisbandCount($guidedDisbandCount)
    {
        $this->container['guidedDisbandCount'] = $guidedDisbandCount;

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


