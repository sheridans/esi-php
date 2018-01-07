<?php
/**
 * GetCorporationsCorporationIdContracts200Ok
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
 * GetCorporationsCorporationIdContracts200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdContracts200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_contracts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contractId' => 'int',
        'issuerId' => 'int',
        'issuerCorporationId' => 'int',
        'assigneeId' => 'int',
        'acceptorId' => 'int',
        'startLocationId' => 'int',
        'endLocationId' => 'int',
        'type' => 'string',
        'status' => 'string',
        'title' => 'string',
        'forCorporation' => 'bool',
        'availability' => 'string',
        'dateIssued' => '\DateTime',
        'dateExpired' => '\DateTime',
        'dateAccepted' => '\DateTime',
        'daysToComplete' => 'int',
        'dateCompleted' => '\DateTime',
        'price' => 'double',
        'reward' => 'double',
        'collateral' => 'double',
        'buyout' => 'double',
        'volume' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contractId' => 'int32',
        'issuerId' => 'int32',
        'issuerCorporationId' => 'int32',
        'assigneeId' => 'int32',
        'acceptorId' => 'int32',
        'startLocationId' => 'int64',
        'endLocationId' => 'int64',
        'type' => null,
        'status' => null,
        'title' => null,
        'forCorporation' => null,
        'availability' => null,
        'dateIssued' => 'date-time',
        'dateExpired' => 'date-time',
        'dateAccepted' => 'date-time',
        'daysToComplete' => 'int32',
        'dateCompleted' => 'date-time',
        'price' => 'double',
        'reward' => 'double',
        'collateral' => 'double',
        'buyout' => 'double',
        'volume' => 'float'
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
        'contractId' => 'contract_id',
        'issuerId' => 'issuer_id',
        'issuerCorporationId' => 'issuer_corporation_id',
        'assigneeId' => 'assignee_id',
        'acceptorId' => 'acceptor_id',
        'startLocationId' => 'start_location_id',
        'endLocationId' => 'end_location_id',
        'type' => 'type',
        'status' => 'status',
        'title' => 'title',
        'forCorporation' => 'for_corporation',
        'availability' => 'availability',
        'dateIssued' => 'date_issued',
        'dateExpired' => 'date_expired',
        'dateAccepted' => 'date_accepted',
        'daysToComplete' => 'days_to_complete',
        'dateCompleted' => 'date_completed',
        'price' => 'price',
        'reward' => 'reward',
        'collateral' => 'collateral',
        'buyout' => 'buyout',
        'volume' => 'volume'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contractId' => 'setContractId',
        'issuerId' => 'setIssuerId',
        'issuerCorporationId' => 'setIssuerCorporationId',
        'assigneeId' => 'setAssigneeId',
        'acceptorId' => 'setAcceptorId',
        'startLocationId' => 'setStartLocationId',
        'endLocationId' => 'setEndLocationId',
        'type' => 'setType',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'forCorporation' => 'setForCorporation',
        'availability' => 'setAvailability',
        'dateIssued' => 'setDateIssued',
        'dateExpired' => 'setDateExpired',
        'dateAccepted' => 'setDateAccepted',
        'daysToComplete' => 'setDaysToComplete',
        'dateCompleted' => 'setDateCompleted',
        'price' => 'setPrice',
        'reward' => 'setReward',
        'collateral' => 'setCollateral',
        'buyout' => 'setBuyout',
        'volume' => 'setVolume'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contractId' => 'getContractId',
        'issuerId' => 'getIssuerId',
        'issuerCorporationId' => 'getIssuerCorporationId',
        'assigneeId' => 'getAssigneeId',
        'acceptorId' => 'getAcceptorId',
        'startLocationId' => 'getStartLocationId',
        'endLocationId' => 'getEndLocationId',
        'type' => 'getType',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'forCorporation' => 'getForCorporation',
        'availability' => 'getAvailability',
        'dateIssued' => 'getDateIssued',
        'dateExpired' => 'getDateExpired',
        'dateAccepted' => 'getDateAccepted',
        'daysToComplete' => 'getDaysToComplete',
        'dateCompleted' => 'getDateCompleted',
        'price' => 'getPrice',
        'reward' => 'getReward',
        'collateral' => 'getCollateral',
        'buyout' => 'getBuyout',
        'volume' => 'getVolume'
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

    const TYPE_UNKNOWN = 'unknown';
    const TYPE_ITEM_EXCHANGE = 'item_exchange';
    const TYPE_AUCTION = 'auction';
    const TYPE_COURIER = 'courier';
    const TYPE_LOAN = 'loan';
    const STATUS_OUTSTANDING = 'outstanding';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_FINISHED_ISSUER = 'finished_issuer';
    const STATUS_FINISHED_CONTRACTOR = 'finished_contractor';
    const STATUS_FINISHED = 'finished';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_REJECTED = 'rejected';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETED = 'deleted';
    const STATUS_REVERSED = 'reversed';
    const AVAILABILITY__PUBLIC = 'public';
    const AVAILABILITY_PERSONAL = 'personal';
    const AVAILABILITY_CORPORATION = 'corporation';
    const AVAILABILITY_ALLIANCE = 'alliance';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_ITEM_EXCHANGE,
            self::TYPE_AUCTION,
            self::TYPE_COURIER,
            self::TYPE_LOAN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUTSTANDING,
            self::STATUS_IN_PROGRESS,
            self::STATUS_FINISHED_ISSUER,
            self::STATUS_FINISHED_CONTRACTOR,
            self::STATUS_FINISHED,
            self::STATUS_CANCELLED,
            self::STATUS_REJECTED,
            self::STATUS_FAILED,
            self::STATUS_DELETED,
            self::STATUS_REVERSED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY__PUBLIC,
            self::AVAILABILITY_PERSONAL,
            self::AVAILABILITY_CORPORATION,
            self::AVAILABILITY_ALLIANCE,
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
        $this->container['contractId'] = isset($data['contractId']) ? $data['contractId'] : null;
        $this->container['issuerId'] = isset($data['issuerId']) ? $data['issuerId'] : null;
        $this->container['issuerCorporationId'] = isset($data['issuerCorporationId']) ? $data['issuerCorporationId'] : null;
        $this->container['assigneeId'] = isset($data['assigneeId']) ? $data['assigneeId'] : null;
        $this->container['acceptorId'] = isset($data['acceptorId']) ? $data['acceptorId'] : null;
        $this->container['startLocationId'] = isset($data['startLocationId']) ? $data['startLocationId'] : null;
        $this->container['endLocationId'] = isset($data['endLocationId']) ? $data['endLocationId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['forCorporation'] = isset($data['forCorporation']) ? $data['forCorporation'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['dateIssued'] = isset($data['dateIssued']) ? $data['dateIssued'] : null;
        $this->container['dateExpired'] = isset($data['dateExpired']) ? $data['dateExpired'] : null;
        $this->container['dateAccepted'] = isset($data['dateAccepted']) ? $data['dateAccepted'] : null;
        $this->container['daysToComplete'] = isset($data['daysToComplete']) ? $data['daysToComplete'] : null;
        $this->container['dateCompleted'] = isset($data['dateCompleted']) ? $data['dateCompleted'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['reward'] = isset($data['reward']) ? $data['reward'] : null;
        $this->container['collateral'] = isset($data['collateral']) ? $data['collateral'] : null;
        $this->container['buyout'] = isset($data['buyout']) ? $data['buyout'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contractId'] === null) {
            $invalidProperties[] = "'contractId' can't be null";
        }
        if ($this->container['issuerId'] === null) {
            $invalidProperties[] = "'issuerId' can't be null";
        }
        if ($this->container['issuerCorporationId'] === null) {
            $invalidProperties[] = "'issuerCorporationId' can't be null";
        }
        if ($this->container['assigneeId'] === null) {
            $invalidProperties[] = "'assigneeId' can't be null";
        }
        if ($this->container['acceptorId'] === null) {
            $invalidProperties[] = "'acceptorId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['forCorporation'] === null) {
            $invalidProperties[] = "'forCorporation' can't be null";
        }
        if ($this->container['availability'] === null) {
            $invalidProperties[] = "'availability' can't be null";
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($this->container['availability'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'availability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['dateIssued'] === null) {
            $invalidProperties[] = "'dateIssued' can't be null";
        }
        if ($this->container['dateExpired'] === null) {
            $invalidProperties[] = "'dateExpired' can't be null";
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

        if ($this->container['contractId'] === null) {
            return false;
        }
        if ($this->container['issuerId'] === null) {
            return false;
        }
        if ($this->container['issuerCorporationId'] === null) {
            return false;
        }
        if ($this->container['assigneeId'] === null) {
            return false;
        }
        if ($this->container['acceptorId'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['forCorporation'] === null) {
            return false;
        }
        if ($this->container['availability'] === null) {
            return false;
        }
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($this->container['availability'], $allowedValues)) {
            return false;
        }
        if ($this->container['dateIssued'] === null) {
            return false;
        }
        if ($this->container['dateExpired'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets contractId
     *
     * @return int
     */
    public function getContractId()
    {
        return $this->container['contractId'];
    }

    /**
     * Sets contractId
     *
     * @param int $contractId contract_id integer
     *
     * @return $this
     */
    public function setContractId($contractId)
    {
        $this->container['contractId'] = $contractId;

        return $this;
    }

    /**
     * Gets issuerId
     *
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuerId'];
    }

    /**
     * Sets issuerId
     *
     * @param int $issuerId Character ID for the issuer
     *
     * @return $this
     */
    public function setIssuerId($issuerId)
    {
        $this->container['issuerId'] = $issuerId;

        return $this;
    }

    /**
     * Gets issuerCorporationId
     *
     * @return int
     */
    public function getIssuerCorporationId()
    {
        return $this->container['issuerCorporationId'];
    }

    /**
     * Sets issuerCorporationId
     *
     * @param int $issuerCorporationId Character's corporation ID for the issuer
     *
     * @return $this
     */
    public function setIssuerCorporationId($issuerCorporationId)
    {
        $this->container['issuerCorporationId'] = $issuerCorporationId;

        return $this;
    }

    /**
     * Gets assigneeId
     *
     * @return int
     */
    public function getAssigneeId()
    {
        return $this->container['assigneeId'];
    }

    /**
     * Sets assigneeId
     *
     * @param int $assigneeId ID to whom the contract is assigned, can be corporation or character ID
     *
     * @return $this
     */
    public function setAssigneeId($assigneeId)
    {
        $this->container['assigneeId'] = $assigneeId;

        return $this;
    }

    /**
     * Gets acceptorId
     *
     * @return int
     */
    public function getAcceptorId()
    {
        return $this->container['acceptorId'];
    }

    /**
     * Sets acceptorId
     *
     * @param int $acceptorId Who will accept the contract
     *
     * @return $this
     */
    public function setAcceptorId($acceptorId)
    {
        $this->container['acceptorId'] = $acceptorId;

        return $this;
    }

    /**
     * Gets startLocationId
     *
     * @return int
     */
    public function getStartLocationId()
    {
        return $this->container['startLocationId'];
    }

    /**
     * Sets startLocationId
     *
     * @param int $startLocationId Start location ID (for Couriers contract)
     *
     * @return $this
     */
    public function setStartLocationId($startLocationId)
    {
        $this->container['startLocationId'] = $startLocationId;

        return $this;
    }

    /**
     * Gets endLocationId
     *
     * @return int
     */
    public function getEndLocationId()
    {
        return $this->container['endLocationId'];
    }

    /**
     * Sets endLocationId
     *
     * @param int $endLocationId End location ID (for Couriers contract)
     *
     * @return $this
     */
    public function setEndLocationId($endLocationId)
    {
        $this->container['endLocationId'] = $endLocationId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the contract
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the the contract
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the contract
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets forCorporation
     *
     * @return bool
     */
    public function getForCorporation()
    {
        return $this->container['forCorporation'];
    }

    /**
     * Sets forCorporation
     *
     * @param bool $forCorporation true if the contract was issued on behalf of the issuer's corporation
     *
     * @return $this
     */
    public function setForCorporation($forCorporation)
    {
        $this->container['forCorporation'] = $forCorporation;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability To whom the contract is available
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!in_array($availability, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'availability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets dateIssued
     *
     * @return \DateTime
     */
    public function getDateIssued()
    {
        return $this->container['dateIssued'];
    }

    /**
     * Sets dateIssued
     *
     * @param \DateTime $dateIssued Сreation date of the contract
     *
     * @return $this
     */
    public function setDateIssued($dateIssued)
    {
        $this->container['dateIssued'] = $dateIssued;

        return $this;
    }

    /**
     * Gets dateExpired
     *
     * @return \DateTime
     */
    public function getDateExpired()
    {
        return $this->container['dateExpired'];
    }

    /**
     * Sets dateExpired
     *
     * @param \DateTime $dateExpired Expiration date of the contract
     *
     * @return $this
     */
    public function setDateExpired($dateExpired)
    {
        $this->container['dateExpired'] = $dateExpired;

        return $this;
    }

    /**
     * Gets dateAccepted
     *
     * @return \DateTime
     */
    public function getDateAccepted()
    {
        return $this->container['dateAccepted'];
    }

    /**
     * Sets dateAccepted
     *
     * @param \DateTime $dateAccepted Date of confirmation of contract
     *
     * @return $this
     */
    public function setDateAccepted($dateAccepted)
    {
        $this->container['dateAccepted'] = $dateAccepted;

        return $this;
    }

    /**
     * Gets daysToComplete
     *
     * @return int
     */
    public function getDaysToComplete()
    {
        return $this->container['daysToComplete'];
    }

    /**
     * Sets daysToComplete
     *
     * @param int $daysToComplete Number of days to perform the contract
     *
     * @return $this
     */
    public function setDaysToComplete($daysToComplete)
    {
        $this->container['daysToComplete'] = $daysToComplete;

        return $this;
    }

    /**
     * Gets dateCompleted
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['dateCompleted'];
    }

    /**
     * Sets dateCompleted
     *
     * @param \DateTime $dateCompleted Date of completed of contract
     *
     * @return $this
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->container['dateCompleted'] = $dateCompleted;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price Price of contract (for ItemsExchange and Auctions)
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return double
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param double $reward Remuneration for contract (for Couriers only)
     *
     * @return $this
     */
    public function setReward($reward)
    {
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets collateral
     *
     * @return double
     */
    public function getCollateral()
    {
        return $this->container['collateral'];
    }

    /**
     * Sets collateral
     *
     * @param double $collateral Collateral price (for Couriers only)
     *
     * @return $this
     */
    public function setCollateral($collateral)
    {
        $this->container['collateral'] = $collateral;

        return $this;
    }

    /**
     * Gets buyout
     *
     * @return double
     */
    public function getBuyout()
    {
        return $this->container['buyout'];
    }

    /**
     * Sets buyout
     *
     * @param double $buyout Buyout price (for Auctions only)
     *
     * @return $this
     */
    public function setBuyout($buyout)
    {
        $this->container['buyout'] = $buyout;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param float $volume Volume of items in the contract
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

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


