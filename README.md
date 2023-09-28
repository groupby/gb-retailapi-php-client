# GbRetailApiClient

GroupBy Retail API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/groupby/gb-retailapi-php-client.git"
    }
  ],
  "require": {
    "groupby/gb-retailapi-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/GbRetailApiClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

try {
    $result = $apiInstance->autocompletesearch($x_groupby_customer_id, $identity, $merchandiser, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutocompleteApi->autocompletesearch: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AutocompleteApi* | [**autocompletesearch**](docs/Api/AutocompleteApi.md#autocompletesearch) | **GET** /api/request | 
*ProductApi* | [**getByProductIds**](docs/Api/ProductApi.md#getbyproductids) | **GET** /api/search/product | Provided product search functionality
*RecommendationsAPIApi* | [**predict**](docs/Api/RecommendationsAPIApi.md#predict) | **POST** /api/predict | Provide Recommendations AI functionality.
*RecommendationsAPIApi* | [**predictV2**](docs/Api/RecommendationsAPIApi.md#predictv2) | **POST** /api/recommendation | Provide Recommendations AI functionality.
*SearchApi* | [**facetSearch**](docs/Api/SearchApi.md#facetsearch) | **POST** /api/search/facet | Provided search functionality
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /api/search | Provided search functionality

## Models

- [AdditionalInfo](docs/Model/AdditionalInfo.md)
- [AttributeSuggestion](docs/Model/AttributeSuggestion.md)
- [Audience](docs/Model/Audience.md)
- [BiasDto](docs/Model/BiasDto.md)
- [BiasDtoStrengthDto](docs/Model/BiasDtoStrengthDto.md)
- [BiasingProfileDto](docs/Model/BiasingProfileDto.md)
- [BoostedProductBucket](docs/Model/BoostedProductBucket.md)
- [ColorInfo](docs/Model/ColorInfo.md)
- [CustomParameterDto](docs/Model/CustomParameterDto.md)
- [CustomParameterTrigger](docs/Model/CustomParameterTrigger.md)
- [DebugDto](docs/Model/DebugDto.md)
- [ErrorDto](docs/Model/ErrorDto.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Experiment](docs/Model/Experiment.md)
- [ExperimentVariant](docs/Model/ExperimentVariant.md)
- [Facet](docs/Model/Facet.md)
- [FacetSearchRequestDto](docs/Model/FacetSearchRequestDto.md)
- [FacetSearchResponseDto](docs/Model/FacetSearchResponseDto.md)
- [FieldMask](docs/Model/FieldMask.md)
- [Filter](docs/Model/Filter.md)
- [FilterParameter](docs/Model/FilterParameter.md)
- [FulfillmentInfo](docs/Model/FulfillmentInfo.md)
- [Identity](docs/Model/Identity.md)
- [Image](docs/Model/Image.md)
- [Interval](docs/Model/Interval.md)
- [Merchandiser](docs/Model/Merchandiser.md)
- [MessageType](docs/Model/MessageType.md)
- [Metadata](docs/Model/Metadata.md)
- [NavigationDto](docs/Model/NavigationDto.md)
- [NavigationType](docs/Model/NavigationType.md)
- [NavigationTypeDto](docs/Model/NavigationTypeDto.md)
- [Order](docs/Model/Order.md)
- [Overwrites](docs/Model/Overwrites.md)
- [PageInfoDto](docs/Model/PageInfoDto.md)
- [PinnedRefinement](docs/Model/PinnedRefinement.md)
- [PredictResults](docs/Model/PredictResults.md)
- [PriceInfo](docs/Model/PriceInfo.md)
- [PriceInfoPriceEffectiveTime](docs/Model/PriceInfoPriceEffectiveTime.md)
- [PriceInfoPriceExpireTime](docs/Model/PriceInfoPriceExpireTime.md)
- [PriceInfoPriceRange](docs/Model/PriceInfoPriceRange.md)
- [PriceInfoPriceRangeOriginalPrice](docs/Model/PriceInfoPriceRangeOriginalPrice.md)
- [PriceInfoPriceRangePrice](docs/Model/PriceInfoPriceRangePrice.md)
- [ProductCustomAttribute](docs/Model/ProductCustomAttribute.md)
- [ProductDto](docs/Model/ProductDto.md)
- [ProductDtoAudience](docs/Model/ProductDtoAudience.md)
- [ProductDtoAvailableTime](docs/Model/ProductDtoAvailableTime.md)
- [ProductDtoColorInfo](docs/Model/ProductDtoColorInfo.md)
- [ProductDtoPriceInfo](docs/Model/ProductDtoPriceInfo.md)
- [ProductDtoPublishTime](docs/Model/ProductDtoPublishTime.md)
- [ProductDtoRating](docs/Model/ProductDtoRating.md)
- [ProductDtoRetrievableFields](docs/Model/ProductDtoRetrievableFields.md)
- [Promotion](docs/Model/Promotion.md)
- [QueryPatternTrigger](docs/Model/QueryPatternTrigger.md)
- [QueryPatternTriggerType](docs/Model/QueryPatternTriggerType.md)
- [Range](docs/Model/Range.md)
- [RangeFilter](docs/Model/RangeFilter.md)
- [Rating](docs/Model/Rating.md)
- [RecommendationsErrorResponse](docs/Model/RecommendationsErrorResponse.md)
- [RecommendationsRequest](docs/Model/RecommendationsRequest.md)
- [RecordDto](docs/Model/RecordDto.md)
- [Refinement](docs/Model/Refinement.md)
- [RefinementDto](docs/Model/RefinementDto.md)
- [Request](docs/Model/Request.md)
- [Role](docs/Model/Role.md)
- [RuleConfiguration](docs/Model/RuleConfiguration.md)
- [RuleTemplate](docs/Model/RuleTemplate.md)
- [RuleTemplateSection](docs/Model/RuleTemplateSection.md)
- [RuleType](docs/Model/RuleType.md)
- [RuleVariant](docs/Model/RuleVariant.md)
- [SearchFilter](docs/Model/SearchFilter.md)
- [SearchMetadataDto](docs/Model/SearchMetadataDto.md)
- [SearchRequestDto](docs/Model/SearchRequestDto.md)
- [SearchRequestDtoOverwrites](docs/Model/SearchRequestDtoOverwrites.md)
- [SearchResponseDto](docs/Model/SearchResponseDto.md)
- [SearchResults](docs/Model/SearchResults.md)
- [SearchResultsStats](docs/Model/SearchResultsStats.md)
- [SearchTerms](docs/Model/SearchTerms.md)
- [SelectedRefinementDto](docs/Model/SelectedRefinementDto.md)
- [SelectedRefinementTrigger](docs/Model/SelectedRefinementTrigger.md)
- [SelectedRefinementTriggerType](docs/Model/SelectedRefinementTriggerType.md)
- [Sort](docs/Model/Sort.md)
- [SortDto](docs/Model/SortDto.md)
- [SortDtoOrderDto](docs/Model/SortDtoOrderDto.md)
- [SpellCorrectionMode](docs/Model/SpellCorrectionMode.md)
- [Stats](docs/Model/Stats.md)
- [TemplateDto](docs/Model/TemplateDto.md)
- [TemplateDtoTriggerSet](docs/Model/TemplateDtoTriggerSet.md)
- [Timestamp](docs/Model/Timestamp.md)
- [TriggerSet](docs/Model/TriggerSet.md)
- [ValueFilter](docs/Model/ValueFilter.md)
- [ValueFilterValueFilterType](docs/Model/ValueFilterValueFilterType.md)
- [ZoneDto](docs/Model/ZoneDto.md)
- [ZoneDtoType](docs/Model/ZoneDtoType.md)
- [ZoneType](docs/Model/ZoneType.md)

## Authorization

Authentication schemes defined for the API:
### ClientKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### GroupByIncEmployee

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
