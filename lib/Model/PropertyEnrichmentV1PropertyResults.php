<?php
/**
 * PropertyEnrichmentV1PropertyResults
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
 * PropertyEnrichmentV1PropertyResults Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyEnrichmentV1PropertyResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Property.Enrichment.v1.PropertyResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_id' => 'string',
        'address_components' => '\Swagger\Client\Model\PropertyEnrichmentV1AddressBasic',
        'property_summary' => '\Swagger\Client\Model\PropertyEnrichmentV1PropertySummary',
        'activity_summary' => '\Swagger\Client\Model\PropertyEnrichmentV1PropertyActivitySummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_id' => null,
        'address_components' => null,
        'property_summary' => null,
        'activity_summary' => null
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
        'property_id' => 'propertyId',
        'address_components' => 'addressComponents',
        'property_summary' => 'propertySummary',
        'activity_summary' => 'activitySummary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'address_components' => 'setAddressComponents',
        'property_summary' => 'setPropertySummary',
        'activity_summary' => 'setActivitySummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'address_components' => 'getAddressComponents',
        'property_summary' => 'getPropertySummary',
        'activity_summary' => 'getActivitySummary'
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
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['address_components'] = isset($data['address_components']) ? $data['address_components'] : null;
        $this->container['property_summary'] = isset($data['property_summary']) ? $data['property_summary'] : null;
        $this->container['activity_summary'] = isset($data['activity_summary']) ? $data['activity_summary'] : null;
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
     * Gets property_id
     *
     * @return string
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param string $property_id Unique ID for the property
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets address_components
     *
     * @return \Swagger\Client\Model\PropertyEnrichmentV1AddressBasic
     */
    public function getAddressComponents()
    {
        return $this->container['address_components'];
    }

    /**
     * Sets address_components
     *
     * @param \Swagger\Client\Model\PropertyEnrichmentV1AddressBasic $address_components address_components
     *
     * @return $this
     */
    public function setAddressComponents($address_components)
    {
        $this->container['address_components'] = $address_components;

        return $this;
    }

    /**
     * Gets property_summary
     *
     * @return \Swagger\Client\Model\PropertyEnrichmentV1PropertySummary
     */
    public function getPropertySummary()
    {
        return $this->container['property_summary'];
    }

    /**
     * Sets property_summary
     *
     * @param \Swagger\Client\Model\PropertyEnrichmentV1PropertySummary $property_summary property_summary
     *
     * @return $this
     */
    public function setPropertySummary($property_summary)
    {
        $this->container['property_summary'] = $property_summary;

        return $this;
    }

    /**
     * Gets activity_summary
     *
     * @return \Swagger\Client\Model\PropertyEnrichmentV1PropertyActivitySummary
     */
    public function getActivitySummary()
    {
        return $this->container['activity_summary'];
    }

    /**
     * Sets activity_summary
     *
     * @param \Swagger\Client\Model\PropertyEnrichmentV1PropertyActivitySummary $activity_summary activity_summary
     *
     * @return $this
     */
    public function setActivitySummary($activity_summary)
    {
        $this->container['activity_summary'] = $activity_summary;

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