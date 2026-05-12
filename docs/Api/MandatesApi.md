# TransferZero\MandatesApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMandate**](MandatesApi.md#getMandate) | **GET** /mandates/{Mandate ID} | Fetch a single mandate


# **getMandate**
> \TransferZero\Model\MandateResponse getMandate($mandate_id)

Fetch a single mandate

Finds and returns a Mandate created within the current calendar year, where the mandate is linked to a Recipient owned by the authenticated API key.  Returns 404 if the mandate is not owned by the API key or was not issued in the current calendar year — mandates are only valid for the year in which they were issued.

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

$apiInstance = new TransferZero\Api\MandatesApi();
$associate_array['mandate_id'] = 'mandate_id_example'; // string | ID of the mandate.  Example: `/v1/mandates/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getMandate($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling MandatesApi#getMandate";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mandate_id** | [**string**](../Model/.md)| ID of the mandate.  Example: &#x60;/v1/mandates/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\MandateResponse**](../Model/MandateResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

