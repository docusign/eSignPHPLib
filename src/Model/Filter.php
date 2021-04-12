<?php
/**
 * Filter
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
 * Filter Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Filter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'filter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_required' => '?string',
        'expires' => '?string',
        'folder_ids' => '?string',
        'from_date_time' => '?string',
        'is_template' => '?string',
        'order' => '?string',
        'order_by' => '?string',
        'search_target' => '?string',
        'search_text' => '?string',
        'status' => '?string',
        'to_date_time' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_required' => null,
        'expires' => null,
        'folder_ids' => null,
        'from_date_time' => null,
        'is_template' => null,
        'order' => null,
        'order_by' => null,
        'search_target' => null,
        'search_text' => null,
        'status' => null,
        'to_date_time' => null
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
        'action_required' => 'actionRequired',
        'expires' => 'expires',
        'folder_ids' => 'folderIds',
        'from_date_time' => 'fromDateTime',
        'is_template' => 'isTemplate',
        'order' => 'order',
        'order_by' => 'orderBy',
        'search_target' => 'searchTarget',
        'search_text' => 'searchText',
        'status' => 'status',
        'to_date_time' => 'toDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_required' => 'setActionRequired',
        'expires' => 'setExpires',
        'folder_ids' => 'setFolderIds',
        'from_date_time' => 'setFromDateTime',
        'is_template' => 'setIsTemplate',
        'order' => 'setOrder',
        'order_by' => 'setOrderBy',
        'search_target' => 'setSearchTarget',
        'search_text' => 'setSearchText',
        'status' => 'setStatus',
        'to_date_time' => 'setToDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_required' => 'getActionRequired',
        'expires' => 'getExpires',
        'folder_ids' => 'getFolderIds',
        'from_date_time' => 'getFromDateTime',
        'is_template' => 'getIsTemplate',
        'order' => 'getOrder',
        'order_by' => 'getOrderBy',
        'search_target' => 'getSearchTarget',
        'search_text' => 'getSearchText',
        'status' => 'getStatus',
        'to_date_time' => 'getToDateTime'
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
        $this->container['action_required'] = isset($data['action_required']) ? $data['action_required'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['folder_ids'] = isset($data['folder_ids']) ? $data['folder_ids'] : null;
        $this->container['from_date_time'] = isset($data['from_date_time']) ? $data['from_date_time'] : null;
        $this->container['is_template'] = isset($data['is_template']) ? $data['is_template'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['search_target'] = isset($data['search_target']) ? $data['search_target'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['to_date_time'] = isset($data['to_date_time']) ? $data['to_date_time'] : null;
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
     * Gets action_required
     *
     * @return ?string
     */
    public function getActionRequired()
    {
        return $this->container['action_required'];
    }

    /**
     * Sets action_required
     *
     * @param ?string $action_required Access token information.
     *
     * @return $this
     */
    public function setActionRequired($action_required)
    {
        $this->container['action_required'] = $action_required;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return ?string
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param ?string $expires 
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets folder_ids
     *
     * @return ?string
     */
    public function getFolderIds()
    {
        return $this->container['folder_ids'];
    }

    /**
     * Sets folder_ids
     *
     * @param ?string $folder_ids 
     *
     * @return $this
     */
    public function setFolderIds($folder_ids)
    {
        $this->container['folder_ids'] = $folder_ids;

        return $this;
    }

    /**
     * Gets from_date_time
     *
     * @return ?string
     */
    public function getFromDateTime()
    {
        return $this->container['from_date_time'];
    }

    /**
     * Sets from_date_time
     *
     * @param ?string $from_date_time 
     *
     * @return $this
     */
    public function setFromDateTime($from_date_time)
    {
        $this->container['from_date_time'] = $from_date_time;

        return $this;
    }

    /**
     * Gets is_template
     *
     * @return ?string
     */
    public function getIsTemplate()
    {
        return $this->container['is_template'];
    }

    /**
     * Sets is_template
     *
     * @param ?string $is_template 
     *
     * @return $this
     */
    public function setIsTemplate($is_template)
    {
        $this->container['is_template'] = $is_template;

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
     * Gets order_by
     *
     * @return ?string
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param ?string $order_by 
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets search_target
     *
     * @return ?string
     */
    public function getSearchTarget()
    {
        return $this->container['search_target'];
    }

    /**
     * Sets search_target
     *
     * @param ?string $search_target 
     *
     * @return $this
     */
    public function setSearchTarget($search_target)
    {
        $this->container['search_target'] = $search_target;

        return $this;
    }

    /**
     * Gets search_text
     *
     * @return ?string
     */
    public function getSearchText()
    {
        return $this->container['search_text'];
    }

    /**
     * Sets search_text
     *
     * @param ?string $search_text 
     *
     * @return $this
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

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
     * Gets to_date_time
     *
     * @return ?string
     */
    public function getToDateTime()
    {
        return $this->container['to_date_time'];
    }

    /**
     * Sets to_date_time
     *
     * @param ?string $to_date_time Must be set to \"bearer\".
     *
     * @return $this
     */
    public function setToDateTime($to_date_time)
    {
        $this->container['to_date_time'] = $to_date_time;

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

