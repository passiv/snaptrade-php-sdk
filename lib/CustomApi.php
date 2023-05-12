<?php

namespace SnapTrade;

class CustomApi
{

    private function sort_keys_recursive(&$array)
    {
        ksort($array);
        foreach ($array as &$value) {
            if (is_array($value)) {
                $this->sort_keys_recursive($value);
            }
        }
    }

    public function beforeSendHook(
        \GuzzleHttp\Psr7\Request $request,
        \SnapTrade\RequestOptions $requestOptions,
        \SnapTrade\Configuration $configuration
    ): \GuzzleHttp\Psr7\Request {
        $path = explode($request->getUri()->getHost(), strval($request->getUri()))[1];
        $query = $request->getUri()->getQuery();
        $sig_object = [
            "content" => null,
            "path" => $path,
            "query" => $query
        ];
        $this->sort_keys_recursive($sig_object);
        $data = json_encode($sig_object);
        $hash = hash_hmac('sha256', $data, $configuration->getConsumerKey(), true);
        $hash = base64_encode($hash);
        return $request->withHeader("Signature", $hash);
    }

    public function beforeCreateRequestHook(
        string $method,
        string $resourcePath,
        array $queryParams,
        array $headers,
        $httpBody,
    ): array {
        // add epoch time in seconds to query parameters
        $queryParams['timestamp'] = time();
        return [
            "method" => $method,
            "queryParams" => $queryParams,
            "resourcePath" => $resourcePath,
            "headers" => $headers,
            "httpBody" => $httpBody,
        ];
    }
}
