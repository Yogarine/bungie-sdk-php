<?php
/**
 * DestinyDefinitionsRecordsDestinyRecordDefinition
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
 * DestinyDefinitionsRecordsDestinyRecordDefinition Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDefinitionsRecordsDestinyRecordDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Records.DestinyRecordDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'scope' => 'DestinyDestinyScope',
        'presentationInfo' => '\Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock',
        'loreHash' => 'int',
        'objectiveHashes' => 'int[]',
        'recordValueStyle' => '\Bungie\Model\DestinyDestinyRecordValueStyle',
        'titleInfo' => '\Bungie\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock',
        'completionInfo' => '\Bungie\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock',
        'stateInfo' => '\Bungie\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock',
        'requirements' => '\Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock',
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
        'scope' => null,
        'presentationInfo' => null,
        'loreHash' => 'uint32',
        'objectiveHashes' => 'uint32',
        'recordValueStyle' => null,
        'titleInfo' => null,
        'completionInfo' => null,
        'stateInfo' => null,
        'requirements' => null,
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
        'scope' => 'scope',
        'presentationInfo' => 'presentationInfo',
        'loreHash' => 'loreHash',
        'objectiveHashes' => 'objectiveHashes',
        'recordValueStyle' => 'recordValueStyle',
        'titleInfo' => 'titleInfo',
        'completionInfo' => 'completionInfo',
        'stateInfo' => 'stateInfo',
        'requirements' => 'requirements',
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
        'scope' => 'setScope',
        'presentationInfo' => 'setPresentationInfo',
        'loreHash' => 'setLoreHash',
        'objectiveHashes' => 'setObjectiveHashes',
        'recordValueStyle' => 'setRecordValueStyle',
        'titleInfo' => 'setTitleInfo',
        'completionInfo' => 'setCompletionInfo',
        'stateInfo' => 'setStateInfo',
        'requirements' => 'setRequirements',
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
        'scope' => 'getScope',
        'presentationInfo' => 'getPresentationInfo',
        'loreHash' => 'getLoreHash',
        'objectiveHashes' => 'getObjectiveHashes',
        'recordValueStyle' => 'getRecordValueStyle',
        'titleInfo' => 'getTitleInfo',
        'completionInfo' => 'getCompletionInfo',
        'stateInfo' => 'getStateInfo',
        'requirements' => 'getRequirements',
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['presentationInfo'] = isset($data['presentationInfo']) ? $data['presentationInfo'] : null;
        $this->container['loreHash'] = isset($data['loreHash']) ? $data['loreHash'] : null;
        $this->container['objectiveHashes'] = isset($data['objectiveHashes']) ? $data['objectiveHashes'] : null;
        $this->container['recordValueStyle'] = isset($data['recordValueStyle']) ? $data['recordValueStyle'] : null;
        $this->container['titleInfo'] = isset($data['titleInfo']) ? $data['titleInfo'] : null;
        $this->container['completionInfo'] = isset($data['completionInfo']) ? $data['completionInfo'] : null;
        $this->container['stateInfo'] = isset($data['stateInfo']) ? $data['stateInfo'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
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
     * @return \Bungie\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return DestinyDestinyScope|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param DestinyDestinyScope|null $scope Indicates whether this Record's state is determined on a per-character or on an account-wide basis.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets presentationInfo
     *
     * @return \Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock|null
     */
    public function getPresentationInfo()
    {
        return $this->container['presentationInfo'];
    }

    /**
     * Sets presentationInfo
     *
     * @param \Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock|null $presentationInfo presentationInfo
     *
     * @return $this
     */
    public function setPresentationInfo($presentationInfo)
    {
        $this->container['presentationInfo'] = $presentationInfo;

        return $this;
    }

    /**
     * Gets loreHash
     *
     * @return int|null
     */
    public function getLoreHash()
    {
        return $this->container['loreHash'];
    }

    /**
     * Sets loreHash
     *
     * @param int|null $loreHash loreHash
     *
     * @return $this
     */
    public function setLoreHash($loreHash)
    {
        $this->container['loreHash'] = $loreHash;

        return $this;
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
     * @param int[]|null $objectiveHashes objectiveHashes
     *
     * @return $this
     */
    public function setObjectiveHashes($objectiveHashes)
    {
        $this->container['objectiveHashes'] = $objectiveHashes;

        return $this;
    }

    /**
     * Gets recordValueStyle
     *
     * @return \Bungie\Model\DestinyDestinyRecordValueStyle|null
     */
    public function getRecordValueStyle()
    {
        return $this->container['recordValueStyle'];
    }

    /**
     * Sets recordValueStyle
     *
     * @param \Bungie\Model\DestinyDestinyRecordValueStyle|null $recordValueStyle recordValueStyle
     *
     * @return $this
     */
    public function setRecordValueStyle($recordValueStyle)
    {
        $this->container['recordValueStyle'] = $recordValueStyle;

        return $this;
    }

    /**
     * Gets titleInfo
     *
     * @return \Bungie\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock|null
     */
    public function getTitleInfo()
    {
        return $this->container['titleInfo'];
    }

    /**
     * Sets titleInfo
     *
     * @param \Bungie\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock|null $titleInfo titleInfo
     *
     * @return $this
     */
    public function setTitleInfo($titleInfo)
    {
        $this->container['titleInfo'] = $titleInfo;

        return $this;
    }

    /**
     * Gets completionInfo
     *
     * @return \Bungie\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock|null
     */
    public function getCompletionInfo()
    {
        return $this->container['completionInfo'];
    }

    /**
     * Sets completionInfo
     *
     * @param \Bungie\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock|null $completionInfo completionInfo
     *
     * @return $this
     */
    public function setCompletionInfo($completionInfo)
    {
        $this->container['completionInfo'] = $completionInfo;

        return $this;
    }

    /**
     * Gets stateInfo
     *
     * @return \Bungie\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock|null
     */
    public function getStateInfo()
    {
        return $this->container['stateInfo'];
    }

    /**
     * Sets stateInfo
     *
     * @param \Bungie\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock|null $stateInfo stateInfo
     *
     * @return $this
     */
    public function setStateInfo($stateInfo)
    {
        $this->container['stateInfo'] = $stateInfo;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock|null $requirements requirements
     *
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

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


