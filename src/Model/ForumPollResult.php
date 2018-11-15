<?php
/**
 * ForumPollResult
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
 * ForumPollResult Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ForumPollResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Forum.PollResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'answerText' => 'string',
        'answerSlot' => 'int',
        'lastVoteDate' => '\DateTime',
        'votes' => 'int',
        'requestingUserVoted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'answerText' => null,
        'answerSlot' => 'int32',
        'lastVoteDate' => 'date-time',
        'votes' => 'int32',
        'requestingUserVoted' => null
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
        'answerText' => 'answerText',
        'answerSlot' => 'answerSlot',
        'lastVoteDate' => 'lastVoteDate',
        'votes' => 'votes',
        'requestingUserVoted' => 'requestingUserVoted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'answerText' => 'setAnswerText',
        'answerSlot' => 'setAnswerSlot',
        'lastVoteDate' => 'setLastVoteDate',
        'votes' => 'setVotes',
        'requestingUserVoted' => 'setRequestingUserVoted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'answerText' => 'getAnswerText',
        'answerSlot' => 'getAnswerSlot',
        'lastVoteDate' => 'getLastVoteDate',
        'votes' => 'getVotes',
        'requestingUserVoted' => 'getRequestingUserVoted'
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
        $this->container['answerText'] = isset($data['answerText']) ? $data['answerText'] : null;
        $this->container['answerSlot'] = isset($data['answerSlot']) ? $data['answerSlot'] : null;
        $this->container['lastVoteDate'] = isset($data['lastVoteDate']) ? $data['lastVoteDate'] : null;
        $this->container['votes'] = isset($data['votes']) ? $data['votes'] : null;
        $this->container['requestingUserVoted'] = isset($data['requestingUserVoted']) ? $data['requestingUserVoted'] : null;
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
     * Gets answerText
     *
     * @return string
     */
    public function getAnswerText()
    {
        return $this->container['answerText'];
    }

    /**
     * Sets answerText
     *
     * @param string $answerText answerText
     *
     * @return $this
     */
    public function setAnswerText($answerText)
    {
        $this->container['answerText'] = $answerText;

        return $this;
    }

    /**
     * Gets answerSlot
     *
     * @return int
     */
    public function getAnswerSlot()
    {
        return $this->container['answerSlot'];
    }

    /**
     * Sets answerSlot
     *
     * @param int $answerSlot answerSlot
     *
     * @return $this
     */
    public function setAnswerSlot($answerSlot)
    {
        $this->container['answerSlot'] = $answerSlot;

        return $this;
    }

    /**
     * Gets lastVoteDate
     *
     * @return \DateTime
     */
    public function getLastVoteDate()
    {
        return $this->container['lastVoteDate'];
    }

    /**
     * Sets lastVoteDate
     *
     * @param \DateTime $lastVoteDate lastVoteDate
     *
     * @return $this
     */
    public function setLastVoteDate($lastVoteDate)
    {
        $this->container['lastVoteDate'] = $lastVoteDate;

        return $this;
    }

    /**
     * Gets votes
     *
     * @return int
     */
    public function getVotes()
    {
        return $this->container['votes'];
    }

    /**
     * Sets votes
     *
     * @param int $votes votes
     *
     * @return $this
     */
    public function setVotes($votes)
    {
        $this->container['votes'] = $votes;

        return $this;
    }

    /**
     * Gets requestingUserVoted
     *
     * @return bool
     */
    public function getRequestingUserVoted()
    {
        return $this->container['requestingUserVoted'];
    }

    /**
     * Sets requestingUserVoted
     *
     * @param bool $requestingUserVoted requestingUserVoted
     *
     * @return $this
     */
    public function setRequestingUserVoted($requestingUserVoted)
    {
        $this->container['requestingUserVoted'] = $requestingUserVoted;

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


