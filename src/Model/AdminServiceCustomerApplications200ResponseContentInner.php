<?php
/**
 * AdminServiceCustomerApplications200ResponseContentInner
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
 * AdminServiceCustomerApplications200ResponseContentInner Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdminServiceCustomerApplications200ResponseContentInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'admin_service_customer_applications_200_response_content_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'framework' => 'string',
        'language' => 'string',
        'description' => 'string',
        'version' => 'string',
        'infrastructure' => 'string',
        'status' => 'bool',
        'access_url' => 'string',
        'access_homolog_url' => 'string',
        'access_admin_url' => 'string',
        'google_analytics_id' => 'string',
        'google_tag_manager_id' => 'string',
        'github_repository' => 'string',
        'github_repository_name' => 'string',
        'github_last_updated' => 'string',
        'url_monitoring' => 'string',
        'notifications' => 'object',
        'date_creation' => 'string',
        'date_updated' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'client' => '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerClient',
        'brand' => 'object',
        'contracts' => 'object[]',
        'programming' => '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProgrammingInner[]',
        'workflow_schedules' => '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInner[]',
        'promotions' => '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerPromotionsInner[]',
        'product' => '\IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProduct'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'framework' => null,
        'language' => null,
        'description' => null,
        'version' => null,
        'infrastructure' => null,
        'status' => null,
        'access_url' => null,
        'access_homolog_url' => null,
        'access_admin_url' => null,
        'google_analytics_id' => null,
        'google_tag_manager_id' => null,
        'github_repository' => null,
        'github_repository_name' => null,
        'github_last_updated' => null,
        'url_monitoring' => null,
        'notifications' => null,
        'date_creation' => null,
        'date_updated' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'client' => null,
        'brand' => null,
        'contracts' => null,
        'programming' => null,
        'workflow_schedules' => null,
        'promotions' => null,
        'product' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'name' => false,
        'framework' => true,
        'language' => true,
        'description' => true,
        'version' => true,
        'infrastructure' => true,
        'status' => false,
        'access_url' => true,
        'access_homolog_url' => true,
        'access_admin_url' => true,
        'google_analytics_id' => true,
        'google_tag_manager_id' => true,
        'github_repository' => true,
        'github_repository_name' => true,
        'github_last_updated' => true,
        'url_monitoring' => true,
        'notifications' => true,
        'date_creation' => true,
        'date_updated' => true,
        'created_at' => false,
        'updated_at' => false,
        'client' => false,
        'brand' => true,
        'contracts' => false,
        'programming' => false,
        'workflow_schedules' => false,
        'promotions' => false,
        'product' => false
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
        'id' => 'id',
        'name' => 'name',
        'framework' => 'framework',
        'language' => 'language',
        'description' => 'description',
        'version' => 'version',
        'infrastructure' => 'infrastructure',
        'status' => 'status',
        'access_url' => 'access_url',
        'access_homolog_url' => 'access_homolog_url',
        'access_admin_url' => 'access_admin_url',
        'google_analytics_id' => 'google_analytics_id',
        'google_tag_manager_id' => 'google_tag_manager_id',
        'github_repository' => 'github_repository',
        'github_repository_name' => 'github_repository_name',
        'github_last_updated' => 'github_last_updated',
        'url_monitoring' => 'url_monitoring',
        'notifications' => 'notifications',
        'date_creation' => 'date_creation',
        'date_updated' => 'date_updated',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'client' => 'client',
        'brand' => 'brand',
        'contracts' => 'contracts',
        'programming' => 'programming',
        'workflow_schedules' => 'workflow_schedules',
        'promotions' => 'promotions',
        'product' => 'product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'framework' => 'setFramework',
        'language' => 'setLanguage',
        'description' => 'setDescription',
        'version' => 'setVersion',
        'infrastructure' => 'setInfrastructure',
        'status' => 'setStatus',
        'access_url' => 'setAccessUrl',
        'access_homolog_url' => 'setAccessHomologUrl',
        'access_admin_url' => 'setAccessAdminUrl',
        'google_analytics_id' => 'setGoogleAnalyticsId',
        'google_tag_manager_id' => 'setGoogleTagManagerId',
        'github_repository' => 'setGithubRepository',
        'github_repository_name' => 'setGithubRepositoryName',
        'github_last_updated' => 'setGithubLastUpdated',
        'url_monitoring' => 'setUrlMonitoring',
        'notifications' => 'setNotifications',
        'date_creation' => 'setDateCreation',
        'date_updated' => 'setDateUpdated',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'client' => 'setClient',
        'brand' => 'setBrand',
        'contracts' => 'setContracts',
        'programming' => 'setProgramming',
        'workflow_schedules' => 'setWorkflowSchedules',
        'promotions' => 'setPromotions',
        'product' => 'setProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'framework' => 'getFramework',
        'language' => 'getLanguage',
        'description' => 'getDescription',
        'version' => 'getVersion',
        'infrastructure' => 'getInfrastructure',
        'status' => 'getStatus',
        'access_url' => 'getAccessUrl',
        'access_homolog_url' => 'getAccessHomologUrl',
        'access_admin_url' => 'getAccessAdminUrl',
        'google_analytics_id' => 'getGoogleAnalyticsId',
        'google_tag_manager_id' => 'getGoogleTagManagerId',
        'github_repository' => 'getGithubRepository',
        'github_repository_name' => 'getGithubRepositoryName',
        'github_last_updated' => 'getGithubLastUpdated',
        'url_monitoring' => 'getUrlMonitoring',
        'notifications' => 'getNotifications',
        'date_creation' => 'getDateCreation',
        'date_updated' => 'getDateUpdated',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'client' => 'getClient',
        'brand' => 'getBrand',
        'contracts' => 'getContracts',
        'programming' => 'getProgramming',
        'workflow_schedules' => 'getWorkflowSchedules',
        'promotions' => 'getPromotions',
        'product' => 'getProduct'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('framework', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('infrastructure', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('access_url', $data ?? [], null);
        $this->setIfExists('access_homolog_url', $data ?? [], null);
        $this->setIfExists('access_admin_url', $data ?? [], null);
        $this->setIfExists('google_analytics_id', $data ?? [], null);
        $this->setIfExists('google_tag_manager_id', $data ?? [], null);
        $this->setIfExists('github_repository', $data ?? [], null);
        $this->setIfExists('github_repository_name', $data ?? [], null);
        $this->setIfExists('github_last_updated', $data ?? [], null);
        $this->setIfExists('url_monitoring', $data ?? [], null);
        $this->setIfExists('notifications', $data ?? [], null);
        $this->setIfExists('date_creation', $data ?? [], null);
        $this->setIfExists('date_updated', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('client', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('contracts', $data ?? [], null);
        $this->setIfExists('programming', $data ?? [], null);
        $this->setIfExists('workflow_schedules', $data ?? [], null);
        $this->setIfExists('promotions', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id UUID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets framework
     *
     * @return string|null
     */
    public function getFramework()
    {
        return $this->container['framework'];
    }

    /**
     * Sets framework
     *
     * @param string|null $framework framework
     *
     * @return self
     */
    public function setFramework($framework)
    {
        if (is_null($framework)) {
            array_push($this->openAPINullablesSetToNull, 'framework');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('framework', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['framework'] = $framework;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            array_push($this->openAPINullablesSetToNull, 'language');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('language', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            array_push($this->openAPINullablesSetToNull, 'version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets infrastructure
     *
     * @return string|null
     */
    public function getInfrastructure()
    {
        return $this->container['infrastructure'];
    }

    /**
     * Sets infrastructure
     *
     * @param string|null $infrastructure infrastructure
     *
     * @return self
     */
    public function setInfrastructure($infrastructure)
    {
        if (is_null($infrastructure)) {
            array_push($this->openAPINullablesSetToNull, 'infrastructure');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('infrastructure', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['infrastructure'] = $infrastructure;

        return $this;
    }

    /**
     * Gets status
     *
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param bool|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets access_url
     *
     * @return string|null
     */
    public function getAccessUrl()
    {
        return $this->container['access_url'];
    }

    /**
     * Sets access_url
     *
     * @param string|null $access_url access_url
     *
     * @return self
     */
    public function setAccessUrl($access_url)
    {
        if (is_null($access_url)) {
            array_push($this->openAPINullablesSetToNull, 'access_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('access_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['access_url'] = $access_url;

        return $this;
    }

    /**
     * Gets access_homolog_url
     *
     * @return string|null
     */
    public function getAccessHomologUrl()
    {
        return $this->container['access_homolog_url'];
    }

    /**
     * Sets access_homolog_url
     *
     * @param string|null $access_homolog_url access_homolog_url
     *
     * @return self
     */
    public function setAccessHomologUrl($access_homolog_url)
    {
        if (is_null($access_homolog_url)) {
            array_push($this->openAPINullablesSetToNull, 'access_homolog_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('access_homolog_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['access_homolog_url'] = $access_homolog_url;

        return $this;
    }

    /**
     * Gets access_admin_url
     *
     * @return string|null
     */
    public function getAccessAdminUrl()
    {
        return $this->container['access_admin_url'];
    }

    /**
     * Sets access_admin_url
     *
     * @param string|null $access_admin_url access_admin_url
     *
     * @return self
     */
    public function setAccessAdminUrl($access_admin_url)
    {
        if (is_null($access_admin_url)) {
            array_push($this->openAPINullablesSetToNull, 'access_admin_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('access_admin_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['access_admin_url'] = $access_admin_url;

        return $this;
    }

    /**
     * Gets google_analytics_id
     *
     * @return string|null
     */
    public function getGoogleAnalyticsId()
    {
        return $this->container['google_analytics_id'];
    }

    /**
     * Sets google_analytics_id
     *
     * @param string|null $google_analytics_id google_analytics_id
     *
     * @return self
     */
    public function setGoogleAnalyticsId($google_analytics_id)
    {
        if (is_null($google_analytics_id)) {
            array_push($this->openAPINullablesSetToNull, 'google_analytics_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('google_analytics_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['google_analytics_id'] = $google_analytics_id;

        return $this;
    }

    /**
     * Gets google_tag_manager_id
     *
     * @return string|null
     */
    public function getGoogleTagManagerId()
    {
        return $this->container['google_tag_manager_id'];
    }

    /**
     * Sets google_tag_manager_id
     *
     * @param string|null $google_tag_manager_id google_tag_manager_id
     *
     * @return self
     */
    public function setGoogleTagManagerId($google_tag_manager_id)
    {
        if (is_null($google_tag_manager_id)) {
            array_push($this->openAPINullablesSetToNull, 'google_tag_manager_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('google_tag_manager_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['google_tag_manager_id'] = $google_tag_manager_id;

        return $this;
    }

    /**
     * Gets github_repository
     *
     * @return string|null
     */
    public function getGithubRepository()
    {
        return $this->container['github_repository'];
    }

    /**
     * Sets github_repository
     *
     * @param string|null $github_repository github_repository
     *
     * @return self
     */
    public function setGithubRepository($github_repository)
    {
        if (is_null($github_repository)) {
            array_push($this->openAPINullablesSetToNull, 'github_repository');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('github_repository', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['github_repository'] = $github_repository;

        return $this;
    }

    /**
     * Gets github_repository_name
     *
     * @return string|null
     */
    public function getGithubRepositoryName()
    {
        return $this->container['github_repository_name'];
    }

    /**
     * Sets github_repository_name
     *
     * @param string|null $github_repository_name github_repository_name
     *
     * @return self
     */
    public function setGithubRepositoryName($github_repository_name)
    {
        if (is_null($github_repository_name)) {
            array_push($this->openAPINullablesSetToNull, 'github_repository_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('github_repository_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['github_repository_name'] = $github_repository_name;

        return $this;
    }

    /**
     * Gets github_last_updated
     *
     * @return string|null
     */
    public function getGithubLastUpdated()
    {
        return $this->container['github_last_updated'];
    }

    /**
     * Sets github_last_updated
     *
     * @param string|null $github_last_updated github_last_updated
     *
     * @return self
     */
    public function setGithubLastUpdated($github_last_updated)
    {
        if (is_null($github_last_updated)) {
            array_push($this->openAPINullablesSetToNull, 'github_last_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('github_last_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['github_last_updated'] = $github_last_updated;

        return $this;
    }

    /**
     * Gets url_monitoring
     *
     * @return string|null
     */
    public function getUrlMonitoring()
    {
        return $this->container['url_monitoring'];
    }

    /**
     * Sets url_monitoring
     *
     * @param string|null $url_monitoring url_monitoring
     *
     * @return self
     */
    public function setUrlMonitoring($url_monitoring)
    {
        if (is_null($url_monitoring)) {
            array_push($this->openAPINullablesSetToNull, 'url_monitoring');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url_monitoring', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url_monitoring'] = $url_monitoring;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return object|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param object|null $notifications notifications
     *
     * @return self
     */
    public function setNotifications($notifications)
    {
        if (is_null($notifications)) {
            array_push($this->openAPINullablesSetToNull, 'notifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notifications', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets date_creation
     *
     * @return string|null
     */
    public function getDateCreation()
    {
        return $this->container['date_creation'];
    }

    /**
     * Sets date_creation
     *
     * @param string|null $date_creation date_creation
     *
     * @return self
     */
    public function setDateCreation($date_creation)
    {
        if (is_null($date_creation)) {
            array_push($this->openAPINullablesSetToNull, 'date_creation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_creation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_creation'] = $date_creation;

        return $this;
    }

    /**
     * Gets date_updated
     *
     * @return string|null
     */
    public function getDateUpdated()
    {
        return $this->container['date_updated'];
    }

    /**
     * Sets date_updated
     *
     * @param string|null $date_updated date_updated
     *
     * @return self
     */
    public function setDateUpdated($date_updated)
    {
        if (is_null($date_updated)) {
            array_push($this->openAPINullablesSetToNull, 'date_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_updated'] = $date_updated;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets client
     *
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerClient|null
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     *
     * @param \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerClient|null $client client
     *
     * @return self
     */
    public function setClient($client)
    {
        if (is_null($client)) {
            throw new \InvalidArgumentException('non-nullable client cannot be null');
        }
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return object|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param object|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            array_push($this->openAPINullablesSetToNull, 'brand');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brand', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets contracts
     *
     * @return object[]|null
     */
    public function getContracts()
    {
        return $this->container['contracts'];
    }

    /**
     * Sets contracts
     *
     * @param object[]|null $contracts contracts
     *
     * @return self
     */
    public function setContracts($contracts)
    {
        if (is_null($contracts)) {
            throw new \InvalidArgumentException('non-nullable contracts cannot be null');
        }
        $this->container['contracts'] = $contracts;

        return $this;
    }

    /**
     * Gets programming
     *
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProgrammingInner[]|null
     */
    public function getProgramming()
    {
        return $this->container['programming'];
    }

    /**
     * Sets programming
     *
     * @param \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProgrammingInner[]|null $programming programming
     *
     * @return self
     */
    public function setProgramming($programming)
    {
        if (is_null($programming)) {
            throw new \InvalidArgumentException('non-nullable programming cannot be null');
        }
        $this->container['programming'] = $programming;

        return $this;
    }

    /**
     * Gets workflow_schedules
     *
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInner[]|null
     */
    public function getWorkflowSchedules()
    {
        return $this->container['workflow_schedules'];
    }

    /**
     * Sets workflow_schedules
     *
     * @param \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerWorkflowSchedulesInner[]|null $workflow_schedules workflow_schedules
     *
     * @return self
     */
    public function setWorkflowSchedules($workflow_schedules)
    {
        if (is_null($workflow_schedules)) {
            throw new \InvalidArgumentException('non-nullable workflow_schedules cannot be null');
        }
        $this->container['workflow_schedules'] = $workflow_schedules;

        return $this;
    }

    /**
     * Gets promotions
     *
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerPromotionsInner[]|null
     */
    public function getPromotions()
    {
        return $this->container['promotions'];
    }

    /**
     * Sets promotions
     *
     * @param \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerPromotionsInner[]|null $promotions promotions
     *
     * @return self
     */
    public function setPromotions($promotions)
    {
        if (is_null($promotions)) {
            throw new \InvalidArgumentException('non-nullable promotions cannot be null');
        }
        $this->container['promotions'] = $promotions;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \IdpluggerPromotionAdmin\Model\AdminServiceCustomerApplications200ResponseContentInnerProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

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


