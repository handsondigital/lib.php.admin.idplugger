# IdpluggerPromotion\UserApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userGrantPermissions()**](UserApi.md#userGrantPermissions) | **POST** /v3/admin/user/grantpermissions | Dar permissões a um usuário na API |
| [**userRegister()**](UserApi.md#userRegister) | **POST** /v3/admin/user/register | Registrar usuário na API |
| [**userShow()**](UserApi.md#userShow) | **GET** /v3/admin/user/{uuid} | Visualizar dados do usuário na API |
| [**userUpdate()**](UserApi.md#userUpdate) | **PATCH** /v3/admin/user/{uuid} | Atualizar nome do usuário na API |


## `userGrantPermissions()`

```php
userGrantPermissions($user_grant_permissions_request): \IdpluggerPromotion\Model\UserGrantPermissions200Response
```

Dar permissões a um usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_grant_permissions_request = new \IdpluggerPromotion\Model\UserGrantPermissionsRequest(); // \IdpluggerPromotion\Model\UserGrantPermissionsRequest

try {
    $result = $apiInstance->userGrantPermissions($user_grant_permissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGrantPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_grant_permissions_request** | [**\IdpluggerPromotion\Model\UserGrantPermissionsRequest**](../Model/UserGrantPermissionsRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\UserGrantPermissions200Response**](../Model/UserGrantPermissions200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userRegister()`

```php
userRegister($user_register_request): \IdpluggerPromotion\Model\UserRegister200Response
```

Registrar usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_register_request = new \IdpluggerPromotion\Model\UserRegisterRequest(); // \IdpluggerPromotion\Model\UserRegisterRequest

try {
    $result = $apiInstance->userRegister($user_register_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_register_request** | [**\IdpluggerPromotion\Model\UserRegisterRequest**](../Model/UserRegisterRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\UserRegister200Response**](../Model/UserRegister200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userShow()`

```php
userShow($uuid): \IdpluggerPromotion\Model\UserShow200Response
```

Visualizar dados do usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = c27beaf2-31c2-4410-8701-a9230632a755; // string | UUID do usuário a ser visualizado

try {
    $result = $apiInstance->userShow($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID do usuário a ser visualizado | |

### Return type

[**\IdpluggerPromotion\Model\UserShow200Response**](../Model/UserShow200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userUpdate()`

```php
userUpdate($uuid, $user_update_request): \IdpluggerPromotion\Model\UserUpdate200Response
```

Atualizar nome do usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = c27beaf2-31c2-4410-8701-a9230632a755; // string | UUID do usuário a ser atualizado
$user_update_request = new \IdpluggerPromotion\Model\UserUpdateRequest(); // \IdpluggerPromotion\Model\UserUpdateRequest

try {
    $result = $apiInstance->userUpdate($uuid, $user_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID do usuário a ser atualizado | |
| **user_update_request** | [**\IdpluggerPromotion\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\UserUpdate200Response**](../Model/UserUpdate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
