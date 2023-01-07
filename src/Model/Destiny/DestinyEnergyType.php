<?php
/**
 * DestinyEnergyType
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
 * DestinyEnergyType Class Doc Comment
 *
 * @category Class
 * @description Represents the socket energy types for Armor 2.0, Ghosts 2.0, and Stasis subclasses.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyEnergyType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_ENERGY_TYPE_ANY = 0;
    const DESTINY_ENERGY_TYPE_ARC = 1;
    const DESTINY_ENERGY_TYPE_THERMAL = 2;
    const DESTINY_ENERGY_TYPE_VOID = 3;
    const DESTINY_ENERGY_TYPE_GHOST = 4;
    const DESTINY_ENERGY_TYPE_SUBCLASS = 5;
    const DESTINY_ENERGY_TYPE_STASIS = 6;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_ENERGY_TYPE_ANY,
            self::DESTINY_ENERGY_TYPE_ARC,
            self::DESTINY_ENERGY_TYPE_THERMAL,
            self::DESTINY_ENERGY_TYPE_VOID,
            self::DESTINY_ENERGY_TYPE_GHOST,
            self::DESTINY_ENERGY_TYPE_SUBCLASS,
            self::DESTINY_ENERGY_TYPE_STASIS,
        ];
    }
}

