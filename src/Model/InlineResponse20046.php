<?php
/**
 * InlineResponse20046
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
 * OpenAPI spec version: 2.8.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * InlineResponse20046 Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse20046 implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_46';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response' => '\Bungie\Model\Destiny\Responses\DestinyItemChangeResponse',
        'errorCode' => 'int',
        'throttleSeconds' => 'int',
        'errorStatus' => 'string',
        'message' => 'string',
        'messageData' => 'map[string,string]',
        'detailedErrorTrace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'response' => null,
        'errorCode' => 'int32',
        'throttleSeconds' => 'int32',
        'errorStatus' => null,
        'message' => null,
        'messageData' => null,
        'detailedErrorTrace' => null
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
        'response' => 'Response',
        'errorCode' => 'ErrorCode',
        'throttleSeconds' => 'ThrottleSeconds',
        'errorStatus' => 'ErrorStatus',
        'message' => 'Message',
        'messageData' => 'MessageData',
        'detailedErrorTrace' => 'DetailedErrorTrace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'errorCode' => 'setErrorCode',
        'throttleSeconds' => 'setThrottleSeconds',
        'errorStatus' => 'setErrorStatus',
        'message' => 'setMessage',
        'messageData' => 'setMessageData',
        'detailedErrorTrace' => 'setDetailedErrorTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'errorCode' => 'getErrorCode',
        'throttleSeconds' => 'getThrottleSeconds',
        'errorStatus' => 'getErrorStatus',
        'message' => 'getMessage',
        'messageData' => 'getMessageData',
        'detailedErrorTrace' => 'getDetailedErrorTrace'
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
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['throttleSeconds'] = isset($data['throttleSeconds']) ? $data['throttleSeconds'] : null;
        $this->container['errorStatus'] = isset($data['errorStatus']) ? $data['errorStatus'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['messageData'] = isset($data['messageData']) ? $data['messageData'] : null;
        $this->container['detailedErrorTrace'] = isset($data['detailedErrorTrace']) ? $data['detailedErrorTrace'] : null;
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
     * Gets response
     *
     * @return \Bungie\Model\Destiny\Responses\DestinyItemChangeResponse|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \Bungie\Model\Destiny\Responses\DestinyItemChangeResponse|null $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param int|null $errorCode errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets throttleSeconds
     *
     * @return int|null
     */
    public function getThrottleSeconds()
    {
        return $this->container['throttleSeconds'];
    }

    /**
     * Sets throttleSeconds
     *
     * @param int|null $throttleSeconds throttleSeconds
     *
     * @return $this
     */
    public function setThrottleSeconds($throttleSeconds)
    {
        $this->container['throttleSeconds'] = $throttleSeconds;

        return $this;
    }

    /**
     * Gets errorStatus
     *
     * @return string|null
     */
    public function getErrorStatus()
    {
        return $this->container['errorStatus'];
    }

    /**
     * Sets errorStatus
     *
     * @param string|null $errorStatus errorStatus
     *
     * @return $this
     */
    public function setErrorStatus($errorStatus)
    {
        $this->container['errorStatus'] = $errorStatus;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets messageData
     *
     * @return map[string,string]|null
     */
    public function getMessageData()
    {
        return $this->container['messageData'];
    }

    /**
     * Sets messageData
     *
     * @param map[string,string]|null $messageData messageData
     *
     * @return $this
     */
    public function setMessageData($messageData)
    {
        $this->container['messageData'] = $messageData;

        return $this;
    }

    /**
     * Gets detailedErrorTrace
     *
     * @return string|null
     */
    public function getDetailedErrorTrace()
    {
        return $this->container['detailedErrorTrace'];
    }

    /**
     * Sets detailedErrorTrace
     *
     * @param string|null $detailedErrorTrace detailedErrorTrace
     *
     * @return $this
     */
    public function setDetailedErrorTrace($detailedErrorTrace)
    {
        $this->container['detailedErrorTrace'] = $detailedErrorTrace;

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


