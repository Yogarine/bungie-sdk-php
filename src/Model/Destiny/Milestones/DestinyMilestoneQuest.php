<?php
/**
 * DestinyMilestoneQuest
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
 * OpenAPI spec version: 2.9.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneQuest Class Doc Comment
 *
 * @category Class
 * @description If a Milestone has one or more Quests, this will contain the live information for the character&#39;s status with one of those quests.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneQuest implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyMilestoneQuest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'questItemHash' => 'int',
        'status' => '\Bungie\Model\Destiny\Quests\DestinyQuestStatus',
        'activity' => '\Bungie\Model\Destiny\Milestones\DestinyMilestoneActivity',
        'challenges' => '\Bungie\Model\Destiny\Challenges\DestinyChallengeStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'questItemHash' => 'uint32',
        'status' => null,
        'activity' => null,
        'challenges' => null
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
        'questItemHash' => 'questItemHash',
        'status' => 'status',
        'activity' => 'activity',
        'challenges' => 'challenges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'questItemHash' => 'setQuestItemHash',
        'status' => 'setStatus',
        'activity' => 'setActivity',
        'challenges' => 'setChallenges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'questItemHash' => 'getQuestItemHash',
        'status' => 'getStatus',
        'activity' => 'getActivity',
        'challenges' => 'getChallenges'
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
        $this->container['questItemHash'] = isset($data['questItemHash']) ? $data['questItemHash'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['challenges'] = isset($data['challenges']) ? $data['challenges'] : null;
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
     * Gets questItemHash
     *
     * @return int|null
     */
    public function getQuestItemHash()
    {
        return $this->container['questItemHash'];
    }

    /**
     * Sets questItemHash
     *
     * @param int|null $questItemHash Quests are defined as Items in content. As such, this is the hash identifier of the DestinyInventoryItemDefinition that represents this quest. It will have pointers to all of the steps in the quest, and display information for the quest (title, description, icon etc) Individual steps will be referred to in the Quest item's DestinyInventoryItemDefinition.setData property, and themselves are Items with their own renderable data.
     *
     * @return $this
     */
    public function setQuestItemHash($questItemHash)
    {
        $this->container['questItemHash'] = $questItemHash;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyQuestStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyQuestStatus|null $status The current status of the quest for the character making the request.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivity|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyMilestoneActivity|null $activity *IF* the Milestone has an active Activity that can give you greater details about what you need to do, it will be returned here. Remember to associate this with the DestinyMilestoneDefinition's activities to get details about the activity, including what specific quest it is related to if you have multiple quests to choose from.
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets challenges
     *
     * @return \Bungie\Model\Destiny\Challenges\DestinyChallengeStatus[]|null
     */
    public function getChallenges()
    {
        return $this->container['challenges'];
    }

    /**
     * Sets challenges
     *
     * @param \Bungie\Model\Destiny\Challenges\DestinyChallengeStatus[]|null $challenges The activities referred to by this quest can have many associated challenges. They are all contained here, with activityHashes so that you can associate them with the specific activity variants in which they can be found. In retrospect, I probably should have put these under the specific Activity Variants, but it's too late to change it now. Theoretically, a quest without Activities can still have Challenges, which is why this is on a higher level than activity/variants, but it probably should have been in both places. That may come as a later revision.
     *
     * @return $this
     */
    public function setChallenges($challenges)
    {
        $this->container['challenges'] = $challenges;

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


