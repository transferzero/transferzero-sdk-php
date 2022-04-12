# TransferZero\PayinMethodsApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePayinMethod**](PayinMethodsApi.md#deletePayinMethod) | **DELETE** /payin_methods/{PayinMethod ID} | Deleting a payin method
[**getPayinMethod**](PayinMethodsApi.md#getPayinMethod) | **GET** /payin_methods/{PayinMethod ID} | Fetching a payin method
[**patchPayinMethod**](PayinMethodsApi.md#patchPayinMethod) | **PATCH** /payin_methods/{PayinMethod ID} | Updating a payin method
[**retryPayinMethod**](PayinMethodsApi.md#retryPayinMethod) | **POST** /payin_methods/{PayinMethod ID}/retry | Retries PayinMethod


# **deletePayinMethod**
> \TransferZero\Model\PayinMethodResponse deletePayinMethod($payin_method_id)

Deleting a payin method

Initiates a cancellation request for the specified payin method

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

$apiInstance = new TransferZero\Api\PayinMethodsApi();
$payin_method_id = 'payin_method_id_example'; // string | ID of the payin method to delete.  Example: `/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->deletePayinMethod($payin_method_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayinMethodsApi#deletePayinMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payin_method_id** | [**string**](../Model/.md)| ID of the payin method to delete.  Example: &#x60;/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\PayinMethodResponse**](../Model/PayinMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayinMethod**
> \TransferZero\Model\PayinMethodResponse getPayinMethod($payin_method_id)

Fetching a payin method

Show a payin method by id

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

$apiInstance = new TransferZero\Api\PayinMethodsApi();
$associate_array['payin_method_id'] = 'payin_method_id_example'; // string | ID of the payin method to get.  Example: `/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getPayinMethod($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayinMethodsApi#getPayinMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payin_method_id** | [**string**](../Model/.md)| ID of the payin method to get.  Example: &#x60;/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\PayinMethodResponse**](../Model/PayinMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPayinMethod**
> \TransferZero\Model\PayinMethodResponse patchPayinMethod($payin_method_id, $payin_method)

Updating a payin method

Updates the payin method specified in the URL path.

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

$apiInstance = new TransferZero\Api\PayinMethodsApi();
$payin_method_id = 'payin_method_id_example'; // string | ID of the payin method to get.  Example: `/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`
$payin_method = new \TransferZero\Model\PayinMethod(); // \TransferZero\Model\PayinMethod | 

try {
    $result = $apiInstance->patchPayinMethod($payin_method_id, $payin_method);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayinMethodsApi#patchPayinMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payin_method_id** | [**string**](../Model/.md)| ID of the payin method to get.  Example: &#x60;/v1/payin_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **payin_method** | [**\TransferZero\Model\PayinMethod**](../Model/PayinMethod.md)|  |

### Return type

[**\TransferZero\Model\PayinMethodResponse**](../Model/PayinMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retryPayinMethod**
> \TransferZero\Model\PayinMethodResponse retryPayinMethod($payin_method_id)

Retries PayinMethod

Retries the collection process for the payin method.  Please note only payin methods in `error` state can be retried.

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

$apiInstance = new TransferZero\Api\PayinMethodsApi();
$payin_method_id = 'payin_method_id_example'; // string | ID of the payin method whose collection process should be retried  Example: `/v1/payin_methods/9d4d7b73-a94c-4979-ab57-09074fd55d33/retry`

try {
    $result = $apiInstance->retryPayinMethod($payin_method_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayinMethodsApi#retryPayinMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payin_method_id** | [**string**](../Model/.md)| ID of the payin method whose collection process should be retried  Example: &#x60;/v1/payin_methods/9d4d7b73-a94c-4979-ab57-09074fd55d33/retry&#x60; |

### Return type

[**\TransferZero\Model\PayinMethodResponse**](../Model/PayinMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

