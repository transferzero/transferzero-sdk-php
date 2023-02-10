# TransferZero\RecipientsApi

All URIs are relative to *https://api-sandbox.bitpesa.co/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRecipient**](RecipientsApi.md#deleteRecipient) | **DELETE** /recipients/{Recipient ID} | Cancelling a recipient
[**getRecipients**](RecipientsApi.md#getRecipients) | **GET** /recipients | Getting a list of recipients with filtering
[**patchRecipient**](RecipientsApi.md#patchRecipient) | **PATCH** /recipients/{Recipient ID} | Updating a recipient
[**proofOfPayments**](RecipientsApi.md#proofOfPayments) | **GET** /recipients/{Recipient ID}/proof_of_payments | Returns list of proof of payments


# **deleteRecipient**
> \TransferZero\Model\RecipientResponse deleteRecipient($recipient_id)

Cancelling a recipient

Cancels the payment to the recipient specified in the URL path.  Please note recipients where the `may_cancel` attribute is true will be cancelled immediately. If the `may_cancel` attribute is false you can still try to cancel the recipient, however it will only gets cancelled if we will receive a confirmation from our partner that the payment has failed

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

$apiInstance = new TransferZero\Api\RecipientsApi();
$recipient_id = 'recipient_id_example'; // string | ID of recipient to cancel.  Example: `/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33`

try {
    $result = $apiInstance->deleteRecipient($recipient_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling RecipientsApi#deleteRecipient";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | [**string**](../Model/.md)| ID of recipient to cancel.  Example: &#x60;/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33&#x60; |

### Return type

[**\TransferZero\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecipients**
> \TransferZero\Model\RecipientListResponse getRecipients($page, $per, $created_at_from, $created_at_to, $amount_from, $amount_to, $state, $currency)

Getting a list of recipients with filtering

Fetches details of all recipients.

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

$apiInstance = new TransferZero\Api\RecipientsApi();
$associate_array['page'] = 1; // int | The page number to request (defaults to 1)
$associate_array['per'] = 10; // int | The number of results to load per page (defaults to 10)
$associate_array['created_at_from'] = 'created_at_from_example'; // string | Start date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$associate_array['created_at_to'] = 'created_at_to_example'; // string | End date to filter recipients by created_at range Allows filtering results by the specified `created_at` timeframe.  Example: `/v1/recipients?created_at_from=2018-06-06&created_at_to=2018-06-08`
$associate_array['amount_from'] = 'amount_from_example'; // string | Minimum amount to filter recipients by amount range.  Allows filtering results by the specified `amount` range. When using this filter, the `currency` should also be specified.  Example: `/v1/recipients?currency=NGN&amount_from=83.76672339&amount_to=83.76672339`
$associate_array['amount_to'] = 'amount_to_example'; // string | Max amount to filter recipients by amount range.  Allows filtering results by the specified `amount` range. When using this filter, the `currency` should also be specified.  Example: `/v1/recipients?currency=NGN&amount_from=83.76672339&amount_to=83.76672339`
$associate_array['state'] = array('state_example'); // string[] | Allows filtering results by `state` of recipient. See [API Documentation - Recipient state](https://docs.transferzero.com/docs/transaction-flow/#state) for possible states.  Example: `/v1/recipients?state[]=error&state[]=initial`
$associate_array['currency'] = array('currency_example'); // string[] | Allows filtering results by `input_currency`.  Additionally required when filtering by an amount range Example: `/v1/recipients?currency[]=KES&currency[]=NGN`

try {
    $result = $apiInstance->getRecipients($associate_array);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling RecipientsApi#getRecipients";
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
 **amount_from** | **string**| Minimum amount to filter recipients by amount range.  Allows filtering results by the specified &#x60;amount&#x60; range. When using this filter, the &#x60;currency&#x60; should also be specified.  Example: &#x60;/v1/recipients?currency&#x3D;NGN&amp;amount_from&#x3D;83.76672339&amp;amount_to&#x3D;83.76672339&#x60; | [optional]
 **amount_to** | **string**| Max amount to filter recipients by amount range.  Allows filtering results by the specified &#x60;amount&#x60; range. When using this filter, the &#x60;currency&#x60; should also be specified.  Example: &#x60;/v1/recipients?currency&#x3D;NGN&amp;amount_from&#x3D;83.76672339&amp;amount_to&#x3D;83.76672339&#x60; | [optional]
 **state** | [**string[]**](../Model/string.md)| Allows filtering results by &#x60;state&#x60; of recipient. See [API Documentation - Recipient state](https://docs.transferzero.com/docs/transaction-flow/#state) for possible states.  Example: &#x60;/v1/recipients?state[]&#x3D;error&amp;state[]&#x3D;initial&#x60; | [optional]
 **currency** | [**string[]**](../Model/string.md)| Allows filtering results by &#x60;input_currency&#x60;.  Additionally required when filtering by an amount range Example: &#x60;/v1/recipients?currency[]&#x3D;KES&amp;currency[]&#x3D;NGN&#x60; | [optional]

### Return type

[**\TransferZero\Model\RecipientListResponse**](../Model/RecipientListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecipient**
> \TransferZero\Model\RecipientResponse patchRecipient($recipient_id, $recipient_request)

Updating a recipient

Updates the recipient specified in the URL path.  Please note that only recipients where the `editable` field is true can be modified. Once the recipient is modified any subsequent payout tries will be sent to the updated details.

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

$apiInstance = new TransferZero\Api\RecipientsApi();
$recipient_id = 'recipient_id_example'; // string | ID of recipient to update.  Example: `/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33`
$recipient_request = new \TransferZero\Model\RecipientRequest(); // \TransferZero\Model\RecipientRequest | 

try {
    $result = $apiInstance->patchRecipient($recipient_id, $recipient_request);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling RecipientsApi#patchRecipient";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | [**string**](../Model/.md)| ID of recipient to update.  Example: &#x60;/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33&#x60; |
 **recipient_request** | [**\TransferZero\Model\RecipientRequest**](../Model/RecipientRequest.md)|  |

### Return type

[**\TransferZero\Model\RecipientResponse**](../Model/RecipientResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proofOfPayments**
> \TransferZero\Model\ProofOfPaymentListResponse proofOfPayments($recipient_id)

Returns list of proof of payments

Returns a list of uploaded proof of payment files for a transaction recipient

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

$apiInstance = new TransferZero\Api\RecipientsApi();
$recipient_id = 'recipient_id_example'; // string | ID of the recipient for whom the proof of payments will be returned.  Example: `/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33/proof_of_payments`

try {
    $result = $apiInstance->proofOfPayments($recipient_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling RecipientsApi#proofOfPayments";
        echo $e->getMessage();
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipient_id** | [**string**](../Model/.md)| ID of the recipient for whom the proof of payments will be returned.  Example: &#x60;/v1/recipients/9d4d7b73-a94c-4979-ab57-09074fd55d33/proof_of_payments&#x60; |

### Return type

[**\TransferZero\Model\ProofOfPaymentListResponse**](../Model/ProofOfPaymentListResponse.md)

### Authorization

[AuthorizationKey](../../README.md#AuthorizationKey), [AuthorizationNonce](../../README.md#AuthorizationNonce), [AuthorizationSecret](../../README.md#AuthorizationSecret), [AuthorizationSignature](../../README.md#AuthorizationSignature)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

