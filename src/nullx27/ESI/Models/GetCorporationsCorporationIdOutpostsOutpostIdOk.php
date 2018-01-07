<?php
/**
 * GetCorporationsCorporationIdOutpostsOutpostIdOk
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
 * GetCorporationsCorporationIdOutpostsOutpostIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdOutpostsOutpostIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_outposts_outpost_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ownerId' => 'int',
        'systemId' => 'int',
        'dockingCostPerShipVolume' => 'float',
        'officeRentalCost' => 'int',
        'typeId' => 'int',
        'reprocessingEfficiency' => 'float',
        'reprocessingStationTake' => 'float',
        'standingOwnerId' => 'int',
        'coordinates' => '\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates',
        'services' => '\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdService[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ownerId' => 'int32',
        'systemId' => 'int32',
        'dockingCostPerShipVolume' => 'float',
        'officeRentalCost' => 'int64',
        'typeId' => 'int32',
        'reprocessingEfficiency' => 'float',
        'reprocessingStationTake' => 'float',
        'standingOwnerId' => 'int32',
        'coordinates' => null,
        'services' => null
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
        'ownerId' => 'owner_id',
        'systemId' => 'system_id',
        'dockingCostPerShipVolume' => 'docking_cost_per_ship_volume',
        'officeRentalCost' => 'office_rental_cost',
        'typeId' => 'type_id',
        'reprocessingEfficiency' => 'reprocessing_efficiency',
        'reprocessingStationTake' => 'reprocessing_station_take',
        'standingOwnerId' => 'standing_owner_id',
        'coordinates' => 'coordinates',
        'services' => 'services'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ownerId' => 'setOwnerId',
        'systemId' => 'setSystemId',
        'dockingCostPerShipVolume' => 'setDockingCostPerShipVolume',
        'officeRentalCost' => 'setOfficeRentalCost',
        'typeId' => 'setTypeId',
        'reprocessingEfficiency' => 'setReprocessingEfficiency',
        'reprocessingStationTake' => 'setReprocessingStationTake',
        'standingOwnerId' => 'setStandingOwnerId',
        'coordinates' => 'setCoordinates',
        'services' => 'setServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ownerId' => 'getOwnerId',
        'systemId' => 'getSystemId',
        'dockingCostPerShipVolume' => 'getDockingCostPerShipVolume',
        'officeRentalCost' => 'getOfficeRentalCost',
        'typeId' => 'getTypeId',
        'reprocessingEfficiency' => 'getReprocessingEfficiency',
        'reprocessingStationTake' => 'getReprocessingStationTake',
        'standingOwnerId' => 'getStandingOwnerId',
        'coordinates' => 'getCoordinates',
        'services' => 'getServices'
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
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['systemId'] = isset($data['systemId']) ? $data['systemId'] : null;
        $this->container['dockingCostPerShipVolume'] = isset($data['dockingCostPerShipVolume']) ? $data['dockingCostPerShipVolume'] : null;
        $this->container['officeRentalCost'] = isset($data['officeRentalCost']) ? $data['officeRentalCost'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['reprocessingEfficiency'] = isset($data['reprocessingEfficiency']) ? $data['reprocessingEfficiency'] : null;
        $this->container['reprocessingStationTake'] = isset($data['reprocessingStationTake']) ? $data['reprocessingStationTake'] : null;
        $this->container['standingOwnerId'] = isset($data['standingOwnerId']) ? $data['standingOwnerId'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ownerId'] === null) {
            $invalidProperties[] = "'ownerId' can't be null";
        }
        if ($this->container['systemId'] === null) {
            $invalidProperties[] = "'systemId' can't be null";
        }
        if ($this->container['dockingCostPerShipVolume'] === null) {
            $invalidProperties[] = "'dockingCostPerShipVolume' can't be null";
        }
        if ($this->container['officeRentalCost'] === null) {
            $invalidProperties[] = "'officeRentalCost' can't be null";
        }
        if ($this->container['typeId'] === null) {
            $invalidProperties[] = "'typeId' can't be null";
        }
        if ($this->container['reprocessingEfficiency'] === null) {
            $invalidProperties[] = "'reprocessingEfficiency' can't be null";
        }
        if ($this->container['reprocessingStationTake'] === null) {
            $invalidProperties[] = "'reprocessingStationTake' can't be null";
        }
        if ($this->container['standingOwnerId'] === null) {
            $invalidProperties[] = "'standingOwnerId' can't be null";
        }
        if ($this->container['coordinates'] === null) {
            $invalidProperties[] = "'coordinates' can't be null";
        }
        if ($this->container['services'] === null) {
            $invalidProperties[] = "'services' can't be null";
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

        if ($this->container['ownerId'] === null) {
            return false;
        }
        if ($this->container['systemId'] === null) {
            return false;
        }
        if ($this->container['dockingCostPerShipVolume'] === null) {
            return false;
        }
        if ($this->container['officeRentalCost'] === null) {
            return false;
        }
        if ($this->container['typeId'] === null) {
            return false;
        }
        if ($this->container['reprocessingEfficiency'] === null) {
            return false;
        }
        if ($this->container['reprocessingStationTake'] === null) {
            return false;
        }
        if ($this->container['standingOwnerId'] === null) {
            return false;
        }
        if ($this->container['coordinates'] === null) {
            return false;
        }
        if ($this->container['services'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ownerId
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
     * Sets ownerId
     *
     * @param int $ownerId The entity that owns the station (e.g. the entity whose logo is on the station services bar)
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;

        return $this;
    }

    /**
     * Gets systemId
     *
     * @return int
     */
    public function getSystemId()
    {
        return $this->container['systemId'];
    }

    /**
     * Sets systemId
     *
     * @param int $systemId The ID of the solar system the outpost rests in
     *
     * @return $this
     */
    public function setSystemId($systemId)
    {
        $this->container['systemId'] = $systemId;

        return $this;
    }

    /**
     * Gets dockingCostPerShipVolume
     *
     * @return float
     */
    public function getDockingCostPerShipVolume()
    {
        return $this->container['dockingCostPerShipVolume'];
    }

    /**
     * Sets dockingCostPerShipVolume
     *
     * @param float $dockingCostPerShipVolume docking_cost_per_ship_volume number
     *
     * @return $this
     */
    public function setDockingCostPerShipVolume($dockingCostPerShipVolume)
    {
        $this->container['dockingCostPerShipVolume'] = $dockingCostPerShipVolume;

        return $this;
    }

    /**
     * Gets officeRentalCost
     *
     * @return int
     */
    public function getOfficeRentalCost()
    {
        return $this->container['officeRentalCost'];
    }

    /**
     * Sets officeRentalCost
     *
     * @param int $officeRentalCost office_rental_cost integer
     *
     * @return $this
     */
    public function setOfficeRentalCost($officeRentalCost)
    {
        $this->container['officeRentalCost'] = $officeRentalCost;

        return $this;
    }

    /**
     * Gets typeId
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     *
     * @param int $typeId The type ID of the given outpost
     *
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets reprocessingEfficiency
     *
     * @return float
     */
    public function getReprocessingEfficiency()
    {
        return $this->container['reprocessingEfficiency'];
    }

    /**
     * Sets reprocessingEfficiency
     *
     * @param float $reprocessingEfficiency reprocessing_efficiency number
     *
     * @return $this
     */
    public function setReprocessingEfficiency($reprocessingEfficiency)
    {
        $this->container['reprocessingEfficiency'] = $reprocessingEfficiency;

        return $this;
    }

    /**
     * Gets reprocessingStationTake
     *
     * @return float
     */
    public function getReprocessingStationTake()
    {
        return $this->container['reprocessingStationTake'];
    }

    /**
     * Sets reprocessingStationTake
     *
     * @param float $reprocessingStationTake reprocessing_station_take number
     *
     * @return $this
     */
    public function setReprocessingStationTake($reprocessingStationTake)
    {
        $this->container['reprocessingStationTake'] = $reprocessingStationTake;

        return $this;
    }

    /**
     * Gets standingOwnerId
     *
     * @return int
     */
    public function getStandingOwnerId()
    {
        return $this->container['standingOwnerId'];
    }

    /**
     * Sets standingOwnerId
     *
     * @param int $standingOwnerId The owner ID that sets the ability for someone to dock based on standings.
     *
     * @return $this
     */
    public function setStandingOwnerId($standingOwnerId)
    {
        $this->container['standingOwnerId'] = $standingOwnerId;

        return $this;
    }

    /**
     * Gets coordinates
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdCoordinates $coordinates coordinates
     *
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdService[] $services A list of services the given outpost provides
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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

