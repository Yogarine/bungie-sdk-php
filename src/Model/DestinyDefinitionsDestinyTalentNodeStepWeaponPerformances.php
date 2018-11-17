<?php
/**
 * DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model;
use \Bungie\ObjectSerializer;

/**
 * DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDefinitionsDestinyTalentNodeStepWeaponPerformances
{
    /**
     * Possible values of this enum
     */
    const NONE = 0;
    const RATEOFFIRE = 1;
    const DAMAGE = 2;
    const ACCURACY = 4;
    const RANGE = 8;
    const ZOOM = 16;
    const RECOIL = 32;
    const READY = 64;
    const RELOAD = 128;
    const HAIRTRIGGER = 256;
    const AMMOANDMAGAZINE = 512;
    const TRACKINGANDDETONATION = 1024;
    const SHOTGUNSPREAD = 2048;
    const CHARGETIME = 4096;
    const ALL = 8191;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::RATEOFFIRE,
            self::DAMAGE,
            self::ACCURACY,
            self::RANGE,
            self::ZOOM,
            self::RECOIL,
            self::READY,
            self::RELOAD,
            self::HAIRTRIGGER,
            self::AMMOANDMAGAZINE,
            self::TRACKINGANDDETONATION,
            self::SHOTGUNSPREAD,
            self::CHARGETIME,
            self::ALL,
        ];
    }
}


