<?php
/**
 * DestinyQuestStatus
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

namespace Bungie\Model\Destiny\Quests;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyQuestStatus Class Doc Comment
 *
 * @category Class
 * @description Data regarding the progress of a Quest for a specific character. Quests are composed of multiple steps, each with potentially multiple objectives: this QuestStatus will return Objective data for the *currently active* step in this quest.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyQuestStatus implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Quests.DestinyQuestStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'questHash' => 'int',
        'stepHash' => 'int',
        'stepObjectives' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]',
        'tracked' => 'bool',
        'itemInstanceId' => 'int',
        'completed' => 'bool',
        'redeemed' => 'bool',
        'started' => 'bool',
        'vendorHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'questHash' => 'uint32',
        'stepHash' => 'uint32',
        'stepObjectives' => null,
        'tracked' => null,
        'itemInstanceId' => 'int64',
        'completed' => null,
        'redeemed' => null,
        'started' => null,
        'vendorHash' => 'uint32'
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
        'questHash' => 'questHash',
        'stepHash' => 'stepHash',
        'stepObjectives' => 'stepObjectives',
        'tracked' => 'tracked',
        'itemInstanceId' => 'itemInstanceId',
        'completed' => 'completed',
        'redeemed' => 'redeemed',
        'started' => 'started',
        'vendorHash' => 'vendorHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'questHash' => 'setQuestHash',
        'stepHash' => 'setStepHash',
        'stepObjectives' => 'setStepObjectives',
        'tracked' => 'setTracked',
        'itemInstanceId' => 'setItemInstanceId',
        'completed' => 'setCompleted',
        'redeemed' => 'setRedeemed',
        'started' => 'setStarted',
        'vendorHash' => 'setVendorHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'questHash' => 'getQuestHash',
        'stepHash' => 'getStepHash',
        'stepObjectives' => 'getStepObjectives',
        'tracked' => 'getTracked',
        'itemInstanceId' => 'getItemInstanceId',
        'completed' => 'getCompleted',
        'redeemed' => 'getRedeemed',
        'started' => 'getStarted',
        'vendorHash' => 'getVendorHash'
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
        $this->container['questHash'] = isset($data['questHash']) ? $data['questHash'] : null;
        $this->container['stepHash'] = isset($data['stepHash']) ? $data['stepHash'] : null;
        $this->container['stepObjectives'] = isset($data['stepObjectives']) ? $data['stepObjectives'] : null;
        $this->container['tracked'] = isset($data['tracked']) ? $data['tracked'] : null;
        $this->container['itemInstanceId'] = isset($data['itemInstanceId']) ? $data['itemInstanceId'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['redeemed'] = isset($data['redeemed']) ? $data['redeemed'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['vendorHash'] = isset($data['vendorHash']) ? $data['vendorHash'] : null;
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
     * Gets questHash
     *
     * @return int|null
     */
    public function getQuestHash()
    {
        return $this->container['questHash'];
    }

    /**
     * Sets questHash
     *
     * @param int|null $questHash The hash identifier for the Quest Item. (Note: Quests are defined as Items, and thus you would use this to look up the quest's DestinyInventoryItemDefinition). For information on all steps in the quest, you can then examine its DestinyInventoryItemDefinition.setData property for Quest Steps (which are *also* items). You can use the Item Definition to display human readable data about the overall quest.
     *
     * @return $this
     */
    public function setQuestHash($questHash)
    {
        $this->container['questHash'] = $questHash;

        return $this;
    }

    /**
     * Gets stepHash
     *
     * @return int|null
     */
    public function getStepHash()
    {
        return $this->container['stepHash'];
    }

    /**
     * Sets stepHash
     *
     * @param int|null $stepHash The hash identifier of the current Quest Step, which is also a DestinyInventoryItemDefinition. You can use this to get human readable data about the current step and what to do in that step.
     *
     * @return $this
     */
    public function setStepHash($stepHash)
    {
        $this->container['stepHash'] = $stepHash;

        return $this;
    }

    /**
     * Gets stepObjectives
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null
     */
    public function getStepObjectives()
    {
        return $this->container['stepObjectives'];
    }

    /**
     * Sets stepObjectives
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]|null $stepObjectives A step can have multiple objectives. This will give you the progress for each objective in the current step, in the order in which they are rendered in-game.
     *
     * @return $this
     */
    public function setStepObjectives($stepObjectives)
    {
        $this->container['stepObjectives'] = $stepObjectives;

        return $this;
    }

    /**
     * Gets tracked
     *
     * @return bool|null
     */
    public function getTracked()
    {
        return $this->container['tracked'];
    }

    /**
     * Sets tracked
     *
     * @param bool|null $tracked Whether or not the quest is tracked
     *
     * @return $this
     */
    public function setTracked($tracked)
    {
        $this->container['tracked'] = $tracked;

        return $this;
    }

    /**
     * Gets itemInstanceId
     *
     * @return int|null
     */
    public function getItemInstanceId()
    {
        return $this->container['itemInstanceId'];
    }

    /**
     * Sets itemInstanceId
     *
     * @param int|null $itemInstanceId The current Quest Step will be an instanced item in the player's inventory. If you care about that, this is the instance ID of that item.
     *
     * @return $this
     */
    public function setItemInstanceId($itemInstanceId)
    {
        $this->container['itemInstanceId'] = $itemInstanceId;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed Whether or not the whole quest has been completed, regardless of whether or not you have redeemed the rewards for the quest.
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets redeemed
     *
     * @return bool|null
     */
    public function getRedeemed()
    {
        return $this->container['redeemed'];
    }

    /**
     * Sets redeemed
     *
     * @param bool|null $redeemed Whether or not you have redeemed rewards for this quest.
     *
     * @return $this
     */
    public function setRedeemed($redeemed)
    {
        $this->container['redeemed'] = $redeemed;

        return $this;
    }

    /**
     * Gets started
     *
     * @return bool|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param bool|null $started Whether or not you have started this quest.
     *
     * @return $this
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets vendorHash
     *
     * @return int|null
     */
    public function getVendorHash()
    {
        return $this->container['vendorHash'];
    }

    /**
     * Sets vendorHash
     *
     * @param int|null $vendorHash If the quest has a related Vendor that you should talk to in order to initiate the quest/earn rewards/continue the quest, this will be the hash identifier of that Vendor. Look it up its DestinyVendorDefinition.
     *
     * @return $this
     */
    public function setVendorHash($vendorHash)
    {
        $this->container['vendorHash'] = $vendorHash;

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


