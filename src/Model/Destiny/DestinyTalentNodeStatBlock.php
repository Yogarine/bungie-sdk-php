<?php
/**
 * DestinyTalentNodeStatBlock
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
 * OpenAPI spec version: 2.17.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyTalentNodeStatBlock Class Doc Comment
 *
 * @category Class
 * @description This property has some history. A talent grid can provide stats on both the item it&#39;s related to and the character equipping the item. This returns data about those stat bonuses.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeStatBlock implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.DestinyTalentNodeStatBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentStepStats' => '\Bungie\Model\Destiny\DestinyStat[]',
        'nextStepStats' => '\Bungie\Model\Destiny\DestinyStat[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currentStepStats' => null,
        'nextStepStats' => null
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
        'currentStepStats' => 'currentStepStats',
        'nextStepStats' => 'nextStepStats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentStepStats' => 'setCurrentStepStats',
        'nextStepStats' => 'setNextStepStats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentStepStats' => 'getCurrentStepStats',
        'nextStepStats' => 'getNextStepStats'
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
        $this->container['currentStepStats'] = isset($data['currentStepStats']) ? $data['currentStepStats'] : null;
        $this->container['nextStepStats'] = isset($data['nextStepStats']) ? $data['nextStepStats'] : null;
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
     * Gets currentStepStats
     *
     * @return \Bungie\Model\Destiny\DestinyStat[]|null
     */
    public function getCurrentStepStats()
    {
        return $this->container['currentStepStats'];
    }

    /**
     * Sets currentStepStats
     *
     * @param \Bungie\Model\Destiny\DestinyStat[]|null $currentStepStats The stat benefits conferred when this talent node is activated for the current Step that is active on the node.
     *
     * @return $this
     */
    public function setCurrentStepStats($currentStepStats)
    {
        $this->container['currentStepStats'] = $currentStepStats;

        return $this;
    }

    /**
     * Gets nextStepStats
     *
     * @return \Bungie\Model\Destiny\DestinyStat[]|null
     */
    public function getNextStepStats()
    {
        return $this->container['nextStepStats'];
    }

    /**
     * Sets nextStepStats
     *
     * @param \Bungie\Model\Destiny\DestinyStat[]|null $nextStepStats This is a holdover from the old days of Destiny 1, when a node could be activated multiple times, conferring multiple steps worth of benefits: you would use this property to show what activating the \"next\" step on the node would provide vs. what the current step is providing. While Nodes are currently not being used this way, the underlying system for this functionality still exists. I hesitate to remove this property while the ability for designers to make such a talent grid still exists. Whether you want to show it is up to you.
     *
     * @return $this
     */
    public function setNextStepStats($nextStepStats)
    {
        $this->container['nextStepStats'] = $nextStepStats;

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


