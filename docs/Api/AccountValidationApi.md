# TransferZero\AccountValidationApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAccountValidations**](AccountValidationApi.md#postAccountValidations) | **POST** /account_validations | Validates the existence of a bank account


# **postAccountValidations**
> \TransferZero\Model\AccountValidationResponse postAccountValidations($account_validation_request)

Validates the existence of a bank account

Validates the existence of a bank account and returns the associated customer name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

Set the API Key and Secret on the Configuration object for authentication:
```php
TransferZero\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.transferzero.com/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");

$apiInstance = new TransferZero\Api\AccountValidationApi();
$account_validation_request = new \TransferZero\Model\AccountValidationRequest(); // \TransferZero\Model\AccountValidationRequest | 

try {
    $result = $apiInstance->postAccountValidations($account_validation_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountValidationApi#postAccountValidations";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_validation_request** | [**\TransferZero\Model\AccountValidationRequest**](../Model/AccountValidationRequest.md)|  |

### Return type

[**\TransferZero\Model\AccountValidationResponse**](../Model/AccountValidationResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

