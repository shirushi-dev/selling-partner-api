<?php
/**
 * OfferType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * OfferType Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OfferType extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_type' => '\SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType',
        'buying_price' => '\SellingPartnerApi\Model\ProductPricingV0\PriceType',
        'regular_price' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType',
        'business_price' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType',
        'quantity_discount_prices' => '\SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountPriceType[]',
        'fulfillment_channel' => 'string',
        'item_condition' => 'string',
        'item_sub_condition' => 'string',
        'seller_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_type' => null,
        'buying_price' => null,
        'regular_price' => null,
        'business_price' => null,
        'quantity_discount_prices' => null,
        'fulfillment_channel' => null,
        'item_condition' => null,
        'item_sub_condition' => null,
        'seller_sku' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'offer_type' => 'offerType',
        'buying_price' => 'BuyingPrice',
        'regular_price' => 'RegularPrice',
        'business_price' => 'businessPrice',
        'quantity_discount_prices' => 'quantityDiscountPrices',
        'fulfillment_channel' => 'FulfillmentChannel',
        'item_condition' => 'ItemCondition',
        'item_sub_condition' => 'ItemSubCondition',
        'seller_sku' => 'SellerSKU'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_type' => 'setOfferType',
        'buying_price' => 'setBuyingPrice',
        'regular_price' => 'setRegularPrice',
        'business_price' => 'setBusinessPrice',
        'quantity_discount_prices' => 'setQuantityDiscountPrices',
        'fulfillment_channel' => 'setFulfillmentChannel',
        'item_condition' => 'setItemCondition',
        'item_sub_condition' => 'setItemSubCondition',
        'seller_sku' => 'setSellerSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_type' => 'getOfferType',
        'buying_price' => 'getBuyingPrice',
        'regular_price' => 'getRegularPrice',
        'business_price' => 'getBusinessPrice',
        'quantity_discount_prices' => 'getQuantityDiscountPrices',
        'fulfillment_channel' => 'getFulfillmentChannel',
        'item_condition' => 'getItemCondition',
        'item_sub_condition' => 'getItemSubCondition',
        'seller_sku' => 'getSellerSku'
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
        $this->container['offer_type'] = $data['offer_type'] ?? null;
        $this->container['buying_price'] = $data['buying_price'] ?? null;
        $this->container['regular_price'] = $data['regular_price'] ?? null;
        $this->container['business_price'] = $data['business_price'] ?? null;
        $this->container['quantity_discount_prices'] = $data['quantity_discount_prices'] ?? null;
        $this->container['fulfillment_channel'] = $data['fulfillment_channel'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['item_sub_condition'] = $data['item_sub_condition'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buying_price'] === null) {
            $invalidProperties[] = "'buying_price' can't be null";
        }
        if ($this->container['regular_price'] === null) {
            $invalidProperties[] = "'regular_price' can't be null";
        }
        if ($this->container['fulfillment_channel'] === null) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if ($this->container['item_sub_condition'] === null) {
            $invalidProperties[] = "'item_sub_condition' can't be null";
        }
        if ($this->container['seller_sku'] === null) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets offer_type
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType|null
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\OfferCustomerType|null $offer_type offer_type
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        $this->container['offer_type'] = $offer_type;

        return $this;
    }
    /**
     * Gets buying_price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\PriceType
     */
    public function getBuyingPrice()
    {
        return $this->container['buying_price'];
    }

    /**
     * Sets buying_price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\PriceType $buying_price buying_price
     *
     * @return self
     */
    public function setBuyingPrice($buying_price)
    {
        $this->container['buying_price'] = $buying_price;

        return $this;
    }
    /**
     * Gets regular_price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType
     */
    public function getRegularPrice()
    {
        return $this->container['regular_price'];
    }

    /**
     * Sets regular_price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType $regular_price regular_price
     *
     * @return self
     */
    public function setRegularPrice($regular_price)
    {
        $this->container['regular_price'] = $regular_price;

        return $this;
    }
    /**
     * Gets business_price
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType|null
     */
    public function getBusinessPrice()
    {
        return $this->container['business_price'];
    }

    /**
     * Sets business_price
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType|null $business_price business_price
     *
     * @return self
     */
    public function setBusinessPrice($business_price)
    {
        $this->container['business_price'] = $business_price;

        return $this;
    }
    /**
     * Gets quantity_discount_prices
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountPriceType[]|null
     */
    public function getQuantityDiscountPrices()
    {
        return $this->container['quantity_discount_prices'];
    }

    /**
     * Sets quantity_discount_prices
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\QuantityDiscountPriceType[]|null $quantity_discount_prices quantity_discount_prices
     *
     * @return self
     */
    public function setQuantityDiscountPrices($quantity_discount_prices)
    {
        $this->container['quantity_discount_prices'] = $quantity_discount_prices;

        return $this;
    }
    /**
     * Gets fulfillment_channel
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel
     *
     * @param string $fulfillment_channel The fulfillment channel for the offer listing. Possible values: * Amazon - Fulfilled by Amazon. * Merchant - Fulfilled by the seller.
     *
     * @return self
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }
    /**
     * Gets item_condition
     *
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param string $item_condition The item condition for the offer listing. Possible values: New, Used, Collectible, Refurbished, or Club.
     *
     * @return self
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }
    /**
     * Gets item_sub_condition
     *
     * @return string
     */
    public function getItemSubCondition()
    {
        return $this->container['item_sub_condition'];
    }

    /**
     * Sets item_sub_condition
     *
     * @param string $item_sub_condition The item subcondition for the offer listing. Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, or Other.
     *
     * @return self
     */
    public function setItemSubCondition($item_sub_condition)
    {
        $this->container['item_sub_condition'] = $item_sub_condition;

        return $this;
    }
    /**
     * Gets seller_sku
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string $seller_sku The seller stock keeping unit (SKU) of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
}


