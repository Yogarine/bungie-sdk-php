<?php
/**
 * AwaAuthorizationResult
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
 * OpenAPI spec version: 2.4.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Advanced;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * AwaAuthorizationResult Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AwaAuthorizationResult implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Advanced.AwaAuthorizationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userSelection' => 'int',
        'responseReason' => 'int',
        'developerNote' => 'string',
        'actionToken' => 'string',
        'maximumNumberOfUses' => 'int',
        'validUntil' => '\DateTime',
        'type' => 'int',
        'membershipType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'userSelection' => 'int32',
        'responseReason' => 'int32',
        'developerNote' => null,
        'actionToken' => null,
        'maximumNumberOfUses' => 'int32',
        'validUntil' => 'date-time',
        'type' => 'int32',
        'membershipType' => 'int32'
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
        'userSelection' => 'userSelection',
        'responseReason' => 'responseReason',
        'developerNote' => 'developerNote',
        'actionToken' => 'actionToken',
        'maximumNumberOfUses' => 'maximumNumberOfUses',
        'validUntil' => 'validUntil',
        'type' => 'type',
        'membershipType' => 'membershipType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userSelection' => 'setUserSelection',
        'responseReason' => 'setResponseReason',
        'developerNote' => 'setDeveloperNote',
        'actionToken' => 'setActionToken',
        'maximumNumberOfUses' => 'setMaximumNumberOfUses',
        'validUntil' => 'setValidUntil',
        'type' => 'setType',
        'membershipType' => 'setMembershipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userSelection' => 'getUserSelection',
        'responseReason' => 'getResponseReason',
        'developerNote' => 'getDeveloperNote',
        'actionToken' => 'getActionToken',
        'maximumNumberOfUses' => 'getMaximumNumberOfUses',
        'validUntil' => 'getValidUntil',
        'type' => 'getType',
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
        $this->container['userSelection'] = isset($data['userSelection']) ? $data['userSelection'] : null;
        $this->container['responseReason'] = isset($data['responseReason']) ? $data['responseReason'] : null;
        $this->container['developerNote'] = isset($data['developerNote']) ? $data['developerNote'] : null;
        $this->container['actionToken'] = isset($data['actionToken']) ? $data['actionToken'] : null;
        $this->container['maximumNumberOfUses'] = isset($data['maximumNumberOfUses']) ? $data['maximumNumberOfUses'] : null;
        $this->container['validUntil'] = isset($data['validUntil']) ? $data['validUntil'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets userSelection
     *
     * @return int|null
     */
    public function getUserSelection()
    {
        return $this->container['userSelection'];
    }

    /**
     * Sets userSelection
     *
     * @param int|null $userSelection Indication of how the user responded to the request. If the value is \"Approved\" the actionToken will contain the token that can be presented when performing the advanced write action.
     *
     * @return $this
     */
    public function setUserSelection($userSelection)
    {
        $this->container['userSelection'] = $userSelection;

        return $this;
    }

    /**
     * Gets responseReason
     *
     * @return int|null
     */
    public function getResponseReason()
    {
        return $this->container['responseReason'];
    }

    /**
     * Sets responseReason
     *
     * @param int|null $responseReason responseReason
     *
     * @return $this
     */
    public function setResponseReason($responseReason)
    {
        $this->container['responseReason'] = $responseReason;

        return $this;
    }

    /**
     * Gets developerNote
     *
     * @return string|null
     */
    public function getDeveloperNote()
    {
        return $this->container['developerNote'];
    }

    /**
     * Sets developerNote
     *
     * @param string|null $developerNote Message to the app developer to help understand the response.
     *
     * @return $this
     */
    public function setDeveloperNote($developerNote)
    {
        $this->container['developerNote'] = $developerNote;

        return $this;
    }

    /**
     * Gets actionToken
     *
     * @return string|null
     */
    public function getActionToken()
    {
        return $this->container['actionToken'];
    }

    /**
     * Sets actionToken
     *
     * @param string|null $actionToken Credential used to prove the user authorized an advanced write action.
     *
     * @return $this
     */
    public function setActionToken($actionToken)
    {
        $this->container['actionToken'] = $actionToken;

        return $this;
    }

    /**
     * Gets maximumNumberOfUses
     *
     * @return int|null
     */
    public function getMaximumNumberOfUses()
    {
        return $this->container['maximumNumberOfUses'];
    }

    /**
     * Sets maximumNumberOfUses
     *
     * @param int|null $maximumNumberOfUses This token may be used to perform the requested action this number of times, at a maximum. If this value is 0, then there is no limit.
     *
     * @return $this
     */
    public function setMaximumNumberOfUses($maximumNumberOfUses)
    {
        $this->container['maximumNumberOfUses'] = $maximumNumberOfUses;

        return $this;
    }

    /**
     * Gets validUntil
     *
     * @return \DateTime|null
     */
    public function getValidUntil()
    {
        return $this->container['validUntil'];
    }

    /**
     * Sets validUntil
     *
     * @param \DateTime|null $validUntil Time, UTC, when token expires.
     *
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->container['validUntil'] = $validUntil;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type Advanced Write Action Type from the permission request.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets membershipType
     *
     * @return int|null
     */
    public function getMembershipType()
    {
        return $this->container['membershipType'];
    }

    /**
     * Sets membershipType
     *
     * @param int|null $membershipType MembershipType from the permission request.
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


