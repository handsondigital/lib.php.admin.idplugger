<?php
/**
 * PromotionApi
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
 * PromotionApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PromotionApi
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
        'adminPromotionCacheClear' => [
            'application/json',
        ],
        'adminPromotionLuckyNumbersReset' => [
            'application/json',
        ],
        'promotionPullConfiguration' => [
            'application/json',
        ],
        'promotionSetup' => [
            'application/json',
        ],
        'promotionStart' => [
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
     * Operation adminPromotionCacheClear
     *
     * Renova o cache de uma promoção na API
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionCacheClear'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear500Response
     */
    public function adminPromotionCacheClear($promotion_id, string $contentType = self::contentTypes['adminPromotionCacheClear'][0])
    {
        list($response) = $this->adminPromotionCacheClearWithHttpInfo($promotion_id, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionCacheClearWithHttpInfo
     *
     * Renova o cache de uma promoção na API
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionCacheClear'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionCacheClearWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionCacheClear'][0])
    {
        $request = $this->adminPromotionCacheClearRequest($promotion_id, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response',
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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear500Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response',
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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionCacheClearAsync
     *
     * Renova o cache de uma promoção na API
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionCacheClear'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionCacheClearAsync($promotion_id, string $contentType = self::contentTypes['adminPromotionCacheClear'][0])
    {
        return $this->adminPromotionCacheClearAsyncWithHttpInfo($promotion_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionCacheClearAsyncWithHttpInfo
     *
     * Renova o cache de uma promoção na API
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionCacheClear'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionCacheClearAsyncWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionCacheClear'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionCacheClear200Response';
        $request = $this->adminPromotionCacheClearRequest($promotion_id, $contentType);

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
     * Create request for operation 'adminPromotionCacheClear'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionCacheClear'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionCacheClearRequest($promotion_id, string $contentType = self::contentTypes['adminPromotionCacheClear'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionCacheClear'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/cache/clear';
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation adminPromotionLuckyNumbersReset
     *
     * Resetar números da sorte de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionLuckyNumbersReset'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset500Response
     */
    public function adminPromotionLuckyNumbersReset($promotion_id, string $contentType = self::contentTypes['adminPromotionLuckyNumbersReset'][0])
    {
        list($response) = $this->adminPromotionLuckyNumbersResetWithHttpInfo($promotion_id, $contentType);
        return $response;
    }

    /**
     * Operation adminPromotionLuckyNumbersResetWithHttpInfo
     *
     * Resetar números da sorte de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionLuckyNumbersReset'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function adminPromotionLuckyNumbersResetWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionLuckyNumbersReset'][0])
    {
        $request = $this->adminPromotionLuckyNumbersResetRequest($promotion_id, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response',
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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset500Response',
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
                '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response',
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
                        '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation adminPromotionLuckyNumbersResetAsync
     *
     * Resetar números da sorte de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionLuckyNumbersReset'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionLuckyNumbersResetAsync($promotion_id, string $contentType = self::contentTypes['adminPromotionLuckyNumbersReset'][0])
    {
        return $this->adminPromotionLuckyNumbersResetAsyncWithHttpInfo($promotion_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation adminPromotionLuckyNumbersResetAsyncWithHttpInfo
     *
     * Resetar números da sorte de uma promoção
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionLuckyNumbersReset'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function adminPromotionLuckyNumbersResetAsyncWithHttpInfo($promotion_id, string $contentType = self::contentTypes['adminPromotionLuckyNumbersReset'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\AdminPromotionLuckyNumbersReset200Response';
        $request = $this->adminPromotionLuckyNumbersResetRequest($promotion_id, $contentType);

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
     * Create request for operation 'adminPromotionLuckyNumbersReset'
     *
     * @param  string $promotion_id UUID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['adminPromotionLuckyNumbersReset'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function adminPromotionLuckyNumbersResetRequest($promotion_id, string $contentType = self::contentTypes['adminPromotionLuckyNumbersReset'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling adminPromotionLuckyNumbersReset'
            );
        }


        $resourcePath = '/v3/admin/promotion/{promotion_id}/lucky-numbers/reset';
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation promotionPullConfiguration
     *
     * Adicionar/Atualizar configurações de uma promoção ao orquestrador
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest|null $promotion_pull_configuration_request promotion_pull_configuration_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionPullConfiguration'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response
     */
    public function promotionPullConfiguration($promotion_pull_configuration_request = null, string $contentType = self::contentTypes['promotionPullConfiguration'][0])
    {
        list($response) = $this->promotionPullConfigurationWithHttpInfo($promotion_pull_configuration_request, $contentType);
        return $response;
    }

    /**
     * Operation promotionPullConfigurationWithHttpInfo
     *
     * Adicionar/Atualizar configurações de uma promoção ao orquestrador
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest|null $promotion_pull_configuration_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionPullConfiguration'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function promotionPullConfigurationWithHttpInfo($promotion_pull_configuration_request = null, string $contentType = self::contentTypes['promotionPullConfiguration'][0])
    {
        $request = $this->promotionPullConfigurationRequest($promotion_pull_configuration_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response',
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
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response',
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
                '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response',
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
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation promotionPullConfigurationAsync
     *
     * Adicionar/Atualizar configurações de uma promoção ao orquestrador
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest|null $promotion_pull_configuration_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionPullConfiguration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionPullConfigurationAsync($promotion_pull_configuration_request = null, string $contentType = self::contentTypes['promotionPullConfiguration'][0])
    {
        return $this->promotionPullConfigurationAsyncWithHttpInfo($promotion_pull_configuration_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation promotionPullConfigurationAsyncWithHttpInfo
     *
     * Adicionar/Atualizar configurações de uma promoção ao orquestrador
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest|null $promotion_pull_configuration_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionPullConfiguration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionPullConfigurationAsyncWithHttpInfo($promotion_pull_configuration_request = null, string $contentType = self::contentTypes['promotionPullConfiguration'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration200Response';
        $request = $this->promotionPullConfigurationRequest($promotion_pull_configuration_request, $contentType);

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
     * Create request for operation 'promotionPullConfiguration'
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequest|null $promotion_pull_configuration_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionPullConfiguration'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function promotionPullConfigurationRequest($promotion_pull_configuration_request = null, string $contentType = self::contentTypes['promotionPullConfiguration'][0])
    {



        $resourcePath = '/v3/admin/pullconfiguration';
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
        if (isset($promotion_pull_configuration_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($promotion_pull_configuration_request));
            } else {
                $httpBody = $promotion_pull_configuration_request;
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
     * Operation promotionSetup
     *
     * Setup automatizado de ambiente de promoção
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionSetupRequest $promotion_setup_request promotion_setup_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionSetup'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\PromotionSetup202Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionSetup422Response|\IdpluggerPromotionAdmin\Model\PromotionSetup500Response
     */
    public function promotionSetup($promotion_setup_request, string $contentType = self::contentTypes['promotionSetup'][0])
    {
        list($response) = $this->promotionSetupWithHttpInfo($promotion_setup_request, $contentType);
        return $response;
    }

    /**
     * Operation promotionSetupWithHttpInfo
     *
     * Setup automatizado de ambiente de promoção
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionSetupRequest $promotion_setup_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionSetup'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\PromotionSetup202Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionSetup422Response|\IdpluggerPromotionAdmin\Model\PromotionSetup500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function promotionSetupWithHttpInfo($promotion_setup_request, string $contentType = self::contentTypes['promotionSetup'][0])
    {
        $request = $this->promotionSetupRequest($promotion_setup_request, $contentType);

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
                case 202:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup202Response',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\AuthLogin401Response',
                        $request,
                        $response,
                    );
                case 422:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup422Response',
                        $request,
                        $response,
                    );
                case 500:
                    return $this->handleResponseWithDataType(
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup500Response',
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
                '\IdpluggerPromotionAdmin\Model\PromotionSetup202Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup202Response',
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
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup422Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\PromotionSetup500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation promotionSetupAsync
     *
     * Setup automatizado de ambiente de promoção
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionSetupRequest $promotion_setup_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionSetup'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionSetupAsync($promotion_setup_request, string $contentType = self::contentTypes['promotionSetup'][0])
    {
        return $this->promotionSetupAsyncWithHttpInfo($promotion_setup_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation promotionSetupAsyncWithHttpInfo
     *
     * Setup automatizado de ambiente de promoção
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionSetupRequest $promotion_setup_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionSetup'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionSetupAsyncWithHttpInfo($promotion_setup_request, string $contentType = self::contentTypes['promotionSetup'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\PromotionSetup202Response';
        $request = $this->promotionSetupRequest($promotion_setup_request, $contentType);

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
     * Create request for operation 'promotionSetup'
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionSetupRequest $promotion_setup_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionSetup'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function promotionSetupRequest($promotion_setup_request, string $contentType = self::contentTypes['promotionSetup'][0])
    {

        // verify the required parameter 'promotion_setup_request' is set
        if ($promotion_setup_request === null || (is_array($promotion_setup_request) && count($promotion_setup_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_setup_request when calling promotionSetup'
            );
        }


        $resourcePath = '/v3/admin/promotion/setup';
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
        if (isset($promotion_setup_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($promotion_setup_request));
            } else {
                $httpBody = $promotion_setup_request;
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
     * Operation promotionStart
     *
     * Iniciar uma promoção na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionStartRequest|null $promotion_start_request promotion_start_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionStart'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \IdpluggerPromotionAdmin\Model\PromotionStart200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response
     */
    public function promotionStart($promotion_start_request = null, string $contentType = self::contentTypes['promotionStart'][0])
    {
        list($response) = $this->promotionStartWithHttpInfo($promotion_start_request, $contentType);
        return $response;
    }

    /**
     * Operation promotionStartWithHttpInfo
     *
     * Iniciar uma promoção na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionStartRequest|null $promotion_start_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionStart'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \IdpluggerPromotionAdmin\Model\PromotionStart200Response|\IdpluggerPromotionAdmin\Model\AuthLogin401Response|\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function promotionStartWithHttpInfo($promotion_start_request = null, string $contentType = self::contentTypes['promotionStart'][0])
    {
        $request = $this->promotionStartRequest($promotion_start_request, $contentType);

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
                        '\IdpluggerPromotionAdmin\Model\PromotionStart200Response',
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
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response',
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
                '\IdpluggerPromotionAdmin\Model\PromotionStart200Response',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\IdpluggerPromotionAdmin\Model\PromotionStart200Response',
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
                        '\IdpluggerPromotionAdmin\Model\PromotionPullConfiguration500Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation promotionStartAsync
     *
     * Iniciar uma promoção na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionStartRequest|null $promotion_start_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionStart'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionStartAsync($promotion_start_request = null, string $contentType = self::contentTypes['promotionStart'][0])
    {
        return $this->promotionStartAsyncWithHttpInfo($promotion_start_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation promotionStartAsyncWithHttpInfo
     *
     * Iniciar uma promoção na API
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionStartRequest|null $promotion_start_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionStart'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function promotionStartAsyncWithHttpInfo($promotion_start_request = null, string $contentType = self::contentTypes['promotionStart'][0])
    {
        $returnType = '\IdpluggerPromotionAdmin\Model\PromotionStart200Response';
        $request = $this->promotionStartRequest($promotion_start_request, $contentType);

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
     * Create request for operation 'promotionStart'
     *
     * @param  \IdpluggerPromotionAdmin\Model\PromotionStartRequest|null $promotion_start_request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['promotionStart'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function promotionStartRequest($promotion_start_request = null, string $contentType = self::contentTypes['promotionStart'][0])
    {



        $resourcePath = '/v3/admin/promotion/start';
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
        if (isset($promotion_start_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($promotion_start_request));
            } else {
                $httpBody = $promotion_start_request;
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
