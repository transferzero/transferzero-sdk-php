# # Recipient

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requested_amount** | **float** | the amount that should be paid to the recipient. This can be in any currency, usually either the input or the output currency. If the value here is not the output currency we will calculate how much the recipient is going to get using the exchange rates active when the transaction was created. | 
**requested_currency** | **string** | the currency of the amount in 3-character alpha ISO 4217 currency format | 
**payout_method** | [**\TransferZero\Model\PayoutMethod**](PayoutMethod.md) |  | 
**metadata** | [**object**](.md) | Additional metadata that can be added to a recipient. These values will be returned on request | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time that the recipient was created. | [optional] 
**editable** | **bool** | Shows whether the recipient can be edited using the PATCH /v1/recipients/{id} endpoint or not | [optional] 
**retriable** | **bool** | Shows whether the transaction made to the recipient can be retried or not | [optional] 
**input_usd_amount** | **float** | Shows how much this payment is worth in USD | [optional] 
**may_cancel** | **bool** | If true it shows that the payment can be cancelled immediately using the DELETE /v1/recipients/{id} endpoint. If false you can still try to cancel it, however it will only gets cancelled once we have confirmation from our partner that the payment has failed. | [optional] 
**state_reason** | **string** | In case the payment is unsuccessful it holds the error message associated with the last unsuccessful payout. | [optional] 
**state_reason_details** | [**\TransferZero\Model\RecipientStateReasonDetails**](RecipientStateReasonDetails.md) |  | [optional] 
**state** | [**\TransferZero\Model\RecipientState**](RecipientState.md) |  | [optional] 
**transaction_id** | **string** | The ID of the transaction that is related to this recipient | [optional] 
**transaction_state** | [**\TransferZero\Model\TransactionState**](TransactionState.md) |  | [optional] 
**exchange_rate** | **float** | The exchange rate used in this payment | [optional] 
**fee_fractional** | **float** | The fee for this payment in fractional units (for example cents for USD transactions) | [optional] 
**input_amount** | **float** | The amount that had to be paid in for this payment to proceed | [optional] 
**input_currency** | **string** | The currency this payment was paid in | [optional] 
**output_amount** | **float** | The amount that will be paid to the recipient | [optional] 
**output_currency** | **string** | The currency the payment will be delivered in | [optional] 
**id** | **string** |  | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


