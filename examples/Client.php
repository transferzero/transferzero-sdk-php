<?php

error_reporting(E_ALL & ~E_DEPRECATED);

require_once(dirname(__FILE__) . '/vendor/autoload.php');

use TransferZero\Configuration;
use TransferZero\ApiException;
use TransferZero\Api\{ CurrencyInfoApi, AccountValidationApi, TransactionsApi, AccountDebitsApi, WebhooksApi, SendersApi };
use TransferZero\Model\{ AccountValidationRequest, Transaction, TransactionRequest, TransactionResponse, Recipient, Sender };
use TransferZero\Model\{ PayoutMethod, PayoutMethodDetails, PayoutMethodBankAccountTypeEnum, Debit, DebitRequestWrapper };
use TransferZero\Model\{ SenderRequest };

class Application {

    public function run() {
        /*
        Please see our documentation at https://docs.azafinance.com
        and the API specification at http://api.transferzero.com/documentation/
        for more information.
        */
        Configuration::getDefaultConfiguration()
            ->setHost('https://api-sandbox.transferzero.com/v1')
            ->setApiKey('<your_api_key>')
            ->setApiSecret('<your_api_secret>');

        // $this->listCurrenciesExample();
        // $this->accountValidationExample();
        // $this->createTransactionExample();
        // $this->getTransactionByExternalIdExample();
        // $this->createAndFundTransactionExampleTwoSteps();
        // $this->createAndFundTransactionOneStep();
        // $this->createSenderExample();
        // $this->getSenderByExternalIdExample();
        // $this->updateSenderExample();
        // $this->webhookParseExample();
    }

