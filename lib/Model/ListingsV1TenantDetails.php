<?php
/**
 * ListingsV1TenantDetails
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
 * ListingsV1TenantDetails Class Doc Comment
 *
 * @category Class
 * @description Tenant Details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1TenantDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.v1.TenantDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lease_date_variable' => 'bool',
        'lease_options' => 'string',
        'tenant_info_term_of_lease_from' => 'int',
        'tenant_info_term_of_lease_to' => 'int',
        'tenant_name' => 'string',
        'tenant_rent_details' => 'string',
        'lease_start_date' => '\DateTime',
        'lease_end_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lease_date_variable' => null,
        'lease_options' => null,
        'tenant_info_term_of_lease_from' => 'int32',
        'tenant_info_term_of_lease_to' => 'int32',
        'tenant_name' => null,
        'tenant_rent_details' => null,
        'lease_start_date' => 'date-time',
        'lease_end_date' => 'date-time'
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
        'lease_date_variable' => 'leaseDateVariable',
        'lease_options' => 'leaseOptions',
        'tenant_info_term_of_lease_from' => 'tenantInfoTermOfLeaseFrom',
        'tenant_info_term_of_lease_to' => 'tenantInfoTermOfLeaseTo',
        'tenant_name' => 'tenantName',
        'tenant_rent_details' => 'tenantRentDetails',
        'lease_start_date' => 'leaseStartDate',
        'lease_end_date' => 'leaseEndDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lease_date_variable' => 'setLeaseDateVariable',
        'lease_options' => 'setLeaseOptions',
        'tenant_info_term_of_lease_from' => 'setTenantInfoTermOfLeaseFrom',
        'tenant_info_term_of_lease_to' => 'setTenantInfoTermOfLeaseTo',
        'tenant_name' => 'setTenantName',
        'tenant_rent_details' => 'setTenantRentDetails',
        'lease_start_date' => 'setLeaseStartDate',
        'lease_end_date' => 'setLeaseEndDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lease_date_variable' => 'getLeaseDateVariable',
        'lease_options' => 'getLeaseOptions',
        'tenant_info_term_of_lease_from' => 'getTenantInfoTermOfLeaseFrom',
        'tenant_info_term_of_lease_to' => 'getTenantInfoTermOfLeaseTo',
        'tenant_name' => 'getTenantName',
        'tenant_rent_details' => 'getTenantRentDetails',
        'lease_start_date' => 'getLeaseStartDate',
        'lease_end_date' => 'getLeaseEndDate'
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
        $this->container['lease_date_variable'] = isset($data['lease_date_variable']) ? $data['lease_date_variable'] : null;
        $this->container['lease_options'] = isset($data['lease_options']) ? $data['lease_options'] : null;
        $this->container['tenant_info_term_of_lease_from'] = isset($data['tenant_info_term_of_lease_from']) ? $data['tenant_info_term_of_lease_from'] : null;
        $this->container['tenant_info_term_of_lease_to'] = isset($data['tenant_info_term_of_lease_to']) ? $data['tenant_info_term_of_lease_to'] : null;
        $this->container['tenant_name'] = isset($data['tenant_name']) ? $data['tenant_name'] : null;
        $this->container['tenant_rent_details'] = isset($data['tenant_rent_details']) ? $data['tenant_rent_details'] : null;
        $this->container['lease_start_date'] = isset($data['lease_start_date']) ? $data['lease_start_date'] : null;
        $this->container['lease_end_date'] = isset($data['lease_end_date']) ? $data['lease_end_date'] : null;
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
     * Gets lease_date_variable
     *
     * @return bool
     */
    public function getLeaseDateVariable()
    {
        return $this->container['lease_date_variable'];
    }

    /**
     * Sets lease_date_variable
     *
     * @param bool $lease_date_variable Is tenant lease date variable
     *
     * @return $this
     */
    public function setLeaseDateVariable($lease_date_variable)
    {
        $this->container['lease_date_variable'] = $lease_date_variable;

        return $this;
    }

    /**
     * Gets lease_options
     *
     * @return string
     */
    public function getLeaseOptions()
    {
        return $this->container['lease_options'];
    }

    /**
     * Sets lease_options
     *
     * @param string $lease_options Leasing options available to a prospective tenant
     *
     * @return $this
     */
    public function setLeaseOptions($lease_options)
    {
        $this->container['lease_options'] = $lease_options;

        return $this;
    }

    /**
     * Gets tenant_info_term_of_lease_from
     *
     * @return int
     */
    public function getTenantInfoTermOfLeaseFrom()
    {
        return $this->container['tenant_info_term_of_lease_from'];
    }

    /**
     * Sets tenant_info_term_of_lease_from
     *
     * @param int $tenant_info_term_of_lease_from The from range of the tenant's current lease
     *
     * @return $this
     */
    public function setTenantInfoTermOfLeaseFrom($tenant_info_term_of_lease_from)
    {
        $this->container['tenant_info_term_of_lease_from'] = $tenant_info_term_of_lease_from;

        return $this;
    }

    /**
     * Gets tenant_info_term_of_lease_to
     *
     * @return int
     */
    public function getTenantInfoTermOfLeaseTo()
    {
        return $this->container['tenant_info_term_of_lease_to'];
    }

    /**
     * Sets tenant_info_term_of_lease_to
     *
     * @param int $tenant_info_term_of_lease_to The to range of the tenant's current lease
     *
     * @return $this
     */
    public function setTenantInfoTermOfLeaseTo($tenant_info_term_of_lease_to)
    {
        $this->container['tenant_info_term_of_lease_to'] = $tenant_info_term_of_lease_to;

        return $this;
    }

    /**
     * Gets tenant_name
     *
     * @return string
     */
    public function getTenantName()
    {
        return $this->container['tenant_name'];
    }

    /**
     * Sets tenant_name
     *
     * @param string $tenant_name Name of the current tenant of the property
     *
     * @return $this
     */
    public function setTenantName($tenant_name)
    {
        $this->container['tenant_name'] = $tenant_name;

        return $this;
    }

    /**
     * Gets tenant_rent_details
     *
     * @return string
     */
    public function getTenantRentDetails()
    {
        return $this->container['tenant_rent_details'];
    }

    /**
     * Sets tenant_rent_details
     *
     * @param string $tenant_rent_details Information regarding current rental
     *
     * @return $this
     */
    public function setTenantRentDetails($tenant_rent_details)
    {
        $this->container['tenant_rent_details'] = $tenant_rent_details;

        return $this;
    }

    /**
     * Gets lease_start_date
     *
     * @return \DateTime
     */
    public function getLeaseStartDate()
    {
        return $this->container['lease_start_date'];
    }

    /**
     * Sets lease_start_date
     *
     * @param \DateTime $lease_start_date The date on which the tenants lease began, or is due to begin. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setLeaseStartDate($lease_start_date)
    {
        $this->container['lease_start_date'] = $lease_start_date;

        return $this;
    }

    /**
     * Gets lease_end_date
     *
     * @return \DateTime
     */
    public function getLeaseEndDate()
    {
        return $this->container['lease_end_date'];
    }

    /**
     * Sets lease_end_date
     *
     * @param \DateTime $lease_end_date The date on which the tenants lease is due to end. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setLeaseEndDate($lease_end_date)
    {
        $this->container['lease_end_date'] = $lease_end_date;

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
