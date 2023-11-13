<?php
/**
 * DomainSearchServiceV2ModelDomainSearchContractsV2PropertyListing
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
 * DomainSearchServiceV2ModelDomainSearchContractsV2PropertyListing Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainSearchServiceV2ModelDomainSearchContractsV2PropertyListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.SearchService.v2.Model.DomainSearchContractsV2PropertyListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promo_level' => 'string',
        'listing_type' => 'string',
        'id' => 'int',
        'project_id' => 'int',
        'advertiser' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Advertiser',
        'price_details' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PriceDetails',
        'media' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[]',
        'property_details' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PropertyDetails',
        'headline' => 'string',
        'summary_description' => 'string',
        'has_floorplan' => 'bool',
        'has_video' => 'bool',
        'labels' => 'string[]',
        'auction_schedule' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2AuctionSchedule',
        'date_available' => '\DateTime',
        'date_listed' => '\DateTime',
        'inspection_schedule' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2InspectionSchedule',
        'sold_data' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SoldData',
        'listing_slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promo_level' => null,
        'listing_type' => null,
        'id' => 'int32',
        'project_id' => 'int32',
        'advertiser' => null,
        'price_details' => null,
        'media' => null,
        'property_details' => null,
        'headline' => null,
        'summary_description' => null,
        'has_floorplan' => null,
        'has_video' => null,
        'labels' => null,
        'auction_schedule' => null,
        'date_available' => 'date-time',
        'date_listed' => 'date-time',
        'inspection_schedule' => null,
        'sold_data' => null,
        'listing_slug' => null
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
        'promo_level' => 'promoLevel',
        'listing_type' => 'listingType',
        'id' => 'id',
        'project_id' => 'projectId',
        'advertiser' => 'advertiser',
        'price_details' => 'priceDetails',
        'media' => 'media',
        'property_details' => 'propertyDetails',
        'headline' => 'headline',
        'summary_description' => 'summaryDescription',
        'has_floorplan' => 'hasFloorplan',
        'has_video' => 'hasVideo',
        'labels' => 'labels',
        'auction_schedule' => 'auctionSchedule',
        'date_available' => 'dateAvailable',
        'date_listed' => 'dateListed',
        'inspection_schedule' => 'inspectionSchedule',
        'sold_data' => 'soldData',
        'listing_slug' => 'listingSlug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promo_level' => 'setPromoLevel',
        'listing_type' => 'setListingType',
        'id' => 'setId',
        'project_id' => 'setProjectId',
        'advertiser' => 'setAdvertiser',
        'price_details' => 'setPriceDetails',
        'media' => 'setMedia',
        'property_details' => 'setPropertyDetails',
        'headline' => 'setHeadline',
        'summary_description' => 'setSummaryDescription',
        'has_floorplan' => 'setHasFloorplan',
        'has_video' => 'setHasVideo',
        'labels' => 'setLabels',
        'auction_schedule' => 'setAuctionSchedule',
        'date_available' => 'setDateAvailable',
        'date_listed' => 'setDateListed',
        'inspection_schedule' => 'setInspectionSchedule',
        'sold_data' => 'setSoldData',
        'listing_slug' => 'setListingSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promo_level' => 'getPromoLevel',
        'listing_type' => 'getListingType',
        'id' => 'getId',
        'project_id' => 'getProjectId',
        'advertiser' => 'getAdvertiser',
        'price_details' => 'getPriceDetails',
        'media' => 'getMedia',
        'property_details' => 'getPropertyDetails',
        'headline' => 'getHeadline',
        'summary_description' => 'getSummaryDescription',
        'has_floorplan' => 'getHasFloorplan',
        'has_video' => 'getHasVideo',
        'labels' => 'getLabels',
        'auction_schedule' => 'getAuctionSchedule',
        'date_available' => 'getDateAvailable',
        'date_listed' => 'getDateListed',
        'inspection_schedule' => 'getInspectionSchedule',
        'sold_data' => 'getSoldData',
        'listing_slug' => 'getListingSlug'
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

    const PROMO_LEVEL_STANDARD = 'Standard';
    const PROMO_LEVEL_STANDARD_PP = 'StandardPP';
    const PROMO_LEVEL_ELITE = 'Elite';
    const PROMO_LEVEL_ELITE_PP = 'ElitePP';
    const PROMO_LEVEL_PREMIUM_PLUS = 'PremiumPlus';
    const LISTING_TYPE_SALE = 'Sale';
    const LISTING_TYPE_RENT = 'Rent';
    const LISTING_TYPE_SHARE = 'Share';
    const LISTING_TYPE_SOLD = 'Sold';
    const LISTING_TYPE_NEW_HOMES = 'NewHomes';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPromoLevelAllowableValues()
    {
        return [
            self::PROMO_LEVEL_STANDARD,
            self::PROMO_LEVEL_STANDARD_PP,
            self::PROMO_LEVEL_ELITE,
            self::PROMO_LEVEL_ELITE_PP,
            self::PROMO_LEVEL_PREMIUM_PLUS,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getListingTypeAllowableValues()
    {
        return [
            self::LISTING_TYPE_SALE,
            self::LISTING_TYPE_RENT,
            self::LISTING_TYPE_SHARE,
            self::LISTING_TYPE_SOLD,
            self::LISTING_TYPE_NEW_HOMES,
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
        $this->container['promo_level'] = isset($data['promo_level']) ? $data['promo_level'] : null;
        $this->container['listing_type'] = isset($data['listing_type']) ? $data['listing_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['price_details'] = isset($data['price_details']) ? $data['price_details'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['property_details'] = isset($data['property_details']) ? $data['property_details'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['summary_description'] = isset($data['summary_description']) ? $data['summary_description'] : null;
        $this->container['has_floorplan'] = isset($data['has_floorplan']) ? $data['has_floorplan'] : null;
        $this->container['has_video'] = isset($data['has_video']) ? $data['has_video'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['auction_schedule'] = isset($data['auction_schedule']) ? $data['auction_schedule'] : null;
        $this->container['date_available'] = isset($data['date_available']) ? $data['date_available'] : null;
        $this->container['date_listed'] = isset($data['date_listed']) ? $data['date_listed'] : null;
        $this->container['inspection_schedule'] = isset($data['inspection_schedule']) ? $data['inspection_schedule'] : null;
        $this->container['sold_data'] = isset($data['sold_data']) ? $data['sold_data'] : null;
        $this->container['listing_slug'] = isset($data['listing_slug']) ? $data['listing_slug'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPromoLevelAllowableValues();
        if (!is_null($this->container['promo_level']) && !in_array($this->container['promo_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'promo_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getListingTypeAllowableValues();
        if (!is_null($this->container['listing_type']) && !in_array($this->container['listing_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'listing_type', must be one of '%s'",
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
     * Gets promo_level
     *
     * @return string
     */
    public function getPromoLevel()
    {
        return $this->container['promo_level'];
    }

    /**
     * Sets promo_level
     *
     * @param string $promo_level promo_level
     *
     * @return $this
     */
    public function setPromoLevel($promo_level)
    {
        $allowedValues = $this->getPromoLevelAllowableValues();
        if (!is_null($promo_level) && !in_array($promo_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'promo_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['promo_level'] = $promo_level;

        return $this;
    }

    /**
     * Gets listing_type
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->container['listing_type'];
    }

    /**
     * Sets listing_type
     *
     * @param string $listing_type listing_type
     *
     * @return $this
     */
    public function setListingType($listing_type)
    {
        $allowedValues = $this->getListingTypeAllowableValues();
        if (!is_null($listing_type) && !in_array($listing_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'listing_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['listing_type'] = $listing_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets advertiser
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Advertiser
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Advertiser $advertiser advertiser
     *
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets price_details
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PriceDetails
     */
    public function getPriceDetails()
    {
        return $this->container['price_details'];
    }

    /**
     * Sets price_details
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PriceDetails $price_details price_details
     *
     * @return $this
     */
    public function setPriceDetails($price_details)
    {
        $this->container['price_details'] = $price_details;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[] $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets property_details
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PropertyDetails
     */
    public function getPropertyDetails()
    {
        return $this->container['property_details'];
    }

    /**
     * Sets property_details
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2PropertyDetails $property_details property_details
     *
     * @return $this
     */
    public function setPropertyDetails($property_details)
    {
        $this->container['property_details'] = $property_details;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets summary_description
     *
     * @return string
     */
    public function getSummaryDescription()
    {
        return $this->container['summary_description'];
    }

    /**
     * Sets summary_description
     *
     * @param string $summary_description summary_description
     *
     * @return $this
     */
    public function setSummaryDescription($summary_description)
    {
        $this->container['summary_description'] = $summary_description;

        return $this;
    }

    /**
     * Gets has_floorplan
     *
     * @return bool
     */
    public function getHasFloorplan()
    {
        return $this->container['has_floorplan'];
    }

    /**
     * Sets has_floorplan
     *
     * @param bool $has_floorplan has_floorplan
     *
     * @return $this
     */
    public function setHasFloorplan($has_floorplan)
    {
        $this->container['has_floorplan'] = $has_floorplan;

        return $this;
    }

    /**
     * Gets has_video
     *
     * @return bool
     */
    public function getHasVideo()
    {
        return $this->container['has_video'];
    }

    /**
     * Sets has_video
     *
     * @param bool $has_video has_video
     *
     * @return $this
     */
    public function setHasVideo($has_video)
    {
        $this->container['has_video'] = $has_video;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets auction_schedule
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2AuctionSchedule
     */
    public function getAuctionSchedule()
    {
        return $this->container['auction_schedule'];
    }

    /**
     * Sets auction_schedule
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2AuctionSchedule $auction_schedule auction_schedule
     *
     * @return $this
     */
    public function setAuctionSchedule($auction_schedule)
    {
        $this->container['auction_schedule'] = $auction_schedule;

        return $this;
    }

    /**
     * Gets date_available
     *
     * @return \DateTime
     */
    public function getDateAvailable()
    {
        return $this->container['date_available'];
    }

    /**
     * Sets date_available
     *
     * @param \DateTime $date_available date_available
     *
     * @return $this
     */
    public function setDateAvailable($date_available)
    {
        $this->container['date_available'] = $date_available;

        return $this;
    }

    /**
     * Gets date_listed
     *
     * @return \DateTime
     */
    public function getDateListed()
    {
        return $this->container['date_listed'];
    }

    /**
     * Sets date_listed
     *
     * @param \DateTime $date_listed date_listed
     *
     * @return $this
     */
    public function setDateListed($date_listed)
    {
        $this->container['date_listed'] = $date_listed;

        return $this;
    }

    /**
     * Gets inspection_schedule
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2InspectionSchedule
     */
    public function getInspectionSchedule()
    {
        return $this->container['inspection_schedule'];
    }

    /**
     * Sets inspection_schedule
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2InspectionSchedule $inspection_schedule inspection_schedule
     *
     * @return $this
     */
    public function setInspectionSchedule($inspection_schedule)
    {
        $this->container['inspection_schedule'] = $inspection_schedule;

        return $this;
    }

    /**
     * Gets sold_data
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SoldData
     */
    public function getSoldData()
    {
        return $this->container['sold_data'];
    }

    /**
     * Sets sold_data
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SoldData $sold_data sold_data
     *
     * @return $this
     */
    public function setSoldData($sold_data)
    {
        $this->container['sold_data'] = $sold_data;

        return $this;
    }

    /**
     * Gets listing_slug
     *
     * @return string
     */
    public function getListingSlug()
    {
        return $this->container['listing_slug'];
    }

    /**
     * Sets listing_slug
     *
     * @param string $listing_slug listing_slug
     *
     * @return $this
     */
    public function setListingSlug($listing_slug)
    {
        $this->container['listing_slug'] = $listing_slug;

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