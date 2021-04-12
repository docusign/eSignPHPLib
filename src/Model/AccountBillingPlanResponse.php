<?php
/**
 * AccountBillingPlanResponse
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
 * AccountBillingPlanResponse Class Doc Comment
 *
 * @category    Class
 * @description Defines an account billing plan response object.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountBillingPlanResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'accountBillingPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\DocuSign\eSign\Model\AccountAddress',
        'billing_address_is_credit_card_address' => '?string',
        'billing_plan' => '\DocuSign\eSign\Model\AccountBillingPlan',
        'credit_card_information' => '\DocuSign\eSign\Model\CreditCardInformation',
        'direct_debit_processor_information' => '\DocuSign\eSign\Model\DirectDebitProcessorInformation',
        'downgrade_plan_information' => '\DocuSign\eSign\Model\DowngradePlanUpdateResponse',
        'payment_method' => '?string',
        'payment_processor_information' => '\DocuSign\eSign\Model\PaymentProcessorInformation',
        'referral_information' => '\DocuSign\eSign\Model\ReferralInformation',
        'successor_plans' => '\DocuSign\eSign\Model\BillingPlan[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'billing_address_is_credit_card_address' => null,
        'billing_plan' => null,
        'credit_card_information' => null,
        'direct_debit_processor_information' => null,
        'downgrade_plan_information' => null,
        'payment_method' => null,
        'payment_processor_information' => null,
        'referral_information' => null,
        'successor_plans' => null
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
        'billing_address' => 'billingAddress',
        'billing_address_is_credit_card_address' => 'billingAddressIsCreditCardAddress',
        'billing_plan' => 'billingPlan',
        'credit_card_information' => 'creditCardInformation',
        'direct_debit_processor_information' => 'directDebitProcessorInformation',
        'downgrade_plan_information' => 'downgradePlanInformation',
        'payment_method' => 'paymentMethod',
        'payment_processor_information' => 'paymentProcessorInformation',
        'referral_information' => 'referralInformation',
        'successor_plans' => 'successorPlans'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'billing_address_is_credit_card_address' => 'setBillingAddressIsCreditCardAddress',
        'billing_plan' => 'setBillingPlan',
        'credit_card_information' => 'setCreditCardInformation',
        'direct_debit_processor_information' => 'setDirectDebitProcessorInformation',
        'downgrade_plan_information' => 'setDowngradePlanInformation',
        'payment_method' => 'setPaymentMethod',
        'payment_processor_information' => 'setPaymentProcessorInformation',
        'referral_information' => 'setReferralInformation',
        'successor_plans' => 'setSuccessorPlans'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'billing_address_is_credit_card_address' => 'getBillingAddressIsCreditCardAddress',
        'billing_plan' => 'getBillingPlan',
        'credit_card_information' => 'getCreditCardInformation',
        'direct_debit_processor_information' => 'getDirectDebitProcessorInformation',
        'downgrade_plan_information' => 'getDowngradePlanInformation',
        'payment_method' => 'getPaymentMethod',
        'payment_processor_information' => 'getPaymentProcessorInformation',
        'referral_information' => 'getReferralInformation',
        'successor_plans' => 'getSuccessorPlans'
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
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['billing_address_is_credit_card_address'] = isset($data['billing_address_is_credit_card_address']) ? $data['billing_address_is_credit_card_address'] : null;
        $this->container['billing_plan'] = isset($data['billing_plan']) ? $data['billing_plan'] : null;
        $this->container['credit_card_information'] = isset($data['credit_card_information']) ? $data['credit_card_information'] : null;
        $this->container['direct_debit_processor_information'] = isset($data['direct_debit_processor_information']) ? $data['direct_debit_processor_information'] : null;
        $this->container['downgrade_plan_information'] = isset($data['downgrade_plan_information']) ? $data['downgrade_plan_information'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_processor_information'] = isset($data['payment_processor_information']) ? $data['payment_processor_information'] : null;
        $this->container['referral_information'] = isset($data['referral_information']) ? $data['referral_information'] : null;
        $this->container['successor_plans'] = isset($data['successor_plans']) ? $data['successor_plans'] : null;
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
     * Gets billing_address
     *
     * @return \DocuSign\eSign\Model\AccountAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \DocuSign\eSign\Model\AccountAddress $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets billing_address_is_credit_card_address
     *
     * @return ?string
     */
    public function getBillingAddressIsCreditCardAddress()
    {
        return $this->container['billing_address_is_credit_card_address'];
    }

    /**
     * Sets billing_address_is_credit_card_address
     *
     * @param ?string $billing_address_is_credit_card_address When set to **true**, the credit card address information is the same as that returned as the billing address. If false, then the billing address is considered a billing contact address, and the credit card address can be different.
     *
     * @return $this
     */
    public function setBillingAddressIsCreditCardAddress($billing_address_is_credit_card_address)
    {
        $this->container['billing_address_is_credit_card_address'] = $billing_address_is_credit_card_address;

        return $this;
    }

    /**
     * Gets billing_plan
     *
     * @return \DocuSign\eSign\Model\AccountBillingPlan
     */
    public function getBillingPlan()
    {
        return $this->container['billing_plan'];
    }

    /**
     * Sets billing_plan
     *
     * @param \DocuSign\eSign\Model\AccountBillingPlan $billing_plan billing_plan
     *
     * @return $this
     */
    public function setBillingPlan($billing_plan)
    {
        $this->container['billing_plan'] = $billing_plan;

        return $this;
    }

    /**
     * Gets credit_card_information
     *
     * @return \DocuSign\eSign\Model\CreditCardInformation
     */
    public function getCreditCardInformation()
    {
        return $this->container['credit_card_information'];
    }

    /**
     * Sets credit_card_information
     *
     * @param \DocuSign\eSign\Model\CreditCardInformation $credit_card_information credit_card_information
     *
     * @return $this
     */
    public function setCreditCardInformation($credit_card_information)
    {
        $this->container['credit_card_information'] = $credit_card_information;

        return $this;
    }

    /**
     * Gets direct_debit_processor_information
     *
     * @return \DocuSign\eSign\Model\DirectDebitProcessorInformation
     */
    public function getDirectDebitProcessorInformation()
    {
        return $this->container['direct_debit_processor_information'];
    }

    /**
     * Sets direct_debit_processor_information
     *
     * @param \DocuSign\eSign\Model\DirectDebitProcessorInformation $direct_debit_processor_information direct_debit_processor_information
     *
     * @return $this
     */
    public function setDirectDebitProcessorInformation($direct_debit_processor_information)
    {
        $this->container['direct_debit_processor_information'] = $direct_debit_processor_information;

        return $this;
    }

    /**
     * Gets downgrade_plan_information
     *
     * @return \DocuSign\eSign\Model\DowngradePlanUpdateResponse
     */
    public function getDowngradePlanInformation()
    {
        return $this->container['downgrade_plan_information'];
    }

    /**
     * Sets downgrade_plan_information
     *
     * @param \DocuSign\eSign\Model\DowngradePlanUpdateResponse $downgrade_plan_information downgrade_plan_information
     *
     * @return $this
     */
    public function setDowngradePlanInformation($downgrade_plan_information)
    {
        $this->container['downgrade_plan_information'] = $downgrade_plan_information;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return ?string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param ?string $payment_method 
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_processor_information
     *
     * @return \DocuSign\eSign\Model\PaymentProcessorInformation
     */
    public function getPaymentProcessorInformation()
    {
        return $this->container['payment_processor_information'];
    }

    /**
     * Sets payment_processor_information
     *
     * @param \DocuSign\eSign\Model\PaymentProcessorInformation $payment_processor_information payment_processor_information
     *
     * @return $this
     */
    public function setPaymentProcessorInformation($payment_processor_information)
    {
        $this->container['payment_processor_information'] = $payment_processor_information;

        return $this;
    }

    /**
     * Gets referral_information
     *
     * @return \DocuSign\eSign\Model\ReferralInformation
     */
    public function getReferralInformation()
    {
        return $this->container['referral_information'];
    }

    /**
     * Sets referral_information
     *
     * @param \DocuSign\eSign\Model\ReferralInformation $referral_information referral_information
     *
     * @return $this
     */
    public function setReferralInformation($referral_information)
    {
        $this->container['referral_information'] = $referral_information;

        return $this;
    }

    /**
     * Gets successor_plans
     *
     * @return \DocuSign\eSign\Model\BillingPlan[]
     */
    public function getSuccessorPlans()
    {
        return $this->container['successor_plans'];
    }

    /**
     * Sets successor_plans
     *
     * @param \DocuSign\eSign\Model\BillingPlan[] $successor_plans 
     *
     * @return $this
     */
    public function setSuccessorPlans($successor_plans)
    {
        $this->container['successor_plans'] = $successor_plans;

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

