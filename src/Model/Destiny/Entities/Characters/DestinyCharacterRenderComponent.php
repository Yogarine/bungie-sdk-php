<?php
/**
 * DestinyCharacterRenderComponent
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Entities\Characters;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyCharacterRenderComponent Class Doc Comment
 *
 * @category Class
 * @description Only really useful if you&#39;re attempting to render the character&#39;s current appearance in 3D, this returns a bare minimum of information, pre-aggregated, that you&#39;ll need to perform that rendering. Note that you need to combine this with other 3D assets and data from our servers.  Examine the Javascript returned by https://bungie.net/sharedbundle/spasm to see how we use this data, but be warned: the rabbit hole goes pretty deep.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterRenderComponent implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Characters.DestinyCharacterRenderComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customDyes' => '\Bungie\Model\\Bungie\Model\Destiny\DyeReference[]',
        'customization' => '\Bungie\Model\Destiny\Character\DestinyCharacterCustomization',
        'peerView' => '\Bungie\Model\Destiny\Character\DestinyCharacterPeerView'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customDyes' => null,
        'customization' => null,
        'peerView' => null
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
        'customDyes' => 'customDyes',
        'customization' => 'customization',
        'peerView' => 'peerView'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customDyes' => 'setCustomDyes',
        'customization' => 'setCustomization',
        'peerView' => 'setPeerView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customDyes' => 'getCustomDyes',
        'customization' => 'getCustomization',
        'peerView' => 'getPeerView'
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
        $this->container['customDyes'] = isset($data['customDyes']) ? $data['customDyes'] : null;
        $this->container['customization'] = isset($data['customization']) ? $data['customization'] : null;
        $this->container['peerView'] = isset($data['peerView']) ? $data['peerView'] : null;
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
     * Gets customDyes
     *
     * @return \Bungie\Model\\Bungie\Model\Destiny\DyeReference[]|null
     */
    public function getCustomDyes()
    {
        return $this->container['customDyes'];
    }

    /**
     * Sets customDyes
     *
     * @param \Bungie\Model\\Bungie\Model\Destiny\DyeReference[]|null $customDyes Custom dyes, calculated by iterating over the character's equipped items. Useful for pre-fetching all of the dye data needed from our server.
     *
     * @return $this
     */
    public function setCustomDyes($customDyes)
    {
        $this->container['customDyes'] = $customDyes;

        return $this;
    }

    /**
     * Gets customization
     *
     * @return \Bungie\Model\Destiny\Character\DestinyCharacterCustomization|null
     */
    public function getCustomization()
    {
        return $this->container['customization'];
    }

    /**
     * Sets customization
     *
     * @param \Bungie\Model\Destiny\Character\DestinyCharacterCustomization|null $customization This is actually something that Spasm.js *doesn't* do right now, and that we don't return assets for yet. This is the data about what character customization options you picked. You can combine this with DestinyCharacterCustomizationOptionDefinition to show some cool info, and hopefully someday to actually render a user's face in 3D. We'll see if we ever end up with time for that.
     *
     * @return $this
     */
    public function setCustomization($customization)
    {
        $this->container['customization'] = $customization;

        return $this;
    }

    /**
     * Gets peerView
     *
     * @return \Bungie\Model\Destiny\Character\DestinyCharacterPeerView|null
     */
    public function getPeerView()
    {
        return $this->container['peerView'];
    }

    /**
     * Sets peerView
     *
     * @param \Bungie\Model\Destiny\Character\DestinyCharacterPeerView|null $peerView A minimal view of:  - Equipped items  - The rendering-related custom options on those equipped items  Combined, that should be enough to render all of the items on the equipped character.
     *
     * @return $this
     */
    public function setPeerView($peerView)
    {
        $this->container['peerView'] = $peerView;

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

