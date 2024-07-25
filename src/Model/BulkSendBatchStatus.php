<?php
/**
 * BulkSendBatchStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docusign eSignature REST API
 *
 * The Docusign eSignature REST API provides you with a powerful, convenient, and simple Web services API for interacting with Docusign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
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
 * BulkSendBatchStatus Class Doc Comment
 *
 * @category    Class
 * @description Result of &#x60;getBulkSendBatchStatus&#x60;
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The Docusign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkSendBatchStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'bulkSendBatchStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => '?string',
        'action_status' => '?string',
        'batch_id' => '?string',
        'batch_name' => '?string',
        'batch_size' => '?string',
        'bulk_errors' => '\DocuSign\eSign\Model\BulkSendErrorStatus[]',
        'envelope_id_or_template_id' => '?string',
        'envelopes_info' => '\DocuSign\eSign\Model\BulkSendEnvelopesInfo',
        'envelopes_uri' => '?string',
        'failed' => '?string',
        'mailing_list_id' => '?string',
        'mailing_list_name' => '?string',
        'owner_user_id' => '?string',
        'queued' => '?string',
        'resends_remaining' => '?string',
        'sender_user_id' => '?string',
        'sent' => '?string',
        'submitted_date' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'action_status' => null,
        'batch_id' => null,
        'batch_name' => null,
        'batch_size' => null,
        'bulk_errors' => null,
        'envelope_id_or_template_id' => null,
        'envelopes_info' => null,
        'envelopes_uri' => null,
        'failed' => null,
        'mailing_list_id' => null,
        'mailing_list_name' => null,
        'owner_user_id' => null,
        'queued' => null,
        'resends_remaining' => null,
        'sender_user_id' => null,
        'sent' => null,
        'submitted_date' => null
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
        'action' => 'action',
        'action_status' => 'actionStatus',
        'batch_id' => 'batchId',
        'batch_name' => 'batchName',
        'batch_size' => 'batchSize',
        'bulk_errors' => 'bulkErrors',
        'envelope_id_or_template_id' => 'envelopeIdOrTemplateId',
        'envelopes_info' => 'envelopesInfo',
        'envelopes_uri' => 'envelopesUri',
        'failed' => 'failed',
        'mailing_list_id' => 'mailingListId',
        'mailing_list_name' => 'mailingListName',
        'owner_user_id' => 'ownerUserId',
        'queued' => 'queued',
        'resends_remaining' => 'resendsRemaining',
        'sender_user_id' => 'senderUserId',
        'sent' => 'sent',
        'submitted_date' => 'submittedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'action_status' => 'setActionStatus',
        'batch_id' => 'setBatchId',
        'batch_name' => 'setBatchName',
        'batch_size' => 'setBatchSize',
        'bulk_errors' => 'setBulkErrors',
        'envelope_id_or_template_id' => 'setEnvelopeIdOrTemplateId',
        'envelopes_info' => 'setEnvelopesInfo',
        'envelopes_uri' => 'setEnvelopesUri',
        'failed' => 'setFailed',
        'mailing_list_id' => 'setMailingListId',
        'mailing_list_name' => 'setMailingListName',
        'owner_user_id' => 'setOwnerUserId',
        'queued' => 'setQueued',
        'resends_remaining' => 'setResendsRemaining',
        'sender_user_id' => 'setSenderUserId',
        'sent' => 'setSent',
        'submitted_date' => 'setSubmittedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'action_status' => 'getActionStatus',
        'batch_id' => 'getBatchId',
        'batch_name' => 'getBatchName',
        'batch_size' => 'getBatchSize',
        'bulk_errors' => 'getBulkErrors',
        'envelope_id_or_template_id' => 'getEnvelopeIdOrTemplateId',
        'envelopes_info' => 'getEnvelopesInfo',
        'envelopes_uri' => 'getEnvelopesUri',
        'failed' => 'getFailed',
        'mailing_list_id' => 'getMailingListId',
        'mailing_list_name' => 'getMailingListName',
        'owner_user_id' => 'getOwnerUserId',
        'queued' => 'getQueued',
        'resends_remaining' => 'getResendsRemaining',
        'sender_user_id' => 'getSenderUserId',
        'sent' => 'getSent',
        'submitted_date' => 'getSubmittedDate'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['action_status'] = isset($data['action_status']) ? $data['action_status'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['batch_name'] = isset($data['batch_name']) ? $data['batch_name'] : null;
        $this->container['batch_size'] = isset($data['batch_size']) ? $data['batch_size'] : null;
        $this->container['bulk_errors'] = isset($data['bulk_errors']) ? $data['bulk_errors'] : null;
        $this->container['envelope_id_or_template_id'] = isset($data['envelope_id_or_template_id']) ? $data['envelope_id_or_template_id'] : null;
        $this->container['envelopes_info'] = isset($data['envelopes_info']) ? $data['envelopes_info'] : null;
        $this->container['envelopes_uri'] = isset($data['envelopes_uri']) ? $data['envelopes_uri'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['mailing_list_id'] = isset($data['mailing_list_id']) ? $data['mailing_list_id'] : null;
        $this->container['mailing_list_name'] = isset($data['mailing_list_name']) ? $data['mailing_list_name'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['queued'] = isset($data['queued']) ? $data['queued'] : null;
        $this->container['resends_remaining'] = isset($data['resends_remaining']) ? $data['resends_remaining'] : null;
        $this->container['sender_user_id'] = isset($data['sender_user_id']) ? $data['sender_user_id'] : null;
        $this->container['sent'] = isset($data['sent']) ? $data['sent'] : null;
        $this->container['submitted_date'] = isset($data['submitted_date']) ? $data['submitted_date'] : null;
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
     * Gets action
     *
     * @return ?string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param ?string $action 
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets action_status
     *
     * @return ?string
     */
    public function getActionStatus()
    {
        return $this->container['action_status'];
    }

    /**
     * Sets action_status
     *
     * @param ?string $action_status 
     *
     * @return $this
     */
    public function setActionStatus($action_status)
    {
        $this->container['action_status'] = $action_status;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return ?string
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param ?string $batch_id 
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets batch_name
     *
     * @return ?string
     */
    public function getBatchName()
    {
        return $this->container['batch_name'];
    }

    /**
     * Sets batch_name
     *
     * @param ?string $batch_name 
     *
     * @return $this
     */
    public function setBatchName($batch_name)
    {
        $this->container['batch_name'] = $batch_name;

        return $this;
    }

    /**
     * Gets batch_size
     *
     * @return ?string
     */
    public function getBatchSize()
    {
        return $this->container['batch_size'];
    }

    /**
     * Sets batch_size
     *
     * @param ?string $batch_size 
     *
     * @return $this
     */
    public function setBatchSize($batch_size)
    {
        $this->container['batch_size'] = $batch_size;

        return $this;
    }

    /**
     * Gets bulk_errors
     *
     * @return \DocuSign\eSign\Model\BulkSendErrorStatus[]
     */
    public function getBulkErrors()
    {
        return $this->container['bulk_errors'];
    }

    /**
     * Sets bulk_errors
     *
     * @param \DocuSign\eSign\Model\BulkSendErrorStatus[] $bulk_errors 
     *
     * @return $this
     */
    public function setBulkErrors($bulk_errors)
    {
        $this->container['bulk_errors'] = $bulk_errors;

        return $this;
    }

    /**
     * Gets envelope_id_or_template_id
     *
     * @return ?string
     */
    public function getEnvelopeIdOrTemplateId()
    {
        return $this->container['envelope_id_or_template_id'];
    }

    /**
     * Sets envelope_id_or_template_id
     *
     * @param ?string $envelope_id_or_template_id 
     *
     * @return $this
     */
    public function setEnvelopeIdOrTemplateId($envelope_id_or_template_id)
    {
        $this->container['envelope_id_or_template_id'] = $envelope_id_or_template_id;

        return $this;
    }

    /**
     * Gets envelopes_info
     *
     * @return \DocuSign\eSign\Model\BulkSendEnvelopesInfo
     */
    public function getEnvelopesInfo()
    {
        return $this->container['envelopes_info'];
    }

    /**
     * Sets envelopes_info
     *
     * @param \DocuSign\eSign\Model\BulkSendEnvelopesInfo $envelopes_info 
     *
     * @return $this
     */
    public function setEnvelopesInfo($envelopes_info)
    {
        $this->container['envelopes_info'] = $envelopes_info;

        return $this;
    }

    /**
     * Gets envelopes_uri
     *
     * @return ?string
     */
    public function getEnvelopesUri()
    {
        return $this->container['envelopes_uri'];
    }

    /**
     * Sets envelopes_uri
     *
     * @param ?string $envelopes_uri 
     *
     * @return $this
     */
    public function setEnvelopesUri($envelopes_uri)
    {
        $this->container['envelopes_uri'] = $envelopes_uri;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return ?string
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param ?string $failed 
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets mailing_list_id
     *
     * @return ?string
     */
    public function getMailingListId()
    {
        return $this->container['mailing_list_id'];
    }

    /**
     * Sets mailing_list_id
     *
     * @param ?string $mailing_list_id 
     *
     * @return $this
     */
    public function setMailingListId($mailing_list_id)
    {
        $this->container['mailing_list_id'] = $mailing_list_id;

        return $this;
    }

    /**
     * Gets mailing_list_name
     *
     * @return ?string
     */
    public function getMailingListName()
    {
        return $this->container['mailing_list_name'];
    }

    /**
     * Sets mailing_list_name
     *
     * @param ?string $mailing_list_name 
     *
     * @return $this
     */
    public function setMailingListName($mailing_list_name)
    {
        $this->container['mailing_list_name'] = $mailing_list_name;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return ?string
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param ?string $owner_user_id 
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets queued
     *
     * @return ?string
     */
    public function getQueued()
    {
        return $this->container['queued'];
    }

    /**
     * Sets queued
     *
     * @param ?string $queued 
     *
     * @return $this
     */
    public function setQueued($queued)
    {
        $this->container['queued'] = $queued;

        return $this;
    }

    /**
     * Gets resends_remaining
     *
     * @return ?string
     */
    public function getResendsRemaining()
    {
        return $this->container['resends_remaining'];
    }

    /**
     * Sets resends_remaining
     *
     * @param ?string $resends_remaining 
     *
     * @return $this
     */
    public function setResendsRemaining($resends_remaining)
    {
        $this->container['resends_remaining'] = $resends_remaining;

        return $this;
    }

    /**
     * Gets sender_user_id
     *
     * @return ?string
     */
    public function getSenderUserId()
    {
        return $this->container['sender_user_id'];
    }

    /**
     * Sets sender_user_id
     *
     * @param ?string $sender_user_id 
     *
     * @return $this
     */
    public function setSenderUserId($sender_user_id)
    {
        $this->container['sender_user_id'] = $sender_user_id;

        return $this;
    }

    /**
     * Gets sent
     *
     * @return ?string
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param ?string $sent 
     *
     * @return $this
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets submitted_date
     *
     * @return ?string
     */
    public function getSubmittedDate()
    {
        return $this->container['submitted_date'];
    }

    /**
     * Sets submitted_date
     *
     * @param ?string $submitted_date 
     *
     * @return $this
     */
    public function setSubmittedDate($submitted_date)
    {
        $this->container['submitted_date'] = $submitted_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

