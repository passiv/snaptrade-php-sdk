# SnapTrade\ErrorLogsApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listUserErrors()**](ErrorLogsApi.md#listUserErrors) | **GET** /snapTrade/listUserErrors | Retrieve error logs on behalf of your SnapTrade users |


## `listUserErrors()`

```php
listUserErrors($user_id, $user_secret): \SnapTrade\Model\UserErrorLog[]
```

Retrieve error logs on behalf of your SnapTrade users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\ErrorLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $apiInstance->listUserErrors(
        user_id: $user_id, 
        user_secret: $user_secret
    );
    print_r($result->$getRequestedAt());
    print_r($result->$getResponse());
    print_r($result->$getStatusCode());
    print_r($result->$getQueryParams());
    print_r($result->$getHttpMethod());
    print_r($result->$getEndpoint());
} catch (\Exception $e) {
    echo 'Exception when calling ErrorLogsApi->listUserErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\UserErrorLog[]**](../Model/UserErrorLog.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
