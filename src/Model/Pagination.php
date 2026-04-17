<?php
/**
 * Pagination
 *
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

namespace IdpluggerPromotionAdmin\Model;

use \ArrayAccess;
use \IdpluggerPromotionAdmin\ObjectSerializer;

/**
 * Pagination Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Pagination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Pagination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_page' => 'int',
        'first_page_url' => 'string',
        'from' => 'int',
        'last_page' => 'int',
        'last_page_url' => 'string',
        'links' => '\IdpluggerPromotionAdmin\Model\PaginationLinksInner[]',
        'next_page_url' => 'string',
        'path' => 'string',
        'per_page' => 'string',
        'prev_page_url' => 'string',
        'to' => 'int',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_page' => null,
        'first_page_url' => null,
        'from' => null,
        'last_page' => null,
        'last_page_url' => null,
        'links' => null,
        'next_page_url' => null,
        'path' => null,
        'per_page' => null,
        'prev_page_url' => null,
        'to' => null,
        'total' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_page' => false,
        'first_page_url' => false,
        'from' => false,
        'last_page' => false,
        'last_page_url' => false,
        'links' => false,
        'next_page_url' => false,
        'path' => false,
        'per_page' => false,
        'prev_page_url' => false,
        'to' => false,
        'total' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'current_page' => 'current_page',
        'first_page_url' => 'first_page_url',
        'from' => 'from',
        'last_page' => 'last_page',
        'last_page_url' => 'last_page_url',
        'links' => 'links',
        'next_page_url' => 'next_page_url',
        'path' => 'path',
        'per_page' => 'per_page',
        'prev_page_url' => 'prev_page_url',
        'to' => 'to',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'first_page_url' => 'setFirstPageUrl',
        'from' => 'setFrom',
        'last_page' => 'setLastPage',
        'last_page_url' => 'setLastPageUrl',
        'links' => 'setLinks',
        'next_page_url' => 'setNextPageUrl',
        'path' => 'setPath',
        'per_page' => 'setPerPage',
        'prev_page_url' => 'setPrevPageUrl',
        'to' => 'setTo',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'first_page_url' => 'getFirstPageUrl',
        'from' => 'getFrom',
        'last_page' => 'getLastPage',
        'last_page_url' => 'getLastPageUrl',
        'links' => 'getLinks',
        'next_page_url' => 'getNextPageUrl',
        'path' => 'getPath',
        'per_page' => 'getPerPage',
        'prev_page_url' => 'getPrevPageUrl',
        'to' => 'getTo',
        'total' => 'getTotal'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('current_page', $data ?? [], null);
        $this->setIfExists('first_page_url', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('last_page', $data ?? [], null);
        $this->setIfExists('last_page_url', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
        $this->setIfExists('next_page_url', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('per_page', $data ?? [], null);
        $this->setIfExists('prev_page_url', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets current_page
     *
     * @return int|null
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int|null $current_page current_page
     *
     * @return self
     */
    public function setCurrentPage($current_page)
    {
        if (is_null($current_page)) {
            throw new \InvalidArgumentException('non-nullable current_page cannot be null');
        }
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets first_page_url
     *
     * @return string|null
     */
    public function getFirstPageUrl()
    {
        return $this->container['first_page_url'];
    }

    /**
     * Sets first_page_url
     *
     * @param string|null $first_page_url first_page_url
     *
     * @return self
     */
    public function setFirstPageUrl($first_page_url)
    {
        if (is_null($first_page_url)) {
            throw new \InvalidArgumentException('non-nullable first_page_url cannot be null');
        }
        $this->container['first_page_url'] = $first_page_url;

        return $this;
    }

    /**
     * Gets from
     *
     * @return int|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param int|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets last_page
     *
     * @return int|null
     */
    public function getLastPage()
    {
        return $this->container['last_page'];
    }

    /**
     * Sets last_page
     *
     * @param int|null $last_page last_page
     *
     * @return self
     */
    public function setLastPage($last_page)
    {
        if (is_null($last_page)) {
            throw new \InvalidArgumentException('non-nullable last_page cannot be null');
        }
        $this->container['last_page'] = $last_page;

        return $this;
    }

    /**
     * Gets last_page_url
     *
     * @return string|null
     */
    public function getLastPageUrl()
    {
        return $this->container['last_page_url'];
    }

    /**
     * Sets last_page_url
     *
     * @param string|null $last_page_url last_page_url
     *
     * @return self
     */
    public function setLastPageUrl($last_page_url)
    {
        if (is_null($last_page_url)) {
            throw new \InvalidArgumentException('non-nullable last_page_url cannot be null');
        }
        $this->container['last_page_url'] = $last_page_url;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \IdpluggerPromotionAdmin\Model\PaginationLinksInner[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \IdpluggerPromotionAdmin\Model\PaginationLinksInner[]|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets next_page_url
     *
     * @return string|null
     */
    public function getNextPageUrl()
    {
        return $this->container['next_page_url'];
    }

    /**
     * Sets next_page_url
     *
     * @param string|null $next_page_url next_page_url
     *
     * @return self
     */
    public function setNextPageUrl($next_page_url)
    {
        if (is_null($next_page_url)) {
            throw new \InvalidArgumentException('non-nullable next_page_url cannot be null');
        }
        $this->container['next_page_url'] = $next_page_url;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return string|null
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param string|null $per_page per_page
     *
     * @return self
     */
    public function setPerPage($per_page)
    {
        if (is_null($per_page)) {
            throw new \InvalidArgumentException('non-nullable per_page cannot be null');
        }
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets prev_page_url
     *
     * @return string|null
     */
    public function getPrevPageUrl()
    {
        return $this->container['prev_page_url'];
    }

    /**
     * Sets prev_page_url
     *
     * @param string|null $prev_page_url prev_page_url
     *
     * @return self
     */
    public function setPrevPageUrl($prev_page_url)
    {
        if (is_null($prev_page_url)) {
            throw new \InvalidArgumentException('non-nullable prev_page_url cannot be null');
        }
        $this->container['prev_page_url'] = $prev_page_url;

        return $this;
    }

    /**
     * Gets to
     *
     * @return int|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param int|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


