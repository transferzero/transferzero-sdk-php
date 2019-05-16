# # WebhookLogMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**params** | [**\TransferZero\Model\WebhookDefinition**](WebhookDefinition.md) |  | [optional] 
**event** | **string** | Specific event that triggered the webhook | [optional] 
**instance_id** | **string** | Instance ID of the webhook event | [optional] 
**instance_type** | **string** | Type of instance event | [optional] 
**attempt_id** | **string** | Attempt ID | [optional] 
**tries** | **int** | Number of tries at the point webhook was triggered | [optional] 
**request** | [**\TransferZero\Model\WebhookLogMetadataRequest**](WebhookLogMetadataRequest.md) |  | [optional] 
**response** | [**\TransferZero\Model\WebhookLogMetadataResponse**](WebhookLogMetadataResponse.md) |  | [optional] 
**app_id** | **string** | ID of app on which webhook event was triggered | [optional] 
**api_key_id** | **string** | ID of API key in use at point of webhook event | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


