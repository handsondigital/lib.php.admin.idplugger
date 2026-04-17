# handsondigital/lib.php.admin.idplugger



# Introdução

Bem-vindo à documentação oficial da API da Plataforma de Promoção IdPlugger exclusiva para administradores da API!

Se você está procurando a documentação destinada ao cliente da Plataforma de Promoção IdPlugger [acesse clicando aqui!](/docs/v3/promotion)</a>

# Sobre a API

Esta API é baseada em REST, proporcionando uma arquitetura flexível e de fácil integração.

# Começando

Para começar a explorar e utilizar a API da Plataforma de Promoção IdPlugger, recomendamos que você siga os seguintes passos:

0. **Postman**: [Baixe a collection do postman](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d), instale o postman na sua máquina e importe a collection.

1. **Autenticação**: Obtenha suas credenciais de autenticação ('username' e 'password') de administrador, para acessar a API.

2. **Explorar Endpoints**: Navegue pela lista de endpoints disponíveis e suas respectivas funcionalidades.

3. **Experimentar**: Utilize os exemplos de solicitação fornecidos para testar os endpoints e compreender melhor seu funcionamento.

4. **Integrar**: Integre a API da Plataforma de Promoção IdPlugger em seus próprios projetos e sistemas para aproveitar ao máximo suas capacidades.

# Autenticação

Todos os endpoints requerem token de autenticação válido, que pode ser obtido através de requisição à API enviando as credenciais obtidas.

Este token é do tipo bearer e deve ser enviado no header da requisição no seguinte formato:

| Header | Valor |
  | - | - |
  | Authorization | bearer `{token}` |

Substitua `{token}` pelo token obtido na autenticação.

IMPORTANTE: O bearer token tem um tempo de validade, o ideal é armazenar o bearer token e solicitar um novo token apenas quando o seu token expirar. A validade do token é enviada junto com o token na resposta do endpoint de autenticação.

# Configurações de Promoção
## Pull Configurations
O primeiro passo para configurar uma promoção na API é puxar a parametrização da promoção criada. Para isto, libere o servidor da API para acesso ao banco de dados da promoção e informe os dados de conexão através da rota [Pull Configuration](#/Promotion/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3ApullConfiguration)

## Steps
Após puxar as configurações na etapa anterior, configure as steps da promoção.
Steps são as partes de código que serão executadas para cada promoção.
Cada promoção pode ter uma configuração diferente de steps.
 - Para consultar quais steps estão disponíveis, utilize [este endpoint](/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aindex)
 - Para ativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aallow)
 - Para desativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aunallow)
 - Para consultar quais steps estão ativas, utilize o endpoint de ativação sem passar nenhuma step

Algumas steps são configuradas por padrão ao fazer o pull configuration, para saber quais confira o parâmetro default na resposta do endpoint de consulta de steps. Este endpoint também retorna a descrição do que a step faz e se ela depende que outra esteja ativada ou desativada.

## Criar Usuário da API
Para que um cliente possa utilizar a API, é necessário criar um usuário para ele.

Para isto, após fazer o pull configuration e a parametrização de steps, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3Aregister) para criar um usuário da API. Este endpoint cria o usuário e retorna uma senha para este usuário.

## Permissões do usuário da API
Após criar o usuário, é necessário dar as permissões para que ele possa atuar na promoção. Para isso, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3AgrantPermissions).

Atenção: Selecione bem as permissões, deixando apenas as necessárias.

## Teste
Utilize as credenciais do usuário criado para testar se a API está respondendo para a promoção configurada.

# Postman Collection

