# TransferZero\CurrencyInfoApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**infoCurrencies**](CurrencyInfoApi.md#infoCurrencies) | **GET** /info/currencies | Getting a list of possible requested currencies
[**infoCurrenciesIn**](CurrencyInfoApi.md#infoCurrenciesIn) | **GET** /info/currencies/in | Getting a list of possible input currencies
[**infoCurrenciesOut**](CurrencyInfoApi.md#infoCurrenciesOut) | **GET** /info/currencies/out | Getting a list of possible output currencies


# **infoCurrencies**
> \TransferZero\Model\CurrencyListResponse infoCurrencies()

Getting a list of possible requested currencies

Fetches a list of currencies available to use in other API requests. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier.

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

$apiInstance = new TransferZero\Api\CurrencyInfoApi();

try {
    $result = $apiInstance->infoCurrencies();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling CurrencyInfoApi#infoCurrencies";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\CurrencyListResponse**](../Model/CurrencyListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoCurrenciesIn**
> \TransferZero\Model\CurrencyExchangeListResponse infoCurrenciesIn()

Getting a list of possible input currencies

Fetches a list of currencies available to use as the input currency in other API requests. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier. Use this endpoint to determine the current exchange rate from a specific input currency to any output currency that's available.

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

$apiInstance = new TransferZero\Api\CurrencyInfoApi();

try {
    $result = $apiInstance->infoCurrenciesIn();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling CurrencyInfoApi#infoCurrenciesIn";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\CurrencyExchangeListResponse**](../Model/CurrencyExchangeListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **infoCurrenciesOut**
> \TransferZero\Model\CurrencyExchangeListResponse infoCurrenciesOut()

Getting a list of possible output currencies

Fetches a list of currencies available to use as the output currency and their exchange rates against the available input currencies. Usually the 3-character alpha ISO 4217 currency code (eg. USD) is used as the identifier.

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

$apiInstance = new TransferZero\Api\CurrencyInfoApi();

try {
    $result = $apiInstance->infoCurrenciesOut();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling CurrencyInfoApi#infoCurrenciesOut";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\CurrencyExchangeListResponse**](../Model/CurrencyExchangeListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

