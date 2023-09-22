# # RecommendationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** |  |
**visitor_id** | **string** |  | [optional]
**limit** | **string** |  | [optional]
**page_size** | **string** |  | [optional]
**event_type** | **string** |  | [optional]
**login_id** | **string** |  | [optional]
**product_id** | **string[]** |  | [optional]
**fields** | **string[]** |  | [optional]
**filters** | [**\Groupby\RetailApiClient\Model\Filter[]**](Filter.md) |  | [optional]
**raw_filter** | **string** |  | [optional]
**placement** | **string** |  | [optional]
**name** | **string** |  | [optional]
**strict_filtering** | **bool** | The default is true. If strictFiltering true only products that are within the scope of the filter specified. If false, relax the filtering so that the response may contain other products that are outside the scope of the filtering. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
