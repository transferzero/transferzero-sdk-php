# # PaymentMethodOpposite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Details currency and type of payment. | [optional] 
**provider** | **string** | Identifies the payment provider. | [optional] 
**otc_permitted** | **bool** | Are over the counter transactions permitted? | [optional] 
**details** | **string[]** | Fields required to make the payment depending on type. | [optional] 
**default** | **bool** | Boolean revealing whether this is the default payout method. Only present on payout methods | [optional] 
**fields** | [**map[string,\TransferZero\Model\FieldDescription]**](FieldDescription.md) | The fields needed for payments with this payment method with details on validation requirements | [optional] 
**opposites** | [**\TransferZero\Model\PaymentMethod[]**](PaymentMethod.md) | List of all providers that can be used in conjunction with the main provider | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


