<?php
/**
 * DestinySandboxPerkDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinySandboxPerkDefinition Class Doc Comment
 *
 * @category Class
 * @description Perks are modifiers to a character or item that can be applied situationally.  - Perks determine a weapons&#39; damage type.  - Perks put the Mods in Modifiers (they are literally the entity that bestows the Sandbox benefit for whatever fluff text about the modifier in the Socket, Plug or Talent Node)  - Perks are applied for unique alterations of state in Objectives  Anyways, I&#39;m sure you can see why perks are so interesting.  What Perks often don&#39;t have is human readable information, so we attempt to reverse engineer that by pulling that data from places that uniquely refer to these perks: namely, Talent Nodes and Plugs. That only gives us a subset of perks that are human readable, but those perks are the ones people generally care about anyways. The others are left as a mystery, their true purpose mostly unknown and undocumented.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinySandboxPerkDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinySandboxPerkDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'perkIdentifier' => 'string',
        'isDisplayable' => 'bool',
        'damageType' => 'int',
        'damageTypeHash' => 'int',
        'perkGroups' => '\Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups',
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
        'perkIdentifier' => null,
        'isDisplayable' => null,
        'damageType' => 'int32',
        'damageTypeHash' => 'uint32',
        'perkGroups' => null,
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
        'perkIdentifier' => 'perkIdentifier',
        'isDisplayable' => 'isDisplayable',
        'damageType' => 'damageType',
        'damageTypeHash' => 'damageTypeHash',
        'perkGroups' => 'perkGroups',
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
        'perkIdentifier' => 'setPerkIdentifier',
        'isDisplayable' => 'setIsDisplayable',
        'damageType' => 'setDamageType',
        'damageTypeHash' => 'setDamageTypeHash',
        'perkGroups' => 'setPerkGroups',
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
        'perkIdentifier' => 'getPerkIdentifier',
        'isDisplayable' => 'getIsDisplayable',
        'damageType' => 'getDamageType',
        'damageTypeHash' => 'getDamageTypeHash',
        'perkGroups' => 'getPerkGroups',
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
        $this->container['perkIdentifier'] = isset($data['perkIdentifier']) ? $data['perkIdentifier'] : null;
        $this->container['isDisplayable'] = isset($data['isDisplayable']) ? $data['isDisplayable'] : null;
        $this->container['damageType'] = isset($data['damageType']) ? $data['damageType'] : null;
        $this->container['damageTypeHash'] = isset($data['damageTypeHash']) ? $data['damageTypeHash'] : null;
        $this->container['perkGroups'] = isset($data['perkGroups']) ? $data['perkGroups'] : null;
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
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties These display properties are by no means guaranteed to be populated. Usually when it is, it's only because we back-filled them with the displayProperties of some Talent Node or Plug item that happened to be uniquely providing that perk.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets perkIdentifier
     *
     * @return string|null
     */
    public function getPerkIdentifier()
    {
        return $this->container['perkIdentifier'];
    }

    /**
     * Sets perkIdentifier
     *
     * @param string|null $perkIdentifier The string identifier for the perk.
     *
     * @return $this
     */
    public function setPerkIdentifier($perkIdentifier)
    {
        $this->container['perkIdentifier'] = $perkIdentifier;

        return $this;
    }

    /**
     * Gets isDisplayable
     *
     * @return bool|null
     */
    public function getIsDisplayable()
    {
        return $this->container['isDisplayable'];
    }

    /**
     * Sets isDisplayable
     *
     * @param bool|null $isDisplayable If true, you can actually show the perk in the UI. Otherwise, it doesn't have useful player-facing information.
     *
     * @return $this
     */
    public function setIsDisplayable($isDisplayable)
    {
        $this->container['isDisplayable'] = $isDisplayable;

        return $this;
    }

    /**
     * Gets damageType
     *
     * @return int|null
     */
    public function getDamageType()
    {
        return $this->container['damageType'];
    }

    /**
     * Sets damageType
     *
     * @param int|null $damageType If this perk grants a damage type to a weapon, the damage type will be defined here.  Unless you have a compelling reason to use this enum value, use the damageTypeHash instead to look up the actual DestinyDamageTypeDefinition.
     *
     * @return $this
     */
    public function setDamageType($damageType)
    {
        $this->container['damageType'] = $damageType;

        return $this;
    }

    /**
     * Gets damageTypeHash
     *
     * @return int|null
     */
    public function getDamageTypeHash()
    {
        return $this->container['damageTypeHash'];
    }

    /**
     * Sets damageTypeHash
     *
     * @param int|null $damageTypeHash The hash identifier for looking up the DestinyDamageTypeDefinition, if this perk has a damage type.  This is preferred over using the damageType enumeration value, which has been left purely because it is occasionally convenient.
     *
     * @return $this
     */
    public function setDamageTypeHash($damageTypeHash)
    {
        $this->container['damageTypeHash'] = $damageTypeHash;

        return $this;
    }

    /**
     * Gets perkGroups
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups|null
     */
    public function getPerkGroups()
    {
        return $this->container['perkGroups'];
    }

    /**
     * Sets perkGroups
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyTalentNodeStepGroups|null $perkGroups An old holdover from the original Armory, this was an attempt to group perks by functionality.  It is as yet unpopulated, and there will be quite a bit of work needed to restore it to its former working order.
     *
     * @return $this
     */
    public function setPerkGroups($perkGroups)
    {
        $this->container['perkGroups'] = $perkGroups;

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


