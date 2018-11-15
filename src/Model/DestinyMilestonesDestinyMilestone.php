<?php
/**
 * DestinyMilestonesDestinyMilestone
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestonesDestinyMilestone Class Doc Comment
 *
 * @category Class
 * @description Represents a runtime instance of a user&#39;s milestone status. Live Milestone data should be combined with DestinyMilestoneDefinition data to show the user a picture of what is available for them to do in the game, and their status in regards to said \&quot;things to do.\&quot; Consider it a big, wonky to-do list, or Advisors 3.0 for those who remember the Destiny 1 API.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyMilestonesDestinyMilestone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Milestones.DestinyMilestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'milestoneHash' => 'int',
        'availableQuests' => '\Bungie\Model\DestinyMilestonesDestinyMilestoneQuest[]',
        'activities' => '\Bungie\Model\DestinyMilestonesDestinyMilestoneChallengeActivity[]',
        'values' => 'map[string,float]',
        'vendorHashes' => 'int[]',
        'vendors' => '\Bungie\Model\DestinyMilestonesDestinyMilestoneVendor[]',
        'rewards' => '\Bungie\Model\DestinyMilestonesDestinyMilestoneRewardCategory[]',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'milestoneHash' => 'uint32',
        'availableQuests' => null,
        'activities' => null,
        'values' => 'float',
        'vendorHashes' => 'uint32',
        'vendors' => null,
        'rewards' => null,
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'order' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'milestoneHash' => 'milestoneHash',
        'availableQuests' => 'availableQuests',
        'activities' => 'activities',
        'values' => 'values',
        'vendorHashes' => 'vendorHashes',
        'vendors' => 'vendors',
        'rewards' => 'rewards',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'milestoneHash' => 'setMilestoneHash',
        'availableQuests' => 'setAvailableQuests',
        'activities' => 'setActivities',
        'values' => 'setValues',
        'vendorHashes' => 'setVendorHashes',
        'vendors' => 'setVendors',
        'rewards' => 'setRewards',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'milestoneHash' => 'getMilestoneHash',
        'availableQuests' => 'getAvailableQuests',
        'activities' => 'getActivities',
        'values' => 'getValues',
        'vendorHashes' => 'getVendorHashes',
        'vendors' => 'getVendors',
        'rewards' => 'getRewards',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'order' => 'getOrder'
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
        return self::$swaggerModelName;
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
        $this->container['milestoneHash'] = isset($data['milestoneHash']) ? $data['milestoneHash'] : null;
        $this->container['availableQuests'] = isset($data['availableQuests']) ? $data['availableQuests'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['vendorHashes'] = isset($data['vendorHashes']) ? $data['vendorHashes'] : null;
        $this->container['vendors'] = isset($data['vendors']) ? $data['vendors'] : null;
        $this->container['rewards'] = isset($data['rewards']) ? $data['rewards'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
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

        return true;
    }


    /**
     * Gets milestoneHash
     *
     * @return int
     */
    public function getMilestoneHash()
    {
        return $this->container['milestoneHash'];
    }

    /**
     * Sets milestoneHash
     *
     * @param int $milestoneHash The unique identifier for the Milestone. Use it to look up the DestinyMilestoneDefinition, so you can combine the other data in this contract with static definition data.
     *
     * @return $this
     */
    public function setMilestoneHash($milestoneHash)
    {
        $this->container['milestoneHash'] = $milestoneHash;

        return $this;
    }

    /**
     * Gets availableQuests
     *
     * @return \Bungie\Model\DestinyMilestonesDestinyMilestoneQuest[]
     */
    public function getAvailableQuests()
    {
        return $this->container['availableQuests'];
    }

    /**
     * Sets availableQuests
     *
     * @param \Bungie\Model\DestinyMilestonesDestinyMilestoneQuest[] $availableQuests Indicates what quests are available for this Milestone. Usually this will be only a single Quest, but some quests have multiple available that you can choose from at any given time. All possible quests for a milestone can be found in the DestinyMilestoneDefinition, but they must be combined with this Live data to determine which one(s) are actually active right now. It is possible for Milestones to not have any quests.
     *
     * @return $this
     */
    public function setAvailableQuests($availableQuests)
    {
        $this->container['availableQuests'] = $availableQuests;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return \Bungie\Model\DestinyMilestonesDestinyMilestoneChallengeActivity[]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \Bungie\Model\DestinyMilestonesDestinyMilestoneChallengeActivity[] $activities The currently active Activities in this milestone, when the Milestone is driven by Challenges.  Not all Milestones have Challenges, but when they do this will indicate the Activities and Challenges under those Activities related to this Milestone.
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets values
     *
     * @return map[string,float]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param map[string,float] $values Milestones may have arbitrary key/value pairs associated with them, for data that users will want to know about but that doesn't fit neatly into any of the common components such as Quests. A good example of this would be - if this existed in Destiny 1 - the number of wins you currently have on your Trials of Osiris ticket. Looking in the DestinyMilestoneDefinition, you can use the string identifier of this dictionary to look up more info about the value, including localized string content for displaying the value. The value in the dictionary is the floating point number. The definition will tell you how to format this number.
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets vendorHashes
     *
     * @return int[]
     */
    public function getVendorHashes()
    {
        return $this->container['vendorHashes'];
    }

    /**
     * Sets vendorHashes
     *
     * @param int[] $vendorHashes A milestone may have one or more active vendors that are \"related\" to it (that provide rewards, or that are the initiators of the Milestone). I already regret this, even as I'm typing it. [I told you I'd regret this] You see, sometimes a milestone may be directly correlated with a set of vendors that provide varying tiers of rewards. The player may not be able to interact with one or more of those vendors. This will return the hashes of the Vendors that the player *can* interact with, allowing you to show their current inventory as rewards or related items to the Milestone or its activities.  Before we even use it, it's already deprecated! How much of a bummer is that? We need more data.
     *
     * @return $this
     */
    public function setVendorHashes($vendorHashes)
    {
        $this->container['vendorHashes'] = $vendorHashes;

        return $this;
    }

    /**
     * Gets vendors
     *
     * @return \Bungie\Model\DestinyMilestonesDestinyMilestoneVendor[]
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \Bungie\Model\DestinyMilestonesDestinyMilestoneVendor[] $vendors Replaces vendorHashes, which I knew was going to be trouble the day it walked in the door. This will return not only what Vendors are active and relevant to the activity (in an implied order that you can choose to ignore), but also other data - for example, if the Vendor is featuring a specific item relevant to this event that you should show with them.
     *
     * @return $this
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets rewards
     *
     * @return \Bungie\Model\DestinyMilestonesDestinyMilestoneRewardCategory[]
     */
    public function getRewards()
    {
        return $this->container['rewards'];
    }

    /**
     * Sets rewards
     *
     * @param \Bungie\Model\DestinyMilestonesDestinyMilestoneRewardCategory[] $rewards If the entity to which this component is attached has known active Rewards for the player, this will detail information about those rewards, keyed by the RewardEntry Hash. (See DestinyMilestoneDefinition for more information about Reward Entries) Note that these rewards are not for the Quests related to the Milestone. Think of these as \"overview/checklist\" rewards that may be provided for Milestones that may provide rewards for performing a variety of tasks that aren't under a specific Quest.
     *
     * @return $this
     */
    public function setRewards($rewards)
    {
        $this->container['rewards'] = $rewards;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate If known, this is the date when the event last began or refreshed. It will only be populated for events with fixed and repeating start and end dates.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate If known, this is the date when the event will next end or repeat. It will only be populated for events with fixed and repeating start and end dates.
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information.
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


