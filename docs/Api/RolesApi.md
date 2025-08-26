# IdpluggerPromotion\RolesApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rolesAttachPermissions()**](RolesApi.md#rolesAttachPermissions) | **POST** /v3/admin/roles/{id}/permissions | Atualizar permissões de uma role |
| [**rolesDestroy()**](RolesApi.md#rolesDestroy) | **DELETE** /v3/admin/roles/{id} | Remover role |
| [**rolesIndex()**](RolesApi.md#rolesIndex) | **GET** /v3/admin/roles | Listar roles |
| [**rolesPermissions()**](RolesApi.md#rolesPermissions) | **GET** /v3/admin/roles/{id}/permissions | Listar permissões de uma role |
| [**rolesShow()**](RolesApi.md#rolesShow) | **GET** /v3/admin/roles/{id} | Exibir detalhes da role |
| [**rolesStore()**](RolesApi.md#rolesStore) | **POST** /v3/admin/roles | Criar role |
| [**rolesUpdate()**](RolesApi.md#rolesUpdate) | **PATCH** /v3/admin/roles/{id} | Atualizar role |


## `rolesAttachPermissions()`

```php
rolesAttachPermissions($id, $roles_attach_permissions_request): \IdpluggerPromotion\Model\RolesAttachPermissions200Response
```

Atualizar permissões de uma role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID da role
$roles_attach_permissions_request = new \IdpluggerPromotion\Model\RolesAttachPermissionsRequest(); // \IdpluggerPromotion\Model\RolesAttachPermissionsRequest

try {
    $result = $apiInstance->rolesAttachPermissions($id, $roles_attach_permissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesAttachPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID da role | |
| **roles_attach_permissions_request** | [**\IdpluggerPromotion\Model\RolesAttachPermissionsRequest**](../Model/RolesAttachPermissionsRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\RolesAttachPermissions200Response**](../Model/RolesAttachPermissions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesDestroy()`

```php
rolesDestroy($id)
```

Remover role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID da role

try {
    $apiInstance->rolesDestroy($id);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesDestroy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID da role | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesIndex()`

```php
rolesIndex(): \IdpluggerPromotion\Model\RolesIndex200Response
```

Listar roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rolesIndex();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdpluggerPromotion\Model\RolesIndex200Response**](../Model/RolesIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesPermissions()`

```php
rolesPermissions($id): \IdpluggerPromotion\Model\RolesPermissions200Response
```

Listar permissões de uma role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID da role

try {
    $result = $apiInstance->rolesPermissions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID da role | |

### Return type

[**\IdpluggerPromotion\Model\RolesPermissions200Response**](../Model/RolesPermissions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesShow()`

```php
rolesShow($id): \IdpluggerPromotion\Model\RolesShow200Response
```

Exibir detalhes da role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID da role

try {
    $result = $apiInstance->rolesShow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID da role | |

### Return type

[**\IdpluggerPromotion\Model\RolesShow200Response**](../Model/RolesShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesStore()`

```php
rolesStore($roles_store_request): \IdpluggerPromotion\Model\RolesStore201Response
```

Criar role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roles_store_request = new \IdpluggerPromotion\Model\RolesStoreRequest(); // \IdpluggerPromotion\Model\RolesStoreRequest

try {
    $result = $apiInstance->rolesStore($roles_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesStore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **roles_store_request** | [**\IdpluggerPromotion\Model\RolesStoreRequest**](../Model/RolesStoreRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\RolesStore201Response**](../Model/RolesStore201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesUpdate()`

```php
rolesUpdate($id, $roles_update_request): \IdpluggerPromotion\Model\RolesUpdate200Response
```

Atualizar role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID da role
$roles_update_request = new \IdpluggerPromotion\Model\RolesUpdateRequest(); // \IdpluggerPromotion\Model\RolesUpdateRequest

try {
    $result = $apiInstance->rolesUpdate($id, $roles_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID da role | |
| **roles_update_request** | [**\IdpluggerPromotion\Model\RolesUpdateRequest**](../Model/RolesUpdateRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\RolesUpdate200Response**](../Model/RolesUpdate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
