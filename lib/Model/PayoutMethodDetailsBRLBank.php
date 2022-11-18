<?php
/**
 * PayoutMethodDetailsBRLBank
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
 * PayoutMethodDetailsBRLBank Class Doc Comment
 *
 * @category Class
 * @description &#x60;&#x60;&#x60;JSON   \&quot;details\&quot;: {     \&quot;first_name\&quot;: \&quot;First\&quot;,     \&quot;last_name\&quot;: \&quot;Last\&quot;,     \&quot;phone_number\&quot;: \&quot;+552112345678\&quot;,     \&quot;bank_code\&quot;: \&quot;104\&quot;,     \&quot;branch_code\&quot;: \&quot;00001\&quot;,     \&quot;bank_account\&quot;: \&quot;0009795493\&quot;,     \&quot;bank_account_type\&quot;: \&quot;10\&quot;,     \&quot;identity_card_type\&quot;: \&quot;ID\&quot;,     \&quot;identity_card_id\&quot;: \&quot;01234567890\&quot;,     \&quot;transfer_reason\&quot;: \&quot;personal_account\&quot;   } &#x60;&#x60;&#x60;  See [BRL Bank](https://docs.transferzero.com/docs/payout-details/#brlbank) documentation for the bank_code and transfer_reason lists
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetailsBRLBank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetailsBRLBank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'bank_code' => 'string',
        'branch_code' => 'string',
        'bank_account' => 'string',
        'bank_account_type' => '\TransferZero\Model\PayoutMethodBankAccountTypeEnum',
        'identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'identity_card_id' => 'string',
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
        'phone_number' => null,
        'bank_code' => null,
        'branch_code' => null,
        'bank_account' => null,
        'bank_account_type' => null,
        'identity_card_type' => null,
        'identity_card_id' => null,
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
        'phone_number' => 'phone_number',
        'bank_code' => 'bank_code',
        'branch_code' => 'branch_code',
        'bank_account' => 'bank_account',
        'bank_account_type' => 'bank_account_type',
        'identity_card_type' => 'identity_card_type',
        'identity_card_id' => 'identity_card_id',
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
        'phone_number' => 'setPhoneNumber',
        'bank_code' => 'setBankCode',
        'branch_code' => 'setBranchCode',
        'bank_account' => 'setBankAccount',
        'bank_account_type' => 'setBankAccountType',
        'identity_card_type' => 'setIdentityCardType',
        'identity_card_id' => 'setIdentityCardId',
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
        'phone_number' => 'getPhoneNumber',
        'bank_code' => 'getBankCode',
        'branch_code' => 'getBranchCode',
        'bank_account' => 'getBankAccount',
        'bank_account_type' => 'getBankAccountType',
        'identity_card_type' => 'getIdentityCardType',
        'identity_card_id' => 'getIdentityCardId',
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
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['identity_card_type'] = isset($data['identity_card_type']) ? $data['identity_card_type'] : null;
        $this->container['identity_card_id'] = isset($data['identity_card_id']) ? $data['identity_card_id'] : null;
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
        if ($this->container['bank_code'] === null) {
            $invalidProperties[] = "'bank_code' can't be null";
        }
        if ($this->container['branch_code'] === null) {
            $invalidProperties[] = "'branch_code' can't be null";
        }
        if ($this->container['bank_account'] === null) {
            $invalidProperties[] = "'bank_account' can't be null";
        }
        if ($this->container['bank_account_type'] === null) {
            $invalidProperties[] = "'bank_account_type' can't be null";
        }
        if ($this->container['identity_card_type'] === null) {
            $invalidProperties[] = "'identity_card_type' can't be null";
        }
        if ($this->container['identity_card_id'] === null) {
            $invalidProperties[] = "'identity_card_id' can't be null";
        }
        if ($this->container['transfer_reason'] === null) {
            $invalidProperties[] = "'transfer_reason' can't be null";
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
     * @param string|null $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string $bank_code bank_code
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string $branch_code branch_code
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_account_type
     *
     * @return \TransferZero\Model\PayoutMethodBankAccountTypeEnum
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param \TransferZero\Model\PayoutMethodBankAccountTypeEnum $bank_account_type bank_account_type
     *
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        $this->container['bank_account_type'] = $bank_account_type;

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
     * Gets transfer_reason
     *
     * @return \TransferZero\Model\PayoutMethodTransferReasonEnum
     */
    public function getTransferReason()
    {
        return $this->container['transfer_reason'];
    }

    /**
     * Sets transfer_reason
     *
     * @param \TransferZero\Model\PayoutMethodTransferReasonEnum $transfer_reason transfer_reason
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


