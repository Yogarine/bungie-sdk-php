<?php
/**
 * DestinyMilestonesDestinyPublicMilestoneChallengeActivity
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
 * DestinyMilestonesDestinyPublicMilestoneChallengeActivity Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyMilestonesDestinyPublicMilestoneChallengeActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Milestones.DestinyPublicMilestoneChallengeActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityHash' => 'int',
        'challengeObjectiveHashes' => 'int[]',
        'modifierHashes' => 'int[]',
        'loadoutRequirementIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activityHash' => 'uint32',
        'challengeObjectiveHashes' => 'uint32',
        'modifierHashes' => 'uint32',
        'loadoutRequirementIndex' => 'int32'
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
        'activityHash' => 'activityHash',
        'challengeObjectiveHashes' => 'challengeObjectiveHashes',
        'modifierHashes' => 'modifierHashes',
        'loadoutRequirementIndex' => 'loadoutRequirementIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'challengeObjectiveHashes' => 'setChallengeObjectiveHashes',
        'modifierHashes' => 'setModifierHashes',
        'loadoutRequirementIndex' => 'setLoadoutRequirementIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'challengeObjectiveHashes' => 'getChallengeObjectiveHashes',
        'modifierHashes' => 'getModifierHashes',
        'loadoutRequirementIndex' => 'getLoadoutRequirementIndex'
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
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['challengeObjectiveHashes'] = isset($data['challengeObjectiveHashes']) ? $data['challengeObjectiveHashes'] : null;
        $this->container['modifierHashes'] = isset($data['modifierHashes']) ? $data['modifierHashes'] : null;
        $this->container['loadoutRequirementIndex'] = isset($data['loadoutRequirementIndex']) ? $data['loadoutRequirementIndex'] : null;
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
     * Gets activityHash
     *
     * @return int
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int $activityHash activityHash
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets challengeObjectiveHashes
     *
     * @return int[]
     */
    public function getChallengeObjectiveHashes()
    {
        return $this->container['challengeObjectiveHashes'];
    }

    /**
     * Sets challengeObjectiveHashes
     *
     * @param int[] $challengeObjectiveHashes challengeObjectiveHashes
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
     * @return int[]
     */
    public function getModifierHashes()
    {
        return $this->container['modifierHashes'];
    }

    /**
     * Sets modifierHashes
     *
     * @param int[] $modifierHashes If the activity has modifiers, this will be the list of modifiers that all variants have in common. Perform lookups against DestinyActivityModifierDefinition which defines the modifier being applied to get at the modifier data.  Note that, in the DestiyActivityDefinition, you will see many more modifiers than this being referred to: those are all *possible* modifiers for the activity, not the active ones. Use only the active ones to match what's really live.
     *
     * @return $this
     */
    public function setModifierHashes($modifierHashes)
    {
        $this->container['modifierHashes'] = $modifierHashes;

        return $this;
    }

    /**
     * Gets loadoutRequirementIndex
     *
     * @return int
     */
    public function getLoadoutRequirementIndex()
    {
        return $this->container['loadoutRequirementIndex'];
    }

    /**
     * Sets loadoutRequirementIndex
     *
     * @param int $loadoutRequirementIndex If returned, this is the index into the DestinyActivityDefinition's \"loadouts\" property, indicating the currently active loadout requirements.
     *
     * @return $this
     */
    public function setLoadoutRequirementIndex($loadoutRequirementIndex)
    {
        $this->container['loadoutRequirementIndex'] = $loadoutRequirementIndex;

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


