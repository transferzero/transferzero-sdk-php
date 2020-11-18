<?php
/**
 * PayoutMethodDetailsXOFCashTest
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
 * PayoutMethodDetailsXOFCashTest Class Doc Comment
 *
 * @category    Class
 * @description &#x60;&#x60;&#x60;JSON \&quot;details\&quot;: {   \&quot;first_name\&quot;: \&quot;First\&quot;,   \&quot;last_name\&quot;: \&quot;Last\&quot;,   \&quot;phone_number\&quot;: \&quot;774044436\&quot;, # local or international Senegalese format   \&quot;identity_card_id\&quot;: \&quot;2231324232\&quot;, # optional   \&quot;identity_card_type\&quot;: \&quot;PP\&quot;, # optional   \&quot;cash_provider\&quot;: \&quot;wizall\&quot; # optional } &#x60;&#x60;&#x60;  Please note when sending XOF::Cash payments you should subscribe to the recipient.pending webhook, as that will broadcast the payment reference ID the customer need to use to obtain the funds. Example webhook response excerpt -  &#x60;&#x60;&#x60;JSON {   (...)   \&quot;state\&quot;:\&quot;pending\&quot;,   \&quot;metadata\&quot;: {     \&quot;payment_reference\&quot;:\&quot;9M5GJRJUBCY\&quot;   },   (...) } &#x60;&#x60;&#x60;
 * @package     TransferZero
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PayoutMethodDetailsXOFCashTest extends TestCase
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
     * Test "PayoutMethodDetailsXOFCash"
     */
    public function testPayoutMethodDetailsXOFCash()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "identity_card_id"
     */
    public function testPropertyIdentityCardId()
    {
    }

    /**
     * Test attribute "identity_card_type"
     */
    public function testPropertyIdentityCardType()
    {
    }

    /**
     * Test attribute "phone_number"
     */
    public function testPropertyPhoneNumber()
    {
    }

    /**
     * Test attribute "cash_provider"
     */
    public function testPropertyCashProvider()
    {
    }
}
