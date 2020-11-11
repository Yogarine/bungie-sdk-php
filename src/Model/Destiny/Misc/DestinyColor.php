<?php
/**
 * DestinyColor
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

namespace Bungie\Model\Destiny\Misc;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyColor Class Doc Comment
 *
 * @category Class
 * @description Represents a color whose RGBA values are all represented as values between 0 and 255.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyColor implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Misc.DestinyColor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'red' => 'string',
        'green' => 'string',
        'blue' => 'string',
        'alpha' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'red' => 'byte',
        'green' => 'byte',
        'blue' => 'byte',
        'alpha' => 'byte'
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
        'red' => 'red',
        'green' => 'green',
        'blue' => 'blue',
        'alpha' => 'alpha'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'red' => 'setRed',
        'green' => 'setGreen',
        'blue' => 'setBlue',
        'alpha' => 'setAlpha'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'red' => 'getRed',
        'green' => 'getGreen',
        'blue' => 'getBlue',
        'alpha' => 'getAlpha'
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
        $this->container['red'] = isset($data['red']) ? $data['red'] : null;
        $this->container['green'] = isset($data['green']) ? $data['green'] : null;
        $this->container['blue'] = isset($data['blue']) ? $data['blue'] : null;
        $this->container['alpha'] = isset($data['alpha']) ? $data['alpha'] : null;
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
     * Gets red
     *
     * @return string|null
     */
    public function getRed()
    {
        return $this->container['red'];
    }

    /**
     * Sets red
     *
     * @param string|null $red red
     *
     * @return $this
     */
    public function setRed($red)
    {
        $this->container['red'] = $red;

        return $this;
    }

    /**
     * Gets green
     *
     * @return string|null
     */
    public function getGreen()
    {
        return $this->container['green'];
    }

    /**
     * Sets green
     *
     * @param string|null $green green
     *
     * @return $this
     */
    public function setGreen($green)
    {
        $this->container['green'] = $green;

        return $this;
    }

    /**
     * Gets blue
     *
     * @return string|null
     */
    public function getBlue()
    {
        return $this->container['blue'];
    }

    /**
     * Sets blue
     *
     * @param string|null $blue blue
     *
     * @return $this
     */
    public function setBlue($blue)
    {
        $this->container['blue'] = $blue;

        return $this;
    }

    /**
     * Gets alpha
     *
     * @return string|null
     */
    public function getAlpha()
    {
        return $this->container['alpha'];
    }

    /**
     * Sets alpha
     *
     * @param string|null $alpha alpha
     *
     * @return $this
     */
    public function setAlpha($alpha)
    {
        $this->container['alpha'] = $alpha;

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


