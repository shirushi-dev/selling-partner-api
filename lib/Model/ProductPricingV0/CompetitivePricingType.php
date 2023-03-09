<?php
/**
 * CompetitivePricingType
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
 * CompetitivePricingType Class Doc Comment
 *
 * @category Class
 * @description Competitive pricing information for the item.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CompetitivePricingType extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompetitivePricingType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'competitive_prices' => '\SellingPartnerApi\Model\ProductPricingV0\CompetitivePriceType[]',
        'number_of_offer_listings' => '\SellingPartnerApi\Model\ProductPricingV0\OfferListingCountType[]',
        'trade_in_value' => '\SellingPartnerApi\Model\ProductPricingV0\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'competitive_prices' => null,
        'number_of_offer_listings' => null,
        'trade_in_value' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'competitive_prices' => 'CompetitivePrices',
        'number_of_offer_listings' => 'NumberOfOfferListings',
        'trade_in_value' => 'TradeInValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'competitive_prices' => 'setCompetitivePrices',
        'number_of_offer_listings' => 'setNumberOfOfferListings',
        'trade_in_value' => 'setTradeInValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'competitive_prices' => 'getCompetitivePrices',
        'number_of_offer_listings' => 'getNumberOfOfferListings',
        'trade_in_value' => 'getTradeInValue'
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
        $this->container['competitive_prices'] = $data['competitive_prices'] ?? null;
        $this->container['number_of_offer_listings'] = $data['number_of_offer_listings'] ?? null;
        $this->container['trade_in_value'] = $data['trade_in_value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['competitive_prices'] === null) {
            $invalidProperties[] = "'competitive_prices' can't be null";
        }
        if ($this->container['number_of_offer_listings'] === null) {
            $invalidProperties[] = "'number_of_offer_listings' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets competitive_prices
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\CompetitivePriceType[]
     */
    public function getCompetitivePrices()
    {
        return $this->container['competitive_prices'];
    }

    /**
     * Sets competitive_prices
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\CompetitivePriceType[] $competitive_prices A list of competitive pricing information.
     *
     * @return self
     */
    public function setCompetitivePrices($competitive_prices)
    {
        $this->container['competitive_prices'] = $competitive_prices;

        return $this;
    }
    /**
     * Gets number_of_offer_listings
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\OfferListingCountType[]
     */
    public function getNumberOfOfferListings()
    {
        return $this->container['number_of_offer_listings'];
    }

    /**
     * Sets number_of_offer_listings
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\OfferListingCountType[] $number_of_offer_listings The number of active offer listings for the item that was submitted. The listing count is returned by condition, one for each listing condition value that is returned.
     *
     * @return self
     */
    public function setNumberOfOfferListings($number_of_offer_listings)
    {
        $this->container['number_of_offer_listings'] = $number_of_offer_listings;

        return $this;
    }
    /**
     * Gets trade_in_value
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\MoneyType|null
     */
    public function getTradeInValue()
    {
        return $this->container['trade_in_value'];
    }

    /**
     * Sets trade_in_value
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\MoneyType|null $trade_in_value trade_in_value
     *
     * @return self
     */
    public function setTradeInValue($trade_in_value)
    {
        $this->container['trade_in_value'] = $trade_in_value;

        return $this;
    }
}


