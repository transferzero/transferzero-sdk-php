# TransferZero\OpenCorporatesSenderUpdateApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateSender**](OpenCorporatesSenderUpdateApi.md#updateSender) | **POST** /open_corporates/update_sender | Update Sender with data retrieved from Open Corporates


# **updateSender**
> \TransferZero\Model\OpenCorporatesSenderUpdateResponse updateSender($open_corporates_sender_update_request)

Update Sender with data retrieved from Open Corporates

This endpoint searches for a company on Open Corporates API and updates the associated Sender fields with the search results

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

$apiInstance = new TransferZero\Api\OpenCorporatesSenderUpdateApi();
$open_corporates_sender_update_request = new \TransferZero\Model\OpenCorporatesSenderUpdateRequest(); // \TransferZero\Model\OpenCorporatesSenderUpdateRequest | 

try {
    $result = $apiInstance->updateSender($open_corporates_sender_update_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling OpenCorporatesSenderUpdateApi#updateSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_corporates_sender_update_request** | [**\TransferZero\Model\OpenCorporatesSenderUpdateRequest**](../Model/OpenCorporatesSenderUpdateRequest.md)|  |

### Return type

[**\TransferZero\Model\OpenCorporatesSenderUpdateResponse**](../Model/OpenCorporatesSenderUpdateResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

