<?php
/**
 * DestinyPresentationNodeChildrenBlock
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

namespace Bungie\Model\Destiny\Definitions\Presentation;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPresentationNodeChildrenBlock Class Doc Comment
 *
 * @category Class
 * @description As/if presentation nodes begin to host more entities as children, these lists will be added to. One list property exists per type of entity that can be treated as a child of this presentation node, and each holds the identifier of the entity and any associated information needed to display the UI for that entity (if anything)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationNodeChildrenBlock implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Presentation.DestinyPresentationNodeChildrenBlock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'presentationNodes' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildEntry[]',
        'collectibles' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeCollectibleChildEntry[]',
        'records' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRecordChildEntry[]',
        'metrics' => '\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeMetricChildEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'presentationNodes' => null,
        'collectibles' => null,
        'records' => null,
        'metrics' => null
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
        'presentationNodes' => 'presentationNodes',
        'collectibles' => 'collectibles',
        'records' => 'records',
        'metrics' => 'metrics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'presentationNodes' => 'setPresentationNodes',
        'collectibles' => 'setCollectibles',
        'records' => 'setRecords',
        'metrics' => 'setMetrics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'presentationNodes' => 'getPresentationNodes',
        'collectibles' => 'getCollectibles',
        'records' => 'getRecords',
        'metrics' => 'getMetrics'
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
        $this->container['presentationNodes'] = isset($data['presentationNodes']) ? $data['presentationNodes'] : null;
        $this->container['collectibles'] = isset($data['collectibles']) ? $data['collectibles'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
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
     * Gets presentationNodes
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildEntry[]|null
     */
    public function getPresentationNodes()
    {
        return $this->container['presentationNodes'];
    }

    /**
     * Sets presentationNodes
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeChildEntry[]|null $presentationNodes presentationNodes
     *
     * @return $this
     */
    public function setPresentationNodes($presentationNodes)
    {
        $this->container['presentationNodes'] = $presentationNodes;

        return $this;
    }

    /**
     * Gets collectibles
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeCollectibleChildEntry[]|null
     */
    public function getCollectibles()
    {
        return $this->container['collectibles'];
    }

    /**
     * Sets collectibles
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeCollectibleChildEntry[]|null $collectibles collectibles
     *
     * @return $this
     */
    public function setCollectibles($collectibles)
    {
        $this->container['collectibles'] = $collectibles;

        return $this;
    }

    /**
     * Gets records
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRecordChildEntry[]|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRecordChildEntry[]|null $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeMetricChildEntry[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeMetricChildEntry[]|null $metrics metrics
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

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


