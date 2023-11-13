<?php
/**
 * ListingsV2RentalDetails
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
 * ListingsV2RentalDetails Class Doc Comment
 *
 * @category Class
 * @description The rental detail&#x27;s of the listing in case of it being for rent or leased
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV2RentalDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.V2.RentalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rental_method' => 'string',
        'source' => 'string',
        'leased_date' => '\DateTime',
        'leased_price' => 'int',
        'can_display_price' => 'bool',
        'leased_months' => 'int',
        'term_of_lease_from' => 'int',
        'term_of_lease_to' => 'int',
        'lease_outgoings' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rental_method' => null,
        'source' => null,
        'leased_date' => 'date-time',
        'leased_price' => 'int32',
        'can_display_price' => null,
        'leased_months' => 'int32',
        'term_of_lease_from' => 'int32',
        'term_of_lease_to' => 'int32',
        'lease_outgoings' => 'int32'
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
        'rental_method' => 'rentalMethod',
        'source' => 'source',
        'leased_date' => 'leasedDate',
        'leased_price' => 'leasedPrice',
        'can_display_price' => 'canDisplayPrice',
        'leased_months' => 'leasedMonths',
        'term_of_lease_from' => 'termOfLeaseFrom',
        'term_of_lease_to' => 'termOfLeaseTo',
        'lease_outgoings' => 'leaseOutgoings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rental_method' => 'setRentalMethod',
        'source' => 'setSource',
        'leased_date' => 'setLeasedDate',
        'leased_price' => 'setLeasedPrice',
        'can_display_price' => 'setCanDisplayPrice',
        'leased_months' => 'setLeasedMonths',
        'term_of_lease_from' => 'setTermOfLeaseFrom',
        'term_of_lease_to' => 'setTermOfLeaseTo',
        'lease_outgoings' => 'setLeaseOutgoings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rental_method' => 'getRentalMethod',
        'source' => 'getSource',
        'leased_date' => 'getLeasedDate',
        'leased_price' => 'getLeasedPrice',
        'can_display_price' => 'getCanDisplayPrice',
        'leased_months' => 'getLeasedMonths',
        'term_of_lease_from' => 'getTermOfLeaseFrom',
        'term_of_lease_to' => 'getTermOfLeaseTo',
        'lease_outgoings' => 'getLeaseOutgoings'
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

    const RENTAL_METHOD_NOT_STATED = 'notStated';
    const RENTAL_METHOD_RENT = 'rent';
    const RENTAL_METHOD_SHARE = 'share';
    const RENTAL_METHOD_HOLIDAY = 'holiday';
    const RENTAL_METHOD_LEASE = 'lease';
    const SOURCE_INTERNAL = 'internal';
    const SOURCE_EXTERNAL = 'external';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRentalMethodAllowableValues()
    {
        return [
            self::RENTAL_METHOD_NOT_STATED,
            self::RENTAL_METHOD_RENT,
            self::RENTAL_METHOD_SHARE,
            self::RENTAL_METHOD_HOLIDAY,
            self::RENTAL_METHOD_LEASE,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_INTERNAL,
            self::SOURCE_EXTERNAL,
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
        $this->container['rental_method'] = isset($data['rental_method']) ? $data['rental_method'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['leased_date'] = isset($data['leased_date']) ? $data['leased_date'] : null;
        $this->container['leased_price'] = isset($data['leased_price']) ? $data['leased_price'] : null;
        $this->container['can_display_price'] = isset($data['can_display_price']) ? $data['can_display_price'] : null;
        $this->container['leased_months'] = isset($data['leased_months']) ? $data['leased_months'] : null;
        $this->container['term_of_lease_from'] = isset($data['term_of_lease_from']) ? $data['term_of_lease_from'] : null;
        $this->container['term_of_lease_to'] = isset($data['term_of_lease_to']) ? $data['term_of_lease_to'] : null;
        $this->container['lease_outgoings'] = isset($data['lease_outgoings']) ? $data['lease_outgoings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRentalMethodAllowableValues();
        if (!is_null($this->container['rental_method']) && !in_array($this->container['rental_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rental_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets rental_method
     *
     * @return string
     */
    public function getRentalMethod()
    {
        return $this->container['rental_method'];
    }

    /**
     * Sets rental_method
     *
     * @param string $rental_method Gets or Sets RentalMethod
     *
     * @return $this
     */
    public function setRentalMethod($rental_method)
    {
        $allowedValues = $this->getRentalMethodAllowableValues();
        if (!is_null($rental_method) && !in_array($rental_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'rental_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rental_method'] = $rental_method;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Gets or Sets Source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets leased_date
     *
     * @return \DateTime
     */
    public function getLeasedDate()
    {
        return $this->container['leased_date'];
    }

    /**
     * Sets leased_date
     *
     * @param \DateTime $leased_date The Date the listing was leased. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setLeasedDate($leased_date)
    {
        $this->container['leased_date'] = $leased_date;

        return $this;
    }

    /**
     * Gets leased_price
     *
     * @return int
     */
    public function getLeasedPrice()
    {
        return $this->container['leased_price'];
    }

    /**
     * Sets leased_price
     *
     * @param int $leased_price The last leased price entered by the Advertiser  This price will only be visible if allowed by the Advertiser  and the listing as been leased
     *
     * @return $this
     */
    public function setLeasedPrice($leased_price)
    {
        $this->container['leased_price'] = $leased_price;

        return $this;
    }

    /**
     * Gets can_display_price
     *
     * @return bool
     */
    public function getCanDisplayPrice()
    {
        return $this->container['can_display_price'];
    }

    /**
     * Sets can_display_price
     *
     * @param bool $can_display_price Indicates whether this instance can display price
     *
     * @return $this
     */
    public function setCanDisplayPrice($can_display_price)
    {
        $this->container['can_display_price'] = $can_display_price;

        return $this;
    }

    /**
     * Gets leased_months
     *
     * @return int
     */
    public function getLeasedMonths()
    {
        return $this->container['leased_months'];
    }

    /**
     * Sets leased_months
     *
     * @param int $leased_months The number of months the property was last leased for  This will only be visible if the property has been leased
     *
     * @return $this
     */
    public function setLeasedMonths($leased_months)
    {
        $this->container['leased_months'] = $leased_months;

        return $this;
    }

    /**
     * Gets term_of_lease_from
     *
     * @return int
     */
    public function getTermOfLeaseFrom()
    {
        return $this->container['term_of_lease_from'];
    }

    /**
     * Sets term_of_lease_from
     *
     * @param int $term_of_lease_from Lease term range from
     *
     * @return $this
     */
    public function setTermOfLeaseFrom($term_of_lease_from)
    {
        $this->container['term_of_lease_from'] = $term_of_lease_from;

        return $this;
    }

    /**
     * Gets term_of_lease_to
     *
     * @return int
     */
    public function getTermOfLeaseTo()
    {
        return $this->container['term_of_lease_to'];
    }

    /**
     * Sets term_of_lease_to
     *
     * @param int $term_of_lease_to Lease term range to
     *
     * @return $this
     */
    public function setTermOfLeaseTo($term_of_lease_to)
    {
        $this->container['term_of_lease_to'] = $term_of_lease_to;

        return $this;
    }

    /**
     * Gets lease_outgoings
     *
     * @return int
     */
    public function getLeaseOutgoings()
    {
        return $this->container['lease_outgoings'];
    }

    /**
     * Sets lease_outgoings
     *
     * @param int $lease_outgoings Outgoing cost of current lease
     *
     * @return $this
     */
    public function setLeaseOutgoings($lease_outgoings)
    {
        $this->container['lease_outgoings'] = $lease_outgoings;

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
