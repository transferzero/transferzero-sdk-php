<?php
/**
 * Entity
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
 * Entity Class Doc Comment
 *
 * @category Class
 * @description This contains the details of the entity. The first time a specific entity is used the full details should be provided.  Entity Example: &#x60;&#x60;&#x60;json {   \&quot;id\&quot;: 39,   \&quot;total_score\&quot;: 35,   \&quot;rating\&quot;: \&quot;Extremely High\&quot;   \&quot;state\&quot;: \&quot;incomplete\&quot;,   \&quot;entity_id\&quot;: \&quot;86912555-272a-48f7-bdbb-eab653150e01\&quot;,   \&quot;entity_type\&quot;: \&quot;Sender\&quot;,   \&quot;remarks\&quot;: \&quot;ready to be reviewed\&quot;,   \&quot;created_at\&quot;: \&quot;2020-05-05T10:55:44.051Z\&quot;,   \&quot;updated_at\&quot;: \&quot;2020-05-05T10:55:44.051Z\&quot; } &#x60;&#x60;&#x60;
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Entity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'total_score' => 'int',
        'rating' => '\TransferZero\Model\EntityRating',
        'state' => '\TransferZero\Model\EntityState',
        'entity_id' => 'string',
        'entity_type' => 'string',
        'remarks' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'total_score' => null,
        'rating' => null,
        'state' => null,
        'entity_id' => 'uuid',
        'entity_type' => null,
        'remarks' => null
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
        'id' => 'id',
        'total_score' => 'total_score',
        'rating' => 'rating',
        'state' => 'state',
        'entity_id' => 'entity_id',
        'entity_type' => 'entity_type',
        'remarks' => 'remarks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'total_score' => 'setTotalScore',
        'rating' => 'setRating',
        'state' => 'setState',
        'entity_id' => 'setEntityId',
        'entity_type' => 'setEntityType',
        'remarks' => 'setRemarks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'total_score' => 'getTotalScore',
        'rating' => 'getRating',
        'state' => 'getState',
        'entity_id' => 'getEntityId',
        'entity_type' => 'getEntityType',
        'remarks' => 'getRemarks'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['total_score'] = isset($data['total_score']) ? $data['total_score'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['entity_type'] = isset($data['entity_type']) ? $data['entity_type'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets total_score
     *
     * @return int|null
     */
    public function getTotalScore()
    {
        return $this->container['total_score'];
    }

    /**
     * Sets total_score
     *
     * @param int|null $total_score Total score of risk assessment
     *
     * @return $this
     */
    public function setTotalScore($total_score)
    {
        $this->container['total_score'] = $total_score;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return \TransferZero\Model\EntityRating|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param \TransferZero\Model\EntityRating|null $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \TransferZero\Model\EntityState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \TransferZero\Model\EntityState|null $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id Id of linked entity
     *
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type Type of entity to create eg. Sender, Company
     *
     * @return $this
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks Notes about entity
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

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

