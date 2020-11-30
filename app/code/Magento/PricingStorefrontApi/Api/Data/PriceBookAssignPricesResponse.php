<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PricingStorefrontApi\Api\Data;

/**
 * Autogenerated description for PriceBookAssignPricesResponse class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class PriceBookAssignPricesResponse implements PriceBookAssignPricesResponseInterface
{

    /**
     * @var \Magento\PricingStorefrontApi\Api\Data\StatusInterface
     */
    private $status;
    
    /**
     * @inheritdoc
     *
     * @return \Magento\PricingStorefrontApi\Api\Data\StatusInterface|null
     */
    public function getStatus(): ?\Magento\PricingStorefrontApi\Api\Data\StatusInterface
    {
        return $this->status;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\PricingStorefrontApi\Api\Data\StatusInterface $value
     * @return void
     */
    public function setStatus(\Magento\PricingStorefrontApi\Api\Data\StatusInterface $value): void
    {
        $this->status = $value;
    }
}
