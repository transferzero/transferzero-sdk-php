# # PayinMethodDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_method** | **string** | The payment method which the user will use to make the payments. Options are &#x60;bank&#x60;, &#x60;card&#x60; or you can leave empty to support both. | [optional] 
**redirect_url** | **string** | This is where the user should be redirected back when the payment has been finished | [optional] 
**phone_number** | **string** | The phone number where the funds should be collected from | 
**mobile_provider** | [**\TransferZero\Model\PayoutMethodMobileProviderEnum**](PayoutMethodMobileProviderEnum.md) |  | [optional] 
**send_instructions** | **bool** | States whether to send out the instructions to the phone number on how to pay the funds or not. This shuold always be set to true, otherwise the sender might not receive a prompt for payment. | [optional] 
**refund_address** | **string** | Please make sure the refund_address is a valid BTC address belonging to the sender, as that is going to be used in case the transaction has to be refunded. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


