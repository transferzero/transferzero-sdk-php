<?php
/**
 * PayoutMethod
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
 * PayoutMethod Class Doc Comment
 *
 * @category Class
 * @description This describes the specific details on how the payment has to be routed to the recipient.
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayoutMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayoutMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'details' => '\TransferZero\Model\PayoutMethodDetails',
        'metadata' => 'object',
        'id' => 'string',
        'errors' => 'map[string,\TransferZero\Model\ValidationErrorDescription[]]',
        'fields' => 'map[string,\TransferZero\Model\FieldDescription]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'details' => null,
        'metadata' => null,
        'id' => 'uuid',
        'errors' => null,
        'fields' => null
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
        'type' => 'type',
        'details' => 'details',
        'metadata' => 'metadata',
        'id' => 'id',
        'errors' => 'errors',
        'fields' => 'fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'details' => 'setDetails',
        'metadata' => 'setMetadata',
        'id' => 'setId',
        'errors' => 'setErrors',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'details' => 'getDetails',
        'metadata' => 'getMetadata',
        'id' => 'getId',
        'errors' => 'getErrors',
        'fields' => 'getFields'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Contains the currency to send the money to, and the type of the money movement  Commonly used payout types are:  - `NGN::Bank` - for Nigerian bank account payments. - `NGN::Mobile` - for Nigerian mobile money payments. - `GHS::Bank` - for Ghanaian bank account payments. - `GHS::Mobile` - for Ghanaian mobile money payments. - `GHS::Cash` - for Ghanaian cash remittance payments. - `UGX::Mobile` - for Ugandan mobile money payments. - `TZS::Mobile` - for Tanzanian mobile money payments. - `XOF::Mobile` - for mobile money payments to West-Africa. - `XOF::Bank` - for Senegalese bank account payments. - `XOF::Cash` - for Senegalese cash remittance payments. - `MAD::Cash` - for Moroccan cash remittance payments. - `EUR::Bank` - for IBAN bank transfers in EUR. - `GBP::Bank` - for IBAN bank and FP accounts transfers in GBP. - `ZAR::Bank` - for South Africa bank account payments. - `USD::Bank` - for USD account payments. *** Currently Nigeria only and in Beta phase ***  You can also send funds to the internal balance using `CCY::Balance`, where `CCY` is the appropriate currency. See [Collection from senders](https://docs.transferzero.com/docs/additional-features/#collections-from-senders) for more info on how to collect money into internal balance
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \TransferZero\Model\PayoutMethodDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \TransferZero\Model\PayoutMethodDetails|null $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Metadata of payout method. You can store any kind of information in this field.
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * Gets errors
     *
     * @return map[string,\TransferZero\Model\ValidationErrorDescription[]]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param map[string,\TransferZero\Model\ValidationErrorDescription[]]|null $errors The fields that have some problems and don't pass validation
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return map[string,\TransferZero\Model\FieldDescription]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param map[string,\TransferZero\Model\FieldDescription]|null $fields The fields needed for payments with this payment method with details on validation requirements
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

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


