<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of scopes that represent price dimension of the final price
 * Implementation notice: to support existing Magento use-cases price-book stored in a "flat" way as intersection between different scopes, e.g. "website{1}-customer_group{2}" or "website{1}"
 *
 * Generated from protobuf message <code>magento.pricingStorefrontApi.proto.Scope</code>
 */
class Scope extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string website = 1;</code>
     */
    private $website;
    /**
     * Generated from protobuf field <code>repeated string customer_group = 2;</code>
     */
    private $customer_group;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $website
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $customer_group
     * }
     */
    public function __construct($data = null)
    {
        \Magento\PricingStorefrontApi\Metadata\Prices::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string website = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Generated from protobuf field <code>repeated string website = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWebsite($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->website = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string customer_group = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomerGroup()
    {
        return $this->customer_group;
    }

    /**
     * Generated from protobuf field <code>repeated string customer_group = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomerGroup($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->customer_group = $arr;

        return $this;
    }
}
