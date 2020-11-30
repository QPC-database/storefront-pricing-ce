<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PricingStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductPrice interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface ProductPriceInterface
{
    /**
     * Autogenerated description for getEntityId() interface method
     *
     * @return string
     */
    public function getEntityId(): string;

    /**
     * Autogenerated description for setEntityId() interface method
     *
     * @param string $value
     * @return void
     */
    public function setEntityId(string $value): void;

    /**
     * Autogenerated description for getMinimumPrice() interface method
     *
     * @return \Magento\PricingStorefrontApi\Api\Data\PriceInterface|null
     */
    public function getMinimumPrice(): ?\Magento\PricingStorefrontApi\Api\Data\PriceInterface;

    /**
     * Autogenerated description for setMinimumPrice() interface method
     *
     * @param \Magento\PricingStorefrontApi\Api\Data\PriceInterface $value
     * @return void
     */
    public function setMinimumPrice(\Magento\PricingStorefrontApi\Api\Data\PriceInterface $value): void;

    /**
     * Autogenerated description for getMaximumPrice() interface method
     *
     * @return \Magento\PricingStorefrontApi\Api\Data\PriceInterface|null
     */
    public function getMaximumPrice(): ?\Magento\PricingStorefrontApi\Api\Data\PriceInterface;

    /**
     * Autogenerated description for setMaximumPrice() interface method
     *
     * @param \Magento\PricingStorefrontApi\Api\Data\PriceInterface $value
     * @return void
     */
    public function setMaximumPrice(\Magento\PricingStorefrontApi\Api\Data\PriceInterface $value): void;

    /**
     * Autogenerated description for getQty() interface method
     *
     * @return float
     */
    public function getQty(): float;

    /**
     * Autogenerated description for setQty() interface method
     *
     * @param float $value
     * @return void
     */
    public function setQty(float $value): void;
}
