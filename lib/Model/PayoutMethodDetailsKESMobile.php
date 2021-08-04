<?php
/**
 * PayoutMethodDetailsKESMobile
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
 * PayoutMethodDetailsKESMobile Class Doc Comment
 *
 * @category Class
 * @description &#x60;&#x60;&#x60;JSON   \&quot;details\&quot;: {     \&quot;first_name\&quot;: \&quot;First\&quot;,     \&quot;last_name\&quot;: \&quot;Last\&quot;,     \&quot;street\&quot;: \&quot;Main Street\&quot;,     \&quot;phone_number\&quot;: \&quot;+254997853134\&quot;,     \&quot;mobile_provider\&quot;: \&quot;mpesa\&quot;,     \&quot;transfer_reason_code\&quot;: \&quot;185\&quot;,     \&quot;identity_card_type\&quot;: \&quot;ID\&quot;,     \&quot;identity_card_id\&quot;: \&quot;AB12345678\&quot;   } &#x60;&#x60;&#x60;  See [KES Mobile](https://docs.transferzero.com/docs/payout-details/#kesmobile) documentation for transfer_reason_code lists
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetailsKESMobile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetailsKESMobile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'street' => 'string',
        'phone_number' => 'string',
        'mobile_provider' => '\TransferZero\Model\PayoutMethodMobileProviderEnum',
        'transfer_reason_code' => 'string',
        'identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'identity_card_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'street' => null,
        'phone_number' => null,
        'mobile_provider' => null,
        'transfer_reason_code' => null,
        'identity_card_type' => null,
        'identity_card_id' => null
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'street' => 'street',
        'phone_number' => 'phone_number',
        'mobile_provider' => 'mobile_provider',
        'transfer_reason_code' => 'transfer_reason_code',
        'identity_card_type' => 'identity_card_type',
        'identity_card_id' => 'identity_card_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'street' => 'setStreet',
        'phone_number' => 'setPhoneNumber',
        'mobile_provider' => 'setMobileProvider',
        'transfer_reason_code' => 'setTransferReasonCode',
        'identity_card_type' => 'setIdentityCardType',
        'identity_card_id' => 'setIdentityCardId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'street' => 'getStreet',
        'phone_number' => 'getPhoneNumber',
        'mobile_provider' => 'getMobileProvider',
        'transfer_reason_code' => 'getTransferReasonCode',
        'identity_card_type' => 'getIdentityCardType',
        'identity_card_id' => 'getIdentityCardId'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['mobile_provider'] = isset($data['mobile_provider']) ? $data['mobile_provider'] : null;
        $this->container['transfer_reason_code'] = isset($data['transfer_reason_code']) ? $data['transfer_reason_code'] : null;
        $this->container['identity_card_type'] = isset($data['identity_card_type']) ? $data['identity_card_type'] : null;
        $this->container['identity_card_id'] = isset($data['identity_card_id']) ? $data['identity_card_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['mobile_provider'] === null) {
            $invalidProperties[] = "'mobile_provider' can't be null";
        }
        if ($this->container['transfer_reason_code'] === null) {
            $invalidProperties[] = "'transfer_reason_code' can't be null";
        }
        if ($this->container['identity_card_type'] === null) {
            $invalidProperties[] = "'identity_card_type' can't be null";
        }
        if ($this->container['identity_card_id'] === null) {
            $invalidProperties[] = "'identity_card_id' can't be null";
        }
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number phone_number
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
     * @return \TransferZero\Model\PayoutMethodMobileProviderEnum
     */
    public function getMobileProvider()
    {
        return $this->container['mobile_provider'];
    }

    /**
     * Sets mobile_provider
     *
     * @param \TransferZero\Model\PayoutMethodMobileProviderEnum $mobile_provider mobile_provider
     *
     * @return $this
     */
    public function setMobileProvider($mobile_provider)
    {
        $this->container['mobile_provider'] = $mobile_provider;

        return $this;
    }

    /**
     * Gets transfer_reason_code
     *
     * @return string
     */
    public function getTransferReasonCode()
    {
        return $this->container['transfer_reason_code'];
    }

    /**
     * Sets transfer_reason_code
     *
     * @param string $transfer_reason_code transfer_reason_code
     *
     * @return $this
     */
    public function setTransferReasonCode($transfer_reason_code)
    {
        $this->container['transfer_reason_code'] = $transfer_reason_code;

        return $this;
    }

    /**
     * Gets identity_card_type
     *
     * @return \TransferZero\Model\PayoutMethodIdentityCardTypeEnum
     */
    public function getIdentityCardType()
    {
        return $this->container['identity_card_type'];
    }

    /**
     * Sets identity_card_type
     *
     * @param \TransferZero\Model\PayoutMethodIdentityCardTypeEnum $identity_card_type identity_card_type
     *
     * @return $this
     */
    public function setIdentityCardType($identity_card_type)
    {
        $this->container['identity_card_type'] = $identity_card_type;

        return $this;
    }

    /**
     * Gets identity_card_id
     *
     * @return string
     */
    public function getIdentityCardId()
    {
        return $this->container['identity_card_id'];
    }

    /**
     * Sets identity_card_id
     *
     * @param string $identity_card_id identity_card_id
     *
     * @return $this
     */
    public function setIdentityCardId($identity_card_id)
    {
        $this->container['identity_card_id'] = $identity_card_id;

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

