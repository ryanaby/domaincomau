<?php
/**
 * DomainListingAdminServiceV1ModelResidentialProperty
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
 * DomainListingAdminServiceV1ModelResidentialProperty Class Doc Comment
 *
 * @category Class
 * @description Residential Property
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainListingAdminServiceV1ModelResidentialProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.ListingAdminService.v1.Model.ResidentialProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_type' => 'string[]',
        'bed_rooms' => 'int',
        'bath_rooms' => 'int',
        'parking_info' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelParkingInfo',
        'energy_efficiency_rating' => 'double',
        'pdfs' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyPdf[]',
        'is_marked_for_liveability' => 'bool',
        'property_name' => 'string',
        'location' => 'string',
        'images' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[]',
        'address' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelAddress',
        'area' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelArea',
        'land_area' => '\Swagger\Client\Model\DomainListingAdminServiceV1ModelLandArea'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_type' => null,
        'bed_rooms' => 'int32',
        'bath_rooms' => 'int32',
        'parking_info' => null,
        'energy_efficiency_rating' => 'double',
        'pdfs' => null,
        'is_marked_for_liveability' => null,
        'property_name' => null,
        'location' => null,
        'images' => null,
        'address' => null,
        'area' => null,
        'land_area' => null
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
        'property_type' => 'propertyType',
        'bed_rooms' => 'bedRooms',
        'bath_rooms' => 'bathRooms',
        'parking_info' => 'parkingInfo',
        'energy_efficiency_rating' => 'energyEfficiencyRating',
        'pdfs' => 'pdfs',
        'is_marked_for_liveability' => 'isMarkedForLiveability',
        'property_name' => 'propertyName',
        'location' => 'location',
        'images' => 'images',
        'address' => 'address',
        'area' => 'area',
        'land_area' => 'landArea'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_type' => 'setPropertyType',
        'bed_rooms' => 'setBedRooms',
        'bath_rooms' => 'setBathRooms',
        'parking_info' => 'setParkingInfo',
        'energy_efficiency_rating' => 'setEnergyEfficiencyRating',
        'pdfs' => 'setPdfs',
        'is_marked_for_liveability' => 'setIsMarkedForLiveability',
        'property_name' => 'setPropertyName',
        'location' => 'setLocation',
        'images' => 'setImages',
        'address' => 'setAddress',
        'area' => 'setArea',
        'land_area' => 'setLandArea'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_type' => 'getPropertyType',
        'bed_rooms' => 'getBedRooms',
        'bath_rooms' => 'getBathRooms',
        'parking_info' => 'getParkingInfo',
        'energy_efficiency_rating' => 'getEnergyEfficiencyRating',
        'pdfs' => 'getPdfs',
        'is_marked_for_liveability' => 'getIsMarkedForLiveability',
        'property_name' => 'getPropertyName',
        'location' => 'getLocation',
        'images' => 'getImages',
        'address' => 'getAddress',
        'area' => 'getArea',
        'land_area' => 'getLandArea'
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

    const PROPERTY_TYPE_ACREAGE_SEMI_RURAL = 'acreageSemiRural';
    const PROPERTY_TYPE_APARTMENT_UNIT_FLAT = 'apartmentUnitFlat';
    const PROPERTY_TYPE_AQUACULTURE = 'aquaculture';
    const PROPERTY_TYPE_BLOCK_OF_UNITS = 'blockOfUnits';
    const PROPERTY_TYPE_CAR_SPACE = 'carSpace';
    const PROPERTY_TYPE_DAIRY_FARMING = 'dairyFarming';
    const PROPERTY_TYPE_DEVELOPMENT_SITE = 'developmentSite';
    const PROPERTY_TYPE_DUPLEX = 'duplex';
    const PROPERTY_TYPE_FARM = 'farm';
    const PROPERTY_TYPE_FISHING_FORESTRY = 'fishingForestry';
    const PROPERTY_TYPE_NEW_HOME_DESIGNS = 'newHomeDesigns';
    const PROPERTY_TYPE_HOUSE = 'house';
    const PROPERTY_TYPE_NEW_HOUSE_LAND = 'newHouseLand';
    const PROPERTY_TYPE_IRRIGATION_SERVICES = 'irrigationServices';
    const PROPERTY_TYPE_NEW_LAND = 'newLand';
    const PROPERTY_TYPE_LIVESTOCK = 'livestock';
    const PROPERTY_TYPE_NEW_APARTMENTS = 'newApartments';
    const PROPERTY_TYPE_PENTHOUSE = 'penthouse';
    const PROPERTY_TYPE_RETIREMENT = 'retirement';
    const PROPERTY_TYPE_RURAL = 'rural';
    const PROPERTY_TYPE_SEMI_DETACHED = 'semiDetached';
    const PROPERTY_TYPE_SPECIALIST_FARM = 'specialistFarm';
    const PROPERTY_TYPE_STUDIO = 'studio';
    const PROPERTY_TYPE_TERRACE = 'terrace';
    const PROPERTY_TYPE_TOWNHOUSE = 'townhouse';
    const PROPERTY_TYPE_VACANT_LAND = 'vacantLand';
    const PROPERTY_TYPE_VILLA = 'villa';
    const PROPERTY_TYPE_CROPPING = 'cropping';
    const PROPERTY_TYPE_VITICULTURE = 'viticulture';
    const PROPERTY_TYPE_MIXED_FARMING = 'mixedFarming';
    const PROPERTY_TYPE_GRAZING = 'grazing';
    const PROPERTY_TYPE_HORTICULTURE = 'horticulture';
    const PROPERTY_TYPE_EQUINE = 'equine';
    const PROPERTY_TYPE_FARMLET = 'farmlet';
    const PROPERTY_TYPE_ORCHARD = 'orchard';
    const PROPERTY_TYPE_RURAL_LIFESTYLE = 'ruralLifestyle';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertyTypeAllowableValues()
    {
        return [
            self::PROPERTY_TYPE_ACREAGE_SEMI_RURAL,
            self::PROPERTY_TYPE_APARTMENT_UNIT_FLAT,
            self::PROPERTY_TYPE_AQUACULTURE,
            self::PROPERTY_TYPE_BLOCK_OF_UNITS,
            self::PROPERTY_TYPE_CAR_SPACE,
            self::PROPERTY_TYPE_DAIRY_FARMING,
            self::PROPERTY_TYPE_DEVELOPMENT_SITE,
            self::PROPERTY_TYPE_DUPLEX,
            self::PROPERTY_TYPE_FARM,
            self::PROPERTY_TYPE_FISHING_FORESTRY,
            self::PROPERTY_TYPE_NEW_HOME_DESIGNS,
            self::PROPERTY_TYPE_HOUSE,
            self::PROPERTY_TYPE_NEW_HOUSE_LAND,
            self::PROPERTY_TYPE_IRRIGATION_SERVICES,
            self::PROPERTY_TYPE_NEW_LAND,
            self::PROPERTY_TYPE_LIVESTOCK,
            self::PROPERTY_TYPE_NEW_APARTMENTS,
            self::PROPERTY_TYPE_PENTHOUSE,
            self::PROPERTY_TYPE_RETIREMENT,
            self::PROPERTY_TYPE_RURAL,
            self::PROPERTY_TYPE_SEMI_DETACHED,
            self::PROPERTY_TYPE_SPECIALIST_FARM,
            self::PROPERTY_TYPE_STUDIO,
            self::PROPERTY_TYPE_TERRACE,
            self::PROPERTY_TYPE_TOWNHOUSE,
            self::PROPERTY_TYPE_VACANT_LAND,
            self::PROPERTY_TYPE_VILLA,
            self::PROPERTY_TYPE_CROPPING,
            self::PROPERTY_TYPE_VITICULTURE,
            self::PROPERTY_TYPE_MIXED_FARMING,
            self::PROPERTY_TYPE_GRAZING,
            self::PROPERTY_TYPE_HORTICULTURE,
            self::PROPERTY_TYPE_EQUINE,
            self::PROPERTY_TYPE_FARMLET,
            self::PROPERTY_TYPE_ORCHARD,
            self::PROPERTY_TYPE_RURAL_LIFESTYLE,
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
        $this->container['property_type'] = isset($data['property_type']) ? $data['property_type'] : null;
        $this->container['bed_rooms'] = isset($data['bed_rooms']) ? $data['bed_rooms'] : null;
        $this->container['bath_rooms'] = isset($data['bath_rooms']) ? $data['bath_rooms'] : null;
        $this->container['parking_info'] = isset($data['parking_info']) ? $data['parking_info'] : null;
        $this->container['energy_efficiency_rating'] = isset($data['energy_efficiency_rating']) ? $data['energy_efficiency_rating'] : null;
        $this->container['pdfs'] = isset($data['pdfs']) ? $data['pdfs'] : null;
        $this->container['is_marked_for_liveability'] = isset($data['is_marked_for_liveability']) ? $data['is_marked_for_liveability'] : null;
        $this->container['property_name'] = isset($data['property_name']) ? $data['property_name'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['land_area'] = isset($data['land_area']) ? $data['land_area'] : null;
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
     * Gets property_type
     *
     * @return string[]
     */
    public function getPropertyType()
    {
        return $this->container['property_type'];
    }

    /**
     * Sets property_type
     *
     * @param string[] $property_type 'Retirement' requires at least one more property type to be specified with it (for example: \\\"Retirement\\\", \\\"ApartmentUnitFlat\\\") ['acreageSemiRural', 'apartmentUnitFlat', 'aquaculture', 'blockOfUnits', 'carSpace', 'dairyFarming', 'developmentSite', 'duplex', 'farm', 'fishingForestry', 'newHomeDesigns', 'house', 'newHouseLand', 'irrigationServices', 'newLand', 'livestock', 'newApartments', 'penthouse', 'retirement', 'rural', 'semiDetached', 'specialistFarm', 'studio', 'terrace', 'townhouse', 'vacantLand', 'villa', 'cropping', 'viticulture', 'mixedFarming', 'grazing', 'horticulture', 'equine', 'farmlet', 'orchard', 'ruralLifestyle'].
     *
     * @return $this
     */
    public function setPropertyType($property_type)
    {
        $allowedValues = $this->getPropertyTypeAllowableValues();
        if (!is_null($property_type) && array_diff($property_type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'property_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['property_type'] = $property_type;

        return $this;
    }

    /**
     * Gets bed_rooms
     *
     * @return int
     */
    public function getBedRooms()
    {
        return $this->container['bed_rooms'];
    }

    /**
     * Sets bed_rooms
     *
     * @param int $bed_rooms Number of bedrooms
     *
     * @return $this
     */
    public function setBedRooms($bed_rooms)
    {
        $this->container['bed_rooms'] = $bed_rooms;

        return $this;
    }

    /**
     * Gets bath_rooms
     *
     * @return int
     */
    public function getBathRooms()
    {
        return $this->container['bath_rooms'];
    }

    /**
     * Sets bath_rooms
     *
     * @param int $bath_rooms Number of bathrooms
     *
     * @return $this
     */
    public function setBathRooms($bath_rooms)
    {
        $this->container['bath_rooms'] = $bath_rooms;

        return $this;
    }

    /**
     * Gets parking_info
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelParkingInfo
     */
    public function getParkingInfo()
    {
        return $this->container['parking_info'];
    }

    /**
     * Sets parking_info
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelParkingInfo $parking_info parking_info
     *
     * @return $this
     */
    public function setParkingInfo($parking_info)
    {
        $this->container['parking_info'] = $parking_info;

        return $this;
    }

    /**
     * Gets energy_efficiency_rating
     *
     * @return double
     */
    public function getEnergyEfficiencyRating()
    {
        return $this->container['energy_efficiency_rating'];
    }

    /**
     * Sets energy_efficiency_rating
     *
     * @param double $energy_efficiency_rating Optional, although must be set for ACT dwellings for sale. Valid values range from 0 to 10 inclusive, in increments of 0.5
     *
     * @return $this
     */
    public function setEnergyEfficiencyRating($energy_efficiency_rating)
    {
        $this->container['energy_efficiency_rating'] = $energy_efficiency_rating;

        return $this;
    }

    /**
     * Gets pdfs
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyPdf[]
     */
    public function getPdfs()
    {
        return $this->container['pdfs'];
    }

    /**
     * Sets pdfs
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyPdf[] $pdfs List of PDF files related to the listing
     *
     * @return $this
     */
    public function setPdfs($pdfs)
    {
        $this->container['pdfs'] = $pdfs;

        return $this;
    }

    /**
     * Gets is_marked_for_liveability
     *
     * @return bool
     */
    public function getIsMarkedForLiveability()
    {
        return $this->container['is_marked_for_liveability'];
    }

    /**
     * Sets is_marked_for_liveability
     *
     * @param bool $is_marked_for_liveability Is the property liveability compliant
     *
     * @return $this
     */
    public function setIsMarkedForLiveability($is_marked_for_liveability)
    {
        $this->container['is_marked_for_liveability'] = $is_marked_for_liveability;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string $property_name Name of the property up to 70 characters
     *
     * @return $this
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Short location information up to 30 character, e.g.: Greenhills Beach
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[] $images List of image files, photos or floor plans related to the listing.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelAddress $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets area
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelArea
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelArea $area area
     *
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets land_area
     *
     * @return \Swagger\Client\Model\DomainListingAdminServiceV1ModelLandArea
     */
    public function getLandArea()
    {
        return $this->container['land_area'];
    }

    /**
     * Sets land_area
     *
     * @param \Swagger\Client\Model\DomainListingAdminServiceV1ModelLandArea $land_area land_area
     *
     * @return $this
     */
    public function setLandArea($land_area)
    {
        $this->container['land_area'] = $land_area;

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