<?php
/**
 * DestinyPublicMilestone
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

namespace Bungie\Model\Destiny\Milestones;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPublicMilestone Class Doc Comment
 *
 * @category Class
 * @description Information about milestones, presented in a character state-agnostic manner. Combine this data with DestinyMilestoneDefinition to get a full picture of the milestone, which is basically a checklist of things to do in the game. Think of this as GetPublicAdvisors 3.0, for those who used the Destiny 1 API.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPublicMilestone implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyPublicMilestone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'milestoneHash' => 'int',
        'availableQuests' => '\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneQuest[]',
        'activities' => '\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneChallengeActivity[]',
        'vendorHashes' => 'int[]',
        'vendors' => '\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneVendor[]',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'order' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'milestoneHash' => 'uint32',
        'availableQuests' => null,
        'activities' => null,
        'vendorHashes' => 'uint32',
        'vendors' => null,
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'order' => 'int32'
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
        'milestoneHash' => 'milestoneHash',
        'availableQuests' => 'availableQuests',
        'activities' => 'activities',
        'vendorHashes' => 'vendorHashes',
        'vendors' => 'vendors',
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
        'vendorHashes' => 'setVendorHashes',
        'vendors' => 'setVendors',
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
        'vendorHashes' => 'getVendorHashes',
        'vendors' => 'getVendors',
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
        $this->container['milestoneHash'] = isset($data['milestoneHash']) ? $data['milestoneHash'] : null;
        $this->container['availableQuests'] = isset($data['availableQuests']) ? $data['availableQuests'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['vendorHashes'] = isset($data['vendorHashes']) ? $data['vendorHashes'] : null;
        $this->container['vendors'] = isset($data['vendors']) ? $data['vendors'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets milestoneHash
     *
     * @return int|null
     */
    public function getMilestoneHash()
    {
        return $this->container['milestoneHash'];
    }

    /**
     * Sets milestoneHash
     *
     * @param int|null $milestoneHash The hash identifier for the milestone. Use it to look up the DestinyMilestoneDefinition for static data about the Milestone.
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
     * @return \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneQuest[]|null
     */
    public function getAvailableQuests()
    {
        return $this->container['availableQuests'];
    }

    /**
     * Sets availableQuests
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneQuest[]|null $availableQuests A milestone not need have even a single quest, but if there are active quests they will be returned here.
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
     * @return \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneChallengeActivity[]|null
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneChallengeActivity[]|null $activities activities
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets vendorHashes
     *
     * @return int[]|null
     */
    public function getVendorHashes()
    {
        return $this->container['vendorHashes'];
    }

    /**
     * Sets vendorHashes
     *
     * @param int[]|null $vendorHashes Sometimes milestones - or activities active in milestones - will have relevant vendors. These are the vendors that are currently relevant.  Deprecated, already, for the sake of the new \"vendors\" property that has more data. What was I thinking.
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
     * @return \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneVendor[]|null
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneVendor[]|null $vendors This is why we can't have nice things. This is the ordered list of vendors to be shown that relate to this milestone, potentially along with other interesting data.
     *
     * @return $this
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate If known, this is the date when the Milestone started/became active.
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
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate If known, this is the date when the Milestone will expire/recycle/end.
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
     * @return int|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int|null $order Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information.
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


