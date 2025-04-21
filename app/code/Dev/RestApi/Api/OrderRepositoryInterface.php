<?php

namespace Dev\RestApi\Api;

interface OrderRepositoryInterface
{
    /**
     * Set descriptions for the products.
     *
     * @param \Dev\RestApi\Api\RequestItemInterface[] $products
     * @return void
     */
    public function createOrder(array $orderInfor);
}
