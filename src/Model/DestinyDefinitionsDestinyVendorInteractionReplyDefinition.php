<?php
/**
 * DestinyDefinitionsDestinyVendorInteractionReplyDefinition
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

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyDefinitionsDestinyVendorInteractionReplyDefinition Class Doc Comment
 *
 * @category Class
 * @description When the interaction is replied to, Reward sites will fire and items potentially selected based on whether the given unlock expression is TRUE.  You can potentially choose one from multiple replies when replying to an interaction: this is how you get either/or rewards from vendors.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDefinitionsDestinyVendorInteractionReplyDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyVendorInteractionReplyDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemRewardsSelection' => 'DestinyDestinyVendorInteractionRewardSelection',
        'reply' => 'string',
        'replyType' => 'DestinyDestinyVendorReplyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemRewardsSelection' => null,
        'reply' => null,
        'replyType' => null
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
        'itemRewardsSelection' => 'itemRewardsSelection',
        'reply' => 'reply',
        'replyType' => 'replyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemRewardsSelection' => 'setItemRewardsSelection',
        'reply' => 'setReply',
        'replyType' => 'setReplyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemRewardsSelection' => 'getItemRewardsSelection',
        'reply' => 'getReply',
        'replyType' => 'getReplyType'
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
        $this->container['itemRewardsSelection'] = isset($data['itemRewardsSelection']) ? $data['itemRewardsSelection'] : null;
        $this->container['reply'] = isset($data['reply']) ? $data['reply'] : null;
        $this->container['replyType'] = isset($data['replyType']) ? $data['replyType'] : null;
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
     * Gets itemRewardsSelection
     *
     * @return DestinyDestinyVendorInteractionRewardSelection|null
     */
    public function getItemRewardsSelection()
    {
        return $this->container['itemRewardsSelection'];
    }

    /**
     * Sets itemRewardsSelection
     *
     * @param DestinyDestinyVendorInteractionRewardSelection|null $itemRewardsSelection The rewards granted upon responding to the vendor.
     *
     * @return $this
     */
    public function setItemRewardsSelection($itemRewardsSelection)
    {
        $this->container['itemRewardsSelection'] = $itemRewardsSelection;

        return $this;
    }

    /**
     * Gets reply
     *
     * @return string|null
     */
    public function getReply()
    {
        return $this->container['reply'];
    }

    /**
     * Sets reply
     *
     * @param string|null $reply The localized text for the reply.
     *
     * @return $this
     */
    public function setReply($reply)
    {
        $this->container['reply'] = $reply;

        return $this;
    }

    /**
     * Gets replyType
     *
     * @return DestinyDestinyVendorReplyType|null
     */
    public function getReplyType()
    {
        return $this->container['replyType'];
    }

    /**
     * Sets replyType
     *
     * @param DestinyDestinyVendorReplyType|null $replyType An enum indicating the type of reply being made.
     *
     * @return $this
     */
    public function setReplyType($replyType)
    {
        $this->container['replyType'] = $replyType;

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


