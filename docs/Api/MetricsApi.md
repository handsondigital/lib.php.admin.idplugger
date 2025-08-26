# IdpluggerPromotion\MetricsApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**metrics()**](MetricsApi.md#metrics) | **GET** /v3/metrics | Devolve as métricas da promoção |


## `metrics()`

```php
metrics($promotion_id, $keys, $start_date, $end_date, $limit, $resolution): \IdpluggerPromotion\Model\Metrics200Response
```

Devolve as métricas da promoção

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotion\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotion\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_id = 'promotion_id_example'; // string | ID da promoção
$keys = array('keys_example'); // string[] | Chaves das métricas que deseja consultar. Exemplo: `keys[]=users&keys[]=coupons&keys[]=luckyNumbers`
$start_date = 'start_date_example'; // string | Data inicial para filtrar as métricas
$end_date = 'end_date_example'; // string | Data final para filtrar as métricas
$limit = 56; // int | Limite de resultados
$resolution = 'resolution_example'; // string | Resolução das métricas. Exemplo: `minute`, `hour`, `day`

try {
    $result = $apiInstance->metrics($promotion_id, $keys, $start_date, $end_date, $limit, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->metrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_id** | **string**| ID da promoção | |
| **keys** | [**string[]**](../Model/string.md)| Chaves das métricas que deseja consultar. Exemplo: &#x60;keys[]&#x3D;users&amp;keys[]&#x3D;coupons&amp;keys[]&#x3D;luckyNumbers&#x60; | |
| **start_date** | **string**| Data inicial para filtrar as métricas | [optional] |
| **end_date** | **string**| Data final para filtrar as métricas | [optional] |
| **limit** | **int**| Limite de resultados | [optional] |
| **resolution** | **string**| Resolução das métricas. Exemplo: &#x60;minute&#x60;, &#x60;hour&#x60;, &#x60;day&#x60; | [optional] |

### Return type

[**\IdpluggerPromotion\Model\Metrics200Response**](../Model/Metrics200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