    public function listCurrenciesExample() {
        try {
            $cia = new CurrencyInfoApi();
            $currencyInfo = $cia->infoCurrencies([]);

            $currencyList = $currencyInfo->getObject();
            print_r( array_map( function($currency){ return $currency['code']; }, $currencyList) );
            return $currencyList;
        } catch (Exception $e) {
            echo 'Exception when running listCurrenciesExample: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function accountValidationExample() {
        /*
        See https://docs.azafinance.com/docs/additional-features/#bank-account-name-enquiry
        for more information on how this feature can be used
        */
        $request = new AccountValidationRequest();
        $request->setBankAccount('9040009999999');
        $request->setBankCode('190100');
        $request->setCountry(AccountValidationRequest::COUNTRY_GH);
        $request->setCurrency(AccountValidationRequest::CURRENCY_GHS);
        $request->setMethod(AccountValidationRequest::METHOD_BANK);

        try {
            $avi = new AccountValidationApi();
            $accountValidation = $avi->postAccountValidations($request);

            $accountName = $accountValidation->getObject()->getAccountName();
            echo "Account Name: {$accountName}" . PHP_EOL;
            return $accountName;
        } catch (Exception $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                echo "Account Holder Name Error: {$response->getMeta()->getError()}" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function createTransactionExample() {
        $api = new TransactionsApi();
        $transaction = new Transaction();

        /*
        Please check our documentation at https://docs.azafinance.com/docs/transaction-flow/
        for details on how transactions work.
        */
        $sender = new Sender();
        /*
        When adding a sender to transaction, please use either an id or external_id. Providing both will result in a validation error.
        Please see our documentation at https://docs.azafinance.com/docs/transaction-flow/#sender
        You can also create a sender and create a transaction at the same time. If the sender external ID already exists
        the sender will be reused and kept updated with the details provided.
        */
        // $sender->setId('6F15F581-889F-4AE1-9591-CB283ADD661F');
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
        $ngnBankDetails = new PayoutMethodDetails();
        $ngnBankDetails->setBankAccount('123456789');
        $ngnBankDetails->setBankCode('082');
        $ngnBankDetails->setFirstName('First');
        $ngnBankDetails->setLastName('Last');

        $payoutMethod = new PayoutMethod();
        $payoutMethod->setType('NGN::Bank');
        $payoutMethod->setDetails($ngnBankDetails);

        /*
        Please see https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        on what the request amount and currencies do
        */
        $recipient = new Recipient();
        $recipient->setRequestedAmount(10000);
        $recipient->setRequestedCurrency('NGN');
        $recipient->setPayoutMethod($payoutMethod);

        /*
        Similarly you can check https://docs.azafinance.com/docs/transaction-flow/#requested-amount-and-currency
        on details about the input currency parameter

        Find more details on external IDs at https://docs.azafinance.com/docs/transaction-flow/#external-id
        */
        $transaction->setExternalId('TRANSACTION-1f834adf1');
        $transaction->setInputCurrency('GBP');
        $transaction->setSender($sender);
        $transaction->setRecipients([$recipient]);

        try {
            $transactionRequest = new TransactionRequest();
            $transactionRequest->setTransaction($transaction);
            $transactionResponse = $api->postTransactions($transactionRequest);
            $createdTransaction = $transactionResponse->getObject();
            echo "Transaction created! ID: {$createdTransaction->getId()}", PHP_EOL;
            return $createdTransaction->getId();
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function getTransactionByExternalIdExample() {
        /*
        Please see https://docs.azafinance.com/docs/transaction-flow/#external-id
        for more details on external IDs
        */
        $transactionsApi = new TransactionsApi();
        $externalId = 'TRANSACTION-1f834adf';
        try {
            $transactionResponse = $transactionsApi->getTransactions([ "external_id" => $externalId]);
            $transaction = reset($transactionResponse->getObject());
            echo "Transaction found! External ID: {$transaction->getExternalID()}", PHP_EOL;
            return $transaction;
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
                echo "There was an error retrieving the sender" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function createAndFundTransactionExampleTwoSteps() {
        $transactionId = $this->createTransactionExample();

        if (!empty($transactionId)) {
            /*
            Please see https://docs.azafinance.com/docs/transaction-flow/#funding-transactions
            on details about funding transactions
            */
            $debit = new Debit();
            $debit->setCurrency('GBP');
            $debit->setToId($transactionId);
            $debit->setToType("Transaction");

            $debitRequest = new DebitRequestWrapper();
            $debitRequest->setDebit($debit);

            $debitApi = new AccountDebitsApi();
            try {
                $debitListResponse = $debitApi->postAccountsDebits($debitRequest);
                echo "Transaction Funded Successfully" . PHP_EOL;
                print_r($debitListResponse->getObject()[0]);
            } catch (ApiException $e) {
                if ($e->isValidationError()) {
                    $response = $e->getResponseObject();
                    echo "Transaction could not be funded" . PHP_EOL;
                    $validation_errors = $response->getObject()[0]->getErrors();
                    print_r($validation_errors);
                } else {
                    throw $e;
                }
            }
        }
        return $transactionId;
    }

    public function createAndFundTransactionOneStep()
    {
        $apiInstance = new TransactionsApi();
        $transaction = new Transaction();

        /*
        When adding a sender to transaction, please use either an id or external_id. Providing both will result in a validation error.
        Please see our documentation at https://docs.azafinance.com/docs/transaction-flow/#sender
        You can also create a sender and create a transaction at the same time. If the sender external ID already exists
        the sender will be reused and kept updated with the details provided.
        */
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
        $payoutMethodDetails = new PayoutMethodDetails();
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
        $transaction->setExternalId('TRANSACTION-1f834adf3');
        $transaction->setInputCurrency('GBP');
        $transaction->setSender($sender);
        $transaction->setRecipients([$recipient]);

        $transactionRequest = new TransactionRequest();
        $transactionRequest->setTransaction($transaction);

        try {
            $transactionResponse = $apiInstance->createAndFundTransaction($transactionRequest);
            $createdTransaction = $transactionResponse->getObject();
            echo "Transaction created! ID: {$createdTransaction->getId()}", PHP_EOL;
            return $createdTransaction->getId();
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

    public function createSenderExample() {
        // For more details on senders please check https://docs.azafinance.com/docs/transaction-flow/#sender
        $sender = new Sender();
        $sender->setCountry('UG');
        $sender->setPhoneCountry('UG');
        $sender->setPhoneNumber('752403639');
        $sender->setEmail('example@home.org');
        $sender->setFirstName('Johnny');
        $sender->setLastName('English');
        $sender->setIp('127.0.0.1');
        $sender->setCity('Kampala');
        $sender->setStreet('Unknown 17-3');
        $sender->setAddressDescription('Office Address');
        $sender->setPostalCode('798983');
        $sender->setBirthDate('1970-12-31');
        $sender->setDocuments([]);
        $sender->setExternalId('SENDER-2b59deff2');

        $sendersApi = new SendersApi();
        $senderRequest = new SenderRequest();
        $senderRequest->setSender($sender);
        try {
            $senderResponse = $sendersApi->postSenders($senderRequest);
            $createdSender = $senderResponse->getObject();
            echo "Sender created! ID: {$createdSender->getId()}", PHP_EOL;
            return $createdSender->getId();
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
                echo "Sender could not be created!" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function getSenderByExternalIdExample() {
        // Find more details on external IDs at https://docs.azafinance.com/docs/transaction-flow/#external-id
        $sendersApi = new SendersApi();
        $externalId = 'SENDER-2b59deff';
        try {
            $senderResponse = $sendersApi->getSenders(["external_id" => $externalId]);
            $sender = reset($senderResponse->getObject());
            echo "Sender found! External ID: {$sender->getExternalID()}", PHP_EOL;
            return $sender;
        } catch (ApiException $e) {
            if ($e->isValidationError()) {
                $response = $e->getResponseObject();
                $validation_errors = $response->getObject()->getErrors();
                print_r($validation_errors);
                echo "There was an error retrieving the sender" . PHP_EOL;
            } else {
                throw $e;
            }
            return null;
        }
    }

    public function updateSenderExample() {
        // For more details on senders please check https://docs.azafinance.com/docs/transaction-flow/#sender

        $senderId = $this->createSenderExample();

        if (!empty($senderId)) {
            $sender = new Sender();
            $sender->setCity('Rome');
            $sender->setCountry('UG');
            $sender->setPhoneNumber('+256752403639');
            $sender->setEmail('example@home.org');
            $sender->setCity('Kampala');
            $sender->setStreet('Unknown 17-3');
            $sender->setAddressDescription('Description of address');
            $sender->setPostalCode('798983');

            $sendersApi = new SendersApi();
            $senderRequest = new SenderRequest();
            $senderRequest->setSender($sender);
            try {
                $senderResponse = $sendersApi->patchSender($senderId, $senderRequest);
                $updatedSender = $senderResponse->getObject();
                echo "Sender Updated Successfully!", PHP_EOL;
                print_r($updatedSender);
            } catch (ApiException $e) {
                if ($e->isValidationError()) {
                    $response = $e->getResponseObject();
                    $validation_errors = $response->getObject()->getErrors();
                    print_r($validation_errors);
                    echo "Sender could not be updated!" . PHP_EOL;
                } else {
                    throw $e;
                }
            }
        }
        return $senderId;
    }

    public function webhookParseExample() {
        /*
        Please see https://docs.azafinance.com#webhooks
        for more details about how webhooks / callbacks work from our system
        */
        $webhook_headers = [
            "Authorization-Nonce" => "<authorization-nonce>",
            "Authorization-Key" => "<authorization-key>",
            "Authorization-Signature" => "<authorization-signature>"
        ];
        $webhook_content = <<<'JSON'
        {
            "webhook": "85d11cf4-d4d6-46e4-ab7d-91355e80392a",
            "event": "transaction.created",
            "object": {
              "input_amount": 21.59,
              "input_currency": "GBP",
              "id": "cd390e83-a9de-404d-a660-4da0f1342c04",
              "metadata": {},
              "state": "approved",
              "payin_reference": "WIHGHZTSPOWN",
              "sender": {
                "id": "6f15f581-889f-4ae1-9591-cb283add661f",
                "type": "person",
                "state": "approved",
                "state_reason": null,
                "country": "GB",
                "street": "Brick Lane",
                "postal_code": "E1 6QL",
                "city": "London",
                "phone_country": "GB",
                "phone_number": "07123456789",
                "email": "me@transferzero.com",
                "ip": "127.0.0.1",
                "address_description": null,
                "first_name": "Test",
                "middle_name": null,
                "last_name": "User",
                "birth_date": "1990-01-01",
                "occupation": "Tester",
                "nationality": null,
                "metadata": {
                },
                "onboarding_status": "completed_first_transaction"
              },
              "payin_methods": [
                {
                  "id": "e78632a8-51de-4b78-892c-31d6c5d0db5c",
                  "type": "GBP::Bank",
                  "out_details": {
                    "style": "info",
                    "BIC": "LHVBEE22",
                    "IBAN": "EE087700771002673049",
                    "Reference": "WIHGHZTSPOWN",
                    "Account Name": "B TRANSFER SERVICES LIMITED",
                    "Bank Address": "Tartu mnt 2, 10145 Tallinn, Estonia.",
                    "Beneficiary Address": "Tax Assist Accountants, 64 Southwark Bridge Road, London SE1 0AS"
                  },
                  "in_details": {},
                  "instructions": {},
                  "provider": "lhv"
                }
              ],
              "paid_amount": 0,
              "due_amount": 21.59,
              "recipients": [
                {
                  "created_at": "2019-03-04T07:41:49.972Z",
                  "editable": true,
                  "id": "4a401c7f-7e38-445f-bb85-7dcad8d22e91",
                  "input_usd_amount": 28.52,
                  "may_cancel": true,
                  "metadata": {},
                  "state": "initial",
                  "transaction_id": "cd390e83-a9de-404d-a660-4da0f1342c04",
                  "transaction_state": "initial",
                  "payout_method": {
                    "id": "b704e560-da50-4ff5-9bd7-b9499dba4b54",
                    "type": "NGN::Bank",
                    "details": {
                      "bank_code": "082",
                      "last_name": "Last",
                      "first_name": "First",
                      "bank_account": "123456789",
                      "bank_account_type": "20"
                    },
                    "metadata": {},
                    "fields": {
                      "email": {
                        "type": "input",
                        "validations": {
                          "format": "\\A((\\w+([\\-+.]\\w+)*@[a-zA-Z0-9]+([\\-\\.][a-zA-Z0-9]+)*)*){3,320}\\z"
                        }
                      },
                      "first_name": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "last_name": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "bank_code": {
                        "type": "select",
                        "options": {
                          "214": "FCMB Bank",
                          "215": "Unity Bank",
                          "232": "Sterling bank",
                          "301": "Jaiz Bank",
                          "044": "Access Bank",
                          "063": "Diamond Bank",
                          "050": "EcoBank",
                          "070": "Fidelity Bank",
                          "011": "First Bank of Nigeria",
                          "058": "Guaranty Trust Bank",
                          "030": "Heritage Bank",
                          "082": "Keystone",
                          "076": "Polaris Bank",
                          "039": "Stanbic IBTC Bank",
                          "032": "Union Bank",
                          "033": "United Bank for Africa",
                          "035": "Wema Bank",
                          "057": "Zenith International"
                        },
                        "validations": {
                          "presence": true,
                          "inclusion": {
                            "in": {
                              "214": "FCMB Bank",
                              "215": "Unity Bank",
                              "232": "Sterling bank",
                              "301": "Jaiz Bank",
                              "044": "Access Bank",
                              "063": "Diamond Bank",
                              "050": "EcoBank",
                              "070": "Fidelity Bank",
                              "011": "First Bank of Nigeria",
                              "058": "Guaranty Trust Bank",
                              "030": "Heritage Bank",
                              "082": "Keystone",
                              "076": "Polaris Bank",
                              "039": "Stanbic IBTC Bank",
                              "032": "Union Bank",
                              "033": "United Bank for Africa",
                              "035": "Wema Bank",
                              "057": "Zenith International"
                            }
                          }
                        }
                      },
                      "bank_account": {
                        "type": "input",
                        "validations": {
                          "presence": true
                        }
                      },
                      "bank_account_type": {
                        "type": "select",
                        "options": {
                          "10": "Savings",
                          "20": "Current",
                          "00": "Unknown"
                        }
                      }
                    }
                  },
                  "exchange_rate": 463.177396943029,
                  "fee_fractional": 64,
                  "requested_amount": 10000,
                  "requested_currency": "NGN",
                  "input_amount": 21.59,
                  "input_currency": "GBP",
                  "output_amount": 10000,
                  "output_currency": "NGN"
                }
              ],
              "created_at": "2019-03-04T07:41:49.972Z",
              "expires_at": "2019-03-07T07:41:49.972Z",
              "traits": {}
            }
        }
JSON;
        $webhooksApi = new WebhooksApi();
        $webhook_url = "<url>";

        /*
        Once you've set up an endpoint where you'll be receiving callbacks you can use the following code snippet
        to both verify that the webhook we sent out is legitimate, and then parse it's contents regardless of type.

        The details you need to provide are:
          - the body of the webhook/callback you received as a string
          - the url of your webhook, where you are awaiting the callbacks - this has to be the full URL
          - the authentication headers you have received on your webhook endpoint - as an associative array
        */

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
        } else {
            print_r($webhook);
        }
    }

}

$application = new Application();
$application->run();
