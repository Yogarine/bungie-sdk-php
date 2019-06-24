<?php
/**
 * DestinyManifest
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

namespace Bungie\Model\Destiny\Config;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyManifest Class Doc Comment
 *
 * @category Class
 * @description DestinyManifest is the external-facing contract for just the properties needed by those calling the Destiny Platform.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyManifest implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Config.DestinyManifest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'mobileAssetContentPath' => 'string',
        'mobileGearAssetDataBases' => '\Bungie\Model\Destiny\Config\GearAssetDataBaseDefinition[]',
        'mobileWorldContentPaths' => 'map[string,string]',
        'jsonWorldContentPaths' => 'map[string,string]',
        'mobileClanBannerDatabasePath' => 'string',
        'mobileGearCDN' => 'map[string,string]',
        'iconImagePyramidInfo' => '\Bungie\Model\Destiny\Config\ImagePyramidEntry[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'version' => null,
        'mobileAssetContentPath' => null,
        'mobileGearAssetDataBases' => null,
        'mobileWorldContentPaths' => null,
        'jsonWorldContentPaths' => null,
        'mobileClanBannerDatabasePath' => null,
        'mobileGearCDN' => null,
        'iconImagePyramidInfo' => null
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
        'version' => 'version',
        'mobileAssetContentPath' => 'mobileAssetContentPath',
        'mobileGearAssetDataBases' => 'mobileGearAssetDataBases',
        'mobileWorldContentPaths' => 'mobileWorldContentPaths',
        'jsonWorldContentPaths' => 'jsonWorldContentPaths',
        'mobileClanBannerDatabasePath' => 'mobileClanBannerDatabasePath',
        'mobileGearCDN' => 'mobileGearCDN',
        'iconImagePyramidInfo' => 'iconImagePyramidInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'mobileAssetContentPath' => 'setMobileAssetContentPath',
        'mobileGearAssetDataBases' => 'setMobileGearAssetDataBases',
        'mobileWorldContentPaths' => 'setMobileWorldContentPaths',
        'jsonWorldContentPaths' => 'setJsonWorldContentPaths',
        'mobileClanBannerDatabasePath' => 'setMobileClanBannerDatabasePath',
        'mobileGearCDN' => 'setMobileGearCDN',
        'iconImagePyramidInfo' => 'setIconImagePyramidInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'mobileAssetContentPath' => 'getMobileAssetContentPath',
        'mobileGearAssetDataBases' => 'getMobileGearAssetDataBases',
        'mobileWorldContentPaths' => 'getMobileWorldContentPaths',
        'jsonWorldContentPaths' => 'getJsonWorldContentPaths',
        'mobileClanBannerDatabasePath' => 'getMobileClanBannerDatabasePath',
        'mobileGearCDN' => 'getMobileGearCDN',
        'iconImagePyramidInfo' => 'getIconImagePyramidInfo'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['mobileAssetContentPath'] = isset($data['mobileAssetContentPath']) ? $data['mobileAssetContentPath'] : null;
        $this->container['mobileGearAssetDataBases'] = isset($data['mobileGearAssetDataBases']) ? $data['mobileGearAssetDataBases'] : null;
        $this->container['mobileWorldContentPaths'] = isset($data['mobileWorldContentPaths']) ? $data['mobileWorldContentPaths'] : null;
        $this->container['jsonWorldContentPaths'] = isset($data['jsonWorldContentPaths']) ? $data['jsonWorldContentPaths'] : null;
        $this->container['mobileClanBannerDatabasePath'] = isset($data['mobileClanBannerDatabasePath']) ? $data['mobileClanBannerDatabasePath'] : null;
        $this->container['mobileGearCDN'] = isset($data['mobileGearCDN']) ? $data['mobileGearCDN'] : null;
        $this->container['iconImagePyramidInfo'] = isset($data['iconImagePyramidInfo']) ? $data['iconImagePyramidInfo'] : null;
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets mobileAssetContentPath
     *
     * @return string|null
     */
    public function getMobileAssetContentPath()
    {
        return $this->container['mobileAssetContentPath'];
    }

    /**
     * Sets mobileAssetContentPath
     *
     * @param string|null $mobileAssetContentPath mobileAssetContentPath
     *
     * @return $this
     */
    public function setMobileAssetContentPath($mobileAssetContentPath)
    {
        $this->container['mobileAssetContentPath'] = $mobileAssetContentPath;

        return $this;
    }

    /**
     * Gets mobileGearAssetDataBases
     *
     * @return \Bungie\Model\Destiny\Config\GearAssetDataBaseDefinition[]|null
     */
    public function getMobileGearAssetDataBases()
    {
        return $this->container['mobileGearAssetDataBases'];
    }

    /**
     * Sets mobileGearAssetDataBases
     *
     * @param \Bungie\Model\Destiny\Config\GearAssetDataBaseDefinition[]|null $mobileGearAssetDataBases mobileGearAssetDataBases
     *
     * @return $this
     */
    public function setMobileGearAssetDataBases($mobileGearAssetDataBases)
    {
        $this->container['mobileGearAssetDataBases'] = $mobileGearAssetDataBases;

        return $this;
    }

    /**
     * Gets mobileWorldContentPaths
     *
     * @return map[string,string]|null
     */
    public function getMobileWorldContentPaths()
    {
        return $this->container['mobileWorldContentPaths'];
    }

    /**
     * Sets mobileWorldContentPaths
     *
     * @param map[string,string]|null $mobileWorldContentPaths mobileWorldContentPaths
     *
     * @return $this
     */
    public function setMobileWorldContentPaths($mobileWorldContentPaths)
    {
        $this->container['mobileWorldContentPaths'] = $mobileWorldContentPaths;

        return $this;
    }

    /**
     * Gets jsonWorldContentPaths
     *
     * @return map[string,string]|null
     */
    public function getJsonWorldContentPaths()
    {
        return $this->container['jsonWorldContentPaths'];
    }

    /**
     * Sets jsonWorldContentPaths
     *
     * @param map[string,string]|null $jsonWorldContentPaths jsonWorldContentPaths
     *
     * @return $this
     */
    public function setJsonWorldContentPaths($jsonWorldContentPaths)
    {
        $this->container['jsonWorldContentPaths'] = $jsonWorldContentPaths;

        return $this;
    }

    /**
     * Gets mobileClanBannerDatabasePath
     *
     * @return string|null
     */
    public function getMobileClanBannerDatabasePath()
    {
        return $this->container['mobileClanBannerDatabasePath'];
    }

    /**
     * Sets mobileClanBannerDatabasePath
     *
     * @param string|null $mobileClanBannerDatabasePath mobileClanBannerDatabasePath
     *
     * @return $this
     */
    public function setMobileClanBannerDatabasePath($mobileClanBannerDatabasePath)
    {
        $this->container['mobileClanBannerDatabasePath'] = $mobileClanBannerDatabasePath;

        return $this;
    }

    /**
     * Gets mobileGearCDN
     *
     * @return map[string,string]|null
     */
    public function getMobileGearCDN()
    {
        return $this->container['mobileGearCDN'];
    }

    /**
     * Sets mobileGearCDN
     *
     * @param map[string,string]|null $mobileGearCDN mobileGearCDN
     *
     * @return $this
     */
    public function setMobileGearCDN($mobileGearCDN)
    {
        $this->container['mobileGearCDN'] = $mobileGearCDN;

        return $this;
    }

    /**
     * Gets iconImagePyramidInfo
     *
     * @return \Bungie\Model\Destiny\Config\ImagePyramidEntry[]|null
     */
    public function getIconImagePyramidInfo()
    {
        return $this->container['iconImagePyramidInfo'];
    }

    /**
     * Sets iconImagePyramidInfo
     *
     * @param \Bungie\Model\Destiny\Config\ImagePyramidEntry[]|null $iconImagePyramidInfo Information about the \"Image Pyramid\" for Destiny icons. Where possible, we create smaller versions of Destiny icons. These are found as subfolders under the location of the \"original/full size\" Destiny images, with the same file name and extension as the original image itself. (this lets us avoid sending largely redundant path info with every entity, at the expense of the smaller versions of the image being less discoverable)
     *
     * @return $this
     */
    public function setIconImagePyramidInfo($iconImagePyramidInfo)
    {
        $this->container['iconImagePyramidInfo'] = $iconImagePyramidInfo;

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


