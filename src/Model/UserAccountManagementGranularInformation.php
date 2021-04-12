<?php
/**
 * UserAccountManagementGranularInformation
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
 * UserAccountManagementGranularInformation Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserAccountManagementGranularInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'userAccountManagementGranularInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_manage_account_security_settings' => '?string',
        'can_manage_account_security_settings_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_account_settings' => '?string',
        'can_manage_account_settings_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_admins' => '?string',
        'can_manage_admins_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_envelope_transfer' => '?string',
        'can_manage_envelope_transfer_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_reporting' => '?string',
        'can_manage_reporting_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_sharing' => '?string',
        'can_manage_sharing_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_signing_groups' => '?string',
        'can_manage_signing_groups_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_manage_users' => '?string',
        'can_manage_users_metadata' => '\DocuSign\eSign\Model\SettingsMetadata',
        'can_view_users' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_manage_account_security_settings' => null,
        'can_manage_account_security_settings_metadata' => null,
        'can_manage_account_settings' => null,
        'can_manage_account_settings_metadata' => null,
        'can_manage_admins' => null,
        'can_manage_admins_metadata' => null,
        'can_manage_envelope_transfer' => null,
        'can_manage_envelope_transfer_metadata' => null,
        'can_manage_reporting' => null,
        'can_manage_reporting_metadata' => null,
        'can_manage_sharing' => null,
        'can_manage_sharing_metadata' => null,
        'can_manage_signing_groups' => null,
        'can_manage_signing_groups_metadata' => null,
        'can_manage_users' => null,
        'can_manage_users_metadata' => null,
        'can_view_users' => null
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
        'can_manage_account_security_settings' => 'canManageAccountSecuritySettings',
        'can_manage_account_security_settings_metadata' => 'canManageAccountSecuritySettingsMetadata',
        'can_manage_account_settings' => 'canManageAccountSettings',
        'can_manage_account_settings_metadata' => 'canManageAccountSettingsMetadata',
        'can_manage_admins' => 'canManageAdmins',
        'can_manage_admins_metadata' => 'canManageAdminsMetadata',
        'can_manage_envelope_transfer' => 'canManageEnvelopeTransfer',
        'can_manage_envelope_transfer_metadata' => 'canManageEnvelopeTransferMetadata',
        'can_manage_reporting' => 'canManageReporting',
        'can_manage_reporting_metadata' => 'canManageReportingMetadata',
        'can_manage_sharing' => 'canManageSharing',
        'can_manage_sharing_metadata' => 'canManageSharingMetadata',
        'can_manage_signing_groups' => 'canManageSigningGroups',
        'can_manage_signing_groups_metadata' => 'canManageSigningGroupsMetadata',
        'can_manage_users' => 'canManageUsers',
        'can_manage_users_metadata' => 'canManageUsersMetadata',
        'can_view_users' => 'canViewUsers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_manage_account_security_settings' => 'setCanManageAccountSecuritySettings',
        'can_manage_account_security_settings_metadata' => 'setCanManageAccountSecuritySettingsMetadata',
        'can_manage_account_settings' => 'setCanManageAccountSettings',
        'can_manage_account_settings_metadata' => 'setCanManageAccountSettingsMetadata',
        'can_manage_admins' => 'setCanManageAdmins',
        'can_manage_admins_metadata' => 'setCanManageAdminsMetadata',
        'can_manage_envelope_transfer' => 'setCanManageEnvelopeTransfer',
        'can_manage_envelope_transfer_metadata' => 'setCanManageEnvelopeTransferMetadata',
        'can_manage_reporting' => 'setCanManageReporting',
        'can_manage_reporting_metadata' => 'setCanManageReportingMetadata',
        'can_manage_sharing' => 'setCanManageSharing',
        'can_manage_sharing_metadata' => 'setCanManageSharingMetadata',
        'can_manage_signing_groups' => 'setCanManageSigningGroups',
        'can_manage_signing_groups_metadata' => 'setCanManageSigningGroupsMetadata',
        'can_manage_users' => 'setCanManageUsers',
        'can_manage_users_metadata' => 'setCanManageUsersMetadata',
        'can_view_users' => 'setCanViewUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_manage_account_security_settings' => 'getCanManageAccountSecuritySettings',
        'can_manage_account_security_settings_metadata' => 'getCanManageAccountSecuritySettingsMetadata',
        'can_manage_account_settings' => 'getCanManageAccountSettings',
        'can_manage_account_settings_metadata' => 'getCanManageAccountSettingsMetadata',
        'can_manage_admins' => 'getCanManageAdmins',
        'can_manage_admins_metadata' => 'getCanManageAdminsMetadata',
        'can_manage_envelope_transfer' => 'getCanManageEnvelopeTransfer',
        'can_manage_envelope_transfer_metadata' => 'getCanManageEnvelopeTransferMetadata',
        'can_manage_reporting' => 'getCanManageReporting',
        'can_manage_reporting_metadata' => 'getCanManageReportingMetadata',
        'can_manage_sharing' => 'getCanManageSharing',
        'can_manage_sharing_metadata' => 'getCanManageSharingMetadata',
        'can_manage_signing_groups' => 'getCanManageSigningGroups',
        'can_manage_signing_groups_metadata' => 'getCanManageSigningGroupsMetadata',
        'can_manage_users' => 'getCanManageUsers',
        'can_manage_users_metadata' => 'getCanManageUsersMetadata',
        'can_view_users' => 'getCanViewUsers'
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
        $this->container['can_manage_account_security_settings'] = isset($data['can_manage_account_security_settings']) ? $data['can_manage_account_security_settings'] : null;
        $this->container['can_manage_account_security_settings_metadata'] = isset($data['can_manage_account_security_settings_metadata']) ? $data['can_manage_account_security_settings_metadata'] : null;
        $this->container['can_manage_account_settings'] = isset($data['can_manage_account_settings']) ? $data['can_manage_account_settings'] : null;
        $this->container['can_manage_account_settings_metadata'] = isset($data['can_manage_account_settings_metadata']) ? $data['can_manage_account_settings_metadata'] : null;
        $this->container['can_manage_admins'] = isset($data['can_manage_admins']) ? $data['can_manage_admins'] : null;
        $this->container['can_manage_admins_metadata'] = isset($data['can_manage_admins_metadata']) ? $data['can_manage_admins_metadata'] : null;
        $this->container['can_manage_envelope_transfer'] = isset($data['can_manage_envelope_transfer']) ? $data['can_manage_envelope_transfer'] : null;
        $this->container['can_manage_envelope_transfer_metadata'] = isset($data['can_manage_envelope_transfer_metadata']) ? $data['can_manage_envelope_transfer_metadata'] : null;
        $this->container['can_manage_reporting'] = isset($data['can_manage_reporting']) ? $data['can_manage_reporting'] : null;
        $this->container['can_manage_reporting_metadata'] = isset($data['can_manage_reporting_metadata']) ? $data['can_manage_reporting_metadata'] : null;
        $this->container['can_manage_sharing'] = isset($data['can_manage_sharing']) ? $data['can_manage_sharing'] : null;
        $this->container['can_manage_sharing_metadata'] = isset($data['can_manage_sharing_metadata']) ? $data['can_manage_sharing_metadata'] : null;
        $this->container['can_manage_signing_groups'] = isset($data['can_manage_signing_groups']) ? $data['can_manage_signing_groups'] : null;
        $this->container['can_manage_signing_groups_metadata'] = isset($data['can_manage_signing_groups_metadata']) ? $data['can_manage_signing_groups_metadata'] : null;
        $this->container['can_manage_users'] = isset($data['can_manage_users']) ? $data['can_manage_users'] : null;
        $this->container['can_manage_users_metadata'] = isset($data['can_manage_users_metadata']) ? $data['can_manage_users_metadata'] : null;
        $this->container['can_view_users'] = isset($data['can_view_users']) ? $data['can_view_users'] : null;
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
     * Gets can_manage_account_security_settings
     *
     * @return ?string
     */
    public function getCanManageAccountSecuritySettings()
    {
        return $this->container['can_manage_account_security_settings'];
    }

    /**
     * Sets can_manage_account_security_settings
     *
     * @param ?string $can_manage_account_security_settings 
     *
     * @return $this
     */
    public function setCanManageAccountSecuritySettings($can_manage_account_security_settings)
    {
        $this->container['can_manage_account_security_settings'] = $can_manage_account_security_settings;

        return $this;
    }

    /**
     * Gets can_manage_account_security_settings_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageAccountSecuritySettingsMetadata()
    {
        return $this->container['can_manage_account_security_settings_metadata'];
    }

    /**
     * Sets can_manage_account_security_settings_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_account_security_settings_metadata can_manage_account_security_settings_metadata
     *
     * @return $this
     */
    public function setCanManageAccountSecuritySettingsMetadata($can_manage_account_security_settings_metadata)
    {
        $this->container['can_manage_account_security_settings_metadata'] = $can_manage_account_security_settings_metadata;

        return $this;
    }

    /**
     * Gets can_manage_account_settings
     *
     * @return ?string
     */
    public function getCanManageAccountSettings()
    {
        return $this->container['can_manage_account_settings'];
    }

    /**
     * Sets can_manage_account_settings
     *
     * @param ?string $can_manage_account_settings 
     *
     * @return $this
     */
    public function setCanManageAccountSettings($can_manage_account_settings)
    {
        $this->container['can_manage_account_settings'] = $can_manage_account_settings;

        return $this;
    }

    /**
     * Gets can_manage_account_settings_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageAccountSettingsMetadata()
    {
        return $this->container['can_manage_account_settings_metadata'];
    }

    /**
     * Sets can_manage_account_settings_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_account_settings_metadata can_manage_account_settings_metadata
     *
     * @return $this
     */
    public function setCanManageAccountSettingsMetadata($can_manage_account_settings_metadata)
    {
        $this->container['can_manage_account_settings_metadata'] = $can_manage_account_settings_metadata;

        return $this;
    }

    /**
     * Gets can_manage_admins
     *
     * @return ?string
     */
    public function getCanManageAdmins()
    {
        return $this->container['can_manage_admins'];
    }

    /**
     * Sets can_manage_admins
     *
     * @param ?string $can_manage_admins 
     *
     * @return $this
     */
    public function setCanManageAdmins($can_manage_admins)
    {
        $this->container['can_manage_admins'] = $can_manage_admins;

        return $this;
    }

    /**
     * Gets can_manage_admins_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageAdminsMetadata()
    {
        return $this->container['can_manage_admins_metadata'];
    }

    /**
     * Sets can_manage_admins_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_admins_metadata can_manage_admins_metadata
     *
     * @return $this
     */
    public function setCanManageAdminsMetadata($can_manage_admins_metadata)
    {
        $this->container['can_manage_admins_metadata'] = $can_manage_admins_metadata;

        return $this;
    }

    /**
     * Gets can_manage_envelope_transfer
     *
     * @return ?string
     */
    public function getCanManageEnvelopeTransfer()
    {
        return $this->container['can_manage_envelope_transfer'];
    }

    /**
     * Sets can_manage_envelope_transfer
     *
     * @param ?string $can_manage_envelope_transfer 
     *
     * @return $this
     */
    public function setCanManageEnvelopeTransfer($can_manage_envelope_transfer)
    {
        $this->container['can_manage_envelope_transfer'] = $can_manage_envelope_transfer;

        return $this;
    }

    /**
     * Gets can_manage_envelope_transfer_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageEnvelopeTransferMetadata()
    {
        return $this->container['can_manage_envelope_transfer_metadata'];
    }

    /**
     * Sets can_manage_envelope_transfer_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_envelope_transfer_metadata can_manage_envelope_transfer_metadata
     *
     * @return $this
     */
    public function setCanManageEnvelopeTransferMetadata($can_manage_envelope_transfer_metadata)
    {
        $this->container['can_manage_envelope_transfer_metadata'] = $can_manage_envelope_transfer_metadata;

        return $this;
    }

    /**
     * Gets can_manage_reporting
     *
     * @return ?string
     */
    public function getCanManageReporting()
    {
        return $this->container['can_manage_reporting'];
    }

    /**
     * Sets can_manage_reporting
     *
     * @param ?string $can_manage_reporting 
     *
     * @return $this
     */
    public function setCanManageReporting($can_manage_reporting)
    {
        $this->container['can_manage_reporting'] = $can_manage_reporting;

        return $this;
    }

    /**
     * Gets can_manage_reporting_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageReportingMetadata()
    {
        return $this->container['can_manage_reporting_metadata'];
    }

    /**
     * Sets can_manage_reporting_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_reporting_metadata can_manage_reporting_metadata
     *
     * @return $this
     */
    public function setCanManageReportingMetadata($can_manage_reporting_metadata)
    {
        $this->container['can_manage_reporting_metadata'] = $can_manage_reporting_metadata;

        return $this;
    }

    /**
     * Gets can_manage_sharing
     *
     * @return ?string
     */
    public function getCanManageSharing()
    {
        return $this->container['can_manage_sharing'];
    }

    /**
     * Sets can_manage_sharing
     *
     * @param ?string $can_manage_sharing 
     *
     * @return $this
     */
    public function setCanManageSharing($can_manage_sharing)
    {
        $this->container['can_manage_sharing'] = $can_manage_sharing;

        return $this;
    }

    /**
     * Gets can_manage_sharing_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageSharingMetadata()
    {
        return $this->container['can_manage_sharing_metadata'];
    }

    /**
     * Sets can_manage_sharing_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_sharing_metadata can_manage_sharing_metadata
     *
     * @return $this
     */
    public function setCanManageSharingMetadata($can_manage_sharing_metadata)
    {
        $this->container['can_manage_sharing_metadata'] = $can_manage_sharing_metadata;

        return $this;
    }

    /**
     * Gets can_manage_signing_groups
     *
     * @return ?string
     */
    public function getCanManageSigningGroups()
    {
        return $this->container['can_manage_signing_groups'];
    }

    /**
     * Sets can_manage_signing_groups
     *
     * @param ?string $can_manage_signing_groups 
     *
     * @return $this
     */
    public function setCanManageSigningGroups($can_manage_signing_groups)
    {
        $this->container['can_manage_signing_groups'] = $can_manage_signing_groups;

        return $this;
    }

    /**
     * Gets can_manage_signing_groups_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageSigningGroupsMetadata()
    {
        return $this->container['can_manage_signing_groups_metadata'];
    }

    /**
     * Sets can_manage_signing_groups_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_signing_groups_metadata can_manage_signing_groups_metadata
     *
     * @return $this
     */
    public function setCanManageSigningGroupsMetadata($can_manage_signing_groups_metadata)
    {
        $this->container['can_manage_signing_groups_metadata'] = $can_manage_signing_groups_metadata;

        return $this;
    }

    /**
     * Gets can_manage_users
     *
     * @return ?string
     */
    public function getCanManageUsers()
    {
        return $this->container['can_manage_users'];
    }

    /**
     * Sets can_manage_users
     *
     * @param ?string $can_manage_users 
     *
     * @return $this
     */
    public function setCanManageUsers($can_manage_users)
    {
        $this->container['can_manage_users'] = $can_manage_users;

        return $this;
    }

    /**
     * Gets can_manage_users_metadata
     *
     * @return \DocuSign\eSign\Model\SettingsMetadata
     */
    public function getCanManageUsersMetadata()
    {
        return $this->container['can_manage_users_metadata'];
    }

    /**
     * Sets can_manage_users_metadata
     *
     * @param \DocuSign\eSign\Model\SettingsMetadata $can_manage_users_metadata can_manage_users_metadata
     *
     * @return $this
     */
    public function setCanManageUsersMetadata($can_manage_users_metadata)
    {
        $this->container['can_manage_users_metadata'] = $can_manage_users_metadata;

        return $this;
    }

    /**
     * Gets can_view_users
     *
     * @return ?string
     */
    public function getCanViewUsers()
    {
        return $this->container['can_view_users'];
    }

    /**
     * Sets can_view_users
     *
     * @param ?string $can_view_users 
     *
     * @return $this
     */
    public function setCanViewUsers($can_view_users)
    {
        $this->container['can_view_users'] = $can_view_users;

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

