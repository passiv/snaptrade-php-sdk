<?php

namespace SnapTrade;

class BaseApi
{
    public function beforeSendHook(
        \GuzzleHttp\Psr7\Request $request,
        \SnapTrade\RequestOptions $requestOptions,
        \SnapTrade\Configuration $configuration
    ): \GuzzleHttp\Psr7\Request {
        return $request;
    }

    public function beforeCreateRequestHook(
        string $method,
        string $resourcePath,
        array $queryParams,
        array $headers,
        $httpBody,
    ): void {
        // add epoch time in seconds to query parameters
        $queryParams['timestamp'] = time();
    }
}
