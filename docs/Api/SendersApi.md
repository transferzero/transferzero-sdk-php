# TransferZero\SendersApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSender**](SendersApi.md#deleteSender) | **DELETE** /senders/{Sender ID} | Deleting a sender
[**getSender**](SendersApi.md#getSender) | **GET** /senders/{Sender ID} | Fetching a sender
[**getSenders**](SendersApi.md#getSenders) | **GET** /senders | Listing senders
[**patchSender**](SendersApi.md#patchSender) | **PATCH** /senders/{Sender ID} | Updating a sender
[**postSenders**](SendersApi.md#postSenders) | **POST** /senders | Creating a sender


# **deleteSender**
> \TransferZero\Model\SenderResponse deleteSender($sender_id)

Deleting a sender

Deletes a single sender by the Sender ID

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

$apiInstance = new TransferZero\Api\SendersApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to delete.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->deleteSender($sender_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#deleteSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to delete.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSender**
> \TransferZero\Model\SenderResponse getSender($sender_id)

Fetching a sender

Returns a single sender by the Sender ID

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

$apiInstance = new TransferZero\Api\SendersApi();
$associate_array['sender_id'] = 'sender_id_example'; // string | ID of the sender to get.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getSender($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#getSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to get.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSenders**
> \TransferZero\Model\SenderListResponse getSenders($page, $per, $created_at_from, $created_at_to, $external_id)

Listing senders

Get a list of available senders

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

$apiInstance = new TransferZero\Api\SendersApi();
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)
$associate_array['created_at_from'] = 'created_at_from_example'; // string | Start date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$associate_array['created_at_to'] = 'created_at_to_example'; // string | End date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$associate_array['external_id'] = 'external_id_example'; // string | Allows filtering results by `external_id`.  Example: `/v1/senders?external_id=26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`

try {
    $result = $apiInstance->getSenders($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#getSenders";
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
 **created_at_from** | **string**| Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **created_at_to** | **string**| End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; | [optional]
 **external_id** | **string**| Allows filtering results by &#x60;external_id&#x60;.  Example: &#x60;/v1/senders?external_id&#x3D;26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; | [optional]

### Return type

[**\TransferZero\Model\SenderListResponse**](../Model/SenderListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSender**
> \TransferZero\Model\SenderResponse patchSender($sender_id, $sender_request)

Updating a sender

Updates a single sender by the Sender ID

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

$apiInstance = new TransferZero\Api\SendersApi();
$sender_id = 'sender_id_example'; // string | ID of the sender to get.  Example: `/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670`
$sender_request = new \TransferZero\Model\SenderRequest(); // \TransferZero\Model\SenderRequest | 

try {
    $result = $apiInstance->patchSender($sender_id, $sender_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#patchSender";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| ID of the sender to get.  Example: &#x60;/v1/senders/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **sender_request** | [**\TransferZero\Model\SenderRequest**](../Model/SenderRequest.md)|  |

### Return type

[**\TransferZero\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSenders**
> \TransferZero\Model\SenderResponse postSenders($sender_request)

Creating a sender

Creates a new sender in our system.

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

$apiInstance = new TransferZero\Api\SendersApi();
$sender_request = {
  "sender": {
    "country": "UG",
    "phone_number": "+256752403639",
    "email": "example@home.org",
    "first_name": "Johnny",
    "last_name": "English",
    "city": "Kampala",
    "street": "Unknown 17-3",
    "address_description": "Description of address",
    "postal_code": "798983",
    "birth_date": "1900-12-31",
    "documents": [
      {
        "upload": "data:image/png;base64,iVBORw0KGg...lFTkSuQmCC",
        "upload_file_name": "example.png",
        "metadata": {
          "my": "data"
        }
      }
    ],
    "politically_exposed_people": [
      {
        "name": "Ronald Reagan",
        "position": "President of the United States",
        "started_date": "1981-01-20T00:00:00.000Z",
        "ended_date": "1989-01-20T00:00:00.000Z",
        "sender_id": "344fb668-196d-43db-9d94-b34b7e6c7e0b"
      }
    ],
    "ip": "127.0.0.1",
    "external_id": "806ec63a-a5a7-43cc-9d75-1ee74fbcc026",
    "metadata": {
      "my": "data"
    }
  }
}; // \TransferZero\Model\SenderRequest | 

try {
    $result = $apiInstance->postSenders($sender_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling SendersApi#postSenders";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_request** | [**\TransferZero\Model\SenderRequest**](../Model/SenderRequest.md)|  |

### Return type

[**\TransferZero\Model\SenderResponse**](../Model/SenderResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

