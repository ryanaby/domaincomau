<?php
/**
 * ListingsV2Inspection
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
 * ListingsV2Inspection Class Doc Comment
 *
 * @category Class
 * @description Encapsulates the details of a Listing&#x27;s Inspection
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV2Inspection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.V2.Inspection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recurrence' => 'string',
        'opening_date_time' => '\DateTime',
        'closing_date_time' => '\DateTime',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recurrence' => null,
        'opening_date_time' => 'date-time',
        'closing_date_time' => 'date-time',
        'description' => null
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
        'recurrence' => 'recurrence',
        'opening_date_time' => 'openingDateTime',
        'closing_date_time' => 'closingDateTime',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recurrence' => 'setRecurrence',
        'opening_date_time' => 'setOpeningDateTime',
        'closing_date_time' => 'setClosingDateTime',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recurrence' => 'getRecurrence',
        'opening_date_time' => 'getOpeningDateTime',
        'closing_date_time' => 'getClosingDateTime',
        'description' => 'getDescription'
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

    const RECURRENCE_NONE = 'none';
    const RECURRENCE_WEEKLY = 'weekly';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecurrenceAllowableValues()
    {
        return [
            self::RECURRENCE_NONE,
            self::RECURRENCE_WEEKLY,
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
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : null;
        $this->container['opening_date_time'] = isset($data['opening_date_time']) ? $data['opening_date_time'] : null;
        $this->container['closing_date_time'] = isset($data['closing_date_time']) ? $data['closing_date_time'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($this->container['recurrence']) && !in_array($this->container['recurrence'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recurrence', must be one of '%s'",
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
     * Gets recurrence
     *
     * @return string
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param string $recurrence Gets or Sets Recurrence
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $allowedValues = $this->getRecurrenceAllowableValues();
        if (!is_null($recurrence) && !in_array($recurrence, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recurrence', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets opening_date_time
     *
     * @return \DateTime
     */
    public function getOpeningDateTime()
    {
        return $this->container['opening_date_time'];
    }

    /**
     * Sets opening_date_time
     *
     * @param \DateTime $opening_date_time Opening date and time of the inspection. e.g. 2015-01-01T12:00:00.  Not provided by bulk uploaded listings, in these cases refer to the  inspection description field. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setOpeningDateTime($opening_date_time)
    {
        $this->container['opening_date_time'] = $opening_date_time;

        return $this;
    }

    /**
     * Gets closing_date_time
     *
     * @return \DateTime
     */
    public function getClosingDateTime()
    {
        return $this->container['closing_date_time'];
    }

    /**
     * Sets closing_date_time
     *
     * @param \DateTime $closing_date_time Closing date and time of the inspection. e.g. 2015-01-01T12:00:00  Not provided by bulk uploaded listings, in these cases refer to the  inspection description field. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setClosingDateTime($closing_date_time)
    {
        $this->container['closing_date_time'] = $closing_date_time;

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
     * @param string $description Description of the inspection provided by the Advertiser.  When listings are bulk uploaded, inspection times are provided as a string.  Other inspection details will not be provided
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
