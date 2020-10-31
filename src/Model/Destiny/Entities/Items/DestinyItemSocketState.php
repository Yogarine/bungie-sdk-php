<?php
/**
 * DestinyItemSocketState
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

namespace Bungie\Model\Destiny\Entities\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemSocketState Class Doc Comment
 *
 * @category Class
 * @description The status of a given item&#39;s socket. (which plug is inserted, if any: whether it is enabled, what \&quot;reusable\&quot; plugs can be inserted, etc...)  If I had it to do over, this would probably have a DestinyItemPlug representing the inserted item instead of most of these properties. :shrug:
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSocketState implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Items.DestinyItemSocketState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plugHash' => 'int',
        'isEnabled' => 'bool',
        'isVisible' => 'bool',
        'enableFailIndexes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'plugHash' => 'uint32',
        'isEnabled' => null,
        'isVisible' => null,
        'enableFailIndexes' => 'int32'
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
        'plugHash' => 'plugHash',
        'isEnabled' => 'isEnabled',
        'isVisible' => 'isVisible',
        'enableFailIndexes' => 'enableFailIndexes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plugHash' => 'setPlugHash',
        'isEnabled' => 'setIsEnabled',
        'isVisible' => 'setIsVisible',
        'enableFailIndexes' => 'setEnableFailIndexes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plugHash' => 'getPlugHash',
        'isEnabled' => 'getIsEnabled',
        'isVisible' => 'getIsVisible',
        'enableFailIndexes' => 'getEnableFailIndexes'
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
        $this->container['plugHash'] = isset($data['plugHash']) ? $data['plugHash'] : null;
        $this->container['isEnabled'] = isset($data['isEnabled']) ? $data['isEnabled'] : null;
        $this->container['isVisible'] = isset($data['isVisible']) ? $data['isVisible'] : null;
        $this->container['enableFailIndexes'] = isset($data['enableFailIndexes']) ? $data['enableFailIndexes'] : null;
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
     * Gets plugHash
     *
     * @return int|null
     */
    public function getPlugHash()
    {
        return $this->container['plugHash'];
    }

    /**
     * Sets plugHash
     *
     * @param int|null $plugHash The currently active plug, if any.  Note that, because all plugs are statically defined, its effect on stats and perks can be statically determined using the plug item's definition. The stats and perks can be taken at face value on the plug item as the stats and perks it will provide to the user/item.
     *
     * @return $this
     */
    public function setPlugHash($plugHash)
    {
        $this->container['plugHash'] = $plugHash;

        return $this;
    }

    /**
     * Gets isEnabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['isEnabled'];
    }

    /**
     * Sets isEnabled
     *
     * @param bool|null $isEnabled Even if a plug is inserted, it doesn't mean it's enabled.  This flag indicates whether the plug is active and providing its benefits.
     *
     * @return $this
     */
    public function setIsEnabled($isEnabled)
    {
        $this->container['isEnabled'] = $isEnabled;

        return $this;
    }

    /**
     * Gets isVisible
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     *
     * @param bool|null $isVisible A plug may theoretically provide benefits but not be visible - for instance, some older items use a plug's damage type perk to modify their own damage type. These, though they are not visible, still affect the item. This field indicates that state.  An invisible plug, while it provides benefits if it is Enabled, cannot be directly modified by the user.
     *
     * @return $this
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets enableFailIndexes
     *
     * @return int[]|null
     */
    public function getEnableFailIndexes()
    {
        return $this->container['enableFailIndexes'];
    }

    /**
     * Sets enableFailIndexes
     *
     * @param int[]|null $enableFailIndexes If a plug is inserted but not enabled, this will be populated with indexes into the plug item definition's plug.enabledRules property, so that you can show the reasons why it is not enabled.
     *
     * @return $this
     */
    public function setEnableFailIndexes($enableFailIndexes)
    {
        $this->container['enableFailIndexes'] = $enableFailIndexes;

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


