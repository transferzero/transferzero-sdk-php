# TransferZero\WebhooksApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{Webhook ID} | Unsubscribing from a webhook
[**getWebhook**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{Webhook ID} | Find a webhook&#39;s details
[**getWebhookEvents**](WebhooksApi.md#getWebhookEvents) | **GET** /webhooks/events | Find possible webhook events
[**getWebhooks**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | Listing webhooks
[**postWebhooks**](WebhooksApi.md#postWebhooks) | **POST** /webhooks | Creating a webhook


# **deleteWebhook**
> \TransferZero\Model\WebhookDefinitionResponse deleteWebhook($webhook_id)

Unsubscribing from a webhook

Unsubscribes from a webhook specified

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

$apiInstance = new TransferZero\Api\WebhooksApi();
$webhook_id = 'webhook_id_example'; // string | The ID of webhook to cancel.  Example: `/v1/webhooks/9d4d7b73-a94c-4979-ab57-09074fd55d33`

try {
    $result = $apiInstance->deleteWebhook($webhook_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling WebhooksApi#deleteWebhook";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| The ID of webhook to cancel.  Example: &#x60;/v1/webhooks/9d4d7b73-a94c-4979-ab57-09074fd55d33&#x60; |

### Return type

[**\TransferZero\Model\WebhookDefinitionResponse**](../Model/WebhookDefinitionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \TransferZero\Model\WebhookDefinitionResponse getWebhook($webhook_id)

Find a webhook's details

Look up a webhook's details with its ID

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

$apiInstance = new TransferZero\Api\WebhooksApi();
$associate_array['webhook_id'] = 'webhook_id_example'; // string | The ID of the Webhook to look up  Example: `/v1/webhooks/9d4d7b73-a94c-4979-ab57-09074fd55d33`

try {
    $result = $apiInstance->getWebhook($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling WebhooksApi#getWebhook";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/.md)| The ID of the Webhook to look up  Example: &#x60;/v1/webhooks/9d4d7b73-a94c-4979-ab57-09074fd55d33&#x60; |

### Return type

[**\TransferZero\Model\WebhookDefinitionResponse**](../Model/WebhookDefinitionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookEvents**
> \TransferZero\Model\WebhookDefinitionEventListResponse getWebhookEvents()

Find possible webhook events

Fetching possible webhook events

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

$apiInstance = new TransferZero\Api\WebhooksApi();

try {
    $result = $apiInstance->getWebhookEvents($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling WebhooksApi#getWebhookEvents";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.

This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\WebhookDefinitionEventListResponse**](../Model/WebhookDefinitionEventListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \TransferZero\Model\WebhookDefinitionListResponse getWebhooks($page, $per)

Listing webhooks

Get a list of created webhooks

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

$apiInstance = new TransferZero\Api\WebhooksApi();
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)

try {
    $result = $apiInstance->getWebhooks($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling WebhooksApi#getWebhooks";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]

### Return type

[**\TransferZero\Model\WebhookDefinitionListResponse**](../Model/WebhookDefinitionListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebhooks**
> \TransferZero\Model\WebhookDefinitionResponse postWebhooks($webhook_definition_request)

Creating a webhook

Creates a new webhook, subscribing the provided endpoint to the specified event(s)

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

$apiInstance = new TransferZero\Api\WebhooksApi();
$webhook_definition_request = {"webhook":{"url":"http://myhost.com/for/transaction.paid_in","events":["transaction.paid_in"],"metadata":{"my":"data"}}}; // \TransferZero\Model\WebhookDefinitionRequest | 

try {
    $result = $apiInstance->postWebhooks($webhook_definition_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling WebhooksApi#postWebhooks";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_definition_request** | [**\TransferZero\Model\WebhookDefinitionRequest**](../Model/WebhookDefinitionRequest.md)|  |

### Return type

[**\TransferZero\Model\WebhookDefinitionResponse**](../Model/WebhookDefinitionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

