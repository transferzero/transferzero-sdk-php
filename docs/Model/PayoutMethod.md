# # PayoutMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Contains the currency to send the money to, and the type of the money movement  Commonly used payout types are:  - &#x60;NGN::Bank&#x60; - for Nigerian bank account payments. - &#x60;NGN::Mobile&#x60; - for Nigerian mobile money payments. - &#x60;GHS::Bank&#x60; - for Ghanaian bank account payments. - &#x60;GHS::Mobile&#x60; - for Ghanaian mobile money payments. - &#x60;GHS::Cash&#x60; - for Ghanaian cash remittance payments. - &#x60;UGX::Mobile&#x60; - for Ugandan mobile money payments. - &#x60;TZS::Mobile&#x60; - for Tanzanian mobile money payments. - &#x60;XOF::Mobile&#x60; - for mobile money payments to West-Africa. - &#x60;XOF::Bank&#x60; - for Senegalese bank account payments. - &#x60;XOF::Cash&#x60; - for Senegalese cash remittance payments. - &#x60;MAD::Cash&#x60; - for Moroccan cash remittance payments. - &#x60;EUR::Bank&#x60; - for IBAN bank transfers in EUR. - &#x60;GBP::Bank&#x60; - for IBAN bank and FP accounts transfers in GBP. - &#x60;ZAR::Bank&#x60; - for South Africa bank account payments. - &#x60;USD::Bank&#x60; - for USD account payments. *** Currently Nigeria only and in Beta phase ***  You can also send funds to the internal balance using &#x60;CCY::Balance&#x60;, where &#x60;CCY&#x60; is the appropriate currency. See [Collection from senders](https://docs.transferzero.com/docs/additional-features/#collections-from-senders) for more info on how to collect money into internal balance | [optional] 
**details** | [**\TransferZero\Model\PayoutMethodDetails**](PayoutMethodDetails.md) |  | [optional] 
**metadata** | [**object**](.md) | Metadata of payout method. You can store any kind of information in this field. | [optional] 
**id** | **string** |  | [optional] 
**errors** | [**map[string,\TransferZero\Model\ValidationErrorDescription[]]**](array.md) | The fields that have some problems and don&#39;t pass validation | [optional] 
**fields** | [**map[string,\TransferZero\Model\FieldDescription]**](FieldDescription.md) | The fields needed for payments with this payment method with details on validation requirements | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


