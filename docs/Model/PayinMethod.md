# # PayinMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Describes how the payment should be requested from the user.  Possible values: - &#x60;NGN::Bank&#x60;: NGN bank and card collection requests - &#x60;NGN::Mobile&#x60;: NGN mobile collections - &#x60;GHS::Mobile&#x60;: GHS mobile collections - &#x60;TZS::Mobile&#x60;: TZS mobile collections - &#x60;UGX::Mobile&#x60;: UGX mobile collections - &#x60;EUR::Bank&#x60;: EUR IBAN collections - &#x60;GBP::Bank&#x60;: GBP IBAN collections | [optional] 
**in_details** | [**\TransferZero\Model\PayinMethodDetails**](PayinMethodDetails.md) |  | [optional] 
**out_details** | [**object**](.md) | This will contain the description on where to pay the funds. Please see the [Collections Details](https://docs.transferzero.com/docs/collection-details) in the API documentation on what to expect here. | [optional] 
**instructions** | [**object**](.md) | This will contain the instructions on how to pay the funds. Please see the [Collections Details](https://docs.transferzero.com/docs/collection-details) in the API documentation on what to expect here. | [optional] 
**provider** | **string** | Describes which provider to use for collection. Please see the [Collections Details](https://docs.transferzero.com/docs/collection-details) in the API documentation on the valid values | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


