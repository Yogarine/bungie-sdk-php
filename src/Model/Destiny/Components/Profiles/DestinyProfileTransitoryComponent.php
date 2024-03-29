<?php
/**
 * DestinyProfileTransitoryComponent
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

namespace Bungie\Model\Destiny\Components\Profiles;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyProfileTransitoryComponent Class Doc Comment
 *
 * @category Class
 * @description This is an experimental set of data that Bungie considers to be \&quot;transitory\&quot; - information that may be useful for API users, but that is coming from a non-authoritative data source about information that could potentially change at a more frequent pace than Bungie.net will receive updates about it.  This information is provided exclusively for convenience should any of it be useful to users: we provide no guarantees to the accuracy or timeliness of data that comes from this source. Know that this data can potentially be out-of-date or even wrong entirely if the user disconnected from the game or suddenly changed their status before we can receive refreshed data.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProfileTransitoryComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Profiles.DestinyProfileTransitoryComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'partyMembers' => '\Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryPartyMember[]',
        'currentActivity' => '\Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryCurrentActivity',
        'joinability' => '\Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryJoinability',
        'tracking' => '\Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryTrackingEntry[]',
        'lastOrbitedDestinationHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'partyMembers' => null,
        'currentActivity' => null,
        'joinability' => null,
        'tracking' => null,
        'lastOrbitedDestinationHash' => 'uint32'
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
        'partyMembers' => 'partyMembers',
        'currentActivity' => 'currentActivity',
        'joinability' => 'joinability',
        'tracking' => 'tracking',
        'lastOrbitedDestinationHash' => 'lastOrbitedDestinationHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'partyMembers' => 'setPartyMembers',
        'currentActivity' => 'setCurrentActivity',
        'joinability' => 'setJoinability',
        'tracking' => 'setTracking',
        'lastOrbitedDestinationHash' => 'setLastOrbitedDestinationHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'partyMembers' => 'getPartyMembers',
        'currentActivity' => 'getCurrentActivity',
        'joinability' => 'getJoinability',
        'tracking' => 'getTracking',
        'lastOrbitedDestinationHash' => 'getLastOrbitedDestinationHash'
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
        $this->container['partyMembers'] = isset($data['partyMembers']) ? $data['partyMembers'] : null;
        $this->container['currentActivity'] = isset($data['currentActivity']) ? $data['currentActivity'] : null;
        $this->container['joinability'] = isset($data['joinability']) ? $data['joinability'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['lastOrbitedDestinationHash'] = isset($data['lastOrbitedDestinationHash']) ? $data['lastOrbitedDestinationHash'] : null;
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
     * Gets partyMembers
     *
     * @return \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryPartyMember[]|null
     */
    public function getPartyMembers()
    {
        return $this->container['partyMembers'];
    }

    /**
     * Sets partyMembers
     *
     * @param \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryPartyMember[]|null $partyMembers If you have any members currently in your party, this is some (very) bare-bones information about those members.
     *
     * @return $this
     */
    public function setPartyMembers($partyMembers)
    {
        $this->container['partyMembers'] = $partyMembers;

        return $this;
    }

    /**
     * Gets currentActivity
     *
     * @return \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryCurrentActivity|null
     */
    public function getCurrentActivity()
    {
        return $this->container['currentActivity'];
    }

    /**
     * Sets currentActivity
     *
     * @param \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryCurrentActivity|null $currentActivity If you are in an activity, this is some transitory info about the activity currently being played.
     *
     * @return $this
     */
    public function setCurrentActivity($currentActivity)
    {
        $this->container['currentActivity'] = $currentActivity;

        return $this;
    }

    /**
     * Gets joinability
     *
     * @return \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryJoinability|null
     */
    public function getJoinability()
    {
        return $this->container['joinability'];
    }

    /**
     * Sets joinability
     *
     * @param \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryJoinability|null $joinability Information about whether and what might prevent you from joining this person on a fireteam.
     *
     * @return $this
     */
    public function setJoinability($joinability)
    {
        $this->container['joinability'] = $joinability;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryTrackingEntry[]|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Bungie\Model\Destiny\Components\Profiles\DestinyProfileTransitoryTrackingEntry[]|null $tracking Information about tracked entities.
     *
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets lastOrbitedDestinationHash
     *
     * @return int|null
     */
    public function getLastOrbitedDestinationHash()
    {
        return $this->container['lastOrbitedDestinationHash'];
    }

    /**
     * Sets lastOrbitedDestinationHash
     *
     * @param int|null $lastOrbitedDestinationHash The hash identifier for the DestinyDestinationDefinition of the last location you were orbiting when in orbit.
     *
     * @return $this
     */
    public function setLastOrbitedDestinationHash($lastOrbitedDestinationHash)
    {
        $this->container['lastOrbitedDestinationHash'] = $lastOrbitedDestinationHash;

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


