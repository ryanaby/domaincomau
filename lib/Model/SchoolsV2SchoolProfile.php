<?php
/**
 * SchoolsV2SchoolProfile
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
 * SchoolsV2SchoolProfile Class Doc Comment
 *
 * @category Class
 * @description SchoolProfile
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SchoolsV2SchoolProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Schools.V2.SchoolProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'year_range' => 'string',
        'icsea' => 'int',
        'bottom_sea_quarter' => 'int',
        'lower_middle_sea_quarter' => 'int',
        'upper_middle_sea_quarter' => 'int',
        'top_sea_quarter' => 'int',
        'total_enrolments' => 'int',
        'girls_enrolments' => 'int',
        'boys_enrolments' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'year_range' => null,
        'icsea' => 'int32',
        'bottom_sea_quarter' => 'int32',
        'lower_middle_sea_quarter' => 'int32',
        'upper_middle_sea_quarter' => 'int32',
        'top_sea_quarter' => 'int32',
        'total_enrolments' => 'int32',
        'girls_enrolments' => 'int32',
        'boys_enrolments' => 'int32'
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
        'url' => 'url',
        'year_range' => 'yearRange',
        'icsea' => 'icsea',
        'bottom_sea_quarter' => 'bottomSeaQuarter',
        'lower_middle_sea_quarter' => 'lowerMiddleSeaQuarter',
        'upper_middle_sea_quarter' => 'upperMiddleSeaQuarter',
        'top_sea_quarter' => 'topSeaQuarter',
        'total_enrolments' => 'totalEnrolments',
        'girls_enrolments' => 'girlsEnrolments',
        'boys_enrolments' => 'boysEnrolments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'year_range' => 'setYearRange',
        'icsea' => 'setIcsea',
        'bottom_sea_quarter' => 'setBottomSeaQuarter',
        'lower_middle_sea_quarter' => 'setLowerMiddleSeaQuarter',
        'upper_middle_sea_quarter' => 'setUpperMiddleSeaQuarter',
        'top_sea_quarter' => 'setTopSeaQuarter',
        'total_enrolments' => 'setTotalEnrolments',
        'girls_enrolments' => 'setGirlsEnrolments',
        'boys_enrolments' => 'setBoysEnrolments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'year_range' => 'getYearRange',
        'icsea' => 'getIcsea',
        'bottom_sea_quarter' => 'getBottomSeaQuarter',
        'lower_middle_sea_quarter' => 'getLowerMiddleSeaQuarter',
        'upper_middle_sea_quarter' => 'getUpperMiddleSeaQuarter',
        'top_sea_quarter' => 'getTopSeaQuarter',
        'total_enrolments' => 'getTotalEnrolments',
        'girls_enrolments' => 'getGirlsEnrolments',
        'boys_enrolments' => 'getBoysEnrolments'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['year_range'] = isset($data['year_range']) ? $data['year_range'] : null;
        $this->container['icsea'] = isset($data['icsea']) ? $data['icsea'] : null;
        $this->container['bottom_sea_quarter'] = isset($data['bottom_sea_quarter']) ? $data['bottom_sea_quarter'] : null;
        $this->container['lower_middle_sea_quarter'] = isset($data['lower_middle_sea_quarter']) ? $data['lower_middle_sea_quarter'] : null;
        $this->container['upper_middle_sea_quarter'] = isset($data['upper_middle_sea_quarter']) ? $data['upper_middle_sea_quarter'] : null;
        $this->container['top_sea_quarter'] = isset($data['top_sea_quarter']) ? $data['top_sea_quarter'] : null;
        $this->container['total_enrolments'] = isset($data['total_enrolments']) ? $data['total_enrolments'] : null;
        $this->container['girls_enrolments'] = isset($data['girls_enrolments']) ? $data['girls_enrolments'] : null;
        $this->container['boys_enrolments'] = isset($data['boys_enrolments']) ? $data['boys_enrolments'] : null;
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Website for the school
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets year_range
     *
     * @return string
     */
    public function getYearRange()
    {
        return $this->container['year_range'];
    }

    /**
     * Sets year_range
     *
     * @param string $year_range The range of year levels offered by the school.
     *
     * @return $this
     */
    public function setYearRange($year_range)
    {
        $this->container['year_range'] = $year_range;

        return $this;
    }

    /**
     * Gets icsea
     *
     * @return int
     */
    public function getIcsea()
    {
        return $this->container['icsea'];
    }

    /**
     * Sets icsea
     *
     * @param int $icsea The Index of Community Socio-Educational Advantage score for the school. This score is derived from a number of variables including parental school and non-school education and occupation, the school’s geographical location and proportion of Indigenous students.
     *
     * @return $this
     */
    public function setIcsea($icsea)
    {
        $this->container['icsea'] = $icsea;

        return $this;
    }

    /**
     * Gets bottom_sea_quarter
     *
     * @return int
     */
    public function getBottomSeaQuarter()
    {
        return $this->container['bottom_sea_quarter'];
    }

    /**
     * Sets bottom_sea_quarter
     *
     * @param int $bottom_sea_quarter The percentage of students positioned in the lowest socio-educational advantage quarter.
     *
     * @return $this
     */
    public function setBottomSeaQuarter($bottom_sea_quarter)
    {
        $this->container['bottom_sea_quarter'] = $bottom_sea_quarter;

        return $this;
    }

    /**
     * Gets lower_middle_sea_quarter
     *
     * @return int
     */
    public function getLowerMiddleSeaQuarter()
    {
        return $this->container['lower_middle_sea_quarter'];
    }

    /**
     * Sets lower_middle_sea_quarter
     *
     * @param int $lower_middle_sea_quarter The percentage of students positioned in the lower middle socio-educational advantage quarter.
     *
     * @return $this
     */
    public function setLowerMiddleSeaQuarter($lower_middle_sea_quarter)
    {
        $this->container['lower_middle_sea_quarter'] = $lower_middle_sea_quarter;

        return $this;
    }

    /**
     * Gets upper_middle_sea_quarter
     *
     * @return int
     */
    public function getUpperMiddleSeaQuarter()
    {
        return $this->container['upper_middle_sea_quarter'];
    }

    /**
     * Sets upper_middle_sea_quarter
     *
     * @param int $upper_middle_sea_quarter The percentage of students positioned in the higher middle socio-educational advantage quarter.
     *
     * @return $this
     */
    public function setUpperMiddleSeaQuarter($upper_middle_sea_quarter)
    {
        $this->container['upper_middle_sea_quarter'] = $upper_middle_sea_quarter;

        return $this;
    }

    /**
     * Gets top_sea_quarter
     *
     * @return int
     */
    public function getTopSeaQuarter()
    {
        return $this->container['top_sea_quarter'];
    }

    /**
     * Sets top_sea_quarter
     *
     * @param int $top_sea_quarter The percentage of students positioned in the highest socio-educational advantage quarter.
     *
     * @return $this
     */
    public function setTopSeaQuarter($top_sea_quarter)
    {
        $this->container['top_sea_quarter'] = $top_sea_quarter;

        return $this;
    }

    /**
     * Gets total_enrolments
     *
     * @return int
     */
    public function getTotalEnrolments()
    {
        return $this->container['total_enrolments'];
    }

    /**
     * Sets total_enrolments
     *
     * @param int $total_enrolments The total number of students, including both full-time and part-time students, who are enrolled at the school in the calendar year specified.
     *
     * @return $this
     */
    public function setTotalEnrolments($total_enrolments)
    {
        $this->container['total_enrolments'] = $total_enrolments;

        return $this;
    }

    /**
     * Gets girls_enrolments
     *
     * @return int
     */
    public function getGirlsEnrolments()
    {
        return $this->container['girls_enrolments'];
    }

    /**
     * Sets girls_enrolments
     *
     * @param int $girls_enrolments The total number of female students, including both full-time and part-time students, who are enrolled at the school in the calendar year specified.
     *
     * @return $this
     */
    public function setGirlsEnrolments($girls_enrolments)
    {
        $this->container['girls_enrolments'] = $girls_enrolments;

        return $this;
    }

    /**
     * Gets boys_enrolments
     *
     * @return int
     */
    public function getBoysEnrolments()
    {
        return $this->container['boys_enrolments'];
    }

    /**
     * Sets boys_enrolments
     *
     * @param int $boys_enrolments The total number of male students, including full-time and part-time students, who are enrolled at the school in the calendar year specified.
     *
     * @return $this
     */
    public function setBoysEnrolments($boys_enrolments)
    {
        $this->container['boys_enrolments'] = $boys_enrolments;

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
