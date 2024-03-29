<?php
/**
 * NewsArticleRssItem
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
 * NewsArticleRssItem Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewsArticleRssItem implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content.NewsArticleRssItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'link' => 'string',
        'pubDate' => '\DateTime',
        'uniqueIdentifier' => 'string',
        'description' => 'string',
        'htmlContent' => 'string',
        'imagePath' => 'string',
        'optionalMobileImagePath' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'title' => null,
        'link' => null,
        'pubDate' => 'date-time',
        'uniqueIdentifier' => null,
        'description' => null,
        'htmlContent' => null,
        'imagePath' => null,
        'optionalMobileImagePath' => null
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
        'title' => 'Title',
        'link' => 'Link',
        'pubDate' => 'PubDate',
        'uniqueIdentifier' => 'UniqueIdentifier',
        'description' => 'Description',
        'htmlContent' => 'HtmlContent',
        'imagePath' => 'ImagePath',
        'optionalMobileImagePath' => 'OptionalMobileImagePath'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'link' => 'setLink',
        'pubDate' => 'setPubDate',
        'uniqueIdentifier' => 'setUniqueIdentifier',
        'description' => 'setDescription',
        'htmlContent' => 'setHtmlContent',
        'imagePath' => 'setImagePath',
        'optionalMobileImagePath' => 'setOptionalMobileImagePath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'link' => 'getLink',
        'pubDate' => 'getPubDate',
        'uniqueIdentifier' => 'getUniqueIdentifier',
        'description' => 'getDescription',
        'htmlContent' => 'getHtmlContent',
        'imagePath' => 'getImagePath',
        'optionalMobileImagePath' => 'getOptionalMobileImagePath'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['pubDate'] = isset($data['pubDate']) ? $data['pubDate'] : null;
        $this->container['uniqueIdentifier'] = isset($data['uniqueIdentifier']) ? $data['uniqueIdentifier'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['imagePath'] = isset($data['imagePath']) ? $data['imagePath'] : null;
        $this->container['optionalMobileImagePath'] = isset($data['optionalMobileImagePath']) ? $data['optionalMobileImagePath'] : null;
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets pubDate
     *
     * @return \DateTime|null
     */
    public function getPubDate()
    {
        return $this->container['pubDate'];
    }

    /**
     * Sets pubDate
     *
     * @param \DateTime|null $pubDate pubDate
     *
     * @return $this
     */
    public function setPubDate($pubDate)
    {
        $this->container['pubDate'] = $pubDate;

        return $this;
    }

    /**
     * Gets uniqueIdentifier
     *
     * @return string|null
     */
    public function getUniqueIdentifier()
    {
        return $this->container['uniqueIdentifier'];
    }

    /**
     * Sets uniqueIdentifier
     *
     * @param string|null $uniqueIdentifier uniqueIdentifier
     *
     * @return $this
     */
    public function setUniqueIdentifier($uniqueIdentifier)
    {
        $this->container['uniqueIdentifier'] = $uniqueIdentifier;

        return $this;
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
     * Gets htmlContent
     *
     * @return string|null
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }

    /**
     * Sets htmlContent
     *
     * @param string|null $htmlContent htmlContent
     *
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;

        return $this;
    }

    /**
     * Gets imagePath
     *
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->container['imagePath'];
    }

    /**
     * Sets imagePath
     *
     * @param string|null $imagePath imagePath
     *
     * @return $this
     */
    public function setImagePath($imagePath)
    {
        $this->container['imagePath'] = $imagePath;

        return $this;
    }

    /**
     * Gets optionalMobileImagePath
     *
     * @return string|null
     */
    public function getOptionalMobileImagePath()
    {
        return $this->container['optionalMobileImagePath'];
    }

    /**
     * Sets optionalMobileImagePath
     *
     * @param string|null $optionalMobileImagePath optionalMobileImagePath
     *
     * @return $this
     */
    public function setOptionalMobileImagePath($optionalMobileImagePath)
    {
        $this->container['optionalMobileImagePath'] = $optionalMobileImagePath;

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


