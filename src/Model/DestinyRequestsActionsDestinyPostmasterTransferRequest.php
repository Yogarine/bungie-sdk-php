<?php
/**
 * DestinyRequestsActionsDestinyPostmasterTransferRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyRequestsActionsDestinyPostmasterTransferRequest Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyRequestsActionsDestinyPostmasterTransferRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Requests.Actions.DestinyPostmasterTransferRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemReferenceHash' => 'int',
        'stackSize' => 'int',
        'itemId' => 'int',
        'characterId' => 'int',
        'membershipType' => '\Bungie\Model\BungieMembershipType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemReferenceHash' => 'uint32',
        'stackSize' => 'int32',
        'itemId' => 'int64',
        'characterId' => 'int64',
        'membershipType' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'itemReferenceHash' => 'itemReferenceHash',
        'stackSize' => 'stackSize',
        'itemId' => 'itemId',
        'characterId' => 'characterId',
        'membershipType' => 'membershipType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemReferenceHash' => 'setItemReferenceHash',
        'stackSize' => 'setStackSize',
        'itemId' => 'setItemId',
        'characterId' => 'setCharacterId',
        'membershipType' => 'setMembershipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemReferenceHash' => 'getItemReferenceHash',
        'stackSize' => 'getStackSize',
        'itemId' => 'getItemId',
        'characterId' => 'getCharacterId',
        'membershipType' => 'getMembershipType'
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
        return self::$swaggerModelName;
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
        $this->container['itemReferenceHash'] = isset($data['itemReferenceHash']) ? $data['itemReferenceHash'] : null;
        $this->container['stackSize'] = isset($data['stackSize']) ? $data['stackSize'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['membershipType'] = isset($data['membershipType']) ? $data['membershipType'] : null;
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

        return true;
    }


    /**
     * Gets itemReferenceHash
     *
     * @return int
     */
    public function getItemReferenceHash()
    {
        return $this->container['itemReferenceHash'];
    }

    /**
     * Sets itemReferenceHash
     *
     * @param int $itemReferenceHash itemReferenceHash
     *
     * @return $this
     */
    public function setItemReferenceHash($itemReferenceHash)
    {
        $this->container['itemReferenceHash'] = $itemReferenceHash;

        return $this;
    }

    /**
     * Gets stackSize
     *
     * @return int
     */
    public function getStackSize()
    {
        return $this->container['stackSize'];
    }

    /**
     * Sets stackSize
     *
     * @param int $stackSize stackSize
     *
     * @return $this
     */
    public function setStackSize($stackSize)
    {
        $this->container['stackSize'] = $stackSize;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param int $itemId itemId
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets characterId
     *
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     *
     * @param int $characterId characterId
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets membershipType
     *
     * @return \Bungie\Model\BungieMembershipType
     */
    public function getMembershipType()
    {
        return $this->container['membershipType'];
    }

    /**
     * Sets membershipType
     *
     * @param \Bungie\Model\BungieMembershipType $membershipType membershipType
     *
     * @return $this
     */
    public function setMembershipType($membershipType)
    {
        $this->container['membershipType'] = $membershipType;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


