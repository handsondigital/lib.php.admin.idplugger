# IdpluggerPromotionAdmin\StepsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stepsAllow()**](StepsApi.md#stepsAllow) | **POST** /v3/steps/allow | Inclui uma Step em um determinado endpoint |
| [**stepsIndex()**](StepsApi.md#stepsIndex) | **GET** /v3/steps | Retorna todas as steps existentes |
| [**stepsUnallow()**](StepsApi.md#stepsUnallow) | **POST** /v3/steps/unallow | Remove uma Step de um determinado endpoint |


## `stepsAllow()`

```php
stepsAllow($steps_allow_request): \IdpluggerPromotionAdmin\Model\StepsAllow201Response
```

Inclui uma Step em um determinado endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\StepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$steps_allow_request = new \IdpluggerPromotionAdmin\Model\StepsAllowRequest(); // \IdpluggerPromotionAdmin\Model\StepsAllowRequest

try {
    $result = $apiInstance->stepsAllow($steps_allow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepsApi->stepsAllow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **steps_allow_request** | [**\IdpluggerPromotionAdmin\Model\StepsAllowRequest**](../Model/StepsAllowRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\StepsAllow201Response**](../Model/StepsAllow201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stepsIndex()`

```php
stepsIndex($promotion_id): \IdpluggerPromotionAdmin\Model\StepsIndex200Response
```

Retorna todas as steps existentes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\StepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = c27beaf2-31c2-4410-8701-a9230632a755; // string | UUID da promoção

try {
    $result = $apiInstance->stepsIndex($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepsApi->stepsIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\StepsIndex200Response**](../Model/StepsIndex200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stepsUnallow()`

```php
stepsUnallow($steps_allow_request): \IdpluggerPromotionAdmin\Model\StepsUnallow201Response
```

Remove uma Step de um determinado endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\StepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$steps_allow_request = new \IdpluggerPromotionAdmin\Model\StepsAllowRequest(); // \IdpluggerPromotionAdmin\Model\StepsAllowRequest

try {
    $result = $apiInstance->stepsUnallow($steps_allow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StepsApi->stepsUnallow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **steps_allow_request** | [**\IdpluggerPromotionAdmin\Model\StepsAllowRequest**](../Model/StepsAllowRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\StepsUnallow201Response**](../Model/StepsUnallow201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
