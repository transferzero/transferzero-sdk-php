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
 * OpenAPI Generator version: 4.0.0-beta2
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
 * @description This contains the details of the sender. The first time a specific sender is used the full details should be provided. Once a sender is created and is used, the next time you MUST only send the ID of the sender. This is so we can match the same sender across multiple transactions for KYC and audit purposes.  Personal Sender Example: &#x60;&#x60;&#x60;json {   \&quot;country\&quot;: \&quot;UG\&quot;,   \&quot;phone_country\&quot;: \&quot;UG\&quot;,   \&quot;phone_number\&quot;: \&quot;752403639\&quot;,   \&quot;email\&quot;: \&quot;example@home.org\&quot;,   \&quot;first_name\&quot;: \&quot;Johnny\&quot;,   \&quot;last_name\&quot;: \&quot;English\&quot;,   \&quot;city\&quot;: \&quot;Kampala\&quot;,   \&quot;street\&quot;: \&quot;Unknown 17-3\&quot;,   \&quot;address_description\&quot;: \&quot;Description of address\&quot;,   \&quot;postal_code\&quot;: \&quot;798983\&quot;,   \&quot;birth_date\&quot;: \&quot;1900-12-31\&quot;,   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;external_id\&quot;: \&quot;806ec63a-a5a7-43cc-9d75-1ee74fbcc026\&quot;,   \&quot;metadata\&quot;: { } } &#x60;&#x60;&#x60;  Business Sender Example:  &#x60;&#x60;&#x60;json {   \&quot;type\&quot;: \&quot;business\&quot;,   \&quot;country\&quot;: \&quot;UG\&quot;,   \&quot;phone_country\&quot;: \&quot;UG\&quot;,   \&quot;phone_number\&quot;: \&quot;752403639\&quot;,   \&quot;email\&quot;: \&quot;example@home.org\&quot;,   \&quot;name\&quot;: \&quot;MyCompany\&quot;,   \&quot;city\&quot;: \&quot;Kampala\&quot;,   \&quot;street\&quot;: \&quot;Unknown 17-3\&quot;,   \&quot;postal_code\&quot;: \&quot;798983\&quot;,   \&quot;address_description\&quot;: \&quot;Description of address\&quot;,   \&quot;documents\&quot;: [ ],   \&quot;ip\&quot;: \&quot;127.0.0.1\&quot;,   \&quot;external_id\&quot;: \&quot;806ec63a-a5a7-43cc-9d75-1ee74fbcc026\&quot;,   \&quot;metadata\&quot;: { } } &#x60;&#x60;&#x60;  [Sender in the API documentation](https://github.com/transferzero/api-documentation/blob/master/transaction-flow.md#sender)
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
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "country"
     */
    public function testPropertyCountry()
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
     * Test attribute "onboarding_status"
     */
    public function testPropertyOnboardingStatus()
    {
    }

    /**
     * Test attribute "address"
     */
    public function testPropertyAddress()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "city"
     */
    public function testPropertyCity()
    {
    }

    /**
     * Test attribute "street"
     */
    public function testPropertyStreet()
    {
    }

    /**
     * Test attribute "address_description"
     */
    public function testPropertyAddressDescription()
    {
    }

    /**
     * Test attribute "postal_code"
     */
    public function testPropertyPostalCode()
    {
    }

    /**
     * Test attribute "birth_date"
     */
    public function testPropertyBirthDate()
    {
    }

    /**
     * Test attribute "ip"
     */
    public function testPropertyIp()
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
     * Test attribute "state"
     */
    public function testPropertyState()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "external_id"
     */
    public function testPropertyExternalId()
    {
    }

    /**
     * Test attribute "errors"
     */
    public function testPropertyErrors()
    {
    }
}
