<?php
/**
 * PollResult
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
 * OpenAPI spec version: 2.4.0
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
 * PollResult Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PollResult implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Forum.PollResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
    protected static $openAPIFormats = [
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets answerText
     *
     * @return string|null
     */
    public function getAnswerText()
    {
        return $this->container['answerText'];
    }

    /**
     * Sets answerText
     *
     * @param string|null $answerText answerText
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
     * @return int|null
     */
    public function getAnswerSlot()
    {
        return $this->container['answerSlot'];
    }

    /**
     * Sets answerSlot
     *
     * @param int|null $answerSlot answerSlot
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
     * @return \DateTime|null
     */
    public function getLastVoteDate()
    {
        return $this->container['lastVoteDate'];
    }

    /**
     * Sets lastVoteDate
     *
     * @param \DateTime|null $lastVoteDate lastVoteDate
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
     * @return int|null
     */
    public function getVotes()
    {
        return $this->container['votes'];
    }

    /**
     * Sets votes
     *
     * @param int|null $votes votes
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
     * @return bool|null
     */
    public function getRequestingUserVoted()
    {
        return $this->container['requestingUserVoted'];
    }

    /**
     * Sets requestingUserVoted
     *
     * @param bool|null $requestingUserVoted requestingUserVoted
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


