# IdpluggerPromotionAdmin\ErrorReportsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminErrorsGet()**](ErrorReportsApi.md#adminErrorsGet) | **GET** /admin/errors | List error reports |
| [**adminErrorsIdDelete()**](ErrorReportsApi.md#adminErrorsIdDelete) | **DELETE** /admin/errors/{id} | Delete error report |
| [**adminErrorsIdGet()**](ErrorReportsApi.md#adminErrorsIdGet) | **GET** /admin/errors/{id} | Get specific error report |


## `adminErrorsGet()`

```php
adminErrorsGet($q, $class, $date, $page, $_per_page): \IdpluggerPromotionAdmin\Model\ErrorReportPaginated
```

List error reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | Search through id, message, exception class, file
$class = 'class_example'; // string | Filter by exception class
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter by date
$page = 1; // int | Page number for pagination
$_per_page = 15; // int | Number of items per page

try {
    $result = $apiInstance->adminErrorsGet($q, $class, $date, $page, $_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorReportsApi->adminErrorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Search through id, message, exception class, file | [optional] |
| **class** | **string**| Filter by exception class | [optional] |
| **date** | **\DateTime**| Filter by date | [optional] |
| **page** | **int**| Page number for pagination | [optional] [default to 1] |
| **_per_page** | **int**| Number of items per page | [optional] [default to 15] |

### Return type

[**\IdpluggerPromotionAdmin\Model\ErrorReportPaginated**](../Model/ErrorReportPaginated.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminErrorsIdDelete()`

```php
adminErrorsIdDelete($id): \IdpluggerPromotionAdmin\Model\SuccessResponse
```

Delete error report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminErrorsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorReportsApi->adminErrorsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminErrorsIdGet()`

```php
adminErrorsIdGet($id): \IdpluggerPromotionAdmin\Model\ErrorReport
```

Get specific error report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminErrorsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorReportsApi->adminErrorsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\ErrorReport**](../Model/ErrorReport.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
