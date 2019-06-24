<?php
/**
 * DestinyCharacterCustomization
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
 * OpenAPI spec version: 2.3.5
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Character;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyCharacterCustomization Class Doc Comment
 *
 * @category Class
 * @description Raw data about the customization options chosen for a character&#39;s face and appearance.  You can look up the relevant class/race/gender combo in DestinyCharacterCustomizationOptionDefinition for the character, and then look up these values within the CustomizationOptions found to pull some data about their choices. Warning: not all of that data is meaningful. Some data has useful icons. Others have nothing, and are only meant for 3D rendering purposes (which we sadly do not expose yet)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterCustomization implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Character.DestinyCharacterCustomization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'personality' => 'int',
        'face' => 'int',
        'skinColor' => 'int',
        'lipColor' => 'int',
        'eyeColor' => 'int',
        'hairColors' => 'int[]',
        'featureColors' => 'int[]',
        'decalColor' => 'int',
        'wearHelmet' => 'bool',
        'hairIndex' => 'int',
        'featureIndex' => 'int',
        'decalIndex' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'personality' => 'uint32',
        'face' => 'uint32',
        'skinColor' => 'uint32',
        'lipColor' => 'uint32',
        'eyeColor' => 'uint32',
        'hairColors' => 'uint32',
        'featureColors' => 'uint32',
        'decalColor' => 'uint32',
        'wearHelmet' => null,
        'hairIndex' => 'int32',
        'featureIndex' => 'int32',
        'decalIndex' => 'int32'
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
        'personality' => 'personality',
        'face' => 'face',
        'skinColor' => 'skinColor',
        'lipColor' => 'lipColor',
        'eyeColor' => 'eyeColor',
        'hairColors' => 'hairColors',
        'featureColors' => 'featureColors',
        'decalColor' => 'decalColor',
        'wearHelmet' => 'wearHelmet',
        'hairIndex' => 'hairIndex',
        'featureIndex' => 'featureIndex',
        'decalIndex' => 'decalIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'personality' => 'setPersonality',
        'face' => 'setFace',
        'skinColor' => 'setSkinColor',
        'lipColor' => 'setLipColor',
        'eyeColor' => 'setEyeColor',
        'hairColors' => 'setHairColors',
        'featureColors' => 'setFeatureColors',
        'decalColor' => 'setDecalColor',
        'wearHelmet' => 'setWearHelmet',
        'hairIndex' => 'setHairIndex',
        'featureIndex' => 'setFeatureIndex',
        'decalIndex' => 'setDecalIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'personality' => 'getPersonality',
        'face' => 'getFace',
        'skinColor' => 'getSkinColor',
        'lipColor' => 'getLipColor',
        'eyeColor' => 'getEyeColor',
        'hairColors' => 'getHairColors',
        'featureColors' => 'getFeatureColors',
        'decalColor' => 'getDecalColor',
        'wearHelmet' => 'getWearHelmet',
        'hairIndex' => 'getHairIndex',
        'featureIndex' => 'getFeatureIndex',
        'decalIndex' => 'getDecalIndex'
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
        $this->container['personality'] = isset($data['personality']) ? $data['personality'] : null;
        $this->container['face'] = isset($data['face']) ? $data['face'] : null;
        $this->container['skinColor'] = isset($data['skinColor']) ? $data['skinColor'] : null;
        $this->container['lipColor'] = isset($data['lipColor']) ? $data['lipColor'] : null;
        $this->container['eyeColor'] = isset($data['eyeColor']) ? $data['eyeColor'] : null;
        $this->container['hairColors'] = isset($data['hairColors']) ? $data['hairColors'] : null;
        $this->container['featureColors'] = isset($data['featureColors']) ? $data['featureColors'] : null;
        $this->container['decalColor'] = isset($data['decalColor']) ? $data['decalColor'] : null;
        $this->container['wearHelmet'] = isset($data['wearHelmet']) ? $data['wearHelmet'] : null;
        $this->container['hairIndex'] = isset($data['hairIndex']) ? $data['hairIndex'] : null;
        $this->container['featureIndex'] = isset($data['featureIndex']) ? $data['featureIndex'] : null;
        $this->container['decalIndex'] = isset($data['decalIndex']) ? $data['decalIndex'] : null;
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
     * Gets personality
     *
     * @return int|null
     */
    public function getPersonality()
    {
        return $this->container['personality'];
    }

    /**
     * Sets personality
     *
     * @param int|null $personality personality
     *
     * @return $this
     */
    public function setPersonality($personality)
    {
        $this->container['personality'] = $personality;

        return $this;
    }

    /**
     * Gets face
     *
     * @return int|null
     */
    public function getFace()
    {
        return $this->container['face'];
    }

    /**
     * Sets face
     *
     * @param int|null $face face
     *
     * @return $this
     */
    public function setFace($face)
    {
        $this->container['face'] = $face;

        return $this;
    }

    /**
     * Gets skinColor
     *
     * @return int|null
     */
    public function getSkinColor()
    {
        return $this->container['skinColor'];
    }

    /**
     * Sets skinColor
     *
     * @param int|null $skinColor skinColor
     *
     * @return $this
     */
    public function setSkinColor($skinColor)
    {
        $this->container['skinColor'] = $skinColor;

        return $this;
    }

    /**
     * Gets lipColor
     *
     * @return int|null
     */
    public function getLipColor()
    {
        return $this->container['lipColor'];
    }

    /**
     * Sets lipColor
     *
     * @param int|null $lipColor lipColor
     *
     * @return $this
     */
    public function setLipColor($lipColor)
    {
        $this->container['lipColor'] = $lipColor;

        return $this;
    }

    /**
     * Gets eyeColor
     *
     * @return int|null
     */
    public function getEyeColor()
    {
        return $this->container['eyeColor'];
    }

    /**
     * Sets eyeColor
     *
     * @param int|null $eyeColor eyeColor
     *
     * @return $this
     */
    public function setEyeColor($eyeColor)
    {
        $this->container['eyeColor'] = $eyeColor;

        return $this;
    }

    /**
     * Gets hairColors
     *
     * @return int[]|null
     */
    public function getHairColors()
    {
        return $this->container['hairColors'];
    }

    /**
     * Sets hairColors
     *
     * @param int[]|null $hairColors hairColors
     *
     * @return $this
     */
    public function setHairColors($hairColors)
    {
        $this->container['hairColors'] = $hairColors;

        return $this;
    }

    /**
     * Gets featureColors
     *
     * @return int[]|null
     */
    public function getFeatureColors()
    {
        return $this->container['featureColors'];
    }

    /**
     * Sets featureColors
     *
     * @param int[]|null $featureColors featureColors
     *
     * @return $this
     */
    public function setFeatureColors($featureColors)
    {
        $this->container['featureColors'] = $featureColors;

        return $this;
    }

    /**
     * Gets decalColor
     *
     * @return int|null
     */
    public function getDecalColor()
    {
        return $this->container['decalColor'];
    }

    /**
     * Sets decalColor
     *
     * @param int|null $decalColor decalColor
     *
     * @return $this
     */
    public function setDecalColor($decalColor)
    {
        $this->container['decalColor'] = $decalColor;

        return $this;
    }

    /**
     * Gets wearHelmet
     *
     * @return bool|null
     */
    public function getWearHelmet()
    {
        return $this->container['wearHelmet'];
    }

    /**
     * Sets wearHelmet
     *
     * @param bool|null $wearHelmet wearHelmet
     *
     * @return $this
     */
    public function setWearHelmet($wearHelmet)
    {
        $this->container['wearHelmet'] = $wearHelmet;

        return $this;
    }

    /**
     * Gets hairIndex
     *
     * @return int|null
     */
    public function getHairIndex()
    {
        return $this->container['hairIndex'];
    }

    /**
     * Sets hairIndex
     *
     * @param int|null $hairIndex hairIndex
     *
     * @return $this
     */
    public function setHairIndex($hairIndex)
    {
        $this->container['hairIndex'] = $hairIndex;

        return $this;
    }

    /**
     * Gets featureIndex
     *
     * @return int|null
     */
    public function getFeatureIndex()
    {
        return $this->container['featureIndex'];
    }

    /**
     * Sets featureIndex
     *
     * @param int|null $featureIndex featureIndex
     *
     * @return $this
     */
    public function setFeatureIndex($featureIndex)
    {
        $this->container['featureIndex'] = $featureIndex;

        return $this;
    }

    /**
     * Gets decalIndex
     *
     * @return int|null
     */
    public function getDecalIndex()
    {
        return $this->container['decalIndex'];
    }

    /**
     * Sets decalIndex
     *
     * @param int|null $decalIndex decalIndex
     *
     * @return $this
     */
    public function setDecalIndex($decalIndex)
    {
        $this->container['decalIndex'] = $decalIndex;

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


