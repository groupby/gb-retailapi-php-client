<?php
/**
 * ProductDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GroupBy Retail
 *
 * GroupBy Retail API
 *
 * The version of the OpenAPI document: 0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Groupby\RetailApiClient\Model;

use \ArrayAccess;
use \Groupby\RetailApiClient\ObjectSerializer;

/**
 * ProductDto Class Doc Comment
 *
 * @category Class
 * @description Product representation.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProductDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'string',
        'type' => 'string',
        'primary_product_id' => 'string',
        'collection_member_ids' => 'string[]',
        'gtin' => 'string',
        'categories' => 'string[]',
        'title' => 'string',
        'brands' => 'string[]',
        'description' => 'string',
        'language_code' => 'string',
        'attributes' => 'array<string,\Groupby\RetailApiClient\Model\ProductCustomAttribute>',
        'tags' => 'string[]',
        'price_info' => '\Groupby\RetailApiClient\Model\ProductDtoPriceInfo',
        'rating' => '\Groupby\RetailApiClient\Model\ProductDtoRating',
        'available_time' => '\Groupby\RetailApiClient\Model\ProductDtoAvailableTime',
        'availability' => 'string',
        'available_quantity' => 'int',
        'fulfillment_infos' => '\Groupby\RetailApiClient\Model\FulfillmentInfo[]',
        'uri' => 'string',
        'images' => '\Groupby\RetailApiClient\Model\Image[]',
        'audience' => '\Groupby\RetailApiClient\Model\ProductDtoAudience',
        'color_info' => '\Groupby\RetailApiClient\Model\ProductDtoColorInfo',
        'sizes' => 'string[]',
        'materials' => 'string[]',
        'patterns' => 'string[]',
        'conditions' => 'string[]',
        'publish_time' => '\Groupby\RetailApiClient\Model\ProductDtoPublishTime',
        'retrievable_fields' => '\Groupby\RetailApiClient\Model\ProductDtoRetrievableFields',
        'promotions' => '\Groupby\RetailApiClient\Model\Promotion[]',
        'variants' => '\Groupby\RetailApiClient\Model\ProductDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'type' => null,
        'primary_product_id' => null,
        'collection_member_ids' => null,
        'gtin' => null,
        'categories' => null,
        'title' => null,
        'brands' => null,
        'description' => null,
        'language_code' => null,
        'attributes' => null,
        'tags' => null,
        'price_info' => null,
        'rating' => null,
        'available_time' => null,
        'availability' => null,
        'available_quantity' => 'int32',
        'fulfillment_infos' => null,
        'uri' => null,
        'images' => null,
        'audience' => null,
        'color_info' => null,
        'sizes' => null,
        'materials' => null,
        'patterns' => null,
        'conditions' => null,
        'publish_time' => null,
        'retrievable_fields' => null,
        'promotions' => null,
        'variants' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'id' => false,
		'type' => false,
		'primary_product_id' => false,
		'collection_member_ids' => false,
		'gtin' => false,
		'categories' => false,
		'title' => false,
		'brands' => false,
		'description' => false,
		'language_code' => false,
		'attributes' => false,
		'tags' => false,
		'price_info' => false,
		'rating' => false,
		'available_time' => false,
		'availability' => false,
		'available_quantity' => false,
		'fulfillment_infos' => false,
		'uri' => false,
		'images' => false,
		'audience' => false,
		'color_info' => false,
		'sizes' => false,
		'materials' => false,
		'patterns' => false,
		'conditions' => false,
		'publish_time' => false,
		'retrievable_fields' => false,
		'promotions' => false,
		'variants' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'id' => 'id',
        'type' => 'type',
        'primary_product_id' => 'primaryProductId',
        'collection_member_ids' => 'collectionMemberIds',
        'gtin' => 'gtin',
        'categories' => 'categories',
        'title' => 'title',
        'brands' => 'brands',
        'description' => 'description',
        'language_code' => 'languageCode',
        'attributes' => 'attributes',
        'tags' => 'tags',
        'price_info' => 'priceInfo',
        'rating' => 'rating',
        'available_time' => 'availableTime',
        'availability' => 'availability',
        'available_quantity' => 'availableQuantity',
        'fulfillment_infos' => 'fulfillmentInfos',
        'uri' => 'uri',
        'images' => 'images',
        'audience' => 'audience',
        'color_info' => 'colorInfo',
        'sizes' => 'sizes',
        'materials' => 'materials',
        'patterns' => 'patterns',
        'conditions' => 'conditions',
        'publish_time' => 'publishTime',
        'retrievable_fields' => 'retrievableFields',
        'promotions' => 'promotions',
        'variants' => 'variants'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'type' => 'setType',
        'primary_product_id' => 'setPrimaryProductId',
        'collection_member_ids' => 'setCollectionMemberIds',
        'gtin' => 'setGtin',
        'categories' => 'setCategories',
        'title' => 'setTitle',
        'brands' => 'setBrands',
        'description' => 'setDescription',
        'language_code' => 'setLanguageCode',
        'attributes' => 'setAttributes',
        'tags' => 'setTags',
        'price_info' => 'setPriceInfo',
        'rating' => 'setRating',
        'available_time' => 'setAvailableTime',
        'availability' => 'setAvailability',
        'available_quantity' => 'setAvailableQuantity',
        'fulfillment_infos' => 'setFulfillmentInfos',
        'uri' => 'setUri',
        'images' => 'setImages',
        'audience' => 'setAudience',
        'color_info' => 'setColorInfo',
        'sizes' => 'setSizes',
        'materials' => 'setMaterials',
        'patterns' => 'setPatterns',
        'conditions' => 'setConditions',
        'publish_time' => 'setPublishTime',
        'retrievable_fields' => 'setRetrievableFields',
        'promotions' => 'setPromotions',
        'variants' => 'setVariants'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'type' => 'getType',
        'primary_product_id' => 'getPrimaryProductId',
        'collection_member_ids' => 'getCollectionMemberIds',
        'gtin' => 'getGtin',
        'categories' => 'getCategories',
        'title' => 'getTitle',
        'brands' => 'getBrands',
        'description' => 'getDescription',
        'language_code' => 'getLanguageCode',
        'attributes' => 'getAttributes',
        'tags' => 'getTags',
        'price_info' => 'getPriceInfo',
        'rating' => 'getRating',
        'available_time' => 'getAvailableTime',
        'availability' => 'getAvailability',
        'available_quantity' => 'getAvailableQuantity',
        'fulfillment_infos' => 'getFulfillmentInfos',
        'uri' => 'getUri',
        'images' => 'getImages',
        'audience' => 'getAudience',
        'color_info' => 'getColorInfo',
        'sizes' => 'getSizes',
        'materials' => 'getMaterials',
        'patterns' => 'getPatterns',
        'conditions' => 'getConditions',
        'publish_time' => 'getPublishTime',
        'retrievable_fields' => 'getRetrievableFields',
        'promotions' => 'getPromotions',
        'variants' => 'getVariants'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('primary_product_id', $data ?? [], null);
        $this->setIfExists('collection_member_ids', $data ?? [], null);
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('brands', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('price_info', $data ?? [], null);
        $this->setIfExists('rating', $data ?? [], null);
        $this->setIfExists('available_time', $data ?? [], null);
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('available_quantity', $data ?? [], null);
        $this->setIfExists('fulfillment_infos', $data ?? [], null);
        $this->setIfExists('uri', $data ?? [], null);
        $this->setIfExists('images', $data ?? [], null);
        $this->setIfExists('audience', $data ?? [], null);
        $this->setIfExists('color_info', $data ?? [], null);
        $this->setIfExists('sizes', $data ?? [], null);
        $this->setIfExists('materials', $data ?? [], null);
        $this->setIfExists('patterns', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
        $this->setIfExists('publish_time', $data ?? [], null);
        $this->setIfExists('retrievable_fields', $data ?? [], null);
        $this->setIfExists('promotions', $data ?? [], null);
        $this->setIfExists('variants', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Relative path to product in Google Retail system.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Product id in Google Retail system.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Product type. Possible values: PRIMARY, VARIANT. If the product has variant list and the request specifies the variantIds, requested variants will be the first in the response.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets primary_product_id
     *
     * @return string|null
     */
    public function getPrimaryProductId()
    {
        return $this->container['primary_product_id'];
    }

    /**
     * Sets primary_product_id
     *
     * @param string|null $primary_product_id Product ID that is primary in relation to the current one
     *
     * @return self
     */
    public function setPrimaryProductId($primary_product_id)
    {
        if (is_null($primary_product_id)) {
            throw new \InvalidArgumentException('non-nullable primary_product_id cannot be null');
        }
        $this->container['primary_product_id'] = $primary_product_id;

        return $this;
    }

    /**
     * Gets collection_member_ids
     *
     * @return string[]|null
     */
    public function getCollectionMemberIds()
    {
        return $this->container['collection_member_ids'];
    }

    /**
     * Sets collection_member_ids
     *
     * @param string[]|null $collection_member_ids The of the collection members when product type is COLLECTION
     *
     * @return self
     */
    public function setCollectionMemberIds($collection_member_ids)
    {
        if (is_null($collection_member_ids)) {
            throw new \InvalidArgumentException('non-nullable collection_member_ids cannot be null');
        }
        $this->container['collection_member_ids'] = $collection_member_ids;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string|null
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin Global Trade Item Number can be used by a company to uniquely identify all of its trade items.GTIN defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain.
     *
     * @return self
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Product categories (array).
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Product title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets brands
     *
     * @return string[]|null
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     *
     * @param string[]|null $brands Product brands.
     *
     * @return self
     */
    public function setBrands($brands)
    {
        if (is_null($brands)) {
            throw new \InvalidArgumentException('non-nullable brands cannot be null');
        }
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Product description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code Language of the title/description and other string attributes. Use language tags defined by [BCP 47][https://www.rfc-editor.org/rfc/bcp/bcp47.txt]. For product search this field is in use. It defaults to 'en-US' if unset.
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return array<string,\Groupby\RetailApiClient\Model\ProductCustomAttribute>|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param array<string,\Groupby\RetailApiClient\Model\ProductCustomAttribute>|null $attributes Highly encouraged. Extra product attributes to be included. For example, for products, this could include the store name, vendor, style, color, etc. These are very strong signals for recommendation model, thus we highly recommend providing the attributes here. Features that can take on one of a limited number of possible values. Two types of features can be set are: Textual features. some examples would be the brand/maker of a product, or country of a customer. Numerical features. Some examples would be the height/weight of a product, or age of a customer.  Max entries count: 200. Length limit of 128 characters.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Product tags (array).
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets price_info
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoPriceInfo|null
     */
    public function getPriceInfo()
    {
        return $this->container['price_info'];
    }

    /**
     * Sets price_info
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoPriceInfo|null $price_info price_info
     *
     * @return self
     */
    public function setPriceInfo($price_info)
    {
        if (is_null($price_info)) {
            throw new \InvalidArgumentException('non-nullable price_info cannot be null');
        }
        $this->container['price_info'] = $price_info;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoRating|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoRating|null $rating rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        if (is_null($rating)) {
            throw new \InvalidArgumentException('non-nullable rating cannot be null');
        }
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets available_time
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoAvailableTime|null
     */
    public function getAvailableTime()
    {
        return $this->container['available_time'];
    }

    /**
     * Sets available_time
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoAvailableTime|null $available_time available_time
     *
     * @return self
     */
    public function setAvailableTime($available_time)
    {
        if (is_null($available_time)) {
            throw new \InvalidArgumentException('non-nullable available_time cannot be null');
        }
        $this->container['available_time'] = $available_time;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string|null $availability The online availability of the product. Default to IN_STOCK
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets available_quantity
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int|null $available_quantity The available quantity of the item.
     *
     * @return self
     */
    public function setAvailableQuantity($available_quantity)
    {
        if (is_null($available_quantity)) {
            throw new \InvalidArgumentException('non-nullable available_quantity cannot be null');
        }
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets fulfillment_infos
     *
     * @return \Groupby\RetailApiClient\Model\FulfillmentInfo[]|null
     */
    public function getFulfillmentInfos()
    {
        return $this->container['fulfillment_infos'];
    }

    /**
     * Sets fulfillment_infos
     *
     * @param \Groupby\RetailApiClient\Model\FulfillmentInfo[]|null $fulfillment_infos Fulfillment information, such as the store IDs for in-store pickup or region IDs for different shipping methods.
     *
     * @return self
     */
    public function setFulfillmentInfos($fulfillment_infos)
    {
        if (is_null($fulfillment_infos)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_infos cannot be null');
        }
        $this->container['fulfillment_infos'] = $fulfillment_infos;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri Link to the appropriate product.
     *
     * @return self
     */
    public function setUri($uri)
    {
        if (is_null($uri)) {
            throw new \InvalidArgumentException('non-nullable uri cannot be null');
        }
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Groupby\RetailApiClient\Model\Image[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Groupby\RetailApiClient\Model\Image[]|null $images Product Image.
     *
     * @return self
     */
    public function setImages($images)
    {
        if (is_null($images)) {
            throw new \InvalidArgumentException('non-nullable images cannot be null');
        }
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets audience
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoAudience|null
     */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
     * Sets audience
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoAudience|null $audience audience
     *
     * @return self
     */
    public function setAudience($audience)
    {
        if (is_null($audience)) {
            throw new \InvalidArgumentException('non-nullable audience cannot be null');
        }
        $this->container['audience'] = $audience;

        return $this;
    }

    /**
     * Gets color_info
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoColorInfo|null
     */
    public function getColorInfo()
    {
        return $this->container['color_info'];
    }

    /**
     * Sets color_info
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoColorInfo|null $color_info color_info
     *
     * @return self
     */
    public function setColorInfo($color_info)
    {
        if (is_null($color_info)) {
            throw new \InvalidArgumentException('non-nullable color_info cannot be null');
        }
        $this->container['color_info'] = $color_info;

        return $this;
    }

    /**
     * Gets sizes
     *
     * @return string[]|null
     */
    public function getSizes()
    {
        return $this->container['sizes'];
    }

    /**
     * Sets sizes
     *
     * @param string[]|null $sizes Product sizes (array).
     *
     * @return self
     */
    public function setSizes($sizes)
    {
        if (is_null($sizes)) {
            throw new \InvalidArgumentException('non-nullable sizes cannot be null');
        }
        $this->container['sizes'] = $sizes;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return string[]|null
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param string[]|null $materials The material of the product. For example, 'leather', 'wooden'. A maximum of 20 values are allowed. Length limit of 128 characters
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        if (is_null($materials)) {
            throw new \InvalidArgumentException('non-nullable materials cannot be null');
        }
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets patterns
     *
     * @return string[]|null
     */
    public function getPatterns()
    {
        return $this->container['patterns'];
    }

    /**
     * Sets patterns
     *
     * @param string[]|null $patterns The pattern or graphic print of the product. For example, 'striped', 'polka dot', 'paisley'. A maximum of 20 values are allowed per product. Length limit of 128 characters.
     *
     * @return self
     */
    public function setPatterns($patterns)
    {
        if (is_null($patterns)) {
            throw new \InvalidArgumentException('non-nullable patterns cannot be null');
        }
        $this->container['patterns'] = $patterns;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return string[]|null
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param string[]|null $conditions The condition of the product. Strongly encouraged to use the standardvalues: 'new', 'refurbished', 'used'. A maximum of 5 values are allowed per product. Length limit of 128 characters.
     *
     * @return self
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }
        $this->container['conditions'] = $conditions;

        return $this;
    }

    /**
     * Gets publish_time
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoPublishTime|null
     */
    public function getPublishTime()
    {
        return $this->container['publish_time'];
    }

    /**
     * Sets publish_time
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoPublishTime|null $publish_time publish_time
     *
     * @return self
     */
    public function setPublishTime($publish_time)
    {
        if (is_null($publish_time)) {
            throw new \InvalidArgumentException('non-nullable publish_time cannot be null');
        }
        $this->container['publish_time'] = $publish_time;

        return $this;
    }

    /**
     * Gets retrievable_fields
     *
     * @return \Groupby\RetailApiClient\Model\ProductDtoRetrievableFields|null
     */
    public function getRetrievableFields()
    {
        return $this->container['retrievable_fields'];
    }

    /**
     * Sets retrievable_fields
     *
     * @param \Groupby\RetailApiClient\Model\ProductDtoRetrievableFields|null $retrievable_fields retrievable_fields
     *
     * @return self
     */
    public function setRetrievableFields($retrievable_fields)
    {
        if (is_null($retrievable_fields)) {
            throw new \InvalidArgumentException('non-nullable retrievable_fields cannot be null');
        }
        $this->container['retrievable_fields'] = $retrievable_fields;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \Groupby\RetailApiClient\Model\Promotion[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \Groupby\RetailApiClient\Model\Promotion[]|null $promotions The promotions applied to the product. A maximum of 10 values are allowed per product.
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        if (is_null($promotions)) {
            throw new \InvalidArgumentException('non-nullable promotions cannot be null');
        }
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \Groupby\RetailApiClient\Model\ProductDto[]|null
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \Groupby\RetailApiClient\Model\ProductDto[]|null $variants If the product has variant list and the request specifies the variantIds, requested variants will be the first in the response.
     *
     * @return self
     */
    public function setVariants($variants)
    {
        if (is_null($variants)) {
            throw new \InvalidArgumentException('non-nullable variants cannot be null');
        }
        $this->container['variants'] = $variants;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
}


