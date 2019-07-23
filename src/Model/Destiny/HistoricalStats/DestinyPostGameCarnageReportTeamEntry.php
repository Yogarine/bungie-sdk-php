<?php
/**
 * DestinyPostGameCarnageReportTeamEntry
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
 * DestinyPostGameCarnageReportTeamEntry Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPostGameCarnageReportTeamEntry implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyPostGameCarnageReportTeamEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'teamId' => 'int',
        'standing' => '\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue',
        'score' => '\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue',
        'teamName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'teamId' => 'int32',
        'standing' => null,
        'score' => null,
        'teamName' => null
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
        'teamId' => 'teamId',
        'standing' => 'standing',
        'score' => 'score',
        'teamName' => 'teamName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'teamId' => 'setTeamId',
        'standing' => 'setStanding',
        'score' => 'setScore',
        'teamName' => 'setTeamName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'teamId' => 'getTeamId',
        'standing' => 'getStanding',
        'score' => 'getScore',
        'teamName' => 'getTeamName'
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
        $this->container['teamId'] = isset($data['teamId']) ? $data['teamId'] : null;
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['teamName'] = isset($data['teamName']) ? $data['teamName'] : null;
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
     * Gets teamId
     *
     * @return int|null
     */
    public function getTeamId()
    {
        return $this->container['teamId'];
    }

    /**
     * Sets teamId
     *
     * @param int|null $teamId Integer ID for the team.
     *
     * @return $this
     */
    public function setTeamId($teamId)
    {
        $this->container['teamId'] = $teamId;

        return $this;
    }

    /**
     * Gets standing
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue|null
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue|null $standing Team's standing relative to other teams.
     *
     * @return $this
     */
    public function setStanding($standing)
    {
        $this->container['standing'] = $standing;

        return $this;
    }

    /**
     * Gets score
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue|null $score Score earned by the team
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets teamName
     *
     * @return string|null
     */
    public function getTeamName()
    {
        return $this->container['teamName'];
    }

    /**
     * Sets teamName
     *
     * @param string|null $teamName Alpha or Bravo
     *
     * @return $this
     */
    public function setTeamName($teamName)
    {
        $this->container['teamName'] = $teamName;

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


