<?php
/**
 * GetMarketsRegionIdHistory200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.7.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27ESI\ObjectSerializer;

/**
 * GetMarketsRegionIdHistory200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetMarketsRegionIdHistory200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_markets_region_id_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date' => '\DateTime',
        'orderCount' => 'int',
        'volume' => 'int',
        'highest' => 'double',
        'average' => 'double',
        'lowest' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date' => 'date',
        'orderCount' => 'int64',
        'volume' => 'int64',
        'highest' => 'double',
        'average' => 'double',
        'lowest' => 'double'
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
        'date' => 'date',
        'orderCount' => 'order_count',
        'volume' => 'volume',
        'highest' => 'highest',
        'average' => 'average',
        'lowest' => 'lowest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'orderCount' => 'setOrderCount',
        'volume' => 'setVolume',
        'highest' => 'setHighest',
        'average' => 'setAverage',
        'lowest' => 'setLowest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'orderCount' => 'getOrderCount',
        'volume' => 'getVolume',
        'highest' => 'getHighest',
        'average' => 'getAverage',
        'lowest' => 'getLowest'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['orderCount'] = isset($data['orderCount']) ? $data['orderCount'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['highest'] = isset($data['highest']) ? $data['highest'] : null;
        $this->container['average'] = isset($data['average']) ? $data['average'] : null;
        $this->container['lowest'] = isset($data['lowest']) ? $data['lowest'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['orderCount'] === null) {
            $invalidProperties[] = "'orderCount' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['highest'] === null) {
            $invalidProperties[] = "'highest' can't be null";
        }
        if ($this->container['average'] === null) {
            $invalidProperties[] = "'average' can't be null";
        }
        if ($this->container['lowest'] === null) {
            $invalidProperties[] = "'lowest' can't be null";
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

        if ($this->container['date'] === null) {
            return false;
        }
        if ($this->container['orderCount'] === null) {
            return false;
        }
        if ($this->container['volume'] === null) {
            return false;
        }
        if ($this->container['highest'] === null) {
            return false;
        }
        if ($this->container['average'] === null) {
            return false;
        }
        if ($this->container['lowest'] === null) {
            return false;
        }
        return true;
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
     * @param \DateTime $date The date of this historical statistic entry
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets orderCount
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['orderCount'];
    }

    /**
     * Sets orderCount
     *
     * @param int $orderCount Total number of orders happened that day
     *
     * @return $this
     */
    public function setOrderCount($orderCount)
    {
        $this->container['orderCount'] = $orderCount;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param int $volume Total
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets highest
     *
     * @return double
     */
    public function getHighest()
    {
        return $this->container['highest'];
    }

    /**
     * Sets highest
     *
     * @param double $highest highest number
     *
     * @return $this
     */
    public function setHighest($highest)
    {
        $this->container['highest'] = $highest;

        return $this;
    }

    /**
     * Gets average
     *
     * @return double
     */
    public function getAverage()
    {
        return $this->container['average'];
    }

    /**
     * Sets average
     *
     * @param double $average average number
     *
     * @return $this
     */
    public function setAverage($average)
    {
        $this->container['average'] = $average;

        return $this;
    }

    /**
     * Gets lowest
     *
     * @return double
     */
    public function getLowest()
    {
        return $this->container['lowest'];
    }

    /**
     * Sets lowest
     *
     * @param double $lowest lowest number
     *
     * @return $this
     */
    public function setLowest($lowest)
    {
        $this->container['lowest'] = $lowest;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


