<?php
/**
 * DomainSearchServiceV2ModelDomainSearchContractsV2Project
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
 * DomainSearchServiceV2ModelDomainSearchContractsV2Project Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DomainSearchServiceV2ModelDomainSearchContractsV2Project implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain.SearchService.v2.Model.DomainSearchContractsV2Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'promo_level' => 'string',
        'state' => 'string',
        'id' => 'int',
        'name' => 'string',
        'banner_url' => 'string',
        'preferred_color_hex' => 'string',
        'logo_url' => 'string',
        'labels' => 'string[]',
        'displayable_address' => 'string',
        'suburb' => 'string',
        'suburb_id' => 'int',
        'features' => 'string[]',
        'media' => '\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[]',
        'project_slug' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'promo_level' => null,
        'state' => null,
        'id' => 'int32',
        'name' => null,
        'banner_url' => null,
        'preferred_color_hex' => null,
        'logo_url' => null,
        'labels' => null,
        'displayable_address' => null,
        'suburb' => null,
        'suburb_id' => 'int32',
        'features' => null,
        'media' => null,
        'project_slug' => null
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
        'promo_level' => 'promoLevel',
        'state' => 'state',
        'id' => 'id',
        'name' => 'name',
        'banner_url' => 'bannerUrl',
        'preferred_color_hex' => 'preferredColorHex',
        'logo_url' => 'logoUrl',
        'labels' => 'labels',
        'displayable_address' => 'displayableAddress',
        'suburb' => 'suburb',
        'suburb_id' => 'suburbId',
        'features' => 'features',
        'media' => 'media',
        'project_slug' => 'projectSlug'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'promo_level' => 'setPromoLevel',
        'state' => 'setState',
        'id' => 'setId',
        'name' => 'setName',
        'banner_url' => 'setBannerUrl',
        'preferred_color_hex' => 'setPreferredColorHex',
        'logo_url' => 'setLogoUrl',
        'labels' => 'setLabels',
        'displayable_address' => 'setDisplayableAddress',
        'suburb' => 'setSuburb',
        'suburb_id' => 'setSuburbId',
        'features' => 'setFeatures',
        'media' => 'setMedia',
        'project_slug' => 'setProjectSlug'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'promo_level' => 'getPromoLevel',
        'state' => 'getState',
        'id' => 'getId',
        'name' => 'getName',
        'banner_url' => 'getBannerUrl',
        'preferred_color_hex' => 'getPreferredColorHex',
        'logo_url' => 'getLogoUrl',
        'labels' => 'getLabels',
        'displayable_address' => 'getDisplayableAddress',
        'suburb' => 'getSuburb',
        'suburb_id' => 'getSuburbId',
        'features' => 'getFeatures',
        'media' => 'getMedia',
        'project_slug' => 'getProjectSlug'
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

    const PROMO_LEVEL_STANDARD = 'Standard';
    const PROMO_LEVEL_PREMIUM = 'Premium';
    const STATE_ACT = 'ACT';
    const STATE_NSW = 'NSW';
    const STATE_QLD = 'QLD';
    const STATE_VIC = 'VIC';
    const STATE_SA = 'SA';
    const STATE_WA = 'WA';
    const STATE_NT = 'NT';
    const STATE_TAS = 'TAS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPromoLevelAllowableValues()
    {
        return [
            self::PROMO_LEVEL_STANDARD,
            self::PROMO_LEVEL_PREMIUM,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACT,
            self::STATE_NSW,
            self::STATE_QLD,
            self::STATE_VIC,
            self::STATE_SA,
            self::STATE_WA,
            self::STATE_NT,
            self::STATE_TAS,
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
        $this->container['promo_level'] = isset($data['promo_level']) ? $data['promo_level'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['banner_url'] = isset($data['banner_url']) ? $data['banner_url'] : null;
        $this->container['preferred_color_hex'] = isset($data['preferred_color_hex']) ? $data['preferred_color_hex'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['displayable_address'] = isset($data['displayable_address']) ? $data['displayable_address'] : null;
        $this->container['suburb'] = isset($data['suburb']) ? $data['suburb'] : null;
        $this->container['suburb_id'] = isset($data['suburb_id']) ? $data['suburb_id'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['project_slug'] = isset($data['project_slug']) ? $data['project_slug'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPromoLevelAllowableValues();
        if (!is_null($this->container['promo_level']) && !in_array($this->container['promo_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'promo_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets promo_level
     *
     * @return string
     */
    public function getPromoLevel()
    {
        return $this->container['promo_level'];
    }

    /**
     * Sets promo_level
     *
     * @param string $promo_level promo_level
     *
     * @return $this
     */
    public function setPromoLevel($promo_level)
    {
        $allowedValues = $this->getPromoLevelAllowableValues();
        if (!is_null($promo_level) && !in_array($promo_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'promo_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['promo_level'] = $promo_level;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets banner_url
     *
     * @return string
     */
    public function getBannerUrl()
    {
        return $this->container['banner_url'];
    }

    /**
     * Sets banner_url
     *
     * @param string $banner_url banner_url
     *
     * @return $this
     */
    public function setBannerUrl($banner_url)
    {
        $this->container['banner_url'] = $banner_url;

        return $this;
    }

    /**
     * Gets preferred_color_hex
     *
     * @return string
     */
    public function getPreferredColorHex()
    {
        return $this->container['preferred_color_hex'];
    }

    /**
     * Sets preferred_color_hex
     *
     * @param string $preferred_color_hex preferred_color_hex
     *
     * @return $this
     */
    public function setPreferredColorHex($preferred_color_hex)
    {
        $this->container['preferred_color_hex'] = $preferred_color_hex;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string $logo_url logo_url
     *
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets displayable_address
     *
     * @return string
     */
    public function getDisplayableAddress()
    {
        return $this->container['displayable_address'];
    }

    /**
     * Sets displayable_address
     *
     * @param string $displayable_address displayable_address
     *
     * @return $this
     */
    public function setDisplayableAddress($displayable_address)
    {
        $this->container['displayable_address'] = $displayable_address;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string $suburb suburb
     *
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets suburb_id
     *
     * @return int
     */
    public function getSuburbId()
    {
        return $this->container['suburb_id'];
    }

    /**
     * Sets suburb_id
     *
     * @param int $suburb_id suburb_id
     *
     * @return $this
     */
    public function setSuburbId($suburb_id)
    {
        $this->container['suburb_id'] = $suburb_id;

        return $this;
    }

    /**
     * Gets features
     *
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[] $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2Media[] $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets project_slug
     *
     * @return string
     */
    public function getProjectSlug()
    {
        return $this->container['project_slug'];
    }

    /**
     * Sets project_slug
     *
     * @param string $project_slug project_slug
     *
     * @return $this
     */
    public function setProjectSlug($project_slug)
    {
        $this->container['project_slug'] = $project_slug;

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
