<?php
/**
 * TemplatesApi
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
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplatesApi
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
        'templatesDelete' => [
            'application/json',
        ],
        'templatesIndex' => [
            'application/json',
        ],
        'templatesShow' => [
            'application/json',
        ],
        'templatesUpdate' => [
            'application/json',
        ],
        'templatesVariables' => [
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
     * Operation templatesDelete
     *
     * Restaurar template para o padrão (deletar customização)
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesDelete'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function templatesDelete($promotion_id, $template_key, string $contentType = self::contentTypes['templatesDelete'][0])
    {
        $this->templatesDeleteWithHttpInfo($promotion_id, $template_key, $contentType);
    }

    /**
     * Operation templatesDeleteWithHttpInfo
     *
     * Restaurar template para o padrão (deletar customização)
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesDelete'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function templatesDeleteWithHttpInfo($promotion_id, $template_key, string $contentType = self::contentTypes['templatesDelete'][0])
    {
        $request = $this->templatesDeleteRequest($promotion_id, $template_key, $contentType);

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
            }
        

            throw $e;
        }
    }

    /**
     * Operation templatesDeleteAsync
     *
     * Restaurar template para o padrão (deletar customização)
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesDeleteAsync($promotion_id, $template_key, string $contentType = self::contentTypes['templatesDelete'][0])
    {
        return $this->templatesDeleteAsyncWithHttpInfo($promotion_id, $template_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation templatesDeleteAsyncWithHttpInfo
     *
     * Restaurar template para o padrão (deletar customização)
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesDeleteAsyncWithHttpInfo($promotion_id, $template_key, string $contentType = self::contentTypes['templatesDelete'][0])
    {
        $returnType = '';
        $request = $this->templatesDeleteRequest($promotion_id, $template_key, $contentType);

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
     * Create request for operation 'templatesDelete'
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesDelete'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function templatesDeleteRequest($promotion_id, $template_key, string $contentType = self::contentTypes['templatesDelete'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling templatesDelete'
            );
        }

        // verify the required parameter 'template_key' is set
        if ($template_key === null || (is_array($template_key) && count($template_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_key when calling templatesDelete'
            );
        }


        $resourcePath = '/v3/promotion/{promotion_id}/cms/templates/{templateKey}';
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
        if ($template_key !== null) {
            $resourcePath = str_replace(
                '{' . 'templateKey' . '}',
                ObjectSerializer::toPathValue($template_key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
     * Operation templatesIndex
     *
     * Listar templates de e-mail da promoção
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function templatesIndex($promotion_id, string $contentType = self::contentTypes['templatesIndex'][0])
    {
        $this->templatesIndexWithHttpInfo($promotion_id, $contentType);
    }

    /**
     * Operation templatesIndexWithHttpInfo
     *
     * Listar templates de e-mail da promoção
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesIndex'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function templatesIndexWithHttpInfo($promotion_id, string $contentType = self::contentTypes['templatesIndex'][0])
    {
        $request = $this->templatesIndexRequest($promotion_id, $contentType);

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
            }
        

            throw $e;
        }
    }

    /**
     * Operation templatesIndexAsync
     *
     * Listar templates de e-mail da promoção
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesIndexAsync($promotion_id, string $contentType = self::contentTypes['templatesIndex'][0])
    {
        return $this->templatesIndexAsyncWithHttpInfo($promotion_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation templatesIndexAsyncWithHttpInfo
     *
     * Listar templates de e-mail da promoção
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesIndexAsyncWithHttpInfo($promotion_id, string $contentType = self::contentTypes['templatesIndex'][0])
    {
        $returnType = '';
        $request = $this->templatesIndexRequest($promotion_id, $contentType);

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
     * Create request for operation 'templatesIndex'
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesIndex'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function templatesIndexRequest($promotion_id, string $contentType = self::contentTypes['templatesIndex'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling templatesIndex'
            );
        }


        $resourcePath = '/v3/promotion/{promotion_id}/cms/templates';
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
            [],
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
     * Operation templatesShow
     *
     * Buscar um template específico
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function templatesShow($promotion_id, $template_key, string $contentType = self::contentTypes['templatesShow'][0])
    {
        $this->templatesShowWithHttpInfo($promotion_id, $template_key, $contentType);
    }

    /**
     * Operation templatesShowWithHttpInfo
     *
     * Buscar um template específico
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesShow'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function templatesShowWithHttpInfo($promotion_id, $template_key, string $contentType = self::contentTypes['templatesShow'][0])
    {
        $request = $this->templatesShowRequest($promotion_id, $template_key, $contentType);

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
            }
        

            throw $e;
        }
    }

    /**
     * Operation templatesShowAsync
     *
     * Buscar um template específico
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesShowAsync($promotion_id, $template_key, string $contentType = self::contentTypes['templatesShow'][0])
    {
        return $this->templatesShowAsyncWithHttpInfo($promotion_id, $template_key, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation templatesShowAsyncWithHttpInfo
     *
     * Buscar um template específico
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesShowAsyncWithHttpInfo($promotion_id, $template_key, string $contentType = self::contentTypes['templatesShow'][0])
    {
        $returnType = '';
        $request = $this->templatesShowRequest($promotion_id, $template_key, $contentType);

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
     * Create request for operation 'templatesShow'
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $template_key Key do template (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesShow'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function templatesShowRequest($promotion_id, $template_key, string $contentType = self::contentTypes['templatesShow'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling templatesShow'
            );
        }

        // verify the required parameter 'template_key' is set
        if ($template_key === null || (is_array($template_key) && count($template_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_key when calling templatesShow'
            );
        }


        $resourcePath = '/v3/promotion/{promotion_id}/cms/templates/{templateKey}';
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
        if ($template_key !== null) {
            $resourcePath = str_replace(
                '{' . 'templateKey' . '}',
                ObjectSerializer::toPathValue($template_key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
     * Operation templatesUpdate
     *
     * Atualizar um ou mais templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest $templates_update_request templates_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function templatesUpdate($promotion_id, $templates_update_request, string $contentType = self::contentTypes['templatesUpdate'][0])
    {
        $this->templatesUpdateWithHttpInfo($promotion_id, $templates_update_request, $contentType);
    }

    /**
     * Operation templatesUpdateWithHttpInfo
     *
     * Atualizar um ou mais templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest $templates_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesUpdate'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function templatesUpdateWithHttpInfo($promotion_id, $templates_update_request, string $contentType = self::contentTypes['templatesUpdate'][0])
    {
        $request = $this->templatesUpdateRequest($promotion_id, $templates_update_request, $contentType);

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
            }
        

            throw $e;
        }
    }

    /**
     * Operation templatesUpdateAsync
     *
     * Atualizar um ou mais templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest $templates_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesUpdateAsync($promotion_id, $templates_update_request, string $contentType = self::contentTypes['templatesUpdate'][0])
    {
        return $this->templatesUpdateAsyncWithHttpInfo($promotion_id, $templates_update_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation templatesUpdateAsyncWithHttpInfo
     *
     * Atualizar um ou mais templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest $templates_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesUpdateAsyncWithHttpInfo($promotion_id, $templates_update_request, string $contentType = self::contentTypes['templatesUpdate'][0])
    {
        $returnType = '';
        $request = $this->templatesUpdateRequest($promotion_id, $templates_update_request, $contentType);

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
     * Create request for operation 'templatesUpdate'
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  \IdpluggerPromotionAdmin\Model\TemplatesUpdateRequest $templates_update_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesUpdate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function templatesUpdateRequest($promotion_id, $templates_update_request, string $contentType = self::contentTypes['templatesUpdate'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling templatesUpdate'
            );
        }

        // verify the required parameter 'templates_update_request' is set
        if ($templates_update_request === null || (is_array($templates_update_request) && count($templates_update_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $templates_update_request when calling templatesUpdate'
            );
        }


        $resourcePath = '/v3/promotion/{promotion_id}/cms/templates';
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
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($templates_update_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($templates_update_request));
            } else {
                $httpBody = $templates_update_request;
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
     * Operation templatesVariables
     *
     * Listar variáveis disponíveis para os templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesVariables'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function templatesVariables($promotion_id, string $contentType = self::contentTypes['templatesVariables'][0])
    {
        $this->templatesVariablesWithHttpInfo($promotion_id, $contentType);
    }

    /**
     * Operation templatesVariablesWithHttpInfo
     *
     * Listar variáveis disponíveis para os templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesVariables'] to see the possible values for this operation
     *
     * @throws \IdpluggerPromotionAdmin\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function templatesVariablesWithHttpInfo($promotion_id, string $contentType = self::contentTypes['templatesVariables'][0])
    {
        $request = $this->templatesVariablesRequest($promotion_id, $contentType);

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
            }
        

            throw $e;
        }
    }

    /**
     * Operation templatesVariablesAsync
     *
     * Listar variáveis disponíveis para os templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesVariables'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesVariablesAsync($promotion_id, string $contentType = self::contentTypes['templatesVariables'][0])
    {
        return $this->templatesVariablesAsyncWithHttpInfo($promotion_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation templatesVariablesAsyncWithHttpInfo
     *
     * Listar variáveis disponíveis para os templates de e-mail
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesVariables'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function templatesVariablesAsyncWithHttpInfo($promotion_id, string $contentType = self::contentTypes['templatesVariables'][0])
    {
        $returnType = '';
        $request = $this->templatesVariablesRequest($promotion_id, $contentType);

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
     * Create request for operation 'templatesVariables'
     *
     * @param  string $promotion_id ID da promoção (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['templatesVariables'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function templatesVariablesRequest($promotion_id, string $contentType = self::contentTypes['templatesVariables'][0])
    {

        // verify the required parameter 'promotion_id' is set
        if ($promotion_id === null || (is_array($promotion_id) && count($promotion_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $promotion_id when calling templatesVariables'
            );
        }


        $resourcePath = '/v3/promotion/{promotion_id}/cms/templates/variables';
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
            [],
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
