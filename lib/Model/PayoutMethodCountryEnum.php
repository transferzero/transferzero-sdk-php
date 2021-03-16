<?php
/**
 * PayoutMethodCountryEnum
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
 * PayoutMethodCountryEnum Class Doc Comment
 *
 * @category Class
 * @description The country for the pickup or mobile payout.  For XOF cash pickup, valid options are: - &#x60;CI&#x60;: Ivory Coast - &#x60;ML&#x60;: Mali - &#x60;SN&#x60;: Senegal  For XOF mobile payout, valid options are: - &#x60;CI&#x60;: Ivory Coast - &#x60;SN&#x60;: Senegal
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodCountryEnum
{
    /**
     * Possible values of this enum
     */
    const CI = 'CI';
    const ML = 'ML';
    const SN = 'SN';
    const NG = 'NG';
    const MA = 'MA';
    const TZ = 'TZ';
    const GH = 'GH';
    const UG = 'UG';
    const KE = 'KE';
    const NJ = 'NJ';
    const EU = 'EU';
    const GB = 'GB';
    const ZA = 'ZA';
    const EG = 'EG';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CI,
            self::ML,
            self::SN,
            self::NG,
            self::MA,
            self::TZ,
            self::GH,
            self::UG,
            self::KE,
            self::NJ,
            self::EU,
            self::GB,
            self::ZA,
            self::EG,
        ];
    }
}


