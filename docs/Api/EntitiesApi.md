# TransferZero\EntitiesApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEntities**](EntitiesApi.md#getEntities) | **GET** /risk_assessment/entities/{Entity Type}/summary | Listing entities
[**getEntitiesByParams**](EntitiesApi.md#getEntitiesByParams) | **GET** /risk_assessment/entities/{Entity Type}/search | Listing entities by params (rating and/or state)
[**getEntity**](EntitiesApi.md#getEntity) | **GET** /risk_assessment/entities/{Entity Type}/{Entity ID} | Fetching a entity
[**patchEntity**](EntitiesApi.md#patchEntity) | **PATCH** /risk_assessment/entities/{Entity Type}/{Entity ID} | Updating an entity
[**postEntity**](EntitiesApi.md#postEntity) | **POST** /risk_assessment/entities/{Entity Type}/{Entity ID} | Creating an entity


# **getEntities**
> \TransferZero\Model\EntityListResponse getEntities($entity_type, $ids)

Listing entities

Get a list of entities

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

$apiInstance = new TransferZero\Api\EntitiesApi();
$associate_array['entity_type'] = 'entity_type_example'; // string | Type of entities to get.  Example: `/risk_assessment/entities/sender/summary?ids[]=bf9ff782-e182-45ac-abea-5bce83ad6670&ids[]=344fb668-196d-43db-9d94-b34b7e6c7e0b`
$associate_array['ids'] = array('ids_example'); // string[] | Returns entities of specified entity(e.g Sender) id(s). This allows the fetching of entities for multiple e.g. senders  Example: `/risk_assessment/entities/sender?ids[]=bf9ff782-e182-45ac-abea-5bce83ad6670&ids[]=344fb668-196d-43db-9d94-b34b7e6c7e0b`

try {
    $result = $apiInstance->getEntities($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling EntitiesApi#getEntities";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Type of entities to get.  Example: &#x60;/risk_assessment/entities/sender/summary?ids[]&#x3D;bf9ff782-e182-45ac-abea-5bce83ad6670&amp;ids[]&#x3D;344fb668-196d-43db-9d94-b34b7e6c7e0b&#x60; |
 **ids** | [**string[]**](../Model/string.md)| Returns entities of specified entity(e.g Sender) id(s). This allows the fetching of entities for multiple e.g. senders  Example: &#x60;/risk_assessment/entities/sender?ids[]&#x3D;bf9ff782-e182-45ac-abea-5bce83ad6670&amp;ids[]&#x3D;344fb668-196d-43db-9d94-b34b7e6c7e0b&#x60; |

### Return type

[**\TransferZero\Model\EntityListResponse**](../Model/EntityListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesByParams**
> \TransferZero\Model\EntityListResponse getEntitiesByParams($entity_type, $rating, $state)

Listing entities by params (rating and/or state)

Get a list of entities scoped by the requested params (rating and/or state)

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

$apiInstance = new TransferZero\Api\EntitiesApi();
$associate_array['entity_type'] = 'entity_type_example'; // string | Type of entities to retrieve.  Example: `/risk_assessment/entities/sender/search?rating=extremely_high&state=complete`
$associate_array['rating'] = 'rating_example'; // string | Returns a list of entities scoped by the Entity rating (rating param can be one of 'extremely_high', 'high_risk', 'medium_risk' or 'low_risk')  Example: `/risk_assessment/entities/Sender::Business/search?rating=extremely_high`
$associate_array['state'] = 'state_example'; // string | Returns a list of entities scoped by the Entity state (state param can be one of 'complete' or 'incomplete')  Example: `/risk_assessment/entities/Sender::Business/search?state=complete`

try {
    $result = $apiInstance->getEntitiesByParams($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling EntitiesApi#getEntitiesByParams";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Type of entities to retrieve.  Example: &#x60;/risk_assessment/entities/sender/search?rating&#x3D;extremely_high&amp;state&#x3D;complete&#x60; |
 **rating** | **string**| Returns a list of entities scoped by the Entity rating (rating param can be one of &#39;extremely_high&#39;, &#39;high_risk&#39;, &#39;medium_risk&#39; or &#39;low_risk&#39;)  Example: &#x60;/risk_assessment/entities/Sender::Business/search?rating&#x3D;extremely_high&#x60; | [optional]
 **state** | **string**| Returns a list of entities scoped by the Entity state (state param can be one of &#39;complete&#39; or &#39;incomplete&#39;)  Example: &#x60;/risk_assessment/entities/Sender::Business/search?state&#x3D;complete&#x60; | [optional]

### Return type

[**\TransferZero\Model\EntityListResponse**](../Model/EntityListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntity**
> \TransferZero\Model\EntityCreateResponse getEntity($entity_type, $entity_id)

Fetching a entity

Returns a single entity by the Entity ID

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

$apiInstance = new TransferZero\Api\EntitiesApi();
$associate_array['entity_type'] = 'entity_type_example'; // string | Type of entities to get.  Example: `/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670`
$associate_array['entity_id'] = 'entity_id_example'; // string | ID of the entity to get.  Example: `/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getEntity($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling EntitiesApi#getEntity";
        echo $e->getMessage();
    }
}
?>
```

### Parameters
Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Type of entities to get.  Example: &#x60;/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **entity_id** | [**string**](../Model/.md)| ID of the entity to get.  Example: &#x60;/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\EntityCreateResponse**](../Model/EntityCreateResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEntity**
> \TransferZero\Model\EntityUpdateResponse patchEntity($entity_type, $entity_id, $entity_update_request)

Updating an entity

Updates a single entity by the Entity ID

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

$apiInstance = new TransferZero\Api\EntitiesApi();
$entity_type = 'entity_type_example'; // string | Type of entities to get.  Example: `/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670`
$entity_id = 'entity_id_example'; // string | ID of the entity to get.  Example: `/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670`
$entity_update_request = {
  "manual_fields": {
    "sanctions_lists_checked": "yes",
    "adverse_media": "no",
    "company_based_in_sanctioned_country": "yes",
    "formal_actions_less_than_6_months": "no",
    "formal_actions_6_to_12_months": "yes",
    "formal_actions_12_to_24_months": "no",
    "under_investigation": "yes",
    "remarks": "nothing to add"
  }
}; // \TransferZero\Model\EntityUpdateRequest | 

try {
    $result = $apiInstance->patchEntity($entity_type, $entity_id, $entity_update_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling EntitiesApi#patchEntity";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Type of entities to get.  Example: &#x60;/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **entity_id** | [**string**](../Model/.md)| ID of the entity to get.  Example: &#x60;/risk_assessment/entities/sender/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |
 **entity_update_request** | [**\TransferZero\Model\EntityUpdateRequest**](../Model/EntityUpdateRequest.md)|  |

### Return type

[**\TransferZero\Model\EntityUpdateResponse**](../Model/EntityUpdateResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEntity**
> \TransferZero\Model\EntityCreateResponse postEntity($entity_type, $entity_id, $entity_create_request)

Creating an entity

Creates a new entity.

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

$apiInstance = new TransferZero\Api\EntitiesApi();
$entity_type = 'entity_type_example'; // string | Type of entity to create.
$entity_id = 'entity_id_example'; // string | ID of entity type to create entity for.  Example: `/risk_assessment/entities/sender/e6f67a67-b2c2-4897-ad58-9fc3a9d8d991`
$entity_create_request = {
  "automated_fields": {
    "financial_institution": "true",
    "financial_regulator": "",
    "regulatory_licence_number": "",
    "amount_monthly_transactions": "Above $500,000",
    "country_of_incorporation": "AF",
    "trading_country": "US",
    "shareholders_nationalities": ["AF", "GB", "IT"],
    "directors_nationalities": ["AU", "BE", "GM"],
    "directors_residences": ["AR", "HK", "SS"],
    "sanction_check_state": "1"
  }
}; // \TransferZero\Model\EntityCreateRequest | 

try {
    $result = $apiInstance->postEntity($entity_type, $entity_id, $entity_create_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling EntitiesApi#postEntity";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity_type** | **string**| Type of entity to create. |
 **entity_id** | [**string**](../Model/.md)| ID of entity type to create entity for.  Example: &#x60;/risk_assessment/entities/sender/e6f67a67-b2c2-4897-ad58-9fc3a9d8d991&#x60; |
 **entity_create_request** | [**\TransferZero\Model\EntityCreateRequest**](../Model/EntityCreateRequest.md)|  |

### Return type

[**\TransferZero\Model\EntityCreateResponse**](../Model/EntityCreateResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

