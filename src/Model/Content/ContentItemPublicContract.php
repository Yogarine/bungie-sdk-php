<?php
/**
 * ContentItemPublicContract
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

namespace Bungie\Model\Content;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * ContentItemPublicContract Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentItemPublicContract implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content.ContentItemPublicContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contentId' => 'int',
        'cType' => 'string',
        'cmsPath' => 'string',
        'creationDate' => '\DateTime',
        'modifyDate' => '\DateTime',
        'allowComments' => 'bool',
        'hasAgeGate' => 'bool',
        'minimumAge' => 'int',
        'ratingImagePath' => 'string',
        'author' => '\Bungie\Model\User\GeneralUser',
        'autoEnglishPropertyFallback' => 'bool',
        'properties' => 'map[string,object]',
        'representations' => '\Bungie\Model\Content\ContentRepresentation[]',
        'tags' => 'string[]',
        'commentSummary' => '\Bungie\Model\Content\CommentSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contentId' => 'int64',
        'cType' => null,
        'cmsPath' => null,
        'creationDate' => 'date-time',
        'modifyDate' => 'date-time',
        'allowComments' => null,
        'hasAgeGate' => null,
        'minimumAge' => 'int32',
        'ratingImagePath' => null,
        'author' => null,
        'autoEnglishPropertyFallback' => null,
        'properties' => null,
        'representations' => null,
        'tags' => null,
        'commentSummary' => null
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
        'contentId' => 'contentId',
        'cType' => 'cType',
        'cmsPath' => 'cmsPath',
        'creationDate' => 'creationDate',
        'modifyDate' => 'modifyDate',
        'allowComments' => 'allowComments',
        'hasAgeGate' => 'hasAgeGate',
        'minimumAge' => 'minimumAge',
        'ratingImagePath' => 'ratingImagePath',
        'author' => 'author',
        'autoEnglishPropertyFallback' => 'autoEnglishPropertyFallback',
        'properties' => 'properties',
        'representations' => 'representations',
        'tags' => 'tags',
        'commentSummary' => 'commentSummary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contentId' => 'setContentId',
        'cType' => 'setCType',
        'cmsPath' => 'setCmsPath',
        'creationDate' => 'setCreationDate',
        'modifyDate' => 'setModifyDate',
        'allowComments' => 'setAllowComments',
        'hasAgeGate' => 'setHasAgeGate',
        'minimumAge' => 'setMinimumAge',
        'ratingImagePath' => 'setRatingImagePath',
        'author' => 'setAuthor',
        'autoEnglishPropertyFallback' => 'setAutoEnglishPropertyFallback',
        'properties' => 'setProperties',
        'representations' => 'setRepresentations',
        'tags' => 'setTags',
        'commentSummary' => 'setCommentSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contentId' => 'getContentId',
        'cType' => 'getCType',
        'cmsPath' => 'getCmsPath',
        'creationDate' => 'getCreationDate',
        'modifyDate' => 'getModifyDate',
        'allowComments' => 'getAllowComments',
        'hasAgeGate' => 'getHasAgeGate',
        'minimumAge' => 'getMinimumAge',
        'ratingImagePath' => 'getRatingImagePath',
        'author' => 'getAuthor',
        'autoEnglishPropertyFallback' => 'getAutoEnglishPropertyFallback',
        'properties' => 'getProperties',
        'representations' => 'getRepresentations',
        'tags' => 'getTags',
        'commentSummary' => 'getCommentSummary'
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
        $this->container['contentId'] = isset($data['contentId']) ? $data['contentId'] : null;
        $this->container['cType'] = isset($data['cType']) ? $data['cType'] : null;
        $this->container['cmsPath'] = isset($data['cmsPath']) ? $data['cmsPath'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['modifyDate'] = isset($data['modifyDate']) ? $data['modifyDate'] : null;
        $this->container['allowComments'] = isset($data['allowComments']) ? $data['allowComments'] : null;
        $this->container['hasAgeGate'] = isset($data['hasAgeGate']) ? $data['hasAgeGate'] : null;
        $this->container['minimumAge'] = isset($data['minimumAge']) ? $data['minimumAge'] : null;
        $this->container['ratingImagePath'] = isset($data['ratingImagePath']) ? $data['ratingImagePath'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['autoEnglishPropertyFallback'] = isset($data['autoEnglishPropertyFallback']) ? $data['autoEnglishPropertyFallback'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['representations'] = isset($data['representations']) ? $data['representations'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['commentSummary'] = isset($data['commentSummary']) ? $data['commentSummary'] : null;
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
     * Gets contentId
     *
     * @return int|null
     */
    public function getContentId()
    {
        return $this->container['contentId'];
    }

    /**
     * Sets contentId
     *
     * @param int|null $contentId contentId
     *
     * @return $this
     */
    public function setContentId($contentId)
    {
        $this->container['contentId'] = $contentId;

        return $this;
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
     * Gets cmsPath
     *
     * @return string|null
     */
    public function getCmsPath()
    {
        return $this->container['cmsPath'];
    }

    /**
     * Sets cmsPath
     *
     * @param string|null $cmsPath cmsPath
     *
     * @return $this
     */
    public function setCmsPath($cmsPath)
    {
        $this->container['cmsPath'] = $cmsPath;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets modifyDate
     *
     * @return \DateTime|null
     */
    public function getModifyDate()
    {
        return $this->container['modifyDate'];
    }

    /**
     * Sets modifyDate
     *
     * @param \DateTime|null $modifyDate modifyDate
     *
     * @return $this
     */
    public function setModifyDate($modifyDate)
    {
        $this->container['modifyDate'] = $modifyDate;

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
     * Gets hasAgeGate
     *
     * @return bool|null
     */
    public function getHasAgeGate()
    {
        return $this->container['hasAgeGate'];
    }

    /**
     * Sets hasAgeGate
     *
     * @param bool|null $hasAgeGate hasAgeGate
     *
     * @return $this
     */
    public function setHasAgeGate($hasAgeGate)
    {
        $this->container['hasAgeGate'] = $hasAgeGate;

        return $this;
    }

    /**
     * Gets minimumAge
     *
     * @return int|null
     */
    public function getMinimumAge()
    {
        return $this->container['minimumAge'];
    }

    /**
     * Sets minimumAge
     *
     * @param int|null $minimumAge minimumAge
     *
     * @return $this
     */
    public function setMinimumAge($minimumAge)
    {
        $this->container['minimumAge'] = $minimumAge;

        return $this;
    }

    /**
     * Gets ratingImagePath
     *
     * @return string|null
     */
    public function getRatingImagePath()
    {
        return $this->container['ratingImagePath'];
    }

    /**
     * Sets ratingImagePath
     *
     * @param string|null $ratingImagePath ratingImagePath
     *
     * @return $this
     */
    public function setRatingImagePath($ratingImagePath)
    {
        $this->container['ratingImagePath'] = $ratingImagePath;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \Bungie\Model\User\GeneralUser|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \Bungie\Model\User\GeneralUser|null $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

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
     * Gets properties
     *
     * @return map[string,object]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param map[string,object]|null $properties Firehose content is really a collection of metadata and \"properties\", which are the potentially-but-not-strictly localizable data that comprises the meat of whatever content is being shown.  As Cole Porter would have crooned, \"Anything Goes\" with Firehose properties. They are most often strings, but they can theoretically be anything. They are JSON encoded, and could be JSON structures, simple strings, numbers etc... The Content Type of the item (cType) will describe the properties, and thus how they ought to be deserialized.
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets representations
     *
     * @return \Bungie\Model\Content\ContentRepresentation[]|null
     */
    public function getRepresentations()
    {
        return $this->container['representations'];
    }

    /**
     * Sets representations
     *
     * @param \Bungie\Model\Content\ContentRepresentation[]|null $representations representations
     *
     * @return $this
     */
    public function setRepresentations($representations)
    {
        $this->container['representations'] = $representations;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags NOTE: Tags will always be lower case.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets commentSummary
     *
     * @return \Bungie\Model\Content\CommentSummary|null
     */
    public function getCommentSummary()
    {
        return $this->container['commentSummary'];
    }

    /**
     * Sets commentSummary
     *
     * @param \Bungie\Model\Content\CommentSummary|null $commentSummary commentSummary
     *
     * @return $this
     */
    public function setCommentSummary($commentSummary)
    {
        $this->container['commentSummary'] = $commentSummary;

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


