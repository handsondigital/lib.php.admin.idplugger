# IdpluggerPromotionAdmin\UserApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminUsersList()**](UserApi.md#adminUsersList) | **GET** /v3/admin/user | Listar usuários da API |
| [**userGrantPermissions()**](UserApi.md#userGrantPermissions) | **POST** /v3/admin/user/grantpermissions | Dar permissões a um usuário na API |
| [**userRegister()**](UserApi.md#userRegister) | **POST** /v3/admin/user/register | Registrar usuário na API |
| [**userResetPassword()**](UserApi.md#userResetPassword) | **POST** /v3/admin/user/resetpassword | Resetar senha do usuário na API |
| [**userShow()**](UserApi.md#userShow) | **GET** /v3/admin/user/{uuid} | Visualizar dados do usuário na API |
| [**userUpdate()**](UserApi.md#userUpdate) | **PATCH** /v3/admin/user/{uuid} | Atualizar nome do usuário na API |


## `adminUsersList()`

```php
adminUsersList($username, $email, $name, $role, $promotion_id, $_include, $_per_page, $page): \IdpluggerPromotionAdmin\Model\AdminUsersList200Response
```

Listar usuários da API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = clientusername; // string | Filtrar por username (busca parcial)
$email = cliente@example.com; // string | Filtrar por email (busca parcial)
$name = Client Name; // string | Filtrar por nome (busca parcial)
$role = admin; // string | Filtrar por role exata
$promotion_id = c27beaf2-31c2-4410-8701-a9230632a755; // string | Filtrar usuários que possuem ao menos uma permissão na promoção informada
$_include = permissions; // string | Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions
$_per_page = 15; // int | Quantidade de registros por página
$page = 1; // int | Número da página para paginação

try {
    $result = $apiInstance->adminUsersList($username, $email, $name, $role, $promotion_id, $_include, $_per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->adminUsersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| Filtrar por username (busca parcial) | [optional] |
| **email** | **string**| Filtrar por email (busca parcial) | [optional] |
| **name** | **string**| Filtrar por nome (busca parcial) | [optional] |
| **role** | **string**| Filtrar por role exata | [optional] |
| **promotion_id** | **string**| Filtrar usuários que possuem ao menos uma permissão na promoção informada | [optional] |
| **_include** | **string**| Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions | [optional] |
| **_per_page** | **int**| Quantidade de registros por página | [optional] |
| **page** | **int**| Número da página para paginação | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminUsersList200Response**](../Model/AdminUsersList200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGrantPermissions()`

```php
userGrantPermissions($user_grant_permissions_request): \IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response
```

Dar permissões a um usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_grant_permissions_request = new \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest(); // \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest

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
| **user_grant_permissions_request** | [**\IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest**](../Model/UserGrantPermissionsRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response**](../Model/UserGrantPermissions200Response.md)

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
userRegister($user_register_request): \IdpluggerPromotionAdmin\Model\UserRegister200Response
```

Registrar usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_register_request = new \IdpluggerPromotionAdmin\Model\UserRegisterRequest(); // \IdpluggerPromotionAdmin\Model\UserRegisterRequest

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
| **user_register_request** | [**\IdpluggerPromotionAdmin\Model\UserRegisterRequest**](../Model/UserRegisterRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\UserRegister200Response**](../Model/UserRegister200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userResetPassword()`

```php
userResetPassword($user_reset_password_request): \IdpluggerPromotionAdmin\Model\UserResetPassword200Response
```

Resetar senha do usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_reset_password_request = new \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest(); // \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest

try {
    $result = $apiInstance->userResetPassword($user_reset_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_reset_password_request** | [**\IdpluggerPromotionAdmin\Model\UserResetPasswordRequest**](../Model/UserResetPasswordRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\UserResetPassword200Response**](../Model/UserResetPassword200Response.md)

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
userShow($uuid, $_include): \IdpluggerPromotionAdmin\Model\UserShow200Response
```

Visualizar dados do usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = c27beaf2-31c2-4410-8701-a9230632a755; // string | UUID do usuário a ser visualizado
$_include = permissions; // string | Incluir relacionamentos no resultado

try {
    $result = $apiInstance->userShow($uuid, $_include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID do usuário a ser visualizado | |
| **_include** | **string**| Incluir relacionamentos no resultado | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\UserShow200Response**](../Model/UserShow200Response.md)

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
userUpdate($uuid, $user_update_request): \IdpluggerPromotionAdmin\Model\UserUpdate200Response
```

Atualizar nome do usuário na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = c27beaf2-31c2-4410-8701-a9230632a755; // string | UUID do usuário a ser atualizado
$user_update_request = new \IdpluggerPromotionAdmin\Model\UserUpdateRequest(); // \IdpluggerPromotionAdmin\Model\UserUpdateRequest

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
| **user_update_request** | [**\IdpluggerPromotionAdmin\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\UserUpdate200Response**](../Model/UserUpdate200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
