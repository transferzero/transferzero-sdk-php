<?php
/**
 * PayoutMethodDetailsZARBank
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
 * PayoutMethodDetailsZARBank Class Doc Comment
 *
 * @category Class
 * @description &#x60;&#x60;&#x60;JSON   \&quot;details\&quot;: {     \&quot;first_name\&quot;: \&quot;First\&quot;, //  Mandatory for personal payouts;     \&quot;last_name\&quot;: \&quot;Last\&quot;, //  Mandatory for personal payouts;     \&quot;name\&quot; \&quot;First Ltd\&quot;, // Mandatory for business payouts;     \&quot;contact_first_name\&quot; \&quot;Business\&quot;, // Mandatory for business payouts;     \&quot;contact_last_name\&quot; \&quot;Contact\&quot;, // Mandatory for business payouts;     \&quot;street\&quot;: \&quot;Main Street\&quot;,     \&quot;postal_code\&quot;: \&quot;AB0001\&quot;,     \&quot;city\&quot;: \&quot;Cape Town\&quot;,     \&quot;email\&quot;: \&quot;recipient@email.com\&quot;,     \&quot;bank_code\&quot;: \&quot;334810\&quot;,     \&quot;bank_account\&quot;: \&quot;12345678\&quot;,     \&quot;phone_number\&quot;: \&quot;+27119785313\&quot;,     \&quot;transfer_reason_code\&quot;: \&quot;185\&quot;,     \&quot;entity_type\&quot;: \&quot;sole_proprietorship\&quot;, // Optional; Default value is \&quot;person\&quot;; Mandatory for business payouts;     \&quot;nature_of_business\&quot;: \&quot;Mining\&quot;, // Mandatory for business payouts;     \&quot;registration_number\&quot;: \&quot;17364BGC\&quot; // Mandatory for business payouts;   } &#x60;&#x60;&#x60;  See [ZAR Bank](https://docs.transferzero.com/docs/payout-details/#zarbank) documentation for the bank_code and transfer_reason_code lists
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetailsZARBank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetailsZARBank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'street' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'email' => 'string',
        'bank_code' => 'string',
        'bank_account' => 'string',
        'phone_number' => 'string',
        'transfer_reason_code' => 'string',
        'name' => 'string',
        'contact_first_name' => 'string',
        'contact_last_name' => 'string',
        'registration_number' => 'string',
        'nature_of_business' => 'string',
        'entity_type' => '\TransferZero\Model\PayoutMethodEntityTypeEnum'
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
        'postal_code' => null,
        'city' => null,
        'email' => null,
        'bank_code' => null,
        'bank_account' => null,
        'phone_number' => null,
        'transfer_reason_code' => null,
        'name' => null,
        'contact_first_name' => null,
        'contact_last_name' => null,
        'registration_number' => null,
        'nature_of_business' => null,
        'entity_type' => null
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
        'postal_code' => 'postal_code',
        'city' => 'city',
        'email' => 'email',
        'bank_code' => 'bank_code',
        'bank_account' => 'bank_account',
        'phone_number' => 'phone_number',
        'transfer_reason_code' => 'transfer_reason_code',
        'name' => 'name',
        'contact_first_name' => 'contact_first_name',
        'contact_last_name' => 'contact_last_name',
        'registration_number' => 'registration_number',
        'nature_of_business' => 'nature_of_business',
        'entity_type' => 'entity_type'
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
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'email' => 'setEmail',
        'bank_code' => 'setBankCode',
        'bank_account' => 'setBankAccount',
        'phone_number' => 'setPhoneNumber',
        'transfer_reason_code' => 'setTransferReasonCode',
        'name' => 'setName',
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'registration_number' => 'setRegistrationNumber',
        'nature_of_business' => 'setNatureOfBusiness',
        'entity_type' => 'setEntityType'
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
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'email' => 'getEmail',
        'bank_code' => 'getBankCode',
        'bank_account' => 'getBankAccount',
        'phone_number' => 'getPhoneNumber',
        'transfer_reason_code' => 'getTransferReasonCode',
        'name' => 'getName',
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'registration_number' => 'getRegistrationNumber',
        'nature_of_business' => 'getNatureOfBusiness',
        'entity_type' => 'getEntityType'
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
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['transfer_reason_code'] = isset($data['transfer_reason_code']) ? $data['transfer_reason_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['nature_of_business'] = isset($data['nature_of_business']) ? $data['nature_of_business'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
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
        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['bank_code'] === null) {
            $invalidProperties[] = "'bank_code' can't be null";
        }
        if ($this->container['bank_account'] === null) {
            $invalidProperties[] = "'bank_account' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
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
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets transfer_reason_code
     *
     * @return string|null
     */
    public function getTransferReasonCode()
    {
        return $this->container['transfer_reason_code'];
    }

    /**
     * Sets transfer_reason_code
     *
     * @param string|null $transfer_reason_code transfer_reason_code
     *
     * @return $this
     */
    public function setTransferReasonCode($transfer_reason_code)
    {
        $this->container['transfer_reason_code'] = $transfer_reason_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets contact_first_name
     *
     * @return string|null
     */
    public function getContactFirstName()
    {
        return $this->container['contact_first_name'];
    }

    /**
     * Sets contact_first_name
     *
     * @param string|null $contact_first_name contact_first_name
     *
     * @return $this
     */
    public function setContactFirstName($contact_first_name)
    {
        $this->container['contact_first_name'] = $contact_first_name;

        return $this;
    }

    /**
     * Gets contact_last_name
     *
     * @return string|null
     */
    public function getContactLastName()
    {
        return $this->container['contact_last_name'];
    }

    /**
     * Sets contact_last_name
     *
     * @param string|null $contact_last_name contact_last_name
     *
     * @return $this
     */
    public function setContactLastName($contact_last_name)
    {
        $this->container['contact_last_name'] = $contact_last_name;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string|null $registration_number registration_number
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets nature_of_business
     *
     * @return string|null
     */
    public function getNatureOfBusiness()
    {
        return $this->container['nature_of_business'];
    }

    /**
     * Sets nature_of_business
     *
     * @param string|null $nature_of_business nature_of_business
     *
     * @return $this
     */
    public function setNatureOfBusiness($nature_of_business)
    {
        $this->container['nature_of_business'] = $nature_of_business;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return \TransferZero\Model\PayoutMethodEntityTypeEnum|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param \TransferZero\Model\PayoutMethodEntityTypeEnum|null $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

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


