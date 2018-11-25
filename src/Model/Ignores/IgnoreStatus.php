<?php
/**
 * IgnoreStatus
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Ignores;
use \Bungie\ObjectSerializer;

/**
 * IgnoreStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IgnoreStatus
{
    /**
     * Possible values of this enum
     */
    const IGNORE_STATUS_NOTIGNORED = 0;
    const IGNORE_STATUS_IGNOREDUSER = 1;
    const IGNORE_STATUS_IGNOREDGROUP = 2;
    const IGNORE_STATUS_IGNOREDBYGROUP = 4;
    const IGNORE_STATUS_IGNOREDPOST = 8;
    const IGNORE_STATUS_IGNOREDTAG = 16;
    const IGNORE_STATUS_IGNOREDGLOBAL = 32;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IGNORE_STATUS_NOTIGNORED,
            self::IGNORE_STATUS_IGNOREDUSER,
            self::IGNORE_STATUS_IGNOREDGROUP,
            self::IGNORE_STATUS_IGNOREDBYGROUP,
            self::IGNORE_STATUS_IGNOREDPOST,
            self::IGNORE_STATUS_IGNOREDTAG,
            self::IGNORE_STATUS_IGNOREDGLOBAL,
        ];
    }
}

