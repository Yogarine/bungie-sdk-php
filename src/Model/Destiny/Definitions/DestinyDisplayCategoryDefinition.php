<?php
/**
 * DestinyDisplayCategoryDefinition
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
 * OpenAPI spec version: 2.4.0
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
 * DestinyDisplayCategoryDefinition Class Doc Comment
 *
 * @category Class
 * @description Display Categories are different from \&quot;categories\&quot; in that these are specifically for visual grouping and display of categories in Vendor UI. The \&quot;categories\&quot; structure is for validation of the contained items, and can be categorized entirely separately from \&quot;Display Categories\&quot;, there need be and often will be no meaningful relationship between the two.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDisplayCategoryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyDisplayCategoryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'identifier' => 'string',
        'displayCategoryHash' => 'int',
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'displayInBanner' => 'bool',
        'progressionHash' => 'int',
        'sortOrder' => 'int',
        'displayStyleHash' => 'int',
        'displayStyleIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'index' => 'int32',
        'identifier' => null,
        'displayCategoryHash' => 'uint32',
        'displayProperties' => null,
        'displayInBanner' => null,
        'progressionHash' => 'uint32',
        'sortOrder' => 'int32',
        'displayStyleHash' => 'uint32',
        'displayStyleIdentifier' => null
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
        'index' => 'index',
        'identifier' => 'identifier',
        'displayCategoryHash' => 'displayCategoryHash',
        'displayProperties' => 'displayProperties',
        'displayInBanner' => 'displayInBanner',
        'progressionHash' => 'progressionHash',
        'sortOrder' => 'sortOrder',
        'displayStyleHash' => 'displayStyleHash',
        'displayStyleIdentifier' => 'displayStyleIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'identifier' => 'setIdentifier',
        'displayCategoryHash' => 'setDisplayCategoryHash',
        'displayProperties' => 'setDisplayProperties',
        'displayInBanner' => 'setDisplayInBanner',
        'progressionHash' => 'setProgressionHash',
        'sortOrder' => 'setSortOrder',
        'displayStyleHash' => 'setDisplayStyleHash',
        'displayStyleIdentifier' => 'setDisplayStyleIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'identifier' => 'getIdentifier',
        'displayCategoryHash' => 'getDisplayCategoryHash',
        'displayProperties' => 'getDisplayProperties',
        'displayInBanner' => 'getDisplayInBanner',
        'progressionHash' => 'getProgressionHash',
        'sortOrder' => 'getSortOrder',
        'displayStyleHash' => 'getDisplayStyleHash',
        'displayStyleIdentifier' => 'getDisplayStyleIdentifier'
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
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['displayCategoryHash'] = isset($data['displayCategoryHash']) ? $data['displayCategoryHash'] : null;
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['displayInBanner'] = isset($data['displayInBanner']) ? $data['displayInBanner'] : null;
        $this->container['progressionHash'] = isset($data['progressionHash']) ? $data['progressionHash'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['displayStyleHash'] = isset($data['displayStyleHash']) ? $data['displayStyleHash'] : null;
        $this->container['displayStyleIdentifier'] = isset($data['displayStyleIdentifier']) ? $data['displayStyleIdentifier'] : null;
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
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier A string identifier for the display category.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets displayCategoryHash
     *
     * @return int|null
     */
    public function getDisplayCategoryHash()
    {
        return $this->container['displayCategoryHash'];
    }

    /**
     * Sets displayCategoryHash
     *
     * @param int|null $displayCategoryHash displayCategoryHash
     *
     * @return $this
     */
    public function setDisplayCategoryHash($displayCategoryHash)
    {
        $this->container['displayCategoryHash'] = $displayCategoryHash;

        return $this;
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
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets displayInBanner
     *
     * @return bool|null
     */
    public function getDisplayInBanner()
    {
        return $this->container['displayInBanner'];
    }

    /**
     * Sets displayInBanner
     *
     * @param bool|null $displayInBanner If true, this category should be displayed in the \"Banner\" section of the vendor's UI.
     *
     * @return $this
     */
    public function setDisplayInBanner($displayInBanner)
    {
        $this->container['displayInBanner'] = $displayInBanner;

        return $this;
    }

    /**
     * Gets progressionHash
     *
     * @return int|null
     */
    public function getProgressionHash()
    {
        return $this->container['progressionHash'];
    }

    /**
     * Sets progressionHash
     *
     * @param int|null $progressionHash If it exists, this is the hash identifier of a DestinyProgressionDefinition that represents the progression to show on this display category.  Specific categories can now have thier own distinct progression, apparently. So that's cool.
     *
     * @return $this
     */
    public function setProgressionHash($progressionHash)
    {
        $this->container['progressionHash'] = $progressionHash;

        return $this;
    }

    /**
     * Gets sortOrder
     *
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
     * Sets sortOrder
     *
     * @param int|null $sortOrder If this category sorts items in a nonstandard way, this will be the way we sort.
     *
     * @return $this
     */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;

        return $this;
    }

    /**
     * Gets displayStyleHash
     *
     * @return int|null
     */
    public function getDisplayStyleHash()
    {
        return $this->container['displayStyleHash'];
    }

    /**
     * Sets displayStyleHash
     *
     * @param int|null $displayStyleHash An indicator of how the category will be displayed in the UI. It's up to you to do something cool or interesting in response to this, or just to treat it as a normal category.
     *
     * @return $this
     */
    public function setDisplayStyleHash($displayStyleHash)
    {
        $this->container['displayStyleHash'] = $displayStyleHash;

        return $this;
    }

    /**
     * Gets displayStyleIdentifier
     *
     * @return string|null
     */
    public function getDisplayStyleIdentifier()
    {
        return $this->container['displayStyleIdentifier'];
    }

    /**
     * Sets displayStyleIdentifier
     *
     * @param string|null $displayStyleIdentifier An indicator of how the category will be displayed in the UI. It's up to you to do something cool or interesting in response to this, or just to treat it as a normal category.
     *
     * @return $this
     */
    public function setDisplayStyleIdentifier($displayStyleIdentifier)
    {
        $this->container['displayStyleIdentifier'] = $displayStyleIdentifier;

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


