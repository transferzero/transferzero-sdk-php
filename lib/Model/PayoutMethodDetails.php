<?php
/**
 * PayoutMethodDetails
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
 * PayoutMethodDetails Class Doc Comment
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'bank_code' => 'string',
        'bank_account' => 'string',
        'bank_account_type' => '\TransferZero\Model\PayoutMethodBankAccountTypeEnum',
        'phone_number' => 'string',
        'mobile_provider' => '\TransferZero\Model\PayoutMethodMobileProviderEnum',
        'country' => '\TransferZero\Model\PayoutMethodCountryEnum',
        'iban' => 'string',
        'bank_name' => 'string',
        'bank_country' => 'string',
        'cash_provider' => '\TransferZero\Model\PayoutMethodCashProviderEnum',
        'sort_code' => 'string',
        'bic' => 'string',
        'sender_identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'sender_identity_card_id' => 'string',
        'sender_city_of_birth' => 'string',
        'sender_country_of_birth' => 'string',
        'sender_gender' => '\TransferZero\Model\PayoutMethodGenderEnum',
        'reason' => 'string',
        'identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'identity_card_id' => 'string',
        'reference' => 'string',
        'name' => 'string',
        'address' => 'string',
        'street' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'email' => 'string',
        'transfer_reason_code' => 'string',
        'contact_first_name' => 'string',
        'contact_last_name' => 'string',
        'registration_number' => 'string',
        'nature_of_business' => '\TransferZero\Model\PayoutMethodNatureOfBusinessEnum',
        'legal_entity_type' => '\TransferZero\Model\PayoutMethodLegalEntityTypeEnum',
        'branch_code' => 'string',
        'swift_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'bank_code' => null,
        'bank_account' => null,
        'bank_account_type' => null,
        'phone_number' => null,
        'mobile_provider' => null,
        'country' => null,
        'iban' => null,
        'bank_name' => null,
        'bank_country' => null,
        'cash_provider' => null,
        'sort_code' => null,
        'bic' => null,
        'sender_identity_card_type' => null,
        'sender_identity_card_id' => null,
        'sender_city_of_birth' => null,
        'sender_country_of_birth' => null,
        'sender_gender' => null,
        'reason' => null,
        'identity_card_type' => null,
        'identity_card_id' => null,
        'reference' => null,
        'name' => null,
        'address' => null,
        'street' => null,
        'postal_code' => null,
        'city' => null,
        'email' => null,
        'transfer_reason_code' => null,
        'contact_first_name' => null,
        'contact_last_name' => null,
        'registration_number' => null,
        'nature_of_business' => null,
        'legal_entity_type' => null,
        'branch_code' => null,
        'swift_code' => null
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
        'bank_code' => 'bank_code',
        'bank_account' => 'bank_account',
        'bank_account_type' => 'bank_account_type',
        'phone_number' => 'phone_number',
        'mobile_provider' => 'mobile_provider',
        'country' => 'country',
        'iban' => 'iban',
        'bank_name' => 'bank_name',
        'bank_country' => 'bank_country',
        'cash_provider' => 'cash_provider',
        'sort_code' => 'sort_code',
        'bic' => 'bic',
        'sender_identity_card_type' => 'sender_identity_card_type',
        'sender_identity_card_id' => 'sender_identity_card_id',
        'sender_city_of_birth' => 'sender_city_of_birth',
        'sender_country_of_birth' => 'sender_country_of_birth',
        'sender_gender' => 'sender_gender',
        'reason' => 'reason',
        'identity_card_type' => 'identity_card_type',
        'identity_card_id' => 'identity_card_id',
        'reference' => 'reference',
        'name' => 'name',
        'address' => 'address',
        'street' => 'street',
        'postal_code' => 'postal_code',
        'city' => 'city',
        'email' => 'email',
        'transfer_reason_code' => 'transfer_reason_code',
        'contact_first_name' => 'contact_first_name',
        'contact_last_name' => 'contact_last_name',
        'registration_number' => 'registration_number',
        'nature_of_business' => 'nature_of_business',
        'legal_entity_type' => 'legal_entity_type',
        'branch_code' => 'branch_code',
        'swift_code' => 'swift_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'bank_code' => 'setBankCode',
        'bank_account' => 'setBankAccount',
        'bank_account_type' => 'setBankAccountType',
        'phone_number' => 'setPhoneNumber',
        'mobile_provider' => 'setMobileProvider',
        'country' => 'setCountry',
        'iban' => 'setIban',
        'bank_name' => 'setBankName',
        'bank_country' => 'setBankCountry',
        'cash_provider' => 'setCashProvider',
        'sort_code' => 'setSortCode',
        'bic' => 'setBic',
        'sender_identity_card_type' => 'setSenderIdentityCardType',
        'sender_identity_card_id' => 'setSenderIdentityCardId',
        'sender_city_of_birth' => 'setSenderCityOfBirth',
        'sender_country_of_birth' => 'setSenderCountryOfBirth',
        'sender_gender' => 'setSenderGender',
        'reason' => 'setReason',
        'identity_card_type' => 'setIdentityCardType',
        'identity_card_id' => 'setIdentityCardId',
        'reference' => 'setReference',
        'name' => 'setName',
        'address' => 'setAddress',
        'street' => 'setStreet',
        'postal_code' => 'setPostalCode',
        'city' => 'setCity',
        'email' => 'setEmail',
        'transfer_reason_code' => 'setTransferReasonCode',
        'contact_first_name' => 'setContactFirstName',
        'contact_last_name' => 'setContactLastName',
        'registration_number' => 'setRegistrationNumber',
        'nature_of_business' => 'setNatureOfBusiness',
        'legal_entity_type' => 'setLegalEntityType',
        'branch_code' => 'setBranchCode',
        'swift_code' => 'setSwiftCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'bank_code' => 'getBankCode',
        'bank_account' => 'getBankAccount',
        'bank_account_type' => 'getBankAccountType',
        'phone_number' => 'getPhoneNumber',
        'mobile_provider' => 'getMobileProvider',
        'country' => 'getCountry',
        'iban' => 'getIban',
        'bank_name' => 'getBankName',
        'bank_country' => 'getBankCountry',
        'cash_provider' => 'getCashProvider',
        'sort_code' => 'getSortCode',
        'bic' => 'getBic',
        'sender_identity_card_type' => 'getSenderIdentityCardType',
        'sender_identity_card_id' => 'getSenderIdentityCardId',
        'sender_city_of_birth' => 'getSenderCityOfBirth',
        'sender_country_of_birth' => 'getSenderCountryOfBirth',
        'sender_gender' => 'getSenderGender',
        'reason' => 'getReason',
        'identity_card_type' => 'getIdentityCardType',
        'identity_card_id' => 'getIdentityCardId',
        'reference' => 'getReference',
        'name' => 'getName',
        'address' => 'getAddress',
        'street' => 'getStreet',
        'postal_code' => 'getPostalCode',
        'city' => 'getCity',
        'email' => 'getEmail',
        'transfer_reason_code' => 'getTransferReasonCode',
        'contact_first_name' => 'getContactFirstName',
        'contact_last_name' => 'getContactLastName',
        'registration_number' => 'getRegistrationNumber',
        'nature_of_business' => 'getNatureOfBusiness',
        'legal_entity_type' => 'getLegalEntityType',
        'branch_code' => 'getBranchCode',
        'swift_code' => 'getSwiftCode'
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
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['mobile_provider'] = isset($data['mobile_provider']) ? $data['mobile_provider'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_country'] = isset($data['bank_country']) ? $data['bank_country'] : null;
        $this->container['cash_provider'] = isset($data['cash_provider']) ? $data['cash_provider'] : null;
        $this->container['sort_code'] = isset($data['sort_code']) ? $data['sort_code'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['sender_identity_card_type'] = isset($data['sender_identity_card_type']) ? $data['sender_identity_card_type'] : null;
        $this->container['sender_identity_card_id'] = isset($data['sender_identity_card_id']) ? $data['sender_identity_card_id'] : null;
        $this->container['sender_city_of_birth'] = isset($data['sender_city_of_birth']) ? $data['sender_city_of_birth'] : null;
        $this->container['sender_country_of_birth'] = isset($data['sender_country_of_birth']) ? $data['sender_country_of_birth'] : null;
        $this->container['sender_gender'] = isset($data['sender_gender']) ? $data['sender_gender'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['identity_card_type'] = isset($data['identity_card_type']) ? $data['identity_card_type'] : null;
        $this->container['identity_card_id'] = isset($data['identity_card_id']) ? $data['identity_card_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['transfer_reason_code'] = isset($data['transfer_reason_code']) ? $data['transfer_reason_code'] : null;
        $this->container['contact_first_name'] = isset($data['contact_first_name']) ? $data['contact_first_name'] : null;
        $this->container['contact_last_name'] = isset($data['contact_last_name']) ? $data['contact_last_name'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['nature_of_business'] = isset($data['nature_of_business']) ? $data['nature_of_business'] : null;
        $this->container['legal_entity_type'] = isset($data['legal_entity_type']) ? $data['legal_entity_type'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['swift_code'] = isset($data['swift_code']) ? $data['swift_code'] : null;
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
        if ($this->container['bank_account'] === null) {
            $invalidProperties[] = "'bank_account' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['mobile_provider'] === null) {
            $invalidProperties[] = "'mobile_provider' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['iban'] === null) {
            $invalidProperties[] = "'iban' can't be null";
        }
        if ($this->container['bank_name'] === null) {
            $invalidProperties[] = "'bank_name' can't be null";
        }
        if ($this->container['sender_identity_card_type'] === null) {
            $invalidProperties[] = "'sender_identity_card_type' can't be null";
        }
        if ($this->container['sender_identity_card_id'] === null) {
            $invalidProperties[] = "'sender_identity_card_id' can't be null";
        }
        if ($this->container['identity_card_type'] === null) {
            $invalidProperties[] = "'identity_card_type' can't be null";
        }
        if ($this->container['identity_card_id'] === null) {
            $invalidProperties[] = "'identity_card_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
        if ($this->container['transfer_reason_code'] === null) {
            $invalidProperties[] = "'transfer_reason_code' can't be null";
        }
        if ($this->container['swift_code'] === null) {
            $invalidProperties[] = "'swift_code' can't be null";
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
     * Gets bank_account_type
     *
     * @return \TransferZero\Model\PayoutMethodBankAccountTypeEnum|null
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param \TransferZero\Model\PayoutMethodBankAccountTypeEnum|null $bank_account_type bank_account_type
     *
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        $this->container['bank_account_type'] = $bank_account_type;

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
     * Gets country
     *
     * @return \TransferZero\Model\PayoutMethodCountryEnum
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \TransferZero\Model\PayoutMethodCountryEnum $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name bank_name
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
     * Gets cash_provider
     *
     * @return \TransferZero\Model\PayoutMethodCashProviderEnum|null
     */
    public function getCashProvider()
    {
        return $this->container['cash_provider'];
    }

    /**
     * Sets cash_provider
     *
     * @param \TransferZero\Model\PayoutMethodCashProviderEnum|null $cash_provider cash_provider
     *
     * @return $this
     */
    public function setCashProvider($cash_provider)
    {
        $this->container['cash_provider'] = $cash_provider;

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
     * Gets bic
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string|null $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets sender_identity_card_type
     *
     * @return \TransferZero\Model\PayoutMethodIdentityCardTypeEnum
     */
    public function getSenderIdentityCardType()
    {
        return $this->container['sender_identity_card_type'];
    }

    /**
     * Sets sender_identity_card_type
     *
     * @param \TransferZero\Model\PayoutMethodIdentityCardTypeEnum $sender_identity_card_type sender_identity_card_type
     *
     * @return $this
     */
    public function setSenderIdentityCardType($sender_identity_card_type)
    {
        $this->container['sender_identity_card_type'] = $sender_identity_card_type;

        return $this;
    }

    /**
     * Gets sender_identity_card_id
     *
     * @return string
     */
    public function getSenderIdentityCardId()
    {
        return $this->container['sender_identity_card_id'];
    }

    /**
     * Sets sender_identity_card_id
     *
     * @param string $sender_identity_card_id sender_identity_card_id
     *
     * @return $this
     */
    public function setSenderIdentityCardId($sender_identity_card_id)
    {
        $this->container['sender_identity_card_id'] = $sender_identity_card_id;

        return $this;
    }

    /**
     * Gets sender_city_of_birth
     *
     * @return string|null
     */
    public function getSenderCityOfBirth()
    {
        return $this->container['sender_city_of_birth'];
    }

    /**
     * Sets sender_city_of_birth
     *
     * @param string|null $sender_city_of_birth sender_city_of_birth
     *
     * @return $this
     */
    public function setSenderCityOfBirth($sender_city_of_birth)
    {
        $this->container['sender_city_of_birth'] = $sender_city_of_birth;

        return $this;
    }

    /**
     * Gets sender_country_of_birth
     *
     * @return string|null
     */
    public function getSenderCountryOfBirth()
    {
        return $this->container['sender_country_of_birth'];
    }

    /**
     * Sets sender_country_of_birth
     *
     * @param string|null $sender_country_of_birth sender_country_of_birth
     *
     * @return $this
     */
    public function setSenderCountryOfBirth($sender_country_of_birth)
    {
        $this->container['sender_country_of_birth'] = $sender_country_of_birth;

        return $this;
    }

    /**
     * Gets sender_gender
     *
     * @return \TransferZero\Model\PayoutMethodGenderEnum|null
     */
    public function getSenderGender()
    {
        return $this->container['sender_gender'];
    }

    /**
     * Sets sender_gender
     *
     * @param \TransferZero\Model\PayoutMethodGenderEnum|null $sender_gender sender_gender
     *
     * @return $this
     */
    public function setSenderGender($sender_gender)
    {
        $this->container['sender_gender'] = $sender_gender;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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
     * @param string|null $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @return \TransferZero\Model\PayoutMethodNatureOfBusinessEnum|null
     */
    public function getNatureOfBusiness()
    {
        return $this->container['nature_of_business'];
    }

    /**
     * Sets nature_of_business
     *
     * @param \TransferZero\Model\PayoutMethodNatureOfBusinessEnum|null $nature_of_business nature_of_business
     *
     * @return $this
     */
    public function setNatureOfBusiness($nature_of_business)
    {
        $this->container['nature_of_business'] = $nature_of_business;

        return $this;
    }

    /**
     * Gets legal_entity_type
     *
     * @return \TransferZero\Model\PayoutMethodLegalEntityTypeEnum|null
     */
    public function getLegalEntityType()
    {
        return $this->container['legal_entity_type'];
    }

    /**
     * Sets legal_entity_type
     *
     * @param \TransferZero\Model\PayoutMethodLegalEntityTypeEnum|null $legal_entity_type legal_entity_type
     *
     * @return $this
     */
    public function setLegalEntityType($legal_entity_type)
    {
        $this->container['legal_entity_type'] = $legal_entity_type;

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
     * @param string|null $branch_code branch_code
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets swift_code
     *
     * @return string
     */
    public function getSwiftCode()
    {
        return $this->container['swift_code'];
    }

    /**
     * Sets swift_code
     *
     * @param string $swift_code swift_code
     *
     * @return $this
     */
    public function setSwiftCode($swift_code)
    {
        $this->container['swift_code'] = $swift_code;

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


