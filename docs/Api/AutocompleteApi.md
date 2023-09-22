# Groupby\RetailApiClient\AutocompleteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autocompletesearch()**](AutocompleteApi.md#autocompletesearch) | **GET** /api/request |  |


## `autocompletesearch()`

```php
autocompletesearch($x_groupby_customer_id, $identity, $merchandiser, $request): \Groupby\RetailApiClient\Model\SearchResults
```
### URI(s):
- https://autocomplete.{environment}.groupbycloud.com 
    - Variables:
      - environment:  No description provided
        - Default value: YOUR_ENV_HERE



A simple request used to get completes the specified prefix with keyword suggestions.

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


$apiInstance = new Groupby\RetailApiClient\Api\AutocompleteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_groupby_customer_id = 'x_groupby_customer_id_example'; // string | Header on incoming HTTP requests that is populated by the API gateway and indicates the customer ID.
$identity = new \Groupby\RetailApiClient\Model\Identity(); // Identity
$merchandiser = new \Groupby\RetailApiClient\Model\Merchandiser(); // Merchandiser
$request = new \Groupby\RetailApiClient\Model\Request(); // Request | Object which is represent autocomplete request and encapsulate all passed parameters.

$hostIndex = 0;
$variables = [
    'environment' => 'YOUR_VALUE',
];

try {
    $result = $apiInstance->autocompletesearch($x_groupby_customer_id, $identity, $merchandiser, $request, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutocompleteApi->autocompletesearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_groupby_customer_id** | **string**| Header on incoming HTTP requests that is populated by the API gateway and indicates the customer ID. | |
| **identity** | [**Identity**](../Model/.md)|  | |
| **merchandiser** | [**Merchandiser**](../Model/.md)|  | |
| **request** | [**Request**](../Model/.md)| Object which is represent autocomplete request and encapsulate all passed parameters. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Groupby\RetailApiClient\Model\SearchResults**](../Model/SearchResults.md)

### Authorization

[GroupByIncEmployee](../../README.md#GroupByIncEmployee), [ClientKey](../../README.md#ClientKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
