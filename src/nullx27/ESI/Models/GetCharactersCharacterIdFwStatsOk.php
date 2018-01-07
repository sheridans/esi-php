<?php
/**
 * GetCharactersCharacterIdFwStatsOk
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
 * GetCharactersCharacterIdFwStatsOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdFwStatsOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_fw_stats_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'factionId' => 'int',
        'enlistedOn' => '\DateTime',
        'currentRank' => 'int',
        'highestRank' => 'int',
        'kills' => '\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsKills',
        'victoryPoints' => '\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsVictoryPoints'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'factionId' => 'int32',
        'enlistedOn' => 'date-time',
        'currentRank' => 'int32',
        'highestRank' => 'int32',
        'kills' => null,
        'victoryPoints' => null
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
        'factionId' => 'faction_id',
        'enlistedOn' => 'enlisted_on',
        'currentRank' => 'current_rank',
        'highestRank' => 'highest_rank',
        'kills' => 'kills',
        'victoryPoints' => 'victory_points'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'factionId' => 'setFactionId',
        'enlistedOn' => 'setEnlistedOn',
        'currentRank' => 'setCurrentRank',
        'highestRank' => 'setHighestRank',
        'kills' => 'setKills',
        'victoryPoints' => 'setVictoryPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'factionId' => 'getFactionId',
        'enlistedOn' => 'getEnlistedOn',
        'currentRank' => 'getCurrentRank',
        'highestRank' => 'getHighestRank',
        'kills' => 'getKills',
        'victoryPoints' => 'getVictoryPoints'
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
        $this->container['factionId'] = isset($data['factionId']) ? $data['factionId'] : null;
        $this->container['enlistedOn'] = isset($data['enlistedOn']) ? $data['enlistedOn'] : null;
        $this->container['currentRank'] = isset($data['currentRank']) ? $data['currentRank'] : null;
        $this->container['highestRank'] = isset($data['highestRank']) ? $data['highestRank'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['victoryPoints'] = isset($data['victoryPoints']) ? $data['victoryPoints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['currentRank']) && ($this->container['currentRank'] > 9)) {
            $invalidProperties[] = "invalid value for 'currentRank', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['currentRank']) && ($this->container['currentRank'] < 0)) {
            $invalidProperties[] = "invalid value for 'currentRank', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['highestRank']) && ($this->container['highestRank'] > 9)) {
            $invalidProperties[] = "invalid value for 'highestRank', must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['highestRank']) && ($this->container['highestRank'] < 0)) {
            $invalidProperties[] = "invalid value for 'highestRank', must be bigger than or equal to 0.";
        }

        if ($this->container['kills'] === null) {
            $invalidProperties[] = "'kills' can't be null";
        }
        if ($this->container['victoryPoints'] === null) {
            $invalidProperties[] = "'victoryPoints' can't be null";
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

        if ($this->container['currentRank'] > 9) {
            return false;
        }
        if ($this->container['currentRank'] < 0) {
            return false;
        }
        if ($this->container['highestRank'] > 9) {
            return false;
        }
        if ($this->container['highestRank'] < 0) {
            return false;
        }
        if ($this->container['kills'] === null) {
            return false;
        }
        if ($this->container['victoryPoints'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets factionId
     *
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['factionId'];
    }

    /**
     * Sets factionId
     *
     * @param int $factionId The faction the given character is enlisted to fight for. Will not be included if character is not enlisted in faction warfare
     *
     * @return $this
     */
    public function setFactionId($factionId)
    {
        $this->container['factionId'] = $factionId;

        return $this;
    }

    /**
     * Gets enlistedOn
     *
     * @return \DateTime
     */
    public function getEnlistedOn()
    {
        return $this->container['enlistedOn'];
    }

    /**
     * Sets enlistedOn
     *
     * @param \DateTime $enlistedOn The enlistment date of the given character into faction warfare. Will not be included if character is not enlisted in faction warfare
     *
     * @return $this
     */
    public function setEnlistedOn($enlistedOn)
    {
        $this->container['enlistedOn'] = $enlistedOn;

        return $this;
    }

    /**
     * Gets currentRank
     *
     * @return int
     */
    public function getCurrentRank()
    {
        return $this->container['currentRank'];
    }

    /**
     * Sets currentRank
     *
     * @param int $currentRank The given character's current faction rank
     *
     * @return $this
     */
    public function setCurrentRank($currentRank)
    {

        if (!is_null($currentRank) && ($currentRank > 9)) {
            throw new \InvalidArgumentException('invalid value for $currentRank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.');
        }
        if (!is_null($currentRank) && ($currentRank < 0)) {
            throw new \InvalidArgumentException('invalid value for $currentRank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.');
        }

        $this->container['currentRank'] = $currentRank;

        return $this;
    }

    /**
     * Gets highestRank
     *
     * @return int
     */
    public function getHighestRank()
    {
        return $this->container['highestRank'];
    }

    /**
     * Sets highestRank
     *
     * @param int $highestRank The given character's highest faction rank achieved
     *
     * @return $this
     */
    public function setHighestRank($highestRank)
    {

        if (!is_null($highestRank) && ($highestRank > 9)) {
            throw new \InvalidArgumentException('invalid value for $highestRank when calling GetCharactersCharacterIdFwStatsOk., must be smaller than or equal to 9.');
        }
        if (!is_null($highestRank) && ($highestRank < 0)) {
            throw new \InvalidArgumentException('invalid value for $highestRank when calling GetCharactersCharacterIdFwStatsOk., must be bigger than or equal to 0.');
        }

        $this->container['highestRank'] = $highestRank;

        return $this;
    }

    /**
     * Gets kills
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsKills
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsKills $kills kills
     *
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets victoryPoints
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsVictoryPoints
     */
    public function getVictoryPoints()
    {
        return $this->container['victoryPoints'];
    }

    /**
     * Sets victoryPoints
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdFwStatsVictoryPoints $victoryPoints victoryPoints
     *
     * @return $this
     */
    public function setVictoryPoints($victoryPoints)
    {
        $this->container['victoryPoints'] = $victoryPoints;

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


