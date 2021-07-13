<?php
/**
 * RecipientSignatureInformation
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
 * RecipientSignatureInformation Class Doc Comment
 *
 * @category    Class
 * @description Allows the sender to pre-specify the signature name, signature initials and signature font used in the signature stamp for the recipient.  Used only with recipient types In Person Signers and Signers.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientSignatureInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientSignatureInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'font_style' => '?string',
        'signature_initials' => '?string',
        'signature_name' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'font_style' => null,
        'signature_initials' => null,
        'signature_name' => null
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
        'font_style' => 'fontStyle',
        'signature_initials' => 'signatureInitials',
        'signature_name' => 'signatureName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'font_style' => 'setFontStyle',
        'signature_initials' => 'setSignatureInitials',
        'signature_name' => 'setSignatureName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'font_style' => 'getFontStyle',
        'signature_initials' => 'getSignatureInitials',
        'signature_name' => 'getSignatureName'
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
        $this->container['font_style'] = isset($data['font_style']) ? $data['font_style'] : null;
        $this->container['signature_initials'] = isset($data['signature_initials']) ? $data['signature_initials'] : null;
        $this->container['signature_name'] = isset($data['signature_name']) ? $data['signature_name'] : null;
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
     * Gets font_style
     *
     * @return ?string
     */
    public function getFontStyle()
    {
        return $this->container['font_style'];
    }

    /**
     * Sets font_style
     *
     * @param ?string $font_style 
     *
     * @return $this
     */
    public function setFontStyle($font_style)
    {
        $this->container['font_style'] = $font_style;

        return $this;
    }

    /**
     * Gets signature_initials
     *
     * @return ?string
     */
    public function getSignatureInitials()
    {
        return $this->container['signature_initials'];
    }

    /**
     * Sets signature_initials
     *
     * @param ?string $signature_initials 
     *
     * @return $this
     */
    public function setSignatureInitials($signature_initials)
    {
        $this->container['signature_initials'] = $signature_initials;

        return $this;
    }

    /**
     * Gets signature_name
     *
     * @return ?string
     */
    public function getSignatureName()
    {
        return $this->container['signature_name'];
    }

    /**
     * Sets signature_name
     *
     * @param ?string $signature_name Specifies the user signature name.
     *
     * @return $this
     */
    public function setSignatureName($signature_name)
    {
        $this->container['signature_name'] = $signature_name;

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

