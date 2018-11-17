<?php
/**
 * IgnoresIgnoreStatus
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

namespace Bungie\Model;
use \Bungie\ObjectSerializer;

/**
 * IgnoresIgnoreStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IgnoresIgnoreStatus
{
    /**
     * Possible values of this enum
     */
    const NOTIGNORED = 0;
    const IGNOREDUSER = 1;
    const IGNOREDGROUP = 2;
    const IGNOREDBYGROUP = 4;
    const IGNOREDPOST = 8;
    const IGNOREDTAG = 16;
    const IGNOREDGLOBAL = 32;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOTIGNORED,
            self::IGNOREDUSER,
            self::IGNOREDGROUP,
            self::IGNOREDBYGROUP,
            self::IGNOREDPOST,
            self::IGNOREDTAG,
            self::IGNOREDGLOBAL,
        ];
    }
}


