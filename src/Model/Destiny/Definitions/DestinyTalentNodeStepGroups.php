<?php
/**
 * DestinyTalentNodeStepGroups
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
 * OpenAPI spec version: 2.3.4
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
 * DestinyTalentNodeStepGroups Class Doc Comment
 *
 * @category Class
 * @description These properties are an attempt to categorize talent node steps by certain common properties. See the related enumerations for the type of properties being categorized.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeStepGroups implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyTalentNodeStepGroups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'weaponPerformance' => 'int',
        'impactEffects' => 'int',
        'guardianAttributes' => 'int',
        'lightAbilities' => 'int',
        'damageTypes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'weaponPerformance' => 'int32',
        'impactEffects' => 'int32',
        'guardianAttributes' => 'int32',
        'lightAbilities' => 'int32',
        'damageTypes' => 'int32'
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
        'weaponPerformance' => 'weaponPerformance',
        'impactEffects' => 'impactEffects',
        'guardianAttributes' => 'guardianAttributes',
        'lightAbilities' => 'lightAbilities',
        'damageTypes' => 'damageTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weaponPerformance' => 'setWeaponPerformance',
        'impactEffects' => 'setImpactEffects',
        'guardianAttributes' => 'setGuardianAttributes',
        'lightAbilities' => 'setLightAbilities',
        'damageTypes' => 'setDamageTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weaponPerformance' => 'getWeaponPerformance',
        'impactEffects' => 'getImpactEffects',
        'guardianAttributes' => 'getGuardianAttributes',
        'lightAbilities' => 'getLightAbilities',
        'damageTypes' => 'getDamageTypes'
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
        $this->container['weaponPerformance'] = isset($data['weaponPerformance']) ? $data['weaponPerformance'] : null;
        $this->container['impactEffects'] = isset($data['impactEffects']) ? $data['impactEffects'] : null;
        $this->container['guardianAttributes'] = isset($data['guardianAttributes']) ? $data['guardianAttributes'] : null;
        $this->container['lightAbilities'] = isset($data['lightAbilities']) ? $data['lightAbilities'] : null;
        $this->container['damageTypes'] = isset($data['damageTypes']) ? $data['damageTypes'] : null;
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
     * Gets weaponPerformance
     *
     * @return int|null
     */
    public function getWeaponPerformance()
    {
        return $this->container['weaponPerformance'];
    }

    /**
     * Sets weaponPerformance
     *
     * @param int|null $weaponPerformance weaponPerformance
     *
     * @return $this
     */
    public function setWeaponPerformance($weaponPerformance)
    {
        $this->container['weaponPerformance'] = $weaponPerformance;

        return $this;
    }

    /**
     * Gets impactEffects
     *
     * @return int|null
     */
    public function getImpactEffects()
    {
        return $this->container['impactEffects'];
    }

    /**
     * Sets impactEffects
     *
     * @param int|null $impactEffects impactEffects
     *
     * @return $this
     */
    public function setImpactEffects($impactEffects)
    {
        $this->container['impactEffects'] = $impactEffects;

        return $this;
    }

    /**
     * Gets guardianAttributes
     *
     * @return int|null
     */
    public function getGuardianAttributes()
    {
        return $this->container['guardianAttributes'];
    }

    /**
     * Sets guardianAttributes
     *
     * @param int|null $guardianAttributes guardianAttributes
     *
     * @return $this
     */
    public function setGuardianAttributes($guardianAttributes)
    {
        $this->container['guardianAttributes'] = $guardianAttributes;

        return $this;
    }

    /**
     * Gets lightAbilities
     *
     * @return int|null
     */
    public function getLightAbilities()
    {
        return $this->container['lightAbilities'];
    }

    /**
     * Sets lightAbilities
     *
     * @param int|null $lightAbilities lightAbilities
     *
     * @return $this
     */
    public function setLightAbilities($lightAbilities)
    {
        $this->container['lightAbilities'] = $lightAbilities;

        return $this;
    }

    /**
     * Gets damageTypes
     *
     * @return int|null
     */
    public function getDamageTypes()
    {
        return $this->container['damageTypes'];
    }

    /**
     * Sets damageTypes
     *
     * @param int|null $damageTypes damageTypes
     *
     * @return $this
     */
    public function setDamageTypes($damageTypes)
    {
        $this->container['damageTypes'] = $damageTypes;

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


