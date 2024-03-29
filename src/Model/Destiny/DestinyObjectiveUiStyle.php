<?php
/**
 * DestinyObjectiveUiStyle
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * DestinyObjectiveUiStyle Class Doc Comment
 *
 * @category Class
 * @description If the objective has a known UI label, this enumeration will represent it.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyObjectiveUiStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_OBJECTIVE_UI_STYLE_NONE = 0;
    const DESTINY_OBJECTIVE_UI_STYLE_HIGHLIGHTED = 1;
    const DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONLEVEL = 2;
    const DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONLEVELPROGRESS = 3;
    const DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONTIMESTAMP = 4;
    const DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGMEMENTOS = 5;
    const DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGMEMENTOTITLE = 6;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_OBJECTIVE_UI_STYLE_NONE,
            self::DESTINY_OBJECTIVE_UI_STYLE_HIGHLIGHTED,
            self::DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONLEVEL,
            self::DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONLEVELPROGRESS,
            self::DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGWEAPONTIMESTAMP,
            self::DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGMEMENTOS,
            self::DESTINY_OBJECTIVE_UI_STYLE_CRAFTINGMEMENTOTITLE,
        ];
    }
}


