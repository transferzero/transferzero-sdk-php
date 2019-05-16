# TransferZero\PaymentMethodsApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentMethodsIn**](PaymentMethodsApi.md#paymentMethodsIn) | **GET** /info/payment_methods/in | This method returns possible payin methods.
[**paymentMethodsOut**](PaymentMethodsApi.md#paymentMethodsOut) | **GET** /info/payment_methods/out | This method returns possible payout methods.


# **paymentMethodsIn**
> \TransferZero\Model\PaymentMethodListResponse paymentMethodsIn()

This method returns possible payin methods.

Fetching possible payin methods.

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

$apiInstance = new TransferZero\Api\PaymentMethodsApi();

try {
    $result = $apiInstance->paymentMethodsIn();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PaymentMethodsApi#paymentMethodsIn";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentMethodsOut**
> \TransferZero\Model\PaymentMethodListResponse paymentMethodsOut()

This method returns possible payout methods.

Fetching possible payout methods.

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

$apiInstance = new TransferZero\Api\PaymentMethodsApi();

try {
    $result = $apiInstance->paymentMethodsOut();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PaymentMethodsApi#paymentMethodsOut";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\PaymentMethodListResponse**](../Model/PaymentMethodListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

