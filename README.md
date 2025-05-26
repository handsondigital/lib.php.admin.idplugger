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

[<img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In \" style=\"width: 128px; height: 32px;\">](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d)


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
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
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

## API Endpoints

All URIs are relative to *https://api.idplugger.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**authLogin**](docs/Api/AuthApi.md#authlogin) | **POST** /v3/login | Login na API
*AuthApi* | [**authMe**](docs/Api/AuthApi.md#authme) | **GET** /v3/me | Dados na API
*MetricsApi* | [**metrics**](docs/Api/MetricsApi.md#metrics) | **GET** /v3/metrics | Devolve as métricas da promoção
*PromotionApi* | [**promotionPullConfiguration**](docs/Api/PromotionApi.md#promotionpullconfiguration) | **POST** /v3/admin/pullconfiguration | Adicionar/Atualizar configurações de uma promoção ao orquestrador
*PromotionApi* | [**promotionStart**](docs/Api/PromotionApi.md#promotionstart) | **POST** /v3/admin/promotion/start | Iniciar uma promoção na API
*StepsApi* | [**stepsAllow**](docs/Api/StepsApi.md#stepsallow) | **POST** /v3/steps/allow | Inclui uma Step em um determinado endpoint
*StepsApi* | [**stepsIndex**](docs/Api/StepsApi.md#stepsindex) | **GET** /v3/steps | Retorna todas as steps existentes
*StepsApi* | [**stepsUnallow**](docs/Api/StepsApi.md#stepsunallow) | **POST** /v3/steps/unallow | Remove uma Step de um determinado endpoint
*UserApi* | [**userGrantPermissions**](docs/Api/UserApi.md#usergrantpermissions) | **POST** /v3/admin/user/grantpermissions | Dar permissões a um usuário na API
*UserApi* | [**userRegister**](docs/Api/UserApi.md#userregister) | **POST** /v3/admin/user/register | Registrar usuário na API

## Models

- [AuthLogin200Response](docs/Model/AuthLogin200Response.md)
- [AuthLogin401Response](docs/Model/AuthLogin401Response.md)
- [AuthLoginRequest](docs/Model/AuthLoginRequest.md)
- [AuthMe200Response](docs/Model/AuthMe200Response.md)
- [Metrics200Response](docs/Model/Metrics200Response.md)
- [Metrics200ResponseUsersInner](docs/Model/Metrics200ResponseUsersInner.md)
- [Metrics400Response](docs/Model/Metrics400Response.md)
- [PromotionPullConfiguration200Response](docs/Model/PromotionPullConfiguration200Response.md)
- [PromotionPullConfiguration500Response](docs/Model/PromotionPullConfiguration500Response.md)
- [PromotionPullConfigurationRequest](docs/Model/PromotionPullConfigurationRequest.md)
- [PromotionPullConfigurationRequestDb](docs/Model/PromotionPullConfigurationRequestDb.md)
- [PromotionStartRequest](docs/Model/PromotionStartRequest.md)
- [PromotionStartRequestUser](docs/Model/PromotionStartRequestUser.md)
- [StepsAllow201Response](docs/Model/StepsAllow201Response.md)
- [StepsAllow409Response](docs/Model/StepsAllow409Response.md)
- [StepsAllowRequest](docs/Model/StepsAllowRequest.md)
- [StepsIndex201Response](docs/Model/StepsIndex201Response.md)
- [StepsUnallow201Response](docs/Model/StepsUnallow201Response.md)
- [StepsUnallow409Response](docs/Model/StepsUnallow409Response.md)
- [UserGrantPermissions200Response](docs/Model/UserGrantPermissions200Response.md)
- [UserGrantPermissions200ResponseUserInner](docs/Model/UserGrantPermissions200ResponseUserInner.md)
- [UserGrantPermissions500Response](docs/Model/UserGrantPermissions500Response.md)
- [UserGrantPermissionsRequest](docs/Model/UserGrantPermissionsRequest.md)
- [UserRegister200Response](docs/Model/UserRegister200Response.md)
- [UserRegister200ResponseUserInner](docs/Model/UserRegister200ResponseUserInner.md)
- [UserRegister500Response](docs/Model/UserRegister500Response.md)
- [UserRegisterRequest](docs/Model/UserRegisterRequest.md)

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
