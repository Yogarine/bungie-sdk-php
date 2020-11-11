<?php
/**
 * DestinyItemComponent
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

namespace Bungie\Model\Destiny\Entities\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemComponent Class Doc Comment
 *
 * @category Class
 * @description The base item component, filled with properties that are generally useful to know in any item request or that don&#39;t feel worthwhile to put in their own component.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Items.DestinyItemComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemHash' => 'int',
        'itemInstanceId' => 'int',
        'quantity' => 'int',
        'bindStatus' => 'int',
        'location' => 'int',
        'bucketHash' => 'int',
        'transferStatus' => 'int',
        'lockable' => 'bool',
        'state' => 'int',
        'overrideStyleItemHash' => 'int',
        'expirationDate' => '\DateTime',
        'isWrapper' => 'bool',
        'tooltipNotificationIndexes' => 'int[]',
        'metricHash' => 'int',
        'metricObjective' => '\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress',
        'versionNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemHash' => 'uint32',
        'itemInstanceId' => 'int64',
        'quantity' => 'int32',
        'bindStatus' => 'int32',
        'location' => 'int32',
        'bucketHash' => 'uint32',
        'transferStatus' => 'int32',
        'lockable' => null,
        'state' => 'int32',
        'overrideStyleItemHash' => 'uint32',
        'expirationDate' => 'date-time',
        'isWrapper' => null,
        'tooltipNotificationIndexes' => 'int32',
        'metricHash' => 'uint32',
        'metricObjective' => null,
        'versionNumber' => 'int32'
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
        'itemHash' => 'itemHash',
        'itemInstanceId' => 'itemInstanceId',
        'quantity' => 'quantity',
        'bindStatus' => 'bindStatus',
        'location' => 'location',
        'bucketHash' => 'bucketHash',
        'transferStatus' => 'transferStatus',
        'lockable' => 'lockable',
        'state' => 'state',
        'overrideStyleItemHash' => 'overrideStyleItemHash',
        'expirationDate' => 'expirationDate',
        'isWrapper' => 'isWrapper',
        'tooltipNotificationIndexes' => 'tooltipNotificationIndexes',
        'metricHash' => 'metricHash',
        'metricObjective' => 'metricObjective',
        'versionNumber' => 'versionNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemHash' => 'setItemHash',
        'itemInstanceId' => 'setItemInstanceId',
        'quantity' => 'setQuantity',
        'bindStatus' => 'setBindStatus',
        'location' => 'setLocation',
        'bucketHash' => 'setBucketHash',
        'transferStatus' => 'setTransferStatus',
        'lockable' => 'setLockable',
        'state' => 'setState',
        'overrideStyleItemHash' => 'setOverrideStyleItemHash',
        'expirationDate' => 'setExpirationDate',
        'isWrapper' => 'setIsWrapper',
        'tooltipNotificationIndexes' => 'setTooltipNotificationIndexes',
        'metricHash' => 'setMetricHash',
        'metricObjective' => 'setMetricObjective',
        'versionNumber' => 'setVersionNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemHash' => 'getItemHash',
        'itemInstanceId' => 'getItemInstanceId',
        'quantity' => 'getQuantity',
        'bindStatus' => 'getBindStatus',
        'location' => 'getLocation',
        'bucketHash' => 'getBucketHash',
        'transferStatus' => 'getTransferStatus',
        'lockable' => 'getLockable',
        'state' => 'getState',
        'overrideStyleItemHash' => 'getOverrideStyleItemHash',
        'expirationDate' => 'getExpirationDate',
        'isWrapper' => 'getIsWrapper',
        'tooltipNotificationIndexes' => 'getTooltipNotificationIndexes',
        'metricHash' => 'getMetricHash',
        'metricObjective' => 'getMetricObjective',
        'versionNumber' => 'getVersionNumber'
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
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['itemInstanceId'] = isset($data['itemInstanceId']) ? $data['itemInstanceId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['bindStatus'] = isset($data['bindStatus']) ? $data['bindStatus'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['bucketHash'] = isset($data['bucketHash']) ? $data['bucketHash'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['lockable'] = isset($data['lockable']) ? $data['lockable'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['overrideStyleItemHash'] = isset($data['overrideStyleItemHash']) ? $data['overrideStyleItemHash'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['isWrapper'] = isset($data['isWrapper']) ? $data['isWrapper'] : null;
        $this->container['tooltipNotificationIndexes'] = isset($data['tooltipNotificationIndexes']) ? $data['tooltipNotificationIndexes'] : null;
        $this->container['metricHash'] = isset($data['metricHash']) ? $data['metricHash'] : null;
        $this->container['metricObjective'] = isset($data['metricObjective']) ? $data['metricObjective'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
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
     * Gets itemHash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['itemHash'];
    }

    /**
     * Sets itemHash
     *
     * @param int|null $itemHash The identifier for the item's definition, which is where most of the useful static information for the item can be found.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

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
     * @param int|null $itemInstanceId If the item is instanced, it will have an instance ID. Lack of an instance ID implies that the item has no distinct local qualities aside from stack size.
     *
     * @return $this
     */
    public function setItemInstanceId($itemInstanceId)
    {
        $this->container['itemInstanceId'] = $itemInstanceId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the item in this stack. Note that Instanced items cannot stack. If an instanced item, this value will always be 1 (as the stack has exactly one item in it)
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets bindStatus
     *
     * @return int|null
     */
    public function getBindStatus()
    {
        return $this->container['bindStatus'];
    }

    /**
     * Sets bindStatus
     *
     * @param int|null $bindStatus If the item is bound to a location, it will be specified in this enum.
     *
     * @return $this
     */
    public function setBindStatus($bindStatus)
    {
        $this->container['bindStatus'] = $bindStatus;

        return $this;
    }

    /**
     * Gets location
     *
     * @return int|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param int|null $location An easy reference for where the item is located. Redundant if you got the item from an Inventory, but useful when making detail calls on specific items.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets bucketHash
     *
     * @return int|null
     */
    public function getBucketHash()
    {
        return $this->container['bucketHash'];
    }

    /**
     * Sets bucketHash
     *
     * @param int|null $bucketHash The hash identifier for the specific inventory bucket in which the item is located.
     *
     * @return $this
     */
    public function setBucketHash($bucketHash)
    {
        $this->container['bucketHash'] = $bucketHash;

        return $this;
    }

    /**
     * Gets transferStatus
     *
     * @return int|null
     */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
     * Sets transferStatus
     *
     * @param int|null $transferStatus If there is a known error state that would cause this item to not be transferable, this Flags enum will indicate all of those error states. Otherwise, it will be 0 (CanTransfer).
     *
     * @return $this
     */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;

        return $this;
    }

    /**
     * Gets lockable
     *
     * @return bool|null
     */
    public function getLockable()
    {
        return $this->container['lockable'];
    }

    /**
     * Sets lockable
     *
     * @param bool|null $lockable If the item can be locked, this will indicate that state.
     *
     * @return $this
     */
    public function setLockable($lockable)
    {
        $this->container['lockable'] = $lockable;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int|null $state A flags enumeration indicating the transient/custom states of the item that affect how it is rendered: whether it's tracked or locked for example, or whether it has a masterwork plug inserted.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets overrideStyleItemHash
     *
     * @return int|null
     */
    public function getOverrideStyleItemHash()
    {
        return $this->container['overrideStyleItemHash'];
    }

    /**
     * Sets overrideStyleItemHash
     *
     * @param int|null $overrideStyleItemHash If populated, this is the hash of the item whose icon (and other secondary styles, but *not* the human readable strings) should override whatever icons/styles are on the item being sold.  If you don't do this, certain items whose styles are being overridden by socketed items - such as the \"Recycle Shader\" item - would show whatever their default icon/style is, and it wouldn't be pretty or look accurate.
     *
     * @return $this
     */
    public function setOverrideStyleItemHash($overrideStyleItemHash)
    {
        $this->container['overrideStyleItemHash'] = $overrideStyleItemHash;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime|null $expirationDate If the item can expire, this is the date at which it will/did expire.
     *
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets isWrapper
     *
     * @return bool|null
     */
    public function getIsWrapper()
    {
        return $this->container['isWrapper'];
    }

    /**
     * Sets isWrapper
     *
     * @param bool|null $isWrapper If this is true, the object is actually a \"wrapper\" of the object it's representing. This means that it's not the actual item itself, but rather an item that must be \"opened\" in game before you have and can use the item.   Wrappers are an evolution of \"bundles\", which give an easy way to let you preview the contents of what you purchased while still letting you get a refund before you \"open\" it.
     *
     * @return $this
     */
    public function setIsWrapper($isWrapper)
    {
        $this->container['isWrapper'] = $isWrapper;

        return $this;
    }

    /**
     * Gets tooltipNotificationIndexes
     *
     * @return int[]|null
     */
    public function getTooltipNotificationIndexes()
    {
        return $this->container['tooltipNotificationIndexes'];
    }

    /**
     * Sets tooltipNotificationIndexes
     *
     * @param int[]|null $tooltipNotificationIndexes If this is populated, it is a list of indexes into DestinyInventoryItemDefinition.tooltipNotifications for any special tooltip messages that need to be shown for this item.
     *
     * @return $this
     */
    public function setTooltipNotificationIndexes($tooltipNotificationIndexes)
    {
        $this->container['tooltipNotificationIndexes'] = $tooltipNotificationIndexes;

        return $this;
    }

    /**
     * Gets metricHash
     *
     * @return int|null
     */
    public function getMetricHash()
    {
        return $this->container['metricHash'];
    }

    /**
     * Sets metricHash
     *
     * @param int|null $metricHash The identifier for the currently-selected metric definition, to be displayed on the emblem nameplate.
     *
     * @return $this
     */
    public function setMetricHash($metricHash)
    {
        $this->container['metricHash'] = $metricHash;

        return $this;
    }

    /**
     * Gets metricObjective
     *
     * @return \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress|null
     */
    public function getMetricObjective()
    {
        return $this->container['metricObjective'];
    }

    /**
     * Sets metricObjective
     *
     * @param \Bungie\Model\Destiny\Quests\DestinyObjectiveProgress|null $metricObjective The objective progress for the currently-selected metric definition, to be displayed on the emblem nameplate.
     *
     * @return $this
     */
    public function setMetricObjective($metricObjective)
    {
        $this->container['metricObjective'] = $metricObjective;

        return $this;
    }

    /**
     * Gets versionNumber
     *
     * @return int|null
     */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
     * Sets versionNumber
     *
     * @param int|null $versionNumber The version of this item, used to index into the versions list in the item definition quality block.
     *
     * @return $this
     */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;

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


