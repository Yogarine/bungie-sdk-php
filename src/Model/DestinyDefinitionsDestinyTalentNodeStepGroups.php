<?php
/**
 * DestinyDefinitionsDestinyTalentNodeStepGroups
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
 * DestinyDefinitionsDestinyTalentNodeStepGroups Class Doc Comment
 *
 * @category Class
 * @description These properties are an attempt to categorize talent node steps by certain common properties. See the related enumerations for the type of properties being categorized.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsDestinyTalentNodeStepGroups implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.DestinyTalentNodeStepGroups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weaponPerformance' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances',
        'impactEffects' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepImpactEffects',
        'guardianAttributes' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepGuardianAttributes',
        'lightAbilities' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepLightAbilities',
        'damageTypes' => '\Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepDamageTypes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weaponPerformance' => null,
        'impactEffects' => null,
        'guardianAttributes' => null,
        'lightAbilities' => null,
        'damageTypes' => null
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

        return true;
    }


    /**
     * Gets weaponPerformance
     *
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances
     */
    public function getWeaponPerformance()
    {
        return $this->container['weaponPerformance'];
    }

    /**
     * Sets weaponPerformance
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances $weaponPerformance weaponPerformance
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
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepImpactEffects
     */
    public function getImpactEffects()
    {
        return $this->container['impactEffects'];
    }

    /**
     * Sets impactEffects
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepImpactEffects $impactEffects impactEffects
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
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepGuardianAttributes
     */
    public function getGuardianAttributes()
    {
        return $this->container['guardianAttributes'];
    }

    /**
     * Sets guardianAttributes
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepGuardianAttributes $guardianAttributes guardianAttributes
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
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepLightAbilities
     */
    public function getLightAbilities()
    {
        return $this->container['lightAbilities'];
    }

    /**
     * Sets lightAbilities
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepLightAbilities $lightAbilities lightAbilities
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
     * @return \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepDamageTypes
     */
    public function getDamageTypes()
    {
        return $this->container['damageTypes'];
    }

    /**
     * Sets damageTypes
     *
     * @param \Bungie\Model\DestinyDefinitionsDestinyTalentNodeStepDamageTypes $damageTypes damageTypes
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


