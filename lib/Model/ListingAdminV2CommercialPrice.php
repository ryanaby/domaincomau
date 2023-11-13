<?php
/**
 * ListingAdminV2CommercialPrice
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
 * ListingAdminV2CommercialPrice Class Doc Comment
 *
 * @category Class
 * @description Commercial component for price
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingAdminV2CommercialPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListingAdmin.v2.CommercialPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'price_unit_type' => 'string',
        'price_type' => 'string',
        'gst_option_type' => 'string',
        'price_reduction' => 'bool',
        'display_text' => 'string',
        'from' => 'int',
        'to' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'price_unit_type' => null,
        'price_type' => null,
        'gst_option_type' => null,
        'price_reduction' => null,
        'display_text' => null,
        'from' => 'int32',
        'to' => 'int32'
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
        'price_unit_type' => 'priceUnitType',
        'price_type' => 'priceType',
        'gst_option_type' => 'gstOptionType',
        'price_reduction' => 'priceReduction',
        'display_text' => 'displayText',
        'from' => 'from',
        'to' => 'to'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_unit_type' => 'setPriceUnitType',
        'price_type' => 'setPriceType',
        'gst_option_type' => 'setGstOptionType',
        'price_reduction' => 'setPriceReduction',
        'display_text' => 'setDisplayText',
        'from' => 'setFrom',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_unit_type' => 'getPriceUnitType',
        'price_type' => 'getPriceType',
        'gst_option_type' => 'getGstOptionType',
        'price_reduction' => 'getPriceReduction',
        'display_text' => 'getDisplayText',
        'from' => 'getFrom',
        'to' => 'getTo'
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

    const PRICE_UNIT_TYPE_TOTAL_AMOUNT = 'totalAmount';
    const PRICE_UNIT_TYPE_PER_SQM = 'perSqm';
    const PRICE_TYPE_GROSS = 'gross';
    const PRICE_TYPE_NET = 'net';
    const GST_OPTION_TYPE_N_A = 'nA';
    const GST_OPTION_TYPE_INC = 'inc';
    const GST_OPTION_TYPE_EX = 'ex';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceUnitTypeAllowableValues()
    {
        return [
            self::PRICE_UNIT_TYPE_TOTAL_AMOUNT,
            self::PRICE_UNIT_TYPE_PER_SQM,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceTypeAllowableValues()
    {
        return [
            self::PRICE_TYPE_GROSS,
            self::PRICE_TYPE_NET,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGstOptionTypeAllowableValues()
    {
        return [
            self::GST_OPTION_TYPE_N_A,
            self::GST_OPTION_TYPE_INC,
            self::GST_OPTION_TYPE_EX,
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
        $this->container['price_unit_type'] = isset($data['price_unit_type']) ? $data['price_unit_type'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['gst_option_type'] = isset($data['gst_option_type']) ? $data['gst_option_type'] : null;
        $this->container['price_reduction'] = isset($data['price_reduction']) ? $data['price_reduction'] : null;
        $this->container['display_text'] = isset($data['display_text']) ? $data['display_text'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPriceUnitTypeAllowableValues();
        if (!is_null($this->container['price_unit_type']) && !in_array($this->container['price_unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_unit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!is_null($this->container['price_type']) && !in_array($this->container['price_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGstOptionTypeAllowableValues();
        if (!is_null($this->container['gst_option_type']) && !in_array($this->container['gst_option_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gst_option_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
     * Gets price_unit_type
     *
     * @return string
     */
    public function getPriceUnitType()
    {
        return $this->container['price_unit_type'];
    }

    /**
     * Sets price_unit_type
     *
     * @param string $price_unit_type Price Unit type. Can have the values \"TotalAmount\", \"PerSqm\". Default = \"TotalAmount\"
     *
     * @return $this
     */
    public function setPriceUnitType($price_unit_type)
    {
        $allowedValues = $this->getPriceUnitTypeAllowableValues();
        if (!is_null($price_unit_type) && !in_array($price_unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_unit_type'] = $price_unit_type;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param string $price_type Type can have the values \"Gross\", \"Net\". Default \"Net\"
     *
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $allowedValues = $this->getPriceTypeAllowableValues();
        if (!is_null($price_type) && !in_array($price_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets gst_option_type
     *
     * @return string
     */
    public function getGstOptionType()
    {
        return $this->container['gst_option_type'];
    }

    /**
     * Sets gst_option_type
     *
     * @param string $gst_option_type GST Option Type. Can have the values \"NA\", \"Inc\", \"Ex\". Default = \"NA\"
     *
     * @return $this
     */
    public function setGstOptionType($gst_option_type)
    {
        $allowedValues = $this->getGstOptionTypeAllowableValues();
        if (!is_null($gst_option_type) && !in_array($gst_option_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gst_option_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gst_option_type'] = $gst_option_type;

        return $this;
    }

    /**
     * Gets price_reduction
     *
     * @return bool
     */
    public function getPriceReduction()
    {
        return $this->container['price_reduction'];
    }

    /**
     * Sets price_reduction
     *
     * @param bool $price_reduction Indicates if this property is under price reduction
     *
     * @return $this
     */
    public function setPriceReduction($price_reduction)
    {
        $this->container['price_reduction'] = $price_reduction;

        return $this;
    }

    /**
     * Gets display_text
     *
     * @return string
     */
    public function getDisplayText()
    {
        return $this->container['display_text'];
    }

    /**
     * Sets display_text
     *
     * @param string $display_text When provided this will be shown instead of the price range, e.g.: \"Offers over $450K considered\"
     *
     * @return $this
     */
    public function setDisplayText($display_text)
    {
        $this->container['display_text'] = $display_text;

        return $this;
    }

    /**
     * Gets from
     *
     * @return int
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int $from Lowest price the property is expected to sell/rent for to set search price. For a fixed price, set this value the same as To
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return int
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param int $to Highest price the property is expected to sell/rent for to set search price.   For a fixed price, set this value the same as From
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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
