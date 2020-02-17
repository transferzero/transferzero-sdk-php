# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input_currency** | **string** | The input currency describes what currency the transaction will be paid in (3-character alpha ISO 4217 currency format). For example if you wish to create an EUR to NGN transaction then input currency should be set to EUR. | 
**payin_methods** | [**\TransferZero\Model\PayinMethod[]**](PayinMethod.md) | Allows setting alternative collections, where funding the transaction is done through alternative means and not via account balance.  For more information please see [Collections from senders](https://docs.transferzero.com/docs/additional-features/#collections-from-senders) in the API documentation | [optional] 
**metadata** | [**object**](.md) | Additional metadata to store on the transaction. If you widh to store your local transaction ID, you should add it here inside a &#x60;sendRef&#x60; field, and we will return this value back to you in the daily transaction reports. | [optional] 
**sender** | [**\TransferZero\Model\Sender**](Sender.md) |  | 
**recipients** | [**\TransferZero\Model\Recipient[]**](Recipient.md) | The details of where the payment should go. although transactions can support paying out multiple recipients, usually one is provided. | 
**traits** | [**\TransferZero\Model\TransactionTraits**](TransactionTraits.md) |  | [optional] 
**state** | [**\TransferZero\Model\TransactionState**](TransactionState.md) |  | [optional] 
**input_amount** | **float** | The amount that was requested in the input currency | [optional] 
**payin_reference** | **string** | The reference number that has to be provided in case the transaction is not funded through account balance | [optional] 
**paid_amount** | **float** | The amount that was already paid in to the transaction | [optional] 
**due_amount** | **float** | The amount needed to be paid in for the transaction to get funded | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The time the transaction was created | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) | The latest time when the transaction has to be funded, otherwise it will be cancelled | [optional] 
**external_id** | **string** | Optional ID that is supplied by partner linking it to the partner&#39;s own Transaction ID. Note: if present we will validate whether the sent ID is a duplicate in our system or not. | [optional] 
**id** | **string** |  | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


