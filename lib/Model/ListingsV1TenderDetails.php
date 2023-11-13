<?php
/**
 * ListingsV1TenderDetails
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
 * ListingsV1TenderDetails Class Doc Comment
 *
 * @category Class
 * @description Tender details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1TenderDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.v1.TenderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tender_recipient_name' => 'string',
        'tender_address' => 'string',
        'tender_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tender_recipient_name' => null,
        'tender_address' => null,
        'tender_end_date' => 'date-time'
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
        'tender_recipient_name' => 'tenderRecipientName',
        'tender_address' => 'tenderAddress',
        'tender_end_date' => 'tenderEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tender_recipient_name' => 'setTenderRecipientName',
        'tender_address' => 'setTenderAddress',
        'tender_end_date' => 'setTenderEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tender_recipient_name' => 'getTenderRecipientName',
        'tender_address' => 'getTenderAddress',
        'tender_end_date' => 'getTenderEndDate'
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
        $this->container['tender_recipient_name'] = isset($data['tender_recipient_name']) ? $data['tender_recipient_name'] : null;
        $this->container['tender_address'] = isset($data['tender_address']) ? $data['tender_address'] : null;
        $this->container['tender_end_date'] = isset($data['tender_end_date']) ? $data['tender_end_date'] : null;
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
     * Gets tender_recipient_name
     *
     * @return string
     */
    public function getTenderRecipientName()
    {
        return $this->container['tender_recipient_name'];
    }

    /**
     * Sets tender_recipient_name
     *
     * @param string $tender_recipient_name Tender recipient name
     *
     * @return $this
     */
    public function setTenderRecipientName($tender_recipient_name)
    {
        $this->container['tender_recipient_name'] = $tender_recipient_name;

        return $this;
    }

    /**
     * Gets tender_address
     *
     * @return string
     */
    public function getTenderAddress()
    {
        return $this->container['tender_address'];
    }

    /**
     * Sets tender_address
     *
     * @param string $tender_address Tender address
     *
     * @return $this
     */
    public function setTenderAddress($tender_address)
    {
        $this->container['tender_address'] = $tender_address;

        return $this;
    }

    /**
     * Gets tender_end_date
     *
     * @return \DateTime
     */
    public function getTenderEndDate()
    {
        return $this->container['tender_end_date'];
    }

    /**
     * Sets tender_end_date
     *
     * @param \DateTime $tender_end_date Tender closing date. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setTenderEndDate($tender_end_date)
    {
        $this->container['tender_end_date'] = $tender_end_date;

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
