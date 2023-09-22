<?php
/**
 * BiasDtoStrengthDto
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
 * The version of the OpenAPI document: 0.0
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
 * BiasDtoStrengthDto Class Doc Comment
 *
 * @category Class
 * @description The amount the bias will affect the search results.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BiasDtoStrengthDto
{
    /**
     * Possible values of this enum
     */
    public const ABSOLUTE_INCREASE = 'ABSOLUTE_INCREASE';

    public const STRONG_INCREASE = 'STRONG_INCREASE';

    public const MEDIUM_INCREASE = 'MEDIUM_INCREASE';

    public const WEAK_INCREASE = 'WEAK_INCREASE';

    public const LEAVE_UNCHANGED = 'LEAVE_UNCHANGED';

    public const WEAK_DECREASE = 'WEAK_DECREASE';

    public const MEDIUM_DECREASE = 'MEDIUM_DECREASE';

    public const STRONG_DECREASE = 'STRONG_DECREASE';

    public const ABSOLUTE_DECREASE = 'ABSOLUTE_DECREASE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ABSOLUTE_INCREASE,
            self::STRONG_INCREASE,
            self::MEDIUM_INCREASE,
            self::WEAK_INCREASE,
            self::LEAVE_UNCHANGED,
            self::WEAK_DECREASE,
            self::MEDIUM_DECREASE,
            self::STRONG_DECREASE,
            self::ABSOLUTE_DECREASE
        ];
    }
}

