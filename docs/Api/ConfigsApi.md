# IdpluggerPromotionAdmin\ConfigsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPromotionConfigsIndex()**](ConfigsApi.md#adminPromotionConfigsIndex) | **GET** /v3/admin/promotion/{promotion_id}/configs | Listar configurações de uma promoção |
| [**adminPromotionConfigsShow()**](ConfigsApi.md#adminPromotionConfigsShow) | **GET** /v3/admin/promotion/{promotion_id}/configs/{key} | Buscar configuração por chave |
| [**adminPromotionConfigsStore()**](ConfigsApi.md#adminPromotionConfigsStore) | **POST** /v3/admin/promotion/{promotion_id}/configs | Criar nova configuração |
| [**adminPromotionConfigsUpdate()**](ConfigsApi.md#adminPromotionConfigsUpdate) | **PUT** /v3/admin/promotion/{promotion_id}/configs/{key} | Atualizar configuração por chave |
| [**adminPromotionConfigsUpsert()**](ConfigsApi.md#adminPromotionConfigsUpsert) | **POST** /v3/admin/promotion/{promotion_id}/configs/upsert | Criar ou atualizar configuração por chave (upsert) |
| [**adminPromotionConfigsValidKeys()**](ConfigsApi.md#adminPromotionConfigsValidKeys) | **GET** /v3/admin/promotion/{promotion_id}/configs/valid-keys | Listar chaves válidas do ConfigKeyEnum |


## `adminPromotionConfigsIndex()`

```php
adminPromotionConfigsIndex($promotion_id, $key, $grupo, $type, $_per_page, $page): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response
```

Listar configurações de uma promoção

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção
$key = 'key_example'; // string | Filtrar por chave (busca parcial)
$grupo = 'grupo_example'; // string | Filtrar por grupo
$type = 'type_example'; // string | Filtrar por tipo
$_per_page = 15; // int | Itens por página
$page = 1; // int | Número da página

try {
    $result = $apiInstance->adminPromotionConfigsIndex($promotion_id, $key, $grupo, $type, $_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |
| **key** | **string**| Filtrar por chave (busca parcial) | [optional] |
| **grupo** | **string**| Filtrar por grupo | [optional] |
| **type** | **string**| Filtrar por tipo | [optional] |
| **_per_page** | **int**| Itens por página | [optional] [default to 15] |
| **page** | **int**| Número da página | [optional] [default to 1] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response**](../Model/AdminPromotionConfigsIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionConfigsShow()`

```php
adminPromotionConfigsShow($promotion_id, $key): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response
```

Buscar configuração por chave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção
$key = promotion_name; // string | Chave da configuração

try {
    $result = $apiInstance->adminPromotionConfigsShow($promotion_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |
| **key** | **string**| Chave da configuração | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response**](../Model/AdminPromotionConfigsShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionConfigsStore()`

```php
adminPromotionConfigsStore($promotion_id, $admin_promotion_configs_store_request): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response
```

Criar nova configuração

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção
$admin_promotion_configs_store_request = new \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest(); // \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest

try {
    $result = $apiInstance->adminPromotionConfigsStore($promotion_id, $admin_promotion_configs_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |
| **admin_promotion_configs_store_request** | [**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest**](../Model/AdminPromotionConfigsStoreRequest.md)|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response**](../Model/AdminPromotionConfigsStore201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionConfigsUpdate()`

```php
adminPromotionConfigsUpdate($promotion_id, $key, $admin_promotion_configs_update_request): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response
```

Atualizar configuração por chave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção
$key = promotion_name; // string | Chave da configuração
$admin_promotion_configs_update_request = new \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest(); // \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest

try {
    $result = $apiInstance->adminPromotionConfigsUpdate($promotion_id, $key, $admin_promotion_configs_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |
| **key** | **string**| Chave da configuração | |
| **admin_promotion_configs_update_request** | [**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest**](../Model/AdminPromotionConfigsUpdateRequest.md)|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response**](../Model/AdminPromotionConfigsUpdate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionConfigsUpsert()`

```php
adminPromotionConfigsUpsert($promotion_id, $admin_promotion_configs_store_request): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response
```

Criar ou atualizar configuração por chave (upsert)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção
$admin_promotion_configs_store_request = new \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest(); // \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest

try {
    $result = $apiInstance->adminPromotionConfigsUpsert($promotion_id, $admin_promotion_configs_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsUpsert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |
| **admin_promotion_configs_store_request** | [**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest**](../Model/AdminPromotionConfigsStoreRequest.md)|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response**](../Model/AdminPromotionConfigsUpsert200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionConfigsValidKeys()`

```php
adminPromotionConfigsValidKeys($promotion_id): \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response
```

Listar chaves válidas do ConfigKeyEnum

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\ConfigsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção

try {
    $result = $apiInstance->adminPromotionConfigsValidKeys($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsApi->adminPromotionConfigsValidKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response**](../Model/AdminPromotionConfigsValidKeys200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
