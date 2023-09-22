# Groupby\RetailApiClient\ProductApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getByProductIds()**](ProductApi.md#getByProductIds) | **GET** /api/search/product | Provided product search functionality |


## `getByProductIds()`

```php
getByProductIds($collection, $product_id, $x_groupby_customer_id, $variant_ids): \Groupby\RetailApiClient\Model\ProductDto
```
### URI(s):
- https://search.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE

Provided product search functionality

Perform a product search against the GroupBy Retail Search API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: GroupByIncEmployee
$config = Groupby\RetailApiClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: ClientKey
$config = Groupby\RetailApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Groupby\RetailApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Groupby\RetailApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection = 'collection_example'; // string | Collection name
$product_id = 'product_id_example'; // string | Product ID which need to be search
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Required. This parameter will extract from header X-Groupby-Customer-Id. May contain tenant name. Used to define a                           client by its name.
$variant_ids = array('variant_ids_example'); // string[] | Not required. If the product has variant list and the request specifies the variantIds, requested variants will be the                           first in the response.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->getByProductIds($collection, $product_id, $x_groupby_customer_id, $variant_ids, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getByProductIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection** | **string**| Collection name | |
| **product_id** | **string**| Product ID which need to be search | |
| **x_groupby_customer_id** | **string**| Required. This parameter will extract from header X-Groupby-Customer-Id. May contain tenant name. Used to define a                           client by its name. | |
| **variant_ids** | [**string[]**](../Model/string.md)| Not required. If the product has variant list and the request specifies the variantIds, requested variants will be the                           first in the response. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\ProductDto**](../Model/ProductDto.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
