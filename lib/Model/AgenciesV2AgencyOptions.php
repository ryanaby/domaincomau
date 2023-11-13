<?php
/**
 * AgenciesV2AgencyOptions
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
 * AgenciesV2AgencyOptions Class Doc Comment
 *
 * @category Class
 * @description AgencyOptions
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgenciesV2AgencyOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Agencies.V2.AgencyOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sale_listings_gst_option' => 'int',
        'lease_listings_gst_option' => 'int',
        'receive_look_for_property_requests' => 'bool',
        'receive_sell_property_requests' => 'bool',
        'receive_property_valuation_requests' => 'bool',
        'agent_directory_listing' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sale_listings_gst_option' => 'int32',
        'lease_listings_gst_option' => 'int32',
        'receive_look_for_property_requests' => null,
        'receive_sell_property_requests' => null,
        'receive_property_valuation_requests' => null,
        'agent_directory_listing' => null
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
        'sale_listings_gst_option' => 'saleListingsGstOption',
        'lease_listings_gst_option' => 'leaseListingsGstOption',
        'receive_look_for_property_requests' => 'receiveLookForPropertyRequests',
        'receive_sell_property_requests' => 'receiveSellPropertyRequests',
        'receive_property_valuation_requests' => 'receivePropertyValuationRequests',
        'agent_directory_listing' => 'agentDirectoryListing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sale_listings_gst_option' => 'setSaleListingsGstOption',
        'lease_listings_gst_option' => 'setLeaseListingsGstOption',
        'receive_look_for_property_requests' => 'setReceiveLookForPropertyRequests',
        'receive_sell_property_requests' => 'setReceiveSellPropertyRequests',
        'receive_property_valuation_requests' => 'setReceivePropertyValuationRequests',
        'agent_directory_listing' => 'setAgentDirectoryListing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sale_listings_gst_option' => 'getSaleListingsGstOption',
        'lease_listings_gst_option' => 'getLeaseListingsGstOption',
        'receive_look_for_property_requests' => 'getReceiveLookForPropertyRequests',
        'receive_sell_property_requests' => 'getReceiveSellPropertyRequests',
        'receive_property_valuation_requests' => 'getReceivePropertyValuationRequests',
        'agent_directory_listing' => 'getAgentDirectoryListing'
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
        $this->container['sale_listings_gst_option'] = isset($data['sale_listings_gst_option']) ? $data['sale_listings_gst_option'] : null;
        $this->container['lease_listings_gst_option'] = isset($data['lease_listings_gst_option']) ? $data['lease_listings_gst_option'] : null;
        $this->container['receive_look_for_property_requests'] = isset($data['receive_look_for_property_requests']) ? $data['receive_look_for_property_requests'] : null;
        $this->container['receive_sell_property_requests'] = isset($data['receive_sell_property_requests']) ? $data['receive_sell_property_requests'] : null;
        $this->container['receive_property_valuation_requests'] = isset($data['receive_property_valuation_requests']) ? $data['receive_property_valuation_requests'] : null;
        $this->container['agent_directory_listing'] = isset($data['agent_directory_listing']) ? $data['agent_directory_listing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sale_listings_gst_option'] === null) {
            $invalidProperties[] = "'sale_listings_gst_option' can't be null";
        }
        if ($this->container['lease_listings_gst_option'] === null) {
            $invalidProperties[] = "'lease_listings_gst_option' can't be null";
        }
        if ($this->container['receive_look_for_property_requests'] === null) {
            $invalidProperties[] = "'receive_look_for_property_requests' can't be null";
        }
        if ($this->container['receive_sell_property_requests'] === null) {
            $invalidProperties[] = "'receive_sell_property_requests' can't be null";
        }
        if ($this->container['receive_property_valuation_requests'] === null) {
            $invalidProperties[] = "'receive_property_valuation_requests' can't be null";
        }
        if ($this->container['agent_directory_listing'] === null) {
            $invalidProperties[] = "'agent_directory_listing' can't be null";
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
     * Gets sale_listings_gst_option
     *
     * @return int
     */
    public function getSaleListingsGstOption()
    {
        return $this->container['sale_listings_gst_option'];
    }

    /**
     * Sets sale_listings_gst_option
     *
     * @param int $sale_listings_gst_option Gets or Sets SaleListingsGstOption
     *
     * @return $this
     */
    public function setSaleListingsGstOption($sale_listings_gst_option)
    {
        $this->container['sale_listings_gst_option'] = $sale_listings_gst_option;

        return $this;
    }

    /**
     * Gets lease_listings_gst_option
     *
     * @return int
     */
    public function getLeaseListingsGstOption()
    {
        return $this->container['lease_listings_gst_option'];
    }

    /**
     * Sets lease_listings_gst_option
     *
     * @param int $lease_listings_gst_option Gets or Sets LeaseListingsGstOption
     *
     * @return $this
     */
    public function setLeaseListingsGstOption($lease_listings_gst_option)
    {
        $this->container['lease_listings_gst_option'] = $lease_listings_gst_option;

        return $this;
    }

    /**
     * Gets receive_look_for_property_requests
     *
     * @return bool
     */
    public function getReceiveLookForPropertyRequests()
    {
        return $this->container['receive_look_for_property_requests'];
    }

    /**
     * Sets receive_look_for_property_requests
     *
     * @param bool $receive_look_for_property_requests Gets or Sets ReceiveLookForPropertyRequests
     *
     * @return $this
     */
    public function setReceiveLookForPropertyRequests($receive_look_for_property_requests)
    {
        $this->container['receive_look_for_property_requests'] = $receive_look_for_property_requests;

        return $this;
    }

    /**
     * Gets receive_sell_property_requests
     *
     * @return bool
     */
    public function getReceiveSellPropertyRequests()
    {
        return $this->container['receive_sell_property_requests'];
    }

    /**
     * Sets receive_sell_property_requests
     *
     * @param bool $receive_sell_property_requests Gets or Sets ReceiveSellPropertyRequests
     *
     * @return $this
     */
    public function setReceiveSellPropertyRequests($receive_sell_property_requests)
    {
        $this->container['receive_sell_property_requests'] = $receive_sell_property_requests;

        return $this;
    }

    /**
     * Gets receive_property_valuation_requests
     *
     * @return bool
     */
    public function getReceivePropertyValuationRequests()
    {
        return $this->container['receive_property_valuation_requests'];
    }

    /**
     * Sets receive_property_valuation_requests
     *
     * @param bool $receive_property_valuation_requests Gets or Sets ReceivePropertyValuationRequests
     *
     * @return $this
     */
    public function setReceivePropertyValuationRequests($receive_property_valuation_requests)
    {
        $this->container['receive_property_valuation_requests'] = $receive_property_valuation_requests;

        return $this;
    }

    /**
     * Gets agent_directory_listing
     *
     * @return bool
     */
    public function getAgentDirectoryListing()
    {
        return $this->container['agent_directory_listing'];
    }

    /**
     * Sets agent_directory_listing
     *
     * @param bool $agent_directory_listing Gets or Sets AgentDirectoryListing
     *
     * @return $this
     */
    public function setAgentDirectoryListing($agent_directory_listing)
    {
        $this->container['agent_directory_listing'] = $agent_directory_listing;

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
