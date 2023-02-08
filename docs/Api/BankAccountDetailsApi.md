# TransferZero\BankAccountDetailsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBankAccountDetails**](BankAccountDetailsApi.md#getBankAccountDetails) | **GET** /bank_account_details/{Currency} | Fetching bank account details


# **getBankAccountDetails**
> \TransferZero\Model\BankAccountDetailsResponse getBankAccountDetails($currency)

Fetching bank account details

Returns single bank account details based on the currency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

Set the API Key and Secret on the Configuration object for authentication:
```php
TransferZero\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.bitpesa.co/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");

$apiInstance = new TransferZero\Api\BankAccountDetailsApi();
$associate_array['currency'] = 'currency_example'; // string | Currency of the required bank account details.  Example: `/v1/bank_account_details/NGN`

try {
    $result = $apiInstance->getBankAccountDetails($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling BankAccountDetailsApi#getBankAccountDetails";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency of the required bank account details.  Example: &#x60;/v1/bank_account_details/NGN&#x60; |

### Return type

[**\TransferZero\Model\BankAccountDetailsResponse**](../Model/BankAccountDetailsResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

