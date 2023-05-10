<?php
/**
 * APIDisclaimerApi
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
use SnapTrade\ApiException;
use SnapTrade\Configuration;
use SnapTrade\HeaderSelector;
use SnapTrade\ObjectSerializer;

class APIDisclaimerApi extends \SnapTrade\BaseApi
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
        'accept' => [
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
        $this->client = $client ?: new Client();
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
     * Operation accept
     *
     * Accept or Reject SnapTrade disclaimer agreement
     *
     * @param  string $user_id user_id (required)
     * @param  string $user_secret user_secret (required)
     * @param  \SnapTrade\Model\APIDisclaimerAcceptRequest $api_disclaimer_accept_request api_disclaimer_accept_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accept'] to see the possible values for this operation
     *
     * @throws \SnapTrade\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus
     */
    public function accept($user_id, $user_secret, $api_disclaimer_accept_request, string $contentType = self::contentTypes['accept'][0])
    {
        list($response) = $this->acceptWithHttpInfo($user_id, $user_secret, $api_disclaimer_accept_request, $contentType);
        return $response;
    }

    /**
     * Operation acceptWithHttpInfo
     *
     * Accept or Reject SnapTrade disclaimer agreement
     *
     * @param  string $user_id (required)
     * @param  string $user_secret (required)
     * @param  \SnapTrade\Model\APIDisclaimerAcceptRequest $api_disclaimer_accept_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accept'] to see the possible values for this operation
     *
     * @throws \SnapTrade\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function acceptWithHttpInfo($user_id, $user_secret, $api_disclaimer_accept_request, string $contentType = self::contentTypes['accept'][0], \SnapTrade\RequestOptions $requestOptions = new \SnapTrade\RequestOptions())
    {
        $request = $this->acceptRequest($user_id, $user_secret, $api_disclaimer_accept_request, $contentType);

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
                    return $this->acceptWithHttpInfo(
                        $user_id,
                        $user_secret,
                        $api_disclaimer_accept_request,
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
                    if ('\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus';
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
                        '\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation acceptAsync
     *
     * Accept or Reject SnapTrade disclaimer agreement
     *
     * @param  string $user_id (required)
     * @param  string $user_secret (required)
     * @param  \SnapTrade\Model\APIDisclaimerAcceptRequest $api_disclaimer_accept_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accept'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptAsync($user_id, $user_secret, $api_disclaimer_accept_request, string $contentType = self::contentTypes['accept'][0])
    {
        return $this->acceptAsyncWithHttpInfo($user_id, $user_secret, $api_disclaimer_accept_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation acceptAsyncWithHttpInfo
     *
     * Accept or Reject SnapTrade disclaimer agreement
     *
     * @param  string $user_id (required)
     * @param  string $user_secret (required)
     * @param  \SnapTrade\Model\APIDisclaimerAcceptRequest $api_disclaimer_accept_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accept'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function acceptAsyncWithHttpInfo($user_id, $user_secret, $api_disclaimer_accept_request, string $contentType = self::contentTypes['accept'][0])
    {
        $returnType = '\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus';
        $request = $this->acceptRequest($user_id, $user_secret, $api_disclaimer_accept_request, $contentType);

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
     * Create request for operation 'accept'
     *
     * @param  string $user_id (required)
     * @param  string $user_secret (required)
     * @param  \SnapTrade\Model\APIDisclaimerAcceptRequest $api_disclaimer_accept_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['accept'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function acceptRequest($user_id, $user_secret, $api_disclaimer_accept_request, string $contentType = self::contentTypes['accept'][0])
    {

        // Check if $user_id is a string
        if (!is_null($user_id) && !is_string($user_id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_id, true), gettype($user_id)));
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter user_id when calling accept'
            );
        }

        // Check if $user_secret is a string
        if (!is_null($user_secret) && !is_string($user_secret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_secret, true), gettype($user_secret)));
        }
        // verify the required parameter 'user_secret' is set
        if ($user_secret === null || (is_array($user_secret) && count($user_secret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter user_secret when calling accept'
            );
        }

        if (!($api_disclaimer_accept_request instanceof \SnapTrade\Model\APIDisclaimerAcceptRequest)) {
            throw new \InvalidArgumentException('"api_disclaimer_accept_request" must be instance of "\SnapTrade\Model\APIDisclaimerAcceptRequest" when calling APIDisclaimerApi.accept.');
        }
        // verify the required parameter 'api_disclaimer_accept_request' is set
        if ($api_disclaimer_accept_request === null || (is_array($api_disclaimer_accept_request) && count($api_disclaimer_accept_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter api_disclaimer_accept_request when calling accept'
            );
        }


        $resourcePath = '/snapTrade/acceptDisclaimer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $user_id,
            'userId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $user_secret,
            'userSecret', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($api_disclaimer_accept_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($api_disclaimer_accept_request));
            } else {
                $httpBody = $api_disclaimer_accept_request;
            }
        } elseif (count($formParams) > 0) {
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('clientId');
        if ($apiKey !== null) {
            $queryParams['clientId'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Signature');
        if ($apiKey !== null) {
            $headers['Signature'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('timestamp');
        if ($apiKey !== null) {
            $queryParams['timestamp'] = $apiKey;
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

        $this->beforeCreateRequestHook('POST', $resourcePath, $queryParams, $headers, $httpBody);

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
