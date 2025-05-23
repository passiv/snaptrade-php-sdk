<?php
/**
 * SnapTradeLoginUserRequestBody
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Model;

use \ArrayAccess;
use \SnapTrade\ObjectSerializer;

/**
 * SnapTradeLoginUserRequestBody Class Doc Comment
 *
 * @category Class
 * @description Data to login a user via SnapTrade Partner
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class SnapTradeLoginUserRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SnapTradeLoginUserRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'broker' => 'string',
        'immediate_redirect' => 'bool',
        'custom_redirect' => 'string',
        'reconnect' => 'string',
        'connection_type' => 'string',
        'connection_portal_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'broker' => null,
        'immediate_redirect' => null,
        'custom_redirect' => null,
        'reconnect' => null,
        'connection_type' => null,
        'connection_portal_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'broker' => false,
		'immediate_redirect' => false,
		'custom_redirect' => false,
		'reconnect' => false,
		'connection_type' => false,
		'connection_portal_version' => false
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
        'broker' => 'broker',
        'immediate_redirect' => 'immediateRedirect',
        'custom_redirect' => 'customRedirect',
        'reconnect' => 'reconnect',
        'connection_type' => 'connectionType',
        'connection_portal_version' => 'connectionPortalVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'broker' => 'setBroker',
        'immediate_redirect' => 'setImmediateRedirect',
        'custom_redirect' => 'setCustomRedirect',
        'reconnect' => 'setReconnect',
        'connection_type' => 'setConnectionType',
        'connection_portal_version' => 'setConnectionPortalVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'broker' => 'getBroker',
        'immediate_redirect' => 'getImmediateRedirect',
        'custom_redirect' => 'getCustomRedirect',
        'reconnect' => 'getReconnect',
        'connection_type' => 'getConnectionType',
        'connection_portal_version' => 'getConnectionPortalVersion'
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

    public const CONNECTION_TYPE_READ = 'read';
    public const CONNECTION_TYPE_TRADE = 'trade';
    public const CONNECTION_PORTAL_VERSION_V4 = 'v4';
    public const CONNECTION_PORTAL_VERSION_V3 = 'v3';
    public const CONNECTION_PORTAL_VERSION_V2 = 'v2';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionTypeAllowableValues()
    {
        return [
            self::CONNECTION_TYPE_READ,
            self::CONNECTION_TYPE_TRADE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionPortalVersionAllowableValues()
    {
        return [
            self::CONNECTION_PORTAL_VERSION_V4,
            self::CONNECTION_PORTAL_VERSION_V3,
            self::CONNECTION_PORTAL_VERSION_V2,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('broker', $data ?? [], null);
        $this->setIfExists('immediate_redirect', $data ?? [], null);
        $this->setIfExists('custom_redirect', $data ?? [], null);
        $this->setIfExists('reconnect', $data ?? [], null);
        $this->setIfExists('connection_type', $data ?? [], 'read');
        $this->setIfExists('connection_portal_version', $data ?? [], 'v4');
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

        $allowedValues = $this->getConnectionTypeAllowableValues();
        if (!is_null($this->container['connection_type']) && !in_array($this->container['connection_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'connection_type', must be one of '%s'",
                $this->container['connection_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConnectionPortalVersionAllowableValues();
        if (!is_null($this->container['connection_portal_version']) && !in_array($this->container['connection_portal_version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'connection_portal_version', must be one of '%s'",
                $this->container['connection_portal_version'],
                implode("', '", $allowedValues)
            );
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
     * Gets broker
     *
     * @return string|null
     */
    public function getBroker()
    {
        return $this->container['broker'];
    }

    /**
     * Sets broker
     *
     * @param string|null $broker Slug of the brokerage to connect the user to. See [the integrations page](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=3cfea70ef4254afc89704e47275a7a9a&pvs=4) for a list of supported brokerages and their slugs.
     *
     * @return self
     */
    public function setBroker($broker)
    {

        if (is_null($broker)) {
            throw new \InvalidArgumentException('non-nullable broker cannot be null');
        }

        $this->container['broker'] = $broker;

        return $this;
    }

    /**
     * Gets immediate_redirect
     *
     * @return bool|null
     */
    public function getImmediateRedirect()
    {
        return $this->container['immediate_redirect'];
    }

    /**
     * Sets immediate_redirect
     *
     * @param bool|null $immediate_redirect When set to `true`, user will be redirected back to the partner's site instead of the connection portal. This parameter is ignored if the connection portal is loaded inside an iframe. See the [guide on ways to integrate the connection portal](/docs/implement-connection-portal) for more information.
     *
     * @return self
     */
    public function setImmediateRedirect($immediate_redirect)
    {

        if (is_null($immediate_redirect)) {
            throw new \InvalidArgumentException('non-nullable immediate_redirect cannot be null');
        }

        $this->container['immediate_redirect'] = $immediate_redirect;

        return $this;
    }

    /**
     * Gets custom_redirect
     *
     * @return string|null
     */
    public function getCustomRedirect()
    {
        return $this->container['custom_redirect'];
    }

    /**
     * Sets custom_redirect
     *
     * @param string|null $custom_redirect URL to redirect the user to after the user connects their brokerage account. This parameter is ignored if the connection portal is loaded inside an iframe. See the [guide on ways to integrate the connection portal](/docs/implement-connection-portal) for more information.
     *
     * @return self
     */
    public function setCustomRedirect($custom_redirect)
    {

        if (is_null($custom_redirect)) {
            throw new \InvalidArgumentException('non-nullable custom_redirect cannot be null');
        }

        $this->container['custom_redirect'] = $custom_redirect;

        return $this;
    }

    /**
     * Gets reconnect
     *
     * @return string|null
     */
    public function getReconnect()
    {
        return $this->container['reconnect'];
    }

    /**
     * Sets reconnect
     *
     * @param string|null $reconnect The UUID of the brokerage connection to be reconnected. This parameter should be left empty unless you are reconnecting a disabled connection. See the [guide on fixing broken connections](/docs/fix-broken-connections) for more information.
     *
     * @return self
     */
    public function setReconnect($reconnect)
    {

        if (is_null($reconnect)) {
            throw new \InvalidArgumentException('non-nullable reconnect cannot be null');
        }

        $this->container['reconnect'] = $reconnect;

        return $this;
    }

    /**
     * Gets connection_type
     *
     * @return string|null
     */
    public function getConnectionType()
    {
        return $this->container['connection_type'];
    }

    /**
     * Sets connection_type
     *
     * @param string|null $connection_type Sets whether the connection should be read-only or trade-enabled. Defaults to read-only if not specified.
     *
     * @return self
     */
    public function setConnectionType($connection_type)
    {
        $allowedValues = $this->getConnectionTypeAllowableValues();
        if (!is_null($connection_type) && !in_array($connection_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'connection_type', must be one of '%s'",
                    $connection_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($connection_type)) {
            throw new \InvalidArgumentException('non-nullable connection_type cannot be null');
        }

        $this->container['connection_type'] = $connection_type;

        return $this;
    }

    /**
     * Gets connection_portal_version
     *
     * @return string|null
     */
    public function getConnectionPortalVersion()
    {
        return $this->container['connection_portal_version'];
    }

    /**
     * Sets connection_portal_version
     *
     * @param string|null $connection_portal_version Sets the connection portal version to render. Currently only v4 is supported and is the default. All other versions are deprecated and will automatically be set to v4.
     *
     * @return self
     */
    public function setConnectionPortalVersion($connection_portal_version)
    {
        $allowedValues = $this->getConnectionPortalVersionAllowableValues();
        if (!is_null($connection_portal_version) && !in_array($connection_portal_version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'connection_portal_version', must be one of '%s'",
                    $connection_portal_version,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($connection_portal_version)) {
            throw new \InvalidArgumentException('non-nullable connection_portal_version cannot be null');
        }

        $this->container['connection_portal_version'] = $connection_portal_version;

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


