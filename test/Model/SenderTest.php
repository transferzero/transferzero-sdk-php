<?php
/**
 * SenderTest
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
 * Please update the test case below to test the model.
 */

namespace TransferZero;

use PHPUnit\Framework\TestCase;

/**
 * SenderTest Class Doc Comment
 *
 * @category    Class
 * @description This contains the details of the sender. The first time a specific sender is used the full details should be provided. Once a sender is created and is used, the next time you MUST only send the ID of the sender. This is so we can match the same sender across multiple transactions for KYC and audit purposes.  Personal Sender Example: &#x60;&#x60;&#x60;json {   // name   \&quot;first_name\&quot;: \&quot;Jane\&quot;,   \&quot;last_name\&quot;: \&quot;Doe\&quot;,    // address   \&quot;country\&quot;: \&quot;US\&quot;,   \&quot;city\&quot;: \&quot;New York\&quot;,   \&quot;street\&quot;: \&quot;20 W 34th St\&quot;,   \&quot;postal_code\&quot;: \&quot;10001\&quot;,   \&quot;address_description\&quot;: \&quot;\&quot;,    // DOB   \&quot;birth_date\&quot;: \&quot;1974-12-24\&quot;,    // Contact Details; You can usually use your company&#39;s contact details here   \&quot;phone_country\&quot;: \&quot;US\&quot;,   \&quot;phone_number\&quot;: \&quot;5555551234\&quot;,   \&quot;email\&quot;: \&quot;info@transferzero.com\&quot;,    // ID of the sender in your system   \&quot;external_id\&quot;: \&quot;Sender:US:234523\&quot;,    // these fields are mandatory, but you can usually leave them with the following default values:   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;metadata\&quot;: {} } &#x60;&#x60;&#x60;  Business Sender Example:  &#x60;&#x60;&#x60;json {   \&quot;type\&quot;: \&quot;business\&quot;,   \&quot;name\&quot;: \&quot;Company name\&quot;,    // Country of Incorporation   \&quot;country\&quot;: \&quot;US\&quot;,    // Trading address of the company   \&quot;trading_country\&quot;: \&quot;US\&quot;,   \&quot;city\&quot;: \&quot;New York\&quot;,   \&quot;street\&quot;: \&quot;20 W 34th St\&quot;,   \&quot;postal_code\&quot;: \&quot;10001\&quot;,   \&quot;address_description\&quot;: \&quot;\&quot;,    // Company Details   \&quot;legal_entity_type\&quot;: \&quot;privately_owned_company\&quot;,   \&quot;registration_date\&quot;: \&quot;2012-01-25\&quot;,   \&quot;registration_number\&quot;: \&quot;VAT1234567\&quot;,   \&quot;nature_of_business\&quot;: \&quot;retail_trade\&quot;,    // Contact Details   \&quot;phone_country\&quot;: \&quot;US\&quot;,   \&quot;phone_number\&quot;: \&quot;5555551234\&quot;,   \&quot;email\&quot;: \&quot;example@home.org\&quot;,    // ID of the sender in your system   \&quot;external_id\&quot;: \&quot;Sender:Business:US:234523\&quot;,    // these fields are mandatory, but you can usually leave them with the following default values:   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;metadata\&quot;: {} } &#x60;&#x60;&#x60;  [Sender in the API documentation](https://docs.transferzero.com/docs/transaction-flow/#sender)
 * @package     TransferZero
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class SenderTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Sender"
     */
    public function testSender()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "state"
     */
    public function testPropertyState()
    {
    }

    /**
     * Test attribute "country"
     */
    public function testPropertyCountry()
    {
    }

    /**
     * Test attribute "street"
     */
    public function testPropertyStreet()
    {
    }

    /**
     * Test attribute "postal_code"
     */
    public function testPropertyPostalCode()
    {
    }

    /**
     * Test attribute "city"
     */
    public function testPropertyCity()
    {
    }

    /**
     * Test attribute "phone_country"
     */
    public function testPropertyPhoneCountry()
    {
    }

    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "ip"
     */
    public function testPropertyIp()
    {
    }

    /**
     * Test attribute "address_description"
     */
    public function testPropertyAddressDescription()
    {
    }

    /**
     * Test attribute "identification_number"
     */
    public function testPropertyIdentificationNumber()
    {
    }

    /**
     * Test attribute "identification_type"
     */
    public function testPropertyIdentificationType()
    {
    }

    /**
     * Test attribute "lang"
     */
    public function testPropertyLang()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "middle_name"
     */
    public function testPropertyMiddleName()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "birth_date"
     */
    public function testPropertyBirthDate()
    {
    }

    /**
     * Test attribute "occupation"
     */
    public function testPropertyOccupation()
    {
    }

    /**
     * Test attribute "nationality"
     */
    public function testPropertyNationality()
    {
    }

    /**
     * Test attribute "legal_entity_type"
     */
    public function testPropertyLegalEntityType()
    {
    }

    /**
     * Test attribute "registration_date"
     */
    public function testPropertyRegistrationDate()
    {
    }

    /**
     * Test attribute "registration_number"
     */
    public function testPropertyRegistrationNumber()
    {
    }

    /**
     * Test attribute "nature_of_business"
     */
    public function testPropertyNatureOfBusiness()
    {
    }

    /**
     * Test attribute "source_of_funds"
     */
    public function testPropertySourceOfFunds()
    {
    }

    /**
     * Test attribute "custom_source_of_funds"
     */
    public function testPropertyCustomSourceOfFunds()
    {
    }

    /**
     * Test attribute "core_business_activity"
     */
    public function testPropertyCoreBusinessActivity()
    {
    }

    /**
     * Test attribute "purpose_of_opening_account"
     */
    public function testPropertyPurposeOfOpeningAccount()
    {
    }

    /**
     * Test attribute "office_phone"
     */
    public function testPropertyOfficePhone()
    {
    }

    /**
     * Test attribute "vat_registration_number"
     */
    public function testPropertyVatRegistrationNumber()
    {
    }

    /**
     * Test attribute "financial_regulator"
     */
    public function testPropertyFinancialRegulator()
    {
    }

    /**
     * Test attribute "regulatory_licence_number"
     */
    public function testPropertyRegulatoryLicenceNumber()
    {
    }

    /**
     * Test attribute "contact_person_email"
     */
    public function testPropertyContactPersonEmail()
    {
    }

    /**
     * Test attribute "trading_country"
     */
    public function testPropertyTradingCountry()
    {
    }

    /**
     * Test attribute "trading_address"
     */
    public function testPropertyTradingAddress()
    {
    }

    /**
     * Test attribute "trading_name"
     */
    public function testPropertyTradingName()
    {
    }

    /**
     * Test attribute "number_monthly_transactions"
     */
    public function testPropertyNumberMonthlyTransactions()
    {
    }

    /**
     * Test attribute "amount_monthly_transactions"
     */
    public function testPropertyAmountMonthlyTransactions()
    {
    }

    /**
     * Test attribute "documents"
     */
    public function testPropertyDocuments()
    {
    }

    /**
     * Test attribute "metadata"
     */
    public function testPropertyMetadata()
    {
    }

    /**
     * Test attribute "errors"
     */
    public function testPropertyErrors()
    {
    }

    /**
     * Test attribute "onboarding_status"
     */
    public function testPropertyOnboardingStatus()
    {
    }

    /**
     * Test attribute "politically_exposed_people"
     */
    public function testPropertyPoliticallyExposedPeople()
    {
    }

    /**
     * Test attribute "external_id"
     */
    public function testPropertyExternalId()
    {
    }

    /**
     * Test attribute "city_of_birth"
     */
    public function testPropertyCityOfBirth()
    {
    }

    /**
     * Test attribute "country_of_birth"
     */
    public function testPropertyCountryOfBirth()
    {
    }

    /**
     * Test attribute "gender"
     */
    public function testPropertyGender()
    {
    }

    /**
     * Test attribute "sales_lead_id"
     */
    public function testPropertySalesLeadId()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }
}
