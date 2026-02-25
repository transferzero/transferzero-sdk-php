# TransferZero\DlocalBalanceApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBalance**](DlocalBalanceApi.md#getBalance) | **GET** /dlocal/balance | Get dlocal balances


# **getBalance**
> \TransferZero\Model\DlocalBalanceResponse getBalance()

Get dlocal balances

This endpoint retrieves dlocal account balances

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

$apiInstance = new TransferZero\Api\DlocalBalanceApi();

try {
    $result = $apiInstance->getBalance();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling DlocalBalanceApi#getBalance";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\DlocalBalanceResponse**](../Model/DlocalBalanceResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

