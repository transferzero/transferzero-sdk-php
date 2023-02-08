# TransferZero\SenderDocumentsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocumentSender**](SenderDocumentsApi.md#addDocumentSender) | **POST** /senders/{Sender ID}/documents/{Document ID}/add | Adding a document to a sender
[**getSenderDocument**](SenderDocumentsApi.md#getSenderDocument) | **GET** /senders/{Sender ID}/documents/{Document ID} | Fetching a document belonging to a sender
[**getSenderDocuments**](SenderDocumentsApi.md#getSenderDocuments) | **GET** /senders/{Sender ID}/documents | Getting a list of documents belonging to a sender
[**removeDocumentSender**](SenderDocumentsApi.md#removeDocumentSender) | **POST** /senders/{Sender ID}/documents/{Document ID}/remove | Removing a document from a sender


# **addDocumentSender**
> \TransferZero\Model\DocumentResponse addDocumentSender($sender_id, $document_id)

Adding a document to a sender

Adds a new document to a sender

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

$apiInstance = new TransferZero\Api\SenderDocumentsApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to add the document.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add`
$document_id = 'document_id_example'; // string | The ID of the document to be added to the sender.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add`

try {
    $result = $apiInstance->addDocumentSender($sender_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SenderDocumentsApi#addDocumentSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to add the document.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add&#x60; |
 **document_id** | [**string**](../Model/.md)| The ID of the document to be added to the sender.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/add&#x60; |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderDocument**
> \TransferZero\Model\DocumentResponse getSenderDocument($sender_id, $document_id)

Fetching a document belonging to a sender

Returns a single document belonging to a sender by the Document ID

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

$apiInstance = new TransferZero\Api\SenderDocumentsApi();
$associate_array['sender_id'] = 'sender_id_example'; // string | ID of the sender who owns the requested document.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`
$associate_array['document_id'] = 'document_id_example'; // string | ID of the document to get.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`

try {
    $result = $apiInstance->getSenderDocument($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SenderDocumentsApi#getSenderDocument";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender who owns the requested document.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; |
 **document_id** | [**string**](../Model/.md)| ID of the document to get.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenderDocuments**
> \TransferZero\Model\DocumentListResponse getSenderDocuments($sender_id, $page, $per)

Getting a list of documents belonging to a sender

Fetches a list of documents belonging to a sender.

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

$apiInstance = new TransferZero\Api\SenderDocumentsApi();
$associate_array['sender_id'] = 'sender_id_example'; // string | ID of the sender who owns the requested documents.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents`
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)

try {
    $result = $apiInstance->getSenderDocuments($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SenderDocumentsApi#getSenderDocuments";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender who owns the requested documents.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents&#x60; |
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]

### Return type

[**\TransferZero\Model\DocumentListResponse**](../Model/DocumentListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeDocumentSender**
> \TransferZero\Model\DocumentResponse removeDocumentSender($sender_id, $document_id)

Removing a document from a sender

Removes a document from a sender

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

$apiInstance = new TransferZero\Api\SenderDocumentsApi();
$sender_id = 'sender_id_example'; // string | ID of the sender with the document to remove.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/remove`
$document_id = 'document_id_example'; // string | The ID of the document to be removed from the sender.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/remove`

try {
    $result = $apiInstance->removeDocumentSender($sender_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SenderDocumentsApi#removeDocumentSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender with the document to remove.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/remove&#x60; |
 **document_id** | [**string**](../Model/.md)| The ID of the document to be removed from the sender.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670/documents/26ec8517-2f0d-48c0-b74f-0bccb9ab3a87/remove&#x60; |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

