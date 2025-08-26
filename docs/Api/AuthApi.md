# IdpluggerPromotion\AuthApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminAuthRequestToken()**](AuthApi.md#adminAuthRequestToken) | **POST** /admin/auth/request-token | Solicita envio de token de login por email |
| [**authLogin()**](AuthApi.md#authLogin) | **POST** /v3/login | Login na API |
| [**authLoginByToken()**](AuthApi.md#authLoginByToken) | **POST** /admin/auth/login | Login na API via e-mail e token |
| [**authMe()**](AuthApi.md#authMe) | **GET** /v3/me | Dados na API |
| [**authRefreshToken()**](AuthApi.md#authRefreshToken) | **POST** /admin/auth/refresh | Renova o do token de autenticação |


## `adminAuthRequestToken()`

```php
adminAuthRequestToken($admin_auth_request_token_request): \IdpluggerPromotion\Model\AdminAuthRequestToken200Response
```

Solicita envio de token de login por email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotion\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$admin_auth_request_token_request = new \IdpluggerPromotion\Model\AdminAuthRequestTokenRequest(); // \IdpluggerPromotion\Model\AdminAuthRequestTokenRequest

try {
    $result = $apiInstance->adminAuthRequestToken($admin_auth_request_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->adminAuthRequestToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **admin_auth_request_token_request** | [**\IdpluggerPromotion\Model\AdminAuthRequestTokenRequest**](../Model/AdminAuthRequestTokenRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\AdminAuthRequestToken200Response**](../Model/AdminAuthRequestToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authLogin()`

```php
authLogin($auth_login_request): \IdpluggerPromotion\Model\AuthLogin200Response
```

Login na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotion\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_login_request = new \IdpluggerPromotion\Model\AuthLoginRequest(); // \IdpluggerPromotion\Model\AuthLoginRequest

try {
    $result = $apiInstance->authLogin($auth_login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_login_request** | [**\IdpluggerPromotion\Model\AuthLoginRequest**](../Model/AuthLoginRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\AuthLogin200Response**](../Model/AuthLogin200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authLoginByToken()`

```php
authLoginByToken($auth_login_by_token_request): \IdpluggerPromotion\Model\AuthLoginByToken200Response
```

Login na API via e-mail e token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotion\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_login_by_token_request = new \IdpluggerPromotion\Model\AuthLoginByTokenRequest(); // \IdpluggerPromotion\Model\AuthLoginByTokenRequest

try {
    $result = $apiInstance->authLoginByToken($auth_login_by_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authLoginByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_login_by_token_request** | [**\IdpluggerPromotion\Model\AuthLoginByTokenRequest**](../Model/AuthLoginByTokenRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\AuthLoginByToken200Response**](../Model/AuthLoginByToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authMe()`

```php
authMe(): \IdpluggerPromotion\Model\AuthMe200Response
```

Dados na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\IdpluggerPromotion\Model\AuthMe200Response**](../Model/AuthMe200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authRefreshToken()`

```php
authRefreshToken($auth_refresh_token_request): \IdpluggerPromotion\Model\AuthLoginByToken200Response
```

Renova o do token de autenticação

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotion\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_refresh_token_request = new \IdpluggerPromotion\Model\AuthRefreshTokenRequest(); // \IdpluggerPromotion\Model\AuthRefreshTokenRequest

try {
    $result = $apiInstance->authRefreshToken($auth_refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_refresh_token_request** | [**\IdpluggerPromotion\Model\AuthRefreshTokenRequest**](../Model/AuthRefreshTokenRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\AuthLoginByToken200Response**](../Model/AuthLoginByToken200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
