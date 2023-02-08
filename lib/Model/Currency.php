<?php
/**
 * Currency
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
 * Currency Class Doc Comment
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Currency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Currency';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'name' => 'string',
        'symbol' => 'string',
        'decimals' => 'float',
        'subunit_to_unit' => 'string',
        'primary' => 'bool',
        'min' => 'string',
        'max' => 'string',
        'usd_equivalent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'symbol' => null,
        'decimals' => null,
        'subunit_to_unit' => null,
        'primary' => null,
        'min' => null,
        'max' => null,
        'usd_equivalent' => null
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
        'code' => 'code',
        'name' => 'name',
        'symbol' => 'symbol',
        'decimals' => 'decimals',
        'subunit_to_unit' => 'subunit_to_unit',
        'primary' => 'primary',
        'min' => 'min',
        'max' => 'max',
        'usd_equivalent' => 'usd_equivalent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'symbol' => 'setSymbol',
        'decimals' => 'setDecimals',
        'subunit_to_unit' => 'setSubunitToUnit',
        'primary' => 'setPrimary',
        'min' => 'setMin',
        'max' => 'setMax',
        'usd_equivalent' => 'setUsdEquivalent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'symbol' => 'getSymbol',
        'decimals' => 'getDecimals',
        'subunit_to_unit' => 'getSubunitToUnit',
        'primary' => 'getPrimary',
        'min' => 'getMin',
        'max' => 'getMax',
        'usd_equivalent' => 'getUsdEquivalent'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['decimals'] = isset($data['decimals']) ? $data['decimals'] : null;
        $this->container['subunit_to_unit'] = isset($data['subunit_to_unit']) ? $data['subunit_to_unit'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['usd_equivalent'] = isset($data['usd_equivalent']) ? $data['usd_equivalent'] : null;
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The currency code in 3-character alpha ISO 4217 currency format
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string|null $name Name of currency
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol Symbol of currency
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets decimals
     *
     * @return float|null
     */
    public function getDecimals()
    {
        return $this->container['decimals'];
    }

    /**
     * Sets decimals
     *
     * @param float|null $decimals Number of decimal points
     *
     * @return $this
     */
    public function setDecimals($decimals)
    {
        $this->container['decimals'] = $decimals;

        return $this;
    }

    /**
     * Gets subunit_to_unit
     *
     * @return string|null
     */
    public function getSubunitToUnit()
    {
        return $this->container['subunit_to_unit'];
    }

    /**
     * Sets subunit_to_unit
     *
     * @param string|null $subunit_to_unit Subunits in Unit (eg. there are 100 cents in 1 US Dollar)
     *
     * @return $this
     */
    public function setSubunitToUnit($subunit_to_unit)
    {
        $this->container['subunit_to_unit'] = $subunit_to_unit;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool|null $primary Is this a primary currency?
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets min
     *
     * @return string|null
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     *
     * @param string|null $min The minimum amount allowed in a transaction
     *
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets max
     *
     * @return string|null
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param string|null $max The maximum amount allowed in a transaction
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets usd_equivalent
     *
     * @return string|null
     */
    public function getUsdEquivalent()
    {
        return $this->container['usd_equivalent'];
    }

    /**
     * Sets usd_equivalent
     *
     * @param string|null $usd_equivalent The equivalent of the currency to 1 USD
     *
     * @return $this
     */
    public function setUsdEquivalent($usd_equivalent)
    {
        $this->container['usd_equivalent'] = $usd_equivalent;

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


