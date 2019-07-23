<?php
/**
 * DestinyHistoricalStatsByPeriod
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

namespace Bungie\Model\Destiny\HistoricalStats;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyHistoricalStatsByPeriod Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyHistoricalStatsByPeriod implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyHistoricalStatsByPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allTime' => 'map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]',
        'allTimeTier1' => 'map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]',
        'allTimeTier2' => 'map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]',
        'allTimeTier3' => 'map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]',
        'daily' => '\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]',
        'monthly' => '\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allTime' => null,
        'allTimeTier1' => null,
        'allTimeTier2' => null,
        'allTimeTier3' => null,
        'daily' => null,
        'monthly' => null
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
        'allTime' => 'allTime',
        'allTimeTier1' => 'allTimeTier1',
        'allTimeTier2' => 'allTimeTier2',
        'allTimeTier3' => 'allTimeTier3',
        'daily' => 'daily',
        'monthly' => 'monthly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allTime' => 'setAllTime',
        'allTimeTier1' => 'setAllTimeTier1',
        'allTimeTier2' => 'setAllTimeTier2',
        'allTimeTier3' => 'setAllTimeTier3',
        'daily' => 'setDaily',
        'monthly' => 'setMonthly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allTime' => 'getAllTime',
        'allTimeTier1' => 'getAllTimeTier1',
        'allTimeTier2' => 'getAllTimeTier2',
        'allTimeTier3' => 'getAllTimeTier3',
        'daily' => 'getDaily',
        'monthly' => 'getMonthly'
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
        $this->container['allTime'] = isset($data['allTime']) ? $data['allTime'] : null;
        $this->container['allTimeTier1'] = isset($data['allTimeTier1']) ? $data['allTimeTier1'] : null;
        $this->container['allTimeTier2'] = isset($data['allTimeTier2']) ? $data['allTimeTier2'] : null;
        $this->container['allTimeTier3'] = isset($data['allTimeTier3']) ? $data['allTimeTier3'] : null;
        $this->container['daily'] = isset($data['daily']) ? $data['daily'] : null;
        $this->container['monthly'] = isset($data['monthly']) ? $data['monthly'] : null;
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
     * Gets allTime
     *
     * @return map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null
     */
    public function getAllTime()
    {
        return $this->container['allTime'];
    }

    /**
     * Sets allTime
     *
     * @param map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null $allTime allTime
     *
     * @return $this
     */
    public function setAllTime($allTime)
    {
        $this->container['allTime'] = $allTime;

        return $this;
    }

    /**
     * Gets allTimeTier1
     *
     * @return map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null
     */
    public function getAllTimeTier1()
    {
        return $this->container['allTimeTier1'];
    }

    /**
     * Sets allTimeTier1
     *
     * @param map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null $allTimeTier1 allTimeTier1
     *
     * @return $this
     */
    public function setAllTimeTier1($allTimeTier1)
    {
        $this->container['allTimeTier1'] = $allTimeTier1;

        return $this;
    }

    /**
     * Gets allTimeTier2
     *
     * @return map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null
     */
    public function getAllTimeTier2()
    {
        return $this->container['allTimeTier2'];
    }

    /**
     * Sets allTimeTier2
     *
     * @param map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null $allTimeTier2 allTimeTier2
     *
     * @return $this
     */
    public function setAllTimeTier2($allTimeTier2)
    {
        $this->container['allTimeTier2'] = $allTimeTier2;

        return $this;
    }

    /**
     * Gets allTimeTier3
     *
     * @return map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null
     */
    public function getAllTimeTier3()
    {
        return $this->container['allTimeTier3'];
    }

    /**
     * Sets allTimeTier3
     *
     * @param map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null $allTimeTier3 allTimeTier3
     *
     * @return $this
     */
    public function setAllTimeTier3($allTimeTier3)
    {
        $this->container['allTimeTier3'] = $allTimeTier3;

        return $this;
    }

    /**
     * Gets daily
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]|null
     */
    public function getDaily()
    {
        return $this->container['daily'];
    }

    /**
     * Sets daily
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]|null $daily daily
     *
     * @return $this
     */
    public function setDaily($daily)
    {
        $this->container['daily'] = $daily;

        return $this;
    }

    /**
     * Gets monthly
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]|null
     */
    public function getMonthly()
    {
        return $this->container['monthly'];
    }

    /**
     * Sets monthly
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsPeriodGroup[]|null $monthly monthly
     *
     * @return $this
     */
    public function setMonthly($monthly)
    {
        $this->container['monthly'] = $monthly;

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


