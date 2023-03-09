<?php
/**
 * PackageDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PackageDetails Class Doc Comment
 *
 * @category Class
 * @description Package details. Includes `packageItems`, `packageTimeSlot`, and `packageIdentifier`.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PackageDetails extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PackageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'package_items' => '\SellingPartnerApi\Model\EasyShipV20220323\Item[]',
        'package_time_slot' => '\SellingPartnerApi\Model\EasyShipV20220323\TimeSlot',
        'package_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'package_items' => null,
        'package_time_slot' => null,
        'package_identifier' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'package_items' => 'packageItems',
        'package_time_slot' => 'packageTimeSlot',
        'package_identifier' => 'packageIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_items' => 'setPackageItems',
        'package_time_slot' => 'setPackageTimeSlot',
        'package_identifier' => 'setPackageIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_items' => 'getPackageItems',
        'package_time_slot' => 'getPackageTimeSlot',
        'package_identifier' => 'getPackageIdentifier'
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
        $this->container['package_items'] = $data['package_items'] ?? null;
        $this->container['package_time_slot'] = $data['package_time_slot'] ?? null;
        $this->container['package_identifier'] = $data['package_identifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['package_items']) && (count($this->container['package_items']) > 500)) {
            $invalidProperties[] = "invalid value for 'package_items', number of items must be less than or equal to 500.";
        }

        if ($this->container['package_time_slot'] === null) {
            $invalidProperties[] = "'package_time_slot' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets package_items
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null
     */
    public function getPackageItems()
    {
        return $this->container['package_items'];
    }

    /**
     * Sets package_items
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Item[]|null $package_items A list of items contained in the package.
     *
     * @return self
     */
    public function setPackageItems($package_items)
    {

        if (!is_null($package_items) && (count($package_items) > 500)) {
            throw new \InvalidArgumentException('invalid value for $package_items when calling PackageDetails., number of items must be less than or equal to 500.');
        }
        $this->container['package_items'] = $package_items;

        return $this;
    }
    /**
     * Gets package_time_slot
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot
     */
    public function getPackageTimeSlot()
    {
        return $this->container['package_time_slot'];
    }

    /**
     * Sets package_time_slot
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\TimeSlot $package_time_slot package_time_slot
     *
     * @return self
     */
    public function setPackageTimeSlot($package_time_slot)
    {
        $this->container['package_time_slot'] = $package_time_slot;

        return $this;
    }
    /**
     * Gets package_identifier
     *
     * @return string|null
     */
    public function getPackageIdentifier()
    {
        return $this->container['package_identifier'];
    }

    /**
     * Sets package_identifier
     *
     * @param string|null $package_identifier Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     *
     * @return self
     */
    public function setPackageIdentifier($package_identifier)
    {
        $this->container['package_identifier'] = $package_identifier;

        return $this;
    }
}


