<?php
/**
 * RecipientIdentityVerification
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
 * RecipientIdentityVerification Class Doc Comment
 *
 * @category    Class
 * @description Specifies ID Verification applied on an envelope by workflow ID. See the [list](/docs/esign-rest-api/reference/accounts/identityverifications/list/) method in the [IdentityVerifications](/docs/esign-rest-api/reference/accounts/identityverifications/) resource for more information on how to retrieve workflow IDs available for an account. This can be used in addition to other [recipient authentication](https://support.docusign.com/en/guides/ndse-user-guide-recipient-authentication) methods.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The Docusign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientIdentityVerification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientIdentityVerification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'input_options' => '\DocuSign\eSign\Model\RecipientIdentityInputOption[]',
        'workflow_id' => '?string',
        'workflow_id_metadata' => '\DocuSign\eSign\Model\PropertyMetadata',
        'workflow_label' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'input_options' => null,
        'workflow_id' => null,
        'workflow_id_metadata' => null,
        'workflow_label' => null
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
        'input_options' => 'inputOptions',
        'workflow_id' => 'workflowId',
        'workflow_id_metadata' => 'workflowIdMetadata',
        'workflow_label' => 'workflowLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input_options' => 'setInputOptions',
        'workflow_id' => 'setWorkflowId',
        'workflow_id_metadata' => 'setWorkflowIdMetadata',
        'workflow_label' => 'setWorkflowLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input_options' => 'getInputOptions',
        'workflow_id' => 'getWorkflowId',
        'workflow_id_metadata' => 'getWorkflowIdMetadata',
        'workflow_label' => 'getWorkflowLabel'
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
        $this->container['input_options'] = isset($data['input_options']) ? $data['input_options'] : null;
        $this->container['workflow_id'] = isset($data['workflow_id']) ? $data['workflow_id'] : null;
        $this->container['workflow_id_metadata'] = isset($data['workflow_id_metadata']) ? $data['workflow_id_metadata'] : null;
        $this->container['workflow_label'] = isset($data['workflow_label']) ? $data['workflow_label'] : null;
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
     * Gets input_options
     *
     * @return \DocuSign\eSign\Model\RecipientIdentityInputOption[]
     */
    public function getInputOptions()
    {
        return $this->container['input_options'];
    }

    /**
     * Sets input_options
     *
     * @param \DocuSign\eSign\Model\RecipientIdentityInputOption[] $input_options 
     *
     * @return $this
     */
    public function setInputOptions($input_options)
    {
        $this->container['input_options'] = $input_options;

        return $this;
    }

    /**
     * Gets workflow_id
     *
     * @return ?string
     */
    public function getWorkflowId()
    {
        return $this->container['workflow_id'];
    }

    /**
     * Sets workflow_id
     *
     * @param ?string $workflow_id 
     *
     * @return $this
     */
    public function setWorkflowId($workflow_id)
    {
        $this->container['workflow_id'] = $workflow_id;

        return $this;
    }

    /**
     * Gets workflow_id_metadata
     *
     * @return \DocuSign\eSign\Model\PropertyMetadata
     */
    public function getWorkflowIdMetadata()
    {
        return $this->container['workflow_id_metadata'];
    }

    /**
     * Sets workflow_id_metadata
     *
     * @param \DocuSign\eSign\Model\PropertyMetadata $workflow_id_metadata 
     *
     * @return $this
     */
    public function setWorkflowIdMetadata($workflow_id_metadata)
    {
        $this->container['workflow_id_metadata'] = $workflow_id_metadata;

        return $this;
    }

    /**
     * Gets workflow_label
     *
     * @return ?string
     */
    public function getWorkflowLabel()
    {
        return $this->container['workflow_label'];
    }

    /**
     * Sets workflow_label
     *
     * @param ?string $workflow_label 
     *
     * @return $this
     */
    public function setWorkflowLabel($workflow_label)
    {
        $this->container['workflow_label'] = $workflow_label;

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

