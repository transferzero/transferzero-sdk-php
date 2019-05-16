# TransferZero\TransactionsApi

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**calculateTransactions**](TransactionsApi.md#calculateTransactions) | **POST** /transactions/calculate | Calculates transaction amounts for a transaction payload
[**getTransaction**](TransactionsApi.md#getTransaction) | **GET** /transactions/{Transaction ID} | Fetch a single transaction
[**getTransactions**](TransactionsApi.md#getTransactions) | **GET** /transactions | Get a list of transactions
[**payinTransaction**](TransactionsApi.md#payinTransaction) | **POST** /transactions/{Transaction ID}/payin | Creates a fake payin for transaction
[**payoutTransaction**](TransactionsApi.md#payoutTransaction) | **POST** /transactions/{Transaction ID}/payout | Creates a fake payout for transaction
[**postTransactions**](TransactionsApi.md#postTransactions) | **POST** /transactions | Creates a new transaction
[**validateTransactions**](TransactionsApi.md#validateTransactions) | **POST** /transactions/validate | Validates a transaction payload


# **calculateTransactions**
> \TransferZero\Model\TransactionResponse calculateTransactions($transaction_request)

Calculates transaction amounts for a transaction payload

Calculates the input, output and fee amounts for the recipients in a transaction payload

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_request = new \TransferZero\Model\TransactionRequest(); // \TransferZero\Model\TransactionRequest | 

try {
    $result = $apiInstance->calculateTransactions($transaction_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#calculateTransactions";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request** | [**\TransferZero\Model\TransactionRequest**](../Model/TransactionRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransaction**
> \TransferZero\Model\TransactionResponse getTransaction($transaction_id)

Fetch a single transaction

Finds and returns a Transaction created by the requesting API key, using the provided Transaction ID.

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_id = 'transaction_id_example'; // string | ID of the transaction.  Example: `/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670`

try {
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#getTransaction";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| ID of the transaction.  Example: &#x60;/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670&#x60; |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactions**
> \TransferZero\Model\TransactionListResponse getTransactions($page, $per, $external_id)

Get a list of transactions

Retrieves a paginated list of the Transactions created by your API key.

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$page = 1; // int | The page number to request (defaults to 1)
$per = 10; // int | The number of results to load per page (defaults to 10)
$external_id = 'external_id_example'; // string | Allows filtering results by `external_id`.  Example: `/v1/senders?external_id=26ec8517-2f0d-48c0-b74f-0bccb9ab3a87`

try {
    $result = $apiInstance->getTransactions($page, $per, $external_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#getTransactions";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to request (defaults to 1) | [optional]
 **per** | **int**| The number of results to load per page (defaults to 10) | [optional]
 **external_id** | **string**| Allows filtering results by &#x60;external_id&#x60;.  Example: &#x60;/v1/senders?external_id&#x3D;26ec8517-2f0d-48c0-b74f-0bccb9ab3a87&#x60; | [optional]

### Return type

[**\TransferZero\Model\TransactionListResponse**](../Model/TransactionListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payinTransaction**
> \TransferZero\Model\TransactionResponse payinTransaction($transaction_id, $payin_method_request)

Creates a fake payin for transaction

This method is available only in sandbox environment and is supposed to be used only for testing integration. It allows you to emulate a payin without paying actual money.

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_id = 'transaction_id_example'; // string | ID of the transaction to payin.  Example: `/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670/payin`
$payin_method_request = new \TransferZero\Model\PayinMethodRequest(); // \TransferZero\Model\PayinMethodRequest | 

try {
    $result = $apiInstance->payinTransaction($transaction_id, $payin_method_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#payinTransaction";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| ID of the transaction to payin.  Example: &#x60;/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670/payin&#x60; |
 **payin_method_request** | [**\TransferZero\Model\PayinMethodRequest**](../Model/PayinMethodRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutTransaction**
> \TransferZero\Model\TransactionResponse payoutTransaction($transaction_id)

Creates a fake payout for transaction

This method is available only in sandbox environment and is supposed to be used only for testing. It allows you to emulate the payout of a transaction after payin.

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_id = 'transaction_id_example'; // string | ID of the transaction to payout.  Example: `/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670/payout`

try {
    $result = $apiInstance->payoutTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#payoutTransaction";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | [**string**](../Model/.md)| ID of the transaction to payout.  Example: &#x60;/v1/transactions/bf9ff782-e182-45ac-abea-5bce83ad6670/payout&#x60; |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTransactions**
> \TransferZero\Model\TransactionResponse postTransactions($transaction_request)

Creates a new transaction

Transactions are the main objects in the TransferZero API, so it's important to understand how to create and manage them. Transactions facilitate money movement from one Sender in a specific currency to one or multiple Recipients in another currency.  The main flow of a successful transaction flow is the following - - Transaction is created linking the Sender to the Recipient(s) with the requested amounts. - Once the sender is KYC'd and approved the transaction can be funded. - Once the transaction is funded, we will initiate the payout to the recipient(s). - After the recipient (or all recipients) has received the money, the transaction is finished.

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_request = new \TransferZero\Model\TransactionRequest(); // \TransferZero\Model\TransactionRequest | 

try {
    $result = $apiInstance->postTransactions($transaction_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#postTransactions";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request** | [**\TransferZero\Model\TransactionRequest**](../Model/TransactionRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTransactions**
> \TransferZero\Model\TransactionResponse validateTransactions($transaction_request)

Validates a transaction payload

Validates fields in a transaction payload and displays invalid or missing fields

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

$apiInstance = new TransferZero\Api\TransactionsApi();
$transaction_request = new \TransferZero\Model\TransactionRequest(); // \TransferZero\Model\TransactionRequest | 

try {
    $result = $apiInstance->validateTransactions($transaction_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling TransactionsApi#validateTransactions";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_request** | [**\TransferZero\Model\TransactionRequest**](../Model/TransactionRequest.md)|  |

### Return type

[**\TransferZero\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

