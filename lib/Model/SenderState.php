<?php
/**
 * SenderState
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
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Model;
use \TransferZero\ObjectSerializer;

/**
 * SenderState Class Doc Comment
 *
 * @category Class
 * @description The state of the sender. Can be one of the following:  - &#x60;incomplete&#x60;: When a sender has not submitted required details or documents (cannot transact) - &#x60;initial&#x60;: When a sender is created and has not been through any KYC checking (cannot transact) - &#x60;verified&#x60;: A sender has passed sanction list checks (cannot transact) - &#x60;approved&#x60;: The sender has passed both KYC and sanction checks (can transact) - &#x60;banned&#x60;: An admin has banned the sender (cannot transact) - &#x60;rejected&#x60;: The sender has failed sanction list checks (cannot transact) - &#x60;disabled&#x60;: A sender is put into this state as a result of a delete request via the API (cannot transact)
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SenderState
{
    /**
     * Possible values of this enum
     */
    const INCOMPLETE = 'incomplete';
    const INITIAL = 'initial';
    const VERIFIED = 'verified';
    const APPROVED = 'approved';
    const BANNED = 'banned';
    const REJECTED = 'rejected';
    const DISABLED = 'disabled';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCOMPLETE,
            self::INITIAL,
            self::VERIFIED,
            self::APPROVED,
            self::BANNED,
            self::REJECTED,
            self::DISABLED,
        ];
    }
}


