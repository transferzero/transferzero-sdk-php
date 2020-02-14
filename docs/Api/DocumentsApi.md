# TransferZero\DocumentsApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDocument**](DocumentsApi.md#deleteDocument) | **DELETE** /documents/{Document ID} | Deleting a document
[**getDocument**](DocumentsApi.md#getDocument) | **GET** /documents/{Document ID} | Fetching a document
[**getDocuments**](DocumentsApi.md#getDocuments) | **GET** /documents | Getting a list of documents
[**postDocuments**](DocumentsApi.md#postDocuments) | **POST** /documents | Creating a document


# **deleteDocument**
> \TransferZero\Model\DocumentResponse deleteDocument($document_id, $sender_id)

Deleting a document

Deletes a single document by the Document ID

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

$apiInstance = new TransferZero\Api\DocumentsApi();
$document_id = 'document_id_example'; // string | ID of the document to delete.  Example: `/v1/document/bf9ff782-e182-45ac-abea-5bce83ad6670`
$sender_id = 'sender_id_example'; // string | Allows filtering results by `sender_id`.  Example: `/v1/transactions?sender_id=b41d3cb7-6c54-4245-85fc-8e30690eb0f7`

try {
    $result = $apiInstance->deleteDocument($document_id, $sender_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling DocumentsApi#deleteDocument";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | [**string**](../Model/.md)| ID of the document to delete.  Example: &#x60;/v1/document/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **sender_id** | **string**| Allows filtering results by &#x60;sender_id&#x60;.  Example: &#x60;/v1/transactions?sender_id&#x3D;b41d3cb7-6c54-4245-85fc-8e30690eb0f7&#x60; | [optional]

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \TransferZero\Model\DocumentResponse getDocument($document_id, $sender_id)

Fetching a document

Returns a single document by the Documents ID

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

$apiInstance = new TransferZero\Api\DocumentsApi();
$associate_array['document_id'] = 'document_id_example'; // string | ID of the document to get.  Example: `/v1/documents/bf9ff782-e182-45ac-abea-5bce83ad6670`
$associate_array['sender_id'] = 'sender_id_example'; // string | Allows filtering results by `sender_id`.  Example: `/v1/transactions?sender_id=b41d3cb7-6c54-4245-85fc-8e30690eb0f7`

try {
    $result = $apiInstance->getDocument($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling DocumentsApi#getDocument";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | [**string**](../Model/.md)| ID of the document to get.  Example: &#x60;/v1/documents/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **sender_id** | **string**| Allows filtering results by &#x60;sender_id&#x60;.  Example: &#x60;/v1/transactions?sender_id&#x3D;b41d3cb7-6c54-4245-85fc-8e30690eb0f7&#x60; | [optional]

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocuments**
> \TransferZero\Model\DocumentListResponse getDocuments($page, $per, $sender_id)

Getting a list of documents

Fetches a list of documents.

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

$apiInstance = new TransferZero\Api\DocumentsApi();
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)
$associate_array['sender_id'] = 'sender_id_example'; // string | Allows filtering results by `sender_id`.  Example: `/v1/transactions?sender_id=b41d3cb7-6c54-4245-85fc-8e30690eb0f7`

try {
    $result = $apiInstance->getDocuments($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling DocumentsApi#getDocuments";
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
 **sender_id** | **string**| Allows filtering results by &#x60;sender_id&#x60;.  Example: &#x60;/v1/transactions?sender_id&#x3D;b41d3cb7-6c54-4245-85fc-8e30690eb0f7&#x60; | [optional]

### Return type

[**\TransferZero\Model\DocumentListResponse**](../Model/DocumentListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocuments**
> \TransferZero\Model\DocumentResponse postDocuments($document_request)

Creating a document

Creates a new document

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

$apiInstance = new TransferZero\Api\DocumentsApi();
$document_request = new \TransferZero\Model\DocumentRequest(); // \TransferZero\Model\DocumentRequest | 

try {
    $result = $apiInstance->postDocuments($document_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling DocumentsApi#postDocuments";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_request** | [**\TransferZero\Model\DocumentRequest**](../Model/DocumentRequest.md)|  |

### Return type

[**\TransferZero\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

