<?php
/**
 * DestinyCharacterRecordsComponent
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
 * OpenAPI spec version: 2.8.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Components\Records;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyCharacterRecordsComponent Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterRecordsComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Components.Records.DestinyCharacterRecordsComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'featuredRecordHashes' => 'int[]',
        'records' => 'map[string,\Bungie\Model\Destiny\Components\Records\DestinyRecordComponent]',
        'recordCategoriesRootNodeHash' => 'int',
        'recordSealsRootNodeHash' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'featuredRecordHashes' => 'uint32',
        'records' => null,
        'recordCategoriesRootNodeHash' => 'uint32',
        'recordSealsRootNodeHash' => 'uint32'
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
        'featuredRecordHashes' => 'featuredRecordHashes',
        'records' => 'records',
        'recordCategoriesRootNodeHash' => 'recordCategoriesRootNodeHash',
        'recordSealsRootNodeHash' => 'recordSealsRootNodeHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'featuredRecordHashes' => 'setFeaturedRecordHashes',
        'records' => 'setRecords',
        'recordCategoriesRootNodeHash' => 'setRecordCategoriesRootNodeHash',
        'recordSealsRootNodeHash' => 'setRecordSealsRootNodeHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'featuredRecordHashes' => 'getFeaturedRecordHashes',
        'records' => 'getRecords',
        'recordCategoriesRootNodeHash' => 'getRecordCategoriesRootNodeHash',
        'recordSealsRootNodeHash' => 'getRecordSealsRootNodeHash'
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
        $this->container['featuredRecordHashes'] = isset($data['featuredRecordHashes']) ? $data['featuredRecordHashes'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['recordCategoriesRootNodeHash'] = isset($data['recordCategoriesRootNodeHash']) ? $data['recordCategoriesRootNodeHash'] : null;
        $this->container['recordSealsRootNodeHash'] = isset($data['recordSealsRootNodeHash']) ? $data['recordSealsRootNodeHash'] : null;
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
     * Gets featuredRecordHashes
     *
     * @return int[]|null
     */
    public function getFeaturedRecordHashes()
    {
        return $this->container['featuredRecordHashes'];
    }

    /**
     * Sets featuredRecordHashes
     *
     * @param int[]|null $featuredRecordHashes featuredRecordHashes
     *
     * @return $this
     */
    public function setFeaturedRecordHashes($featuredRecordHashes)
    {
        $this->container['featuredRecordHashes'] = $featuredRecordHashes;

        return $this;
    }

    /**
     * Gets records
     *
     * @return map[string,\Bungie\Model\Destiny\Components\Records\DestinyRecordComponent]|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param map[string,\Bungie\Model\Destiny\Components\Records\DestinyRecordComponent]|null $records records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets recordCategoriesRootNodeHash
     *
     * @return int|null
     */
    public function getRecordCategoriesRootNodeHash()
    {
        return $this->container['recordCategoriesRootNodeHash'];
    }

    /**
     * Sets recordCategoriesRootNodeHash
     *
     * @param int|null $recordCategoriesRootNodeHash The hash for the root presentation node definition of Triumph categories.
     *
     * @return $this
     */
    public function setRecordCategoriesRootNodeHash($recordCategoriesRootNodeHash)
    {
        $this->container['recordCategoriesRootNodeHash'] = $recordCategoriesRootNodeHash;

        return $this;
    }

    /**
     * Gets recordSealsRootNodeHash
     *
     * @return int|null
     */
    public function getRecordSealsRootNodeHash()
    {
        return $this->container['recordSealsRootNodeHash'];
    }

    /**
     * Sets recordSealsRootNodeHash
     *
     * @param int|null $recordSealsRootNodeHash The hash for the root presentation node definition of Triumph Seals.
     *
     * @return $this
     */
    public function setRecordSealsRootNodeHash($recordSealsRootNodeHash)
    {
        $this->container['recordSealsRootNodeHash'] = $recordSealsRootNodeHash;

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


