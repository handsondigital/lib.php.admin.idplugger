# IdpluggerPromotionAdmin\TemplatesApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**templatesDelete()**](TemplatesApi.md#templatesDelete) | **DELETE** /v3/promotion/{promotion_id}/cms/templates/{templateKey} | Restaurar template para o padrão (deletar customização) |
| [**templatesIndex()**](TemplatesApi.md#templatesIndex) | **GET** /v3/promotion/{promotion_id}/cms/templates | Listar templates de e-mail da promoção |
| [**templatesShow()**](TemplatesApi.md#templatesShow) | **GET** /v3/promotion/{promotion_id}/cms/templates/{templateKey} | Buscar um template específico |
| [**templatesUpdate()**](TemplatesApi.md#templatesUpdate) | **PATCH** /v3/promotion/{promotion_id}/cms/templates | Atualizar um ou mais templates de e-mail |
| [**templatesVariables()**](TemplatesApi.md#templatesVariables) | **GET** /v3/promotion/{promotion_id}/cms/templates/variables | Listar variáveis disponíveis para os templates de e-mail |


## `templatesDelete()`

```php
templatesDelete($promotion_id, $template_key)
```

Restaurar template para o padrão (deletar customização)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção
$template_key = 'template_key_example'; // string | Key do template

try {
    $apiInstance->templatesDelete($promotion_id, $template_key);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |
| **template_key** | **string**| Key do template | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesIndex()`

```php
templatesIndex($promotion_id)
```

Listar templates de e-mail da promoção

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção

try {
    $apiInstance->templatesIndex($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesShow()`

```php
templatesShow($promotion_id, $template_key)
```

Buscar um template específico

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção
$template_key = 'template_key_example'; // string | Key do template

try {
    $apiInstance->templatesShow($promotion_id, $template_key);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |
| **template_key** | **string**| Key do template | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesUpdate()`

```php
templatesUpdate($promotion_id, $templates_update_request)
```

Atualizar um ou mais templates de e-mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção
$templates_update_request = new \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest(); // \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest

try {
    $apiInstance->templatesUpdate($promotion_id, $templates_update_request);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |
| **templates_update_request** | [**\IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest**](../Model/TemplatesUpdateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templatesVariables()`

```php
templatesVariables($promotion_id)
```

Listar variáveis disponíveis para os templates de e-mail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção

try {
    $apiInstance->templatesVariables($promotion_id);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->templatesVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
