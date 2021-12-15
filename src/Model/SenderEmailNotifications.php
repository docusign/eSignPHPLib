<?php
/**
 * SenderEmailNotifications
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
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
 * SenderEmailNotifications Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SenderEmailNotifications implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'senderEmailNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'changed_signer' => '?string',
        'clickwrap_responses_limit_notification_email' => '?string',
        'comments_only_private_and_mention' => '?string',
        'comments_receive_all' => '?string',
        'delivery_failed' => '?string',
        'envelope_complete' => '?string',
        'offline_signing_failed' => '?string',
        'powerform_responses_limit_notification_email' => '?string',
        'purge_documents' => '?string',
        'recipient_viewed' => '?string',
        'sender_envelope_declined' => '?string',
        'withdrawn_consent' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'changed_signer' => null,
        'clickwrap_responses_limit_notification_email' => null,
        'comments_only_private_and_mention' => null,
        'comments_receive_all' => null,
        'delivery_failed' => null,
        'envelope_complete' => null,
        'offline_signing_failed' => null,
        'powerform_responses_limit_notification_email' => null,
        'purge_documents' => null,
        'recipient_viewed' => null,
        'sender_envelope_declined' => null,
        'withdrawn_consent' => null
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
        'changed_signer' => 'changedSigner',
        'clickwrap_responses_limit_notification_email' => 'clickwrapResponsesLimitNotificationEmail',
        'comments_only_private_and_mention' => 'commentsOnlyPrivateAndMention',
        'comments_receive_all' => 'commentsReceiveAll',
        'delivery_failed' => 'deliveryFailed',
        'envelope_complete' => 'envelopeComplete',
        'offline_signing_failed' => 'offlineSigningFailed',
        'powerform_responses_limit_notification_email' => 'powerformResponsesLimitNotificationEmail',
        'purge_documents' => 'purgeDocuments',
        'recipient_viewed' => 'recipientViewed',
        'sender_envelope_declined' => 'senderEnvelopeDeclined',
        'withdrawn_consent' => 'withdrawnConsent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'changed_signer' => 'setChangedSigner',
        'clickwrap_responses_limit_notification_email' => 'setClickwrapResponsesLimitNotificationEmail',
        'comments_only_private_and_mention' => 'setCommentsOnlyPrivateAndMention',
        'comments_receive_all' => 'setCommentsReceiveAll',
        'delivery_failed' => 'setDeliveryFailed',
        'envelope_complete' => 'setEnvelopeComplete',
        'offline_signing_failed' => 'setOfflineSigningFailed',
        'powerform_responses_limit_notification_email' => 'setPowerformResponsesLimitNotificationEmail',
        'purge_documents' => 'setPurgeDocuments',
        'recipient_viewed' => 'setRecipientViewed',
        'sender_envelope_declined' => 'setSenderEnvelopeDeclined',
        'withdrawn_consent' => 'setWithdrawnConsent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'changed_signer' => 'getChangedSigner',
        'clickwrap_responses_limit_notification_email' => 'getClickwrapResponsesLimitNotificationEmail',
        'comments_only_private_and_mention' => 'getCommentsOnlyPrivateAndMention',
        'comments_receive_all' => 'getCommentsReceiveAll',
        'delivery_failed' => 'getDeliveryFailed',
        'envelope_complete' => 'getEnvelopeComplete',
        'offline_signing_failed' => 'getOfflineSigningFailed',
        'powerform_responses_limit_notification_email' => 'getPowerformResponsesLimitNotificationEmail',
        'purge_documents' => 'getPurgeDocuments',
        'recipient_viewed' => 'getRecipientViewed',
        'sender_envelope_declined' => 'getSenderEnvelopeDeclined',
        'withdrawn_consent' => 'getWithdrawnConsent'
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
        $this->container['changed_signer'] = isset($data['changed_signer']) ? $data['changed_signer'] : null;
        $this->container['clickwrap_responses_limit_notification_email'] = isset($data['clickwrap_responses_limit_notification_email']) ? $data['clickwrap_responses_limit_notification_email'] : null;
        $this->container['comments_only_private_and_mention'] = isset($data['comments_only_private_and_mention']) ? $data['comments_only_private_and_mention'] : null;
        $this->container['comments_receive_all'] = isset($data['comments_receive_all']) ? $data['comments_receive_all'] : null;
        $this->container['delivery_failed'] = isset($data['delivery_failed']) ? $data['delivery_failed'] : null;
        $this->container['envelope_complete'] = isset($data['envelope_complete']) ? $data['envelope_complete'] : null;
        $this->container['offline_signing_failed'] = isset($data['offline_signing_failed']) ? $data['offline_signing_failed'] : null;
        $this->container['powerform_responses_limit_notification_email'] = isset($data['powerform_responses_limit_notification_email']) ? $data['powerform_responses_limit_notification_email'] : null;
        $this->container['purge_documents'] = isset($data['purge_documents']) ? $data['purge_documents'] : null;
        $this->container['recipient_viewed'] = isset($data['recipient_viewed']) ? $data['recipient_viewed'] : null;
        $this->container['sender_envelope_declined'] = isset($data['sender_envelope_declined']) ? $data['sender_envelope_declined'] : null;
        $this->container['withdrawn_consent'] = isset($data['withdrawn_consent']) ? $data['withdrawn_consent'] : null;
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
     * Gets changed_signer
     *
     * @return ?string
     */
    public function getChangedSigner()
    {
        return $this->container['changed_signer'];
    }

    /**
     * Sets changed_signer
     *
     * @param ?string $changed_signer When set to **true**, the sender receives notification if the signer changes.
     *
     * @return $this
     */
    public function setChangedSigner($changed_signer)
    {
        $this->container['changed_signer'] = $changed_signer;

        return $this;
    }

    /**
     * Gets clickwrap_responses_limit_notification_email
     *
     * @return ?string
     */
    public function getClickwrapResponsesLimitNotificationEmail()
    {
        return $this->container['clickwrap_responses_limit_notification_email'];
    }

    /**
     * Sets clickwrap_responses_limit_notification_email
     *
     * @param ?string $clickwrap_responses_limit_notification_email 
     *
     * @return $this
     */
    public function setClickwrapResponsesLimitNotificationEmail($clickwrap_responses_limit_notification_email)
    {
        $this->container['clickwrap_responses_limit_notification_email'] = $clickwrap_responses_limit_notification_email;

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
     * Gets delivery_failed
     *
     * @return ?string
     */
    public function getDeliveryFailed()
    {
        return $this->container['delivery_failed'];
    }

    /**
     * Sets delivery_failed
     *
     * @param ?string $delivery_failed When set to **true**, the sender receives notification if the delivery of the envelope fails.
     *
     * @return $this
     */
    public function setDeliveryFailed($delivery_failed)
    {
        $this->container['delivery_failed'] = $delivery_failed;

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
     * Gets powerform_responses_limit_notification_email
     *
     * @return ?string
     */
    public function getPowerformResponsesLimitNotificationEmail()
    {
        return $this->container['powerform_responses_limit_notification_email'];
    }

    /**
     * Sets powerform_responses_limit_notification_email
     *
     * @param ?string $powerform_responses_limit_notification_email 
     *
     * @return $this
     */
    public function setPowerformResponsesLimitNotificationEmail($powerform_responses_limit_notification_email)
    {
        $this->container['powerform_responses_limit_notification_email'] = $powerform_responses_limit_notification_email;

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
     * @param ?string $purge_documents 
     *
     * @return $this
     */
    public function setPurgeDocuments($purge_documents)
    {
        $this->container['purge_documents'] = $purge_documents;

        return $this;
    }

    /**
     * Gets recipient_viewed
     *
     * @return ?string
     */
    public function getRecipientViewed()
    {
        return $this->container['recipient_viewed'];
    }

    /**
     * Sets recipient_viewed
     *
     * @param ?string $recipient_viewed When set to **true**, the sender receives notification that the recipient viewed the enveloper.
     *
     * @return $this
     */
    public function setRecipientViewed($recipient_viewed)
    {
        $this->container['recipient_viewed'] = $recipient_viewed;

        return $this;
    }

    /**
     * Gets sender_envelope_declined
     *
     * @return ?string
     */
    public function getSenderEnvelopeDeclined()
    {
        return $this->container['sender_envelope_declined'];
    }

    /**
     * Sets sender_envelope_declined
     *
     * @param ?string $sender_envelope_declined 
     *
     * @return $this
     */
    public function setSenderEnvelopeDeclined($sender_envelope_declined)
    {
        $this->container['sender_envelope_declined'] = $sender_envelope_declined;

        return $this;
    }

    /**
     * Gets withdrawn_consent
     *
     * @return ?string
     */
    public function getWithdrawnConsent()
    {
        return $this->container['withdrawn_consent'];
    }

    /**
     * Sets withdrawn_consent
     *
     * @param ?string $withdrawn_consent When set to **true**, the user receives notification if consent is withdrawn.
     *
     * @return $this
     */
    public function setWithdrawnConsent($withdrawn_consent)
    {
        $this->container['withdrawn_consent'] = $withdrawn_consent;

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

