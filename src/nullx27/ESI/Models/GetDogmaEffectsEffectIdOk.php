<?php
/**
 * GetDogmaEffectsEffectIdOk
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
 * GetDogmaEffectsEffectIdOk Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  nullx27ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetDogmaEffectsEffectIdOk implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_dogma_effects_effect_id_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'effectId' => 'int',
        'name' => 'string',
        'displayName' => 'string',
        'description' => 'string',
        'iconId' => 'int',
        'effectCategory' => 'int',
        'preExpression' => 'int',
        'postExpression' => 'int',
        'isOffensive' => 'bool',
        'isAssistance' => 'bool',
        'disallowAutoRepeat' => 'bool',
        'published' => 'bool',
        'isWarpSafe' => 'bool',
        'rangeChance' => 'bool',
        'electronicChance' => 'bool',
        'durationAttributeId' => 'int',
        'trackingSpeedAttributeId' => 'int',
        'dischargeAttributeId' => 'int',
        'rangeAttributeId' => 'int',
        'falloffAttributeId' => 'int',
        'modifiers' => '\nullx27ESI\nullx27\ESI\Models\GetDogmaEffectsEffectIdModifier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'effectId' => 'int32',
        'name' => null,
        'displayName' => null,
        'description' => null,
        'iconId' => 'int32',
        'effectCategory' => 'int32',
        'preExpression' => 'int32',
        'postExpression' => 'int32',
        'isOffensive' => null,
        'isAssistance' => null,
        'disallowAutoRepeat' => null,
        'published' => null,
        'isWarpSafe' => null,
        'rangeChance' => null,
        'electronicChance' => null,
        'durationAttributeId' => 'int32',
        'trackingSpeedAttributeId' => 'int32',
        'dischargeAttributeId' => 'int32',
        'rangeAttributeId' => 'int32',
        'falloffAttributeId' => 'int32',
        'modifiers' => null
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
        'effectId' => 'effect_id',
        'name' => 'name',
        'displayName' => 'display_name',
        'description' => 'description',
        'iconId' => 'icon_id',
        'effectCategory' => 'effect_category',
        'preExpression' => 'pre_expression',
        'postExpression' => 'post_expression',
        'isOffensive' => 'is_offensive',
        'isAssistance' => 'is_assistance',
        'disallowAutoRepeat' => 'disallow_auto_repeat',
        'published' => 'published',
        'isWarpSafe' => 'is_warp_safe',
        'rangeChance' => 'range_chance',
        'electronicChance' => 'electronic_chance',
        'durationAttributeId' => 'duration_attribute_id',
        'trackingSpeedAttributeId' => 'tracking_speed_attribute_id',
        'dischargeAttributeId' => 'discharge_attribute_id',
        'rangeAttributeId' => 'range_attribute_id',
        'falloffAttributeId' => 'falloff_attribute_id',
        'modifiers' => 'modifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effectId' => 'setEffectId',
        'name' => 'setName',
        'displayName' => 'setDisplayName',
        'description' => 'setDescription',
        'iconId' => 'setIconId',
        'effectCategory' => 'setEffectCategory',
        'preExpression' => 'setPreExpression',
        'postExpression' => 'setPostExpression',
        'isOffensive' => 'setIsOffensive',
        'isAssistance' => 'setIsAssistance',
        'disallowAutoRepeat' => 'setDisallowAutoRepeat',
        'published' => 'setPublished',
        'isWarpSafe' => 'setIsWarpSafe',
        'rangeChance' => 'setRangeChance',
        'electronicChance' => 'setElectronicChance',
        'durationAttributeId' => 'setDurationAttributeId',
        'trackingSpeedAttributeId' => 'setTrackingSpeedAttributeId',
        'dischargeAttributeId' => 'setDischargeAttributeId',
        'rangeAttributeId' => 'setRangeAttributeId',
        'falloffAttributeId' => 'setFalloffAttributeId',
        'modifiers' => 'setModifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effectId' => 'getEffectId',
        'name' => 'getName',
        'displayName' => 'getDisplayName',
        'description' => 'getDescription',
        'iconId' => 'getIconId',
        'effectCategory' => 'getEffectCategory',
        'preExpression' => 'getPreExpression',
        'postExpression' => 'getPostExpression',
        'isOffensive' => 'getIsOffensive',
        'isAssistance' => 'getIsAssistance',
        'disallowAutoRepeat' => 'getDisallowAutoRepeat',
        'published' => 'getPublished',
        'isWarpSafe' => 'getIsWarpSafe',
        'rangeChance' => 'getRangeChance',
        'electronicChance' => 'getElectronicChance',
        'durationAttributeId' => 'getDurationAttributeId',
        'trackingSpeedAttributeId' => 'getTrackingSpeedAttributeId',
        'dischargeAttributeId' => 'getDischargeAttributeId',
        'rangeAttributeId' => 'getRangeAttributeId',
        'falloffAttributeId' => 'getFalloffAttributeId',
        'modifiers' => 'getModifiers'
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
        $this->container['effectId'] = isset($data['effectId']) ? $data['effectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['iconId'] = isset($data['iconId']) ? $data['iconId'] : null;
        $this->container['effectCategory'] = isset($data['effectCategory']) ? $data['effectCategory'] : null;
        $this->container['preExpression'] = isset($data['preExpression']) ? $data['preExpression'] : null;
        $this->container['postExpression'] = isset($data['postExpression']) ? $data['postExpression'] : null;
        $this->container['isOffensive'] = isset($data['isOffensive']) ? $data['isOffensive'] : null;
        $this->container['isAssistance'] = isset($data['isAssistance']) ? $data['isAssistance'] : null;
        $this->container['disallowAutoRepeat'] = isset($data['disallowAutoRepeat']) ? $data['disallowAutoRepeat'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['isWarpSafe'] = isset($data['isWarpSafe']) ? $data['isWarpSafe'] : null;
        $this->container['rangeChance'] = isset($data['rangeChance']) ? $data['rangeChance'] : null;
        $this->container['electronicChance'] = isset($data['electronicChance']) ? $data['electronicChance'] : null;
        $this->container['durationAttributeId'] = isset($data['durationAttributeId']) ? $data['durationAttributeId'] : null;
        $this->container['trackingSpeedAttributeId'] = isset($data['trackingSpeedAttributeId']) ? $data['trackingSpeedAttributeId'] : null;
        $this->container['dischargeAttributeId'] = isset($data['dischargeAttributeId']) ? $data['dischargeAttributeId'] : null;
        $this->container['rangeAttributeId'] = isset($data['rangeAttributeId']) ? $data['rangeAttributeId'] : null;
        $this->container['falloffAttributeId'] = isset($data['falloffAttributeId']) ? $data['falloffAttributeId'] : null;
        $this->container['modifiers'] = isset($data['modifiers']) ? $data['modifiers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['effectId'] === null) {
            $invalidProperties[] = "'effectId' can't be null";
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

        if ($this->container['effectId'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets effectId
     *
     * @return int
     */
    public function getEffectId()
    {
        return $this->container['effectId'];
    }

    /**
     * Sets effectId
     *
     * @param int $effectId effect_id integer
     *
     * @return $this
     */
    public function setEffectId($effectId)
    {
        $this->container['effectId'] = $effectId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name string
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string $displayName display_name string
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description string
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets iconId
     *
     * @return int
     */
    public function getIconId()
    {
        return $this->container['iconId'];
    }

    /**
     * Sets iconId
     *
     * @param int $iconId icon_id integer
     *
     * @return $this
     */
    public function setIconId($iconId)
    {
        $this->container['iconId'] = $iconId;

        return $this;
    }

    /**
     * Gets effectCategory
     *
     * @return int
     */
    public function getEffectCategory()
    {
        return $this->container['effectCategory'];
    }

    /**
     * Sets effectCategory
     *
     * @param int $effectCategory effect_category integer
     *
     * @return $this
     */
    public function setEffectCategory($effectCategory)
    {
        $this->container['effectCategory'] = $effectCategory;

        return $this;
    }

    /**
     * Gets preExpression
     *
     * @return int
     */
    public function getPreExpression()
    {
        return $this->container['preExpression'];
    }

    /**
     * Sets preExpression
     *
     * @param int $preExpression pre_expression integer
     *
     * @return $this
     */
    public function setPreExpression($preExpression)
    {
        $this->container['preExpression'] = $preExpression;

        return $this;
    }

    /**
     * Gets postExpression
     *
     * @return int
     */
    public function getPostExpression()
    {
        return $this->container['postExpression'];
    }

    /**
     * Sets postExpression
     *
     * @param int $postExpression post_expression integer
     *
     * @return $this
     */
    public function setPostExpression($postExpression)
    {
        $this->container['postExpression'] = $postExpression;

        return $this;
    }

    /**
     * Gets isOffensive
     *
     * @return bool
     */
    public function getIsOffensive()
    {
        return $this->container['isOffensive'];
    }

    /**
     * Sets isOffensive
     *
     * @param bool $isOffensive is_offensive boolean
     *
     * @return $this
     */
    public function setIsOffensive($isOffensive)
    {
        $this->container['isOffensive'] = $isOffensive;

        return $this;
    }

    /**
     * Gets isAssistance
     *
     * @return bool
     */
    public function getIsAssistance()
    {
        return $this->container['isAssistance'];
    }

    /**
     * Sets isAssistance
     *
     * @param bool $isAssistance is_assistance boolean
     *
     * @return $this
     */
    public function setIsAssistance($isAssistance)
    {
        $this->container['isAssistance'] = $isAssistance;

        return $this;
    }

    /**
     * Gets disallowAutoRepeat
     *
     * @return bool
     */
    public function getDisallowAutoRepeat()
    {
        return $this->container['disallowAutoRepeat'];
    }

    /**
     * Sets disallowAutoRepeat
     *
     * @param bool $disallowAutoRepeat disallow_auto_repeat boolean
     *
     * @return $this
     */
    public function setDisallowAutoRepeat($disallowAutoRepeat)
    {
        $this->container['disallowAutoRepeat'] = $disallowAutoRepeat;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published published boolean
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets isWarpSafe
     *
     * @return bool
     */
    public function getIsWarpSafe()
    {
        return $this->container['isWarpSafe'];
    }

    /**
     * Sets isWarpSafe
     *
     * @param bool $isWarpSafe is_warp_safe boolean
     *
     * @return $this
     */
    public function setIsWarpSafe($isWarpSafe)
    {
        $this->container['isWarpSafe'] = $isWarpSafe;

        return $this;
    }

    /**
     * Gets rangeChance
     *
     * @return bool
     */
    public function getRangeChance()
    {
        return $this->container['rangeChance'];
    }

    /**
     * Sets rangeChance
     *
     * @param bool $rangeChance range_chance boolean
     *
     * @return $this
     */
    public function setRangeChance($rangeChance)
    {
        $this->container['rangeChance'] = $rangeChance;

        return $this;
    }

    /**
     * Gets electronicChance
     *
     * @return bool
     */
    public function getElectronicChance()
    {
        return $this->container['electronicChance'];
    }

    /**
     * Sets electronicChance
     *
     * @param bool $electronicChance electronic_chance boolean
     *
     * @return $this
     */
    public function setElectronicChance($electronicChance)
    {
        $this->container['electronicChance'] = $electronicChance;

        return $this;
    }

    /**
     * Gets durationAttributeId
     *
     * @return int
     */
    public function getDurationAttributeId()
    {
        return $this->container['durationAttributeId'];
    }

    /**
     * Sets durationAttributeId
     *
     * @param int $durationAttributeId duration_attribute_id integer
     *
     * @return $this
     */
    public function setDurationAttributeId($durationAttributeId)
    {
        $this->container['durationAttributeId'] = $durationAttributeId;

        return $this;
    }

    /**
     * Gets trackingSpeedAttributeId
     *
     * @return int
     */
    public function getTrackingSpeedAttributeId()
    {
        return $this->container['trackingSpeedAttributeId'];
    }

    /**
     * Sets trackingSpeedAttributeId
     *
     * @param int $trackingSpeedAttributeId tracking_speed_attribute_id integer
     *
     * @return $this
     */
    public function setTrackingSpeedAttributeId($trackingSpeedAttributeId)
    {
        $this->container['trackingSpeedAttributeId'] = $trackingSpeedAttributeId;

        return $this;
    }

    /**
     * Gets dischargeAttributeId
     *
     * @return int
     */
    public function getDischargeAttributeId()
    {
        return $this->container['dischargeAttributeId'];
    }

    /**
     * Sets dischargeAttributeId
     *
     * @param int $dischargeAttributeId discharge_attribute_id integer
     *
     * @return $this
     */
    public function setDischargeAttributeId($dischargeAttributeId)
    {
        $this->container['dischargeAttributeId'] = $dischargeAttributeId;

        return $this;
    }

    /**
     * Gets rangeAttributeId
     *
     * @return int
     */
    public function getRangeAttributeId()
    {
        return $this->container['rangeAttributeId'];
    }

    /**
     * Sets rangeAttributeId
     *
     * @param int $rangeAttributeId range_attribute_id integer
     *
     * @return $this
     */
    public function setRangeAttributeId($rangeAttributeId)
    {
        $this->container['rangeAttributeId'] = $rangeAttributeId;

        return $this;
    }

    /**
     * Gets falloffAttributeId
     *
     * @return int
     */
    public function getFalloffAttributeId()
    {
        return $this->container['falloffAttributeId'];
    }

    /**
     * Sets falloffAttributeId
     *
     * @param int $falloffAttributeId falloff_attribute_id integer
     *
     * @return $this
     */
    public function setFalloffAttributeId($falloffAttributeId)
    {
        $this->container['falloffAttributeId'] = $falloffAttributeId;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return \nullx27ESI\nullx27\ESI\Models\GetDogmaEffectsEffectIdModifier[]
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param \nullx27ESI\nullx27\ESI\Models\GetDogmaEffectsEffectIdModifier[] $modifiers modifiers array
     *
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

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

