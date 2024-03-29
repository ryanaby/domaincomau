<?php
/**
 * PropertiesV1Photo
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
 * PropertiesV1Photo Class Doc Comment
 *
 * @category Class
 * @description DomainPropertyIdModelModelsPhoto
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertiesV1Photo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Properties.v1.Photo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_type' => 'string',
        'advert_id' => 'int',
        'date' => '\DateTime',
        'full_url' => 'string',
        'rank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_type' => null,
        'advert_id' => 'int32',
        'date' => 'date-time',
        'full_url' => null,
        'rank' => 'int32'
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
        'image_type' => 'imageType',
        'advert_id' => 'advertId',
        'date' => 'date',
        'full_url' => 'fullUrl',
        'rank' => 'rank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_type' => 'setImageType',
        'advert_id' => 'setAdvertId',
        'date' => 'setDate',
        'full_url' => 'setFullUrl',
        'rank' => 'setRank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_type' => 'getImageType',
        'advert_id' => 'getAdvertId',
        'date' => 'getDate',
        'full_url' => 'getFullUrl',
        'rank' => 'getRank'
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

    const IMAGE_TYPE_PROPERTY = 'Property';
    const IMAGE_TYPE_FLOORPLAN = 'Floorplan';
    const IMAGE_TYPE_GOOGLE_STREET_VIEW = 'GoogleStreetView';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageTypeAllowableValues()
    {
        return [
            self::IMAGE_TYPE_PROPERTY,
            self::IMAGE_TYPE_FLOORPLAN,
            self::IMAGE_TYPE_GOOGLE_STREET_VIEW,
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
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['advert_id'] = isset($data['advert_id']) ? $data['advert_id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['full_url'] = isset($data['full_url']) ? $data['full_url'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getImageTypeAllowableValues();
        if (!is_null($this->container['image_type']) && !in_array($this->container['image_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'image_type', must be one of '%s'",
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
     * Gets image_type
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     *
     * @param string $image_type Gets or Sets ImageType
     *
     * @return $this
     */
    public function setImageType($image_type)
    {
        $allowedValues = $this->getImageTypeAllowableValues();
        if (!is_null($image_type) && !in_array($image_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'image_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets advert_id
     *
     * @return int
     */
    public function getAdvertId()
    {
        return $this->container['advert_id'];
    }

    /**
     * Sets advert_id
     *
     * @param int $advert_id Gets or Sets AdvertId
     *
     * @return $this
     */
    public function setAdvertId($advert_id)
    {
        $this->container['advert_id'] = $advert_id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Gets or Sets Date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets full_url
     *
     * @return string
     */
    public function getFullUrl()
    {
        return $this->container['full_url'];
    }

    /**
     * Sets full_url
     *
     * @param string $full_url Gets or Sets FullUrl
     *
     * @return $this
     */
    public function setFullUrl($full_url)
    {
        $this->container['full_url'] = $full_url;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Gets or Sets Rank
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

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
