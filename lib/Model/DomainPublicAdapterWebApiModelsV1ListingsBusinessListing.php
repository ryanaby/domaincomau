<?php
/**
 * DomainPublicAdapterWebApiModelsV1ListingsBusinessListing
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
 * DomainPublicAdapterWebApiModelsV1ListingsBusinessListing Class Doc Comment
 *
 * @category Class
 * @description Listing details for univesal app
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainPublicAdapterWebApiModelsV1ListingsBusinessListing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.Public.Adapter.Web.Api.Models.v1.Listings.Business.Listing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ad' => '\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAd',
        'price' => 'string',
        'advertiser' => '\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAdvertiser',
        'geo_location' => '\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessGeoLocation',
        'property_area' => 'string',
        'property_type' => 'string',
        'address' => 'string',
        'headline' => 'string',
        'has_video' => 'bool',
        'media' => '\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMedia[]',
        'auction_date' => 'string',
        'id' => 'int',
        'metadata' => '\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMetadata',
        'carspace_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ad' => null,
        'price' => null,
        'advertiser' => null,
        'geo_location' => null,
        'property_area' => null,
        'property_type' => null,
        'address' => null,
        'headline' => null,
        'has_video' => null,
        'media' => null,
        'auction_date' => null,
        'id' => 'int32',
        'metadata' => null,
        'carspace_count' => 'int32'
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
        'ad' => 'ad',
        'price' => 'price',
        'advertiser' => 'advertiser',
        'geo_location' => 'geoLocation',
        'property_area' => 'propertyArea',
        'property_type' => 'propertyType',
        'address' => 'address',
        'headline' => 'headline',
        'has_video' => 'hasVideo',
        'media' => 'media',
        'auction_date' => 'auctionDate',
        'id' => 'id',
        'metadata' => 'metadata',
        'carspace_count' => 'carspaceCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad' => 'setAd',
        'price' => 'setPrice',
        'advertiser' => 'setAdvertiser',
        'geo_location' => 'setGeoLocation',
        'property_area' => 'setPropertyArea',
        'property_type' => 'setPropertyType',
        'address' => 'setAddress',
        'headline' => 'setHeadline',
        'has_video' => 'setHasVideo',
        'media' => 'setMedia',
        'auction_date' => 'setAuctionDate',
        'id' => 'setId',
        'metadata' => 'setMetadata',
        'carspace_count' => 'setCarspaceCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad' => 'getAd',
        'price' => 'getPrice',
        'advertiser' => 'getAdvertiser',
        'geo_location' => 'getGeoLocation',
        'property_area' => 'getPropertyArea',
        'property_type' => 'getPropertyType',
        'address' => 'getAddress',
        'headline' => 'getHeadline',
        'has_video' => 'getHasVideo',
        'media' => 'getMedia',
        'auction_date' => 'getAuctionDate',
        'id' => 'getId',
        'metadata' => 'getMetadata',
        'carspace_count' => 'getCarspaceCount'
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
        $this->container['ad'] = isset($data['ad']) ? $data['ad'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['geo_location'] = isset($data['geo_location']) ? $data['geo_location'] : null;
        $this->container['property_area'] = isset($data['property_area']) ? $data['property_area'] : null;
        $this->container['property_type'] = isset($data['property_type']) ? $data['property_type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['has_video'] = isset($data['has_video']) ? $data['has_video'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['auction_date'] = isset($data['auction_date']) ? $data['auction_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['carspace_count'] = isset($data['carspace_count']) ? $data['carspace_count'] : null;
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
     * Gets ad
     *
     * @return \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAd
     */
    public function getAd()
    {
        return $this->container['ad'];
    }

    /**
     * Sets ad
     *
     * @param \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAd $ad ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->container['ad'] = $ad;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price Formatted listing price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets advertiser
     *
     * @return \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAdvertiser
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     *
     * @param \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessAdvertiser $advertiser advertiser
     *
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessGeoLocation
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessGeoLocation $geo_location geo_location
     *
     * @return $this
     */
    public function setGeoLocation($geo_location)
    {
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets property_area
     *
     * @return string
     */
    public function getPropertyArea()
    {
        return $this->container['property_area'];
    }

    /**
     * Sets property_area
     *
     * @param string $property_area Building size
     *
     * @return $this
     */
    public function setPropertyArea($property_area)
    {
        $this->container['property_area'] = $property_area;

        return $this;
    }

    /**
     * Gets property_type
     *
     * @return string
     */
    public function getPropertyType()
    {
        return $this->container['property_type'];
    }

    /**
     * Sets property_type
     *
     * @param string $property_type Property type
     *
     * @return $this
     */
    public function setPropertyType($property_type)
    {
        $this->container['property_type'] = $property_type;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Full address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * @param string $headline Headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

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
     * @param bool $has_video Has video?
     *
     * @return $this
     */
    public function setHasVideo($has_video)
    {
        $this->container['has_video'] = $has_video;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMedia[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMedia[] $media Media resources for listing (images, video, floor plans)
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets auction_date
     *
     * @return string
     */
    public function getAuctionDate()
    {
        return $this->container['auction_date'];
    }

    /**
     * Sets auction_date
     *
     * @param string $auction_date Auction date
     *
     * @return $this
     */
    public function setAuctionDate($auction_date)
    {
        $this->container['auction_date'] = $auction_date;

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
     * @param int $id AdID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets carspace_count
     *
     * @return int
     */
    public function getCarspaceCount()
    {
        return $this->container['carspace_count'];
    }

    /**
     * Sets carspace_count
     *
     * @param int $carspace_count Car parking spaces count
     *
     * @return $this
     */
    public function setCarspaceCount($carspace_count)
    {
        $this->container['carspace_count'] = $carspace_count;

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
