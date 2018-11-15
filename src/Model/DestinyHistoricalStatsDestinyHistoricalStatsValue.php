<?php
/**
 * DestinyHistoricalStatsDestinyHistoricalStatsValue
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
 * DestinyHistoricalStatsDestinyHistoricalStatsValue Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyHistoricalStatsDestinyHistoricalStatsValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.HistoricalStats.DestinyHistoricalStatsValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'statId' => 'string',
        'basic' => 'object',
        'pga' => 'object',
        'weighted' => 'object',
        'activityId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'statId' => null,
        'basic' => null,
        'pga' => null,
        'weighted' => null,
        'activityId' => 'int64'
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
        'statId' => 'statId',
        'basic' => 'basic',
        'pga' => 'pga',
        'weighted' => 'weighted',
        'activityId' => 'activityId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statId' => 'setStatId',
        'basic' => 'setBasic',
        'pga' => 'setPga',
        'weighted' => 'setWeighted',
        'activityId' => 'setActivityId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statId' => 'getStatId',
        'basic' => 'getBasic',
        'pga' => 'getPga',
        'weighted' => 'getWeighted',
        'activityId' => 'getActivityId'
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
        $this->container['statId'] = isset($data['statId']) ? $data['statId'] : null;
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['pga'] = isset($data['pga']) ? $data['pga'] : null;
        $this->container['weighted'] = isset($data['weighted']) ? $data['weighted'] : null;
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
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
     * Gets statId
     *
     * @return string
     */
    public function getStatId()
    {
        return $this->container['statId'];
    }

    /**
     * Sets statId
     *
     * @param string $statId Unique ID for this stat
     *
     * @return $this
     */
    public function setStatId($statId)
    {
        $this->container['statId'] = $statId;

        return $this;
    }

    /**
     * Gets basic
     *
     * @return object
     */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
     * Sets basic
     *
     * @param object $basic Basic stat value.
     *
     * @return $this
     */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;

        return $this;
    }

    /**
     * Gets pga
     *
     * @return object
     */
    public function getPga()
    {
        return $this->container['pga'];
    }

    /**
     * Sets pga
     *
     * @param object $pga Per game average for the statistic, if applicable
     *
     * @return $this
     */
    public function setPga($pga)
    {
        $this->container['pga'] = $pga;

        return $this;
    }

    /**
     * Gets weighted
     *
     * @return object
     */
    public function getWeighted()
    {
        return $this->container['weighted'];
    }

    /**
     * Sets weighted
     *
     * @param object $weighted Weighted value of the stat if a weight greater than 1 has been assigned.
     *
     * @return $this
     */
    public function setWeighted($weighted)
    {
        $this->container['weighted'] = $weighted;

        return $this;
    }

    /**
     * Gets activityId
     *
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param int $activityId When a stat represents the best, most, longest, fastest or some other personal best, the actual activity ID where that personal best was established is available on this property.
     *
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

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


