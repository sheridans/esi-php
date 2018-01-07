<?php
/**
 * GetCharactersCharacterIdStatsSocial
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
 * GetCharactersCharacterIdStatsSocial Class Doc Comment
 *
 * @category Class
 * @description social object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdStatsSocial implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_stats_social';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addContactBad' => 'int',
        'addContactGood' => 'int',
        'addContactHigh' => 'int',
        'addContactHorrible' => 'int',
        'addContactNeutral' => 'int',
        'addNote' => 'int',
        'addedAsContactBad' => 'int',
        'addedAsContactGood' => 'int',
        'addedAsContactHigh' => 'int',
        'addedAsContactHorrible' => 'int',
        'addedAsContactNeutral' => 'int',
        'calendarEventCreated' => 'int',
        'chatMessagesAlliance' => 'int',
        'chatMessagesConstellation' => 'int',
        'chatMessagesCorporation' => 'int',
        'chatMessagesFleet' => 'int',
        'chatMessagesRegion' => 'int',
        'chatMessagesSolarsystem' => 'int',
        'chatMessagesWarfaction' => 'int',
        'chatTotalMessageLength' => 'int',
        'directTrades' => 'int',
        'fleetBroadcasts' => 'int',
        'fleetJoins' => 'int',
        'mailsReceived' => 'int',
        'mailsSent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addContactBad' => 'int64',
        'addContactGood' => 'int64',
        'addContactHigh' => 'int64',
        'addContactHorrible' => 'int64',
        'addContactNeutral' => 'int64',
        'addNote' => 'int64',
        'addedAsContactBad' => 'int64',
        'addedAsContactGood' => 'int64',
        'addedAsContactHigh' => 'int64',
        'addedAsContactHorrible' => 'int64',
        'addedAsContactNeutral' => 'int64',
        'calendarEventCreated' => 'int64',
        'chatMessagesAlliance' => 'int64',
        'chatMessagesConstellation' => 'int64',
        'chatMessagesCorporation' => 'int64',
        'chatMessagesFleet' => 'int64',
        'chatMessagesRegion' => 'int64',
        'chatMessagesSolarsystem' => 'int64',
        'chatMessagesWarfaction' => 'int64',
        'chatTotalMessageLength' => 'int64',
        'directTrades' => 'int64',
        'fleetBroadcasts' => 'int64',
        'fleetJoins' => 'int64',
        'mailsReceived' => 'int64',
        'mailsSent' => 'int64'
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
        'addContactBad' => 'add_contact_bad',
        'addContactGood' => 'add_contact_good',
        'addContactHigh' => 'add_contact_high',
        'addContactHorrible' => 'add_contact_horrible',
        'addContactNeutral' => 'add_contact_neutral',
        'addNote' => 'add_note',
        'addedAsContactBad' => 'added_as_contact_bad',
        'addedAsContactGood' => 'added_as_contact_good',
        'addedAsContactHigh' => 'added_as_contact_high',
        'addedAsContactHorrible' => 'added_as_contact_horrible',
        'addedAsContactNeutral' => 'added_as_contact_neutral',
        'calendarEventCreated' => 'calendar_event_created',
        'chatMessagesAlliance' => 'chat_messages_alliance',
        'chatMessagesConstellation' => 'chat_messages_constellation',
        'chatMessagesCorporation' => 'chat_messages_corporation',
        'chatMessagesFleet' => 'chat_messages_fleet',
        'chatMessagesRegion' => 'chat_messages_region',
        'chatMessagesSolarsystem' => 'chat_messages_solarsystem',
        'chatMessagesWarfaction' => 'chat_messages_warfaction',
        'chatTotalMessageLength' => 'chat_total_message_length',
        'directTrades' => 'direct_trades',
        'fleetBroadcasts' => 'fleet_broadcasts',
        'fleetJoins' => 'fleet_joins',
        'mailsReceived' => 'mails_received',
        'mailsSent' => 'mails_sent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addContactBad' => 'setAddContactBad',
        'addContactGood' => 'setAddContactGood',
        'addContactHigh' => 'setAddContactHigh',
        'addContactHorrible' => 'setAddContactHorrible',
        'addContactNeutral' => 'setAddContactNeutral',
        'addNote' => 'setAddNote',
        'addedAsContactBad' => 'setAddedAsContactBad',
        'addedAsContactGood' => 'setAddedAsContactGood',
        'addedAsContactHigh' => 'setAddedAsContactHigh',
        'addedAsContactHorrible' => 'setAddedAsContactHorrible',
        'addedAsContactNeutral' => 'setAddedAsContactNeutral',
        'calendarEventCreated' => 'setCalendarEventCreated',
        'chatMessagesAlliance' => 'setChatMessagesAlliance',
        'chatMessagesConstellation' => 'setChatMessagesConstellation',
        'chatMessagesCorporation' => 'setChatMessagesCorporation',
        'chatMessagesFleet' => 'setChatMessagesFleet',
        'chatMessagesRegion' => 'setChatMessagesRegion',
        'chatMessagesSolarsystem' => 'setChatMessagesSolarsystem',
        'chatMessagesWarfaction' => 'setChatMessagesWarfaction',
        'chatTotalMessageLength' => 'setChatTotalMessageLength',
        'directTrades' => 'setDirectTrades',
        'fleetBroadcasts' => 'setFleetBroadcasts',
        'fleetJoins' => 'setFleetJoins',
        'mailsReceived' => 'setMailsReceived',
        'mailsSent' => 'setMailsSent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addContactBad' => 'getAddContactBad',
        'addContactGood' => 'getAddContactGood',
        'addContactHigh' => 'getAddContactHigh',
        'addContactHorrible' => 'getAddContactHorrible',
        'addContactNeutral' => 'getAddContactNeutral',
        'addNote' => 'getAddNote',
        'addedAsContactBad' => 'getAddedAsContactBad',
        'addedAsContactGood' => 'getAddedAsContactGood',
        'addedAsContactHigh' => 'getAddedAsContactHigh',
        'addedAsContactHorrible' => 'getAddedAsContactHorrible',
        'addedAsContactNeutral' => 'getAddedAsContactNeutral',
        'calendarEventCreated' => 'getCalendarEventCreated',
        'chatMessagesAlliance' => 'getChatMessagesAlliance',
        'chatMessagesConstellation' => 'getChatMessagesConstellation',
        'chatMessagesCorporation' => 'getChatMessagesCorporation',
        'chatMessagesFleet' => 'getChatMessagesFleet',
        'chatMessagesRegion' => 'getChatMessagesRegion',
        'chatMessagesSolarsystem' => 'getChatMessagesSolarsystem',
        'chatMessagesWarfaction' => 'getChatMessagesWarfaction',
        'chatTotalMessageLength' => 'getChatTotalMessageLength',
        'directTrades' => 'getDirectTrades',
        'fleetBroadcasts' => 'getFleetBroadcasts',
        'fleetJoins' => 'getFleetJoins',
        'mailsReceived' => 'getMailsReceived',
        'mailsSent' => 'getMailsSent'
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
        $this->container['addContactBad'] = isset($data['addContactBad']) ? $data['addContactBad'] : null;
        $this->container['addContactGood'] = isset($data['addContactGood']) ? $data['addContactGood'] : null;
        $this->container['addContactHigh'] = isset($data['addContactHigh']) ? $data['addContactHigh'] : null;
        $this->container['addContactHorrible'] = isset($data['addContactHorrible']) ? $data['addContactHorrible'] : null;
        $this->container['addContactNeutral'] = isset($data['addContactNeutral']) ? $data['addContactNeutral'] : null;
        $this->container['addNote'] = isset($data['addNote']) ? $data['addNote'] : null;
        $this->container['addedAsContactBad'] = isset($data['addedAsContactBad']) ? $data['addedAsContactBad'] : null;
        $this->container['addedAsContactGood'] = isset($data['addedAsContactGood']) ? $data['addedAsContactGood'] : null;
        $this->container['addedAsContactHigh'] = isset($data['addedAsContactHigh']) ? $data['addedAsContactHigh'] : null;
        $this->container['addedAsContactHorrible'] = isset($data['addedAsContactHorrible']) ? $data['addedAsContactHorrible'] : null;
        $this->container['addedAsContactNeutral'] = isset($data['addedAsContactNeutral']) ? $data['addedAsContactNeutral'] : null;
        $this->container['calendarEventCreated'] = isset($data['calendarEventCreated']) ? $data['calendarEventCreated'] : null;
        $this->container['chatMessagesAlliance'] = isset($data['chatMessagesAlliance']) ? $data['chatMessagesAlliance'] : null;
        $this->container['chatMessagesConstellation'] = isset($data['chatMessagesConstellation']) ? $data['chatMessagesConstellation'] : null;
        $this->container['chatMessagesCorporation'] = isset($data['chatMessagesCorporation']) ? $data['chatMessagesCorporation'] : null;
        $this->container['chatMessagesFleet'] = isset($data['chatMessagesFleet']) ? $data['chatMessagesFleet'] : null;
        $this->container['chatMessagesRegion'] = isset($data['chatMessagesRegion']) ? $data['chatMessagesRegion'] : null;
        $this->container['chatMessagesSolarsystem'] = isset($data['chatMessagesSolarsystem']) ? $data['chatMessagesSolarsystem'] : null;
        $this->container['chatMessagesWarfaction'] = isset($data['chatMessagesWarfaction']) ? $data['chatMessagesWarfaction'] : null;
        $this->container['chatTotalMessageLength'] = isset($data['chatTotalMessageLength']) ? $data['chatTotalMessageLength'] : null;
        $this->container['directTrades'] = isset($data['directTrades']) ? $data['directTrades'] : null;
        $this->container['fleetBroadcasts'] = isset($data['fleetBroadcasts']) ? $data['fleetBroadcasts'] : null;
        $this->container['fleetJoins'] = isset($data['fleetJoins']) ? $data['fleetJoins'] : null;
        $this->container['mailsReceived'] = isset($data['mailsReceived']) ? $data['mailsReceived'] : null;
        $this->container['mailsSent'] = isset($data['mailsSent']) ? $data['mailsSent'] : null;
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

        return true;
    }


    /**
     * Gets addContactBad
     *
     * @return int
     */
    public function getAddContactBad()
    {
        return $this->container['addContactBad'];
    }

    /**
     * Sets addContactBad
     *
     * @param int $addContactBad add_contact_bad integer
     *
     * @return $this
     */
    public function setAddContactBad($addContactBad)
    {
        $this->container['addContactBad'] = $addContactBad;

        return $this;
    }

    /**
     * Gets addContactGood
     *
     * @return int
     */
    public function getAddContactGood()
    {
        return $this->container['addContactGood'];
    }

    /**
     * Sets addContactGood
     *
     * @param int $addContactGood add_contact_good integer
     *
     * @return $this
     */
    public function setAddContactGood($addContactGood)
    {
        $this->container['addContactGood'] = $addContactGood;

        return $this;
    }

    /**
     * Gets addContactHigh
     *
     * @return int
     */
    public function getAddContactHigh()
    {
        return $this->container['addContactHigh'];
    }

    /**
     * Sets addContactHigh
     *
     * @param int $addContactHigh add_contact_high integer
     *
     * @return $this
     */
    public function setAddContactHigh($addContactHigh)
    {
        $this->container['addContactHigh'] = $addContactHigh;

        return $this;
    }

    /**
     * Gets addContactHorrible
     *
     * @return int
     */
    public function getAddContactHorrible()
    {
        return $this->container['addContactHorrible'];
    }

    /**
     * Sets addContactHorrible
     *
     * @param int $addContactHorrible add_contact_horrible integer
     *
     * @return $this
     */
    public function setAddContactHorrible($addContactHorrible)
    {
        $this->container['addContactHorrible'] = $addContactHorrible;

        return $this;
    }

    /**
     * Gets addContactNeutral
     *
     * @return int
     */
    public function getAddContactNeutral()
    {
        return $this->container['addContactNeutral'];
    }

    /**
     * Sets addContactNeutral
     *
     * @param int $addContactNeutral add_contact_neutral integer
     *
     * @return $this
     */
    public function setAddContactNeutral($addContactNeutral)
    {
        $this->container['addContactNeutral'] = $addContactNeutral;

        return $this;
    }

    /**
     * Gets addNote
     *
     * @return int
     */
    public function getAddNote()
    {
        return $this->container['addNote'];
    }

    /**
     * Sets addNote
     *
     * @param int $addNote add_note integer
     *
     * @return $this
     */
    public function setAddNote($addNote)
    {
        $this->container['addNote'] = $addNote;

        return $this;
    }

    /**
     * Gets addedAsContactBad
     *
     * @return int
     */
    public function getAddedAsContactBad()
    {
        return $this->container['addedAsContactBad'];
    }

    /**
     * Sets addedAsContactBad
     *
     * @param int $addedAsContactBad added_as_contact_bad integer
     *
     * @return $this
     */
    public function setAddedAsContactBad($addedAsContactBad)
    {
        $this->container['addedAsContactBad'] = $addedAsContactBad;

        return $this;
    }

    /**
     * Gets addedAsContactGood
     *
     * @return int
     */
    public function getAddedAsContactGood()
    {
        return $this->container['addedAsContactGood'];
    }

    /**
     * Sets addedAsContactGood
     *
     * @param int $addedAsContactGood added_as_contact_good integer
     *
     * @return $this
     */
    public function setAddedAsContactGood($addedAsContactGood)
    {
        $this->container['addedAsContactGood'] = $addedAsContactGood;

        return $this;
    }

    /**
     * Gets addedAsContactHigh
     *
     * @return int
     */
    public function getAddedAsContactHigh()
    {
        return $this->container['addedAsContactHigh'];
    }

    /**
     * Sets addedAsContactHigh
     *
     * @param int $addedAsContactHigh added_as_contact_high integer
     *
     * @return $this
     */
    public function setAddedAsContactHigh($addedAsContactHigh)
    {
        $this->container['addedAsContactHigh'] = $addedAsContactHigh;

        return $this;
    }

    /**
     * Gets addedAsContactHorrible
     *
     * @return int
     */
    public function getAddedAsContactHorrible()
    {
        return $this->container['addedAsContactHorrible'];
    }

    /**
     * Sets addedAsContactHorrible
     *
     * @param int $addedAsContactHorrible added_as_contact_horrible integer
     *
     * @return $this
     */
    public function setAddedAsContactHorrible($addedAsContactHorrible)
    {
        $this->container['addedAsContactHorrible'] = $addedAsContactHorrible;

        return $this;
    }

    /**
     * Gets addedAsContactNeutral
     *
     * @return int
     */
    public function getAddedAsContactNeutral()
    {
        return $this->container['addedAsContactNeutral'];
    }

    /**
     * Sets addedAsContactNeutral
     *
     * @param int $addedAsContactNeutral added_as_contact_neutral integer
     *
     * @return $this
     */
    public function setAddedAsContactNeutral($addedAsContactNeutral)
    {
        $this->container['addedAsContactNeutral'] = $addedAsContactNeutral;

        return $this;
    }

    /**
     * Gets calendarEventCreated
     *
     * @return int
     */
    public function getCalendarEventCreated()
    {
        return $this->container['calendarEventCreated'];
    }

    /**
     * Sets calendarEventCreated
     *
     * @param int $calendarEventCreated calendar_event_created integer
     *
     * @return $this
     */
    public function setCalendarEventCreated($calendarEventCreated)
    {
        $this->container['calendarEventCreated'] = $calendarEventCreated;

        return $this;
    }

    /**
     * Gets chatMessagesAlliance
     *
     * @return int
     */
    public function getChatMessagesAlliance()
    {
        return $this->container['chatMessagesAlliance'];
    }

    /**
     * Sets chatMessagesAlliance
     *
     * @param int $chatMessagesAlliance chat_messages_alliance integer
     *
     * @return $this
     */
    public function setChatMessagesAlliance($chatMessagesAlliance)
    {
        $this->container['chatMessagesAlliance'] = $chatMessagesAlliance;

        return $this;
    }

    /**
     * Gets chatMessagesConstellation
     *
     * @return int
     */
    public function getChatMessagesConstellation()
    {
        return $this->container['chatMessagesConstellation'];
    }

    /**
     * Sets chatMessagesConstellation
     *
     * @param int $chatMessagesConstellation chat_messages_constellation integer
     *
     * @return $this
     */
    public function setChatMessagesConstellation($chatMessagesConstellation)
    {
        $this->container['chatMessagesConstellation'] = $chatMessagesConstellation;

        return $this;
    }

    /**
     * Gets chatMessagesCorporation
     *
     * @return int
     */
    public function getChatMessagesCorporation()
    {
        return $this->container['chatMessagesCorporation'];
    }

    /**
     * Sets chatMessagesCorporation
     *
     * @param int $chatMessagesCorporation chat_messages_corporation integer
     *
     * @return $this
     */
    public function setChatMessagesCorporation($chatMessagesCorporation)
    {
        $this->container['chatMessagesCorporation'] = $chatMessagesCorporation;

        return $this;
    }

    /**
     * Gets chatMessagesFleet
     *
     * @return int
     */
    public function getChatMessagesFleet()
    {
        return $this->container['chatMessagesFleet'];
    }

    /**
     * Sets chatMessagesFleet
     *
     * @param int $chatMessagesFleet chat_messages_fleet integer
     *
     * @return $this
     */
    public function setChatMessagesFleet($chatMessagesFleet)
    {
        $this->container['chatMessagesFleet'] = $chatMessagesFleet;

        return $this;
    }

    /**
     * Gets chatMessagesRegion
     *
     * @return int
     */
    public function getChatMessagesRegion()
    {
        return $this->container['chatMessagesRegion'];
    }

    /**
     * Sets chatMessagesRegion
     *
     * @param int $chatMessagesRegion chat_messages_region integer
     *
     * @return $this
     */
    public function setChatMessagesRegion($chatMessagesRegion)
    {
        $this->container['chatMessagesRegion'] = $chatMessagesRegion;

        return $this;
    }

    /**
     * Gets chatMessagesSolarsystem
     *
     * @return int
     */
    public function getChatMessagesSolarsystem()
    {
        return $this->container['chatMessagesSolarsystem'];
    }

    /**
     * Sets chatMessagesSolarsystem
     *
     * @param int $chatMessagesSolarsystem chat_messages_solarsystem integer
     *
     * @return $this
     */
    public function setChatMessagesSolarsystem($chatMessagesSolarsystem)
    {
        $this->container['chatMessagesSolarsystem'] = $chatMessagesSolarsystem;

        return $this;
    }

    /**
     * Gets chatMessagesWarfaction
     *
     * @return int
     */
    public function getChatMessagesWarfaction()
    {
        return $this->container['chatMessagesWarfaction'];
    }

    /**
     * Sets chatMessagesWarfaction
     *
     * @param int $chatMessagesWarfaction chat_messages_warfaction integer
     *
     * @return $this
     */
    public function setChatMessagesWarfaction($chatMessagesWarfaction)
    {
        $this->container['chatMessagesWarfaction'] = $chatMessagesWarfaction;

        return $this;
    }

    /**
     * Gets chatTotalMessageLength
     *
     * @return int
     */
    public function getChatTotalMessageLength()
    {
        return $this->container['chatTotalMessageLength'];
    }

    /**
     * Sets chatTotalMessageLength
     *
     * @param int $chatTotalMessageLength chat_total_message_length integer
     *
     * @return $this
     */
    public function setChatTotalMessageLength($chatTotalMessageLength)
    {
        $this->container['chatTotalMessageLength'] = $chatTotalMessageLength;

        return $this;
    }

    /**
     * Gets directTrades
     *
     * @return int
     */
    public function getDirectTrades()
    {
        return $this->container['directTrades'];
    }

    /**
     * Sets directTrades
     *
     * @param int $directTrades direct_trades integer
     *
     * @return $this
     */
    public function setDirectTrades($directTrades)
    {
        $this->container['directTrades'] = $directTrades;

        return $this;
    }

    /**
     * Gets fleetBroadcasts
     *
     * @return int
     */
    public function getFleetBroadcasts()
    {
        return $this->container['fleetBroadcasts'];
    }

    /**
     * Sets fleetBroadcasts
     *
     * @param int $fleetBroadcasts fleet_broadcasts integer
     *
     * @return $this
     */
    public function setFleetBroadcasts($fleetBroadcasts)
    {
        $this->container['fleetBroadcasts'] = $fleetBroadcasts;

        return $this;
    }

    /**
     * Gets fleetJoins
     *
     * @return int
     */
    public function getFleetJoins()
    {
        return $this->container['fleetJoins'];
    }

    /**
     * Sets fleetJoins
     *
     * @param int $fleetJoins fleet_joins integer
     *
     * @return $this
     */
    public function setFleetJoins($fleetJoins)
    {
        $this->container['fleetJoins'] = $fleetJoins;

        return $this;
    }

    /**
     * Gets mailsReceived
     *
     * @return int
     */
    public function getMailsReceived()
    {
        return $this->container['mailsReceived'];
    }

    /**
     * Sets mailsReceived
     *
     * @param int $mailsReceived mails_received integer
     *
     * @return $this
     */
    public function setMailsReceived($mailsReceived)
    {
        $this->container['mailsReceived'] = $mailsReceived;

        return $this;
    }

    /**
     * Gets mailsSent
     *
     * @return int
     */
    public function getMailsSent()
    {
        return $this->container['mailsSent'];
    }

    /**
     * Sets mailsSent
     *
     * @param int $mailsSent mails_sent integer
     *
     * @return $this
     */
    public function setMailsSent($mailsSent)
    {
        $this->container['mailsSent'] = $mailsSent;

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


