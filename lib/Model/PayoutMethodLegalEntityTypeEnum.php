<?php
/**
 * PayoutMethodLegalEntityTypeEnum
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
 * PayoutMethodLegalEntityTypeEnum Class Doc Comment
 *
 * @category Class
 * @description The entity type of the recipient.  For ZAR personal payouts valid options are: - &#x60;person&#x60;: Person  For ZAR business payouts valid options are: - &#x60;sole_proprietorship&#x60;: Sole Proprietorship - &#x60;privately_owned_company&#x60;: Privately Owned Company (Limited Company) - &#x60;publicly_owned_company&#x60;: Publicly Owned Company (PLC) - &#x60;government_owned_entity&#x60;: Government Owned Entity Trusts - &#x60;partnership&#x60;: Partnership - &#x60;go&#x60;: GO (Majority Owned Subsidiary of State-Owned Company) - &#x60;financial_institution&#x60;: Financial Institution
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodLegalEntityTypeEnum
{
    /**
     * Possible values of this enum
     */
    const PERSON = 'person';
    const SOLE_PROPRIETORSHIP = 'sole_proprietorship';
    const PRIVATELY_OWNED_COMPANY = 'privately_owned_company';
    const PUBLICLY_OWNED_COMPANY = 'publicly_owned_company';
    const GOVERNMENT_OWNED_ENTITY = 'government_owned_entity';
    const PARTNERSHIP = 'partnership';
    const GO = 'go';
    const FINANCIAL_INSTITUTION = 'financial_institution';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERSON,
            self::SOLE_PROPRIETORSHIP,
            self::PRIVATELY_OWNED_COMPANY,
            self::PUBLICLY_OWNED_COMPANY,
            self::GOVERNMENT_OWNED_ENTITY,
            self::PARTNERSHIP,
            self::GO,
            self::FINANCIAL_INSTITUTION,
        ];
    }
}


