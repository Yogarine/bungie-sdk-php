<?php
/**
 * DestinyObjectiveGrantStyle
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
 * DestinyObjectiveGrantStyle Class Doc Comment
 *
 * @category Class
 * @description Some Objectives provide perks, generally as part of providing some kind of interesting modifier for a Challenge or Quest. This indicates when the Perk is granted.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyObjectiveGrantStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_OBJECTIVE_GRANT_STYLE_WHENINCOMPLETE = 0;
    const DESTINY_OBJECTIVE_GRANT_STYLE_WHENCOMPLETE = 1;
    const DESTINY_OBJECTIVE_GRANT_STYLE_ALWAYS = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_OBJECTIVE_GRANT_STYLE_WHENINCOMPLETE,
            self::DESTINY_OBJECTIVE_GRANT_STYLE_WHENCOMPLETE,
            self::DESTINY_OBJECTIVE_GRANT_STYLE_ALWAYS,
        ];
    }
}


