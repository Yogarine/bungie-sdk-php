<?php
/**
 * DestinyRecordComponent
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

namespace Bungie\Model\Destiny\Components\Records;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyRecordComponent Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyRecordComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Records.DestinyRecordComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state' => 'int',
        'objectives' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]',
        'intervalObjectives' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]',
        'intervalsRedeemedCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'state' => 'int32',
        'objectives' => null,
        'intervalObjectives' => null,
        'intervalsRedeemedCount' => 'int32'
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
        'state' => 'state',
        'objectives' => 'objectives',
        'intervalObjectives' => 'intervalObjectives',
        'intervalsRedeemedCount' => 'intervalsRedeemedCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'objectives' => 'setObjectives',
        'intervalObjectives' => 'setIntervalObjectives',
        'intervalsRedeemedCount' => 'setIntervalsRedeemedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'objectives' => 'getObjectives',
        'intervalObjectives' => 'getIntervalObjectives',
        'intervalsRedeemedCount' => 'getIntervalsRedeemedCount'
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
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['objectives'] = isset($data['objectives']) ? $data['objectives'] : null;
        $this->container['intervalObjectives'] = isset($data['intervalObjectives']) ? $data['intervalObjectives'] : null;
        $this->container['intervalsRedeemedCount'] = isset($data['intervalsRedeemedCount']) ? $data['intervalsRedeemedCount'] : null;
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
     * Gets state
     *
     * @return int|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets objectives
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null
     */
    public function getObjectives()
    {
        return $this->container['objectives'];
    }

    /**
     * Sets objectives
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null $objectives objectives
     *
     * @return $this
     */
    public function setObjectives($objectives)
    {
        $this->container['objectives'] = $objectives;

        return $this;
    }

    /**
     * Gets intervalObjectives
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null
     */
    public function getIntervalObjectives()
    {
        return $this->container['intervalObjectives'];
    }

    /**
     * Sets intervalObjectives
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null $intervalObjectives intervalObjectives
     *
     * @return $this
     */
    public function setIntervalObjectives($intervalObjectives)
    {
        $this->container['intervalObjectives'] = $intervalObjectives;

        return $this;
    }

    /**
     * Gets intervalsRedeemedCount
     *
     * @return int|null
     */
    public function getIntervalsRedeemedCount()
    {
        return $this->container['intervalsRedeemedCount'];
    }

    /**
     * Sets intervalsRedeemedCount
     *
     * @param int|null $intervalsRedeemedCount intervalsRedeemedCount
     *
     * @return $this
     */
    public function setIntervalsRedeemedCount($intervalsRedeemedCount)
    {
        $this->container['intervalsRedeemedCount'] = $intervalsRedeemedCount;

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


