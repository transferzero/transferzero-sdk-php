<?php
/**
 * BankAccountDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BitPesa Private API
 *
 * API specification used for internal BitPesa endpoints
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
 * BankAccountDetails Class Doc Comment
 *
 * @category Class
 * @description Active Bank Account Details for specified currency.  Business BankAccountDetails Example: &#x60;&#x60;&#x60;json   {     \&quot;id\&quot;:\&quot;ebe9bc0b-f2f6-4ce8-802a-8b79912d041e\&quot;,     \&quot;payin_ccy\&quot;:\&quot;NGN\&quot;,     \&quot;account_name\&quot;:\&quot;NGN Details\&quot;,     \&quot;address\&quot;:\&quot;Test Plot no. Jane Doe Road\&quot;,     \&quot;bank_name\&quot;:\&quot;Standard Test Limited\&quot;,     \&quot;bank_address\&quot;:\&quot;4 Lorem Avenue PO BOX 1022222.\&quot;,     \&quot;iban\&quot;:nil,     \&quot;bic_or_swift\&quot;:nil,     \&quot;sort_code\&quot;:nil,     \&quot;account_number\&quot;:nil,     \&quot;branch_name\&quot;:\&quot;branch_name\&quot;,     \&quot;branch_number\&quot;:nil,     \&quot;branch_code\&quot;:nil,     \&quot;reference\&quot;:nil,     \&quot;status\&quot;:\&quot;unavailable\&quot;,     \&quot;unavailable_message\&quot;:\&quot;Experiencing downtime issues\&quot;   } &#x60;&#x60;&#x60;
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankAccountDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payin_ccy' => 'string',
        'account_name' => 'string',
        'address' => 'string',
        'bank_name' => 'string',
        'bank_address' => 'string',
        'iban' => 'string',
        'bic_or_swift' => 'string',
        'sort_code' => 'string',
        'account_number' => 'string',
        'branch_name' => 'string',
        'branch_code' => 'string',
        'reference' => 'string',
        'status' => 'string',
        'unavailable_message' => 'string',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payin_ccy' => null,
        'account_name' => null,
        'address' => null,
        'bank_name' => null,
        'bank_address' => null,
        'iban' => null,
        'bic_or_swift' => null,
        'sort_code' => null,
        'account_number' => null,
        'branch_name' => null,
        'branch_code' => null,
        'reference' => null,
        'status' => null,
        'unavailable_message' => null,
        'id' => 'uuid'
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
        'payin_ccy' => 'payin_ccy',
        'account_name' => 'account_name',
        'address' => 'address',
        'bank_name' => 'bank_name',
        'bank_address' => 'bank_address',
        'iban' => 'iban',
        'bic_or_swift' => 'bic_or_swift',
        'sort_code' => 'sort_code',
        'account_number' => 'account_number',
        'branch_name' => 'branch_name',
        'branch_code' => 'branch_code',
        'reference' => 'reference',
        'status' => 'status',
        'unavailable_message' => 'unavailable_message',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payin_ccy' => 'setPayinCcy',
        'account_name' => 'setAccountName',
        'address' => 'setAddress',
        'bank_name' => 'setBankName',
        'bank_address' => 'setBankAddress',
        'iban' => 'setIban',
        'bic_or_swift' => 'setBicOrSwift',
        'sort_code' => 'setSortCode',
        'account_number' => 'setAccountNumber',
        'branch_name' => 'setBranchName',
        'branch_code' => 'setBranchCode',
        'reference' => 'setReference',
        'status' => 'setStatus',
        'unavailable_message' => 'setUnavailableMessage',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payin_ccy' => 'getPayinCcy',
        'account_name' => 'getAccountName',
        'address' => 'getAddress',
        'bank_name' => 'getBankName',
        'bank_address' => 'getBankAddress',
        'iban' => 'getIban',
        'bic_or_swift' => 'getBicOrSwift',
        'sort_code' => 'getSortCode',
        'account_number' => 'getAccountNumber',
        'branch_name' => 'getBranchName',
        'branch_code' => 'getBranchCode',
        'reference' => 'getReference',
        'status' => 'getStatus',
        'unavailable_message' => 'getUnavailableMessage',
        'id' => 'getId'
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
        $this->container['payin_ccy'] = isset($data['payin_ccy']) ? $data['payin_ccy'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_address'] = isset($data['bank_address']) ? $data['bank_address'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bic_or_swift'] = isset($data['bic_or_swift']) ? $data['bic_or_swift'] : null;
        $this->container['sort_code'] = isset($data['sort_code']) ? $data['sort_code'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['branch_name'] = isset($data['branch_name']) ? $data['branch_name'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['unavailable_message'] = isset($data['unavailable_message']) ? $data['unavailable_message'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
     * Gets payin_ccy
     *
     * @return string|null
     */
    public function getPayinCcy()
    {
        return $this->container['payin_ccy'];
    }

    /**
     * Sets payin_ccy
     *
     * @param string|null $payin_ccy The currency for the bank account details
     *
     * @return $this
     */
    public function setPayinCcy($payin_ccy)
    {
        $this->container['payin_ccy'] = $payin_ccy;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The business account name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address The business address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @param string|null $bank_name The name of the bank as registered with Central Bank of the country.
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_address
     *
     * @return string|null
     */
    public function getBankAddress()
    {
        return $this->container['bank_address'];
    }

    /**
     * Sets bank_address
     *
     * @param string|null $bank_address The address of the bank
     *
     * @return $this
     */
    public function setBankAddress($bank_address)
    {
        $this->container['bank_address'] = $bank_address;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban An internationally agreed system of identifying bank accounts across national borders
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic_or_swift
     *
     * @return string|null
     */
    public function getBicOrSwift()
    {
        return $this->container['bic_or_swift'];
    }

    /**
     * Sets bic_or_swift
     *
     * @param string|null $bic_or_swift Bank Identifier Code
     *
     * @return $this
     */
    public function setBicOrSwift($bic_or_swift)
    {
        $this->container['bic_or_swift'] = $bic_or_swift;

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
     * @param string|null $sort_code Domestic bank codes used to route money transfers between financial institutions in the United Kingdom/Ireland.
     *
     * @return $this
     */
    public function setSortCode($sort_code)
    {
        $this->container['sort_code'] = $sort_code;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number A unique string of numbers and, sometimes, letters and other characters that identifies the owner of an account.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets branch_name
     *
     * @return string|null
     */
    public function getBranchName()
    {
        return $this->container['branch_name'];
    }

    /**
     * Sets branch_name
     *
     * @param string|null $branch_name The name of the branch of the bank
     *
     * @return $this
     */
    public function setBranchName($branch_name)
    {
        $this->container['branch_name'] = $branch_name;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string|null
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string|null $branch_code Unique identifying code for a given branch of a bank
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A statement from the bank regarding the bank details.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status One of available, unavailable, hidden
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets unavailable_message
     *
     * @return string|null
     */
    public function getUnavailableMessage()
    {
        return $this->container['unavailable_message'];
    }

    /**
     * Sets unavailable_message
     *
     * @param string|null $unavailable_message Reason for setting the bank status to unavailable
     *
     * @return $this
     */
    public function setUnavailableMessage($unavailable_message)
    {
        $this->container['unavailable_message'] = $unavailable_message;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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


