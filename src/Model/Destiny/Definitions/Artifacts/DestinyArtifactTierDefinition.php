<?php
/**
 * DestinyArtifactTierDefinition
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
 * OpenAPI spec version: 2.4.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions\Artifacts;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyArtifactTierDefinition Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyArtifactTierDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Artifacts.DestinyArtifactTierDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tierHash' => 'int',
        'displayTitle' => 'string',
        'progressRequirementMessage' => 'string',
        'items' => '\Bungie\Model\Destiny\Definitions\Artifacts\DestinyArtifactTierItemDefinition[]',
        'minimumUnlockPointsUsedRequirement' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'tierHash' => 'uint32',
        'displayTitle' => null,
        'progressRequirementMessage' => null,
        'items' => null,
        'minimumUnlockPointsUsedRequirement' => 'int32'
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
        'tierHash' => 'tierHash',
        'displayTitle' => 'displayTitle',
        'progressRequirementMessage' => 'progressRequirementMessage',
        'items' => 'items',
        'minimumUnlockPointsUsedRequirement' => 'minimumUnlockPointsUsedRequirement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tierHash' => 'setTierHash',
        'displayTitle' => 'setDisplayTitle',
        'progressRequirementMessage' => 'setProgressRequirementMessage',
        'items' => 'setItems',
        'minimumUnlockPointsUsedRequirement' => 'setMinimumUnlockPointsUsedRequirement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tierHash' => 'getTierHash',
        'displayTitle' => 'getDisplayTitle',
        'progressRequirementMessage' => 'getProgressRequirementMessage',
        'items' => 'getItems',
        'minimumUnlockPointsUsedRequirement' => 'getMinimumUnlockPointsUsedRequirement'
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
        $this->container['tierHash'] = isset($data['tierHash']) ? $data['tierHash'] : null;
        $this->container['displayTitle'] = isset($data['displayTitle']) ? $data['displayTitle'] : null;
        $this->container['progressRequirementMessage'] = isset($data['progressRequirementMessage']) ? $data['progressRequirementMessage'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['minimumUnlockPointsUsedRequirement'] = isset($data['minimumUnlockPointsUsedRequirement']) ? $data['minimumUnlockPointsUsedRequirement'] : null;
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
     * Gets tierHash
     *
     * @return int|null
     */
    public function getTierHash()
    {
        return $this->container['tierHash'];
    }

    /**
     * Sets tierHash
     *
     * @param int|null $tierHash An identifier, unique within the Artifact, for this specific tier.
     *
     * @return $this
     */
    public function setTierHash($tierHash)
    {
        $this->container['tierHash'] = $tierHash;

        return $this;
    }

    /**
     * Gets displayTitle
     *
     * @return string|null
     */
    public function getDisplayTitle()
    {
        return $this->container['displayTitle'];
    }

    /**
     * Sets displayTitle
     *
     * @param string|null $displayTitle The human readable title of this tier, if any.
     *
     * @return $this
     */
    public function setDisplayTitle($displayTitle)
    {
        $this->container['displayTitle'] = $displayTitle;

        return $this;
    }

    /**
     * Gets progressRequirementMessage
     *
     * @return string|null
     */
    public function getProgressRequirementMessage()
    {
        return $this->container['progressRequirementMessage'];
    }

    /**
     * Sets progressRequirementMessage
     *
     * @param string|null $progressRequirementMessage A string representing the localized minimum requirement text for this Tier, if any.
     *
     * @return $this
     */
    public function setProgressRequirementMessage($progressRequirementMessage)
    {
        $this->container['progressRequirementMessage'] = $progressRequirementMessage;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Bungie\Model\Destiny\Definitions\Artifacts\DestinyArtifactTierItemDefinition[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Bungie\Model\Destiny\Definitions\Artifacts\DestinyArtifactTierItemDefinition[]|null $items The items that can be earned within this tier.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets minimumUnlockPointsUsedRequirement
     *
     * @return int|null
     */
    public function getMinimumUnlockPointsUsedRequirement()
    {
        return $this->container['minimumUnlockPointsUsedRequirement'];
    }

    /**
     * Sets minimumUnlockPointsUsedRequirement
     *
     * @param int|null $minimumUnlockPointsUsedRequirement The minimum number of \"unlock points\" that you must have used before you can unlock items from this tier.
     *
     * @return $this
     */
    public function setMinimumUnlockPointsUsedRequirement($minimumUnlockPointsUsedRequirement)
    {
        $this->container['minimumUnlockPointsUsedRequirement'] = $minimumUnlockPointsUsedRequirement;

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


