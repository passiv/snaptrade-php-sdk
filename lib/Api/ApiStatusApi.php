<?php
/**
 * ApiStatusApi
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\BodySummarizer;
use GuzzleHttp\Middleware;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Utils;
use SnapTrade\ApiException;
use SnapTrade\Configuration;
use SnapTrade\HeaderSelector;
use SnapTrade\ObjectSerializer;

class ApiStatusApi extends \SnapTrade\CustomApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'check' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $clientOptions = [];
        if (!$config->getVerifySsl()) $clientOptions["verify"] = false;

        // Do not truncate error messages
        // https://github.com/guzzle/guzzle/issues/2185#issuecomment-800293420
        $stack = new HandlerStack(Utils::chooseHandler());
        $stack->push(Middleware::httpErrors(new BodySummarizer(10_000)), 'http_errors');
        $stack->push(Middleware::redirect(), 'allow_redirects');
        $stack->push(Middleware::cookies(), 'cookies');
        $stack->push(Middleware::prepareBody(), 'prepare_body');
        $clientOptions["handler"] = $stack;

        $this->client = $client ?: new Client($clientOptions);
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * For initializing request body parameter
     */
    private function setRequestBodyProperty(&$body, $property, $value) {
        if ($body === null) $body = [];
        // user did not pass in a value for this parameter
        if ($value === SENTINEL_VALUE) return;
        $body[$property] = $value;
    }

    /**
     * Operation check
     *
     * Get API Status
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['check'] to see the possible values for this operation
     *
     * @throws \SnapTrade\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SnapTrade\Model\Status
     */
    public function check(


        string $contentType = self::contentTypes['check'][0]

    )
    {

        list($response) = $this->checkWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation checkWithHttpInfo
     *
     * Get API Status
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['check'] to see the possible values for this operation
     *
     * @throws \SnapTrade\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SnapTrade\Model\Status, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkWithHttpInfo(string $contentType = self::contentTypes['check'][0], \SnapTrade\RequestOptions $requestOptions = new \SnapTrade\RequestOptions())
    {
        ["request" => $request, "serializedBody" => $serializedBody] = $this->checkRequest($contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if (
                    ($e->getCode() == 401 || $e->getCode() == 403) &&
                    !empty($this->getConfig()->getAccessToken()) &&
                    $requestOptions->shouldRetryOAuth()
                ) {
                    return $this->checkWithHttpInfo(
                        $contentType,
                        $requestOptions->setRetryOAuth(false)
                    );
                }

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SnapTrade\Model\Status' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SnapTrade\Model\Status' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SnapTrade\Model\Status', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SnapTrade\Model\Status';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        $e->getResponseBody(),
                        '\SnapTrade\Model\Status',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkAsync
     *
     * Get API Status
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['check'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkAsync(


        string $contentType = self::contentTypes['check'][0]

    )
    {

        return $this->checkAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkAsyncWithHttpInfo
     *
     * Get API Status
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['check'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkAsyncWithHttpInfo(string $contentType = self::contentTypes['check'][0], \SnapTrade\RequestOptions $requestOptions = new \SnapTrade\RequestOptions())
    {
        $returnType = '\SnapTrade\Model\Status';
        ["request" => $request, "serializedBody" => $serializedBody] = $this->checkRequest($contentType);

        // Customization hook
        $this->beforeSendHook($request, $requestOptions, $this->config);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'check'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['check'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function checkRequest(string $contentType = self::contentTypes['check'][0])
    {



        $resourcePath = '/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $method = 'GET';
        $this->beforeCreateRequestHook($method, $resourcePath, $queryParams, $headers, $httpBody);

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return [
            "request" => new Request(
                $method,
                $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
                $headers,
                $httpBody
            ),
            "serializedBody" => $httpBody
        ];
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
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
