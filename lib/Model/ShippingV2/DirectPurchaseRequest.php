<?php
/**
 * DirectPurchaseRequest
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * DirectPurchaseRequest Class Doc Comment
 *
 * @category Class
 * @description The request schema for the directPurchaseShipment operation. When the channel type is Amazon, the shipTo address is not required and will be ignored.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DirectPurchaseRequest implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DirectPurchaseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_to' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'ship_from' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'return_to' => '\SellingPartnerApi\Model\ShippingV2\Address',
        'packages' => '\SellingPartnerApi\Model\ShippingV2\Package[]',
        'channel_details' => '\SellingPartnerApi\Model\ShippingV2\ChannelDetails',
        'label_specifications' => '\SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ship_to' => null,
        'ship_from' => null,
        'return_to' => null,
        'packages' => null,
        'channel_details' => null,
        'label_specifications' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'return_to' => 'returnTo',
        'packages' => 'packages',
        'channel_details' => 'channelDetails',
        'label_specifications' => 'labelSpecifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'return_to' => 'setReturnTo',
        'packages' => 'setPackages',
        'channel_details' => 'setChannelDetails',
        'label_specifications' => 'setLabelSpecifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'return_to' => 'getReturnTo',
        'packages' => 'getPackages',
        'channel_details' => 'getChannelDetails',
        'label_specifications' => 'getLabelSpecifications'
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
        return self::$openAPIModelName;
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
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['return_to'] = $data['return_to'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['channel_details'] = $data['channel_details'] ?? null;
        $this->container['label_specifications'] = $data['label_specifications'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['channel_details'] === null) {
            $invalidProperties[] = "'channel_details' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ship_to
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address|null
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address|null $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }
    /**
     * Gets ship_from
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address|null
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address|null $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }
    /**
     * Gets return_to
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Address|null
     */
    public function getReturnTo()
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Address|null $return_to return_to
     *
     * @return self
     */
    public function setReturnTo($return_to)
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }
    /**
     * Gets packages
     *
     * @return \SellingPartnerApi\Model\ShippingV2\Package[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \SellingPartnerApi\Model\ShippingV2\Package[]|null $packages A list of packages to be shipped through a shipping service offering.
     *
     * @return self
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }
    /**
     * Gets channel_details
     *
     * @return \SellingPartnerApi\Model\ShippingV2\ChannelDetails
     */
    public function getChannelDetails()
    {
        return $this->container['channel_details'];
    }

    /**
     * Sets channel_details
     *
     * @param \SellingPartnerApi\Model\ShippingV2\ChannelDetails $channel_details channel_details
     *
     * @return self
     */
    public function setChannelDetails($channel_details)
    {
        $this->container['channel_details'] = $channel_details;

        return $this;
    }
    /**
     * Gets label_specifications
     *
     * @return \SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification|null
     */
    public function getLabelSpecifications()
    {
        return $this->container['label_specifications'];
    }

    /**
     * Sets label_specifications
     *
     * @param \SellingPartnerApi\Model\ShippingV2\RequestedDocumentSpecification|null $label_specifications label_specifications
     *
     * @return self
     */
    public function setLabelSpecifications($label_specifications)
    {
        $this->container['label_specifications'] = $label_specifications;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\ShippingV2\DirectPurchaseRequest
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


