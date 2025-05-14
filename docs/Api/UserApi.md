# IdpluggerPromotionAdmin\UserApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userGrantPermissions()**](UserApi.md#userGrantPermissions) | **POST** /v3/admin/user/grantpermissions | Dar permissões a um usuário na API |
| [**userRegister()**](UserApi.md#userRegister) | **POST** /v3/admin/user/register | Registrar usuário na API |


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
