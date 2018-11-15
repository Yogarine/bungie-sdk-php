<?php
/**
 * DestinyEntitiesVendorsDestinyVendorComponent
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
 * DestinyEntitiesVendorsDestinyVendorComponent Class Doc Comment
 *
 * @category Class
 * @description This component contains essential/summary information about the vendor.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyEntitiesVendorsDestinyVendorComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Entities.Vendors.DestinyVendorComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vendorHash' => 'int',
        'nextRefreshDate' => '\DateTime',
        'enabled' => 'bool',
        'canPurchase' => 'bool',
        'progression' => 'object',
        'vendorLocationIndex' => 'int',
        'seasonalRank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vendorHash' => 'uint32',
        'nextRefreshDate' => 'date-time',
        'enabled' => null,
        'canPurchase' => null,
        'progression' => null,
        'vendorLocationIndex' => 'int32',
        'seasonalRank' => 'int32'
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
        'vendorHash' => 'vendorHash',
        'nextRefreshDate' => 'nextRefreshDate',
        'enabled' => 'enabled',
        'canPurchase' => 'canPurchase',
        'progression' => 'progression',
        'vendorLocationIndex' => 'vendorLocationIndex',
        'seasonalRank' => 'seasonalRank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorHash' => 'setVendorHash',
        'nextRefreshDate' => 'setNextRefreshDate',
        'enabled' => 'setEnabled',
        'canPurchase' => 'setCanPurchase',
        'progression' => 'setProgression',
        'vendorLocationIndex' => 'setVendorLocationIndex',
        'seasonalRank' => 'setSeasonalRank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorHash' => 'getVendorHash',
        'nextRefreshDate' => 'getNextRefreshDate',
        'enabled' => 'getEnabled',
        'canPurchase' => 'getCanPurchase',
        'progression' => 'getProgression',
        'vendorLocationIndex' => 'getVendorLocationIndex',
        'seasonalRank' => 'getSeasonalRank'
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
        $this->container['vendorHash'] = isset($data['vendorHash']) ? $data['vendorHash'] : null;
        $this->container['nextRefreshDate'] = isset($data['nextRefreshDate']) ? $data['nextRefreshDate'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['canPurchase'] = isset($data['canPurchase']) ? $data['canPurchase'] : null;
        $this->container['progression'] = isset($data['progression']) ? $data['progression'] : null;
        $this->container['vendorLocationIndex'] = isset($data['vendorLocationIndex']) ? $data['vendorLocationIndex'] : null;
        $this->container['seasonalRank'] = isset($data['seasonalRank']) ? $data['seasonalRank'] : null;
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
     * Gets vendorHash
     *
     * @return int
     */
    public function getVendorHash()
    {
        return $this->container['vendorHash'];
    }

    /**
     * Sets vendorHash
     *
     * @param int $vendorHash The unique identifier for the vendor. Use it to look up their DestinyVendorDefinition.
     *
     * @return $this
     */
    public function setVendorHash($vendorHash)
    {
        $this->container['vendorHash'] = $vendorHash;

        return $this;
    }

    /**
     * Gets nextRefreshDate
     *
     * @return \DateTime
     */
    public function getNextRefreshDate()
    {
        return $this->container['nextRefreshDate'];
    }

    /**
     * Sets nextRefreshDate
     *
     * @param \DateTime $nextRefreshDate The date when this vendor's inventory will next rotate/refresh.  Note that this is distinct from the date ranges that the vendor is visible/available in-game: this field indicates the specific time when the vendor's available items refresh and rotate, regardless of whether the vendor is actually available at that time. Unfortunately, these two values may be (and are, for the case of important vendors like Xur) different.  Issue https://github.com/Bungie-net/api/issues/353 is tracking a fix to start providing visibility date ranges where possible in addition to this refresh date, so that all important dates for vendors are available for use.
     *
     * @return $this
     */
    public function setNextRefreshDate($nextRefreshDate)
    {
        $this->container['nextRefreshDate'] = $nextRefreshDate;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled If True, the Vendor is currently accessible.   If False, they may not actually be visible in the world at the moment.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets canPurchase
     *
     * @return bool
     */
    public function getCanPurchase()
    {
        return $this->container['canPurchase'];
    }

    /**
     * Sets canPurchase
     *
     * @param bool $canPurchase If True, you can purchase from the Vendor.  Theoretically, Vendors can be restricted from selling items. In practice, none do that (yet?).
     *
     * @return $this
     */
    public function setCanPurchase($canPurchase)
    {
        $this->container['canPurchase'] = $canPurchase;

        return $this;
    }

    /**
     * Gets progression
     *
     * @return object
     */
    public function getProgression()
    {
        return $this->container['progression'];
    }

    /**
     * Sets progression
     *
     * @param object $progression If the Vendor has a related Reputation, this is the Progression data that represents the character's Reputation level with this Vendor.
     *
     * @return $this
     */
    public function setProgression($progression)
    {
        $this->container['progression'] = $progression;

        return $this;
    }

    /**
     * Gets vendorLocationIndex
     *
     * @return int
     */
    public function getVendorLocationIndex()
    {
        return $this->container['vendorLocationIndex'];
    }

    /**
     * Sets vendorLocationIndex
     *
     * @param int $vendorLocationIndex An index into the vendor definition's \"locations\" property array, indicating which location they are at currently. If -1, then the vendor has no known location (and you may choose not to show them in your UI as a result. I mean, it's your bag honey)
     *
     * @return $this
     */
    public function setVendorLocationIndex($vendorLocationIndex)
    {
        $this->container['vendorLocationIndex'] = $vendorLocationIndex;

        return $this;
    }

    /**
     * Gets seasonalRank
     *
     * @return int
     */
    public function getSeasonalRank()
    {
        return $this->container['seasonalRank'];
    }

    /**
     * Sets seasonalRank
     *
     * @param int $seasonalRank If this vendor has a seasonal rank, this will be the calculated value of that rank. How nice is that? I mean, that's pretty sweeet. It's a whole 32 bit integer.
     *
     * @return $this
     */
    public function setSeasonalRank($seasonalRank)
    {
        $this->container['seasonalRank'] = $seasonalRank;

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


