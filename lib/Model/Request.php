<?php
/**
 * Request
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
 * Request Class Doc Comment
 *
 * @category Class
 * @description Object which is represent autocomplete request and encapsulate all passed parameters.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'area' => 'string',
        'collection' => 'string',
        'search_items' => 'int',
        'query' => 'string',
        'enable_attribute_suggestion' => 'bool',
        'extended_suggestions' => 'bool',
        'extended_attributes' => 'string[]',
        'visitor_id' => 'string',
        'site' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'area' => null,
        'collection' => null,
        'search_items' => 'int32',
        'query' => null,
        'enable_attribute_suggestion' => null,
        'extended_suggestions' => null,
        'extended_attributes' => null,
        'visitor_id' => null,
        'site' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'area' => false,
		'collection' => false,
		'search_items' => false,
		'query' => false,
		'enable_attribute_suggestion' => false,
		'extended_suggestions' => true,
		'extended_attributes' => true,
		'visitor_id' => true,
		'site' => true
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
        'area' => 'area',
        'collection' => 'collection',
        'search_items' => 'searchItems',
        'query' => 'query',
        'enable_attribute_suggestion' => 'enableAttributeSuggestion',
        'extended_suggestions' => 'extendedSuggestions',
        'extended_attributes' => 'extendedAttributes',
        'visitor_id' => 'visitorId',
        'site' => 'site'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'area' => 'setArea',
        'collection' => 'setCollection',
        'search_items' => 'setSearchItems',
        'query' => 'setQuery',
        'enable_attribute_suggestion' => 'setEnableAttributeSuggestion',
        'extended_suggestions' => 'setExtendedSuggestions',
        'extended_attributes' => 'setExtendedAttributes',
        'visitor_id' => 'setVisitorId',
        'site' => 'setSite'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'area' => 'getArea',
        'collection' => 'getCollection',
        'search_items' => 'getSearchItems',
        'query' => 'getQuery',
        'enable_attribute_suggestion' => 'getEnableAttributeSuggestion',
        'extended_suggestions' => 'getExtendedSuggestions',
        'extended_attributes' => 'getExtendedAttributes',
        'visitor_id' => 'getVisitorId',
        'site' => 'getSite'
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
        $this->setIfExists('area', $data ?? [], null);
        $this->setIfExists('collection', $data ?? [], null);
        $this->setIfExists('search_items', $data ?? [], null);
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('enable_attribute_suggestion', $data ?? [], null);
        $this->setIfExists('extended_suggestions', $data ?? [], null);
        $this->setIfExists('extended_attributes', $data ?? [], null);
        $this->setIfExists('visitor_id', $data ?? [], null);
        $this->setIfExists('site', $data ?? [], null);
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

        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
        if ((mb_strlen($this->container['area']) > 80)) {
            $invalidProperties[] = "invalid value for 'area', the character length must be smaller than or equal to 80.";
        }

        if ($this->container['collection'] === null) {
            $invalidProperties[] = "'collection' can't be null";
        }
        if ((mb_strlen($this->container['collection']) > 80)) {
            $invalidProperties[] = "invalid value for 'collection', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['collection']) < 1)) {
            $invalidProperties[] = "invalid value for 'collection', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['search_items'] === null) {
            $invalidProperties[] = "'search_items' can't be null";
        }
        if (($this->container['search_items'] > 20)) {
            $invalidProperties[] = "invalid value for 'search_items', must be smaller than or equal to 20.";
        }

        if (($this->container['search_items'] < 1)) {
            $invalidProperties[] = "invalid value for 'search_items', must be bigger than or equal to 1.";
        }

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
        }
        if ((mb_strlen($this->container['query']) > 255)) {
            $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['query']) < 1)) {
            $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['extended_attributes']) && (count($this->container['extended_attributes']) < 1)) {
            $invalidProperties[] = "invalid value for 'extended_attributes', number of items must be greater than or equal to 1.";
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
     * Gets area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     *
     * @param string $area Area i.e. 'Production' Will not be used immediately. This will be useful when we eventually need to support a US area vs a Canada area. But this would require using the custom dataset instead of user-generated.
     *
     * @return self
     */
    public function setArea($area)
    {
        if (is_null($area)) {
            throw new \InvalidArgumentException('non-nullable area cannot be null');
        }
        if ((mb_strlen($area) > 80)) {
            throw new \InvalidArgumentException('invalid length for $area when calling Request., must be smaller than or equal to 80.');
        }

        $this->container['area'] = $area;

        return $this;
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
     * @param string $collection Name of the collection used to determine the retail backend to use. Usually it is name which is associated with retail project in command center (project configuration).
     *
     * @return self
     */
    public function setCollection($collection)
    {
        if (is_null($collection)) {
            throw new \InvalidArgumentException('non-nullable collection cannot be null');
        }
        if ((mb_strlen($collection) > 80)) {
            throw new \InvalidArgumentException('invalid length for $collection when calling Request., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($collection) < 1)) {
            throw new \InvalidArgumentException('invalid length for $collection when calling Request., must be bigger than or equal to 1.');
        }

        $this->container['collection'] = $collection;

        return $this;
    }

    /**
     * Gets search_items
     *
     * @return int
     */
    public function getSearchItems()
    {
        return $this->container['search_items'];
    }

    /**
     * Sets search_items
     *
     * @param int $search_items Completion max suggestions. The maximum allowed max suggestions is 20.
     *
     * @return self
     */
    public function setSearchItems($search_items)
    {
        if (is_null($search_items)) {
            throw new \InvalidArgumentException('non-nullable search_items cannot be null');
        }

        if (($search_items > 20)) {
            throw new \InvalidArgumentException('invalid value for $search_items when calling Request., must be smaller than or equal to 20.');
        }
        if (($search_items < 1)) {
            throw new \InvalidArgumentException('invalid value for $search_items when calling Request., must be bigger than or equal to 1.');
        }

        $this->container['search_items'] = $search_items;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query String. Required. The query used to generate suggestions. The maximum number of allowed characters is 255.
     *
     * @return self
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }
        if ((mb_strlen($query) > 255)) {
            throw new \InvalidArgumentException('invalid length for $query when calling Request., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($query) < 1)) {
            throw new \InvalidArgumentException('invalid length for $query when calling Request., must be bigger than or equal to 1.');
        }

        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets enable_attribute_suggestion
     *
     * @return bool|null
     */
    public function getEnableAttributeSuggestion()
    {
        return $this->container['enable_attribute_suggestion'];
    }

    /**
     * Sets enable_attribute_suggestion
     *
     * @param bool|null $enable_attribute_suggestion Enable attribute suggestions, by setting the field enableAttributeSuggestion=true in the API request. Then in response, there will be an additional field attributeResults to show direct match results on brands/categories  Note that attribute results directly come from the products we import and Google does not apply any cleaning on them.
     *
     * @return self
     */
    public function setEnableAttributeSuggestion($enable_attribute_suggestion)
    {
        if (is_null($enable_attribute_suggestion)) {
            throw new \InvalidArgumentException('non-nullable enable_attribute_suggestion cannot be null');
        }
        $this->container['enable_attribute_suggestion'] = $enable_attribute_suggestion;

        return $this;
    }

    /**
     * Gets extended_suggestions
     *
     * @return bool|null
     */
    public function getExtendedSuggestions()
    {
        return $this->container['extended_suggestions'];
    }

    /**
     * Sets extended_suggestions
     *
     * @param bool|null $extended_suggestions Optional param which is define if extended suggestions will be returned in autocomplete response or not. Possibly values: true, false, not specified (If not specified default collection setting will be used).
     *
     * @return self
     */
    public function setExtendedSuggestions($extended_suggestions)
    {
        if (is_null($extended_suggestions)) {
            array_push($this->openAPINullablesSetToNull, 'extended_suggestions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extended_suggestions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extended_suggestions'] = $extended_suggestions;

        return $this;
    }

    /**
     * Gets extended_attributes
     *
     * @return string[]|null
     */
    public function getExtendedAttributes()
    {
        return $this->container['extended_attributes'];
    }

    /**
     * Sets extended_attributes
     *
     * @param string[]|null $extended_attributes List with extended attributes which are would be returned in autocomplete response.     Requires extendedSuggestions to be enabled using search param or on collection layer.
     *
     * @return self
     */
    public function setExtendedAttributes($extended_attributes)
    {
        if (is_null($extended_attributes)) {
            array_push($this->openAPINullablesSetToNull, 'extended_attributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extended_attributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        if (!is_null($extended_attributes) && (count($extended_attributes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $extended_attributes when calling Request., number of items must be greater than or equal to 1.');
        }
        $this->container['extended_attributes'] = $extended_attributes;

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
     * @param string|null $visitor_id String. Not required field. A unique identifier for tracking visitors. For example, this could be implemented with an HTTP cookie, which should be able to uniquely identify a visitor on a single device. This unique identifier should not change if the visitor logs in or out of the website. The field must be a UTF-8 encoded string with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error is returned.
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
            throw new \InvalidArgumentException('invalid length for $visitor_id when calling Request., must be smaller than or equal to 128.');
        }

        $this->container['visitor_id'] = $visitor_id;

        return $this;
    }

    /**
     * Gets site
     *
     * @return string|null
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     *
     * @param string|null $site Name of site filter. If not specified, the specified area's default site will be applied if configured in Command Center. To not use default specify empty value i.e.\"\".  If the site doesn't exist then the search will execute without the site filter.
     *
     * @return self
     */
    public function setSite($site)
    {
        if (is_null($site)) {
            array_push($this->openAPINullablesSetToNull, 'site');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('site', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['site'] = $site;

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


