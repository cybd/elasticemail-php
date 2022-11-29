<?php
/**
 * VerificationFileResultDetails
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
 * OpenAPI Generator version: 6.2.1
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
 * VerificationFileResultDetails Class Doc Comment
 *
 * @category Class
 * @description Detailed verification file result info
 * @package  ElasticEmail
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VerificationFileResultDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VerificationFileResultDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verification_result' => '\ElasticEmail\Model\EmailValidationResult[]',
        'verification_id' => 'string',
        'filename' => 'string',
        'verification_status' => '\ElasticEmail\Model\VerificationStatus',
        'file_upload_result' => '\ElasticEmail\Model\FileUploadResult',
        'date_added' => '\DateTime',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'verification_result' => null,
        'verification_id' => 'string',
        'filename' => 'string',
        'verification_status' => null,
        'file_upload_result' => null,
        'date_added' => 'date-time',
        'source' => 'string'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'verification_result' => false,
		'verification_id' => false,
		'filename' => false,
		'verification_status' => false,
		'file_upload_result' => false,
		'date_added' => false,
		'source' => false
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
        'verification_result' => 'VerificationResult',
        'verification_id' => 'VerificationID',
        'filename' => 'Filename',
        'verification_status' => 'VerificationStatus',
        'file_upload_result' => 'FileUploadResult',
        'date_added' => 'DateAdded',
        'source' => 'Source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verification_result' => 'setVerificationResult',
        'verification_id' => 'setVerificationId',
        'filename' => 'setFilename',
        'verification_status' => 'setVerificationStatus',
        'file_upload_result' => 'setFileUploadResult',
        'date_added' => 'setDateAdded',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verification_result' => 'getVerificationResult',
        'verification_id' => 'getVerificationId',
        'filename' => 'getFilename',
        'verification_status' => 'getVerificationStatus',
        'file_upload_result' => 'getFileUploadResult',
        'date_added' => 'getDateAdded',
        'source' => 'getSource'
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
        $this->setIfExists('verification_result', $data ?? [], null);
        $this->setIfExists('verification_id', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('verification_status', $data ?? [], null);
        $this->setIfExists('file_upload_result', $data ?? [], null);
        $this->setIfExists('date_added', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
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
     * Gets verification_result
     *
     * @return \ElasticEmail\Model\EmailValidationResult[]|null
     */
    public function getVerificationResult()
    {
        return $this->container['verification_result'];
    }

    /**
     * Sets verification_result
     *
     * @param \ElasticEmail\Model\EmailValidationResult[]|null $verification_result Verification result's details
     *
     * @return self
     */
    public function setVerificationResult($verification_result)
    {

        if (is_null($verification_result)) {
            throw new \InvalidArgumentException('non-nullable verification_result cannot be null');
        }

        $this->container['verification_result'] = $verification_result;

        return $this;
    }

    /**
     * Gets verification_id
     *
     * @return string|null
     */
    public function getVerificationId()
    {
        return $this->container['verification_id'];
    }

    /**
     * Sets verification_id
     *
     * @param string|null $verification_id Identifier of this verification result
     *
     * @return self
     */
    public function setVerificationId($verification_id)
    {

        if (is_null($verification_id)) {
            throw new \InvalidArgumentException('non-nullable verification_id cannot be null');
        }

        $this->container['verification_id'] = $verification_id;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename Origin file name
     *
     * @return self
     */
    public function setFilename($filename)
    {

        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }

        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets verification_status
     *
     * @return \ElasticEmail\Model\VerificationStatus|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verification_status'];
    }

    /**
     * Sets verification_status
     *
     * @param \ElasticEmail\Model\VerificationStatus|null $verification_status verification_status
     *
     * @return self
     */
    public function setVerificationStatus($verification_status)
    {

        if (is_null($verification_status)) {
            throw new \InvalidArgumentException('non-nullable verification_status cannot be null');
        }

        $this->container['verification_status'] = $verification_status;

        return $this;
    }

    /**
     * Gets file_upload_result
     *
     * @return \ElasticEmail\Model\FileUploadResult|null
     */
    public function getFileUploadResult()
    {
        return $this->container['file_upload_result'];
    }

    /**
     * Sets file_upload_result
     *
     * @param \ElasticEmail\Model\FileUploadResult|null $file_upload_result file_upload_result
     *
     * @return self
     */
    public function setFileUploadResult($file_upload_result)
    {

        if (is_null($file_upload_result)) {
            throw new \InvalidArgumentException('non-nullable file_upload_result cannot be null');
        }

        $this->container['file_upload_result'] = $file_upload_result;

        return $this;
    }

    /**
     * Gets date_added
     *
     * @return \DateTime|null
     */
    public function getDateAdded()
    {
        return $this->container['date_added'];
    }

    /**
     * Sets date_added
     *
     * @param \DateTime|null $date_added Date of creation in YYYY-MM-DDThh:ii:ss format
     *
     * @return self
     */
    public function setDateAdded($date_added)
    {

        if (is_null($date_added)) {
            throw new \InvalidArgumentException('non-nullable date_added cannot be null');
        }

        $this->container['date_added'] = $date_added;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Origin file extension
     *
     * @return self
     */
    public function setSource($source)
    {

        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;

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