[<img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In \" style=\"width: 128px; height: 32px;\">](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d)\\n\\n# Limite de Frequência (Rate Limit)\\n\\nA resposta da **API Idplugger** quando o limite de frequência (rate limit) é atingido é um código de status HTTP **429 (Too Many Requests)**.\\n\\nDetalhes do retorno:\\n\\n1. **Código de Status HTTP**: 429 Too Many Requests.\\n2. **Corpo da Resposta (Body)**: Um JSON contendo a mensagem de erro: `{\"message\": \"Too Many Requests\"}`.\\n3. **Cabeçalhos HTTP (Headers)**:\\n   - `X-RateLimit-Limit`: O limite total permitido.\\n   - `X-RateLimit-Remaining`: Quantidade de requisições restantes.\\n   - `Retry-After`: Segundos a esperar antes da próxima tentativa.\\n   - `X-RateLimit-Reset`: Timestamp de quando o limite será zerado.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/handsondigital/lib.php.admin.idplugger.git"
    }
  ],
  "require": {
    "handsondigital/lib.php.admin.idplugger": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/handsondigital/lib.php.admin.idplugger/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new IdpluggerPromotionAdmin\Api\ApiLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string | Filter by request path (partial match)
$method = 'method_example'; // string | Filter by HTTP method (GET, POST, PUT, DELETE, etc.)
$status = 56; // int | Filter by HTTP status code
$username = 'username_example'; // string | Filter by API username
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter by start date (YYYY-MM-DD)
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Filter by end date (YYYY-MM-DD)
$page = 1; // int | Page number for pagination
$_per_page = 15; // int | Number of items per page

try {
    $result = $apiInstance->adminLogsGet($path, $method, $status, $username, $from, $to, $page, $_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiLogsApi->adminLogsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.idplugger.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApiLogsApi* | [**adminLogsGet**](docs/Api/ApiLogsApi.md#adminlogsget) | **GET** /admin/logs | List API logs
*ApiLogsApi* | [**adminLogsIdGet**](docs/Api/ApiLogsApi.md#adminlogsidget) | **GET** /admin/logs/{id} | Get specific API log
*AuthApi* | [**adminAuthRequestToken**](docs/Api/AuthApi.md#adminauthrequesttoken) | **POST** /admin/auth/request-token | Solicita envio de token de login por email
*AuthApi* | [**authLogin**](docs/Api/AuthApi.md#authlogin) | **POST** /v3/login | Login na API
*AuthApi* | [**authLoginByToken**](docs/Api/AuthApi.md#authloginbytoken) | **POST** /admin/auth/login | Login na API via e-mail e token
*AuthApi* | [**authMe**](docs/Api/AuthApi.md#authme) | **GET** /v3/me | Dados na API
*AuthApi* | [**authRefreshToken**](docs/Api/AuthApi.md#authrefreshtoken) | **POST** /admin/auth/refresh | Renova o do token de autenticação
*ConfigsApi* | [**adminPromotionConfigsIndex**](docs/Api/ConfigsApi.md#adminpromotionconfigsindex) | **GET** /v3/admin/promotion/{promotion_id}/configs | Listar configurações de uma promoção
*ConfigsApi* | [**adminPromotionConfigsShow**](docs/Api/ConfigsApi.md#adminpromotionconfigsshow) | **GET** /v3/admin/promotion/{promotion_id}/configs/{key} | Buscar configuração por chave
*ConfigsApi* | [**adminPromotionConfigsStore**](docs/Api/ConfigsApi.md#adminpromotionconfigsstore) | **POST** /v3/admin/promotion/{promotion_id}/configs | Criar nova configuração
*ConfigsApi* | [**adminPromotionConfigsUpdate**](docs/Api/ConfigsApi.md#adminpromotionconfigsupdate) | **PUT** /v3/admin/promotion/{promotion_id}/configs/{key} | Atualizar configuração por chave
*ConfigsApi* | [**adminPromotionConfigsUpsert**](docs/Api/ConfigsApi.md#adminpromotionconfigsupsert) | **POST** /v3/admin/promotion/{promotion_id}/configs/upsert | Criar ou atualizar configuração por chave (upsert)
*ConfigsApi* | [**adminPromotionConfigsValidKeys**](docs/Api/ConfigsApi.md#adminpromotionconfigsvalidkeys) | **GET** /v3/admin/promotion/{promotion_id}/configs/valid-keys | Listar chaves válidas do ConfigKeyEnum
*CustomerServiceApi* | [**adminServiceCustomerApplications**](docs/Api/CustomerServiceApi.md#adminservicecustomerapplications) | **GET** /admin/service/customer/applications/{client_id} | Listar aplicações de um cliente no serviço de atendimento ao cliente
*CustomerServiceApi* | [**adminServiceCustomerBrands**](docs/Api/CustomerServiceApi.md#adminservicecustomerbrands) | **GET** /admin/service/customer/brands/{client_id} | Listar marcas de um cliente do serviço de atendimento ao cliente
*CustomerServiceApi* | [**adminServiceCustomerCampaigns**](docs/Api/CustomerServiceApi.md#adminservicecustomercampaigns) | **GET** /admin/service/customer/campaigns/{client_id} | Listar campanhas de um cliente no serviço de atendimento ao cliente
*CustomerServiceApi* | [**adminServiceCustomerClients**](docs/Api/CustomerServiceApi.md#adminservicecustomerclients) | **GET** /admin/service/customer/clients | Listar clientes do serviço de atendimento ao cliente
*ErrorReportsApi* | [**adminErrorsGet**](docs/Api/ErrorReportsApi.md#adminerrorsget) | **GET** /admin/errors | List error reports
*ErrorReportsApi* | [**adminErrorsIdDelete**](docs/Api/ErrorReportsApi.md#adminerrorsiddelete) | **DELETE** /admin/errors/{id} | Delete error report
*ErrorReportsApi* | [**adminErrorsIdGet**](docs/Api/ErrorReportsApi.md#adminerrorsidget) | **GET** /admin/errors/{id} | Get specific error report
*ErrorsApi* | [**adminErrorsDestroy**](docs/Api/ErrorsApi.md#adminerrorsdestroy) | **DELETE** /v3/admin/errors/{id} | Deletar relatório de erro
*ErrorsApi* | [**adminErrorsIndex**](docs/Api/ErrorsApi.md#adminerrorsindex) | **GET** /v3/admin/errors/ | Listar relatórios de erro
*ErrorsApi* | [**adminErrorsShow**](docs/Api/ErrorsApi.md#adminerrorsshow) | **GET** /v3/admin/errors/{id} | Visualizar erro específico
*LogsApi* | [**adminLogsIndex**](docs/Api/LogsApi.md#adminlogsindex) | **GET** /v3/admin/logs/ | Listar logs de requisições da API
*LogsApi* | [**adminLogsShow**](docs/Api/LogsApi.md#adminlogsshow) | **GET** /v3/admin/logs/{id} | Visualizar log específico
*MetricsApi* | [**metrics**](docs/Api/MetricsApi.md#metrics) | **GET** /v3/metrics | Devolve as métricas da promoção
*PermissionsApi* | [**adminPermissionsByAction**](docs/Api/PermissionsApi.md#adminpermissionsbyaction) | **GET** /v3/admin/permissions/action | Buscar permissões por ação
*PermissionsApi* | [**adminPermissionsByCategory**](docs/Api/PermissionsApi.md#adminpermissionsbycategory) | **GET** /v3/admin/permissions/category | Buscar permissões por categoria
*PermissionsApi* | [**adminPermissionsCategories**](docs/Api/PermissionsApi.md#adminpermissionscategories) | **GET** /v3/admin/permissions/categories | Listar todas as categorias de permissões
*PermissionsApi* | [**adminPermissionsGrouped**](docs/Api/PermissionsApi.md#adminpermissionsgrouped) | **GET** /v3/admin/permissions/grouped | Listar permissões agrupadas por categoria
*PermissionsApi* | [**adminPermissionsIndex**](docs/Api/PermissionsApi.md#adminpermissionsindex) | **GET** /v3/admin/permissions/ | Listar todas as permissões
*PermissionsApi* | [**adminPermissionsShow**](docs/Api/PermissionsApi.md#adminpermissionsshow) | **GET** /v3/admin/permissions/{key} | Buscar permissão específica por chave
*PromotionApi* | [**adminPromotionCacheClear**](docs/Api/PromotionApi.md#adminpromotioncacheclear) | **POST** /v3/admin/promotion/{promotion_id}/cache/clear | Renova o cache de uma promoção na API
*PromotionApi* | [**adminPromotionLuckyNumbersReset**](docs/Api/PromotionApi.md#adminpromotionluckynumbersreset) | **POST** /v3/admin/promotion/{promotion_id}/lucky-numbers/reset | Resetar números da sorte de uma promoção
*PromotionApi* | [**promotionPullConfiguration**](docs/Api/PromotionApi.md#promotionpullconfiguration) | **POST** /v3/admin/pullconfiguration | Adicionar/Atualizar configurações de uma promoção ao orquestrador
*PromotionApi* | [**promotionSetup**](docs/Api/PromotionApi.md#promotionsetup) | **POST** /v3/admin/promotion/setup | Setup automatizado de ambiente de promoção
*PromotionApi* | [**promotionStart**](docs/Api/PromotionApi.md#promotionstart) | **POST** /v3/admin/promotion/start | Iniciar uma promoção na API
*RolesApi* | [**rolesAttachPermissions**](docs/Api/RolesApi.md#rolesattachpermissions) | **POST** /v3/admin/roles/{id}/permissions | Atualizar permissões de uma role
*RolesApi* | [**rolesDestroy**](docs/Api/RolesApi.md#rolesdestroy) | **DELETE** /v3/admin/roles/{id} | Remover role
*RolesApi* | [**rolesIndex**](docs/Api/RolesApi.md#rolesindex) | **GET** /v3/admin/roles | Listar roles
*RolesApi* | [**rolesPermissions**](docs/Api/RolesApi.md#rolespermissions) | **GET** /v3/admin/roles/{id}/permissions | Listar permissões de uma role
*RolesApi* | [**rolesShow**](docs/Api/RolesApi.md#rolesshow) | **GET** /v3/admin/roles/{id} | Exibir detalhes da role
*RolesApi* | [**rolesStore**](docs/Api/RolesApi.md#rolesstore) | **POST** /v3/admin/roles | Criar role
*RolesApi* | [**rolesUpdate**](docs/Api/RolesApi.md#rolesupdate) | **PATCH** /v3/admin/roles/{id} | Atualizar role
*StepsApi* | [**stepsAllow**](docs/Api/StepsApi.md#stepsallow) | **POST** /v3/steps/allow | Inclui uma Step em um determinado endpoint
*StepsApi* | [**stepsIndex**](docs/Api/StepsApi.md#stepsindex) | **GET** /v3/steps | Retorna todas as steps existentes
*StepsApi* | [**stepsUnallow**](docs/Api/StepsApi.md#stepsunallow) | **POST** /v3/steps/disallow | Remove uma Step de um determinado endpoint
*UserApi* | [**adminUsersList**](docs/Api/UserApi.md#adminuserslist) | **GET** /v3/admin/user | Listar usuários da API
*UserApi* | [**userGrantPermissions**](docs/Api/UserApi.md#usergrantpermissions) | **POST** /v3/admin/user/grantpermissions | Dar permissões a um usuário na API
*UserApi* | [**userRegister**](docs/Api/UserApi.md#userregister) | **POST** /v3/admin/user/register | Registrar usuário na API
*UserApi* | [**userResetPassword**](docs/Api/UserApi.md#userresetpassword) | **POST** /v3/admin/user/resetpassword | Resetar senha do usuário na API
*UserApi* | [**userShow**](docs/Api/UserApi.md#usershow) | **GET** /v3/admin/user/{uuid} | Visualizar dados do usuário na API
*UserApi* | [**userUpdate**](docs/Api/UserApi.md#userupdate) | **PATCH** /v3/admin/user/{uuid} | Atualizar nome do usuário na API

## Models

- [AdminAuthRequestToken200Response](docs/Model/AdminAuthRequestToken200Response.md)
- [AdminAuthRequestTokenRequest](docs/Model/AdminAuthRequestTokenRequest.md)
- [AdminErrorsDestroy200Response](docs/Model/AdminErrorsDestroy200Response.md)
- [AdminErrorsIndex200Response](docs/Model/AdminErrorsIndex200Response.md)
- [AdminErrorsIndex200ResponseContentInner](docs/Model/AdminErrorsIndex200ResponseContentInner.md)
- [AdminErrorsShow200Response](docs/Model/AdminErrorsShow200Response.md)
- [AdminErrorsShow200ResponseContent](docs/Model/AdminErrorsShow200ResponseContent.md)
- [AdminLogsIndex200Response](docs/Model/AdminLogsIndex200Response.md)
- [AdminLogsIndex200ResponseContentInner](docs/Model/AdminLogsIndex200ResponseContentInner.md)
- [AdminLogsShow200Response](docs/Model/AdminLogsShow200Response.md)
- [AdminLogsShow200ResponseContent](docs/Model/AdminLogsShow200ResponseContent.md)
- [AdminPermissionsByAction200Response](docs/Model/AdminPermissionsByAction200Response.md)
- [AdminPermissionsByCategory200Response](docs/Model/AdminPermissionsByCategory200Response.md)
- [AdminPermissionsByCategory200ResponseContentInner](docs/Model/AdminPermissionsByCategory200ResponseContentInner.md)
- [AdminPermissionsCategories200Response](docs/Model/AdminPermissionsCategories200Response.md)
- [AdminPermissionsGrouped200Response](docs/Model/AdminPermissionsGrouped200Response.md)
- [AdminPermissionsGrouped200ResponseContentValueInner](docs/Model/AdminPermissionsGrouped200ResponseContentValueInner.md)
- [AdminPermissionsIndex200Response](docs/Model/AdminPermissionsIndex200Response.md)
- [AdminPermissionsIndex200ResponseContentInner](docs/Model/AdminPermissionsIndex200ResponseContentInner.md)
- [AdminPermissionsIndex200ResponseContentInnerRolesInner](docs/Model/AdminPermissionsIndex200ResponseContentInnerRolesInner.md)
- [AdminPermissionsShow200Response](docs/Model/AdminPermissionsShow200Response.md)
- [AdminPermissionsShow200ResponseContent](docs/Model/AdminPermissionsShow200ResponseContent.md)
- [AdminPromotionCacheClear200Response](docs/Model/AdminPromotionCacheClear200Response.md)
- [AdminPromotionCacheClear200ResponseContent](docs/Model/AdminPromotionCacheClear200ResponseContent.md)
- [AdminPromotionCacheClear500Response](docs/Model/AdminPromotionCacheClear500Response.md)
- [AdminPromotionConfigsIndex200Response](docs/Model/AdminPromotionConfigsIndex200Response.md)
- [AdminPromotionConfigsIndex200ResponseCategoriesInnerValue](docs/Model/AdminPromotionConfigsIndex200ResponseCategoriesInnerValue.md)
- [AdminPromotionConfigsIndex200ResponseConfigsValue](docs/Model/AdminPromotionConfigsIndex200ResponseConfigsValue.md)
- [AdminPromotionConfigsIndex200ResponseConfigsValueMetadata](docs/Model/AdminPromotionConfigsIndex200ResponseConfigsValueMetadata.md)
- [AdminPromotionConfigsIndex500Response](docs/Model/AdminPromotionConfigsIndex500Response.md)
- [AdminPromotionConfigsShow200Response](docs/Model/AdminPromotionConfigsShow200Response.md)
- [AdminPromotionConfigsShow200ResponseConfig](docs/Model/AdminPromotionConfigsShow200ResponseConfig.md)
- [AdminPromotionConfigsShow404Response](docs/Model/AdminPromotionConfigsShow404Response.md)
- [AdminPromotionConfigsStore201Response](docs/Model/AdminPromotionConfigsStore201Response.md)
- [AdminPromotionConfigsStoreRequest](docs/Model/AdminPromotionConfigsStoreRequest.md)
- [AdminPromotionConfigsUpdate200Response](docs/Model/AdminPromotionConfigsUpdate200Response.md)
- [AdminPromotionConfigsUpdateRequest](docs/Model/AdminPromotionConfigsUpdateRequest.md)
- [AdminPromotionConfigsUpsert200Response](docs/Model/AdminPromotionConfigsUpsert200Response.md)
- [AdminPromotionConfigsValidKeys200Response](docs/Model/AdminPromotionConfigsValidKeys200Response.md)
- [AdminPromotionConfigsValidKeys200ResponseValidKeysInner](docs/Model/AdminPromotionConfigsValidKeys200ResponseValidKeysInner.md)
- [AdminPromotionLuckyNumbersReset200Response](docs/Model/AdminPromotionLuckyNumbersReset200Response.md)
- [AdminPromotionLuckyNumbersReset500Response](docs/Model/AdminPromotionLuckyNumbersReset500Response.md)
- [AdminServiceCustomerApplications200Response](docs/Model/AdminServiceCustomerApplications200Response.md)
- [AdminServiceCustomerApplications200ResponseContentInner](docs/Model/AdminServiceCustomerApplications200ResponseContentInner.md)
- [AdminServiceCustomerApplications200ResponseContentInnerClient](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerClient.md)
- [AdminServiceCustomerApplications200ResponseContentInnerProduct](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerProduct.md)
- [AdminServiceCustomerApplications200ResponseContentInnerProductOneOf](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerProductOneOf.md)
- [AdminServiceCustomerApplications200ResponseContentInnerProgrammingInner](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerProgrammingInner.md)
- [AdminServiceCustomerApplications200ResponseContentInnerPromotionsInner](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerPromotionsInner.md)
- [AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInner](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInner.md)
- [AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInnerWorkflow](docs/Model/AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInnerWorkflow.md)
- [AdminServiceCustomerBrands200Response](docs/Model/AdminServiceCustomerBrands200Response.md)
- [AdminServiceCustomerBrands200ResponseContentInner](docs/Model/AdminServiceCustomerBrands200ResponseContentInner.md)
- [AdminServiceCustomerCampaigns200Response](docs/Model/AdminServiceCustomerCampaigns200Response.md)
- [AdminServiceCustomerCampaigns200ResponseContentInner](docs/Model/AdminServiceCustomerCampaigns200ResponseContentInner.md)
- [AdminServiceCustomerClients200Response](docs/Model/AdminServiceCustomerClients200Response.md)
- [AdminServiceCustomerClients200ResponseContentInner](docs/Model/AdminServiceCustomerClients200ResponseContentInner.md)
- [AdminServiceCustomerClients200ResponsePaging](docs/Model/AdminServiceCustomerClients200ResponsePaging.md)
- [AdminUsersList200Response](docs/Model/AdminUsersList200Response.md)
- [AdminUsersList200ResponsePagination](docs/Model/AdminUsersList200ResponsePagination.md)
- [AdminUsersList200ResponseUsersInner](docs/Model/AdminUsersList200ResponseUsersInner.md)
- [AdminUsersList500Response](docs/Model/AdminUsersList500Response.md)
- [ApiLog](docs/Model/ApiLog.md)
- [ApiLogPaginated](docs/Model/ApiLogPaginated.md)
- [AuthLogin200Response](docs/Model/AuthLogin200Response.md)
- [AuthLogin401Response](docs/Model/AuthLogin401Response.md)
- [AuthLoginByToken200Response](docs/Model/AuthLoginByToken200Response.md)
- [AuthLoginByTokenRequest](docs/Model/AuthLoginByTokenRequest.md)
- [AuthLoginRequest](docs/Model/AuthLoginRequest.md)
- [AuthMe200Response](docs/Model/AuthMe200Response.md)
- [AuthMe200ResponsePromotionsInner](docs/Model/AuthMe200ResponsePromotionsInner.md)
- [AuthRefreshTokenRequest](docs/Model/AuthRefreshTokenRequest.md)
- [ErrorReport](docs/Model/ErrorReport.md)
- [ErrorReportPaginated](docs/Model/ErrorReportPaginated.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Metrics200Response](docs/Model/Metrics200Response.md)
- [Metrics200ResponseUsersInner](docs/Model/Metrics200ResponseUsersInner.md)
- [Metrics400Response](docs/Model/Metrics400Response.md)
- [Pagination](docs/Model/Pagination.md)
- [PaginationLinksInner](docs/Model/PaginationLinksInner.md)
- [PromotionPullConfiguration200Response](docs/Model/PromotionPullConfiguration200Response.md)
- [PromotionPullConfiguration500Response](docs/Model/PromotionPullConfiguration500Response.md)
- [PromotionPullConfigurationRequest](docs/Model/PromotionPullConfigurationRequest.md)
- [PromotionPullConfigurationRequestDb](docs/Model/PromotionPullConfigurationRequestDb.md)
- [PromotionSetup202Response](docs/Model/PromotionSetup202Response.md)
- [PromotionSetup422Response](docs/Model/PromotionSetup422Response.md)
- [PromotionSetup500Response](docs/Model/PromotionSetup500Response.md)
- [PromotionSetupRequest](docs/Model/PromotionSetupRequest.md)
- [PromotionSetupRequestDb](docs/Model/PromotionSetupRequestDb.md)
- [PromotionStart200Response](docs/Model/PromotionStart200Response.md)
- [PromotionStart200ResponseUser](docs/Model/PromotionStart200ResponseUser.md)
- [PromotionStartRequest](docs/Model/PromotionStartRequest.md)
- [PromotionStartRequestUser](docs/Model/PromotionStartRequestUser.md)
- [RolesAttachPermissions200Response](docs/Model/RolesAttachPermissions200Response.md)
- [RolesAttachPermissions422Response](docs/Model/RolesAttachPermissions422Response.md)
- [RolesAttachPermissionsRequest](docs/Model/RolesAttachPermissionsRequest.md)
- [RolesDestroy400Response](docs/Model/RolesDestroy400Response.md)
- [RolesIndex200Response](docs/Model/RolesIndex200Response.md)
- [RolesIndex200ResponseRolesInner](docs/Model/RolesIndex200ResponseRolesInner.md)
- [RolesIndex500Response](docs/Model/RolesIndex500Response.md)
- [RolesPermissions200Response](docs/Model/RolesPermissions200Response.md)
- [RolesShow200Response](docs/Model/RolesShow200Response.md)
- [RolesShow200ResponsePermissionsInner](docs/Model/RolesShow200ResponsePermissionsInner.md)
- [RolesShow200ResponseRole](docs/Model/RolesShow200ResponseRole.md)
- [RolesStore201Response](docs/Model/RolesStore201Response.md)
- [RolesStore201ResponseRole](docs/Model/RolesStore201ResponseRole.md)
- [RolesStore422Response](docs/Model/RolesStore422Response.md)
- [RolesStoreRequest](docs/Model/RolesStoreRequest.md)
- [RolesUpdate200Response](docs/Model/RolesUpdate200Response.md)
- [RolesUpdateRequest](docs/Model/RolesUpdateRequest.md)
- [StepsAllow201Response](docs/Model/StepsAllow201Response.md)
- [StepsAllow409Response](docs/Model/StepsAllow409Response.md)
- [StepsAllowRequest](docs/Model/StepsAllowRequest.md)
- [StepsIndex200Response](docs/Model/StepsIndex200Response.md)
- [StepsIndex200ResponseStepsValueValue](docs/Model/StepsIndex200ResponseStepsValueValue.md)
- [StepsUnallow201Response](docs/Model/StepsUnallow201Response.md)
- [StepsUnallow409Response](docs/Model/StepsUnallow409Response.md)
- [SuccessResponse](docs/Model/SuccessResponse.md)
- [UserGrantPermissions200Response](docs/Model/UserGrantPermissions200Response.md)
- [UserGrantPermissions200ResponseUserInner](docs/Model/UserGrantPermissions200ResponseUserInner.md)
- [UserGrantPermissions500Response](docs/Model/UserGrantPermissions500Response.md)
- [UserGrantPermissionsRequest](docs/Model/UserGrantPermissionsRequest.md)
- [UserRegister200Response](docs/Model/UserRegister200Response.md)
- [UserRegister200ResponseUser](docs/Model/UserRegister200ResponseUser.md)
- [UserRegister500Response](docs/Model/UserRegister500Response.md)
- [UserRegisterRequest](docs/Model/UserRegisterRequest.md)
- [UserResetPassword200Response](docs/Model/UserResetPassword200Response.md)
- [UserResetPassword200ResponseUser](docs/Model/UserResetPassword200ResponseUser.md)
- [UserResetPassword500Response](docs/Model/UserResetPassword500Response.md)
- [UserResetPasswordRequest](docs/Model/UserResetPasswordRequest.md)
- [UserShow200Response](docs/Model/UserShow200Response.md)
- [UserShow200ResponseUser](docs/Model/UserShow200ResponseUser.md)
- [UserShow404Response](docs/Model/UserShow404Response.md)
- [UserShow500Response](docs/Model/UserShow500Response.md)
- [UserUpdate200Response](docs/Model/UserUpdate200Response.md)
- [UserUpdate200ResponseUser](docs/Model/UserUpdate200ResponseUser.md)
- [UserUpdate404Response](docs/Model/UserUpdate404Response.md)
- [UserUpdate422Response](docs/Model/UserUpdate422Response.md)
- [UserUpdate500Response](docs/Model/UserUpdate500Response.md)
- [UserUpdateRequest](docs/Model/UserUpdateRequest.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.0`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
