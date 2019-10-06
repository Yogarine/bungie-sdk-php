<?php
/**
 * ContentPropertyDataTypeEnum
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

namespace Bungie\Model\Content\Models;
use \Bungie\ObjectSerializer;

/**
 * ContentPropertyDataTypeEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentPropertyDataTypeEnum
{
    /**
     * Possible values of this enum
     */
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_NONE = 0;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_PLAINTEXT = 1;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_HTML = 2;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_DROPDOWN = 3;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_LIST = 4;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_JSON = 5;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_CONTENT = 6;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_REPRESENTATION = 7;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_SET = 8;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_FILE = 9;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_FOLDERSET = 10;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_DATE = 11;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_MULTILINEPLAINTEXT = 12;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_DESTINYCONTENT = 13;
    const CONTENT_PROPERTY_DATA_TYPE_ENUM_COLOR = 14;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_NONE,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_PLAINTEXT,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_HTML,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_DROPDOWN,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_LIST,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_JSON,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_CONTENT,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_REPRESENTATION,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_SET,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_FILE,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_FOLDERSET,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_DATE,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_MULTILINEPLAINTEXT,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_DESTINYCONTENT,
            self::CONTENT_PROPERTY_DATA_TYPE_ENUM_COLOR,
        ];
    }
}


