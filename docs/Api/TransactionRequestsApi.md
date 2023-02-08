# TransferZero\TransactionRequestsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocumentTransactionRequest**](TransactionRequestsApi.md#addDocumentTransactionRequest) | **POST** /transaction_requests/{Transaction Request ID}/add_document | Adding a document to a transaction request (deprecated)
[**cancelTransactionRequest**](TransactionRequestsApi.md#cancelTransactionRequest) | **POST** /transaction_requests/{Transaction Request ID}/cancel | Cancelling a transaction request
[**confirmTransactionRequest**](TransactionRequestsApi.md#confirmTransactionRequest) | **POST** /transaction_requests/{Transaction Request ID}/confirm | Confirming a transaction request
[**getTransactionRequest**](TransactionRequestsApi.md#getTransactionRequest) | **GET** /transaction_requests/{Transaction Request ID} | Fetching a transaction request
[**getTransactionRequests**](TransactionRequestsApi.md#getTransactionRequests) | **GET** /transaction_requests | Listing transaction requests
[**postTransactionRequest**](TransactionRequestsApi.md#postTransactionRequest) | **POST** /transaction_requests | Creating a transaction request
[**restfulAddDocumentTransactionRequest**](TransactionRequestsApi.md#restfulAddDocumentTransactionRequest) | **POST** /transaction_requests/{Transaction Request ID}/documents/{Document ID}/add | Adding a document to a transaction request
[**transactionRequestLimits**](TransactionRequestsApi.md#transactionRequestLimits) | **GET** /transaction_requests/limits | Specifies the limits for transaction requests
[**validateTransactionRequests**](TransactionRequestsApi.md#validateTransactionRequests) | **POST** /transaction_requests/validate | Validates a transaction request payload


# **addDocumentTransactionRequest**
> \TransferZero\Model\DocumentResponse addDocumentTransactionRequest($transaction_request_id, $document_id)

Adding a document to a transaction request (deprecated)

Adds a new document to a transaction request

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_request_id = 'transaction_request_id_example'; // string | ID of the transaction request to add the document.  Example: `/v1/info/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/add_document?document_id=26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`
$document_id = 'document_id_example'; // string | The ID of the document to be added to the transaction request.  Example: `/v1/info/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/add_document?document_id=26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`

try {
    $result = $apiInstance->addDocumentTransactionRequest($transaction_request_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#addDocumentTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request_id** | [**string**](../Model/.md)| ID of the transaction request to add the document.  Example: &#x60;/v1/info/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/add_document?document_id&#x3D;26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; |
 **document_id** | [**string**](../Model/.md)| The ID of the document to be added to the transaction request.  Example: &#x60;/v1/info/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/add_document?document_id&#x3D;26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelTransactionRequest**
> \TransferZero\Model\TransactionReqResponse cancelTransactionRequest($transaction_request_id, $reason_cancellation)

Cancelling a transaction request

Cancels a transaction request

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_request_id = 'transaction_request_id_example'; // string | ID of the transaction request to cancel.  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/cancel`
$reason_cancellation = 'reason_cancellation_example'; // string | Reason for the transaction request to cancel.  Example: `Not enough funds`

try {
    $result = $apiInstance->cancelTransactionRequest($transaction_request_id, $reason_cancellation);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#cancelTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request_id** | [**string**](../Model/.md)| ID of the transaction request to cancel.  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/cancel&#x60; |
 **reason_cancellation** | **string**| Reason for the transaction request to cancel.  Example: &#x60;Not enough funds&#x60; |

### Return type

[**\TransferZero\Model\TransactionReqResponse**](../Model/TransactionReqResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmTransactionRequest**
> \TransferZero\Model\TransactionReqResponse confirmTransactionRequest($transaction_request_id)

Confirming a transaction request

Confirms a new transaction request

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_request_id = 'transaction_request_id_example'; // string | ID of the transaction request to confirm.  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/confirm`

try {
    $result = $apiInstance->confirmTransactionRequest($transaction_request_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#confirmTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request_id** | [**string**](../Model/.md)| ID of the transaction request to confirm.  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/confirm&#x60; |

### Return type

[**\TransferZero\Model\TransactionReqResponse**](../Model/TransactionReqResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionRequest**
> \TransferZero\Model\TransactionReqResponse getTransactionRequest($transaction_request_id, $versioned)

Fetching a transaction request

Returns a single transaction request by the Transaction Request ID

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$associate_array['transaction_request_id'] = 'transaction_request_id_example'; // string | ID of the transaction request to get.  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670`
$associate_array['versioned'] = True; // bool | If false is passed, returns a Transaction request containing a not cached Transaction object  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670?versioned=false`

try {
    $result = $apiInstance->getTransactionRequest($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#getTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request_id** | [**string**](../Model/.md)| ID of the transaction request to get.  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **versioned** | **bool**| If false is passed, returns a Transaction request containing a not cached Transaction object  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670?versioned&#x3D;false&#x60; | [optional]

### Return type

[**\TransferZero\Model\TransactionReqResponse**](../Model/TransactionReqResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionRequests**
> \TransferZero\Model\TransactionReqListResponse getTransactionRequests($page, $per, $state, $currency, $created_at_from, $created_at_to, $amount_from, $amount_to, $sender_id, $versioned, $tag, $ids, $included, $excluded)

Listing transaction requests

Get a list of transaction requests

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)
$associate_array['state'] = array('state_example'); // string[] | Returns transaction requests with specified states.  Example: `/v1/transaction_requests?state[]=pending&state[]=modified`
$associate_array['currency'] = array('currency_example'); // string[] | Returns transaction requests with specified input_currency.  Example: `/v1/transaction_requests?currency[]=USD`
$associate_array['created_at_from'] = 'created_at_from_example'; // string | Returns transaction requests with specified created_at lower limit.  Example: `/v1/transaction_requests?created_at_from=2018-06-09`
$associate_array['created_at_to'] = 'created_at_to_example'; // string | Returns transaction requests with specified created_at upper limit.  Example: `/v1/transaction_requests?created_at_to=2018-06-08`
$associate_array['amount_from'] = 'amount_from_example'; // string | Returns transaction requests with specified amount lower limit.  Example: `/v1/transaction_requests?currency=NGN&amount_from=2.4319983`
$associate_array['amount_to'] = 'amount_to_example'; // string | Returns transaction requests with specified amount upper limit.  Example: `/v1/transaction_requests?currency=NGN&amount_to=2.4319985`
$associate_array['sender_id'] = 'sender_id_example'; // string | Returns transaction requests for the specified sender.  Example: `/v1/transaction_requests?sender_id=b41d3cb7-6c54-4245-85fc-8e30690eb0f7`
$associate_array['versioned'] = True; // bool | If false is passed, returns Transaction requests containing not cached Transaction objects  Example: `/v1/transaction_requests?versioned=false`
$associate_array['tag'] = array('tag_example'); // string[] | Returns transaction requests with the specified tag(s). Tags are optional labels assigned to transaction requests for organizational purposes  Example: `/v1/transaction_requests?tag[]=square`
$associate_array['ids'] = array('ids_example'); // string[] | Returns transaction requests with the specified id(s). This allows the fetching of multiple transaction requests by ids for efficiency  Example: `/v1/transaction_requests?ids[]=b41d3cb7-6c54-4245-85fc-8e30690eb0f7`
$associate_array['included'] = array('included_example'); // string[] | Returns transaction requests with the specified payout currencies.  Example: `/v1/transaction_requests?included[]=KES`
$associate_array['excluded'] = array('excluded_example'); // string[] | Returns transaction requests without the specified payout currencies.  Example: `/v1/transaction_requests?excluded[]=KES`

try {
    $result = $apiInstance->getTransactionRequests($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#getTransactionRequests";
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
 **state** | [**string[]**](../Model/string.md)| Returns transaction requests with specified states.  Example: &#x60;/v1/transaction_requests?state[]&#x3D;pending&amp;state[]&#x3D;modified&#x60; | [optional]
 **currency** | [**string[]**](../Model/string.md)| Returns transaction requests with specified input_currency.  Example: &#x60;/v1/transaction_requests?currency[]&#x3D;USD&#x60; | [optional]
 **created_at_from** | **string**| Returns transaction requests with specified created_at lower limit.  Example: &#x60;/v1/transaction_requests?created_at_from&#x3D;2018-06-09&#x60; | [optional]
 **created_at_to** | **string**| Returns transaction requests with specified created_at upper limit.  Example: &#x60;/v1/transaction_requests?created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **amount_from** | **string**| Returns transaction requests with specified amount lower limit.  Example: &#x60;/v1/transaction_requests?currency&#x3D;NGN&amp;amount_from&#x3D;2.4319983&#x60; | [optional]
 **amount_to** | **string**| Returns transaction requests with specified amount upper limit.  Example: &#x60;/v1/transaction_requests?currency&#x3D;NGN&amp;amount_to&#x3D;2.4319985&#x60; | [optional]
 **sender_id** | **string**| Returns transaction requests for the specified sender.  Example: &#x60;/v1/transaction_requests?sender_id&#x3D;b41d3cb7-6c54-4245-85fc-8e30690eb0f7&#x60; | [optional]
 **versioned** | **bool**| If false is passed, returns Transaction requests containing not cached Transaction objects  Example: &#x60;/v1/transaction_requests?versioned&#x3D;false&#x60; | [optional]
 **tag** | [**string[]**](../Model/string.md)| Returns transaction requests with the specified tag(s). Tags are optional labels assigned to transaction requests for organizational purposes  Example: &#x60;/v1/transaction_requests?tag[]&#x3D;square&#x60; | [optional]
 **ids** | [**string[]**](../Model/string.md)| Returns transaction requests with the specified id(s). This allows the fetching of multiple transaction requests by ids for efficiency  Example: &#x60;/v1/transaction_requests?ids[]&#x3D;b41d3cb7-6c54-4245-85fc-8e30690eb0f7&#x60; | [optional]
 **included** | [**string[]**](../Model/string.md)| Returns transaction requests with the specified payout currencies.  Example: &#x60;/v1/transaction_requests?included[]&#x3D;KES&#x60; | [optional]
 **excluded** | [**string[]**](../Model/string.md)| Returns transaction requests without the specified payout currencies.  Example: &#x60;/v1/transaction_requests?excluded[]&#x3D;KES&#x60; | [optional]

### Return type

[**\TransferZero\Model\TransactionReqListResponse**](../Model/TransactionReqListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTransactionRequest**
> \TransferZero\Model\TransactionReqResponse postTransactionRequest($transaction_req_request)

Creating a transaction request

Creates a new transaction request

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_req_request = new \TransferZero\Model\TransactionReqRequest(); // \TransferZero\Model\TransactionReqRequest | 

try {
    $result = $apiInstance->postTransactionRequest($transaction_req_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#postTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_req_request** | [**\TransferZero\Model\TransactionReqRequest**](../Model/TransactionReqRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionReqResponse**](../Model/TransactionReqResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restfulAddDocumentTransactionRequest**
> \TransferZero\Model\DocumentResponse restfulAddDocumentTransactionRequest($transaction_request_id, $document_id)

Adding a document to a transaction request

Adds a new document to a transaction request

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_request_id = 'transaction_request_id_example'; // string | ID of the transaction request to add the document.  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add`
$document_id = 'document_id_example'; // string | The ID of the document to be added to the transaction request.  Example: `/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add`

try {
    $result = $apiInstance->restfulAddDocumentTransactionRequest($transaction_request_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#restfulAddDocumentTransactionRequest";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request_id** | [**string**](../Model/.md)| ID of the transaction request to add the document.  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add&#x60; |
 **document_id** | [**string**](../Model/.md)| The ID of the document to be added to the transaction request.  Example: &#x60;/v1/transaction_requests/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add&#x60; |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transactionRequestLimits**
> \TransferZero\Model\TransactionReqLimitsResponse transactionRequestLimits()

Specifies the limits for transaction requests

Specifies the minimum and maximum limits for transaction requests

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();

try {
    $result = $apiInstance->transactionRequestLimits();
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#transactionRequestLimits";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TransferZero\Model\TransactionReqLimitsResponse**](../Model/TransactionReqLimitsResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTransactionRequests**
> \TransferZero\Model\TransactionReqResponse validateTransactionRequests($transaction_req_request)

Validates a transaction request payload

Validates fields in a transaction request payload and displays invalid or missing fields

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

$apiInstance = new TransferZero\Api\TransactionRequestsApi();
$transaction_req_request = new \TransferZero\Model\TransactionReqRequest(); // \TransferZero\Model\TransactionReqRequest | 

try {
    $result = $apiInstance->validateTransactionRequests($transaction_req_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionRequestsApi#validateTransactionRequests";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_req_request** | [**\TransferZero\Model\TransactionReqRequest**](../Model/TransactionReqRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionReqResponse**](../Model/TransactionReqResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

