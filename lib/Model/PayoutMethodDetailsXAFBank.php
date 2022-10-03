<?php
/**
 * PayoutMethodDetailsXAFBank
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
 * PayoutMethodDetailsXAFBank Class Doc Comment
 *
 * @category Class
 * @description &#x60;&#x60;&#x60;JSON \&quot;details\&quot;: {   \&quot;first_name\&quot;: \&quot;First\&quot;,   \&quot;last_name\&quot;: \&quot;Last\&quot;,   \&quot;iban\&quot;: \&quot;CM2110033052090901100045910\&quot;, # IBAN format   \&quot;bank_account\&quot;: \&quot;09011000459\&quot;,   \&quot;bank_name\&quot;: \&quot;United Bank for Africa - Cameroon\&quot;,   \&quot;bank_country\&quot;: \&quot;CM\&quot;, # ISO country code for Cameroon   \&quot;bank_code\&quot;: \&quot;10033\&quot;,   \&quot;sort_code\&quot;: \&quot;10\&quot;,   \&quot;transfer_reason\&quot;: \&quot;personal_account\&quot; } &#x60;&#x60;&#x60;  See [XAF Bank](https://docs.transferzero.com/docs/payout-details/#xafbank) documentation for the bank_code and transfer_reason lists
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetailsXAFBank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetailsXAFBank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'iban' => 'string',
        'bank_account' => 'string',
        'bank_name' => 'string',
        'bank_country' => 'string',
        'bank_code' => 'string',
        'sort_code' => 'string',
        'transfer_reason' => '\TransferZero\Model\PayoutMethodTransferReasonEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'iban' => null,
        'bank_account' => null,
        'bank_name' => null,
        'bank_country' => null,
        'bank_code' => null,
        'sort_code' => null,
        'transfer_reason' => null
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
        'iban' => 'iban',
        'bank_account' => 'bank_account',
        'bank_name' => 'bank_name',
        'bank_country' => 'bank_country',
        'bank_code' => 'bank_code',
        'sort_code' => 'sort_code',
        'transfer_reason' => 'transfer_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'iban' => 'setIban',
        'bank_account' => 'setBankAccount',
        'bank_name' => 'setBankName',
        'bank_country' => 'setBankCountry',
        'bank_code' => 'setBankCode',
        'sort_code' => 'setSortCode',
        'transfer_reason' => 'setTransferReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'iban' => 'getIban',
        'bank_account' => 'getBankAccount',
        'bank_name' => 'getBankName',
        'bank_country' => 'getBankCountry',
        'bank_code' => 'getBankCode',
        'sort_code' => 'getSortCode',
        'transfer_reason' => 'getTransferReason'
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
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_country'] = isset($data['bank_country']) ? $data['bank_country'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['sort_code'] = isset($data['sort_code']) ? $data['sort_code'] : null;
        $this->container['transfer_reason'] = isset($data['transfer_reason']) ? $data['transfer_reason'] : null;
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
        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
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
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string|null $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name bank_name
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_country
     *
     * @return string|null
     */
    public function getBankCountry()
    {
        return $this->container['bank_country'];
    }

    /**
     * Sets bank_country
     *
     * @param string|null $bank_country bank_country
     *
     * @return $this
     */
    public function setBankCountry($bank_country)
    {
        $this->container['bank_country'] = $bank_country;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code bank_code
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets sort_code
     *
     * @return string|null
     */
    public function getSortCode()
    {
        return $this->container['sort_code'];
    }

    /**
     * Sets sort_code
     *
     * @param string|null $sort_code sort_code
     *
     * @return $this
     */
    public function setSortCode($sort_code)
    {
        $this->container['sort_code'] = $sort_code;

        return $this;
    }

    /**
     * Gets transfer_reason
     *
     * @return \TransferZero\Model\PayoutMethodTransferReasonEnum|null
     */
    public function getTransferReason()
    {
        return $this->container['transfer_reason'];
    }

    /**
     * Sets transfer_reason
     *
     * @param \TransferZero\Model\PayoutMethodTransferReasonEnum|null $transfer_reason transfer_reason
     *
     * @return $this
     */
    public function setTransferReason($transfer_reason)
    {
        $this->container['transfer_reason'] = $transfer_reason;

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

