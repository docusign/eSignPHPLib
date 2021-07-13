<?php
/**
 * Workspace
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
 * Workspace Class Doc Comment
 *
 * @category    Class
 * @description Provides properties that describe a workspace.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Workspace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'workspace';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billable_account_id' => '?string',
        'caller_information' => '\DocuSign\eSign\Model\WorkspaceUser',
        'created' => '?string',
        'created_by_information' => '\DocuSign\eSign\Model\WorkspaceUser',
        'last_modified' => '?string',
        'last_modified_by_information' => '\DocuSign\eSign\Model\WorkspaceUser',
        'settings' => '\DocuSign\eSign\Model\WorkspaceSettings',
        'status' => '?string',
        'workspace_base_url' => '?string',
        'workspace_description' => '?string',
        'workspace_id' => '?string',
        'workspace_name' => '?string',
        'workspace_uri' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billable_account_id' => null,
        'caller_information' => null,
        'created' => null,
        'created_by_information' => null,
        'last_modified' => null,
        'last_modified_by_information' => null,
        'settings' => null,
        'status' => null,
        'workspace_base_url' => null,
        'workspace_description' => null,
        'workspace_id' => null,
        'workspace_name' => null,
        'workspace_uri' => null
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
        'billable_account_id' => 'billableAccountId',
        'caller_information' => 'callerInformation',
        'created' => 'created',
        'created_by_information' => 'createdByInformation',
        'last_modified' => 'lastModified',
        'last_modified_by_information' => 'lastModifiedByInformation',
        'settings' => 'settings',
        'status' => 'status',
        'workspace_base_url' => 'workspaceBaseUrl',
        'workspace_description' => 'workspaceDescription',
        'workspace_id' => 'workspaceId',
        'workspace_name' => 'workspaceName',
        'workspace_uri' => 'workspaceUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billable_account_id' => 'setBillableAccountId',
        'caller_information' => 'setCallerInformation',
        'created' => 'setCreated',
        'created_by_information' => 'setCreatedByInformation',
        'last_modified' => 'setLastModified',
        'last_modified_by_information' => 'setLastModifiedByInformation',
        'settings' => 'setSettings',
        'status' => 'setStatus',
        'workspace_base_url' => 'setWorkspaceBaseUrl',
        'workspace_description' => 'setWorkspaceDescription',
        'workspace_id' => 'setWorkspaceId',
        'workspace_name' => 'setWorkspaceName',
        'workspace_uri' => 'setWorkspaceUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billable_account_id' => 'getBillableAccountId',
        'caller_information' => 'getCallerInformation',
        'created' => 'getCreated',
        'created_by_information' => 'getCreatedByInformation',
        'last_modified' => 'getLastModified',
        'last_modified_by_information' => 'getLastModifiedByInformation',
        'settings' => 'getSettings',
        'status' => 'getStatus',
        'workspace_base_url' => 'getWorkspaceBaseUrl',
        'workspace_description' => 'getWorkspaceDescription',
        'workspace_id' => 'getWorkspaceId',
        'workspace_name' => 'getWorkspaceName',
        'workspace_uri' => 'getWorkspaceUri'
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
        $this->container['billable_account_id'] = isset($data['billable_account_id']) ? $data['billable_account_id'] : null;
        $this->container['caller_information'] = isset($data['caller_information']) ? $data['caller_information'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['created_by_information'] = isset($data['created_by_information']) ? $data['created_by_information'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_modified_by_information'] = isset($data['last_modified_by_information']) ? $data['last_modified_by_information'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['workspace_base_url'] = isset($data['workspace_base_url']) ? $data['workspace_base_url'] : null;
        $this->container['workspace_description'] = isset($data['workspace_description']) ? $data['workspace_description'] : null;
        $this->container['workspace_id'] = isset($data['workspace_id']) ? $data['workspace_id'] : null;
        $this->container['workspace_name'] = isset($data['workspace_name']) ? $data['workspace_name'] : null;
        $this->container['workspace_uri'] = isset($data['workspace_uri']) ? $data['workspace_uri'] : null;
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
     * Gets billable_account_id
     *
     * @return ?string
     */
    public function getBillableAccountId()
    {
        return $this->container['billable_account_id'];
    }

    /**
     * Sets billable_account_id
     *
     * @param ?string $billable_account_id 
     *
     * @return $this
     */
    public function setBillableAccountId($billable_account_id)
    {
        $this->container['billable_account_id'] = $billable_account_id;

        return $this;
    }

    /**
     * Gets caller_information
     *
     * @return \DocuSign\eSign\Model\WorkspaceUser
     */
    public function getCallerInformation()
    {
        return $this->container['caller_information'];
    }

    /**
     * Sets caller_information
     *
     * @param \DocuSign\eSign\Model\WorkspaceUser $caller_information caller_information
     *
     * @return $this
     */
    public function setCallerInformation($caller_information)
    {
        $this->container['caller_information'] = $caller_information;

        return $this;
    }

    /**
     * Gets created
     *
     * @return ?string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param ?string $created 
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets created_by_information
     *
     * @return \DocuSign\eSign\Model\WorkspaceUser
     */
    public function getCreatedByInformation()
    {
        return $this->container['created_by_information'];
    }

    /**
     * Sets created_by_information
     *
     * @param \DocuSign\eSign\Model\WorkspaceUser $created_by_information created_by_information
     *
     * @return $this
     */
    public function setCreatedByInformation($created_by_information)
    {
        $this->container['created_by_information'] = $created_by_information;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return ?string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param ?string $last_modified Utc date and time the comment was last updated (can only be done by creator.)
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_modified_by_information
     *
     * @return \DocuSign\eSign\Model\WorkspaceUser
     */
    public function getLastModifiedByInformation()
    {
        return $this->container['last_modified_by_information'];
    }

    /**
     * Sets last_modified_by_information
     *
     * @param \DocuSign\eSign\Model\WorkspaceUser $last_modified_by_information last_modified_by_information
     *
     * @return $this
     */
    public function setLastModifiedByInformation($last_modified_by_information)
    {
        $this->container['last_modified_by_information'] = $last_modified_by_information;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \DocuSign\eSign\Model\WorkspaceSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \DocuSign\eSign\Model\WorkspaceSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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
     * Gets workspace_base_url
     *
     * @return ?string
     */
    public function getWorkspaceBaseUrl()
    {
        return $this->container['workspace_base_url'];
    }

    /**
     * Sets workspace_base_url
     *
     * @param ?string $workspace_base_url The relative URL that may be used to access the workspace.
     *
     * @return $this
     */
    public function setWorkspaceBaseUrl($workspace_base_url)
    {
        $this->container['workspace_base_url'] = $workspace_base_url;

        return $this;
    }

    /**
     * Gets workspace_description
     *
     * @return ?string
     */
    public function getWorkspaceDescription()
    {
        return $this->container['workspace_description'];
    }

    /**
     * Sets workspace_description
     *
     * @param ?string $workspace_description Text describing the purpose of the workspace.
     *
     * @return $this
     */
    public function setWorkspaceDescription($workspace_description)
    {
        $this->container['workspace_description'] = $workspace_description;

        return $this;
    }

    /**
     * Gets workspace_id
     *
     * @return ?string
     */
    public function getWorkspaceId()
    {
        return $this->container['workspace_id'];
    }

    /**
     * Sets workspace_id
     *
     * @param ?string $workspace_id The id of the workspace, always populated.
     *
     * @return $this
     */
    public function setWorkspaceId($workspace_id)
    {
        $this->container['workspace_id'] = $workspace_id;

        return $this;
    }

    /**
     * Gets workspace_name
     *
     * @return ?string
     */
    public function getWorkspaceName()
    {
        return $this->container['workspace_name'];
    }

    /**
     * Sets workspace_name
     *
     * @param ?string $workspace_name The name of the workspace.
     *
     * @return $this
     */
    public function setWorkspaceName($workspace_name)
    {
        $this->container['workspace_name'] = $workspace_name;

        return $this;
    }

    /**
     * Gets workspace_uri
     *
     * @return ?string
     */
    public function getWorkspaceUri()
    {
        return $this->container['workspace_uri'];
    }

    /**
     * Sets workspace_uri
     *
     * @param ?string $workspace_uri The relative URI that may be used to access the workspace.
     *
     * @return $this
     */
    public function setWorkspaceUri($workspace_uri)
    {
        $this->container['workspace_uri'] = $workspace_uri;

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

