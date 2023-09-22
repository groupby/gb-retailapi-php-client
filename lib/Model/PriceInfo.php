<?php
/**
 * PriceInfo
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
 * PriceInfo Class Doc Comment
 *
 * @category Class
 * @description Price info representation.
 * @package  Groupby\RetailApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PriceInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PriceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency_code' => 'string',
        'price' => 'float',
        'original_price' => 'float',
        'cost' => 'float',
        'price_effective_time' => '\Groupby\RetailApiClient\Model\PriceInfoPriceEffectiveTime',
        'price_expire_time' => '\Groupby\RetailApiClient\Model\PriceInfoPriceExpireTime',
        'price_range' => '\Groupby\RetailApiClient\Model\PriceInfoPriceRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency_code' => null,
        'price' => 'float',
        'original_price' => 'float',
        'cost' => 'float',
        'price_effective_time' => null,
        'price_expire_time' => null,
        'price_range' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency_code' => false,
		'price' => false,
		'original_price' => false,
		'cost' => false,
		'price_effective_time' => false,
		'price_expire_time' => false,
		'price_range' => false
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
        'currency_code' => 'currencyCode',
        'price' => 'price',
        'original_price' => 'originalPrice',
        'cost' => 'cost',
        'price_effective_time' => 'priceEffectiveTime',
        'price_expire_time' => 'priceExpireTime',
        'price_range' => 'priceRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'price' => 'setPrice',
        'original_price' => 'setOriginalPrice',
        'cost' => 'setCost',
        'price_effective_time' => 'setPriceEffectiveTime',
        'price_expire_time' => 'setPriceExpireTime',
        'price_range' => 'setPriceRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'price' => 'getPrice',
        'original_price' => 'getOriginalPrice',
        'cost' => 'getCost',
        'price_effective_time' => 'getPriceEffectiveTime',
        'price_expire_time' => 'getPriceExpireTime',
        'price_range' => 'getPriceRange'
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
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('original_price', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('price_effective_time', $data ?? [], null);
        $this->setIfExists('price_expire_time', $data ?? [], null);
        $this->setIfExists('price_range', $data ?? [], null);
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
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Currency code.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Price value.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets original_price
     *
     * @return float|null
     */
    public function getOriginalPrice()
    {
        return $this->container['original_price'];
    }

    /**
     * Sets original_price
     *
     * @param float|null $original_price Original price value.
     *
     * @return self
     */
    public function setOriginalPrice($original_price)
    {
        if (is_null($original_price)) {
            throw new \InvalidArgumentException('non-nullable original_price cannot be null');
        }
        $this->container['original_price'] = $original_price;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost Cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets price_effective_time
     *
     * @return \Groupby\RetailApiClient\Model\PriceInfoPriceEffectiveTime|null
     */
    public function getPriceEffectiveTime()
    {
        return $this->container['price_effective_time'];
    }

    /**
     * Sets price_effective_time
     *
     * @param \Groupby\RetailApiClient\Model\PriceInfoPriceEffectiveTime|null $price_effective_time price_effective_time
     *
     * @return self
     */
    public function setPriceEffectiveTime($price_effective_time)
    {
        if (is_null($price_effective_time)) {
            throw new \InvalidArgumentException('non-nullable price_effective_time cannot be null');
        }
        $this->container['price_effective_time'] = $price_effective_time;

        return $this;
    }

    /**
     * Gets price_expire_time
     *
     * @return \Groupby\RetailApiClient\Model\PriceInfoPriceExpireTime|null
     */
    public function getPriceExpireTime()
    {
        return $this->container['price_expire_time'];
    }

    /**
     * Sets price_expire_time
     *
     * @param \Groupby\RetailApiClient\Model\PriceInfoPriceExpireTime|null $price_expire_time price_expire_time
     *
     * @return self
     */
    public function setPriceExpireTime($price_expire_time)
    {
        if (is_null($price_expire_time)) {
            throw new \InvalidArgumentException('non-nullable price_expire_time cannot be null');
        }
        $this->container['price_expire_time'] = $price_expire_time;

        return $this;
    }

    /**
     * Gets price_range
     *
     * @return \Groupby\RetailApiClient\Model\PriceInfoPriceRange|null
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     *
     * @param \Groupby\RetailApiClient\Model\PriceInfoPriceRange|null $price_range price_range
     *
     * @return self
     */
    public function setPriceRange($price_range)
    {
        if (is_null($price_range)) {
            throw new \InvalidArgumentException('non-nullable price_range cannot be null');
        }
        $this->container['price_range'] = $price_range;

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

