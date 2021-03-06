<?php
/**
 * GetCharactersCharacterIdMailMailIdRecipient
 *
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
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

namespace nullx27\ESI\nullx27\ESI\Models;

use \ArrayAccess;
use \nullx27\ESI\ObjectSerializer;

/**
 * GetCharactersCharacterIdMailMailIdRecipient Class Doc Comment
 *
 * @category Class
 * @description recipient object
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdMailMailIdRecipient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_mail_mail_id_recipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipientType' => 'string',
        'recipientId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recipientType' => null,
        'recipientId' => 'int32'
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
        'recipientType' => 'recipient_type',
        'recipientId' => 'recipient_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipientType' => 'setRecipientType',
        'recipientId' => 'setRecipientId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipientType' => 'getRecipientType',
        'recipientId' => 'getRecipientId'
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

    const RECIPIENT_TYPE_ALLIANCE = 'alliance';
    const RECIPIENT_TYPE_CHARACTER = 'character';
    const RECIPIENT_TYPE_CORPORATION = 'corporation';
    const RECIPIENT_TYPE_MAILING_LIST = 'mailing_list';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_ALLIANCE,
            self::RECIPIENT_TYPE_CHARACTER,
            self::RECIPIENT_TYPE_CORPORATION,
            self::RECIPIENT_TYPE_MAILING_LIST,
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
        $this->container['recipientType'] = isset($data['recipientType']) ? $data['recipientType'] : null;
        $this->container['recipientId'] = isset($data['recipientId']) ? $data['recipientId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipientType'] === null) {
            $invalidProperties[] = "'recipientType' can't be null";
        }
        $allowedValues = $this->getRecipientTypeAllowableValues();
        if (!in_array($this->container['recipientType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recipientType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['recipientId'] === null) {
            $invalidProperties[] = "'recipientId' can't be null";
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

        if ($this->container['recipientType'] === null) {
            return false;
        }
        $allowedValues = $this->getRecipientTypeAllowableValues();
        if (!in_array($this->container['recipientType'], $allowedValues)) {
            return false;
        }
        if ($this->container['recipientId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets recipientType
     *
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipientType'];
    }

    /**
     * Sets recipientType
     *
     * @param string $recipientType recipient_type string
     *
     * @return $this
     */
    public function setRecipientType($recipientType)
    {
        $allowedValues = $this->getRecipientTypeAllowableValues();
        if (!in_array($recipientType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recipientType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recipientType'] = $recipientType;

        return $this;
    }

    /**
     * Gets recipientId
     *
     * @return int
     */
    public function getRecipientId()
    {
        return $this->container['recipientId'];
    }

    /**
     * Sets recipientId
     *
     * @param int $recipientId recipient_id integer
     *
     * @return $this
     */
    public function setRecipientId($recipientId)
    {
        $this->container['recipientId'] = $recipientId;

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


