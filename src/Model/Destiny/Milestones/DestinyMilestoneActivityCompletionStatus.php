<?php
/**
 * DestinyMilestoneActivityCompletionStatus
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
 * OpenAPI spec version: 2.3.3
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneActivityCompletionStatus Class Doc Comment
 *
 * @category Class
 * @description Represents this player&#39;s personal completion status for the Activity under a Milestone, if the activity has trackable completion and progress information. (most activities won&#39;t, or the concept won&#39;t apply. For instance, it makes sense to talk about a tier of a raid as being Completed or having progress, but it doesn&#39;t make sense to talk about a Crucible Playlist in those terms.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneActivityCompletionStatus implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyMilestoneActivityCompletionStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'completed' => 'bool',
        'phases' => '\Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityPhase[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'completed' => null,
        'phases' => null
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
        'completed' => 'completed',
        'phases' => 'phases'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completed' => 'setCompleted',
        'phases' => 'setPhases'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completed' => 'getCompleted',
        'phases' => 'getPhases'
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
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['phases'] = isset($data['phases']) ? $data['phases'] : null;
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
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed If the activity has been \"completed\", that information will be returned here.
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets phases
     *
     * @return \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityPhase[]|null
     */
    public function getPhases()
    {
        return $this->container['phases'];
    }

    /**
     * Sets phases
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivityPhase[]|null $phases If the Activity has discrete \"phases\" that we can track, that info will be here. Otherwise, this value will be NULL. Note that this is a list and not a dictionary: the order implies the ascending order of phases or progression in this activity.
     *
     * @return $this
     */
    public function setPhases($phases)
    {
        $this->container['phases'] = $phases;

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


