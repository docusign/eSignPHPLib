<?php
/**
 * RecipientViewRequest
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
 * RecipientViewRequest Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientViewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'recipientViewRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assertion_id' => '?string',
        'authentication_instant' => '?string',
        'authentication_method' => '?string',
        'client_ur_ls' => '\DocuSign\eSign\Model\RecipientTokenClientURLs',
        'client_user_id' => '?string',
        'email' => '?string',
        'frame_ancestors' => '?string[]',
        'message_origins' => '?string[]',
        'ping_frequency' => '?string',
        'ping_url' => '?string',
        'recipient_id' => '?string',
        'return_url' => '?string',
        'security_domain' => '?string',
        'user_id' => '?string',
        'user_name' => '?string',
        'x_frame_options' => '?string',
        'x_frame_options_allow_from_url' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assertion_id' => null,
        'authentication_instant' => null,
        'authentication_method' => null,
        'client_ur_ls' => null,
        'client_user_id' => null,
        'email' => null,
        'frame_ancestors' => null,
        'message_origins' => null,
        'ping_frequency' => null,
        'ping_url' => null,
        'recipient_id' => null,
        'return_url' => null,
        'security_domain' => null,
        'user_id' => null,
        'user_name' => null,
        'x_frame_options' => null,
        'x_frame_options_allow_from_url' => null
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
        'assertion_id' => 'assertionId',
        'authentication_instant' => 'authenticationInstant',
        'authentication_method' => 'authenticationMethod',
        'client_ur_ls' => 'clientURLs',
        'client_user_id' => 'clientUserId',
        'email' => 'email',
        'frame_ancestors' => 'frameAncestors',
        'message_origins' => 'messageOrigins',
        'ping_frequency' => 'pingFrequency',
        'ping_url' => 'pingUrl',
        'recipient_id' => 'recipientId',
        'return_url' => 'returnUrl',
        'security_domain' => 'securityDomain',
        'user_id' => 'userId',
        'user_name' => 'userName',
        'x_frame_options' => 'xFrameOptions',
        'x_frame_options_allow_from_url' => 'xFrameOptionsAllowFromUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assertion_id' => 'setAssertionId',
        'authentication_instant' => 'setAuthenticationInstant',
        'authentication_method' => 'setAuthenticationMethod',
        'client_ur_ls' => 'setClientUrLs',
        'client_user_id' => 'setClientUserId',
        'email' => 'setEmail',
        'frame_ancestors' => 'setFrameAncestors',
        'message_origins' => 'setMessageOrigins',
        'ping_frequency' => 'setPingFrequency',
        'ping_url' => 'setPingUrl',
        'recipient_id' => 'setRecipientId',
        'return_url' => 'setReturnUrl',
        'security_domain' => 'setSecurityDomain',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'x_frame_options' => 'setXFrameOptions',
        'x_frame_options_allow_from_url' => 'setXFrameOptionsAllowFromUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assertion_id' => 'getAssertionId',
        'authentication_instant' => 'getAuthenticationInstant',
        'authentication_method' => 'getAuthenticationMethod',
        'client_ur_ls' => 'getClientUrLs',
        'client_user_id' => 'getClientUserId',
        'email' => 'getEmail',
        'frame_ancestors' => 'getFrameAncestors',
        'message_origins' => 'getMessageOrigins',
        'ping_frequency' => 'getPingFrequency',
        'ping_url' => 'getPingUrl',
        'recipient_id' => 'getRecipientId',
        'return_url' => 'getReturnUrl',
        'security_domain' => 'getSecurityDomain',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'x_frame_options' => 'getXFrameOptions',
        'x_frame_options_allow_from_url' => 'getXFrameOptionsAllowFromUrl'
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
        $this->container['assertion_id'] = isset($data['assertion_id']) ? $data['assertion_id'] : null;
        $this->container['authentication_instant'] = isset($data['authentication_instant']) ? $data['authentication_instant'] : null;
        $this->container['authentication_method'] = isset($data['authentication_method']) ? $data['authentication_method'] : null;
        $this->container['client_ur_ls'] = isset($data['client_ur_ls']) ? $data['client_ur_ls'] : null;
        $this->container['client_user_id'] = isset($data['client_user_id']) ? $data['client_user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['frame_ancestors'] = isset($data['frame_ancestors']) ? $data['frame_ancestors'] : null;
        $this->container['message_origins'] = isset($data['message_origins']) ? $data['message_origins'] : null;
        $this->container['ping_frequency'] = isset($data['ping_frequency']) ? $data['ping_frequency'] : null;
        $this->container['ping_url'] = isset($data['ping_url']) ? $data['ping_url'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['return_url'] = isset($data['return_url']) ? $data['return_url'] : null;
        $this->container['security_domain'] = isset($data['security_domain']) ? $data['security_domain'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['x_frame_options'] = isset($data['x_frame_options']) ? $data['x_frame_options'] : null;
        $this->container['x_frame_options_allow_from_url'] = isset($data['x_frame_options_allow_from_url']) ? $data['x_frame_options_allow_from_url'] : null;
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
     * Gets assertion_id
     *
     * @return ?string
     */
    public function getAssertionId()
    {
        return $this->container['assertion_id'];
    }

    /**
     * Sets assertion_id
     *
     * @param ?string $assertion_id A unique identifier of the authentication event executed by the client application.
     *
     * @return $this
     */
    public function setAssertionId($assertion_id)
    {
        $this->container['assertion_id'] = $assertion_id;

        return $this;
    }

    /**
     * Gets authentication_instant
     *
     * @return ?string
     */
    public function getAuthenticationInstant()
    {
        return $this->container['authentication_instant'];
    }

    /**
     * Sets authentication_instant
     *
     * @param ?string $authentication_instant A sender generated value that indicates the date/time that the signer was authenticated.
     *
     * @return $this
     */
    public function setAuthenticationInstant($authentication_instant)
    {
        $this->container['authentication_instant'] = $authentication_instant;

        return $this;
    }

    /**
     * Gets authentication_method
     *
     * @return ?string
     */
    public function getAuthenticationMethod()
    {
        return $this->container['authentication_method'];
    }

    /**
     * Sets authentication_method
     *
     * @param ?string $authentication_method A sender created value that indicates the convention used to authenticate the signer. This information is included in the Certificate of Completion.
     *
     * @return $this
     */
    public function setAuthenticationMethod($authentication_method)
    {
        $this->container['authentication_method'] = $authentication_method;

        return $this;
    }

    /**
     * Gets client_ur_ls
     *
     * @return \DocuSign\eSign\Model\RecipientTokenClientURLs
     */
    public function getClientUrLs()
    {
        return $this->container['client_ur_ls'];
    }

    /**
     * Sets client_ur_ls
     *
     * @param \DocuSign\eSign\Model\RecipientTokenClientURLs $client_ur_ls client_ur_ls
     *
     * @return $this
     */
    public function setClientUrLs($client_ur_ls)
    {
        $this->container['client_ur_ls'] = $client_ur_ls;

        return $this;
    }

    /**
     * Gets client_user_id
     *
     * @return ?string
     */
    public function getClientUserId()
    {
        return $this->container['client_user_id'];
    }

    /**
     * Sets client_user_id
     *
     * @param ?string $client_user_id A sender created value that shows the recipient is embedded (captive).   Maximum length: 100 characters.
     *
     * @return $this
     */
    public function setClientUserId($client_user_id)
    {
        $this->container['client_user_id'] = $client_user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return ?string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param ?string $email Specifies the email of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets frame_ancestors
     *
     * @return ?string[]
     */
    public function getFrameAncestors()
    {
        return $this->container['frame_ancestors'];
    }

    /**
     * Sets frame_ancestors
     *
     * @param ?string[] $frame_ancestors 
     *
     * @return $this
     */
    public function setFrameAncestors($frame_ancestors)
    {
        $this->container['frame_ancestors'] = $frame_ancestors;

        return $this;
    }

    /**
     * Gets message_origins
     *
     * @return ?string[]
     */
    public function getMessageOrigins()
    {
        return $this->container['message_origins'];
    }

    /**
     * Sets message_origins
     *
     * @param ?string[] $message_origins 
     *
     * @return $this
     */
    public function setMessageOrigins($message_origins)
    {
        $this->container['message_origins'] = $message_origins;

        return $this;
    }

    /**
     * Gets ping_frequency
     *
     * @return ?string
     */
    public function getPingFrequency()
    {
        return $this->container['ping_frequency'];
    }

    /**
     * Sets ping_frequency
     *
     * @param ?string $ping_frequency Only used if pingUrl is specified. This is the interval, in seconds, between pings on the pingUrl.  The default is 300 seconds. Valid values are 60-1200 seconds.
     *
     * @return $this
     */
    public function setPingFrequency($ping_frequency)
    {
        $this->container['ping_frequency'] = $ping_frequency;

        return $this;
    }

    /**
     * Gets ping_url
     *
     * @return ?string
     */
    public function getPingUrl()
    {
        return $this->container['ping_url'];
    }

    /**
     * Sets ping_url
     *
     * @param ?string $ping_url A client Url to be pinged by the DocuSign Signing experience to indicate to the client that Signing is active. An HTTP Get is executed against the client. The response from the client is ignored. The intent is for the client to reset it's session timer when the request is received.
     *
     * @return $this
     */
    public function setPingUrl($ping_url)
    {
        $this->container['ping_url'] = $ping_url;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return ?string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param ?string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     *
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return ?string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param ?string $return_url The url the recipient is redirected to after the signing session has ended. DocuSign redirects to the url and includes an event parameter that can be used by your application. Possible event parameter values:   * cancel (recipient canceled the signing operation) * decline (recipient declined to sign) * exception (an exception occurred) * fax_pending (recipient has a fax pending) * session_timeout (session timed out) * signing_complete (signer completed the signing ceremony) * ttl_expired (the TTL, time to live, timer expired) * viewing_complete (recipient completed viewing the envelope)  ###### Note: Include https:// in the URL or the redirect might not succeed on some browsers.
     *
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets security_domain
     *
     * @return ?string
     */
    public function getSecurityDomain()
    {
        return $this->container['security_domain'];
    }

    /**
     * Sets security_domain
     *
     * @param ?string $security_domain The domain in which the user authenticated.
     *
     * @return $this
     */
    public function setSecurityDomain($security_domain)
    {
        $this->container['security_domain'] = $security_domain;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return ?string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param ?string $user_id Specifies the user ID of the recipient. You can use with user ID or email and user name to identify the recipient. If user ID is used and a client user ID is provided, the value in the `userId` property must match a recipient ID (which can be retrieved with a GET recipients call) for the envelope. If a user ID is used and a clientUser ID is not provided, the user ID match the user ID of the authenticating user.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return ?string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param ?string $user_name Specifies the username of the recipient. You can use either email and userName or userId to identify the recipient.
     *
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets x_frame_options
     *
     * @return ?string
     */
    public function getXFrameOptions()
    {
        return $this->container['x_frame_options'];
    }

    /**
     * Sets x_frame_options
     *
     * @param ?string $x_frame_options 
     *
     * @return $this
     */
    public function setXFrameOptions($x_frame_options)
    {
        $this->container['x_frame_options'] = $x_frame_options;

        return $this;
    }

    /**
     * Gets x_frame_options_allow_from_url
     *
     * @return ?string
     */
    public function getXFrameOptionsAllowFromUrl()
    {
        return $this->container['x_frame_options_allow_from_url'];
    }

    /**
     * Sets x_frame_options_allow_from_url
     *
     * @param ?string $x_frame_options_allow_from_url 
     *
     * @return $this
     */
    public function setXFrameOptionsAllowFromUrl($x_frame_options_allow_from_url)
    {
        $this->container['x_frame_options_allow_from_url'] = $x_frame_options_allow_from_url;

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

