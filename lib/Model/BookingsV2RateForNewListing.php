<?php
/**
 * BookingsV2RateForNewListing
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domain Public API
 *
 * See https://developer.domain.com.au for more information
 *
 * OpenAPI spec version: latest
 * Contact: api@domain.com.au
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
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
 * BookingsV2RateForNewListing Class Doc Comment
 *
 * @category Class
 * @description NewListingRateResponse
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BookingsV2RateForNewListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bookings.V2.RateForNewListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost_ex_gst' => 'double',
        'cost_inc_gst' => 'double',
        'contract_end_date' => '\DateTime',
        'message' => 'string',
        'price_matrix_id' => 'int',
        'product_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost_ex_gst' => 'double',
        'cost_inc_gst' => 'double',
        'contract_end_date' => 'date-time',
        'message' => null,
        'price_matrix_id' => 'int32',
        'product_name' => null
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
        'cost_ex_gst' => 'costExGst',
        'cost_inc_gst' => 'costIncGst',
        'contract_end_date' => 'contractEndDate',
        'message' => 'message',
        'price_matrix_id' => 'priceMatrixId',
        'product_name' => 'productName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_ex_gst' => 'setCostExGst',
        'cost_inc_gst' => 'setCostIncGst',
        'contract_end_date' => 'setContractEndDate',
        'message' => 'setMessage',
        'price_matrix_id' => 'setPriceMatrixId',
        'product_name' => 'setProductName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_ex_gst' => 'getCostExGst',
        'cost_inc_gst' => 'getCostIncGst',
        'contract_end_date' => 'getContractEndDate',
        'message' => 'getMessage',
        'price_matrix_id' => 'getPriceMatrixId',
        'product_name' => 'getProductName'
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
        $this->container['cost_ex_gst'] = isset($data['cost_ex_gst']) ? $data['cost_ex_gst'] : null;
        $this->container['cost_inc_gst'] = isset($data['cost_inc_gst']) ? $data['cost_inc_gst'] : null;
        $this->container['contract_end_date'] = isset($data['contract_end_date']) ? $data['contract_end_date'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['price_matrix_id'] = isset($data['price_matrix_id']) ? $data['price_matrix_id'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
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
     * Gets cost_ex_gst
     *
     * @return double
     */
    public function getCostExGst()
    {
        return $this->container['cost_ex_gst'];
    }

    /**
     * Sets cost_ex_gst
     *
     * @param double $cost_ex_gst Gets or Sets CostExGst
     *
     * @return $this
     */
    public function setCostExGst($cost_ex_gst)
    {
        $this->container['cost_ex_gst'] = $cost_ex_gst;

        return $this;
    }

    /**
     * Gets cost_inc_gst
     *
     * @return double
     */
    public function getCostIncGst()
    {
        return $this->container['cost_inc_gst'];
    }

    /**
     * Sets cost_inc_gst
     *
     * @param double $cost_inc_gst Gets or Sets CostIncGst
     *
     * @return $this
     */
    public function setCostIncGst($cost_inc_gst)
    {
        $this->container['cost_inc_gst'] = $cost_inc_gst;

        return $this;
    }

    /**
     * Gets contract_end_date
     *
     * @return \DateTime
     */
    public function getContractEndDate()
    {
        return $this->container['contract_end_date'];
    }

    /**
     * Sets contract_end_date
     *
     * @param \DateTime $contract_end_date Gets or Sets ContractEndDate
     *
     * @return $this
     */
    public function setContractEndDate($contract_end_date)
    {
        $this->container['contract_end_date'] = $contract_end_date;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Gets or Sets Message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets price_matrix_id
     *
     * @return int
     */
    public function getPriceMatrixId()
    {
        return $this->container['price_matrix_id'];
    }

    /**
     * Sets price_matrix_id
     *
     * @param int $price_matrix_id Gets or Sets PriceMatrixId
     *
     * @return $this
     */
    public function setPriceMatrixId($price_matrix_id)
    {
        $this->container['price_matrix_id'] = $price_matrix_id;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name Gets or Sets ProductName
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
