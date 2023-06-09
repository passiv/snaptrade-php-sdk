<?php
/**
 * ConnectionsSessionEvents200ResponseInner
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
 * ConnectionsSessionEvents200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class ConnectionsSessionEvents200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Connections_sessionEvents_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'session_event_type' => 'string',
        'session_id' => 'string',
        'user_id' => 'string',
        'created_date' => 'string',
        'brokerage_status_code' => 'int',
        'brokerage_authorization_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'session_event_type' => null,
        'session_id' => 'uuid',
        'user_id' => null,
        'created_date' => null,
        'brokerage_status_code' => null,
        'brokerage_authorization_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'session_event_type' => false,
		'session_id' => false,
		'user_id' => false,
		'created_date' => false,
		'brokerage_status_code' => true,
		'brokerage_authorization_id' => false
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
        'session_event_type' => 'session_event_type',
        'session_id' => 'session_id',
        'user_id' => 'user_id',
        'created_date' => 'created_date',
        'brokerage_status_code' => 'brokerage_status_code',
        'brokerage_authorization_id' => 'brokerage_authorization_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'session_event_type' => 'setSessionEventType',
        'session_id' => 'setSessionId',
        'user_id' => 'setUserId',
        'created_date' => 'setCreatedDate',
        'brokerage_status_code' => 'setBrokerageStatusCode',
        'brokerage_authorization_id' => 'setBrokerageAuthorizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'session_event_type' => 'getSessionEventType',
        'session_id' => 'getSessionId',
        'user_id' => 'getUserId',
        'created_date' => 'getCreatedDate',
        'brokerage_status_code' => 'getBrokerageStatusCode',
        'brokerage_authorization_id' => 'getBrokerageAuthorizationId'
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

    public const SESSION_EVENT_TYPE_CONNECTION_FAILED = 'CONNECTION_FAILED';
    public const SESSION_EVENT_TYPE_DISCLAIMER_ACCEPTED = 'DISCLAIMER_ACCEPTED';
    public const SESSION_EVENT_TYPE_BROKERAGE_CONNECTION_INITIATED = 'BROKERAGE_CONNECTION_INITIATED';
    public const SESSION_EVENT_TYPE_BROKERAGE_AUTHENTICATION = 'BROKERAGE_AUTHENTICATION';
    public const SESSION_EVENT_TYPE_MFA_AUTHORIZATION = 'MFA_AUTHORIZATION';
    public const SESSION_EVENT_TYPE_CONNECTION_SUCCESSFUL = 'CONNECTION_SUCCESSFUL';
    public const SESSION_EVENT_TYPE_PARTNER_REDIRECT = 'PARTNER_REDIRECT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSessionEventTypeAllowableValues()
    {
        return [
            self::SESSION_EVENT_TYPE_CONNECTION_FAILED,
            self::SESSION_EVENT_TYPE_DISCLAIMER_ACCEPTED,
            self::SESSION_EVENT_TYPE_BROKERAGE_CONNECTION_INITIATED,
            self::SESSION_EVENT_TYPE_BROKERAGE_AUTHENTICATION,
            self::SESSION_EVENT_TYPE_MFA_AUTHORIZATION,
            self::SESSION_EVENT_TYPE_CONNECTION_SUCCESSFUL,
            self::SESSION_EVENT_TYPE_PARTNER_REDIRECT,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('session_event_type', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('brokerage_status_code', $data ?? [], null);
        $this->setIfExists('brokerage_authorization_id', $data ?? [], null);
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

        $allowedValues = $this->getSessionEventTypeAllowableValues();
        if (!is_null($this->container['session_event_type']) && !in_array($this->container['session_event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'session_event_type', must be one of '%s'",
                $this->container['session_event_type'],
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
     * @param string|null $id id
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
     * Gets session_event_type
     *
     * @return string|null
     */
    public function getSessionEventType()
    {
        return $this->container['session_event_type'];
    }

    /**
     * Sets session_event_type
     *
     * @param string|null $session_event_type session_event_type
     *
     * @return self
     */
    public function setSessionEventType($session_event_type)
    {
        $allowedValues = $this->getSessionEventTypeAllowableValues();
        if (!is_null($session_event_type) && !in_array($session_event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'session_event_type', must be one of '%s'",
                    $session_event_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($session_event_type)) {
            throw new \InvalidArgumentException('non-nullable session_event_type cannot be null');
        }

        $this->container['session_event_type'] = $session_event_type;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id session_id
     *
     * @return self
     */
    public function setSessionId($session_id)
    {

        if (is_null($session_id)) {
            throw new \InvalidArgumentException('non-nullable session_id cannot be null');
        }

        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id SnapTrade User ID. Provided by SnapTrade Partner. Can be any string, as long as it's unique to a user
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date Time
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {

        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }

        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets brokerage_status_code
     *
     * @return int|null
     */
    public function getBrokerageStatusCode()
    {
        return $this->container['brokerage_status_code'];
    }

    /**
     * Sets brokerage_status_code
     *
     * @param int|null $brokerage_status_code brokerage_status_code
     *
     * @return self
     */
    public function setBrokerageStatusCode($brokerage_status_code)
    {

        if (is_null($brokerage_status_code)) {
            array_push($this->openAPINullablesSetToNull, 'brokerage_status_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brokerage_status_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['brokerage_status_code'] = $brokerage_status_code;

        return $this;
    }

    /**
     * Gets brokerage_authorization_id
     *
     * @return string|null
     */
    public function getBrokerageAuthorizationId()
    {
        return $this->container['brokerage_authorization_id'];
    }

    /**
     * Sets brokerage_authorization_id
     *
     * @param string|null $brokerage_authorization_id brokerage_authorization_id
     *
     * @return self
     */
    public function setBrokerageAuthorizationId($brokerage_authorization_id)
    {

        if (is_null($brokerage_authorization_id)) {
            throw new \InvalidArgumentException('non-nullable brokerage_authorization_id cannot be null');
        }

        $this->container['brokerage_authorization_id'] = $brokerage_authorization_id;

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


