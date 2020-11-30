<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.pricingStorefrontApi.proto.PriceBookCreateResponse</code>
 */
class PriceBookCreateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.PriceBook price_book = 1;</code>
     */
    protected $price_book = null;
    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Status status = 2;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Magento\PricingStorefrontApi\Proto\PriceBook $price_book
     *     @type \Magento\PricingStorefrontApi\Proto\Status $status
     * }
     */
    public function __construct($data = null)
    {
        \Magento\PricingStorefrontApi\Metadata\Prices::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.PriceBook price_book = 1;</code>
     * @return \Magento\PricingStorefrontApi\Proto\PriceBook
     */
    public function getPriceBook()
    {
        return $this->price_book;
    }

    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.PriceBook price_book = 1;</code>
     * @param \Magento\PricingStorefrontApi\Proto\PriceBook $var
     * @return $this
     */
    public function setPriceBook($var)
    {
        GPBUtil::checkMessage($var, \Magento\PricingStorefrontApi\Proto\PriceBook::class);
        $this->price_book = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Status status = 2;</code>
     * @return \Magento\PricingStorefrontApi\Proto\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.magento.pricingStorefrontApi.proto.Status status = 2;</code>
     * @param \Magento\PricingStorefrontApi\Proto\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Magento\PricingStorefrontApi\Proto\Status::class);
        $this->status = $var;

        return $this;
    }
}
