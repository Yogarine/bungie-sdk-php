<?php
/**
 * DestinyItemTranslationBlockDefinition
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
 * OpenAPI spec version: 2.8.2
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
 * DestinyItemTranslationBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description This Block defines the rendering data associated with the item, if any.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemTranslationBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemTranslationBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'weaponPatternIdentifier' => 'string',
        'weaponPatternHash' => 'int',
        'defaultDyes' => '\Bungie\Model\Destiny\DyeReference[]',
        'lockedDyes' => '\Bungie\Model\Destiny\DyeReference[]',
        'customDyes' => '\Bungie\Model\Destiny\DyeReference[]',
        'arrangements' => '\Bungie\Model\Destiny\Definitions\DestinyGearArtArrangementReference[]',
        'hasGeometry' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'weaponPatternIdentifier' => null,
        'weaponPatternHash' => 'uint32',
        'defaultDyes' => null,
        'lockedDyes' => null,
        'customDyes' => null,
        'arrangements' => null,
        'hasGeometry' => null
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
        'weaponPatternIdentifier' => 'weaponPatternIdentifier',
        'weaponPatternHash' => 'weaponPatternHash',
        'defaultDyes' => 'defaultDyes',
        'lockedDyes' => 'lockedDyes',
        'customDyes' => 'customDyes',
        'arrangements' => 'arrangements',
        'hasGeometry' => 'hasGeometry'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weaponPatternIdentifier' => 'setWeaponPatternIdentifier',
        'weaponPatternHash' => 'setWeaponPatternHash',
        'defaultDyes' => 'setDefaultDyes',
        'lockedDyes' => 'setLockedDyes',
        'customDyes' => 'setCustomDyes',
        'arrangements' => 'setArrangements',
        'hasGeometry' => 'setHasGeometry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weaponPatternIdentifier' => 'getWeaponPatternIdentifier',
        'weaponPatternHash' => 'getWeaponPatternHash',
        'defaultDyes' => 'getDefaultDyes',
        'lockedDyes' => 'getLockedDyes',
        'customDyes' => 'getCustomDyes',
        'arrangements' => 'getArrangements',
        'hasGeometry' => 'getHasGeometry'
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
        $this->container['weaponPatternIdentifier'] = isset($data['weaponPatternIdentifier']) ? $data['weaponPatternIdentifier'] : null;
        $this->container['weaponPatternHash'] = isset($data['weaponPatternHash']) ? $data['weaponPatternHash'] : null;
        $this->container['defaultDyes'] = isset($data['defaultDyes']) ? $data['defaultDyes'] : null;
        $this->container['lockedDyes'] = isset($data['lockedDyes']) ? $data['lockedDyes'] : null;
        $this->container['customDyes'] = isset($data['customDyes']) ? $data['customDyes'] : null;
        $this->container['arrangements'] = isset($data['arrangements']) ? $data['arrangements'] : null;
        $this->container['hasGeometry'] = isset($data['hasGeometry']) ? $data['hasGeometry'] : null;
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
     * Gets weaponPatternIdentifier
     *
     * @return string|null
     */
    public function getWeaponPatternIdentifier()
    {
        return $this->container['weaponPatternIdentifier'];
    }

    /**
     * Sets weaponPatternIdentifier
     *
     * @param string|null $weaponPatternIdentifier weaponPatternIdentifier
     *
     * @return $this
     */
    public function setWeaponPatternIdentifier($weaponPatternIdentifier)
    {
        $this->container['weaponPatternIdentifier'] = $weaponPatternIdentifier;

        return $this;
    }

    /**
     * Gets weaponPatternHash
     *
     * @return int|null
     */
    public function getWeaponPatternHash()
    {
        return $this->container['weaponPatternHash'];
    }

    /**
     * Sets weaponPatternHash
     *
     * @param int|null $weaponPatternHash weaponPatternHash
     *
     * @return $this
     */
    public function setWeaponPatternHash($weaponPatternHash)
    {
        $this->container['weaponPatternHash'] = $weaponPatternHash;

        return $this;
    }

    /**
     * Gets defaultDyes
     *
     * @return \Bungie\Model\Destiny\DyeReference[]|null
     */
    public function getDefaultDyes()
    {
        return $this->container['defaultDyes'];
    }

    /**
     * Sets defaultDyes
     *
     * @param \Bungie\Model\Destiny\DyeReference[]|null $defaultDyes defaultDyes
     *
     * @return $this
     */
    public function setDefaultDyes($defaultDyes)
    {
        $this->container['defaultDyes'] = $defaultDyes;

        return $this;
    }

    /**
     * Gets lockedDyes
     *
     * @return \Bungie\Model\Destiny\DyeReference[]|null
     */
    public function getLockedDyes()
    {
        return $this->container['lockedDyes'];
    }

    /**
     * Sets lockedDyes
     *
     * @param \Bungie\Model\Destiny\DyeReference[]|null $lockedDyes lockedDyes
     *
     * @return $this
     */
    public function setLockedDyes($lockedDyes)
    {
        $this->container['lockedDyes'] = $lockedDyes;

        return $this;
    }

    /**
     * Gets customDyes
     *
     * @return \Bungie\Model\Destiny\DyeReference[]|null
     */
    public function getCustomDyes()
    {
        return $this->container['customDyes'];
    }

    /**
     * Sets customDyes
     *
     * @param \Bungie\Model\Destiny\DyeReference[]|null $customDyes customDyes
     *
     * @return $this
     */
    public function setCustomDyes($customDyes)
    {
        $this->container['customDyes'] = $customDyes;

        return $this;
    }

    /**
     * Gets arrangements
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyGearArtArrangementReference[]|null
     */
    public function getArrangements()
    {
        return $this->container['arrangements'];
    }

    /**
     * Sets arrangements
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyGearArtArrangementReference[]|null $arrangements arrangements
     *
     * @return $this
     */
    public function setArrangements($arrangements)
    {
        $this->container['arrangements'] = $arrangements;

        return $this;
    }

    /**
     * Gets hasGeometry
     *
     * @return bool|null
     */
    public function getHasGeometry()
    {
        return $this->container['hasGeometry'];
    }

    /**
     * Sets hasGeometry
     *
     * @param bool|null $hasGeometry hasGeometry
     *
     * @return $this
     */
    public function setHasGeometry($hasGeometry)
    {
        $this->container['hasGeometry'] = $hasGeometry;

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


