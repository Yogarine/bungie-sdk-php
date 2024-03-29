<?php
/**
 * DestinyVendorActionDefinition
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
 * DestinyVendorActionDefinition Class Doc Comment
 *
 * @category Class
 * @description If a vendor can ever end up performing actions, these are the properties that will be related to those actions. I&#39;m not going to bother documenting this yet, as it is unused and unclear if it will ever be used... but in case it is ever populated and someone finds it useful, it is defined here.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorActionDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyVendorActionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'executeSeconds' => 'int',
        'icon' => 'string',
        'name' => 'string',
        'verb' => 'string',
        'isPositive' => 'bool',
        'actionId' => 'string',
        'actionHash' => 'int',
        'autoPerformAction' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'description' => null,
        'executeSeconds' => 'int32',
        'icon' => null,
        'name' => null,
        'verb' => null,
        'isPositive' => null,
        'actionId' => null,
        'actionHash' => 'uint32',
        'autoPerformAction' => null
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
        'description' => 'description',
        'executeSeconds' => 'executeSeconds',
        'icon' => 'icon',
        'name' => 'name',
        'verb' => 'verb',
        'isPositive' => 'isPositive',
        'actionId' => 'actionId',
        'actionHash' => 'actionHash',
        'autoPerformAction' => 'autoPerformAction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'executeSeconds' => 'setExecuteSeconds',
        'icon' => 'setIcon',
        'name' => 'setName',
        'verb' => 'setVerb',
        'isPositive' => 'setIsPositive',
        'actionId' => 'setActionId',
        'actionHash' => 'setActionHash',
        'autoPerformAction' => 'setAutoPerformAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'executeSeconds' => 'getExecuteSeconds',
        'icon' => 'getIcon',
        'name' => 'getName',
        'verb' => 'getVerb',
        'isPositive' => 'getIsPositive',
        'actionId' => 'getActionId',
        'actionHash' => 'getActionHash',
        'autoPerformAction' => 'getAutoPerformAction'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['executeSeconds'] = isset($data['executeSeconds']) ? $data['executeSeconds'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['verb'] = isset($data['verb']) ? $data['verb'] : null;
        $this->container['isPositive'] = isset($data['isPositive']) ? $data['isPositive'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['actionHash'] = isset($data['actionHash']) ? $data['actionHash'] : null;
        $this->container['autoPerformAction'] = isset($data['autoPerformAction']) ? $data['autoPerformAction'] : null;
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
     * Gets executeSeconds
     *
     * @return int|null
     */
    public function getExecuteSeconds()
    {
        return $this->container['executeSeconds'];
    }

    /**
     * Sets executeSeconds
     *
     * @param int|null $executeSeconds executeSeconds
     *
     * @return $this
     */
    public function setExecuteSeconds($executeSeconds)
    {
        $this->container['executeSeconds'] = $executeSeconds;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets verb
     *
     * @return string|null
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param string|null $verb verb
     *
     * @return $this
     */
    public function setVerb($verb)
    {
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets isPositive
     *
     * @return bool|null
     */
    public function getIsPositive()
    {
        return $this->container['isPositive'];
    }

    /**
     * Sets isPositive
     *
     * @param bool|null $isPositive isPositive
     *
     * @return $this
     */
    public function setIsPositive($isPositive)
    {
        $this->container['isPositive'] = $isPositive;

        return $this;
    }

    /**
     * Gets actionId
     *
     * @return string|null
     */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
     * Sets actionId
     *
     * @param string|null $actionId actionId
     *
     * @return $this
     */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;

        return $this;
    }

    /**
     * Gets actionHash
     *
     * @return int|null
     */
    public function getActionHash()
    {
        return $this->container['actionHash'];
    }

    /**
     * Sets actionHash
     *
     * @param int|null $actionHash actionHash
     *
     * @return $this
     */
    public function setActionHash($actionHash)
    {
        $this->container['actionHash'] = $actionHash;

        return $this;
    }

    /**
     * Gets autoPerformAction
     *
     * @return bool|null
     */
    public function getAutoPerformAction()
    {
        return $this->container['autoPerformAction'];
    }

    /**
     * Sets autoPerformAction
     *
     * @param bool|null $autoPerformAction autoPerformAction
     *
     * @return $this
     */
    public function setAutoPerformAction($autoPerformAction)
    {
        $this->container['autoPerformAction'] = $autoPerformAction;

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


