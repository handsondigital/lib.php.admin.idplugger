# IdpluggerPromotionAdmin\ApiLogsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminLogsGet()**](ApiLogsApi.md#adminLogsGet) | **GET** /admin/logs | List API logs |
| [**adminLogsIdGet()**](ApiLogsApi.md#adminLogsIdGet) | **GET** /admin/logs/{id} | Get specific API log |


## `adminLogsGet()`

```php
adminLogsGet($path, $method, $status, $username, $from, $to, $page, $_per_page): \IdpluggerPromotionAdmin\Model\ApiLogPaginated
```

List API logs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\ApiLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | Filter by request path (partial match)
$method = 'method_example'; // string | Filter by HTTP method (GET, POST, PUT, DELETE, etc.)
$status = 56; // int | Filter by HTTP status code
$username = 'username_example'; // string | Filter by API username
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter by start date (YYYY-MM-DD)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter by end date (YYYY-MM-DD)
$page = 1; // int | Page number for pagination
$_per_page = 15; // int | Number of items per page

try {
    $result = $apiInstance->adminLogsGet($path, $method, $status, $username, $from, $to, $page, $_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiLogsApi->adminLogsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Filter by request path (partial match) | [optional] |
| **method** | **string**| Filter by HTTP method (GET, POST, PUT, DELETE, etc.) | [optional] |
| **status** | **int**| Filter by HTTP status code | [optional] |
| **username** | **string**| Filter by API username | [optional] |
| **from** | **\DateTime**| Filter by start date (YYYY-MM-DD) | [optional] |
| **to** | **\DateTime**| Filter by end date (YYYY-MM-DD) | [optional] |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **_per_page** | **int**| Number of items per page | [optional] [default to 15] |

### Return type

[**\IdpluggerPromotionAdmin\Model\ApiLogPaginated**](../Model/ApiLogPaginated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminLogsIdGet()`

```php
adminLogsIdGet($id): \IdpluggerPromotionAdmin\Model\ApiLog
```

Get specific API log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\ApiLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->adminLogsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiLogsApi->adminLogsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\ApiLog**](../Model/ApiLog.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
