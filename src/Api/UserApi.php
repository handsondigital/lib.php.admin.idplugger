<?php
/**
 * UserApi
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
 * # Introdução  Bem-vindo à documentação oficial da API da Plataforma de Promoção IdPlugger exclusiva para administradores da API!  Se você está procurando a documentação destinada ao cliente da Plataforma de Promoção IdPlugger [acesse clicando aqui!](/docs/v3/promotion)</a>  # Sobre a API  Esta API é baseada em REST, proporcionando uma arquitetura flexível e de fácil integração.  # Começando  Para começar a explorar e utilizar a API da Plataforma de Promoção IdPlugger, recomendamos que você siga os seguintes passos:  0. **Postman**: [Baixe a collection do postman](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d), instale o postman na sua máquina e importe a collection.  1. **Autenticação**: Obtenha suas credenciais de autenticação ('username' e 'password') de administrador, para acessar a API.  2. **Explorar Endpoints**: Navegue pela lista de endpoints disponíveis e suas respectivas funcionalidades.  3. **Experimentar**: Utilize os exemplos de solicitação fornecidos para testar os endpoints e compreender melhor seu funcionamento.  4. **Integrar**: Integre a API da Plataforma de Promoção IdPlugger em seus próprios projetos e sistemas para aproveitar ao máximo suas capacidades.  # Autenticação  Todos os endpoints requerem token de autenticação válido, que pode ser obtido através de requisição à API enviando as credenciais obtidas.  Este token é do tipo bearer e deve ser enviado no header da requisição no seguinte formato:  | Header | Valor |   | - | - |   | Authorization | bearer `{token}` |  Substitua `{token}` pelo token obtido na autenticação.  IMPORTANTE: O bearer token tem um tempo de validade, o ideal é armazenar o bearer token e solicitar um novo token apenas quando o seu token expirar. A validade do token é enviada junto com o token na resposta do endpoint de autenticação.  # Configurações de Promoção ## Pull Configurations O primeiro passo para configurar uma promoção na API é puxar a parametrização da promoção criada. Para isto, libere o servidor da API para acesso ao banco de dados da promoção e informe os dados de conexão através da rota [Pull Configuration](#/Promotion/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3ApullConfiguration)  ## Steps Após puxar as configurações na etapa anterior, configure as steps da promoção. Steps são as partes de código que serão executadas para cada promoção. Cada promoção pode ter uma configuração diferente de steps.  - Para consultar quais steps estão disponíveis, utilize [este endpoint](/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aindex)  - Para ativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aallow)  - Para desativar steps em uma promoção, utilize [este endpoint](https://api.idplugger.com/docs/v3/setup/index.php#/Steps/App%5CHttp%5CControllers%5CStepsController%3A%3Aunallow)  - Para consultar quais steps estão ativas, utilize o endpoint de ativação sem passar nenhuma step  Algumas steps são configuradas por padrão ao fazer o pull configuration, para saber quais confira o parâmetro default na resposta do endpoint de consulta de steps. Este endpoint também retorna a descrição do que a step faz e se ela depende que outra esteja ativada ou desativada.  ## Criar Usuário da API Para que um cliente possa utilizar a API, é necessário criar um usuário para ele.  Para isto, após fazer o pull configuration e a parametrização de steps, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3Aregister) para criar um usuário da API. Este endpoint cria o usuário e retorna uma senha para este usuário.  ## Permissões do usuário da API Após criar o usuário, é necessário dar as permissões para que ele possa atuar na promoção. Para isso, utilize [este endpoint](#/User/App%5CHttp%5CControllers%5CAdmin%5CAdminController%3A%3AgrantPermissions).  Atenção: Selecione bem as permissões, deixando apenas as necessárias.  ## Teste Utilize as credenciais do usuário criado para testar se a API está respondendo para a promoção configurada.  # Postman Collection  [<img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In \" style=\"width: 128px; height: 32px;\">](https://god.gw.postman.com/run-collection/13619232-20687020-3c58-488d-bd15-9f9d1a8164b1?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D13619232-20687020-3c58-488d-bd15-9f9d1a8164b1%26entityType%3Dcollection%26workspaceId%3Df86d7ea0-5224-4351-bf69-54ada2ca328d)\\n\\n# Limite de Frequência (Rate Limit)\\n\\nA resposta da **API Idplugger** quando o limite de frequência (rate limit) é atingido é um código de status HTTP **429 (Too Many Requests)**.\\n\\nDetalhes do retorno:\\n\\n1. **Código de Status HTTP**: 429 Too Many Requests.\\n2. **Corpo da Resposta (Body)**: Um JSON contendo a mensagem de erro: `{\"message\": \"Too Many Requests\"}`.\\n3. **Cabeçalhos HTTP (Headers)**:\\n   - `X-RateLimit-Limit`: O limite total permitido.\\n   - `X-RateLimit-Remaining`: Quantidade de requisições restantes.\\n   - `Retry-After`: Segundos a esperar antes da próxima tentativa.\\n   - `X-RateLimit-Reset`: Timestamp de quando o limite será zerado.
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
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserApi
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
        'adminUsersList' => [
            'application/json',
        ],
        'userGrantPermissions' => [
            'application/json',
        ],
        'userRegister' => [
            'application/json',
        ],
        'userResetPassword' => [
            'application/json',
        ],
        'userShow' => [
            'application/json',
        ],
        'userUpdate' => [
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
     * Operation adminUsersList
     *
     * Listar usuários da API
     *
     * @param  string|null $username Filtrar por username (busca parcial) (optional)
     * @param  string|null $email Filtrar por email (busca parcial) (optional)
     * @param  string|null $name Filtrar por nome (busca parcial) (optional)
     * @param  string|null $role Filtrar por role exata (optional)
     * @param  string|null $_include Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions (optional)
     * @param  int|null $_per_page Quantidade de registros por página (optional)
     * @param  int|null $page Número da página para paginação (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminUsersList'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminUsersList200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminUsersList500Response
     */
    public function adminUsersList($username = null, $email = null, $name = null, $role = null, $_include = null, $_per_page = null, $page = null, string $contentType = self::contentTypes['adminUsersList'][0])
    {
        list($response) = $this->adminUsersListWithHttpInfo($username, $email, $name, $role, $_include, $_per_page, $page, $contentType);
        return $response;
    }

    /**
     * Operation adminUsersListWithHttpInfo
     *
     * Listar usuários da API
     *
     * @param  string|null $username Filtrar por username (busca parcial) (optional)
     * @param  string|null $email Filtrar por email (busca parcial) (optional)
     * @param  string|null $name Filtrar por nome (busca parcial) (optional)
     * @param  string|null $role Filtrar por role exata (optional)
     * @param  string|null $_include Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions (optional)
     * @param  int|null $_per_page Quantidade de registros por página (optional)
     * @param  int|null $page Número da página para paginação (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminUsersList'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminUsersList200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminUsersList500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminUsersListWithHttpInfo($username = null, $email = null, $name = null, $role = null, $_include = null, $_per_page = null, $page = null, string $contentType = self::contentTypes['adminUsersList'][0])
    {
        $request = $this->adminUsersListRequest($username, $email, $name, $role, $_include, $_per_page, $page, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminUsersList200Response',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AdminUsersList500Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminUsersList200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminUsersList200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminUsersList500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminUsersListAsync
     *
     * Listar usuários da API
     *
     * @param  string|null $username Filtrar por username (busca parcial) (optional)
     * @param  string|null $email Filtrar por email (busca parcial) (optional)
     * @param  string|null $name Filtrar por nome (busca parcial) (optional)
     * @param  string|null $role Filtrar por role exata (optional)
     * @param  string|null $_include Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions (optional)
     * @param  int|null $_per_page Quantidade de registros por página (optional)
     * @param  int|null $page Número da página para paginação (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminUsersList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminUsersListAsync($username = null, $email = null, $name = null, $role = null, $_include = null, $_per_page = null, $page = null, string $contentType = self::contentTypes['adminUsersList'][0])
    {
        return $this->adminUsersListAsyncWithHttpInfo($username, $email, $name, $role, $_include, $_per_page, $page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminUsersListAsyncWithHttpInfo
     *
     * Listar usuários da API
     *
     * @param  string|null $username Filtrar por username (busca parcial) (optional)
     * @param  string|null $email Filtrar por email (busca parcial) (optional)
     * @param  string|null $name Filtrar por nome (busca parcial) (optional)
     * @param  string|null $role Filtrar por role exata (optional)
     * @param  string|null $_include Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions (optional)
     * @param  int|null $_per_page Quantidade de registros por página (optional)
     * @param  int|null $page Número da página para paginação (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminUsersList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminUsersListAsyncWithHttpInfo($username = null, $email = null, $name = null, $role = null, $_include = null, $_per_page = null, $page = null, string $contentType = self::contentTypes['adminUsersList'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminUsersList200Response';
        $request = $this->adminUsersListRequest($username, $email, $name, $role, $_include, $_per_page, $page, $contentType);

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
     * Create request for operation 'adminUsersList'
     *
     * @param  string|null $username Filtrar por username (busca parcial) (optional)
     * @param  string|null $email Filtrar por email (busca parcial) (optional)
     * @param  string|null $name Filtrar por nome (busca parcial) (optional)
     * @param  string|null $role Filtrar por role exata (optional)
     * @param  string|null $_include Incluir relacionamentos (separados por vírgula). Valores aceitos: permissions (optional)
     * @param  int|null $_per_page Quantidade de registros por página (optional)
     * @param  int|null $page Número da página para paginação (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminUsersList'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminUsersListRequest($username = null, $email = null, $name = null, $role = null, $_include = null, $_per_page = null, $page = null, string $contentType = self::contentTypes['adminUsersList'][0])
    {









        $resourcePath = '/v3/admin/user';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $username,
            'username', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $email,
            'email', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $role,
            'role', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $_include,
            '_include', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $_per_page,
            '_per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




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
     * Operation userGrantPermissions
     *
     * Dar permissões a um usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest|null $user_grant_permissions_request user_grant_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userGrantPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserGrantPermissions500Response
     */
    public function userGrantPermissions($user_grant_permissions_request = null, string $contentType = self::contentTypes['userGrantPermissions'][0])
    {
        list($response) = $this->userGrantPermissionsWithHttpInfo($user_grant_permissions_request, $contentType);
        return $response;
    }

    /**
     * Operation userGrantPermissionsWithHttpInfo
     *
     * Dar permissões a um usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest|null $user_grant_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userGrantPermissions'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserGrantPermissions500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function userGrantPermissionsWithHttpInfo($user_grant_permissions_request = null, string $contentType = self::contentTypes['userGrantPermissions'][0])
    {
        $request = $this->userGrantPermissionsRequest($user_grant_permissions_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserGrantPermissions500Response',
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
                '\IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserGrantPermissions500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation userGrantPermissionsAsync
     *
     * Dar permissões a um usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest|null $user_grant_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userGrantPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userGrantPermissionsAsync($user_grant_permissions_request = null, string $contentType = self::contentTypes['userGrantPermissions'][0])
    {
        return $this->userGrantPermissionsAsyncWithHttpInfo($user_grant_permissions_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userGrantPermissionsAsyncWithHttpInfo
     *
     * Dar permissões a um usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest|null $user_grant_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userGrantPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userGrantPermissionsAsyncWithHttpInfo($user_grant_permissions_request = null, string $contentType = self::contentTypes['userGrantPermissions'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\UserGrantPermissions200Response';
        $request = $this->userGrantPermissionsRequest($user_grant_permissions_request, $contentType);

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
     * Create request for operation 'userGrantPermissions'
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserGrantPermissionsRequest|null $user_grant_permissions_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userGrantPermissions'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userGrantPermissionsRequest($user_grant_permissions_request = null, string $contentType = self::contentTypes['userGrantPermissions'][0])
    {



        $resourcePath = '/v3/admin/user/grantpermissions';
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
        if (isset($user_grant_permissions_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($user_grant_permissions_request));
            } else {
                $httpBody = $user_grant_permissions_request;
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
     * Operation userRegister
     *
     * Registrar usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserRegisterRequest|null $user_register_request user_register_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userRegister'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\UserRegister200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserRegister500Response
     */
    public function userRegister($user_register_request = null, string $contentType = self::contentTypes['userRegister'][0])
    {
        list($response) = $this->userRegisterWithHttpInfo($user_register_request, $contentType);
        return $response;
    }

    /**
     * Operation userRegisterWithHttpInfo
     *
     * Registrar usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserRegisterRequest|null $user_register_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userRegister'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\UserRegister200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserRegister500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function userRegisterWithHttpInfo($user_register_request = null, string $contentType = self::contentTypes['userRegister'][0])
    {
        $request = $this->userRegisterRequest($user_register_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\UserRegister200Response',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserRegister500Response',
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
                '\IdpluggerPromotionAdmin\Model\UserRegister200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserRegister200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserRegister500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation userRegisterAsync
     *
     * Registrar usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserRegisterRequest|null $user_register_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userRegister'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userRegisterAsync($user_register_request = null, string $contentType = self::contentTypes['userRegister'][0])
    {
        return $this->userRegisterAsyncWithHttpInfo($user_register_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userRegisterAsyncWithHttpInfo
     *
     * Registrar usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserRegisterRequest|null $user_register_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userRegister'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userRegisterAsyncWithHttpInfo($user_register_request = null, string $contentType = self::contentTypes['userRegister'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\UserRegister200Response';
        $request = $this->userRegisterRequest($user_register_request, $contentType);

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
     * Create request for operation 'userRegister'
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserRegisterRequest|null $user_register_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userRegister'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userRegisterRequest($user_register_request = null, string $contentType = self::contentTypes['userRegister'][0])
    {



        $resourcePath = '/v3/admin/user/register';
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
        if (isset($user_register_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($user_register_request));
            } else {
                $httpBody = $user_register_request;
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
     * Operation userResetPassword
     *
     * Resetar senha do usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest|null $user_reset_password_request user_reset_password_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userResetPassword'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\UserResetPassword200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserResetPassword500Response
     */
    public function userResetPassword($user_reset_password_request = null, string $contentType = self::contentTypes['userResetPassword'][0])
    {
        list($response) = $this->userResetPasswordWithHttpInfo($user_reset_password_request, $contentType);
        return $response;
    }

    /**
     * Operation userResetPasswordWithHttpInfo
     *
     * Resetar senha do usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest|null $user_reset_password_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userResetPassword'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\UserResetPassword200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\UserResetPassword500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function userResetPasswordWithHttpInfo($user_reset_password_request = null, string $contentType = self::contentTypes['userResetPassword'][0])
    {
        $request = $this->userResetPasswordRequest($user_reset_password_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\UserResetPassword200Response',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserResetPassword500Response',
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
                '\IdpluggerPromotionAdmin\Model\UserResetPassword200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserResetPassword200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserResetPassword500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation userResetPasswordAsync
     *
     * Resetar senha do usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest|null $user_reset_password_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userResetPassword'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userResetPasswordAsync($user_reset_password_request = null, string $contentType = self::contentTypes['userResetPassword'][0])
    {
        return $this->userResetPasswordAsyncWithHttpInfo($user_reset_password_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userResetPasswordAsyncWithHttpInfo
     *
     * Resetar senha do usuário na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest|null $user_reset_password_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userResetPassword'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userResetPasswordAsyncWithHttpInfo($user_reset_password_request = null, string $contentType = self::contentTypes['userResetPassword'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\UserResetPassword200Response';
        $request = $this->userResetPasswordRequest($user_reset_password_request, $contentType);

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
     * Create request for operation 'userResetPassword'
     *
     * @param  \IdpluggerPromotionAdmin\Model\UserResetPasswordRequest|null $user_reset_password_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userResetPassword'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userResetPasswordRequest($user_reset_password_request = null, string $contentType = self::contentTypes['userResetPassword'][0])
    {



        $resourcePath = '/v3/admin/user/resetpassword';
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
        if (isset($user_reset_password_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($user_reset_password_request));
            } else {
                $httpBody = $user_reset_password_request;
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
     * Operation userShow
     *
     * Visualizar dados do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser visualizado (required)
     * @param  string|null $_include Incluir relacionamentos no resultado (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\UserShow200Response|\IdpluggerPromotionAdmin\Model\UserShow404Response|\IdpluggerPromotionAdmin\Model\UserShow500Response
     */
    public function userShow($uuid, $_include = null, string $contentType = self::contentTypes['userShow'][0])
    {
        list($response) = $this->userShowWithHttpInfo($uuid, $_include, $contentType);
        return $response;
    }

    /**
     * Operation userShowWithHttpInfo
     *
     * Visualizar dados do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser visualizado (required)
     * @param  string|null $_include Incluir relacionamentos no resultado (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\UserShow200Response|\IdpluggerPromotionAdmin\Model\UserShow404Response|\IdpluggerPromotionAdmin\Model\UserShow500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function userShowWithHttpInfo($uuid, $_include = null, string $contentType = self::contentTypes['userShow'][0])
    {
        $request = $this->userShowRequest($uuid, $_include, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\UserShow200Response',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserShow404Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserShow500Response',
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
                '\IdpluggerPromotionAdmin\Model\UserShow200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserShow200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserShow404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserShow500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation userShowAsync
     *
     * Visualizar dados do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser visualizado (required)
     * @param  string|null $_include Incluir relacionamentos no resultado (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userShowAsync($uuid, $_include = null, string $contentType = self::contentTypes['userShow'][0])
    {
        return $this->userShowAsyncWithHttpInfo($uuid, $_include, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userShowAsyncWithHttpInfo
     *
     * Visualizar dados do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser visualizado (required)
     * @param  string|null $_include Incluir relacionamentos no resultado (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userShowAsyncWithHttpInfo($uuid, $_include = null, string $contentType = self::contentTypes['userShow'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\UserShow200Response';
        $request = $this->userShowRequest($uuid, $_include, $contentType);

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
     * Create request for operation 'userShow'
     *
     * @param  string $uuid UUID do usuário a ser visualizado (required)
     * @param  string|null $_include Incluir relacionamentos no resultado (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userShowRequest($uuid, $_include = null, string $contentType = self::contentTypes['userShow'][0])
    {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling userShow'
            );
        }



        $resourcePath = '/v3/admin/user/{uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $_include,
            '_include', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
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
     * Operation userUpdate
     *
     * Atualizar nome do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser atualizado (required)
     * @param  \IdpluggerPromotionAdmin\Model\UserUpdateRequest|null $user_update_request user_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\UserUpdate200Response|\IdpluggerPromotionAdmin\Model\UserUpdate404Response|\IdpluggerPromotionAdmin\Model\UserUpdate422Response|\IdpluggerPromotionAdmin\Model\UserUpdate500Response
     */
    public function userUpdate($uuid, $user_update_request = null, string $contentType = self::contentTypes['userUpdate'][0])
    {
        list($response) = $this->userUpdateWithHttpInfo($uuid, $user_update_request, $contentType);
        return $response;
    }

    /**
     * Operation userUpdateWithHttpInfo
     *
     * Atualizar nome do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser atualizado (required)
     * @param  \IdpluggerPromotionAdmin\Model\UserUpdateRequest|null $user_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\UserUpdate200Response|\IdpluggerPromotionAdmin\Model\UserUpdate404Response|\IdpluggerPromotionAdmin\Model\UserUpdate422Response|\IdpluggerPromotionAdmin\Model\UserUpdate500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function userUpdateWithHttpInfo($uuid, $user_update_request = null, string $contentType = self::contentTypes['userUpdate'][0])
    {
        $request = $this->userUpdateRequest($uuid, $user_update_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\UserUpdate200Response',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserUpdate404Response',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserUpdate422Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\UserUpdate500Response',
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
                '\IdpluggerPromotionAdmin\Model\UserUpdate200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserUpdate200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserUpdate404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserUpdate422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\UserUpdate500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation userUpdateAsync
     *
     * Atualizar nome do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser atualizado (required)
     * @param  \IdpluggerPromotionAdmin\Model\UserUpdateRequest|null $user_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userUpdateAsync($uuid, $user_update_request = null, string $contentType = self::contentTypes['userUpdate'][0])
    {
        return $this->userUpdateAsyncWithHttpInfo($uuid, $user_update_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation userUpdateAsyncWithHttpInfo
     *
     * Atualizar nome do usuário na API
     *
     * @param  string $uuid UUID do usuário a ser atualizado (required)
     * @param  \IdpluggerPromotionAdmin\Model\UserUpdateRequest|null $user_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function userUpdateAsyncWithHttpInfo($uuid, $user_update_request = null, string $contentType = self::contentTypes['userUpdate'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\UserUpdate200Response';
        $request = $this->userUpdateRequest($uuid, $user_update_request, $contentType);

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
     * Create request for operation 'userUpdate'
     *
     * @param  string $uuid UUID do usuário a ser atualizado (required)
     * @param  \IdpluggerPromotionAdmin\Model\UserUpdateRequest|null $user_update_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['userUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function userUpdateRequest($uuid, $user_update_request = null, string $contentType = self::contentTypes['userUpdate'][0])
    {

        // verify the required parameter 'uuid' is set
        if ($uuid === null || (is_array($uuid) && count($uuid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uuid when calling userUpdate'
            );
        }



        $resourcePath = '/v3/admin/user/{uuid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                '{' . 'uuid' . '}',
                ObjectSerializer::toPathValue($uuid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($user_update_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($user_update_request));
            } else {
                $httpBody = $user_update_request;
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
