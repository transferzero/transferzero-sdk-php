<?php
/**
 * PayoutMethodDetailsMADCash
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
 * PayoutMethodDetailsMADCash Class Doc Comment
 *
 * @category Class
 * @description &#x60;&#x60;&#x60;JSON \&quot;details\&quot;: {   \&quot;first_name\&quot;: \&quot;First\&quot;,   \&quot;last_name\&quot;: \&quot;Last\&quot;,   \&quot;phone_number\&quot;: \&quot;+212537718685\&quot;     # Mandatory; E.164 international format   \&quot;sender_identity_card_type\&quot; &#x3D;&gt; \&quot;O\&quot;,     # Mandatory; Values: \&quot;O\&quot;: Other, \&quot;PP\&quot;: Passport, \&quot;ID\&quot;: National ID   \&quot;sender_identity_card_id\&quot; &#x3D;&gt; &#39;AB12345678&#39;,     # Mandatory   \&quot;sender_city_of_birth\&quot; &#x3D;&gt; \&quot;London\&quot;,     # Optional   \&quot;sender_country_of_birth\&quot; &#x3D;&gt; \&quot;GB\&quot;,     # Optional; ISO 2-letter format   \&quot;sender_gender\&quot; &#x3D;&gt; \&quot;M\&quot;,     # Optional; Values: \&quot;M\&quot;: Male, \&quot;F\&quot;: Female   \&quot;reason\&quot; &#x3D;&gt; \&quot;Remittance payment\&quot;,     # Optional; Default value is &#39;Remittance payment&#39;   \&quot;identity_card_type\&quot; &#x3D;&gt; \&quot;ID\&quot;,     # Optional; Values: \&quot;PP\&quot;: Passport, \&quot;ID\&quot;: National ID   \&quot;identity_card_id\&quot; &#x3D;&gt; &#39;AB12345678&#39;     # Optional } &#x60;&#x60;&#x60;  Please note when sending MAD::Cash payments you should subscribe to the recipient.pending webhook, as that will broadcast the payment reference ID the customer need to use to obtain the funds. Example webhook response excerpt -  &#x60;&#x60;&#x60;JSON {   (...)   \&quot;state\&quot;:\&quot;pending\&quot;,   \&quot;metadata\&quot;: {     \&quot;payment_reference\&quot;:\&quot;9M5GJRJUBCY\&quot;   },   (...) } &#x60;&#x60;&#x60;  The reference can also be provided optionally for MAD::Cash, but if you want to use this functionality please contact us for more details.
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethodDetailsMADCash implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethodDetailsMADCash';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_number' => 'string',
        'sender_identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'sender_identity_card_id' => 'string',
        'sender_city_of_birth' => 'string',
        'sender_country_of_birth' => 'string',
        'sender_gender' => '\TransferZero\Model\PayoutMethodGenderEnum',
        'reason' => 'string',
        'identity_card_type' => '\TransferZero\Model\PayoutMethodIdentityCardTypeEnum',
        'identity_card_id' => 'string',
        'birth_date' => '\DateTime'
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
        'sender_identity_card_type' => null,
        'sender_identity_card_id' => null,
        'sender_city_of_birth' => null,
        'sender_country_of_birth' => null,
        'sender_gender' => null,
        'reason' => null,
        'identity_card_type' => null,
        'identity_card_id' => null,
        'birth_date' => 'date'
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
        'sender_identity_card_type' => 'sender_identity_card_type',
        'sender_identity_card_id' => 'sender_identity_card_id',
        'sender_city_of_birth' => 'sender_city_of_birth',
        'sender_country_of_birth' => 'sender_country_of_birth',
        'sender_gender' => 'sender_gender',
        'reason' => 'reason',
        'identity_card_type' => 'identity_card_type',
        'identity_card_id' => 'identity_card_id',
        'birth_date' => 'birth_date'
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
        'sender_identity_card_type' => 'setSenderIdentityCardType',
        'sender_identity_card_id' => 'setSenderIdentityCardId',
        'sender_city_of_birth' => 'setSenderCityOfBirth',
        'sender_country_of_birth' => 'setSenderCountryOfBirth',
        'sender_gender' => 'setSenderGender',
        'reason' => 'setReason',
        'identity_card_type' => 'setIdentityCardType',
        'identity_card_id' => 'setIdentityCardId',
        'birth_date' => 'setBirthDate'
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
        'sender_identity_card_type' => 'getSenderIdentityCardType',
        'sender_identity_card_id' => 'getSenderIdentityCardId',
        'sender_city_of_birth' => 'getSenderCityOfBirth',
        'sender_country_of_birth' => 'getSenderCountryOfBirth',
        'sender_gender' => 'getSenderGender',
        'reason' => 'getReason',
        'identity_card_type' => 'getIdentityCardType',
        'identity_card_id' => 'getIdentityCardId',
        'birth_date' => 'getBirthDate'
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
        $this->container['sender_identity_card_type'] = isset($data['sender_identity_card_type']) ? $data['sender_identity_card_type'] : null;
        $this->container['sender_identity_card_id'] = isset($data['sender_identity_card_id']) ? $data['sender_identity_card_id'] : null;
        $this->container['sender_city_of_birth'] = isset($data['sender_city_of_birth']) ? $data['sender_city_of_birth'] : null;
        $this->container['sender_country_of_birth'] = isset($data['sender_country_of_birth']) ? $data['sender_country_of_birth'] : null;
        $this->container['sender_gender'] = isset($data['sender_gender']) ? $data['sender_gender'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['identity_card_type'] = isset($data['identity_card_type']) ? $data['identity_card_type'] : null;
        $this->container['identity_card_id'] = isset($data['identity_card_id']) ? $data['identity_card_id'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
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
        if ($this->container['phone_number'] === null) {
            $invalidProperties[] = "'phone_number' can't be null";
        }
        if ($this->container['sender_identity_card_type'] === null) {
            $invalidProperties[] = "'sender_identity_card_type' can't be null";
        }
        if ($this->container['sender_identity_card_id'] === null) {
            $invalidProperties[] = "'sender_identity_card_id' can't be null";
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
     * @return \TransferZero\Model\PayoutMethodIdentityCardTypeEnum|null
     */
    public function getIdentityCardType()
    {
        return $this->container['identity_card_type'];
    }

    /**
     * Sets identity_card_type
     *
     * @param \TransferZero\Model\PayoutMethodIdentityCardTypeEnum|null $identity_card_type identity_card_type
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
     * @return string|null
     */
    public function getIdentityCardId()
    {
        return $this->container['identity_card_id'];
    }

    /**
     * Sets identity_card_id
     *
     * @param string|null $identity_card_id identity_card_id
     *
     * @return $this
     */
    public function setIdentityCardId($identity_card_id)
    {
        $this->container['identity_card_id'] = $identity_card_id;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime|null $birth_date Date of birth of recipient
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

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


