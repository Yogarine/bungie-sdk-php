<?php
/**
 * TrendingEntryDestinyRitual
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

namespace Bungie\Model\Trending;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * TrendingEntryDestinyRitual Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrendingEntryDestinyRitual implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Trending.TrendingEntryDestinyRitual';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image' => 'string',
        'icon' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'dateStart' => '\DateTime',
        'dateEnd' => '\DateTime',
        'milestoneDetails' => '\Bungie\Model\Destiny\Milestones\DestinyPublicMilestone',
        'eventContent' => '\Bungie\Model\Destiny\Milestones\DestinyMilestoneContent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'image' => null,
        'icon' => null,
        'title' => null,
        'subtitle' => null,
        'dateStart' => 'date-time',
        'dateEnd' => 'date-time',
        'milestoneDetails' => null,
        'eventContent' => null
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
        'image' => 'image',
        'icon' => 'icon',
        'title' => 'title',
        'subtitle' => 'subtitle',
        'dateStart' => 'dateStart',
        'dateEnd' => 'dateEnd',
        'milestoneDetails' => 'milestoneDetails',
        'eventContent' => 'eventContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image' => 'setImage',
        'icon' => 'setIcon',
        'title' => 'setTitle',
        'subtitle' => 'setSubtitle',
        'dateStart' => 'setDateStart',
        'dateEnd' => 'setDateEnd',
        'milestoneDetails' => 'setMilestoneDetails',
        'eventContent' => 'setEventContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image' => 'getImage',
        'icon' => 'getIcon',
        'title' => 'getTitle',
        'subtitle' => 'getSubtitle',
        'dateStart' => 'getDateStart',
        'dateEnd' => 'getDateEnd',
        'milestoneDetails' => 'getMilestoneDetails',
        'eventContent' => 'getEventContent'
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
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subtitle'] = isset($data['subtitle']) ? $data['subtitle'] : null;
        $this->container['dateStart'] = isset($data['dateStart']) ? $data['dateStart'] : null;
        $this->container['dateEnd'] = isset($data['dateEnd']) ? $data['dateEnd'] : null;
        $this->container['milestoneDetails'] = isset($data['milestoneDetails']) ? $data['milestoneDetails'] : null;
        $this->container['eventContent'] = isset($data['eventContent']) ? $data['eventContent'] : null;
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
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string|null $subtitle subtitle
     *
     * @return $this
     */
    public function setSubtitle($subtitle)
    {
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets dateStart
     *
     * @return \DateTime|null
     */
    public function getDateStart()
    {
        return $this->container['dateStart'];
    }

    /**
     * Sets dateStart
     *
     * @param \DateTime|null $dateStart dateStart
     *
     * @return $this
     */
    public function setDateStart($dateStart)
    {
        $this->container['dateStart'] = $dateStart;

        return $this;
    }

    /**
     * Gets dateEnd
     *
     * @return \DateTime|null
     */
    public function getDateEnd()
    {
        return $this->container['dateEnd'];
    }

    /**
     * Sets dateEnd
     *
     * @param \DateTime|null $dateEnd dateEnd
     *
     * @return $this
     */
    public function setDateEnd($dateEnd)
    {
        $this->container['dateEnd'] = $dateEnd;

        return $this;
    }

    /**
     * Gets milestoneDetails
     *
     * @return \Bungie\Model\Destiny\Milestones\DestinyPublicMilestone|null
     */
    public function getMilestoneDetails()
    {
        return $this->container['milestoneDetails'];
    }

    /**
     * Sets milestoneDetails
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyPublicMilestone|null $milestoneDetails A destiny event does not necessarily have a related Milestone, but if it does the details will be returned here.
     *
     * @return $this
     */
    public function setMilestoneDetails($milestoneDetails)
    {
        $this->container['milestoneDetails'] = $milestoneDetails;

        return $this;
    }

    /**
     * Gets eventContent
     *
     * @return \Bungie\Model\Destiny\Milestones\DestinyMilestoneContent|null
     */
    public function getEventContent()
    {
        return $this->container['eventContent'];
    }

    /**
     * Sets eventContent
     *
     * @param \Bungie\Model\Destiny\Milestones\DestinyMilestoneContent|null $eventContent A destiny event will not necessarily have milestone \"custom content\", but if it does the details will be here.
     *
     * @return $this
     */
    public function setEventContent($eventContent)
    {
        $this->container['eventContent'] = $eventContent;

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


