<?php
/**
 * DestinyPlugWhitelistEntryDefinition
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

namespace Bungie\Model\Destiny\Definitions\Sockets;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPlugWhitelistEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description Defines a plug \&quot;Category\&quot; that is allowed to be plugged into a socket of this type.  This should be compared against a given plug item&#39;s DestinyInventoryItemDefinition.plug.plugCategoryHash, which indicates the plug item&#39;s category.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPlugWhitelistEntryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Sockets.DestinyPlugWhitelistEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryHash' => 'int',
        'categoryIdentifier' => 'string',
        'reinitializationPossiblePlugHashes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'categoryHash' => 'uint32',
        'categoryIdentifier' => null,
        'reinitializationPossiblePlugHashes' => 'uint32'
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
        'reinitializationPossiblePlugHashes' => 'reinitializationPossiblePlugHashes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryHash' => 'setCategoryHash',
        'categoryIdentifier' => 'setCategoryIdentifier',
        'reinitializationPossiblePlugHashes' => 'setReinitializationPossiblePlugHashes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryHash' => 'getCategoryHash',
        'categoryIdentifier' => 'getCategoryIdentifier',
        'reinitializationPossiblePlugHashes' => 'getReinitializationPossiblePlugHashes'
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
        $this->container['reinitializationPossiblePlugHashes'] = isset($data['reinitializationPossiblePlugHashes']) ? $data['reinitializationPossiblePlugHashes'] : null;
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
     * @param int|null $categoryHash The hash identifier of the Plug Category to compare against the plug item's plug.plugCategoryHash.  Note that this does NOT relate to any Definition in itself, it is only used for comparison purposes.
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
     * @param string|null $categoryIdentifier The string identifier for the category, which is here mostly for debug purposes.
     *
     * @return $this
     */
    public function setCategoryIdentifier($categoryIdentifier)
    {
        $this->container['categoryIdentifier'] = $categoryIdentifier;

        return $this;
    }

    /**
     * Gets reinitializationPossiblePlugHashes
     *
     * @return int[]|null
     */
    public function getReinitializationPossiblePlugHashes()
    {
        return $this->container['reinitializationPossiblePlugHashes'];
    }

    /**
     * Sets reinitializationPossiblePlugHashes
     *
     * @param int[]|null $reinitializationPossiblePlugHashes The list of all plug items (DestinyInventoryItemDefinition) that the socket may randomly be populated with when reinitialized.  Which ones you should actually show are determined by the plug being inserted into the socket, and the socket’s type.  When you inspect the plug that could go into a Masterwork Socket, look up the socket type of the socket being inspected and find the DestinySocketTypeDefinition.  Then, look at the Plugs that can fit in that socket. Find the Whitelist in the DestinySocketTypeDefinition that matches the plug item’s categoryhash.  That whitelist entry will potentially have a new “reinitializationPossiblePlugHashes” property.If it does, that means we know what it will roll if you try to insert this plug into this socket.
     *
     * @return $this
     */
    public function setReinitializationPossiblePlugHashes($reinitializationPossiblePlugHashes)
    {
        $this->container['reinitializationPossiblePlugHashes'] = $reinitializationPossiblePlugHashes;

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


