<?php
/**
 * ConfigsApi
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
 * ConfigsApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConfigsApi
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
        'adminPromotionConfigsIndex' => [
            'application/json',
        ],
        'adminPromotionConfigsShow' => [
            'application/json',
        ],
        'adminPromotionConfigsStore' => [
            'application/json',
        ],
        'adminPromotionConfigsUpdate' => [
            'application/json',
        ],
        'adminPromotionConfigsUpsert' => [
            'application/json',
        ],
        'adminPromotionConfigsValidKeys' => [
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
     * Operation adminPromotionConfigsIndex
     *
     * Listar configurações de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string|null $key Filtrar por chave (busca parcial) (optional)
     * @param  string|null $grupo Filtrar por grupo (optional)
     * @param  string|null $type Filtrar por tipo (optional)
     * @param  int|null $_per_page Itens por página (optional, default to 15)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response|\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex500Response
     */
    public function adminPromotionConfigsIndex($promotion_id, $key = null, $grupo = null, $type = null, $_per_page = 15, $page = 1, string $contentType = self::contentTypes['adminPromotionConfigsIndex'][0])
    {
        list($response) = $this->adminPromotionConfigsIndexWithHttpInfo($promotion_id, $key, $grupo, $type, $_per_page, $page, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsIndexWithHttpInfo
     *
     * Listar configurações de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string|null $key Filtrar por chave (busca parcial) (optional)
     * @param  string|null $grupo Filtrar por grupo (optional)
     * @param  string|null $type Filtrar por tipo (optional)
     * @param  int|null $_per_page Itens por página (optional, default to 15)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response|\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsIndexWithHttpInfo($promotion_id, $key = null, $grupo = null, $type = null, $_per_page = 15, $page = 1, string $contentType = self::contentTypes['adminPromotionConfigsIndex'][0])
    {
        $request = $this->adminPromotionConfigsIndexRequest($promotion_id, $key, $grupo, $type, $_per_page, $page, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex500Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsIndexAsync
     *
     * Listar configurações de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string|null $key Filtrar por chave (busca parcial) (optional)
     * @param  string|null $grupo Filtrar por grupo (optional)
     * @param  string|null $type Filtrar por tipo (optional)
     * @param  int|null $_per_page Itens por página (optional, default to 15)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsIndexAsync($promotion_id, $key = null, $grupo = null, $type = null, $_per_page = 15, $page = 1, string $contentType = self::contentTypes['adminPromotionConfigsIndex'][0])
    {
        return $this->adminPromotionConfigsIndexAsyncWithHttpInfo($promotion_id, $key, $grupo, $type, $_per_page, $page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsIndexAsyncWithHttpInfo
     *
     * Listar configurações de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string|null $key Filtrar por chave (busca parcial) (optional)
     * @param  string|null $grupo Filtrar por grupo (optional)
     * @param  string|null $type Filtrar por tipo (optional)
     * @param  int|null $_per_page Itens por página (optional, default to 15)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsIndexAsyncWithHttpInfo($promotion_id, $key = null, $grupo = null, $type = null, $_per_page = 15, $page = 1, string $contentType = self::contentTypes['adminPromotionConfigsIndex'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsIndex200Response';
        $request = $this->adminPromotionConfigsIndexRequest($promotion_id, $key, $grupo, $type, $_per_page, $page, $contentType);

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
     * Create request for operation 'adminPromotionConfigsIndex'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string|null $key Filtrar por chave (busca parcial) (optional)
     * @param  string|null $grupo Filtrar por grupo (optional)
     * @param  string|null $type Filtrar por tipo (optional)
     * @param  int|null $_per_page Itens por página (optional, default to 15)
     * @param  int|null $page Número da página (optional, default to 1)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsIndexRequest($promotion_id, $key = null, $grupo = null, $type = null, $_per_page = 15, $page = 1, string $contentType = self::contentTypes['adminPromotionConfigsIndex'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsIndex'
            );
        }







        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $key,
            'key', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $grupo,
            'grupo', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
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


        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
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
     * Operation adminPromotionConfigsShow
     *
     * Buscar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response|\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow404Response
     */
    public function adminPromotionConfigsShow($promotion_id, $key, string $contentType = self::contentTypes['adminPromotionConfigsShow'][0])
    {
        list($response) = $this->adminPromotionConfigsShowWithHttpInfo($promotion_id, $key, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsShowWithHttpInfo
     *
     * Buscar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response|\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow404Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsShowWithHttpInfo($promotion_id, $key, string $contentType = self::contentTypes['adminPromotionConfigsShow'][0])
    {
        $request = $this->adminPromotionConfigsShowRequest($promotion_id, $key, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow404Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow404Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsShowAsync
     *
     * Buscar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsShowAsync($promotion_id, $key, string $contentType = self::contentTypes['adminPromotionConfigsShow'][0])
    {
        return $this->adminPromotionConfigsShowAsyncWithHttpInfo($promotion_id, $key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsShowAsyncWithHttpInfo
     *
     * Buscar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsShowAsyncWithHttpInfo($promotion_id, $key, string $contentType = self::contentTypes['adminPromotionConfigsShow'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsShow200Response';
        $request = $this->adminPromotionConfigsShowRequest($promotion_id, $key, $contentType);

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
     * Create request for operation 'adminPromotionConfigsShow'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsShowRequest($promotion_id, $key, string $contentType = self::contentTypes['adminPromotionConfigsShow'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsShow'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling adminPromotionConfigsShow'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
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
     * Operation adminPromotionConfigsStore
     *
     * Criar nova configuração
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsStore'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response
     */
    public function adminPromotionConfigsStore($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsStore'][0])
    {
        list($response) = $this->adminPromotionConfigsStoreWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsStoreWithHttpInfo
     *
     * Criar nova configuração
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsStore'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsStoreWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsStore'][0])
    {
        $request = $this->adminPromotionConfigsStoreRequest($promotion_id, $admin_promotion_configs_store_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsStoreAsync
     *
     * Criar nova configuração
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsStoreAsync($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsStore'][0])
    {
        return $this->adminPromotionConfigsStoreAsyncWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsStoreAsyncWithHttpInfo
     *
     * Criar nova configuração
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsStoreAsyncWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsStore'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStore201Response';
        $request = $this->adminPromotionConfigsStoreRequest($promotion_id, $admin_promotion_configs_store_request, $contentType);

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
     * Create request for operation 'adminPromotionConfigsStore'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsStore'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsStoreRequest($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsStore'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsStore'
            );
        }

        // verify the required parameter 'admin_promotion_configs_store_request' is set
        if ($admin_promotion_configs_store_request === null || (is_array($admin_promotion_configs_store_request) && count($admin_promotion_configs_store_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $admin_promotion_configs_store_request when calling adminPromotionConfigsStore'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($admin_promotion_configs_store_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($admin_promotion_configs_store_request));
            } else {
                $httpBody = $admin_promotion_configs_store_request;
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
     * Operation adminPromotionConfigsUpdate
     *
     * Atualizar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest $admin_promotion_configs_update_request admin_promotion_configs_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response
     */
    public function adminPromotionConfigsUpdate($promotion_id, $key, $admin_promotion_configs_update_request, string $contentType = self::contentTypes['adminPromotionConfigsUpdate'][0])
    {
        list($response) = $this->adminPromotionConfigsUpdateWithHttpInfo($promotion_id, $key, $admin_promotion_configs_update_request, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsUpdateWithHttpInfo
     *
     * Atualizar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest $admin_promotion_configs_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsUpdateWithHttpInfo($promotion_id, $key, $admin_promotion_configs_update_request, string $contentType = self::contentTypes['adminPromotionConfigsUpdate'][0])
    {
        $request = $this->adminPromotionConfigsUpdateRequest($promotion_id, $key, $admin_promotion_configs_update_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsUpdateAsync
     *
     * Atualizar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest $admin_promotion_configs_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsUpdateAsync($promotion_id, $key, $admin_promotion_configs_update_request, string $contentType = self::contentTypes['adminPromotionConfigsUpdate'][0])
    {
        return $this->adminPromotionConfigsUpdateAsyncWithHttpInfo($promotion_id, $key, $admin_promotion_configs_update_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsUpdateAsyncWithHttpInfo
     *
     * Atualizar configuração por chave
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest $admin_promotion_configs_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsUpdateAsyncWithHttpInfo($promotion_id, $key, $admin_promotion_configs_update_request, string $contentType = self::contentTypes['adminPromotionConfigsUpdate'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdate200Response';
        $request = $this->adminPromotionConfigsUpdateRequest($promotion_id, $key, $admin_promotion_configs_update_request, $contentType);

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
     * Create request for operation 'adminPromotionConfigsUpdate'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $key Chave da configuração (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpdateRequest $admin_promotion_configs_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsUpdateRequest($promotion_id, $key, $admin_promotion_configs_update_request, string $contentType = self::contentTypes['adminPromotionConfigsUpdate'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsUpdate'
            );
        }

        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling adminPromotionConfigsUpdate'
            );
        }

        // verify the required parameter 'admin_promotion_configs_update_request' is set
        if ($admin_promotion_configs_update_request === null || (is_array($admin_promotion_configs_update_request) && count($admin_promotion_configs_update_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $admin_promotion_configs_update_request when calling adminPromotionConfigsUpdate'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
                $resourcePath
            );
        }
        // path params
        if ($key !== null) {
            $resourcePath = str_replace(
                '{' . 'key' . '}',
                ObjectSerializer::toPathValue($key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($admin_promotion_configs_update_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($admin_promotion_configs_update_request));
            } else {
                $httpBody = $admin_promotion_configs_update_request;
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
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation adminPromotionConfigsUpsert
     *
     * Criar ou atualizar configuração por chave (upsert)
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpsert'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response
     */
    public function adminPromotionConfigsUpsert($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsUpsert'][0])
    {
        list($response) = $this->adminPromotionConfigsUpsertWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsUpsertWithHttpInfo
     *
     * Criar ou atualizar configuração por chave (upsert)
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpsert'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsUpsertWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsUpsert'][0])
    {
        $request = $this->adminPromotionConfigsUpsertRequest($promotion_id, $admin_promotion_configs_store_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsUpsertAsync
     *
     * Criar ou atualizar configuração por chave (upsert)
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpsert'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsUpsertAsync($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsUpsert'][0])
    {
        return $this->adminPromotionConfigsUpsertAsyncWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsUpsertAsyncWithHttpInfo
     *
     * Criar ou atualizar configuração por chave (upsert)
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpsert'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsUpsertAsyncWithHttpInfo($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsUpsert'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsUpsert200Response';
        $request = $this->adminPromotionConfigsUpsertRequest($promotion_id, $admin_promotion_configs_store_request, $contentType);

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
     * Create request for operation 'adminPromotionConfigsUpsert'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsStoreRequest $admin_promotion_configs_store_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsUpsert'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsUpsertRequest($promotion_id, $admin_promotion_configs_store_request, string $contentType = self::contentTypes['adminPromotionConfigsUpsert'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsUpsert'
            );
        }

        // verify the required parameter 'admin_promotion_configs_store_request' is set
        if ($admin_promotion_configs_store_request === null || (is_array($admin_promotion_configs_store_request) && count($admin_promotion_configs_store_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $admin_promotion_configs_store_request when calling adminPromotionConfigsUpsert'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs/upsert';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($admin_promotion_configs_store_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($admin_promotion_configs_store_request));
            } else {
                $httpBody = $admin_promotion_configs_store_request;
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
     * Operation adminPromotionConfigsValidKeys
     *
     * Listar chaves válidas do ConfigKeyEnum
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsValidKeys'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response
     */
    public function adminPromotionConfigsValidKeys($promotion_id, string $contentType = self::contentTypes['adminPromotionConfigsValidKeys'][0])
    {
        list($response) = $this->adminPromotionConfigsValidKeysWithHttpInfo($promotion_id, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionConfigsValidKeysWithHttpInfo
     *
     * Listar chaves válidas do ConfigKeyEnum
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsValidKeys'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionConfigsValidKeysWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionConfigsValidKeys'][0])
    {
        $request = $this->adminPromotionConfigsValidKeysRequest($promotion_id, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionConfigsValidKeysAsync
     *
     * Listar chaves válidas do ConfigKeyEnum
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsValidKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsValidKeysAsync($promotion_id, string $contentType = self::contentTypes['adminPromotionConfigsValidKeys'][0])
    {
        return $this->adminPromotionConfigsValidKeysAsyncWithHttpInfo($promotion_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionConfigsValidKeysAsyncWithHttpInfo
     *
     * Listar chaves válidas do ConfigKeyEnum
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsValidKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionConfigsValidKeysAsyncWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionConfigsValidKeys'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionConfigsValidKeys200Response';
        $request = $this->adminPromotionConfigsValidKeysRequest($promotion_id, $contentType);

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
     * Create request for operation 'adminPromotionConfigsValidKeys'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionConfigsValidKeys'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionConfigsValidKeysRequest($promotion_id, string $contentType = self::contentTypes['adminPromotionConfigsValidKeys'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionConfigsValidKeys'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/configs/valid-keys';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($promotion_id !== null) {
            $resourcePath = str_replace(
                '{' . 'promotion_id' . '}',
                ObjectSerializer::toPathValue($promotion_id),
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
