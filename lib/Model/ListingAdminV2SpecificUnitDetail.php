<?php
/**
 * ListingAdminV2SpecificUnitDetail
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
 * ListingAdminV2SpecificUnitDetail Class Doc Comment
 *
 * @category Class
 * @description offered units details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingAdminV2SpecificUnitDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingAdmin.v2.SpecificUnitDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'size' => 'int',
        'price' => 'double',
        'notes' => 'string',
        'is_sold_or_leased' => 'bool',
        'occupancy' => 'string',
        'price_unit' => 'string',
        'lease_price_for_saleor_lease' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'size' => 'int32',
        'price' => 'double',
        'notes' => null,
        'is_sold_or_leased' => null,
        'occupancy' => null,
        'price_unit' => null,
        'lease_price_for_saleor_lease' => 'double'
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
        'name' => 'name',
        'size' => 'size',
        'price' => 'price',
        'notes' => 'notes',
        'is_sold_or_leased' => 'isSoldOrLeased',
        'occupancy' => 'occupancy',
        'price_unit' => 'priceUnit',
        'lease_price_for_saleor_lease' => 'leasePriceForSaleorLease'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'size' => 'setSize',
        'price' => 'setPrice',
        'notes' => 'setNotes',
        'is_sold_or_leased' => 'setIsSoldOrLeased',
        'occupancy' => 'setOccupancy',
        'price_unit' => 'setPriceUnit',
        'lease_price_for_saleor_lease' => 'setLeasePriceForSaleorLease'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'size' => 'getSize',
        'price' => 'getPrice',
        'notes' => 'getNotes',
        'is_sold_or_leased' => 'getIsSoldOrLeased',
        'occupancy' => 'getOccupancy',
        'price_unit' => 'getPriceUnit',
        'lease_price_for_saleor_lease' => 'getLeasePriceForSaleorLease'
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

    const OCCUPANCY_TENANTED = 'tenanted';
    const OCCUPANCY_VACANT = 'vacant';
    const PRICE_UNIT_TOTAL_AMOUNT = 'totalAmount';
    const PRICE_UNIT_PER_SQM = 'perSqm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOccupancyAllowableValues()
    {
        return [
            self::OCCUPANCY_TENANTED,
            self::OCCUPANCY_VACANT,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceUnitAllowableValues()
    {
        return [
            self::PRICE_UNIT_TOTAL_AMOUNT,
            self::PRICE_UNIT_PER_SQM,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['is_sold_or_leased'] = isset($data['is_sold_or_leased']) ? $data['is_sold_or_leased'] : null;
        $this->container['occupancy'] = isset($data['occupancy']) ? $data['occupancy'] : null;
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['lease_price_for_saleor_lease'] = isset($data['lease_price_for_saleor_lease']) ? $data['lease_price_for_saleor_lease'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOccupancyAllowableValues();
        if (!is_null($this->container['occupancy']) && !in_array($this->container['occupancy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'occupancy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($this->container['price_unit']) && !in_array($this->container['price_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_unit', must be one of '%s'",
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
     * @param string $name Unit number
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size Unit size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Unit price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Additional notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets is_sold_or_leased
     *
     * @return bool
     */
    public function getIsSoldOrLeased()
    {
        return $this->container['is_sold_or_leased'];
    }

    /**
     * Sets is_sold_or_leased
     *
     * @param bool $is_sold_or_leased Is it available?
     *
     * @return $this
     */
    public function setIsSoldOrLeased($is_sold_or_leased)
    {
        $this->container['is_sold_or_leased'] = $is_sold_or_leased;

        return $this;
    }

    /**
     * Gets occupancy
     *
     * @return string
     */
    public function getOccupancy()
    {
        return $this->container['occupancy'];
    }

    /**
     * Sets occupancy
     *
     * @param string $occupancy Occupancy type
     *
     * @return $this
     */
    public function setOccupancy($occupancy)
    {
        $allowedValues = $this->getOccupancyAllowableValues();
        if (!is_null($occupancy) && !in_array($occupancy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'occupancy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * Gets price_unit
     *
     * @return string
     */
    public function getPriceUnit()
    {
        return $this->container['price_unit'];
    }

    /**
     * Sets price_unit
     *
     * @param string $price_unit Price unit type
     *
     * @return $this
     */
    public function setPriceUnit($price_unit)
    {
        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($price_unit) && !in_array($price_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_unit'] = $price_unit;

        return $this;
    }

    /**
     * Gets lease_price_for_saleor_lease
     *
     * @return double
     */
    public function getLeasePriceForSaleorLease()
    {
        return $this->container['lease_price_for_saleor_lease'];
    }

    /**
     * Sets lease_price_for_saleor_lease
     *
     * @param double $lease_price_for_saleor_lease Lease price for sale or lease
     *
     * @return $this
     */
    public function setLeasePriceForSaleorLease($lease_price_for_saleor_lease)
    {
        $this->container['lease_price_for_saleor_lease'] = $lease_price_for_saleor_lease;

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