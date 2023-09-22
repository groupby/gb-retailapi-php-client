# # SearchResponseDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the search. | [optional]
**area** | **string** | Area Id the search was performed in. | [optional]
**query** | **string** | Original search query. | [optional]
**corrected_query** | **string** | Search query after any changes/corrections are done by the engine. | [optional]
**biasing_profile** | **string** | Name of the biasing profile which was used to bias products in the search results. | [optional]
**biasing_profile_applied_id** | **int** | Id of the biasing profile which was used to bias products in the search results. | [optional]
**filter** | **string** |  |
**original_request** | [**\Groupby\RetailApiClient\Model\SearchRequestDto**](SearchRequestDto.md) |  |
**records** | [**\Groupby\RetailApiClient\Model\RecordDto[]**](RecordDto.md) | The list of records that match the search. | [optional]
**total_record_count** | **int** | The total number of products that match the search. If all products were filtered out on S4R site equals to 0. | [optional]
**metadata** | [**\Groupby\RetailApiClient\Model\SearchMetadataDto**](SearchMetadataDto.md) |  |
**page_info** | [**\Groupby\RetailApiClient\Model\PageInfoDto**](PageInfoDto.md) |  |
**available_navigation** | [**\Groupby\RetailApiClient\Model\NavigationDto[]**](NavigationDto.md) |  |
**selected_navigation** | [**\Groupby\RetailApiClient\Model\NavigationDto[]**](NavigationDto.md) |  |
**redirect** | **string** | URL to which the merchandiser should redirect the shopper to. | [optional]
**experiments** | [**\Groupby\RetailApiClient\Model\Experiment[]**](Experiment.md) |  |
**template** | [**\Groupby\RetailApiClient\Model\TemplateDto**](TemplateDto.md) |  |
**empty** | **bool** | True if the search yielded no results, otherwise false. | [optional]
**site_params** | [**\Groupby\RetailApiClient\Model\Metadata[]**](Metadata.md) |  |
**debug** | [**\Groupby\RetailApiClient\Model\DebugDto**](DebugDto.md) |  |
**warnings** | **string[]** | Warning messages containing information about invalid products, etc. | [optional]
**include_expanded_results** | **bool** | When a shopper uses an ambiguous or a multi-word search phrase, they can get an empty response. After turning on include expanded results, Retail Search analyzes the request and returns the expanded list of products based on the parsed search query. For example, if you search \&quot;Google Pixel 5\&quot; without query expansion, you might only get \&quot;google_pixel_5\&quot; in the result. With query expansion, you might get \&quot;google_pixel_4a_with_5g\&quot;, \&quot;google_pixel_4a\&quot; and \&quot;google_pixel_5_case\&quot; as well.The default value is configured in the tenant settings or true if there is no such setting | [optional]
**facet_limit** | **int** | Maximum of facet values that should be returned for this facet. If not specified, defaults to 20. The maximum allowed value is 300. Values above 300 will be coerced to 300.  If this field is negative, an INVALID_ARGUMENT is returned.  This limit (300) is configured on Google side, but Google have an ability to change it for specific project. | [optional]
**redirect_metadata** | [**\Groupby\RetailApiClient\Model\Metadata[]**](Metadata.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
