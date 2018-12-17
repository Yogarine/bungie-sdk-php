<?php
/**
 * DestinyMilestoneRewardCategoryDefinition
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

namespace Bungie\Model\Destiny\Definitions\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneRewardCategoryDefinition Class Doc Comment
 *
 * @category Class
 * @description The definition of a category of rewards, that contains many individual rewards.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneRewardCategoryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Milestones.DestinyMilestoneRewardCategoryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryHash' => 'int',
        'categoryIdentifier' => 'string',
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'rewardEntries' => 'map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneRewardEntryDefinition]',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'categoryHash' => 'uint32',
        'categoryIdentifier' => null,
        'displayProperties' => null,
        'rewardEntries' => null,
        'order' => 'int32'
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
        'categoryHash' => 'categoryHash',
        'categoryIdentifier' => 'categoryIdentifier',
        'displayProperties' => 'displayProperties',
        'rewardEntries' => 'rewardEntries',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryHash' => 'setCategoryHash',
        'categoryIdentifier' => 'setCategoryIdentifier',
        'displayProperties' => 'setDisplayProperties',
        'rewardEntries' => 'setRewardEntries',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryHash' => 'getCategoryHash',
        'categoryIdentifier' => 'getCategoryIdentifier',
        'displayProperties' => 'getDisplayProperties',
        'rewardEntries' => 'getRewardEntries',
        'order' => 'getOrder'
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
        $this->container['categoryHash'] = isset($data['categoryHash']) ? $data['categoryHash'] : null;
        $this->container['categoryIdentifier'] = isset($data['categoryIdentifier']) ? $data['categoryIdentifier'] : null;
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['rewardEntries'] = isset($data['rewardEntries']) ? $data['rewardEntries'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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
     * Gets categoryHash
     *
     * @return int|null
     */
    public function getCategoryHash()
    {
        return $this->container['categoryHash'];
    }

    /**
     * Sets categoryHash
     *
     * @param int|null $categoryHash Identifies the reward category. Only guaranteed unique within this specific component!
     *
     * @return $this
     */
    public function setCategoryHash($categoryHash)
    {
        $this->container['categoryHash'] = $categoryHash;

        return $this;
    }

    /**
     * Gets categoryIdentifier
     *
     * @return string|null
     */
    public function getCategoryIdentifier()
    {
        return $this->container['categoryIdentifier'];
    }

    /**
     * Sets categoryIdentifier
     *
     * @param string|null $categoryIdentifier The string identifier for the category, if you want to use it for some end. Guaranteed unique within the specific component.
     *
     * @return $this
     */
    public function setCategoryIdentifier($categoryIdentifier)
    {
        $this->container['categoryIdentifier'] = $categoryIdentifier;

        return $this;
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
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties Hopefully this is obvious by now.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets rewardEntries
     *
     * @return map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneRewardEntryDefinition]|null
     */
    public function getRewardEntries()
    {
        return $this->container['rewardEntries'];
    }

    /**
     * Sets rewardEntries
     *
     * @param map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneRewardEntryDefinition]|null $rewardEntries If this milestone can provide rewards, this will define the sets of rewards that can be earned, the conditions under which they can be acquired, internal data that we'll use at runtime to determine whether you've already earned or redeemed this set of rewards, and the category that this reward should be placed under.
     *
     * @return $this
     */
    public function setRewardEntries($rewardEntries)
    {
        $this->container['rewardEntries'] = $rewardEntries;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order If you want to use BNet's recommended order for rendering categories programmatically, use this value and compare it to other categories to determine the order in which they should be rendered. I don't feel great about putting this here, I won't lie.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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


