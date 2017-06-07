<?php
/**
 * GetStatusOk
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.4.9.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\Models;

use \ArrayAccess;

/**
 * GetStatusOk Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetStatusOk implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_status_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'players' => 'int',
        'serverVersion' => 'string',
        'startTime' => '\DateTime',
        'vip' => 'bool'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'players' => 'players',
        'serverVersion' => 'server_version',
        'startTime' => 'start_time',
        'vip' => 'vip'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'players' => 'setPlayers',
        'serverVersion' => 'setServerVersion',
        'startTime' => 'setStartTime',
        'vip' => 'setVip'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'players' => 'getPlayers',
        'serverVersion' => 'getServerVersion',
        'startTime' => 'getStartTime',
        'vip' => 'getVip'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['players'] = isset($data['players']) ? $data['players'] : null;
        $this->container['serverVersion'] = isset($data['serverVersion']) ? $data['serverVersion'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['players'] === null) {
            $invalid_properties[] = "'players' can't be null";
        }
        if ($this->container['serverVersion'] === null) {
            $invalid_properties[] = "'serverVersion' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalid_properties[] = "'startTime' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['players'] === null) {
            return false;
        }
        if ($this->container['serverVersion'] === null) {
            return false;
        }
        if ($this->container['startTime'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets players
     * @return int
     */
    public function getPlayers()
    {
        return $this->container['players'];
    }

    /**
     * Sets players
     * @param int $players Current online player count
     * @return $this
     */
    public function setPlayers($players)
    {
        $this->container['players'] = $players;

        return $this;
    }

    /**
     * Gets serverVersion
     * @return string
     */
    public function getServerVersion()
    {
        return $this->container['serverVersion'];
    }

    /**
     * Sets serverVersion
     * @param string $serverVersion Running version as string
     * @return $this
     */
    public function setServerVersion($serverVersion)
    {
        $this->container['serverVersion'] = $serverVersion;

        return $this;
    }

    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime Server start timestamp
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets vip
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     * @param bool $vip If the server is in VIP mode
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\nullx27\ESI\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\nullx27\ESI\ObjectSerializer::sanitizeForSerialization($this));
    }
}

