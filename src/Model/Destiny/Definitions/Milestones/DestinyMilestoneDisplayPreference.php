<?php
/**
 * DestinyMilestoneDisplayPreference
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
 * DestinyMilestoneDisplayPreference Class Doc Comment
 *
 * @category Class
 * @description A hint for the UI as to what display information ought to be shown. Defaults to showing the static MilestoneDefinition&#39;s display properties.   If for some reason the indicated property is not populated, fall back to the MilestoneDefinition.displayProperties.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneDisplayPreference
{
    /**
     * Possible values of this enum
     */
    const DESTINY_MILESTONE_DISPLAY_PREFERENCE_MILESTONEDEFINITION = 0;
    const DESTINY_MILESTONE_DISPLAY_PREFERENCE_CURRENTQUESTSTEPS = 1;
    const DESTINY_MILESTONE_DISPLAY_PREFERENCE_CURRENTACTIVITYCHALLENGES = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_MILESTONE_DISPLAY_PREFERENCE_MILESTONEDEFINITION,
            self::DESTINY_MILESTONE_DISPLAY_PREFERENCE_CURRENTQUESTSTEPS,
            self::DESTINY_MILESTONE_DISPLAY_PREFERENCE_CURRENTACTIVITYCHALLENGES,
        ];
    }
}


