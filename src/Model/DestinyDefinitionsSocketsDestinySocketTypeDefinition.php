<?php
/**
 * DestinyDefinitionsSocketsDestinySocketTypeDefinition
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
 * DestinyDefinitionsSocketsDestinySocketTypeDefinition Class Doc Comment
 *
 * @category Class
 * @description All Sockets have a \&quot;Type\&quot;: a set of common properties that determine when the socket allows Plugs to be inserted, what Categories of Plugs can be inserted, and whether the socket is even visible at all given the current game/character/account state.  See DestinyInventoryItemDefinition for more information about Socketed items and Plugs.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDefinitionsSocketsDestinySocketTypeDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Sockets.DestinySocketTypeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => 'DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition',
        'insertAction' => 'DestinyDefinitionsSocketsDestinyInsertPlugActionDefinition',
        'plugWhitelist' => '\Bungie\Model\DestinyDefinitionsSocketsDestinyPlugWhitelistEntryDefinition[]',
        'socketCategoryHash' => 'int',
        'visibility' => 'DestinyDestinySocketVisibility',
        'alwaysRandomizeSockets' => 'bool',
        'isPreviewEnabled' => 'bool',
        'hideDuplicateReusablePlugs' => 'bool',
        'overridesUiAppearance' => 'bool',
        'avoidDuplicatesOnInitialization' => 'bool',
        'currencyScalars' => '\Bungie\Model\DestinyDefinitionsSocketsDestinySocketTypeScalarMaterialRequirementEntry[]',
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
        'insertAction' => null,
        'plugWhitelist' => null,
        'socketCategoryHash' => 'uint32',
        'visibility' => null,
        'alwaysRandomizeSockets' => null,
        'isPreviewEnabled' => null,
        'hideDuplicateReusablePlugs' => null,
        'overridesUiAppearance' => null,
        'avoidDuplicatesOnInitialization' => null,
        'currencyScalars' => null,
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
        'insertAction' => 'insertAction',
        'plugWhitelist' => 'plugWhitelist',
        'socketCategoryHash' => 'socketCategoryHash',
        'visibility' => 'visibility',
        'alwaysRandomizeSockets' => 'alwaysRandomizeSockets',
        'isPreviewEnabled' => 'isPreviewEnabled',
        'hideDuplicateReusablePlugs' => 'hideDuplicateReusablePlugs',
        'overridesUiAppearance' => 'overridesUiAppearance',
        'avoidDuplicatesOnInitialization' => 'avoidDuplicatesOnInitialization',
        'currencyScalars' => 'currencyScalars',
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
        'insertAction' => 'setInsertAction',
        'plugWhitelist' => 'setPlugWhitelist',
        'socketCategoryHash' => 'setSocketCategoryHash',
        'visibility' => 'setVisibility',
        'alwaysRandomizeSockets' => 'setAlwaysRandomizeSockets',
        'isPreviewEnabled' => 'setIsPreviewEnabled',
        'hideDuplicateReusablePlugs' => 'setHideDuplicateReusablePlugs',
        'overridesUiAppearance' => 'setOverridesUiAppearance',
        'avoidDuplicatesOnInitialization' => 'setAvoidDuplicatesOnInitialization',
        'currencyScalars' => 'setCurrencyScalars',
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
        'insertAction' => 'getInsertAction',
        'plugWhitelist' => 'getPlugWhitelist',
        'socketCategoryHash' => 'getSocketCategoryHash',
        'visibility' => 'getVisibility',
        'alwaysRandomizeSockets' => 'getAlwaysRandomizeSockets',
        'isPreviewEnabled' => 'getIsPreviewEnabled',
        'hideDuplicateReusablePlugs' => 'getHideDuplicateReusablePlugs',
        'overridesUiAppearance' => 'getOverridesUiAppearance',
        'avoidDuplicatesOnInitialization' => 'getAvoidDuplicatesOnInitialization',
        'currencyScalars' => 'getCurrencyScalars',
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
        $this->container['insertAction'] = isset($data['insertAction']) ? $data['insertAction'] : null;
        $this->container['plugWhitelist'] = isset($data['plugWhitelist']) ? $data['plugWhitelist'] : null;
        $this->container['socketCategoryHash'] = isset($data['socketCategoryHash']) ? $data['socketCategoryHash'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['alwaysRandomizeSockets'] = isset($data['alwaysRandomizeSockets']) ? $data['alwaysRandomizeSockets'] : null;
        $this->container['isPreviewEnabled'] = isset($data['isPreviewEnabled']) ? $data['isPreviewEnabled'] : null;
        $this->container['hideDuplicateReusablePlugs'] = isset($data['hideDuplicateReusablePlugs']) ? $data['hideDuplicateReusablePlugs'] : null;
        $this->container['overridesUiAppearance'] = isset($data['overridesUiAppearance']) ? $data['overridesUiAppearance'] : null;
        $this->container['avoidDuplicatesOnInitialization'] = isset($data['avoidDuplicatesOnInitialization']) ? $data['avoidDuplicatesOnInitialization'] : null;
        $this->container['currencyScalars'] = isset($data['currencyScalars']) ? $data['currencyScalars'] : null;
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
     * @return DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition|null $displayProperties There are fields for this display data, but they appear to be unpopulated as of now. I am not sure where in the UI these would show if they even were populated, but I will continue to return this data in case it becomes useful.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets insertAction
     *
     * @return DestinyDefinitionsSocketsDestinyInsertPlugActionDefinition|null
     */
    public function getInsertAction()
    {
        return $this->container['insertAction'];
    }

    /**
     * Sets insertAction
     *
     * @param DestinyDefinitionsSocketsDestinyInsertPlugActionDefinition|null $insertAction Defines what happens when a plug is inserted into sockets of this type.
     *
     * @return $this
     */
    public function setInsertAction($insertAction)
    {
        $this->container['insertAction'] = $insertAction;

        return $this;
    }

    /**
     * Gets plugWhitelist
     *
     * @return \Bungie\Model\DestinyDefinitionsSocketsDestinyPlugWhitelistEntryDefinition[]|null
     */
    public function getPlugWhitelist()
    {
        return $this->container['plugWhitelist'];
    }

    /**
     * Sets plugWhitelist
     *
     * @param \Bungie\Model\DestinyDefinitionsSocketsDestinyPlugWhitelistEntryDefinition[]|null $plugWhitelist A list of Plug \"Categories\" that are allowed to be plugged into sockets of this type.  These should be compared against a given plug item's DestinyInventoryItemDefinition.plug.plugCategoryHash, which indicates the plug item's category.  If the plug's category matches any whitelisted plug, or if the whitelist is empty, it is allowed to be inserted.
     *
     * @return $this
     */
    public function setPlugWhitelist($plugWhitelist)
    {
        $this->container['plugWhitelist'] = $plugWhitelist;

        return $this;
    }

    /**
     * Gets socketCategoryHash
     *
     * @return int|null
     */
    public function getSocketCategoryHash()
    {
        return $this->container['socketCategoryHash'];
    }

    /**
     * Sets socketCategoryHash
     *
     * @param int|null $socketCategoryHash socketCategoryHash
     *
     * @return $this
     */
    public function setSocketCategoryHash($socketCategoryHash)
    {
        $this->container['socketCategoryHash'] = $socketCategoryHash;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return DestinyDestinySocketVisibility|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param DestinyDestinySocketVisibility|null $visibility Sometimes a socket isn't visible. These are some of the conditions under which sockets of this type are not visible. Unfortunately, the truth of visibility is much, much more complex. Best to rely on the live data for whether the socket is visible and enabled.
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets alwaysRandomizeSockets
     *
     * @return bool|null
     */
    public function getAlwaysRandomizeSockets()
    {
        return $this->container['alwaysRandomizeSockets'];
    }

    /**
     * Sets alwaysRandomizeSockets
     *
     * @param bool|null $alwaysRandomizeSockets alwaysRandomizeSockets
     *
     * @return $this
     */
    public function setAlwaysRandomizeSockets($alwaysRandomizeSockets)
    {
        $this->container['alwaysRandomizeSockets'] = $alwaysRandomizeSockets;

        return $this;
    }

    /**
     * Gets isPreviewEnabled
     *
     * @return bool|null
     */
    public function getIsPreviewEnabled()
    {
        return $this->container['isPreviewEnabled'];
    }

    /**
     * Sets isPreviewEnabled
     *
     * @param bool|null $isPreviewEnabled isPreviewEnabled
     *
     * @return $this
     */
    public function setIsPreviewEnabled($isPreviewEnabled)
    {
        $this->container['isPreviewEnabled'] = $isPreviewEnabled;

        return $this;
    }

    /**
     * Gets hideDuplicateReusablePlugs
     *
     * @return bool|null
     */
    public function getHideDuplicateReusablePlugs()
    {
        return $this->container['hideDuplicateReusablePlugs'];
    }

    /**
     * Sets hideDuplicateReusablePlugs
     *
     * @param bool|null $hideDuplicateReusablePlugs hideDuplicateReusablePlugs
     *
     * @return $this
     */
    public function setHideDuplicateReusablePlugs($hideDuplicateReusablePlugs)
    {
        $this->container['hideDuplicateReusablePlugs'] = $hideDuplicateReusablePlugs;

        return $this;
    }

    /**
     * Gets overridesUiAppearance
     *
     * @return bool|null
     */
    public function getOverridesUiAppearance()
    {
        return $this->container['overridesUiAppearance'];
    }

    /**
     * Sets overridesUiAppearance
     *
     * @param bool|null $overridesUiAppearance This property indicates if the socket type determines whether Emblem icons and nameplates should be overridden by the inserted plug item's icon and nameplate.
     *
     * @return $this
     */
    public function setOverridesUiAppearance($overridesUiAppearance)
    {
        $this->container['overridesUiAppearance'] = $overridesUiAppearance;

        return $this;
    }

    /**
     * Gets avoidDuplicatesOnInitialization
     *
     * @return bool|null
     */
    public function getAvoidDuplicatesOnInitialization()
    {
        return $this->container['avoidDuplicatesOnInitialization'];
    }

    /**
     * Sets avoidDuplicatesOnInitialization
     *
     * @param bool|null $avoidDuplicatesOnInitialization avoidDuplicatesOnInitialization
     *
     * @return $this
     */
    public function setAvoidDuplicatesOnInitialization($avoidDuplicatesOnInitialization)
    {
        $this->container['avoidDuplicatesOnInitialization'] = $avoidDuplicatesOnInitialization;

        return $this;
    }

    /**
     * Gets currencyScalars
     *
     * @return \Bungie\Model\DestinyDefinitionsSocketsDestinySocketTypeScalarMaterialRequirementEntry[]|null
     */
    public function getCurrencyScalars()
    {
        return $this->container['currencyScalars'];
    }

    /**
     * Sets currencyScalars
     *
     * @param \Bungie\Model\DestinyDefinitionsSocketsDestinySocketTypeScalarMaterialRequirementEntry[]|null $currencyScalars currencyScalars
     *
     * @return $this
     */
    public function setCurrencyScalars($currencyScalars)
    {
        $this->container['currencyScalars'] = $currencyScalars;

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

