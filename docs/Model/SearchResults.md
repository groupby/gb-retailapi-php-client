# # SearchResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stats** | [**\Groupby\RetailApiClient\Model\SearchResultsStats**](SearchResultsStats.md) |  | [optional]
**search_terms** | [**\Groupby\RetailApiClient\Model\SearchTerms[]**](SearchTerms.md) |  |
**extended_attributes** | **array<string,string[]>** | Map with extended attributes which are returned in autocomplete response. | [optional]
**attribute_results** | [**array<string,\Groupby\RetailApiClient\Model\AttributeSuggestion>**](AttributeSuggestion.md) | SAYT response attributes. Contains list of direct matching attributes. | [optional]
**site_filter** | **string** | SiteFilter object used with request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
