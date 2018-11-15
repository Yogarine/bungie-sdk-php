<?php
/**
 * DestinyDefinitionsDestinyVendorCategoryEntryDefinition
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
 * DestinyDefinitionsDestinyVendorCategoryEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description This is the definition for a single Vendor Category, into which Sale Items are grouped.
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinyDefinitionsDestinyVendorCategoryEntryDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Destiny.Definitions.DestinyVendorCategoryEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'categoryIndex' => 'int',
        'categoryId' => 'string',
        'sortValue' => 'int',
        'categoryHash' => 'int',
        'quantityAvailable' => 'int',
        'showUnavailableItems' => 'bool',
        'hideIfNoCurrency' => 'bool',
        'hideFromRegularPurchase' => 'bool',
        'buyStringOverride' => 'string',
        'disabledDescription' => 'string',
        'displayTitle' => 'string',
        'overlay' => 'object',
        'vendorItemIndexes' => 'int[]',
        'isPreview' => 'bool',
        'isDisplayOnly' => 'bool',
        'resetIntervalMinutesOverride' => 'int',
        'resetOffsetMinutesOverride' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'categoryIndex' => 'int32',
        'categoryId' => null,
        'sortValue' => 'int32',
        'categoryHash' => 'uint32',
        'quantityAvailable' => 'int32',
        'showUnavailableItems' => null,
        'hideIfNoCurrency' => null,
        'hideFromRegularPurchase' => null,
        'buyStringOverride' => null,
        'disabledDescription' => null,
        'displayTitle' => null,
        'overlay' => null,
        'vendorItemIndexes' => 'int32',
        'isPreview' => null,
        'isDisplayOnly' => null,
        'resetIntervalMinutesOverride' => 'int32',
        'resetOffsetMinutesOverride' => 'int32'
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
        'categoryIndex' => 'categoryIndex',
        'categoryId' => 'categoryId',
        'sortValue' => 'sortValue',
        'categoryHash' => 'categoryHash',
        'quantityAvailable' => 'quantityAvailable',
        'showUnavailableItems' => 'showUnavailableItems',
        'hideIfNoCurrency' => 'hideIfNoCurrency',
        'hideFromRegularPurchase' => 'hideFromRegularPurchase',
        'buyStringOverride' => 'buyStringOverride',
        'disabledDescription' => 'disabledDescription',
        'displayTitle' => 'displayTitle',
        'overlay' => 'overlay',
        'vendorItemIndexes' => 'vendorItemIndexes',
        'isPreview' => 'isPreview',
        'isDisplayOnly' => 'isDisplayOnly',
        'resetIntervalMinutesOverride' => 'resetIntervalMinutesOverride',
        'resetOffsetMinutesOverride' => 'resetOffsetMinutesOverride'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryIndex' => 'setCategoryIndex',
        'categoryId' => 'setCategoryId',
        'sortValue' => 'setSortValue',
        'categoryHash' => 'setCategoryHash',
        'quantityAvailable' => 'setQuantityAvailable',
        'showUnavailableItems' => 'setShowUnavailableItems',
        'hideIfNoCurrency' => 'setHideIfNoCurrency',
        'hideFromRegularPurchase' => 'setHideFromRegularPurchase',
        'buyStringOverride' => 'setBuyStringOverride',
        'disabledDescription' => 'setDisabledDescription',
        'displayTitle' => 'setDisplayTitle',
        'overlay' => 'setOverlay',
        'vendorItemIndexes' => 'setVendorItemIndexes',
        'isPreview' => 'setIsPreview',
        'isDisplayOnly' => 'setIsDisplayOnly',
        'resetIntervalMinutesOverride' => 'setResetIntervalMinutesOverride',
        'resetOffsetMinutesOverride' => 'setResetOffsetMinutesOverride'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryIndex' => 'getCategoryIndex',
        'categoryId' => 'getCategoryId',
        'sortValue' => 'getSortValue',
        'categoryHash' => 'getCategoryHash',
        'quantityAvailable' => 'getQuantityAvailable',
        'showUnavailableItems' => 'getShowUnavailableItems',
        'hideIfNoCurrency' => 'getHideIfNoCurrency',
        'hideFromRegularPurchase' => 'getHideFromRegularPurchase',
        'buyStringOverride' => 'getBuyStringOverride',
        'disabledDescription' => 'getDisabledDescription',
        'displayTitle' => 'getDisplayTitle',
        'overlay' => 'getOverlay',
        'vendorItemIndexes' => 'getVendorItemIndexes',
        'isPreview' => 'getIsPreview',
        'isDisplayOnly' => 'getIsDisplayOnly',
        'resetIntervalMinutesOverride' => 'getResetIntervalMinutesOverride',
        'resetOffsetMinutesOverride' => 'getResetOffsetMinutesOverride'
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
        $this->container['categoryIndex'] = isset($data['categoryIndex']) ? $data['categoryIndex'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['sortValue'] = isset($data['sortValue']) ? $data['sortValue'] : null;
        $this->container['categoryHash'] = isset($data['categoryHash']) ? $data['categoryHash'] : null;
        $this->container['quantityAvailable'] = isset($data['quantityAvailable']) ? $data['quantityAvailable'] : null;
        $this->container['showUnavailableItems'] = isset($data['showUnavailableItems']) ? $data['showUnavailableItems'] : null;
        $this->container['hideIfNoCurrency'] = isset($data['hideIfNoCurrency']) ? $data['hideIfNoCurrency'] : null;
        $this->container['hideFromRegularPurchase'] = isset($data['hideFromRegularPurchase']) ? $data['hideFromRegularPurchase'] : null;
        $this->container['buyStringOverride'] = isset($data['buyStringOverride']) ? $data['buyStringOverride'] : null;
        $this->container['disabledDescription'] = isset($data['disabledDescription']) ? $data['disabledDescription'] : null;
        $this->container['displayTitle'] = isset($data['displayTitle']) ? $data['displayTitle'] : null;
        $this->container['overlay'] = isset($data['overlay']) ? $data['overlay'] : null;
        $this->container['vendorItemIndexes'] = isset($data['vendorItemIndexes']) ? $data['vendorItemIndexes'] : null;
        $this->container['isPreview'] = isset($data['isPreview']) ? $data['isPreview'] : null;
        $this->container['isDisplayOnly'] = isset($data['isDisplayOnly']) ? $data['isDisplayOnly'] : null;
        $this->container['resetIntervalMinutesOverride'] = isset($data['resetIntervalMinutesOverride']) ? $data['resetIntervalMinutesOverride'] : null;
        $this->container['resetOffsetMinutesOverride'] = isset($data['resetOffsetMinutesOverride']) ? $data['resetOffsetMinutesOverride'] : null;
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
     * Gets categoryIndex
     *
     * @return int
     */
    public function getCategoryIndex()
    {
        return $this->container['categoryIndex'];
    }

    /**
     * Sets categoryIndex
     *
     * @param int $categoryIndex The index of the category in the original category definitions for the vendor.
     *
     * @return $this
     */
    public function setCategoryIndex($categoryIndex)
    {
        $this->container['categoryIndex'] = $categoryIndex;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string $categoryId The string identifier of the category.
     *
     * @return $this
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets sortValue
     *
     * @return int
     */
    public function getSortValue()
    {
        return $this->container['sortValue'];
    }

    /**
     * Sets sortValue
     *
     * @param int $sortValue Used in sorting items in vendors... but there's a lot more to it. Just go with the order provided in the itemIndexes property on the DestinyVendorCategoryComponent instead, it should be more reliable than trying to recalculate it yourself.
     *
     * @return $this
     */
    public function setSortValue($sortValue)
    {
        $this->container['sortValue'] = $sortValue;

        return $this;
    }

    /**
     * Gets categoryHash
     *
     * @return int
     */
    public function getCategoryHash()
    {
        return $this->container['categoryHash'];
    }

    /**
     * Sets categoryHash
     *
     * @param int $categoryHash The hashed identifier for the category.
     *
     * @return $this
     */
    public function setCategoryHash($categoryHash)
    {
        $this->container['categoryHash'] = $categoryHash;

        return $this;
    }

    /**
     * Gets quantityAvailable
     *
     * @return int
     */
    public function getQuantityAvailable()
    {
        return $this->container['quantityAvailable'];
    }

    /**
     * Sets quantityAvailable
     *
     * @param int $quantityAvailable The amount of items that will be available when this category is shown.
     *
     * @return $this
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->container['quantityAvailable'] = $quantityAvailable;

        return $this;
    }

    /**
     * Gets showUnavailableItems
     *
     * @return bool
     */
    public function getShowUnavailableItems()
    {
        return $this->container['showUnavailableItems'];
    }

    /**
     * Sets showUnavailableItems
     *
     * @param bool $showUnavailableItems If items aren't up for sale in this category, should we still show them (greyed out)?
     *
     * @return $this
     */
    public function setShowUnavailableItems($showUnavailableItems)
    {
        $this->container['showUnavailableItems'] = $showUnavailableItems;

        return $this;
    }

    /**
     * Gets hideIfNoCurrency
     *
     * @return bool
     */
    public function getHideIfNoCurrency()
    {
        return $this->container['hideIfNoCurrency'];
    }

    /**
     * Sets hideIfNoCurrency
     *
     * @param bool $hideIfNoCurrency If you don't have the currency required to buy items from this category, should the items be hidden?
     *
     * @return $this
     */
    public function setHideIfNoCurrency($hideIfNoCurrency)
    {
        $this->container['hideIfNoCurrency'] = $hideIfNoCurrency;

        return $this;
    }

    /**
     * Gets hideFromRegularPurchase
     *
     * @return bool
     */
    public function getHideFromRegularPurchase()
    {
        return $this->container['hideFromRegularPurchase'];
    }

    /**
     * Sets hideFromRegularPurchase
     *
     * @param bool $hideFromRegularPurchase True if this category doesn't allow purchases.
     *
     * @return $this
     */
    public function setHideFromRegularPurchase($hideFromRegularPurchase)
    {
        $this->container['hideFromRegularPurchase'] = $hideFromRegularPurchase;

        return $this;
    }

    /**
     * Gets buyStringOverride
     *
     * @return string
     */
    public function getBuyStringOverride()
    {
        return $this->container['buyStringOverride'];
    }

    /**
     * Sets buyStringOverride
     *
     * @param string $buyStringOverride The localized string for making purchases from this category, if it is different from the vendor's string for purchasing.
     *
     * @return $this
     */
    public function setBuyStringOverride($buyStringOverride)
    {
        $this->container['buyStringOverride'] = $buyStringOverride;

        return $this;
    }

    /**
     * Gets disabledDescription
     *
     * @return string
     */
    public function getDisabledDescription()
    {
        return $this->container['disabledDescription'];
    }

    /**
     * Sets disabledDescription
     *
     * @param string $disabledDescription If the category is disabled, this is the localized description to show.
     *
     * @return $this
     */
    public function setDisabledDescription($disabledDescription)
    {
        $this->container['disabledDescription'] = $disabledDescription;

        return $this;
    }

    /**
     * Gets displayTitle
     *
     * @return string
     */
    public function getDisplayTitle()
    {
        return $this->container['displayTitle'];
    }

    /**
     * Sets displayTitle
     *
     * @param string $displayTitle The localized title of the category.
     *
     * @return $this
     */
    public function setDisplayTitle($displayTitle)
    {
        $this->container['displayTitle'] = $displayTitle;

        return $this;
    }

    /**
     * Gets overlay
     *
     * @return object
     */
    public function getOverlay()
    {
        return $this->container['overlay'];
    }

    /**
     * Sets overlay
     *
     * @param object $overlay If this category has an overlay prompt that should appear, this contains the details of that prompt.
     *
     * @return $this
     */
    public function setOverlay($overlay)
    {
        $this->container['overlay'] = $overlay;

        return $this;
    }

    /**
     * Gets vendorItemIndexes
     *
     * @return int[]
     */
    public function getVendorItemIndexes()
    {
        return $this->container['vendorItemIndexes'];
    }

    /**
     * Sets vendorItemIndexes
     *
     * @param int[] $vendorItemIndexes A shortcut for the vendor item indexes sold under this category. Saves us from some expensive reorganization at runtime.
     *
     * @return $this
     */
    public function setVendorItemIndexes($vendorItemIndexes)
    {
        $this->container['vendorItemIndexes'] = $vendorItemIndexes;

        return $this;
    }

    /**
     * Gets isPreview
     *
     * @return bool
     */
    public function getIsPreview()
    {
        return $this->container['isPreview'];
    }

    /**
     * Sets isPreview
     *
     * @param bool $isPreview Sometimes a category isn't actually used to sell items, but rather to preview them. This implies different UI (and manual placement of the category in the UI) in the game, and special treatment.
     *
     * @return $this
     */
    public function setIsPreview($isPreview)
    {
        $this->container['isPreview'] = $isPreview;

        return $this;
    }

    /**
     * Gets isDisplayOnly
     *
     * @return bool
     */
    public function getIsDisplayOnly()
    {
        return $this->container['isDisplayOnly'];
    }

    /**
     * Sets isDisplayOnly
     *
     * @param bool $isDisplayOnly If true, this category only displays items: you can't purchase anything in them.
     *
     * @return $this
     */
    public function setIsDisplayOnly($isDisplayOnly)
    {
        $this->container['isDisplayOnly'] = $isDisplayOnly;

        return $this;
    }

    /**
     * Gets resetIntervalMinutesOverride
     *
     * @return int
     */
    public function getResetIntervalMinutesOverride()
    {
        return $this->container['resetIntervalMinutesOverride'];
    }

    /**
     * Sets resetIntervalMinutesOverride
     *
     * @param int $resetIntervalMinutesOverride resetIntervalMinutesOverride
     *
     * @return $this
     */
    public function setResetIntervalMinutesOverride($resetIntervalMinutesOverride)
    {
        $this->container['resetIntervalMinutesOverride'] = $resetIntervalMinutesOverride;

        return $this;
    }

    /**
     * Gets resetOffsetMinutesOverride
     *
     * @return int
     */
    public function getResetOffsetMinutesOverride()
    {
        return $this->container['resetOffsetMinutesOverride'];
    }

    /**
     * Sets resetOffsetMinutesOverride
     *
     * @param int $resetOffsetMinutesOverride resetOffsetMinutesOverride
     *
     * @return $this
     */
    public function setResetOffsetMinutesOverride($resetOffsetMinutesOverride)
    {
        $this->container['resetOffsetMinutesOverride'] = $resetOffsetMinutesOverride;

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


