<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: prices.proto

namespace Magento\PricingStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.pricingStorefrontApi.proto.AssignPricesRequest</code>
 */
class AssignPricesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .magento.pricingStorefrontApi.proto.ProductPrice prices = 1;</code>
     */
    private $prices;
    /**
     * Generated from protobuf field <code>string price_book_id = 2;</code>
     */
    protected $price_book_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Magento\PricingStorefrontApi\Proto\ProductPrice[]|\Google\Protobuf\Internal\RepeatedField $prices
     *     @type string $price_book_id
     * }
     */
    public function __construct($data = null)
    {
        \Magento\PricingStorefrontApi\Metadata\Prices::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .magento.pricingStorefrontApi.proto.ProductPrice prices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.pricingStorefrontApi.proto.ProductPrice prices = 1;</code>
     * @param \Magento\PricingStorefrontApi\Proto\ProductPrice[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\PricingStorefrontApi\Proto\ProductPrice::class);
        $this->prices = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string price_book_id = 2;</code>
     * @return string
     */
    public function getPriceBookId()
    {
        return $this->price_book_id;
    }

    /**
     * Generated from protobuf field <code>string price_book_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceBookId($var)
    {
        GPBUtil::checkString($var, true);
        $this->price_book_id = $var;

        return $this;
    }
}
