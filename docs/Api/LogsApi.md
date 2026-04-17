# IdpluggerPromotionAdmin\LogsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminLogsIndex()**](LogsApi.md#adminLogsIndex) | **GET** /v3/admin/logs/ | Listar logs de requisições da API |
| [**adminLogsShow()**](LogsApi.md#adminLogsShow) | **GET** /v3/admin/logs/{id} | Visualizar log específico |


## `adminLogsIndex()`

```php
adminLogsIndex($path, $method, $status, $username, $from, $to, $per_page, $page): \IdpluggerPromotionAdmin\Model\AdminLogsIndex200Response
```

Listar logs de requisições da API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | Filtrar por caminho da requisição
$method = GET; // string | Filtrar por método HTTP
$status = 200; // int | Filtrar por status code
$username = 'username_example'; // string | Filtrar por username do usuário
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data inicial (YYYY-MM-DD)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Data final (YYYY-MM-DD)
$per_page = 50; // int | Itens por página
$page = 1; // int | Número da página

try {
    $result = $apiInstance->adminLogsIndex($path, $method, $status, $username, $from, $to, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->adminLogsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| Filtrar por caminho da requisição | [optional] |
| **method** | **string**| Filtrar por método HTTP | [optional] |
| **status** | **int**| Filtrar por status code | [optional] |
| **username** | **string**| Filtrar por username do usuário | [optional] |
| **from** | **\DateTime**| Data inicial (YYYY-MM-DD) | [optional] |
| **to** | **\DateTime**| Data final (YYYY-MM-DD) | [optional] |
| **per_page** | **int**| Itens por página | [optional] [default to 50] |
| **page** | **int**| Número da página | [optional] [default to 1] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminLogsIndex200Response**](../Model/AdminLogsIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminLogsShow()`

```php
adminLogsShow($id): \IdpluggerPromotionAdmin\Model\AdminLogsShow200Response
```

Visualizar log específico

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID do log

try {
    $result = $apiInstance->adminLogsShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->adminLogsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID do log | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminLogsShow200Response**](../Model/AdminLogsShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
