<?php
/**
 * DestinyItemPerkEntryDefinition
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
 * OpenAPI spec version: 2.3.2
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
 * DestinyItemPerkEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description An intrinsic perk on an item, and the requirements for it to be activated.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemPerkEntryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemPerkEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requirementDisplayString' => 'string',
        'perkHash' => 'int',
        'perkVisibility' => '\Bungie\Model\Destiny\ItemPerkVisibility'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'requirementDisplayString' => null,
        'perkHash' => 'uint32',
        'perkVisibility' => null
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
        'requirementDisplayString' => 'requirementDisplayString',
        'perkHash' => 'perkHash',
        'perkVisibility' => 'perkVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requirementDisplayString' => 'setRequirementDisplayString',
        'perkHash' => 'setPerkHash',
        'perkVisibility' => 'setPerkVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requirementDisplayString' => 'getRequirementDisplayString',
        'perkHash' => 'getPerkHash',
        'perkVisibility' => 'getPerkVisibility'
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
        $this->container['requirementDisplayString'] = isset($data['requirementDisplayString']) ? $data['requirementDisplayString'] : null;
        $this->container['perkHash'] = isset($data['perkHash']) ? $data['perkHash'] : null;
        $this->container['perkVisibility'] = isset($data['perkVisibility']) ? $data['perkVisibility'] : null;
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
     * Gets requirementDisplayString
     *
     * @return string|null
     */
    public function getRequirementDisplayString()
    {
        return $this->container['requirementDisplayString'];
    }

    /**
     * Sets requirementDisplayString
     *
     * @param string|null $requirementDisplayString If this perk is not active, this is the string to show for why it's not providing its benefits.
     *
     * @return $this
     */
    public function setRequirementDisplayString($requirementDisplayString)
    {
        $this->container['requirementDisplayString'] = $requirementDisplayString;

        return $this;
    }

    /**
     * Gets perkHash
     *
     * @return int|null
     */
    public function getPerkHash()
    {
        return $this->container['perkHash'];
    }

    /**
     * Sets perkHash
     *
     * @param int|null $perkHash A hash identifier for the DestinySandboxPerkDefinition being provided on the item.
     *
     * @return $this
     */
    public function setPerkHash($perkHash)
    {
        $this->container['perkHash'] = $perkHash;

        return $this;
    }

    /**
     * Gets perkVisibility
     *
     * @return \Bungie\Model\Destiny\ItemPerkVisibility|null
     */
    public function getPerkVisibility()
    {
        return $this->container['perkVisibility'];
    }

    /**
     * Sets perkVisibility
     *
     * @param \Bungie\Model\Destiny\ItemPerkVisibility|null $perkVisibility Indicates whether this perk should be shown, or if it should be shown disabled.
     *
     * @return $this
     */
    public function setPerkVisibility($perkVisibility)
    {
        $this->container['perkVisibility'] = $perkVisibility;

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


