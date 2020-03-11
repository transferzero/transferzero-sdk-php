#  TransferZero Client Library for PHP

This is the PHP client library for use with the TransferZero API.
To use the API please register and obtain valid API keys on the [TransferZero developer portal](https://developers.transferzero.com/).

For more information, please visit:

* [API Documentation](https://docs.transferzero.com)
  * [Onboarding guide](https://docs.transferzero.com/docs/quick-integration/)
  * [Transaction flow](https://docs.transferzero.com/docs/transaction-flow/)
  * [Additional features](https://docs.transferzero.com/docs/additional-features/)
* [API Specification](https://api.transferzero.com/documentation)

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0
- Package version: 1.6.0

## Requirements

PHP 7.1 and later

## Installation & Usage
### Composer

To install via [Composer](http://getcomposer.org/), run:

```
composer require transferzero/transferzero-php-sdk
```

Then run `composer install`

New to Composer? Learn more at [Composer's Getting Started page](https://getcomposer.org/doc/00-intro.md)

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once('/path/to/TransferZeroSdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
```

## Authentication

Set the API Key and Secret on the Configuration object for authentication:
```php
TransferZero\Configuration::getDefaultConfiguration()
  ->setHost("https://api-sandbox.transferzero.com/v1")
  ->setApiKey("<key>")
  ->setApiSecret("<secret>");
```

## Example

```php

$apiInstance = new TransferZero\Api\APILogsApi();
$api_log_id = 'api_log_id_example'; // string | ID of the API log to retrieve  Example: `/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407`

try {
    $result = $apiInstance->getApiLog($api_log_id);
    print_r($result);
} catch (Exception $e) {
    if ($e->isValidationError()) {
        $response = $e->getResponseObject();
        echo "Validation error(s) occurred when calling the endpoint";
        print_r($response);
    } else {
        echo "An exception occurred when calling APILogsApi#getApiLog";
        echo $e->getMessage();
    }
}

?>
```

You can find more examples in the `examples` directory on the features required by the [Onboarding documentation](https://docs.transferzero.com/docs/quick-integration/)

## Webhooks

To parse webhooks you can use the following snippet:

```php
$webhook_content = "{ (...) }"; // The string received through the webhook callback url
$webhook_headers = [
    "Authorization-Nonce" => "<authorization-nonce>",
    "Authorization-Key" => "<authorization-key>",
    "Authorization-Signature" => "<authorization-signature>"
]; // The headers from the webook callback url
$webhook_url = "<url>"; // The url of the webhook callback

$webhooksApi = new TransferZero\Api\WebhooksApi();
if (!$webhooksApi->validateWebhookRequest($webhook_url, $webhook_content, $webhook_headers)) {
    echo "Webhook request validation failed";
    return false;
}

$webhook = $webhooksApi->parseResponseString($webhook_content, 'Webhook');

if (strpos($webhook->getEvent(), 'transaction') === 0) {
    $transactionWebhook = $webhooksApi->parseResponseString($webhook_content, 'TransactionWebhook');
    print_r($transactionWebhook->getObject()->__toString());
} elseif (strpos($webhook->getEvent(), 'recipient') === 0) {
    $recipientWebhook = $webhooksApi->parseResponseString($webhook_content, 'RecipientWebhook');
    print_r($recipientWebhook->getObject()->__toString());
} elseif (strpos($webhook->getEvent(), 'payout_method') === 0) {
    $payoutMethodWebhook = $webhooksApi->parseResponseString($webhook_content, 'PayoutMethodWebhook');
    print_r($payoutMethodWebhook->getObject()->__toString());
} elseif (strpos($webhook->getEvent(), 'sender') === 0) {
    $senderWebhook = $webhooksApi->parseResponseString($webhook_content, 'SenderWebhook');
    print_r($senderWebhook->getObject()->__toString());
} elseif (strpos($webhook->getEvent(), 'document') === 0) {
    $documentWebhook = $webhooksApi->parseResponseString($webhook_content, 'DocumentWebhook');
    print_r($documentWebhook->getObject()->__toString());
}
```

## Documentation for API Endpoints

All URIs are relative to *https://api-sandbox.transferzero.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APILogsApi* | [**getApiLog**](docs/Api/APILogsApi.md#getapilog) | **GET** /api_logs/{API Log ID} | Fetch an individual API log
*APILogsApi* | [**getApiLogs**](docs/Api/APILogsApi.md#getapilogs) | **GET** /api_logs | Fetch a list of API logs
*AccountDebitsApi* | [**getAccountsDebit**](docs/Api/AccountDebitsApi.md#getaccountsdebit) | **GET** /accounts/debits/{Account Debit ID} | Fetching an account debit
*AccountDebitsApi* | [**getAccountsDebits**](docs/Api/AccountDebitsApi.md#getaccountsdebits) | **GET** /accounts/debits | Listing Accounts debits
*AccountDebitsApi* | [**postAccountsDebits**](docs/Api/AccountDebitsApi.md#postaccountsdebits) | **POST** /accounts/debits | Creating an account debit
*AccountValidationApi* | [**postAccountValidations**](docs/Api/AccountValidationApi.md#postaccountvalidations) | **POST** /account_validations | Validates the existence of a bank account or a mobile phone number
*AccountsApi* | [**getAccount**](docs/Api/AccountsApi.md#getaccount) | **GET** /accounts/{Currency} | Fetches account balance for specified currrency
*AccountsApi* | [**getAccounts**](docs/Api/AccountsApi.md#getaccounts) | **GET** /accounts | Fetches account balances for all currencies
*CurrencyInfoApi* | [**infoCurrencies**](docs/Api/CurrencyInfoApi.md#infocurrencies) | **GET** /info/currencies | Getting a list of possible requested currencies
*CurrencyInfoApi* | [**infoCurrenciesIn**](docs/Api/CurrencyInfoApi.md#infocurrenciesin) | **GET** /info/currencies/in | Getting a list of possible input currencies
*CurrencyInfoApi* | [**infoCurrenciesOut**](docs/Api/CurrencyInfoApi.md#infocurrenciesout) | **GET** /info/currencies/out | Getting a list of possible output currencies
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /documents/{Document ID} | Fetching a document
*DocumentsApi* | [**getDocuments**](docs/Api/DocumentsApi.md#getdocuments) | **GET** /documents | Getting a list of documents
*DocumentsApi* | [**postDocuments**](docs/Api/DocumentsApi.md#postdocuments) | **POST** /documents | Creating a document
*LogsApi* | [**getWebhookLog**](docs/Api/LogsApi.md#getwebhooklog) | **GET** /logs/{Webhook Log ID} | Fetch an individual webhook log
*LogsApi* | [**getWebhookLogs**](docs/Api/LogsApi.md#getwebhooklogs) | **GET** /logs/webhooks | Fetch a list of webhook logs
*PaymentMethodsApi* | [**paymentMethodsIn**](docs/Api/PaymentMethodsApi.md#paymentmethodsin) | **GET** /info/payment_methods/in | This method returns possible payin methods.
*PaymentMethodsApi* | [**paymentMethodsOut**](docs/Api/PaymentMethodsApi.md#paymentmethodsout) | **GET** /info/payment_methods/out | This method returns possible payout methods.
*PayoutMethodsApi* | [**deletePayoutMethod**](docs/Api/PayoutMethodsApi.md#deletepayoutmethod) | **DELETE** /payout_methods/{Payout Method ID} | Deleting a payout method
*PayoutMethodsApi* | [**getPayoutMethod**](docs/Api/PayoutMethodsApi.md#getpayoutmethod) | **GET** /payout_methods/{Payout Method ID} | Fetching a payout method
*PayoutMethodsApi* | [**getPayoutMethods**](docs/Api/PayoutMethodsApi.md#getpayoutmethods) | **GET** /payout_methods | Listing payout methods
*PayoutMethodsApi* | [**patchPayoutMethod**](docs/Api/PayoutMethodsApi.md#patchpayoutmethod) | **PATCH** /payout_methods/{Payout Method ID} | Updating a payout method
*PayoutMethodsApi* | [**postPayoutMethods**](docs/Api/PayoutMethodsApi.md#postpayoutmethods) | **POST** /payout_methods | Creating a payout method
*RecipientsApi* | [**deleteRecipient**](docs/Api/RecipientsApi.md#deleterecipient) | **DELETE** /recipients/{Recipient ID} | Cancelling a recipient
*RecipientsApi* | [**getRecipients**](docs/Api/RecipientsApi.md#getrecipients) | **GET** /recipients | Getting a list of recipients with filtering
*RecipientsApi* | [**patchRecipient**](docs/Api/RecipientsApi.md#patchrecipient) | **PATCH** /recipients/{Recipient ID} | Updating a recipient
*SendersApi* | [**deleteSender**](docs/Api/SendersApi.md#deletesender) | **DELETE** /senders/{Sender ID} | Deleting a sender
*SendersApi* | [**getSender**](docs/Api/SendersApi.md#getsender) | **GET** /senders/{Sender ID} | Fetching a sender
*SendersApi* | [**getSenders**](docs/Api/SendersApi.md#getsenders) | **GET** /senders | Listing senders
*SendersApi* | [**patchSender**](docs/Api/SendersApi.md#patchsender) | **PATCH** /senders/{Sender ID} | Updating a sender
*SendersApi* | [**postSenders**](docs/Api/SendersApi.md#postsenders) | **POST** /senders | Creating a sender
*TransactionsApi* | [**calculateTransactions**](docs/Api/TransactionsApi.md#calculatetransactions) | **POST** /transactions/calculate | Calculates transaction amounts for a transaction payload
*TransactionsApi* | [**createAndFundTransaction**](docs/Api/TransactionsApi.md#createandfundtransaction) | **POST** /transactions/create_and_fund | Creates a new transaction and funds it from account balance
*TransactionsApi* | [**getTransaction**](docs/Api/TransactionsApi.md#gettransaction) | **GET** /transactions/{Transaction ID} | Fetch a single transaction
*TransactionsApi* | [**getTransactions**](docs/Api/TransactionsApi.md#gettransactions) | **GET** /transactions | Get a list of transactions
*TransactionsApi* | [**payinTransaction**](docs/Api/TransactionsApi.md#payintransaction) | **POST** /transactions/{Transaction ID}/payin | Creates a fake payin for transaction
*TransactionsApi* | [**payoutTransaction**](docs/Api/TransactionsApi.md#payouttransaction) | **POST** /transactions/{Transaction ID}/payout | Creates a fake payout for transaction
*TransactionsApi* | [**postTransactions**](docs/Api/TransactionsApi.md#posttransactions) | **POST** /transactions | Creates a new transaction
*TransactionsApi* | [**validateTransactions**](docs/Api/TransactionsApi.md#validatetransactions) | **POST** /transactions/validate | Validates a transaction payload
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{Webhook ID} | Unsubscribing from a webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{Webhook ID} | Find a webhook&#39;s details
*WebhooksApi* | [**getWebhookEvents**](docs/Api/WebhooksApi.md#getwebhookevents) | **GET** /webhooks/events | Find possible webhook events
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Listing webhooks
*WebhooksApi* | [**postWebhooks**](docs/Api/WebhooksApi.md#postwebhooks) | **POST** /webhooks | Creating a webhook


## Documentation For Models

 - [Account](docs/Model/Account.md)
 - [AccountListResponse](docs/Model/AccountListResponse.md)
 - [AccountMeta](docs/Model/AccountMeta.md)
 - [AccountResponse](docs/Model/AccountResponse.md)
 - [AccountValidationError](docs/Model/AccountValidationError.md)
 - [AccountValidationRequest](docs/Model/AccountValidationRequest.md)
 - [AccountValidationResponse](docs/Model/AccountValidationResponse.md)
 - [AccountValidationResult](docs/Model/AccountValidationResult.md)
 - [ApiLog](docs/Model/ApiLog.md)
 - [ApiLogListResponse](docs/Model/ApiLogListResponse.md)
 - [ApiLogResponse](docs/Model/ApiLogResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [CurrencyExchange](docs/Model/CurrencyExchange.md)
 - [CurrencyExchangeListResponse](docs/Model/CurrencyExchangeListResponse.md)
 - [CurrencyListResponse](docs/Model/CurrencyListResponse.md)
 - [CurrencyOpposite](docs/Model/CurrencyOpposite.md)
 - [Debit](docs/Model/Debit.md)
 - [DebitListRequest](docs/Model/DebitListRequest.md)
 - [DebitListResponse](docs/Model/DebitListResponse.md)
 - [DebitRequest](docs/Model/DebitRequest.md)
 - [DebitRequestWrapper](docs/Model/DebitRequestWrapper.md)
 - [DebitResponse](docs/Model/DebitResponse.md)
 - [Document](docs/Model/Document.md)
 - [DocumentListResponse](docs/Model/DocumentListResponse.md)
 - [DocumentRequest](docs/Model/DocumentRequest.md)
 - [DocumentResponse](docs/Model/DocumentResponse.md)
 - [DocumentWebhook](docs/Model/DocumentWebhook.md)
 - [ErrorStatus](docs/Model/ErrorStatus.md)
 - [FieldDescription](docs/Model/FieldDescription.md)
 - [FieldSelectValidation](docs/Model/FieldSelectValidation.md)
 - [FieldValidation](docs/Model/FieldValidation.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaginationMeta](docs/Model/PaginationMeta.md)
 - [PayinMethod](docs/Model/PayinMethod.md)
 - [PayinMethodDetails](docs/Model/PayinMethodDetails.md)
 - [PayinMethodDetailsBTC](docs/Model/PayinMethodDetailsBTC.md)
 - [PayinMethodDetailsMobile](docs/Model/PayinMethodDetailsMobile.md)
 - [PayinMethodDetailsNGNBank](docs/Model/PayinMethodDetailsNGNBank.md)
 - [PayinMethodRequest](docs/Model/PayinMethodRequest.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodListResponse](docs/Model/PaymentMethodListResponse.md)
 - [PaymentMethodOpposite](docs/Model/PaymentMethodOpposite.md)
 - [PayoutMethod](docs/Model/PayoutMethod.md)
 - [PayoutMethodBankAccountTypeEnum](docs/Model/PayoutMethodBankAccountTypeEnum.md)
 - [PayoutMethodDetails](docs/Model/PayoutMethodDetails.md)
 - [PayoutMethodDetailsBTC](docs/Model/PayoutMethodDetailsBTC.md)
 - [PayoutMethodDetailsBalance](docs/Model/PayoutMethodDetailsBalance.md)
 - [PayoutMethodDetailsGHSBank](docs/Model/PayoutMethodDetailsGHSBank.md)
 - [PayoutMethodDetailsIBAN](docs/Model/PayoutMethodDetailsIBAN.md)
 - [PayoutMethodDetailsMADCash](docs/Model/PayoutMethodDetailsMADCash.md)
 - [PayoutMethodDetailsMobile](docs/Model/PayoutMethodDetailsMobile.md)
 - [PayoutMethodDetailsNGNBank](docs/Model/PayoutMethodDetailsNGNBank.md)
 - [PayoutMethodDetailsXOFBank](docs/Model/PayoutMethodDetailsXOFBank.md)
 - [PayoutMethodDetailsXOFMobile](docs/Model/PayoutMethodDetailsXOFMobile.md)
 - [PayoutMethodGenderEnum](docs/Model/PayoutMethodGenderEnum.md)
 - [PayoutMethodIdentityCardTypeEnum](docs/Model/PayoutMethodIdentityCardTypeEnum.md)
 - [PayoutMethodListResponse](docs/Model/PayoutMethodListResponse.md)
 - [PayoutMethodMobileProviderEnum](docs/Model/PayoutMethodMobileProviderEnum.md)
 - [PayoutMethodRequest](docs/Model/PayoutMethodRequest.md)
 - [PayoutMethodResponse](docs/Model/PayoutMethodResponse.md)
 - [PayoutMethodWebhook](docs/Model/PayoutMethodWebhook.md)
 - [PoliticallyExposedPerson](docs/Model/PoliticallyExposedPerson.md)
 - [Recipient](docs/Model/Recipient.md)
 - [RecipientListResponse](docs/Model/RecipientListResponse.md)
 - [RecipientRequest](docs/Model/RecipientRequest.md)
 - [RecipientResponse](docs/Model/RecipientResponse.md)
 - [RecipientState](docs/Model/RecipientState.md)
 - [RecipientWebhook](docs/Model/RecipientWebhook.md)
 - [Sender](docs/Model/Sender.md)
 - [SenderListResponse](docs/Model/SenderListResponse.md)
 - [SenderRequest](docs/Model/SenderRequest.md)
 - [SenderResponse](docs/Model/SenderResponse.md)
 - [SenderResponseExisting](docs/Model/SenderResponseExisting.md)
 - [SenderResponseMeta](docs/Model/SenderResponseMeta.md)
 - [SenderState](docs/Model/SenderState.md)
 - [SenderWebhook](docs/Model/SenderWebhook.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionListResponse](docs/Model/TransactionListResponse.md)
 - [TransactionRequest](docs/Model/TransactionRequest.md)
 - [TransactionResponse](docs/Model/TransactionResponse.md)
 - [TransactionResponseExisting](docs/Model/TransactionResponseExisting.md)
 - [TransactionResponseMeta](docs/Model/TransactionResponseMeta.md)
 - [TransactionState](docs/Model/TransactionState.md)
 - [TransactionTraits](docs/Model/TransactionTraits.md)
 - [TransactionWebhook](docs/Model/TransactionWebhook.md)
 - [ValidationErrorDescription](docs/Model/ValidationErrorDescription.md)
 - [Webhook](docs/Model/Webhook.md)
 - [WebhookDefinition](docs/Model/WebhookDefinition.md)
 - [WebhookDefinitionEventListResponse](docs/Model/WebhookDefinitionEventListResponse.md)
 - [WebhookDefinitionListResponse](docs/Model/WebhookDefinitionListResponse.md)
 - [WebhookDefinitionRequest](docs/Model/WebhookDefinitionRequest.md)
 - [WebhookDefinitionResponse](docs/Model/WebhookDefinitionResponse.md)
 - [WebhookLog](docs/Model/WebhookLog.md)
 - [WebhookLogListResponse](docs/Model/WebhookLogListResponse.md)
 - [WebhookLogMetadata](docs/Model/WebhookLogMetadata.md)
 - [WebhookLogMetadataRequest](docs/Model/WebhookLogMetadataRequest.md)
 - [WebhookLogMetadataResponse](docs/Model/WebhookLogMetadataResponse.md)
 - [WebhookLogResponse](docs/Model/WebhookLogResponse.md)

