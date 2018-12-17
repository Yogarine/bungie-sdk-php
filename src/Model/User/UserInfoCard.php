<?php
/**
 * UserInfoCard
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

namespace Bungie\Model\User;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * UserInfoCard Class Doc Comment
 *
 * @category Class
 * @description This contract supplies basic information commonly used to display a minimal amount of information about a user. Take care to not add more properties here unless the property applies in all (or at least the majority) of the situations where UserInfoCard is used. Avoid adding game specific or platform specific details here. In cases where UserInfoCard is a subset of the data needed in a contract, use UserInfoCard as a property of other contracts.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserInfoCard implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.UserInfoCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'supplementalDisplayName' => 'string',
        'iconPath' => 'string',
        'membershipType' => '\Bungie\Model\BungieMembershipType',
        'membershipId' => 'int',
        'displayName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'supplementalDisplayName' => null,
        'iconPath' => null,
        'membershipType' => null,
        'membershipId' => 'int64',
        'displayName' => null
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
        'supplementalDisplayName' => 'supplementalDisplayName',
        'iconPath' => 'iconPath',
        'membershipType' => 'membershipType',
        'membershipId' => 'membershipId',
        'displayName' => 'displayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'supplementalDisplayName' => 'setSupplementalDisplayName',
        'iconPath' => 'setIconPath',
        'membershipType' => 'setMembershipType',
        'membershipId' => 'setMembershipId',
        'displayName' => 'setDisplayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'supplementalDisplayName' => 'getSupplementalDisplayName',
        'iconPath' => 'getIconPath',
        'membershipType' => 'getMembershipType',
        'membershipId' => 'getMembershipId',
        'displayName' => 'getDisplayName'
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
        $this->container['supplementalDisplayName'] = isset($data['supplementalDisplayName']) ? $data['supplementalDisplayName'] : null;
        $this->container['iconPath'] = isset($data['iconPath']) ? $data['iconPath'] : null;
        $this->container['membershipType'] = isset($data['membershipType']) ? $data['membershipType'] : null;
        $this->container['membershipId'] = isset($data['membershipId']) ? $data['membershipId'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
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
     * Gets supplementalDisplayName
     *
     * @return string|null
     */
    public function getSupplementalDisplayName()
    {
        return $this->container['supplementalDisplayName'];
    }

    /**
     * Sets supplementalDisplayName
     *
     * @param string|null $supplementalDisplayName A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc.
     *
     * @return $this
     */
    public function setSupplementalDisplayName($supplementalDisplayName)
    {
        $this->container['supplementalDisplayName'] = $supplementalDisplayName;

        return $this;
    }

    /**
     * Gets iconPath
     *
     * @return string|null
     */
    public function getIconPath()
    {
        return $this->container['iconPath'];
    }

    /**
     * Sets iconPath
     *
     * @param string|null $iconPath URL the Icon if available.
     *
     * @return $this
     */
    public function setIconPath($iconPath)
    {
        $this->container['iconPath'] = $iconPath;

        return $this;
    }

    /**
     * Gets membershipType
     *
     * @return \Bungie\Model\BungieMembershipType|null
     */
    public function getMembershipType()
    {
        return $this->container['membershipType'];
    }

    /**
     * Sets membershipType
     *
     * @param \Bungie\Model\BungieMembershipType|null $membershipType Type of the membership.
     *
     * @return $this
     */
    public function setMembershipType($membershipType)
    {
        $this->container['membershipType'] = $membershipType;

        return $this;
    }

    /**
     * Gets membershipId
     *
     * @return int|null
     */
    public function getMembershipId()
    {
        return $this->container['membershipId'];
    }

    /**
     * Sets membershipId
     *
     * @param int|null $membershipId Membership ID as they user is known in the Accounts service
     *
     * @return $this
     */
    public function setMembershipId($membershipId)
    {
        $this->container['membershipId'] = $membershipId;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API.
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

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


