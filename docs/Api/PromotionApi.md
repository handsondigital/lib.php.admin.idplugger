# IdpluggerPromotionAdmin\PromotionApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminPromotionCacheClear()**](PromotionApi.md#adminPromotionCacheClear) | **POST** /v3/admin/promotion/{promotion_id}/cache/clear | Renova o cache de uma promoção na API |
| [**adminPromotionLuckyNumbersReset()**](PromotionApi.md#adminPromotionLuckyNumbersReset) | **POST** /v3/admin/promotion/{promotion_id}/lucky-numbers/reset | Resetar números da sorte de uma promoção |
| [**promotionPullConfiguration()**](PromotionApi.md#promotionPullConfiguration) | **POST** /v3/admin/pullconfiguration | Adicionar/Atualizar configurações de uma promoção ao orquestrador |
| [**promotionSetup()**](PromotionApi.md#promotionSetup) | **POST** /v3/admin/promotion/setup | Setup automatizado de ambiente de promoção |
| [**promotionStart()**](PromotionApi.md#promotionStart) | **POST** /v3/admin/promotion/start | Iniciar uma promoção na API |


## `adminPromotionCacheClear()`

```php
adminPromotionCacheClear($promotion_id): \IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response
```

Renova o cache de uma promoção na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção

try {
    $result = $apiInstance->adminPromotionCacheClear($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->adminPromotionCacheClear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response**](../Model/AdminPromotionCacheClear200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminPromotionLuckyNumbersReset()`

```php
adminPromotionLuckyNumbersReset($promotion_id): \IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response
```

Resetar números da sorte de uma promoção

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 693c1917-7051-43d6-93ab-a49a0e2dde00; // string | UUID da promoção

try {
    $result = $apiInstance->adminPromotionLuckyNumbersReset($promotion_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->adminPromotionLuckyNumbersReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| UUID da promoção | |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response**](../Model/AdminPromotionLuckyNumbersReset200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promotionPullConfiguration()`

```php
promotionPullConfiguration($promotion_pull_configuration_request): \IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response
```

Adicionar/Atualizar configurações de uma promoção ao orquestrador

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_pull_configuration_request = new \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest(); // \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest

try {
    $result = $apiInstance->promotionPullConfiguration($promotion_pull_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionPullConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_pull_configuration_request** | [**\IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest**](../Model/PromotionPullConfigurationRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response**](../Model/PromotionPullConfiguration200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promotionSetup()`

```php
promotionSetup($promotion_setup_request): \IdpluggerPromotionAdmin\Model\PromotionSetup202Response
```

Setup automatizado de ambiente de promoção

Inicia o provisionamento automatizado de um ambiente de promoção. Clona o projeto, configura o .env, executa migrações e verifica a saúde da instalação. O resultado é enviado de forma assíncrona via callback para o workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_setup_request = new \IdpluggerPromotionAdmin\Model\PromotionSetupRequest(); // \IdpluggerPromotionAdmin\Model\PromotionSetupRequest

try {
    $result = $apiInstance->promotionSetup($promotion_setup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_setup_request** | [**\IdpluggerPromotionAdmin\Model\PromotionSetupRequest**](../Model/PromotionSetupRequest.md)|  | |

### Return type

[**\IdpluggerPromotionAdmin\Model\PromotionSetup202Response**](../Model/PromotionSetup202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `promotionStart()`

```php
promotionStart($promotion_start_request): \IdpluggerPromotionAdmin\Model\PromotionStart200Response
```

Iniciar uma promoção na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_start_request = new \IdpluggerPromotionAdmin\Model\PromotionStartRequest(); // \IdpluggerPromotionAdmin\Model\PromotionStartRequest

try {
    $result = $apiInstance->promotionStart($promotion_start_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->promotionStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_start_request** | [**\IdpluggerPromotionAdmin\Model\PromotionStartRequest**](../Model/PromotionStartRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\PromotionStart200Response**](../Model/PromotionStart200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
