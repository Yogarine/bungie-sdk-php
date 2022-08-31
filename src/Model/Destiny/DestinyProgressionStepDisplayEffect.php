<?php
/**
 * DestinyProgressionStepDisplayEffect
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
 * OpenAPI spec version: 2.16.0
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
 * DestinyProgressionStepDisplayEffect Class Doc Comment
 *
 * @category Class
 * @description If progression is earned, this determines whether the progression shows visual effects on the character or its item - or neither.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProgressionStepDisplayEffect
{
    /**
     * Possible values of this enum
     */
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_NONE = 0;
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_CHARACTER = 1;
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_ITEM = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_NONE,
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_CHARACTER,
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_ITEM,
        ];
    }
}


