<?php
/**
 * PayoutMethodCashProviderEnum
 *
 * PHP version 5
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TransferZero API
 *
 * Reference documentation for the TransferZero API V1
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Model;
use \TransferZero\ObjectSerializer;

/**
 * PayoutMethodCashProviderEnum Class Doc Comment
 *
 * @category Class
 * @description The cash provider for the pickup: For XOF valid options are: - &#x60;wari&#x60;: Wari - &#x60;wizall&#x60;: Wizall
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodCashProviderEnum
{
    /**
     * Possible values of this enum
     */
    const WARI = 'wari';
    const WIZALL = 'wizall';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WARI,
            self::WIZALL,
        ];
    }
}


