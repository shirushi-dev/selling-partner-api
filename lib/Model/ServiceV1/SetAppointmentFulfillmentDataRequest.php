<?php
/**
 * SetAppointmentFulfillmentDataRequest
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
 * SetAppointmentFulfillmentDataRequest Class Doc Comment
 *
 * @category Class
 * @description Input for set appointment fulfillment data operation.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SetAppointmentFulfillmentDataRequest extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetAppointmentFulfillmentDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_time' => '\SellingPartnerApi\Model\ServiceV1\FulfillmentTime',
        'appointment_resources' => '\SellingPartnerApi\Model\ServiceV1\AppointmentResource[]',
        'fulfillment_documents' => '\SellingPartnerApi\Model\ServiceV1\FulfillmentDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillment_time' => null,
        'appointment_resources' => null,
        'fulfillment_documents' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_time' => 'fulfillmentTime',
        'appointment_resources' => 'appointmentResources',
        'fulfillment_documents' => 'fulfillmentDocuments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_time' => 'setFulfillmentTime',
        'appointment_resources' => 'setAppointmentResources',
        'fulfillment_documents' => 'setFulfillmentDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_time' => 'getFulfillmentTime',
        'appointment_resources' => 'getAppointmentResources',
        'fulfillment_documents' => 'getFulfillmentDocuments'
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
        $this->container['fulfillment_time'] = $data['fulfillment_time'] ?? null;
        $this->container['appointment_resources'] = $data['appointment_resources'] ?? null;
        $this->container['fulfillment_documents'] = $data['fulfillment_documents'] ?? null;
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
     * Gets fulfillment_time
     *
     * @return \SellingPartnerApi\Model\ServiceV1\FulfillmentTime|null
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time
     *
     * @param \SellingPartnerApi\Model\ServiceV1\FulfillmentTime|null $fulfillment_time fulfillment_time
     *
     * @return self
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        $this->container['fulfillment_time'] = $fulfillment_time;

        return $this;
    }
    /**
     * Gets appointment_resources
     *
     * @return \SellingPartnerApi\Model\ServiceV1\AppointmentResource[]|null
     */
    public function getAppointmentResources()
    {
        return $this->container['appointment_resources'];
    }

    /**
     * Sets appointment_resources
     *
     * @param \SellingPartnerApi\Model\ServiceV1\AppointmentResource[]|null $appointment_resources List of resources that performs or performed job appointment fulfillment.
     *
     * @return self
     */
    public function setAppointmentResources($appointment_resources)
    {
        $this->container['appointment_resources'] = $appointment_resources;

        return $this;
    }
    /**
     * Gets fulfillment_documents
     *
     * @return \SellingPartnerApi\Model\ServiceV1\FulfillmentDocument[]|null
     */
    public function getFulfillmentDocuments()
    {
        return $this->container['fulfillment_documents'];
    }

    /**
     * Sets fulfillment_documents
     *
     * @param \SellingPartnerApi\Model\ServiceV1\FulfillmentDocument[]|null $fulfillment_documents List of documents captured during service appointment fulfillment.
     *
     * @return self
     */
    public function setFulfillmentDocuments($fulfillment_documents)
    {
        $this->container['fulfillment_documents'] = $fulfillment_documents;

        return $this;
    }
}


