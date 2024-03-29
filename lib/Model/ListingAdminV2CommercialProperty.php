<?php
/**
 * ListingAdminV2CommercialProperty
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
 * ListingAdminV2CommercialProperty Class Doc Comment
 *
 * @category Class
 * @description Commercial Property
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingAdminV2CommercialProperty implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingAdmin.v2.CommercialProperty';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'property_type' => 'string[]',
        'building_type' => 'string',
        'parking' => '\Swagger\Client\Model\ListingAdminV2Parking',
        'pdfs' => '\Swagger\Client\Model\ListingAdminV2PropertyPdf[]',
        'property_name' => 'string',
        'location' => 'string',
        'images' => '\Swagger\Client\Model\ListingAdminV2PropertyMedia[]',
        'address' => '\Swagger\Client\Model\ListingAdminV2Address',
        'area' => '\Swagger\Client\Model\ListingAdminV2Area',
        'land_area' => '\Swagger\Client\Model\ListingAdminV2LandArea'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'property_type' => null,
        'building_type' => null,
        'parking' => null,
        'pdfs' => null,
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
        'building_type' => 'buildingType',
        'parking' => 'parking',
        'pdfs' => 'pdfs',
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
        'building_type' => 'setBuildingType',
        'parking' => 'setParking',
        'pdfs' => 'setPdfs',
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
        'building_type' => 'getBuildingType',
        'parking' => 'getParking',
        'pdfs' => 'getPdfs',
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

    const PROPERTY_TYPE_AQUACULTURE = 'aquaculture';
    const PROPERTY_TYPE_DAIRY_FARMING = 'dairyFarming';
    const PROPERTY_TYPE_DEVELOPMENT_LAND = 'developmentLand';
    const PROPERTY_TYPE_FISHING_FORESTRY = 'fishingForestry';
    const PROPERTY_TYPE_HOTEL_LEISURE = 'hotelLeisure';
    const PROPERTY_TYPE_INDUSTRIAL_WAREHOUSE = 'industrialWarehouse';
    const PROPERTY_TYPE_IRRIGATION_SERVICES = 'irrigationServices';
    const PROPERTY_TYPE_LIVESTOCK = 'livestock';
    const PROPERTY_TYPE_INTERNATIONAL_COMMERCIAL = 'internationalCommercial';
    const PROPERTY_TYPE_MEDICAL_CONSULTING = 'medicalConsulting';
    const PROPERTY_TYPE_OFFICES = 'offices';
    const PROPERTY_TYPE_PARKING_CAR_SPACE = 'parkingCarSpace';
    const PROPERTY_TYPE_RETAIL = 'retail';
    const PROPERTY_TYPE_RURAL_COMMERCIAL_FARMING = 'ruralCommercialFarming';
    const PROPERTY_TYPE_SHOWROOMS_BULKY_GOODS = 'showroomsBulkyGoods';
    const PROPERTY_TYPE_SERVICED_OFFICES = 'servicedOffices';
    const PROPERTY_TYPE_OTHER = 'other';
    const PROPERTY_TYPE_CROPPING = 'cropping';
    const PROPERTY_TYPE_VITICULTURE = 'viticulture';
    const PROPERTY_TYPE_MIXED_FARMING = 'mixedFarming';
    const PROPERTY_TYPE_GRAZING = 'grazing';
    const PROPERTY_TYPE_HORTICULTURE = 'horticulture';
    const PROPERTY_TYPE_EQUINE = 'equine';
    const PROPERTY_TYPE_FARMLET = 'farmlet';
    const PROPERTY_TYPE_ORCHARD = 'orchard';
    const PROPERTY_TYPE_RURAL_LIFESTYLE = 'ruralLifestyle';
    const BUILDING_TYPE_WHOLE = 'whole';
    const BUILDING_TYPE_PART = 'part';
    const BUILDING_TYPE_N_A = 'nA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertyTypeAllowableValues()
    {
        return [
            self::PROPERTY_TYPE_AQUACULTURE,
            self::PROPERTY_TYPE_DAIRY_FARMING,
            self::PROPERTY_TYPE_DEVELOPMENT_LAND,
            self::PROPERTY_TYPE_FISHING_FORESTRY,
            self::PROPERTY_TYPE_HOTEL_LEISURE,
            self::PROPERTY_TYPE_INDUSTRIAL_WAREHOUSE,
            self::PROPERTY_TYPE_IRRIGATION_SERVICES,
            self::PROPERTY_TYPE_LIVESTOCK,
            self::PROPERTY_TYPE_INTERNATIONAL_COMMERCIAL,
            self::PROPERTY_TYPE_MEDICAL_CONSULTING,
            self::PROPERTY_TYPE_OFFICES,
            self::PROPERTY_TYPE_PARKING_CAR_SPACE,
            self::PROPERTY_TYPE_RETAIL,
            self::PROPERTY_TYPE_RURAL_COMMERCIAL_FARMING,
            self::PROPERTY_TYPE_SHOWROOMS_BULKY_GOODS,
            self::PROPERTY_TYPE_SERVICED_OFFICES,
            self::PROPERTY_TYPE_OTHER,
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBuildingTypeAllowableValues()
    {
        return [
            self::BUILDING_TYPE_WHOLE,
            self::BUILDING_TYPE_PART,
            self::BUILDING_TYPE_N_A,
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
        $this->container['building_type'] = isset($data['building_type']) ? $data['building_type'] : null;
        $this->container['parking'] = isset($data['parking']) ? $data['parking'] : null;
        $this->container['pdfs'] = isset($data['pdfs']) ? $data['pdfs'] : null;
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

        if ($this->container['property_type'] === null) {
            $invalidProperties[] = "'property_type' can't be null";
        }
        $allowedValues = $this->getBuildingTypeAllowableValues();
        if (!is_null($this->container['building_type']) && !in_array($this->container['building_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'building_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * @param string[] $property_type Commercial property types ['aquaculture', 'dairyFarming', 'developmentLand', 'fishingForestry', 'hotelLeisure', 'industrialWarehouse', 'irrigationServices', 'livestock', 'internationalCommercial', 'medicalConsulting', 'offices', 'parkingCarSpace', 'retail', 'ruralCommercialFarming', 'showroomsBulkyGoods', 'servicedOffices', 'other', 'cropping', 'viticulture', 'mixedFarming', 'grazing', 'horticulture', 'equine', 'farmlet', 'orchard', 'ruralLifestyle'].
     *
     * @return $this
     */
    public function setPropertyType($property_type)
    {
        $allowedValues = $this->getPropertyTypeAllowableValues();
        if (array_diff($property_type, $allowedValues)) {
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
     * Gets building_type
     *
     * @return string
     */
    public function getBuildingType()
    {
        return $this->container['building_type'];
    }

    /**
     * Sets building_type
     *
     * @param string $building_type Building Type
     *
     * @return $this
     */
    public function setBuildingType($building_type)
    {
        $allowedValues = $this->getBuildingTypeAllowableValues();
        if (!is_null($building_type) && !in_array($building_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'building_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['building_type'] = $building_type;

        return $this;
    }

    /**
     * Gets parking
     *
     * @return \Swagger\Client\Model\ListingAdminV2Parking
     */
    public function getParking()
    {
        return $this->container['parking'];
    }

    /**
     * Sets parking
     *
     * @param \Swagger\Client\Model\ListingAdminV2Parking $parking parking
     *
     * @return $this
     */
    public function setParking($parking)
    {
        $this->container['parking'] = $parking;

        return $this;
    }

    /**
     * Gets pdfs
     *
     * @return \Swagger\Client\Model\ListingAdminV2PropertyPdf[]
     */
    public function getPdfs()
    {
        return $this->container['pdfs'];
    }

    /**
     * Sets pdfs
     *
     * @param \Swagger\Client\Model\ListingAdminV2PropertyPdf[] $pdfs List of PDF files related to the listing
     *
     * @return $this
     */
    public function setPdfs($pdfs)
    {
        $this->container['pdfs'] = $pdfs;

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
     * @return \Swagger\Client\Model\ListingAdminV2PropertyMedia[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Swagger\Client\Model\ListingAdminV2PropertyMedia[] $images List of image files, photos or floor plans related to the listing.  Supported image file formats: AVIF, BMP, GIF, HEIF/HEIC, JPEG, JPEG 2000, PNG, TIFF, WebP.  The file size is restricted to maximum 100MB.  We recommend against using transparent backgrounds.  Some image formats, such as PNG, support transparency, but when images with transparent areas are resized, they may be converted to a format that doesn’t support transparency, such as JPEG.  By default, transparent areas are converted to black, but the application displaying the image may convert the transparent area to the most appropriate colour for the area where the image is being placed.
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
     * @return \Swagger\Client\Model\ListingAdminV2Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\ListingAdminV2Address $address address
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
     * @return \Swagger\Client\Model\ListingAdminV2Area
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param \Swagger\Client\Model\ListingAdminV2Area $area area
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
     * @return \Swagger\Client\Model\ListingAdminV2LandArea
     */
    public function getLandArea()
    {
        return $this->container['land_area'];
    }

    /**
     * Sets land_area
     *
     * @param \Swagger\Client\Model\ListingAdminV2LandArea $land_area land_area
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
