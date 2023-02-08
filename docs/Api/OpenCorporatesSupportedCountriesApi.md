# TransferZero\OpenCorporatesSupportedCountriesApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpenCorporatesSupportedCountries**](OpenCorporatesSupportedCountriesApi.md#getOpenCorporatesSupportedCountries) | **GET** /open_corporates/countries | Get List of Supported Countries from OpenCorporates


# **getOpenCorporatesSupportedCountries**
> \TransferZero\Model\OpenCorporatesSupportedCountriesListResponse getOpenCorporatesSupportedCountries()

Get List of Supported Countries from OpenCorporates

Get List of Supported Countries from OpenCorporates

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

$apiInstance = new TransferZero\Api\OpenCorporatesSupportedCountriesApi();

try {
    $result = $apiInstance->getOpenCorporatesSupportedCountries($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling OpenCorporatesSupportedCountriesApi#getOpenCorporatesSupportedCountries";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.

This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\OpenCorporatesSupportedCountriesListResponse**](../Model/OpenCorporatesSupportedCountriesListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

