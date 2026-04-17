<?php
/**
 * CustomerServiceApi
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
 * CustomerServiceApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerServiceApi
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
        'adminServiceCustomerApplications' => [
            'application/json',
        ],
        'adminServiceCustomerBrands' => [
            'application/json',
        ],
        'adminServiceCustomerCampaigns' => [
            'application/json',
        ],
        'adminServiceCustomerClients' => [
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
     * Operation adminServiceCustomerApplications
     *
     * Listar aplicações de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerApplications'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response
     */
    public function adminServiceCustomerApplications($client_id, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerApplications'][0])
    {
        list($response) = $this->adminServiceCustomerApplicationsWithHttpInfo($client_id, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation adminServiceCustomerApplicationsWithHttpInfo
     *
     * Listar aplicações de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerApplications'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminServiceCustomerApplicationsWithHttpInfo($client_id, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerApplications'][0])
    {
        $request = $this->adminServiceCustomerApplicationsRequest($client_id, $page, $per_page, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminServiceCustomerApplicationsAsync
     *
     * Listar aplicações de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerApplications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerApplicationsAsync($client_id, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerApplications'][0])
    {
        return $this->adminServiceCustomerApplicationsAsyncWithHttpInfo($client_id, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminServiceCustomerApplicationsAsyncWithHttpInfo
     *
     * Listar aplicações de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerApplications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerApplicationsAsyncWithHttpInfo($client_id, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerApplications'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200Response';
        $request = $this->adminServiceCustomerApplicationsRequest($client_id, $page, $per_page, $contentType);

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
     * Create request for operation 'adminServiceCustomerApplications'
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerApplications'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminServiceCustomerApplicationsRequest($client_id, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerApplications'][0])
    {

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling adminServiceCustomerApplications'
            );
        }




        $resourcePath = '/admin/service/customer/applications/{client_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'perPage', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'client_id' . '}',
                ObjectSerializer::toPathValue($client_id),
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
     * Operation adminServiceCustomerBrands
     *
     * Listar marcas de um cliente do serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  string|null $search Termo de busca (optional)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerBrands'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response
     */
    public function adminServiceCustomerBrands($client_id, $search = null, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerBrands'][0])
    {
        list($response) = $this->adminServiceCustomerBrandsWithHttpInfo($client_id, $search, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation adminServiceCustomerBrandsWithHttpInfo
     *
     * Listar marcas de um cliente do serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  string|null $search Termo de busca (optional)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerBrands'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminServiceCustomerBrandsWithHttpInfo($client_id, $search = null, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerBrands'][0])
    {
        $request = $this->adminServiceCustomerBrandsRequest($client_id, $search, $page, $per_page, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminServiceCustomerBrandsAsync
     *
     * Listar marcas de um cliente do serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  string|null $search Termo de busca (optional)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerBrands'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerBrandsAsync($client_id, $search = null, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerBrands'][0])
    {
        return $this->adminServiceCustomerBrandsAsyncWithHttpInfo($client_id, $search, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminServiceCustomerBrandsAsyncWithHttpInfo
     *
     * Listar marcas de um cliente do serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  string|null $search Termo de busca (optional)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerBrands'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerBrandsAsyncWithHttpInfo($client_id, $search = null, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerBrands'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerBrands200Response';
        $request = $this->adminServiceCustomerBrandsRequest($client_id, $search, $page, $per_page, $contentType);

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
     * Create request for operation 'adminServiceCustomerBrands'
     *
     * @param  string $client_id ID do cliente (required)
     * @param  string|null $search Termo de busca (optional)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerBrands'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminServiceCustomerBrandsRequest($client_id, $search = null, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerBrands'][0])
    {

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling adminServiceCustomerBrands'
            );
        }





        $resourcePath = '/admin/service/customer/brands/{client_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            'search', // param base name
            'string', // openApiType
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'perPage', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'client_id' . '}',
                ObjectSerializer::toPathValue($client_id),
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
     * Operation adminServiceCustomerCampaigns
     *
     * Listar campanhas de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string|null $status Status da campanha (optional)
     * @param  string|null $name Nome da campanha (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerCampaigns'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response
     */
    public function adminServiceCustomerCampaigns($client_id, $page = 1, $per_page = 15, $status = null, $name = null, string $contentType = self::contentTypes['adminServiceCustomerCampaigns'][0])
    {
        list($response) = $this->adminServiceCustomerCampaignsWithHttpInfo($client_id, $page, $per_page, $status, $name, $contentType);
        return $response;
    }

    /**
     * Operation adminServiceCustomerCampaignsWithHttpInfo
     *
     * Listar campanhas de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string|null $status Status da campanha (optional)
     * @param  string|null $name Nome da campanha (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerCampaigns'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminServiceCustomerCampaignsWithHttpInfo($client_id, $page = 1, $per_page = 15, $status = null, $name = null, string $contentType = self::contentTypes['adminServiceCustomerCampaigns'][0])
    {
        $request = $this->adminServiceCustomerCampaignsRequest($client_id, $page, $per_page, $status, $name, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminServiceCustomerCampaignsAsync
     *
     * Listar campanhas de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string|null $status Status da campanha (optional)
     * @param  string|null $name Nome da campanha (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerCampaignsAsync($client_id, $page = 1, $per_page = 15, $status = null, $name = null, string $contentType = self::contentTypes['adminServiceCustomerCampaigns'][0])
    {
        return $this->adminServiceCustomerCampaignsAsyncWithHttpInfo($client_id, $page, $per_page, $status, $name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminServiceCustomerCampaignsAsyncWithHttpInfo
     *
     * Listar campanhas de um cliente no serviço de atendimento ao cliente
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string|null $status Status da campanha (optional)
     * @param  string|null $name Nome da campanha (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerCampaignsAsyncWithHttpInfo($client_id, $page = 1, $per_page = 15, $status = null, $name = null, string $contentType = self::contentTypes['adminServiceCustomerCampaigns'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerCampaigns200Response';
        $request = $this->adminServiceCustomerCampaignsRequest($client_id, $page, $per_page, $status, $name, $contentType);

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
     * Create request for operation 'adminServiceCustomerCampaigns'
     *
     * @param  string $client_id ID do cliente (required)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string|null $status Status da campanha (optional)
     * @param  string|null $name Nome da campanha (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerCampaigns'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminServiceCustomerCampaignsRequest($client_id, $page = 1, $per_page = 15, $status = null, $name = null, string $contentType = self::contentTypes['adminServiceCustomerCampaigns'][0])
    {

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling adminServiceCustomerCampaigns'
            );
        }






        $resourcePath = '/admin/service/customer/campaigns/{client_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'perPage', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
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


        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'client_id' . '}',
                ObjectSerializer::toPathValue($client_id),
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
     * Operation adminServiceCustomerClients
     *
     * Listar clientes do serviço de atendimento ao cliente
     *
     * @param  string|null $search Termo de busca (optional)
     * @param  bool|null $is_active Filtrar por clientes ativos (padrão true) (optional, default to true)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerClients'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response
     */
    public function adminServiceCustomerClients($search = null, $is_active = true, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerClients'][0])
    {
        list($response) = $this->adminServiceCustomerClientsWithHttpInfo($search, $is_active, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation adminServiceCustomerClientsWithHttpInfo
     *
     * Listar clientes do serviço de atendimento ao cliente
     *
     * @param  string|null $search Termo de busca (optional)
     * @param  bool|null $is_active Filtrar por clientes ativos (padrão true) (optional, default to true)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerClients'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminServiceCustomerClientsWithHttpInfo($search = null, $is_active = true, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerClients'][0])
    {
        $request = $this->adminServiceCustomerClientsRequest($search, $is_active, $page, $per_page, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminServiceCustomerClientsAsync
     *
     * Listar clientes do serviço de atendimento ao cliente
     *
     * @param  string|null $search Termo de busca (optional)
     * @param  bool|null $is_active Filtrar por clientes ativos (padrão true) (optional, default to true)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerClients'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerClientsAsync($search = null, $is_active = true, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerClients'][0])
    {
        return $this->adminServiceCustomerClientsAsyncWithHttpInfo($search, $is_active, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminServiceCustomerClientsAsyncWithHttpInfo
     *
     * Listar clientes do serviço de atendimento ao cliente
     *
     * @param  string|null $search Termo de busca (optional)
     * @param  bool|null $is_active Filtrar por clientes ativos (padrão true) (optional, default to true)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerClients'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminServiceCustomerClientsAsyncWithHttpInfo($search = null, $is_active = true, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerClients'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerClients200Response';
        $request = $this->adminServiceCustomerClientsRequest($search, $is_active, $page, $per_page, $contentType);

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
     * Create request for operation 'adminServiceCustomerClients'
     *
     * @param  string|null $search Termo de busca (optional)
     * @param  bool|null $is_active Filtrar por clientes ativos (padrão true) (optional, default to true)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  int|null $per_page Itens por página (optional, default to 15)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminServiceCustomerClients'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminServiceCustomerClientsRequest($search = null, $is_active = true, $page = 1, $per_page = 15, string $contentType = self::contentTypes['adminServiceCustomerClients'][0])
    {






        $resourcePath = '/admin/service/customer/clients';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            'search', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_active,
            'isActive', // param base name
            'boolean', // openApiType
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
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'perPage', // param base name
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
