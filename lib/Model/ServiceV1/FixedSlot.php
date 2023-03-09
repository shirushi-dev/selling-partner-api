<?php
/**
 * FixedSlot
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ServiceV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * FixedSlot Class Doc Comment
 *
 * @category Class
 * @description In this slot format each slot only has the requested capacity types. This slot size is as specified by slot duration.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FixedSlot extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FixedSlot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date_time' => 'string',
        'scheduled_capacity' => 'int',
        'available_capacity' => 'int',
        'encumbered_capacity' => 'int',
        'reserved_capacity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date_time' => null,
        'scheduled_capacity' => 'int32',
        'available_capacity' => 'int32',
        'encumbered_capacity' => 'int32',
        'reserved_capacity' => 'int32'
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'start_date_time' => 'startDateTime',
        'scheduled_capacity' => 'scheduledCapacity',
        'available_capacity' => 'availableCapacity',
        'encumbered_capacity' => 'encumberedCapacity',
        'reserved_capacity' => 'reservedCapacity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date_time' => 'setStartDateTime',
        'scheduled_capacity' => 'setScheduledCapacity',
        'available_capacity' => 'setAvailableCapacity',
        'encumbered_capacity' => 'setEncumberedCapacity',
        'reserved_capacity' => 'setReservedCapacity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date_time' => 'getStartDateTime',
        'scheduled_capacity' => 'getScheduledCapacity',
        'available_capacity' => 'getAvailableCapacity',
        'encumbered_capacity' => 'getEncumberedCapacity',
        'reserved_capacity' => 'getReservedCapacity'
    ];


    
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
        $this->container['start_date_time'] = $data['start_date_time'] ?? null;
        $this->container['scheduled_capacity'] = $data['scheduled_capacity'] ?? null;
        $this->container['available_capacity'] = $data['available_capacity'] ?? null;
        $this->container['encumbered_capacity'] = $data['encumbered_capacity'] ?? null;
        $this->container['reserved_capacity'] = $data['reserved_capacity'] ?? null;
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
     * Gets start_date_time
     *
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param string|null $start_date_time Start date time of slot in ISO 8601 format with precision of seconds.
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }
    /**
     * Gets scheduled_capacity
     *
     * @return int|null
     */
    public function getScheduledCapacity()
    {
        return $this->container['scheduled_capacity'];
    }

    /**
     * Sets scheduled_capacity
     *
     * @param int|null $scheduled_capacity Scheduled capacity corresponding to the slot. This capacity represents the originally allocated capacity as per resource schedule.
     *
     * @return self
     */
    public function setScheduledCapacity($scheduled_capacity)
    {
        $this->container['scheduled_capacity'] = $scheduled_capacity;

        return $this;
    }
    /**
     * Gets available_capacity
     *
     * @return int|null
     */
    public function getAvailableCapacity()
    {
        return $this->container['available_capacity'];
    }

    /**
     * Sets available_capacity
     *
     * @param int|null $available_capacity Available capacity corresponding to the slot. This capacity represents the capacity available for allocation to reservations.
     *
     * @return self
     */
    public function setAvailableCapacity($available_capacity)
    {
        $this->container['available_capacity'] = $available_capacity;

        return $this;
    }
    /**
     * Gets encumbered_capacity
     *
     * @return int|null
     */
    public function getEncumberedCapacity()
    {
        return $this->container['encumbered_capacity'];
    }

    /**
     * Sets encumbered_capacity
     *
     * @param int|null $encumbered_capacity Encumbered capacity corresponding to the slot. This capacity represents the capacity allocated for Amazon Jobs/Appointments/Orders.
     *
     * @return self
     */
    public function setEncumberedCapacity($encumbered_capacity)
    {
        $this->container['encumbered_capacity'] = $encumbered_capacity;

        return $this;
    }
    /**
     * Gets reserved_capacity
     *
     * @return int|null
     */
    public function getReservedCapacity()
    {
        return $this->container['reserved_capacity'];
    }

    /**
     * Sets reserved_capacity
     *
     * @param int|null $reserved_capacity Reserved capacity corresponding to the slot. This capacity represents the capacity made unavailable due to events like Breaks/Leaves/Lunch.
     *
     * @return self
     */
    public function setReservedCapacity($reserved_capacity)
    {
        $this->container['reserved_capacity'] = $reserved_capacity;

        return $this;
    }
}


