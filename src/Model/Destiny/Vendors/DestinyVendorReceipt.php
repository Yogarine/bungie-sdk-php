<?php
/**
 * DestinyVendorReceipt
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

namespace Bungie\Model\Destiny\Vendors;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyVendorReceipt Class Doc Comment
 *
 * @category Class
 * @description If a character purchased an item that is refundable, a Vendor Receipt will be created on the user&#39;s Destiny Profile. These expire after a configurable period of time, but until then can be used to get refunds on items. BNet does not provide the ability to refund a purchase *yet*, but you know.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorReceipt implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Vendors.DestinyVendorReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currencyPaid' => '\Bungie\Model\Destiny\DestinyItemQuantity[]',
        'itemReceived' => '\Bungie\Model\Destiny\DestinyItemQuantity',
        'licenseUnlockHash' => 'int',
        'purchasedByCharacterId' => 'int',
        'refundPolicy' => 'int',
        'sequenceNumber' => 'int',
        'timeToExpiration' => 'int',
        'expiresOn' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currencyPaid' => null,
        'itemReceived' => null,
        'licenseUnlockHash' => 'uint32',
        'purchasedByCharacterId' => 'int64',
        'refundPolicy' => 'int32',
        'sequenceNumber' => 'int32',
        'timeToExpiration' => 'int64',
        'expiresOn' => 'date-time'
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
        'currencyPaid' => 'currencyPaid',
        'itemReceived' => 'itemReceived',
        'licenseUnlockHash' => 'licenseUnlockHash',
        'purchasedByCharacterId' => 'purchasedByCharacterId',
        'refundPolicy' => 'refundPolicy',
        'sequenceNumber' => 'sequenceNumber',
        'timeToExpiration' => 'timeToExpiration',
        'expiresOn' => 'expiresOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencyPaid' => 'setCurrencyPaid',
        'itemReceived' => 'setItemReceived',
        'licenseUnlockHash' => 'setLicenseUnlockHash',
        'purchasedByCharacterId' => 'setPurchasedByCharacterId',
        'refundPolicy' => 'setRefundPolicy',
        'sequenceNumber' => 'setSequenceNumber',
        'timeToExpiration' => 'setTimeToExpiration',
        'expiresOn' => 'setExpiresOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencyPaid' => 'getCurrencyPaid',
        'itemReceived' => 'getItemReceived',
        'licenseUnlockHash' => 'getLicenseUnlockHash',
        'purchasedByCharacterId' => 'getPurchasedByCharacterId',
        'refundPolicy' => 'getRefundPolicy',
        'sequenceNumber' => 'getSequenceNumber',
        'timeToExpiration' => 'getTimeToExpiration',
        'expiresOn' => 'getExpiresOn'
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
        $this->container['currencyPaid'] = isset($data['currencyPaid']) ? $data['currencyPaid'] : null;
        $this->container['itemReceived'] = isset($data['itemReceived']) ? $data['itemReceived'] : null;
        $this->container['licenseUnlockHash'] = isset($data['licenseUnlockHash']) ? $data['licenseUnlockHash'] : null;
        $this->container['purchasedByCharacterId'] = isset($data['purchasedByCharacterId']) ? $data['purchasedByCharacterId'] : null;
        $this->container['refundPolicy'] = isset($data['refundPolicy']) ? $data['refundPolicy'] : null;
        $this->container['sequenceNumber'] = isset($data['sequenceNumber']) ? $data['sequenceNumber'] : null;
        $this->container['timeToExpiration'] = isset($data['timeToExpiration']) ? $data['timeToExpiration'] : null;
        $this->container['expiresOn'] = isset($data['expiresOn']) ? $data['expiresOn'] : null;
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
     * Gets currencyPaid
     *
     * @return \Bungie\Model\Destiny\DestinyItemQuantity[]|null
     */
    public function getCurrencyPaid()
    {
        return $this->container['currencyPaid'];
    }

    /**
     * Sets currencyPaid
     *
     * @param \Bungie\Model\Destiny\DestinyItemQuantity[]|null $currencyPaid The amount paid for the item, in terms of items that were consumed in the purchase and their quantity.
     *
     * @return $this
     */
    public function setCurrencyPaid($currencyPaid)
    {
        $this->container['currencyPaid'] = $currencyPaid;

        return $this;
    }

    /**
     * Gets itemReceived
     *
     * @return \Bungie\Model\Destiny\DestinyItemQuantity|null
     */
    public function getItemReceived()
    {
        return $this->container['itemReceived'];
    }

    /**
     * Sets itemReceived
     *
     * @param \Bungie\Model\Destiny\DestinyItemQuantity|null $itemReceived The item that was received, and its quantity.
     *
     * @return $this
     */
    public function setItemReceived($itemReceived)
    {
        $this->container['itemReceived'] = $itemReceived;

        return $this;
    }

    /**
     * Gets licenseUnlockHash
     *
     * @return int|null
     */
    public function getLicenseUnlockHash()
    {
        return $this->container['licenseUnlockHash'];
    }

    /**
     * Sets licenseUnlockHash
     *
     * @param int|null $licenseUnlockHash The unlock flag used to determine whether you still have the purchased item.
     *
     * @return $this
     */
    public function setLicenseUnlockHash($licenseUnlockHash)
    {
        $this->container['licenseUnlockHash'] = $licenseUnlockHash;

        return $this;
    }

    /**
     * Gets purchasedByCharacterId
     *
     * @return int|null
     */
    public function getPurchasedByCharacterId()
    {
        return $this->container['purchasedByCharacterId'];
    }

    /**
     * Sets purchasedByCharacterId
     *
     * @param int|null $purchasedByCharacterId The ID of the character who made the purchase.
     *
     * @return $this
     */
    public function setPurchasedByCharacterId($purchasedByCharacterId)
    {
        $this->container['purchasedByCharacterId'] = $purchasedByCharacterId;

        return $this;
    }

    /**
     * Gets refundPolicy
     *
     * @return int|null
     */
    public function getRefundPolicy()
    {
        return $this->container['refundPolicy'];
    }

    /**
     * Sets refundPolicy
     *
     * @param int|null $refundPolicy Whether you can get a refund, and what happens in order for the refund to be received. See the DestinyVendorItemRefundPolicy enum for details.
     *
     * @return $this
     */
    public function setRefundPolicy($refundPolicy)
    {
        $this->container['refundPolicy'] = $refundPolicy;

        return $this;
    }

    /**
     * Gets sequenceNumber
     *
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->container['sequenceNumber'];
    }

    /**
     * Sets sequenceNumber
     *
     * @param int|null $sequenceNumber The identifier of this receipt.
     *
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->container['sequenceNumber'] = $sequenceNumber;

        return $this;
    }

    /**
     * Gets timeToExpiration
     *
     * @return int|null
     */
    public function getTimeToExpiration()
    {
        return $this->container['timeToExpiration'];
    }

    /**
     * Sets timeToExpiration
     *
     * @param int|null $timeToExpiration The seconds since epoch at which this receipt is rendered invalid.
     *
     * @return $this
     */
    public function setTimeToExpiration($timeToExpiration)
    {
        $this->container['timeToExpiration'] = $timeToExpiration;

        return $this;
    }

    /**
     * Gets expiresOn
     *
     * @return \DateTime|null
     */
    public function getExpiresOn()
    {
        return $this->container['expiresOn'];
    }

    /**
     * Sets expiresOn
     *
     * @param \DateTime|null $expiresOn The date at which this receipt is rendered invalid.
     *
     * @return $this
     */
    public function setExpiresOn($expiresOn)
    {
        $this->container['expiresOn'] = $expiresOn;

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


