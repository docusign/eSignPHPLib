<?php
/**
 * IdCheckInformationInput
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
 * IdCheckInformationInput Class Doc Comment
 *
 * @category    Class
 * @description A complex element that contains input information related to a recipient ID check. It can include the following information.  addressInformationInput: Used to set recipient address information and consists of:  * addressInformation: consists of six elements, with stree2 and zipPlus4 being optional. The elements are: street1, street2, city, state, zip, zipPlus4. The maximum length of each element is: street1/street2 &#x3D; 150 characters, city &#x3D; 50 characters, state &#x3D; 2 characters, and zip/zipPlus4 &#x3D; 20 characters. * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay. * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.  dobInformationInput: Used to set recipient date of birth information and consists of:  * dateOfBirth: Specifies the recipient&#39;s date, month and year of birth. * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay. * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.  ssn4InformationInput: Used to set the last four digits of the recipient&#39;s SSN information and consists of:  * ssn4: Specifies the last four digits of the recipient&#39;s SSN. * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay. * receiveInResponse: A Boolean element that specifies if the information needs to be returned in the response.  ssn9InformationInput: Used to set the recipient&#39;s SSN information. Note that the ssn9 information can never be returned in the response. The ssn9 input consists of:  * ssn9: Specifies the recipient&#39;s SSN. * displayLevelCode: Specifies the display level for the recipient. Values are: ReadOnly, Editable, or DoNotDisplay.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class IdCheckInformationInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'idCheckInformationInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_information_input' => '\DocuSign\eSign\Model\AddressInformationInput',
        'dob_information_input' => '\DocuSign\eSign\Model\DobInformationInput',
        'ssn4_information_input' => '\DocuSign\eSign\Model\Ssn4InformationInput',
        'ssn9_information_input' => '\DocuSign\eSign\Model\Ssn9InformationInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_information_input' => null,
        'dob_information_input' => null,
        'ssn4_information_input' => null,
        'ssn9_information_input' => null
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
        'address_information_input' => 'addressInformationInput',
        'dob_information_input' => 'dobInformationInput',
        'ssn4_information_input' => 'ssn4InformationInput',
        'ssn9_information_input' => 'ssn9InformationInput'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_information_input' => 'setAddressInformationInput',
        'dob_information_input' => 'setDobInformationInput',
        'ssn4_information_input' => 'setSsn4InformationInput',
        'ssn9_information_input' => 'setSsn9InformationInput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_information_input' => 'getAddressInformationInput',
        'dob_information_input' => 'getDobInformationInput',
        'ssn4_information_input' => 'getSsn4InformationInput',
        'ssn9_information_input' => 'getSsn9InformationInput'
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
        $this->container['address_information_input'] = isset($data['address_information_input']) ? $data['address_information_input'] : null;
        $this->container['dob_information_input'] = isset($data['dob_information_input']) ? $data['dob_information_input'] : null;
        $this->container['ssn4_information_input'] = isset($data['ssn4_information_input']) ? $data['ssn4_information_input'] : null;
        $this->container['ssn9_information_input'] = isset($data['ssn9_information_input']) ? $data['ssn9_information_input'] : null;
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
     * Gets address_information_input
     *
     * @return \DocuSign\eSign\Model\AddressInformationInput
     */
    public function getAddressInformationInput()
    {
        return $this->container['address_information_input'];
    }

    /**
     * Sets address_information_input
     *
     * @param \DocuSign\eSign\Model\AddressInformationInput $address_information_input address_information_input
     *
     * @return $this
     */
    public function setAddressInformationInput($address_information_input)
    {
        $this->container['address_information_input'] = $address_information_input;

        return $this;
    }

    /**
     * Gets dob_information_input
     *
     * @return \DocuSign\eSign\Model\DobInformationInput
     */
    public function getDobInformationInput()
    {
        return $this->container['dob_information_input'];
    }

    /**
     * Sets dob_information_input
     *
     * @param \DocuSign\eSign\Model\DobInformationInput $dob_information_input dob_information_input
     *
     * @return $this
     */
    public function setDobInformationInput($dob_information_input)
    {
        $this->container['dob_information_input'] = $dob_information_input;

        return $this;
    }

    /**
     * Gets ssn4_information_input
     *
     * @return \DocuSign\eSign\Model\Ssn4InformationInput
     */
    public function getSsn4InformationInput()
    {
        return $this->container['ssn4_information_input'];
    }

    /**
     * Sets ssn4_information_input
     *
     * @param \DocuSign\eSign\Model\Ssn4InformationInput $ssn4_information_input ssn4_information_input
     *
     * @return $this
     */
    public function setSsn4InformationInput($ssn4_information_input)
    {
        $this->container['ssn4_information_input'] = $ssn4_information_input;

        return $this;
    }

    /**
     * Gets ssn9_information_input
     *
     * @return \DocuSign\eSign\Model\Ssn9InformationInput
     */
    public function getSsn9InformationInput()
    {
        return $this->container['ssn9_information_input'];
    }

    /**
     * Sets ssn9_information_input
     *
     * @param \DocuSign\eSign\Model\Ssn9InformationInput $ssn9_information_input ssn9_information_input
     *
     * @return $this
     */
    public function setSsn9InformationInput($ssn9_information_input)
    {
        $this->container['ssn9_information_input'] = $ssn9_information_input;

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

