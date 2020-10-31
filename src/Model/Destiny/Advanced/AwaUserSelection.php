<?php
/**
 * AwaUserSelection
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

namespace Bungie\Model\Destiny\Advanced;
use \Bungie\ObjectSerializer;

/**
 * AwaUserSelection Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AwaUserSelection
{
    /**
     * Possible values of this enum
     */
    const AWA_USER_SELECTION_NONE = 0;
    const AWA_USER_SELECTION_REJECTED = 1;
    const AWA_USER_SELECTION_APPROVED = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AWA_USER_SELECTION_NONE,
            self::AWA_USER_SELECTION_REJECTED,
            self::AWA_USER_SELECTION_APPROVED,
        ];
    }
}


