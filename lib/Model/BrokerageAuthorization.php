<?php
/**
 * BrokerageAuthorization
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
 * BrokerageAuthorization Class Doc Comment
 *
 * @category Class
 * @description A single connection with a brokerage. Note that &#x60;Connection&#x60; and &#x60;Brokerage Authorization&#x60; are interchangeable, but the term &#x60;Connection&#x60; is preferred and used in the doc for consistency.  A connection is usually tied to a single login at a brokerage. A single connection can contain multiple brokerage accounts.  SnapTrade performs de-duping on connections for a given user. If the user has an existing connection with the brokerage, when connecting the brokerage with the same credentials, SnapTrade will return the existing connection instead of creating a new one.
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class BrokerageAuthorization implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrokerageAuthorization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => '\DateTime',
        'brokerage' => '\SnapTrade\Model\Brokerage',
        'name' => 'string',
        'type' => 'string',
        'disabled' => 'bool',
        'disabled_date' => '\DateTime',
        'meta' => 'array<string,mixed>',
        'updated_date' => '\DateTime'
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
        'created_date' => 'date-time',
        'brokerage' => null,
        'name' => null,
        'type' => null,
        'disabled' => null,
        'disabled_date' => 'date-time',
        'meta' => null,
        'updated_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_date' => false,
		'brokerage' => false,
		'name' => false,
		'type' => false,
		'disabled' => false,
		'disabled_date' => true,
		'meta' => false,
		'updated_date' => false
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
        'created_date' => 'created_date',
        'brokerage' => 'brokerage',
        'name' => 'name',
        'type' => 'type',
        'disabled' => 'disabled',
        'disabled_date' => 'disabled_date',
        'meta' => 'meta',
        'updated_date' => 'updated_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'brokerage' => 'setBrokerage',
        'name' => 'setName',
        'type' => 'setType',
        'disabled' => 'setDisabled',
        'disabled_date' => 'setDisabledDate',
        'meta' => 'setMeta',
        'updated_date' => 'setUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'brokerage' => 'getBrokerage',
        'name' => 'getName',
        'type' => 'getType',
        'disabled' => 'getDisabled',
        'disabled_date' => 'getDisabledDate',
        'meta' => 'getMeta',
        'updated_date' => 'getUpdatedDate'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('brokerage', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('disabled', $data ?? [], null);
        $this->setIfExists('disabled_date', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('updated_date', $data ?? [], null);
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
     * @param string|null $id Unique identifier for the connection. This is the UUID used to reference the connection in SnapTrade.
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
     * Gets created_date
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime|null $created_date Timestamp of when the connection was established in SnapTrade.
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
     * Gets brokerage
     *
     * @return \SnapTrade\Model\Brokerage|null
     */
    public function getBrokerage()
    {
        return $this->container['brokerage'];
    }

    /**
     * Sets brokerage
     *
     * @param \SnapTrade\Model\Brokerage|null $brokerage brokerage
     *
     * @return self
     */
    public function setBrokerage($brokerage)
    {

        if (is_null($brokerage)) {
            throw new \InvalidArgumentException('non-nullable brokerage cannot be null');
        }

        $this->container['brokerage'] = $brokerage;

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
     * @param string|null $name A short, human-readable name for the connection.
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Whether the connection is read-only or trade-enabled. A read-only connection can only be used to fetch data, while a trade-enabled connection can be used to place trades. Valid values are `read` and `trade`.
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled Whether the connection is disabled. A disabled connection can no longer access the latest data from the brokerage, but will continue to return the last cached state. A connection can become disabled for many reasons and differs by brokerage. Here are some common scenarios:  - The user has changed their username or password at the brokerage. - The user has explicitly removed the access grant at the brokerage. - The session has expired at the brokerage and now requires explicit user re-authentication.  Please see [this guide](/docs/fix-broken-connections) on how to fix a disabled connection.
     *
     * @return self
     */
    public function setDisabled($disabled)
    {

        if (is_null($disabled)) {
            throw new \InvalidArgumentException('non-nullable disabled cannot be null');
        }

        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets disabled_date
     *
     * @return \DateTime|null
     */
    public function getDisabledDate()
    {
        return $this->container['disabled_date'];
    }

    /**
     * Sets disabled_date
     *
     * @param \DateTime|null $disabled_date Timestamp of when the connection was disabled in SnapTrade.
     *
     * @return self
     */
    public function setDisabledDate($disabled_date)
    {

        if (is_null($disabled_date)) {
            array_push($this->openAPINullablesSetToNull, 'disabled_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('disabled_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['disabled_date'] = $disabled_date;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return array<string,mixed>|null
     * @deprecated
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param array<string,mixed>|null $meta Additional data about the connection. This information is specific to the brokerage and there's no standard format for this data. This field is deprecated and subject to removal in a future version.
     *
     * @return self
     * @deprecated
     */
    public function setMeta($meta)
    {

        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return \DateTime|null
     * @deprecated
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param \DateTime|null $updated_date Timestamp of when the connection was last updated in SnapTrade. This field is deprecated. Please let us know if you have a valid use case for this field.
     *
     * @return self
     * @deprecated
     */
    public function setUpdatedDate($updated_date)
    {

        if (is_null($updated_date)) {
            throw new \InvalidArgumentException('non-nullable updated_date cannot be null');
        }

        $this->container['updated_date'] = $updated_date;

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


