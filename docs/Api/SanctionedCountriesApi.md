# TransferZero\SanctionedCountriesApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSanctionedCountries**](SanctionedCountriesApi.md#getSanctionedCountries) | **GET** /sanctioned_countries | Get List of Sanctioned Countries


# **getSanctionedCountries**
> \TransferZero\Model\SanctionedCountryListResponse getSanctionedCountries()

Get List of Sanctioned Countries

Get a list of sanctioned countries

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

$apiInstance = new TransferZero\Api\SanctionedCountriesApi();

try {
    $result = $apiInstance->getSanctionedCountries($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SanctionedCountriesApi#getSanctionedCountries";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.

This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\SanctionedCountryListResponse**](../Model/SanctionedCountryListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

