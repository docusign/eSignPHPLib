<?php
/**
 * Stamp
 *
 * PHP version 5
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;

/**
 * Stamp Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Stamp implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'stamp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adopted_date_time' => 'string',
        'created_date_time' => 'string',
        'custom_field' => 'string',
        'date_stamp_properties' => '\DocuSign\eSign\Model\DateStampProperties',
        'disallow_user_resize_stamp' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'external_id' => 'string',
        'image_base64' => 'string',
        'image_type' => 'string',
        'last_modified_date_time' => 'string',
        'phonetic_name' => 'string',
        'signature_name' => 'string',
        'stamp_format' => 'string',
        'stamp_image_uri' => 'string',
        'stamp_size_mm' => 'string',
        'status' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'adopted_date_time' => 'adoptedDateTime',
        'created_date_time' => 'createdDateTime',
        'custom_field' => 'customField',
        'date_stamp_properties' => 'dateStampProperties',
        'disallow_user_resize_stamp' => 'disallowUserResizeStamp',
        'error_details' => 'errorDetails',
        'external_id' => 'externalID',
        'image_base64' => 'imageBase64',
        'image_type' => 'imageType',
        'last_modified_date_time' => 'lastModifiedDateTime',
        'phonetic_name' => 'phoneticName',
        'signature_name' => 'signatureName',
        'stamp_format' => 'stampFormat',
        'stamp_image_uri' => 'stampImageUri',
        'stamp_size_mm' => 'stampSizeMM',
        'status' => 'status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'adopted_date_time' => 'setAdoptedDateTime',
        'created_date_time' => 'setCreatedDateTime',
        'custom_field' => 'setCustomField',
        'date_stamp_properties' => 'setDateStampProperties',
        'disallow_user_resize_stamp' => 'setDisallowUserResizeStamp',
        'error_details' => 'setErrorDetails',
        'external_id' => 'setExternalId',
        'image_base64' => 'setImageBase64',
        'image_type' => 'setImageType',
        'last_modified_date_time' => 'setLastModifiedDateTime',
        'phonetic_name' => 'setPhoneticName',
        'signature_name' => 'setSignatureName',
        'stamp_format' => 'setStampFormat',
        'stamp_image_uri' => 'setStampImageUri',
        'stamp_size_mm' => 'setStampSizeMm',
        'status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'adopted_date_time' => 'getAdoptedDateTime',
        'created_date_time' => 'getCreatedDateTime',
        'custom_field' => 'getCustomField',
        'date_stamp_properties' => 'getDateStampProperties',
        'disallow_user_resize_stamp' => 'getDisallowUserResizeStamp',
        'error_details' => 'getErrorDetails',
        'external_id' => 'getExternalId',
        'image_base64' => 'getImageBase64',
        'image_type' => 'getImageType',
        'last_modified_date_time' => 'getLastModifiedDateTime',
        'phonetic_name' => 'getPhoneticName',
        'signature_name' => 'getSignatureName',
        'stamp_format' => 'getStampFormat',
        'stamp_image_uri' => 'getStampImageUri',
        'stamp_size_mm' => 'getStampSizeMm',
        'status' => 'getStatus'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['adopted_date_time'] = isset($data['adopted_date_time']) ? $data['adopted_date_time'] : null;
        $this->container['created_date_time'] = isset($data['created_date_time']) ? $data['created_date_time'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
        $this->container['date_stamp_properties'] = isset($data['date_stamp_properties']) ? $data['date_stamp_properties'] : null;
        $this->container['disallow_user_resize_stamp'] = isset($data['disallow_user_resize_stamp']) ? $data['disallow_user_resize_stamp'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['image_base64'] = isset($data['image_base64']) ? $data['image_base64'] : null;
        $this->container['image_type'] = isset($data['image_type']) ? $data['image_type'] : null;
        $this->container['last_modified_date_time'] = isset($data['last_modified_date_time']) ? $data['last_modified_date_time'] : null;
        $this->container['phonetic_name'] = isset($data['phonetic_name']) ? $data['phonetic_name'] : null;
        $this->container['signature_name'] = isset($data['signature_name']) ? $data['signature_name'] : null;
        $this->container['stamp_format'] = isset($data['stamp_format']) ? $data['stamp_format'] : null;
        $this->container['stamp_image_uri'] = isset($data['stamp_image_uri']) ? $data['stamp_image_uri'] : null;
        $this->container['stamp_size_mm'] = isset($data['stamp_size_mm']) ? $data['stamp_size_mm'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets adopted_date_time
     * @return string
     */
    public function getAdoptedDateTime()
    {
        return $this->container['adopted_date_time'];
    }

    /**
     * Sets adopted_date_time
     * @param string $adopted_date_time 
     * @return $this
     */
    public function setAdoptedDateTime($adopted_date_time)
    {
        $this->container['adopted_date_time'] = $adopted_date_time;

        return $this;
    }

    /**
     * Gets created_date_time
     * @return string
     */
    public function getCreatedDateTime()
    {
        return $this->container['created_date_time'];
    }

    /**
     * Sets created_date_time
     * @param string $created_date_time Indicates the date and time the item was created.
     * @return $this
     */
    public function setCreatedDateTime($created_date_time)
    {
        $this->container['created_date_time'] = $created_date_time;

        return $this;
    }

    /**
     * Gets custom_field
     * @return string
     */
    public function getCustomField()
    {
        return $this->container['custom_field'];
    }

    /**
     * Sets custom_field
     * @param string $custom_field 
     * @return $this
     */
    public function setCustomField($custom_field)
    {
        $this->container['custom_field'] = $custom_field;

        return $this;
    }

    /**
     * Gets date_stamp_properties
     * @return \DocuSign\eSign\Model\DateStampProperties
     */
    public function getDateStampProperties()
    {
        return $this->container['date_stamp_properties'];
    }

    /**
     * Sets date_stamp_properties
     * @param \DocuSign\eSign\Model\DateStampProperties $date_stamp_properties
     * @return $this
     */
    public function setDateStampProperties($date_stamp_properties)
    {
        $this->container['date_stamp_properties'] = $date_stamp_properties;

        return $this;
    }

    /**
     * Gets disallow_user_resize_stamp
     * @return string
     */
    public function getDisallowUserResizeStamp()
    {
        return $this->container['disallow_user_resize_stamp'];
    }

    /**
     * Sets disallow_user_resize_stamp
     * @param string $disallow_user_resize_stamp 
     * @return $this
     */
    public function setDisallowUserResizeStamp($disallow_user_resize_stamp)
    {
        $this->container['disallow_user_resize_stamp'] = $disallow_user_resize_stamp;

        return $this;
    }

    /**
     * Gets error_details
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->container['error_details'];
    }

    /**
     * Sets error_details
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        $this->container['error_details'] = $error_details;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id 
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets image_base64
     * @return string
     */
    public function getImageBase64()
    {
        return $this->container['image_base64'];
    }

    /**
     * Sets image_base64
     * @param string $image_base64 
     * @return $this
     */
    public function setImageBase64($image_base64)
    {
        $this->container['image_base64'] = $image_base64;

        return $this;
    }

    /**
     * Gets image_type
     * @return string
     */
    public function getImageType()
    {
        return $this->container['image_type'];
    }

    /**
     * Sets image_type
     * @param string $image_type 
     * @return $this
     */
    public function setImageType($image_type)
    {
        $this->container['image_type'] = $image_type;

        return $this;
    }

    /**
     * Gets last_modified_date_time
     * @return string
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['last_modified_date_time'];
    }

    /**
     * Sets last_modified_date_time
     * @param string $last_modified_date_time The date and time the item was last modified.
     * @return $this
     */
    public function setLastModifiedDateTime($last_modified_date_time)
    {
        $this->container['last_modified_date_time'] = $last_modified_date_time;

        return $this;
    }

    /**
     * Gets phonetic_name
     * @return string
     */
    public function getPhoneticName()
    {
        return $this->container['phonetic_name'];
    }

    /**
     * Sets phonetic_name
     * @param string $phonetic_name 
     * @return $this
     */
    public function setPhoneticName($phonetic_name)
    {
        $this->container['phonetic_name'] = $phonetic_name;

        return $this;
    }

    /**
     * Gets signature_name
     * @return string
     */
    public function getSignatureName()
    {
        return $this->container['signature_name'];
    }

    /**
     * Sets signature_name
     * @param string $signature_name Specifies the user signature name.
     * @return $this
     */
    public function setSignatureName($signature_name)
    {
        $this->container['signature_name'] = $signature_name;

        return $this;
    }

    /**
     * Gets stamp_format
     * @return string
     */
    public function getStampFormat()
    {
        return $this->container['stamp_format'];
    }

    /**
     * Sets stamp_format
     * @param string $stamp_format 
     * @return $this
     */
    public function setStampFormat($stamp_format)
    {
        $this->container['stamp_format'] = $stamp_format;

        return $this;
    }

    /**
     * Gets stamp_image_uri
     * @return string
     */
    public function getStampImageUri()
    {
        return $this->container['stamp_image_uri'];
    }

    /**
     * Sets stamp_image_uri
     * @param string $stamp_image_uri 
     * @return $this
     */
    public function setStampImageUri($stamp_image_uri)
    {
        $this->container['stamp_image_uri'] = $stamp_image_uri;

        return $this;
    }

    /**
     * Gets stamp_size_mm
     * @return string
     */
    public function getStampSizeMm()
    {
        return $this->container['stamp_size_mm'];
    }

    /**
     * Sets stamp_size_mm
     * @param string $stamp_size_mm 
     * @return $this
     */
    public function setStampSizeMm($stamp_size_mm)
    {
        $this->container['stamp_size_mm'] = $stamp_size_mm;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
    }
}


