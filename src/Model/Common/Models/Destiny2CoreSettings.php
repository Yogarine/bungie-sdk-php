<?php
/**
 * Destiny2CoreSettings
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
 * OpenAPI spec version: 2.3.6
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Common\Models;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * Destiny2CoreSettings Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Destiny2CoreSettings implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Common.Models.Destiny2CoreSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collectionRootNode' => 'int',
        'badgesRootNode' => 'int',
        'recordsRootNode' => 'int',
        'medalsRootNode' => 'int',
        'currentRankProgressionHashes' => 'int[]',
        'undiscoveredCollectibleImage' => 'string',
        'ammoTypeHeavyIcon' => 'string',
        'ammoTypeSpecialIcon' => 'string',
        'ammoTypePrimaryIcon' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'collectionRootNode' => 'uint32',
        'badgesRootNode' => 'uint32',
        'recordsRootNode' => 'uint32',
        'medalsRootNode' => 'uint32',
        'currentRankProgressionHashes' => 'uint32',
        'undiscoveredCollectibleImage' => null,
        'ammoTypeHeavyIcon' => null,
        'ammoTypeSpecialIcon' => null,
        'ammoTypePrimaryIcon' => null
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
        'collectionRootNode' => 'collectionRootNode',
        'badgesRootNode' => 'badgesRootNode',
        'recordsRootNode' => 'recordsRootNode',
        'medalsRootNode' => 'medalsRootNode',
        'currentRankProgressionHashes' => 'currentRankProgressionHashes',
        'undiscoveredCollectibleImage' => 'undiscoveredCollectibleImage',
        'ammoTypeHeavyIcon' => 'ammoTypeHeavyIcon',
        'ammoTypeSpecialIcon' => 'ammoTypeSpecialIcon',
        'ammoTypePrimaryIcon' => 'ammoTypePrimaryIcon'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collectionRootNode' => 'setCollectionRootNode',
        'badgesRootNode' => 'setBadgesRootNode',
        'recordsRootNode' => 'setRecordsRootNode',
        'medalsRootNode' => 'setMedalsRootNode',
        'currentRankProgressionHashes' => 'setCurrentRankProgressionHashes',
        'undiscoveredCollectibleImage' => 'setUndiscoveredCollectibleImage',
        'ammoTypeHeavyIcon' => 'setAmmoTypeHeavyIcon',
        'ammoTypeSpecialIcon' => 'setAmmoTypeSpecialIcon',
        'ammoTypePrimaryIcon' => 'setAmmoTypePrimaryIcon'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collectionRootNode' => 'getCollectionRootNode',
        'badgesRootNode' => 'getBadgesRootNode',
        'recordsRootNode' => 'getRecordsRootNode',
        'medalsRootNode' => 'getMedalsRootNode',
        'currentRankProgressionHashes' => 'getCurrentRankProgressionHashes',
        'undiscoveredCollectibleImage' => 'getUndiscoveredCollectibleImage',
        'ammoTypeHeavyIcon' => 'getAmmoTypeHeavyIcon',
        'ammoTypeSpecialIcon' => 'getAmmoTypeSpecialIcon',
        'ammoTypePrimaryIcon' => 'getAmmoTypePrimaryIcon'
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
        $this->container['collectionRootNode'] = isset($data['collectionRootNode']) ? $data['collectionRootNode'] : null;
        $this->container['badgesRootNode'] = isset($data['badgesRootNode']) ? $data['badgesRootNode'] : null;
        $this->container['recordsRootNode'] = isset($data['recordsRootNode']) ? $data['recordsRootNode'] : null;
        $this->container['medalsRootNode'] = isset($data['medalsRootNode']) ? $data['medalsRootNode'] : null;
        $this->container['currentRankProgressionHashes'] = isset($data['currentRankProgressionHashes']) ? $data['currentRankProgressionHashes'] : null;
        $this->container['undiscoveredCollectibleImage'] = isset($data['undiscoveredCollectibleImage']) ? $data['undiscoveredCollectibleImage'] : null;
        $this->container['ammoTypeHeavyIcon'] = isset($data['ammoTypeHeavyIcon']) ? $data['ammoTypeHeavyIcon'] : null;
        $this->container['ammoTypeSpecialIcon'] = isset($data['ammoTypeSpecialIcon']) ? $data['ammoTypeSpecialIcon'] : null;
        $this->container['ammoTypePrimaryIcon'] = isset($data['ammoTypePrimaryIcon']) ? $data['ammoTypePrimaryIcon'] : null;
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
     * Gets collectionRootNode
     *
     * @return int|null
     */
    public function getCollectionRootNode()
    {
        return $this->container['collectionRootNode'];
    }

    /**
     * Sets collectionRootNode
     *
     * @param int|null $collectionRootNode collectionRootNode
     *
     * @return $this
     */
    public function setCollectionRootNode($collectionRootNode)
    {
        $this->container['collectionRootNode'] = $collectionRootNode;

        return $this;
    }

    /**
     * Gets badgesRootNode
     *
     * @return int|null
     */
    public function getBadgesRootNode()
    {
        return $this->container['badgesRootNode'];
    }

    /**
     * Sets badgesRootNode
     *
     * @param int|null $badgesRootNode badgesRootNode
     *
     * @return $this
     */
    public function setBadgesRootNode($badgesRootNode)
    {
        $this->container['badgesRootNode'] = $badgesRootNode;

        return $this;
    }

    /**
     * Gets recordsRootNode
     *
     * @return int|null
     */
    public function getRecordsRootNode()
    {
        return $this->container['recordsRootNode'];
    }

    /**
     * Sets recordsRootNode
     *
     * @param int|null $recordsRootNode recordsRootNode
     *
     * @return $this
     */
    public function setRecordsRootNode($recordsRootNode)
    {
        $this->container['recordsRootNode'] = $recordsRootNode;

        return $this;
    }

    /**
     * Gets medalsRootNode
     *
     * @return int|null
     */
    public function getMedalsRootNode()
    {
        return $this->container['medalsRootNode'];
    }

    /**
     * Sets medalsRootNode
     *
     * @param int|null $medalsRootNode medalsRootNode
     *
     * @return $this
     */
    public function setMedalsRootNode($medalsRootNode)
    {
        $this->container['medalsRootNode'] = $medalsRootNode;

        return $this;
    }

    /**
     * Gets currentRankProgressionHashes
     *
     * @return int[]|null
     */
    public function getCurrentRankProgressionHashes()
    {
        return $this->container['currentRankProgressionHashes'];
    }

    /**
     * Sets currentRankProgressionHashes
     *
     * @param int[]|null $currentRankProgressionHashes currentRankProgressionHashes
     *
     * @return $this
     */
    public function setCurrentRankProgressionHashes($currentRankProgressionHashes)
    {
        $this->container['currentRankProgressionHashes'] = $currentRankProgressionHashes;

        return $this;
    }

    /**
     * Gets undiscoveredCollectibleImage
     *
     * @return string|null
     */
    public function getUndiscoveredCollectibleImage()
    {
        return $this->container['undiscoveredCollectibleImage'];
    }

    /**
     * Sets undiscoveredCollectibleImage
     *
     * @param string|null $undiscoveredCollectibleImage undiscoveredCollectibleImage
     *
     * @return $this
     */
    public function setUndiscoveredCollectibleImage($undiscoveredCollectibleImage)
    {
        $this->container['undiscoveredCollectibleImage'] = $undiscoveredCollectibleImage;

        return $this;
    }

    /**
     * Gets ammoTypeHeavyIcon
     *
     * @return string|null
     */
    public function getAmmoTypeHeavyIcon()
    {
        return $this->container['ammoTypeHeavyIcon'];
    }

    /**
     * Sets ammoTypeHeavyIcon
     *
     * @param string|null $ammoTypeHeavyIcon ammoTypeHeavyIcon
     *
     * @return $this
     */
    public function setAmmoTypeHeavyIcon($ammoTypeHeavyIcon)
    {
        $this->container['ammoTypeHeavyIcon'] = $ammoTypeHeavyIcon;

        return $this;
    }

    /**
     * Gets ammoTypeSpecialIcon
     *
     * @return string|null
     */
    public function getAmmoTypeSpecialIcon()
    {
        return $this->container['ammoTypeSpecialIcon'];
    }

    /**
     * Sets ammoTypeSpecialIcon
     *
     * @param string|null $ammoTypeSpecialIcon ammoTypeSpecialIcon
     *
     * @return $this
     */
    public function setAmmoTypeSpecialIcon($ammoTypeSpecialIcon)
    {
        $this->container['ammoTypeSpecialIcon'] = $ammoTypeSpecialIcon;

        return $this;
    }

    /**
     * Gets ammoTypePrimaryIcon
     *
     * @return string|null
     */
    public function getAmmoTypePrimaryIcon()
    {
        return $this->container['ammoTypePrimaryIcon'];
    }

    /**
     * Sets ammoTypePrimaryIcon
     *
     * @param string|null $ammoTypePrimaryIcon ammoTypePrimaryIcon
     *
     * @return $this
     */
    public function setAmmoTypePrimaryIcon($ammoTypePrimaryIcon)
    {
        $this->container['ammoTypePrimaryIcon'] = $ammoTypePrimaryIcon;

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


