# IdpluggerPromotionAdmin\PromotionApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**promotionPullConfiguration()**](PromotionApi.md#promotionPullConfiguration) | **POST** /v3/admin/pullconfiguration | Adicionar/Atualizar configurações de uma promoção ao orquestrador |


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
