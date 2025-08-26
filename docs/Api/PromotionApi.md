# IdpluggerPromotion\PromotionApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**promotionPullConfiguration()**](PromotionApi.md#promotionPullConfiguration) | **POST** /v3/admin/pullconfiguration | Adicionar/Atualizar configurações de uma promoção ao orquestrador |
| [**promotionStart()**](PromotionApi.md#promotionStart) | **POST** /v3/admin/promotion/start | Iniciar uma promoção na API |


## `promotionPullConfiguration()`

```php
promotionPullConfiguration($promotion_pull_configuration_request): \IdpluggerPromotion\Model\PromotionPullConfiguration200Response
```

Adicionar/Atualizar configurações de uma promoção ao orquestrador

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_pull_configuration_request = new \IdpluggerPromotion\Model\PromotionPullConfigurationRequest(); // \IdpluggerPromotion\Model\PromotionPullConfigurationRequest

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
| **promotion_pull_configuration_request** | [**\IdpluggerPromotion\Model\PromotionPullConfigurationRequest**](../Model/PromotionPullConfigurationRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\PromotionPullConfiguration200Response**](../Model/PromotionPullConfiguration200Response.md)

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
promotionStart($promotion_start_request): \IdpluggerPromotion\Model\PromotionStart200Response
```

Iniciar uma promoção na API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_start_request = new \IdpluggerPromotion\Model\PromotionStartRequest(); // \IdpluggerPromotion\Model\PromotionStartRequest

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
| **promotion_start_request** | [**\IdpluggerPromotion\Model\PromotionStartRequest**](../Model/PromotionStartRequest.md)|  | [optional] |

### Return type

[**\IdpluggerPromotion\Model\PromotionStart200Response**](../Model/PromotionStart200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
