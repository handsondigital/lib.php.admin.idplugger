<?php
/**
 * RolesApi
 * PHP version 8.1
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Plataforma de Promoção - Documentação da API
 *
 * # Introdução  Bem-vindo à documentação oficial da API da Plataforma de Promoção IdPlugger exclusiva para administradores da API!  Se você está procurando a documentação destinada ao cliente da Plataforma de Promoção IdPlugger [acesse clicando aqui!](/docs/v3/promotion)</a>  # Sobre a API  Esta API é baseada em REST, proporcionando uma arquitetura flexível e de fácil integração.  # Começando  Para começar a explorar e utilizar a API da Plataforma de Promoção IdPlugger, recomendamos que você siga os seguintes passos:  0. **Postman**: [Baixe a collection do postman](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d), instale o postman na sua máquina e importe a collection.  1. **Autenticação**: Obtenha suas credenciais de autenticação ('username' e 'password') de administrador, para acessar a API.  2. **Explorar Endpoints**: Navegue pela lista de endpoints disponíveis e suas respectivas funcionalidades.  3. **Experimentar**: Utilize os exemplos de solicitação fornecidos para testar os endpoints e compreender melhor seu funcionamento.  4. **Integrar**: Integre a API da Plataforma de Promoção IdPlugger em seus próprios projetos e sistemas para aproveitar ao máximo suas capacidades.  # Autenticação  Todos os endpoints requerem token de autenticação válido, que pode ser obtido através de requisição à API enviando as credenciais obtidas.  Este token é do tipo bearer e deve ser enviado no header da requisição no seguinte formato:  | Header | Valor |   | - | - |   | Authorization | bearer `{token}` |  Substitua `{token}` pelo token obtido na autenticação.  IMPORTANTE: O bearer token tem um tempo de validade, o ideal é armazenar o bearer token e solicitar um novo token apenas quando o seu token expirar. A validade do token é enviada junto com o token na resposta do endpoint de autenticação.  # Configurações de Promoção ## Pull Configurations O primeiro passo para configurar uma promoção na API é puxar a parametrização da promoção criada. Para isto, libere o servidor da API para acesso ao banco de dados da promoção e informe os dados de conexão através da rota [Pull Configuration](#/Promotion/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3ApullConfiguration)  ## Steps Após puxar as configurações na etapa anterior, configure as steps da promoção. Steps são as partes de código que serão executadas para cada promoção. Cada promoção pode ter uma configuração diferente de steps.  - Para consultar quais steps estão disponíveis, utilize [este endpoint](/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aindex)  - Para ativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aallow)  - Para desativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aunallow)  - Para consultar quais steps estão ativas, utilize o endpoint de ativação sem passar nenhuma step  Algumas steps são configuradas por padrão ao fazer o pull configuration, para saber quais confira o parâmetro default na resposta do endpoint de consulta de steps. Este endpoint também retorna a descrição do que a step faz e se ela depende que outra esteja ativada ou desativada.  ## Criar Usuário da API Para que um cliente possa utilizar a API, é necessário criar um usuário para ele.  Para isto, após fazer o pull configuration e a parametrização de steps, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3Aregister) para criar um usuário da API. Este endpoint cria o usuário e retorna uma senha para este usuário.  ## Permissões do usuário da API Após criar o usuário, é necessário dar as permissões para que ele possa atuar na promoção. Para isso, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3AgrantPermissions).  Atenção: Selecione bem as permissões, deixando apenas as necessárias.  ## Teste Utilize as credenciais do usuário criado para testar se a API está respondendo para a promoção configurada.  # Postman Collection  [<img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In \" style=\"width: 128px; height: 32px;\">](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d)
 *
 * The version of the OpenAPI document: 3.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace IdpluggerPromotionAdmin\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use IdpluggerPromotionAdmin\ApiException;
use IdpluggerPromotionAdmin\Configuration;
use IdpluggerPromotionAdmin\FormDataProcessor;
use IdpluggerPromotionAdmin\HeaderSelector;
use IdpluggerPromotionAdmin\ObjectSerializer;

/**
 * RolesApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RolesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'rolesAttachPermissions' => [
            'application/json',
        ],
        'rolesDestroy' => [
            'application/json',
        ],
        'rolesIndex' => [
            'application/json',
        ],
        'rolesPermissions' => [
            'application/json',
        ],
        'rolesShow' => [
            'application/json',
        ],
        'rolesStore' => [
            'application/json',
        ],
        'rolesUpdate' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation rolesAttachPermissions
     *
     * Atualizar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesAttachPermissionsRequest|null $roles_attach_permissions_request roles_attach_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesAttachPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response|\IdpluggerPromotionAdmin\Model\RolesAttachPermissions422Response
     */
    public function rolesAttachPermissions($id, $roles_attach_permissions_request = null, string $contentType = self::contentTypes['rolesAttachPermissions'][0])
    {
        list($response) = $this->rolesAttachPermissionsWithHttpInfo($id, $roles_attach_permissions_request, $contentType);
        return $response;
    }

    /**
     * Operation rolesAttachPermissionsWithHttpInfo
     *
     * Atualizar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesAttachPermissionsRequest|null $roles_attach_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesAttachPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response|\IdpluggerPromotionAdmin\Model\RolesAttachPermissions422Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesAttachPermissionsWithHttpInfo($id, $roles_attach_permissions_request = null, string $contentType = self::contentTypes['rolesAttachPermissions'][0])
    {
        $request = $this->rolesAttachPermissionsRequest($id, $roles_attach_permissions_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions422Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesAttachPermissionsAsync
     *
     * Atualizar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesAttachPermissionsRequest|null $roles_attach_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesAttachPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesAttachPermissionsAsync($id, $roles_attach_permissions_request = null, string $contentType = self::contentTypes['rolesAttachPermissions'][0])
    {
        return $this->rolesAttachPermissionsAsyncWithHttpInfo($id, $roles_attach_permissions_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesAttachPermissionsAsyncWithHttpInfo
     *
     * Atualizar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesAttachPermissionsRequest|null $roles_attach_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesAttachPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesAttachPermissionsAsyncWithHttpInfo($id, $roles_attach_permissions_request = null, string $contentType = self::contentTypes['rolesAttachPermissions'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesAttachPermissions200Response';
        $request = $this->rolesAttachPermissionsRequest($id, $roles_attach_permissions_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesAttachPermissions'
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesAttachPermissionsRequest|null $roles_attach_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesAttachPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesAttachPermissionsRequest($id, $roles_attach_permissions_request = null, string $contentType = self::contentTypes['rolesAttachPermissions'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rolesAttachPermissions'
            );
        }



        $resourcePath = '/v3/admin/roles/{id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($roles_attach_permissions_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($roles_attach_permissions_request));
            } else {
                $httpBody = $roles_attach_permissions_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesDestroy
     *
     * Remover role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesDestroy'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function rolesDestroy($id, string $contentType = self::contentTypes['rolesDestroy'][0])
    {
        $this->rolesDestroyWithHttpInfo($id, $contentType);
    }

    /**
     * Operation rolesDestroyWithHttpInfo
     *
     * Remover role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesDestroy'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesDestroyWithHttpInfo($id, string $contentType = self::contentTypes['rolesDestroy'][0])
    {
        $request = $this->rolesDestroyRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesDestroy400Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesDestroyAsync
     *
     * Remover role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesDestroy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesDestroyAsync($id, string $contentType = self::contentTypes['rolesDestroy'][0])
    {
        return $this->rolesDestroyAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesDestroyAsyncWithHttpInfo
     *
     * Remover role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesDestroy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesDestroyAsyncWithHttpInfo($id, string $contentType = self::contentTypes['rolesDestroy'][0])
    {
        $returnType = '';
        $request = $this->rolesDestroyRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesDestroy'
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesDestroy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesDestroyRequest($id, string $contentType = self::contentTypes['rolesDestroy'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rolesDestroy'
            );
        }


        $resourcePath = '/v3/admin/roles/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesIndex
     *
     * Listar roles
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesIndex200Response|\IdpluggerPromotionAdmin\Model\RolesIndex500Response
     */
    public function rolesIndex(string $contentType = self::contentTypes['rolesIndex'][0])
    {
        list($response) = $this->rolesIndexWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation rolesIndexWithHttpInfo
     *
     * Listar roles
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesIndex200Response|\IdpluggerPromotionAdmin\Model\RolesIndex500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesIndexWithHttpInfo(string $contentType = self::contentTypes['rolesIndex'][0])
    {
        $request = $this->rolesIndexRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesIndex200Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesIndex500Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesIndex200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesIndex200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesIndex500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesIndexAsync
     *
     * Listar roles
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesIndexAsync(string $contentType = self::contentTypes['rolesIndex'][0])
    {
        return $this->rolesIndexAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesIndexAsyncWithHttpInfo
     *
     * Listar roles
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesIndexAsyncWithHttpInfo(string $contentType = self::contentTypes['rolesIndex'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesIndex200Response';
        $request = $this->rolesIndexRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesIndex'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesIndexRequest(string $contentType = self::contentTypes['rolesIndex'][0])
    {


        $resourcePath = '/v3/admin/roles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesPermissions
     *
     * Listar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesPermissions200Response
     */
    public function rolesPermissions($id, string $contentType = self::contentTypes['rolesPermissions'][0])
    {
        list($response) = $this->rolesPermissionsWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation rolesPermissionsWithHttpInfo
     *
     * Listar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesPermissions200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesPermissionsWithHttpInfo($id, string $contentType = self::contentTypes['rolesPermissions'][0])
    {
        $request = $this->rolesPermissionsRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesPermissions200Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesPermissions200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesPermissions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesPermissionsAsync
     *
     * Listar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesPermissionsAsync($id, string $contentType = self::contentTypes['rolesPermissions'][0])
    {
        return $this->rolesPermissionsAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesPermissionsAsyncWithHttpInfo
     *
     * Listar permissões de uma role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesPermissionsAsyncWithHttpInfo($id, string $contentType = self::contentTypes['rolesPermissions'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesPermissions200Response';
        $request = $this->rolesPermissionsRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesPermissions'
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesPermissionsRequest($id, string $contentType = self::contentTypes['rolesPermissions'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rolesPermissions'
            );
        }


        $resourcePath = '/v3/admin/roles/{id}/permissions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesShow
     *
     * Exibir detalhes da role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesShow200Response
     */
    public function rolesShow($id, string $contentType = self::contentTypes['rolesShow'][0])
    {
        list($response) = $this->rolesShowWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation rolesShowWithHttpInfo
     *
     * Exibir detalhes da role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesShow200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesShowWithHttpInfo($id, string $contentType = self::contentTypes['rolesShow'][0])
    {
        $request = $this->rolesShowRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesShow200Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesShow200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesShow200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesShowAsync
     *
     * Exibir detalhes da role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesShowAsync($id, string $contentType = self::contentTypes['rolesShow'][0])
    {
        return $this->rolesShowAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesShowAsyncWithHttpInfo
     *
     * Exibir detalhes da role
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesShowAsyncWithHttpInfo($id, string $contentType = self::contentTypes['rolesShow'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesShow200Response';
        $request = $this->rolesShowRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesShow'
     *
     * @param  int $id ID da role (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesShowRequest($id, string $contentType = self::contentTypes['rolesShow'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rolesShow'
            );
        }


        $resourcePath = '/v3/admin/roles/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesStore
     *
     * Criar role
     *
     * @param  \IdpluggerPromotionAdmin\Model\RolesStoreRequest|null $roles_store_request roles_store_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesStore'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesStore201Response|\IdpluggerPromotionAdmin\Model\RolesStore422Response
     */
    public function rolesStore($roles_store_request = null, string $contentType = self::contentTypes['rolesStore'][0])
    {
        list($response) = $this->rolesStoreWithHttpInfo($roles_store_request, $contentType);
        return $response;
    }

    /**
     * Operation rolesStoreWithHttpInfo
     *
     * Criar role
     *
     * @param  \IdpluggerPromotionAdmin\Model\RolesStoreRequest|null $roles_store_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesStore'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesStore201Response|\IdpluggerPromotionAdmin\Model\RolesStore422Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesStoreWithHttpInfo($roles_store_request = null, string $contentType = self::contentTypes['rolesStore'][0])
    {
        $request = $this->rolesStoreRequest($roles_store_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 201:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesStore201Response',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesStore422Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesStore201Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesStore201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesStore422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesStoreAsync
     *
     * Criar role
     *
     * @param  \IdpluggerPromotionAdmin\Model\RolesStoreRequest|null $roles_store_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesStoreAsync($roles_store_request = null, string $contentType = self::contentTypes['rolesStore'][0])
    {
        return $this->rolesStoreAsyncWithHttpInfo($roles_store_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesStoreAsyncWithHttpInfo
     *
     * Criar role
     *
     * @param  \IdpluggerPromotionAdmin\Model\RolesStoreRequest|null $roles_store_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesStoreAsyncWithHttpInfo($roles_store_request = null, string $contentType = self::contentTypes['rolesStore'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesStore201Response';
        $request = $this->rolesStoreRequest($roles_store_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesStore'
     *
     * @param  \IdpluggerPromotionAdmin\Model\RolesStoreRequest|null $roles_store_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesStoreRequest($roles_store_request = null, string $contentType = self::contentTypes['rolesStore'][0])
    {



        $resourcePath = '/v3/admin/roles';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($roles_store_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($roles_store_request));
            } else {
                $httpBody = $roles_store_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rolesUpdate
     *
     * Atualizar role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesUpdateRequest|null $roles_update_request roles_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\RolesUpdate200Response
     */
    public function rolesUpdate($id, $roles_update_request = null, string $contentType = self::contentTypes['rolesUpdate'][0])
    {
        list($response) = $this->rolesUpdateWithHttpInfo($id, $roles_update_request, $contentType);
        return $response;
    }

    /**
     * Operation rolesUpdateWithHttpInfo
     *
     * Atualizar role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesUpdateRequest|null $roles_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\RolesUpdate200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function rolesUpdateWithHttpInfo($id, $roles_update_request = null, string $contentType = self::contentTypes['rolesUpdate'][0])
    {
        $request = $this->rolesUpdateRequest($id, $roles_update_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\RolesUpdate200Response',
                        $request,
                        $response,
                    );
            }

            

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return $this->handleResponseWithDataType(
                '\IdpluggerPromotionAdmin\Model\RolesUpdate200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\RolesUpdate200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation rolesUpdateAsync
     *
     * Atualizar role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesUpdateRequest|null $roles_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesUpdateAsync($id, $roles_update_request = null, string $contentType = self::contentTypes['rolesUpdate'][0])
    {
        return $this->rolesUpdateAsyncWithHttpInfo($id, $roles_update_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rolesUpdateAsyncWithHttpInfo
     *
     * Atualizar role
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesUpdateRequest|null $roles_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rolesUpdateAsyncWithHttpInfo($id, $roles_update_request = null, string $contentType = self::contentTypes['rolesUpdate'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\RolesUpdate200Response';
        $request = $this->rolesUpdateRequest($id, $roles_update_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rolesUpdate'
     *
     * @param  int $id ID da role (required)
     * @param  \IdpluggerPromotionAdmin\Model\RolesUpdateRequest|null $roles_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['rolesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function rolesUpdateRequest($id, $roles_update_request = null, string $contentType = self::contentTypes['rolesUpdate'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling rolesUpdate'
            );
        }



        $resourcePath = '/v3/admin/roles/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($roles_update_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($roles_update_request));
            } else {
                $httpBody = $roles_update_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
