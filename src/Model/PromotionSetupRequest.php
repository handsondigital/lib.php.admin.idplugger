<?php
/**
 * PromotionSetupRequest
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
 * PromotionSetupRequest Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionSetupRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'promotion_setup_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'workflow_schedule_id' => 'int',
        'client_id' => 'int',
        'campaign_id' => 'int',
        'domain' => 'string',
        'cpanel_username' => 'string',
        'cpanel_ip' => 'string',
        'cpanel_password' => 'string',
        'db' => '\IdpluggerPromotionAdmin\Model\PromotionSetupRequestDb',
        'monitor_url' => 'string',
        'callback_url' => 'string',
        'callback_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'workflow_schedule_id' => null,
        'client_id' => null,
        'campaign_id' => null,
        'domain' => null,
        'cpanel_username' => null,
        'cpanel_ip' => null,
        'cpanel_password' => null,
        'db' => null,
        'monitor_url' => null,
        'callback_url' => 'uri',
        'callback_token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'workflow_schedule_id' => false,
        'client_id' => false,
        'campaign_id' => true,
        'domain' => false,
        'cpanel_username' => false,
        'cpanel_ip' => false,
        'cpanel_password' => false,
        'db' => false,
        'monitor_url' => false,
        'callback_url' => false,
        'callback_token' => false
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
        'workflow_schedule_id' => 'workflow_schedule_id',
        'client_id' => 'client_id',
        'campaign_id' => 'campaign_id',
        'domain' => 'domain',
        'cpanel_username' => 'cpanel_username',
        'cpanel_ip' => 'cpanel_ip',
        'cpanel_password' => 'cpanel_password',
        'db' => 'db',
        'monitor_url' => 'monitor_url',
        'callback_url' => 'callback_url',
        'callback_token' => 'callback_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'workflow_schedule_id' => 'setWorkflowScheduleId',
        'client_id' => 'setClientId',
        'campaign_id' => 'setCampaignId',
        'domain' => 'setDomain',
        'cpanel_username' => 'setCpanelUsername',
        'cpanel_ip' => 'setCpanelIp',
        'cpanel_password' => 'setCpanelPassword',
        'db' => 'setDb',
        'monitor_url' => 'setMonitorUrl',
        'callback_url' => 'setCallbackUrl',
        'callback_token' => 'setCallbackToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'workflow_schedule_id' => 'getWorkflowScheduleId',
        'client_id' => 'getClientId',
        'campaign_id' => 'getCampaignId',
        'domain' => 'getDomain',
        'cpanel_username' => 'getCpanelUsername',
        'cpanel_ip' => 'getCpanelIp',
        'cpanel_password' => 'getCpanelPassword',
        'db' => 'getDb',
        'monitor_url' => 'getMonitorUrl',
        'callback_url' => 'getCallbackUrl',
        'callback_token' => 'getCallbackToken'
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
        $this->setIfExists('workflow_schedule_id', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('cpanel_username', $data ?? [], null);
        $this->setIfExists('cpanel_ip', $data ?? [], null);
        $this->setIfExists('cpanel_password', $data ?? [], null);
        $this->setIfExists('db', $data ?? [], null);
        $this->setIfExists('monitor_url', $data ?? [], null);
        $this->setIfExists('callback_url', $data ?? [], null);
        $this->setIfExists('callback_token', $data ?? [], null);
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

        if ($this->container['workflow_schedule_id'] === null) {
            $invalidProperties[] = "'workflow_schedule_id' can't be null";
        }
        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['cpanel_username'] === null) {
            $invalidProperties[] = "'cpanel_username' can't be null";
        }
        if ($this->container['cpanel_ip'] === null) {
            $invalidProperties[] = "'cpanel_ip' can't be null";
        }
        if ($this->container['cpanel_password'] === null) {
            $invalidProperties[] = "'cpanel_password' can't be null";
        }
        if ($this->container['db'] === null) {
            $invalidProperties[] = "'db' can't be null";
        }
        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['callback_token'] === null) {
            $invalidProperties[] = "'callback_token' can't be null";
        }
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
     * Gets workflow_schedule_id
     *
     * @return int
     */
    public function getWorkflowScheduleId()
    {
        return $this->container['workflow_schedule_id'];
    }

    /**
     * Sets workflow_schedule_id
     *
     * @param int $workflow_schedule_id workflow_schedule_id
     *
     * @return self
     */
    public function setWorkflowScheduleId($workflow_schedule_id)
    {
        if (is_null($workflow_schedule_id)) {
            throw new \InvalidArgumentException('non-nullable workflow_schedule_id cannot be null');
        }
        $this->container['workflow_schedule_id'] = $workflow_schedule_id;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param int $client_id client_id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id campaign_id
     *
     * @return self
     */
    public function setCampaignId($campaign_id)
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets cpanel_username
     *
     * @return string
     */
    public function getCpanelUsername()
    {
        return $this->container['cpanel_username'];
    }

    /**
     * Sets cpanel_username
     *
     * @param string $cpanel_username cpanel_username
     *
     * @return self
     */
    public function setCpanelUsername($cpanel_username)
    {
        if (is_null($cpanel_username)) {
            throw new \InvalidArgumentException('non-nullable cpanel_username cannot be null');
        }
        $this->container['cpanel_username'] = $cpanel_username;

        return $this;
    }

    /**
     * Gets cpanel_ip
     *
     * @return string
     */
    public function getCpanelIp()
    {
        return $this->container['cpanel_ip'];
    }

    /**
     * Sets cpanel_ip
     *
     * @param string $cpanel_ip cpanel_ip
     *
     * @return self
     */
    public function setCpanelIp($cpanel_ip)
    {
        if (is_null($cpanel_ip)) {
            throw new \InvalidArgumentException('non-nullable cpanel_ip cannot be null');
        }
        $this->container['cpanel_ip'] = $cpanel_ip;

        return $this;
    }

    /**
     * Gets cpanel_password
     *
     * @return string
     */
    public function getCpanelPassword()
    {
        return $this->container['cpanel_password'];
    }

    /**
     * Sets cpanel_password
     *
     * @param string $cpanel_password cpanel_password
     *
     * @return self
     */
    public function setCpanelPassword($cpanel_password)
    {
        if (is_null($cpanel_password)) {
            throw new \InvalidArgumentException('non-nullable cpanel_password cannot be null');
        }
        $this->container['cpanel_password'] = $cpanel_password;

        return $this;
    }

    /**
     * Gets db
     *
     * @return \IdpluggerPromotionAdmin\Model\PromotionSetupRequestDb
     */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
     * Sets db
     *
     * @param \IdpluggerPromotionAdmin\Model\PromotionSetupRequestDb $db db
     *
     * @return self
     */
    public function setDb($db)
    {
        if (is_null($db)) {
            throw new \InvalidArgumentException('non-nullable db cannot be null');
        }
        $this->container['db'] = $db;

        return $this;
    }

    /**
     * Gets monitor_url
     *
     * @return string|null
     */
    public function getMonitorUrl()
    {
        return $this->container['monitor_url'];
    }

    /**
     * Sets monitor_url
     *
     * @param string|null $monitor_url monitor_url
     *
     * @return self
     */
    public function setMonitorUrl($monitor_url)
    {
        if (is_null($monitor_url)) {
            throw new \InvalidArgumentException('non-nullable monitor_url cannot be null');
        }
        $this->container['monitor_url'] = $monitor_url;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url callback_url
     *
     * @return self
     */
    public function setCallbackUrl($callback_url)
    {
        if (is_null($callback_url)) {
            throw new \InvalidArgumentException('non-nullable callback_url cannot be null');
        }
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets callback_token
     *
     * @return string
     */
    public function getCallbackToken()
    {
        return $this->container['callback_token'];
    }

    /**
     * Sets callback_token
     *
     * @param string $callback_token callback_token
     *
     * @return self
     */
    public function setCallbackToken($callback_token)
    {
        if (is_null($callback_token)) {
            throw new \InvalidArgumentException('non-nullable callback_token cannot be null');
        }
        $this->container['callback_token'] = $callback_token;

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


