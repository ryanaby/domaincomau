<?php
/**
 * ListingAdminV2ParkingDetails
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
 * ListingAdminV2ParkingDetails Class Doc Comment
 *
 * @category Class
 * @description Parking Details
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingAdminV2ParkingDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingAdmin.v2.ParkingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parking_type' => 'string',
        'number_of_spaces' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parking_type' => null,
        'number_of_spaces' => 'int32'
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
        'parking_type' => 'parkingType',
        'number_of_spaces' => 'numberOfSpaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parking_type' => 'setParkingType',
        'number_of_spaces' => 'setNumberOfSpaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parking_type' => 'getParkingType',
        'number_of_spaces' => 'getNumberOfSpaces'
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

    const PARKING_TYPE_ON_SITE = 'onSite';
    const PARKING_TYPE_ON_STREET = 'onStreet';
    const PARKING_TYPE_NO_PARKING = 'noParking';
    const PARKING_TYPE_GARAGE = 'garage';
    const PARKING_TYPE_CARPORT = 'carport';
    const PARKING_TYPE_OUTDOOR = 'outdoor';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParkingTypeAllowableValues()
    {
        return [
            self::PARKING_TYPE_ON_SITE,
            self::PARKING_TYPE_ON_STREET,
            self::PARKING_TYPE_NO_PARKING,
            self::PARKING_TYPE_GARAGE,
            self::PARKING_TYPE_CARPORT,
            self::PARKING_TYPE_OUTDOOR,
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
        $this->container['parking_type'] = isset($data['parking_type']) ? $data['parking_type'] : null;
        $this->container['number_of_spaces'] = isset($data['number_of_spaces']) ? $data['number_of_spaces'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['parking_type'] === null) {
            $invalidProperties[] = "'parking_type' can't be null";
        }
        $allowedValues = $this->getParkingTypeAllowableValues();
        if (!is_null($this->container['parking_type']) && !in_array($this->container['parking_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'parking_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['number_of_spaces'] === null) {
            $invalidProperties[] = "'number_of_spaces' can't be null";
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
     * Gets parking_type
     *
     * @return string
     */
    public function getParkingType()
    {
        return $this->container['parking_type'];
    }

    /**
     * Sets parking_type
     *
     * @param string $parking_type Can have the value \"OnSite\", \"OnStreet\", \"NoParking\". Default: \"NoParking\"
     *
     * @return $this
     */
    public function setParkingType($parking_type)
    {
        $allowedValues = $this->getParkingTypeAllowableValues();
        if (!in_array($parking_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'parking_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['parking_type'] = $parking_type;

        return $this;
    }

    /**
     * Gets number_of_spaces
     *
     * @return int
     */
    public function getNumberOfSpaces()
    {
        return $this->container['number_of_spaces'];
    }

    /**
     * Sets number_of_spaces
     *
     * @param int $number_of_spaces Number of parking spaces on site
     *
     * @return $this
     */
    public function setNumberOfSpaces($number_of_spaces)
    {
        $this->container['number_of_spaces'] = $number_of_spaces;

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
