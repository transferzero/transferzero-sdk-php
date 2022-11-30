# # AccountValidationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_account** | **string** | Account Number to query | [optional] 
**bank_code** | **string** | Bank Code to query - same codes are used as for creating the transactions | [optional] 
**iban** | **string** | IBAN to query - BBAN format for XOF bank accounts | [optional] 
**phone_number** | **string** | Phone number to query in E.164 format | [optional] 
**mobile_provider** | [**\TransferZero\Model\PayoutMethodMobileProviderEnum**](PayoutMethodMobileProviderEnum.md) |  | [optional] 
**country** | **string** | Country of account in 2-character alpha ISO 3166-2 country format | 
**currency** | **string** | The currency the bank account is in | 
**method** | **string** | The method of the payment. Currently bank and mobile are supported | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


