<?php
/**
 * EmailStatus
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
 * Generator version: 7.7.0
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
 * EmailStatus Class Doc Comment
 *
 * @category Class
 * @description Status information of the specified email
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'date' => '\DateTime',
        'status' => '\ElasticEmail\Model\LogJobStatus',
        'status_name' => 'string',
        'status_change_date' => '\DateTime',
        'date_sent' => '\DateTime',
        'date_opened' => '\DateTime',
        'date_clicked' => '\DateTime',
        'error_message' => 'string',
        'transaction_id' => 'string',
        'envelope_from' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'from' => 'string',
        'to' => 'string',
        'date' => 'date-time',
        'status' => null,
        'status_name' => 'string',
        'status_change_date' => 'date-time',
        'date_sent' => 'date-time',
        'date_opened' => 'date-time',
        'date_clicked' => 'date-time',
        'error_message' => 'string',
        'transaction_id' => 'guid',
        'envelope_from' => 'string'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'from' => false,
        'to' => false,
        'date' => false,
        'status' => false,
        'status_name' => false,
        'status_change_date' => false,
        'date_sent' => false,
        'date_opened' => true,
        'date_clicked' => true,
        'error_message' => false,
        'transaction_id' => false,
        'envelope_from' => false
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
        'from' => 'From',
        'to' => 'To',
        'date' => 'Date',
        'status' => 'Status',
        'status_name' => 'StatusName',
        'status_change_date' => 'StatusChangeDate',
        'date_sent' => 'DateSent',
        'date_opened' => 'DateOpened',
        'date_clicked' => 'DateClicked',
        'error_message' => 'ErrorMessage',
        'transaction_id' => 'TransactionID',
        'envelope_from' => 'EnvelopeFrom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'date' => 'setDate',
        'status' => 'setStatus',
        'status_name' => 'setStatusName',
        'status_change_date' => 'setStatusChangeDate',
        'date_sent' => 'setDateSent',
        'date_opened' => 'setDateOpened',
        'date_clicked' => 'setDateClicked',
        'error_message' => 'setErrorMessage',
        'transaction_id' => 'setTransactionId',
        'envelope_from' => 'setEnvelopeFrom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'date' => 'getDate',
        'status' => 'getStatus',
        'status_name' => 'getStatusName',
        'status_change_date' => 'getStatusChangeDate',
        'date_sent' => 'getDateSent',
        'date_opened' => 'getDateOpened',
        'date_clicked' => 'getDateClicked',
        'error_message' => 'getErrorMessage',
        'transaction_id' => 'getTransactionId',
        'envelope_from' => 'getEnvelopeFrom'
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
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_name', $data ?? [], null);
        $this->setIfExists('status_change_date', $data ?? [], null);
        $this->setIfExists('date_sent', $data ?? [], null);
        $this->setIfExists('date_opened', $data ?? [], null);
        $this->setIfExists('date_clicked', $data ?? [], null);
        $this->setIfExists('error_message', $data ?? [], null);
        $this->setIfExists('transaction_id', $data ?? [], null);
        $this->setIfExists('envelope_from', $data ?? [], null);
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
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from Email address this email was sent from.
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
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to Email address this email was sent to.
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
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date the email was submitted.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \ElasticEmail\Model\LogJobStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ElasticEmail\Model\LogJobStatus|null $status status
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
     * Gets status_name
     *
     * @return string|null
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     *
     * @param string|null $status_name Name of email's status
     *
     * @return self
     */
    public function setStatusName($status_name)
    {
        if (is_null($status_name)) {
            throw new \InvalidArgumentException('non-nullable status_name cannot be null');
        }
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets status_change_date
     *
     * @return \DateTime|null
     */
    public function getStatusChangeDate()
    {
        return $this->container['status_change_date'];
    }

    /**
     * Sets status_change_date
     *
     * @param \DateTime|null $status_change_date Date of last status change.
     *
     * @return self
     */
    public function setStatusChangeDate($status_change_date)
    {
        if (is_null($status_change_date)) {
            throw new \InvalidArgumentException('non-nullable status_change_date cannot be null');
        }
        $this->container['status_change_date'] = $status_change_date;

        return $this;
    }

    /**
     * Gets date_sent
     *
     * @return \DateTime|null
     */
    public function getDateSent()
    {
        return $this->container['date_sent'];
    }

    /**
     * Sets date_sent
     *
     * @param \DateTime|null $date_sent Date when the email was sent
     *
     * @return self
     */
    public function setDateSent($date_sent)
    {
        if (is_null($date_sent)) {
            throw new \InvalidArgumentException('non-nullable date_sent cannot be null');
        }
        $this->container['date_sent'] = $date_sent;

        return $this;
    }

    /**
     * Gets date_opened
     *
     * @return \DateTime|null
     */
    public function getDateOpened()
    {
        return $this->container['date_opened'];
    }

    /**
     * Sets date_opened
     *
     * @param \DateTime|null $date_opened Date when the email changed the status to 'opened'
     *
     * @return self
     */
    public function setDateOpened($date_opened)
    {
        if (is_null($date_opened)) {
            array_push($this->openAPINullablesSetToNull, 'date_opened');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_opened', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_opened'] = $date_opened;

        return $this;
    }

    /**
     * Gets date_clicked
     *
     * @return \DateTime|null
     */
    public function getDateClicked()
    {
        return $this->container['date_clicked'];
    }

    /**
     * Sets date_clicked
     *
     * @param \DateTime|null $date_clicked Date when the email changed the status to 'clicked'
     *
     * @return self
     */
    public function setDateClicked($date_clicked)
    {
        if (is_null($date_clicked)) {
            array_push($this->openAPINullablesSetToNull, 'date_clicked');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_clicked', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_clicked'] = $date_clicked;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Detailed error or bounced message.
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        if (is_null($error_message)) {
            throw new \InvalidArgumentException('non-nullable error_message cannot be null');
        }
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id ID number of transaction
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        if (is_null($transaction_id)) {
            throw new \InvalidArgumentException('non-nullable transaction_id cannot be null');
        }
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets envelope_from
     *
     * @return string|null
     */
    public function getEnvelopeFrom()
    {
        return $this->container['envelope_from'];
    }

    /**
     * Sets envelope_from
     *
     * @param string|null $envelope_from Envelope from address
     *
     * @return self
     */
    public function setEnvelopeFrom($envelope_from)
    {
        if (is_null($envelope_from)) {
            throw new \InvalidArgumentException('non-nullable envelope_from cannot be null');
        }
        $this->container['envelope_from'] = $envelope_from;

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


