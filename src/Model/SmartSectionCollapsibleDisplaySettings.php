<?php
/**
 * SmartSectionCollapsibleDisplaySettings
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
 * SmartSectionCollapsibleDisplaySettings Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SmartSectionCollapsibleDisplaySettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'smartSectionCollapsibleDisplaySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arrow_closed' => '?string',
        'arrow_color' => '?string',
        'arrow_location' => '?string',
        'arrow_open' => '?string',
        'arrow_size' => '?string',
        'arrow_style' => '?string',
        'container_style' => '?string',
        'label_style' => '?string',
        'only_arrow_is_clickable' => '?bool',
        'outer_label_and_arrow_style' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arrow_closed' => null,
        'arrow_color' => null,
        'arrow_location' => null,
        'arrow_open' => null,
        'arrow_size' => null,
        'arrow_style' => null,
        'container_style' => null,
        'label_style' => null,
        'only_arrow_is_clickable' => null,
        'outer_label_and_arrow_style' => null
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
        'arrow_closed' => 'arrowClosed',
        'arrow_color' => 'arrowColor',
        'arrow_location' => 'arrowLocation',
        'arrow_open' => 'arrowOpen',
        'arrow_size' => 'arrowSize',
        'arrow_style' => 'arrowStyle',
        'container_style' => 'containerStyle',
        'label_style' => 'labelStyle',
        'only_arrow_is_clickable' => 'onlyArrowIsClickable',
        'outer_label_and_arrow_style' => 'outerLabelAndArrowStyle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrow_closed' => 'setArrowClosed',
        'arrow_color' => 'setArrowColor',
        'arrow_location' => 'setArrowLocation',
        'arrow_open' => 'setArrowOpen',
        'arrow_size' => 'setArrowSize',
        'arrow_style' => 'setArrowStyle',
        'container_style' => 'setContainerStyle',
        'label_style' => 'setLabelStyle',
        'only_arrow_is_clickable' => 'setOnlyArrowIsClickable',
        'outer_label_and_arrow_style' => 'setOuterLabelAndArrowStyle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrow_closed' => 'getArrowClosed',
        'arrow_color' => 'getArrowColor',
        'arrow_location' => 'getArrowLocation',
        'arrow_open' => 'getArrowOpen',
        'arrow_size' => 'getArrowSize',
        'arrow_style' => 'getArrowStyle',
        'container_style' => 'getContainerStyle',
        'label_style' => 'getLabelStyle',
        'only_arrow_is_clickable' => 'getOnlyArrowIsClickable',
        'outer_label_and_arrow_style' => 'getOuterLabelAndArrowStyle'
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
        $this->container['arrow_closed'] = isset($data['arrow_closed']) ? $data['arrow_closed'] : null;
        $this->container['arrow_color'] = isset($data['arrow_color']) ? $data['arrow_color'] : null;
        $this->container['arrow_location'] = isset($data['arrow_location']) ? $data['arrow_location'] : null;
        $this->container['arrow_open'] = isset($data['arrow_open']) ? $data['arrow_open'] : null;
        $this->container['arrow_size'] = isset($data['arrow_size']) ? $data['arrow_size'] : null;
        $this->container['arrow_style'] = isset($data['arrow_style']) ? $data['arrow_style'] : null;
        $this->container['container_style'] = isset($data['container_style']) ? $data['container_style'] : null;
        $this->container['label_style'] = isset($data['label_style']) ? $data['label_style'] : null;
        $this->container['only_arrow_is_clickable'] = isset($data['only_arrow_is_clickable']) ? $data['only_arrow_is_clickable'] : null;
        $this->container['outer_label_and_arrow_style'] = isset($data['outer_label_and_arrow_style']) ? $data['outer_label_and_arrow_style'] : null;
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
     * Gets arrow_closed
     *
     * @return ?string
     */
    public function getArrowClosed()
    {
        return $this->container['arrow_closed'];
    }

    /**
     * Sets arrow_closed
     *
     * @param ?string $arrow_closed 
     *
     * @return $this
     */
    public function setArrowClosed($arrow_closed)
    {
        $this->container['arrow_closed'] = $arrow_closed;

        return $this;
    }

    /**
     * Gets arrow_color
     *
     * @return ?string
     */
    public function getArrowColor()
    {
        return $this->container['arrow_color'];
    }

    /**
     * Sets arrow_color
     *
     * @param ?string $arrow_color 
     *
     * @return $this
     */
    public function setArrowColor($arrow_color)
    {
        $this->container['arrow_color'] = $arrow_color;

        return $this;
    }

    /**
     * Gets arrow_location
     *
     * @return ?string
     */
    public function getArrowLocation()
    {
        return $this->container['arrow_location'];
    }

    /**
     * Sets arrow_location
     *
     * @param ?string $arrow_location 
     *
     * @return $this
     */
    public function setArrowLocation($arrow_location)
    {
        $this->container['arrow_location'] = $arrow_location;

        return $this;
    }

    /**
     * Gets arrow_open
     *
     * @return ?string
     */
    public function getArrowOpen()
    {
        return $this->container['arrow_open'];
    }

    /**
     * Sets arrow_open
     *
     * @param ?string $arrow_open 
     *
     * @return $this
     */
    public function setArrowOpen($arrow_open)
    {
        $this->container['arrow_open'] = $arrow_open;

        return $this;
    }

    /**
     * Gets arrow_size
     *
     * @return ?string
     */
    public function getArrowSize()
    {
        return $this->container['arrow_size'];
    }

    /**
     * Sets arrow_size
     *
     * @param ?string $arrow_size 
     *
     * @return $this
     */
    public function setArrowSize($arrow_size)
    {
        $this->container['arrow_size'] = $arrow_size;

        return $this;
    }

    /**
     * Gets arrow_style
     *
     * @return ?string
     */
    public function getArrowStyle()
    {
        return $this->container['arrow_style'];
    }

    /**
     * Sets arrow_style
     *
     * @param ?string $arrow_style 
     *
     * @return $this
     */
    public function setArrowStyle($arrow_style)
    {
        $this->container['arrow_style'] = $arrow_style;

        return $this;
    }

    /**
     * Gets container_style
     *
     * @return ?string
     */
    public function getContainerStyle()
    {
        return $this->container['container_style'];
    }

    /**
     * Sets container_style
     *
     * @param ?string $container_style 
     *
     * @return $this
     */
    public function setContainerStyle($container_style)
    {
        $this->container['container_style'] = $container_style;

        return $this;
    }

    /**
     * Gets label_style
     *
     * @return ?string
     */
    public function getLabelStyle()
    {
        return $this->container['label_style'];
    }

    /**
     * Sets label_style
     *
     * @param ?string $label_style 
     *
     * @return $this
     */
    public function setLabelStyle($label_style)
    {
        $this->container['label_style'] = $label_style;

        return $this;
    }

    /**
     * Gets only_arrow_is_clickable
     *
     * @return ?bool
     */
    public function getOnlyArrowIsClickable()
    {
        return $this->container['only_arrow_is_clickable'];
    }

    /**
     * Sets only_arrow_is_clickable
     *
     * @param ?bool $only_arrow_is_clickable 
     *
     * @return $this
     */
    public function setOnlyArrowIsClickable($only_arrow_is_clickable)
    {
        $this->container['only_arrow_is_clickable'] = $only_arrow_is_clickable;

        return $this;
    }

    /**
     * Gets outer_label_and_arrow_style
     *
     * @return ?string
     */
    public function getOuterLabelAndArrowStyle()
    {
        return $this->container['outer_label_and_arrow_style'];
    }

    /**
     * Sets outer_label_and_arrow_style
     *
     * @param ?string $outer_label_and_arrow_style 
     *
     * @return $this
     */
    public function setOuterLabelAndArrowStyle($outer_label_and_arrow_style)
    {
        $this->container['outer_label_and_arrow_style'] = $outer_label_and_arrow_style;

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

