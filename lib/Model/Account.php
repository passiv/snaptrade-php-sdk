<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @description A single account at a brokerage.
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'brokerage_authorization' => 'string',
        'name' => 'string',
        'number' => 'string',
        'institution_name' => 'string',
        'created_date' => '\DateTime',
        'sync_status' => '\SnapTrade\Model\AccountSyncStatus',
        'balance' => '\SnapTrade\Model\AccountBalance',
        'raw_type' => 'string',
        'meta' => 'array<string,mixed>',
        'portfolio_group' => 'string',
        'cash_restrictions' => 'string[]'
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
        'brokerage_authorization' => 'uuid',
        'name' => null,
        'number' => null,
        'institution_name' => null,
        'created_date' => 'date-time',
        'sync_status' => null,
        'balance' => null,
        'raw_type' => null,
        'meta' => null,
        'portfolio_group' => 'uuid',
        'cash_restrictions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'brokerage_authorization' => false,
		'name' => true,
		'number' => false,
		'institution_name' => false,
		'created_date' => false,
		'sync_status' => false,
		'balance' => false,
		'raw_type' => true,
		'meta' => false,
		'portfolio_group' => false,
		'cash_restrictions' => false
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
        'brokerage_authorization' => 'brokerage_authorization',
        'name' => 'name',
        'number' => 'number',
        'institution_name' => 'institution_name',
        'created_date' => 'created_date',
        'sync_status' => 'sync_status',
        'balance' => 'balance',
        'raw_type' => 'raw_type',
        'meta' => 'meta',
        'portfolio_group' => 'portfolio_group',
        'cash_restrictions' => 'cash_restrictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'brokerage_authorization' => 'setBrokerageAuthorization',
        'name' => 'setName',
        'number' => 'setNumber',
        'institution_name' => 'setInstitutionName',
        'created_date' => 'setCreatedDate',
        'sync_status' => 'setSyncStatus',
        'balance' => 'setBalance',
        'raw_type' => 'setRawType',
        'meta' => 'setMeta',
        'portfolio_group' => 'setPortfolioGroup',
        'cash_restrictions' => 'setCashRestrictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'brokerage_authorization' => 'getBrokerageAuthorization',
        'name' => 'getName',
        'number' => 'getNumber',
        'institution_name' => 'getInstitutionName',
        'created_date' => 'getCreatedDate',
        'sync_status' => 'getSyncStatus',
        'balance' => 'getBalance',
        'raw_type' => 'getRawType',
        'meta' => 'getMeta',
        'portfolio_group' => 'getPortfolioGroup',
        'cash_restrictions' => 'getCashRestrictions'
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
        $this->setIfExists('brokerage_authorization', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('institution_name', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('sync_status', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('raw_type', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('portfolio_group', $data ?? [], null);
        $this->setIfExists('cash_restrictions', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['brokerage_authorization'] === null) {
            $invalidProperties[] = "'brokerage_authorization' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['institution_name'] === null) {
            $invalidProperties[] = "'institution_name' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['sync_status'] === null) {
            $invalidProperties[] = "'sync_status' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier for the connected brokerage account. This is the UUID used to reference the account in SnapTrade. This ID should not change for as long as the connection stays active. If the connection is deleted and re-added, a new account ID will be generated.
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
     * Gets brokerage_authorization
     *
     * @return string
     */
    public function getBrokerageAuthorization()
    {
        return $this->container['brokerage_authorization'];
    }

    /**
     * Sets brokerage_authorization
     *
     * @param string $brokerage_authorization Unique identifier for the connection. This is the UUID used to reference the connection in SnapTrade.
     *
     * @return self
     */
    public function setBrokerageAuthorization($brokerage_authorization)
    {

        if (is_null($brokerage_authorization)) {
            throw new \InvalidArgumentException('non-nullable brokerage_authorization cannot be null');
        }

        $this->container['brokerage_authorization'] = $brokerage_authorization;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A display name for the account. Either assigned by the user or by the brokerage itself. For certain brokerages, SnapTrade appends the brokerage name to the account name for clarity.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The account number assigned by the brokerage. For some brokerages, this field may be masked for security reasons.
     *
     * @return self
     */
    public function setNumber($number)
    {

        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets institution_name
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->container['institution_name'];
    }

    /**
     * Sets institution_name
     *
     * @param string $institution_name The name of the brokerage that holds the account.
     *
     * @return self
     */
    public function setInstitutionName($institution_name)
    {

        if (is_null($institution_name)) {
            throw new \InvalidArgumentException('non-nullable institution_name cannot be null');
        }

        $this->container['institution_name'] = $institution_name;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date Timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format indicating when the account was created in SnapTrade. This is _not_ the account opening date at the brokerage.
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
     * Gets sync_status
     *
     * @return \SnapTrade\Model\AccountSyncStatus
     */
    public function getSyncStatus()
    {
        return $this->container['sync_status'];
    }

    /**
     * Sets sync_status
     *
     * @param \SnapTrade\Model\AccountSyncStatus $sync_status sync_status
     *
     * @return self
     */
    public function setSyncStatus($sync_status)
    {

        if (is_null($sync_status)) {
            throw new \InvalidArgumentException('non-nullable sync_status cannot be null');
        }

        $this->container['sync_status'] = $sync_status;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \SnapTrade\Model\AccountBalance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \SnapTrade\Model\AccountBalance $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {

        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }

        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets raw_type
     *
     * @return string|null
     */
    public function getRawType()
    {
        return $this->container['raw_type'];
    }

    /**
     * Sets raw_type
     *
     * @param string|null $raw_type The account type as provided by the brokerage
     *
     * @return self
     */
    public function setRawType($raw_type)
    {

        if (is_null($raw_type)) {
            array_push($this->openAPINullablesSetToNull, 'raw_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('raw_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['raw_type'] = $raw_type;

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
     * @param array<string,mixed>|null $meta Additional information about the account, such as account type, status, etc. This information is specific to the brokerage and there's no standard format for this data. This field is deprecated and subject to removal in a future version.
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
     * Gets portfolio_group
     *
     * @return string|null
     * @deprecated
     */
    public function getPortfolioGroup()
    {
        return $this->container['portfolio_group'];
    }

    /**
     * Sets portfolio_group
     *
     * @param string|null $portfolio_group Portfolio Group ID. Portfolio Groups have been deprecated. Please contact support if you have a usecase for it.
     *
     * @return self
     * @deprecated
     */
    public function setPortfolioGroup($portfolio_group)
    {

        if (is_null($portfolio_group)) {
            throw new \InvalidArgumentException('non-nullable portfolio_group cannot be null');
        }

        $this->container['portfolio_group'] = $portfolio_group;

        return $this;
    }

    /**
     * Gets cash_restrictions
     *
     * @return string[]|null
     * @deprecated
     */
    public function getCashRestrictions()
    {
        return $this->container['cash_restrictions'];
    }

    /**
     * Sets cash_restrictions
     *
     * @param string[]|null $cash_restrictions This field is deprecated.
     *
     * @return self
     * @deprecated
     */
    public function setCashRestrictions($cash_restrictions)
    {

        if (is_null($cash_restrictions)) {
            throw new \InvalidArgumentException('non-nullable cash_restrictions cannot be null');
        }

        $this->container['cash_restrictions'] = $cash_restrictions;

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


