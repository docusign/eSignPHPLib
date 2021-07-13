<?php
/**
 * LockInformation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * LockInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LockInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lockInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'lock_duration_in_seconds' => '?string',
        'locked_by_app' => '?string',
        'locked_by_user' => '\DocuSign\eSign\Model\UserInfo',
        'locked_until_date_time' => '?string',
        'lock_token' => '?string',
        'lock_type' => '?string',
        'use_scratch_pad' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_details' => null,
        'lock_duration_in_seconds' => null,
        'locked_by_app' => null,
        'locked_by_user' => null,
        'locked_until_date_time' => null,
        'lock_token' => null,
        'lock_type' => null,
        'use_scratch_pad' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_details' => 'errorDetails',
        'lock_duration_in_seconds' => 'lockDurationInSeconds',
        'locked_by_app' => 'lockedByApp',
        'locked_by_user' => 'lockedByUser',
        'locked_until_date_time' => 'lockedUntilDateTime',
        'lock_token' => 'lockToken',
        'lock_type' => 'lockType',
        'use_scratch_pad' => 'useScratchPad'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_details' => 'setErrorDetails',
        'lock_duration_in_seconds' => 'setLockDurationInSeconds',
        'locked_by_app' => 'setLockedByApp',
        'locked_by_user' => 'setLockedByUser',
        'locked_until_date_time' => 'setLockedUntilDateTime',
        'lock_token' => 'setLockToken',
        'lock_type' => 'setLockType',
        'use_scratch_pad' => 'setUseScratchPad'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_details' => 'getErrorDetails',
        'lock_duration_in_seconds' => 'getLockDurationInSeconds',
        'locked_by_app' => 'getLockedByApp',
        'locked_by_user' => 'getLockedByUser',
        'locked_until_date_time' => 'getLockedUntilDateTime',
        'lock_token' => 'getLockToken',
        'lock_type' => 'getLockType',
        'use_scratch_pad' => 'getUseScratchPad'
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
        return self::$swaggerModelName;
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
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['lock_duration_in_seconds'] = isset($data['lock_duration_in_seconds']) ? $data['lock_duration_in_seconds'] : null;
        $this->container['locked_by_app'] = isset($data['locked_by_app']) ? $data['locked_by_app'] : null;
        $this->container['locked_by_user'] = isset($data['locked_by_user']) ? $data['locked_by_user'] : null;
        $this->container['locked_until_date_time'] = isset($data['locked_until_date_time']) ? $data['locked_until_date_time'] : null;
        $this->container['lock_token'] = isset($data['lock_token']) ? $data['lock_token'] : null;
        $this->container['lock_type'] = isset($data['lock_type']) ? $data['lock_type'] : null;
        $this->container['use_scratch_pad'] = isset($data['use_scratch_pad']) ? $data['use_scratch_pad'] : null;
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
     * Gets error_details
     *
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     *
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details error_details
     *
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets lock_duration_in_seconds
     *
     * @return ?string
     */
    public function getLockDurationInSeconds()
    {
        return $this->container['lock_duration_in_seconds'];
    }

    /**
     * Sets lock_duration_in_seconds
     *
     * @param ?string $lock_duration_in_seconds Sets the time, in seconds, until the lock expires when there is no activity on the envelope.  If no value is entered, then the default value of 300 seconds is used. The maximum value is 1,800 seconds.  The lock duration can be extended.
     *
     * @return $this
     */
    public function setLockDurationInSeconds($lock_duration_in_seconds)
    {
        $this->container['lock_duration_in_seconds'] = $lock_duration_in_seconds;

        return $this;
    }

    /**
     * Gets locked_by_app
     *
     * @return ?string
     */
    public function getLockedByApp()
    {
        return $this->container['locked_by_app'];
    }

    /**
     * Sets locked_by_app
     *
     * @param ?string $locked_by_app Specifies the friendly name of  the application that is locking the envelope.
     *
     * @return $this
     */
    public function setLockedByApp($locked_by_app)
    {
        $this->container['locked_by_app'] = $locked_by_app;

        return $this;
    }

    /**
     * Gets locked_by_user
     *
     * @return \DocuSign\eSign\Model\UserInfo
     */
    public function getLockedByUser()
    {
        return $this->container['locked_by_user'];
    }

    /**
     * Sets locked_by_user
     *
     * @param \DocuSign\eSign\Model\UserInfo $locked_by_user locked_by_user
     *
     * @return $this
     */
    public function setLockedByUser($locked_by_user)
    {
        $this->container['locked_by_user'] = $locked_by_user;

        return $this;
    }

    /**
     * Gets locked_until_date_time
     *
     * @return ?string
     */
    public function getLockedUntilDateTime()
    {
        return $this->container['locked_until_date_time'];
    }

    /**
     * Sets locked_until_date_time
     *
     * @param ?string $locked_until_date_time The datetime until the envelope lock expires.
     *
     * @return $this
     */
    public function setLockedUntilDateTime($locked_until_date_time)
    {
        $this->container['locked_until_date_time'] = $locked_until_date_time;

        return $this;
    }

    /**
     * Gets lock_token
     *
     * @return ?string
     */
    public function getLockToken()
    {
        return $this->container['lock_token'];
    }

    /**
     * Sets lock_token
     *
     * @param ?string $lock_token A unique identifier provided to the owner of the envelope lock.   Used to prove ownership of the lock.
     *
     * @return $this
     */
    public function setLockToken($lock_token)
    {
        $this->container['lock_token'] = $lock_token;

        return $this;
    }

    /**
     * Gets lock_type
     *
     * @return ?string
     */
    public function getLockType()
    {
        return $this->container['lock_type'];
    }

    /**
     * Sets lock_type
     *
     * @param ?string $lock_type The type of envelope lock.  Currently \"edit\" is the only supported type.
     *
     * @return $this
     */
    public function setLockType($lock_type)
    {
        $this->container['lock_type'] = $lock_type;

        return $this;
    }

    /**
     * Gets use_scratch_pad
     *
     * @return ?string
     */
    public function getUseScratchPad()
    {
        return $this->container['use_scratch_pad'];
    }

    /**
     * Sets use_scratch_pad
     *
     * @param ?string $use_scratch_pad Reserved for future use.  Indicates whether a scratchpad is used for editing information.
     *
     * @return $this
     */
    public function setUseScratchPad($use_scratch_pad)
    {
        $this->container['use_scratch_pad'] = $use_scratch_pad;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

