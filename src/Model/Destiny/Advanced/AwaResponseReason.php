<?php
/**
 * AwaResponseReason
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
 * OpenAPI spec version: 2.3.6
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Advanced;
use \Bungie\ObjectSerializer;

/**
 * AwaResponseReason Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AwaResponseReason
{
    /**
     * Possible values of this enum
     */
    const AWA_RESPONSE_REASON_NONE = 0;
    const AWA_RESPONSE_REASON_ANSWERED = 1;
    const AWA_RESPONSE_REASON_TIMEDOUT = 2;
    const AWA_RESPONSE_REASON_REPLACED = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AWA_RESPONSE_REASON_NONE,
            self::AWA_RESPONSE_REASON_ANSWERED,
            self::AWA_RESPONSE_REASON_TIMEDOUT,
            self::AWA_RESPONSE_REASON_REPLACED,
        ];
    }
}


