<?php
/**
 * TrendingTrendingEntryCommunityCreation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * TrendingTrendingEntryCommunityCreation Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrendingTrendingEntryCommunityCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Trending.TrendingEntryCommunityCreation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'media' => 'string',
        'title' => 'string',
        'author' => 'string',
        'authorMembershipId' => 'int',
        'postId' => 'int',
        'body' => 'string',
        'upvotes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'media' => null,
        'title' => null,
        'author' => null,
        'authorMembershipId' => 'int64',
        'postId' => 'int64',
        'body' => null,
        'upvotes' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'media' => 'media',
        'title' => 'title',
        'author' => 'author',
        'authorMembershipId' => 'authorMembershipId',
        'postId' => 'postId',
        'body' => 'body',
        'upvotes' => 'upvotes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media' => 'setMedia',
        'title' => 'setTitle',
        'author' => 'setAuthor',
        'authorMembershipId' => 'setAuthorMembershipId',
        'postId' => 'setPostId',
        'body' => 'setBody',
        'upvotes' => 'setUpvotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media' => 'getMedia',
        'title' => 'getTitle',
        'author' => 'getAuthor',
        'authorMembershipId' => 'getAuthorMembershipId',
        'postId' => 'getPostId',
        'body' => 'getBody',
        'upvotes' => 'getUpvotes'
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
        return self::$swaggerModelName;
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
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['authorMembershipId'] = isset($data['authorMembershipId']) ? $data['authorMembershipId'] : null;
        $this->container['postId'] = isset($data['postId']) ? $data['postId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['upvotes'] = isset($data['upvotes']) ? $data['upvotes'] : null;
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

        return true;
    }


    /**
     * Gets media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param string $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string $author author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets authorMembershipId
     *
     * @return int
     */
    public function getAuthorMembershipId()
    {
        return $this->container['authorMembershipId'];
    }

    /**
     * Sets authorMembershipId
     *
     * @param int $authorMembershipId authorMembershipId
     *
     * @return $this
     */
    public function setAuthorMembershipId($authorMembershipId)
    {
        $this->container['authorMembershipId'] = $authorMembershipId;

        return $this;
    }

    /**
     * Gets postId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->container['postId'];
    }

    /**
     * Sets postId
     *
     * @param int $postId postId
     *
     * @return $this
     */
    public function setPostId($postId)
    {
        $this->container['postId'] = $postId;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets upvotes
     *
     * @return int
     */
    public function getUpvotes()
    {
        return $this->container['upvotes'];
    }

    /**
     * Sets upvotes
     *
     * @param int $upvotes upvotes
     *
     * @return $this
     */
    public function setUpvotes($upvotes)
    {
        $this->container['upvotes'] = $upvotes;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


