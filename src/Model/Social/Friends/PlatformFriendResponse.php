<?php
/**
 * PlatformFriendResponse
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

namespace Bungie\Model\Social\Friends;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * PlatformFriendResponse Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlatformFriendResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Social.Friends.PlatformFriendResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemsPerPage' => 'int',
        'currentPage' => 'int',
        'hasMore' => 'bool',
        'platformFriends' => '\Bungie\Model\Social\Friends\PlatformFriend[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemsPerPage' => 'int32',
        'currentPage' => 'int32',
        'hasMore' => null,
        'platformFriends' => null
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
        'itemsPerPage' => 'itemsPerPage',
        'currentPage' => 'currentPage',
        'hasMore' => 'hasMore',
        'platformFriends' => 'platformFriends'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemsPerPage' => 'setItemsPerPage',
        'currentPage' => 'setCurrentPage',
        'hasMore' => 'setHasMore',
        'platformFriends' => 'setPlatformFriends'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemsPerPage' => 'getItemsPerPage',
        'currentPage' => 'getCurrentPage',
        'hasMore' => 'getHasMore',
        'platformFriends' => 'getPlatformFriends'
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
        $this->container['itemsPerPage'] = isset($data['itemsPerPage']) ? $data['itemsPerPage'] : null;
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
        $this->container['platformFriends'] = isset($data['platformFriends']) ? $data['platformFriends'] : null;
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
     * Gets itemsPerPage
     *
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->container['itemsPerPage'];
    }

    /**
     * Sets itemsPerPage
     *
     * @param int|null $itemsPerPage itemsPerPage
     *
     * @return $this
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->container['itemsPerPage'] = $itemsPerPage;

        return $this;
    }

    /**
     * Gets currentPage
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
     * Sets currentPage
     *
     * @param int|null $currentPage currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * Gets hasMore
     *
     * @return bool|null
     */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
     * Sets hasMore
     *
     * @param bool|null $hasMore hasMore
     *
     * @return $this
     */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;

        return $this;
    }

    /**
     * Gets platformFriends
     *
     * @return \Bungie\Model\Social\Friends\PlatformFriend[]|null
     */
    public function getPlatformFriends()
    {
        return $this->container['platformFriends'];
    }

    /**
     * Sets platformFriends
     *
     * @param \Bungie\Model\Social\Friends\PlatformFriend[]|null $platformFriends platformFriends
     *
     * @return $this
     */
    public function setPlatformFriends($platformFriends)
    {
        $this->container['platformFriends'] = $platformFriends;

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


