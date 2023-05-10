# SnapTrade\APIStatusApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**check()**](APIStatusApi.md#check) | **GET** / | Get API Status |


## `check()`

```php
check(): \SnapTrade\Model\Status
```

Get API Status

Check whether the API is operational and verify timestamps.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\APIStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client()
);


try {
    $result = $apiInstance->check();
    print_r($result->$getVersion());
    print_r($result->$getTimestamp());
    print_r($result->$getOnline());
} catch (\Exception $e) {
    echo 'Exception when calling APIStatusApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SnapTrade\Model\Status**](../Model/Status.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
