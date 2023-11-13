<?php
/**
 * ListingsV2SaleDetails
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
 * ListingsV2SaleDetails Class Doc Comment
 *
 * @category Class
 * @description The sale detail&#x27;s of the listing in case of it being for sale or sold
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV2SaleDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.V2.SaleDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sale_method' => 'string',
        'sold_details' => '\Swagger\Client\Model\ListingsV2SoldDetails',
        'auction_details' => '\Swagger\Client\Model\ListingsV2AuctionDetails',
        'tender_details' => '\Swagger\Client\Model\ListingsV2TenderDetails',
        'tenant_details' => '\Swagger\Client\Model\ListingsV2TenantDetails',
        'annual_return' => 'int',
        'sale_terms' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sale_method' => null,
        'sold_details' => null,
        'auction_details' => null,
        'tender_details' => null,
        'tenant_details' => null,
        'annual_return' => 'int32',
        'sale_terms' => null
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
        'sale_method' => 'saleMethod',
        'sold_details' => 'soldDetails',
        'auction_details' => 'auctionDetails',
        'tender_details' => 'tenderDetails',
        'tenant_details' => 'tenantDetails',
        'annual_return' => 'annualReturn',
        'sale_terms' => 'saleTerms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sale_method' => 'setSaleMethod',
        'sold_details' => 'setSoldDetails',
        'auction_details' => 'setAuctionDetails',
        'tender_details' => 'setTenderDetails',
        'tenant_details' => 'setTenantDetails',
        'annual_return' => 'setAnnualReturn',
        'sale_terms' => 'setSaleTerms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sale_method' => 'getSaleMethod',
        'sold_details' => 'getSoldDetails',
        'auction_details' => 'getAuctionDetails',
        'tender_details' => 'getTenderDetails',
        'tenant_details' => 'getTenantDetails',
        'annual_return' => 'getAnnualReturn',
        'sale_terms' => 'getSaleTerms'
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

    const SALE_METHOD_NOT_STATED = 'notStated';
    const SALE_METHOD_AUCTION = 'auction';
    const SALE_METHOD_PRIVATE_TREATY = 'privateTreaty';
    const SALE_METHOD_TENDER = 'tender';
    const SALE_METHOD_EXPRESSION_OF_INTEREST = 'expressionOfInterest';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSaleMethodAllowableValues()
    {
        return [
            self::SALE_METHOD_NOT_STATED,
            self::SALE_METHOD_AUCTION,
            self::SALE_METHOD_PRIVATE_TREATY,
            self::SALE_METHOD_TENDER,
            self::SALE_METHOD_EXPRESSION_OF_INTEREST,
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
        $this->container['sale_method'] = isset($data['sale_method']) ? $data['sale_method'] : null;
        $this->container['sold_details'] = isset($data['sold_details']) ? $data['sold_details'] : null;
        $this->container['auction_details'] = isset($data['auction_details']) ? $data['auction_details'] : null;
        $this->container['tender_details'] = isset($data['tender_details']) ? $data['tender_details'] : null;
        $this->container['tenant_details'] = isset($data['tenant_details']) ? $data['tenant_details'] : null;
        $this->container['annual_return'] = isset($data['annual_return']) ? $data['annual_return'] : null;
        $this->container['sale_terms'] = isset($data['sale_terms']) ? $data['sale_terms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSaleMethodAllowableValues();
        if (!is_null($this->container['sale_method']) && !in_array($this->container['sale_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sale_method', must be one of '%s'",
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
     * Gets sale_method
     *
     * @return string
     */
    public function getSaleMethod()
    {
        return $this->container['sale_method'];
    }

    /**
     * Sets sale_method
     *
     * @param string $sale_method Gets or Sets SaleMethod
     *
     * @return $this
     */
    public function setSaleMethod($sale_method)
    {
        $allowedValues = $this->getSaleMethodAllowableValues();
        if (!is_null($sale_method) && !in_array($sale_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sale_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sale_method'] = $sale_method;

        return $this;
    }

    /**
     * Gets sold_details
     *
     * @return \Swagger\Client\Model\ListingsV2SoldDetails
     */
    public function getSoldDetails()
    {
        return $this->container['sold_details'];
    }

    /**
     * Sets sold_details
     *
     * @param \Swagger\Client\Model\ListingsV2SoldDetails $sold_details sold_details
     *
     * @return $this
     */
    public function setSoldDetails($sold_details)
    {
        $this->container['sold_details'] = $sold_details;

        return $this;
    }

    /**
     * Gets auction_details
     *
     * @return \Swagger\Client\Model\ListingsV2AuctionDetails
     */
    public function getAuctionDetails()
    {
        return $this->container['auction_details'];
    }

    /**
     * Sets auction_details
     *
     * @param \Swagger\Client\Model\ListingsV2AuctionDetails $auction_details auction_details
     *
     * @return $this
     */
    public function setAuctionDetails($auction_details)
    {
        $this->container['auction_details'] = $auction_details;

        return $this;
    }

    /**
     * Gets tender_details
     *
     * @return \Swagger\Client\Model\ListingsV2TenderDetails
     */
    public function getTenderDetails()
    {
        return $this->container['tender_details'];
    }

    /**
     * Sets tender_details
     *
     * @param \Swagger\Client\Model\ListingsV2TenderDetails $tender_details tender_details
     *
     * @return $this
     */
    public function setTenderDetails($tender_details)
    {
        $this->container['tender_details'] = $tender_details;

        return $this;
    }

    /**
     * Gets tenant_details
     *
     * @return \Swagger\Client\Model\ListingsV2TenantDetails
     */
    public function getTenantDetails()
    {
        return $this->container['tenant_details'];
    }

    /**
     * Sets tenant_details
     *
     * @param \Swagger\Client\Model\ListingsV2TenantDetails $tenant_details tenant_details
     *
     * @return $this
     */
    public function setTenantDetails($tenant_details)
    {
        $this->container['tenant_details'] = $tenant_details;

        return $this;
    }

    /**
     * Gets annual_return
     *
     * @return int
     */
    public function getAnnualReturn()
    {
        return $this->container['annual_return'];
    }

    /**
     * Sets annual_return
     *
     * @param int $annual_return Integer value of percentage return on this property or business
     *
     * @return $this
     */
    public function setAnnualReturn($annual_return)
    {
        $this->container['annual_return'] = $annual_return;

        return $this;
    }

    /**
     * Gets sale_terms
     *
     * @return string
     */
    public function getSaleTerms()
    {
        return $this->container['sale_terms'];
    }

    /**
     * Sets sale_terms
     *
     * @param string $sale_terms Information relating to aspects of the sale, such as required deposit, settlement time
     *
     * @return $this
     */
    public function setSaleTerms($sale_terms)
    {
        $this->container['sale_terms'] = $sale_terms;

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
