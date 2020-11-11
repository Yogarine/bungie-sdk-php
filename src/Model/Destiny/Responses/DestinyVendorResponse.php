<?php
/**
 * DestinyVendorResponse
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

namespace Bungie\Model\Destiny\Responses;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyVendorResponse Class Doc Comment
 *
 * @category Class
 * @description A response containing all of the components for a vendor.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyVendorResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendor' => '\Bungie\Model\SingleComponentResponseOfDestinyVendorComponent',
        'categories' => '\Bungie\Model\SingleComponentResponseOfDestinyVendorCategoriesComponent',
        'sales' => '\Bungie\Model\DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent',
        'itemComponents' => '\Bungie\Model\DestinyItemComponentSetOfint32',
        'currencyLookups' => '\Bungie\Model\SingleComponentResponseOfDestinyCurrenciesComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendor' => null,
        'categories' => null,
        'sales' => null,
        'itemComponents' => null,
        'currencyLookups' => null
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
        'vendor' => 'vendor',
        'categories' => 'categories',
        'sales' => 'sales',
        'itemComponents' => 'itemComponents',
        'currencyLookups' => 'currencyLookups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendor' => 'setVendor',
        'categories' => 'setCategories',
        'sales' => 'setSales',
        'itemComponents' => 'setItemComponents',
        'currencyLookups' => 'setCurrencyLookups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendor' => 'getVendor',
        'categories' => 'getCategories',
        'sales' => 'getSales',
        'itemComponents' => 'getItemComponents',
        'currencyLookups' => 'getCurrencyLookups'
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
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
        $this->container['itemComponents'] = isset($data['itemComponents']) ? $data['itemComponents'] : null;
        $this->container['currencyLookups'] = isset($data['currencyLookups']) ? $data['currencyLookups'] : null;
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
     * Gets vendor
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyVendorComponent|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyVendorComponent|null $vendor The base properties of the vendor.  COMPONENT TYPE: Vendors
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyVendorCategoriesComponent|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyVendorCategoriesComponent|null $categories Categories that the vendor has available, and references to the sales therein.  COMPONENT TYPE: VendorCategories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets sales
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent|null
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent|null $sales Sales, keyed by the vendorItemIndex of the item being sold.  COMPONENT TYPE: VendorSales
     *
     * @return $this
     */
    public function setSales($sales)
    {
        $this->container['sales'] = $sales;

        return $this;
    }

    /**
     * Gets itemComponents
     *
     * @return \Bungie\Model\DestinyItemComponentSetOfint32|null
     */
    public function getItemComponents()
    {
        return $this->container['itemComponents'];
    }

    /**
     * Sets itemComponents
     *
     * @param \Bungie\Model\DestinyItemComponentSetOfint32|null $itemComponents Item components, keyed by the vendorItemIndex of the active sale items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]
     *
     * @return $this
     */
    public function setItemComponents($itemComponents)
    {
        $this->container['itemComponents'] = $itemComponents;

        return $this;
    }

    /**
     * Gets currencyLookups
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyCurrenciesComponent|null
     */
    public function getCurrencyLookups()
    {
        return $this->container['currencyLookups'];
    }

    /**
     * Sets currencyLookups
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyCurrenciesComponent|null $currencyLookups A \"lookup\" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups
     *
     * @return $this
     */
    public function setCurrencyLookups($currencyLookups)
    {
        $this->container['currencyLookups'] = $currencyLookups;

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


