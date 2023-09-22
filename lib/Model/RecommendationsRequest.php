<?php
/**
 * RecommendationsRequest
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
 * The version of the OpenAPI document: 0.0
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
 * RecommendationsRequest Class Doc Comment
 *
 * @category Class
 * @description Object to wrap all recommendation request configs.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecommendationsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecommendationsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collection' => 'string',
        'visitor_id' => 'string',
        'limit' => 'string',
        'page_size' => 'string',
        'event_type' => 'string',
        'login_id' => 'string',
        'product_id' => 'string[]',
        'fields' => 'string[]',
        'filters' => '\Groupby\RetailApiClient\Model\Filter[]',
        'raw_filter' => 'string',
        'placement' => 'string',
        'name' => 'string',
        'strict_filtering' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collection' => null,
        'visitor_id' => null,
        'limit' => null,
        'page_size' => null,
        'event_type' => null,
        'login_id' => null,
        'product_id' => null,
        'fields' => null,
        'filters' => null,
        'raw_filter' => null,
        'placement' => null,
        'name' => null,
        'strict_filtering' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collection' => false,
		'visitor_id' => true,
		'limit' => true,
		'page_size' => true,
		'event_type' => true,
		'login_id' => true,
		'product_id' => true,
		'fields' => true,
		'filters' => true,
		'raw_filter' => true,
		'placement' => true,
		'name' => true,
		'strict_filtering' => true
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
        'collection' => 'collection',
        'visitor_id' => 'visitorId',
        'limit' => 'limit',
        'page_size' => 'pageSize',
        'event_type' => 'eventType',
        'login_id' => 'loginId',
        'product_id' => 'productID',
        'fields' => 'fields',
        'filters' => 'filters',
        'raw_filter' => 'rawFilter',
        'placement' => 'placement',
        'name' => 'name',
        'strict_filtering' => 'strictFiltering'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collection' => 'setCollection',
        'visitor_id' => 'setVisitorId',
        'limit' => 'setLimit',
        'page_size' => 'setPageSize',
        'event_type' => 'setEventType',
        'login_id' => 'setLoginId',
        'product_id' => 'setProductId',
        'fields' => 'setFields',
        'filters' => 'setFilters',
        'raw_filter' => 'setRawFilter',
        'placement' => 'setPlacement',
        'name' => 'setName',
        'strict_filtering' => 'setStrictFiltering'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collection' => 'getCollection',
        'visitor_id' => 'getVisitorId',
        'limit' => 'getLimit',
        'page_size' => 'getPageSize',
        'event_type' => 'getEventType',
        'login_id' => 'getLoginId',
        'product_id' => 'getProductId',
        'fields' => 'getFields',
        'filters' => 'getFilters',
        'raw_filter' => 'getRawFilter',
        'placement' => 'getPlacement',
        'name' => 'getName',
        'strict_filtering' => 'getStrictFiltering'
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
        $this->setIfExists('collection', $data ?? [], null);
        $this->setIfExists('visitor_id', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('page_size', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('login_id', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('raw_filter', $data ?? [], null);
        $this->setIfExists('placement', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('strict_filtering', $data ?? [], null);
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

        if ($this->container['collection'] === null) {
            $invalidProperties[] = "'collection' can't be null";
        }
        if ((mb_strlen($this->container['collection']) > 80)) {
            $invalidProperties[] = "invalid value for 'collection', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['collection']) < 1)) {
            $invalidProperties[] = "invalid value for 'collection', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['visitor_id']) && (mb_strlen($this->container['visitor_id']) > 128)) {
            $invalidProperties[] = "invalid value for 'visitor_id', the character length must be smaller than or equal to 128.";
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
     * Gets collection
     *
     * @return string
     */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
     * Sets collection
     *
     * @param string $collection collection
     *
     * @return self
     */
    public function setCollection($collection)
    {
        if (is_null($collection)) {
            throw new \InvalidArgumentException('non-nullable collection cannot be null');
        }
        if ((mb_strlen($collection) > 80)) {
            throw new \InvalidArgumentException('invalid length for $collection when calling RecommendationsRequest., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($collection) < 1)) {
            throw new \InvalidArgumentException('invalid length for $collection when calling RecommendationsRequest., must be bigger than or equal to 1.');
        }

        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets visitor_id
     *
     * @return string|null
     */
    public function getVisitorId()
    {
        return $this->container['visitor_id'];
    }

    /**
     * Sets visitor_id
     *
     * @param string|null $visitor_id visitor_id
     *
     * @return self
     */
    public function setVisitorId($visitor_id)
    {
        if (is_null($visitor_id)) {
            array_push($this->openAPINullablesSetToNull, 'visitor_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('visitor_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($visitor_id) && (mb_strlen($visitor_id) > 128)) {
            throw new \InvalidArgumentException('invalid length for $visitor_id when calling RecommendationsRequest., must be smaller than or equal to 128.');
        }

        $this->container['visitor_id'] = $visitor_id;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return string|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param string|null $limit limit
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            array_push($this->openAPINullablesSetToNull, 'limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return string|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param string|null $page_size page_size
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            array_push($this->openAPINullablesSetToNull, 'page_size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('page_size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type event_type
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        if (is_null($event_type)) {
            array_push($this->openAPINullablesSetToNull, 'event_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return string|null
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param string|null $login_id login_id
     *
     * @return self
     */
    public function setLoginId($login_id)
    {
        if (is_null($login_id)) {
            array_push($this->openAPINullablesSetToNull, 'login_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('login_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['login_id'] = $login_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string[]|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string[]|null $product_id product_id
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            array_push($this->openAPINullablesSetToNull, 'product_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            array_push($this->openAPINullablesSetToNull, 'fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Groupby\RetailApiClient\Model\Filter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Groupby\RetailApiClient\Model\Filter[]|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            array_push($this->openAPINullablesSetToNull, 'filters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets raw_filter
     *
     * @return string|null
     */
    public function getRawFilter()
    {
        return $this->container['raw_filter'];
    }

    /**
     * Sets raw_filter
     *
     * @param string|null $raw_filter raw_filter
     *
     * @return self
     */
    public function setRawFilter($raw_filter)
    {
        if (is_null($raw_filter)) {
            array_push($this->openAPINullablesSetToNull, 'raw_filter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('raw_filter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['raw_filter'] = $raw_filter;

        return $this;
    }

    /**
     * Gets placement
     *
     * @return string|null
     */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
     * Sets placement
     *
     * @param string|null $placement placement
     *
     * @return self
     */
    public function setPlacement($placement)
    {
        if (is_null($placement)) {
            array_push($this->openAPINullablesSetToNull, 'placement');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('placement', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['placement'] = $placement;

        return $this;
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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets strict_filtering
     *
     * @return bool|null
     */
    public function getStrictFiltering()
    {
        return $this->container['strict_filtering'];
    }

    /**
     * Sets strict_filtering
     *
     * @param bool|null $strict_filtering The default is true. If strictFiltering true only products that are within the scope of the filter specified. If false, relax the filtering so that the response may contain other products that are outside the scope of the filtering.
     *
     * @return self
     */
    public function setStrictFiltering($strict_filtering)
    {
        if (is_null($strict_filtering)) {
            array_push($this->openAPINullablesSetToNull, 'strict_filtering');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('strict_filtering', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['strict_filtering'] = $strict_filtering;

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


