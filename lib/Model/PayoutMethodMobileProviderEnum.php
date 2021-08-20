<?php
/**
 * PayoutMethodMobileProviderEnum
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
 * PayoutMethodMobileProviderEnum Class Doc Comment
 *
 * @category Class
 * @description The mobile provider of the recipient:  For XOF (Senegal) valid options are: - &#x60;orange&#x60;: Orange - &#x60;tigo&#x60;: Tigo  For XOF (Ivory Coast) valid options are: - &#x60;orange&#x60;: Orange - &#x60;moov&#x60;: Moov - &#x60;mtn&#x60;: MTN  For GHS valid options are: - &#x60;mtn&#x60;: MTN - &#x60;airtel&#x60;: Airtel - &#x60;tigo&#x60;: Tigo - &#x60;vodafone&#x60;: Vodafone  For KES valid options are: - &#x60;mpesa&#x60;: MPESA  For UGX valid options are: - &#x60;africell&#x60;: Africell - &#x60;airtel&#x60;: Airtel - &#x60;mtn&#x60;: MTN - &#x60;telecom&#x60;: Telecom
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodMobileProviderEnum
{
    /**
     * Possible values of this enum
     */
    const ORANGE = 'orange';
    const TIGO = 'tigo';
    const MOOV = 'moov';
    const MTN = 'mtn';
    const AIRTEL = 'airtel';
    const VODAFONE = 'vodafone';
    const MPESA = 'mpesa';
    const AFRICELL = 'africell';
    const TELECOM = 'telecom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORANGE,
            self::TIGO,
            self::MOOV,
            self::MTN,
            self::AIRTEL,
            self::VODAFONE,
            self::MPESA,
            self::AFRICELL,
            self::TELECOM,
        ];
    }
}


