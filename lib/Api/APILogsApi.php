<?php
/**
 * APILogsApi
 * PHP version 5
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TransferZero API
 *
 * Reference documentation for the TransferZero API V1
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TransferZero\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TransferZero\ApiException;
use TransferZero\Configuration;
use TransferZero\HeaderSelector;
use TransferZero\ObjectSerializer;

/**
 * APILogsApi Class Doc Comment
 *
 * @category Class
 * @package  TransferZero
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class APILogsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

     /**
     * @var string
     */
    const DIGEST = 'SHA512';

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Use the Authorization Signature in the request headers to validate the payload
     *
     * @param $url The full url including any query strings
     * @param $body The string received through the webhook callback url
     * @param $headers The request headers received by the webhook endpoint
     *
     * @return boolean
     */
    public function validateWebhookRequest($url, $body, $headers) {
        $requestNonce = $headers["Authorization-Nonce"];
        $requestSignature = $headers["Authorization-Signature"];
        $requestkey = $headers["Authorization-Key"];

        if (empty($requestNonce) || empty($requestSignature) || ($requestkey != $this->config->getApiKey())) {
            return false;
        }

        $headerSignature = $this->signRequest([
            $requestNonce,
            'POST',
            $url,
            $this->digestHash($body)
        ]);

        return ($headerSignature == $requestSignature);
    }

    /**
     * Operation getApiLog
     *
     * Fetch an individual API log
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $api_log_id ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; (required)
     *
     * @throws \TransferZero\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TransferZero\Model\ApiLogResponse
     */
    public function getApiLog($associative_array)
    {
        list($response) = $this->getApiLogWithHttpInfo($associative_array);
        return $response;
    }

    /**
     * Operation getApiLogWithHttpInfo
     *
     * Fetch an individual API log
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $api_log_id ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; (required)
     *
     * @throws \TransferZero\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TransferZero\Model\ApiLogResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApiLogWithHttpInfo($associative_array)
    {
        $returnType = '\TransferZero\Model\ApiLogResponse';
        $request = $this->getApiLogRequest($associative_array);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode == 422) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody(),
                    true
                );
            } elseif ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody()->getContents(),
                        '\TransferZero\Model\ApiLogResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getApiLogAsync
     *
     * Fetch an individual API log
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $api_log_id ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiLogAsync($associative_array)
    {
        return $this->getApiLogAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getApiLogAsyncWithHttpInfo
     *
     * Fetch an individual API log
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $api_log_id ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiLogAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\TransferZero\Model\ApiLogResponse';
        $request = $this->getApiLogRequest($associative_array);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getApiLog'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  string $api_log_id ID of the API log to retrieve  Example: &#x60;/v1/api_logs/00485ce9-532b-45e7-8518-7e5582242407&#x60; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getApiLogRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $api_log_id = array_key_exists('api_log_id', $associative_array) ? $associative_array['api_log_id'] : null;

        // verify the required parameter 'api_log_id' is set
        if ($api_log_id === null || (is_array($api_log_id) && count($api_log_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_log_id when calling getApiLog'
            );
        }

        $resourcePath = '/api_logs/{API Log ID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($api_log_id !== null) {
            $resourcePath = str_replace(
                '{' . 'API Log ID' . '}',
                ObjectSerializer::toPathValue($api_log_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        $httpMethod = 'GET';
        $urlWithParams = $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : '');

        $requestNonce = $this->guidv4Nonce();
        $requestSignature = $this->signRequest([
            $requestNonce,
            strtoupper($httpMethod),
            $urlWithParams,
            $this->digestHash($httpBody)
        ]);

        $headers['Authorization-Nonce'] = $requestNonce;
        $headers['Authorization-Signature'] = $requestSignature;
        $headers['Authorization-Key'] = $this->config->getApiKey();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $urlWithParams,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getApiLogs
     *
     * Fetch a list of API logs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $page The page number to request (defaults to 1) (optional)
     * @param  int $per The number of results to load per page (defaults to 10) (optional)
     * @param  string $created_at_from Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     * @param  string $created_at_to End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     *
     * @throws \TransferZero\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TransferZero\Model\ApiLogListResponse
     */
    public function getApiLogs($associative_array)
    {
        list($response) = $this->getApiLogsWithHttpInfo($associative_array);
        return $response;
    }

    /**
     * Operation getApiLogsWithHttpInfo
     *
     * Fetch a list of API logs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $page The page number to request (defaults to 1) (optional)
     * @param  int $per The number of results to load per page (defaults to 10) (optional)
     * @param  string $created_at_from Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     * @param  string $created_at_to End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     *
     * @throws \TransferZero\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TransferZero\Model\ApiLogListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getApiLogsWithHttpInfo($associative_array)
    {
        $returnType = '\TransferZero\Model\ApiLogListResponse';
        $request = $this->getApiLogsRequest($associative_array);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode == 422) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody(),
                    true
                );
            } elseif ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody()->getContents(),
                        '\TransferZero\Model\ApiLogListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getApiLogsAsync
     *
     * Fetch a list of API logs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $page The page number to request (defaults to 1) (optional)
     * @param  int $per The number of results to load per page (defaults to 10) (optional)
     * @param  string $created_at_from Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     * @param  string $created_at_to End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiLogsAsync($associative_array)
    {
        return $this->getApiLogsAsyncWithHttpInfo($associative_array)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getApiLogsAsyncWithHttpInfo
     *
     * Fetch a list of API logs
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $page The page number to request (defaults to 1) (optional)
     * @param  int $per The number of results to load per page (defaults to 10) (optional)
     * @param  string $created_at_from Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     * @param  string $created_at_to End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getApiLogsAsyncWithHttpInfo($associative_array)
    {
        $returnType = '\TransferZero\Model\ApiLogListResponse';
        $request = $this->getApiLogsRequest($associative_array);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getApiLogs'
     *
     * Note: the input parameter is an associative array with the keys listed as the parameter name below
     *
     * @param  int $page The page number to request (defaults to 1) (optional)
     * @param  int $per The number of results to load per page (defaults to 10) (optional)
     * @param  string $created_at_from Start date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     * @param  string $created_at_to End date to filter recipients by created_at range Allows filtering results by the specified &#x60;created_at&#x60; timeframe.  Example: &#x60;/v1/recipients?created_at_from&#x3D;2018-06-06&amp;created_at_to&#x3D;2018-06-08&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getApiLogsRequest($associative_array)
    {
        // unbox the parameters from the associative array
        $page = array_key_exists('page', $associative_array) ? $associative_array['page'] : null;
        $per = array_key_exists('per', $associative_array) ? $associative_array['per'] : null;
        $created_at_from = array_key_exists('created_at_from', $associative_array) ? $associative_array['created_at_from'] : null;
        $created_at_to = array_key_exists('created_at_to', $associative_array) ? $associative_array['created_at_to'] : null;


        $resourcePath = '/api_logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per !== null) {
            $queryParams['per'] = ObjectSerializer::toQueryValue($per);
        }
        // query params
        if ($created_at_from !== null) {
            $queryParams['created_at_from'] = ObjectSerializer::toQueryValue($created_at_from);
        }
        // query params
        if ($created_at_to !== null) {
            $queryParams['created_at_to'] = ObjectSerializer::toQueryValue($created_at_to);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $query = \GuzzleHttp\Psr7\build_query($queryParams);

        $httpMethod = 'GET';
        $urlWithParams = $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : '');

        $requestNonce = $this->guidv4Nonce();
        $requestSignature = $this->signRequest([
            $requestNonce,
            strtoupper($httpMethod),
            $urlWithParams,
            $this->digestHash($httpBody)
        ]);

        $headers['Authorization-Nonce'] = $requestNonce;
        $headers['Authorization-Signature'] = $requestSignature;
        $headers['Authorization-Key'] = $this->config->getApiKey();

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $urlWithParams,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        $options[RequestOptions::HTTP_ERRORS] = false;
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Parses and deserializes a response in string format.
     * Can be used to parse webhook responses that were already converted to strings
     *
     * @param object response the object we wish to parse
     * @param boolean returnType The type of the PHP object (true for array, false for object)
     *
     * @return object|array The deserialized PHP object
     * @throws ApiException If it fails to deserialize response body
     */
    public function parseResponseString($response, $returnType = null) {
        if (empty($response) || is_null($returnType )) {
            return null;
        }

        try {
            return ObjectSerializer::deserialize(
                $response,
                "\\TransferZero\\Model\\{$returnType}"
            );
        } catch (ApiException $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }
    }

    /**
     * Sign request using HMAC-SHA512 algorithm
     *
     * @param array $params
     * @return string
     */
    protected function signRequest($params)
    {
        $to_sign = implode('&', $params);
        return hash_hmac(
            self::DIGEST,
            $to_sign,
            $this->config->getApiSecret()
        );
    }

    /**
     * Create a hash of the body content
     *
     * @param string $body
     * @return string
     */
    protected function digestHash($body)
    {
        return openssl_digest(trim($body), self::DIGEST);
    }

    /**
     * Generate a random nonce for authorization
     *
     * @return string
     */
    protected function guidv4Nonce()
    {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid(), '{}');
        }
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
