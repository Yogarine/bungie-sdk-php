<?php
/**
 * DestinyMilestoneType
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

namespace Bungie\Model\Destiny\Definitions\Milestones;
use \Bungie\ObjectSerializer;

/**
 * DestinyMilestoneType Class Doc Comment
 *
 * @category Class
 * @description The type of milestone. Milestones can be Tutorials, one-time/triggered/non-repeating but not necessarily tutorials, or Repeating Milestones.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_MILESTONE_TYPE_UNKNOWN = 0;
    const DESTINY_MILESTONE_TYPE_TUTORIAL = 1;
    const DESTINY_MILESTONE_TYPE_ONETIME = 2;
    const DESTINY_MILESTONE_TYPE_WEEKLY = 3;
    const DESTINY_MILESTONE_TYPE_DAILY = 4;
    const DESTINY_MILESTONE_TYPE_SPECIAL = 5;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_MILESTONE_TYPE_UNKNOWN,
            self::DESTINY_MILESTONE_TYPE_TUTORIAL,
            self::DESTINY_MILESTONE_TYPE_ONETIME,
            self::DESTINY_MILESTONE_TYPE_WEEKLY,
            self::DESTINY_MILESTONE_TYPE_DAILY,
            self::DESTINY_MILESTONE_TYPE_SPECIAL,
        ];
    }
}


