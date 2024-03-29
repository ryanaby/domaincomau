<?php
/**
 * ListingsV1SoldDetails
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
 * ListingsV1SoldDetails Class Doc Comment
 *
 * @category Class
 * @description Sold details in the case of the listing being sold.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1SoldDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.V1.SoldDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sold_action' => 'string',
        'source' => 'string',
        'sold_price' => 'int',
        'government_recorded_sold_price' => 'int',
        'sold_date' => '\DateTime',
        'can_display_price' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sold_action' => null,
        'source' => null,
        'sold_price' => 'int32',
        'government_recorded_sold_price' => 'int32',
        'sold_date' => 'date-time',
        'can_display_price' => null
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
        'sold_action' => 'soldAction',
        'source' => 'source',
        'sold_price' => 'soldPrice',
        'government_recorded_sold_price' => 'governmentRecordedSoldPrice',
        'sold_date' => 'soldDate',
        'can_display_price' => 'canDisplayPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sold_action' => 'setSoldAction',
        'source' => 'setSource',
        'sold_price' => 'setSoldPrice',
        'government_recorded_sold_price' => 'setGovernmentRecordedSoldPrice',
        'sold_date' => 'setSoldDate',
        'can_display_price' => 'setCanDisplayPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sold_action' => 'getSoldAction',
        'source' => 'getSource',
        'sold_price' => 'getSoldPrice',
        'government_recorded_sold_price' => 'getGovernmentRecordedSoldPrice',
        'sold_date' => 'getSoldDate',
        'can_display_price' => 'getCanDisplayPrice'
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

    const SOLD_ACTION_NOT_STATED = 'notStated';
    const SOLD_ACTION_AUCTION = 'auction';
    const SOLD_ACTION_PRIVATE_TREATY = 'privateTreaty';
    const SOLD_ACTION_WITHDRAWN = 'withdrawn';
    const SOLD_ACTION_SOLD_PRIOR_TO_AUCTION = 'soldPriorToAuction';
    const SOURCE_INTERNAL = 'internal';
    const SOURCE_EXTERNAL = 'external';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSoldActionAllowableValues()
    {
        return [
            self::SOLD_ACTION_NOT_STATED,
            self::SOLD_ACTION_AUCTION,
            self::SOLD_ACTION_PRIVATE_TREATY,
            self::SOLD_ACTION_WITHDRAWN,
            self::SOLD_ACTION_SOLD_PRIOR_TO_AUCTION,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_INTERNAL,
            self::SOURCE_EXTERNAL,
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
        $this->container['sold_action'] = isset($data['sold_action']) ? $data['sold_action'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sold_price'] = isset($data['sold_price']) ? $data['sold_price'] : null;
        $this->container['government_recorded_sold_price'] = isset($data['government_recorded_sold_price']) ? $data['government_recorded_sold_price'] : null;
        $this->container['sold_date'] = isset($data['sold_date']) ? $data['sold_date'] : null;
        $this->container['can_display_price'] = isset($data['can_display_price']) ? $data['can_display_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSoldActionAllowableValues();
        if (!is_null($this->container['sold_action']) && !in_array($this->container['sold_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sold_action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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
     * Gets sold_action
     *
     * @return string
     */
    public function getSoldAction()
    {
        return $this->container['sold_action'];
    }

    /**
     * Sets sold_action
     *
     * @param string $sold_action Gets or Sets SoldAction
     *
     * @return $this
     */
    public function setSoldAction($sold_action)
    {
        $allowedValues = $this->getSoldActionAllowableValues();
        if (!is_null($sold_action) && !in_array($sold_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sold_action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sold_action'] = $sold_action;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Gets or Sets Source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets sold_price
     *
     * @return int
     */
    public function getSoldPrice()
    {
        return $this->container['sold_price'];
    }

    /**
     * Sets sold_price
     *
     * @param int $sold_price The last sold price entered by the Advertiser.  This price will only be visible if allowed by the Advertiser  and the listing as been sold
     *
     * @return $this
     */
    public function setSoldPrice($sold_price)
    {
        $this->container['sold_price'] = $sold_price;

        return $this;
    }

    /**
     * Gets government_recorded_sold_price
     *
     * @return int
     */
    public function getGovernmentRecordedSoldPrice()
    {
        return $this->container['government_recorded_sold_price'];
    }

    /**
     * Sets government_recorded_sold_price
     *
     * @param int $government_recorded_sold_price The government recorded sold price sourced from APM
     *
     * @return $this
     */
    public function setGovernmentRecordedSoldPrice($government_recorded_sold_price)
    {
        $this->container['government_recorded_sold_price'] = $government_recorded_sold_price;

        return $this;
    }

    /**
     * Gets sold_date
     *
     * @return \DateTime
     */
    public function getSoldDate()
    {
        return $this->container['sold_date'];
    }

    /**
     * Sets sold_date
     *
     * @param \DateTime $sold_date The Date the listing was sold. DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setSoldDate($sold_date)
    {
        $this->container['sold_date'] = $sold_date;

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
     * @param bool $can_display_price Indicates whether this instance can display price
     *
     * @return $this
     */
    public function setCanDisplayPrice($can_display_price)
    {
        $this->container['can_display_price'] = $can_display_price;

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
