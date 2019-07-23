<?php
/**
 * DestinyActivityMatchmakingBlockDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyActivityMatchmakingBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Information about matchmaking and party size for the activity.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityMatchmakingBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyActivityMatchmakingBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isMatchmade' => 'bool',
        'minParty' => 'int',
        'maxParty' => 'int',
        'maxPlayers' => 'int',
        'requiresGuardianOath' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'isMatchmade' => null,
        'minParty' => 'int32',
        'maxParty' => 'int32',
        'maxPlayers' => 'int32',
        'requiresGuardianOath' => null
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
        'isMatchmade' => 'isMatchmade',
        'minParty' => 'minParty',
        'maxParty' => 'maxParty',
        'maxPlayers' => 'maxPlayers',
        'requiresGuardianOath' => 'requiresGuardianOath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isMatchmade' => 'setIsMatchmade',
        'minParty' => 'setMinParty',
        'maxParty' => 'setMaxParty',
        'maxPlayers' => 'setMaxPlayers',
        'requiresGuardianOath' => 'setRequiresGuardianOath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isMatchmade' => 'getIsMatchmade',
        'minParty' => 'getMinParty',
        'maxParty' => 'getMaxParty',
        'maxPlayers' => 'getMaxPlayers',
        'requiresGuardianOath' => 'getRequiresGuardianOath'
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
        $this->container['isMatchmade'] = isset($data['isMatchmade']) ? $data['isMatchmade'] : null;
        $this->container['minParty'] = isset($data['minParty']) ? $data['minParty'] : null;
        $this->container['maxParty'] = isset($data['maxParty']) ? $data['maxParty'] : null;
        $this->container['maxPlayers'] = isset($data['maxPlayers']) ? $data['maxPlayers'] : null;
        $this->container['requiresGuardianOath'] = isset($data['requiresGuardianOath']) ? $data['requiresGuardianOath'] : null;
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
     * Gets isMatchmade
     *
     * @return bool|null
     */
    public function getIsMatchmade()
    {
        return $this->container['isMatchmade'];
    }

    /**
     * Sets isMatchmade
     *
     * @param bool|null $isMatchmade If TRUE, the activity is matchmade. Otherwise, it requires explicit forming of a party.
     *
     * @return $this
     */
    public function setIsMatchmade($isMatchmade)
    {
        $this->container['isMatchmade'] = $isMatchmade;

        return $this;
    }

    /**
     * Gets minParty
     *
     * @return int|null
     */
    public function getMinParty()
    {
        return $this->container['minParty'];
    }

    /**
     * Sets minParty
     *
     * @param int|null $minParty The minimum # of people in the fireteam for the activity to launch.
     *
     * @return $this
     */
    public function setMinParty($minParty)
    {
        $this->container['minParty'] = $minParty;

        return $this;
    }

    /**
     * Gets maxParty
     *
     * @return int|null
     */
    public function getMaxParty()
    {
        return $this->container['maxParty'];
    }

    /**
     * Sets maxParty
     *
     * @param int|null $maxParty The maximum # of people allowed in a Fireteam.
     *
     * @return $this
     */
    public function setMaxParty($maxParty)
    {
        $this->container['maxParty'] = $maxParty;

        return $this;
    }

    /**
     * Gets maxPlayers
     *
     * @return int|null
     */
    public function getMaxPlayers()
    {
        return $this->container['maxPlayers'];
    }

    /**
     * Sets maxPlayers
     *
     * @param int|null $maxPlayers The maximum # of people allowed across all teams in the activity.
     *
     * @return $this
     */
    public function setMaxPlayers($maxPlayers)
    {
        $this->container['maxPlayers'] = $maxPlayers;

        return $this;
    }

    /**
     * Gets requiresGuardianOath
     *
     * @return bool|null
     */
    public function getRequiresGuardianOath()
    {
        return $this->container['requiresGuardianOath'];
    }

    /**
     * Sets requiresGuardianOath
     *
     * @param bool|null $requiresGuardianOath If true, you have to Solemnly Swear to be up to Nothing But Good(tm) to play.
     *
     * @return $this
     */
    public function setRequiresGuardianOath($requiresGuardianOath)
    {
        $this->container['requiresGuardianOath'] = $requiresGuardianOath;

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


