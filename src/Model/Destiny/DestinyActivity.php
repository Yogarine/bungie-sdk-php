<?php
/**
 * DestinyActivity
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
 * OpenAPI spec version: 2.3.5
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyActivity Class Doc Comment
 *
 * @category Class
 * @description Represents the \&quot;Live\&quot; data that we can obtain about a Character&#39;s status with a specific Activity. This will tell you whether the character can participate in the activity, as well as some other basic mutable information.   Meant to be combined with static DestinyActivityDefinition data for a full picture of the Activity.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivity implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.DestinyActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityHash' => 'int',
        'isNew' => 'bool',
        'canLead' => 'bool',
        'canJoin' => 'bool',
        'isCompleted' => 'bool',
        'isVisible' => 'bool',
        'displayLevel' => 'int',
        'recommendedLight' => 'int',
        'difficultyTier' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activityHash' => 'uint32',
        'isNew' => null,
        'canLead' => null,
        'canJoin' => null,
        'isCompleted' => null,
        'isVisible' => null,
        'displayLevel' => 'int32',
        'recommendedLight' => 'int32',
        'difficultyTier' => 'int32'
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
        'activityHash' => 'activityHash',
        'isNew' => 'isNew',
        'canLead' => 'canLead',
        'canJoin' => 'canJoin',
        'isCompleted' => 'isCompleted',
        'isVisible' => 'isVisible',
        'displayLevel' => 'displayLevel',
        'recommendedLight' => 'recommendedLight',
        'difficultyTier' => 'difficultyTier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'isNew' => 'setIsNew',
        'canLead' => 'setCanLead',
        'canJoin' => 'setCanJoin',
        'isCompleted' => 'setIsCompleted',
        'isVisible' => 'setIsVisible',
        'displayLevel' => 'setDisplayLevel',
        'recommendedLight' => 'setRecommendedLight',
        'difficultyTier' => 'setDifficultyTier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'isNew' => 'getIsNew',
        'canLead' => 'getCanLead',
        'canJoin' => 'getCanJoin',
        'isCompleted' => 'getIsCompleted',
        'isVisible' => 'getIsVisible',
        'displayLevel' => 'getDisplayLevel',
        'recommendedLight' => 'getRecommendedLight',
        'difficultyTier' => 'getDifficultyTier'
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
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['isNew'] = isset($data['isNew']) ? $data['isNew'] : null;
        $this->container['canLead'] = isset($data['canLead']) ? $data['canLead'] : null;
        $this->container['canJoin'] = isset($data['canJoin']) ? $data['canJoin'] : null;
        $this->container['isCompleted'] = isset($data['isCompleted']) ? $data['isCompleted'] : null;
        $this->container['isVisible'] = isset($data['isVisible']) ? $data['isVisible'] : null;
        $this->container['displayLevel'] = isset($data['displayLevel']) ? $data['displayLevel'] : null;
        $this->container['recommendedLight'] = isset($data['recommendedLight']) ? $data['recommendedLight'] : null;
        $this->container['difficultyTier'] = isset($data['difficultyTier']) ? $data['difficultyTier'] : null;
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
     * Gets activityHash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int|null $activityHash The hash identifier of the Activity. Use this to look up the DestinyActivityDefinition of the activity.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets isNew
     *
     * @return bool|null
     */
    public function getIsNew()
    {
        return $this->container['isNew'];
    }

    /**
     * Sets isNew
     *
     * @param bool|null $isNew If true, then the activity should have a \"new\" indicator in the Director UI.
     *
     * @return $this
     */
    public function setIsNew($isNew)
    {
        $this->container['isNew'] = $isNew;

        return $this;
    }

    /**
     * Gets canLead
     *
     * @return bool|null
     */
    public function getCanLead()
    {
        return $this->container['canLead'];
    }

    /**
     * Sets canLead
     *
     * @param bool|null $canLead If true, the user is allowed to lead a Fireteam into this activity.
     *
     * @return $this
     */
    public function setCanLead($canLead)
    {
        $this->container['canLead'] = $canLead;

        return $this;
    }

    /**
     * Gets canJoin
     *
     * @return bool|null
     */
    public function getCanJoin()
    {
        return $this->container['canJoin'];
    }

    /**
     * Sets canJoin
     *
     * @param bool|null $canJoin If true, the user is allowed to join with another Fireteam in this activity.
     *
     * @return $this
     */
    public function setCanJoin($canJoin)
    {
        $this->container['canJoin'] = $canJoin;

        return $this;
    }

    /**
     * Gets isCompleted
     *
     * @return bool|null
     */
    public function getIsCompleted()
    {
        return $this->container['isCompleted'];
    }

    /**
     * Sets isCompleted
     *
     * @param bool|null $isCompleted If true, we both have the ability to know that the user has completed this activity and they have completed it. Unfortunately, we can't necessarily know this for all activities. As such, this should probably only be used if you already know in advance which specific activities you wish to check.
     *
     * @return $this
     */
    public function setIsCompleted($isCompleted)
    {
        $this->container['isCompleted'] = $isCompleted;

        return $this;
    }

    /**
     * Gets isVisible
     *
     * @return bool|null
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     *
     * @param bool|null $isVisible If true, the user should be able to see this activity.
     *
     * @return $this
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets displayLevel
     *
     * @return int|null
     */
    public function getDisplayLevel()
    {
        return $this->container['displayLevel'];
    }

    /**
     * Sets displayLevel
     *
     * @param int|null $displayLevel The difficulty level of the activity, if applicable.
     *
     * @return $this
     */
    public function setDisplayLevel($displayLevel)
    {
        $this->container['displayLevel'] = $displayLevel;

        return $this;
    }

    /**
     * Gets recommendedLight
     *
     * @return int|null
     */
    public function getRecommendedLight()
    {
        return $this->container['recommendedLight'];
    }

    /**
     * Sets recommendedLight
     *
     * @param int|null $recommendedLight The recommended light level for the activity, if applicable.
     *
     * @return $this
     */
    public function setRecommendedLight($recommendedLight)
    {
        $this->container['recommendedLight'] = $recommendedLight;

        return $this;
    }

    /**
     * Gets difficultyTier
     *
     * @return int|null
     */
    public function getDifficultyTier()
    {
        return $this->container['difficultyTier'];
    }

    /**
     * Sets difficultyTier
     *
     * @param int|null $difficultyTier A DestinyActivityDifficultyTier enum value indicating the difficulty of the activity.
     *
     * @return $this
     */
    public function setDifficultyTier($difficultyTier)
    {
        $this->container['difficultyTier'] = $difficultyTier;

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


