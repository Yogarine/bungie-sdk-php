<?php
/**
 * DestinyInsertPlugsRequestEntry
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Requests\Actions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyInsertPlugsRequestEntry Class Doc Comment
 *
 * @category Class
 * @description Represents all of the data related to a single plug to be inserted.  Note that, while you *can* point to a socket that represents infusion, you will receive an error if you attempt to do so. Come on guys, let&#39;s play nice.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyInsertPlugsRequestEntry implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Requests.Actions.DestinyInsertPlugsRequestEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'socketIndex' => 'int',
        'socketArrayType' => 'int',
        'plugItemHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'socketIndex' => 'int32',
        'socketArrayType' => 'int32',
        'plugItemHash' => 'uint32'
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
        'socketIndex' => 'socketIndex',
        'socketArrayType' => 'socketArrayType',
        'plugItemHash' => 'plugItemHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'socketIndex' => 'setSocketIndex',
        'socketArrayType' => 'setSocketArrayType',
        'plugItemHash' => 'setPlugItemHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'socketIndex' => 'getSocketIndex',
        'socketArrayType' => 'getSocketArrayType',
        'plugItemHash' => 'getPlugItemHash'
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
        $this->container['socketIndex'] = isset($data['socketIndex']) ? $data['socketIndex'] : null;
        $this->container['socketArrayType'] = isset($data['socketArrayType']) ? $data['socketArrayType'] : null;
        $this->container['plugItemHash'] = isset($data['plugItemHash']) ? $data['plugItemHash'] : null;
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
     * Gets socketIndex
     *
     * @return int|null
     */
    public function getSocketIndex()
    {
        return $this->container['socketIndex'];
    }

    /**
     * Sets socketIndex
     *
     * @param int|null $socketIndex The index into the socket array, which identifies the specific socket being operated on. We also need to know the socketArrayType in order to uniquely identify the socket.  Don't point to or try to insert a plug into an infusion socket. It won't work.
     *
     * @return $this
     */
    public function setSocketIndex($socketIndex)
    {
        $this->container['socketIndex'] = $socketIndex;

        return $this;
    }

    /**
     * Gets socketArrayType
     *
     * @return int|null
     */
    public function getSocketArrayType()
    {
        return $this->container['socketArrayType'];
    }

    /**
     * Sets socketArrayType
     *
     * @param int|null $socketArrayType This property, combined with the socketIndex, tells us which socket we are referring to (since operations can be performed on both Intrinsic and \"default\" sockets, and they occupy different arrays in the Inventory Item Definition). I know, I know. Don't give me that look.
     *
     * @return $this
     */
    public function setSocketArrayType($socketArrayType)
    {
        $this->container['socketArrayType'] = $socketArrayType;

        return $this;
    }

    /**
     * Gets plugItemHash
     *
     * @return int|null
     */
    public function getPlugItemHash()
    {
        return $this->container['plugItemHash'];
    }

    /**
     * Sets plugItemHash
     *
     * @param int|null $plugItemHash Plugs are never instanced (except in infusion). So with the hash alone, we should be able to: 1) Infer whether the player actually needs to have the item, or if it's a reusable plug 2) Perform any operation needed to use the Plug, including removing the plug item and running reward sheets.
     *
     * @return $this
     */
    public function setPlugItemHash($plugItemHash)
    {
        $this->container['plugItemHash'] = $plugItemHash;

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


