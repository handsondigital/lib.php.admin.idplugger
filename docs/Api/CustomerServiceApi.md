# IdpluggerPromotionAdmin\CustomerServiceApi

All URIs are relative to https://api.idplugger.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminServiceCustomerApplications()**](CustomerServiceApi.md#adminServiceCustomerApplications) | **GET** /admin/service/customer/applications/{client_id} | Listar aplicações de um cliente no serviço de atendimento ao cliente |
| [**adminServiceCustomerBrands()**](CustomerServiceApi.md#adminServiceCustomerBrands) | **GET** /admin/service/customer/brands/{client_id} | Listar marcas de um cliente do serviço de atendimento ao cliente |
| [**adminServiceCustomerCampaigns()**](CustomerServiceApi.md#adminServiceCustomerCampaigns) | **GET** /admin/service/customer/campaigns/{client_id} | Listar campanhas de um cliente no serviço de atendimento ao cliente |
| [**adminServiceCustomerClients()**](CustomerServiceApi.md#adminServiceCustomerClients) | **GET** /admin/service/customer/clients | Listar clientes do serviço de atendimento ao cliente |


## `adminServiceCustomerApplications()`

```php
adminServiceCustomerApplications($client_id, $page, $per_page): \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response
```

Listar aplicações de um cliente no serviço de atendimento ao cliente

Retorna uma lista de aplicações de um cliente específico obtidas do serviço de atendimento ao cliente.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | ID do cliente
$page = 1; // int | Número da página
$per_page = 15; // int | Itens por página

try {
    $result = $apiInstance->adminServiceCustomerApplications($client_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->adminServiceCustomerApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID do cliente | |
| **page** | **int**| Número da página | [optional] [default to 1] |
| **per_page** | **int**| Itens por página | [optional] [default to 15] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response**](../Model/AdminServiceCustomerApplications200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceCustomerBrands()`

```php
adminServiceCustomerBrands($client_id, $search, $page, $per_page): \IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response
```

Listar marcas de um cliente do serviço de atendimento ao cliente

Retorna uma lista de marcas de um cliente específico obtidas do serviço de atendimento ao cliente.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | ID do cliente
$search = 'search_example'; // string | Termo de busca
$page = 1; // int | Número da página
$per_page = 15; // int | Itens por página

try {
    $result = $apiInstance->adminServiceCustomerBrands($client_id, $search, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->adminServiceCustomerBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID do cliente | |
| **search** | **string**| Termo de busca | [optional] |
| **page** | **int**| Número da página | [optional] [default to 1] |
| **per_page** | **int**| Itens por página | [optional] [default to 15] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response**](../Model/AdminServiceCustomerBrands200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceCustomerCampaigns()`

```php
adminServiceCustomerCampaigns($client_id, $page, $per_page, $status, $name): \IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response
```

Listar campanhas de um cliente no serviço de atendimento ao cliente

Retorna uma lista de campanhas de um cliente específico obtidas do serviço de atendimento ao cliente.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | ID do cliente
$page = 1; // int | Número da página
$per_page = 15; // int | Itens por página
$status = 'status_example'; // string | Status da campanha
$name = 'name_example'; // string | Nome da campanha

try {
    $result = $apiInstance->adminServiceCustomerCampaigns($client_id, $page, $per_page, $status, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->adminServiceCustomerCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| ID do cliente | |
| **page** | **int**| Número da página | [optional] [default to 1] |
| **per_page** | **int**| Itens por página | [optional] [default to 15] |
| **status** | **string**| Status da campanha | [optional] |
| **name** | **string**| Nome da campanha | [optional] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response**](../Model/AdminServiceCustomerCampaigns200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminServiceCustomerClients()`

```php
adminServiceCustomerClients($search, $is_active, $page, $per_page): \IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response
```

Listar clientes do serviço de atendimento ao cliente

Retorna uma lista de clientes obtidos do serviço de atendimento ao cliente.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = IdpluggerPromotionAdmin\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new IdpluggerPromotionAdmin\Api\CustomerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Termo de busca
$is_active = true; // bool | Filtrar por clientes ativos (padrão true)
$page = 1; // int | Número da página
$per_page = 15; // int | Itens por página

try {
    $result = $apiInstance->adminServiceCustomerClients($search, $is_active, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerServiceApi->adminServiceCustomerClients: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Termo de busca | [optional] |
| **is_active** | **bool**| Filtrar por clientes ativos (padrão true) | [optional] [default to true] |
| **page** | **int**| Número da página | [optional] [default to 1] |
| **per_page** | **int**| Itens por página | [optional] [default to 15] |

### Return type

[**\IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response**](../Model/AdminServiceCustomerClients200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
