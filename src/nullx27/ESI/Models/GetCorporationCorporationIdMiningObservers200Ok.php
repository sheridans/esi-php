<?php
/**
 * GetCorporationCorporationIdMiningObservers200Ok
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
 * GetCorporationCorporationIdMiningObservers200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationCorporationIdMiningObservers200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporation_corporation_id_mining_observers_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lastUpdated' => '\DateTime',
        'observerId' => 'int',
        'observerType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lastUpdated' => 'date',
        'observerId' => 'int64',
        'observerType' => null
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
        'lastUpdated' => 'last_updated',
        'observerId' => 'observer_id',
        'observerType' => 'observer_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lastUpdated' => 'setLastUpdated',
        'observerId' => 'setObserverId',
        'observerType' => 'setObserverType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lastUpdated' => 'getLastUpdated',
        'observerId' => 'getObserverId',
        'observerType' => 'getObserverType'
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

    const OBSERVER_TYPE_STRUCTURE = 'structure';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObserverTypeAllowableValues()
    {
        return [
            self::OBSERVER_TYPE_STRUCTURE,
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
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
        $this->container['observerId'] = isset($data['observerId']) ? $data['observerId'] : null;
        $this->container['observerType'] = isset($data['observerType']) ? $data['observerType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lastUpdated'] === null) {
            $invalidProperties[] = "'lastUpdated' can't be null";
        }
        if ($this->container['observerId'] === null) {
            $invalidProperties[] = "'observerId' can't be null";
        }
        if ($this->container['observerType'] === null) {
            $invalidProperties[] = "'observerType' can't be null";
        }
        $allowedValues = $this->getObserverTypeAllowableValues();
        if (!in_array($this->container['observerType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'observerType', must be one of '%s'",
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

        if ($this->container['lastUpdated'] === null) {
            return false;
        }
        if ($this->container['observerId'] === null) {
            return false;
        }
        if ($this->container['observerType'] === null) {
            return false;
        }
        $allowedValues = $this->getObserverTypeAllowableValues();
        if (!in_array($this->container['observerType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
     * Sets lastUpdated
     *
     * @param \DateTime $lastUpdated last_updated string
     *
     * @return $this
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;

        return $this;
    }

    /**
     * Gets observerId
     *
     * @return int
     */
    public function getObserverId()
    {
        return $this->container['observerId'];
    }

    /**
     * Sets observerId
     *
     * @param int $observerId The entity that was observing the asteroid field when it was mined.
     *
     * @return $this
     */
    public function setObserverId($observerId)
    {
        $this->container['observerId'] = $observerId;

        return $this;
    }

    /**
     * Gets observerType
     *
     * @return string
     */
    public function getObserverType()
    {
        return $this->container['observerType'];
    }

    /**
     * Sets observerType
     *
     * @param string $observerType The category of the observing entity
     *
     * @return $this
     */
    public function setObserverType($observerType)
    {
        $allowedValues = $this->getObserverTypeAllowableValues();
        if (!in_array($observerType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'observerType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['observerType'] = $observerType;

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


