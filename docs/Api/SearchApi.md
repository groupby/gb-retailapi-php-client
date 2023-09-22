# Groupby\RetailApiClient\SearchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**facetSearch()**](SearchApi.md#facetSearch) | **POST** /api/search/facet | Provided search functionality |
| [**search()**](SearchApi.md#search) | **POST** /api/search | Provided search functionality |


## `facetSearch()`

```php
facetSearch($x_groupby_customer_id, $facet_search_request_dto): \Groupby\RetailApiClient\Model\FacetSearchResponseDto
```
### URI(s):
- https://search.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE

Provided search functionality

Perform a facet search against the GroupBy Retail Search API.

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


$apiInstance = new Groupby\RetailApiClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Custom HTTP header which may contain tenant name. Used to define a client by its name.
$facet_search_request_dto = new \Groupby\RetailApiClient\Model\FacetSearchRequestDto(); // \Groupby\RetailApiClient\Model\FacetSearchRequestDto | Request that should be populated to configure a search API call, made by the client on behalf of a shopper. Contains original request and information about facet for which extra keys requested.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->facetSearch($x_groupby_customer_id, $facet_search_request_dto, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->facetSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_groupby_customer_id** | **string**| Custom HTTP header which may contain tenant name. Used to define a client by its name. | |
| **facet_search_request_dto** | [**\Groupby\RetailApiClient\Model\FacetSearchRequestDto**](../Model/FacetSearchRequestDto.md)| Request that should be populated to configure a search API call, made by the client on behalf of a shopper. Contains original request and information about facet for which extra keys requested. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\FacetSearchResponseDto**](../Model/FacetSearchResponseDto.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($x_groupby_customer_id, $search_request_dto): \Groupby\RetailApiClient\Model\SearchResponseDto
```
### URI(s):
- https://search.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE

Provided search functionality

Perform a search against the GroupBy Retail Search API.

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


$apiInstance = new Groupby\RetailApiClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Custom HTTP header which may contain tenant name. Used to define a client by its name.
$search_request_dto = new \Groupby\RetailApiClient\Model\SearchRequestDto(); // \Groupby\RetailApiClient\Model\SearchRequestDto | Request that should be populated to configure a search API call, made by the client on behalf of a shopper.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->search($x_groupby_customer_id, $search_request_dto, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_groupby_customer_id** | **string**| Custom HTTP header which may contain tenant name. Used to define a client by its name. | |
| **search_request_dto** | [**\Groupby\RetailApiClient\Model\SearchRequestDto**](../Model/SearchRequestDto.md)| Request that should be populated to configure a search API call, made by the client on behalf of a shopper. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\SearchResponseDto**](../Model/SearchResponseDto.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
