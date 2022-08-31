<?php
/**
 * DestinyPerkReference
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Perks;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyPerkReference Class Doc Comment
 *
 * @category Class
 * @description The list of perks to display in an item tooltip - and whether or not they have been activated.  Perks apply a variety of effects to a character, and are generally either intrinsic to the item or provided in activated talent nodes or sockets.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPerkReference implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Perks.DestinyPerkReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'perkHash' => 'int',
        'iconPath' => 'string',
        'isActive' => 'bool',
        'visible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'perkHash' => 'uint32',
        'iconPath' => null,
        'isActive' => null,
        'visible' => null
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
        'perkHash' => 'perkHash',
        'iconPath' => 'iconPath',
        'isActive' => 'isActive',
        'visible' => 'visible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'perkHash' => 'setPerkHash',
        'iconPath' => 'setIconPath',
        'isActive' => 'setIsActive',
        'visible' => 'setVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'perkHash' => 'getPerkHash',
        'iconPath' => 'getIconPath',
        'isActive' => 'getIsActive',
        'visible' => 'getVisible'
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
        $this->container['perkHash'] = isset($data['perkHash']) ? $data['perkHash'] : null;
        $this->container['iconPath'] = isset($data['iconPath']) ? $data['iconPath'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
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
     * Gets perkHash
     *
     * @return int|null
     */
    public function getPerkHash()
    {
        return $this->container['perkHash'];
    }

    /**
     * Sets perkHash
     *
     * @param int|null $perkHash The hash identifier for the perk, which can be used to look up DestinySandboxPerkDefinition if it exists. Be warned, perks frequently do not have user-viewable information. You should examine whether you actually found a name/description in the perk's definition before you show it to the user.
     *
     * @return $this
     */
    public function setPerkHash($perkHash)
    {
        $this->container['perkHash'] = $perkHash;

        return $this;
    }

    /**
     * Gets iconPath
     *
     * @return string|null
     */
    public function getIconPath()
    {
        return $this->container['iconPath'];
    }

    /**
     * Sets iconPath
     *
     * @param string|null $iconPath The icon for the perk.
     *
     * @return $this
     */
    public function setIconPath($iconPath)
    {
        $this->container['iconPath'] = $iconPath;

        return $this;
    }

    /**
     * Gets isActive
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool|null $isActive Whether this perk is currently active. (We may return perks that you have not actually activated yet: these represent perks that you should show in the item's tooltip, but that the user has not yet activated.)
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible Some perks provide benefits, but aren't visible in the UI. This value will let you know if this is perk should be shown in your UI.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


