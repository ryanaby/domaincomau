<?php
/**
 * ListingAdminV2CommercialOffMarketListing
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
 * ListingAdminV2CommercialOffMarketListing Class Doc Comment
 *
 * @category Class
 * @description Commercial off market listing
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingAdminV2CommercialOffMarketListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingAdmin.v2.CommercialOffMarketListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'units_offered' => 'int',
        'unit_details' => '\Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[]',
        'annual_return' => 'int',
        'nabers' => 'double',
        'highlights' => 'string[]',
        'listing_provider' => 'string',
        'domain_agency_id' => 'int',
        'provider_ad_id' => 'string',
        'description' => 'string',
        'summary' => 'string',
        'contacts' => '\Swagger\Client\Model\ListingAdminV2Contact[]',
        'listing_action' => 'string',
        'off_market_details' => '\Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase',
        'property_details' => '\Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'units_offered' => 'int32',
        'unit_details' => null,
        'annual_return' => 'int32',
        'nabers' => 'double',
        'highlights' => null,
        'listing_provider' => null,
        'domain_agency_id' => 'int32',
        'provider_ad_id' => null,
        'description' => null,
        'summary' => null,
        'contacts' => null,
        'listing_action' => null,
        'off_market_details' => null,
        'property_details' => null
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
        'units_offered' => 'unitsOffered',
        'unit_details' => 'unitDetails',
        'annual_return' => 'annualReturn',
        'nabers' => 'nabers',
        'highlights' => 'highlights',
        'listing_provider' => 'listingProvider',
        'domain_agency_id' => 'domainAgencyID',
        'provider_ad_id' => 'providerAdId',
        'description' => 'description',
        'summary' => 'summary',
        'contacts' => 'contacts',
        'listing_action' => 'listingAction',
        'off_market_details' => 'offMarketDetails',
        'property_details' => 'propertyDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'units_offered' => 'setUnitsOffered',
        'unit_details' => 'setUnitDetails',
        'annual_return' => 'setAnnualReturn',
        'nabers' => 'setNabers',
        'highlights' => 'setHighlights',
        'listing_provider' => 'setListingProvider',
        'domain_agency_id' => 'setDomainAgencyId',
        'provider_ad_id' => 'setProviderAdId',
        'description' => 'setDescription',
        'summary' => 'setSummary',
        'contacts' => 'setContacts',
        'listing_action' => 'setListingAction',
        'off_market_details' => 'setOffMarketDetails',
        'property_details' => 'setPropertyDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'units_offered' => 'getUnitsOffered',
        'unit_details' => 'getUnitDetails',
        'annual_return' => 'getAnnualReturn',
        'nabers' => 'getNabers',
        'highlights' => 'getHighlights',
        'listing_provider' => 'getListingProvider',
        'domain_agency_id' => 'getDomainAgencyId',
        'provider_ad_id' => 'getProviderAdId',
        'description' => 'getDescription',
        'summary' => 'getSummary',
        'contacts' => 'getContacts',
        'listing_action' => 'getListingAction',
        'off_market_details' => 'getOffMarketDetails',
        'property_details' => 'getPropertyDetails'
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

    const LISTING_ACTION_SALE = 'sale';
    const LISTING_ACTION_RENT = 'rent';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getListingActionAllowableValues()
    {
        return [
            self::LISTING_ACTION_SALE,
            self::LISTING_ACTION_RENT,
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
        $this->container['units_offered'] = isset($data['units_offered']) ? $data['units_offered'] : null;
        $this->container['unit_details'] = isset($data['unit_details']) ? $data['unit_details'] : null;
        $this->container['annual_return'] = isset($data['annual_return']) ? $data['annual_return'] : null;
        $this->container['nabers'] = isset($data['nabers']) ? $data['nabers'] : null;
        $this->container['highlights'] = isset($data['highlights']) ? $data['highlights'] : null;
        $this->container['listing_provider'] = isset($data['listing_provider']) ? $data['listing_provider'] : null;
        $this->container['domain_agency_id'] = isset($data['domain_agency_id']) ? $data['domain_agency_id'] : null;
        $this->container['provider_ad_id'] = isset($data['provider_ad_id']) ? $data['provider_ad_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['listing_action'] = isset($data['listing_action']) ? $data['listing_action'] : null;
        $this->container['off_market_details'] = isset($data['off_market_details']) ? $data['off_market_details'] : null;
        $this->container['property_details'] = isset($data['property_details']) ? $data['property_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['domain_agency_id'] === null) {
            $invalidProperties[] = "'domain_agency_id' can't be null";
        }
        if ($this->container['provider_ad_id'] === null) {
            $invalidProperties[] = "'provider_ad_id' can't be null";
        }
        if ($this->container['listing_action'] === null) {
            $invalidProperties[] = "'listing_action' can't be null";
        }
        $allowedValues = $this->getListingActionAllowableValues();
        if (!is_null($this->container['listing_action']) && !in_array($this->container['listing_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'listing_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['off_market_details'] === null) {
            $invalidProperties[] = "'off_market_details' can't be null";
        }
        if ($this->container['property_details'] === null) {
            $invalidProperties[] = "'property_details' can't be null";
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
     * Gets units_offered
     *
     * @return int
     */
    public function getUnitsOffered()
    {
        return $this->container['units_offered'];
    }

    /**
     * Sets units_offered
     *
     * @param int $units_offered Integer value of units offered for sale or lease
     *
     * @return $this
     */
    public function setUnitsOffered($units_offered)
    {
        $this->container['units_offered'] = $units_offered;

        return $this;
    }

    /**
     * Gets unit_details
     *
     * @return \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[]
     */
    public function getUnitDetails()
    {
        return $this->container['unit_details'];
    }

    /**
     * Sets unit_details
     *
     * @param \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[] $unit_details Units details
     *
     * @return $this
     */
    public function setUnitDetails($unit_details)
    {
        $this->container['unit_details'] = $unit_details;

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
     * @param int $annual_return Integer value of percentage return on this property or business.
     *
     * @return $this
     */
    public function setAnnualReturn($annual_return)
    {
        $this->container['annual_return'] = $annual_return;

        return $this;
    }

    /**
     * Gets nabers
     *
     * @return double
     */
    public function getNabers()
    {
        return $this->container['nabers'];
    }

    /**
     * Sets nabers
     *
     * @param double $nabers The NABERS Rating is the energy efficiency rating that the property has been measured to have.   This rating is measured in increments of .5 and can range from 0 to 6.   The NABERS rating is required for spaces within office buildings of 1000 square metres or more.  For more information on the NABERS rating system please visit http://www.nabers.gov.au
     *
     * @return $this
     */
    public function setNabers($nabers)
    {
        $this->container['nabers'] = $nabers;

        return $this;
    }

    /**
     * Gets highlights
     *
     * @return string[]
     */
    public function getHighlights()
    {
        return $this->container['highlights'];
    }

    /**
     * Sets highlights
     *
     * @param string[] $highlights Highlight Items
     *
     * @return $this
     */
    public function setHighlights($highlights)
    {
        $this->container['highlights'] = $highlights;

        return $this;
    }

    /**
     * Gets listing_provider
     *
     * @return string
     */
    public function getListingProvider()
    {
        return $this->container['listing_provider'];
    }

    /**
     * Sets listing_provider
     *
     * @param string $listing_provider A string identifying the data provider
     *
     * @return $this
     */
    public function setListingProvider($listing_provider)
    {
        $this->container['listing_provider'] = $listing_provider;

        return $this;
    }

    /**
     * Gets domain_agency_id
     *
     * @return int
     */
    public function getDomainAgencyId()
    {
        return $this->container['domain_agency_id'];
    }

    /**
     * Sets domain_agency_id
     *
     * @param int $domain_agency_id The Domain Agency ID
     *
     * @return $this
     */
    public function setDomainAgencyId($domain_agency_id)
    {
        $this->container['domain_agency_id'] = $domain_agency_id;

        return $this;
    }

    /**
     * Gets provider_ad_id
     *
     * @return string
     */
    public function getProviderAdId()
    {
        return $this->container['provider_ad_id'];
    }

    /**
     * Sets provider_ad_id
     *
     * @param string $provider_ad_id External Advertisement Id of up to 50 characters will be stored.<br />  This value is used to identify an Advertisement for updates and should be unique for listing provider.<br />  This value is case-insensitive (meaning AAAA will update aaaa).
     *
     * @return $this
     */
    public function setProviderAdId($provider_ad_id)
    {
        $this->container['provider_ad_id'] = $provider_ad_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the property.  6000 characters in length. The following HTML elements are permitted: &lt;br /&gt;, &lt;p&gt;&lt;/p&gt;, &amp;nbsp;. HTML must be well-formed.  Carriage Returns are interpreted as line breaks. Foreign characters must be HTML encoded, e.g., façade for façade.  Unicode characters which are unsupported by Latin-1 (ISO-8859-1 range from U+0080 to U+00FF), will be removed https://en.wikipedia.org/wiki/ISO/IEC_8859-1
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary 'Headline' Any HTML stripped out.  If the Summary is less than 80 characters long then the description is concatenated to it and the total trimmed to 250 characters.
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Swagger\Client\Model\ListingAdminV2Contact[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Swagger\Client\Model\ListingAdminV2Contact[] $contacts Minimum required attributes: First name, last name and E-mail.  If the DomainAgentId is provided, contact information will be based on the existing agent found for that id.  Otherwise first name, last name and email will be used to find the matching contact. A new contact will be created if no contact can be found.
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets listing_action
     *
     * @return string
     */
    public function getListingAction()
    {
        return $this->container['listing_action'];
    }

    /**
     * Sets listing_action
     *
     * @param string $listing_action Sale or Rent
     *
     * @return $this
     */
    public function setListingAction($listing_action)
    {
        $allowedValues = $this->getListingActionAllowableValues();
        if (!in_array($listing_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'listing_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['listing_action'] = $listing_action;

        return $this;
    }

    /**
     * Gets off_market_details
     *
     * @return \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase
     */
    public function getOffMarketDetails()
    {
        return $this->container['off_market_details'];
    }

    /**
     * Sets off_market_details
     *
     * @param \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase $off_market_details off_market_details
     *
     * @return $this
     */
    public function setOffMarketDetails($off_market_details)
    {
        $this->container['off_market_details'] = $off_market_details;

        return $this;
    }

    /**
     * Gets property_details
     *
     * @return \Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty
     */
    public function getPropertyDetails()
    {
        return $this->container['property_details'];
    }

    /**
     * Sets property_details
     *
     * @param \Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty $property_details property_details
     *
     * @return $this
     */
    public function setPropertyDetails($property_details)
    {
        $this->container['property_details'] = $property_details;

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
