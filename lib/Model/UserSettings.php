<?php
/**
 * UserSettings
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
 * UserSettings Class Doc Comment
 *
 * @category Class
 * @description User account settings
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class UserSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'name' => 'string',
        'receive_cash_notification' => 'bool',
        'receive_drift_notification' => 'bool',
        'user_trial_activated' => 'bool',
        'activated_trial_date' => 'string',
        'demo' => 'bool',
        'api_enabled' => 'bool',
        'drift_threshold' => 'float',
        'preferred_currency' => '\SnapTrade\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'name' => null,
        'receive_cash_notification' => null,
        'receive_drift_notification' => null,
        'user_trial_activated' => null,
        'activated_trial_date' => 'dateTime',
        'demo' => null,
        'api_enabled' => null,
        'drift_threshold' => null,
        'preferred_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'name' => false,
		'receive_cash_notification' => false,
		'receive_drift_notification' => false,
		'user_trial_activated' => false,
		'activated_trial_date' => false,
		'demo' => false,
		'api_enabled' => false,
		'drift_threshold' => false,
		'preferred_currency' => false
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
        'email' => 'email',
        'name' => 'name',
        'receive_cash_notification' => 'receive_cash_notification',
        'receive_drift_notification' => 'receive_drift_notification',
        'user_trial_activated' => 'user_trial_activated',
        'activated_trial_date' => 'activated_trial_date',
        'demo' => 'demo',
        'api_enabled' => 'api_enabled',
        'drift_threshold' => 'drift_threshold',
        'preferred_currency' => 'preferred_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'name' => 'setName',
        'receive_cash_notification' => 'setReceiveCashNotification',
        'receive_drift_notification' => 'setReceiveDriftNotification',
        'user_trial_activated' => 'setUserTrialActivated',
        'activated_trial_date' => 'setActivatedTrialDate',
        'demo' => 'setDemo',
        'api_enabled' => 'setApiEnabled',
        'drift_threshold' => 'setDriftThreshold',
        'preferred_currency' => 'setPreferredCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'name' => 'getName',
        'receive_cash_notification' => 'getReceiveCashNotification',
        'receive_drift_notification' => 'getReceiveDriftNotification',
        'user_trial_activated' => 'getUserTrialActivated',
        'activated_trial_date' => 'getActivatedTrialDate',
        'demo' => 'getDemo',
        'api_enabled' => 'getApiEnabled',
        'drift_threshold' => 'getDriftThreshold',
        'preferred_currency' => 'getPreferredCurrency'
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('receive_cash_notification', $data ?? [], null);
        $this->setIfExists('receive_drift_notification', $data ?? [], null);
        $this->setIfExists('user_trial_activated', $data ?? [], null);
        $this->setIfExists('activated_trial_date', $data ?? [], null);
        $this->setIfExists('demo', $data ?? [], null);
        $this->setIfExists('api_enabled', $data ?? [], null);
        $this->setIfExists('drift_threshold', $data ?? [], null);
        $this->setIfExists('preferred_currency', $data ?? [], null);
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

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
     * Gets receive_cash_notification
     *
     * @return bool|null
     */
    public function getReceiveCashNotification()
    {
        return $this->container['receive_cash_notification'];
    }

    /**
     * Sets receive_cash_notification
     *
     * @param bool|null $receive_cash_notification receive_cash_notification
     *
     * @return self
     */
    public function setReceiveCashNotification($receive_cash_notification)
    {

        if (is_null($receive_cash_notification)) {
            throw new \InvalidArgumentException('non-nullable receive_cash_notification cannot be null');
        }

        $this->container['receive_cash_notification'] = $receive_cash_notification;

        return $this;
    }

    /**
     * Gets receive_drift_notification
     *
     * @return bool|null
     */
    public function getReceiveDriftNotification()
    {
        return $this->container['receive_drift_notification'];
    }

    /**
     * Sets receive_drift_notification
     *
     * @param bool|null $receive_drift_notification receive_drift_notification
     *
     * @return self
     */
    public function setReceiveDriftNotification($receive_drift_notification)
    {

        if (is_null($receive_drift_notification)) {
            throw new \InvalidArgumentException('non-nullable receive_drift_notification cannot be null');
        }

        $this->container['receive_drift_notification'] = $receive_drift_notification;

        return $this;
    }

    /**
     * Gets user_trial_activated
     *
     * @return bool|null
     */
    public function getUserTrialActivated()
    {
        return $this->container['user_trial_activated'];
    }

    /**
     * Sets user_trial_activated
     *
     * @param bool|null $user_trial_activated user_trial_activated
     *
     * @return self
     */
    public function setUserTrialActivated($user_trial_activated)
    {

        if (is_null($user_trial_activated)) {
            throw new \InvalidArgumentException('non-nullable user_trial_activated cannot be null');
        }

        $this->container['user_trial_activated'] = $user_trial_activated;

        return $this;
    }

    /**
     * Gets activated_trial_date
     *
     * @return string|null
     */
    public function getActivatedTrialDate()
    {
        return $this->container['activated_trial_date'];
    }

    /**
     * Sets activated_trial_date
     *
     * @param string|null $activated_trial_date activated_trial_date
     *
     * @return self
     */
    public function setActivatedTrialDate($activated_trial_date)
    {

        if (is_null($activated_trial_date)) {
            throw new \InvalidArgumentException('non-nullable activated_trial_date cannot be null');
        }

        $this->container['activated_trial_date'] = $activated_trial_date;

        return $this;
    }

    /**
     * Gets demo
     *
     * @return bool|null
     */
    public function getDemo()
    {
        return $this->container['demo'];
    }

    /**
     * Sets demo
     *
     * @param bool|null $demo demo
     *
     * @return self
     */
    public function setDemo($demo)
    {

        if (is_null($demo)) {
            throw new \InvalidArgumentException('non-nullable demo cannot be null');
        }

        $this->container['demo'] = $demo;

        return $this;
    }

    /**
     * Gets api_enabled
     *
     * @return bool|null
     */
    public function getApiEnabled()
    {
        return $this->container['api_enabled'];
    }

    /**
     * Sets api_enabled
     *
     * @param bool|null $api_enabled api_enabled
     *
     * @return self
     */
    public function setApiEnabled($api_enabled)
    {

        if (is_null($api_enabled)) {
            throw new \InvalidArgumentException('non-nullable api_enabled cannot be null');
        }

        $this->container['api_enabled'] = $api_enabled;

        return $this;
    }

    /**
     * Gets drift_threshold
     *
     * @return float|null
     */
    public function getDriftThreshold()
    {
        return $this->container['drift_threshold'];
    }

    /**
     * Sets drift_threshold
     *
     * @param float|null $drift_threshold drift_threshold
     *
     * @return self
     */
    public function setDriftThreshold($drift_threshold)
    {

        if (is_null($drift_threshold)) {
            throw new \InvalidArgumentException('non-nullable drift_threshold cannot be null');
        }

        $this->container['drift_threshold'] = $drift_threshold;

        return $this;
    }

    /**
     * Gets preferred_currency
     *
     * @return \SnapTrade\Model\Currency|null
     */
    public function getPreferredCurrency()
    {
        return $this->container['preferred_currency'];
    }

    /**
     * Sets preferred_currency
     *
     * @param \SnapTrade\Model\Currency|null $preferred_currency preferred_currency
     *
     * @return self
     */
    public function setPreferredCurrency($preferred_currency)
    {

        if (is_null($preferred_currency)) {
            throw new \InvalidArgumentException('non-nullable preferred_currency cannot be null');
        }

        $this->container['preferred_currency'] = $preferred_currency;

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


