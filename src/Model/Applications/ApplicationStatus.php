<?php
/**
 * ApplicationStatus
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
use \Bungie\ObjectSerializer;

/**
 * ApplicationStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationStatus
{
    /**
     * Possible values of this enum
     */
    const APPLICATION_STATUS_NONE = 0;
    const APPLICATION_STATUS_PRIVATE = 1;
    const APPLICATION_STATUS_PUBLIC = 2;
    const APPLICATION_STATUS_DISABLED = 3;
    const APPLICATION_STATUS_BLOCKED = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLICATION_STATUS_NONE,
            self::APPLICATION_STATUS_PRIVATE,
            self::APPLICATION_STATUS_PUBLIC,
            self::APPLICATION_STATUS_DISABLED,
            self::APPLICATION_STATUS_BLOCKED,
        ];
    }
}


