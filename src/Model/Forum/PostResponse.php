<?php
/**
 * PostResponse
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

namespace Bungie\Model\Forum;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * PostResponse Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PostResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Forum.PostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lastReplyTimestamp' => '\DateTime',
        'isPinned' => 'bool',
        'urlMediaType' => 'int',
        'thumbnail' => 'string',
        'popularity' => 'int',
        'isActive' => 'bool',
        'isAnnouncement' => 'bool',
        'userRating' => 'int',
        'userHasRated' => 'bool',
        'userHasMutedPost' => 'bool',
        'latestReplyPostId' => 'int',
        'latestReplyAuthorId' => 'int',
        'ignoreStatus' => '\Bungie\Model\Ignores\IgnoreResponse',
        'locale' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'lastReplyTimestamp' => 'date-time',
        'isPinned' => null,
        'urlMediaType' => 'int32',
        'thumbnail' => null,
        'popularity' => 'int32',
        'isActive' => null,
        'isAnnouncement' => null,
        'userRating' => 'int32',
        'userHasRated' => null,
        'userHasMutedPost' => null,
        'latestReplyPostId' => 'int64',
        'latestReplyAuthorId' => 'int64',
        'ignoreStatus' => null,
        'locale' => null
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
        'lastReplyTimestamp' => 'lastReplyTimestamp',
        'isPinned' => 'IsPinned',
        'urlMediaType' => 'urlMediaType',
        'thumbnail' => 'thumbnail',
        'popularity' => 'popularity',
        'isActive' => 'isActive',
        'isAnnouncement' => 'isAnnouncement',
        'userRating' => 'userRating',
        'userHasRated' => 'userHasRated',
        'userHasMutedPost' => 'userHasMutedPost',
        'latestReplyPostId' => 'latestReplyPostId',
        'latestReplyAuthorId' => 'latestReplyAuthorId',
        'ignoreStatus' => 'ignoreStatus',
        'locale' => 'locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lastReplyTimestamp' => 'setLastReplyTimestamp',
        'isPinned' => 'setIsPinned',
        'urlMediaType' => 'setUrlMediaType',
        'thumbnail' => 'setThumbnail',
        'popularity' => 'setPopularity',
        'isActive' => 'setIsActive',
        'isAnnouncement' => 'setIsAnnouncement',
        'userRating' => 'setUserRating',
        'userHasRated' => 'setUserHasRated',
        'userHasMutedPost' => 'setUserHasMutedPost',
        'latestReplyPostId' => 'setLatestReplyPostId',
        'latestReplyAuthorId' => 'setLatestReplyAuthorId',
        'ignoreStatus' => 'setIgnoreStatus',
        'locale' => 'setLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lastReplyTimestamp' => 'getLastReplyTimestamp',
        'isPinned' => 'getIsPinned',
        'urlMediaType' => 'getUrlMediaType',
        'thumbnail' => 'getThumbnail',
        'popularity' => 'getPopularity',
        'isActive' => 'getIsActive',
        'isAnnouncement' => 'getIsAnnouncement',
        'userRating' => 'getUserRating',
        'userHasRated' => 'getUserHasRated',
        'userHasMutedPost' => 'getUserHasMutedPost',
        'latestReplyPostId' => 'getLatestReplyPostId',
        'latestReplyAuthorId' => 'getLatestReplyAuthorId',
        'ignoreStatus' => 'getIgnoreStatus',
        'locale' => 'getLocale'
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
        $this->container['lastReplyTimestamp'] = isset($data['lastReplyTimestamp']) ? $data['lastReplyTimestamp'] : null;
        $this->container['isPinned'] = isset($data['isPinned']) ? $data['isPinned'] : null;
        $this->container['urlMediaType'] = isset($data['urlMediaType']) ? $data['urlMediaType'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['popularity'] = isset($data['popularity']) ? $data['popularity'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['isAnnouncement'] = isset($data['isAnnouncement']) ? $data['isAnnouncement'] : null;
        $this->container['userRating'] = isset($data['userRating']) ? $data['userRating'] : null;
        $this->container['userHasRated'] = isset($data['userHasRated']) ? $data['userHasRated'] : null;
        $this->container['userHasMutedPost'] = isset($data['userHasMutedPost']) ? $data['userHasMutedPost'] : null;
        $this->container['latestReplyPostId'] = isset($data['latestReplyPostId']) ? $data['latestReplyPostId'] : null;
        $this->container['latestReplyAuthorId'] = isset($data['latestReplyAuthorId']) ? $data['latestReplyAuthorId'] : null;
        $this->container['ignoreStatus'] = isset($data['ignoreStatus']) ? $data['ignoreStatus'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
     * Gets lastReplyTimestamp
     *
     * @return \DateTime|null
     */
    public function getLastReplyTimestamp()
    {
        return $this->container['lastReplyTimestamp'];
    }

    /**
     * Sets lastReplyTimestamp
     *
     * @param \DateTime|null $lastReplyTimestamp lastReplyTimestamp
     *
     * @return $this
     */
    public function setLastReplyTimestamp($lastReplyTimestamp)
    {
        $this->container['lastReplyTimestamp'] = $lastReplyTimestamp;

        return $this;
    }

    /**
     * Gets isPinned
     *
     * @return bool|null
     */
    public function getIsPinned()
    {
        return $this->container['isPinned'];
    }

    /**
     * Sets isPinned
     *
     * @param bool|null $isPinned isPinned
     *
     * @return $this
     */
    public function setIsPinned($isPinned)
    {
        $this->container['isPinned'] = $isPinned;

        return $this;
    }

    /**
     * Gets urlMediaType
     *
     * @return int|null
     */
    public function getUrlMediaType()
    {
        return $this->container['urlMediaType'];
    }

    /**
     * Sets urlMediaType
     *
     * @param int|null $urlMediaType urlMediaType
     *
     * @return $this
     */
    public function setUrlMediaType($urlMediaType)
    {
        $this->container['urlMediaType'] = $urlMediaType;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string|null $thumbnail thumbnail
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets popularity
     *
     * @return int|null
     */
    public function getPopularity()
    {
        return $this->container['popularity'];
    }

    /**
     * Sets popularity
     *
     * @param int|null $popularity popularity
     *
     * @return $this
     */
    public function setPopularity($popularity)
    {
        $this->container['popularity'] = $popularity;

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
     * @param bool|null $isActive isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets isAnnouncement
     *
     * @return bool|null
     */
    public function getIsAnnouncement()
    {
        return $this->container['isAnnouncement'];
    }

    /**
     * Sets isAnnouncement
     *
     * @param bool|null $isAnnouncement isAnnouncement
     *
     * @return $this
     */
    public function setIsAnnouncement($isAnnouncement)
    {
        $this->container['isAnnouncement'] = $isAnnouncement;

        return $this;
    }

    /**
     * Gets userRating
     *
     * @return int|null
     */
    public function getUserRating()
    {
        return $this->container['userRating'];
    }

    /**
     * Sets userRating
     *
     * @param int|null $userRating userRating
     *
     * @return $this
     */
    public function setUserRating($userRating)
    {
        $this->container['userRating'] = $userRating;

        return $this;
    }

    /**
     * Gets userHasRated
     *
     * @return bool|null
     */
    public function getUserHasRated()
    {
        return $this->container['userHasRated'];
    }

    /**
     * Sets userHasRated
     *
     * @param bool|null $userHasRated userHasRated
     *
     * @return $this
     */
    public function setUserHasRated($userHasRated)
    {
        $this->container['userHasRated'] = $userHasRated;

        return $this;
    }

    /**
     * Gets userHasMutedPost
     *
     * @return bool|null
     */
    public function getUserHasMutedPost()
    {
        return $this->container['userHasMutedPost'];
    }

    /**
     * Sets userHasMutedPost
     *
     * @param bool|null $userHasMutedPost userHasMutedPost
     *
     * @return $this
     */
    public function setUserHasMutedPost($userHasMutedPost)
    {
        $this->container['userHasMutedPost'] = $userHasMutedPost;

        return $this;
    }

    /**
     * Gets latestReplyPostId
     *
     * @return int|null
     */
    public function getLatestReplyPostId()
    {
        return $this->container['latestReplyPostId'];
    }

    /**
     * Sets latestReplyPostId
     *
     * @param int|null $latestReplyPostId latestReplyPostId
     *
     * @return $this
     */
    public function setLatestReplyPostId($latestReplyPostId)
    {
        $this->container['latestReplyPostId'] = $latestReplyPostId;

        return $this;
    }

    /**
     * Gets latestReplyAuthorId
     *
     * @return int|null
     */
    public function getLatestReplyAuthorId()
    {
        return $this->container['latestReplyAuthorId'];
    }

    /**
     * Sets latestReplyAuthorId
     *
     * @param int|null $latestReplyAuthorId latestReplyAuthorId
     *
     * @return $this
     */
    public function setLatestReplyAuthorId($latestReplyAuthorId)
    {
        $this->container['latestReplyAuthorId'] = $latestReplyAuthorId;

        return $this;
    }

    /**
     * Gets ignoreStatus
     *
     * @return \Bungie\Model\Ignores\IgnoreResponse|null
     */
    public function getIgnoreStatus()
    {
        return $this->container['ignoreStatus'];
    }

    /**
     * Sets ignoreStatus
     *
     * @param \Bungie\Model\Ignores\IgnoreResponse|null $ignoreStatus ignoreStatus
     *
     * @return $this
     */
    public function setIgnoreStatus($ignoreStatus)
    {
        $this->container['ignoreStatus'] = $ignoreStatus;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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


