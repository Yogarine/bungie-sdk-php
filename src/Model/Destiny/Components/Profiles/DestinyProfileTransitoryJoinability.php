<?php
/**
 * DestinyProfileTransitoryJoinability
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
 * OpenAPI spec version: 2.17.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Components\Profiles;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyProfileTransitoryJoinability Class Doc Comment
 *
 * @category Class
 * @description Some basic information about whether you can be joined, how many slots are left etc. Note that this can change quickly, so it may not actually be useful. But perhaps it will be in some use cases?
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProfileTransitoryJoinability implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Profiles.DestinyProfileTransitoryJoinability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'openSlots' => 'int',
        'privacySetting' => 'int',
        'closedReasons' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'openSlots' => 'int32',
        'privacySetting' => 'int32',
        'closedReasons' => 'int32'
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
        'openSlots' => 'openSlots',
        'privacySetting' => 'privacySetting',
        'closedReasons' => 'closedReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'openSlots' => 'setOpenSlots',
        'privacySetting' => 'setPrivacySetting',
        'closedReasons' => 'setClosedReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'openSlots' => 'getOpenSlots',
        'privacySetting' => 'getPrivacySetting',
        'closedReasons' => 'getClosedReasons'
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
        $this->container['openSlots'] = isset($data['openSlots']) ? $data['openSlots'] : null;
        $this->container['privacySetting'] = isset($data['privacySetting']) ? $data['privacySetting'] : null;
        $this->container['closedReasons'] = isset($data['closedReasons']) ? $data['closedReasons'] : null;
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
     * Gets openSlots
     *
     * @return int|null
     */
    public function getOpenSlots()
    {
        return $this->container['openSlots'];
    }

    /**
     * Sets openSlots
     *
     * @param int|null $openSlots The number of slots still available on this person's fireteam.
     *
     * @return $this
     */
    public function setOpenSlots($openSlots)
    {
        $this->container['openSlots'] = $openSlots;

        return $this;
    }

    /**
     * Gets privacySetting
     *
     * @return int|null
     */
    public function getPrivacySetting()
    {
        return $this->container['privacySetting'];
    }

    /**
     * Sets privacySetting
     *
     * @param int|null $privacySetting Who the person is currently allowing invites from.
     *
     * @return $this
     */
    public function setPrivacySetting($privacySetting)
    {
        $this->container['privacySetting'] = $privacySetting;

        return $this;
    }

    /**
     * Gets closedReasons
     *
     * @return int|null
     */
    public function getClosedReasons()
    {
        return $this->container['closedReasons'];
    }

    /**
     * Sets closedReasons
     *
     * @param int|null $closedReasons Reasons why a person can't join this person's fireteam.
     *
     * @return $this
     */
    public function setClosedReasons($closedReasons)
    {
        $this->container['closedReasons'] = $closedReasons;

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


