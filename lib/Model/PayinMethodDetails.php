<?php
/**
 * PayinMethodDetails
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

use \ArrayAccess;
use \TransferZero\ObjectSerializer;

/**
 * PayinMethodDetails Class Doc Comment
 *
 * @category Class
 * @description Fields needed by the payment processor. Depends on the chose payin type.  See the appropriate model details for more info:  - &#x60;NGN::Bank&#x60;: see [&#x60;PayinMethodDetailsNGNBank&#x60;](#model-PayinMethodDetailsNGNBank) - &#x60;GHS::Mobile&#x60;: see [&#x60;PayinMethodDetailsMobile&#x60;](#model-PayinMethodDetailsMobile) - &#x60;UGX::Mobile&#x60;: see [&#x60;PayinMethodDetailsMobile&#x60;](#model-PayinMethodDetailsMobile)  Note that some payin processors don&#39;t require additional input, these include &#x60;lhv&#x60; through &#x60;EUR::Bank&#x60; and &#x60;GBP::Bank&#x60;. Some providers like &#x60;providus&#x60; also have all of their fields set as optional, so you might not want to set any values. To use these providers please set this value to &#x60;{}&#x60; (an empty hash)
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayinMethodDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayinMethodDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_method' => 'string',
        'redirect_url' => 'string',
        'phone_number' => 'string',
        'mobile_provider' => '\TransferZero\Model\PayoutMethodMobileProviderEnum',
        'country' => '\TransferZero\Model\PayoutMethodCountryEnum',
        'otp' => 'string',
        'refund_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payment_method' => null,
        'redirect_url' => null,
        'phone_number' => null,
        'mobile_provider' => null,
        'country' => null,
        'otp' => null,
        'refund_address' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_method' => 'payment_method',
        'redirect_url' => 'redirect_url',
        'phone_number' => 'phone_number',
        'mobile_provider' => 'mobile_provider',
        'country' => 'country',
        'otp' => 'otp',
        'refund_address' => 'refund_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_method' => 'setPaymentMethod',
        'redirect_url' => 'setRedirectUrl',
        'phone_number' => 'setPhoneNumber',
        'mobile_provider' => 'setMobileProvider',
        'country' => 'setCountry',
        'otp' => 'setOtp',
        'refund_address' => 'setRefundAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_method' => 'getPaymentMethod',
        'redirect_url' => 'getRedirectUrl',
        'phone_number' => 'getPhoneNumber',
        'mobile_provider' => 'getMobileProvider',
        'country' => 'getCountry',
        'otp' => 'getOtp',
        'refund_address' => 'getRefundAddress'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['mobile_provider'] = isset($data['mobile_provider']) ? $data['mobile_provider'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['otp'] = isset($data['otp']) ? $data['otp'] : null;
        $this->container['refund_address'] = isset($data['refund_address']) ? $data['refund_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method The payment method which the sender will use to make the payments. Options are `bank`, `card` or you can leave empty to support both.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url This is where the sender should be redirected back when the payment has been finished
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number The phone number where the funds should be collected from
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets mobile_provider
     *
     * @return \TransferZero\Model\PayoutMethodMobileProviderEnum|null
     */
    public function getMobileProvider()
    {
        return $this->container['mobile_provider'];
    }

    /**
     * Sets mobile_provider
     *
     * @param \TransferZero\Model\PayoutMethodMobileProviderEnum|null $mobile_provider mobile_provider
     *
     * @return $this
     */
    public function setMobileProvider($mobile_provider)
    {
        $this->container['mobile_provider'] = $mobile_provider;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \TransferZero\Model\PayoutMethodCountryEnum|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \TransferZero\Model\PayoutMethodCountryEnum|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets otp
     *
     * @return string|null
     */
    public function getOtp()
    {
        return $this->container['otp'];
    }

    /**
     * Sets otp
     *
     * @param string|null $otp The OTP that the sender received in otp verified ussd popup ux flow.
     *
     * @return $this
     */
    public function setOtp($otp)
    {
        $this->container['otp'] = $otp;

        return $this;
    }

    /**
     * Gets refund_address
     *
     * @return string|null
     */
    public function getRefundAddress()
    {
        return $this->container['refund_address'];
    }

    /**
     * Sets refund_address
     *
     * @param string|null $refund_address Please make sure the refund_address is a valid BTC address belonging to the sender, as that is going to be used in case the transaction has to be refunded.
     *
     * @return $this
     */
    public function setRefundAddress($refund_address)
    {
        $this->container['refund_address'] = $refund_address;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


