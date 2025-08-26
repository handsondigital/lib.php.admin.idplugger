<?php
/**
 * PromotionStartRequest
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

namespace IdpluggerPromotionAdmin\Model;

use \ArrayAccess;
use \IdpluggerPromotionAdmin\ObjectSerializer;

/**
 * PromotionStartRequest Class Doc Comment
 *
 * @category Class
 * @package  IdpluggerPromotionAdmin
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionStartRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'promotion_start_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'db' => '\IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequestDb',
        'user' => '\IdpluggerPromotionAdmin\Model\PromotionStartRequestUser',
        'permissions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'db' => null,
        'user' => null,
        'permissions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'db' => false,
        'user' => false,
        'permissions' => false
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
        'db' => 'db',
        'user' => 'user',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'db' => 'setDb',
        'user' => 'setUser',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'db' => 'getDb',
        'user' => 'getUser',
        'permissions' => 'getPermissions'
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

    public const PERMISSIONS_PROMOTION_USERS_INDEX = 'promotion.users.index';
    public const PERMISSIONS_PROMOTION_USERS_CREATE = 'promotion.users.create';
    public const PERMISSIONS_PROMOTION_ARTICLES_INDEX = 'promotion.articles.index';
    public const PERMISSIONS_PROMOTION_ARTICLES_CREATE = 'promotion.articles.create';
    public const PERMISSIONS_PROMOTION_ARTICLES_DELETE = 'promotion.articles.delete';
    public const PERMISSIONS_PROMOTION_AWARDEDS_INDEX = 'promotion.awardeds.index';
    public const PERMISSIONS_PROMOTION_AWARDS_INDEX = 'promotion.awards.index';
    public const PERMISSIONS_PROMOTION_AWARDS_CREATE = 'promotion.awards.create';
    public const PERMISSIONS_PROMOTION_AWARDS_DELETE = 'promotion.awards.delete';
    public const PERMISSIONS_PROMOTION_BRANDING_INDEX = 'promotion.branding.index';
    public const PERMISSIONS_PROMOTION_BRANDING_CREATE = 'promotion.branding.create';
    public const PERMISSIONS_PROMOTION_DOCUMENT_RULES_INDEX = 'promotion.document_rules.index';
    public const PERMISSIONS_PROMOTION_DOCUMENT_RULES_CREATE = 'promotion.document_rules.create';
    public const PERMISSIONS_PROMOTION_FAQ_INDEX = 'promotion.faq.index';
    public const PERMISSIONS_PROMOTION_FAQ_CREATE = 'promotion.faq.create';
    public const PERMISSIONS_PROMOTION_FAQ_DELETE = 'promotion.faq.delete';
    public const PERMISSIONS_PROMOTION_LUCKY_NUMBERS_INDEX = 'promotion.lucky_numbers.index';
    public const PERMISSIONS_PROMOTION_LUCKY_NUMBERS_CREATE = 'promotion.lucky_numbers.create';
    public const PERMISSIONS_PROMOTION_LUCKY_NUMBERS_UPDATE = 'promotion.lucky_numbers.update';
    public const PERMISSIONS_PROMOTION_LUCKY_NUMBERS_DELETE = 'promotion.lucky_numbers.delete';
    public const PERMISSIONS_PROMOTION_RAFFLES_INDEX = 'promotion.raffles.index';
    public const PERMISSIONS_PROMOTION_RAFFLES_CREATE = 'promotion.raffles.create';
    public const PERMISSIONS_PROMOTION_RAFFLES_DELETE = 'promotion.raffles.delete';
    public const PERMISSIONS_PROMOTION_TICKETS_INDEX = 'promotion.tickets.index';
    public const PERMISSIONS_PROMOTION_TICKETS_CREATE = 'promotion.tickets.create';
    public const PERMISSIONS_PROMOTION_TICKETS_DELETE = 'promotion.tickets.delete';
    public const PERMISSIONS_PROMOTION_BLACKLIST_INDEX = 'promotion.blacklist.index';
    public const PERMISSIONS_PROMOTION_BLACKLIST_CREATE = 'promotion.blacklist.create';
    public const PERMISSIONS_PROMOTION_BLACKLIST_DELETE = 'promotion.blacklist.delete';
    public const PERMISSIONS_PROMOTION_ORDERS_INDEX = 'promotion.orders.index';
    public const PERMISSIONS_PROMOTION_ORDERS_CREATE = 'promotion.orders.create';
    public const PERMISSIONS_PROMOTION_COUPONS_INDEX = 'promotion.coupons.index';
    public const PERMISSIONS_PROMOTION_COUPONS_CREATE = 'promotion.coupons.create';
    public const PERMISSIONS_PROMOTION_COUPONS_DELETE = 'promotion.coupons.delete';
    public const PERMISSIONS_PROMOTION_CONFIGS_INDEX = 'promotion.configs.index';
    public const PERMISSIONS_PROMOTION_USERS_DELETE = 'promotion.users.delete';
    public const PERMISSIONS_PROMOTION_PRODUCTS_INDEX = 'promotion.products.index';
    public const PERMISSIONS_PROMOTION_PRODUCTS_CREATE = 'promotion.products.create';
    public const PERMISSIONS_PROMOTION_PRODUCTS_DELETE = 'promotion.products.delete';
    public const PERMISSIONS_PROMOTION_STORES_INDEX = 'promotion.stores.index';
    public const PERMISSIONS_PROMOTION_STORES_CREATE = 'promotion.stores.create';
    public const PERMISSIONS_PROMOTION_STORES_DELETE = 'promotion.stores.delete';
    public const PERMISSIONS_PROMOTION_CONFIGS_WEBHOOK_CONFIG = 'promotion.configs.webhook_config';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionsAllowableValues()
    {
        return [
            self::PERMISSIONS_PROMOTION_USERS_INDEX,
            self::PERMISSIONS_PROMOTION_USERS_CREATE,
            self::PERMISSIONS_PROMOTION_ARTICLES_INDEX,
            self::PERMISSIONS_PROMOTION_ARTICLES_CREATE,
            self::PERMISSIONS_PROMOTION_ARTICLES_DELETE,
            self::PERMISSIONS_PROMOTION_AWARDEDS_INDEX,
            self::PERMISSIONS_PROMOTION_AWARDS_INDEX,
            self::PERMISSIONS_PROMOTION_AWARDS_CREATE,
            self::PERMISSIONS_PROMOTION_AWARDS_DELETE,
            self::PERMISSIONS_PROMOTION_BRANDING_INDEX,
            self::PERMISSIONS_PROMOTION_BRANDING_CREATE,
            self::PERMISSIONS_PROMOTION_DOCUMENT_RULES_INDEX,
            self::PERMISSIONS_PROMOTION_DOCUMENT_RULES_CREATE,
            self::PERMISSIONS_PROMOTION_FAQ_INDEX,
            self::PERMISSIONS_PROMOTION_FAQ_CREATE,
            self::PERMISSIONS_PROMOTION_FAQ_DELETE,
            self::PERMISSIONS_PROMOTION_LUCKY_NUMBERS_INDEX,
            self::PERMISSIONS_PROMOTION_LUCKY_NUMBERS_CREATE,
            self::PERMISSIONS_PROMOTION_LUCKY_NUMBERS_UPDATE,
            self::PERMISSIONS_PROMOTION_LUCKY_NUMBERS_DELETE,
            self::PERMISSIONS_PROMOTION_RAFFLES_INDEX,
            self::PERMISSIONS_PROMOTION_RAFFLES_CREATE,
            self::PERMISSIONS_PROMOTION_RAFFLES_DELETE,
            self::PERMISSIONS_PROMOTION_TICKETS_INDEX,
            self::PERMISSIONS_PROMOTION_TICKETS_CREATE,
            self::PERMISSIONS_PROMOTION_TICKETS_DELETE,
            self::PERMISSIONS_PROMOTION_BLACKLIST_INDEX,
            self::PERMISSIONS_PROMOTION_BLACKLIST_CREATE,
            self::PERMISSIONS_PROMOTION_BLACKLIST_DELETE,
            self::PERMISSIONS_PROMOTION_ORDERS_INDEX,
            self::PERMISSIONS_PROMOTION_ORDERS_CREATE,
            self::PERMISSIONS_PROMOTION_COUPONS_INDEX,
            self::PERMISSIONS_PROMOTION_COUPONS_CREATE,
            self::PERMISSIONS_PROMOTION_COUPONS_DELETE,
            self::PERMISSIONS_PROMOTION_CONFIGS_INDEX,
            self::PERMISSIONS_PROMOTION_USERS_DELETE,
            self::PERMISSIONS_PROMOTION_PRODUCTS_INDEX,
            self::PERMISSIONS_PROMOTION_PRODUCTS_CREATE,
            self::PERMISSIONS_PROMOTION_PRODUCTS_DELETE,
            self::PERMISSIONS_PROMOTION_STORES_INDEX,
            self::PERMISSIONS_PROMOTION_STORES_CREATE,
            self::PERMISSIONS_PROMOTION_STORES_DELETE,
            self::PERMISSIONS_PROMOTION_CONFIGS_WEBHOOK_CONFIG,
        ];
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
        $this->setIfExists('db', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
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
     * Gets db
     *
     * @return \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequestDb|null
     */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
     * Sets db
     *
     * @param \IdpluggerPromotionAdmin\Model\PromotionPullConfigurationRequestDb|null $db db
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
     * Gets user
     *
     * @return \IdpluggerPromotionAdmin\Model\PromotionStartRequestUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \IdpluggerPromotionAdmin\Model\PromotionStartRequestUser|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return string[]|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param string[]|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $allowedValues = $this->getPermissionsAllowableValues();
        if (array_diff($permissions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'permissions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permissions'] = $permissions;

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


