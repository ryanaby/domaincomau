<?php
/**
 * ListingsV1AuctionDetails
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
 * ListingsV1AuctionDetails Class Doc Comment
 *
 * @category Class
 * @description The detail&#x27;s of the auction in case of a listing for sale being auctioned or sold by auction
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListingsV1AuctionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Listings.v1.AuctionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auction_schedule' => '\Swagger\Client\Model\ListingsV1AuctionSchedule',
        'auctioned_price' => 'int',
        'auctioned_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auction_schedule' => null,
        'auctioned_price' => 'int32',
        'auctioned_date' => 'date-time'
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
        'auction_schedule' => 'auctionSchedule',
        'auctioned_price' => 'auctionedPrice',
        'auctioned_date' => 'auctionedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auction_schedule' => 'setAuctionSchedule',
        'auctioned_price' => 'setAuctionedPrice',
        'auctioned_date' => 'setAuctionedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auction_schedule' => 'getAuctionSchedule',
        'auctioned_price' => 'getAuctionedPrice',
        'auctioned_date' => 'getAuctionedDate'
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
        $this->container['auction_schedule'] = isset($data['auction_schedule']) ? $data['auction_schedule'] : null;
        $this->container['auctioned_price'] = isset($data['auctioned_price']) ? $data['auctioned_price'] : null;
        $this->container['auctioned_date'] = isset($data['auctioned_date']) ? $data['auctioned_date'] : null;
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
     * Gets auction_schedule
     *
     * @return \Swagger\Client\Model\ListingsV1AuctionSchedule
     */
    public function getAuctionSchedule()
    {
        return $this->container['auction_schedule'];
    }

    /**
     * Sets auction_schedule
     *
     * @param \Swagger\Client\Model\ListingsV1AuctionSchedule $auction_schedule auction_schedule
     *
     * @return $this
     */
    public function setAuctionSchedule($auction_schedule)
    {
        $this->container['auction_schedule'] = $auction_schedule;

        return $this;
    }

    /**
     * Gets auctioned_price
     *
     * @return int
     */
    public function getAuctionedPrice()
    {
        return $this->container['auctioned_price'];
    }

    /**
     * Sets auctioned_price
     *
     * @param int $auctioned_price The auctioned price entered by the Advertiser.  This price will only be visible if allowed by the Advertiser  and the listing as been auctioned
     *
     * @return $this
     */
    public function setAuctionedPrice($auctioned_price)
    {
        $this->container['auctioned_price'] = $auctioned_price;

        return $this;
    }

    /**
     * Gets auctioned_date
     *
     * @return \DateTime
     */
    public function getAuctionedDate()
    {
        return $this->container['auctioned_date'];
    }

    /**
     * Sets auctioned_date
     *
     * @param \DateTime $auctioned_date The listing's last auctioned date and time specified by the Advertiser.  This will only be visible if the listing has been auctioned.  DateTime is in a local timezone.
     *
     * @return $this
     */
    public function setAuctionedDate($auctioned_date)
    {
        $this->container['auctioned_date'] = $auctioned_date;

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
