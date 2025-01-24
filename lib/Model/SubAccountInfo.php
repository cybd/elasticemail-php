<?php
/**
 * SubAccountInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Elastic Email REST API
 *
 * This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.    Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.    The API has a limit of 20 concurrent connections and a hard timeout of 600 seconds per request.    To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://app.elasticemail.com/marketing/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.    Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>
 *
 * The version of the OpenAPI document: 4.0.0
 * Contact: support@elasticemail.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ElasticEmail\Model;

use \ArrayAccess;
use \ElasticEmail\ObjectSerializer;

/**
 * SubAccountInfo Class Doc Comment
 *
 * @category Class
 * @description Detailed information about SubAccount.
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubAccountInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubAccountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'public_account_id' => 'string',
        'email' => 'string',
        'settings' => '\ElasticEmail\Model\SubaccountSettingsInfo',
        'last_activity' => '\DateTime',
        'email_credits' => 'int',
        'total_emails_sent' => 'int',
        'reputation' => 'float',
        'status' => '\ElasticEmail\Model\AccountStatusEnum',
        'contacts_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'public_account_id' => 'string',
        'email' => 'string',
        'settings' => null,
        'last_activity' => 'date-time',
        'email_credits' => 'int32',
        'total_emails_sent' => 'int64',
        'reputation' => 'double',
        'status' => null,
        'contacts_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'public_account_id' => false,
        'email' => false,
        'settings' => false,
        'last_activity' => false,
        'email_credits' => false,
        'total_emails_sent' => false,
        'reputation' => false,
        'status' => false,
        'contacts_count' => false
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
        'public_account_id' => 'PublicAccountID',
        'email' => 'Email',
        'settings' => 'Settings',
        'last_activity' => 'LastActivity',
        'email_credits' => 'EmailCredits',
        'total_emails_sent' => 'TotalEmailsSent',
        'reputation' => 'Reputation',
        'status' => 'Status',
        'contacts_count' => 'ContactsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'public_account_id' => 'setPublicAccountId',
        'email' => 'setEmail',
        'settings' => 'setSettings',
        'last_activity' => 'setLastActivity',
        'email_credits' => 'setEmailCredits',
        'total_emails_sent' => 'setTotalEmailsSent',
        'reputation' => 'setReputation',
        'status' => 'setStatus',
        'contacts_count' => 'setContactsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'public_account_id' => 'getPublicAccountId',
        'email' => 'getEmail',
        'settings' => 'getSettings',
        'last_activity' => 'getLastActivity',
        'email_credits' => 'getEmailCredits',
        'total_emails_sent' => 'getTotalEmailsSent',
        'reputation' => 'getReputation',
        'status' => 'getStatus',
        'contacts_count' => 'getContactsCount'
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
    public function __construct(?array $data = null)
    {
        $this->setIfExists('public_account_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('settings', $data ?? [], null);
        $this->setIfExists('last_activity', $data ?? [], null);
        $this->setIfExists('email_credits', $data ?? [], null);
        $this->setIfExists('total_emails_sent', $data ?? [], null);
        $this->setIfExists('reputation', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('contacts_count', $data ?? [], null);
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
     * Gets public_account_id
     *
     * @return string|null
     */
    public function getPublicAccountId()
    {
        return $this->container['public_account_id'];
    }

    /**
     * Sets public_account_id
     *
     * @param string|null $public_account_id Public key for limited access to your Account such as contact/add so you can use it safely on public websites.
     *
     * @return self
     */
    public function setPublicAccountId($public_account_id)
    {
        if (is_null($public_account_id)) {
            throw new \InvalidArgumentException('non-nullable public_account_id cannot be null');
        }
        $this->container['public_account_id'] = $public_account_id;

        return $this;
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
     * @param string|null $email Proper email address.
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
     * Gets settings
     *
     * @return \ElasticEmail\Model\SubaccountSettingsInfo|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \ElasticEmail\Model\SubaccountSettingsInfo|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        if (is_null($settings)) {
            throw new \InvalidArgumentException('non-nullable settings cannot be null');
        }
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param \DateTime|null $last_activity Date of last activity on Account
     *
     * @return self
     */
    public function setLastActivity($last_activity)
    {
        if (is_null($last_activity)) {
            throw new \InvalidArgumentException('non-nullable last_activity cannot be null');
        }
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets email_credits
     *
     * @return int|null
     */
    public function getEmailCredits()
    {
        return $this->container['email_credits'];
    }

    /**
     * Sets email_credits
     *
     * @param int|null $email_credits Amount of email credits
     *
     * @return self
     */
    public function setEmailCredits($email_credits)
    {
        if (is_null($email_credits)) {
            throw new \InvalidArgumentException('non-nullable email_credits cannot be null');
        }
        $this->container['email_credits'] = $email_credits;

        return $this;
    }

    /**
     * Gets total_emails_sent
     *
     * @return int|null
     */
    public function getTotalEmailsSent()
    {
        return $this->container['total_emails_sent'];
    }

    /**
     * Sets total_emails_sent
     *
     * @param int|null $total_emails_sent Amount of emails sent from this Account
     *
     * @return self
     */
    public function setTotalEmailsSent($total_emails_sent)
    {
        if (is_null($total_emails_sent)) {
            throw new \InvalidArgumentException('non-nullable total_emails_sent cannot be null');
        }
        $this->container['total_emails_sent'] = $total_emails_sent;

        return $this;
    }

    /**
     * Gets reputation
     *
     * @return float|null
     */
    public function getReputation()
    {
        return $this->container['reputation'];
    }

    /**
     * Sets reputation
     *
     * @param float|null $reputation Numeric reputation
     *
     * @return self
     */
    public function setReputation($reputation)
    {
        if (is_null($reputation)) {
            throw new \InvalidArgumentException('non-nullable reputation cannot be null');
        }
        $this->container['reputation'] = $reputation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \ElasticEmail\Model\AccountStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ElasticEmail\Model\AccountStatusEnum|null $status status
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
     * Gets contacts_count
     *
     * @return int|null
     */
    public function getContactsCount()
    {
        return $this->container['contacts_count'];
    }

    /**
     * Sets contacts_count
     *
     * @param int|null $contacts_count How many contacts this SubAccount has stored
     *
     * @return self
     */
    public function setContactsCount($contacts_count)
    {
        if (is_null($contacts_count)) {
            throw new \InvalidArgumentException('non-nullable contacts_count cannot be null');
        }
        $this->container['contacts_count'] = $contacts_count;

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


