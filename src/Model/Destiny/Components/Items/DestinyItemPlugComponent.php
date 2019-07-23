<?php
/**
 * DestinyItemPlugComponent
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
 * OpenAPI spec version: 2.3.6
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Components\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemPlugComponent Class Doc Comment
 *
 * @category Class
 * @description Plugs are non-instanced items that can provide Stat and Perk benefits when socketed into an instanced item. Items have Sockets, and Plugs are inserted into Sockets.  This component finds all items that are considered \&quot;Plugs\&quot; in your inventory, and return information about the plug aside from any specific Socket into which it could be inserted.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemPlugComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Items.DestinyItemPlugComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'plugItemHash' => 'int',
        'plugObjectives' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]',
        'canInsert' => 'bool',
        'enabled' => 'bool',
        'insertFailIndexes' => 'int[]',
        'enableFailIndexes' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'plugItemHash' => 'uint32',
        'plugObjectives' => null,
        'canInsert' => null,
        'enabled' => null,
        'insertFailIndexes' => 'int32',
        'enableFailIndexes' => 'int32'
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
        'plugItemHash' => 'plugItemHash',
        'plugObjectives' => 'plugObjectives',
        'canInsert' => 'canInsert',
        'enabled' => 'enabled',
        'insertFailIndexes' => 'insertFailIndexes',
        'enableFailIndexes' => 'enableFailIndexes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'plugItemHash' => 'setPlugItemHash',
        'plugObjectives' => 'setPlugObjectives',
        'canInsert' => 'setCanInsert',
        'enabled' => 'setEnabled',
        'insertFailIndexes' => 'setInsertFailIndexes',
        'enableFailIndexes' => 'setEnableFailIndexes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'plugItemHash' => 'getPlugItemHash',
        'plugObjectives' => 'getPlugObjectives',
        'canInsert' => 'getCanInsert',
        'enabled' => 'getEnabled',
        'insertFailIndexes' => 'getInsertFailIndexes',
        'enableFailIndexes' => 'getEnableFailIndexes'
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
        $this->container['plugItemHash'] = isset($data['plugItemHash']) ? $data['plugItemHash'] : null;
        $this->container['plugObjectives'] = isset($data['plugObjectives']) ? $data['plugObjectives'] : null;
        $this->container['canInsert'] = isset($data['canInsert']) ? $data['canInsert'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['insertFailIndexes'] = isset($data['insertFailIndexes']) ? $data['insertFailIndexes'] : null;
        $this->container['enableFailIndexes'] = isset($data['enableFailIndexes']) ? $data['enableFailIndexes'] : null;
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
     * Gets plugItemHash
     *
     * @return int|null
     */
    public function getPlugItemHash()
    {
        return $this->container['plugItemHash'];
    }

    /**
     * Sets plugItemHash
     *
     * @param int|null $plugItemHash The hash identifier of the DestinyInventoryItemDefinition that represents this plug.
     *
     * @return $this
     */
    public function setPlugItemHash($plugItemHash)
    {
        $this->container['plugItemHash'] = $plugItemHash;

        return $this;
    }

    /**
     * Gets plugObjectives
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null
     */
    public function getPlugObjectives()
    {
        return $this->container['plugObjectives'];
    }

    /**
     * Sets plugObjectives
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null $plugObjectives Sometimes, Plugs may have objectives: these are often used for flavor and display purposes, but they can be used for any arbitrary purpose (both fortunately and unfortunately). Recently (with Season 2) they were expanded in use to be used as the \"gating\" for whether the plug can be inserted at all. For instance, a Plug might be tracking the number of PVP kills you have made. It will use the parent item's data about that tracking status to determine what to show, and will generally show it using the DestinyObjectiveDefinition's progressDescription property. Refer to the plug's itemHash and objective property for more information if you would like to display even more data.
     *
     * @return $this
     */
    public function setPlugObjectives($plugObjectives)
    {
        $this->container['plugObjectives'] = $plugObjectives;

        return $this;
    }

    /**
     * Gets canInsert
     *
     * @return bool|null
     */
    public function getCanInsert()
    {
        return $this->container['canInsert'];
    }

    /**
     * Sets canInsert
     *
     * @param bool|null $canInsert If true, this plug has met all of its insertion requirements. Big if true.
     *
     * @return $this
     */
    public function setCanInsert($canInsert)
    {
        $this->container['canInsert'] = $canInsert;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled If true, this plug will provide its benefits while inserted.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets insertFailIndexes
     *
     * @return int[]|null
     */
    public function getInsertFailIndexes()
    {
        return $this->container['insertFailIndexes'];
    }

    /**
     * Sets insertFailIndexes
     *
     * @param int[]|null $insertFailIndexes If the plug cannot be inserted for some reason, this will have the indexes into the plug item definition's plug.insertionRules property, so you can show the reasons why it can't be inserted.  This list will be empty if the plug can be inserted.
     *
     * @return $this
     */
    public function setInsertFailIndexes($insertFailIndexes)
    {
        $this->container['insertFailIndexes'] = $insertFailIndexes;

        return $this;
    }

    /**
     * Gets enableFailIndexes
     *
     * @return int[]|null
     */
    public function getEnableFailIndexes()
    {
        return $this->container['enableFailIndexes'];
    }

    /**
     * Sets enableFailIndexes
     *
     * @param int[]|null $enableFailIndexes If a plug is not enabled, this will be populated with indexes into the plug item definition's plug.enabledRules property, so that you can show the reasons why it is not enabled.  This list will be empty if the plug is enabled.
     *
     * @return $this
     */
    public function setEnableFailIndexes($enableFailIndexes)
    {
        $this->container['enableFailIndexes'] = $enableFailIndexes;

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


