<?php
/**
 * DestinyTalentNodeStepGuardianAttributes
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

namespace Bungie\Model\Destiny\Definitions;
use \Bungie\ObjectSerializer;

/**
 * DestinyTalentNodeStepGuardianAttributes Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeStepGuardianAttributes
{
    /**
     * Possible values of this enum
     */
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_NONE = 0;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_STATS = 1;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_SHIELDS = 2;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_HEALTH = 4;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_REVIVE = 8;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_AIMUNDERFIRE = 16;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_RADAR = 32;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_INVISIBILITY = 64;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_REPUTATIONS = 128;
    const DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_ALL = 255;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_NONE,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_STATS,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_SHIELDS,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_HEALTH,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_REVIVE,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_AIMUNDERFIRE,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_RADAR,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_INVISIBILITY,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_REPUTATIONS,
            self::DESTINY_TALENT_NODE_STEP_GUARDIAN_ATTRIBUTES_ALL,
        ];
    }
}


