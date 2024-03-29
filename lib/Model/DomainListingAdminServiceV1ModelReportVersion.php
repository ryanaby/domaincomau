<?php
/**
 * DomainListingAdminServiceV1ModelReportVersion
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
 * DomainListingAdminServiceV1ModelReportVersion Class Doc Comment
 *
 * @category Class
 * @description Report Version
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainListingAdminServiceV1ModelReportVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.ListingAdminService.v1.Model.ReportVersion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'operations' => 'string[]',
        'version_id' => 'string',
        'processed_date' => '\DateTime',
        'data_url' => 'string',
        'process_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'operations' => null,
        'version_id' => null,
        'processed_date' => 'date-time',
        'data_url' => null,
        'process_count' => 'int32'
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
        'operations' => 'operations',
        'version_id' => 'versionId',
        'processed_date' => 'processedDate',
        'data_url' => 'dataUrl',
        'process_count' => 'processCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operations' => 'setOperations',
        'version_id' => 'setVersionId',
        'processed_date' => 'setProcessedDate',
        'data_url' => 'setDataUrl',
        'process_count' => 'setProcessCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operations' => 'getOperations',
        'version_id' => 'getVersionId',
        'processed_date' => 'getProcessedDate',
        'data_url' => 'getDataUrl',
        'process_count' => 'getProcessCount'
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
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['version_id'] = isset($data['version_id']) ? $data['version_id'] : null;
        $this->container['processed_date'] = isset($data['processed_date']) ? $data['processed_date'] : null;
        $this->container['data_url'] = isset($data['data_url']) ? $data['data_url'] : null;
        $this->container['process_count'] = isset($data['process_count']) ? $data['process_count'] : null;
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
     * Gets operations
     *
     * @return string[]
     */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
     * Sets operations
     *
     * @param string[] $operations Operations performed on a completed version ['none', 'dataReceived', 'processStarted', 'priceValidated', 'geoCoded', 'pdfsProcessed', 'primaryImagesProcessed', 'allImagesProcessed', 'listingDataSaved', 'listingDeleted', 'reportEmailSent', 'offMarketProcessed', 'listingIndexed', 'propertyTypesProcessed', 'contactsProcessed', 'messagesPublished', 'listingSentLive', 'listingUpdated', 'listingRestored', 'allImageSizesProcessed', 'patchProcessed', 'externalSaleProcessed', 'soiProcessed', 'duplicateDetection', 'listingMerged', 'supplementaryProcessed', 'listingHeldInMigration', 'linkedProjectsProcessed', 'linkedListingsProcessed', 'allMediaProcessed', 'projectProcessed', 'projectDeleted'].
     *
     * @return $this
     */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string $version_id Version Id
     *
     * @return $this
     */
    public function setVersionId($version_id)
    {
        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets processed_date
     *
     * @return \DateTime
     */
    public function getProcessedDate()
    {
        return $this->container['processed_date'];
    }

    /**
     * Sets processed_date
     *
     * @param \DateTime $processed_date Date this version of data been processed
     *
     * @return $this
     */
    public function setProcessedDate($processed_date)
    {
        $this->container['processed_date'] = $processed_date;

        return $this;
    }

    /**
     * Gets data_url
     *
     * @return string
     */
    public function getDataUrl()
    {
        return $this->container['data_url'];
    }

    /**
     * Sets data_url
     *
     * @param string $data_url Url to access s3 file
     *
     * @return $this
     */
    public function setDataUrl($data_url)
    {
        $this->container['data_url'] = $data_url;

        return $this;
    }

    /**
     * Gets process_count
     *
     * @return int
     */
    public function getProcessCount()
    {
        return $this->container['process_count'];
    }

    /**
     * Sets process_count
     *
     * @param int $process_count Retry count
     *
     * @return $this
     */
    public function setProcessCount($process_count)
    {
        $this->container['process_count'] = $process_count;

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
