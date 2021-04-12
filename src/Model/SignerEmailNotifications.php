<?php
/**
 * SignerEmailNotifications
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
 * SignerEmailNotifications Class Doc Comment
 *
 * @category    Class
 * @description An array of email notifications that specifies the email the user receives when they are a sender. When the specific email notification is set to true, the user receives those types of email notifications from DocuSign. The user inherits the default account sender email notification settings when the user is created.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignerEmailNotifications implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'signerEmailNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agent_notification' => '?string',
        'carbon_copy_notification' => '?string',
        'certified_delivery_notification' => '?string',
        'comments_only_private_and_mention' => '?string',
        'comments_receive_all' => '?string',
        'document_markup_activation' => '?string',
        'envelope_activation' => '?string',
        'envelope_complete' => '?string',
        'envelope_corrected' => '?string',
        'envelope_declined' => '?string',
        'envelope_voided' => '?string',
        'fax_received' => '?string',
        'offline_signing_failed' => '?string',
        'purge_documents' => '?string',
        'reassigned_signer' => '?string',
        'when_signing_group_member' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agent_notification' => null,
        'carbon_copy_notification' => null,
        'certified_delivery_notification' => null,
        'comments_only_private_and_mention' => null,
        'comments_receive_all' => null,
        'document_markup_activation' => null,
        'envelope_activation' => null,
        'envelope_complete' => null,
        'envelope_corrected' => null,
        'envelope_declined' => null,
        'envelope_voided' => null,
        'fax_received' => null,
        'offline_signing_failed' => null,
        'purge_documents' => null,
        'reassigned_signer' => null,
        'when_signing_group_member' => null
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
        'agent_notification' => 'agentNotification',
        'carbon_copy_notification' => 'carbonCopyNotification',
        'certified_delivery_notification' => 'certifiedDeliveryNotification',
        'comments_only_private_and_mention' => 'commentsOnlyPrivateAndMention',
        'comments_receive_all' => 'commentsReceiveAll',
        'document_markup_activation' => 'documentMarkupActivation',
        'envelope_activation' => 'envelopeActivation',
        'envelope_complete' => 'envelopeComplete',
        'envelope_corrected' => 'envelopeCorrected',
        'envelope_declined' => 'envelopeDeclined',
        'envelope_voided' => 'envelopeVoided',
        'fax_received' => 'faxReceived',
        'offline_signing_failed' => 'offlineSigningFailed',
        'purge_documents' => 'purgeDocuments',
        'reassigned_signer' => 'reassignedSigner',
        'when_signing_group_member' => 'whenSigningGroupMember'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent_notification' => 'setAgentNotification',
        'carbon_copy_notification' => 'setCarbonCopyNotification',
        'certified_delivery_notification' => 'setCertifiedDeliveryNotification',
        'comments_only_private_and_mention' => 'setCommentsOnlyPrivateAndMention',
        'comments_receive_all' => 'setCommentsReceiveAll',
        'document_markup_activation' => 'setDocumentMarkupActivation',
        'envelope_activation' => 'setEnvelopeActivation',
        'envelope_complete' => 'setEnvelopeComplete',
        'envelope_corrected' => 'setEnvelopeCorrected',
        'envelope_declined' => 'setEnvelopeDeclined',
        'envelope_voided' => 'setEnvelopeVoided',
        'fax_received' => 'setFaxReceived',
        'offline_signing_failed' => 'setOfflineSigningFailed',
        'purge_documents' => 'setPurgeDocuments',
        'reassigned_signer' => 'setReassignedSigner',
        'when_signing_group_member' => 'setWhenSigningGroupMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent_notification' => 'getAgentNotification',
        'carbon_copy_notification' => 'getCarbonCopyNotification',
        'certified_delivery_notification' => 'getCertifiedDeliveryNotification',
        'comments_only_private_and_mention' => 'getCommentsOnlyPrivateAndMention',
        'comments_receive_all' => 'getCommentsReceiveAll',
        'document_markup_activation' => 'getDocumentMarkupActivation',
        'envelope_activation' => 'getEnvelopeActivation',
        'envelope_complete' => 'getEnvelopeComplete',
        'envelope_corrected' => 'getEnvelopeCorrected',
        'envelope_declined' => 'getEnvelopeDeclined',
        'envelope_voided' => 'getEnvelopeVoided',
        'fax_received' => 'getFaxReceived',
        'offline_signing_failed' => 'getOfflineSigningFailed',
        'purge_documents' => 'getPurgeDocuments',
        'reassigned_signer' => 'getReassignedSigner',
        'when_signing_group_member' => 'getWhenSigningGroupMember'
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
        $this->container['agent_notification'] = isset($data['agent_notification']) ? $data['agent_notification'] : null;
        $this->container['carbon_copy_notification'] = isset($data['carbon_copy_notification']) ? $data['carbon_copy_notification'] : null;
        $this->container['certified_delivery_notification'] = isset($data['certified_delivery_notification']) ? $data['certified_delivery_notification'] : null;
        $this->container['comments_only_private_and_mention'] = isset($data['comments_only_private_and_mention']) ? $data['comments_only_private_and_mention'] : null;
        $this->container['comments_receive_all'] = isset($data['comments_receive_all']) ? $data['comments_receive_all'] : null;
        $this->container['document_markup_activation'] = isset($data['document_markup_activation']) ? $data['document_markup_activation'] : null;
        $this->container['envelope_activation'] = isset($data['envelope_activation']) ? $data['envelope_activation'] : null;
        $this->container['envelope_complete'] = isset($data['envelope_complete']) ? $data['envelope_complete'] : null;
        $this->container['envelope_corrected'] = isset($data['envelope_corrected']) ? $data['envelope_corrected'] : null;
        $this->container['envelope_declined'] = isset($data['envelope_declined']) ? $data['envelope_declined'] : null;
        $this->container['envelope_voided'] = isset($data['envelope_voided']) ? $data['envelope_voided'] : null;
        $this->container['fax_received'] = isset($data['fax_received']) ? $data['fax_received'] : null;
        $this->container['offline_signing_failed'] = isset($data['offline_signing_failed']) ? $data['offline_signing_failed'] : null;
        $this->container['purge_documents'] = isset($data['purge_documents']) ? $data['purge_documents'] : null;
        $this->container['reassigned_signer'] = isset($data['reassigned_signer']) ? $data['reassigned_signer'] : null;
        $this->container['when_signing_group_member'] = isset($data['when_signing_group_member']) ? $data['when_signing_group_member'] : null;
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
     * Gets agent_notification
     *
     * @return ?string
     */
    public function getAgentNotification()
    {
        return $this->container['agent_notification'];
    }

    /**
     * Sets agent_notification
     *
     * @param ?string $agent_notification When set to **true**, the user receives agent notification emails.
     *
     * @return $this
     */
    public function setAgentNotification($agent_notification)
    {
        $this->container['agent_notification'] = $agent_notification;

        return $this;
    }

    /**
     * Gets carbon_copy_notification
     *
     * @return ?string
     */
    public function getCarbonCopyNotification()
    {
        return $this->container['carbon_copy_notification'];
    }

    /**
     * Sets carbon_copy_notification
     *
     * @param ?string $carbon_copy_notification When set to **true**, the user receives notifications of carbon copy deliveries.
     *
     * @return $this
     */
    public function setCarbonCopyNotification($carbon_copy_notification)
    {
        $this->container['carbon_copy_notification'] = $carbon_copy_notification;

        return $this;
    }

    /**
     * Gets certified_delivery_notification
     *
     * @return ?string
     */
    public function getCertifiedDeliveryNotification()
    {
        return $this->container['certified_delivery_notification'];
    }

    /**
     * Sets certified_delivery_notification
     *
     * @param ?string $certified_delivery_notification When set to **true**, the user receives notifications of certified deliveries.
     *
     * @return $this
     */
    public function setCertifiedDeliveryNotification($certified_delivery_notification)
    {
        $this->container['certified_delivery_notification'] = $certified_delivery_notification;

        return $this;
    }

    /**
     * Gets comments_only_private_and_mention
     *
     * @return ?string
     */
    public function getCommentsOnlyPrivateAndMention()
    {
        return $this->container['comments_only_private_and_mention'];
    }

    /**
     * Sets comments_only_private_and_mention
     *
     * @param ?string $comments_only_private_and_mention 
     *
     * @return $this
     */
    public function setCommentsOnlyPrivateAndMention($comments_only_private_and_mention)
    {
        $this->container['comments_only_private_and_mention'] = $comments_only_private_and_mention;

        return $this;
    }

    /**
     * Gets comments_receive_all
     *
     * @return ?string
     */
    public function getCommentsReceiveAll()
    {
        return $this->container['comments_receive_all'];
    }

    /**
     * Sets comments_receive_all
     *
     * @param ?string $comments_receive_all 
     *
     * @return $this
     */
    public function setCommentsReceiveAll($comments_receive_all)
    {
        $this->container['comments_receive_all'] = $comments_receive_all;

        return $this;
    }

    /**
     * Gets document_markup_activation
     *
     * @return ?string
     */
    public function getDocumentMarkupActivation()
    {
        return $this->container['document_markup_activation'];
    }

    /**
     * Sets document_markup_activation
     *
     * @param ?string $document_markup_activation When set to **true**, the user receives notification that document markup has been activated.
     *
     * @return $this
     */
    public function setDocumentMarkupActivation($document_markup_activation)
    {
        $this->container['document_markup_activation'] = $document_markup_activation;

        return $this;
    }

    /**
     * Gets envelope_activation
     *
     * @return ?string
     */
    public function getEnvelopeActivation()
    {
        return $this->container['envelope_activation'];
    }

    /**
     * Sets envelope_activation
     *
     * @param ?string $envelope_activation When set to **true**, the user receives notification that the envelope has been activated.
     *
     * @return $this
     */
    public function setEnvelopeActivation($envelope_activation)
    {
        $this->container['envelope_activation'] = $envelope_activation;

        return $this;
    }

    /**
     * Gets envelope_complete
     *
     * @return ?string
     */
    public function getEnvelopeComplete()
    {
        return $this->container['envelope_complete'];
    }

    /**
     * Sets envelope_complete
     *
     * @param ?string $envelope_complete When set to **true**, the user receives notification that the envelope has been completed.
     *
     * @return $this
     */
    public function setEnvelopeComplete($envelope_complete)
    {
        $this->container['envelope_complete'] = $envelope_complete;

        return $this;
    }

    /**
     * Gets envelope_corrected
     *
     * @return ?string
     */
    public function getEnvelopeCorrected()
    {
        return $this->container['envelope_corrected'];
    }

    /**
     * Sets envelope_corrected
     *
     * @param ?string $envelope_corrected When set to **true**, the user receives notification that the envelope has been corrected.
     *
     * @return $this
     */
    public function setEnvelopeCorrected($envelope_corrected)
    {
        $this->container['envelope_corrected'] = $envelope_corrected;

        return $this;
    }

    /**
     * Gets envelope_declined
     *
     * @return ?string
     */
    public function getEnvelopeDeclined()
    {
        return $this->container['envelope_declined'];
    }

    /**
     * Sets envelope_declined
     *
     * @param ?string $envelope_declined When set to **true**, the user receives notification that the envelope has been declined.
     *
     * @return $this
     */
    public function setEnvelopeDeclined($envelope_declined)
    {
        $this->container['envelope_declined'] = $envelope_declined;

        return $this;
    }

    /**
     * Gets envelope_voided
     *
     * @return ?string
     */
    public function getEnvelopeVoided()
    {
        return $this->container['envelope_voided'];
    }

    /**
     * Sets envelope_voided
     *
     * @param ?string $envelope_voided When set to **true**, the user receives notification that the envelope has been voided.
     *
     * @return $this
     */
    public function setEnvelopeVoided($envelope_voided)
    {
        $this->container['envelope_voided'] = $envelope_voided;

        return $this;
    }

    /**
     * Gets fax_received
     *
     * @return ?string
     */
    public function getFaxReceived()
    {
        return $this->container['fax_received'];
    }

    /**
     * Sets fax_received
     *
     * @param ?string $fax_received Reserved:
     *
     * @return $this
     */
    public function setFaxReceived($fax_received)
    {
        $this->container['fax_received'] = $fax_received;

        return $this;
    }

    /**
     * Gets offline_signing_failed
     *
     * @return ?string
     */
    public function getOfflineSigningFailed()
    {
        return $this->container['offline_signing_failed'];
    }

    /**
     * Sets offline_signing_failed
     *
     * @param ?string $offline_signing_failed When set to **true**, the user receives notification if the offline signing failed.
     *
     * @return $this
     */
    public function setOfflineSigningFailed($offline_signing_failed)
    {
        $this->container['offline_signing_failed'] = $offline_signing_failed;

        return $this;
    }

    /**
     * Gets purge_documents
     *
     * @return ?string
     */
    public function getPurgeDocuments()
    {
        return $this->container['purge_documents'];
    }

    /**
     * Sets purge_documents
     *
     * @param ?string $purge_documents When set to **true**, the user receives notification of document purges.
     *
     * @return $this
     */
    public function setPurgeDocuments($purge_documents)
    {
        $this->container['purge_documents'] = $purge_documents;

        return $this;
    }

    /**
     * Gets reassigned_signer
     *
     * @return ?string
     */
    public function getReassignedSigner()
    {
        return $this->container['reassigned_signer'];
    }

    /**
     * Sets reassigned_signer
     *
     * @param ?string $reassigned_signer When set to **true**, the user receives notification that the envelope has been reassigned.
     *
     * @return $this
     */
    public function setReassignedSigner($reassigned_signer)
    {
        $this->container['reassigned_signer'] = $reassigned_signer;

        return $this;
    }

    /**
     * Gets when_signing_group_member
     *
     * @return ?string
     */
    public function getWhenSigningGroupMember()
    {
        return $this->container['when_signing_group_member'];
    }

    /**
     * Sets when_signing_group_member
     *
     * @param ?string $when_signing_group_member 
     *
     * @return $this
     */
    public function setWhenSigningGroupMember($when_signing_group_member)
    {
        $this->container['when_signing_group_member'] = $when_signing_group_member;

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

