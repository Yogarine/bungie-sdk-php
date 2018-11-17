<?php
/**
 * ContentModelsContentPropertyDataTypeEnum
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
 * ContentModelsContentPropertyDataTypeEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentModelsContentPropertyDataTypeEnum
{
    /**
     * Possible values of this enum
     */
    const NONE = 0;
    const PLAINTEXT = 1;
    const HTML = 2;
    const DROPDOWN = 3;
    const LIST = 4;
    const JSON = 5;
    const CONTENT = 6;
    const REPRESENTATION = 7;
    const SET = 8;
    const FILE = 9;
    const FOLDERSET = 10;
    const DATE = 11;
    const MULTILINEPLAINTEXT = 12;
    const DESTINYCONTENT = 13;
    const COLOR = 14;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::PLAINTEXT,
            self::HTML,
            self::DROPDOWN,
            self::LIST,
            self::JSON,
            self::CONTENT,
            self::REPRESENTATION,
            self::SET,
            self::FILE,
            self::FOLDERSET,
            self::DATE,
            self::MULTILINEPLAINTEXT,
            self::DESTINYCONTENT,
            self::COLOR,
        ];
    }
}

