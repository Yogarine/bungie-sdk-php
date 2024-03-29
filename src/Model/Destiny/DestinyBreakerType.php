<?php
/**
 * DestinyBreakerType
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * DestinyBreakerType Class Doc Comment
 *
 * @category Class
 * @description A plug can optionally have a \&quot;Breaker Type\&quot;: a special ability that can affect units in unique ways. Activating this plug can grant one of these types.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyBreakerType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_BREAKER_TYPE_NONE = 0;
    const DESTINY_BREAKER_TYPE_SHIELDPIERCING = 1;
    const DESTINY_BREAKER_TYPE_DISRUPTION = 2;
    const DESTINY_BREAKER_TYPE_STAGGER = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_BREAKER_TYPE_NONE,
            self::DESTINY_BREAKER_TYPE_SHIELDPIERCING,
            self::DESTINY_BREAKER_TYPE_DISRUPTION,
            self::DESTINY_BREAKER_TYPE_STAGGER,
        ];
    }
}


