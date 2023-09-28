<?php
/**
 * ZoneType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GroupBy Retail
 *
 * GroupBy Retail API
 *
 * The version of the OpenAPI document: 0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Groupby\RetailApiClient\Model;
use \Groupby\RetailApiClient\ObjectSerializer;

/**
 * ZoneType Class Doc Comment
 *
 * @category Class
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ZoneType
{
    /**
     * Possible values of this enum
     */
    public const QUERY = 'QUERY';

    public const CONTENT = 'CONTENT';

    public const RICH_CONTENT = 'RICH_CONTENT';

    public const EXPECT_QUERY = 'EXPECT_QUERY';

    public const GENERATED_CONTENT = 'GENERATED_CONTENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUERY,
            self::CONTENT,
            self::RICH_CONTENT,
            self::EXPECT_QUERY,
            self::GENERATED_CONTENT
        ];
    }
}


