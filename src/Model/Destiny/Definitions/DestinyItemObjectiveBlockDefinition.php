<?php
/**
 * DestinyItemObjectiveBlockDefinition
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
 * OpenAPI spec version: 2.8.2
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
 * DestinyItemObjectiveBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description An item can have objectives on it. In practice, these are the exclusive purview of \&quot;Quest Step\&quot; items: DestinyInventoryItemDefinitions that represent a specific step in a Quest.  Quest steps have 1:M objectives that we end up processing and returning in live data as DestinyQuestStatus data, and other useful information.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemObjectiveBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemObjectiveBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'objectiveHashes' => 'int[]',
        'displayActivityHashes' => 'int[]',
        'requireFullObjectiveCompletion' => 'bool',
        'questlineItemHash' => 'int',
        'narrative' => 'string',
        'objectiveVerbName' => 'string',
        'questTypeIdentifier' => 'string',
        'questTypeHash' => 'int',
        'perObjectiveDisplayProperties' => '\Bungie\Model\Destiny\Definitions\DestinyObjectiveDisplayProperties[]',
        'displayAsStatTracker' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'objectiveHashes' => 'uint32',
        'displayActivityHashes' => 'uint32',
        'requireFullObjectiveCompletion' => null,
        'questlineItemHash' => 'uint32',
        'narrative' => null,
        'objectiveVerbName' => null,
        'questTypeIdentifier' => null,
        'questTypeHash' => 'uint32',
        'perObjectiveDisplayProperties' => null,
        'displayAsStatTracker' => null
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
        'objectiveHashes' => 'objectiveHashes',
        'displayActivityHashes' => 'displayActivityHashes',
        'requireFullObjectiveCompletion' => 'requireFullObjectiveCompletion',
        'questlineItemHash' => 'questlineItemHash',
        'narrative' => 'narrative',
        'objectiveVerbName' => 'objectiveVerbName',
        'questTypeIdentifier' => 'questTypeIdentifier',
        'questTypeHash' => 'questTypeHash',
        'perObjectiveDisplayProperties' => 'perObjectiveDisplayProperties',
        'displayAsStatTracker' => 'displayAsStatTracker'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'objectiveHashes' => 'setObjectiveHashes',
        'displayActivityHashes' => 'setDisplayActivityHashes',
        'requireFullObjectiveCompletion' => 'setRequireFullObjectiveCompletion',
        'questlineItemHash' => 'setQuestlineItemHash',
        'narrative' => 'setNarrative',
        'objectiveVerbName' => 'setObjectiveVerbName',
        'questTypeIdentifier' => 'setQuestTypeIdentifier',
        'questTypeHash' => 'setQuestTypeHash',
        'perObjectiveDisplayProperties' => 'setPerObjectiveDisplayProperties',
        'displayAsStatTracker' => 'setDisplayAsStatTracker'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'objectiveHashes' => 'getObjectiveHashes',
        'displayActivityHashes' => 'getDisplayActivityHashes',
        'requireFullObjectiveCompletion' => 'getRequireFullObjectiveCompletion',
        'questlineItemHash' => 'getQuestlineItemHash',
        'narrative' => 'getNarrative',
        'objectiveVerbName' => 'getObjectiveVerbName',
        'questTypeIdentifier' => 'getQuestTypeIdentifier',
        'questTypeHash' => 'getQuestTypeHash',
        'perObjectiveDisplayProperties' => 'getPerObjectiveDisplayProperties',
        'displayAsStatTracker' => 'getDisplayAsStatTracker'
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
        $this->container['objectiveHashes'] = isset($data['objectiveHashes']) ? $data['objectiveHashes'] : null;
        $this->container['displayActivityHashes'] = isset($data['displayActivityHashes']) ? $data['displayActivityHashes'] : null;
        $this->container['requireFullObjectiveCompletion'] = isset($data['requireFullObjectiveCompletion']) ? $data['requireFullObjectiveCompletion'] : null;
        $this->container['questlineItemHash'] = isset($data['questlineItemHash']) ? $data['questlineItemHash'] : null;
        $this->container['narrative'] = isset($data['narrative']) ? $data['narrative'] : null;
        $this->container['objectiveVerbName'] = isset($data['objectiveVerbName']) ? $data['objectiveVerbName'] : null;
        $this->container['questTypeIdentifier'] = isset($data['questTypeIdentifier']) ? $data['questTypeIdentifier'] : null;
        $this->container['questTypeHash'] = isset($data['questTypeHash']) ? $data['questTypeHash'] : null;
        $this->container['perObjectiveDisplayProperties'] = isset($data['perObjectiveDisplayProperties']) ? $data['perObjectiveDisplayProperties'] : null;
        $this->container['displayAsStatTracker'] = isset($data['displayAsStatTracker']) ? $data['displayAsStatTracker'] : null;
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
     * Gets objectiveHashes
     *
     * @return int[]|null
     */
    public function getObjectiveHashes()
    {
        return $this->container['objectiveHashes'];
    }

    /**
     * Sets objectiveHashes
     *
     * @param int[]|null $objectiveHashes The hashes to Objectives (DestinyObjectiveDefinition) that are part of this Quest Step, in the order that they should be rendered.
     *
     * @return $this
     */
    public function setObjectiveHashes($objectiveHashes)
    {
        $this->container['objectiveHashes'] = $objectiveHashes;

        return $this;
    }

    /**
     * Gets displayActivityHashes
     *
     * @return int[]|null
     */
    public function getDisplayActivityHashes()
    {
        return $this->container['displayActivityHashes'];
    }

    /**
     * Sets displayActivityHashes
     *
     * @param int[]|null $displayActivityHashes For every entry in objectiveHashes, there is a corresponding entry in this array at the same index. If the objective is meant to be associated with a specific DestinyActivityDefinition, there will be a valid hash at that index. Otherwise, it will be invalid (0).  Rendered somewhat obsolete by perObjectiveDisplayProperties, which currently has much the same information but may end up with more info in the future.
     *
     * @return $this
     */
    public function setDisplayActivityHashes($displayActivityHashes)
    {
        $this->container['displayActivityHashes'] = $displayActivityHashes;

        return $this;
    }

    /**
     * Gets requireFullObjectiveCompletion
     *
     * @return bool|null
     */
    public function getRequireFullObjectiveCompletion()
    {
        return $this->container['requireFullObjectiveCompletion'];
    }

    /**
     * Sets requireFullObjectiveCompletion
     *
     * @param bool|null $requireFullObjectiveCompletion If True, all objectives must be completed for the step to be completed. If False, any one objective can be completed for the step to be completed.
     *
     * @return $this
     */
    public function setRequireFullObjectiveCompletion($requireFullObjectiveCompletion)
    {
        $this->container['requireFullObjectiveCompletion'] = $requireFullObjectiveCompletion;

        return $this;
    }

    /**
     * Gets questlineItemHash
     *
     * @return int|null
     */
    public function getQuestlineItemHash()
    {
        return $this->container['questlineItemHash'];
    }

    /**
     * Sets questlineItemHash
     *
     * @param int|null $questlineItemHash The hash for the DestinyInventoryItemDefinition representing the Quest to which this Quest Step belongs.
     *
     * @return $this
     */
    public function setQuestlineItemHash($questlineItemHash)
    {
        $this->container['questlineItemHash'] = $questlineItemHash;

        return $this;
    }

    /**
     * Gets narrative
     *
     * @return string|null
     */
    public function getNarrative()
    {
        return $this->container['narrative'];
    }

    /**
     * Sets narrative
     *
     * @param string|null $narrative The localized string for narrative text related to this quest step, if any.
     *
     * @return $this
     */
    public function setNarrative($narrative)
    {
        $this->container['narrative'] = $narrative;

        return $this;
    }

    /**
     * Gets objectiveVerbName
     *
     * @return string|null
     */
    public function getObjectiveVerbName()
    {
        return $this->container['objectiveVerbName'];
    }

    /**
     * Sets objectiveVerbName
     *
     * @param string|null $objectiveVerbName The localized string describing an action to be performed associated with the objectives, if any.
     *
     * @return $this
     */
    public function setObjectiveVerbName($objectiveVerbName)
    {
        $this->container['objectiveVerbName'] = $objectiveVerbName;

        return $this;
    }

    /**
     * Gets questTypeIdentifier
     *
     * @return string|null
     */
    public function getQuestTypeIdentifier()
    {
        return $this->container['questTypeIdentifier'];
    }

    /**
     * Sets questTypeIdentifier
     *
     * @param string|null $questTypeIdentifier The identifier for the type of quest being performed, if any. Not associated with any fixed definition, yet.
     *
     * @return $this
     */
    public function setQuestTypeIdentifier($questTypeIdentifier)
    {
        $this->container['questTypeIdentifier'] = $questTypeIdentifier;

        return $this;
    }

    /**
     * Gets questTypeHash
     *
     * @return int|null
     */
    public function getQuestTypeHash()
    {
        return $this->container['questTypeHash'];
    }

    /**
     * Sets questTypeHash
     *
     * @param int|null $questTypeHash A hashed value for the questTypeIdentifier, because apparently I like to be redundant.
     *
     * @return $this
     */
    public function setQuestTypeHash($questTypeHash)
    {
        $this->container['questTypeHash'] = $questTypeHash;

        return $this;
    }

    /**
     * Gets perObjectiveDisplayProperties
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyObjectiveDisplayProperties[]|null
     */
    public function getPerObjectiveDisplayProperties()
    {
        return $this->container['perObjectiveDisplayProperties'];
    }

    /**
     * Sets perObjectiveDisplayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyObjectiveDisplayProperties[]|null $perObjectiveDisplayProperties One entry per Objective on the item, it will have related display information.
     *
     * @return $this
     */
    public function setPerObjectiveDisplayProperties($perObjectiveDisplayProperties)
    {
        $this->container['perObjectiveDisplayProperties'] = $perObjectiveDisplayProperties;

        return $this;
    }

    /**
     * Gets displayAsStatTracker
     *
     * @return bool|null
     */
    public function getDisplayAsStatTracker()
    {
        return $this->container['displayAsStatTracker'];
    }

    /**
     * Sets displayAsStatTracker
     *
     * @param bool|null $displayAsStatTracker displayAsStatTracker
     *
     * @return $this
     */
    public function setDisplayAsStatTracker($displayAsStatTracker)
    {
        $this->container['displayAsStatTracker'] = $displayAsStatTracker;

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


