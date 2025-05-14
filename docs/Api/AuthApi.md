# IdpluggerPromotionAdmin\AuthApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authLogin()**](AuthApi.md#authLogin) | **POST** /v3/login | Login na API |
| [**authMe()**](AuthApi.md#authMe) | **GET** /v3/me | Dados na API |


## `authLogin()`

```php
authLogin($auth_login_request): \IdpluggerPromotionAdmin\Model\AuthLogin200Response
```

Login na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new IdpluggerPromotionAdmin\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_login_request = new \IdpluggerPromotionAdmin\Model\AuthLoginRequest(); // \IdpluggerPromotionAdmin\Model\AuthLoginRequest

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
| **auth_login_request** | [**\IdpluggerPromotionAdmin\Model\AuthLoginRequest**](../Model/AuthLoginRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AuthLogin200Response**](../Model/AuthLogin200Response.md)

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
authMe(): \IdpluggerPromotionAdmin\Model\AuthMe200Response
```

Dados na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\AuthApi(
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

[**\IdpluggerPromotionAdmin\Model\AuthMe200Response**](../Model/AuthMe200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
