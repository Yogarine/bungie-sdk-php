<?php
/**
 * DestinyFactionDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyFactionDefinition Class Doc Comment
 *
 * @category Class
 * @description These definitions represent Factions in the game. Factions have ended up unilaterally being related to Vendors that represent them, but that need not necessarily be the case.  A Faction is really just an entity that has a related progression for which a character can gain experience. In Destiny 1, Dead Orbit was an example of a Faction: there happens to be a Vendor that represents Dead Orbit (and indeed, DestinyVendorDefinition.factionHash defines to this relationship), but Dead Orbit could theoretically exist without the Vendor that provides rewards.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyFactionDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyFactionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'progressionHash' => 'int',
        'tokenValues' => 'map[string,int]',
        'rewardItemHash' => 'int',
        'rewardVendorHash' => 'int',
        'vendors' => '\Bungie\Model\Destiny\Definitions\DestinyFactionVendorDefinition[]',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'progressionHash' => 'uint32',
        'tokenValues' => 'uint32',
        'rewardItemHash' => 'uint32',
        'rewardVendorHash' => 'uint32',
        'vendors' => null,
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
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
        'displayProperties' => 'displayProperties',
        'progressionHash' => 'progressionHash',
        'tokenValues' => 'tokenValues',
        'rewardItemHash' => 'rewardItemHash',
        'rewardVendorHash' => 'rewardVendorHash',
        'vendors' => 'vendors',
        'hash' => 'hash',
        'index' => 'index',
        'redacted' => 'redacted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayProperties' => 'setDisplayProperties',
        'progressionHash' => 'setProgressionHash',
        'tokenValues' => 'setTokenValues',
        'rewardItemHash' => 'setRewardItemHash',
        'rewardVendorHash' => 'setRewardVendorHash',
        'vendors' => 'setVendors',
        'hash' => 'setHash',
        'index' => 'setIndex',
        'redacted' => 'setRedacted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayProperties' => 'getDisplayProperties',
        'progressionHash' => 'getProgressionHash',
        'tokenValues' => 'getTokenValues',
        'rewardItemHash' => 'getRewardItemHash',
        'rewardVendorHash' => 'getRewardVendorHash',
        'vendors' => 'getVendors',
        'hash' => 'getHash',
        'index' => 'getIndex',
        'redacted' => 'getRedacted'
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
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['progressionHash'] = isset($data['progressionHash']) ? $data['progressionHash'] : null;
        $this->container['tokenValues'] = isset($data['tokenValues']) ? $data['tokenValues'] : null;
        $this->container['rewardItemHash'] = isset($data['rewardItemHash']) ? $data['rewardItemHash'] : null;
        $this->container['rewardVendorHash'] = isset($data['rewardVendorHash']) ? $data['rewardVendorHash'] : null;
        $this->container['vendors'] = isset($data['vendors']) ? $data['vendors'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['redacted'] = isset($data['redacted']) ? $data['redacted'] : null;
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
     * Gets displayProperties
     *
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets progressionHash
     *
     * @return int|null
     */
    public function getProgressionHash()
    {
        return $this->container['progressionHash'];
    }

    /**
     * Sets progressionHash
     *
     * @param int|null $progressionHash The hash identifier for the DestinyProgressionDefinition that indicates the character's relationship with this faction in terms of experience and levels.
     *
     * @return $this
     */
    public function setProgressionHash($progressionHash)
    {
        $this->container['progressionHash'] = $progressionHash;

        return $this;
    }

    /**
     * Gets tokenValues
     *
     * @return map[string,int]|null
     */
    public function getTokenValues()
    {
        return $this->container['tokenValues'];
    }

    /**
     * Sets tokenValues
     *
     * @param map[string,int]|null $tokenValues The faction token item hashes, and their respective progression values.
     *
     * @return $this
     */
    public function setTokenValues($tokenValues)
    {
        $this->container['tokenValues'] = $tokenValues;

        return $this;
    }

    /**
     * Gets rewardItemHash
     *
     * @return int|null
     */
    public function getRewardItemHash()
    {
        return $this->container['rewardItemHash'];
    }

    /**
     * Sets rewardItemHash
     *
     * @param int|null $rewardItemHash The faction reward item hash, usually an engram.
     *
     * @return $this
     */
    public function setRewardItemHash($rewardItemHash)
    {
        $this->container['rewardItemHash'] = $rewardItemHash;

        return $this;
    }

    /**
     * Gets rewardVendorHash
     *
     * @return int|null
     */
    public function getRewardVendorHash()
    {
        return $this->container['rewardVendorHash'];
    }

    /**
     * Sets rewardVendorHash
     *
     * @param int|null $rewardVendorHash The faction reward vendor hash, used for faction engram previews.
     *
     * @return $this
     */
    public function setRewardVendorHash($rewardVendorHash)
    {
        $this->container['rewardVendorHash'] = $rewardVendorHash;

        return $this;
    }

    /**
     * Gets vendors
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyFactionVendorDefinition[]|null
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyFactionVendorDefinition[]|null $vendors List of vendors that are associated with this faction. The last vendor that passes the unlock flag checks is the one that should be shown.
     *
     * @return $this
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the entity as it was found in the investment tables.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool|null
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool|null $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
     *
     * @return $this
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

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


