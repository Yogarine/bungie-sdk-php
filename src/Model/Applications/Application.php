<?php
/**
 * Application
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

namespace Bungie\Model\Applications;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * Application Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Application implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Applications.Application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applicationType' => 'int',
        'applicationId' => 'int',
        'name' => 'string',
        'redirectUrl' => 'string',
        'link' => 'string',
        'scope' => 'int',
        'origin' => 'string',
        'status' => 'int',
        'creationDate' => '\DateTime',
        'statusChanged' => '\DateTime',
        'firstPublished' => '\DateTime',
        'team' => '\Bungie\Model\Applications\ApplicationDeveloper[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'applicationType' => 'int32',
        'applicationId' => 'int32',
        'name' => null,
        'redirectUrl' => null,
        'link' => null,
        'scope' => 'int64',
        'origin' => null,
        'status' => 'int32',
        'creationDate' => 'date-time',
        'statusChanged' => 'date-time',
        'firstPublished' => 'date-time',
        'team' => null
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
        'applicationType' => 'applicationType',
        'applicationId' => 'applicationId',
        'name' => 'name',
        'redirectUrl' => 'redirectUrl',
        'link' => 'link',
        'scope' => 'scope',
        'origin' => 'origin',
        'status' => 'status',
        'creationDate' => 'creationDate',
        'statusChanged' => 'statusChanged',
        'firstPublished' => 'firstPublished',
        'team' => 'team'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applicationType' => 'setApplicationType',
        'applicationId' => 'setApplicationId',
        'name' => 'setName',
        'redirectUrl' => 'setRedirectUrl',
        'link' => 'setLink',
        'scope' => 'setScope',
        'origin' => 'setOrigin',
        'status' => 'setStatus',
        'creationDate' => 'setCreationDate',
        'statusChanged' => 'setStatusChanged',
        'firstPublished' => 'setFirstPublished',
        'team' => 'setTeam'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applicationType' => 'getApplicationType',
        'applicationId' => 'getApplicationId',
        'name' => 'getName',
        'redirectUrl' => 'getRedirectUrl',
        'link' => 'getLink',
        'scope' => 'getScope',
        'origin' => 'getOrigin',
        'status' => 'getStatus',
        'creationDate' => 'getCreationDate',
        'statusChanged' => 'getStatusChanged',
        'firstPublished' => 'getFirstPublished',
        'team' => 'getTeam'
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
        $this->container['applicationType'] = isset($data['applicationType']) ? $data['applicationType'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['statusChanged'] = isset($data['statusChanged']) ? $data['statusChanged'] : null;
        $this->container['firstPublished'] = isset($data['firstPublished']) ? $data['firstPublished'] : null;
        $this->container['team'] = isset($data['team']) ? $data['team'] : null;
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
     * Gets applicationType
     *
     * @return int|null
     */
    public function getApplicationType()
    {
        return $this->container['applicationType'];
    }

    /**
     * Sets applicationType
     *
     * @param int|null $applicationType applicationType
     *
     * @return $this
     */
    public function setApplicationType($applicationType)
    {
        $this->container['applicationType'] = $applicationType;

        return $this;
    }

    /**
     * Gets applicationId
     *
     * @return int|null
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     *
     * @param int|null $applicationId Unique ID assigned to the application
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

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
     * @param string|null $name Name of the application
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets redirectUrl
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     *
     * @param string|null $redirectUrl URL used to pass the user's authorization code to the application
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;

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
     * @param string|null $link Link to website for the application where a user can learn more about the app.
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int|null $scope Permissions the application needs to work
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin Value of the Origin header sent in requests generated by this application.
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status Current status of the application.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param \DateTime|null $creationDate Date the application was first added to our database.
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets statusChanged
     *
     * @return \DateTime|null
     */
    public function getStatusChanged()
    {
        return $this->container['statusChanged'];
    }

    /**
     * Sets statusChanged
     *
     * @param \DateTime|null $statusChanged Date the application status last changed.
     *
     * @return $this
     */
    public function setStatusChanged($statusChanged)
    {
        $this->container['statusChanged'] = $statusChanged;

        return $this;
    }

    /**
     * Gets firstPublished
     *
     * @return \DateTime|null
     */
    public function getFirstPublished()
    {
        return $this->container['firstPublished'];
    }

    /**
     * Sets firstPublished
     *
     * @param \DateTime|null $firstPublished Date the first time the application status entered the 'Public' status.
     *
     * @return $this
     */
    public function setFirstPublished($firstPublished)
    {
        $this->container['firstPublished'] = $firstPublished;

        return $this;
    }

    /**
     * Gets team
     *
     * @return \Bungie\Model\Applications\ApplicationDeveloper[]|null
     */
    public function getTeam()
    {
        return $this->container['team'];
    }

    /**
     * Sets team
     *
     * @param \Bungie\Model\Applications\ApplicationDeveloper[]|null $team List of team members who manage this application on Bungie.net. Will always consist of at least the application owner.
     *
     * @return $this
     */
    public function setTeam($team)
    {
        $this->container['team'] = $team;

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


