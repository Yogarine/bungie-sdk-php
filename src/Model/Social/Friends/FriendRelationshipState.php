<?php
/**
 * FriendRelationshipState
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

namespace Bungie\Model\Social\Friends;
use \Bungie\ObjectSerializer;

/**
 * FriendRelationshipState Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FriendRelationshipState
{
    /**
     * Possible values of this enum
     */
    const FRIEND_RELATIONSHIP_STATE_UNKNOWN = 0;
    const FRIEND_RELATIONSHIP_STATE_FRIEND = 1;
    const FRIEND_RELATIONSHIP_STATE_INCOMINGREQUEST = 2;
    const FRIEND_RELATIONSHIP_STATE_OUTGOINGREQUEST = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FRIEND_RELATIONSHIP_STATE_UNKNOWN,
            self::FRIEND_RELATIONSHIP_STATE_FRIEND,
            self::FRIEND_RELATIONSHIP_STATE_INCOMINGREQUEST,
            self::FRIEND_RELATIONSHIP_STATE_OUTGOINGREQUEST,
        ];
    }
}


