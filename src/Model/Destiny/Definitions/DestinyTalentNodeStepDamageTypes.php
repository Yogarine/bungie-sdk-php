<?php
/**
 * DestinyTalentNodeStepDamageTypes
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
 * OpenAPI spec version: 2.3.3
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
 * DestinyTalentNodeStepDamageTypes Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeStepDamageTypes
{
    /**
     * Possible values of this enum
     */
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_NONE = 0;
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_KINETIC = 1;
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_ARC = 2;
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_SOLAR = 4;
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_VOID = 8;
    const DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_ALL = 15;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_NONE,
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_KINETIC,
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_ARC,
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_SOLAR,
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_VOID,
            self::DESTINY_TALENT_NODE_STEP_DAMAGE_TYPES_ALL,
        ];
    }
}


