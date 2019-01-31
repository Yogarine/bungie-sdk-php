<?php
/**
 * DestinyScope
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
 * OpenAPI spec version: 2.3.4
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * DestinyScope Class Doc Comment
 *
 * @category Class
 * @description There&#39;s a lot of places where we need to know scope on more than just a profile or character level. For everything else, there&#39;s this more generic sense of scope.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyScope
{
    /**
     * Possible values of this enum
     */
    const DESTINY_SCOPE_PROFILE = 0;
    const DESTINY_SCOPE_CHARACTER = 1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_SCOPE_PROFILE,
            self::DESTINY_SCOPE_CHARACTER,
        ];
    }
}


