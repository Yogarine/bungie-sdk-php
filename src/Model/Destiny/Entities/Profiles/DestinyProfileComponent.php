<?php
/**
 * DestinyProfileComponent
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
 * OpenAPI spec version: 2.3.4
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Entities\Profiles;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyProfileComponent Class Doc Comment
 *
 * @category Class
 * @description The most essential summary information about a Profile (in Destiny 1, we called these \&quot;Accounts\&quot;).
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProfileComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Profiles.DestinyProfileComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userInfo' => '\Bungie\Model\User\UserInfoCard',
        'dateLastPlayed' => '\DateTime',
        'versionsOwned' => 'int',
        'characterIds' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'userInfo' => null,
        'dateLastPlayed' => 'date-time',
        'versionsOwned' => 'int32',
        'characterIds' => 'int64'
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
        'userInfo' => 'userInfo',
        'dateLastPlayed' => 'dateLastPlayed',
        'versionsOwned' => 'versionsOwned',
        'characterIds' => 'characterIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userInfo' => 'setUserInfo',
        'dateLastPlayed' => 'setDateLastPlayed',
        'versionsOwned' => 'setVersionsOwned',
        'characterIds' => 'setCharacterIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userInfo' => 'getUserInfo',
        'dateLastPlayed' => 'getDateLastPlayed',
        'versionsOwned' => 'getVersionsOwned',
        'characterIds' => 'getCharacterIds'
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
        $this->container['userInfo'] = isset($data['userInfo']) ? $data['userInfo'] : null;
        $this->container['dateLastPlayed'] = isset($data['dateLastPlayed']) ? $data['dateLastPlayed'] : null;
        $this->container['versionsOwned'] = isset($data['versionsOwned']) ? $data['versionsOwned'] : null;
        $this->container['characterIds'] = isset($data['characterIds']) ? $data['characterIds'] : null;
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
     * Gets userInfo
     *
     * @return \Bungie\Model\User\UserInfoCard|null
     */
    public function getUserInfo()
    {
        return $this->container['userInfo'];
    }

    /**
     * Sets userInfo
     *
     * @param \Bungie\Model\User\UserInfoCard|null $userInfo If you need to render the Profile (their platform name, icon, etc...) somewhere, this property contains that information.
     *
     * @return $this
     */
    public function setUserInfo($userInfo)
    {
        $this->container['userInfo'] = $userInfo;

        return $this;
    }

    /**
     * Gets dateLastPlayed
     *
     * @return \DateTime|null
     */
    public function getDateLastPlayed()
    {
        return $this->container['dateLastPlayed'];
    }

    /**
     * Sets dateLastPlayed
     *
     * @param \DateTime|null $dateLastPlayed The last time the user played with any character on this Profile.
     *
     * @return $this
     */
    public function setDateLastPlayed($dateLastPlayed)
    {
        $this->container['dateLastPlayed'] = $dateLastPlayed;

        return $this;
    }

    /**
     * Gets versionsOwned
     *
     * @return int|null
     */
    public function getVersionsOwned()
    {
        return $this->container['versionsOwned'];
    }

    /**
     * Sets versionsOwned
     *
     * @param int|null $versionsOwned If you want to know what expansions they own, this will contain that data.
     *
     * @return $this
     */
    public function setVersionsOwned($versionsOwned)
    {
        $this->container['versionsOwned'] = $versionsOwned;

        return $this;
    }

    /**
     * Gets characterIds
     *
     * @return int[]|null
     */
    public function getCharacterIds()
    {
        return $this->container['characterIds'];
    }

    /**
     * Sets characterIds
     *
     * @param int[]|null $characterIds A list of the character IDs, for further querying on your part.
     *
     * @return $this
     */
    public function setCharacterIds($characterIds)
    {
        $this->container['characterIds'] = $characterIds;

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


