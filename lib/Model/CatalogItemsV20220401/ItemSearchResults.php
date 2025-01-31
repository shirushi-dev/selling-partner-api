<?php
/**
 * ItemSearchResults
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, refer to the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogItemsV20220401;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemSearchResults Class Doc Comment
 *
 * @category Class
 * @description Items in the Amazon catalog and search related metadata.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemSearchResults extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemSearchResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number_of_results' => 'int',
        'pagination' => '\SellingPartnerApi\Model\CatalogItemsV20220401\Pagination',
        'refinements' => '\SellingPartnerApi\Model\CatalogItemsV20220401\Refinements',
        'items' => '\SellingPartnerApi\Model\CatalogItemsV20220401\Item[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number_of_results' => null,
        'pagination' => null,
        'refinements' => null,
        'items' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'headers' => 'headers',
        'number_of_results' => 'numberOfResults',
        'pagination' => 'pagination',
        'refinements' => 'refinements',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headers' => 'setHeaders',
        'number_of_results' => 'setNumberOfResults',
        'pagination' => 'setPagination',
        'refinements' => 'setRefinements',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headers' => 'getHeaders',
        'number_of_results' => 'getNumberOfResults',
        'pagination' => 'getPagination',
        'refinements' => 'getRefinements',
        'items' => 'getItems'
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
        $this->container['number_of_results'] = $data['number_of_results'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
        $this->container['refinements'] = $data['refinements'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['number_of_results'] === null) {
            $invalidProperties[] = "'number_of_results' can't be null";
        }
        if ($this->container['pagination'] === null) {
            $invalidProperties[] = "'pagination' can't be null";
        }
        if ($this->container['refinements'] === null) {
            $invalidProperties[] = "'refinements' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets number_of_results
     *
     * @return int
     */
    public function getNumberOfResults()
    {
        return $this->container['number_of_results'];
    }

    /**
     * Sets number_of_results
     *
     * @param int $number_of_results For `identifiers`-based searches, the total number of Amazon catalog items found. For `keywords`-based searches, the estimated total number of Amazon catalog items matched by the search query (only results up to the page count limit will be returned per request regardless of the number found).
     *   Note: The maximum number of items (ASINs) that can be returned and paged through is 1000.
     *
     * @return self
     */
    public function setNumberOfResults($number_of_results)
    {
        $this->container['number_of_results'] = $number_of_results;

        return $this;
    }
    /**
     * Gets pagination
     *
     * @return \SellingPartnerApi\Model\CatalogItemsV20220401\Pagination
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \SellingPartnerApi\Model\CatalogItemsV20220401\Pagination $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination)
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }
    /**
     * Gets refinements
     *
     * @return \SellingPartnerApi\Model\CatalogItemsV20220401\Refinements
     */
    public function getRefinements()
    {
        return $this->container['refinements'];
    }

    /**
     * Sets refinements
     *
     * @param \SellingPartnerApi\Model\CatalogItemsV20220401\Refinements $refinements refinements
     *
     * @return self
     */
    public function setRefinements($refinements)
    {
        $this->container['refinements'] = $refinements;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\CatalogItemsV20220401\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\CatalogItemsV20220401\Item[] $items A list of items from the Amazon catalog.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }
}


