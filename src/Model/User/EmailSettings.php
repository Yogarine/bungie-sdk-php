<?php
/**
 * EmailSettings
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

namespace Bungie\Model\User;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * EmailSettings Class Doc Comment
 *
 * @category Class
 * @description The set of all email subscription/opt-in settings and definitions.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmailSettings implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.EmailSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'optInDefinitions' => 'map[string,\Bungie\Model\User\EmailOptInDefinition]',
        'subscriptionDefinitions' => 'map[string,\Bungie\Model\User\EmailSubscriptionDefinition]',
        'views' => 'map[string,\Bungie\Model\User\EmailViewDefinition]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'optInDefinitions' => null,
        'subscriptionDefinitions' => null,
        'views' => null
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
        'optInDefinitions' => 'optInDefinitions',
        'subscriptionDefinitions' => 'subscriptionDefinitions',
        'views' => 'views'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'optInDefinitions' => 'setOptInDefinitions',
        'subscriptionDefinitions' => 'setSubscriptionDefinitions',
        'views' => 'setViews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'optInDefinitions' => 'getOptInDefinitions',
        'subscriptionDefinitions' => 'getSubscriptionDefinitions',
        'views' => 'getViews'
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
        $this->container['optInDefinitions'] = isset($data['optInDefinitions']) ? $data['optInDefinitions'] : null;
        $this->container['subscriptionDefinitions'] = isset($data['subscriptionDefinitions']) ? $data['subscriptionDefinitions'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
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
     * Gets optInDefinitions
     *
     * @return map[string,\Bungie\Model\User\EmailOptInDefinition]|null
     */
    public function getOptInDefinitions()
    {
        return $this->container['optInDefinitions'];
    }

    /**
     * Sets optInDefinitions
     *
     * @param map[string,\Bungie\Model\User\EmailOptInDefinition]|null $optInDefinitions Keyed by the name identifier of the opt-in definition.
     *
     * @return $this
     */
    public function setOptInDefinitions($optInDefinitions)
    {
        $this->container['optInDefinitions'] = $optInDefinitions;

        return $this;
    }

    /**
     * Gets subscriptionDefinitions
     *
     * @return map[string,\Bungie\Model\User\EmailSubscriptionDefinition]|null
     */
    public function getSubscriptionDefinitions()
    {
        return $this->container['subscriptionDefinitions'];
    }

    /**
     * Sets subscriptionDefinitions
     *
     * @param map[string,\Bungie\Model\User\EmailSubscriptionDefinition]|null $subscriptionDefinitions Keyed by the name identifier of the Subscription definition.
     *
     * @return $this
     */
    public function setSubscriptionDefinitions($subscriptionDefinitions)
    {
        $this->container['subscriptionDefinitions'] = $subscriptionDefinitions;

        return $this;
    }

    /**
     * Gets views
     *
     * @return map[string,\Bungie\Model\User\EmailViewDefinition]|null
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param map[string,\Bungie\Model\User\EmailViewDefinition]|null $views Keyed by the name identifier of the View definition.
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

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


