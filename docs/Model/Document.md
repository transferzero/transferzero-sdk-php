# # Document

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**upload** | **string** | Base64 encoded data uri of an image/pdf file or a fully qualified url | 
**upload_file_name** | **string** | Name of the upload | 
**metadata** | [**object**](.md) | Metadata of document | [optional] 
**upload_content_type** | **string** |  | [optional] 
**upload_file_size** | **int** |  | [optional] 
**category** | **string** | uncategorised | [optional] 
**side** | **string** | The side of the KYC ID. One of &#39;front&#39; or &#39;back&#39; | [optional] 
**issuing_country** | **string** | Issuing country of ID in 2-character alpha ISO 3166-2 country format | [optional] 
**id** | **string** |  | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


