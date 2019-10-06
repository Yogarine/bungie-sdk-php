<?php
/**
 * RuntimeGroupMemberType
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
 * OpenAPI spec version: 2.4.0
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
 * RuntimeGroupMemberType Class Doc Comment
 *
 * @category Class
 * @description The member levels used by all V2 Groups API. Individual group types use their own mappings in their native storage (general uses BnetDbGroupMemberType and D2 clans use ClanMemberLevel), but they are all translated to this in the runtime api. These runtime values should NEVER be stored anywhere, so the values can be changed as necessary.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RuntimeGroupMemberType
{
    /**
     * Possible values of this enum
     */
    const RUNTIME_GROUP_MEMBER_TYPE_NONE = 0;
    const RUNTIME_GROUP_MEMBER_TYPE_BEGINNER = 1;
    const RUNTIME_GROUP_MEMBER_TYPE_MEMBER = 2;
    const RUNTIME_GROUP_MEMBER_TYPE_ADMIN = 3;
    const RUNTIME_GROUP_MEMBER_TYPE_ACTINGFOUNDER = 4;
    const RUNTIME_GROUP_MEMBER_TYPE_FOUNDER = 5;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RUNTIME_GROUP_MEMBER_TYPE_NONE,
            self::RUNTIME_GROUP_MEMBER_TYPE_BEGINNER,
            self::RUNTIME_GROUP_MEMBER_TYPE_MEMBER,
            self::RUNTIME_GROUP_MEMBER_TYPE_ADMIN,
            self::RUNTIME_GROUP_MEMBER_TYPE_ACTINGFOUNDER,
            self::RUNTIME_GROUP_MEMBER_TYPE_FOUNDER,
        ];
    }
}


