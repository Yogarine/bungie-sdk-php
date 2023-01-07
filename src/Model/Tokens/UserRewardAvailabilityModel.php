<?php
/**
 * UserRewardAvailabilityModel
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

namespace Bungie\Model\Tokens;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * UserRewardAvailabilityModel Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserRewardAvailabilityModel implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tokens.UserRewardAvailabilityModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availabilityModel' => '\Bungie\Model\Tokens\RewardAvailabilityModel',
        'isAvailableForUser' => 'bool',
        'isUnlockedForUser' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'availabilityModel' => null,
        'isAvailableForUser' => null,
        'isUnlockedForUser' => null
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
        'availabilityModel' => 'AvailabilityModel',
        'isAvailableForUser' => 'IsAvailableForUser',
        'isUnlockedForUser' => 'IsUnlockedForUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availabilityModel' => 'setAvailabilityModel',
        'isAvailableForUser' => 'setIsAvailableForUser',
        'isUnlockedForUser' => 'setIsUnlockedForUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availabilityModel' => 'getAvailabilityModel',
        'isAvailableForUser' => 'getIsAvailableForUser',
        'isUnlockedForUser' => 'getIsUnlockedForUser'
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
        $this->container['availabilityModel'] = isset($data['availabilityModel']) ? $data['availabilityModel'] : null;
        $this->container['isAvailableForUser'] = isset($data['isAvailableForUser']) ? $data['isAvailableForUser'] : null;
        $this->container['isUnlockedForUser'] = isset($data['isUnlockedForUser']) ? $data['isUnlockedForUser'] : null;
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
     * Gets availabilityModel
     *
     * @return \Bungie\Model\Tokens\RewardAvailabilityModel|null
     */
    public function getAvailabilityModel()
    {
        return $this->container['availabilityModel'];
    }

    /**
     * Sets availabilityModel
     *
     * @param \Bungie\Model\Tokens\RewardAvailabilityModel|null $availabilityModel availabilityModel
     *
     * @return $this
     */
    public function setAvailabilityModel($availabilityModel)
    {
        $this->container['availabilityModel'] = $availabilityModel;

        return $this;
    }

    /**
     * Gets isAvailableForUser
     *
     * @return bool|null
     */
    public function getIsAvailableForUser()
    {
        return $this->container['isAvailableForUser'];
    }

    /**
     * Sets isAvailableForUser
     *
     * @param bool|null $isAvailableForUser isAvailableForUser
     *
     * @return $this
     */
    public function setIsAvailableForUser($isAvailableForUser)
    {
        $this->container['isAvailableForUser'] = $isAvailableForUser;

        return $this;
    }

    /**
     * Gets isUnlockedForUser
     *
     * @return bool|null
     */
    public function getIsUnlockedForUser()
    {
        return $this->container['isUnlockedForUser'];
    }

    /**
     * Sets isUnlockedForUser
     *
     * @param bool|null $isUnlockedForUser isUnlockedForUser
     *
     * @return $this
     */
    public function setIsUnlockedForUser($isUnlockedForUser)
    {
        $this->container['isUnlockedForUser'] = $isUnlockedForUser;

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


