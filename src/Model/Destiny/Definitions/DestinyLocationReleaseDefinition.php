<?php
/**
 * DestinyLocationReleaseDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyLocationReleaseDefinition Class Doc Comment
 *
 * @category Class
 * @description A specific \&quot;spot\&quot; referred to by a location. Only one of these can be active at a time for a given Location.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyLocationReleaseDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyLocationReleaseDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'smallTransparentIcon' => 'string',
        'mapIcon' => 'string',
        'largeTransparentIcon' => 'string',
        'spawnPoint' => 'int',
        'destinationHash' => 'int',
        'activityHash' => 'int',
        'activityGraphHash' => 'int',
        'activityGraphNodeHash' => 'int',
        'activityBubbleName' => 'int',
        'activityPathBundle' => 'int',
        'activityPathDestination' => 'int',
        'navPointType' => 'int',
        'worldPosition' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'smallTransparentIcon' => null,
        'mapIcon' => null,
        'largeTransparentIcon' => null,
        'spawnPoint' => 'uint32',
        'destinationHash' => 'uint32',
        'activityHash' => 'uint32',
        'activityGraphHash' => 'uint32',
        'activityGraphNodeHash' => 'uint32',
        'activityBubbleName' => 'uint32',
        'activityPathBundle' => 'uint32',
        'activityPathDestination' => 'uint32',
        'navPointType' => 'int32',
        'worldPosition' => 'int32'
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
        'smallTransparentIcon' => 'smallTransparentIcon',
        'mapIcon' => 'mapIcon',
        'largeTransparentIcon' => 'largeTransparentIcon',
        'spawnPoint' => 'spawnPoint',
        'destinationHash' => 'destinationHash',
        'activityHash' => 'activityHash',
        'activityGraphHash' => 'activityGraphHash',
        'activityGraphNodeHash' => 'activityGraphNodeHash',
        'activityBubbleName' => 'activityBubbleName',
        'activityPathBundle' => 'activityPathBundle',
        'activityPathDestination' => 'activityPathDestination',
        'navPointType' => 'navPointType',
        'worldPosition' => 'worldPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayProperties' => 'setDisplayProperties',
        'smallTransparentIcon' => 'setSmallTransparentIcon',
        'mapIcon' => 'setMapIcon',
        'largeTransparentIcon' => 'setLargeTransparentIcon',
        'spawnPoint' => 'setSpawnPoint',
        'destinationHash' => 'setDestinationHash',
        'activityHash' => 'setActivityHash',
        'activityGraphHash' => 'setActivityGraphHash',
        'activityGraphNodeHash' => 'setActivityGraphNodeHash',
        'activityBubbleName' => 'setActivityBubbleName',
        'activityPathBundle' => 'setActivityPathBundle',
        'activityPathDestination' => 'setActivityPathDestination',
        'navPointType' => 'setNavPointType',
        'worldPosition' => 'setWorldPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayProperties' => 'getDisplayProperties',
        'smallTransparentIcon' => 'getSmallTransparentIcon',
        'mapIcon' => 'getMapIcon',
        'largeTransparentIcon' => 'getLargeTransparentIcon',
        'spawnPoint' => 'getSpawnPoint',
        'destinationHash' => 'getDestinationHash',
        'activityHash' => 'getActivityHash',
        'activityGraphHash' => 'getActivityGraphHash',
        'activityGraphNodeHash' => 'getActivityGraphNodeHash',
        'activityBubbleName' => 'getActivityBubbleName',
        'activityPathBundle' => 'getActivityPathBundle',
        'activityPathDestination' => 'getActivityPathDestination',
        'navPointType' => 'getNavPointType',
        'worldPosition' => 'getWorldPosition'
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
        $this->container['smallTransparentIcon'] = isset($data['smallTransparentIcon']) ? $data['smallTransparentIcon'] : null;
        $this->container['mapIcon'] = isset($data['mapIcon']) ? $data['mapIcon'] : null;
        $this->container['largeTransparentIcon'] = isset($data['largeTransparentIcon']) ? $data['largeTransparentIcon'] : null;
        $this->container['spawnPoint'] = isset($data['spawnPoint']) ? $data['spawnPoint'] : null;
        $this->container['destinationHash'] = isset($data['destinationHash']) ? $data['destinationHash'] : null;
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['activityGraphHash'] = isset($data['activityGraphHash']) ? $data['activityGraphHash'] : null;
        $this->container['activityGraphNodeHash'] = isset($data['activityGraphNodeHash']) ? $data['activityGraphNodeHash'] : null;
        $this->container['activityBubbleName'] = isset($data['activityBubbleName']) ? $data['activityBubbleName'] : null;
        $this->container['activityPathBundle'] = isset($data['activityPathBundle']) ? $data['activityPathBundle'] : null;
        $this->container['activityPathDestination'] = isset($data['activityPathDestination']) ? $data['activityPathDestination'] : null;
        $this->container['navPointType'] = isset($data['navPointType']) ? $data['navPointType'] : null;
        $this->container['worldPosition'] = isset($data['worldPosition']) ? $data['worldPosition'] : null;
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
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties Sadly, these don't appear to be populated anymore (ever?)
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets smallTransparentIcon
     *
     * @return string|null
     */
    public function getSmallTransparentIcon()
    {
        return $this->container['smallTransparentIcon'];
    }

    /**
     * Sets smallTransparentIcon
     *
     * @param string|null $smallTransparentIcon smallTransparentIcon
     *
     * @return $this
     */
    public function setSmallTransparentIcon($smallTransparentIcon)
    {
        $this->container['smallTransparentIcon'] = $smallTransparentIcon;

        return $this;
    }

    /**
     * Gets mapIcon
     *
     * @return string|null
     */
    public function getMapIcon()
    {
        return $this->container['mapIcon'];
    }

    /**
     * Sets mapIcon
     *
     * @param string|null $mapIcon mapIcon
     *
     * @return $this
     */
    public function setMapIcon($mapIcon)
    {
        $this->container['mapIcon'] = $mapIcon;

        return $this;
    }

    /**
     * Gets largeTransparentIcon
     *
     * @return string|null
     */
    public function getLargeTransparentIcon()
    {
        return $this->container['largeTransparentIcon'];
    }

    /**
     * Sets largeTransparentIcon
     *
     * @param string|null $largeTransparentIcon largeTransparentIcon
     *
     * @return $this
     */
    public function setLargeTransparentIcon($largeTransparentIcon)
    {
        $this->container['largeTransparentIcon'] = $largeTransparentIcon;

        return $this;
    }

    /**
     * Gets spawnPoint
     *
     * @return int|null
     */
    public function getSpawnPoint()
    {
        return $this->container['spawnPoint'];
    }

    /**
     * Sets spawnPoint
     *
     * @param int|null $spawnPoint If we had map information, this spawnPoint would be interesting. But sadly, we don't have that info.
     *
     * @return $this
     */
    public function setSpawnPoint($spawnPoint)
    {
        $this->container['spawnPoint'] = $spawnPoint;

        return $this;
    }

    /**
     * Gets destinationHash
     *
     * @return int|null
     */
    public function getDestinationHash()
    {
        return $this->container['destinationHash'];
    }

    /**
     * Sets destinationHash
     *
     * @param int|null $destinationHash The Destination being pointed to by this location.
     *
     * @return $this
     */
    public function setDestinationHash($destinationHash)
    {
        $this->container['destinationHash'] = $destinationHash;

        return $this;
    }

    /**
     * Gets activityHash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int|null $activityHash The Activity being pointed to by this location.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets activityGraphHash
     *
     * @return int|null
     */
    public function getActivityGraphHash()
    {
        return $this->container['activityGraphHash'];
    }

    /**
     * Sets activityGraphHash
     *
     * @param int|null $activityGraphHash The Activity Graph being pointed to by this location.
     *
     * @return $this
     */
    public function setActivityGraphHash($activityGraphHash)
    {
        $this->container['activityGraphHash'] = $activityGraphHash;

        return $this;
    }

    /**
     * Gets activityGraphNodeHash
     *
     * @return int|null
     */
    public function getActivityGraphNodeHash()
    {
        return $this->container['activityGraphNodeHash'];
    }

    /**
     * Sets activityGraphNodeHash
     *
     * @param int|null $activityGraphNodeHash The Activity Graph Node being pointed to by this location. (Remember that Activity Graph Node hashes are only unique within an Activity Graph: so use the combination to find the node being spoken of)
     *
     * @return $this
     */
    public function setActivityGraphNodeHash($activityGraphNodeHash)
    {
        $this->container['activityGraphNodeHash'] = $activityGraphNodeHash;

        return $this;
    }

    /**
     * Gets activityBubbleName
     *
     * @return int|null
     */
    public function getActivityBubbleName()
    {
        return $this->container['activityBubbleName'];
    }

    /**
     * Sets activityBubbleName
     *
     * @param int|null $activityBubbleName The Activity Bubble within the Destination. Look this up in the DestinyDestinationDefinition's bubbles and bubbleSettings properties.
     *
     * @return $this
     */
    public function setActivityBubbleName($activityBubbleName)
    {
        $this->container['activityBubbleName'] = $activityBubbleName;

        return $this;
    }

    /**
     * Gets activityPathBundle
     *
     * @return int|null
     */
    public function getActivityPathBundle()
    {
        return $this->container['activityPathBundle'];
    }

    /**
     * Sets activityPathBundle
     *
     * @param int|null $activityPathBundle If we had map information, this would tell us something cool about the path this location wants you to take. I wish we had map information.
     *
     * @return $this
     */
    public function setActivityPathBundle($activityPathBundle)
    {
        $this->container['activityPathBundle'] = $activityPathBundle;

        return $this;
    }

    /**
     * Gets activityPathDestination
     *
     * @return int|null
     */
    public function getActivityPathDestination()
    {
        return $this->container['activityPathDestination'];
    }

    /**
     * Sets activityPathDestination
     *
     * @param int|null $activityPathDestination If we had map information, this would tell us about path information related to destination on the map. Sad. Maybe you can do something cool with it. Go to town man.
     *
     * @return $this
     */
    public function setActivityPathDestination($activityPathDestination)
    {
        $this->container['activityPathDestination'] = $activityPathDestination;

        return $this;
    }

    /**
     * Gets navPointType
     *
     * @return int|null
     */
    public function getNavPointType()
    {
        return $this->container['navPointType'];
    }

    /**
     * Sets navPointType
     *
     * @param int|null $navPointType The type of Nav Point that this represents. See the enumeration for more info.
     *
     * @return $this
     */
    public function setNavPointType($navPointType)
    {
        $this->container['navPointType'] = $navPointType;

        return $this;
    }

    /**
     * Gets worldPosition
     *
     * @return int[]|null
     */
    public function getWorldPosition()
    {
        return $this->container['worldPosition'];
    }

    /**
     * Sets worldPosition
     *
     * @param int[]|null $worldPosition Looks like it should be the position on the map, but sadly it does not look populated... yet?
     *
     * @return $this
     */
    public function setWorldPosition($worldPosition)
    {
        $this->container['worldPosition'] = $worldPosition;

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


