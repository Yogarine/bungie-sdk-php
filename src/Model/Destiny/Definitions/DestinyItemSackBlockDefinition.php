<?php
/**
 * DestinyItemSackBlockDefinition
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
 * DestinyItemSackBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Some items are \&quot;sacks\&quot; - they can be \&quot;opened\&quot; to produce other items. This is information related to its sack status, mostly UI strings. Engrams are an example of items that are considered to be \&quot;Sacks\&quot;.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSackBlockDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSackBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'detailAction' => 'string',
        'openAction' => 'string',
        'selectItemCount' => 'int',
        'vendorSackType' => 'string',
        'openOnAcquire' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'detailAction' => null,
        'openAction' => null,
        'selectItemCount' => 'int32',
        'vendorSackType' => null,
        'openOnAcquire' => null
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
        'detailAction' => 'detailAction',
        'openAction' => 'openAction',
        'selectItemCount' => 'selectItemCount',
        'vendorSackType' => 'vendorSackType',
        'openOnAcquire' => 'openOnAcquire'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detailAction' => 'setDetailAction',
        'openAction' => 'setOpenAction',
        'selectItemCount' => 'setSelectItemCount',
        'vendorSackType' => 'setVendorSackType',
        'openOnAcquire' => 'setOpenOnAcquire'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detailAction' => 'getDetailAction',
        'openAction' => 'getOpenAction',
        'selectItemCount' => 'getSelectItemCount',
        'vendorSackType' => 'getVendorSackType',
        'openOnAcquire' => 'getOpenOnAcquire'
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
        $this->container['detailAction'] = isset($data['detailAction']) ? $data['detailAction'] : null;
        $this->container['openAction'] = isset($data['openAction']) ? $data['openAction'] : null;
        $this->container['selectItemCount'] = isset($data['selectItemCount']) ? $data['selectItemCount'] : null;
        $this->container['vendorSackType'] = isset($data['vendorSackType']) ? $data['vendorSackType'] : null;
        $this->container['openOnAcquire'] = isset($data['openOnAcquire']) ? $data['openOnAcquire'] : null;
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
     * Gets detailAction
     *
     * @return string|null
     */
    public function getDetailAction()
    {
        return $this->container['detailAction'];
    }

    /**
     * Sets detailAction
     *
     * @param string|null $detailAction A description of what will happen when you open the sack. As far as I can tell, this is blank currently. Unknown whether it will eventually be populated with useful info.
     *
     * @return $this
     */
    public function setDetailAction($detailAction)
    {
        $this->container['detailAction'] = $detailAction;

        return $this;
    }

    /**
     * Gets openAction
     *
     * @return string|null
     */
    public function getOpenAction()
    {
        return $this->container['openAction'];
    }

    /**
     * Sets openAction
     *
     * @param string|null $openAction The localized name of the action being performed when you open the sack.
     *
     * @return $this
     */
    public function setOpenAction($openAction)
    {
        $this->container['openAction'] = $openAction;

        return $this;
    }

    /**
     * Gets selectItemCount
     *
     * @return int|null
     */
    public function getSelectItemCount()
    {
        return $this->container['selectItemCount'];
    }

    /**
     * Sets selectItemCount
     *
     * @param int|null $selectItemCount selectItemCount
     *
     * @return $this
     */
    public function setSelectItemCount($selectItemCount)
    {
        $this->container['selectItemCount'] = $selectItemCount;

        return $this;
    }

    /**
     * Gets vendorSackType
     *
     * @return string|null
     */
    public function getVendorSackType()
    {
        return $this->container['vendorSackType'];
    }

    /**
     * Sets vendorSackType
     *
     * @param string|null $vendorSackType vendorSackType
     *
     * @return $this
     */
    public function setVendorSackType($vendorSackType)
    {
        $this->container['vendorSackType'] = $vendorSackType;

        return $this;
    }

    /**
     * Gets openOnAcquire
     *
     * @return bool|null
     */
    public function getOpenOnAcquire()
    {
        return $this->container['openOnAcquire'];
    }

    /**
     * Sets openOnAcquire
     *
     * @param bool|null $openOnAcquire openOnAcquire
     *
     * @return $this
     */
    public function setOpenOnAcquire($openOnAcquire)
    {
        $this->container['openOnAcquire'] = $openOnAcquire;

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


