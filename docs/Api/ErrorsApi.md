# IdpluggerPromotionAdmin\ErrorsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminErrorsDestroy()**](ErrorsApi.md#adminErrorsDestroy) | **DELETE** /v3/admin/errors/{id} | Deletar relatório de erro |
| [**adminErrorsIndex()**](ErrorsApi.md#adminErrorsIndex) | **GET** /v3/admin/errors/ | Listar relatórios de erro |
| [**adminErrorsShow()**](ErrorsApi.md#adminErrorsShow) | **GET** /v3/admin/errors/{id} | Visualizar erro específico |


## `adminErrorsDestroy()`

```php
adminErrorsDestroy($id): \IdpluggerPromotionAdmin\Model\AdminErrorsDestroy200Response
```

Deletar relatório de erro

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID do relatório de erro

try {
    $result = $apiInstance->adminErrorsDestroy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->adminErrorsDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID do relatório de erro | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminErrorsDestroy200Response**](../Model/AdminErrorsDestroy200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminErrorsIndex()`

```php
adminErrorsIndex($q, $class, $date, $page): \IdpluggerPromotionAdmin\Model\AdminErrorsIndex200Response
```

Listar relatórios de erro

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Buscar em id, mensagem, classe da exceção, arquivo
$class = 'class_example'; // string | Filtrar por classe da exceção
$date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filtrar por data
$page = 1; // int | Número da página

try {
    $result = $apiInstance->adminErrorsIndex($q, $class, $date, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->adminErrorsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| Buscar em id, mensagem, classe da exceção, arquivo | [optional] |
| **class** | **string**| Filtrar por classe da exceção | [optional] |
| **date** | **\DateTime**| Filtrar por data | [optional] |
| **page** | **int**| Número da página | [optional] [default to 1] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminErrorsIndex200Response**](../Model/AdminErrorsIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminErrorsShow()`

```php
adminErrorsShow($id): \IdpluggerPromotionAdmin\Model\AdminErrorsShow200Response
```

Visualizar erro específico

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ErrorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ID do relatório de erro

try {
    $result = $apiInstance->adminErrorsShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ErrorsApi->adminErrorsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID do relatório de erro | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminErrorsShow200Response**](../Model/AdminErrorsShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
