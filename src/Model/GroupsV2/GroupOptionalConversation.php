<?php
/**
 * GroupOptionalConversation
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

namespace Bungie\Model\GroupsV2;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * GroupOptionalConversation Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupOptionalConversation implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupsV2.GroupOptionalConversation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'int',
        'conversationId' => 'int',
        'chatEnabled' => 'bool',
        'chatName' => 'string',
        'chatSecurity' => '\Bungie\Model\GroupsV2\ChatSecuritySetting'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => 'int64',
        'conversationId' => 'int64',
        'chatEnabled' => null,
        'chatName' => null,
        'chatSecurity' => null
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
        'groupId' => 'groupId',
        'conversationId' => 'conversationId',
        'chatEnabled' => 'chatEnabled',
        'chatName' => 'chatName',
        'chatSecurity' => 'chatSecurity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'conversationId' => 'setConversationId',
        'chatEnabled' => 'setChatEnabled',
        'chatName' => 'setChatName',
        'chatSecurity' => 'setChatSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'conversationId' => 'getConversationId',
        'chatEnabled' => 'getChatEnabled',
        'chatName' => 'getChatName',
        'chatSecurity' => 'getChatSecurity'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['conversationId'] = isset($data['conversationId']) ? $data['conversationId'] : null;
        $this->container['chatEnabled'] = isset($data['chatEnabled']) ? $data['chatEnabled'] : null;
        $this->container['chatName'] = isset($data['chatName']) ? $data['chatName'] : null;
        $this->container['chatSecurity'] = isset($data['chatSecurity']) ? $data['chatSecurity'] : null;
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
     * Gets groupId
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param int|null $groupId groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets conversationId
     *
     * @return int|null
     */
    public function getConversationId()
    {
        return $this->container['conversationId'];
    }

    /**
     * Sets conversationId
     *
     * @param int|null $conversationId conversationId
     *
     * @return $this
     */
    public function setConversationId($conversationId)
    {
        $this->container['conversationId'] = $conversationId;

        return $this;
    }

    /**
     * Gets chatEnabled
     *
     * @return bool|null
     */
    public function getChatEnabled()
    {
        return $this->container['chatEnabled'];
    }

    /**
     * Sets chatEnabled
     *
     * @param bool|null $chatEnabled chatEnabled
     *
     * @return $this
     */
    public function setChatEnabled($chatEnabled)
    {
        $this->container['chatEnabled'] = $chatEnabled;

        return $this;
    }

    /**
     * Gets chatName
     *
     * @return string|null
     */
    public function getChatName()
    {
        return $this->container['chatName'];
    }

    /**
     * Sets chatName
     *
     * @param string|null $chatName chatName
     *
     * @return $this
     */
    public function setChatName($chatName)
    {
        $this->container['chatName'] = $chatName;

        return $this;
    }

    /**
     * Gets chatSecurity
     *
     * @return \Bungie\Model\GroupsV2\ChatSecuritySetting|null
     */
    public function getChatSecurity()
    {
        return $this->container['chatSecurity'];
    }

    /**
     * Sets chatSecurity
     *
     * @param \Bungie\Model\GroupsV2\ChatSecuritySetting|null $chatSecurity chatSecurity
     *
     * @return $this
     */
    public function setChatSecurity($chatSecurity)
    {
        $this->container['chatSecurity'] = $chatSecurity;

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


