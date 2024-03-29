<?php
/**
 * DestinyPublicActivityStatus
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

namespace Bungie\Model\Destiny\Activities;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPublicActivityStatus Class Doc Comment
 *
 * @category Class
 * @description Represents the public-facing status of an activity: any data about what is currently active in the Activity, regardless of an individual character&#39;s progress in it.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPublicActivityStatus implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Activities.DestinyPublicActivityStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'challengeObjectiveHashes' => 'int[]',
        'modifierHashes' => 'int[]',
        'rewardTooltipItems' => '\Bungie\Model\Destiny\DestinyItemQuantity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'challengeObjectiveHashes' => 'uint32',
        'modifierHashes' => 'uint32',
        'rewardTooltipItems' => null
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
        'challengeObjectiveHashes' => 'challengeObjectiveHashes',
        'modifierHashes' => 'modifierHashes',
        'rewardTooltipItems' => 'rewardTooltipItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'challengeObjectiveHashes' => 'setChallengeObjectiveHashes',
        'modifierHashes' => 'setModifierHashes',
        'rewardTooltipItems' => 'setRewardTooltipItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'challengeObjectiveHashes' => 'getChallengeObjectiveHashes',
        'modifierHashes' => 'getModifierHashes',
        'rewardTooltipItems' => 'getRewardTooltipItems'
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
        $this->container['challengeObjectiveHashes'] = isset($data['challengeObjectiveHashes']) ? $data['challengeObjectiveHashes'] : null;
        $this->container['modifierHashes'] = isset($data['modifierHashes']) ? $data['modifierHashes'] : null;
        $this->container['rewardTooltipItems'] = isset($data['rewardTooltipItems']) ? $data['rewardTooltipItems'] : null;
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
     * Gets challengeObjectiveHashes
     *
     * @return int[]|null
     */
    public function getChallengeObjectiveHashes()
    {
        return $this->container['challengeObjectiveHashes'];
    }

    /**
     * Sets challengeObjectiveHashes
     *
     * @param int[]|null $challengeObjectiveHashes Active Challenges for the activity, if any - represented as hashes for DestinyObjectiveDefinitions.
     *
     * @return $this
     */
    public function setChallengeObjectiveHashes($challengeObjectiveHashes)
    {
        $this->container['challengeObjectiveHashes'] = $challengeObjectiveHashes;

        return $this;
    }

    /**
     * Gets modifierHashes
     *
     * @return int[]|null
     */
    public function getModifierHashes()
    {
        return $this->container['modifierHashes'];
    }

    /**
     * Sets modifierHashes
     *
     * @param int[]|null $modifierHashes The active modifiers on this activity, if any - represented as hashes for DestinyActivityModifierDefinitions.
     *
     * @return $this
     */
    public function setModifierHashes($modifierHashes)
    {
        $this->container['modifierHashes'] = $modifierHashes;

        return $this;
    }

    /**
     * Gets rewardTooltipItems
     *
     * @return \Bungie\Model\Destiny\DestinyItemQuantity[]|null
     */
    public function getRewardTooltipItems()
    {
        return $this->container['rewardTooltipItems'];
    }

    /**
     * Sets rewardTooltipItems
     *
     * @param \Bungie\Model\Destiny\DestinyItemQuantity[]|null $rewardTooltipItems If the activity itself provides any specific \"mock\" rewards, this will be the items and their quantity.  Why \"mock\", you ask? Because these are the rewards as they are represented in the tooltip of the Activity.  These are often pointers to fake items that look good in a tooltip, but represent an abstract concept of what you will get for a reward rather than the specific items you may obtain.
     *
     * @return $this
     */
    public function setRewardTooltipItems($rewardTooltipItems)
    {
        $this->container['rewardTooltipItems'] = $rewardTooltipItems;

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


