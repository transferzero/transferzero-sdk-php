<?php
/**
 * PayinMethodUxFlow
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
 * PayinMethodUxFlow Class Doc Comment
 *
 * @category Class
 * @description Describes the collection experience that will be presented to the sender. Can be one of the following:  * &#x60;ussd_popup&#x60;: Payment prompt is pushed to the sender&#39;s phone. They can approve or decline. Supported for GHS::Mobile, UGX::Mobile * &#x60;bank_transfer&#x60;: For bank collections. Sender should send funds to the bank account details specified in out_details. Supported for EUR::Bank, GBP::Bank
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayinMethodUxFlow
{
    /**
     * Possible values of this enum
     */
    const USSD_POPUP = 'ussd_popup';
    const BANK_TRANSFER = 'bank_transfer';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USSD_POPUP,
            self::BANK_TRANSFER,
        ];
    }
}


