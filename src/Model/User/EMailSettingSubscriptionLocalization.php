<?php
/**
 * EMailSettingSubscriptionLocalization
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

namespace Bungie\Model\User;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * EMailSettingSubscriptionLocalization Class Doc Comment
 *
 * @category Class
 * @description Localized text relevant to a given EMail setting in a given localization. Extra settings specifically for subscriptions.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EMailSettingSubscriptionLocalization implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User.EMailSettingSubscriptionLocalization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unknownUserDescription' => 'string',
        'registeredUserDescription' => 'string',
        'unregisteredUserDescription' => 'string',
        'unknownUserActionText' => 'string',
        'knownUserActionText' => 'string',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'unknownUserDescription' => null,
        'registeredUserDescription' => null,
        'unregisteredUserDescription' => null,
        'unknownUserActionText' => null,
        'knownUserActionText' => null,
        'title' => null,
        'description' => null
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
        'unknownUserDescription' => 'unknownUserDescription',
        'registeredUserDescription' => 'registeredUserDescription',
        'unregisteredUserDescription' => 'unregisteredUserDescription',
        'unknownUserActionText' => 'unknownUserActionText',
        'knownUserActionText' => 'knownUserActionText',
        'title' => 'title',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unknownUserDescription' => 'setUnknownUserDescription',
        'registeredUserDescription' => 'setRegisteredUserDescription',
        'unregisteredUserDescription' => 'setUnregisteredUserDescription',
        'unknownUserActionText' => 'setUnknownUserActionText',
        'knownUserActionText' => 'setKnownUserActionText',
        'title' => 'setTitle',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unknownUserDescription' => 'getUnknownUserDescription',
        'registeredUserDescription' => 'getRegisteredUserDescription',
        'unregisteredUserDescription' => 'getUnregisteredUserDescription',
        'unknownUserActionText' => 'getUnknownUserActionText',
        'knownUserActionText' => 'getKnownUserActionText',
        'title' => 'getTitle',
        'description' => 'getDescription'
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
        $this->container['unknownUserDescription'] = isset($data['unknownUserDescription']) ? $data['unknownUserDescription'] : null;
        $this->container['registeredUserDescription'] = isset($data['registeredUserDescription']) ? $data['registeredUserDescription'] : null;
        $this->container['unregisteredUserDescription'] = isset($data['unregisteredUserDescription']) ? $data['unregisteredUserDescription'] : null;
        $this->container['unknownUserActionText'] = isset($data['unknownUserActionText']) ? $data['unknownUserActionText'] : null;
        $this->container['knownUserActionText'] = isset($data['knownUserActionText']) ? $data['knownUserActionText'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets unknownUserDescription
     *
     * @return string|null
     */
    public function getUnknownUserDescription()
    {
        return $this->container['unknownUserDescription'];
    }

    /**
     * Sets unknownUserDescription
     *
     * @param string|null $unknownUserDescription unknownUserDescription
     *
     * @return $this
     */
    public function setUnknownUserDescription($unknownUserDescription)
    {
        $this->container['unknownUserDescription'] = $unknownUserDescription;

        return $this;
    }

    /**
     * Gets registeredUserDescription
     *
     * @return string|null
     */
    public function getRegisteredUserDescription()
    {
        return $this->container['registeredUserDescription'];
    }

    /**
     * Sets registeredUserDescription
     *
     * @param string|null $registeredUserDescription registeredUserDescription
     *
     * @return $this
     */
    public function setRegisteredUserDescription($registeredUserDescription)
    {
        $this->container['registeredUserDescription'] = $registeredUserDescription;

        return $this;
    }

    /**
     * Gets unregisteredUserDescription
     *
     * @return string|null
     */
    public function getUnregisteredUserDescription()
    {
        return $this->container['unregisteredUserDescription'];
    }

    /**
     * Sets unregisteredUserDescription
     *
     * @param string|null $unregisteredUserDescription unregisteredUserDescription
     *
     * @return $this
     */
    public function setUnregisteredUserDescription($unregisteredUserDescription)
    {
        $this->container['unregisteredUserDescription'] = $unregisteredUserDescription;

        return $this;
    }

    /**
     * Gets unknownUserActionText
     *
     * @return string|null
     */
    public function getUnknownUserActionText()
    {
        return $this->container['unknownUserActionText'];
    }

    /**
     * Sets unknownUserActionText
     *
     * @param string|null $unknownUserActionText unknownUserActionText
     *
     * @return $this
     */
    public function setUnknownUserActionText($unknownUserActionText)
    {
        $this->container['unknownUserActionText'] = $unknownUserActionText;

        return $this;
    }

    /**
     * Gets knownUserActionText
     *
     * @return string|null
     */
    public function getKnownUserActionText()
    {
        return $this->container['knownUserActionText'];
    }

    /**
     * Sets knownUserActionText
     *
     * @param string|null $knownUserActionText knownUserActionText
     *
     * @return $this
     */
    public function setKnownUserActionText($knownUserActionText)
    {
        $this->container['knownUserActionText'] = $knownUserActionText;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


