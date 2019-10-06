<?php
/**
 * DestinyComponentType
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * DestinyComponentType Class Doc Comment
 *
 * @category Class
 * @description Represents the possible components that can be returned from Destiny \&quot;Get\&quot; calls such as GetProfile, GetCharacter, GetVendor etc...  When making one of these requests, you will pass one or more of these components as a comma separated list in the \&quot;?components&#x3D;\&quot; querystring parameter. For instance, if you want baseline Profile data, Character Data, and character progressions, you would pass \&quot;?components&#x3D;Profiles,Characters,CharacterProgressions\&quot; You may use either the numerical or string values.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyComponentType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_COMPONENT_TYPE_NONE = 0;
    const DESTINY_COMPONENT_TYPE_PROFILES = 100;
    const DESTINY_COMPONENT_TYPE_VENDORRECEIPTS = 101;
    const DESTINY_COMPONENT_TYPE_PROFILEINVENTORIES = 102;
    const DESTINY_COMPONENT_TYPE_PROFILECURRENCIES = 103;
    const DESTINY_COMPONENT_TYPE_PROFILEPROGRESSION = 104;
    const DESTINY_COMPONENT_TYPE_PLATFORMSILVER = 105;
    const DESTINY_COMPONENT_TYPE_CHARACTERS = 200;
    const DESTINY_COMPONENT_TYPE_CHARACTERINVENTORIES = 201;
    const DESTINY_COMPONENT_TYPE_CHARACTERPROGRESSIONS = 202;
    const DESTINY_COMPONENT_TYPE_CHARACTERRENDERDATA = 203;
    const DESTINY_COMPONENT_TYPE_CHARACTERACTIVITIES = 204;
    const DESTINY_COMPONENT_TYPE_CHARACTEREQUIPMENT = 205;
    const DESTINY_COMPONENT_TYPE_ITEMINSTANCES = 300;
    const DESTINY_COMPONENT_TYPE_ITEMOBJECTIVES = 301;
    const DESTINY_COMPONENT_TYPE_ITEMPERKS = 302;
    const DESTINY_COMPONENT_TYPE_ITEMRENDERDATA = 303;
    const DESTINY_COMPONENT_TYPE_ITEMSTATS = 304;
    const DESTINY_COMPONENT_TYPE_ITEMSOCKETS = 305;
    const DESTINY_COMPONENT_TYPE_ITEMTALENTGRIDS = 306;
    const DESTINY_COMPONENT_TYPE_ITEMCOMMONDATA = 307;
    const DESTINY_COMPONENT_TYPE_ITEMPLUGSTATES = 308;
    const DESTINY_COMPONENT_TYPE_VENDORS = 400;
    const DESTINY_COMPONENT_TYPE_VENDORCATEGORIES = 401;
    const DESTINY_COMPONENT_TYPE_VENDORSALES = 402;
    const DESTINY_COMPONENT_TYPE_KIOSKS = 500;
    const DESTINY_COMPONENT_TYPE_CURRENCYLOOKUPS = 600;
    const DESTINY_COMPONENT_TYPE_PRESENTATIONNODES = 700;
    const DESTINY_COMPONENT_TYPE_COLLECTIBLES = 800;
    const DESTINY_COMPONENT_TYPE_RECORDS = 900;
    const DESTINY_COMPONENT_TYPE_TRANSITORY = 1000;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_COMPONENT_TYPE_NONE,
            self::DESTINY_COMPONENT_TYPE_PROFILES,
            self::DESTINY_COMPONENT_TYPE_VENDORRECEIPTS,
            self::DESTINY_COMPONENT_TYPE_PROFILEINVENTORIES,
            self::DESTINY_COMPONENT_TYPE_PROFILECURRENCIES,
            self::DESTINY_COMPONENT_TYPE_PROFILEPROGRESSION,
            self::DESTINY_COMPONENT_TYPE_PLATFORMSILVER,
            self::DESTINY_COMPONENT_TYPE_CHARACTERS,
            self::DESTINY_COMPONENT_TYPE_CHARACTERINVENTORIES,
            self::DESTINY_COMPONENT_TYPE_CHARACTERPROGRESSIONS,
            self::DESTINY_COMPONENT_TYPE_CHARACTERRENDERDATA,
            self::DESTINY_COMPONENT_TYPE_CHARACTERACTIVITIES,
            self::DESTINY_COMPONENT_TYPE_CHARACTEREQUIPMENT,
            self::DESTINY_COMPONENT_TYPE_ITEMINSTANCES,
            self::DESTINY_COMPONENT_TYPE_ITEMOBJECTIVES,
            self::DESTINY_COMPONENT_TYPE_ITEMPERKS,
            self::DESTINY_COMPONENT_TYPE_ITEMRENDERDATA,
            self::DESTINY_COMPONENT_TYPE_ITEMSTATS,
            self::DESTINY_COMPONENT_TYPE_ITEMSOCKETS,
            self::DESTINY_COMPONENT_TYPE_ITEMTALENTGRIDS,
            self::DESTINY_COMPONENT_TYPE_ITEMCOMMONDATA,
            self::DESTINY_COMPONENT_TYPE_ITEMPLUGSTATES,
            self::DESTINY_COMPONENT_TYPE_VENDORS,
            self::DESTINY_COMPONENT_TYPE_VENDORCATEGORIES,
            self::DESTINY_COMPONENT_TYPE_VENDORSALES,
            self::DESTINY_COMPONENT_TYPE_KIOSKS,
            self::DESTINY_COMPONENT_TYPE_CURRENCYLOOKUPS,
            self::DESTINY_COMPONENT_TYPE_PRESENTATIONNODES,
            self::DESTINY_COMPONENT_TYPE_COLLECTIBLES,
            self::DESTINY_COMPONENT_TYPE_RECORDS,
            self::DESTINY_COMPONENT_TYPE_TRANSITORY,
        ];
    }
}


