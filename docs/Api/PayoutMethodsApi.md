# TransferZero\PayoutMethodsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePayoutMethod**](PayoutMethodsApi.md#deletePayoutMethod) | **DELETE** /payout_methods/{Payout Method ID} | Deleting a payout method
[**getPayoutMethod**](PayoutMethodsApi.md#getPayoutMethod) | **GET** /payout_methods/{Payout Method ID} | Fetching a payout method
[**getPayoutMethods**](PayoutMethodsApi.md#getPayoutMethods) | **GET** /payout_methods | Listing payout methods
[**patchPayoutMethod**](PayoutMethodsApi.md#patchPayoutMethod) | **PATCH** /payout_methods/{Payout Method ID} | Updating a payout method
[**postPayoutMethods**](PayoutMethodsApi.md#postPayoutMethods) | **POST** /payout_methods | Creating a payout method


# **deletePayoutMethod**
> \TransferZero\Model\PayoutMethodResponse deletePayoutMethod($payout_method_id)

Deleting a payout method

Deletes a single payout method by the Payout Method ID

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

$apiInstance = new TransferZero\Api\PayoutMethodsApi();
$payout_method_id = 'payout_method_id_example'; // string | ID of the payout method to delete.  Example: `/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->deletePayoutMethod($payout_method_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayoutMethodsApi#deletePayoutMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_method_id** | [**string**](../Model/.md)| ID of the payout method to delete.  Example: &#x60;/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\PayoutMethodResponse**](../Model/PayoutMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutMethod**
> \TransferZero\Model\PayoutMethodResponse getPayoutMethod($payout_method_id)

Fetching a payout method

Show a payout method by id

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

$apiInstance = new TransferZero\Api\PayoutMethodsApi();
$associate_array['payout_method_id'] = 'payout_method_id_example'; // string | ID of the payout method to get.  Example: `/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getPayoutMethod($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayoutMethodsApi#getPayoutMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_method_id** | [**string**](../Model/.md)| ID of the payout method to get.  Example: &#x60;/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\PayoutMethodResponse**](../Model/PayoutMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPayoutMethods**
> \TransferZero\Model\PayoutMethodListResponse getPayoutMethods($state, $type, $sender_id, $page, $per, $created_at_from, $created_at_to)

Listing payout methods

List available payout methods

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

$apiInstance = new TransferZero\Api\PayoutMethodsApi();
$associate_array['state'] = array('state_example'); // string[] | Allows filtering results by `state` of the payout method.  Example: `/v1/payout_methods?state[]=enabled`
$associate_array['type'] = array('type_example'); // string[] | Allows filtering results by the specified type.  Example: `/v1/payout_methods?type[]=NGN::Bank`
$associate_array['sender_id'] = 'sender_id_example'; // string | Allows filtering results by the specified sender id.  Example: `/v1/payout_methods?sender_id=bf9ff782-e182-45ac-abea-5bce83ad6670`
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)
$associate_array['created_at_from'] = 'created_at_from_example'; // string | Start date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$associate_array['created_at_to'] = 'created_at_to_example'; // string | End date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`

try {
    $result = $apiInstance->getPayoutMethods($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayoutMethodsApi#getPayoutMethods";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | [**string[]**](../Model/string.md)| Allows filtering results by &#x60;state&#x60; of the payout method.  Example: &#x60;/v1/payout_methods?state[]&#x3D;enabled&#x60; | [optional]
 **type** | [**string[]**](../Model/string.md)| Allows filtering results by the specified type.  Example: &#x60;/v1/payout_methods?type[]&#x3D;NGN::Bank&#x60; | [optional]
 **sender_id** | **string**| Allows filtering results by the specified sender id.  Example: &#x60;/v1/payout_methods?sender_id&#x3D;bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; | [optional]
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]
 **created_at_from** | **string**| Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **created_at_to** | **string**| End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]

### Return type

[**\TransferZero\Model\PayoutMethodListResponse**](../Model/PayoutMethodListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPayoutMethod**
> \TransferZero\Model\PayoutMethodResponse patchPayoutMethod($payout_method_id, $payout_method)

Updating a payout method

Updates a single payout method by the Payout Method ID

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

$apiInstance = new TransferZero\Api\PayoutMethodsApi();
$payout_method_id = 'payout_method_id_example'; // string | ID of the payout method to get.  Example: `/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670`
$payout_method = new \TransferZero\Model\PayoutMethod(); // \TransferZero\Model\PayoutMethod | 

try {
    $result = $apiInstance->patchPayoutMethod($payout_method_id, $payout_method);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayoutMethodsApi#patchPayoutMethod";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_method_id** | [**string**](../Model/.md)| ID of the payout method to get.  Example: &#x60;/v1/payout_methods/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **payout_method** | [**\TransferZero\Model\PayoutMethod**](../Model/PayoutMethod.md)|  |

### Return type

[**\TransferZero\Model\PayoutMethodResponse**](../Model/PayoutMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPayoutMethods**
> \TransferZero\Model\PayoutMethodResponse postPayoutMethods($payout_method_request)

Creating a payout method

Creates a new payout method in our system.

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

$apiInstance = new TransferZero\Api\PayoutMethodsApi();
$payout_method_request = new \TransferZero\Model\PayoutMethodRequest(); // \TransferZero\Model\PayoutMethodRequest | 

try {
    $result = $apiInstance->postPayoutMethods($payout_method_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PayoutMethodsApi#postPayoutMethods";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_method_request** | [**\TransferZero\Model\PayoutMethodRequest**](../Model/PayoutMethodRequest.md)|  |

### Return type

[**\TransferZero\Model\PayoutMethodResponse**](../Model/PayoutMethodResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

