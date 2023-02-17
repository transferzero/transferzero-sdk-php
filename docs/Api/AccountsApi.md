# TransferZero\AccountsApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccount**](AccountsApi.md#getAccount) | **GET** /accounts/{Currency} | Fetches account balance for specified currrency
[**getAccounts**](AccountsApi.md#getAccounts) | **GET** /accounts | Fetches account balances for all currencies


# **getAccount**
> \TransferZero\Model\AccountResponse getAccount($currency)

Fetches account balance for specified currrency

Fetches account balance for specified currrency, and returns current balance and associated currency code

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

$apiInstance = new TransferZero\Api\AccountsApi();
$associate_array['currency'] = 'currency_example'; // string | Currency code of account balance to fetch  Example: `/v1/accounts/USD`

try {
    $result = $apiInstance->getAccount($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountsApi#getAccount";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency code of account balance to fetch  Example: &#x60;/v1/accounts/USD&#x60; |

### Return type

[**\TransferZero\Model\AccountResponse**](../Model/AccountResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccounts**
> \TransferZero\Model\AccountListResponse getAccounts()

Fetches account balances for all currencies

Fetches account balances for all currencies, and returns an array of the current balances and associated currency codes.

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

$apiInstance = new TransferZero\Api\AccountsApi();

try {
    $result = $apiInstance->getAccounts($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling AccountsApi#getAccounts";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.

This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\AccountListResponse**](../Model/AccountListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

