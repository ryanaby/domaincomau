<?php
/**
 * PropertyEnrichmentV1PropertyActivitySummary
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
 * PropertyEnrichmentV1PropertyActivitySummary Class Doc Comment
 *
 * @category Class
 * @description Property activity summary derived from property activity events (not currently in EVENT-SCHEMAS project)
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyEnrichmentV1PropertyActivitySummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Property.Enrichment.v1.PropertyActivitySummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_listed_date' => 'string',
        'last_sold_date' => 'string',
        'last_rented_date' => 'string',
        'last_listed_price' => 'float',
        'last_sold_price' => 'float',
        'last_rented_price' => 'float',
        'owner_renter' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_listed_date' => null,
        'last_sold_date' => null,
        'last_rented_date' => null,
        'last_listed_price' => null,
        'last_sold_price' => null,
        'last_rented_price' => null,
        'owner_renter' => null
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
        'last_listed_date' => 'lastListedDate',
        'last_sold_date' => 'lastSoldDate',
        'last_rented_date' => 'lastRentedDate',
        'last_listed_price' => 'lastListedPrice',
        'last_sold_price' => 'lastSoldPrice',
        'last_rented_price' => 'lastRentedPrice',
        'owner_renter' => 'ownerRenter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_listed_date' => 'setLastListedDate',
        'last_sold_date' => 'setLastSoldDate',
        'last_rented_date' => 'setLastRentedDate',
        'last_listed_price' => 'setLastListedPrice',
        'last_sold_price' => 'setLastSoldPrice',
        'last_rented_price' => 'setLastRentedPrice',
        'owner_renter' => 'setOwnerRenter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_listed_date' => 'getLastListedDate',
        'last_sold_date' => 'getLastSoldDate',
        'last_rented_date' => 'getLastRentedDate',
        'last_listed_price' => 'getLastListedPrice',
        'last_sold_price' => 'getLastSoldPrice',
        'last_rented_price' => 'getLastRentedPrice',
        'owner_renter' => 'getOwnerRenter'
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

    const OWNER_RENTER_OWNER = 'owner';
    const OWNER_RENTER_RENTER = 'renter';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOwnerRenterAllowableValues()
    {
        return [
            self::OWNER_RENTER_OWNER
            self::OWNER_RENTER_RENTER
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
        $this->container['last_listed_date'] = isset($data['last_listed_date']) ? $data['last_listed_date'] : null;
        $this->container['last_sold_date'] = isset($data['last_sold_date']) ? $data['last_sold_date'] : null;
        $this->container['last_rented_date'] = isset($data['last_rented_date']) ? $data['last_rented_date'] : null;
        $this->container['last_listed_price'] = isset($data['last_listed_price']) ? $data['last_listed_price'] : null;
        $this->container['last_sold_price'] = isset($data['last_sold_price']) ? $data['last_sold_price'] : null;
        $this->container['last_rented_price'] = isset($data['last_rented_price']) ? $data['last_rented_price'] : null;
        $this->container['owner_renter'] = isset($data['owner_renter']) ? $data['owner_renter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOwnerRenterAllowableValues();
        if (!is_null($this->container['owner_renter']) && !in_array($this->container['owner_renter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'owner_renter', must be one of '%s'",
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
     * Gets last_listed_date
     *
     * @return string
     */
    public function getLastListedDate()
    {
        return $this->container['last_listed_date'];
    }

    /**
     * Sets last_listed_date
     *
     * @param string $last_listed_date last_listed_date
     *
     * @return $this
     */
    public function setLastListedDate($last_listed_date)
    {
        $this->container['last_listed_date'] = $last_listed_date;

        return $this;
    }

    /**
     * Gets last_sold_date
     *
     * @return string
     */
    public function getLastSoldDate()
    {
        return $this->container['last_sold_date'];
    }

    /**
     * Sets last_sold_date
     *
     * @param string $last_sold_date last_sold_date
     *
     * @return $this
     */
    public function setLastSoldDate($last_sold_date)
    {
        $this->container['last_sold_date'] = $last_sold_date;

        return $this;
    }

    /**
     * Gets last_rented_date
     *
     * @return string
     */
    public function getLastRentedDate()
    {
        return $this->container['last_rented_date'];
    }

    /**
     * Sets last_rented_date
     *
     * @param string $last_rented_date last_rented_date
     *
     * @return $this
     */
    public function setLastRentedDate($last_rented_date)
    {
        $this->container['last_rented_date'] = $last_rented_date;

        return $this;
    }

    /**
     * Gets last_listed_price
     *
     * @return float
     */
    public function getLastListedPrice()
    {
        return $this->container['last_listed_price'];
    }

    /**
     * Sets last_listed_price
     *
     * @param float $last_listed_price last_listed_price
     *
     * @return $this
     */
    public function setLastListedPrice($last_listed_price)
    {
        $this->container['last_listed_price'] = $last_listed_price;

        return $this;
    }

    /**
     * Gets last_sold_price
     *
     * @return float
     */
    public function getLastSoldPrice()
    {
        return $this->container['last_sold_price'];
    }

    /**
     * Sets last_sold_price
     *
     * @param float $last_sold_price last_sold_price
     *
     * @return $this
     */
    public function setLastSoldPrice($last_sold_price)
    {
        $this->container['last_sold_price'] = $last_sold_price;

        return $this;
    }

    /**
     * Gets last_rented_price
     *
     * @return float
     */
    public function getLastRentedPrice()
    {
        return $this->container['last_rented_price'];
    }

    /**
     * Sets last_rented_price
     *
     * @param float $last_rented_price last_rented_price
     *
     * @return $this
     */
    public function setLastRentedPrice($last_rented_price)
    {
        $this->container['last_rented_price'] = $last_rented_price;

        return $this;
    }

    /**
     * Gets owner_renter
     *
     * @return string
     */
    public function getOwnerRenter()
    {
        return $this->container['owner_renter'];
    }

    /**
     * Sets owner_renter
     *
     * @param string $owner_renter Whether the most recent known activity indicates that the current resident is the owner or renter
     *
     * @return $this
     */
    public function setOwnerRenter($owner_renter)
    {
        $allowedValues = $this->getOwnerRenterAllowableValues();
        if (!is_null($owner_renter) && !in_array($owner_renter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'owner_renter', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['owner_renter'] = $owner_renter;

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
