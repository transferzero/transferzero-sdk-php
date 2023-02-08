# TransferZero\PoliticallyExposedPeopleApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePoliticallyExposedPerson**](PoliticallyExposedPeopleApi.md#deletePoliticallyExposedPerson) | **DELETE** /politically_exposed_people/{PoliticallyExposedPerson ID} | Deleting a politically exposed person
[**getPoliticallyExposedPeople**](PoliticallyExposedPeopleApi.md#getPoliticallyExposedPeople) | **GET** /politically_exposed_people | Listing Politically Exposed People
[**getPoliticallyExposedPerson**](PoliticallyExposedPeopleApi.md#getPoliticallyExposedPerson) | **GET** /politically_exposed_people/{PoliticallyExposedPerson ID} | Fetching a politically exposed person
[**patchPoliticallyExposedPerson**](PoliticallyExposedPeopleApi.md#patchPoliticallyExposedPerson) | **PATCH** /politically_exposed_people/{PoliticallyExposedPerson ID} | Updating a politically exposed person
[**postPoliticallyExposedPeople**](PoliticallyExposedPeopleApi.md#postPoliticallyExposedPeople) | **POST** /politically_exposed_people | Creating a politically exposed person


# **deletePoliticallyExposedPerson**
> deletePoliticallyExposedPerson($politically_exposed_person_id)

Deleting a politically exposed person

Deletes a single politically exposed person given the PEP ID.

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

$apiInstance = new TransferZero\Api\PoliticallyExposedPeopleApi();
$politically_exposed_person_id = 56; // int | The ID of the Politically Exposed Person you want to delete.  Example: `/v1/politically_exposed_people/1`

try {
    $apiInstance->deletePoliticallyExposedPerson($politically_exposed_person_id);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PoliticallyExposedPeopleApi#deletePoliticallyExposedPerson";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **politically_exposed_person_id** | **int**| The ID of the Politically Exposed Person you want to delete.  Example: &#x60;/v1/politically_exposed_people/1&#x60; |

### Return type

void (empty response body)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoliticallyExposedPeople**
> \TransferZero\Model\PoliticallyExposedPersonListResponse getPoliticallyExposedPeople($sender_id)

Listing Politically Exposed People

Get a list of politically exposed people

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

$apiInstance = new TransferZero\Api\PoliticallyExposedPeopleApi();
$associate_array['sender_id'] = 'sender_id_example'; // string | The ID of the Sender to whom the politically exposed people are attached to.  Example: `/v1/politically_exposed_people?sender_id=344fb668-196d-43db-9d94-b34b7e6c7e0b`

try {
    $result = $apiInstance->getPoliticallyExposedPeople($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PoliticallyExposedPeopleApi#getPoliticallyExposedPeople";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender_id** | [**string**](../Model/.md)| The ID of the Sender to whom the politically exposed people are attached to.  Example: &#x60;/v1/politically_exposed_people?sender_id&#x3D;344fb668-196d-43db-9d94-b34b7e6c7e0b&#x60; | [optional]

### Return type

[**\TransferZero\Model\PoliticallyExposedPersonListResponse**](../Model/PoliticallyExposedPersonListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoliticallyExposedPerson**
> \TransferZero\Model\PoliticallyExposedPersonResponse getPoliticallyExposedPerson($politically_exposed_person_id, $sender_id)

Fetching a politically exposed person

Returns a single politically exposed person given the PEP ID. Can optionally be filtered using the sender_id query parameter.

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

$apiInstance = new TransferZero\Api\PoliticallyExposedPeopleApi();
$associate_array['politically_exposed_person_id'] = 56; // int | The ID of the Politically Exposed Person you want to retrieve.  Example: `/v1/politically_exposed_people/1?sender_id=344fb668-196d-43db-9d94-b34b7e6c7e0b`
$associate_array['sender_id'] = 'sender_id_example'; // string | The ID of the Sender to whom the politically exposed person is attached to.

try {
    $result = $apiInstance->getPoliticallyExposedPerson($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PoliticallyExposedPeopleApi#getPoliticallyExposedPerson";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **politically_exposed_person_id** | **int**| The ID of the Politically Exposed Person you want to retrieve.  Example: &#x60;/v1/politically_exposed_people/1?sender_id&#x3D;344fb668-196d-43db-9d94-b34b7e6c7e0b&#x60; |
 **sender_id** | [**string**](../Model/.md)| The ID of the Sender to whom the politically exposed person is attached to. | [optional]

### Return type

[**\TransferZero\Model\PoliticallyExposedPersonResponse**](../Model/PoliticallyExposedPersonResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPoliticallyExposedPerson**
> \TransferZero\Model\PoliticallyExposedPersonResponse patchPoliticallyExposedPerson($politically_exposed_person_id, $politically_exposed_person)

Updating a politically exposed person

Updates a single politically exposed person given the PEP ID.

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

$apiInstance = new TransferZero\Api\PoliticallyExposedPeopleApi();
$politically_exposed_person_id = 56; // int | The ID of the Politically Exposed Person you want to update.  Example: `/v1/politically_exposed_people/1`
$politically_exposed_person = new \TransferZero\Model\PoliticallyExposedPerson(); // \TransferZero\Model\PoliticallyExposedPerson | 

try {
    $result = $apiInstance->patchPoliticallyExposedPerson($politically_exposed_person_id, $politically_exposed_person);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PoliticallyExposedPeopleApi#patchPoliticallyExposedPerson";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **politically_exposed_person_id** | **int**| The ID of the Politically Exposed Person you want to update.  Example: &#x60;/v1/politically_exposed_people/1&#x60; |
 **politically_exposed_person** | [**\TransferZero\Model\PoliticallyExposedPerson**](../Model/PoliticallyExposedPerson.md)|  |

### Return type

[**\TransferZero\Model\PoliticallyExposedPersonResponse**](../Model/PoliticallyExposedPersonResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPoliticallyExposedPeople**
> \TransferZero\Model\PoliticallyExposedPersonResponse postPoliticallyExposedPeople($politically_exposed_person)

Creating a politically exposed person

Creates a new politically exposed person in our system.

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

$apiInstance = new TransferZero\Api\PoliticallyExposedPeopleApi();
$politically_exposed_person = { 
  "politically_exposed_person": {
    "name": "Ronald Reagan",
    "position": "President of the United States",
    "started_date": "1981-01-20T00:00:00.000Z",
    "ended_date": "1989-01-20T00:00:00.000Z",
    "sender_id": "344fb668-196d-43db-9d94-b34b7e6c7e0b"
  }
}; // \TransferZero\Model\PoliticallyExposedPerson | 

try {
    $result = $apiInstance->postPoliticallyExposedPeople($politically_exposed_person);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling PoliticallyExposedPeopleApi#postPoliticallyExposedPeople";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **politically_exposed_person** | [**\TransferZero\Model\PoliticallyExposedPerson**](../Model/PoliticallyExposedPerson.md)|  |

### Return type

[**\TransferZero\Model\PoliticallyExposedPersonResponse**](../Model/PoliticallyExposedPersonResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

