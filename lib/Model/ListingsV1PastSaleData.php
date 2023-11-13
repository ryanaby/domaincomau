<?php
/**
 * ListingsV1PastSaleData
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
 * ListingsV1PastSaleData Class Doc Comment
 *
 * @category Class
 * @description Information for past property sales
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1PastSaleData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.v1.PastSaleData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unit_number' => 'string',
        'street_number' => 'string',
        'street' => 'string',
        'suburb' => 'string',
        'postcode' => 'string',
        'state' => 'string',
        'display_address' => 'string',
        'date_of_sale' => 'string',
        'sold_price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unit_number' => null,
        'street_number' => null,
        'street' => null,
        'suburb' => null,
        'postcode' => null,
        'state' => null,
        'display_address' => null,
        'date_of_sale' => null,
        'sold_price' => 'int64'
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
        'unit_number' => 'unitNumber',
        'street_number' => 'streetNumber',
        'street' => 'street',
        'suburb' => 'suburb',
        'postcode' => 'postcode',
        'state' => 'state',
        'display_address' => 'displayAddress',
        'date_of_sale' => 'dateOfSale',
        'sold_price' => 'soldPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_number' => 'setUnitNumber',
        'street_number' => 'setStreetNumber',
        'street' => 'setStreet',
        'suburb' => 'setSuburb',
        'postcode' => 'setPostcode',
        'state' => 'setState',
        'display_address' => 'setDisplayAddress',
        'date_of_sale' => 'setDateOfSale',
        'sold_price' => 'setSoldPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_number' => 'getUnitNumber',
        'street_number' => 'getStreetNumber',
        'street' => 'getStreet',
        'suburb' => 'getSuburb',
        'postcode' => 'getPostcode',
        'state' => 'getState',
        'display_address' => 'getDisplayAddress',
        'date_of_sale' => 'getDateOfSale',
        'sold_price' => 'getSoldPrice'
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
        $this->container['unit_number'] = isset($data['unit_number']) ? $data['unit_number'] : null;
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['display_address'] = isset($data['display_address']) ? $data['display_address'] : null;
        $this->container['date_of_sale'] = isset($data['date_of_sale']) ? $data['date_of_sale'] : null;
        $this->container['sold_price'] = isset($data['sold_price']) ? $data['sold_price'] : null;
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
     * Gets unit_number
     *
     * @return string
     */
    public function getUnitNumber()
    {
        return $this->container['unit_number'];
    }

    /**
     * Sets unit_number
     *
     * @param string $unit_number Property unit number
     *
     * @return $this
     */
    public function setUnitNumber($unit_number)
    {
        $this->container['unit_number'] = $unit_number;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string $street_number Property street number
     *
     * @return $this
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

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
     * @param string $street Property Street name
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb Property suburb name
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Property postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Property state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets display_address
     *
     * @return string
     */
    public function getDisplayAddress()
    {
        return $this->container['display_address'];
    }

    /**
     * Sets display_address
     *
     * @param string $display_address display formatted address
     *
     * @return $this
     */
    public function setDisplayAddress($display_address)
    {
        $this->container['display_address'] = $display_address;

        return $this;
    }

    /**
     * Gets date_of_sale
     *
     * @return string
     */
    public function getDateOfSale()
    {
        return $this->container['date_of_sale'];
    }

    /**
     * Sets date_of_sale
     *
     * @param string $date_of_sale Registered date of the sale
     *
     * @return $this
     */
    public function setDateOfSale($date_of_sale)
    {
        $this->container['date_of_sale'] = $date_of_sale;

        return $this;
    }

    /**
     * Gets sold_price
     *
     * @return int
     */
    public function getSoldPrice()
    {
        return $this->container['sold_price'];
    }

    /**
     * Sets sold_price
     *
     * @param int $sold_price Property sold price
     *
     * @return $this
     */
    public function setSoldPrice($sold_price)
    {
        $this->container['sold_price'] = $sold_price;

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
