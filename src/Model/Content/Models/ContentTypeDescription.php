<?php
/**
 * ContentTypeDescription
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

namespace Bungie\Model\Content\Models;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * ContentTypeDescription Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentTypeDescription implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content.Models.ContentTypeDescription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cType' => 'string',
        'name' => 'string',
        'contentDescription' => 'string',
        'previewImage' => 'string',
        'priority' => 'int',
        'reminder' => 'string',
        'properties' => '\Bungie\Model\Content\Models\ContentTypeProperty[]',
        'tagMetadata' => '\Bungie\Model\Content\Models\TagMetadataDefinition[]',
        'tagMetadataItems' => 'map[string,\Bungie\Model\Content\Models\TagMetadataItem]',
        'usageExamples' => 'string[]',
        'showInContentEditor' => 'bool',
        'typeOf' => 'string',
        'bindIdentifierToProperty' => 'string',
        'boundRegex' => 'string',
        'forceIdentifierBinding' => 'bool',
        'allowComments' => 'bool',
        'autoEnglishPropertyFallback' => 'bool',
        'bulkUploadable' => 'bool',
        'previews' => '\Bungie\Model\Content\Models\ContentPreview[]',
        'suppressCmsPath' => 'bool',
        'propertySections' => '\Bungie\Model\Content\Models\ContentTypePropertySection[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cType' => null,
        'name' => null,
        'contentDescription' => null,
        'previewImage' => null,
        'priority' => 'int32',
        'reminder' => null,
        'properties' => null,
        'tagMetadata' => null,
        'tagMetadataItems' => null,
        'usageExamples' => null,
        'showInContentEditor' => null,
        'typeOf' => null,
        'bindIdentifierToProperty' => null,
        'boundRegex' => null,
        'forceIdentifierBinding' => null,
        'allowComments' => null,
        'autoEnglishPropertyFallback' => null,
        'bulkUploadable' => null,
        'previews' => null,
        'suppressCmsPath' => null,
        'propertySections' => null
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
        'cType' => 'cType',
        'name' => 'name',
        'contentDescription' => 'contentDescription',
        'previewImage' => 'previewImage',
        'priority' => 'priority',
        'reminder' => 'reminder',
        'properties' => 'properties',
        'tagMetadata' => 'tagMetadata',
        'tagMetadataItems' => 'tagMetadataItems',
        'usageExamples' => 'usageExamples',
        'showInContentEditor' => 'showInContentEditor',
        'typeOf' => 'typeOf',
        'bindIdentifierToProperty' => 'bindIdentifierToProperty',
        'boundRegex' => 'boundRegex',
        'forceIdentifierBinding' => 'forceIdentifierBinding',
        'allowComments' => 'allowComments',
        'autoEnglishPropertyFallback' => 'autoEnglishPropertyFallback',
        'bulkUploadable' => 'bulkUploadable',
        'previews' => 'previews',
        'suppressCmsPath' => 'suppressCmsPath',
        'propertySections' => 'propertySections'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cType' => 'setCType',
        'name' => 'setName',
        'contentDescription' => 'setContentDescription',
        'previewImage' => 'setPreviewImage',
        'priority' => 'setPriority',
        'reminder' => 'setReminder',
        'properties' => 'setProperties',
        'tagMetadata' => 'setTagMetadata',
        'tagMetadataItems' => 'setTagMetadataItems',
        'usageExamples' => 'setUsageExamples',
        'showInContentEditor' => 'setShowInContentEditor',
        'typeOf' => 'setTypeOf',
        'bindIdentifierToProperty' => 'setBindIdentifierToProperty',
        'boundRegex' => 'setBoundRegex',
        'forceIdentifierBinding' => 'setForceIdentifierBinding',
        'allowComments' => 'setAllowComments',
        'autoEnglishPropertyFallback' => 'setAutoEnglishPropertyFallback',
        'bulkUploadable' => 'setBulkUploadable',
        'previews' => 'setPreviews',
        'suppressCmsPath' => 'setSuppressCmsPath',
        'propertySections' => 'setPropertySections'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cType' => 'getCType',
        'name' => 'getName',
        'contentDescription' => 'getContentDescription',
        'previewImage' => 'getPreviewImage',
        'priority' => 'getPriority',
        'reminder' => 'getReminder',
        'properties' => 'getProperties',
        'tagMetadata' => 'getTagMetadata',
        'tagMetadataItems' => 'getTagMetadataItems',
        'usageExamples' => 'getUsageExamples',
        'showInContentEditor' => 'getShowInContentEditor',
        'typeOf' => 'getTypeOf',
        'bindIdentifierToProperty' => 'getBindIdentifierToProperty',
        'boundRegex' => 'getBoundRegex',
        'forceIdentifierBinding' => 'getForceIdentifierBinding',
        'allowComments' => 'getAllowComments',
        'autoEnglishPropertyFallback' => 'getAutoEnglishPropertyFallback',
        'bulkUploadable' => 'getBulkUploadable',
        'previews' => 'getPreviews',
        'suppressCmsPath' => 'getSuppressCmsPath',
        'propertySections' => 'getPropertySections'
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
        $this->container['cType'] = isset($data['cType']) ? $data['cType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contentDescription'] = isset($data['contentDescription']) ? $data['contentDescription'] : null;
        $this->container['previewImage'] = isset($data['previewImage']) ? $data['previewImage'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['reminder'] = isset($data['reminder']) ? $data['reminder'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['tagMetadata'] = isset($data['tagMetadata']) ? $data['tagMetadata'] : null;
        $this->container['tagMetadataItems'] = isset($data['tagMetadataItems']) ? $data['tagMetadataItems'] : null;
        $this->container['usageExamples'] = isset($data['usageExamples']) ? $data['usageExamples'] : null;
        $this->container['showInContentEditor'] = isset($data['showInContentEditor']) ? $data['showInContentEditor'] : null;
        $this->container['typeOf'] = isset($data['typeOf']) ? $data['typeOf'] : null;
        $this->container['bindIdentifierToProperty'] = isset($data['bindIdentifierToProperty']) ? $data['bindIdentifierToProperty'] : null;
        $this->container['boundRegex'] = isset($data['boundRegex']) ? $data['boundRegex'] : null;
        $this->container['forceIdentifierBinding'] = isset($data['forceIdentifierBinding']) ? $data['forceIdentifierBinding'] : null;
        $this->container['allowComments'] = isset($data['allowComments']) ? $data['allowComments'] : null;
        $this->container['autoEnglishPropertyFallback'] = isset($data['autoEnglishPropertyFallback']) ? $data['autoEnglishPropertyFallback'] : null;
        $this->container['bulkUploadable'] = isset($data['bulkUploadable']) ? $data['bulkUploadable'] : null;
        $this->container['previews'] = isset($data['previews']) ? $data['previews'] : null;
        $this->container['suppressCmsPath'] = isset($data['suppressCmsPath']) ? $data['suppressCmsPath'] : null;
        $this->container['propertySections'] = isset($data['propertySections']) ? $data['propertySections'] : null;
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
     * Gets cType
     *
     * @return string|null
     */
    public function getCType()
    {
        return $this->container['cType'];
    }

    /**
     * Sets cType
     *
     * @param string|null $cType cType
     *
     * @return $this
     */
    public function setCType($cType)
    {
        $this->container['cType'] = $cType;

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
     * Gets contentDescription
     *
     * @return string|null
     */
    public function getContentDescription()
    {
        return $this->container['contentDescription'];
    }

    /**
     * Sets contentDescription
     *
     * @param string|null $contentDescription contentDescription
     *
     * @return $this
     */
    public function setContentDescription($contentDescription)
    {
        $this->container['contentDescription'] = $contentDescription;

        return $this;
    }

    /**
     * Gets previewImage
     *
     * @return string|null
     */
    public function getPreviewImage()
    {
        return $this->container['previewImage'];
    }

    /**
     * Sets previewImage
     *
     * @param string|null $previewImage previewImage
     *
     * @return $this
     */
    public function setPreviewImage($previewImage)
    {
        $this->container['previewImage'] = $previewImage;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets reminder
     *
     * @return string|null
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param string|null $reminder reminder
     *
     * @return $this
     */
    public function setReminder($reminder)
    {
        $this->container['reminder'] = $reminder;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Bungie\Model\Content\Models\ContentTypeProperty[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Bungie\Model\Content\Models\ContentTypeProperty[]|null $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets tagMetadata
     *
     * @return \Bungie\Model\Content\Models\TagMetadataDefinition[]|null
     */
    public function getTagMetadata()
    {
        return $this->container['tagMetadata'];
    }

    /**
     * Sets tagMetadata
     *
     * @param \Bungie\Model\Content\Models\TagMetadataDefinition[]|null $tagMetadata tagMetadata
     *
     * @return $this
     */
    public function setTagMetadata($tagMetadata)
    {
        $this->container['tagMetadata'] = $tagMetadata;

        return $this;
    }

    /**
     * Gets tagMetadataItems
     *
     * @return map[string,\Bungie\Model\Content\Models\TagMetadataItem]|null
     */
    public function getTagMetadataItems()
    {
        return $this->container['tagMetadataItems'];
    }

    /**
     * Sets tagMetadataItems
     *
     * @param map[string,\Bungie\Model\Content\Models\TagMetadataItem]|null $tagMetadataItems tagMetadataItems
     *
     * @return $this
     */
    public function setTagMetadataItems($tagMetadataItems)
    {
        $this->container['tagMetadataItems'] = $tagMetadataItems;

        return $this;
    }

    /**
     * Gets usageExamples
     *
     * @return string[]|null
     */
    public function getUsageExamples()
    {
        return $this->container['usageExamples'];
    }

    /**
     * Sets usageExamples
     *
     * @param string[]|null $usageExamples usageExamples
     *
     * @return $this
     */
    public function setUsageExamples($usageExamples)
    {
        $this->container['usageExamples'] = $usageExamples;

        return $this;
    }

    /**
     * Gets showInContentEditor
     *
     * @return bool|null
     */
    public function getShowInContentEditor()
    {
        return $this->container['showInContentEditor'];
    }

    /**
     * Sets showInContentEditor
     *
     * @param bool|null $showInContentEditor showInContentEditor
     *
     * @return $this
     */
    public function setShowInContentEditor($showInContentEditor)
    {
        $this->container['showInContentEditor'] = $showInContentEditor;

        return $this;
    }

    /**
     * Gets typeOf
     *
     * @return string|null
     */
    public function getTypeOf()
    {
        return $this->container['typeOf'];
    }

    /**
     * Sets typeOf
     *
     * @param string|null $typeOf typeOf
     *
     * @return $this
     */
    public function setTypeOf($typeOf)
    {
        $this->container['typeOf'] = $typeOf;

        return $this;
    }

    /**
     * Gets bindIdentifierToProperty
     *
     * @return string|null
     */
    public function getBindIdentifierToProperty()
    {
        return $this->container['bindIdentifierToProperty'];
    }

    /**
     * Sets bindIdentifierToProperty
     *
     * @param string|null $bindIdentifierToProperty bindIdentifierToProperty
     *
     * @return $this
     */
    public function setBindIdentifierToProperty($bindIdentifierToProperty)
    {
        $this->container['bindIdentifierToProperty'] = $bindIdentifierToProperty;

        return $this;
    }

    /**
     * Gets boundRegex
     *
     * @return string|null
     */
    public function getBoundRegex()
    {
        return $this->container['boundRegex'];
    }

    /**
     * Sets boundRegex
     *
     * @param string|null $boundRegex boundRegex
     *
     * @return $this
     */
    public function setBoundRegex($boundRegex)
    {
        $this->container['boundRegex'] = $boundRegex;

        return $this;
    }

    /**
     * Gets forceIdentifierBinding
     *
     * @return bool|null
     */
    public function getForceIdentifierBinding()
    {
        return $this->container['forceIdentifierBinding'];
    }

    /**
     * Sets forceIdentifierBinding
     *
     * @param bool|null $forceIdentifierBinding forceIdentifierBinding
     *
     * @return $this
     */
    public function setForceIdentifierBinding($forceIdentifierBinding)
    {
        $this->container['forceIdentifierBinding'] = $forceIdentifierBinding;

        return $this;
    }

    /**
     * Gets allowComments
     *
     * @return bool|null
     */
    public function getAllowComments()
    {
        return $this->container['allowComments'];
    }

    /**
     * Sets allowComments
     *
     * @param bool|null $allowComments allowComments
     *
     * @return $this
     */
    public function setAllowComments($allowComments)
    {
        $this->container['allowComments'] = $allowComments;

        return $this;
    }

    /**
     * Gets autoEnglishPropertyFallback
     *
     * @return bool|null
     */
    public function getAutoEnglishPropertyFallback()
    {
        return $this->container['autoEnglishPropertyFallback'];
    }

    /**
     * Sets autoEnglishPropertyFallback
     *
     * @param bool|null $autoEnglishPropertyFallback autoEnglishPropertyFallback
     *
     * @return $this
     */
    public function setAutoEnglishPropertyFallback($autoEnglishPropertyFallback)
    {
        $this->container['autoEnglishPropertyFallback'] = $autoEnglishPropertyFallback;

        return $this;
    }

    /**
     * Gets bulkUploadable
     *
     * @return bool|null
     */
    public function getBulkUploadable()
    {
        return $this->container['bulkUploadable'];
    }

    /**
     * Sets bulkUploadable
     *
     * @param bool|null $bulkUploadable bulkUploadable
     *
     * @return $this
     */
    public function setBulkUploadable($bulkUploadable)
    {
        $this->container['bulkUploadable'] = $bulkUploadable;

        return $this;
    }

    /**
     * Gets previews
     *
     * @return \Bungie\Model\Content\Models\ContentPreview[]|null
     */
    public function getPreviews()
    {
        return $this->container['previews'];
    }

    /**
     * Sets previews
     *
     * @param \Bungie\Model\Content\Models\ContentPreview[]|null $previews previews
     *
     * @return $this
     */
    public function setPreviews($previews)
    {
        $this->container['previews'] = $previews;

        return $this;
    }

    /**
     * Gets suppressCmsPath
     *
     * @return bool|null
     */
    public function getSuppressCmsPath()
    {
        return $this->container['suppressCmsPath'];
    }

    /**
     * Sets suppressCmsPath
     *
     * @param bool|null $suppressCmsPath suppressCmsPath
     *
     * @return $this
     */
    public function setSuppressCmsPath($suppressCmsPath)
    {
        $this->container['suppressCmsPath'] = $suppressCmsPath;

        return $this;
    }

    /**
     * Gets propertySections
     *
     * @return \Bungie\Model\Content\Models\ContentTypePropertySection[]|null
     */
    public function getPropertySections()
    {
        return $this->container['propertySections'];
    }

    /**
     * Sets propertySections
     *
     * @param \Bungie\Model\Content\Models\ContentTypePropertySection[]|null $propertySections propertySections
     *
     * @return $this
     */
    public function setPropertySections($propertySections)
    {
        $this->container['propertySections'] = $propertySections;

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


