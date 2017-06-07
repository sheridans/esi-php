<?php
/**
 * GetCharactersCharacterIdIndustryJobs200Ok
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
 * GetCharactersCharacterIdIndustryJobs200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/**
 * @package     nullx27\ESI
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdIndustryJobs200Ok implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_industry_jobs_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityId' => 'int',
        'blueprintId' => 'int',
        'blueprintLocationId' => 'int',
        'blueprintTypeId' => 'int',
        'completedCharacterId' => 'int',
        'completedDate' => '\DateTime',
        'cost' => 'float',
        'duration' => 'int',
        'endDate' => '\DateTime',
        'facilityId' => 'int',
        'installerId' => 'int',
        'jobId' => 'int',
        'licensedRuns' => 'int',
        'outputLocationId' => 'int',
        'pauseDate' => '\DateTime',
        'probability' => 'float',
        'productTypeId' => 'int',
        'runs' => 'int',
        'startDate' => '\DateTime',
        'stationId' => 'int',
        'status' => 'string',
        'successfulRuns' => 'int'
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
        'activityId' => 'activity_id',
        'blueprintId' => 'blueprint_id',
        'blueprintLocationId' => 'blueprint_location_id',
        'blueprintTypeId' => 'blueprint_type_id',
        'completedCharacterId' => 'completed_character_id',
        'completedDate' => 'completed_date',
        'cost' => 'cost',
        'duration' => 'duration',
        'endDate' => 'end_date',
        'facilityId' => 'facility_id',
        'installerId' => 'installer_id',
        'jobId' => 'job_id',
        'licensedRuns' => 'licensed_runs',
        'outputLocationId' => 'output_location_id',
        'pauseDate' => 'pause_date',
        'probability' => 'probability',
        'productTypeId' => 'product_type_id',
        'runs' => 'runs',
        'startDate' => 'start_date',
        'stationId' => 'station_id',
        'status' => 'status',
        'successfulRuns' => 'successful_runs'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'activityId' => 'setActivityId',
        'blueprintId' => 'setBlueprintId',
        'blueprintLocationId' => 'setBlueprintLocationId',
        'blueprintTypeId' => 'setBlueprintTypeId',
        'completedCharacterId' => 'setCompletedCharacterId',
        'completedDate' => 'setCompletedDate',
        'cost' => 'setCost',
        'duration' => 'setDuration',
        'endDate' => 'setEndDate',
        'facilityId' => 'setFacilityId',
        'installerId' => 'setInstallerId',
        'jobId' => 'setJobId',
        'licensedRuns' => 'setLicensedRuns',
        'outputLocationId' => 'setOutputLocationId',
        'pauseDate' => 'setPauseDate',
        'probability' => 'setProbability',
        'productTypeId' => 'setProductTypeId',
        'runs' => 'setRuns',
        'startDate' => 'setStartDate',
        'stationId' => 'setStationId',
        'status' => 'setStatus',
        'successfulRuns' => 'setSuccessfulRuns'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'activityId' => 'getActivityId',
        'blueprintId' => 'getBlueprintId',
        'blueprintLocationId' => 'getBlueprintLocationId',
        'blueprintTypeId' => 'getBlueprintTypeId',
        'completedCharacterId' => 'getCompletedCharacterId',
        'completedDate' => 'getCompletedDate',
        'cost' => 'getCost',
        'duration' => 'getDuration',
        'endDate' => 'getEndDate',
        'facilityId' => 'getFacilityId',
        'installerId' => 'getInstallerId',
        'jobId' => 'getJobId',
        'licensedRuns' => 'getLicensedRuns',
        'outputLocationId' => 'getOutputLocationId',
        'pauseDate' => 'getPauseDate',
        'probability' => 'getProbability',
        'productTypeId' => 'getProductTypeId',
        'runs' => 'getRuns',
        'startDate' => 'getStartDate',
        'stationId' => 'getStationId',
        'status' => 'getStatus',
        'successfulRuns' => 'getSuccessfulRuns'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_PAUSED = 'paused';
    const STATUS_READY = 'ready';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_REVERTED = 'reverted';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PAUSED,
            self::STATUS_READY,
            self::STATUS_DELIVERED,
            self::STATUS_CANCELLED,
            self::STATUS_REVERTED,
        ];
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
        $this->container['activityId'] = isset($data['activityId']) ? $data['activityId'] : null;
        $this->container['blueprintId'] = isset($data['blueprintId']) ? $data['blueprintId'] : null;
        $this->container['blueprintLocationId'] = isset($data['blueprintLocationId']) ? $data['blueprintLocationId'] : null;
        $this->container['blueprintTypeId'] = isset($data['blueprintTypeId']) ? $data['blueprintTypeId'] : null;
        $this->container['completedCharacterId'] = isset($data['completedCharacterId']) ? $data['completedCharacterId'] : null;
        $this->container['completedDate'] = isset($data['completedDate']) ? $data['completedDate'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['facilityId'] = isset($data['facilityId']) ? $data['facilityId'] : null;
        $this->container['installerId'] = isset($data['installerId']) ? $data['installerId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['licensedRuns'] = isset($data['licensedRuns']) ? $data['licensedRuns'] : null;
        $this->container['outputLocationId'] = isset($data['outputLocationId']) ? $data['outputLocationId'] : null;
        $this->container['pauseDate'] = isset($data['pauseDate']) ? $data['pauseDate'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['productTypeId'] = isset($data['productTypeId']) ? $data['productTypeId'] : null;
        $this->container['runs'] = isset($data['runs']) ? $data['runs'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['stationId'] = isset($data['stationId']) ? $data['stationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['successfulRuns'] = isset($data['successfulRuns']) ? $data['successfulRuns'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['activityId'] === null) {
            $invalid_properties[] = "'activityId' can't be null";
        }
        if ($this->container['blueprintId'] === null) {
            $invalid_properties[] = "'blueprintId' can't be null";
        }
        if ($this->container['blueprintLocationId'] === null) {
            $invalid_properties[] = "'blueprintLocationId' can't be null";
        }
        if ($this->container['blueprintTypeId'] === null) {
            $invalid_properties[] = "'blueprintTypeId' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalid_properties[] = "'endDate' can't be null";
        }
        if ($this->container['facilityId'] === null) {
            $invalid_properties[] = "'facilityId' can't be null";
        }
        if ($this->container['installerId'] === null) {
            $invalid_properties[] = "'installerId' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalid_properties[] = "'jobId' can't be null";
        }
        if ($this->container['outputLocationId'] === null) {
            $invalid_properties[] = "'outputLocationId' can't be null";
        }
        if ($this->container['runs'] === null) {
            $invalid_properties[] = "'runs' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalid_properties[] = "'startDate' can't be null";
        }
        if ($this->container['stationId'] === null) {
            $invalid_properties[] = "'stationId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["active", "paused", "ready", "delivered", "cancelled", "reverted"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
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
        if ($this->container['activityId'] === null) {
            return false;
        }
        if ($this->container['blueprintId'] === null) {
            return false;
        }
        if ($this->container['blueprintLocationId'] === null) {
            return false;
        }
        if ($this->container['blueprintTypeId'] === null) {
            return false;
        }
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['endDate'] === null) {
            return false;
        }
        if ($this->container['facilityId'] === null) {
            return false;
        }
        if ($this->container['installerId'] === null) {
            return false;
        }
        if ($this->container['jobId'] === null) {
            return false;
        }
        if ($this->container['outputLocationId'] === null) {
            return false;
        }
        if ($this->container['runs'] === null) {
            return false;
        }
        if ($this->container['startDate'] === null) {
            return false;
        }
        if ($this->container['stationId'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["active", "paused", "ready", "delivered", "cancelled", "reverted"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets activityId
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     * @param int $activityId Job activity ID
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets blueprintId
     * @return int
     */
    public function getBlueprintId()
    {
        return $this->container['blueprintId'];
    }

    /**
     * Sets blueprintId
     * @param int $blueprintId blueprint_id integer
     * @return $this
     */
    public function setBlueprintId($blueprintId)
    {
        $this->container['blueprintId'] = $blueprintId;

        return $this;
    }

    /**
     * Gets blueprintLocationId
     * @return int
     */
    public function getBlueprintLocationId()
    {
        return $this->container['blueprintLocationId'];
    }

    /**
     * Sets blueprintLocationId
     * @param int $blueprintLocationId Location ID of the location from which the blueprint was installed. Normally a station ID, but can also be an asset (e.g. container) or corporation facility
     * @return $this
     */
    public function setBlueprintLocationId($blueprintLocationId)
    {
        $this->container['blueprintLocationId'] = $blueprintLocationId;

        return $this;
    }

    /**
     * Gets blueprintTypeId
     * @return int
     */
    public function getBlueprintTypeId()
    {
        return $this->container['blueprintTypeId'];
    }

    /**
     * Sets blueprintTypeId
     * @param int $blueprintTypeId blueprint_type_id integer
     * @return $this
     */
    public function setBlueprintTypeId($blueprintTypeId)
    {
        $this->container['blueprintTypeId'] = $blueprintTypeId;

        return $this;
    }

    /**
     * Gets completedCharacterId
     * @return int
     */
    public function getCompletedCharacterId()
    {
        return $this->container['completedCharacterId'];
    }

    /**
     * Sets completedCharacterId
     * @param int $completedCharacterId ID of the character which completed this job
     * @return $this
     */
    public function setCompletedCharacterId($completedCharacterId)
    {
        $this->container['completedCharacterId'] = $completedCharacterId;

        return $this;
    }

    /**
     * Gets completedDate
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completedDate'];
    }

    /**
     * Sets completedDate
     * @param \DateTime $completedDate Date and time when this job was completed
     * @return $this
     */
    public function setCompletedDate($completedDate)
    {
        $this->container['completedDate'] = $completedDate;

        return $this;
    }

    /**
     * Gets cost
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param float $cost The sume of job installation fee and industry facility tax
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Job duration in seconds
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets endDate
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     * @param \DateTime $endDate Date and time when this job finished
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets facilityId
     * @return int
     */
    public function getFacilityId()
    {
        return $this->container['facilityId'];
    }

    /**
     * Sets facilityId
     * @param int $facilityId ID of the facility where this job is running
     * @return $this
     */
    public function setFacilityId($facilityId)
    {
        $this->container['facilityId'] = $facilityId;

        return $this;
    }

    /**
     * Gets installerId
     * @return int
     */
    public function getInstallerId()
    {
        return $this->container['installerId'];
    }

    /**
     * Sets installerId
     * @param int $installerId ID of the character which installed this job
     * @return $this
     */
    public function setInstallerId($installerId)
    {
        $this->container['installerId'] = $installerId;

        return $this;
    }

    /**
     * Gets jobId
     * @return int
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     * @param int $jobId Unique job ID
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets licensedRuns
     * @return int
     */
    public function getLicensedRuns()
    {
        return $this->container['licensedRuns'];
    }

    /**
     * Sets licensedRuns
     * @param int $licensedRuns Number of runs blueprint is licensed for
     * @return $this
     */
    public function setLicensedRuns($licensedRuns)
    {
        $this->container['licensedRuns'] = $licensedRuns;

        return $this;
    }

    /**
     * Gets outputLocationId
     * @return int
     */
    public function getOutputLocationId()
    {
        return $this->container['outputLocationId'];
    }

    /**
     * Sets outputLocationId
     * @param int $outputLocationId Location ID of the location to which the output of the job will be delivered. Normally a station ID, but can also be a corporation facility
     * @return $this
     */
    public function setOutputLocationId($outputLocationId)
    {
        $this->container['outputLocationId'] = $outputLocationId;

        return $this;
    }

    /**
     * Gets pauseDate
     * @return \DateTime
     */
    public function getPauseDate()
    {
        return $this->container['pauseDate'];
    }

    /**
     * Sets pauseDate
     * @param \DateTime $pauseDate Date and time when this job was paused (i.e. time when the facility where this job was installed went offline)
     * @return $this
     */
    public function setPauseDate($pauseDate)
    {
        $this->container['pauseDate'] = $pauseDate;

        return $this;
    }

    /**
     * Gets probability
     * @return float
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     * @param float $probability Chance of success for invention
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets productTypeId
     * @return int
     */
    public function getProductTypeId()
    {
        return $this->container['productTypeId'];
    }

    /**
     * Sets productTypeId
     * @param int $productTypeId Type ID of product (manufactured, copied or invented)
     * @return $this
     */
    public function setProductTypeId($productTypeId)
    {
        $this->container['productTypeId'] = $productTypeId;

        return $this;
    }

    /**
     * Gets runs
     * @return int
     */
    public function getRuns()
    {
        return $this->container['runs'];
    }

    /**
     * Sets runs
     * @param int $runs Number of runs for a manufacturing job, or number of copies to make for a blueprint copy
     * @return $this
     */
    public function setRuns($runs)
    {
        $this->container['runs'] = $runs;

        return $this;
    }

    /**
     * Gets startDate
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     * @param \DateTime $startDate Date and time when this job started
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets stationId
     * @return int
     */
    public function getStationId()
    {
        return $this->container['stationId'];
    }

    /**
     * Sets stationId
     * @param int $stationId ID of the station where industry facility is located
     * @return $this
     */
    public function setStationId($stationId)
    {
        $this->container['stationId'] = $stationId;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status status string
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('active', 'paused', 'ready', 'delivered', 'cancelled', 'reverted');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'active', 'paused', 'ready', 'delivered', 'cancelled', 'reverted'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets successfulRuns
     * @return int
     */
    public function getSuccessfulRuns()
    {
        return $this->container['successfulRuns'];
    }

    /**
     * Sets successfulRuns
     * @param int $successfulRuns Number of successful runs for this job. Equal to runs unless this is an invention job
     * @return $this
     */
    public function setSuccessfulRuns($successfulRuns)
    {
        $this->container['successfulRuns'] = $successfulRuns;

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

