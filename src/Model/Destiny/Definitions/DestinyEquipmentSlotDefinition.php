<?php
/**
 * DestinyEquipmentSlotDefinition
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
 * DestinyEquipmentSlotDefinition Class Doc Comment
 *
 * @category Class
 * @description Characters can not only have Inventory buckets (containers of items that are generally matched by their type or functionality), they can also have Equipment Slots.  The Equipment Slot is an indicator that the related bucket can have instanced items equipped on the character. For instance, the Primary Weapon bucket has an Equipment Slot that determines whether you can equip primary weapons, and holds the association between its slot and the inventory bucket from which it can have items equipped.  An Equipment Slot must have a related Inventory Bucket, but not all inventory buckets must have Equipment Slots.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyEquipmentSlotDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyEquipmentSlotDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'equipmentCategoryHash' => 'int',
        'bucketTypeHash' => 'int',
        'applyCustomArtDyes' => 'bool',
        'artDyeChannels' => '\Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyArtDyeReference[]',
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
        'equipmentCategoryHash' => 'uint32',
        'bucketTypeHash' => 'uint32',
        'applyCustomArtDyes' => null,
        'artDyeChannels' => null,
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
        'equipmentCategoryHash' => 'equipmentCategoryHash',
        'bucketTypeHash' => 'bucketTypeHash',
        'applyCustomArtDyes' => 'applyCustomArtDyes',
        'artDyeChannels' => 'artDyeChannels',
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
        'equipmentCategoryHash' => 'setEquipmentCategoryHash',
        'bucketTypeHash' => 'setBucketTypeHash',
        'applyCustomArtDyes' => 'setApplyCustomArtDyes',
        'artDyeChannels' => 'setArtDyeChannels',
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
        'equipmentCategoryHash' => 'getEquipmentCategoryHash',
        'bucketTypeHash' => 'getBucketTypeHash',
        'applyCustomArtDyes' => 'getApplyCustomArtDyes',
        'artDyeChannels' => 'getArtDyeChannels',
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
        $this->container['equipmentCategoryHash'] = isset($data['equipmentCategoryHash']) ? $data['equipmentCategoryHash'] : null;
        $this->container['bucketTypeHash'] = isset($data['bucketTypeHash']) ? $data['bucketTypeHash'] : null;
        $this->container['applyCustomArtDyes'] = isset($data['applyCustomArtDyes']) ? $data['applyCustomArtDyes'] : null;
        $this->container['artDyeChannels'] = isset($data['artDyeChannels']) ? $data['artDyeChannels'] : null;
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
     * Gets equipmentCategoryHash
     *
     * @return int|null
     */
    public function getEquipmentCategoryHash()
    {
        return $this->container['equipmentCategoryHash'];
    }

    /**
     * Sets equipmentCategoryHash
     *
     * @param int|null $equipmentCategoryHash These technically point to \"Equipment Category Definitions\". But don't get excited. There's nothing of significant value in those definitions, so I didn't bother to expose them. You can use the hash here to group equipment slots by common functionality, which serves the same purpose as if we had the Equipment Category definitions exposed.
     *
     * @return $this
     */
    public function setEquipmentCategoryHash($equipmentCategoryHash)
    {
        $this->container['equipmentCategoryHash'] = $equipmentCategoryHash;

        return $this;
    }

    /**
     * Gets bucketTypeHash
     *
     * @return int|null
     */
    public function getBucketTypeHash()
    {
        return $this->container['bucketTypeHash'];
    }

    /**
     * Sets bucketTypeHash
     *
     * @param int|null $bucketTypeHash The inventory bucket that owns this equipment slot.
     *
     * @return $this
     */
    public function setBucketTypeHash($bucketTypeHash)
    {
        $this->container['bucketTypeHash'] = $bucketTypeHash;

        return $this;
    }

    /**
     * Gets applyCustomArtDyes
     *
     * @return bool|null
     */
    public function getApplyCustomArtDyes()
    {
        return $this->container['applyCustomArtDyes'];
    }

    /**
     * Sets applyCustomArtDyes
     *
     * @param bool|null $applyCustomArtDyes If True, equipped items should have their custom art dyes applied when rendering the item. Otherwise, custom art dyes on an item should be ignored if the item is equipped in this slot.
     *
     * @return $this
     */
    public function setApplyCustomArtDyes($applyCustomArtDyes)
    {
        $this->container['applyCustomArtDyes'] = $applyCustomArtDyes;

        return $this;
    }

    /**
     * Gets artDyeChannels
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyArtDyeReference[]|null
     */
    public function getArtDyeChannels()
    {
        return $this->container['artDyeChannels'];
    }

    /**
     * Sets artDyeChannels
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\Definitions\DestinyArtDyeReference[]|null $artDyeChannels The Art Dye Channels that apply to this equipment slot.
     *
     * @return $this
     */
    public function setArtDyeChannels($artDyeChannels)
    {
        $this->container['artDyeChannels'] = $artDyeChannels;

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

