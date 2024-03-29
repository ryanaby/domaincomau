<?php
/**
 * AgenciesV2AgencyContactDetails
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
 * AgenciesV2AgencyContactDetails Class Doc Comment
 *
 * @category Class
 * @description AgencyContactDetails
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgenciesV2AgencyContactDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Agencies.V2.AgencyContactDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_sale' => '\Swagger\Client\Model\AgenciesV2EmailPhone',
        'business_rent' => '\Swagger\Client\Model\AgenciesV2EmailPhone',
        'commercial_lease' => '\Swagger\Client\Model\AgenciesV2EmailPhone',
        'commercial_sale' => '\Swagger\Client\Model\AgenciesV2EmailPhone',
        'email_domains' => '\Swagger\Client\Model\AgenciesV2EmailDomain[]',
        'general' => '\Swagger\Client\Model\AgenciesV2GeneralAgencyContactDetails',
        'residential_rent' => '\Swagger\Client\Model\AgenciesV2EmailPhone',
        'residential_sale' => '\Swagger\Client\Model\AgenciesV2EmailPhone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'business_sale' => null,
        'business_rent' => null,
        'commercial_lease' => null,
        'commercial_sale' => null,
        'email_domains' => null,
        'general' => null,
        'residential_rent' => null,
        'residential_sale' => null
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
        'business_sale' => 'businessSale',
        'business_rent' => 'businessRent',
        'commercial_lease' => 'commercialLease',
        'commercial_sale' => 'commercialSale',
        'email_domains' => 'emailDomains',
        'general' => 'general',
        'residential_rent' => 'residentialRent',
        'residential_sale' => 'residentialSale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'business_sale' => 'setBusinessSale',
        'business_rent' => 'setBusinessRent',
        'commercial_lease' => 'setCommercialLease',
        'commercial_sale' => 'setCommercialSale',
        'email_domains' => 'setEmailDomains',
        'general' => 'setGeneral',
        'residential_rent' => 'setResidentialRent',
        'residential_sale' => 'setResidentialSale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'business_sale' => 'getBusinessSale',
        'business_rent' => 'getBusinessRent',
        'commercial_lease' => 'getCommercialLease',
        'commercial_sale' => 'getCommercialSale',
        'email_domains' => 'getEmailDomains',
        'general' => 'getGeneral',
        'residential_rent' => 'getResidentialRent',
        'residential_sale' => 'getResidentialSale'
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
        $this->container['business_sale'] = isset($data['business_sale']) ? $data['business_sale'] : null;
        $this->container['business_rent'] = isset($data['business_rent']) ? $data['business_rent'] : null;
        $this->container['commercial_lease'] = isset($data['commercial_lease']) ? $data['commercial_lease'] : null;
        $this->container['commercial_sale'] = isset($data['commercial_sale']) ? $data['commercial_sale'] : null;
        $this->container['email_domains'] = isset($data['email_domains']) ? $data['email_domains'] : null;
        $this->container['general'] = isset($data['general']) ? $data['general'] : null;
        $this->container['residential_rent'] = isset($data['residential_rent']) ? $data['residential_rent'] : null;
        $this->container['residential_sale'] = isset($data['residential_sale']) ? $data['residential_sale'] : null;
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
     * Gets business_sale
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getBusinessSale()
    {
        return $this->container['business_sale'];
    }

    /**
     * Sets business_sale
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $business_sale business_sale
     *
     * @return $this
     */
    public function setBusinessSale($business_sale)
    {
        $this->container['business_sale'] = $business_sale;

        return $this;
    }

    /**
     * Gets business_rent
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getBusinessRent()
    {
        return $this->container['business_rent'];
    }

    /**
     * Sets business_rent
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $business_rent business_rent
     *
     * @return $this
     */
    public function setBusinessRent($business_rent)
    {
        $this->container['business_rent'] = $business_rent;

        return $this;
    }

    /**
     * Gets commercial_lease
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getCommercialLease()
    {
        return $this->container['commercial_lease'];
    }

    /**
     * Sets commercial_lease
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $commercial_lease commercial_lease
     *
     * @return $this
     */
    public function setCommercialLease($commercial_lease)
    {
        $this->container['commercial_lease'] = $commercial_lease;

        return $this;
    }

    /**
     * Gets commercial_sale
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getCommercialSale()
    {
        return $this->container['commercial_sale'];
    }

    /**
     * Sets commercial_sale
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $commercial_sale commercial_sale
     *
     * @return $this
     */
    public function setCommercialSale($commercial_sale)
    {
        $this->container['commercial_sale'] = $commercial_sale;

        return $this;
    }

    /**
     * Gets email_domains
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailDomain[]
     */
    public function getEmailDomains()
    {
        return $this->container['email_domains'];
    }

    /**
     * Sets email_domains
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailDomain[] $email_domains Gets or Sets EmailDomains
     *
     * @return $this
     */
    public function setEmailDomains($email_domains)
    {
        $this->container['email_domains'] = $email_domains;

        return $this;
    }

    /**
     * Gets general
     *
     * @return \Swagger\Client\Model\AgenciesV2GeneralAgencyContactDetails
     */
    public function getGeneral()
    {
        return $this->container['general'];
    }

    /**
     * Sets general
     *
     * @param \Swagger\Client\Model\AgenciesV2GeneralAgencyContactDetails $general general
     *
     * @return $this
     */
    public function setGeneral($general)
    {
        $this->container['general'] = $general;

        return $this;
    }

    /**
     * Gets residential_rent
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getResidentialRent()
    {
        return $this->container['residential_rent'];
    }

    /**
     * Sets residential_rent
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $residential_rent residential_rent
     *
     * @return $this
     */
    public function setResidentialRent($residential_rent)
    {
        $this->container['residential_rent'] = $residential_rent;

        return $this;
    }

    /**
     * Gets residential_sale
     *
     * @return \Swagger\Client\Model\AgenciesV2EmailPhone
     */
    public function getResidentialSale()
    {
        return $this->container['residential_sale'];
    }

    /**
     * Sets residential_sale
     *
     * @param \Swagger\Client\Model\AgenciesV2EmailPhone $residential_sale residential_sale
     *
     * @return $this
     */
    public function setResidentialSale($residential_sale)
    {
        $this->container['residential_sale'] = $residential_sale;

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
