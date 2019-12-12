<?php
/**
 * CreateOrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay Checkout API
 *
 * Reepay Checkout REST API
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CreateOrderLine Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ordertext' => 'string',
        'amount' => 'int',
        'vat' => 'float',
        'quantity' => 'int',
        'total_amount' => 'int',
        'amount_incl_vat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ordertext' => null,
        'amount' => 'int32',
        'vat' => 'float',
        'quantity' => 'int32',
        'total_amount' => 'int32',
        'amount_incl_vat' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ordertext' => 'ordertext',
        'amount' => 'amount',
        'vat' => 'vat',
        'quantity' => 'quantity',
        'total_amount' => 'totalAmount',
        'amount_incl_vat' => 'amount_incl_vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ordertext' => 'setOrdertext',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'quantity' => 'setQuantity',
        'total_amount' => 'setTotalAmount',
        'amount_incl_vat' => 'setAmountInclVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ordertext' => 'getOrdertext',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'quantity' => 'getQuantity',
        'total_amount' => 'getTotalAmount',
        'amount_incl_vat' => 'getAmountInclVat'
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
        return self::$swaggerModelName;
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
        $this->container['ordertext'] = isset($data['ordertext']) ? $data['ordertext'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['amount_incl_vat'] = isset($data['amount_incl_vat']) ? $data['amount_incl_vat'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ordertext'] === null) {
            $invalidProperties[] = "'ordertext' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['vat']) && ($this->container['vat'] > 1)) {
            $invalidProperties[] = "invalid value for 'vat', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['vat']) && ($this->container['vat'] < 0)) {
            $invalidProperties[] = "invalid value for 'vat', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
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
     * Gets ordertext
     *
     * @return string
     */
    public function getOrdertext()
    {
        return $this->container['ordertext'];
    }

    /**
     * Sets ordertext
     *
     * @param string $ordertext Order line text
     *
     * @return $this
     */
    public function setOrdertext($ordertext)
    {
        $this->container['ordertext'] = $ordertext;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Per quantity amount in the smallest unit for the account currency
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return float
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param float $vat Optional vat for order line. Account default is used if none given.
     *
     * @return $this
     */
    public function setVat($vat)
    {

        if (!is_null($vat) && ($vat > 1)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateOrderLine., must be smaller than or equal to 1.');
        }
        if (!is_null($vat) && ($vat < 0)) {
            throw new \InvalidArgumentException('invalid value for $vat when calling CreateOrderLine., must be bigger than or equal to 0.');
        }

        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity. Default 1.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling CreateOrderLine., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets amount_incl_vat
     *
     * @return bool
     */
    public function getAmountInclVat()
    {
        return $this->container['amount_incl_vat'];
    }

    /**
     * Sets amount_incl_vat
     *
     * @param bool $amount_incl_vat Whether the per quantity amount is including VAT. Defaults to true.
     *
     * @return $this
     */
    public function setAmountInclVat($amount_incl_vat)
    {
        $this->container['amount_incl_vat'] = $amount_incl_vat;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

