<?php
/**
 * PeriodType
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

namespace Bungie\Model\Destiny\HistoricalStats\Definitions;
use \Bungie\ObjectSerializer;

/**
 * PeriodType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PeriodType
{
    /**
     * Possible values of this enum
     */
    const PERIOD_TYPE_NONE = 0;
    const PERIOD_TYPE_DAILY = 1;
    const PERIOD_TYPE_ALLTIME = 2;
    const PERIOD_TYPE_ACTIVITY = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERIOD_TYPE_NONE,
            self::PERIOD_TYPE_DAILY,
            self::PERIOD_TYPE_ALLTIME,
            self::PERIOD_TYPE_ACTIVITY,
        ];
    }
}


