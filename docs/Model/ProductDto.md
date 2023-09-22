# # ProductDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Relative path to product in Google Retail system. | [optional]
**id** | **string** | Product id in Google Retail system. | [optional]
**type** | **string** | Product type. Possible values: PRIMARY, VARIANT. If the product has variant list and the request specifies the variantIds, requested variants will be the first in the response. | [optional]
**primary_product_id** | **string** | Product ID that is primary in relation to the current one | [optional]
**collection_member_ids** | **string[]** | The of the collection members when product type is COLLECTION | [optional]
**gtin** | **string** | Global Trade Item Number can be used by a company to uniquely identify all of its trade items.GTIN defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain. | [optional]
**categories** | **string[]** | Product categories (array). | [optional]
**title** | **string** | Product title. | [optional]
**brands** | **string[]** | Product brands. | [optional]
**description** | **string** | Product description. | [optional]
**language_code** | **string** | Language of the title/description and other string attributes. Use language tags defined by [BCP 47][https://www.rfc-editor.org/rfc/bcp/bcp47.txt]. For product search this field is in use. It defaults to &#39;en-US&#39; if unset. | [optional]
**attributes** | [**array<string,\Groupby\RetailApiClient\Model\ProductCustomAttribute>**](ProductCustomAttribute.md) | Highly encouraged. Extra product attributes to be included. For example, for products, this could include the store name, vendor, style, color, etc. These are very strong signals for recommendation model, thus we highly recommend providing the attributes here. Features that can take on one of a limited number of possible values. Two types of features can be set are: Textual features. some examples would be the brand/maker of a product, or country of a customer. Numerical features. Some examples would be the height/weight of a product, or age of a customer.  Max entries count: 200. Length limit of 128 characters. | [optional]
**tags** | **string[]** | Product tags (array). | [optional]
**price_info** | [**\Groupby\RetailApiClient\Model\ProductDtoPriceInfo**](ProductDtoPriceInfo.md) |  | [optional]
**rating** | [**\Groupby\RetailApiClient\Model\ProductDtoRating**](ProductDtoRating.md) |  | [optional]
**available_time** | [**\Groupby\RetailApiClient\Model\ProductDtoAvailableTime**](ProductDtoAvailableTime.md) |  | [optional]
**availability** | **string** | The online availability of the product. Default to IN_STOCK | [optional]
**available_quantity** | **int** | The available quantity of the item. | [optional]
**fulfillment_infos** | [**\Groupby\RetailApiClient\Model\FulfillmentInfo[]**](FulfillmentInfo.md) | Fulfillment information, such as the store IDs for in-store pickup or region IDs for different shipping methods. | [optional]
**uri** | **string** | Link to the appropriate product. | [optional]
**images** | [**\Groupby\RetailApiClient\Model\Image[]**](Image.md) | Product Image. | [optional]
**audience** | [**\Groupby\RetailApiClient\Model\ProductDtoAudience**](ProductDtoAudience.md) |  | [optional]
**color_info** | [**\Groupby\RetailApiClient\Model\ProductDtoColorInfo**](ProductDtoColorInfo.md) |  | [optional]
**sizes** | **string[]** | Product sizes (array). | [optional]
**materials** | **string[]** | The material of the product. For example, &#39;leather&#39;, &#39;wooden&#39;. A maximum of 20 values are allowed. Length limit of 128 characters | [optional]
**patterns** | **string[]** | The pattern or graphic print of the product. For example, &#39;striped&#39;, &#39;polka dot&#39;, &#39;paisley&#39;. A maximum of 20 values are allowed per product. Length limit of 128 characters. | [optional]
**conditions** | **string[]** | The condition of the product. Strongly encouraged to use the standardvalues: &#39;new&#39;, &#39;refurbished&#39;, &#39;used&#39;. A maximum of 5 values are allowed per product. Length limit of 128 characters. | [optional]
**publish_time** | [**\Groupby\RetailApiClient\Model\ProductDtoPublishTime**](ProductDtoPublishTime.md) |  | [optional]
**retrievable_fields** | [**\Groupby\RetailApiClient\Model\ProductDtoRetrievableFields**](ProductDtoRetrievableFields.md) |  | [optional]
**promotions** | [**\Groupby\RetailApiClient\Model\Promotion[]**](Promotion.md) | The promotions applied to the product. A maximum of 10 values are allowed per product. | [optional]
**variants** | [**\Groupby\RetailApiClient\Model\ProductDto[]**](ProductDto.md) | If the product has variant list and the request specifies the variantIds, requested variants will be the first in the response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
