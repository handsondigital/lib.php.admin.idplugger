# IdpluggerPromotionAdmin\PermissionsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPermissionsByAction()**](PermissionsApi.md#adminPermissionsByAction) | **GET** /v3/admin/permissions/action | Buscar permissões por ação |
| [**adminPermissionsByCategory()**](PermissionsApi.md#adminPermissionsByCategory) | **GET** /v3/admin/permissions/category | Buscar permissões por categoria |
| [**adminPermissionsCategories()**](PermissionsApi.md#adminPermissionsCategories) | **GET** /v3/admin/permissions/categories | Listar todas as categorias de permissões |
| [**adminPermissionsGrouped()**](PermissionsApi.md#adminPermissionsGrouped) | **GET** /v3/admin/permissions/grouped | Listar permissões agrupadas por categoria |
| [**adminPermissionsIndex()**](PermissionsApi.md#adminPermissionsIndex) | **GET** /v3/admin/permissions/ | Listar todas as permissões |
| [**adminPermissionsShow()**](PermissionsApi.md#adminPermissionsShow) | **GET** /v3/admin/permissions/{key} | Buscar permissão específica por chave |


## `adminPermissionsByAction()`

```php
adminPermissionsByAction($action): \IdpluggerPromotionAdmin\Model\AdminPermissionsByAction200Response
```

Buscar permissões por ação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = index; // string | Ação a filtrar

try {
    $result = $apiInstance->adminPermissionsByAction($action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsByAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| Ação a filtrar | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsByAction200Response**](../Model/AdminPermissionsByAction200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPermissionsByCategory()`

```php
adminPermissionsByCategory($category): \IdpluggerPromotionAdmin\Model\AdminPermissionsByCategory200Response
```

Buscar permissões por categoria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = promotion.users; // string | Categoria a filtrar

try {
    $result = $apiInstance->adminPermissionsByCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsByCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category** | **string**| Categoria a filtrar | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsByCategory200Response**](../Model/AdminPermissionsByCategory200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPermissionsCategories()`

```php
adminPermissionsCategories(): \IdpluggerPromotionAdmin\Model\AdminPermissionsCategories200Response
```

Listar todas as categorias de permissões

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminPermissionsCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsCategories200Response**](../Model/AdminPermissionsCategories200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPermissionsGrouped()`

```php
adminPermissionsGrouped(): \IdpluggerPromotionAdmin\Model\AdminPermissionsGrouped200Response
```

Listar permissões agrupadas por categoria

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminPermissionsGrouped();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsGrouped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsGrouped200Response**](../Model/AdminPermissionsGrouped200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPermissionsIndex()`

```php
adminPermissionsIndex(): \IdpluggerPromotionAdmin\Model\AdminPermissionsIndex200Response
```

Listar todas as permissões

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->adminPermissionsIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsIndex200Response**](../Model/AdminPermissionsIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPermissionsShow()`

```php
adminPermissionsShow($key): \IdpluggerPromotionAdmin\Model\AdminPermissionsShow200Response
```

Buscar permissão específica por chave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = promotion.users.index; // string | Chave da permissão

try {
    $result = $apiInstance->adminPermissionsShow($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->adminPermissionsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Chave da permissão | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPermissionsShow200Response**](../Model/AdminPermissionsShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
