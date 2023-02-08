# TransferZero\OpenCorporatesCompanySearchApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchCompany**](OpenCorporatesCompanySearchApi.md#searchCompany) | **POST** /open_corporates/search | Search for a company on Open Corporates


# **searchCompany**
> \TransferZero\Model\OpenCorporatesSearchResponse searchCompany($open_corporates_search_request)

Search for a company on Open Corporates

This endpoint searches for a company on Open Corporates API and returns the name if found

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

$apiInstance = new TransferZero\Api\OpenCorporatesCompanySearchApi();
$open_corporates_search_request = new \TransferZero\Model\OpenCorporatesSearchRequest(); // \TransferZero\Model\OpenCorporatesSearchRequest | 

try {
    $result = $apiInstance->searchCompany($open_corporates_search_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling OpenCorporatesCompanySearchApi#searchCompany";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_corporates_search_request** | [**\TransferZero\Model\OpenCorporatesSearchRequest**](../Model/OpenCorporatesSearchRequest.md)|  |

### Return type

[**\TransferZero\Model\OpenCorporatesSearchResponse**](../Model/OpenCorporatesSearchResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

