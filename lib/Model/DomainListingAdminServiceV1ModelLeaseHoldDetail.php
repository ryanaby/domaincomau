<?php
/**
 * DomainListingAdminServiceV1ModelLeaseHoldDetail
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
 * DomainListingAdminServiceV1ModelLeaseHoldDetail Class Doc Comment
 *
 * @category Class
 * @description Contains additional details about a business listing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainListingAdminServiceV1ModelLeaseHoldDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.ListingAdminService.v1.Model.LeaseHoldDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leasehold_rent_period' => 'string',
        'leasehold_price_unit' => 'string',
        'leasehold_term' => 'int',
        'leasehold_start' => '\DateTime',
        'leasehold_rent' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leasehold_rent_period' => null,
        'leasehold_price_unit' => null,
        'leasehold_term' => 'int32',
        'leasehold_start' => 'date-time',
        'leasehold_rent' => 'double'
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
        'leasehold_rent_period' => 'leaseholdRentPeriod',
        'leasehold_price_unit' => 'leaseholdPriceUnit',
        'leasehold_term' => 'leaseholdTerm',
        'leasehold_start' => 'leaseholdStart',
        'leasehold_rent' => 'leaseholdRent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leasehold_rent_period' => 'setLeaseholdRentPeriod',
        'leasehold_price_unit' => 'setLeaseholdPriceUnit',
        'leasehold_term' => 'setLeaseholdTerm',
        'leasehold_start' => 'setLeaseholdStart',
        'leasehold_rent' => 'setLeaseholdRent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leasehold_rent_period' => 'getLeaseholdRentPeriod',
        'leasehold_price_unit' => 'getLeaseholdPriceUnit',
        'leasehold_term' => 'getLeaseholdTerm',
        'leasehold_start' => 'getLeaseholdStart',
        'leasehold_rent' => 'getLeaseholdRent'
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

    const LEASEHOLD_RENT_PERIOD_PER_MONTH = 'perMonth';
    const LEASEHOLD_RENT_PERIOD_PER_ANNUM = 'perAnnum';
    const LEASEHOLD_PRICE_UNIT_TOTAL_AMOUNT = 'totalAmount';
    const LEASEHOLD_PRICE_UNIT_PER_SQM = 'perSqm';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaseholdRentPeriodAllowableValues()
    {
        return [
            self::LEASEHOLD_RENT_PERIOD_PER_MONTH,
            self::LEASEHOLD_RENT_PERIOD_PER_ANNUM,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaseholdPriceUnitAllowableValues()
    {
        return [
            self::LEASEHOLD_PRICE_UNIT_TOTAL_AMOUNT,
            self::LEASEHOLD_PRICE_UNIT_PER_SQM,
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
        $this->container['leasehold_rent_period'] = isset($data['leasehold_rent_period']) ? $data['leasehold_rent_period'] : null;
        $this->container['leasehold_price_unit'] = isset($data['leasehold_price_unit']) ? $data['leasehold_price_unit'] : null;
        $this->container['leasehold_term'] = isset($data['leasehold_term']) ? $data['leasehold_term'] : null;
        $this->container['leasehold_start'] = isset($data['leasehold_start']) ? $data['leasehold_start'] : null;
        $this->container['leasehold_rent'] = isset($data['leasehold_rent']) ? $data['leasehold_rent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLeaseholdRentPeriodAllowableValues();
        if (!is_null($this->container['leasehold_rent_period']) && !in_array($this->container['leasehold_rent_period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leasehold_rent_period', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaseholdPriceUnitAllowableValues();
        if (!is_null($this->container['leasehold_price_unit']) && !in_array($this->container['leasehold_price_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leasehold_price_unit', must be one of '%s'",
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
     * Gets leasehold_rent_period
     *
     * @return string
     */
    public function getLeaseholdRentPeriod()
    {
        return $this->container['leasehold_rent_period'];
    }

    /**
     * Sets leasehold_rent_period
     *
     * @param string $leasehold_rent_period Rent period for the existing lease, can be: ['perMonth', 'perAnnum']
     *
     * @return $this
     */
    public function setLeaseholdRentPeriod($leasehold_rent_period)
    {
        $allowedValues = $this->getLeaseholdRentPeriodAllowableValues();
        if (!is_null($leasehold_rent_period) && !in_array($leasehold_rent_period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leasehold_rent_period', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leasehold_rent_period'] = $leasehold_rent_period;

        return $this;
    }

    /**
     * Gets leasehold_price_unit
     *
     * @return string
     */
    public function getLeaseholdPriceUnit()
    {
        return $this->container['leasehold_price_unit'];
    }

    /**
     * Sets leasehold_price_unit
     *
     * @param string $leasehold_price_unit Price unit for the existing lease, can be:  ['totalAmount', 'perSqm']
     *
     * @return $this
     */
    public function setLeaseholdPriceUnit($leasehold_price_unit)
    {
        $allowedValues = $this->getLeaseholdPriceUnitAllowableValues();
        if (!is_null($leasehold_price_unit) && !in_array($leasehold_price_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leasehold_price_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leasehold_price_unit'] = $leasehold_price_unit;

        return $this;
    }

    /**
     * Gets leasehold_term
     *
     * @return int
     */
    public function getLeaseholdTerm()
    {
        return $this->container['leasehold_term'];
    }

    /**
     * Sets leasehold_term
     *
     * @param int $leasehold_term Term of existing lease
     *
     * @return $this
     */
    public function setLeaseholdTerm($leasehold_term)
    {
        $this->container['leasehold_term'] = $leasehold_term;

        return $this;
    }

    /**
     * Gets leasehold_start
     *
     * @return \DateTime
     */
    public function getLeaseholdStart()
    {
        return $this->container['leasehold_start'];
    }

    /**
     * Sets leasehold_start
     *
     * @param \DateTime $leasehold_start Start of existing lease
     *
     * @return $this
     */
    public function setLeaseholdStart($leasehold_start)
    {
        $this->container['leasehold_start'] = $leasehold_start;

        return $this;
    }

    /**
     * Gets leasehold_rent
     *
     * @return double
     */
    public function getLeaseholdRent()
    {
        return $this->container['leasehold_rent'];
    }

    /**
     * Sets leasehold_rent
     *
     * @param double $leasehold_rent Rent amount for the existing lease
     *
     * @return $this
     */
    public function setLeaseholdRent($leasehold_rent)
    {
        $this->container['leasehold_rent'] = $leasehold_rent;

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
