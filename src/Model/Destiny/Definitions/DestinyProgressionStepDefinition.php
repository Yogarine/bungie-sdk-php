<?php
/**
 * DestinyProgressionStepDefinition
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
 * OpenAPI spec version: 2.3.3
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
 * DestinyProgressionStepDefinition Class Doc Comment
 *
 * @category Class
 * @description This defines a single Step in a progression (which roughly equates to a level. See DestinyProgressionDefinition for caveats).
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProgressionStepDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyProgressionStepDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stepName' => 'string',
        'displayEffectType' => '\Bungie\Model\Destiny\DestinyProgressionStepDisplayEffect',
        'progressTotal' => 'int',
        'rewardItems' => '\Bungie\Model\Destiny\DestinyItemQuantity[]',
        'icon' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'stepName' => null,
        'displayEffectType' => null,
        'progressTotal' => 'int32',
        'rewardItems' => null,
        'icon' => null
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
        'stepName' => 'stepName',
        'displayEffectType' => 'displayEffectType',
        'progressTotal' => 'progressTotal',
        'rewardItems' => 'rewardItems',
        'icon' => 'icon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stepName' => 'setStepName',
        'displayEffectType' => 'setDisplayEffectType',
        'progressTotal' => 'setProgressTotal',
        'rewardItems' => 'setRewardItems',
        'icon' => 'setIcon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stepName' => 'getStepName',
        'displayEffectType' => 'getDisplayEffectType',
        'progressTotal' => 'getProgressTotal',
        'rewardItems' => 'getRewardItems',
        'icon' => 'getIcon'
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
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['displayEffectType'] = isset($data['displayEffectType']) ? $data['displayEffectType'] : null;
        $this->container['progressTotal'] = isset($data['progressTotal']) ? $data['progressTotal'] : null;
        $this->container['rewardItems'] = isset($data['rewardItems']) ? $data['rewardItems'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
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
     * Gets stepName
     *
     * @return string|null
     */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
     * Sets stepName
     *
     * @param string|null $stepName Very rarely, Progressions will have localized text describing the Level of the progression. This will be that localized text, if it exists. Otherwise, the standard appears to be to simply show the level numerically.
     *
     * @return $this
     */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;

        return $this;
    }

    /**
     * Gets displayEffectType
     *
     * @return \Bungie\Model\Destiny\DestinyProgressionStepDisplayEffect|null
     */
    public function getDisplayEffectType()
    {
        return $this->container['displayEffectType'];
    }

    /**
     * Sets displayEffectType
     *
     * @param \Bungie\Model\Destiny\DestinyProgressionStepDisplayEffect|null $displayEffectType This appears to be, when you \"level up\", whether a visual effect will display and on what entity. See DestinyProgressionStepDisplayEffect for slightly more info.
     *
     * @return $this
     */
    public function setDisplayEffectType($displayEffectType)
    {
        $this->container['displayEffectType'] = $displayEffectType;

        return $this;
    }

    /**
     * Gets progressTotal
     *
     * @return int|null
     */
    public function getProgressTotal()
    {
        return $this->container['progressTotal'];
    }

    /**
     * Sets progressTotal
     *
     * @param int|null $progressTotal The total amount of progression points/\"experience\" you will need to initially reach this step. If this is the last step and the progression is repeating indefinitely (DestinyProgressionDefinition.repeatLastStep), this will also be the progress needed to level it up further by repeating this step again.
     *
     * @return $this
     */
    public function setProgressTotal($progressTotal)
    {
        $this->container['progressTotal'] = $progressTotal;

        return $this;
    }

    /**
     * Gets rewardItems
     *
     * @return \Bungie\Model\Destiny\DestinyItemQuantity[]|null
     */
    public function getRewardItems()
    {
        return $this->container['rewardItems'];
    }

    /**
     * Sets rewardItems
     *
     * @param \Bungie\Model\Destiny\DestinyItemQuantity[]|null $rewardItems A listing of items rewarded as a result of reaching this level.
     *
     * @return $this
     */
    public function setRewardItems($rewardItems)
    {
        $this->container['rewardItems'] = $rewardItems;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon If this progression step has a specific icon related to it, this is the icon to show.
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

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


