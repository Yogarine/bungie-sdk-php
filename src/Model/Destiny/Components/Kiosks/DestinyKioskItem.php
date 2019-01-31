<?php
/**
 * DestinyKioskItem
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

namespace Bungie\Model\Destiny\Components\Kiosks;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyKioskItem Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyKioskItem implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Kiosks.DestinyKioskItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'canAcquire' => 'bool',
        'failureIndexes' => 'int[]',
        'flavorObjective' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'canAcquire' => null,
        'failureIndexes' => 'int32',
        'flavorObjective' => null
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
        'index' => 'index',
        'canAcquire' => 'canAcquire',
        'failureIndexes' => 'failureIndexes',
        'flavorObjective' => 'flavorObjective'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'canAcquire' => 'setCanAcquire',
        'failureIndexes' => 'setFailureIndexes',
        'flavorObjective' => 'setFlavorObjective'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'canAcquire' => 'getCanAcquire',
        'failureIndexes' => 'getFailureIndexes',
        'flavorObjective' => 'getFlavorObjective'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['canAcquire'] = isset($data['canAcquire']) ? $data['canAcquire'] : null;
        $this->container['failureIndexes'] = isset($data['failureIndexes']) ? $data['failureIndexes'] : null;
        $this->container['flavorObjective'] = isset($data['flavorObjective']) ? $data['flavorObjective'] : null;
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
     * @param int|null $index The index of the item in the related DestinyVendorDefintion's itemList property, representing the sale.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets canAcquire
     *
     * @return bool|null
     */
    public function getCanAcquire()
    {
        return $this->container['canAcquire'];
    }

    /**
     * Sets canAcquire
     *
     * @param bool|null $canAcquire If true, the user can not only see the item, but they can acquire it. It is possible that a user can see a kiosk item and not be able to acquire it.
     *
     * @return $this
     */
    public function setCanAcquire($canAcquire)
    {
        $this->container['canAcquire'] = $canAcquire;

        return $this;
    }

    /**
     * Gets failureIndexes
     *
     * @return int[]|null
     */
    public function getFailureIndexes()
    {
        return $this->container['failureIndexes'];
    }

    /**
     * Sets failureIndexes
     *
     * @param int[]|null $failureIndexes Indexes into failureStrings for the Vendor, indicating the reasons why it failed if any.
     *
     * @return $this
     */
    public function setFailureIndexes($failureIndexes)
    {
        $this->container['failureIndexes'] = $failureIndexes;

        return $this;
    }

    /**
     * Gets flavorObjective
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress|null
     */
    public function getFlavorObjective()
    {
        return $this->container['flavorObjective'];
    }

    /**
     * Sets flavorObjective
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress|null $flavorObjective I may regret naming it this way - but this represents when an item has an objective that doesn't serve a beneficial purpose, but rather is used for \"flavor\" or additional information. For instance, when Emblems track specific stats, those stats are represented as Objectives on the item.
     *
     * @return $this
     */
    public function setFlavorObjective($flavorObjective)
    {
        $this->container['flavorObjective'] = $flavorObjective;

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


