<?php

error_reporting(E_ALL & ~E_DEPRECATED);

require_once(__DIR__ . '/vendor/autoload.php');

use TransferZero\Configuration;
use TransferZero\Api\TransactionsApi;
use TransferZero\Api\SendersApi;
use TransferZero\Api\CurrencyInfoApi;
use TransferZero\Api\AccountValidationApi;
use TransferZero\Api\WebhooksApi;
use TransferZero\Api\AccountDebitsApi;
use TransferZero\ApiException;
use TransferZero\Model\AccountValidationRequest;
use TransferZero\Model\SenderRequest;
use TransferZero\Model\Sender;
use TransferZero\Model\Transaction;
use TransferZero\Model\TransactionRequest;
use TransferZero\Model\Recipient;
use TransferZero\Model\PayoutMethod;
use TransferZero\Model\PayoutMethodDetailsNGNBank;
use TransferZero\Model\DebitRequestWrapper;
use TransferZero\Model\Debit;

class Client
{
    private $config;
  
    public function __construct($apiKey, $apiSecret)
    {
        $config = Configuration::getDefaultConfiguration()
            ->setHost("https://api-sandbox.transferzero.com/v1")
            ->setApiKey($apiKey)
            ->setApiSecret($apiSecret);
    }

    public function accountValidation()
    {
        // See https://docs.azafinance.com/docs/additional-features/#account-name-enquiry
        // for more information on how this feature can be used
        $apiInstance = new AccountValidationApi();
        
        $request = new AccountValidationRequest();
        $request->setBankAccount('9040009999999');
        $request->setBankCode('120100');
        $request->setCountry('GH');
        $request->setCurrency('GHS');
        $request->setMethod('bank');

        try {
            $result = $apiInstance->postAccountValidations($request);
            print_r($result);
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                echo "Validation error(s) occurred when calling the endpoint";
                print_r($response);
            } else {
                echo 'Exception when calling AccountValidationApi->postAccountValidations: ';
                echo $e->getMessage();
            }
        }
    }

    public function createSender()
    {
        // For more details on senders please check https://docs.azafinance.com/docs/transaction-flow/#sender
        $apiInstance = new SendersApi();

        $sender = new Sender();
        $sender->setCountry('UG');
        $sender->setPhoneNumber('+256752403639');
        $sender->setEmail('example@home.org');
        $sender->setFirstName('Johnny');
        $sender->setLastName('English');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Description of address');
        $sender->setPostalCode('798983');
        $sender->setBirthDate('1900-12-31');
        $sender->setIp('127.0.0.1');
        $sender->setExternalId('SENDER-2b59d1ef01122');

        $senderRequest = new SenderRequest();
        $senderRequest->setSender($sender);

        try {
            $result = $apiInstance->postSenders($senderRequest);
            $createdSender = $result->getObject();
            
            echo "Sender created! ID: " . $createdSender->getId();
            
            return $createdSender->getId();
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
    }

    public function getSenderByExternalId($externalId)
    {
        // Find more details on external IDs at https://docs.azafinance.com/docs/transaction-flow/#external-id  
        $apiInstance = new SendersApi();

        $opts = ["external_id" => $externalId];

        try {
            $result = $apiInstance->getSenders($opts);
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
    }

    public function updateSender($senderId)
    {
        // For more details on senders please check https://docs.azafinance.com/docs/transaction-flow/#sender
        $apiInstance = new SendersApi();
        
        $sender = new Sender();
        $sender->setCity('Rome');
        $sender->setCountry('UG');
        $sender->setPhoneNumber('+256752403639');
        $sender->setEmail('example@home.org');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Description of address');
        $sender->setPostalCode('798983');

        $senderRequest = new SenderRequest();
        $senderRequest->setSender($sender);

        try {
            $result = $apiInstance->patchSender($senderId, $senderRequest);
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
    }

    public function createTransaction($externalId)
    {
        // Please check our documentation at https://docs.azafinance.com/docs/transaction-flow/
        // for details on how transactions work.
        $apiInstance = new TransactionsApi();
        $transaction = new Transaction();

        // When adding a sender to transaction, please use either an id or external_id. Providing both will result in a validation error.
        // Please see our documentation at https://docs.azafinance.com/docs/transaction-flow/#sender
        // You can also create a sender and create a transaction at the same time. If the sender external ID already exists
        // the sender will be reused and kept updated with the details provided.
        $sender = new Sender();
        $sender->setCountry('UG');
        $sender->setPhoneNumber('+256752403639');
        $sender->setEmail('example@home.org');
        $sender->setFirstName('Johnny');
        $sender->setLastName('English');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Description of address');
        $sender->setPostalCode('798983');
        $sender->setBirthDate('1900-12-31');
        $sender->setIp('127.0.0.1');
        $sender->setExternalId('SENDER-2b59def0');

        // You can find the various payout options at https://docs.azafinance.com/docs/transaction-flow/#payout-details
        $payoutMethodDetails = new PayoutMethodDetailsNGNBank();
        $payoutMethodDetails->setBankAccount('123456789');
        $payoutMethodDetails->setBankCode('082');
        $payoutMethodDetails->setFirstName('Jane');
        $payoutMethodDetails->setLastName('Smith');

        $payoutMethod = new PayoutMethod();
        $payoutMethod->setType('NGN::Bank');
        $payoutMethod->setDetails($payoutMethodDetails);

        // Please see https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        // on what the request amount and currencies do

        $recipient = new Recipient();
        $recipient->setRequestedAmount(10000);
        $recipient->setRequestedCurrency('NGN');
        $recipient->setPayoutMethod($payoutMethod);

        // Similarly you can check https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        // on details about the input currency parameter

        // Find more details on external IDs at https://docs.azafinance.com/docs/transaction-flow/#external-id
        $transaction->setExternalId($externalId);
        $transaction->setInputCurrency('GBP');
        $transaction->setSender($sender);
        $transaction->setRecipients([$recipient]);
        
        $transactionRequest = new TransactionRequest();
        $transactionRequest->setTransaction($transaction);

        try {
            $result = $apiInstance->postTransactions($transactionRequest);
            print_r($result);

            return $result->getObject();
        } catch (ApiException $e) {
            echo 'Exception when calling TransactionsApi->postTransactions';
            echo $e->getMessage();
        }
    }

    public function getTransactionByExternalId($externalId)
    {
        // Please see https://docs.azafinance.com/docs/transaction-flow/#external-id
        // for more details on external IDs
        $apiInstance = new TransactionsApi();
        $associateArray["exernal_id"] = 'TRANSACTION-1f834add';

        try {
            $result = $apiInstance->getTransactions($associateArray);
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
    }

    public function createAndFundTransactionTwoSteps($externalId)
    {
        $transactionId = $this->createTransaction($externalId)->getId();

        if ($transactionId === null) {
            echo "Transaction with ID {$transactionId} does not exist";
        } else {
            $apiInstance = new AccountDebitsApi();

            // Please see https://docs.azafinance.com/docs/transaction-flow/#funding-transactions
            // on details about funding transactions
            $debit = new Debit();
            $debit->setCurrency('GBP');
            $debit->setToId($transactionId);
            $debit->setToType('Transaction');

            $debitRequest = new DebitRequestWrapper();
            $debitRequest->setDebit($debit);

            try {
                $debitResponse = $apiInstance->postAccountsDebits($debitRequest);
                echo "Transaction Funded Successfully";
                print_r($debitResponse);
            } catch (ApiException $e) {
                if ($e->isValidationError()) {
                    $response = $e->getResponseObject();
                    echo "Validation error(s) occurred when calling the endpoint";
                    echo $response;
                } else {
                    echo 'Exception when calling AccountDebitsApi#postAccountsDebits';
                    echo $e->getMessage();
                }
            }
        }
    }
    
    public function createAndFundTransactionOneStep($externalId)
    {
        $apiInstance = new TransactionsApi();
        $transaction = new Transaction();

        // When adding a sender to transaction, please use either an id or external_id. Providing both will result in a validation error.
        // Please see our documentation at https://docs.azafinance.com/docs/transaction-flow/#sender
        // You can also create a sender and create a transaction at the same time. If the sender external ID already exists
        // the sender will be reused and kept updated with the details provided.
        $sender = new Sender();
        $sender->setCountry('UG');
        $sender->setPhoneNumber('+256752403639');
        $sender->setEmail('example@home.org');
        $sender->setFirstName('Johnny');
        $sender->setLastName('English');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Description of address');
        $sender->setPostalCode('798983');
        $sender->setBirthDate('1900-12-31');
        $sender->setIp('127.0.0.1');
        $sender->setExternalId('SENDER-2b59def0');

        // You can find the various payout options at https://docs.azafinance.com/docs/transaction-flow/#payout-details
        $payoutMethodDetails = new PayoutMethodDetailsNGNBank();
        $payoutMethodDetails->setBankAccount('123456789');
        $payoutMethodDetails->setBankCode('082');
        $payoutMethodDetails->setFirstName('Jane');
        $payoutMethodDetails->setLastName('Smith');

        $payoutMethod = new PayoutMethod();
        $payoutMethod->setType('NGN::Bank');
        $payoutMethod->setDetails($payoutMethodDetails);

        // Please see https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        // on what the request amount and currencies do

        $recipient = new Recipient();
        $recipient->setRequestedAmount(10000);
        $recipient->setRequestedCurrency('NGN');
        $recipient->setPayoutMethod($payoutMethod);

        // Similarly you can check https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        // on details about the input currency parameter

        // Find more details on external IDs at https://docs.azafinance.com/docs/transaction-flow/#external-id
        $transaction->setExternalId($externalId);
        $transaction->setInputCurrency('GBP');
        $transaction->setSender($sender);
        $transaction->setRecipients([$recipient]);
        
        $transactionRequest = new TransactionRequest();
        $transactionRequest->setTransaction($transaction);

        try {
            $result = $apiInstance->createAndFundTransaction($transactionRequest);
            print_r($result);
        } catch (Exception $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                echo "Validation error(s) occurred when calling the endpoint";
                print_r($response);
            } else {
                echo "An exception occurred when calling TransactionsApi#createAndFundTransaction";
                echo $e->getMessage();
            }
        }
    }

    public function webhookParseExample()
    {
        // Please see https://docs.azafinance.com#webhooks
        // for more details about how webhooks / callbacks work from our system
        $webhookHeader = [
            "Authorization-Nonce" => "authorization-nonce",
            "Authorization-Key" => "authorization-key",
            "Authorization-Signature" => "authorization-signature"
        ];

        $webhookUrl = "<url>";

        $webhookContent = [
            "webhook" => "85d11cf4-d4d6-46e4-ab7d-91355e80392a",
            "event" => "transaction.created",
            "object" => [
                "input_amount" => 21.59,
                "input_currency" => "GBP",
                "id" => "cd390e83-a9de-404d-a660-4da0f1342c04",
                "state" => "approved",
                "sender" => [
                    "id" => "6f15f581-889f-4ae1-9591-cb283add661f",
                    "type" => "person",
                    "state" => "approved",
                    "state_reason" => null,
                    "country" => "GB",
                    "street" => "Brick Lane",
                    "postal_code" => "E1 6QL",
                    "city" => "London",
                    "phone_country" => "GB",
                    "phone_number" => "07123456789",
                    "email" => "me@transferzero.com",
                    "ip" => "127.0.0.1",
                    "address_description" => null,
                    "first_name" => "Test",
                    "middle_name" => null,
                    "last_name" => "User",
                    "birth_date" => "1990-01-01",
                    "occupation" => "Tester",
                    "nationality" => null,
                    "metadata" => []
                ],
                "payin_methods" => [],
                "paid_amount" => 0,
                "due_amount" => 21.59,
                "recipients" => [
                    [
                        "created_at" => "2019-03-04T07:41:49.972Z",
                        "editable" => true,
                        "id" => "4a401c7f-7e38-445f-bb85-7dcad8d22e91",
                        "input_usd_amount" => 28.52,
                        "may_cancel" => true,
                        "state" => "initial",
                        "transaction_id" => "cd390e83-a9de-404d-a660-4da0f1342c04",
                        "transaction_state" => "initial",
                        "payout_method" => [
                            "id" => "b704e560-da50-4ff5-9bd7-b9499dba4b54",
                            "type" => "NGN::Bank",
                            "details" => [
                                "bank_code" => "082",
                                "last_name" => "Last",
                                "first_name" => "First",
                                "bank_account" => "123456789",
                                "bank_account_type" => "20"
                            ],
                            "provider" => "transferzero_auto",
                            "fields" => [
                                "email" => [
                                    "type" => "input",
                                    "validations" => [
                                        "format" => "\\A((\\w+([\\-+.]\\w+)*@[a-zA-Z0-9]+([\\-\\.][a-zA-Z0-9]+)*)*){3,320}\\z"
                                    ]
                                ],
                                "first_name" => [
                                    "type" => "input",
                                    "validations" => [
                                        "presence" => true
                                    ]
                                ],
                                "last_name" => [
                                    "type" => "input",
                                    "validations" => [
                                        "presence" => true
                                    ]
                                ],
                                "bank_code" => [
                                    "type" => "select",
                                    "options" => [
                                        "214" => "FCMB Bank",
                                        "215" => "Unity Bank",
                                        "232" => "Sterling bank",
                                        "301" => "Jaiz Bank",
                                        "044" => "Access Bank",
                                        "063" => "Diamond Bank",
                                        "050" => "EcoBank",
                                        "070" => "Fidelity Bank",
                                        "011" => "First Bank of Nigeria",
                                        "058" => "Guaranty Trust Bank",
                                        "030" => "Heritage Bank",
                                        "082" => "Keystone",
                                        "076" => "Polaris Bank",
                                        "039" => "Stanbic IBTC Bank",
                                        "032" => "Union Bank",
                                        "033" => "United Bank for Africa",
                                        "035" => "Wema Bank",
                                        "057" => "Zenith International"
                                    ],
                                    "validations" => [
                                        "presence" => true,
                                        "inclusion" => [
                                            "in" => [
                                                "214" => "FCMB Bank",
                                                "215" => "Unity Bank",
                                                "232" => "Sterling bank",
                                                "301" => "Jaiz Bank",
                                                "044" => "Access Bank",
                                                "063" => "Diamond Bank",
                                                "050" => "EcoBank",
                                                "070" => "Fidelity Bank",
                                                "011" => "First Bank of Nigeria",
                                                "058" => "Guaranty Trust Bank",
                                                "030" => "Heritage Bank",
                                                "082" => "Keystone",
                                                "076" => "Polaris Bank",
                                                "039" => "Stanbic IBTC Bank",
                                                "032" => "Union Bank",
                                                "033" => "United Bank for Africa",
                                                "035" => "Wema Bank",
                                                "057" => "Zenith International"
                                            ]
                                        ]
                                    ]
                                ],
                                "bank_account" => [
                                    "type" => "input",
                                    "validations" => [
                                        "presence" => true
                                    ]
                                ],
                                "bank_account_type" => [
                                    "type" => "select",
                                    "options" => [
                                        "10" => "Savings",
                                        "20" => "Current",
                                        "00" => "Unknown"
                                    ]
                                ]
                            ]
                        ],
                        "exchange_rate" => 463.177396943029,
                        "fee_fractional" => 64,
                        "requested_amount" => 10000,
                        "requested_currency" => "NGN",
                        "input_amount" => 21.59,
                        "input_currency" => "GBP"
                    ]
                ],
                "created_at" => "2019-03-04T07:41:49.972Z",
                "expires_at" => "2019-03-07T07:41:49.972Z"
            ]
        ];

        json_encode($webhookContent);

        // Once you've set up an endpoint where you'll be receiving callbacks you can use the following code snippet
        // to both verify that the webhook we sent out is legitimate, and then parse it's contents regardless of type.
        // The details you need to provide are:
        //   - the body of the webhook/callback you received as a string
        //   - the url of your webhook, where you are awaiting the callbacks - this has to be the full URL
        //   - the authentication headers you have received on your webhook endpoint - as an associative array

        $webhookApi = new WebhooksApi();

        if (!$webhookApi->validateWebhookRequest($webhookUrl, $webhookContent, $webhookHeader)) {
            echo "Webhook request validation failed";
            return false;
        }

        $webhook = $webhookApi->parseResponseString($webhookContent, 'Webhook');

        if (strpos($webhook->getEvent(), 'transaction') === 0) {
            $transactionWebhook = $webhookApi->parseResponseString($webhookContent, 'TransactionWebhook');
            print_r($transactionWebhook);
        } elseif (strpos($webhook->getEvent(), 'recipient') === 0) {
            $recipientWebhook = $webhookApi->parseResponseString($webhookContent, 'RecipientWebhook');
            print_r($recipientWebhook);
        } elseif (strpos($webhook->getEvent(), 'payout_method') === 0) {
            $payoutMethodWebhook = $webhookApi->parseResponseString($webhookContent, 'PayoutMethodWebhook');
            print_r($payoutMethodWebhook);
        } elseif (strpos($webhook->getEvent(), 'sender') === 0) {
            $senderWebhook = $webhookApi->parseResponseString($webhookContent, 'SenderWebhook');
            print_r($senderWebhook);
        } elseif (strpos($webhook->getEvent(), 'document') === 0) {
            $documentWebhook = $webhookApi->parseResponseString($webhookContent, 'DocumentWebhook');
            print_r($documentWebhook);
        } else {
            echo "Webhook event not recognized";
        }

        return true;
    }

}

// Please see our documentation at https://docs.azafinance.com
// and the API specification at http://api.transferzero.com/documentation/
// for more information.

$apiKey = "<your_api_key>";
$apiSecret = "<your_api_secret>";

$client = new Client($apiKey, $apiSecret);
// $client->accountValidation();
// $client->createSender();
// $client->getSenderByExternalId("SENDER-2b59def0");
// $client->updateSender("85f1a542-8e3d-485b-a8c9-11c323a9eae9");
// $client->createTransaction("TRANSACTION-2334");
// $client->getTransactionByExternalId("TRANSACTION-2b59def0");
// $client->createAndFundTransactionTwoSteps("TRANSACTION-1234");
// $client->createAndFundTransactionOneStep("TRANSACTION-22345");
// $client->webhookParseExample();
?>
