<?php
/**
 * Document
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
 * Document Class Doc Comment
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Document implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'upload' => 'string',
        'upload_file_name' => 'string',
        'metadata' => 'object',
        'upload_content_type' => 'string',
        'upload_file_size' => 'int',
        'category' => 'string',
        'side' => 'string',
        'issuing_country' => 'string',
        'id' => 'string',
        'errors' => 'map[string,\TransferZero\Model\ValidationErrorDescription[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'upload' => null,
        'upload_file_name' => null,
        'metadata' => null,
        'upload_content_type' => null,
        'upload_file_size' => null,
        'category' => null,
        'side' => null,
        'issuing_country' => null,
        'id' => 'uuid',
        'errors' => null
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
        'upload' => 'upload',
        'upload_file_name' => 'upload_file_name',
        'metadata' => 'metadata',
        'upload_content_type' => 'upload_content_type',
        'upload_file_size' => 'upload_file_size',
        'category' => 'category',
        'side' => 'side',
        'issuing_country' => 'issuing_country',
        'id' => 'id',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'upload' => 'setUpload',
        'upload_file_name' => 'setUploadFileName',
        'metadata' => 'setMetadata',
        'upload_content_type' => 'setUploadContentType',
        'upload_file_size' => 'setUploadFileSize',
        'category' => 'setCategory',
        'side' => 'setSide',
        'issuing_country' => 'setIssuingCountry',
        'id' => 'setId',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'upload' => 'getUpload',
        'upload_file_name' => 'getUploadFileName',
        'metadata' => 'getMetadata',
        'upload_content_type' => 'getUploadContentType',
        'upload_file_size' => 'getUploadFileSize',
        'category' => 'getCategory',
        'side' => 'getSide',
        'issuing_country' => 'getIssuingCountry',
        'id' => 'getId',
        'errors' => 'getErrors'
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

    const SIDE_FRONT = 'front';
    const SIDE_BACK = 'back';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_FRONT,
            self::SIDE_BACK,
        ];
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
        $this->container['upload'] = isset($data['upload']) ? $data['upload'] : null;
        $this->container['upload_file_name'] = isset($data['upload_file_name']) ? $data['upload_file_name'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['upload_content_type'] = isset($data['upload_content_type']) ? $data['upload_content_type'] : null;
        $this->container['upload_file_size'] = isset($data['upload_file_size']) ? $data['upload_file_size'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['issuing_country'] = isset($data['issuing_country']) ? $data['issuing_country'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['upload'] === null) {
            $invalidProperties[] = "'upload' can't be null";
        }
        if ($this->container['upload_file_name'] === null) {
            $invalidProperties[] = "'upload_file_name' can't be null";
        }
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets upload
     *
     * @return string
     */
    public function getUpload()
    {
        return $this->container['upload'];
    }

    /**
     * Sets upload
     *
     * @param string $upload Base64 encoded data uri of an image/pdf file or a fully qualified url
     *
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->container['upload'] = $upload;

        return $this;
    }

    /**
     * Gets upload_file_name
     *
     * @return string
     */
    public function getUploadFileName()
    {
        return $this->container['upload_file_name'];
    }

    /**
     * Sets upload_file_name
     *
     * @param string $upload_file_name Name of the upload
     *
     * @return $this
     */
    public function setUploadFileName($upload_file_name)
    {
        $this->container['upload_file_name'] = $upload_file_name;

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
     * @param object|null $metadata Metadata of document
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets upload_content_type
     *
     * @return string|null
     */
    public function getUploadContentType()
    {
        return $this->container['upload_content_type'];
    }

    /**
     * Sets upload_content_type
     *
     * @param string|null $upload_content_type upload_content_type
     *
     * @return $this
     */
    public function setUploadContentType($upload_content_type)
    {
        $this->container['upload_content_type'] = $upload_content_type;

        return $this;
    }

    /**
     * Gets upload_file_size
     *
     * @return int|null
     */
    public function getUploadFileSize()
    {
        return $this->container['upload_file_size'];
    }

    /**
     * Sets upload_file_size
     *
     * @param int|null $upload_file_size upload_file_size
     *
     * @return $this
     */
    public function setUploadFileSize($upload_file_size)
    {
        $this->container['upload_file_size'] = $upload_file_size;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category uncategorised
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string|null
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string|null $side The side of the KYC ID. One of 'front' or 'back'
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($side) && !in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets issuing_country
     *
     * @return string|null
     */
    public function getIssuingCountry()
    {
        return $this->container['issuing_country'];
    }

    /**
     * Sets issuing_country
     *
     * @param string|null $issuing_country Issuing country of ID in 2-character alpha ISO 3166-2 country format
     *
     * @return $this
     */
    public function setIssuingCountry($issuing_country)
    {
        $this->container['issuing_country'] = $issuing_country;

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


