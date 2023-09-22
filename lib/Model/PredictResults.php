<?php
/**
 * PredictResults
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
 * PredictResults Class Doc Comment
 *
 * @category Class
 * @description Prediction result including list of recommendations based on provided inputs.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PredictResults implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PredictResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warnings' => 'object[]',
        'products' => 'array<string,mixed>[]',
        'records' => 'array<string,mixed>[]',
        'model_id' => 'string',
        'model_name' => 'string',
        'model_type' => 'string',
        'optimization_objective' => 'string',
        'filter_set' => 'string',
        'raw_filter' => 'string',
        'filters' => '\Groupby\RetailApiClient\Model\FilterParameter[]',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warnings' => null,
        'products' => null,
        'records' => null,
        'model_id' => null,
        'model_name' => null,
        'model_type' => null,
        'optimization_objective' => null,
        'filter_set' => null,
        'raw_filter' => null,
        'filters' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'warnings' => false,
		'products' => false,
		'records' => false,
		'model_id' => false,
		'model_name' => false,
		'model_type' => false,
		'optimization_objective' => false,
		'filter_set' => false,
		'raw_filter' => false,
		'filters' => false,
		'metadata' => false
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
        'warnings' => 'warnings',
        'products' => 'products',
        'records' => 'records',
        'model_id' => 'modelId',
        'model_name' => 'modelName',
        'model_type' => 'modelType',
        'optimization_objective' => 'optimizationObjective',
        'filter_set' => 'filterSet',
        'raw_filter' => 'rawFilter',
        'filters' => 'filters',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warnings' => 'setWarnings',
        'products' => 'setProducts',
        'records' => 'setRecords',
        'model_id' => 'setModelId',
        'model_name' => 'setModelName',
        'model_type' => 'setModelType',
        'optimization_objective' => 'setOptimizationObjective',
        'filter_set' => 'setFilterSet',
        'raw_filter' => 'setRawFilter',
        'filters' => 'setFilters',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warnings' => 'getWarnings',
        'products' => 'getProducts',
        'records' => 'getRecords',
        'model_id' => 'getModelId',
        'model_name' => 'getModelName',
        'model_type' => 'getModelType',
        'optimization_objective' => 'getOptimizationObjective',
        'filter_set' => 'getFilterSet',
        'raw_filter' => 'getRawFilter',
        'filters' => 'getFilters',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('warnings', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('records', $data ?? [], null);
        $this->setIfExists('model_id', $data ?? [], null);
        $this->setIfExists('model_name', $data ?? [], null);
        $this->setIfExists('model_type', $data ?? [], null);
        $this->setIfExists('optimization_objective', $data ?? [], null);
        $this->setIfExists('filter_set', $data ?? [], null);
        $this->setIfExists('raw_filter', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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
     * Gets warnings
     *
     * @return object[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param object[]|null $warnings Warnings collected with validation and Recommendations AI API issues.
     *
     * @return self
     */
    public function setWarnings($warnings)
    {
        if (is_null($warnings)) {
            throw new \InvalidArgumentException('non-nullable warnings cannot be null');
        }
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets products
     *
     * @return array<string,mixed>[]|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param array<string,mixed>[]|null $products Recommendations built by Recommendations AI model.
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets records
     *
     * @return array<string,mixed>[]|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param array<string,mixed>[]|null $records Recommendations built by Recommendations AI model.
     *
     * @return self
     */
    public function setRecords($records)
    {
        if (is_null($records)) {
            throw new \InvalidArgumentException('non-nullable records cannot be null');
        }
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return string|null
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param string|null $model_id Model Id used for predictions
     *
     * @return self
     */
    public function setModelId($model_id)
    {
        if (is_null($model_id)) {
            throw new \InvalidArgumentException('non-nullable model_id cannot be null');
        }
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string|null $model_name Model Name used for predictions
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        if (is_null($model_name)) {
            throw new \InvalidArgumentException('non-nullable model_name cannot be null');
        }
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_type
     *
     * @return string|null
     */
    public function getModelType()
    {
        return $this->container['model_type'];
    }

    /**
     * Sets model_type
     *
     * @param string|null $model_type Currently supported values:   `recommended-for-you`   `others-you-may-like`,   `frequently-bought-together`   `page-optimization`   `similar-items`,   `buy-it-again`   `on-sale-items`   `recently-viewed`    This field together with optimization_objective describe model metadata to use to control model training and   serving. See https://cloud.google.com/retail/docs/models for more details.
     *
     * @return self
     */
    public function setModelType($model_type)
    {
        if (is_null($model_type)) {
            throw new \InvalidArgumentException('non-nullable model_type cannot be null');
        }
        $this->container['model_type'] = $model_type;

        return $this;
    }

    /**
     * Gets optimization_objective
     *
     * @return string|null
     */
    public function getOptimizationObjective()
    {
        return $this->container['optimization_objective'];
    }

    /**
     * Sets optimization_objective
     *
     * @param string|null $optimization_objective Currently supported values: `ctr`, `cvr`, `revenue-per-order`.     If not specified, we choose default based on model type. Default depends on type of recommendation:   `recommended-for-you` => `ctr`   `others-you-may-like` => `ctr`   `frequently-bought-together` => `revenue_per_order`    This field together with modelType describe model metadata to use to control model training and serving.   See https://cloud.google.com/retail/docs/models for more details on what the model metadata control and which   combination of parameters are valid.
     *
     * @return self
     */
    public function setOptimizationObjective($optimization_objective)
    {
        if (is_null($optimization_objective)) {
            throw new \InvalidArgumentException('non-nullable optimization_objective cannot be null');
        }
        $this->container['optimization_objective'] = $optimization_objective;

        return $this;
    }

    /**
     * Gets filter_set
     *
     * @return string|null
     */
    public function getFilterSet()
    {
        return $this->container['filter_set'];
    }

    /**
     * Sets filter_set
     *
     * @param string|null $filter_set Filter set applied to the recommendation
     *
     * @return self
     */
    public function setFilterSet($filter_set)
    {
        if (is_null($filter_set)) {
            throw new \InvalidArgumentException('non-nullable filter_set cannot be null');
        }
        $this->container['filter_set'] = $filter_set;

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
     * @param string|null $raw_filter RawFilter applied to the recommendation
     *
     * @return self
     */
    public function setRawFilter($raw_filter)
    {
        if (is_null($raw_filter)) {
            throw new \InvalidArgumentException('non-nullable raw_filter cannot be null');
        }
        $this->container['raw_filter'] = $raw_filter;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Groupby\RetailApiClient\Model\FilterParameter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Groupby\RetailApiClient\Model\FilterParameter[]|null $filters Filters applied to the recommendation
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


