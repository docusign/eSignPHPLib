<?php
/**
 * EnvelopeDocument
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
 * EnvelopeDocument Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopeDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'added_recipient_ids' => '?string[]',
        'attachment_tab_id' => '?string',
        'authoritative_copy' => '?string',
        'authoritative_copy_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'available_document_types' => '\DocuSign\eSign\Model\SignatureType[]',
        'contains_pdf_form_fields' => '?string',
        'display' => '?string',
        'display_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'document_fields' => '\DocuSign\eSign\Model\NameValue[]',
        'document_id' => '?string',
        'document_id_guid' => '?string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails',
        'include_in_download' => '?string',
        'include_in_download_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'name' => '?string',
        'name_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'order' => '?string',
        'pages' => '\DocuSign\eSign\Model\Page[]',
        'signer_must_acknowledge' => '?string',
        'signer_must_acknowledge_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'size_bytes' => '?string',
        'template_locked' => '?string',
        'template_required' => '?string',
        'type' => '?string',
        'uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'added_recipient_ids' => null,
        'attachment_tab_id' => null,
        'authoritative_copy' => null,
        'authoritative_copy_metadata' => null,
        'available_document_types' => null,
        'contains_pdf_form_fields' => null,
        'display' => null,
        'display_metadata' => null,
        'document_fields' => null,
        'document_id' => null,
        'document_id_guid' => null,
        'error_details' => null,
        'include_in_download' => null,
        'include_in_download_metadata' => null,
        'name' => null,
        'name_metadata' => null,
        'order' => null,
        'pages' => null,
        'signer_must_acknowledge' => null,
        'signer_must_acknowledge_metadata' => null,
        'size_bytes' => null,
        'template_locked' => null,
        'template_required' => null,
        'type' => null,
        'uri' => null
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
        'added_recipient_ids' => 'addedRecipientIds',
        'attachment_tab_id' => 'attachmentTabId',
        'authoritative_copy' => 'authoritativeCopy',
        'authoritative_copy_metadata' => 'authoritativeCopyMetadata',
        'available_document_types' => 'availableDocumentTypes',
        'contains_pdf_form_fields' => 'containsPdfFormFields',
        'display' => 'display',
        'display_metadata' => 'displayMetadata',
        'document_fields' => 'documentFields',
        'document_id' => 'documentId',
        'document_id_guid' => 'documentIdGuid',
        'error_details' => 'errorDetails',
        'include_in_download' => 'includeInDownload',
        'include_in_download_metadata' => 'includeInDownloadMetadata',
        'name' => 'name',
        'name_metadata' => 'nameMetadata',
        'order' => 'order',
        'pages' => 'pages',
        'signer_must_acknowledge' => 'signerMustAcknowledge',
        'signer_must_acknowledge_metadata' => 'signerMustAcknowledgeMetadata',
        'size_bytes' => 'sizeBytes',
        'template_locked' => 'templateLocked',
        'template_required' => 'templateRequired',
        'type' => 'type',
        'uri' => 'uri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'added_recipient_ids' => 'setAddedRecipientIds',
        'attachment_tab_id' => 'setAttachmentTabId',
        'authoritative_copy' => 'setAuthoritativeCopy',
        'authoritative_copy_metadata' => 'setAuthoritativeCopyMetadata',
        'available_document_types' => 'setAvailableDocumentTypes',
        'contains_pdf_form_fields' => 'setContainsPdfFormFields',
        'display' => 'setDisplay',
        'display_metadata' => 'setDisplayMetadata',
        'document_fields' => 'setDocumentFields',
        'document_id' => 'setDocumentId',
        'document_id_guid' => 'setDocumentIdGuid',
        'error_details' => 'setErrorDetails',
        'include_in_download' => 'setIncludeInDownload',
        'include_in_download_metadata' => 'setIncludeInDownloadMetadata',
        'name' => 'setName',
        'name_metadata' => 'setNameMetadata',
        'order' => 'setOrder',
        'pages' => 'setPages',
        'signer_must_acknowledge' => 'setSignerMustAcknowledge',
        'signer_must_acknowledge_metadata' => 'setSignerMustAcknowledgeMetadata',
        'size_bytes' => 'setSizeBytes',
        'template_locked' => 'setTemplateLocked',
        'template_required' => 'setTemplateRequired',
        'type' => 'setType',
        'uri' => 'setUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'added_recipient_ids' => 'getAddedRecipientIds',
        'attachment_tab_id' => 'getAttachmentTabId',
        'authoritative_copy' => 'getAuthoritativeCopy',
        'authoritative_copy_metadata' => 'getAuthoritativeCopyMetadata',
        'available_document_types' => 'getAvailableDocumentTypes',
        'contains_pdf_form_fields' => 'getContainsPdfFormFields',
        'display' => 'getDisplay',
        'display_metadata' => 'getDisplayMetadata',
        'document_fields' => 'getDocumentFields',
        'document_id' => 'getDocumentId',
        'document_id_guid' => 'getDocumentIdGuid',
        'error_details' => 'getErrorDetails',
        'include_in_download' => 'getIncludeInDownload',
        'include_in_download_metadata' => 'getIncludeInDownloadMetadata',
        'name' => 'getName',
        'name_metadata' => 'getNameMetadata',
        'order' => 'getOrder',
        'pages' => 'getPages',
        'signer_must_acknowledge' => 'getSignerMustAcknowledge',
        'signer_must_acknowledge_metadata' => 'getSignerMustAcknowledgeMetadata',
        'size_bytes' => 'getSizeBytes',
        'template_locked' => 'getTemplateLocked',
        'template_required' => 'getTemplateRequired',
        'type' => 'getType',
        'uri' => 'getUri'
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
        $this->container['added_recipient_ids'] = isset($data['added_recipient_ids']) ? $data['added_recipient_ids'] : null;
        $this->container['attachment_tab_id'] = isset($data['attachment_tab_id']) ? $data['attachment_tab_id'] : null;
        $this->container['authoritative_copy'] = isset($data['authoritative_copy']) ? $data['authoritative_copy'] : null;
        $this->container['authoritative_copy_metadata'] = isset($data['authoritative_copy_metadata']) ? $data['authoritative_copy_metadata'] : null;
        $this->container['available_document_types'] = isset($data['available_document_types']) ? $data['available_document_types'] : null;
        $this->container['contains_pdf_form_fields'] = isset($data['contains_pdf_form_fields']) ? $data['contains_pdf_form_fields'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['display_metadata'] = isset($data['display_metadata']) ? $data['display_metadata'] : null;
        $this->container['document_fields'] = isset($data['document_fields']) ? $data['document_fields'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['document_id_guid'] = isset($data['document_id_guid']) ? $data['document_id_guid'] : null;
        $this->container['error_details'] = isset($data['error_details']) ? $data['error_details'] : null;
        $this->container['include_in_download'] = isset($data['include_in_download']) ? $data['include_in_download'] : null;
        $this->container['include_in_download_metadata'] = isset($data['include_in_download_metadata']) ? $data['include_in_download_metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_metadata'] = isset($data['name_metadata']) ? $data['name_metadata'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
        $this->container['signer_must_acknowledge'] = isset($data['signer_must_acknowledge']) ? $data['signer_must_acknowledge'] : null;
        $this->container['signer_must_acknowledge_metadata'] = isset($data['signer_must_acknowledge_metadata']) ? $data['signer_must_acknowledge_metadata'] : null;
        $this->container['size_bytes'] = isset($data['size_bytes']) ? $data['size_bytes'] : null;
        $this->container['template_locked'] = isset($data['template_locked']) ? $data['template_locked'] : null;
        $this->container['template_required'] = isset($data['template_required']) ? $data['template_required'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
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
     * Gets added_recipient_ids
     *
     * @return ?string[]
     */
    public function getAddedRecipientIds()
    {
        return $this->container['added_recipient_ids'];
    }

    /**
     * Sets added_recipient_ids
     *
     * @param ?string[] $added_recipient_ids 
     *
     * @return $this
     */
    public function setAddedRecipientIds($added_recipient_ids)
    {
        $this->container['added_recipient_ids'] = $added_recipient_ids;

        return $this;
    }

    /**
     * Gets attachment_tab_id
     *
     * @return ?string
     */
    public function getAttachmentTabId()
    {
        return $this->container['attachment_tab_id'];
    }

    /**
     * Sets attachment_tab_id
     *
     * @param ?string $attachment_tab_id 
     *
     * @return $this
     */
    public function setAttachmentTabId($attachment_tab_id)
    {
        $this->container['attachment_tab_id'] = $attachment_tab_id;

        return $this;
    }

    /**
     * Gets authoritative_copy
     *
     * @return ?string
     */
    public function getAuthoritativeCopy()
    {
        return $this->container['authoritative_copy'];
    }

    /**
     * Sets authoritative_copy
     *
     * @param ?string $authoritative_copy Specifies the Authoritative copy feature. If set to true the Authoritative copy feature is enabled.
     *
     * @return $this
     */
    public function setAuthoritativeCopy($authoritative_copy)
    {
        $this->container['authoritative_copy'] = $authoritative_copy;

        return $this;
    }

    /**
     * Gets authoritative_copy_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getAuthoritativeCopyMetadata()
    {
        return $this->container['authoritative_copy_metadata'];
    }

    /**
     * Sets authoritative_copy_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $authoritative_copy_metadata authoritative_copy_metadata
     *
     * @return $this
     */
    public function setAuthoritativeCopyMetadata($authoritative_copy_metadata)
    {
        $this->container['authoritative_copy_metadata'] = $authoritative_copy_metadata;

        return $this;
    }

    /**
     * Gets available_document_types
     *
     * @return \DocuSign\eSign\Model\SignatureType[]
     */
    public function getAvailableDocumentTypes()
    {
        return $this->container['available_document_types'];
    }

    /**
     * Sets available_document_types
     *
     * @param \DocuSign\eSign\Model\SignatureType[] $available_document_types 
     *
     * @return $this
     */
    public function setAvailableDocumentTypes($available_document_types)
    {
        $this->container['available_document_types'] = $available_document_types;

        return $this;
    }

    /**
     * Gets contains_pdf_form_fields
     *
     * @return ?string
     */
    public function getContainsPdfFormFields()
    {
        return $this->container['contains_pdf_form_fields'];
    }

    /**
     * Sets contains_pdf_form_fields
     *
     * @param ?string $contains_pdf_form_fields 
     *
     * @return $this
     */
    public function setContainsPdfFormFields($contains_pdf_form_fields)
    {
        $this->container['contains_pdf_form_fields'] = $contains_pdf_form_fields;

        return $this;
    }

    /**
     * Gets display
     *
     * @return ?string
     */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
     * Sets display
     *
     * @param ?string $display 
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;

        return $this;
    }

    /**
     * Gets display_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getDisplayMetadata()
    {
        return $this->container['display_metadata'];
    }

    /**
     * Sets display_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $display_metadata display_metadata
     *
     * @return $this
     */
    public function setDisplayMetadata($display_metadata)
    {
        $this->container['display_metadata'] = $display_metadata;

        return $this;
    }

    /**
     * Gets document_fields
     *
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getDocumentFields()
    {
        return $this->container['document_fields'];
    }

    /**
     * Sets document_fields
     *
     * @param \DocuSign\eSign\Model\NameValue[] $document_fields 
     *
     * @return $this
     */
    public function setDocumentFields($document_fields)
    {
        $this->container['document_fields'] = $document_fields;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return ?string
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param ?string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets document_id_guid
     *
     * @return ?string
     */
    public function getDocumentIdGuid()
    {
        return $this->container['document_id_guid'];
    }

    /**
     * Sets document_id_guid
     *
     * @param ?string $document_id_guid 
     *
     * @return $this
     */
    public function setDocumentIdGuid($document_id_guid)
    {
        $this->container['document_id_guid'] = $document_id_guid;

        return $this;
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
     * Gets include_in_download
     *
     * @return ?string
     */
    public function getIncludeInDownload()
    {
        return $this->container['include_in_download'];
    }

    /**
     * Sets include_in_download
     *
     * @param ?string $include_in_download 
     *
     * @return $this
     */
    public function setIncludeInDownload($include_in_download)
    {
        $this->container['include_in_download'] = $include_in_download;

        return $this;
    }

    /**
     * Gets include_in_download_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getIncludeInDownloadMetadata()
    {
        return $this->container['include_in_download_metadata'];
    }

    /**
     * Sets include_in_download_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $include_in_download_metadata include_in_download_metadata
     *
     * @return $this
     */
    public function setIncludeInDownloadMetadata($include_in_download_metadata)
    {
        $this->container['include_in_download_metadata'] = $include_in_download_metadata;

        return $this;
    }

    /**
     * Gets name
     *
     * @return ?string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param ?string $name 
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getNameMetadata()
    {
        return $this->container['name_metadata'];
    }

    /**
     * Sets name_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $name_metadata name_metadata
     *
     * @return $this
     */
    public function setNameMetadata($name_metadata)
    {
        $this->container['name_metadata'] = $name_metadata;

        return $this;
    }

    /**
     * Gets order
     *
     * @return ?string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param ?string $order 
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return \DocuSign\eSign\Model\Page[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param \DocuSign\eSign\Model\Page[] $pages 
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets signer_must_acknowledge
     *
     * @return ?string
     */
    public function getSignerMustAcknowledge()
    {
        return $this->container['signer_must_acknowledge'];
    }

    /**
     * Sets signer_must_acknowledge
     *
     * @param ?string $signer_must_acknowledge 
     *
     * @return $this
     */
    public function setSignerMustAcknowledge($signer_must_acknowledge)
    {
        $this->container['signer_must_acknowledge'] = $signer_must_acknowledge;

        return $this;
    }

    /**
     * Gets signer_must_acknowledge_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getSignerMustAcknowledgeMetadata()
    {
        return $this->container['signer_must_acknowledge_metadata'];
    }

    /**
     * Sets signer_must_acknowledge_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $signer_must_acknowledge_metadata signer_must_acknowledge_metadata
     *
     * @return $this
     */
    public function setSignerMustAcknowledgeMetadata($signer_must_acknowledge_metadata)
    {
        $this->container['signer_must_acknowledge_metadata'] = $signer_must_acknowledge_metadata;

        return $this;
    }

    /**
     * Gets size_bytes
     *
     * @return ?string
     */
    public function getSizeBytes()
    {
        return $this->container['size_bytes'];
    }

    /**
     * Sets size_bytes
     *
     * @param ?string $size_bytes 
     *
     * @return $this
     */
    public function setSizeBytes($size_bytes)
    {
        $this->container['size_bytes'] = $size_bytes;

        return $this;
    }

    /**
     * Gets template_locked
     *
     * @return ?string
     */
    public function getTemplateLocked()
    {
        return $this->container['template_locked'];
    }

    /**
     * Sets template_locked
     *
     * @param ?string $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        $this->container['template_locked'] = $template_locked;

        return $this;
    }

    /**
     * Gets template_required
     *
     * @return ?string
     */
    public function getTemplateRequired()
    {
        return $this->container['template_required'];
    }

    /**
     * Sets template_required
     *
     * @param ?string $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     *
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        $this->container['template_required'] = $template_required;

        return $this;
    }

    /**
     * Gets type
     *
     * @return ?string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param ?string $type 
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return ?string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param ?string $uri 
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

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

