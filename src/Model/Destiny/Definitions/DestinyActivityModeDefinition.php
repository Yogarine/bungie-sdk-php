<?php
/**
 * DestinyActivityModeDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyActivityModeDefinition Class Doc Comment
 *
 * @category Class
 * @description This definition represents an \&quot;Activity Mode\&quot; as it exists in the Historical Stats endpoints. An individual Activity Mode represents a collection of activities that are played in a certain way. For example, Nightfall Strikes are part of a \&quot;Nightfall\&quot; activity mode, and any activities played as the PVP mode \&quot;Clash\&quot; are part of the \&quot;Clash activity mode.  Activity modes are nested under each other in a hierarchy, so that if you ask for - for example - \&quot;AllPvP\&quot;, you will get any PVP activities that the user has played, regardless of what specific PVP mode was being played.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityModeDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyActivityModeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'pgcrImage' => 'string',
        'modeType' => 'int',
        'activityModeCategory' => 'int',
        'isTeamBased' => 'bool',
        'isAggregateMode' => 'bool',
        'parentHashes' => 'int[]',
        'friendlyName' => 'string',
        'activityModeMappings' => 'map[string,int]',
        'display' => 'bool',
        'order' => 'int',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'pgcrImage' => null,
        'modeType' => 'int32',
        'activityModeCategory' => 'int32',
        'isTeamBased' => null,
        'isAggregateMode' => null,
        'parentHashes' => 'uint32',
        'friendlyName' => null,
        'activityModeMappings' => 'int32',
        'display' => null,
        'order' => 'int32',
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
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
        'displayProperties' => 'displayProperties',
        'pgcrImage' => 'pgcrImage',
        'modeType' => 'modeType',
        'activityModeCategory' => 'activityModeCategory',
        'isTeamBased' => 'isTeamBased',
        'isAggregateMode' => 'isAggregateMode',
        'parentHashes' => 'parentHashes',
        'friendlyName' => 'friendlyName',
        'activityModeMappings' => 'activityModeMappings',
        'display' => 'display',
        'order' => 'order',
        'hash' => 'hash',
        'index' => 'index',
        'redacted' => 'redacted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayProperties' => 'setDisplayProperties',
        'pgcrImage' => 'setPgcrImage',
        'modeType' => 'setModeType',
        'activityModeCategory' => 'setActivityModeCategory',
        'isTeamBased' => 'setIsTeamBased',
        'isAggregateMode' => 'setIsAggregateMode',
        'parentHashes' => 'setParentHashes',
        'friendlyName' => 'setFriendlyName',
        'activityModeMappings' => 'setActivityModeMappings',
        'display' => 'setDisplay',
        'order' => 'setOrder',
        'hash' => 'setHash',
        'index' => 'setIndex',
        'redacted' => 'setRedacted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayProperties' => 'getDisplayProperties',
        'pgcrImage' => 'getPgcrImage',
        'modeType' => 'getModeType',
        'activityModeCategory' => 'getActivityModeCategory',
        'isTeamBased' => 'getIsTeamBased',
        'isAggregateMode' => 'getIsAggregateMode',
        'parentHashes' => 'getParentHashes',
        'friendlyName' => 'getFriendlyName',
        'activityModeMappings' => 'getActivityModeMappings',
        'display' => 'getDisplay',
        'order' => 'getOrder',
        'hash' => 'getHash',
        'index' => 'getIndex',
        'redacted' => 'getRedacted'
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
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['pgcrImage'] = isset($data['pgcrImage']) ? $data['pgcrImage'] : null;
        $this->container['modeType'] = isset($data['modeType']) ? $data['modeType'] : null;
        $this->container['activityModeCategory'] = isset($data['activityModeCategory']) ? $data['activityModeCategory'] : null;
        $this->container['isTeamBased'] = isset($data['isTeamBased']) ? $data['isTeamBased'] : null;
        $this->container['isAggregateMode'] = isset($data['isAggregateMode']) ? $data['isAggregateMode'] : null;
        $this->container['parentHashes'] = isset($data['parentHashes']) ? $data['parentHashes'] : null;
        $this->container['friendlyName'] = isset($data['friendlyName']) ? $data['friendlyName'] : null;
        $this->container['activityModeMappings'] = isset($data['activityModeMappings']) ? $data['activityModeMappings'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['redacted'] = isset($data['redacted']) ? $data['redacted'] : null;
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
     * Gets displayProperties
     *
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets pgcrImage
     *
     * @return string|null
     */
    public function getPgcrImage()
    {
        return $this->container['pgcrImage'];
    }

    /**
     * Sets pgcrImage
     *
     * @param string|null $pgcrImage If this activity mode has a related PGCR image, this will be the path to said image.
     *
     * @return $this
     */
    public function setPgcrImage($pgcrImage)
    {
        $this->container['pgcrImage'] = $pgcrImage;

        return $this;
    }

    /**
     * Gets modeType
     *
     * @return int|null
     */
    public function getModeType()
    {
        return $this->container['modeType'];
    }

    /**
     * Sets modeType
     *
     * @param int|null $modeType The Enumeration value for this Activity Mode. Pass this identifier into Stats endpoints to get aggregate stats for this mode.
     *
     * @return $this
     */
    public function setModeType($modeType)
    {
        $this->container['modeType'] = $modeType;

        return $this;
    }

    /**
     * Gets activityModeCategory
     *
     * @return int|null
     */
    public function getActivityModeCategory()
    {
        return $this->container['activityModeCategory'];
    }

    /**
     * Sets activityModeCategory
     *
     * @param int|null $activityModeCategory The type of play being performed in broad terms (PVP, PVE)
     *
     * @return $this
     */
    public function setActivityModeCategory($activityModeCategory)
    {
        $this->container['activityModeCategory'] = $activityModeCategory;

        return $this;
    }

    /**
     * Gets isTeamBased
     *
     * @return bool|null
     */
    public function getIsTeamBased()
    {
        return $this->container['isTeamBased'];
    }

    /**
     * Sets isTeamBased
     *
     * @param bool|null $isTeamBased If True, this mode has oppositional teams fighting against each other rather than \"Free-For-All\" or Co-operative modes of play.  Note that Aggregate modes are never marked as team based, even if they happen to be team based at the moment. At any time, an aggregate whose subordinates are only team based could be changed so that one or more aren't team based, and then this boolean won't make much sense (the aggregation would become \"sometimes team based\"). Let's not deal with that right now.
     *
     * @return $this
     */
    public function setIsTeamBased($isTeamBased)
    {
        $this->container['isTeamBased'] = $isTeamBased;

        return $this;
    }

    /**
     * Gets isAggregateMode
     *
     * @return bool|null
     */
    public function getIsAggregateMode()
    {
        return $this->container['isAggregateMode'];
    }

    /**
     * Sets isAggregateMode
     *
     * @param bool|null $isAggregateMode If true, this mode is an aggregation of other, more specific modes rather than being a mode in itself. This includes modes that group Features/Events rather than Gameplay, such as Trials of The Nine: Trials of the Nine being an Event that is interesting to see aggregate data for, but when you play the activities within Trials of the Nine they are more specific activity modes such as Clash.
     *
     * @return $this
     */
    public function setIsAggregateMode($isAggregateMode)
    {
        $this->container['isAggregateMode'] = $isAggregateMode;

        return $this;
    }

    /**
     * Gets parentHashes
     *
     * @return int[]|null
     */
    public function getParentHashes()
    {
        return $this->container['parentHashes'];
    }

    /**
     * Sets parentHashes
     *
     * @param int[]|null $parentHashes The hash identifiers of the DestinyActivityModeDefinitions that represent all of the \"parent\" modes for this mode. For instance, the Nightfall Mode is also a member of AllStrikes and AllPvE.
     *
     * @return $this
     */
    public function setParentHashes($parentHashes)
    {
        $this->container['parentHashes'] = $parentHashes;

        return $this;
    }

    /**
     * Gets friendlyName
     *
     * @return string|null
     */
    public function getFriendlyName()
    {
        return $this->container['friendlyName'];
    }

    /**
     * Sets friendlyName
     *
     * @param string|null $friendlyName A Friendly identifier you can use for referring to this Activity Mode. We really only used this in our URLs, so... you know, take that for whatever it's worth.
     *
     * @return $this
     */
    public function setFriendlyName($friendlyName)
    {
        $this->container['friendlyName'] = $friendlyName;

        return $this;
    }

    /**
     * Gets activityModeMappings
     *
     * @return map[string,int]|null
     */
    public function getActivityModeMappings()
    {
        return $this->container['activityModeMappings'];
    }

    /**
     * Sets activityModeMappings
     *
     * @param map[string,int]|null $activityModeMappings If this exists, the mode has specific Activities (referred to by the Key) that should instead map to other Activity Modes when they are played. This was useful in D1 for Private Matches, where we wanted to have Private Matches as an activity mode while still referring to the specific mode being played.
     *
     * @return $this
     */
    public function setActivityModeMappings($activityModeMappings)
    {
        $this->container['activityModeMappings'] = $activityModeMappings;

        return $this;
    }

    /**
     * Gets display
     *
     * @return bool|null
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param bool|null $display If FALSE, we want to ignore this type when we're showing activity modes in BNet UI. It will still be returned in case 3rd parties want to use it for any purpose.
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order The relative ordering of activity modes.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the entity as it was found in the investment tables.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool|null
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool|null $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
     *
     * @return $this
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

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


