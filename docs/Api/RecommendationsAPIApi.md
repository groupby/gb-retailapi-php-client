# Groupby\RetailApiClient\RecommendationsAPIApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**predict()**](RecommendationsAPIApi.md#predict) | **POST** /api/predict | Provide Recommendations AI functionality. |
| [**predictV2()**](RecommendationsAPIApi.md#predictV2) | **POST** /api/recommendation | Provide Recommendations AI functionality. |


## `predict()`

```php
predict($x_groupby_customer_id, $recommendations_request): \Groupby\RetailApiClient\Model\PredictResults
```
### URI(s):
- https://recsapi.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE

Provide Recommendations AI functionality.

Perform a recommendation request against the GroupBy Retail Recommendations API.

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


$apiInstance = new Groupby\RetailApiClient\Api\RecommendationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Custom HTTP header which may contain tenant name. Used to define a client by its name.
$recommendations_request = new \Groupby\RetailApiClient\Model\RecommendationsRequest(); // \Groupby\RetailApiClient\Model\RecommendationsRequest | Request that should be populated to configure a recommendations API call made by the client.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->predict($x_groupby_customer_id, $recommendations_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsAPIApi->predict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_groupby_customer_id** | **string**| Custom HTTP header which may contain tenant name. Used to define a client by its name. | |
| **recommendations_request** | [**\Groupby\RetailApiClient\Model\RecommendationsRequest**](../Model/RecommendationsRequest.md)| Request that should be populated to configure a recommendations API call made by the client. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\PredictResults**](../Model/PredictResults.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `predictV2()`

```php
predictV2($x_groupby_customer_id, $recommendations_request): \Groupby\RetailApiClient\Model\PredictResults
```
### URI(s):
- https://recsapi.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE

Provide Recommendations AI functionality.

Perform a recommendation request against the GroupBy Retail Recommendations API.

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


$apiInstance = new Groupby\RetailApiClient\Api\RecommendationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Custom HTTP header which may contain tenant name. Used to define a client by its name.
$recommendations_request = new \Groupby\RetailApiClient\Model\RecommendationsRequest(); // \Groupby\RetailApiClient\Model\RecommendationsRequest | Request that should be populated to configure a recommendations API call made by the client.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->predictV2($x_groupby_customer_id, $recommendations_request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsAPIApi->predictV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_groupby_customer_id** | **string**| Custom HTTP header which may contain tenant name. Used to define a client by its name. | |
| **recommendations_request** | [**\Groupby\RetailApiClient\Model\RecommendationsRequest**](../Model/RecommendationsRequest.md)| Request that should be populated to configure a recommendations API call made by the client. | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\PredictResults**](../Model/PredictResults.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
