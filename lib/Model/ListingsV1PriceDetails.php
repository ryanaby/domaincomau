<?php
/**
 * ListingsV1PriceDetails
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
 * ListingsV1PriceDetails Class Doc Comment
 *
 * @category Class
 * @description Encapsulates a listing&#x27;s price information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1PriceDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.V1.PriceDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gst_option' => 'string',
        'price_type' => 'string',
        'price_unit' => 'string',
        'price' => 'double',
        'price_from' => 'int',
        'price_to' => 'int',
        'price_prefix' => 'string',
        'can_display_price' => 'bool',
        'hidden_reasons' => 'string[]',
        'display_price' => 'string',
        'bond' => 'double',
        'price_reduction' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gst_option' => null,
        'price_type' => null,
        'price_unit' => null,
        'price' => 'double',
        'price_from' => 'int32',
        'price_to' => 'int32',
        'price_prefix' => null,
        'can_display_price' => null,
        'hidden_reasons' => null,
        'display_price' => null,
        'bond' => 'double',
        'price_reduction' => null
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
        'gst_option' => 'gstOption',
        'price_type' => 'priceType',
        'price_unit' => 'priceUnit',
        'price' => 'price',
        'price_from' => 'priceFrom',
        'price_to' => 'priceTo',
        'price_prefix' => 'pricePrefix',
        'can_display_price' => 'canDisplayPrice',
        'hidden_reasons' => 'hiddenReasons',
        'display_price' => 'displayPrice',
        'bond' => 'bond',
        'price_reduction' => 'priceReduction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gst_option' => 'setGstOption',
        'price_type' => 'setPriceType',
        'price_unit' => 'setPriceUnit',
        'price' => 'setPrice',
        'price_from' => 'setPriceFrom',
        'price_to' => 'setPriceTo',
        'price_prefix' => 'setPricePrefix',
        'can_display_price' => 'setCanDisplayPrice',
        'hidden_reasons' => 'setHiddenReasons',
        'display_price' => 'setDisplayPrice',
        'bond' => 'setBond',
        'price_reduction' => 'setPriceReduction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gst_option' => 'getGstOption',
        'price_type' => 'getPriceType',
        'price_unit' => 'getPriceUnit',
        'price' => 'getPrice',
        'price_from' => 'getPriceFrom',
        'price_to' => 'getPriceTo',
        'price_prefix' => 'getPricePrefix',
        'can_display_price' => 'getCanDisplayPrice',
        'hidden_reasons' => 'getHiddenReasons',
        'display_price' => 'getDisplayPrice',
        'bond' => 'getBond',
        'price_reduction' => 'getPriceReduction'
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

    const GST_OPTION_NA = 'na';
    const GST_OPTION_INC = 'inc';
    const GST_OPTION_EX = 'ex';
    const PRICE_TYPE_GROSS = 'gross';
    const PRICE_TYPE_NET = 'net';
    const PRICE_UNIT_TOTAL_AMOUNT = 'totalAmount';
    const PRICE_UNIT_PER_SQM = 'perSqm';
    const HIDDEN_REASONS_BY_AGENCY = 'byAgency';
    const HIDDEN_REASONS_QLD_RESTRICTION = 'qldRestriction';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGstOptionAllowableValues()
    {
        return [
            self::GST_OPTION_NA,
            self::GST_OPTION_INC,
            self::GST_OPTION_EX,
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
    public function getPriceUnitAllowableValues()
    {
        return [
            self::PRICE_UNIT_TOTAL_AMOUNT,
            self::PRICE_UNIT_PER_SQM,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHiddenReasonsAllowableValues()
    {
        return [
            self::HIDDEN_REASONS_BY_AGENCY,
            self::HIDDEN_REASONS_QLD_RESTRICTION,
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
        $this->container['gst_option'] = isset($data['gst_option']) ? $data['gst_option'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_from'] = isset($data['price_from']) ? $data['price_from'] : null;
        $this->container['price_to'] = isset($data['price_to']) ? $data['price_to'] : null;
        $this->container['price_prefix'] = isset($data['price_prefix']) ? $data['price_prefix'] : null;
        $this->container['can_display_price'] = isset($data['can_display_price']) ? $data['can_display_price'] : null;
        $this->container['hidden_reasons'] = isset($data['hidden_reasons']) ? $data['hidden_reasons'] : null;
        $this->container['display_price'] = isset($data['display_price']) ? $data['display_price'] : null;
        $this->container['bond'] = isset($data['bond']) ? $data['bond'] : null;
        $this->container['price_reduction'] = isset($data['price_reduction']) ? $data['price_reduction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getGstOptionAllowableValues();
        if (!is_null($this->container['gst_option']) && !in_array($this->container['gst_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gst_option', must be one of '%s'",
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

        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($this->container['price_unit']) && !in_array($this->container['price_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'price_unit', must be one of '%s'",
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
     * Gets gst_option
     *
     * @return string
     */
    public function getGstOption()
    {
        return $this->container['gst_option'];
    }

    /**
     * Sets gst_option
     *
     * @param string $gst_option Gets or Sets GstOption
     *
     * @return $this
     */
    public function setGstOption($gst_option)
    {
        $allowedValues = $this->getGstOptionAllowableValues();
        if (!is_null($gst_option) && !in_array($gst_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gst_option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gst_option'] = $gst_option;

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
     * @param string $price_type Gets or Sets PriceType
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
     * Gets price_unit
     *
     * @return string
     */
    public function getPriceUnit()
    {
        return $this->container['price_unit'];
    }

    /**
     * Sets price_unit
     *
     * @param string $price_unit Gets or Sets PriceUnit
     *
     * @return $this
     */
    public function setPriceUnit($price_unit)
    {
        $allowedValues = $this->getPriceUnitAllowableValues();
        if (!is_null($price_unit) && !in_array($price_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'price_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['price_unit'] = $price_unit;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Price of the property
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_from
     *
     * @return int
     */
    public function getPriceFrom()
    {
        return $this->container['price_from'];
    }

    /**
     * Sets price_from
     *
     * @param int $price_from Price starting range of the property
     *
     * @return $this
     */
    public function setPriceFrom($price_from)
    {
        $this->container['price_from'] = $price_from;

        return $this;
    }

    /**
     * Gets price_to
     *
     * @return int
     */
    public function getPriceTo()
    {
        return $this->container['price_to'];
    }

    /**
     * Sets price_to
     *
     * @param int $price_to Upper price range of the property
     *
     * @return $this
     */
    public function setPriceTo($price_to)
    {
        $this->container['price_to'] = $price_to;

        return $this;
    }

    /**
     * Gets price_prefix
     *
     * @return string
     */
    public function getPricePrefix()
    {
        return $this->container['price_prefix'];
    }

    /**
     * Sets price_prefix
     *
     * @param string $price_prefix Display price for the advertisement
     *
     * @return $this
     */
    public function setPricePrefix($price_prefix)
    {
        $this->container['price_prefix'] = $price_prefix;

        return $this;
    }

    /**
     * Gets can_display_price
     *
     * @return bool
     */
    public function getCanDisplayPrice()
    {
        return $this->container['can_display_price'];
    }

    /**
     * Sets can_display_price
     *
     * @param bool $can_display_price Flag indicating whether the advertiser has chosen to display the property price
     *
     * @return $this
     */
    public function setCanDisplayPrice($can_display_price)
    {
        $this->container['can_display_price'] = $can_display_price;

        return $this;
    }

    /**
     * Gets hidden_reasons
     *
     * @return string[]
     */
    public function getHiddenReasons()
    {
        return $this->container['hidden_reasons'];
    }

    /**
     * Sets hidden_reasons
     *
     * @param string[] $hidden_reasons Reasons when price need to be hidden
     *
     * @return $this
     */
    public function setHiddenReasons($hidden_reasons)
    {
        $allowedValues = $this->getHiddenReasonsAllowableValues();
        if (!is_null($hidden_reasons) && array_diff($hidden_reasons, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hidden_reasons', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hidden_reasons'] = $hidden_reasons;

        return $this;
    }

    /**
     * Gets display_price
     *
     * @return string
     */
    public function getDisplayPrice()
    {
        return $this->container['display_price'];
    }

    /**
     * Sets display_price
     *
     * @param string $display_price A string provided by the Advertiser representing the ByIdListingPriceQueryResult of the Listing e.g. Over $1,000,000   This should be the default price field for client to use
     *
     * @return $this
     */
    public function setDisplayPrice($display_price)
    {
        $this->container['display_price'] = $display_price;

        return $this;
    }

    /**
     * Gets bond
     *
     * @return double
     */
    public function getBond()
    {
        return $this->container['bond'];
    }

    /**
     * Sets bond
     *
     * @param double $bond Rental bond
     *
     * @return $this
     */
    public function setBond($bond)
    {
        $this->container['bond'] = $bond;

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
