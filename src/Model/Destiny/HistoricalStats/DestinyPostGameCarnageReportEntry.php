<?php
/**
 * DestinyPostGameCarnageReportEntry
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
 * OpenAPI spec version: 2.3.5
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
 * DestinyPostGameCarnageReportEntry Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPostGameCarnageReportEntry implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyPostGameCarnageReportEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'standing' => 'int',
        'score' => '\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue',
        'player' => '\Bungie\Model\Destiny\HistoricalStats\DestinyPlayer',
        'characterId' => 'int',
        'values' => 'map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]',
        'extended' => '\Bungie\Model\Destiny\HistoricalStats\DestinyPostGameCarnageReportExtendedData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'standing' => 'int32',
        'score' => null,
        'player' => null,
        'characterId' => 'int64',
        'values' => null,
        'extended' => null
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
        'standing' => 'standing',
        'score' => 'score',
        'player' => 'player',
        'characterId' => 'characterId',
        'values' => 'values',
        'extended' => 'extended'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standing' => 'setStanding',
        'score' => 'setScore',
        'player' => 'setPlayer',
        'characterId' => 'setCharacterId',
        'values' => 'setValues',
        'extended' => 'setExtended'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standing' => 'getStanding',
        'score' => 'getScore',
        'player' => 'getPlayer',
        'characterId' => 'getCharacterId',
        'values' => 'getValues',
        'extended' => 'getExtended'
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
        $this->container['standing'] = isset($data['standing']) ? $data['standing'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['player'] = isset($data['player']) ? $data['player'] : null;
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['extended'] = isset($data['extended']) ? $data['extended'] : null;
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
     * Gets standing
     *
     * @return int|null
     */
    public function getStanding()
    {
        return $this->container['standing'];
    }

    /**
     * Sets standing
     *
     * @param int|null $standing Standing of the player
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
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue|null $score Score of the player if available
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets player
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyPlayer|null
     */
    public function getPlayer()
    {
        return $this->container['player'];
    }

    /**
     * Sets player
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyPlayer|null $player Identity details of the player
     *
     * @return $this
     */
    public function setPlayer($player)
    {
        $this->container['player'] = $player;

        return $this;
    }

    /**
     * Gets characterId
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     *
     * @param int|null $characterId ID of the player's character used in the activity.
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets values
     *
     * @return map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]|null $values Collection of stats for the player in this activity.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets extended
     *
     * @return \Bungie\Model\Destiny\HistoricalStats\DestinyPostGameCarnageReportExtendedData|null
     */
    public function getExtended()
    {
        return $this->container['extended'];
    }

    /**
     * Sets extended
     *
     * @param \Bungie\Model\Destiny\HistoricalStats\DestinyPostGameCarnageReportExtendedData|null $extended Extended data extracted from the activity blob.
     *
     * @return $this
     */
    public function setExtended($extended)
    {
        $this->container['extended'] = $extended;

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


