<?php
/**
 * DestinyObjectiveProgress
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

namespace Bungie\Model\Destiny\Quests;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyObjectiveProgress Class Doc Comment
 *
 * @category Class
 * @description Returns data about a character&#39;s status with a given Objective. Combine with DestinyObjectiveDefinition static data for display purposes.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyObjectiveProgress implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Quests.DestinyObjectiveProgress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objectiveHash' => 'int',
        'destinationHash' => 'int',
        'activityHash' => 'int',
        'progress' => 'int',
        'completionValue' => 'int',
        'complete' => 'bool',
        'visible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'objectiveHash' => 'uint32',
        'destinationHash' => 'uint32',
        'activityHash' => 'uint32',
        'progress' => 'int32',
        'completionValue' => 'int32',
        'complete' => null,
        'visible' => null
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
        'objectiveHash' => 'objectiveHash',
        'destinationHash' => 'destinationHash',
        'activityHash' => 'activityHash',
        'progress' => 'progress',
        'completionValue' => 'completionValue',
        'complete' => 'complete',
        'visible' => 'visible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objectiveHash' => 'setObjectiveHash',
        'destinationHash' => 'setDestinationHash',
        'activityHash' => 'setActivityHash',
        'progress' => 'setProgress',
        'completionValue' => 'setCompletionValue',
        'complete' => 'setComplete',
        'visible' => 'setVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objectiveHash' => 'getObjectiveHash',
        'destinationHash' => 'getDestinationHash',
        'activityHash' => 'getActivityHash',
        'progress' => 'getProgress',
        'completionValue' => 'getCompletionValue',
        'complete' => 'getComplete',
        'visible' => 'getVisible'
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
        $this->container['objectiveHash'] = isset($data['objectiveHash']) ? $data['objectiveHash'] : null;
        $this->container['destinationHash'] = isset($data['destinationHash']) ? $data['destinationHash'] : null;
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['completionValue'] = isset($data['completionValue']) ? $data['completionValue'] : null;
        $this->container['complete'] = isset($data['complete']) ? $data['complete'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
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
     * Gets objectiveHash
     *
     * @return int|null
     */
    public function getObjectiveHash()
    {
        return $this->container['objectiveHash'];
    }

    /**
     * Sets objectiveHash
     *
     * @param int|null $objectiveHash The unique identifier of the Objective being referred to. Use to look up the DestinyObjectiveDefinition in static data.
     *
     * @return $this
     */
    public function setObjectiveHash($objectiveHash)
    {
        $this->container['objectiveHash'] = $objectiveHash;

        return $this;
    }

    /**
     * Gets destinationHash
     *
     * @return int|null
     */
    public function getDestinationHash()
    {
        return $this->container['destinationHash'];
    }

    /**
     * Sets destinationHash
     *
     * @param int|null $destinationHash If the Objective has a Destination associated with it, this is the unique identifier of the Destination being referred to. Use to look up the DestinyDestinationDefinition in static data. This will give localized data about *where* in the universe the objective should be achieved.
     *
     * @return $this
     */
    public function setDestinationHash($destinationHash)
    {
        $this->container['destinationHash'] = $destinationHash;

        return $this;
    }

    /**
     * Gets activityHash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int|null $activityHash If the Objective has an Activity associated with it, this is the unique identifier of the Activity being referred to. Use to look up the DestinyActivityDefinition in static data. This will give localized data about *what* you should be playing for the objective to be achieved.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int|null $progress If progress has been made, and the progress can be measured numerically, this will be the value of that progress. You can compare it to the DestinyObjectiveDefinition.completionValue property for current vs. upper bounds, and use DestinyObjectiveDefinition.valueStyle to determine how this should be rendered. Note that progress, in Destiny 2, need not be a literal numeric progression. It could be one of a number of possible values, even a Timestamp. Always examine DestinyObjectiveDefinition.valueStyle before rendering progress.
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets completionValue
     *
     * @return int|null
     */
    public function getCompletionValue()
    {
        return $this->container['completionValue'];
    }

    /**
     * Sets completionValue
     *
     * @param int|null $completionValue As of Forsaken, objectives' completion value is determined dynamically at runtime.  This value represents the threshold of progress you need to surpass in order for this objective to be considered \"complete\".  If you were using objective data, switch from using the DestinyObjectiveDefinition's \"completionValue\" to this value.
     *
     * @return $this
     */
    public function setCompletionValue($completionValue)
    {
        $this->container['completionValue'] = $completionValue;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool|null
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param bool|null $complete Whether or not the Objective is completed.
     *
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible If this is true, the objective is visible in-game. Otherwise, it's not yet visible to the player. Up to you if you want to honor this property.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


