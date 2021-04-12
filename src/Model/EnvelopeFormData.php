<?php
/**
 * EnvelopeFormData
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
 * Swagger Codegen version: 2.4.13-SNAPSHOT
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
 * EnvelopeFormData Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeFormData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopeFormData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_subject' => '?string',
        'envelope_id' => '?string',
        'form_data' => '\DocuSign\eSign\Model\FormDataItem[]',
        'prefill_form_data' => '\DocuSign\eSign\Model\FormDataItem[]',
        'recipient_form_data' => '\DocuSign\eSign\Model\RecipientFormData[]',
        'sent_date_time' => '?string',
        'status' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_subject' => null,
        'envelope_id' => null,
        'form_data' => null,
        'prefill_form_data' => null,
        'recipient_form_data' => null,
        'sent_date_time' => null,
        'status' => null
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
        'email_subject' => 'emailSubject',
        'envelope_id' => 'envelopeId',
        'form_data' => 'formData',
        'prefill_form_data' => 'prefillFormData',
        'recipient_form_data' => 'recipientFormData',
        'sent_date_time' => 'sentDateTime',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_subject' => 'setEmailSubject',
        'envelope_id' => 'setEnvelopeId',
        'form_data' => 'setFormData',
        'prefill_form_data' => 'setPrefillFormData',
        'recipient_form_data' => 'setRecipientFormData',
        'sent_date_time' => 'setSentDateTime',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_subject' => 'getEmailSubject',
        'envelope_id' => 'getEnvelopeId',
        'form_data' => 'getFormData',
        'prefill_form_data' => 'getPrefillFormData',
        'recipient_form_data' => 'getRecipientFormData',
        'sent_date_time' => 'getSentDateTime',
        'status' => 'getStatus'
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
        $this->container['email_subject'] = isset($data['email_subject']) ? $data['email_subject'] : null;
        $this->container['envelope_id'] = isset($data['envelope_id']) ? $data['envelope_id'] : null;
        $this->container['form_data'] = isset($data['form_data']) ? $data['form_data'] : null;
        $this->container['prefill_form_data'] = isset($data['prefill_form_data']) ? $data['prefill_form_data'] : null;
        $this->container['recipient_form_data'] = isset($data['recipient_form_data']) ? $data['recipient_form_data'] : null;
        $this->container['sent_date_time'] = isset($data['sent_date_time']) ? $data['sent_date_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets email_subject
     *
     * @return ?string
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param ?string $email_subject Specifies the subject of the email that is sent to all recipients.  See [ML:Template Email Subject Merge Fields] for information about adding merge field information to the email subject.
     *
     * @return $this
     */
    public function setEmailSubject($email_subject)
    {
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets envelope_id
     *
     * @return ?string
     */
    public function getEnvelopeId()
    {
        return $this->container['envelope_id'];
    }

    /**
     * Sets envelope_id
     *
     * @param ?string $envelope_id The envelope ID of the envelope status that failed to post.
     *
     * @return $this
     */
    public function setEnvelopeId($envelope_id)
    {
        $this->container['envelope_id'] = $envelope_id;

        return $this;
    }

    /**
     * Gets form_data
     *
     * @return \DocuSign\eSign\Model\FormDataItem[]
     */
    public function getFormData()
    {
        return $this->container['form_data'];
    }

    /**
     * Sets form_data
     *
     * @param \DocuSign\eSign\Model\FormDataItem[] $form_data 
     *
     * @return $this
     */
    public function setFormData($form_data)
    {
        $this->container['form_data'] = $form_data;

        return $this;
    }

    /**
     * Gets prefill_form_data
     *
     * @return \DocuSign\eSign\Model\FormDataItem[]
     */
    public function getPrefillFormData()
    {
        return $this->container['prefill_form_data'];
    }

    /**
     * Sets prefill_form_data
     *
     * @param \DocuSign\eSign\Model\FormDataItem[] $prefill_form_data 
     *
     * @return $this
     */
    public function setPrefillFormData($prefill_form_data)
    {
        $this->container['prefill_form_data'] = $prefill_form_data;

        return $this;
    }

    /**
     * Gets recipient_form_data
     *
     * @return \DocuSign\eSign\Model\RecipientFormData[]
     */
    public function getRecipientFormData()
    {
        return $this->container['recipient_form_data'];
    }

    /**
     * Sets recipient_form_data
     *
     * @param \DocuSign\eSign\Model\RecipientFormData[] $recipient_form_data 
     *
     * @return $this
     */
    public function setRecipientFormData($recipient_form_data)
    {
        $this->container['recipient_form_data'] = $recipient_form_data;

        return $this;
    }

    /**
     * Gets sent_date_time
     *
     * @return ?string
     */
    public function getSentDateTime()
    {
        return $this->container['sent_date_time'];
    }

    /**
     * Sets sent_date_time
     *
     * @param ?string $sent_date_time The date and time the envelope was sent.
     *
     * @return $this
     */
    public function setSentDateTime($sent_date_time)
    {
        $this->container['sent_date_time'] = $sent_date_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return ?string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param ?string $status Indicates the envelope status. Valid values are:  * sent - The envelope is sent to the recipients.  * created - The envelope is saved as a draft and can be modified and sent later.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

