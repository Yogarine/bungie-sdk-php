<?php
/**
 * DestinyPublicVendorsResponse
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
 * OpenAPI spec version: 2.3.4
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
 * DestinyPublicVendorsResponse Class Doc Comment
 *
 * @category Class
 * @description A response containing all valid components for the public Vendors endpoint.   It is a decisively smaller subset of data compared to what we can get when we know the specific user making the request.   If you want any of the other data - item details, whether or not you can buy it, etc... you&#39;ll have to call in the context of a character. I know, sad but true.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPublicVendorsResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyPublicVendorsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorGroups' => '\Bungie\Model\SingleComponentResponseOfDestinyVendorGroupComponent',
        'vendors' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent',
        'categories' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent',
        'sales' => '\Bungie\Model\DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendorGroups' => null,
        'vendors' => null,
        'categories' => null,
        'sales' => null
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
        'vendorGroups' => 'vendorGroups',
        'vendors' => 'vendors',
        'categories' => 'categories',
        'sales' => 'sales'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorGroups' => 'setVendorGroups',
        'vendors' => 'setVendors',
        'categories' => 'setCategories',
        'sales' => 'setSales'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorGroups' => 'getVendorGroups',
        'vendors' => 'getVendors',
        'categories' => 'getCategories',
        'sales' => 'getSales'
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
        $this->container['vendorGroups'] = isset($data['vendorGroups']) ? $data['vendorGroups'] : null;
        $this->container['vendors'] = isset($data['vendors']) ? $data['vendors'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['sales'] = isset($data['sales']) ? $data['sales'] : null;
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
     * Gets vendorGroups
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyVendorGroupComponent|null
     */
    public function getVendorGroups()
    {
        return $this->container['vendorGroups'];
    }

    /**
     * Sets vendorGroups
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyVendorGroupComponent|null $vendorGroups For Vendors being returned, this will give you the information you need to group them and order them in the same way that the Bungie Companion app performs grouping. It will automatically be returned if you request the Vendors component.  COMPONENT TYPE: Vendors
     *
     * @return $this
     */
    public function setVendorGroups($vendorGroups)
    {
        $this->container['vendorGroups'] = $vendorGroups;

        return $this;
    }

    /**
     * Gets vendors
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent|null
     */
    public function getVendors()
    {
        return $this->container['vendors'];
    }

    /**
     * Sets vendors
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent|null $vendors The base properties of the vendor. These are keyed by the Vendor Hash, so you will get one Vendor Component per vendor returned.  COMPONENT TYPE: Vendors
     *
     * @return $this
     */
    public function setVendors($vendors)
    {
        $this->container['vendors'] = $vendors;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent|null $categories Categories that the vendor has available, and references to the sales therein. These are keyed by the Vendor Hash, so you will get one Categories Component per vendor returned.  COMPONENT TYPE: VendorCategories
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
     * @return \Bungie\Model\DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent|null
     */
    public function getSales()
    {
        return $this->container['sales'];
    }

    /**
     * Sets sales
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent|null $sales Sales, keyed by the vendorItemIndex of the item being sold. These are keyed by the Vendor Hash, so you will get one Sale Item Set Component per vendor returned.  Note that within the Sale Item Set component, the sales are themselves keyed by the vendorSaleIndex, so you can relate it to the corrent sale item definition within the Vendor's definition.  COMPONENT TYPE: VendorSales
     *
     * @return $this
     */
    public function setSales($sales)
    {
        $this->container['sales'] = $sales;

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

