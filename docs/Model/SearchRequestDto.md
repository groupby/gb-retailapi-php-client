# # SearchRequestDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Base textual search query. | [optional]
**area** | **string** | Area name the search is being performed in. | [optional] [default to 'Production']
**collection** | **string** | Name of collection in project configuration setting which is mapped to the google retail backend. | [optional] [default to 'default']
**visitor_id** | **string** | Unique identifier identifying the shopper. Will be autogenerated if not provided. | [optional]
**refinements** | [**\Groupby\RetailApiClient\Model\SelectedRefinementDto[]**](SelectedRefinementDto.md) |  |
**page_size** | **int** | The number of products to be returned on each page. | [optional] [default to 10]
**skip** | **int** | Where in the list of products to begin the page. | [optional] [default to 0]
**biasing_profile** | **string** | Name of a biasing profile which should be applied to the search. Takes priority over area default. | [optional]
**biasing** | [**\Groupby\RetailApiClient\Model\BiasingProfileDto**](BiasingProfileDto.md) |  |
**custom_url_params** | [**\Groupby\RetailApiClient\Model\CustomParameterDto[]**](CustomParameterDto.md) |  |
**sorts** | [**\Groupby\RetailApiClient\Model\SortDto[]**](SortDto.md) |  |
**included_navigations** | **string[]** | Set of navigation fields to include in the search result. Cannot be set if &#39;excludedNavigations&#39; is set. | [optional]
**excluded_navigations** | **string[]** | Set of navigation fields to exclude in the search result. Cannot be set if &#39;includedNavigations&#39; is set. | [optional]
**dynamic_facet** | **bool** | Set the specifications of dynamically generated facets. | [optional]
**variant_rollup_keys** | **string[]** | Set the variant rollup keys. | [optional]
**pre_filter** | **string** | Set of the prefilter specifications value. | [optional]
**site** | **string** | Name of site filter. If not specified, the specified area&#39;s default site will be applied if configured in Command Center. To not use default specify empty value i.e.\&quot;\&quot;.  If the site doesn&#39;t exist then the search will execute without the site filter and a warning will be provided. | [optional]
**response_mask** | **string[]** | List with fields which should be included in metadata object associated with each record in response. | [optional]
**page_categories** | **string[]** | The categories associated with a category page. Required for category navigation queries to achieve good search quality. To represent full path of category, use &#39;&gt;&#39; sign to separate different hierarchies. If &#39;&gt;&#39; is part of the category name, please replace it with other character(s).Max item length &#x3D; 1. | [optional]
**spell_correction_mode** | [**SpellCorrectionMode**](SpellCorrectionMode.md) |  | [optional]
**include_expanded_results** | **bool** | When a shopper uses an ambiguous or a multi-word search phrase, they can get an empty response. After turning on include expanded results, Retail Search analyzes the request and returns the expanded list of products based on the parsed search query. For example, if you search \&quot;Google Pixel 5\&quot; without query expansion, you might only get \&quot;google_pixel_5\&quot; in the result. With query expansion, you might get \&quot;google_pixel_4a_with_5g\&quot;, \&quot;google_pixel_4a\&quot; and \&quot;google_pixel_5_case\&quot; as well.The default value is configured in the tenant settings or true if there is no such setting | [optional]
**pin_unexpanded_results** | **bool** | This configuration depends on include expanded results settings. If this field is set to true,unexpanded products are always at the top of the search results, followed  by the expanded results. Default value: true | [optional]
**debug** | **bool** | Enable additional debug info in response.  Note: attaching debug info significantly affects performance. Is not supposed to be used for large requests. | [optional]
**facet_limit** | **int** | Maximum of facet values that should be returned for this facet. If not specified, defaults to 20. The maximum allowed value is 300. Values above 300 will be coerced to 300.  If this field is negative, an INVALID_ARGUMENT is returned.  This limit (300) is configured on Google side, but Google have an ability to change it for specific project. | [optional]
**login_id** | **string** | Highly recommended for logged-in users. Unique identifier for logged-in user, such as a user name. Don&#39;t set for anonymous users.  Don&#39;t set the field to the same fixed ID for different users. This mixes the event history of those users together, which results in degraded model quality.  The field must be a UTF-8 encoded string with a length limit of 128 characters. | [optional]
**overwrites** | [**\Groupby\RetailApiClient\Model\SearchRequestDtoOverwrites**](SearchRequestDtoOverwrites.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)