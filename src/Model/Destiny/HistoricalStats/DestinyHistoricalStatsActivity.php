<?php
/**
 * DestinyHistoricalStatsActivity
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

namespace Bungie\Model\Destiny\HistoricalStats;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyHistoricalStatsActivity Class Doc Comment
 *
 * @category Class
 * @description Summary information about the activity that was played.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyHistoricalStatsActivity implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.HistoricalStats.DestinyHistoricalStatsActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'referenceId' => 'int',
        'directorActivityHash' => 'int',
        'instanceId' => 'int',
        'mode' => 'int',
        'modes' => 'int[]',
        'isPrivate' => 'bool',
        'membershipType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'referenceId' => 'uint32',
        'directorActivityHash' => 'uint32',
        'instanceId' => 'int64',
        'mode' => 'int32',
        'modes' => 'int32',
        'isPrivate' => null,
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
        'referenceId' => 'referenceId',
        'directorActivityHash' => 'directorActivityHash',
        'instanceId' => 'instanceId',
        'mode' => 'mode',
        'modes' => 'modes',
        'isPrivate' => 'isPrivate',
        'membershipType' => 'membershipType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenceId' => 'setReferenceId',
        'directorActivityHash' => 'setDirectorActivityHash',
        'instanceId' => 'setInstanceId',
        'mode' => 'setMode',
        'modes' => 'setModes',
        'isPrivate' => 'setIsPrivate',
        'membershipType' => 'setMembershipType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenceId' => 'getReferenceId',
        'directorActivityHash' => 'getDirectorActivityHash',
        'instanceId' => 'getInstanceId',
        'mode' => 'getMode',
        'modes' => 'getModes',
        'isPrivate' => 'getIsPrivate',
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
        $this->container['referenceId'] = isset($data['referenceId']) ? $data['referenceId'] : null;
        $this->container['directorActivityHash'] = isset($data['directorActivityHash']) ? $data['directorActivityHash'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['modes'] = isset($data['modes']) ? $data['modes'] : null;
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
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
     * Gets referenceId
     *
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->container['referenceId'];
    }

    /**
     * Sets referenceId
     *
     * @param int|null $referenceId The unique hash identifier of the DestinyActivityDefinition that was played. If I had this to do over, it'd be named activityHash. Too late now.
     *
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->container['referenceId'] = $referenceId;

        return $this;
    }

    /**
     * Gets directorActivityHash
     *
     * @return int|null
     */
    public function getDirectorActivityHash()
    {
        return $this->container['directorActivityHash'];
    }

    /**
     * Sets directorActivityHash
     *
     * @param int|null $directorActivityHash The unique hash identifier of the DestinyActivityDefinition that was played.
     *
     * @return $this
     */
    public function setDirectorActivityHash($directorActivityHash)
    {
        $this->container['directorActivityHash'] = $directorActivityHash;

        return $this;
    }

    /**
     * Gets instanceId
     *
     * @return int|null
     */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
     * Sets instanceId
     *
     * @param int|null $instanceId The unique identifier for this *specific* match that was played.  This value can be used to get additional data about this activity such as who else was playing via the GetPostGameCarnageReport endpoint.
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return int|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param int|null $mode Indicates the most specific game mode of the activity that we could find.
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets modes
     *
     * @return int[]|null
     */
    public function getModes()
    {
        return $this->container['modes'];
    }

    /**
     * Sets modes
     *
     * @param int[]|null $modes The list of all Activity Modes to which this activity applies, including aggregates. This will let you see, for example, whether the activity was both Clash and part of the Trials of the Nine event.
     *
     * @return $this
     */
    public function setModes($modes)
    {
        $this->container['modes'] = $modes;

        return $this;
    }

    /**
     * Gets isPrivate
     *
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
     * Sets isPrivate
     *
     * @param bool|null $isPrivate Whether or not the match was a private match.
     *
     * @return $this
     */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;

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
     * @param int|null $membershipType The Membership Type indicating the platform on which this match was played.
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


