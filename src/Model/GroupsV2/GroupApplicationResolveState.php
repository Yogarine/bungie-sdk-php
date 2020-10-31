<?php
/**
 * GroupApplicationResolveState
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

namespace Bungie\Model\GroupsV2;
use \Bungie\ObjectSerializer;

/**
 * GroupApplicationResolveState Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupApplicationResolveState
{
    /**
     * Possible values of this enum
     */
    const GROUP_APPLICATION_RESOLVE_STATE_UNRESOLVED = 0;
    const GROUP_APPLICATION_RESOLVE_STATE_ACCEPTED = 1;
    const GROUP_APPLICATION_RESOLVE_STATE_DENIED = 2;
    const GROUP_APPLICATION_RESOLVE_STATE_RESCINDED = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUP_APPLICATION_RESOLVE_STATE_UNRESOLVED,
            self::GROUP_APPLICATION_RESOLVE_STATE_ACCEPTED,
            self::GROUP_APPLICATION_RESOLVE_STATE_DENIED,
            self::GROUP_APPLICATION_RESOLVE_STATE_RESCINDED,
        ];
    }
}


