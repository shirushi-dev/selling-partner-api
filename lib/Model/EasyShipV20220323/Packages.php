<?php
/**
 * Packages
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
 * Packages Class Doc Comment
 *
 * @category Class
 * @description A list of packages.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Packages extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Packages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'packages' => '\SellingPartnerApi\Model\EasyShipV20220323\Package[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'packages' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'packages' => 'packages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'packages' => 'setPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'packages' => 'getPackages'
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
        $this->container['packages'] = $data['packages'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
        if ((count($this->container['packages']) > 500)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be less than or equal to 500.";
        }

        if ((count($this->container['packages']) < 1)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be greater than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Gets API response headers
     *
     * @return array[string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets API response headers (only relevant to response models)
     *
     * @param array[string => string] $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;
        return $this;
    }

    /**
     * Gets packages
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Package[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Package[] $packages packages
     *
     * @return self
     */
    public function setPackages($packages)
    {

        if ((count($packages) > 500)) {
            throw new \InvalidArgumentException('invalid value for $packages when calling Packages., number of items must be less than or equal to 500.');
        }
        if ((count($packages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $packages when calling Packages., number of items must be greater than or equal to 1.');
        }
        $this->container['packages'] = $packages;

        return $this;
    }
}


